<?php
/**
 * Created by PhpStorm.
 * User=> root
 * Date=> 30/11/18
 * Time=> 08=>12 AM
 */

require 'vendor/autoload.php';

use TwoStepReviews\Client;

try{

    $client = new Client(array(
        "api"  =>  "http://localhost/reviews/api/web/app_dev.php",
        "client_id"=>"1_3bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4",
        "client_secret"=>"4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k",
        "username"=>"heidy.resteasy@gmail.com",
        "password"=>"wailea911",
        "session_type" => "local"
    ));

    $res = $client->get('dashboard')->getDashBoard();

    dump($res);die();

} catch (Exception $ex){

    dump($ex);
    die();

}
