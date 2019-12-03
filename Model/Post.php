<?php
namespace Alevel\Api\Model;

/**
 * Class Post
 * @package Alevel\SimpleModule\Model
 */
class Post extends \Magento\Framework\Model\AbstractModel
{
    /**
     *
     */
    protected function _construct()
    {
        $this->_init('Alevel\Api\Model\ResourceModel\Post');
    }
}