<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['api/(:any)'] = 'api/$1';
$route['backend/(:any)'] = 'backend/$1';
