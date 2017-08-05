<?php
/**
 * HiDev config for Python projects.
 *
 * @link      https://github.com/hiqdev/hidev-python
 * @package   hidev-python
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2015-2017, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'include' => [
            __DIR__ . '/goals.yml',
        ],
        /*'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => '@hidev/python/views',
                ],
            ],
        ],*/
        'vcsignore' => [
            '__pycache__/'  => 'Byte-compiled / optimized / DLL files',
            '*.py[cod]'     => 'Byte-compiled / optimized / DLL files',
            '*$py.class'    => 'Byte-compiled / optimized / DLL files',
        ],
    ],
];
