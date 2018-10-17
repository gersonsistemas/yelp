<?php

$API_HOST = "https://api.yelp.com";
$SEARCH_PATH = "/v3/businesses/search";
$BUSINESS_PATH = "/v3/businesses/"; 
$REVIEWS_PATH = "/reviews?locale=";
$LOCALE = "/reviews?locale=*";
$SEARCH_LIMIT = 50;
#$OFFSET = 900;

//funcion call API YELP
function request($host, $path, $url_params = array()) {
    // Send Yelp API Call
    try {
        $curl = curl_init();
        if (FALSE === $curl)
            throw new Exception('Failed to initialize');
        $url = $host . $path . "?" . http_build_query($url_params);
        #var_dump($url);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,  // Capture response.
            CURLOPT_ENCODING => "",  // Accept gzip/deflate/whatever.
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer " . "API-KEY",
                "cache-control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        if (FALSE === $response)
            throw new Exception(curl_error($curl), curl_errno($curl));
        $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if (200 != $http_status)
            throw new Exception($response, $http_status);
        curl_close($curl);
    } catch(Exception $e) {
        
        $message= $e->getCode() . $e->getMessage(); 
        echo"$message";
        /* Destruye la solicitud - Puede que un cron se detenga de forma brusca impidiendo seguir ejecutandose
        trigger_error(sprintf(
            'Curl failed with error #%d: %s',
            $e->getCode(), $e->getMessage()),
            E_USER_ERROR);
            
        */
    }
    return $response;
}

//Busca empresas por latitud y longitud en un radio determinado
function search_ll($latitude, $longitude, $radius){

    $url_params = array();
    $url_params['latitude'] = $latitude;
    $url_params['longitude'] = $longitude;
    $url_params['radius'] = $radius;
    $url_params['limit'] = $GLOBALS['SEARCH_LIMIT'];
    $url_params['offset'] = $GLOBALS['OFFSET'];
    

    return request($GLOBALS['API_HOST'], $GLOBALS['SEARCH_PATH'], $url_params);
}

//recibe business_id para hacer busqueda de una empresa
function get_business($business_id) {

    $business_path = $GLOBALS['BUSINESS_PATH'] . urlencode($business_id);
    return request($GLOBALS['API_HOST'], $business_path);
}


