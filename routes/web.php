<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/admin',function(){
	return view('menuAdmin');
});

Route::get('pEmpleados',function(){
	return view('empleados');
});

Route::get('pUsuarios',function(){
	return view('usuarios');
});

Route::get('pTickets',function(){
	return view('tickets');
});

Route::get('default',function(){
	return view('default');
});

Route::get('registro',function(){
	return view('registro');
});

Route::get('registrado',function(){
	return view('registro-exitoso');
});

Route::post('guardarUsuario','Clientes@crear');

Route::get('menuClientes',function(){
	return view('menuClientes');
});

Route::get('menuEmpleados',function(){
	return view('menuEmpleados');
});

