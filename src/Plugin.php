<?php

/*
 * Hidev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-config-python
 * @package   hidev-config-python
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hiqdev\hidev\config\python;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@hiqdev/hidev/config/python/config.yml',
        ],
        'views' => [
            '@hiqdev/hidev/config/python/views',
        ],
    ];
}