function query_api_ll($latitude , $longitude, $radius, $id_city, $connect) {     

    //Decodifica el json que se obtiene de la busqueda de empresas por latitud y longitud en radio determinado usando la funcion search_ll 
    $response = json_decode(search_ll($latitude, $longitude, $radius));
    

    #echo"Business query $latitude , $longitude ";
    #echo count($response->businesses);
    #echo"<br><br>";

    //Guarda detalle de todas las empresas obtenidas en el llamado de la varible $response
    for ($i = 0; $i <= (count($response->businesses)-1); $i++) {

        $business_id = $response->businesses[$i]->id;

        //Decodifica el json de la busqueda de cada epresa mediante la funcion get_business
        $info=json_decode(get_business($business_id));

        $id_api=$connect->real_escape_string($info->id);
        $name=$connect->real_escape_string($info->name);
        $phone=$connect->real_escape_string($info->phone);
        $url=$connect->real_escape_string($info->url);

        $address=$connect->real_escape_string($info->location->address1);
        $address_city=$connect->real_escape_string($info->location->city);
        $address_country=$connect->real_escape_string($info->location->country);
        $address_zip=$connect->real_escape_string($info->location->zip_code);
        $address_state=$connect->real_escape_string($info->location->state);

        $rating=$connect->real_escape_string($info->rating);
        $price=$connect->real_escape_string($info->price);
        $categories=$connect->real_escape_string($info->categories[0]->alias);
        $transactions=$connect->real_escape_string($info->transactions);
        $latitude=$connect->real_escape_string($info->coordinates->latitude);
        $longitude=$connect->real_escape_string($info->coordinates->longitude);
        $review_count=$connect->real_escape_string($info->review_count);
        $is_claimed=$connect->real_escape_string($info->is_claimed);

        if($is_claimed == 1){$is_claimed="true";}else{$is_claimed="false";}

        #echo "$categories <br> $transactions <br> $phone <br> $url <br> $latitude <br> <br>";

        $consult_business=$connect->query("SELECT * FROM business WHERE id_api = '$id_api'");
        $info_business =  $consult_business->fetch_assoc();

        if($consult_business->num_rows == 1) {

            $update_business=$connect->query(
                "UPDATE 
                `business` SET 
                `url` = '$url',
                `address` = '$address',
                `address_city` = '$address_city',
                `address_country` = '$address_country',
                `address_zip` = '$address_zip',
                `address_state` = '$address_state',
                `rating` = '$rating',
                `review_count` = '$review_count',
                `is_claimed` = '$is_claimed'
                WHERE `business`.`id` = $info_business[id];");
        }else{

            $newbusiness="INSERT INTO `business`(`id`, `id_api`, `id_cities`, `name`, `phone`, `url`, `address`, `address_city`, `address_country`, `address_zip`, `address_state`, `rating`, `price`, `categories`, `transactions`, `latitude`, `longitude`, `review_count`, `is_claimed`)VALUES (NULL,'$id_api','$id_city','$name','$phone','$url','$address','$address_city','$address_country','$address_zip','$address_state','$rating','$price','$categories','$transactions','$latitude','$longitude','$review_count','$is_claimed');";
            $connect->query($newbusiness);
        }
    }
}


function get_business_reviews($id_api_business) {

    $business_path = $GLOBALS['BUSINESS_PATH'] . urlencode($id_api_business) . "/reviews?=locale=*";
    return request($GLOBALS['API_HOST'],$business_path);
}

function query_api_reviews($id_api_business, $id_rel_business, $connect) {     

    $response = json_decode(get_business_reviews($id_api_business));
    #echo count($response->reviews);
    echo "$id_api_business";
    
    for ($i = 0; $i <= (count($response->reviews)-1); $i++) {

        $id_api=$connect->real_escape_string($response->reviews[$i]->id);
        $rating=$connect->real_escape_string($response->reviews[$i]->rating);
        $username=$connect->real_escape_string($response->reviews[$i]->user->name);
        $userimage=$connect->real_escape_string($response->reviews[$i]->user->image_url);
        $text=$connect->real_escape_string($response->reviews[$i]->text);
        $time_created=$connect->real_escape_string($response->reviews[$i]->time_created);
        $url=$connect->real_escape_string($response->reviews[$i]->url);

        #echo"$id_api $rating $username $userimage $text $time_created $url <br><br>";

        $new="INSERT INTO `reviews`(`id`, `id_api`, `id_business`, `rating`, `username`, `userimage`, `text`,`time_created`,`url`)VALUES (NULL,'$id_api','$id_rel_business','$rating','$username','$userimage','$text','$time_created','$url');";

        if($connect->query($new) === TRUE){                
                                
        }else{
            #echo "$connect->error"; 
        }
    }
}

if($_POST['search-business']) {

    $LATITUDE = $_POST['latitude'];
    $LONGITUDE = $_POST['longitude'];
    $RADIUS = $_POST['radius'];
    $id_city = $_POST['id_city'];

    #$LATITUDE = "37.7829023";
    #$LONGITUDE = "-122.41903580000002";

    $longopts = array(
    "latitude::",
    "longitude::",
    "radius::",
    );
    
    $options = getopt("", $longopts);
    $latitude = $options['latitude'] ?: $GLOBALS['LATITUDE'];
    $longitude = $options['longitude'] ?: $GLOBALS['LONGITUDE'];
    $radius = $options['radius'] ?: $GLOBALS['RADIUS'];
    query_api_ll($latitude , $longitude, $radius, $id_city, $connect);
}

if($_POST['search-reviews']) {

    $id_api_business=$_POST['id_api'];
    $id_rel_business=$_POST['id_business'];

    query_api_reviews($id_api_business, $id_rel_business, $connect);
}
?>