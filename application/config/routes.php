<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'PublicController';
$route['login'] = 'UserController/login';
$route['products'] = 'PublicController/products';
$route['product'] = 'PublicController/product';
$route['hot_news'] = 'PublicController/hot_news';
$route['activities'] = 'PublicController/activities';
$route['announcement'] = 'PublicController/announcement';
$route['other_news'] = 'PublicController/other_news';
$route['galery'] = 'PublicController/galery';
$route['about/achievements'] = 'PublicController/achievements';
$route['services/facilities'] = 'PublicController/facilities';
$route['college'] = 'PublicController/college';
$route['alumni'] = 'PublicController/alumni';
$route['search'] = 'PublicController/search';
$route['research'] = 'PublicController/research';
$route['library'] = 'LibraryController';
$route['journal'] = 'LibraryController/jurnal';
$route['skripsi'] = 'LibraryController/skripsi';
$route['library/search'] = 'LibraryController/search';
$route['library/skripsi/(:any)'] = 'LibraryController/detail/$1';
$route['library/journal/(:any)'] = 'LibraryController/detailJurnal/$1';
$route['academy/research'] = 'PublicController/research';
$route['academy/guide'] = 'PublicController/guide';
$route['academy/calendar'] = 'PublicController/calendar';
$route['post/(:any)'] = 'PublicController/postx/$1';
$route['about/(:any)'] = 'PublicController/about/$1';
$route['services/(:any)'] = 'PublicController/services/$1';
$route['seminar/(:any)'] = 'PublicController/seminar/$1';
$route['academy/(:any)'] = 'PublicController/academy/$1';
$route['create_account'] = 'UserController/create_account';
$route['login-process'] = 'UserController/loginProcess';
$route['register-process'] = 'UserController/registerProcess';
$route['activator/(:num)/(:any)'] = "UserController/activator/$1/$2";
$route['logout'] = 'UserController/logout';
$route['change-password'] = 'UserController/changePassword';
$route['change-password-process'] = 'UserController/changePasswordProcess';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
