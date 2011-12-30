<?php
/**
 * 简单选择排序 simple selection sort
 *
 * 原理: 一次选定数组中的每一个数，记下当前位置并假设它是从当前位置开始后面数中的最小数min=i，从这个数的下一个数开始扫描直到最后一个数，并记录下最小数的位置min，扫描结束后如果min不等于i，说明假设错误，则交换min与i位置上数。 
 */
function sort_simple_selection($list)
{
    $len = count($list);
    if(empty($len)) return $list;

    for($i = 0;$i < $len; $i++)
    {
        $min = $i;
        for($j = $i + 1; $j < $len; $j++)
        {
            //if($list[$j] > $list[$min]) // 从大到小
            if($list[$j] < $list[$min]) // 从小到大
            {
                $min = $j;
                
            }
            echo implode(',',$list)."#pos=".($min + 1)." min=".$list[$min]."<br/>";
        }
        if($min != $i)
        {
            $temp = $list[$i];
            $list[$i] = $list[$min];
            $list[$min] = $temp;
        }
        echo "-------------------------<br/>";
    }
}

$list = array(4,3,2,1,5,7,3,7);
$list = sort_simple_selection($list);