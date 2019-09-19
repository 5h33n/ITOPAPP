<?php

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

//MAIN
//Route::get('/', 'main\mainController@index')->name('main');

Route::get('admin','Auth\LoginController@admin')->name('admin');

//LOGIN
Route::get('/', 'Auth\LoginController@showLoginForm')->name('home');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('loginA','Auth\LoginController@loginA')->name('loginA');
Route::get('logout','Auth\LoginController@logout')->name('logout');

Route::post('guardar-cliente','Auth\RegisterController@register')->name('guardar-cliente');

Route::get('producto/{id}','productosController@index');
Route::get('index', 'adminController@index')->middleware('auth');
Route::get('carrito', 'clienteController@index')->name('carrito')->middleware('auth');
Route::get('paga1','clienteController@pagar1')->name('paga1');
Route::get('paga2/{id}','clienteController@pagar2')->name('paga2');
Route::post('enviarcorreo','clienteController@enviarcorreo')->name('enviarcorreo');

//RUTAS DE ADMIN
Route::get('mipape/info','papeleriaController@info')->name('mipape')->middleware('auth');
Route::get('mipape/designWeb','papeleriaController@designWeb')->name('designWeb')->middleware('auth');
Route::get('mipape/designApp','papeleriaController@designApp')->name('designApp')->middleware('auth');
Route::get('mipape/categorias','papeleriaController@categorias')->name('categorias')->middleware('auth');
Route::get('mipape/editCategorias','papeleriaController@editCategorias')->name('editCategorias')->middleware('auth');
Route::get('mipape/inventario','papeleriaController@inventario')->name('inventario')->middleware('auth');
Route::get('mipape/ventas','papeleriaController@ventas')->name('ventas')->middleware('auth');
Route::get('mipape/compras','papeleriaController@compras')->name('compras')->middleware('auth');
Route::get('mipape/index','papeleriaController@index')->name('adminindex')->middleware('auth');
Route::post('guardarConfig','papeleriaController@guardarConfig')->name('guardarConfig');
Route::post('sendMail','clienteController@sendMail')->name('sendMail');
Route::post('saveLogo','papeleriaController@saveLogo')->name('saveLogo');
Route::get('getSubcat/{id}','papeleriaController@getSubcat')->name('getSubcat');
Route::get('hasChildren/{id}','papeleriaController@hasChildren')->name('hasChildren');

//RUTAS CLIENTE
Route::get('n_elementos_carrito/{id}','carritoController@getNElementosCarrito')->name('n_elementos_carrito/{id}');
Route::post('addCarrito','productosController@addCarrito')->name('addCarrito');
Route::get('infoProducto/{n}','productosController@infoProducto')->name('infoProducto');
Route::get('decrementar/{id}','productosController@decrementar')->name('decrementar/{id}');
Route::get('incrementar/{id}','productosController@incrementar')->name('incrementar/{id}');
Route::get('monedero','clienteController@monedero')->name('monedero');

Route::get('get-me', 'TelegramController@getMe')->name('get-me');
Route::get('getupdates', 'TelegramController@getUpdates')->name('getupdates');
Route::get('send', 'TelegramController@sendMessage')->name('send');
Route::get('productos-disponibles', 'TelegramController@sendProductos')->name('productos-disponibles');
Route::get('ventas-hoy', 'TelegramController@sendVentas')->name('ventas-hoy');
Route::get('send', 'TelegramController@sendMessage')->name('send');
Route::get('/updated-activity', 'TelegramController@updatedActivity');