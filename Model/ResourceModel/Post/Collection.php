<?php
namespace Alevel\Api\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Alevel\Api\Model\Post', 'Alevel\Api\Model\ResourceModel\Post');
    }

}