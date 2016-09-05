<?php

/*
 * HiDev config for Python projects
 *
 * @link      https://github.com/hiqdev/hidev-python
 * @package   hidev-python
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@hidev/python/config/goals.yml',
            ],
            'views' => [
                '@hidev/python/views',
            ],
            'vcsignore' => [
                '__pycache__/'  => 'Byte-compiled / optimized / DLL files',
                '*.py[cod]'     => 'Byte-compiled / optimized / DLL files',
                '*$py.class'    => 'Byte-compiled / optimized / DLL files',
            ],
        ],
    ],
];
