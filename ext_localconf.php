<?php

// List and detail view
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'JanMaennig.' . $_EXTKEY,
    'ExampleRecords',
    [
        'Record' => 'list,single',
        'RecordPdf' => 'single',
        'RecordTwig' => 'single',
        'RecordExcel' => 'list',
    ],
    [
        'Record' => 'list,single',
        'RecordPdf' => 'single',
        'RecordTwig' => 'single',
        'RecordExcel' => 'list',
    ]
);
