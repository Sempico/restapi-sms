<?php 

namespace Sempico\Api;

class NumbersGroup 
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
     * Get all groups
     * @param array $config
     * @return array
     */
    public function getAll(array $config)
    {
        $route = 'v1/group';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Create group
     * @param array $config
     * @return array
     */
    public function create(array $config)
    {
        $route = 'v1/group-create';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Delete groups
     * @param array $config
     * @return array
     */
    public function delete(array $config)
    {
        $route = 'v1/group-delete';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Add number in group
     * @param array $config
     * @return array
     */
    public function addNumber(array $config)
    {
        $route = 'v1/group-number-add';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Search number in groups
     * @param array $config
     * @return array
     */
    public function searchNumber(array $config)
    {
        $route = 'v1/group-number-search';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Delete number from group
     * @param array $config
     * @return array
     */
    public function deleteNumber(array $config)
    {
        $route = 'v1/group-number-delete';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Send bulk
     * @param array $config
     * @return array
     */
    public function sendBulk(array $config)
    {
        $route = 'v1/send-bulk';

        return $this->client->curlRequest($route, 'POST', $config);
    }
}