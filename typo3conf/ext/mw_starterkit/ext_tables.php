<?php

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;
use TYPO3\CMS\Core\Imaging\IconRegistry;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\PathUtility;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript',
    'Mittwald Distribution');

$iconRegistry = GeneralUtility::makeInstance(IconRegistry::class);
$iconRegistry->registerIcon(
    'ce-icon-button',
    SvgIconProvider::class,
    ['source' => 'EXT:mw_starterkit/Resources/Public/Icons/ContentElements/ce-icon-button.svg']
);
$iconRegistry->registerIcon(
    'ce-icon-iconbox',
    SvgIconProvider::class,
    ['source' => 'EXT:mw_starterkit/Resources/Public/Icons/ContentElements/ce-icon-iconbox.svg']
);
$iconRegistry->registerIcon(
    'ce-icon-map',
    SvgIconProvider::class,
    ['source' => 'EXT:mw_starterkit/Resources/Public/Icons/ContentElements/ce-icon-map.svg']
);

ExtensionManagementUtility::addPlugin(
    [
        'Button',
        'mw_starterkit_button',
        PathUtility::getAbsoluteWebPath($_EXTKEY)
        . 'Resources/Public/Icons/ContentElements/ce-icon-button.svg',
    ],
    'CType'
);


ExtensionManagementUtility::addPlugin(
    [
        'IconBox',
        'mw_starterkit_iconbox',
        PathUtility::getAbsoluteWebPath($_EXTKEY)
        . 'Resources/Public/Icons/ContentElements/ce-icon-iconbox.svg',
    ],
    'CType'
);

ExtensionManagementUtility::addPlugin(
    [
        'Google Map',
        'mw_starterkit_map',
        PathUtility::getAbsoluteWebPath($_EXTKEY)
        . 'Resources/Public/Icons/ContentElements/ce-icon-map.svg',
    ],
    'CType'
);

// Used to get some proper icon widths
if (TYPO3_MODE == "BE") {
    $TBE_STYLES['skins']['backend']['stylesheetDirectories']['mw_starterkit'] = 'EXT:mw_starterkit/Resources/Public/Styles/Backend/';
}