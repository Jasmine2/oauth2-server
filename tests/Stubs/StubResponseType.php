<?php

namespace LeagueTests\Stubs;

use League\OAuth2\Server\Entities\Interfaces\AccessTokenEntityInterface;
use League\OAuth2\Server\Entities\Interfaces\RefreshTokenEntityInterface;
use League\OAuth2\Server\ResponseTypes\AbstractResponseType;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;

class StubResponseType extends AbstractResponseType
{
    public function __construct() {}

    public function getAccessToken()
    {
        return $this->accessToken;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param \League\OAuth2\Server\Entities\Interfaces\AccessTokenEntityInterface $accessToken
     */
    public function setAccessToken(AccessTokenEntityInterface $accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @param \League\OAuth2\Server\Entities\Interfaces\RefreshTokenEntityInterface $refreshToken
     */
    public function setRefreshToken(RefreshTokenEntityInterface $refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @param ServerRequestInterface $request
     *
     * @return ServerRequestInterface
     */
    public function determineAccessTokenInHeader(ServerRequestInterface $request)
    {
        // TODO: Implement determineAccessTokenInHeader() method.
    }

    /**
     * @param ResponseInterface $response
     *
     * @return ResponseInterface
     */
    public function generateHttpResponse(ResponseInterface $response)
    {
        return new Response();
    }
}