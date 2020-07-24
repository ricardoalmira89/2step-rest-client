<?php

namespace TwoStepReviews\Resource;

use TwoStepReviews\AuthManager;

class Signup extends BaseResource
{

    public function __construct(AuthManager $authManager)
    {
        parent::__construct("signup", $authManager);
    }

    public function show($id, $options = [])
    {
        return null;
    }

    public function create($data = [])
    {
        return null;
    }

    public function index($options = [])
    {
        return null;
    }

    public function update($id, $data = [])
    {
        return null;
    }

    public function delete($id, $options = [])
    {
        return null;
    }

    /**
     * Creates a company + user (signup)
     * @param $data
     * @return mixed
     */
    public function signup($data){
        $options = [];
        $token = $this->authorizeRequest($options);

        if ($token) {
            $options['headers']['Content-Type'] = "application/json";
            $options['body'] = json_encode($data);

            $res = $this->client->post($this->endpoint . "/", $options);
            return json_decode($res->getBody()->getContents());
        }
    }
}