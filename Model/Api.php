<?php

namespace Alevel\Api\Model;

use Alevel\Api\Model\PostFactory;

class Api implements \Alevel\Api\Api\AlevelInterface
{
    /**
     * @var \Alevel\Api\Model\PostFactory
     */
    private $postFactory;

    /**
     * Api constructor.
     *
     * @param \Alevel\Api\Model\PostFactory $pageFactory
     */
    public function __construct(
        PostFactory $postFactory
    ) {
        $this->postFactory = $postFactory;
    }

    /**
     * @return string
     */
    public function getParams()
    {
        $result = 'api';

        return $result;
    }

    /**
     * @param string[] $data
     *
     * @return string
     */
    public function create($data)
    {
        $model = $this->postFactory->create();
        $model->setData($data);
        $model->save();

        $result = 'saved';

        return $result;
    }
}