<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');

// });


// Route::get('profile/' , [App\Http\Controllers\ProfilesController::class , 'index'])->name('main');
// Route::get('profile/create/' , [App\Http\Controllers\ProfilesController::class , 'create'])->name('create');
// Route::get('profile/edit/{id}' , [App\Http\Controllers\ProfilesController::class , 'edit'])->name('edit');
// Route::post('profile/store/' , [App\Http\Controllers\ProfilesController::class , 'store'])->name('store');
// Route::get('profile/show/{id}' , [App\Http\Controllers\ProfilesController::class , 'show'])->name('show');
// Route::post('profile/update/{id}' , [App\Http\Controllers\ProfilesController::class , 'update'])->name('update');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



#######################################################################  الصفحة الرئيسية ##########################################################/
Route::get('/home', [App\Http\Controllers\HomeController::class, 'Rtl'])->name('home');
####################################################################### نهاية الصفحة الرئيسية ##########################################################/


####################################################################  الاعدادات العامة ##########################################################/
Route::get('/sittings', [App\Http\Controllers\dashboard\sittingController::class, 'getDataSittings'])->name('sittings');
Route::post('/setter', [App\Http\Controllers\dashboard\sittingController::class, 'setSittings'])->name('setSittings');
#######################################################################  نهاية الاعدادات العامة ##########################################################/




####################################################################  الاعلانات  ##########################################################/
Route::post('/setAdd', [App\Http\Controllers\dashboard\setAddsController::class, 'setAdd'])->name('setAdd');
Route::get('/AddControl', [App\Http\Controllers\dashboard\setAddsController::class, 'AddControl'])->name('AddControl');
####################################################################  انهاية الاعلانات ##########################################################/


####################################################################  صفحات الثابتة  ##########################################################/
Route::get('/home/pages/all', [App\Http\Controllers\dashboard\PinnedPagesController::class, 'index'])->name('main.pages');
Route::get('/home/create/page/', [App\Http\Controllers\dashboard\PinnedPagesController::class, 'create'])->name('createPage');
Route::post('/home/store/page/', [App\Http\Controllers\dashboard\PinnedPagesController::class, 'store'])->name('create.store');
Route::get('/home/edit/page/{id}', [App\Http\Controllers\dashboard\PinnedPagesController::class, 'edit'])->name('edit');
Route::post('/home/update/page/{id}', [App\Http\Controllers\dashboard\PinnedPagesController::class, 'update'])->name('update');
Route::get('/home/delete/page/{id}', [App\Http\Controllers\dashboard\PinnedPagesController::class, 'destroy'])->name('delete');
#################################################################### نهاية صفحات الثابتة  ##########################################################/


####################################################################  التصنيفات  ##########################################################/

Route::get('categories' ,  [App\Http\Controllers\dashboard\CategoryController::class, 'index'])->name('categories.main');
Route::get('categories/all/{count_id}' ,  [App\Http\Controllers\dashboard\CategoryController::class, 'getCategorWithCountry'])->name('getCateCount');
Route::get('categories/create' , [App\Http\Controllers\dashboard\CategoryController::class, 'create'])->name('categories.create');
Route::match(['get', 'post'],'categories/store', [App\Http\Controllers\dashboard\CategoryController::class , 'store'])->name('categories.store');
Route::get('categories/edit/{id}' , [App\Http\Controllers\dashboard\CategoryController::class, 'edit'])->name('categories.edit');
Route::match(['post' , 'put'],'categories/update/{id}' , [App\Http\Controllers\dashboard\CategoryController::class, 'update'])->name('categories.update');
Route::match(['get' , 'delete'],'categories/destroy/{id}', [App\Http\Controllers\dashboard\CategoryController::class, 'destroy'])->name('categories.destroy');
Route::post('supcate/', [App\Http\Controllers\dashboard\CategoryController::class , 'supCate'])->name('supcate');
Route::post('getcat/', [App\Http\Controllers\dashboard\CategoryController::class , 'getCate'])->name('getcate');
// Route::post('filter/', [App\Http\Controllers\dashboard\CategoryController::class , 'filterCategory'])->name('filtercte');


