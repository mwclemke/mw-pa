<?php
return [
    'BE' => [
        'compressionLevel' => '9',
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$CXUguqHERQ1arXk29SqnsuM6OONXEs/',
        'loginSecurityLevel' => 'rsa',
        'versionNumberInFilename' => '1',
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'dbname' => 'usr_p600929_1',
                'driver' => 'mysqli',
                'host' => 'db1275.mydbserver.com',
                'password' => '8xxe%l6ao.hkwT',
                'port' => 3306,
                'user' => 'p600929',
            ],
        ],
        'extTablesDefinitionScript' => 'extTables.php',
    ],
    'EXT' => [
        'extConf' => [
            'gridelements' => 'a:6:{s:20:"additionalStylesheet";s:0:"";s:19:"nestingInListModule";s:1:"0";s:26:"overlayShortcutTranslation";s:1:"0";s:19:"disableDragInWizard";s:1:"0";s:25:"disableCopyFromPageButton";s:1:"0";s:38:"disableAutomaticUnusedColumnCorrection";s:1:"0";}',
            'mw_starterkit' => 'a:0:{}',
            'news' => 'a:22:{s:13:"prependAtCopy";s:1:"1";s:6:"tagPid";s:1:"1";s:12:"rteForTeaser";s:1:"0";s:22:"contentElementRelation";s:1:"0";s:21:"contentElementPreview";s:1:"1";s:13:"manualSorting";s:1:"0";s:19:"categoryRestriction";s:0:"";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:19:"dateTimeNotRequired";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"mediaPreview";s:5:"false";s:20:"advancedMediaPreview";s:1:"1";s:24:"showAdministrationModule";s:1:"1";s:35:"hidePageTreeForAdministrationModule";s:1:"0";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:317:"LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_advanced=title,datetime,teaser,categories;LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pagemodule_complex=title,datetime,teaser,categories,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:25:"showMediaDescriptionField";s:1:"0";s:6:"useFal";s:1:"1";}',
            'powermail' => 'a:9:{s:12:"disableIpLog";s:1:"0";s:27:"disableMarketingInformation";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:35:"disablePluginInformationMailPreview";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";s:28:"enableTableGarbageCollection";s:1:"0";}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'rtehtmlarea' => 'a:8:{s:21:"noSpellCheckLanguages";s:23:"ja,km,ko,lo,th,zh,b5,gb";s:15:"AspellDirectory";s:15:"/usr/bin/aspell";s:20:"defaultConfiguration";s:105:"Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)";s:12:"enableImages";s:1:"0";s:20:"enableInlineElements";s:1:"0";s:19:"allowStyleAttribute";s:1:"1";s:24:"enableAccessibilityIcons";s:1:"0";s:16:"forceCommandMode";s:1:"0";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
        ],
    ],
    'EXTCONF' => [
        'helhum-typo3-console' => [
            'initialUpgradeDone' => '8.7',
        ],
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'FE' => [
        'compressionLevel' => '9',
        'debug' => false,
        'loginSecurityLevel' => 'rsa',
        'versionNumberInFilename' => 'embed',
    ],
    'GFX' => [
        'gdlib_png' => 0,
        'jpg_quality' => '100',
        'processor' => 'GraphicsMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'RGB',
        'processor_effects' => -1,
        'processor_enabled' => 1,
        'processor_path' => '/usr/local/bin/',
        'processor_path_lzw' => '/usr/local/bin/',
    ],
    'INSTALL' => [],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t',
    ],
    'SYS' => [
        'UTF8filesystem' => '1',
        'caching' => [
            'cacheConfigurations' => [
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'devIPmask' => '',
        'displayErrors' => 0,
        'doNotCheckReferer' => '1',
        'enableDeprecationLog' => false,
        'encryptionKey' => 'rEtGTn85CTZ+IFlF+3giW/G8DmQOx5MVzvHcax2FhTew9F1w6gdHj/JHtBIW1xfxoNp1ubjQYb/OhzFgptEeMjyfjMP0WTQf',
        'fileCreateMask' => '0644',
        'folderCreateMask' => '0755',
        'isInitialInstallationInProgress' => false,
        'phpTimeZone' => 'Europe/Berlin',
        'sitename' => 'New TYPO3 site',
        'sqlDebug' => 0,
        'systemLocale' => 'de_DE',
        'systemLogLevel' => 2,
        'textfile_ext' => 'txt,html,htm,css,tmpl,js,sql,xml,csv,xlf,yaml,t3s,ts',
    ],
];
