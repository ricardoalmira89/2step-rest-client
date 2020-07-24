<?php
/**
 * Created by PhpStorm.
 * User=> root
 * Date=> 30/11/18
 * Time=> 08=>12 AM
 */

require 'vendor/autoload.php';

use TwoStepReviews\Client;
use TwoStepReviews\Type\RoleType;

try{

    $client = new Client(array(
        "api"  =>  "http://localhost/reviews/api/web/app_dev.php",
        "client_id"=>"2_4bcbxd9e24g0gk4swg0kwgcwg4o8k8g4g888kwc44gcc0gwwk4",
        "client_secret"=>"4ok2x70rlfokc8g0wws8c8kwcokw80k44sg48goc0ok4w0so0k",
        "username"=>"heidy@resteasymarketing.com",
        "password"=>"wailea911",
        "session_type" => "local"
    ));

    //--- Se company with id=56 to maxlocations=2 ---
//    $res = $client->get('company')->updateMaxLocations(56, 2);

    //--- Create a enterprise user ----
//    $res = $client->get('user')->create(array(
//        "email" => "enterprise@somecompany.com",
//        "nombre" =>  "Mr. Enterprise",
//        "password" => "TZ886n6c<)-",
//        "phone" => "+122558798",
//        "role_id" => RoleType::ROLE_ENTERPRISE
//    ));

    //--- Signup a new client ----
    $res = $client->get('signup')->signup(array(
        "nombre" => "Mr. Enterprise",
        "email" => "enterprise@somecompany.com",
        "phone" => "789896598",
        "password" => "TZ886n6c<)-",
        "company_name" => "H&R Films",
        "twilio_number" => "31458794",
        "area_code" => "347",
        "acc_type" => 2,
        "max_locations" => 2
    ));

    dump($res);die();

} catch (Exception $ex){

    dump($ex);
    die();

}
