<?php 

namespace Sempico\Api;

class Statistic 
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
     * Quick search
     * @param array $config
     * @return array
     */
    public function quickSearch(array $config)
    {
        $route = 'v1/statistic/quick';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Sms full data
     * @param array $config
     * @return array
     */
    public function smsFullData(array $config)
    {
        $route = 'v1/statistic/sms-full-data';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * General search
     * @param array $config
     * @return array
     */
    public function general(array $config)
    {
        $route = 'v1/statistic/general';

        return $this->client->curlRequest($route, 'POST', $config);
    }
}