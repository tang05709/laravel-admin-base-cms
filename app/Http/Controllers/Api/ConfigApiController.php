<?php

namespace App\Http\Controllers\Api;

use App\Models\Config;
use App\Http\Resources\ConfigCollection;

use App\Http\Controllers\Api\BaseApiController;

class ConfigApiController extends BaseApiController {
   public function config() {
     $config = Config::all(['name', 'value']);
     $config_new = [];
     foreach($config as $key => $val) {
        $config_new[$val['name']] = $val['value'];
     }
     $result['data'] = $config_new;
     return $result;
   }
}
?>