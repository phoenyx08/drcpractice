<?php
/**
 * Created by PhpStorm.
 * User: phoenyx
 * Date: 2019-11-09
 * Time: 18:49
 */

namespace App\Service;

use PhoenyxStudio\Downloader\FakeDownloader as InitialFakeDownloader;


class FakeDownloader extends InitialFakeDownloader
{
    public function download(string $url) : string
    {
        return '<table><tr><td>1</td><td>2</td></tr><tr><td>3</td><td>4</td></tr></table>';
    }
}