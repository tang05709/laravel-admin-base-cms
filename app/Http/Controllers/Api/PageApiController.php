<?php

namespace App\Http\Controllers\Api;

use App\Models\Page;
use App\Http\Resources\PageResource;

use App\Http\Controllers\Api\BaseApiController;

class PageApiController extends BaseApiController {
    public function index($category) {
        // 是否有子栏目
        $children = getChildrenIds($category);
        if (empty($children)) {
            $category_id = $category;
        } else {
            $category_id = $children[0];
        }
        return new PageResource(Page::where('category_id', $category_id)->first());
    }
}
?>