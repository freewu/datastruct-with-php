<?php
/**
 *  三元组 Triplet
 *
 */
class Triplet
{
    private $_data = null;

    // 初始化三元组
    public function init($val1,$val2,$val3)
    {
        $this->_data[0] = $val1;
        $this->_data[1] = $val2;
        $this->_data[2] = $val3;
        return true;
    }

    // 销毁三元组
    public function destroy()
    {
        unset($this->_data);
        return true;
    }

    // 返回第$key的值
    public function get($key)
    {
        if($key < 1 || $key > 3) return false;
        return $this->_data[$key - 1];
    }

    // 设置第$key元的值为$val
    public function put($key,$val)
    {
        if($key < 1 || $key > 3) return false;
        $this->_data[$key - 1] = $val;
        return true;
    }

    // 是否按升序排序
    public function isAscending()
    {
        return ($this->_data[0] <= $this->_data[1]) && ($this->_data[1] <= $this->_data[2]);
    }

    // 是否按降序排序
    public function isDescending()
    {
        return ($this->_data[0] >= $this->_data[1]) && ($this->_data[1] >= $this->_data[2]);
    }

    // 获取最大值
    public function max()
    {
        return ($this->_data[0] >= $this->_data[1])? ($this->_data[0] >= $this->_data[2])? $this->_data[0] : $this->_data[2] : ($this->_data[1] >= $this->_data[2])? $this->_data[1] : $this->_data[2];
    }

    // 获取最小值
    public function min()
    {
        return ($this->_data[0] <= $this->_data[1])? ($this->_data[0] <= $this->_data[2])? $this->_data[0] : $this->_data[2] : ($this->_data[1] <= $this->_data[2])? $this->_data[1] : $this->_data[2];
    }
}

// 
$objTriplet = new Triplet();
echo "init:";var_dump($objTriplet->init(1,2,3)); echo "<br/>";

echo "get 1:";var_dump($objTriplet->get(1)); echo "<br/>";
echo "get 4:";var_dump($objTriplet->get(4)); echo "<br/>"; // false
echo "put 3,4:";var_dump($objTriplet->put(3,4)); echo "<br/>";

echo "max:";var_dump($objTriplet->max()); echo "<br/>";
echo "min:";var_dump($objTriplet->min()); echo "<br/>";

echo "isAscending:";var_dump($objTriplet->isAscending()); echo "<br/>";
echo "isDescending:";var_dump($objTriplet->isDescending()); echo "<br/>";
?>