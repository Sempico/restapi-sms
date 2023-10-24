<?php 

namespace Sempico\RestApi;

class Sms 
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
     * Send sms
     * @param array $config
     * @return mixed
     */
    public function send(array $config)
    {
        $route = 'v1/send';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Get info about sms
     * @param array $config
     * @return mixed
     */
    public function getInfo(array $config)
    {
        $route = 'v1/sms-full-data';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Make refactoring of sms
     * @param array $config
     * @return mixed
     */
    public function refactoring(array $config)
    {
        $route = 'v1/replacement';

        return $this->client->curlRequest($route, 'POST', $config);
    }
}