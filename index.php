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
        "password"=>"1234",
    ));

//    $res = $client->get('media')->create(array(
////        'archivo' => '/home/dvelop/Desktop/Work/TwoStepReviews/arriendo-o-venta_bogota_1_1547230742.jpg',
//        'url' => 'https://st2.depositphotos.com/1003591/8519/i/950/depositphotos_85198032-stock-photo-two-cute-girls-at-street.jpg',
//        'id_inmueble' => 4307,
//        'espacio_fisico' => 61,
//        'migrar_s3' => 1
//    ));

//    $res = $client->get('media')->creates3(array(
//        'archivo' => '/home/dvelop/Desktop/Work/TwoStepReviews/arriendo-o-venta_bogota_1_1547230742.jpg',
////        'url' => 'http://imparcialoaxaca.mx/wp-content/uploads/2018/02/masterhakcs_google_recibe_multa_union_europea.jpg',
//    ));
//
//    $res = $client->get('inmueble')->cambiarestado(706953, array(
//        'activo' => 'activo',
//        'id_user_cliente' => 1
//    ));

//    $res = $client->get('inmueble')->show(707168, array(
//        'show_duplicated' => 1,
//    ));

    //    $res = $client->get('inmueble')->show(707168, array(
//        'show_duplicated' => 1,
//    ));

    $res = $client->get('dashboard')->getDashBoard();

    dump($res);die();

} catch (Exception $ex){

    dump($ex);
    die();

}
