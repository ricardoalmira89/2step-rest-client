<?php

namespace TwoStepReviews\Resource;

use TwoStepReviews\AuthManager;

class User extends BaseResource
{

    public function __construct(AuthManager $authManager)
    {
        parent::__construct("users", $authManager);
    }

    public function getProfile($options = []){

        $token = $this->authorizeRequest($options);

        if ($token){
            $res = $this->client->get($this->endpoint."/profile", $options);
            return json_decode($res->getBody()->getContents());
        }

        return null;

    }

}