// Route::get('categ', [App\Http\Controllers\dashboard\CategoryController::class , 'getCateg']);
// Route::get('subcateg', [App\Http\Controllers\dashboard\CategoryController::class , 'getSubCateg']);


####################################################################  نهاية التصنيفات  ##########################################################/



####################################################################  الدول  ##########################################################/

Route::get('countries' ,  [App\Http\Controllers\dashboard\CountriesController::class, 'index'])->name('countries.main');
Route::get('countries/create' , [App\Http\Controllers\dashboard\CountriesController::class, 'create'])->name('countries.create');
Route::match(['get', 'post'],'countries/store', [App\Http\Controllers\dashboard\CountriesController::class , 'store'])->name('countries.store');
Route::get('countries/edit/{id}' , [App\Http\Controllers\dashboard\CountriesController::class, 'edit'])->name('countries.edit');
Route::match(['post' , 'put'],'countries/update/{id}' , [App\Http\Controllers\dashboard\CountriesController::class, 'update'])->name('countries.update');
Route::get('countries/destroy/{id}', [App\Http\Controllers\dashboard\CountriesController::class, 'destroy'])->name('countries.destroy');
#################################################################### نهاية الدول  ##########################################################/


####################################################################  الصفحات  ##########################################################/

// Route::get('pages' ,  [App\Http\Controllers\dashboard\PageController::class, 'index'])->name('pages.main');
// Route::get('pages/create' , [App\Http\Controllers\dashboard\PageController::class, 'create'])->name('pages.create');
// Route::match(['get', 'post'],'pages/store', [App\Http\Controllers\dashboard\PageController::class , 'store'])->name('pages.store');
// Route::get('pages/edit/{id}' , [App\Http\Controllers\dashboard\PageController::class, 'edit'])->name('pages.edit');
// Route::match(['post' , 'put'],'pages/update/{id}' , [App\Http\Controllers\dashboard\PageController::class, 'update'])->name('pages.update');
// Route::get('pages/show/{id}' , [App\Http\Controllers\dashboard\PageController::class, 'show'])->name('pages.show');
// Route::get('pages/destroy/{id}', [App\Http\Controllers\dashboard\PageController::class, 'destroy'])->name('pages.destroy');
// Route::post('supcate/', [App\Http\Controllers\dashboard\CategoryController::class , 'supCate'])->name('supcate');
// #################################################################### نهاية الصفحات  ##########################################################/

#################################################################### المواقع  ##########################################################/

Route::get('sites' ,  [App\Http\Controllers\dashboard\SitesController::class, 'index'])->name('sites.main');
Route::get('sites/all/{count_id}' ,  [App\Http\Controllers\dashboard\SitesController::class, 'getSitesWithCountry'])->name('getSitesCounttry');
Route::get('sites/create' , [App\Http\Controllers\dashboard\SitesController::class, 'create'])->name('sites.create');
Route::match(['get', 'post'],'sites/store', [App\Http\Controllers\dashboard\SitesController::class , 'store'])->name('sites.store');
Route::get('sites/edit/{id}' , [App\Http\Controllers\dashboard\SitesController::class, 'edit'])->name('sites.edit');
Route::match(['post' , 'put'],'sites/update/{id}' , [App\Http\Controllers\dashboard\SitesController::class, 'update'])->name('sites.update');
Route::get('sites/show/{id}' , [App\Http\Controllers\dashboard\SitesController::class, 'show'])->name('sites.show');
Route::get('sites/destroy/{id}', [App\Http\Controllers\dashboard\SitesController::class, 'destroy'])->name('sites.destroy');
Route::post('supcate/', [App\Http\Controllers\dashboard\CategoryController::class , 'supCate'])->name('supcate');


#################################################################### نهاية المواقع  ##########################################################/


#################################################################### تاغات  ##########################################################/

