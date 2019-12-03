<?php

namespace Alevel\Api\Api;

/**
 * Interface AlevelInterface
 * @package Alevel\Api\Api
 */
interface AlevelInterface
{
    /** Doc.
     *
     * @return string
     */
    public function getParams();

    /**
     * POST for test api
     * @param string[] $data
     * @return string
     */
    public function create($data);
}