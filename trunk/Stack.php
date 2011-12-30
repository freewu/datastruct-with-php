<?php
/**
 *  栈 (stack)
 *
 *  限定仅在表尾进行插入或删除操作的线性表 
 *  表尾端其特殊含义 称为栈顶(top),表头端称为栈底(bottom),不含元素的空表称为空栈 
 *  又称为"后进先出"(last in first out)的线性表 (LIFO)
 *
 */
class Stack
{
    private $_top = null;
    private $_data = null;

    // 操作结果: 构造一个空栈($_data)
    public function init()
    {
        $this->_top = -1;
        $this->_data = array();
    }

    // 初始条件: 栈($_data)已存在
    // 操作结果: 栈($_data)被销毁
    public function destroy()
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        $this->_top = null;
        $this->_data = null;
    }

    // 初始条件: 栈($_data)已存在
    // 操作结果: 栈($_data)被清为一个空栈
    public function clear()
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        $this->_top = -1;
        $this->_data = array();
    }

    // 初始条件: 栈($_data)已存在
    // 操作结果: 返回栈($_data)的元素个数
    public function length()
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        return count($this->_data);
    }

    // 初始条件: 栈($_data)已存在
    // 操作结果: 若栈($_data)为空栈,则返回true 否则返回 false
    public function isEmpty()
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        return empty($this->_data);
    }

    // 初始条件: 栈($_data)已存在且非空
    // 操作结果: 返回栈($_data)的顶元素
    public function getTop()
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        if($this->isEmpty()) throw new Exception("stack is empty");

        return $this->_data[$this->_top];
    }

    // 初始条件: 栈($_data)已存在
    // 操作结果: 插入元素($value)为新的顶元素
    public function push($value)
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        // $this->_top++;
        // array_push($this->_data,$value);

        $this->_data[++$this->_top] = $value;
    }

    // 初始条件: 栈($_data)已存在且非空
    // 操作结果: 删除栈($_data)顶元素,返回其值
    public function pop()
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        if($this->isEmpty()) throw new Exception("stack is empty");

        // $this->_top--;
        // return array_pop($this->_data);

        $value =  $this->_data[$this->_top];
        unset($this->_data[$this->_top--]);
        return $value;
    }

    // 初始条件: 栈($_data)已存在且非空
    // 操作结果: 从栈底到栈底依次对栈($_data)的每个元素调用方法($func) 一旦$func方法调用失败,则操作失败
    public function traverse($func)
    {
        if(is_null($this->_data)) throw new Exception("stack not initialize");
        if($this->isEmpty()) throw new Exception("stack is empty");

        foreach($this->_data as $row)
        {
            call_user_func($func,$row);
        }
    }

}// end class Stack


// 实例
$objStack = new Stack();
// echo $objStack->length(); // 栈还未初始化的会抛出异常

$objStack->init(); // 初始化
echo $objStack->length(),"<br/>";

// $objStack->pop(); // 栈为空会抛出异常
// $objStack->getTop(); // 栈为空会抛出异常


// 压栈
$objStack->push(20);
$objStack->push(40);
$objStack->push(60);
$objStack->push(80);
$objStack->push(100);


// Traverse
function test($row)
{
    echo $row,"<br/>";
}
$objStack->traverse('test');


while(!$objStack->isEmpty())
{
    echo $objStack->pop(),"<br/>";
}