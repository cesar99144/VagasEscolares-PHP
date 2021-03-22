<?php

 session_start();

 require 'vendor/autoload.php';

 define("URL_BASE", "http://localhost:8081/");
 $app = new App\Core\App();