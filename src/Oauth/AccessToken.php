<?php
namespace Kristenlk\Marketo\Oauth;

// use Kristenlk\OAuth2\Client\Token\AccessToken;

class AccessToken implements AccessTokenInterface
{
    private $accessToken;

    private $expiresIn;

    private $lastRefresh;

    public function __construct(
        string $accessToken,
        int $expiresIn,
        int $lastRefresh = null
    ) {
        $this->accessToken = $accessToken;
        $this->expiresIn = $expiresIn;
        $this->lastRefresh = $lastRefresh ?? time(); // Set this to an integer
    }

    public function getToken():string
    {
        return $this->accessToken;
    }

    public function setToken(string $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function getExpiresIn():int
    {
        return $this->expiresIn;
    }

    public function getLastRefresh():int
    {
        return $this->lastRefresh;
    }
}