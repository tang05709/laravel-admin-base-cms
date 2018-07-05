<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use Illuminate\Http\Request;

class UploadApiController extends BaseApiController {
    
    public function upimage(Request $request) {
      $files = $request->file("wangpic");
      $res = ['errno' => 1, 'errmsg' => '上传图片错误'];
      $data = [];
      foreach($files as $key => $file) {
        $ext = strtolower($file->extension());
        $exts = ['jpg', 'png', 'gif', 'jpeg'];
        if(!in_array($ext, $exts)) {
          $res = ['errno' => 1, 'errmsg' => '请上传正确的图片类型，支持jpg, png, gif, jpeg类型'];
          return json_encode($res);
        } else {
          $filename = time() . str_random(6) . "." . $ext;
          $filepath = 'uploads/images/' . date('Ym') . '/';
          if (!file_exists($filepath)) {
            @mkdir($filepath);
          }
          $savepath = config('app.url') . '/' . $filepath . $filename;
          if ($file->move($filepath, $filename)) {
            $data[] = $savepath;
          }
        }
      }
      $res = ['errno' => 0, 'data' => $data];
      return json_encode($res);
    }
}
?>