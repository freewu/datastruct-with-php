<?php
/**
 * 半折插入排序 straight binary sort
 * 
 * 原理:当直接插入排序进行到某一趟时，对于 r[i] 来讲，前边 i-1 个记录已经按关键字有序。此时不用直接插入排序的方法，而改为折半查找，找出 r[i] 应插的位置，然后插入。
 */
function sort_binary_insertion($list)
{
    $len = count($list);
    if(empty($len)) return $list;

    for($i = 1; $i < $len; $i++)
    {
        $temp = $list[$i];
        $low = 0;
        $high = $i - 1;

        while($low <= $high)
        {
            $mid = intval(($low + $high)/2);
            
            //if($temp > $list[$mid]) // 从大到小
            if($temp < $list[$mid]) // 从小到大
            {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }
        for($j = $i - 1; $j >= $mid; $j--)
        {
            $list[$j + 1] = $list[$j];
            echo implode(",",$list),"#mid=",$mid,"<br/>";
        }
        $list[$low] = $temp;
        echo implode(",",$list),"<br/>";
        echo "--------------------------------<br/>";
    }

    return $list;
}


$list = array(4,3,2,1,5,7,3,7);
$list = sort_binary_insertion($list);