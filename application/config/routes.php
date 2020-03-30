<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'pages';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

$route['signin']				= 'pages/signin';
$route['signout']				= 'core/signout';
$route['pesan/sukses']			= 'pages/sukses';
$route['pesan/(:any)']			= 'pages/pesan/$1';
$route['tentang']				= 'pages/tentang';
$route['design']				= 'pages/design';
$route['design/(:any)']			= 'pages/design/$1';
$route['design/details/(:any)']	= 'pages/design/details/$1';
$route['kategori/(:any)']		= 'pages/kategori/$1';