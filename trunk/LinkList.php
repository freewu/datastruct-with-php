<?php
/**
 * 链式线性表(link list)
 * 
 * 1 存在唯一的一个被称为"第一个"的数据元素
 * 2 存在唯一的一个被称为"最后一个"的数据元素
 * 3 除第一个之外,集合中的每个数据元素均只有一个前驱
 * 4 除最后一个之外,集合中的每个数据元素均只有一个后继
 */
class LNode{
    public $data;
    public $LNode;
}

class LinkList
{
    private $_sq_list = null;

    // 操作结果: 构造一个空的线性表L
    public function init()
    {
        $this->_sq_list = new SqList();
        $this->_sq_list->length = 0;
    }

    // 初始条件: 线性表L已存在
    // 操作结果: 销毁线性表L
    public function destroy()
    {
        $this->_sq_list = null;
    }

    // 初始条件: 线性表L已存在
    // 操作结果: 将L列置空表
    public function clear()
    {
        $this->_sq_list->array_elem = array();
        $this->_sq_list->length = 0;
    }

    // 初始条件: 线性表L已存在
    // 操作结果: 如果L为空表,则返回true,否则返回false
    public function isEmpty()
    {
        return $this->_sq_list->length == 0;
    }

    // 初始条件: 线性表L已存在
    // 操作结果: 返回L中数据元素个数
    public function getLength()
    {
        return $this->_sq_list->length;
    }

    // 初始条件: 线性表L已存在,0 <= $key <= getLength()
    // 操作结果: 返回L中第$key个数据元素的值
    public function getElement($key)
    {
        if($key > $this->_sq_list->length) return false;
        return $this->_sq_list->array_elem[$key];
    }

    // 初始条件: 线性表L已存在,$compare是数据元素判定的函数
    // 操作结果: 返回L中第1个与$element满足关系$compare的数据元素的位序 若这样的数据元素不存在则返回false
    public function locateElement($element,$compare)
    {

    }

    // 初始条件: 线性表L已存在
    // 操作结果: 若$element是L数据的元素且不是第一个,则返回$element的前驱,否则返回false
    public function prior($element)
    {
    }

    // 初始条件: 线性表L已存在
    // 操作结果: 若$element是L数据的元素且不是最后一个,则返回$element的后继,否则返回false
    public function next($element)
    {
    }

    // 初始条件: 线性表L已存在,0 <= $index <= getLength()
    // 操作结果: 在L中第$index个位置之前插入新的数据元素,长度加1
    public function insert($index,$value)
    {
        if($index < 0 || $index > $this->getLength()) return false;


    }

    // 初始条件: 线性表L已存在,0 <= $index <= getLength()
    // 操作结果: 删除L中第$index个数据元素,返回其值,L度减1
    public function delete($index,$value)
    {
    }

    // 初始条件: 线性表L已存在
    // 操作结果: 依次对L的每个数据元素调用函数$func,一旦$func失败,则操作失败
    public function traverse($func)
    {
    }

    // 初始条件: 已知线性表$list1,$list2中的数据元素按值非递排序
    // 操作结果: 归并$list1,$list2得到新的线性表,也按值非背叛排序
    public function merge($list1,$list2)
    {
    }
}