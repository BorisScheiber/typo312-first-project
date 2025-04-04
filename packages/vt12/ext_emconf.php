<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'VT12',
    'description' => 'Sitepackage for TYPO3 12',
    'category' => 'templates',
    'author' => 'Boris Scheiber',
    'author_email' => 'scheiberboris@hotmail.com',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
