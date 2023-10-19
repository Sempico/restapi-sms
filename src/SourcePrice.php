<?php 

namespace Sempico\Api;

class SourcePrice 
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
     * Get all source prices
     * @param array $config
     * @return array
     */
    public function getAll(array $config)
    {
        $route = 'v1/source-price/view-all';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Update source price
     * @param int $id
     * @param array $config
     * @return array
     */
    public function update(int $id, array $config)
    {
        $route = 'v1/source-price/update?id='. $id;

        return $this->client->curlRequest($route, 'PUT', $config);
    }

    /**
     * Create source price
     * @param array $config
     * @return array
     */
    public function create(array $config)
    {
        $route = 'v1/source-price/create';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Delete source price
     * @param int $id
     * @return array
     */
    public function delete(int $id)
    {
        $route = 'v1/source-price/delete?='.$id;

        return $this->client->curlRequest($route, 'DELETE', []);
    }
}