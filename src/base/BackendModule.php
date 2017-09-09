<?php
namespace bulldozer\base;

abstract class BackendModule extends Module
{
    /**
     * @return array
     */
    abstract public function getMenuItems() : array;
}