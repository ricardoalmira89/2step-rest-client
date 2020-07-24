<?php

namespace TwoStepReviews\Resource;

use TwoStepReviews\AuthManager;

class Company extends BaseResource
{

    public function __construct(AuthManager $authManager)
    {
        parent::__construct("companies", $authManager);
    }

    /**
     * Updates the max locations of a company
     *
     * @param $id
     * @param $maxLocations
     * @return mixed
     */
    public function updateMaxLocations($id, $maxLocations){
        $options = [];
        $token = $this->authorizeRequest($options);

        if ($token) {
            $options['headers']['Content-Type'] = "application/json";
            $options['body'] = json_encode(array(
                'max_locations' => $maxLocations
            ));

            $res = $this->client->put(sprintf("%s/%s/locations", $this->endpoint, $id), $options);
            return json_decode($res->getBody()->getContents());
        }
    }

}