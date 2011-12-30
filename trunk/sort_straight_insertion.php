<?php
/**
 * 直接插入排序 straight insertion sort
 * 
 * 原理:当插入第i (i  1) 个对象时, 前面的V[0], V[1], …, V[i-1]已经排好序。这时, 用V[i]的排序码与V[i-1], V[i-2], …的排序码顺序进行比较, 找到插入位置即将V[i]插入, 原来位置上的对象向后顺移。
 */
function sort_straight_insertion($list)
{
    $len = count($list);
    if(empty($len)) return $list;

    for($i = 1; $i < $len; $i++)
    {
        $temp = $list[$i];
        $j = $i - 1;
        while($j>= 0 && $temp > $list[$j]) { // 从大到小
       // while($j>= 0 && $temp < $list[$j]) { // 从小到大
            $list[$j + 1] = $list[$j];
            $j--;
            echo $i,"/",($j + 1),"/",$list[$j + 1];echo "<br/>";
        }
        $list[$j + 1] = $temp;
        echo implode(",",$list),"<br/>";
        echo "--------------------------------<br/>";
    }

    return $list;
}

$list = array(4,3,2,1,5,7,3,7);
$list = sort_straight_insertion($list);