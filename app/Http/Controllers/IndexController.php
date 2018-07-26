<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct() {

    }

    public function index() {
        return view('index.index');
    }

    public function articles() {
       return view('article.index');
    }

    public function article() {
        
    }

    public function products() {
        return view('product.index');
    }

    public function product() {
        
    }

    public function cases() {
        return view('case.index');
    }

    public function case() {
        
    }

    public function jobs() {

    }

    public function job() {
        
    }

    public function page() {
        return view('page.show');
    }
}

?>