<?php
namespace Alevel\Api\Model\ResourceModel;

class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('alevel_api', 'id');
    }
}