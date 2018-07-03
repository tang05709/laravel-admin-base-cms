<?php

namespace App\Http\Controllers\Api;

use App\Models\Article;
use App\Http\Resources\ArticleCollection;
use App\Http\Resources\ArticleResource;

use App\Http\Controllers\Api\BaseApiController;

class ArticleApiController extends BaseApiController {
 
    public function index($category = '') {
        $children = getChildrenIds($category);
        if (empty($children)) {
            return new ArticleCollection(Article::select(['id', 'category_id', 'title', 'image'])->where('category_id', $category)->paginate());
        } else {
            $category_id = $children;
            return new ArticleCollection(Article::select(['id', 'category_id', 'title', 'image'])->whereIn('category_id', $children)->paginate());
        }  
    }

    public function show($id) {
        return new ArticleResource(Article::find($id));
    }
}
?>