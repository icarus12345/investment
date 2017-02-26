<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
// $route["blogs/([0-9]{4})-([0-9]{2})"] = "blog/month/$1/$2";
// $route["blogs/([0-9]{4})-([0-9]{2})/page"] = "blog/month/$1/$2/1";
// $route["blogs/([0-9]{4})-([0-9]{2})/page/(:num)"] = "blog/month/$1/$2/$3";

// $route["blogs"] = "blog";
// $route["blogs/page"] = "blog/page/1";
// $route["blogs/page/(:num)"] = "blog/page/$1";
// $route["blogs/([a-z0-9-]{4,255})"] = "blog/route/$1";
// $route["blogs/([a-z0-9-]{4,255})/page"] = "blog/route/$1/1";
// $route["blogs/([a-z0-9-]{4,255})/page/(:num)"] = "blog/route/$1/$2";

// $route["gallery"] = "galleries/index";
// $route["gallery/(:any)"] = "galleries/detail/$1";

// $route["investing-vietnam"] = "invest/index";
// $route["investing-vietnam/(:any)"] = "invest/detail/$1";

$route["services"] = "eye/home/services";
$route["services/(:any)/(:any)"] = "eye/home/serviceDetail/$1/$2";
$route["services/(:any)"] = "eye/home/services/$1";

$route["privacy-policy"] = "home/policy";
$route["team-conditions"] = "home/teamcondition";

$route["news"] = "eye/home/news";
$route["news/page"] = "eye/home/news/1";
$route["news/page/(:num)"] = "eye/home/news/$1";
$route["news/([a-z0-9-]{4,255})"] = "eye/home/newsDetail/$1";

$route["patients"] = "eye/home/patients";
$route["patients/([a-z0-9-]{4,255})"] = "eye/home/patientDetail/$1";
$route["about"] = "eye/home/about";
$route["about/meet-the-team"] = "eye/home/meetTheTeam";
$route["about/([a-z0-9-]{4,255})"] = "eye/home/aboutDetail/$1";
$route["referrals"] = "eye/home/referrals";


$route["contact"] = "eye/home/contact";

$route['default_controller'] = "home";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */