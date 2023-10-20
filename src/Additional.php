<?php 

namespace Sempico\Api;

class Additional 
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
     * Get all product prices
     * @param array $config
     * @return array
     */
    public function productPrice(array $config)
    {
        $route = 'v1/product-price';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Get all client prices
     * @param array $config
     * @return array
     */
    public function accountPrice(array $config)
    {
        $route = 'v1/account-price';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Get all prices for country
     * @param array $config
     * @return array
     */
    public function countryPrice(array $config)
    {
        $route = 'v1/country-price';

        return $this->client->curlRequest($route, 'POST', $config);
    }

    /**
     * Get all countries by continent
     * @param array $config
     * @return array
     */
    public function countryByContinent(array $config)
    {
        $route = 'v1/country-by-continent';

        return $this->client->curlRequest($route, 'POST', $config);
    }
}