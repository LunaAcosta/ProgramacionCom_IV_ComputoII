<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController {
    public function index() {
        return view('index') -> with ('title', 'Introduccion a Laravel');
    }
}