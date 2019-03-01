<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';
$route['default_controller'] = 'pages/view'; //redirect to homepage
$route['(:any)'] = 'pages/view/$1'; //can directly go to the page
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
