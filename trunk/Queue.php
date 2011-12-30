<?php
/**
 *  队列(queue)
 *
 *  队列(queue)是一种"先进先出"(first in first out)的线性表(FIFO)
 *  只允许在表的一端进行插入,而在另一端删除元素
 *  允许插入的一端叫队尾(rear),允许删除的一端则称为队头(front)
 *
 */
class Queue
{
    private $_data = null;


    //操作结果: 构造一个空队列($_data)
    public function init()
    {
        $this->_data = array();
    }

    // 初始条件: 队列($_data)已存在
    // 操作结果: 队列($_data)被销毁
    public function destroy()
    {
        if(is_null($this->_data)) throw new Exception("queue not initialize");
        $this->_top = null;
        $this->_data = null;
    }

    // 初始条件: 队列($_data)已存在
    // 操作结果: 队列($_data)被清为一个空队列
    public function clear()
    {
        if(is_null($this->_data)) throw new Exception("queue not initialize");
        $this->_top = -1;
        $this->_data = array();
    }

    // 初始条件: 队列($_data)已存在
    // 操作结果: 返回队列($_data)的元素个数
    public function length()
    {
        if(is_null($this->_data)) throw new Exception("queue not initialize");
        return count($this->_data);
    }

    // 初始条件: 队列($_data)已存在且非空
    // 操作结果: 返回队列($_data)的队头元素
    public function getHead()
    {
    }

    // 初始条件: 队列($_data)已存在且非空
    // 操作结果: 插入元素($value)为队列($_data)的队尾元素
    public function insert($value)
    {
    }

    // 初始条件: 队列($_data)已存在且非空
    // 操作结果: 删除队列($_data)的队头元素,并返回
    public function remove()
    {
    }
}