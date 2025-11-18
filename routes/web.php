<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController; 

use App\Http\Controllers\TemplateController; #access to TemplateController from app folder http


#removed func welcome laravel

route::get('/', [TemplateController::class, 'index']); #homepage, index?

route::get('/register', [AuthController::class, 'showRegister'])->name('register.form'); #REGISTER
route::post('/register', [AuthController::class, 'performRegister'])->name('register');

route::get('/login', [AuthController::class, 'showLogin'])->name('login.form'); #LOGIN
route::post('/login', [AuthController::class, 'performLogin'])->name('login');

route::post('/logout', function (){
    #to be discussed
});