<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route = array(

    // Add Your Routes here
    'default_controller'      => 'Authentication', // Homepage
    'login'                   => 'Authentication/Login', // login

    // Default 
    '404_override'            => '', // If not page not found, will apear 404 page.
    'translate_uri_dashes'    => FALSE, 
 );
