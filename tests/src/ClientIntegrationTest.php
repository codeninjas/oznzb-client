<?php

namespace Codeninjas\API\NZB\OznzbTest;

use Codeninjas\API\NZB\Oznzb\Client;
use Codeninjas\API\NZB\OznzbTest\Transport\RecorderTransport;

class ClientIntegrationTest extends Base\TestBase
{
    /** @var  RecorderTransport */
    protected $transport;
    /** @var  Client */
    protected $client;

    public function testSearch()
    {
        $this->client->search('linux');
    }

    protected function setUp()
    {
        $guzzleTransport = $this->setupGuzzleTransport();

        $this->transport = new RecorderTransport($guzzleTransport);
        $this->client = new Client($this->transport);
    }
}
