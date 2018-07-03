<?php

namespace App\Http\Controllers\Api;

use App\Models\Job;
use App\Http\Resources\JobCollection;
use App\Http\Resources\JobResource;

use App\Http\Controllers\Api\BaseApiController;

class JobApiController extends BaseApiController {
    public function index() {
        return new JobCollection(Job::select(['id', 'category_id', 'title', 'image'])->paginate());
    }

    public function show($id) {
        return new JobResource(Job::find($id));
    }
}
?>