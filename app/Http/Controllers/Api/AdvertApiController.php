<?php

namespace App\Http\Controllers\Api;

use App\Models\Advert;
use App\Models\AdvertType;
use App\Http\Resources\AdvertCollection;

use App\Http\Controllers\Api\BaseApiController;

class AdvertApiController extends BaseApiController {
    public function index($advert_type) {
        return new AdvertCollection(Advert::select(['id', 'url', 'image'])->where('advert_type_id', $advert_type)->get());
    }
}
?>