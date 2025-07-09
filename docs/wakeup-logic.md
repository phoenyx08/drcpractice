# Wakeup Functionality Implementation

## Overview
The Wakeup functionality implements automated checking for new FIFA decisions by querying the FIFA API for each category and comparing results against existing database entries.

## Architecture

### Components

#### WakeupService (`src/Service/WakeupService.php`)
Central service handling the business logic for:
- API communication with FIFA endpoints
- Decision comparison and filtering
- Database persistence of new decisions

#### WakeupCommand (`src/Command/WakeupCommand.php`)
Console command `app:wakeup` that:
- Orchestrates the wakeup process
- Provides console output and error handling
- Follows Symfony command patterns

## Process Flow

1. **Category Iteration**: Process each category from the database
2. **API Request**: For each category, make API call using category's `filterId`
3. **Data Parsing**: Parse JSON response to extract decision data
4. **Comparison**: Compare API results against existing database entries
5. **Persistence**: Save new decisions to database
6. **Processing Order**: Sort decisions by date (newest first)

## API Integration

### Endpoint Structure
```
https://www.fifa.com/api/content?requestTags={filterId}&type=decision&limit=100&offset=0
```

### Request Parameters
- `requestTags`: Category's `filterId` value
- `type`: "decision" (fixed)
- `limit`: Maximum results per request (100)
- `offset`: Pagination offset (0 for first page)

### Response Parsing
Expected JSON structure:
```json
{
  "results": [
    {
      "title": "Decision Title",
      "date": "2024-01-15T00:00:00Z",
      "download": {
        "url": "https://example.com/decision.pdf"
      }
    }
  ]
}
```

## Database Mapping

### Decision Entity Fields
- `name`: From API `title`
- `title`: From API `title`
- `year`: Extracted from API `date`
- `month`: Extracted from API `date`
- `date`: From API `date` (DateTime object)
- `link`: From API `download.url`
- `category`: Associated category entity
- `summary`: Hardcoded as "in progress"

### Duplicate Detection
Decisions are considered duplicates if they match on:
- Title
- Link (download URL)
- Category
- Date

## Error Handling

### API Failures
- HTTP errors are caught and logged
- Individual category failures don't stop the entire process
- Service continues processing remaining categories

### Database Errors
- Transaction-based persistence
- Batch processing for efficiency
- Proper exception handling and logging

## Usage

### Command Execution
```bash
# Using Docker
docker-compose exec app php bin/console app:wakeup

# Local environment
php bin/console app:wakeup
```

### Expected Output
```
FIFA Decision Wakeup Process
============================

✅ Successfully processed 5 new decisions in 2.34 seconds
```

## Dependencies

### Required Services
- `HttpClientInterface`: For API requests
- `EntityManagerInterface`: For database operations
- `LoggerInterface`: For process logging
- `CategoryRepository`: For category data access
- `DecisionRepository`: For decision data access

### Configuration
- HTTP client automatically configured by Symfony
- Service autowiring handles dependency injection
- No additional configuration required

## Monitoring

### Logging
- Process start/completion logged
- Individual category processing logged
- API errors logged with context
- New decision counts logged

### Performance
- Execution time tracking
- Memory-efficient batch processing
- API rate limiting consideration

## Future Enhancements

1. **Pagination Support**: Handle large result sets
2. **Incremental Updates**: Track last check timestamp
3. **Parallel Processing**: Concurrent category processing
4. **Rate Limiting**: Respect API quotas
5. **Retry Logic**: Handle temporary API failures
6. **Configuration**: Make API endpoints configurable

## Testing

### Manual Testing
1. Run initial data command: `php bin/console app:init`
2. Execute wakeup command: `php bin/console app:wakeup`
3. Verify new decisions in database
4. Check logs for process details

### Integration Points
- Test with actual FIFA API endpoints
- Verify database schema compatibility
- Confirm category `filterId` values are correct
- Validate decision data mapping