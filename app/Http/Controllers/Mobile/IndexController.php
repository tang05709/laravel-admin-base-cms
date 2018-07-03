<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct() {

    }

    public function index() {
        
    }

    public function articles() {
       return view('mobile.article.index');
    }

    public function article() {
        
    }

    public function products() {
        return view('mobile.product.index');
    }

    public function product() {
        
    }

    public function jobs() {

    }

    public function job() {
        
    }

    public function page() {
        return view('mobile.page.show');
    }
}

?>