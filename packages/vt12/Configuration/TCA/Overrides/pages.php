<?php

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'vt12',
    'Configuration/TsConfig/Page/backend_layouts.tsconfig',
    'Default Backendlayouts' // Titel, wie er im Backend angezeigt wird
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'vt12',
    'Configuration/TsConfig/Page/general.tsconfig',
    'General Page TsConfig' // Titel, wie er im Backend angezeigt wird
);


