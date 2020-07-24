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

    /**
     * Associates a company with a enterprise user
     *
     * @param $userId
     * @param $companyId
     * @return mixed
     */
    public function associateAccount($userId, $companyId){
        $options = [];
        $token = $this->authorizeRequest($options);

        if ($token) {
            $options['headers']['Content-Type'] = "application/json";
            $options['body'] = json_encode(array(
                'company_id' => $companyId
            ));

            $res = $this->client->post(sprintf("%s/account/%s", $this->endpoint, $userId), $options);
            return json_decode($res->getBody()->getContents());
        }
    }

}