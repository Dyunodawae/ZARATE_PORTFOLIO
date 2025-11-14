<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController; #access to TemplateController from app folder http

#removed func welcome laravel

route::get('/', [TemplateController::class, 'index']); #homepage, index?