Route::get('tags/' ,  [App\Http\Controllers\dashboard\TagController::class, 'index'])->name('tags.main');
Route::get('tags/create' , [App\Http\Controllers\dashboard\TagController::class, 'create'])->name('tags.create');
Route::match(['get', 'post'],'tags/store', [App\Http\Controllers\dashboard\TagController::class , 'store'])->name('tags.store');
Route::get('tags/edit/{id}' , [App\Http\Controllers\dashboard\TagController::class, 'edit'])->name('tags.edit');
Route::match(['post' , 'put'],'tags/update/{id}' , [App\Http\Controllers\dashboard\TagController::class, 'update'])->name('tags.update');
Route::get('tags/destroy/{id}', [App\Http\Controllers\dashboard\TagController::class, 'destroy'])->name('tags.destroy');


#################################################################### نهاية تاغات  ##########################################################/



####################################################################  المواقع المثبة  ##########################################################/
Route::get('fixedsites' ,  [App\Http\Controllers\dashboard\FixedSitesController::class, 'index'])->name('fixedsites.main');
Route::get('fixedsites/all/{count_id}' ,  [App\Http\Controllers\dashboard\FixedSitesController::class, 'getfixedSitesWithCountry'])->name('getfixedSitesCounttry');
Route::get('fixedsites/create' , [App\Http\Controllers\dashboard\FixedSitesController::class, 'create'])->name('fixedsites.create');
Route::match(['get', 'post'],'fixedsites/store/', [App\Http\Controllers\dashboard\FixedSitesController::class , 'store'])->name('fixedsites.store');
Route::get('fixedsites/edit/{id}' , [App\Http\Controllers\dashboard\FixedSitesController::class, 'edit'])->name('fixedsites.edit');
Route::put('fixedsites/update/{id}' , [App\Http\Controllers\dashboard\FixedSitesController::class, 'update'])->name('fixedsites.update');
Route::get('fixedsites/show/{id}' , [App\Http\Controllers\dashboard\FixedSitesController::class, 'show'])->name('fixedsites.show');
Route::get('fixedsites/destroy/{id}', [App\Http\Controllers\dashboard\FixedSitesController::class, 'destroy'])->name('fixedsites.destroy');

####################################################################   نهاية المواقع المثبة   ##########################################################/
#################################################################### قائمة الانتظار لوحة تحكم  ##########################################################/

Route::get('viewSitesWaitting/' ,  [App\Http\Controllers\dashboard\SitesController::class, 'toShowSites'])->name('SitesWait');
Route::get('apply-sites/{id}' ,  [App\Http\Controllers\dashboard\SitesController::class, 'apply'])->name('applySites');

####################################################################نهاية قائمة الانتظار لوحة تحكم #########################################################

#################################################################### صفحة الموقع الرئيسية  ##########################################################/
Route::get('/page-create/' , [App\Http\Controllers\dalil\dalilController::class , 'createSites'])->name('create-sites.user');
Route::post('/store-sites' , [App\Http\Controllers\dalil\dalilController::class , 'StoreSites'])->name('store-sites.user');
Route::get('/search', [App\Http\Controllers\dalil\SearchItemsController::class , 'search'])->name('search');
Route::get('tags/{id}' , [App\Http\Controllers\dalil\dalilController::class , 'showTag'])->name('tags.sites');
Route::match(['post' , 'get'],'/' ,  [App\Http\Controllers\dalil\dalilController::class, 'HomePage'])->name('HomePage');
Route::match(['get' , 'post'],'/{href}', [App\Http\Controllers\dalil\dalilController::class, 'getReload'])->name('reload');
Route::match(['get' , 'post'] , '{addres}/{id}' , [App\Http\Controllers\dalil\dalilController::class , 'showDescr'])->name('get_descr');
Route::get('page/{href}/{country_name}' , [App\Http\Controllers\dalil\dalilController::class , 'about'])->name('about-dalil');
Route::get('{href}/{country_href}/{id}',  [App\Http\Controllers\dalil\dalilController::class, 'showSubCats'])->name('showSubCat');







#################################################################### نهاية صفحة الموقع الرئيسية  ##########################################################/

#/
