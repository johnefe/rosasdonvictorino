<?php
use Illuminate\Support\Facades\Input;
use App\Occasion;


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
Route::get('/','PrincipalController@index');
Route::get('realizarArreglo/','PrincipalController@realizarArreglo');

Route::get('arreglos/{filtro}/{id}','PrincipalController@filtro');
Route::get('arreglos','PrincipalController@arreglos');

//Route::get('categoriaSeleccionada/{id}','PrincipalController@categoriaSeleccionada');
Route::get('arregloSeleccionado/{id}','PrincipalController@arregloSeleccionado');
/*-----login----------*/
Route::get('login/','PrincipalController@login');
Route::get('contacto/','PrincipalController@contacto');
//Route::get('cuentaUsuario/','PrincipalController@cuentaUsuario');
Route::get('ayuda/','PrincipalController@ayuda');
Route::get('politicas/','PrincipalController@politicas');
Route::get('arbolesMemorales/','PrincipalController@arbolesMemorales');
Route::get('conocenos/','PrincipalController@conocenos');
Route::get('puntosFloristeria/','PrincipalController@puntosFloristeria');
Route::get('resumenCompra/',['middleware' =>'auth','uses'=>'PrincipalController@resumenCompra']);
Route::get('finalizarCompra/','PrincipalController@finalizarCompra');
Route::get('blog/','PrincipalController@blog');

Route::get('ventas/','PrincipalController@ventas');

/*-------------------*/
Route::resource('admin/categorias','CategoryController');
Route::resource('admin/points','PointController');
Route::resource('admin/productos','ProductController');
Route::resource('admin/precios','PriceController');
Route::resource('admin/clientes','ClientController');
Route::resource('admin/datos','DataController');
Route::resource('admin/ocasiones','OccasionController');
//Route::resource('admin/productosOcasiones','ProductOccasionController');
Route::resource('admin/articulos','ArticleController');
Route::resource('admin/multimedia','VideoController');
Route::resource('admin/sliders','SliderController');
Route::resource('admin/destacados','PopularProductController');
Route::resource('admin/mas_vendidos','BestSellerProductController');
Route::resource('mail','MailController');

Route::get('admin/carritos', ['as'=> 'carritos','uses' =>'CartController@index']);
Route::put('cart/{id}', ['as'=> 'cart.update','uses' =>'CartController@update']);
Route::post('cart', ['as'=> 'cart','uses' =>'CartController@store']);

/*Route::get('/', function () {
    //return view('welcome');
});*/


//Auth::routes();
Route::post('/registro','Auth\RegisterController@register');
Route::post('/login','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout');


Route::get('/home', 'HomeController@index');
Route::get('/cuentaUsuario', 'CuentaController@index');


Route::get('/dropdown/{id}', 'PrincipalController@dropdown');
Route::get('/productos', 'PrincipalController@productos');
Route::post('/carroVS', 'PrincipalController@cartVS');
Route::get('/carroVS', 'PrincipalController@getCartVS');
Route::post('/dataCart', ['as'=> 'dataCart','uses' =>'PrincipalController@dataCart']);
Route::post('/ocasionproducto', 'ProductOccasionController@guardar');

Route::get('/dataCart', 'PrincipalController@getDataCart');


Route::get('/admin/login', 'AuthAdminController@showLogin');
Route::post('/admin/login','AuthAdminController@login');
Route::get('/admin','PrincipalController@admin');

