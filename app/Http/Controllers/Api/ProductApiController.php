<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;

use App\Http\Controllers\Api\BaseApiController;

class ProductApiController extends BaseApiController {
    public function index($category = '') {
        $children = getChildrenIds($category);
        if (empty($children)) {
            return new ProductCollection(Product::select(['id', 'category_id', 'title', 'image'])->where('category_id', $category)->paginate());
        } else {
            $category_id = $children;
            return new ProductCollection(Product::select(['id', 'category_id', 'title', 'image'])->whereIn('category_id', $children)->paginate());
        }  
    }

    public function show($id) {
        return new ProductResource(Product::find($id));
    }
}
?>