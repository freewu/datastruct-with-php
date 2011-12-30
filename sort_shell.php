<?php
/**
 * 希尔排序 shell sort
 * 
 *  D.L希尔（ D.L.Shell ）提出的“缩小增量”的排序方法。它的作法不是每次一个元素挨一个元素的比较。而是初期选用大跨步（增量较大）间隔比较，使记录跳跃式接近它的排序位置；然后增量缩小；最后增量为 1 ，这样记录移动次数大大减少，提高了排序效率。
 */
function sort_shell($list)
{
    $len = count($list);
    if(empty($len)) return $list;

    $k = intval($len/2); // 增量值
    while($k >= 1) // 当增量变化到0时,循环结束
    {
        for($i = $k + 1; $i < $len; $i++)
        {
            $temp = $list[$i];
            $j = $i - $k;

            while(($j>=0) && ($list[$j] > $temp) )
            {
                $list[$j + $k] = $list[$j];
                $j = $j - $k;
                $list[$j + $k] = $temp;
            }
        }
        $k = intval($k/2);
    }

    return $list;
}

$list = array(4,3,2,1,5,7,3,7);
$list = sort_shell($list);
echo implode(",",$list);