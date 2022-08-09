<?php
defined('TYPO3_MODE') or die();

$dir = new RecursiveDirectoryIterator(__DIR__ . '/../../../Resources/Public/Icons/TCA/');
$iterator = new RecursiveIteratorIterator($dir);
$files = new RegexIterator($iterator, '/^.+\.svg$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($files as $info => $path) {
    $file = $path[0];
    if (is_file($file)) {
        $fileName = basename($file, '.svg');

        $folder = 'FontAwesome';
        $class = 'fa fa-select-icon fa-' . $fileName;

        if (strpos($file, 'EtLine')) {
            $folder = 'EtLine';
            $class = 'icon-' . $fileName;
        }

        $iconItems[] = [
            $fileName,
            $class,
            'EXT:mw_starterkit/Resources/Public/Icons/TCA/' . $folder . '/' . basename($file),
        ];

    }
}

$linkConfig = [
    'type' => 'input',
    'size' => '50',
    'max' => '256',
    'eval' => 'trim',
    'renderType' => 'inputLink',
    'wizards' => [
        'link' => [
            'type' => 'popup',
            'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
            'icon' => 'action-wizard-link',
            'params' => [
                'blindLinkOptions' => 'page, mail, spec, file, dir, folder',
            ],
            'module' => [
                'name' => 'wizard_link',
                'urlParameters' => [
                    'mode' => 'wizard',
                ],
            ],
            'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
        ],
    ],
    'softref' => 'typolink',
];

$tempColumns = [
    'mw_address' => [
        'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.address',
        'exclude' => 1,
        'config' => [
            'type' => 'input',
            'size' => '45',
        ],
    ],
    'icon' => [
        'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'showIconTable' => true,
            'selicon_cols' => 14,
            'items' => $iconItems,
        ],
    ],
    'header_style' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.header_style',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [
                [
                    'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.header_style.0',
                    '0',
                ],
                [
                    'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.header_style.1',
                    '1',
                ],
            ],
            'size' => 1,
            'maxitems' => 1,
            'default' => '',
        ],
    ],
    'mw_profile_google' => [
        'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.google',
        'exclude' => 1,
        'displayCond' => 'FIELD:layout:=:110',
        'config' => $linkConfig,
    ],
    'mw_profile_facebook' => [
        'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.facebook',
        'exclude' => 1,
        'displayCond' => 'FIELD:layout:=:110',
        'config' => $linkConfig,
    ],
    'mw_profile_twitter' => [
        'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.twitter',
        'exclude' => 1,
        'displayCond' => 'FIELD:layout:=:110',
        'config' => $linkConfig,
    ],
    'mw_profile_instagram' => [
        'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.instagram',
        'exclude' => 1,
        'displayCond' => 'FIELD:layout:=:110',
        'config' => $linkConfig,
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);

$imagePalette = '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette';

$GLOBALS['TCA']['tt_content']['columns']['media']['config']['foreign_types']['0']['showitem'] = $imagePalette;
$GLOBALS['TCA']['tt_content']['columns']['media']['config']['foreign_types']['1']['showitem'] = $imagePalette;
$GLOBALS['TCA']['tt_content']['columns']['media']['config']['foreign_types']['2']['showitem'] = $imagePalette;
$GLOBALS['TCA']['tt_content']['columns']['media']['config']['foreign_types']['3']['showitem'] = $imagePalette;
$GLOBALS['TCA']['tt_content']['columns']['media']['config']['foreign_types']['4']['showitem'] = $imagePalette;
$GLOBALS['TCA']['tt_content']['columns']['media']['config']['foreign_types']['5']['showitem'] = $imagePalette;

$GLOBALS['TCA']['tt_content']['palettes']['header']['showitem'] .= ',header_style';
$GLOBALS['TCA']['tt_content']['palettes']['headers']['showitem'] .= ',header_style';
$textMediaShowItem = explode('bodytext_formlabel,', $GLOBALS['TCA']['tt_content']['types']['textmedia']['showitem']);
$GLOBALS['TCA']['tt_content']['types']['textmedia']['showitem'] = $textMediaShowItem[0] . 'bodytext_formlabel,mw_profile_facebook,mw_profile_google,mw_profile_twitter,mw_profile_instagram,' . $textMediaShowItem[1];

$GLOBALS['TCA']['tt_content']['types']['mw_starterkit_button']['showitem'] = '
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
header;LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:button,header_link;LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:button.link,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,tx_gridelements_container,tx_gridelements_columns';


$GLOBALS['TCA']['tt_content']['types']['mw_starterkit_iconbox']['showitem'] = '
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,rowDescription,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,icon,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,tx_gridelements_container,tx_gridelements_columns';

$GLOBALS['TCA']['tt_content']['types']['mw_starterkit_map']['showitem'] = '
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,mw_address,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,tx_gridelements_container,tx_gridelements_columns';

// override gridelements config to use new assets field instead of media field
$GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem'] = str_replace('media', 'assets',
    $GLOBALS['TCA']['tt_content']['types']['gridelements_pi1']['showitem']);
