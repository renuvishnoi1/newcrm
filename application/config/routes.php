<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
$route['default_controller'] = 'home';
$route['admin'] = 'admin/auth';
$route['404_override'] = 'my404';
$route['translate_uri_dashes'] = FALSE;
// $route['purity_miter'] = 'home/purity_miter';
// $route['test_report'] = 'home/test_report';
// $route['gallery'] = 'home/gallery';
// $route['faq'] = 'home/faq';
// $route['how_it_work'] = 'home/how_it_work';
// $route['categories'] = 'home/categories';
// $route['get_area'] = 'home/get_area';
// $route['submit_userdeatils'] = 'home/submit_userdeatils';
// $route['processMobileVerification'] = 'home/processMobileVerification';
// $route['sub_categories/(:num)'] = 'home/sub_categories/$1';
// //$route['categories(/:num)?'] = "home/categories$1";
// $route['products/(:num)'] = 'home/products/$1';
// $route['products_details/(:num)'] = 'home/products_details/$1';

// contacts route
$route['admin/clients']='admin/ContactController/index';
$route['admin/add_client'] = 'admin/ContactController/addClient';
$route['admin/add_client_data'] = 'admin/ContactController/insertClient';
$route['admin/edit_client/(:any)'] = 'admin/ContactController/editClient/$1';
$route['admin/update_client_data'] = 'admin/ContactController/updateClient';

$route['admin/all_contact'] = 'admin/ContactController/allContact';

$route['admin/edit_contact/(:any)'] = 'admin/ContactController/editContact/$1';
$route['admin/update_contact'] = 'admin/ContactController/updateContact';
$route['admin/add_contact/(:any)'] = 'admin/ContactController/addContact/$1';
$route['admin/add_contact_data'] = 'admin/ContactController/inserContact';
$route['admin/edit_contact_list/(:any)'] = 'admin/ContactController/viewContactlistById/$1';

$route['admin/delete_contact/(:num)/(:any)']='admin/ContactController/deleteContact/$1/$2';
$route['admin/delete_client/(:any)'] = 'admin/ContactController/deleteClient/$1';

$route['admin/update_client_status/(:any)'] = 'admin/ContactController/updateClientStatus/$1';

$route['admin/changestatus'] = 'admin/ContactController/changestatus';


// leads source route
$route['admin/leads/sources'] = 'admin/LeadsSourceController/index';
$route['admin/leads/add_source'] = 'admin/LeadsSourceController/add';
$route['admin/leads/insert_source'] = 'admin/LeadsSourceController/insert';
$route['admin/leads/edit_source/(:any)'] = 'admin/LeadsSourceController/edit/$1';
$route['admin/leads/update_source'] = 'admin/LeadsSourceController/update';
$route['admin/leads/delete_source/(:any)'] = 'admin/LeadsSourceController/delete/$1';

// leads statuses route
$route['admin/leads/statuses'] = 'admin/LeadsStatusController/index';
$route['admin/leads/add_status'] = 'admin/LeadsStatusController/add';
$route['admin/leads/insert_status'] = 'admin/LeadsStatusController/insert';
$route['admin/leads/edit_status/(:any)'] = 'admin/LeadsStatusController/edit/$1';
$route['admin/leads/update_status'] = 'admin/LeadsStatusController/update';
$route['admin/leads/delete_status/(:any)'] = 'admin/LeadsStatusController/delete/$1';

// leads route

$route['admin/leads'] = 'admin/LeadsController/index';
$route['admin/add_lead'] = 'admin/LeadsController/addLead';
$route['admin/save_lead'] = 'admin/LeadsController/insertLead';
$route['admin/edit_lead/(:any)'] = 'admin/LeadsController/editLead/$1';
$route['admin/update_lead'] = 'admin/LeadsController/updateLead';
