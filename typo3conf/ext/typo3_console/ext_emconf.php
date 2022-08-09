<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "typo3_console".
 *
 * Auto generated 22-09-2020 08:06
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'TYPO3 Console',
  'description' => 'A reliable and powerful command line interface for TYPO3 CMS',
  'category' => 'cli',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'author' => 'Helmut Hummel',
  'author_email' => 'info@helhum.io',
  'author_company' => 'helhum.io',
  'version' => '5.8.5',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.0.0-7.3.99',
      'typo3' => '8.7.22-9.5.99',
      'extbase' => '8.7.22-9.5.99',
      'extensionmanager' => '8.7.22-9.5.99',
      'fluid' => '8.7.22-9.5.99',
      'install' => '8.7.22-9.5.99',
      'scheduler' => '8.7.22-9.5.99',
    ),
    'conflicts' => 
    array (
      'dbal' => '',
    ),
    'suggests' => 
    array (
    ),
  ),
  'clearcacheonload' => true,
);

