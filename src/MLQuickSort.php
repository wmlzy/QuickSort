<?php

/**
 * Name 快速排序
 * Created by WML
 * Created on 2021/12/24
 * Class QuickSort
 */
namespace MLQuickSort;
class MLQuickSort{
    /**
     * Name 小值变大值
     * Created by WML
     * Created on 2021/12/24
     * @param array $old
     * @param array $new
     * @param array $arr
     * @return array
     */
    static function minToMax($old=[],$new=[],$arr=[])
    {
        $keep = [];
        foreach ($arr as $value){
            if($value['id'] == $old['id']){
                $keep[] = ['id' => $value['id'],'order' => $new['order']];
            }
            if(($value['order'] <= $new['order']) && ($value['order']) >= $old['order']){
                if($value['id'] == $old['id']) continue;
                $new_order = $value['order'] - 1;
                $keep[] = ['id' => $value['id'],'order' => $new_order];
            }else{
                $keep[] = $value;
            }
        }
        return $keep;
    }

    //大值变小值
    static function maxToMin($old=[],$new=[],$arr=[])
    {
        $keep = [];
        foreach ($arr as $value){
            if($value['id'] == $old['id']){
                $keep[] = ['id' => $value['id'],'order' => $new['order']];
            }
            if(($value['order'] >= $new['order']) && ($value['order']) <= $old['order']){
                if($value['id'] == $old['id']) continue;
                $new_order = $value['order'] + 1;
                $keep[] = ['id' => $value['id'],'order' => $new_order];
            }else{
                $keep[] = $value;
            }
        }
        return $keep;
    }
}

//$arr = [
//    ['id' => 1,'order' => 1],
//    ['id' => 2,'order' => 2],
//    ['id' => 3,'order' => 3],
//    ['id' => 4,'order' => 4],
//    ['id' => 5,'order' => 5],
//];

//return (new QuickSort)->minToMax(['id' => 1,'order' => 1],['id' => 1,'order' => 3],$arr);
//结果 :
//['id' => 1,'order' => 3]
//['id' => 2,'order' => 1]
//['id' => 3,'order' => 2]
//['id' => 4,'order' => 4]
//['id' => 5,'order' => 5]



//return (new QuickSort)->maxToMin(['id' => 4,'order' => 4],['id' => 4,'order' => 2],$arr);
//结果 :
/*array(5) {
    [0]=>
  array(2) {
        ["id"]=>
    int(1)
    ["order"]=>
    int(1)
  }
  [1]=>
  array(2) {
        ["id"]=>
    int(2)
    ["order"]=>
    int(3)
  }
  [2]=>
  array(2) {
        ["id"]=>
    int(3)
    ["order"]=>
    int(4)
  }
  [3]=>
  array(2) {
        ["id"]=>
    int(4)
    ["order"]=>
    int(2)
  }
  [4]=>
  array(2) {
        ["id"]=>
    int(5)
    ["order"]=>
    int(5)
  }
}*/
