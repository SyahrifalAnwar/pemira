<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Base';
$route['404_override'] = '';
$route['daftar_kpr'] = 'Secure/daftar_kpr';
$route['daftar_kpr/(:any)'] = 'Secure/daftar_kpr/$1';
$route['translate_uri_dashes'] = FALSE;
