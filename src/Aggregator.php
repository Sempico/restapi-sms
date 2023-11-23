<?php 

namespace Sempico\Api;

class Aggregator 
{
    /**
	 * Api client
	 * @var ApiClient
	 */
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    } 

    /**
     * Get all aggregators
     * @param array $config
     * @return array
     */
    public function getAll(array $config)
    {
        $route = 'v1/aggregator/view-all';

        return $this->client->curlRequest($route, 'POST', $config);
    }
}