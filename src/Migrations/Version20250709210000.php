<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Migration to populate default values for new Decision entity fields
 */
final class Version20250709210000 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Populate default values for entityId, status, and lastUpdated fields in existing Decision records';
    }

    public function up(Schema $schema): void
    {
        // Generate UUIDs and update existing records
        $this->addSql("
            UPDATE decision 
            SET 
                entity_id = UUID(),
                status = 'pending',
                last_updated = NOW()
            WHERE entity_id IS NULL
        ");
    }

    public function down(Schema $schema): void
    {
        // Revert the changes
        $this->addSql("
            UPDATE decision 
            SET 
                entity_id = NULL,
                status = NULL,
                last_updated = NULL
            WHERE status = 'pending'
        ");
    }
}