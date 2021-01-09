<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Base';
$route['404_override'] = '';
$route['daftar_kpr'] = 'Secure/daftar_kpr';
$route['daftar_kpr/(:any)'] = 'Secure/daftar_kpr/$1';
$route['pendaftar'] = 'Secure/pendaftar';
$route['pendaftar/(:any)'] = 'Secure/pendaftar/$1';
$route['cek_dpt'] = 'Secure/cek_dpt';
$route['cek_dpt/(:any)'] = 'Secure/cek_dpt/$1';
$route['data_dpt'] = 'Secure/data_dpt';
$route['data_dpt/(:any)'] = 'Secure/data_dpt/$1';
$route['translate_uri_dashes'] = FALSE;
