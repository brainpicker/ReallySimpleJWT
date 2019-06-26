<?php

namespace ReallySimpleJWT;

/**
 * Value object for the generated JSON Web Token, takes the token and
 * the secret.
 *
 * @author Rob Waller <rdwaller1984@googlemail.com>
 */
class Jwt
{
    /**
     * The JSON Web Token string
     *
     * @var string $token
     */
    private $token;

    /**
    * The secret used to create the JWT signature
    *
    * @var string $secret
    */
    private $secret;

    /**
     * JWT Constructor
     *
     * @param string $token
     * @param string $secret
     */
    public function __construct($token, $secret)
    {
        $this->token = $token;

        $this->secret = $secret;
    }

    /**
     * Return the JSON Web Token String
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Return the secret used to encode the JWT signature
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }
}
