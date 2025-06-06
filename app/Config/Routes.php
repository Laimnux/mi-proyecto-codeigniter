<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
// el promer nombre es la el nombre url, productos es el nombre del controlador y show es el nombre de la funcion
$routes->get('/Detalles', 'Productos::show');
//ruta de empleados
$routes->get('/empleados','Empleados::index');
//ruta para bsdatos
$routes->get('/empleados/nuevo','Empleados::crear');
//hay otras formas de trabajar con rutas-se le puede enviar parámetros
// se usa el get porque necesitamos la url por eso se pone get
/*

*/
$routes->get('/compra/(:num)','productos::show2/$1');
$routes->get('/compras/(:alpha)/(:num)','Productos::cat/$sopaDePollo/$2');
$routes->get('/empleados/crear','Empleados::crear');
$routes->get('/empleados/guardar','Empleados::guardar'); //envia los datos del forn a la base
$routes->get('/empleados/editar/(:num)','Empleados::acualizar/$1');
$routes->get('/empleados/eliminar/(:num)','Empleados::elimiar/$1');


?>