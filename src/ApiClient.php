<?php 

namespace Sempico\RestApi;

class ApiClient 
{
    /**
	 * api token
	 * @var string
	 */
    private string $token;

    /**
	 * domain
	 * @var string
	 */
    private string $domain = 'https://restapi.sempico.solutions/';

    public function __construct(string $token)
    {
        $this->token = $token;
    } 

    /**
	 * Get api token
	 * @return string
	 */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
	 * Get api domain
	 * @return string
	 */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * Make curl request
     * @param string $url
     * @param array $data
     * @param string|bool $customMethod
     * @return array
     */
    public function curlRequest(string $url, string|bool $customMethod, array $data): array
    {
        $output = [];
        $ch = curl_init();

        // Header
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'x-access-token: '. $this->token
        ]);

        // Url
        curl_setopt($ch, CURLOPT_URL, $this->domain . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // Define method and body of request
        if ($customMethod) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $customMethod);
        } 

        $output['result'] = curl_exec($ch);
        $output['http_code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $output['error'] = curl_error($ch);
        curl_close($ch);
        
        return $this->handleError($output);
    }

    /**
     * Handle result for errors
     * @param array $data
     * @return mixed
     */
    protected function handleError(array $data): mixed
    {
        if (!strlen($data['error'])) {
            $data['result'] = json_decode($data['result']);
            if (isset($data['result']->error_code) && strlen($data['result']->error_code)) {
                $data['error'] = $data['result']->error;
            }
        }

        return json_encode($data);
    }

    /**
     * Get info about account
     * @param array $config
     * @return array
     */
    public function getInfoAboutMe()
    {
        $route = 'v1/me';

        return $this->curlRequest($route, false, []);
    }
}