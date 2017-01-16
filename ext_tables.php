<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_extbaseviewexample_domain_model_record');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    $_EXTKEY,
    'ExampleRecords',
    'jm | Extbase View Examples - Records'
);
