<?php 

namespace Sempico\Api;

class BlackList 
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
     * Add numbers in black list
     * @param array $config
     * @return array
     */
    public function add(array $config)
    {
        $route = 'v1/black-list-add';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Search numbers in black list
     * @param array $config
     * @return array
     */
    public function search(array $config)
    {
        $route = 'v1/black-list-search';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Delete numbers from black list
     * @param array $config
     * @return array
     */
    public function delete(array $config)
    {
        $route = 'v1/black-list-delete';

        return $this->client->curlRequest($route, 'POST', $config);
    }
}