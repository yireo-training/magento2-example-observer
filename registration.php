<?php
/**
 * TestObserver module for Magento
 *
 * @package     Yireo_TestObserver
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2016 Yireo (https://www.yireo.com/)
 * @license     OSL
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Yireo_TestObserver',
    __DIR__
);
