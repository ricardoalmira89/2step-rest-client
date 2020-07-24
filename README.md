TwoStepReviews / Rest Client
===========================

License
===========================
This library is released under the [MIT license](LICENSE).

Instalation
===========================
    composer require two-step-reviews/rest-client:v1.0.7

Usage
===========================
    <?php
    
    require_once 'vendor/autoload.php';
    
    use TwoStepReviews\Client;
    use TwoStepReviews\Type\RoleType;
    
    $parameters = array(
        'api' => "http://api.2stepreviews.com",
        'client_id' => "your client id",
        'client_secret' => "your client secret",
        'username' => "your username",
        'password' => "your password"
    );
    
    $client = new Client($parameters);
    
    ?>

Get a review list
===========================
    $response = $client->get('review')->index();

Updates the maxLocations 
===========================
> Updates the maxLocations property to a given company (company_id = 56, max_locations = 2)

    $response = $client->get('company')->updateMaxLocations(56, 2);

Creates a enterprise user 
===========================
    $response = $client->get('user')->create(array(
        "email" => "enterprise@somecompany.com",
        "nombre" =>  "Mr. Enterprise",
        "password" => "TZ886n6c<)-",
        "phone" => "+122558798",
        "role_id" => RoleType::ROLE_ENTERPRISE
    ));

Signs up a new client
===========================

    $response = $client->get('signup')->signup(array(
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


Asociates a enterprise user to a company
===========================
> user_id=547 with the company_id=54

    $res = $client->get('user')->associateAccount(547, 54);
