<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Iconpack: Lucide Icons',
    'description' => 'This Extension registers an Iconpack-Provider for EXT:iconpack which allows you to use the "Lucide Icons" in TYPO3.',
    'category' => 'fe',
    'state' => 'beta',
    'author' => 'portrino GmbH',
    'author_email' => 'dev@portrino.de',
    'author_company' => 'portrino GmbH',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-14.3.99',
            'iconpack' => '1.3.0-1.99.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
