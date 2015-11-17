<?php

/*
 * Hidev config for PHP projects
 *
 * @link      https://github.com/hiqdev/hidev-python
 * @package   hidev-python
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015, HiQDev (https://hiqdev.com/)
 */

namespace hidev\python;

class Plugin extends \hiqdev\pluginmanager\Plugin
{
    protected $_items = [
        'configFiles' => [
            '@hidev/python/config.yml',
        ],
        'views' => [
            '@hidev/python/views',
        ],
        'vcsignore' => [
            '__pycache__/'  => 'Byte-compiled / optimized / DLL files',
            '*.py[cod]'     => 'Byte-compiled / optimized / DLL files',
            '*$py.class'    => 'Byte-compiled / optimized / DLL files',
        ],
    ];
}
