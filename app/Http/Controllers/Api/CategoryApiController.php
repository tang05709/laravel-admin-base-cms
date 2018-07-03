<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CategoryCollection;

use App\Http\Controllers\Api\BaseApiController;

class CategoryApiController extends BaseApiController {
   public function tree() {
      $categories = Category::orderBy('order')->orderBy('id')->get();

      $tree = getCategoryTree($categories);
      $res['data'] = $tree;
      return $res;
   }

   public function show($id) {
     return new CategoryResource(Category::find($id));
   }

   public function children($id) {
     $children = Category::select(['id', 'title', 'parent_id', 'module'])->where('parent_id', $id)->orderBy('order')->orderBy('id')->get();
     return new CategoryCollection($children);
   }
}
?>