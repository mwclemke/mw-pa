<?php

/************************************************************************
 * Extension Manager/Repository config file for ext mw_starterkit".
 ************************************************************************/
$EM_CONF[$_EXTKEY] = [
    'title' => 'Mittwald Distribution',
    'description' => 'TYPO3 distribution for Mittwald CMS Service',
    'category' => 'distribution',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
            'gridelements' => '8.0.0 - 8.0.99',
            'news' => '6.0.0 - 6.9.99',
            'powermail' => '3.20.0 - 3.99.99',
        ],
    ],
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mittwald CM Service',
    'author_email' => 'opensource@mittwald.de',
    'version' => '0.0.2',
];
