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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['404_override'] = 'errors/error_404';
$route['translate_uri_dashes'] = FALSE;
$route['pages/resources'] = 'pages/resources';
$route['pages/resource-links'] = 'pages/resourcelinks';
$route['pages/tentang-kami'] = 'pages/aboutus';
$route['pages/tentang-sekolah-sabat'] = 'pages/aboutss';
$route['pages/tentang-kurikulum-gracelink'] = 'pages/aboutgracelink';
$route['pages/ruang-lingkup-pelajaran-ss'] = 'pages/ruanglingkupss';

//SS ANAK-ANAK
$route['kelas/ss-anak-anak'] = 'kelas/ssaa';
$route['ssaa/beginner'] = 'kelas/beginner';
$route['ssaa/kindergarten'] = 'kelas/kindergarten';
$route['ssaa/primary'] = 'kelas/primary';
$route['ssaa/powerpoints'] = 'kelas/powerpoints';
//SS REMAJA
$route['kelas/ss-remaja'] = 'kelas/ssremaja';
$route['ss-remaja/realtimefaith'] = 'kelas/realtimefaith';
$route['ss-remaja/tentang-realtimefaith'] = 'kelas/aboutrealtimefaith';
$route['ss-remaja/cornerstone'] = 'kelas/cornerstone';
$route['ss-remaja/tentang-cornerstone-connections'] = 'kelas/aboutcornerstone';
//SS DEWASA
$route['kelas/ss-dewasa'] = 'kelas/ssdewasa';
$route['ss-dewasa/pedoman-pendalaman-alkitab-dewasa'] = 'kelas/pendalamanssdewasa';
$route['ss-dewasa/english-version'] = 'kelas/englishversion';
$route['ss-pemuda/inverse'] = 'kelas/inverse';

//BERITA MISSION
$route['pages/berita-misi'] = 'pages/beritamisi';
$route['berita-misi/dewasa'] = 'pages/beritamisidewasa';
$route['berita-misi/anak-anak'] = 'pages/beritamisianak';
$route['berita-misi/video'] = 'pages/videoberitamisi';
$route['berita-misi/dewasa/d2431'] = 'beritamisi/cerita1';
$route['berita-misi/dewasa/d2432'] = 'beritamisi/cerita2';
$route['berita-misi/dewasa/d2433'] = 'beritamisi/cerita3';
$route['berita-misi/dewasa/d2434'] = 'beritamisi/cerita4';
$route['berita-misi/dewasa/d2435'] = 'beritamisi/cerita5';
$route['berita-misi/dewasa/d2436'] = 'beritamisi/cerita6';
$route['berita-misi/dewasa/d2437'] = 'beritamisi/cerita7';
$route['berita-misi/dewasa/d2438'] = 'beritamisi/cerita8';
$route['berita-misi/dewasa/d2439'] = 'beritamisi/cerita9';
$route['berita-misi/dewasa/d24310'] = 'beritamisi/cerita10';
$route['berita-misi/dewasa/d24311'] = 'beritamisi/cerita11';
$route['berita-misi/dewasa/d24312'] = 'beritamisi/cerita12';
$route['berita-misi/dewasa/d24313'] = 'beritamisi/cerita13';

$route['berita-misi/anak-anak/a2431'] = 'beritamisianak/cerita1';
$route['berita-misi/anak-anak/a2432'] = 'beritamisianak/cerita2';
$route['berita-misi/anak-anak/a2433'] = 'beritamisianak/cerita3';
$route['berita-misi/anak-anak/a2434'] = 'beritamisianak/cerita4';
$route['berita-misi/anak-anak/a2435'] = 'beritamisianak/cerita5';
$route['berita-misi/anak-anak/a2436'] = 'beritamisianak/cerita6';
$route['berita-misi/anak-anak/a2437'] = 'beritamisianak/cerita7';
$route['berita-misi/anak-anak/a2438'] = 'beritamisianak/cerita8';
$route['berita-misi/anak-anak/a2439'] = 'beritamisianak/cerita9';
$route['berita-misi/anak-anak/a24310'] = 'beritamisianak/cerita10';
$route['berita-misi/anak-anak/a24311'] = 'beritamisianak/cerita11';
$route['berita-misi/anak-anak/a24312'] = 'beritamisianak/cerita12';
$route['berita-misi/anak-anak/a24313'] = 'beritamisianak/cerita13';

