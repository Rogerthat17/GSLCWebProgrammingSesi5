<?php

use Illuminate\Support\Facades\Route;

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

$display = [
    1 => ['course' => 'Web Programming',
          'material' => 'PHP & Laravel',
          'class' => 'LG01',
          'code' => 'COMP6681001',
          'is_new' => true],
    2 => ['course' => 'Mobile Programming',
          'material' => 'Java & Android Studio',
          'class' => 'LE01',
          'code' => 'MOBI6059001',
          'is_new' => false
],
3 => ['course' => 'Framework Layer Architecture',
          'material' => 'Basic OOP & Design Pattern',
          'class' => 'LC01',
          'code' => 'COMP6122001',
          'is_new' => false
],
4 => ['course' => 'Compilation Techniques',
          'material' => 'Syntax Analysis & Push Down Automata',
          'class' => 'LG01',
          'code' => 'COMP6062001',
          'is_new' => false
],
5 => ['course' => 'Entrepreneurship: Market Validation',
          'material' => 'Prototyping & Business Model Canvas',
          'class' => 'LH01',
          'code' => 'ENTR6511001',
          'is_new' => false
],
6 => ['course' => 'Operating Systems',
          'material' => 'Threads & Process Scheduling',
          'class' => 'LG01',
          'code' => 'COMP6697001',
          'is_new' => false
],

];

Route::get('/', function() use($display){
    return view('display.main', ['display'=> $display]);
});


