<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "gridelements".
 *
 * Auto generated 22-09-2020 08:04
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Grid Elements',
  'description' => 'This extension integrates the grid layout concept also to regular content elements - the grid elements.
It offers a lot of new features like advanced drag & drop or real references, that improve the usability of the page and list module to speed up the daily work with the backend.',
  'category' => 'be',
  'version' => '8.6.3',
  'state' => 'stable',
  'uploadfolder' => true,
  'createDirs' => '',
  'clearcacheonload' => true,
  'author' => 'Grid Elements Team',
  'author_email' => 'info@cybercraft.de',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '8.7.0-8.7.99',
      'backend' => '8.7.0-8.7.99',
      'recordlist' => '8.7.0-8.7.99',
      'frontend' => '8.7.0-8.7.99',
      'lang' => '8.7.0-8.7.99',
    ),
    'conflicts' => 
    array (
      'templavoila' => '',
      'jfmulticontent' => '',
    ),
    'suggests' => 
    array (
    ),
  ),
);

