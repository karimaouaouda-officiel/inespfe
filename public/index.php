<?php
include __DIR__."/../vendor/autoload.php";




use App\System\Application as myApp;
use App\Models\User;

$app = new myApp($_SERVER);

/*foreach($_SERVER as $info => $val){
    echo $info . "====> ". $val."<br>";
}*/



print_r($app->get_response());





?>