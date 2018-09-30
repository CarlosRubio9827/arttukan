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

Route::get('/', function () {
    return view('home');
});
Route::get("/home", function(){
return view ("home");
});


Route::get("/login",function(){
return view("login");

});
Route::get("/crear", function(){		
	return view("crear");
});

Route::get("/contacto", "myController@contactar");
Route::get("/galeria","myController@galeria");

Route::get("/guardarDepartamento", function(){
	return view ("guardarDepartamento");
	});

Route::get("/leer", function(){
       
       $departamentos = App\Departamento::all();

       foreach ($departamentos as $departamento) {
       	 
       	 echo "Nombre: ".$departamento->nombreDepartamento."<br>";

       }
});