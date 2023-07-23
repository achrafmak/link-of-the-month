<?php

/**
 * Extension Manager/Repository config file for ext "link_of_the_month".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Link of the month',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'CodeRed\\LinkOfTheMonth\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Mohamed Achraf Maktouf',
    'author_email' => 'maktoufachraf@gmail.com',
    'author_company' => 'Code Red.',
    'version' => '1.0.0',
];
