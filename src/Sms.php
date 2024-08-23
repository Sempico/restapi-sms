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
     * Send bulk SMS messages.
     *
     * This method sends bulk SMS messages to the specified recipients.
     *
     * @param array $config An associative array containing the following keys:
     * - `to`: An array of phone numbers or recipient IDs to which the SMS messages will be sent.
     * - `message`: The text message to be sent.
     * - `sender`: The sender ID or name for the SMS messages.
     *
     * @return mixed The response from the API client after sending the bulk SMS messages.
     */
    public function sendBulk(array $config)
    {
        $route = 'v1/send-bulk';

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