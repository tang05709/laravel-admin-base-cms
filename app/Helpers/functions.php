<?php

function getCategoryTree($data, $parent_id = 0) {
    $tree = [];
    foreach($data as $k => $v)
    {
        if($v['parent_id'] == $parent_id)
        {        //父亲找到儿子
           // $v['children'] = getCategoryTree($data, $v['parent_id']);
          $new_v['id'] = $v['id'];
          $new_v['parent_id'] = $v['parent_id'];
          $new_v['title'] = $v['title'];
          $new_v['module'] = $v['module'];
          
          $new_v['children'] = getCategoryTree($data, $v['id']);
          $tree[] =  $new_v;
          //unset($data[$k]);
        }
    }
    return $tree;
}

// 获取子栏目
function getChildrenIds($parent_id) {
    $children = App\Models\Category::select('id')->where('parent_id', $parent_id)->orderBy('order')->orderBy('id')->get();
    $children_arr = [];
    foreach($children  as $key => $val) {
        $children_arr[] = $val['id'];
    }
    return $children_arr;
}
?>