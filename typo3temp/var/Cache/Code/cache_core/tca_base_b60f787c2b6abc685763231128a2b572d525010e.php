<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'lockToDomain, file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, db_mountpoints, file_mountpoints, file_permissions, tables_select, tables_modify, pagetypes_select, non_exclude_fields, groupMods, lockToDomain, description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'enableMultiSelectFilterTextfield' => true,
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => 0,
              ),
            ),
            'default' => 0,
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'pagetypes',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'tables',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'exclude',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'explicitValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'custom',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListGroup',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'hide_in_lists' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.hide_in_lists',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'enableMultiSelectFilterTextfield' => true,
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT(be_groups.uid = ###THIS_UID###) ORDER BY be_groups.title',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 20,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,groupMods,tables_select,tables_modify,pagetypes_select,non_exclude_fields,explicit_allowdeny,allowed_languages,custom_options,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,lockToDomain,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,hide_in_lists,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,description,usergroup,db_mountpoints,file_mountpoints,admin,options,file_permissions,userMods,lockToDomain,realName,email,disable,starttime,endtime,lastlogin',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'nospace,trim,lower,unique,required',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,TYPO3\\CMS\\Saltedpasswords\\Evaluation\\BackendEvaluator,password',
            'autocomplete' => false,
            'renderType' => 'rsaInput',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'ORDER BY be_groups.title',
            'size' => 5,
            'maxitems' => 20,
            'enableMultiSelectFilterTextfield' => true,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'maxitems' => 1,
          ),
        ),
        'lockToDomain' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'enableMultiSelectFilterTextfield' => true,
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'disableIPlock' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.disableIPlock',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'admin' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
                1 => 0,
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
                1 => 0,
              ),
            ),
            'default' => 1,
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'English',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Afrikaans',
                1 => 'af',
              ),
              2 => 
              array (
                0 => 'Albanian',
                1 => 'sq',
              ),
              3 => 
              array (
                0 => 'Arabic',
                1 => 'ar',
              ),
              4 => 
              array (
                0 => 'Basque',
                1 => 'eu',
              ),
              5 => 
              array (
                0 => 'Bosnian',
                1 => 'bs',
              ),
              6 => 
              array (
                0 => 'Brazilian Portuguese',
                1 => 'pt_BR',
              ),
              7 => 
              array (
                0 => 'Bulgarian',
                1 => 'bg',
              ),
              8 => 
              array (
                0 => 'Catalan',
                1 => 'ca',
              ),
              9 => 
              array (
                0 => 'Chinese (Simpl.)',
                1 => 'ch',
              ),
              10 => 
              array (
                0 => 'Chinese (Trad.)',
                1 => 'zh',
              ),
              11 => 
              array (
                0 => 'Croatian',
                1 => 'hr',
              ),
              12 => 
              array (
                0 => 'Czech',
                1 => 'cs',
              ),
              13 => 
              array (
                0 => 'Danish',
                1 => 'da',
              ),
              14 => 
              array (
                0 => 'Dutch',
                1 => 'nl',
              ),
              15 => 
              array (
                0 => 'Esperanto',
                1 => 'eo',
              ),
              16 => 
              array (
                0 => 'Estonian',
                1 => 'et',
              ),
              17 => 
              array (
                0 => 'Faroese',
                1 => 'fo',
              ),
              18 => 
              array (
                0 => 'Finnish',
                1 => 'fi',
              ),
              19 => 
              array (
                0 => 'French',
                1 => 'fr',
              ),
              20 => 
              array (
                0 => 'French (Canada)',
                1 => 'fr_CA',
              ),
              21 => 
              array (
                0 => 'Galician',
                1 => 'gl',
              ),
              22 => 
              array (
                0 => 'Georgian',
                1 => 'ka',
              ),
              23 => 
              array (
                0 => 'German',
                1 => 'de',
              ),
              24 => 
              array (
                0 => 'Greek',
                1 => 'el',
              ),
              25 => 
              array (
                0 => 'Greenlandic',
                1 => 'kl',
              ),
              26 => 
              array (
                0 => 'Hebrew',
                1 => 'he',
              ),
              27 => 
              array (
                0 => 'Hindi',
                1 => 'hi',
              ),
              28 => 
              array (
                0 => 'Hungarian',
                1 => 'hu',
              ),
              29 => 
              array (
                0 => 'Icelandic',
                1 => 'is',
              ),
              30 => 
              array (
                0 => 'Italian',
                1 => 'it',
              ),
              31 => 
              array (
                0 => 'Japanese',
                1 => 'ja',
              ),
              32 => 
              array (
                0 => 'Khmer',
                1 => 'km',
              ),
              33 => 
              array (
                0 => 'Korean',
                1 => 'ko',
              ),
              34 => 
              array (
                0 => 'Latvian',
                1 => 'lv',
              ),
              35 => 
              array (
                0 => 'Lithuanian',
                1 => 'lt',
              ),
              36 => 
              array (
                0 => 'Malay',
                1 => 'ms',
              ),
              37 => 
              array (
                0 => 'Norwegian',
                1 => 'no',
              ),
              38 => 
              array (
                0 => 'Persian',
                1 => 'fa',
              ),
              39 => 
              array (
                0 => 'Polish',
                1 => 'pl',
              ),
              40 => 
              array (
                0 => 'Portuguese',
                1 => 'pt',
              ),
              41 => 
              array (
                0 => 'Romanian',
                1 => 'ro',
              ),
              42 => 
              array (
                0 => 'Russian',
                1 => 'ru',
              ),
              43 => 
              array (
                0 => 'Serbian',
                1 => 'sr',
              ),
              44 => 
              array (
                0 => 'Slovak',
                1 => 'sk',
              ),
              45 => 
              array (
                0 => 'Slovenian',
                1 => 'sl',
              ),
              46 => 
              array (
                0 => 'Spanish',
                1 => 'es',
              ),
              47 => 
              array (
                0 => 'Swedish',
                1 => 'sv',
              ),
              48 => 
              array (
                0 => 'Thai',
                1 => 'th',
              ),
              49 => 
              array (
                0 => 'Turkish',
                1 => 'tr',
              ),
              50 => 
              array (
                0 => 'Ukrainian',
                1 => 'uk',
              ),
              51 => 
              array (
                0 => 'Vietnamese',
                1 => 'vi',
              ),
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'modListUser',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'special' => 'languages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'createdByAction' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
                'maxLevels' => 99,
              ),
            ),
            'size' => 20,
            'minitems' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,disable,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,userMods,allowed_languages,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,workspace_perms,db_mountpoints,options,file_mountpoints,file_permissions,category_perms,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,lockToDomain,disableIPlock,TSconfig,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,disable,admin,username,password,avatar,usergroup,realName,email,lang,lastlogin,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,disableIPlock,TSconfig,db_mountpoints,options,file_mountpoints,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-not-in-menu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer-hideinmenu',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
          'contains-newsplugins' => 'apps-pagetree-page-contains-news',
        ),
        'searchFields' => 'title,alias,nav_title,subtitle,url,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'doktype,title,alias,hidden,starttime,endtime,fe_group,url,target,no_cache,shortcut,keywords,description,abstract,newUntil,lastUpdated,cache_timeout,cache_tags,backend_layout,backend_layout_next_level,categories',
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
              ),
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'rtehtmlarea_images,typolink_tag',
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'alias' => 
        array (
          'exclude' => true,
          'displayCond' => 'VERSION:IS:false',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 32,
            'eval' => 'nospace,alphanum_x,lower,unique',
            'softref' => 'notify',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'url',
          ),
        ),
        'urltype' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.automatic',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'http://',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'https://',
                1 => '4',
              ),
              3 => 
              array (
                0 => 'ftp://',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'mailto:',
                1 => '3',
              ),
            ),
            'default' => 1,
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                1 => 60,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                1 => 300,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                1 => 900,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                1 => 1800,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                1 => 3600,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                1 => 14400,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                1 => 86400,
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                1 => 172800,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                1 => 604800,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                1 => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => '',
          ),
        ),
        'no_cache' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, alias, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, alias, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
          ),
        ),
        'mount_pid' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'softref' => 'rtehtmlarea_images,typolink_tag',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'softref' => 'rtehtmlarea_images,typolink_tag',
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'softref' => 'rtehtmlarea_images,typolink_tag',
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                1 => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                1 => 'fe_users',
                2 => 'status-user-frontend',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-folder',
                1 => 'news',
                2 => 'apps-pagetree-folder-contains-news',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-page',
                1 => 'newsplugins',
                2 => 'apps-pagetree-page-contains-news',
              ),
            ),
            'default' => '',
          ),
        ),
        'fe_login_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enable',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableAll',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableGroups',
                1 => 3,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enableAgain',
                1 => 2,
              ),
            ),
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
                1 => '',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                0 => 'EXT:news :: Restrict pages to news records (news)',
                1 => 'EXT:news/Configuration/TSconfig/Page/news_only.txt',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace;replace,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching;caching,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;external,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;shortcut,--palette--;;shortcutpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;mountpoint,--palette--;;mountpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links;links,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;miscellaneous,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;backend_layout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module;module,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config;config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous;adminsonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, extendToSubpages',
        ),
        2 => 
        array (
          'showitem' => 'layout, lastUpdated, newUntil, no_search',
        ),
        3 => 
        array (
          'showitem' => 'alias, target, no_cache, cache_timeout, cache_tags',
        ),
        5 => 
        array (
          'showitem' => 'author, author_email',
        ),
        6 => 
        array (
          'showitem' => 'php_tree_stop, editlock',
        ),
        7 => 
        array (
          'showitem' => 'is_siteroot',
        ),
        8 => 
        array (
          'showitem' => 'backend_layout_next_level',
        ),
        'standard' => 
        array (
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'urltype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel',
        ),
        'title' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel',
        ),
        'visibility' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel, nav_hide;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_formlabel',
        ),
        'hiddenonly' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--, fe_login_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'editorial' => 
        array (
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'showitem' => 'layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout_formlabel, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'showitem' => 'alias;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.alias_formlabel, --linebreak--, target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags, no_cache;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_cache_formlabel',
        ),
        'language' => 
        array (
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'rootLevel' => -1,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
        'label_userFunc' => 'GeorgRinger\\News\\Hooks\\Labels->getUserLabelCategory',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,parent,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.tabs.seo,seo_title,seo_description,seo_headline,seo_text,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.options,images,description,single_pid,shortcut,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.uid=###REC_FIELD_l10n_parent### AND sys_category.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
              'tx_news_domain_model_news' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'images' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'images',
              'tablenames' => 'sys_category',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'single_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.single_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.shortcut',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
      ),
    ),
    'sys_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'descriptionColumn' => 'description',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'rootLevel' => -1,
        'searchFields' => 'title,description',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-clipboard-list',
          'static' => 'apps-clipboard-list',
          'filter' => 'actions-system-tree-search-open',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title, description, table_name, items',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'foreign_table' => 'fe_groups',
          ),
        ),
        'table_name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.table_name',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'tables',
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.items',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'prepend_tname' => true,
            'allowed' => '*',
            'MM' => 'sys_collection_entries',
            'MM_hasUidField' => true,
            'multiple' => true,
            'size' => 5,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_collection.type.static',
                1 => 'static',
              ),
            ),
            'default' => 'static',
          ),
        ),
      ),
      'types' => 
      array (
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,table_name,items,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,fe_group,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => true,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type, sha1',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'storage, name, type, mime_type, size, sha1, missing',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                1 => 3,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                1 => 4,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                1 => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 8,
            'max' => 30,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,files,title,description',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND sys_file_collection.pid=###CURRENT_PID### AND sys_file_collection.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                1 => 'static',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                1 => 'folder',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                1 => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.storage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'foreign_table_where' => 'ORDER BY sys_file_storage.name',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'folder' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
            'default' => '',
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'minitems' => 0,
            'maxitems' => 1,
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1,0) ORDER BY sys_category.sorting ASC',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'static' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'folder' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,storage,folder,recursive,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'category' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,category,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'file,title,description,alternative',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'file, title, description, alternative,categories',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_metadata',
            'foreign_table_where' => 'AND sys_file_metadata.uid=###REC_FIELD_l10n_parent### AND sys_file_metadata.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'user',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND sys_file.uid = ###REC_FIELD_file###',
            'minitems' => 1,
            'maxitems' => 1,
            'size' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.width',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.height',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'visible' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.visible',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'status' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.1',
                1 => 1,
                2 => 'filemetadata-status-1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.2',
                1 => 2,
                2 => 'filemetadata-status-2',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.status.3',
                1 => 3,
                2 => 'filemetadata-status-3',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
            'placeholder' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:placeholder.keywords',
          ),
        ),
        'caption' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.caption',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'creator_tool' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator_tool',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'download_name' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.download_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'creator' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.creator',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'publisher' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.publisher',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'source' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
          ),
        ),
        'copyright' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.copyright',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'location_country' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_region' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_region',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'location_city' => 
        array (
          'exclude' => true,
          'l10n_display' => '',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.location_city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'latitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.latitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'longitude' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.longitude',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
            'default' => '0.00000000000000',
          ),
        ),
        'ranking' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.ranking',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'minitems' => 1,
            'maxitems' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 0,
                1 => 0,
              ),
              1 => 
              array (
                0 => 1,
                1 => 1,
              ),
              2 => 
              array (
                0 => 2,
                1 => 2,
              ),
              3 => 
              array (
                0 => 3,
                1 => 3,
              ),
              4 => 
              array (
                0 => 4,
                1 => 4,
              ),
              5 => 
              array (
                0 => 5,
                1 => 5,
              ),
            ),
          ),
        ),
        'content_creation_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_creation_date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 1636468031,
          ),
        ),
        'content_modification_date' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.content_modification_date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 1636468031,
          ),
        ),
        'note' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.note',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
          ),
        ),
        'unit' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.px',
                1 => 'px',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.cm',
                1 => 'cm',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.in',
                1 => 'in',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.mm',
                1 => 'mm',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.m',
                1 => 'm',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.p',
                1 => 'p',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.unit.pt',
                1 => 'pt',
              ),
            ),
            'default' => '',
            'readOnly' => true,
          ),
        ),
        'duration' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.duration',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'color_space' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.RGB',
                1 => 'RGB',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.sRGB',
                1 => 'sRGB',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMYK',
                1 => 'CMYK',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.CMY',
                1 => 'CMY',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.YUV',
                1 => 'YUV',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.grey',
                1 => 'grey',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.color_space.indx',
                1 => 'indx',
              ),
            ),
            'default' => '',
            'readOnly' => true,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.pages',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'readOnly' => true,
          ),
        ),
        'language' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fe_groups' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--palette--;;language,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--palette--;;language,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        2 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;20,--palette--;;language,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.gps;30,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.camera,color_space,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.metrics;50,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--palette--;;language,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.audio,duration,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--palette--;;language,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.video,duration,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        5 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,fileinfo,title,description,ranking,keywords,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.accessibility;25,--palette--;;language,--div--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:tabs.metadata,creator,creator_tool,publisher,source,copyright,language,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.geo_location;40,pages,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.metrics;50,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.content_date;60,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:filemetadata/Resources/Private/Language/locallang_tca.xlf:palette.visibility;10,fe_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        10 => 
        array (
          'showitem' => 'visible, status',
        ),
        20 => 
        array (
          'showitem' => 'alternative, --linebreak--, caption, --linebreak--, download_name',
        ),
        25 => 
        array (
          'showitem' => 'caption, --linebreak--, download_name',
        ),
        30 => 
        array (
          'showitem' => 'latitude, longitude',
        ),
        40 => 
        array (
          'showitem' => 'location_country, location_region, location_city',
        ),
        50 => 
        array (
          'showitem' => 'width, height, unit',
        ),
        60 => 
        array (
          'showitem' => 'content_creation_date, content_modification_date',
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'formattedLabel_userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService->getInlineLabel',
        'formattedLabel_userFunc_options' => 
        array (
          'sys_file' => 
          array (
            0 => 'title',
            1 => 'name',
          ),
        ),
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'shadowColumnsForMovePlaceholders' => 'tablenames,fieldname,uid_local,table_local,uid_foreign',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'uid_local,uid_foreign,tablenames,fieldname,title,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,uid_local,uid_foreign,tablenames,fieldname,sorting_foreign,table_local,title,description',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 30,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_table_where' => 'AND sys_file_reference.uid=###REC_FIELD_l10n_parent### AND sys_file_reference.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'size' => 1,
            'eval' => 'int',
            'maxitems' => 1,
            'minitems' => 0,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'table_local' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.table_local',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'default' => 'sys_file',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 20,
            'max' => 1024,
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'showinpreview' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.0',
                1 => 0,
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.1',
                1 => 1,
                2 => '',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.2',
                1 => 2,
                2 => '',
              ),
            ),
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '--palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette;basicoverlayPalette,--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'showitem' => '
				title,alternative,--linebreak--,
				link,description,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        'newsPalette' => 
        array (
          'showitem' => 'showinpreview',
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => true,
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'name,description,driver,processingfolder,configuration,auto_extract_metadata',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserStorageCapabilityService->renderIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                0 => 'Local filesystem',
                1 => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,name,driver,configuration,is_default,auto_extract_metadata,processingfolder,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,--palette--;Capabilities;capabilities,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,is_online,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'useColumnsForDefaultValues' => 'path,base',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,path,base,description',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required,trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => '2000',
          ),
        ),
        'base' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.baseStorage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => true,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required',
            'range' => 
            array (
              'lower' => 1,
            ),
          ),
        ),
        'path' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.folder',
          'displayCond' => 'FIELD:base:>:0',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,base,path,read_only,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_history' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_history',
        'label' => 'tablename',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => true,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'sys_log_uid' => 
        array (
          'label' => 'sys_log_uid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'history_data' => 
        array (
          'label' => 'history_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'fieldlist' => 
        array (
          'label' => 'fieldlist',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'history_files' => 
        array (
          'label' => 'history_files',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'snapshot' => 
        array (
          'label' => 'snapshot',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'sys_log_uid, history_data, fieldlist, recuid, tablename, tstamp, history_files, snapshot',
        ),
      ),
    ),
    'sys_language' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language',
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_column' => 'flag',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_language',
          'mask' => 'flags-###TYPE###',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'trim,required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'language_isocode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Service\\IsoCodeService->renderIsoCodeSelectDropdown',
          ),
        ),
        'flag' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
                2 => '',
              ),
              1 => 
              array (
                0 => 'multiple',
                1 => 'multiple',
                2 => 'flags-multiple',
              ),
              2 => 
              array (
                0 => 'ad',
                1 => 'ad',
                2 => 'flags-ad',
              ),
              3 => 
              array (
                0 => 'ae',
                1 => 'ae',
                2 => 'flags-ae',
              ),
              4 => 
              array (
                0 => 'af',
                1 => 'af',
                2 => 'flags-af',
              ),
              5 => 
              array (
                0 => 'ag',
                1 => 'ag',
                2 => 'flags-ag',
              ),
              6 => 
              array (
                0 => 'ai',
                1 => 'ai',
                2 => 'flags-ai',
              ),
              7 => 
              array (
                0 => 'al',
                1 => 'al',
                2 => 'flags-al',
              ),
              8 => 
              array (
                0 => 'am',
                1 => 'am',
                2 => 'flags-am',
              ),
              9 => 
              array (
                0 => 'an',
                1 => 'an',
                2 => 'flags-an',
              ),
              10 => 
              array (
                0 => 'ao',
                1 => 'ao',
                2 => 'flags-ao',
              ),
              11 => 
              array (
                0 => 'ar',
                1 => 'ar',
                2 => 'flags-ar',
              ),
              12 => 
              array (
                0 => 'as',
                1 => 'as',
                2 => 'flags-as',
              ),
              13 => 
              array (
                0 => 'at',
                1 => 'at',
                2 => 'flags-at',
              ),
              14 => 
              array (
                0 => 'au',
                1 => 'au',
                2 => 'flags-au',
              ),
              15 => 
              array (
                0 => 'aw',
                1 => 'aw',
                2 => 'flags-aw',
              ),
              16 => 
              array (
                0 => 'ax',
                1 => 'ax',
                2 => 'flags-ax',
              ),
              17 => 
              array (
                0 => 'az',
                1 => 'az',
                2 => 'flags-az',
              ),
              18 => 
              array (
                0 => 'ba',
                1 => 'ba',
                2 => 'flags-ba',
              ),
              19 => 
              array (
                0 => 'bb',
                1 => 'bb',
                2 => 'flags-bb',
              ),
              20 => 
              array (
                0 => 'bd',
                1 => 'bd',
                2 => 'flags-bd',
              ),
              21 => 
              array (
                0 => 'be',
                1 => 'be',
                2 => 'flags-be',
              ),
              22 => 
              array (
                0 => 'bf',
                1 => 'bf',
                2 => 'flags-bf',
              ),
              23 => 
              array (
                0 => 'bg',
                1 => 'bg',
                2 => 'flags-bg',
              ),
              24 => 
              array (
                0 => 'bh',
                1 => 'bh',
                2 => 'flags-bh',
              ),
              25 => 
              array (
                0 => 'bi',
                1 => 'bi',
                2 => 'flags-bi',
              ),
              26 => 
              array (
                0 => 'bj',
                1 => 'bj',
                2 => 'flags-bj',
              ),
              27 => 
              array (
                0 => 'bm',
                1 => 'bm',
                2 => 'flags-bm',
              ),
              28 => 
              array (
                0 => 'bn',
                1 => 'bn',
                2 => 'flags-bn',
              ),
              29 => 
              array (
                0 => 'bo',
                1 => 'bo',
                2 => 'flags-bo',
              ),
              30 => 
              array (
                0 => 'br',
                1 => 'br',
                2 => 'flags-br',
              ),
              31 => 
              array (
                0 => 'bs',
                1 => 'bs',
                2 => 'flags-bs',
              ),
              32 => 
              array (
                0 => 'bt',
                1 => 'bt',
                2 => 'flags-bt',
              ),
              33 => 
              array (
                0 => 'bv',
                1 => 'bv',
                2 => 'flags-bv',
              ),
              34 => 
              array (
                0 => 'bw',
                1 => 'bw',
                2 => 'flags-bw',
              ),
              35 => 
              array (
                0 => 'by',
                1 => 'by',
                2 => 'flags-by',
              ),
              36 => 
              array (
                0 => 'bz',
                1 => 'bz',
                2 => 'flags-bz',
              ),
              37 => 
              array (
                0 => 'ca',
                1 => 'ca',
                2 => 'flags-ca',
              ),
              38 => 
              array (
                0 => 'catalonia',
                1 => 'catalonia',
                2 => 'flags-catalonia',
              ),
              39 => 
              array (
                0 => 'cc',
                1 => 'cc',
                2 => 'flags-cc',
              ),
              40 => 
              array (
                0 => 'cd',
                1 => 'cd',
                2 => 'flags-cd',
              ),
              41 => 
              array (
                0 => 'cf',
                1 => 'cf',
                2 => 'flags-cf',
              ),
              42 => 
              array (
                0 => 'cg',
                1 => 'cg',
                2 => 'flags-cg',
              ),
              43 => 
              array (
                0 => 'ch',
                1 => 'ch',
                2 => 'flags-ch',
              ),
              44 => 
              array (
                0 => 'ci',
                1 => 'ci',
                2 => 'flags-ci',
              ),
              45 => 
              array (
                0 => 'ck',
                1 => 'ck',
                2 => 'flags-ck',
              ),
              46 => 
              array (
                0 => 'cl',
                1 => 'cl',
                2 => 'flags-cl',
              ),
              47 => 
              array (
                0 => 'cm',
                1 => 'cm',
                2 => 'flags-cm',
              ),
              48 => 
              array (
                0 => 'cn',
                1 => 'cn',
                2 => 'flags-cn',
              ),
              49 => 
              array (
                0 => 'co',
                1 => 'co',
                2 => 'flags-co',
              ),
              50 => 
              array (
                0 => 'cr',
                1 => 'cr',
                2 => 'flags-cr',
              ),
              51 => 
              array (
                0 => 'cs',
                1 => 'cs',
                2 => 'flags-cs',
              ),
              52 => 
              array (
                0 => 'cu',
                1 => 'cu',
                2 => 'flags-cu',
              ),
              53 => 
              array (
                0 => 'cv',
                1 => 'cv',
                2 => 'flags-cv',
              ),
              54 => 
              array (
                0 => 'cx',
                1 => 'cx',
                2 => 'flags-cx',
              ),
              55 => 
              array (
                0 => 'cy',
                1 => 'cy',
                2 => 'flags-cy',
              ),
              56 => 
              array (
                0 => 'cz',
                1 => 'cz',
                2 => 'flags-cz',
              ),
              57 => 
              array (
                0 => 'de',
                1 => 'de',
                2 => 'flags-de',
              ),
              58 => 
              array (
                0 => 'dj',
                1 => 'dj',
                2 => 'flags-dj',
              ),
              59 => 
              array (
                0 => 'dk',
                1 => 'dk',
                2 => 'flags-dk',
              ),
              60 => 
              array (
                0 => 'dm',
                1 => 'dm',
                2 => 'flags-dm',
              ),
              61 => 
              array (
                0 => 'do',
                1 => 'do',
                2 => 'flags-do',
              ),
              62 => 
              array (
                0 => 'dz',
                1 => 'dz',
                2 => 'flags-dz',
              ),
              63 => 
              array (
                0 => 'ec',
                1 => 'ec',
                2 => 'flags-ec',
              ),
              64 => 
              array (
                0 => 'ee',
                1 => 'ee',
                2 => 'flags-ee',
              ),
              65 => 
              array (
                0 => 'eg',
                1 => 'eg',
                2 => 'flags-eg',
              ),
              66 => 
              array (
                0 => 'eh',
                1 => 'eh',
                2 => 'flags-eh',
              ),
              67 => 
              array (
                0 => 'en-us-gb',
                1 => 'en-us-gb',
                2 => 'flags-en-us-gb',
              ),
              68 => 
              array (
                0 => 'england',
                1 => 'england',
                2 => 'flags-gb-eng',
              ),
              69 => 
              array (
                0 => 'er',
                1 => 'er',
                2 => 'flags-er',
              ),
              70 => 
              array (
                0 => 'es',
                1 => 'es',
                2 => 'flags-es',
              ),
              71 => 
              array (
                0 => 'et',
                1 => 'et',
                2 => 'flags-et',
              ),
              72 => 
              array (
                0 => 'eu',
                1 => 'eu',
                2 => 'flags-eu',
              ),
              73 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              74 => 
              array (
                0 => 'fi',
                1 => 'fi',
                2 => 'flags-fi',
              ),
              75 => 
              array (
                0 => 'fj',
                1 => 'fj',
                2 => 'flags-fj',
              ),
              76 => 
              array (
                0 => 'fk',
                1 => 'fk',
                2 => 'flags-fk',
              ),
              77 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              78 => 
              array (
                0 => 'fo',
                1 => 'fo',
                2 => 'flags-fo',
              ),
              79 => 
              array (
                0 => 'fr',
                1 => 'fr',
                2 => 'flags-fr',
              ),
              80 => 
              array (
                0 => 'ga',
                1 => 'ga',
                2 => 'flags-ga',
              ),
              81 => 
              array (
                0 => 'gb',
                1 => 'gb',
                2 => 'flags-gb',
              ),
              82 => 
              array (
                0 => 'gd',
                1 => 'gd',
                2 => 'flags-gd',
              ),
              83 => 
              array (
                0 => 'ge',
                1 => 'ge',
                2 => 'flags-ge',
              ),
              84 => 
              array (
                0 => 'gf',
                1 => 'gf',
                2 => 'flags-gf',
              ),
              85 => 
              array (
                0 => 'gh',
                1 => 'gh',
                2 => 'flags-gh',
              ),
              86 => 
              array (
                0 => 'gi',
                1 => 'gi',
                2 => 'flags-gi',
              ),
              87 => 
              array (
                0 => 'gl',
                1 => 'gl',
                2 => 'flags-gl',
              ),
              88 => 
              array (
                0 => 'gm',
                1 => 'gm',
                2 => 'flags-gm',
              ),
              89 => 
              array (
                0 => 'gn',
                1 => 'gn',
                2 => 'flags-gn',
              ),
              90 => 
              array (
                0 => 'gp',
                1 => 'gp',
                2 => 'flags-gp',
              ),
              91 => 
              array (
                0 => 'gq',
                1 => 'gq',
                2 => 'flags-gq',
              ),
              92 => 
              array (
                0 => 'gr',
                1 => 'gr',
                2 => 'flags-gr',
              ),
              93 => 
              array (
                0 => 'gs',
                1 => 'gs',
                2 => 'flags-gs',
              ),
              94 => 
              array (
                0 => 'gt',
                1 => 'gt',
                2 => 'flags-gt',
              ),
              95 => 
              array (
                0 => 'gu',
                1 => 'gu',
                2 => 'flags-gu',
              ),
              96 => 
              array (
                0 => 'gw',
                1 => 'gw',
                2 => 'flags-gw',
              ),
              97 => 
              array (
                0 => 'gy',
                1 => 'gy',
                2 => 'flags-gy',
              ),
              98 => 
              array (
                0 => 'hk',
                1 => 'hk',
                2 => 'flags-hk',
              ),
              99 => 
              array (
                0 => 'hm',
                1 => 'hm',
                2 => 'flags-hm',
              ),
              100 => 
              array (
                0 => 'hn',
                1 => 'hn',
                2 => 'flags-hn',
              ),
              101 => 
              array (
                0 => 'hr',
                1 => 'hr',
                2 => 'flags-hr',
              ),
              102 => 
              array (
                0 => 'ht',
                1 => 'ht',
                2 => 'flags-ht',
              ),
              103 => 
              array (
                0 => 'hu',
                1 => 'hu',
                2 => 'flags-hu',
              ),
              104 => 
              array (
                0 => 'id',
                1 => 'id',
                2 => 'flags-id',
              ),
              105 => 
              array (
                0 => 'ie',
                1 => 'ie',
                2 => 'flags-ie',
              ),
              106 => 
              array (
                0 => 'il',
                1 => 'il',
                2 => 'flags-il',
              ),
              107 => 
              array (
                0 => 'in',
                1 => 'in',
                2 => 'flags-in',
              ),
              108 => 
              array (
                0 => 'io',
                1 => 'io',
                2 => 'flags-io',
              ),
              109 => 
              array (
                0 => 'iq',
                1 => 'iq',
                2 => 'flags-iq',
              ),
              110 => 
              array (
                0 => 'ir',
                1 => 'ir',
                2 => 'flags-ir',
              ),
              111 => 
              array (
                0 => 'is',
                1 => 'is',
                2 => 'flags-is',
              ),
              112 => 
              array (
                0 => 'it',
                1 => 'it',
                2 => 'flags-it',
              ),
              113 => 
              array (
                0 => 'jm',
                1 => 'jm',
                2 => 'flags-jm',
              ),
              114 => 
              array (
                0 => 'jo',
                1 => 'jo',
                2 => 'flags-jo',
              ),
              115 => 
              array (
                0 => 'jp',
                1 => 'jp',
                2 => 'flags-jp',
              ),
              116 => 
              array (
                0 => 'ke',
                1 => 'ke',
                2 => 'flags-ke',
              ),
              117 => 
              array (
                0 => 'kg',
                1 => 'kg',
                2 => 'flags-kg',
              ),
              118 => 
              array (
                0 => 'kh',
                1 => 'kh',
                2 => 'flags-kh',
              ),
              119 => 
              array (
                0 => 'ki',
                1 => 'ki',
                2 => 'flags-ki',
              ),
              120 => 
              array (
                0 => 'km',
                1 => 'km',
                2 => 'flags-km',
              ),
              121 => 
              array (
                0 => 'kn',
                1 => 'kn',
                2 => 'flags-kn',
              ),
              122 => 
              array (
                0 => 'kp',
                1 => 'kp',
                2 => 'flags-kp',
              ),
              123 => 
              array (
                0 => 'kr',
                1 => 'kr',
                2 => 'flags-kr',
              ),
              124 => 
              array (
                0 => 'kw',
                1 => 'kw',
                2 => 'flags-kw',
              ),
              125 => 
              array (
                0 => 'ky',
                1 => 'ky',
                2 => 'flags-ky',
              ),
              126 => 
              array (
                0 => 'kz',
                1 => 'kz',
                2 => 'flags-kz',
              ),
              127 => 
              array (
                0 => 'la',
                1 => 'la',
                2 => 'flags-la',
              ),
              128 => 
              array (
                0 => 'lb',
                1 => 'lb',
                2 => 'flags-lb',
              ),
              129 => 
              array (
                0 => 'lc',
                1 => 'lc',
                2 => 'flags-lc',
              ),
              130 => 
              array (
                0 => 'li',
                1 => 'li',
                2 => 'flags-li',
              ),
              131 => 
              array (
                0 => 'lk',
                1 => 'lk',
                2 => 'flags-lk',
              ),
              132 => 
              array (
                0 => 'lr',
                1 => 'lr',
                2 => 'flags-lr',
              ),
              133 => 
              array (
                0 => 'ls',
                1 => 'ls',
                2 => 'flags-ls',
              ),
              134 => 
              array (
                0 => 'lt',
                1 => 'lt',
                2 => 'flags-lt',
              ),
              135 => 
              array (
                0 => 'lu',
                1 => 'lu',
                2 => 'flags-lu',
              ),
              136 => 
              array (
                0 => 'lv',
                1 => 'lv',
                2 => 'flags-lv',
              ),
              137 => 
              array (
                0 => 'ly',
                1 => 'ly',
                2 => 'flags-ly',
              ),
              138 => 
              array (
                0 => 'ma',
                1 => 'ma',
                2 => 'flags-ma',
              ),
              139 => 
              array (
                0 => 'mc',
                1 => 'mc',
                2 => 'flags-mc',
              ),
              140 => 
              array (
                0 => 'md',
                1 => 'md',
                2 => 'flags-md',
              ),
              141 => 
              array (
                0 => 'me',
                1 => 'me',
                2 => 'flags-me',
              ),
              142 => 
              array (
                0 => 'mg',
                1 => 'mg',
                2 => 'flags-mg',
              ),
              143 => 
              array (
                0 => 'mh',
                1 => 'mh',
                2 => 'flags-mh',
              ),
              144 => 
              array (
                0 => 'mk',
                1 => 'mk',
                2 => 'flags-mk',
              ),
              145 => 
              array (
                0 => 'ml',
                1 => 'ml',
                2 => 'flags-ml',
              ),
              146 => 
              array (
                0 => 'mm',
                1 => 'mm',
                2 => 'flags-mm',
              ),
              147 => 
              array (
                0 => 'mn',
                1 => 'mn',
                2 => 'flags-mn',
              ),
              148 => 
              array (
                0 => 'mo',
                1 => 'mo',
                2 => 'flags-mo',
              ),
              149 => 
              array (
                0 => 'mp',
                1 => 'mp',
                2 => 'flags-mp',
              ),
              150 => 
              array (
                0 => 'mq',
                1 => 'mq',
                2 => 'flags-mq',
              ),
              151 => 
              array (
                0 => 'mr',
                1 => 'mr',
                2 => 'flags-mr',
              ),
              152 => 
              array (
                0 => 'ms',
                1 => 'ms',
                2 => 'flags-ms',
              ),
              153 => 
              array (
                0 => 'mt',
                1 => 'mt',
                2 => 'flags-mt',
              ),
              154 => 
              array (
                0 => 'mu',
                1 => 'mu',
                2 => 'flags-mu',
              ),
              155 => 
              array (
                0 => 'mv',
                1 => 'mv',
                2 => 'flags-mv',
              ),
              156 => 
              array (
                0 => 'mw',
                1 => 'mw',
                2 => 'flags-mw',
              ),
              157 => 
              array (
                0 => 'mx',
                1 => 'mx',
                2 => 'flags-mx',
              ),
              158 => 
              array (
                0 => 'my',
                1 => 'my',
                2 => 'flags-my',
              ),
              159 => 
              array (
                0 => 'mz',
                1 => 'mz',
                2 => 'flags-mz',
              ),
              160 => 
              array (
                0 => 'na',
                1 => 'na',
                2 => 'flags-na',
              ),
              161 => 
              array (
                0 => 'nc',
                1 => 'nc',
                2 => 'flags-nc',
              ),
              162 => 
              array (
                0 => 'ne',
                1 => 'ne',
                2 => 'flags-ne',
              ),
              163 => 
              array (
                0 => 'nf',
                1 => 'nf',
                2 => 'flags-nf',
              ),
              164 => 
              array (
                0 => 'ng',
                1 => 'ng',
                2 => 'flags-ng',
              ),
              165 => 
              array (
                0 => 'ni',
                1 => 'ni',
                2 => 'flags-ni',
              ),
              166 => 
              array (
                0 => 'nl',
                1 => 'nl',
                2 => 'flags-nl',
              ),
              167 => 
              array (
                0 => 'no',
                1 => 'no',
                2 => 'flags-no',
              ),
              168 => 
              array (
                0 => 'np',
                1 => 'np',
                2 => 'flags-np',
              ),
              169 => 
              array (
                0 => 'nr',
                1 => 'nr',
                2 => 'flags-nr',
              ),
              170 => 
              array (
                0 => 'nu',
                1 => 'nu',
                2 => 'flags-nu',
              ),
              171 => 
              array (
                0 => 'nz',
                1 => 'nz',
                2 => 'flags-nz',
              ),
              172 => 
              array (
                0 => 'om',
                1 => 'om',
                2 => 'flags-om',
              ),
              173 => 
              array (
                0 => 'pa',
                1 => 'pa',
                2 => 'flags-pa',
              ),
              174 => 
              array (
                0 => 'pe',
                1 => 'pe',
                2 => 'flags-pe',
              ),
              175 => 
              array (
                0 => 'pf',
                1 => 'pf',
                2 => 'flags-pf',
              ),
              176 => 
              array (
                0 => 'pg',
                1 => 'pg',
                2 => 'flags-pg',
              ),
              177 => 
              array (
                0 => 'ph',
                1 => 'ph',
                2 => 'flags-ph',
              ),
              178 => 
              array (
                0 => 'pk',
                1 => 'pk',
                2 => 'flags-pk',
              ),
              179 => 
              array (
                0 => 'pl',
                1 => 'pl',
                2 => 'flags-pl',
              ),
              180 => 
              array (
                0 => 'pm',
                1 => 'pm',
                2 => 'flags-pm',
              ),
              181 => 
              array (
                0 => 'pn',
                1 => 'pn',
                2 => 'flags-pn',
              ),
              182 => 
              array (
                0 => 'pr',
                1 => 'pr',
                2 => 'flags-pr',
              ),
              183 => 
              array (
                0 => 'ps',
                1 => 'ps',
                2 => 'flags-ps',
              ),
              184 => 
              array (
                0 => 'pt',
                1 => 'pt',
                2 => 'flags-pt',
              ),
              185 => 
              array (
                0 => 'pw',
                1 => 'pw',
                2 => 'flags-pw',
              ),
              186 => 
              array (
                0 => 'py',
                1 => 'py',
                2 => 'flags-py',
              ),
              187 => 
              array (
                0 => 'qa',
                1 => 'qa',
                2 => 'flags-qa',
              ),
              188 => 
              array (
                0 => 'qc',
                1 => 'qc',
                2 => 'flags-qc',
              ),
              189 => 
              array (
                0 => 're',
                1 => 're',
                2 => 'flags-re',
              ),
              190 => 
              array (
                0 => 'ro',
                1 => 'ro',
                2 => 'flags-ro',
              ),
              191 => 
              array (
                0 => 'rs',
                1 => 'rs',
                2 => 'flags-rs',
              ),
              192 => 
              array (
                0 => 'ru',
                1 => 'ru',
                2 => 'flags-ru',
              ),
              193 => 
              array (
                0 => 'rw',
                1 => 'rw',
                2 => 'flags-rw',
              ),
              194 => 
              array (
                0 => 'sa',
                1 => 'sa',
                2 => 'flags-sa',
              ),
              195 => 
              array (
                0 => 'sb',
                1 => 'sb',
                2 => 'flags-sb',
              ),
              196 => 
              array (
                0 => 'sc',
                1 => 'sc',
                2 => 'flags-sc',
              ),
              197 => 
              array (
                0 => 'scotland',
                1 => 'scotland',
                2 => 'flags-scotland',
              ),
              198 => 
              array (
                0 => 'sd',
                1 => 'sd',
                2 => 'flags-sd',
              ),
              199 => 
              array (
                0 => 'se',
                1 => 'se',
                2 => 'flags-se',
              ),
              200 => 
              array (
                0 => 'sg',
                1 => 'sg',
                2 => 'flags-sg',
              ),
              201 => 
              array (
                0 => 'sh',
                1 => 'sh',
                2 => 'flags-sh',
              ),
              202 => 
              array (
                0 => 'si',
                1 => 'si',
                2 => 'flags-si',
              ),
              203 => 
              array (
                0 => 'sj',
                1 => 'sj',
                2 => 'flags-sj',
              ),
              204 => 
              array (
                0 => 'sk',
                1 => 'sk',
                2 => 'flags-sk',
              ),
              205 => 
              array (
                0 => 'sl',
                1 => 'sl',
                2 => 'flags-sl',
              ),
              206 => 
              array (
                0 => 'sm',
                1 => 'sm',
                2 => 'flags-sm',
              ),
              207 => 
              array (
                0 => 'sn',
                1 => 'sn',
                2 => 'flags-sn',
              ),
              208 => 
              array (
                0 => 'so',
                1 => 'so',
                2 => 'flags-so',
              ),
              209 => 
              array (
                0 => 'sr',
                1 => 'sr',
                2 => 'flags-sr',
              ),
              210 => 
              array (
                0 => 'st',
                1 => 'st',
                2 => 'flags-st',
              ),
              211 => 
              array (
                0 => 'sv',
                1 => 'sv',
                2 => 'flags-sv',
              ),
              212 => 
              array (
                0 => 'sy',
                1 => 'sy',
                2 => 'flags-sy',
              ),
              213 => 
              array (
                0 => 'sz',
                1 => 'sz',
                2 => 'flags-sz',
              ),
              214 => 
              array (
                0 => 'tc',
                1 => 'tc',
                2 => 'flags-tc',
              ),
              215 => 
              array (
                0 => 'td',
                1 => 'td',
                2 => 'flags-td',
              ),
              216 => 
              array (
                0 => 'tf',
                1 => 'tf',
                2 => 'flags-tf',
              ),
              217 => 
              array (
                0 => 'tg',
                1 => 'tg',
                2 => 'flags-tg',
              ),
              218 => 
              array (
                0 => 'th',
                1 => 'th',
                2 => 'flags-th',
              ),
              219 => 
              array (
                0 => 'tj',
                1 => 'tj',
                2 => 'flags-tj',
              ),
              220 => 
              array (
                0 => 'tk',
                1 => 'tk',
                2 => 'flags-tk',
              ),
              221 => 
              array (
                0 => 'tl',
                1 => 'tl',
                2 => 'flags-tl',
              ),
              222 => 
              array (
                0 => 'tm',
                1 => 'tm',
                2 => 'flags-tm',
              ),
              223 => 
              array (
                0 => 'tn',
                1 => 'tn',
                2 => 'flags-tn',
              ),
              224 => 
              array (
                0 => 'to',
                1 => 'to',
                2 => 'flags-to',
              ),
              225 => 
              array (
                0 => 'tr',
                1 => 'tr',
                2 => 'flags-tr',
              ),
              226 => 
              array (
                0 => 'tt',
                1 => 'tt',
                2 => 'flags-tt',
              ),
              227 => 
              array (
                0 => 'tv',
                1 => 'tv',
                2 => 'flags-tv',
              ),
              228 => 
              array (
                0 => 'tw',
                1 => 'tw',
                2 => 'flags-tw',
              ),
              229 => 
              array (
                0 => 'tz',
                1 => 'tz',
                2 => 'flags-tz',
              ),
              230 => 
              array (
                0 => 'ua',
                1 => 'ua',
                2 => 'flags-ua',
              ),
              231 => 
              array (
                0 => 'ug',
                1 => 'ug',
                2 => 'flags-ug',
              ),
              232 => 
              array (
                0 => 'um',
                1 => 'um',
                2 => 'flags-um',
              ),
              233 => 
              array (
                0 => 'us',
                1 => 'us',
                2 => 'flags-us',
              ),
              234 => 
              array (
                0 => 'uy',
                1 => 'uy',
                2 => 'flags-uy',
              ),
              235 => 
              array (
                0 => 'uz',
                1 => 'uz',
                2 => 'flags-uz',
              ),
              236 => 
              array (
                0 => 'va',
                1 => 'va',
                2 => 'flags-va',
              ),
              237 => 
              array (
                0 => 'vc',
                1 => 'vc',
                2 => 'flags-vc',
              ),
              238 => 
              array (
                0 => 've',
                1 => 've',
                2 => 'flags-ve',
              ),
              239 => 
              array (
                0 => 'vg',
                1 => 'vg',
                2 => 'flags-vg',
              ),
              240 => 
              array (
                0 => 'vi',
                1 => 'vi',
                2 => 'flags-vi',
              ),
              241 => 
              array (
                0 => 'vn',
                1 => 'vn',
                2 => 'flags-vn',
              ),
              242 => 
              array (
                0 => 'vu',
                1 => 'vu',
                2 => 'flags-vu',
              ),
              243 => 
              array (
                0 => 'wales',
                1 => 'wales',
                2 => 'flags-wales',
              ),
              244 => 
              array (
                0 => 'wf',
                1 => 'wf',
                2 => 'flags-wf',
              ),
              245 => 
              array (
                0 => 'ws',
                1 => 'ws',
                2 => 'flags-ws',
              ),
              246 => 
              array (
                0 => 'ye',
                1 => 'ye',
                2 => 'flags-ye',
              ),
              247 => 
              array (
                0 => 'yt',
                1 => 'yt',
                2 => 'flags-yt',
              ),
              248 => 
              array (
                0 => 'za',
                1 => 'za',
                2 => 'flags-za',
              ),
              249 => 
              array (
                0 => 'zm',
                1 => 'zm',
                2 => 'flags-zm',
              ),
              250 => 
              array (
                0 => 'zw',
                1 => 'zw',
                2 => 'flags-zw',
              ),
            ),
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,language_isocode,flag,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => true,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => true,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
        'searchFields' => 'title,content',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,content,starttime,endtime',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'fieldControl' => 
            array (
              'fullScreenRichtext' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,content,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_scheduler_task_group' => 
    array (
      'ctrl' => 
      array (
        'label' => 'groupName',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'adminOnly' => true,
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'searchFields' => 'groupName',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,groupName',
      ),
      'columns' => 
      array (
        'groupName' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.groupName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'required,unique,trim',
            'softref' => 'substitute',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,groupName,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
        'selicon_field_path' => 'uploads/media',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,config,description,hidden,icon',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'jpg,gif,png',
            'uploadfolder' => 'uploads/media',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,icon,config,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'useColumnsForDefaultValues' => 'lockToDomain',
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,subgroup,lockToDomain,description',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT(fe_groups.uid = ###THIS_UID###) AND fe_groups.hidden=0 ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'maxitems' => 20,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                1 => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,subgroup,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,lockToDomain,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description',
        'type' => 'tx_extbase_type',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'username,password,usergroup,lockToDomain,name,first_name,middle_name,last_name,title,company,address,zip,city,country,email,www,telephone,fax,disable,starttime,endtime,lastlogin,description',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'nospace,trim,lower,uniqueInPid,required',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 100,
            'eval' => 'trim,required,TYPO3\\CMS\\Saltedpasswords\\Evaluation\\FrontendEvaluator,password',
            'autocomplete' => false,
            'renderType' => 'rsaInput',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
            'size' => 6,
            'minitems' => 1,
            'maxitems' => 50,
          ),
        ),
        'lockToDomain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.lockToDomain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
            'softref' => 'substitute',
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 255,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => '40',
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => '10',
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'maxitems' => 6,
            'minitems' => 0,
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'TSconfig:',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                1 => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,username,password,usergroup,lastlogin,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,company,title,name,--palette--;;2,address,zip,city,country,telephone,fax,email,www,image,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,lockToDomain,TSconfig,felogin_redirectPid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,disable,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'pages_language_overlay' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages_language_overlay',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'hideAtCopy' => 1,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'transOrigPointerField' => 'pid',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'shadowColumnsForNewPlaceholders' => 'title',
        'languageField' => 'sys_language_uid',
        'type' => 'doktype',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-page-language-overlay',
        ),
        'searchFields' => 'title,subtitle,nav_title,keywords,description,abstract,author,author_email,url',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,hidden,starttime,endtime,keywords,description,abstract',
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
              ),
            ),
            'default' => '1',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_checkbox_1_formlabel',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'softref' => 'email[subst]',
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'url' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'max' => 255,
            'eval' => 'trim',
            'softref' => 'url',
          ),
        ),
        'urltype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.automatic',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'http://',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'https://',
                1 => '4',
              ),
              3 => 
              array (
                0 => 'ftp://',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'mailto:',
                1 => '3',
              ),
            ),
            'default' => '1',
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.sorting',
            'items' => 
            array (
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;external,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,doktype,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--palette--;;shortcut,--palette--;;shortcutpage,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        7 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;title,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract;abstract,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        199 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        254 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media;media,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        255 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard;standard,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title;titleonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility;hiddenonly,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        5 => 
        array (
          'showitem' => 'author,author_email',
        ),
        'standard' => 
        array (
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'urltype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.urltype_formlabel, url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel',
        ),
        'title' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel',
        ),
        'hiddenonly' => 
        array (
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel',
        ),
        'abstract' => 
        array (
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'editorial' => 
        array (
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel',
        ),
        'language' => 
        array (
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'media' => 
        array (
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
      ),
    ),
    'sys_domain' => 
    array (
      'ctrl' => 
      array (
        'label' => 'domainName',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-domain',
        ),
        'searchFields' => 'domainName,redirectTo',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,domainName,redirectTo',
      ),
      'columns' => 
      array (
        'domainName' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.domainName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 255,
            'eval' => 'required,unique,lower,trim,domainname',
            'softref' => 'substitute',
          ),
        ),
        'redirectTo' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectTo',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 255,
            'default' => '',
            'eval' => 'trim',
            'softref' => 'substitute',
          ),
        ),
        'redirectHttpStatusCode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.301',
                1 => '301',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.302',
                1 => '302',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.303',
                1 => '303',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.redirectHttpStatusCode.307',
                1 => '307',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'prepend_params' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.prepend_params',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'forced' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_domain.forced',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,domainName,--palette--;;1,prepend_params,forced,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'redirectTo, redirectHttpStatusCode',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,clear,root,basedOn,nextLevel,sitetitle,description,hidden,starttime,endtime',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Constants',
                1 => '',
              ),
              1 => 
              array (
                0 => 'Setup',
                1 => '',
              ),
            ),
            'cols' => 2,
          ),
        ),
        'sitetitle' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.sitetitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 10,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'nextLevel' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.nextLevel',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => '',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                0 => 'TypoScript Content Elements (css_styled_content)',
                1 => 'EXT:css_styled_content/Configuration/TypoScript/',
              ),
              1 => 
              array (
                0 => 'TypoScript Content Elements CSS (optional) (css_styled_content)',
                1 => 'EXT:css_styled_content/Configuration/TypoScript/Styling/',
              ),
              2 => 
              array (
                0 => 'Fluid Content Elements (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              3 => 
              array (
                0 => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              4 => 
              array (
                0 => 'Indexed Search (Extbase & Fluid based) (indexed_search)',
                1 => 'EXT:indexed_search/Configuration/TypoScript',
              ),
              5 => 
              array (
                0 => 'Form (form)',
                1 => 'EXT:form/Configuration/TypoScript/',
              ),
              6 => 
              array (
                0 => 'Gridelements (gridelements)',
                1 => 'EXT:gridelements/Configuration/TypoScript/',
              ),
              7 => 
              array (
                0 => 'Gridelements w/DataProcessing (gridelements)',
                1 => 'EXT:gridelements/Configuration/TypoScript/DataProcessing',
              ),
              8 => 
              array (
                0 => 'News (news)',
                1 => 'EXT:news/Configuration/TypoScript',
              ),
              9 => 
              array (
                0 => 'News Sitemap (news)',
                1 => 'EXT:news/Configuration/TypoScript/Sitemap',
              ),
              10 => 
              array (
                0 => 'News Styles Twitter Bootstrap (news)',
                1 => 'EXT:news/Configuration/TypoScript/Styles/Twb',
              ),
              11 => 
              array (
                0 => 'Main Template (powermail)',
                1 => 'EXT:powermail/Configuration/TypoScript/Main',
              ),
              12 => 
              array (
                0 => 'Powermail_Frontend (powermail)',
                1 => 'EXT:powermail/Configuration/TypoScript/Powermail_Frontend',
              ),
              13 => 
              array (
                0 => 'Add classes and CSS based on bootstrap (powermail)',
                1 => 'EXT:powermail/Configuration/TypoScript/BootstrapClassesAndLayout',
              ),
              14 => 
              array (
                0 => 'Marketing Information (powermail)',
                1 => 'EXT:powermail/Configuration/TypoScript/Marketing',
              ),
              15 => 
              array (
                0 => 'Clickenlarge Rendering (rtehtmlarea)',
                1 => 'EXT:rtehtmlarea/static/clickenlarge/',
              ),
            ),
            'enableMultiSelectFilterTextfield' => true,
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'minitems' => 0,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,sitetitle,constants,config,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,clear,root,nextLevel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.include,includeStaticAfterBasedOn,include_static_file,basedOn,static_file_mode,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;timeRestriction,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType,tx_gridelements_container,tx_gridelements_columns',
        'shadowColumnsForNewPlaceholders' => 'colPos,tx_gridelements_container,tx_gridelements_columns',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'login' => 'mimetypes-x-content-login',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
          'gridelements_pi1' => 'gridelements-default',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
      ),
      'interface' => 
      array (
        'always_description' => 0,
        'showRecordFieldList' => 'CType,header,rowDescription,header_link,bodytext,image,media,imagewidth,imageorient,records,colPos,starttime,endtime,fe_group,categories',
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                1 => 'header',
                2 => 'content-header',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                1 => 'text',
                2 => 'content-text',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                1 => 'textpic',
                2 => 'content-textpic',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                1 => 'image',
                2 => 'content-image',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                1 => 'textmedia',
                2 => 'content-textmedia',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                1 => '--div--',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                1 => 'bullets',
                2 => 'content-bullets',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                1 => 'table',
                2 => 'content-table',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                1 => 'uploads',
                2 => 'content-special-uploads',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                1 => '--div--',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                1 => 'menu_abstract',
                2 => 'content-menu-abstract',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                1 => 'menu_categorized_content',
                2 => 'content-menu-categorized',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                1 => 'menu_categorized_pages',
                2 => 'content-menu-categorized',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                1 => 'menu_pages',
                2 => 'content-menu-pages',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                1 => 'menu_subpages',
                2 => 'content-menu-pages',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                1 => 'menu_recently_updated',
                2 => 'content-menu-recently-updated',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                1 => 'menu_related_pages',
                2 => 'content-menu-related',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                1 => 'menu_section',
                2 => 'content-menu-section',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                1 => 'menu_section_pages',
                2 => 'content-menu-section',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                1 => 'menu_sitemap',
                2 => 'content-menu-sitemap',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                1 => 'menu_sitemap_pages',
                2 => 'content-menu-sitemap-pages',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                1 => '--div--',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                1 => 'shortcut',
                2 => 'content-special-shortcut',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                1 => 'list',
                2 => 'content-plugin',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                1 => 'div',
                2 => 'content-special-div',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                1 => 'html',
                2 => 'content-special-html',
              ),
              27 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
                1 => '--div--',
              ),
              28 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.10',
                1 => 'login',
                2 => 'content-elements-login',
              ),
              29 => 
              array (
                0 => 'Form',
                1 => 'form_formframework',
                2 => 'content-form',
              ),
              30 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.CType_pi1',
                1 => 'gridelements_pi1',
                2 => 'gridelements-default',
              ),
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\CTypeList->itemsProcFunc',
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
            'enableMultiSelectFilterTextfield' => true,
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\SysLanguageUidList->itemsProcFunc',
          ),
        ),
        'l18n_parent' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                1 => 'ruler-before',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                1 => 'ruler-after',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                1 => 'indent',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                1 => 'indent-left',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                1 => 'indent-right',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                1 => 'none',
              ),
            ),
            'default' => 'default',
          ),
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\ColPosList->itemsProcFunc',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                1 => '0',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
          'onChange' => 'reload',
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'typolink_tag',
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                1 => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                1 => 'center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                1 => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'softref' => 'rtehtmlarea_images,typolink_tag',
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'rtehtmlarea_images,typolink_tag,email[subst],url',
            'search' => 
            array (
              'andWhere' => '`CType`=\'text\' OR `CType`=\'textpic\' OR `CType`=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'upper' => 1999,
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                1 => 0,
                2 => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                1 => 1,
                2 => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                1 => 2,
                2 => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                1 => 8,
                2 => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                1 => 9,
                2 => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                1 => 10,
                2 => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                1 => 17,
                2 => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                1 => 18,
                2 => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.8',
                1 => '--div--',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                1 => 25,
                2 => 'content-beside-text-img-right',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                1 => 26,
                2 => 'content-beside-text-img-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
              6 => 
              array (
                0 => '7',
                1 => 7,
              ),
              7 => 
              array (
                0 => '8',
                1 => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => '1',
                1 => '1',
              ),
              2 => 
              array (
                0 => '2',
                1 => '2',
              ),
              3 => 
              array (
                0 => '3',
                1 => '3',
              ),
              4 => 
              array (
                0 => '4',
                1 => '4',
              ),
              5 => 
              array (
                0 => '5',
                1 => '5',
              ),
              6 => 
              array (
                0 => '6',
                1 => '6',
              ),
              7 => 
              array (
                0 => '7',
                1 => '7',
              ),
              8 => 
              array (
                0 => '8',
                1 => '8',
              ),
              9 => 
              array (
                0 => '9',
                1 => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
            'minitems' => 0,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                1 => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'Indexed Search (Extbase & Fluid based)',
                1 => 'indexedsearch_pi2',
                2 => 'EXT:indexed_search/Resources/Public/Icons/Extension.png',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:pi1_title',
                1 => 'news_pi1',
                2 => 'EXT:news/Resources/Public/Icons/Extension.svg',
              ),
              3 => 
              array (
                0 => 'Powermail',
                1 => 'powermail_pi1',
                2 => 'EXT:powermail/Resources/Public/Icons/Extension.svg',
              ),
              4 => 
              array (
                0 => 'Powermail_Frontend',
                1 => 'powermail_pi2',
                2 => 'EXT:powermail/Resources/Public/Icons/Extension.svg',
              ),
            ),
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\ItemsProcFuncs\\ListTypeList->itemsProcFunc',
            'default' => '',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'file_collections' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'minitems' => 0,
            'size' => 5,
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette, --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'filelink_sorting' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                1 => 'extension',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                1 => 'name',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                1 => 'type',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                1 => 'size',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_content,pages,tx_news_domain_model_news',
            'size' => 5,
            'maxitems' => 200,
            'minitems' => 0,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'default' => 1,
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <TCEforms>
                                    <label>The Title:</label>
                                    <config>
                                        <type>input</type>
                                        <size>48</size>
                                    </config>
                                </TCEforms>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,login' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              '*,gridelements_pi1' => '',
              'news_pi1,list' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news.xml',
              'powermail_pi1,list' => 'FILE:EXT:powermail/Configuration/FlexForms/FlexformPi1.xml',
              'powermail_pi2,list' => 'FILE:EXT:powermail/Configuration/FlexForms/FlexformPi2.xml',
            ),
            'search' => 
            array (
              'andWhere' => '`CType`=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND sys_category.sys_language_uid IN (0,-1) ORDER BY sys_category.title ASC',
            'size' => 20,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
              ),
            ),
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Category\\CategoryRegistry->getCategoryFieldsForTable',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                1 => 'striped',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                1 => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                1 => 124,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                1 => 59,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                1 => 44,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                1 => 58,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                1 => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                1 => 39,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                1 => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                1 => 1,
              ),
            ),
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
                1 => 1,
              ),
            ),
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND sys_category.sys_language_uid IN (-1, 0) ORDER BY sys_category.sorting ASC',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_gridelements_backend_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_backend_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\TtContent->layoutItemsProcFunc',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => '',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
          'onChange' => 'reload',
        ),
        'tx_gridelements_children' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_children',
          'config' => 
          array (
            'type' => 'inline',
            'appearance' => 
            array (
              'levelLinksPosition' => 'top',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => false,
                'sort' => false,
                'hide' => true,
                'delete' => true,
                'localize' => true,
              ),
            ),
            'inline' => 
            array (
              'inlineNewButtonStyle' => 'display: inline-block;',
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
            ),
            'foreign_table' => 'tt_content',
            'foreign_field' => 'tx_gridelements_container',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'colPos' => 
                array (
                  'config' => 
                  array (
                    'default' => -1,
                  ),
                ),
              ),
            ),
            'foreign_sortby' => 'sorting',
            'size' => 5,
            'autoSizeMax' => 20,
          ),
        ),
        'tx_gridelements_container' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_container',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'default' => 0,
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND (tt_content.sys_language_uid = ###REC_FIELD_sys_language_uid### OR tt_content.sys_language_uid = -1) AND tt_content.pid=###CURRENT_PID### AND tt_content.CType=\'gridelements_pi1\' AND (tt_content.uid != ###THIS_UID###) AND (tt_content.tx_gridelements_container != ###THIS_UID### OR tt_content.tx_gridelements_container=0) ORDER BY tt_content.header, tt_content.uid',
            'dontRemapTablesOnCopy' => 'tt_content',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\TtContent->containerItemsProcFunc',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'onChange' => 'reload',
        ),
        'tx_gridelements_columns' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tt_content.tx_gridelements_columns',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'GridElementsTeam\\Gridelements\\Backend\\TtContent->columnsItemsProcFunc',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
          'onChange' => 'reload',
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'mw_address' => 
        array (
          'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.address',
          'exclude' => 1,
          'config' => 
          array (
            'type' => 'input',
            'size' => '45',
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'puzzle',
                1 => 'icon-puzzle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/puzzle.svg',
              ),
              1 => 
              array (
                0 => 'circle-compass',
                1 => 'icon-circle-compass',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/circle-compass.svg',
              ),
              2 => 
              array (
                0 => 'twitter',
                1 => 'icon-twitter',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/twitter.svg',
              ),
              3 => 
              array (
                0 => 'camera',
                1 => 'icon-camera',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/camera.svg',
              ),
              4 => 
              array (
                0 => 'wallet',
                1 => 'icon-wallet',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/wallet.svg',
              ),
              5 => 
              array (
                0 => 'lightbulb',
                1 => 'icon-lightbulb',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/lightbulb.svg',
              ),
              6 => 
              array (
                0 => 'tablet',
                1 => 'icon-tablet',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/tablet.svg',
              ),
              7 => 
              array (
                0 => 'dial',
                1 => 'icon-dial',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/dial.svg',
              ),
              8 => 
              array (
                0 => 'map',
                1 => 'icon-map',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/map.svg',
              ),
              9 => 
              array (
                0 => 'paintbrush',
                1 => 'icon-paintbrush',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/paintbrush.svg',
              ),
              10 => 
              array (
                0 => 'dribbble',
                1 => 'icon-dribbble',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/dribbble.svg',
              ),
              11 => 
              array (
                0 => 'upload',
                1 => 'icon-upload',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/upload.svg',
              ),
              12 => 
              array (
                0 => 'presentation',
                1 => 'icon-presentation',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/presentation.svg',
              ),
              13 => 
              array (
                0 => 'hotairballoon',
                1 => 'icon-hotairballoon',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/hotairballoon.svg',
              ),
              14 => 
              array (
                0 => 'speedometer',
                1 => 'icon-speedometer',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/speedometer.svg',
              ),
              15 => 
              array (
                0 => 'flag',
                1 => 'icon-flag',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/flag.svg',
              ),
              16 => 
              array (
                0 => 'heart',
                1 => 'icon-heart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/heart.svg',
              ),
              17 => 
              array (
                0 => 'scissors',
                1 => 'icon-scissors',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/scissors.svg',
              ),
              18 => 
              array (
                0 => 'briefcase',
                1 => 'icon-briefcase',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/briefcase.svg',
              ),
              19 => 
              array (
                0 => 'globe',
                1 => 'icon-globe',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/globe.svg',
              ),
              20 => 
              array (
                0 => 'edit',
                1 => 'icon-edit',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/edit.svg',
              ),
              21 => 
              array (
                0 => 'download',
                1 => 'icon-download',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/download.svg',
              ),
              22 => 
              array (
                0 => 'document',
                1 => 'icon-document',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/document.svg',
              ),
              23 => 
              array (
                0 => 'envelope',
                1 => 'icon-envelope',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/envelope.svg',
              ),
              24 => 
              array (
                0 => 'alarmclock',
                1 => 'icon-alarmclock',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/alarmclock.svg',
              ),
              25 => 
              array (
                0 => 'clock',
                1 => 'icon-clock',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/clock.svg',
              ),
              26 => 
              array (
                0 => 'clipboard',
                1 => 'icon-clipboard',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/clipboard.svg',
              ),
              27 => 
              array (
                0 => 'tools',
                1 => 'icon-tools',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/tools.svg',
              ),
              28 => 
              array (
                0 => 'strategy',
                1 => 'icon-strategy',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/strategy.svg',
              ),
              29 => 
              array (
                0 => 'streetsign',
                1 => 'icon-streetsign',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/streetsign.svg',
              ),
              30 => 
              array (
                0 => 'shield',
                1 => 'icon-shield',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/shield.svg',
              ),
              31 => 
              array (
                0 => 'global',
                1 => 'icon-global',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/global.svg',
              ),
              32 => 
              array (
                0 => 'calendar',
                1 => 'icon-calendar',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/calendar.svg',
              ),
              33 => 
              array (
                0 => 'attachments',
                1 => 'icon-attachments',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/attachments.svg',
              ),
              34 => 
              array (
                0 => 'beaker',
                1 => 'icon-beaker',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/beaker.svg',
              ),
              35 => 
              array (
                0 => 'compass',
                1 => 'icon-compass',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/compass.svg',
              ),
              36 => 
              array (
                0 => 'linegraph',
                1 => 'icon-linegraph',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/linegraph.svg',
              ),
              37 => 
              array (
                0 => 'video',
                1 => 'icon-video',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/video.svg',
              ),
              38 => 
              array (
                0 => 'lifesaver',
                1 => 'icon-lifesaver',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/lifesaver.svg',
              ),
              39 => 
              array (
                0 => 'hazardous',
                1 => 'icon-hazardous',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/hazardous.svg',
              ),
              40 => 
              array (
                0 => 'facebook',
                1 => 'icon-facebook',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/facebook.svg',
              ),
              41 => 
              array (
                0 => 'tumblr',
                1 => 'icon-tumblr',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/tumblr.svg',
              ),
              42 => 
              array (
                0 => 'refresh',
                1 => 'icon-refresh',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/refresh.svg',
              ),
              43 => 
              array (
                0 => 'profile-male',
                1 => 'icon-profile-male',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/profile-male.svg',
              ),
              44 => 
              array (
                0 => 'mic',
                1 => 'icon-mic',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/mic.svg',
              ),
              45 => 
              array (
                0 => 'desktop',
                1 => 'icon-desktop',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/desktop.svg',
              ),
              46 => 
              array (
                0 => 'magnifying-glass',
                1 => 'icon-magnifying-glass',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/magnifying-glass.svg',
              ),
              47 => 
              array (
                0 => 'chat',
                1 => 'icon-chat',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/chat.svg',
              ),
              48 => 
              array (
                0 => 'genius',
                1 => 'icon-genius',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/genius.svg',
              ),
              49 => 
              array (
                0 => 'lock',
                1 => 'icon-lock',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/lock.svg',
              ),
              50 => 
              array (
                0 => 'scope',
                1 => 'icon-scope',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/scope.svg',
              ),
              51 => 
              array (
                0 => 'trophy',
                1 => 'icon-trophy',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/trophy.svg',
              ),
              52 => 
              array (
                0 => 'documents',
                1 => 'icon-documents',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/documents.svg',
              ),
              53 => 
              array (
                0 => 'sad',
                1 => 'icon-sad',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/sad.svg',
              ),
              54 => 
              array (
                0 => 'cloud',
                1 => 'icon-cloud',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/cloud.svg',
              ),
              55 => 
              array (
                0 => 'picture',
                1 => 'icon-picture',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/picture.svg',
              ),
              56 => 
              array (
                0 => 'aperture',
                1 => 'icon-aperture',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/aperture.svg',
              ),
              57 => 
              array (
                0 => 'ribbon',
                1 => 'icon-ribbon',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/ribbon.svg',
              ),
              58 => 
              array (
                0 => 'rss',
                1 => 'icon-rss',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/rss.svg',
              ),
              59 => 
              array (
                0 => 'tools-2',
                1 => 'icon-tools-2',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/tools-2.svg',
              ),
              60 => 
              array (
                0 => 'bike',
                1 => 'icon-bike',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/bike.svg',
              ),
              61 => 
              array (
                0 => 'linkedin',
                1 => 'icon-linkedin',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/linkedin.svg',
              ),
              62 => 
              array (
                0 => 'anchor',
                1 => 'icon-anchor',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/anchor.svg',
              ),
              63 => 
              array (
                0 => 'recycle',
                1 => 'icon-recycle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/recycle.svg',
              ),
              64 => 
              array (
                0 => 'quote',
                1 => 'icon-quote',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/quote.svg',
              ),
              65 => 
              array (
                0 => 'gears',
                1 => 'icon-gears',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/gears.svg',
              ),
              66 => 
              array (
                0 => 'megaphone',
                1 => 'icon-megaphone',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/megaphone.svg',
              ),
              67 => 
              array (
                0 => 'gift',
                1 => 'icon-gift',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/gift.svg',
              ),
              68 => 
              array (
                0 => 'googleplus',
                1 => 'icon-googleplus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/googleplus.svg',
              ),
              69 => 
              array (
                0 => 'profile-female',
                1 => 'icon-profile-female',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/profile-female.svg',
              ),
              70 => 
              array (
                0 => 'newspaper',
                1 => 'icon-newspaper',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/newspaper.svg',
              ),
              71 => 
              array (
                0 => 'hourglass',
                1 => 'icon-hourglass',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/hourglass.svg',
              ),
              72 => 
              array (
                0 => 'pencil',
                1 => 'icon-pencil',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/pencil.svg',
              ),
              73 => 
              array (
                0 => 'traget',
                1 => 'icon-traget',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/traget.svg',
              ),
              74 => 
              array (
                0 => 'book-open',
                1 => 'icon-book-open',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/book-open.svg',
              ),
              75 => 
              array (
                0 => 'focus',
                1 => 'icon-focus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/focus.svg',
              ),
              76 => 
              array (
                0 => 'piechart',
                1 => 'icon-piechart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/piechart.svg',
              ),
              77 => 
              array (
                0 => 'printer',
                1 => 'icon-printer',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/printer.svg',
              ),
              78 => 
              array (
                0 => 'pricetags',
                1 => 'icon-pricetags',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/pricetags.svg',
              ),
              79 => 
              array (
                0 => 'basket',
                1 => 'icon-basket',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/basket.svg',
              ),
              80 => 
              array (
                0 => 'search',
                1 => 'icon-search',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/search.svg',
              ),
              81 => 
              array (
                0 => 'key',
                1 => 'icon-key',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/key.svg',
              ),
              82 => 
              array (
                0 => 'caution',
                1 => 'icon-caution',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/caution.svg',
              ),
              83 => 
              array (
                0 => 'notebook',
                1 => 'icon-notebook',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/notebook.svg',
              ),
              84 => 
              array (
                0 => 'paperclip',
                1 => 'icon-paperclip',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/paperclip.svg',
              ),
              85 => 
              array (
                0 => 'pictures',
                1 => 'icon-pictures',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/pictures.svg',
              ),
              86 => 
              array (
                0 => 'wine',
                1 => 'icon-wine',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/wine.svg',
              ),
              87 => 
              array (
                0 => 'toolbox',
                1 => 'icon-toolbox',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/toolbox.svg',
              ),
              88 => 
              array (
                0 => 'map-pin',
                1 => 'icon-map-pin',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/map-pin.svg',
              ),
              89 => 
              array (
                0 => 'expand',
                1 => 'icon-expand',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/expand.svg',
              ),
              90 => 
              array (
                0 => 'phone',
                1 => 'icon-phone',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/phone.svg',
              ),
              91 => 
              array (
                0 => 'bargraph',
                1 => 'icon-bargraph',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/bargraph.svg',
              ),
              92 => 
              array (
                0 => 'grid',
                1 => 'icon-grid',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/grid.svg',
              ),
              93 => 
              array (
                0 => 'laptop',
                1 => 'icon-laptop',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/laptop.svg',
              ),
              94 => 
              array (
                0 => 'telescope',
                1 => 'icon-telescope',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/telescope.svg',
              ),
              95 => 
              array (
                0 => 'happy',
                1 => 'icon-happy',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/happy.svg',
              ),
              96 => 
              array (
                0 => 'browser',
                1 => 'icon-browser',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/browser.svg',
              ),
              97 => 
              array (
                0 => 'mobile',
                1 => 'icon-mobile',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/mobile.svg',
              ),
              98 => 
              array (
                0 => 'adjustments',
                1 => 'icon-adjustments',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/adjustments.svg',
              ),
              99 => 
              array (
                0 => 'layers',
                1 => 'icon-layers',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/EtLine/layers.svg',
              ),
              100 => 
              array (
                0 => 'angle-left',
                1 => 'fa fa-select-icon fa-angle-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-left.svg',
              ),
              101 => 
              array (
                0 => 'lemon-o',
                1 => 'fa fa-select-icon fa-lemon-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/lemon-o.svg',
              ),
              102 => 
              array (
                0 => 'transgender-alt',
                1 => 'fa fa-select-icon fa-transgender-alt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/transgender-alt.svg',
              ),
              103 => 
              array (
                0 => 'play-circle-o',
                1 => 'fa fa-select-icon fa-play-circle-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/play-circle-o.svg',
              ),
              104 => 
              array (
                0 => 'twitter',
                1 => 'fa fa-select-icon fa-twitter',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/twitter.svg',
              ),
              105 => 
              array (
                0 => 'magnet',
                1 => 'fa fa-select-icon fa-magnet',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/magnet.svg',
              ),
              106 => 
              array (
                0 => 'music',
                1 => 'fa fa-select-icon fa-music',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/music.svg',
              ),
              107 => 
              array (
                0 => 'wheelchair',
                1 => 'fa fa-select-icon fa-wheelchair',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/wheelchair.svg',
              ),
              108 => 
              array (
                0 => 'jsfiddle',
                1 => 'fa fa-select-icon fa-jsfiddle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/jsfiddle.svg',
              ),
              109 => 
              array (
                0 => 'weixin',
                1 => 'fa fa-select-icon fa-weixin',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/weixin.svg',
              ),
              110 => 
              array (
                0 => 'user-plus',
                1 => 'fa fa-select-icon fa-user-plus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/user-plus.svg',
              ),
              111 => 
              array (
                0 => 'chevron-up',
                1 => 'fa fa-select-icon fa-chevron-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-up.svg',
              ),
              112 => 
              array (
                0 => 'sort-alpha-asc',
                1 => 'fa fa-select-icon fa-sort-alpha-asc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-alpha-asc.svg',
              ),
              113 => 
              array (
                0 => 'bold',
                1 => 'fa fa-select-icon fa-bold',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bold.svg',
              ),
              114 => 
              array (
                0 => 'mobile',
                1 => 'fa fa-select-icon fa-mobile',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/mobile.svg',
              ),
              115 => 
              array (
                0 => 'italic',
                1 => 'fa fa-select-icon fa-italic',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/italic.svg',
              ),
              116 => 
              array (
                0 => 'microphone',
                1 => 'fa fa-select-icon fa-microphone',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/microphone.svg',
              ),
              117 => 
              array (
                0 => 'eraser',
                1 => 'fa fa-select-icon fa-eraser',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/eraser.svg',
              ),
              118 => 
              array (
                0 => 'arrow-circle-o-left',
                1 => 'fa fa-select-icon fa-arrow-circle-o-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-o-left.svg',
              ),
              119 => 
              array (
                0 => 'share-alt',
                1 => 'fa fa-select-icon fa-share-alt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/share-alt.svg',
              ),
              120 => 
              array (
                0 => 'ambulance',
                1 => 'fa fa-select-icon fa-ambulance',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ambulance.svg',
              ),
              121 => 
              array (
                0 => 'folder-open-o',
                1 => 'fa fa-select-icon fa-folder-open-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/folder-open-o.svg',
              ),
              122 => 
              array (
                0 => 'power-off',
                1 => 'fa fa-select-icon fa-power-off',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/power-off.svg',
              ),
              123 => 
              array (
                0 => 'facebook',
                1 => 'fa fa-select-icon fa-facebook',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/facebook.svg',
              ),
              124 => 
              array (
                0 => 'chevron-right',
                1 => 'fa fa-select-icon fa-chevron-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-right.svg',
              ),
              125 => 
              array (
                0 => 'bookmark-o',
                1 => 'fa fa-select-icon fa-bookmark-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bookmark-o.svg',
              ),
              126 => 
              array (
                0 => 'minus',
                1 => 'fa fa-select-icon fa-minus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/minus.svg',
              ),
              127 => 
              array (
                0 => 'weibo',
                1 => 'fa fa-select-icon fa-weibo',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/weibo.svg',
              ),
              128 => 
              array (
                0 => 'trash',
                1 => 'fa fa-select-icon fa-trash',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/trash.svg',
              ),
              129 => 
              array (
                0 => 'list-ul',
                1 => 'fa fa-select-icon fa-list-ul',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/list-ul.svg',
              ),
              130 => 
              array (
                0 => 'share-square-o',
                1 => 'fa fa-select-icon fa-share-square-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/share-square-o.svg',
              ),
              131 => 
              array (
                0 => 'sun-o',
                1 => 'fa fa-select-icon fa-sun-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sun-o.svg',
              ),
              132 => 
              array (
                0 => 'thumbs-o-up',
                1 => 'fa fa-select-icon fa-thumbs-o-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/thumbs-o-up.svg',
              ),
              133 => 
              array (
                0 => 'expand',
                1 => 'fa fa-select-icon fa-expand',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/expand.svg',
              ),
              134 => 
              array (
                0 => 'info',
                1 => 'fa fa-select-icon fa-info',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/info.svg',
              ),
              135 => 
              array (
                0 => 'facebook-official',
                1 => 'fa fa-select-icon fa-facebook-official',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/facebook-official.svg',
              ),
              136 => 
              array (
                0 => 'hand-o-left',
                1 => 'fa fa-select-icon fa-hand-o-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/hand-o-left.svg',
              ),
              137 => 
              array (
                0 => 'arrow-circle-up',
                1 => 'fa fa-select-icon fa-arrow-circle-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-up.svg',
              ),
              138 => 
              array (
                0 => 'database',
                1 => 'fa fa-select-icon fa-database',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/database.svg',
              ),
              139 => 
              array (
                0 => 'gift',
                1 => 'fa fa-select-icon fa-gift',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/gift.svg',
              ),
              140 => 
              array (
                0 => 'file-image-o',
                1 => 'fa fa-select-icon fa-file-image-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-image-o.svg',
              ),
              141 => 
              array (
                0 => 'plug',
                1 => 'fa fa-select-icon fa-plug',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/plug.svg',
              ),
              142 => 
              array (
                0 => 'arrows-alt',
                1 => 'fa fa-select-icon fa-arrows-alt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrows-alt.svg',
              ),
              143 => 
              array (
                0 => 'history',
                1 => 'fa fa-select-icon fa-history',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/history.svg',
              ),
              144 => 
              array (
                0 => 'sliders',
                1 => 'fa fa-select-icon fa-sliders',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sliders.svg',
              ),
              145 => 
              array (
                0 => 'steam-square',
                1 => 'fa fa-select-icon fa-steam-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/steam-square.svg',
              ),
              146 => 
              array (
                0 => 'level-down',
                1 => 'fa fa-select-icon fa-level-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/level-down.svg',
              ),
              147 => 
              array (
                0 => 'trash-o',
                1 => 'fa fa-select-icon fa-trash-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/trash-o.svg',
              ),
              148 => 
              array (
                0 => 'venus-double',
                1 => 'fa fa-select-icon fa-venus-double',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/venus-double.svg',
              ),
              149 => 
              array (
                0 => 'laptop',
                1 => 'fa fa-select-icon fa-laptop',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/laptop.svg',
              ),
              150 => 
              array (
                0 => 'street-view',
                1 => 'fa fa-select-icon fa-street-view',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/street-view.svg',
              ),
              151 => 
              array (
                0 => 'skype',
                1 => 'fa fa-select-icon fa-skype',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/skype.svg',
              ),
              152 => 
              array (
                0 => 'hdd-o',
                1 => 'fa fa-select-icon fa-hdd-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/hdd-o.svg',
              ),
              153 => 
              array (
                0 => 'venus-mars',
                1 => 'fa fa-select-icon fa-venus-mars',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/venus-mars.svg',
              ),
              154 => 
              array (
                0 => 'calendar',
                1 => 'fa fa-select-icon fa-calendar',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/calendar.svg',
              ),
              155 => 
              array (
                0 => 'arrow-circle-down',
                1 => 'fa fa-select-icon fa-arrow-circle-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-down.svg',
              ),
              156 => 
              array (
                0 => 'table',
                1 => 'fa fa-select-icon fa-table',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/table.svg',
              ),
              157 => 
              array (
                0 => 'sort-amount-desc',
                1 => 'fa fa-select-icon fa-sort-amount-desc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-amount-desc.svg',
              ),
              158 => 
              array (
                0 => 'toggle-off',
                1 => 'fa fa-select-icon fa-toggle-off',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/toggle-off.svg',
              ),
              159 => 
              array (
                0 => 'xing-square',
                1 => 'fa fa-select-icon fa-xing-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/xing-square.svg',
              ),
              160 => 
              array (
                0 => 'android',
                1 => 'fa fa-select-icon fa-android',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/android.svg',
              ),
              161 => 
              array (
                0 => 'css3',
                1 => 'fa fa-select-icon fa-css3',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/css3.svg',
              ),
              162 => 
              array (
                0 => 'cc-discover',
                1 => 'fa fa-select-icon fa-cc-discover',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cc-discover.svg',
              ),
              163 => 
              array (
                0 => 'arrow-circle-o-down',
                1 => 'fa fa-select-icon fa-arrow-circle-o-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-o-down.svg',
              ),
              164 => 
              array (
                0 => 'behance',
                1 => 'fa fa-select-icon fa-behance',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/behance.svg',
              ),
              165 => 
              array (
                0 => 'twitter-square',
                1 => 'fa fa-select-icon fa-twitter-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/twitter-square.svg',
              ),
              166 => 
              array (
                0 => 'thumb-tack',
                1 => 'fa fa-select-icon fa-thumb-tack',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/thumb-tack.svg',
              ),
              167 => 
              array (
                0 => 'paper-plane-o',
                1 => 'fa fa-select-icon fa-paper-plane-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/paper-plane-o.svg',
              ),
              168 => 
              array (
                0 => 'arrows-h',
                1 => 'fa fa-select-icon fa-arrows-h',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrows-h.svg',
              ),
              169 => 
              array (
                0 => 'circle-thin',
                1 => 'fa fa-select-icon fa-circle-thin',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/circle-thin.svg',
              ),
              170 => 
              array (
                0 => 'ellipsis-v',
                1 => 'fa fa-select-icon fa-ellipsis-v',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ellipsis-v.svg',
              ),
              171 => 
              array (
                0 => 'youtube',
                1 => 'fa fa-select-icon fa-youtube',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/youtube.svg',
              ),
              172 => 
              array (
                0 => 'font',
                1 => 'fa fa-select-icon fa-font',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/font.svg',
              ),
              173 => 
              array (
                0 => 'gbp',
                1 => 'fa fa-select-icon fa-gbp',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/gbp.svg',
              ),
              174 => 
              array (
                0 => 'cube',
                1 => 'fa fa-select-icon fa-cube',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cube.svg',
              ),
              175 => 
              array (
                0 => 'sign-in',
                1 => 'fa fa-select-icon fa-sign-in',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sign-in.svg',
              ),
              176 => 
              array (
                0 => 'taxi',
                1 => 'fa fa-select-icon fa-taxi',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/taxi.svg',
              ),
              177 => 
              array (
                0 => 'clipboard',
                1 => 'fa fa-select-icon fa-clipboard',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/clipboard.svg',
              ),
              178 => 
              array (
                0 => 'cc-paypal',
                1 => 'fa fa-select-icon fa-cc-paypal',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cc-paypal.svg',
              ),
              179 => 
              array (
                0 => 'bell-slash-o',
                1 => 'fa fa-select-icon fa-bell-slash-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bell-slash-o.svg',
              ),
              180 => 
              array (
                0 => 'angle-down',
                1 => 'fa fa-select-icon fa-angle-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-down.svg',
              ),
              181 => 
              array (
                0 => 'chain-broken',
                1 => 'fa fa-select-icon fa-chain-broken',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chain-broken.svg',
              ),
              182 => 
              array (
                0 => 'university',
                1 => 'fa fa-select-icon fa-university',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/university.svg',
              ),
              183 => 
              array (
                0 => 'user-secret',
                1 => 'fa fa-select-icon fa-user-secret',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/user-secret.svg',
              ),
              184 => 
              array (
                0 => 'fast-forward',
                1 => 'fa fa-select-icon fa-fast-forward',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/fast-forward.svg',
              ),
              185 => 
              array (
                0 => 'eur',
                1 => 'fa fa-select-icon fa-eur',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/eur.svg',
              ),
              186 => 
              array (
                0 => 'arrow-circle-left',
                1 => 'fa fa-select-icon fa-arrow-circle-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-left.svg',
              ),
              187 => 
              array (
                0 => 'lock',
                1 => 'fa fa-select-icon fa-lock',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/lock.svg',
              ),
              188 => 
              array (
                0 => 'envelope',
                1 => 'fa fa-select-icon fa-envelope',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/envelope.svg',
              ),
              189 => 
              array (
                0 => 'bomb',
                1 => 'fa fa-select-icon fa-bomb',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bomb.svg',
              ),
              190 => 
              array (
                0 => 'male',
                1 => 'fa fa-select-icon fa-male',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/male.svg',
              ),
              191 => 
              array (
                0 => 'external-link',
                1 => 'fa fa-select-icon fa-external-link',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/external-link.svg',
              ),
              192 => 
              array (
                0 => 'coffee',
                1 => 'fa fa-select-icon fa-coffee',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/coffee.svg',
              ),
              193 => 
              array (
                0 => 'search',
                1 => 'fa fa-select-icon fa-search',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/search.svg',
              ),
              194 => 
              array (
                0 => 'cart-arrow-down',
                1 => 'fa fa-select-icon fa-cart-arrow-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cart-arrow-down.svg',
              ),
              195 => 
              array (
                0 => 'mars-stroke',
                1 => 'fa fa-select-icon fa-mars-stroke',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/mars-stroke.svg',
              ),
              196 => 
              array (
                0 => 'ioxhost',
                1 => 'fa fa-select-icon fa-ioxhost',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ioxhost.svg',
              ),
              197 => 
              array (
                0 => 'circle-o',
                1 => 'fa fa-select-icon fa-circle-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/circle-o.svg',
              ),
              198 => 
              array (
                0 => 'text-width',
                1 => 'fa fa-select-icon fa-text-width',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/text-width.svg',
              ),
              199 => 
              array (
                0 => 'th-list',
                1 => 'fa fa-select-icon fa-th-list',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/th-list.svg',
              ),
              200 => 
              array (
                0 => 'shirtsinbulk',
                1 => 'fa fa-select-icon fa-shirtsinbulk',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/shirtsinbulk.svg',
              ),
              201 => 
              array (
                0 => 'user',
                1 => 'fa fa-select-icon fa-user',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/user.svg',
              ),
              202 => 
              array (
                0 => 'hand-o-down',
                1 => 'fa fa-select-icon fa-hand-o-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/hand-o-down.svg',
              ),
              203 => 
              array (
                0 => 'underline',
                1 => 'fa fa-select-icon fa-underline',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/underline.svg',
              ),
              204 => 
              array (
                0 => 'share',
                1 => 'fa fa-select-icon fa-share',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/share.svg',
              ),
              205 => 
              array (
                0 => 'quote-left',
                1 => 'fa fa-select-icon fa-quote-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/quote-left.svg',
              ),
              206 => 
              array (
                0 => 'terminal',
                1 => 'fa fa-select-icon fa-terminal',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/terminal.svg',
              ),
              207 => 
              array (
                0 => 'suitcase',
                1 => 'fa fa-select-icon fa-suitcase',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/suitcase.svg',
              ),
              208 => 
              array (
                0 => 'slideshare',
                1 => 'fa fa-select-icon fa-slideshare',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/slideshare.svg',
              ),
              209 => 
              array (
                0 => 'leanpub',
                1 => 'fa fa-select-icon fa-leanpub',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/leanpub.svg',
              ),
              210 => 
              array (
                0 => 'download',
                1 => 'fa fa-select-icon fa-download',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/download.svg',
              ),
              211 => 
              array (
                0 => 'align-justify',
                1 => 'fa fa-select-icon fa-align-justify',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/align-justify.svg',
              ),
              212 => 
              array (
                0 => 'git',
                1 => 'fa fa-select-icon fa-git',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/git.svg',
              ),
              213 => 
              array (
                0 => 'briefcase',
                1 => 'fa fa-select-icon fa-briefcase',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/briefcase.svg',
              ),
              214 => 
              array (
                0 => 'joomla',
                1 => 'fa fa-select-icon fa-joomla',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/joomla.svg',
              ),
              215 => 
              array (
                0 => 'bars',
                1 => 'fa fa-select-icon fa-bars',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bars.svg',
              ),
              216 => 
              array (
                0 => 'users',
                1 => 'fa fa-select-icon fa-users',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/users.svg',
              ),
              217 => 
              array (
                0 => 'cc-visa',
                1 => 'fa fa-select-icon fa-cc-visa',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cc-visa.svg',
              ),
              218 => 
              array (
                0 => 'envelope-square',
                1 => 'fa fa-select-icon fa-envelope-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/envelope-square.svg',
              ),
              219 => 
              array (
                0 => 'certificate',
                1 => 'fa fa-select-icon fa-certificate',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/certificate.svg',
              ),
              220 => 
              array (
                0 => 'cc-mastercard',
                1 => 'fa fa-select-icon fa-cc-mastercard',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cc-mastercard.svg',
              ),
              221 => 
              array (
                0 => 'child',
                1 => 'fa fa-select-icon fa-child',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/child.svg',
              ),
              222 => 
              array (
                0 => 'pied-piper-alt',
                1 => 'fa fa-select-icon fa-pied-piper-alt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pied-piper-alt.svg',
              ),
              223 => 
              array (
                0 => 'puzzle-piece',
                1 => 'fa fa-select-icon fa-puzzle-piece',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/puzzle-piece.svg',
              ),
              224 => 
              array (
                0 => 'umbrella',
                1 => 'fa fa-select-icon fa-umbrella',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/umbrella.svg',
              ),
              225 => 
              array (
                0 => 'yelp',
                1 => 'fa fa-select-icon fa-yelp',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/yelp.svg',
              ),
              226 => 
              array (
                0 => 'volume-up',
                1 => 'fa fa-select-icon fa-volume-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/volume-up.svg',
              ),
              227 => 
              array (
                0 => 'times-circle',
                1 => 'fa fa-select-icon fa-times-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/times-circle.svg',
              ),
              228 => 
              array (
                0 => 'scissors',
                1 => 'fa fa-select-icon fa-scissors',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/scissors.svg',
              ),
              229 => 
              array (
                0 => 'step-forward',
                1 => 'fa fa-select-icon fa-step-forward',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/step-forward.svg',
              ),
              230 => 
              array (
                0 => 'btc',
                1 => 'fa fa-select-icon fa-btc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/btc.svg',
              ),
              231 => 
              array (
                0 => 'angle-double-left',
                1 => 'fa fa-select-icon fa-angle-double-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-double-left.svg',
              ),
              232 => 
              array (
                0 => 'bullhorn',
                1 => 'fa fa-select-icon fa-bullhorn',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bullhorn.svg',
              ),
              233 => 
              array (
                0 => 'slack',
                1 => 'fa fa-select-icon fa-slack',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/slack.svg',
              ),
              234 => 
              array (
                0 => 'sellsy',
                1 => 'fa fa-select-icon fa-sellsy',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sellsy.svg',
              ),
              235 => 
              array (
                0 => 'step-backward',
                1 => 'fa fa-select-icon fa-step-backward',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/step-backward.svg',
              ),
              236 => 
              array (
                0 => 'pie-chart',
                1 => 'fa fa-select-icon fa-pie-chart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pie-chart.svg',
              ),
              237 => 
              array (
                0 => 'fire-extinguisher',
                1 => 'fa fa-select-icon fa-fire-extinguisher',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/fire-extinguisher.svg',
              ),
              238 => 
              array (
                0 => 'viacoin',
                1 => 'fa fa-select-icon fa-viacoin',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/viacoin.svg',
              ),
              239 => 
              array (
                0 => 'list',
                1 => 'fa fa-select-icon fa-list',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/list.svg',
              ),
              240 => 
              array (
                0 => 'circle-o-notch',
                1 => 'fa fa-select-icon fa-circle-o-notch',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/circle-o-notch.svg',
              ),
              241 => 
              array (
                0 => 'sort-desc',
                1 => 'fa fa-select-icon fa-sort-desc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-desc.svg',
              ),
              242 => 
              array (
                0 => 'cog',
                1 => 'fa fa-select-icon fa-cog',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cog.svg',
              ),
              243 => 
              array (
                0 => 'reddit',
                1 => 'fa fa-select-icon fa-reddit',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/reddit.svg',
              ),
              244 => 
              array (
                0 => 'keyboard-o',
                1 => 'fa fa-select-icon fa-keyboard-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/keyboard-o.svg',
              ),
              245 => 
              array (
                0 => 'plus',
                1 => 'fa fa-select-icon fa-plus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/plus.svg',
              ),
              246 => 
              array (
                0 => 'times',
                1 => 'fa fa-select-icon fa-times',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/times.svg',
              ),
              247 => 
              array (
                0 => 'info-circle',
                1 => 'fa fa-select-icon fa-info-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/info-circle.svg',
              ),
              248 => 
              array (
                0 => 'comment',
                1 => 'fa fa-select-icon fa-comment',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/comment.svg',
              ),
              249 => 
              array (
                0 => 'search-minus',
                1 => 'fa fa-select-icon fa-search-minus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/search-minus.svg',
              ),
              250 => 
              array (
                0 => 'tty',
                1 => 'fa fa-select-icon fa-tty',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tty.svg',
              ),
              251 => 
              array (
                0 => 'qq',
                1 => 'fa fa-select-icon fa-qq',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/qq.svg',
              ),
              252 => 
              array (
                0 => 'paper-plane',
                1 => 'fa fa-select-icon fa-paper-plane',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/paper-plane.svg',
              ),
              253 => 
              array (
                0 => 'crosshairs',
                1 => 'fa fa-select-icon fa-crosshairs',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/crosshairs.svg',
              ),
              254 => 
              array (
                0 => 'microphone-slash',
                1 => 'fa fa-select-icon fa-microphone-slash',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/microphone-slash.svg',
              ),
              255 => 
              array (
                0 => 'codepen',
                1 => 'fa fa-select-icon fa-codepen',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/codepen.svg',
              ),
              256 => 
              array (
                0 => 'rss-square',
                1 => 'fa fa-select-icon fa-rss-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/rss-square.svg',
              ),
              257 => 
              array (
                0 => 'arrow-left',
                1 => 'fa fa-select-icon fa-arrow-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-left.svg',
              ),
              258 => 
              array (
                0 => 'question-circle',
                1 => 'fa fa-select-icon fa-question-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/question-circle.svg',
              ),
              259 => 
              array (
                0 => 'pencil',
                1 => 'fa fa-select-icon fa-pencil',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pencil.svg',
              ),
              260 => 
              array (
                0 => 'spinner',
                1 => 'fa fa-select-icon fa-spinner',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/spinner.svg',
              ),
              261 => 
              array (
                0 => 'tencent-weibo',
                1 => 'fa fa-select-icon fa-tencent-weibo',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tencent-weibo.svg',
              ),
              262 => 
              array (
                0 => 'text-height',
                1 => 'fa fa-select-icon fa-text-height',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/text-height.svg',
              ),
              263 => 
              array (
                0 => 'subway',
                1 => 'fa fa-select-icon fa-subway',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/subway.svg',
              ),
              264 => 
              array (
                0 => 'reply',
                1 => 'fa fa-select-icon fa-reply',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/reply.svg',
              ),
              265 => 
              array (
                0 => 'sort-numeric-asc',
                1 => 'fa fa-select-icon fa-sort-numeric-asc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-numeric-asc.svg',
              ),
              266 => 
              array (
                0 => 'archive',
                1 => 'fa fa-select-icon fa-archive',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/archive.svg',
              ),
              267 => 
              array (
                0 => 'wordpress',
                1 => 'fa fa-select-icon fa-wordpress',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/wordpress.svg',
              ),
              268 => 
              array (
                0 => 'adjust',
                1 => 'fa fa-select-icon fa-adjust',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/adjust.svg',
              ),
              269 => 
              array (
                0 => 'heart',
                1 => 'fa fa-select-icon fa-heart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/heart.svg',
              ),
              270 => 
              array (
                0 => 'minus-square-o',
                1 => 'fa fa-select-icon fa-minus-square-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/minus-square-o.svg',
              ),
              271 => 
              array (
                0 => 'google-plus',
                1 => 'fa fa-select-icon fa-google-plus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/google-plus.svg',
              ),
              272 => 
              array (
                0 => 'line-chart',
                1 => 'fa fa-select-icon fa-line-chart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/line-chart.svg',
              ),
              273 => 
              array (
                0 => 'angle-double-right',
                1 => 'fa fa-select-icon fa-angle-double-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-double-right.svg',
              ),
              274 => 
              array (
                0 => 'angle-double-down',
                1 => 'fa fa-select-icon fa-angle-double-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-double-down.svg',
              ),
              275 => 
              array (
                0 => 'exclamation',
                1 => 'fa fa-select-icon fa-exclamation',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/exclamation.svg',
              ),
              276 => 
              array (
                0 => 'whatsapp',
                1 => 'fa fa-select-icon fa-whatsapp',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/whatsapp.svg',
              ),
              277 => 
              array (
                0 => 'dribbble',
                1 => 'fa fa-select-icon fa-dribbble',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/dribbble.svg',
              ),
              278 => 
              array (
                0 => 'check-square-o',
                1 => 'fa fa-select-icon fa-check-square-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/check-square-o.svg',
              ),
              279 => 
              array (
                0 => 'location-arrow',
                1 => 'fa fa-select-icon fa-location-arrow',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/location-arrow.svg',
              ),
              280 => 
              array (
                0 => 'globe',
                1 => 'fa fa-select-icon fa-globe',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/globe.svg',
              ),
              281 => 
              array (
                0 => 'credit-card',
                1 => 'fa fa-select-icon fa-credit-card',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/credit-card.svg',
              ),
              282 => 
              array (
                0 => 'mars',
                1 => 'fa fa-select-icon fa-mars',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/mars.svg',
              ),
              283 => 
              array (
                0 => 'anchor',
                1 => 'fa fa-select-icon fa-anchor',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/anchor.svg',
              ),
              284 => 
              array (
                0 => 'drupal',
                1 => 'fa fa-select-icon fa-drupal',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/drupal.svg',
              ),
              285 => 
              array (
                0 => 'question',
                1 => 'fa fa-select-icon fa-question',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/question.svg',
              ),
              286 => 
              array (
                0 => 'th-large',
                1 => 'fa fa-select-icon fa-th-large',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/th-large.svg',
              ),
              287 => 
              array (
                0 => 'cloud-upload',
                1 => 'fa fa-select-icon fa-cloud-upload',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cloud-upload.svg',
              ),
              288 => 
              array (
                0 => 'steam',
                1 => 'fa fa-select-icon fa-steam',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/steam.svg',
              ),
              289 => 
              array (
                0 => 'phone-square',
                1 => 'fa fa-select-icon fa-phone-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/phone-square.svg',
              ),
              290 => 
              array (
                0 => 'linkedin-square',
                1 => 'fa fa-select-icon fa-linkedin-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/linkedin-square.svg',
              ),
              291 => 
              array (
                0 => 'connectdevelop',
                1 => 'fa fa-select-icon fa-connectdevelop',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/connectdevelop.svg',
              ),
              292 => 
              array (
                0 => 'tree',
                1 => 'fa fa-select-icon fa-tree',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tree.svg',
              ),
              293 => 
              array (
                0 => 'medkit',
                1 => 'fa fa-select-icon fa-medkit',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/medkit.svg',
              ),
              294 => 
              array (
                0 => 'tint',
                1 => 'fa fa-select-icon fa-tint',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tint.svg',
              ),
              295 => 
              array (
                0 => 'angle-right',
                1 => 'fa fa-select-icon fa-angle-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-right.svg',
              ),
              296 => 
              array (
                0 => 'long-arrow-up',
                1 => 'fa fa-select-icon fa-long-arrow-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/long-arrow-up.svg',
              ),
              297 => 
              array (
                0 => 'camera-retro',
                1 => 'fa fa-select-icon fa-camera-retro',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/camera-retro.svg',
              ),
              298 => 
              array (
                0 => 'angle-up',
                1 => 'fa fa-select-icon fa-angle-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-up.svg',
              ),
              299 => 
              array (
                0 => 'binoculars',
                1 => 'fa fa-select-icon fa-binoculars',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/binoculars.svg',
              ),
              300 => 
              array (
                0 => 'file-audio-o',
                1 => 'fa fa-select-icon fa-file-audio-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-audio-o.svg',
              ),
              301 => 
              array (
                0 => 'stack-exchange',
                1 => 'fa fa-select-icon fa-stack-exchange',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/stack-exchange.svg',
              ),
              302 => 
              array (
                0 => 'hospital-o',
                1 => 'fa fa-select-icon fa-hospital-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/hospital-o.svg',
              ),
              303 => 
              array (
                0 => 'volume-down',
                1 => 'fa fa-select-icon fa-volume-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/volume-down.svg',
              ),
              304 => 
              array (
                0 => 'krw',
                1 => 'fa fa-select-icon fa-krw',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/krw.svg',
              ),
              305 => 
              array (
                0 => 'arrow-down',
                1 => 'fa fa-select-icon fa-arrow-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-down.svg',
              ),
              306 => 
              array (
                0 => 'reply-all',
                1 => 'fa fa-select-icon fa-reply-all',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/reply-all.svg',
              ),
              307 => 
              array (
                0 => 'foursquare',
                1 => 'fa fa-select-icon fa-foursquare',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/foursquare.svg',
              ),
              308 => 
              array (
                0 => 'flask',
                1 => 'fa fa-select-icon fa-flask',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/flask.svg',
              ),
              309 => 
              array (
                0 => 'beer',
                1 => 'fa fa-select-icon fa-beer',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/beer.svg',
              ),
              310 => 
              array (
                0 => 'trophy',
                1 => 'fa fa-select-icon fa-trophy',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/trophy.svg',
              ),
              311 => 
              array (
                0 => 'diamond',
                1 => 'fa fa-select-icon fa-diamond',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/diamond.svg',
              ),
              312 => 
              array (
                0 => 'pinterest-square',
                1 => 'fa fa-select-icon fa-pinterest-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pinterest-square.svg',
              ),
              313 => 
              array (
                0 => 'neuter',
                1 => 'fa fa-select-icon fa-neuter',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/neuter.svg',
              ),
              314 => 
              array (
                0 => 'eyedropper',
                1 => 'fa fa-select-icon fa-eyedropper',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/eyedropper.svg',
              ),
              315 => 
              array (
                0 => 'fire',
                1 => 'fa fa-select-icon fa-fire',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/fire.svg',
              ),
              316 => 
              array (
                0 => 'mars-stroke-h',
                1 => 'fa fa-select-icon fa-mars-stroke-h',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/mars-stroke-h.svg',
              ),
              317 => 
              array (
                0 => 'ils',
                1 => 'fa fa-select-icon fa-ils',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ils.svg',
              ),
              318 => 
              array (
                0 => 'server',
                1 => 'fa fa-select-icon fa-server',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/server.svg',
              ),
              319 => 
              array (
                0 => 'bed',
                1 => 'fa fa-select-icon fa-bed',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bed.svg',
              ),
              320 => 
              array (
                0 => 'bitbucket',
                1 => 'fa fa-select-icon fa-bitbucket',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bitbucket.svg',
              ),
              321 => 
              array (
                0 => 'bullseye',
                1 => 'fa fa-select-icon fa-bullseye',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bullseye.svg',
              ),
              322 => 
              array (
                0 => 'arrow-up',
                1 => 'fa fa-select-icon fa-arrow-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-up.svg',
              ),
              323 => 
              array (
                0 => 'star-o',
                1 => 'fa fa-select-icon fa-star-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/star-o.svg',
              ),
              324 => 
              array (
                0 => 'refresh',
                1 => 'fa fa-select-icon fa-refresh',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/refresh.svg',
              ),
              325 => 
              array (
                0 => 'backward',
                1 => 'fa fa-select-icon fa-backward',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/backward.svg',
              ),
              326 => 
              array (
                0 => 'desktop',
                1 => 'fa fa-select-icon fa-desktop',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/desktop.svg',
              ),
              327 => 
              array (
                0 => 'header',
                1 => 'fa fa-select-icon fa-header',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/header.svg',
              ),
              328 => 
              array (
                0 => 'venus',
                1 => 'fa fa-select-icon fa-venus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/venus.svg',
              ),
              329 => 
              array (
                0 => 'pencil-square-o',
                1 => 'fa fa-select-icon fa-pencil-square-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pencil-square-o.svg',
              ),
              330 => 
              array (
                0 => 'openid',
                1 => 'fa fa-select-icon fa-openid',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/openid.svg',
              ),
              331 => 
              array (
                0 => 'sort',
                1 => 'fa fa-select-icon fa-sort',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort.svg',
              ),
              332 => 
              array (
                0 => 'star-half',
                1 => 'fa fa-select-icon fa-star-half',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/star-half.svg',
              ),
              333 => 
              array (
                0 => 'compass',
                1 => 'fa fa-select-icon fa-compass',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/compass.svg',
              ),
              334 => 
              array (
                0 => 'rocket',
                1 => 'fa fa-select-icon fa-rocket',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/rocket.svg',
              ),
              335 => 
              array (
                0 => 'sort-amount-asc',
                1 => 'fa fa-select-icon fa-sort-amount-asc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-amount-asc.svg',
              ),
              336 => 
              array (
                0 => 'spotify',
                1 => 'fa fa-select-icon fa-spotify',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/spotify.svg',
              ),
              337 => 
              array (
                0 => 'youtube-square',
                1 => 'fa fa-select-icon fa-youtube-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/youtube-square.svg',
              ),
              338 => 
              array (
                0 => 'bus',
                1 => 'fa fa-select-icon fa-bus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bus.svg',
              ),
              339 => 
              array (
                0 => 'quote-right',
                1 => 'fa fa-select-icon fa-quote-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/quote-right.svg',
              ),
              340 => 
              array (
                0 => 'strikethrough',
                1 => 'fa fa-select-icon fa-strikethrough',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/strikethrough.svg',
              ),
              341 => 
              array (
                0 => 'ban',
                1 => 'fa fa-select-icon fa-ban',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ban.svg',
              ),
              342 => 
              array (
                0 => 'caret-up',
                1 => 'fa fa-select-icon fa-caret-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-up.svg',
              ),
              343 => 
              array (
                0 => 'film',
                1 => 'fa fa-select-icon fa-film',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/film.svg',
              ),
              344 => 
              array (
                0 => 'area-chart',
                1 => 'fa fa-select-icon fa-area-chart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/area-chart.svg',
              ),
              345 => 
              array (
                0 => 'thumbs-down',
                1 => 'fa fa-select-icon fa-thumbs-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/thumbs-down.svg',
              ),
              346 => 
              array (
                0 => 'tumblr',
                1 => 'fa fa-select-icon fa-tumblr',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tumblr.svg',
              ),
              347 => 
              array (
                0 => 'thumbs-o-down',
                1 => 'fa fa-select-icon fa-thumbs-o-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/thumbs-o-down.svg',
              ),
              348 => 
              array (
                0 => 'check',
                1 => 'fa fa-select-icon fa-check',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/check.svg',
              ),
              349 => 
              array (
                0 => 'arrows-v',
                1 => 'fa fa-select-icon fa-arrows-v',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrows-v.svg',
              ),
              350 => 
              array (
                0 => 'delicious',
                1 => 'fa fa-select-icon fa-delicious',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/delicious.svg',
              ),
              351 => 
              array (
                0 => 'ellipsis-h',
                1 => 'fa fa-select-icon fa-ellipsis-h',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ellipsis-h.svg',
              ),
              352 => 
              array (
                0 => 'usd',
                1 => 'fa fa-select-icon fa-usd',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/usd.svg',
              ),
              353 => 
              array (
                0 => 'maxcdn',
                1 => 'fa fa-select-icon fa-maxcdn',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/maxcdn.svg',
              ),
              354 => 
              array (
                0 => 'twitch',
                1 => 'fa fa-select-icon fa-twitch',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/twitch.svg',
              ),
              355 => 
              array (
                0 => 'stack-overflow',
                1 => 'fa fa-select-icon fa-stack-overflow',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/stack-overflow.svg',
              ),
              356 => 
              array (
                0 => 'comments-o',
                1 => 'fa fa-select-icon fa-comments-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/comments-o.svg',
              ),
              357 => 
              array (
                0 => 'arrow-circle-o-up',
                1 => 'fa fa-select-icon fa-arrow-circle-o-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-o-up.svg',
              ),
              358 => 
              array (
                0 => 'th',
                1 => 'fa fa-select-icon fa-th',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/th.svg',
              ),
              359 => 
              array (
                0 => 'crop',
                1 => 'fa fa-select-icon fa-crop',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/crop.svg',
              ),
              360 => 
              array (
                0 => 'barcode',
                1 => 'fa fa-select-icon fa-barcode',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/barcode.svg',
              ),
              361 => 
              array (
                0 => 'forward',
                1 => 'fa fa-select-icon fa-forward',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/forward.svg',
              ),
              362 => 
              array (
                0 => 'home',
                1 => 'fa fa-select-icon fa-home',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/home.svg',
              ),
              363 => 
              array (
                0 => 'user-md',
                1 => 'fa fa-select-icon fa-user-md',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/user-md.svg',
              ),
              364 => 
              array (
                0 => 'columns',
                1 => 'fa fa-select-icon fa-columns',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/columns.svg',
              ),
              365 => 
              array (
                0 => 'try',
                1 => 'fa fa-select-icon fa-try',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/try.svg',
              ),
              366 => 
              array (
                0 => 'pied-piper',
                1 => 'fa fa-select-icon fa-pied-piper',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pied-piper.svg',
              ),
              367 => 
              array (
                0 => 'newspaper-o',
                1 => 'fa fa-select-icon fa-newspaper-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/newspaper-o.svg',
              ),
              368 => 
              array (
                0 => 'adn',
                1 => 'fa fa-select-icon fa-adn',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/adn.svg',
              ),
              369 => 
              array (
                0 => 'caret-square-o-up',
                1 => 'fa fa-select-icon fa-caret-square-o-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-square-o-up.svg',
              ),
              370 => 
              array (
                0 => 'wrench',
                1 => 'fa fa-select-icon fa-wrench',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/wrench.svg',
              ),
              371 => 
              array (
                0 => 'star-half-o',
                1 => 'fa fa-select-icon fa-star-half-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/star-half-o.svg',
              ),
              372 => 
              array (
                0 => 'google-plus-square',
                1 => 'fa fa-select-icon fa-google-plus-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/google-plus-square.svg',
              ),
              373 => 
              array (
                0 => 'recycle',
                1 => 'fa fa-select-icon fa-recycle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/recycle.svg',
              ),
              374 => 
              array (
                0 => 'shield',
                1 => 'fa fa-select-icon fa-shield',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/shield.svg',
              ),
              375 => 
              array (
                0 => 'arrow-right',
                1 => 'fa fa-select-icon fa-arrow-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-right.svg',
              ),
              376 => 
              array (
                0 => 'soundcloud',
                1 => 'fa fa-select-icon fa-soundcloud',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/soundcloud.svg',
              ),
              377 => 
              array (
                0 => 'caret-square-o-left',
                1 => 'fa fa-select-icon fa-caret-square-o-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-square-o-left.svg',
              ),
              378 => 
              array (
                0 => 'github-alt',
                1 => 'fa fa-select-icon fa-github-alt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/github-alt.svg',
              ),
              379 => 
              array (
                0 => 'copyright',
                1 => 'fa fa-select-icon fa-copyright',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/copyright.svg',
              ),
              380 => 
              array (
                0 => 'angellist',
                1 => 'fa fa-select-icon fa-angellist',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angellist.svg',
              ),
              381 => 
              array (
                0 => 'eject',
                1 => 'fa fa-select-icon fa-eject',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/eject.svg',
              ),
              382 => 
              array (
                0 => 'shopping-cart',
                1 => 'fa fa-select-icon fa-shopping-cart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/shopping-cart.svg',
              ),
              383 => 
              array (
                0 => 'headphones',
                1 => 'fa fa-select-icon fa-headphones',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/headphones.svg',
              ),
              384 => 
              array (
                0 => 'paypal',
                1 => 'fa fa-select-icon fa-paypal',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/paypal.svg',
              ),
              385 => 
              array (
                0 => 'arrow-circle-o-right',
                1 => 'fa fa-select-icon fa-arrow-circle-o-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-o-right.svg',
              ),
              386 => 
              array (
                0 => 'flag',
                1 => 'fa fa-select-icon fa-flag',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/flag.svg',
              ),
              387 => 
              array (
                0 => 'thumbs-up',
                1 => 'fa fa-select-icon fa-thumbs-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/thumbs-up.svg',
              ),
              388 => 
              array (
                0 => 'exclamation-circle',
                1 => 'fa fa-select-icon fa-exclamation-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/exclamation-circle.svg',
              ),
              389 => 
              array (
                0 => 'key',
                1 => 'fa fa-select-icon fa-key',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/key.svg',
              ),
              390 => 
              array (
                0 => 'minus-square',
                1 => 'fa fa-select-icon fa-minus-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/minus-square.svg',
              ),
              391 => 
              array (
                0 => 'times-circle-o',
                1 => 'fa fa-select-icon fa-times-circle-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/times-circle-o.svg',
              ),
              392 => 
              array (
                0 => 'minus-circle',
                1 => 'fa fa-select-icon fa-minus-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/minus-circle.svg',
              ),
              393 => 
              array (
                0 => 'forumbee',
                1 => 'fa fa-select-icon fa-forumbee',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/forumbee.svg',
              ),
              394 => 
              array (
                0 => 'random',
                1 => 'fa fa-select-icon fa-random',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/random.svg',
              ),
              395 => 
              array (
                0 => 'jpy',
                1 => 'fa fa-select-icon fa-jpy',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/jpy.svg',
              ),
              396 => 
              array (
                0 => 'bell',
                1 => 'fa fa-select-icon fa-bell',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bell.svg',
              ),
              397 => 
              array (
                0 => 'flag-o',
                1 => 'fa fa-select-icon fa-flag-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/flag-o.svg',
              ),
              398 => 
              array (
                0 => 'print',
                1 => 'fa fa-select-icon fa-print',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/print.svg',
              ),
              399 => 
              array (
                0 => 'user-times',
                1 => 'fa fa-select-icon fa-user-times',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/user-times.svg',
              ),
              400 => 
              array (
                0 => 'file-video-o',
                1 => 'fa fa-select-icon fa-file-video-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-video-o.svg',
              ),
              401 => 
              array (
                0 => 'link',
                1 => 'fa fa-select-icon fa-link',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/link.svg',
              ),
              402 => 
              array (
                0 => 'bolt',
                1 => 'fa fa-select-icon fa-bolt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bolt.svg',
              ),
              403 => 
              array (
                0 => 'dashcube',
                1 => 'fa fa-select-icon fa-dashcube',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/dashcube.svg',
              ),
              404 => 
              array (
                0 => 'tags',
                1 => 'fa fa-select-icon fa-tags',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tags.svg',
              ),
              405 => 
              array (
                0 => 'pause',
                1 => 'fa fa-select-icon fa-pause',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pause.svg',
              ),
              406 => 
              array (
                0 => 'bar-chart',
                1 => 'fa fa-select-icon fa-bar-chart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bar-chart.svg',
              ),
              407 => 
              array (
                0 => 'paperclip',
                1 => 'fa fa-select-icon fa-paperclip',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/paperclip.svg',
              ),
              408 => 
              array (
                0 => 'flag-checkered',
                1 => 'fa fa-select-icon fa-flag-checkered',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/flag-checkered.svg',
              ),
              409 => 
              array (
                0 => 'github-square',
                1 => 'fa fa-select-icon fa-github-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/github-square.svg',
              ),
              410 => 
              array (
                0 => 'eye',
                1 => 'fa fa-select-icon fa-eye',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/eye.svg',
              ),
              411 => 
              array (
                0 => 'code',
                1 => 'fa fa-select-icon fa-code',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/code.svg',
              ),
              412 => 
              array (
                0 => 'stumbleupon-circle',
                1 => 'fa fa-select-icon fa-stumbleupon-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/stumbleupon-circle.svg',
              ),
              413 => 
              array (
                0 => 'pinterest-p',
                1 => 'fa fa-select-icon fa-pinterest-p',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pinterest-p.svg',
              ),
              414 => 
              array (
                0 => 'plus-square-o',
                1 => 'fa fa-select-icon fa-plus-square-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/plus-square-o.svg',
              ),
              415 => 
              array (
                0 => 'ship',
                1 => 'fa fa-select-icon fa-ship',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ship.svg',
              ),
              416 => 
              array (
                0 => 'file-archive-o',
                1 => 'fa fa-select-icon fa-file-archive-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-archive-o.svg',
              ),
              417 => 
              array (
                0 => 'truck',
                1 => 'fa fa-select-icon fa-truck',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/truck.svg',
              ),
              418 => 
              array (
                0 => 'file-code-o',
                1 => 'fa fa-select-icon fa-file-code-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-code-o.svg',
              ),
              419 => 
              array (
                0 => 'dot-circle-o',
                1 => 'fa fa-select-icon fa-dot-circle-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/dot-circle-o.svg',
              ),
              420 => 
              array (
                0 => 'windows',
                1 => 'fa fa-select-icon fa-windows',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/windows.svg',
              ),
              421 => 
              array (
                0 => 'star',
                1 => 'fa fa-select-icon fa-star',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/star.svg',
              ),
              422 => 
              array (
                0 => 'undo',
                1 => 'fa fa-select-icon fa-undo',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/undo.svg',
              ),
              423 => 
              array (
                0 => 'map-marker',
                1 => 'fa fa-select-icon fa-map-marker',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/map-marker.svg',
              ),
              424 => 
              array (
                0 => 'external-link-square',
                1 => 'fa fa-select-icon fa-external-link-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/external-link-square.svg',
              ),
              425 => 
              array (
                0 => 'sort-alpha-desc',
                1 => 'fa fa-select-icon fa-sort-alpha-desc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-alpha-desc.svg',
              ),
              426 => 
              array (
                0 => 'vk',
                1 => 'fa fa-select-icon fa-vk',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/vk.svg',
              ),
              427 => 
              array (
                0 => 'meh-o',
                1 => 'fa fa-select-icon fa-meh-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/meh-o.svg',
              ),
              428 => 
              array (
                0 => 'bookmark',
                1 => 'fa fa-select-icon fa-bookmark',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bookmark.svg',
              ),
              429 => 
              array (
                0 => 'skyatlas',
                1 => 'fa fa-select-icon fa-skyatlas',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/skyatlas.svg',
              ),
              430 => 
              array (
                0 => 'space-shuttle',
                1 => 'fa fa-select-icon fa-space-shuttle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/space-shuttle.svg',
              ),
              431 => 
              array (
                0 => 'sitemap',
                1 => 'fa fa-select-icon fa-sitemap',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sitemap.svg',
              ),
              432 => 
              array (
                0 => 'gamepad',
                1 => 'fa fa-select-icon fa-gamepad',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/gamepad.svg',
              ),
              433 => 
              array (
                0 => 'angle-double-up',
                1 => 'fa fa-select-icon fa-angle-double-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/angle-double-up.svg',
              ),
              434 => 
              array (
                0 => 'hand-o-up',
                1 => 'fa fa-select-icon fa-hand-o-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/hand-o-up.svg',
              ),
              435 => 
              array (
                0 => 'share-alt-square',
                1 => 'fa fa-select-icon fa-share-alt-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/share-alt-square.svg',
              ),
              436 => 
              array (
                0 => 'building-o',
                1 => 'fa fa-select-icon fa-building-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/building-o.svg',
              ),
              437 => 
              array (
                0 => 'plane',
                1 => 'fa fa-select-icon fa-plane',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/plane.svg',
              ),
              438 => 
              array (
                0 => 'female',
                1 => 'fa fa-select-icon fa-female',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/female.svg',
              ),
              439 => 
              array (
                0 => 'file-text',
                1 => 'fa fa-select-icon fa-file-text',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-text.svg',
              ),
              440 => 
              array (
                0 => 'cutlery',
                1 => 'fa fa-select-icon fa-cutlery',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cutlery.svg',
              ),
              441 => 
              array (
                0 => 'github',
                1 => 'fa fa-select-icon fa-github',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/github.svg',
              ),
              442 => 
              array (
                0 => 'lastfm-square',
                1 => 'fa fa-select-icon fa-lastfm-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/lastfm-square.svg',
              ),
              443 => 
              array (
                0 => 'at',
                1 => 'fa fa-select-icon fa-at',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/at.svg',
              ),
              444 => 
              array (
                0 => 'square-o',
                1 => 'fa fa-select-icon fa-square-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/square-o.svg',
              ),
              445 => 
              array (
                0 => 'stethoscope',
                1 => 'fa fa-select-icon fa-stethoscope',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/stethoscope.svg',
              ),
              446 => 
              array (
                0 => 'motorcycle',
                1 => 'fa fa-select-icon fa-motorcycle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/motorcycle.svg',
              ),
              447 => 
              array (
                0 => 'video-camera',
                1 => 'fa fa-select-icon fa-video-camera',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/video-camera.svg',
              ),
              448 => 
              array (
                0 => 'share-square',
                1 => 'fa fa-select-icon fa-share-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/share-square.svg',
              ),
              449 => 
              array (
                0 => 'file-o',
                1 => 'fa fa-select-icon fa-file-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-o.svg',
              ),
              450 => 
              array (
                0 => 'retweet',
                1 => 'fa fa-select-icon fa-retweet',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/retweet.svg',
              ),
              451 => 
              array (
                0 => 'list-ol',
                1 => 'fa fa-select-icon fa-list-ol',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/list-ol.svg',
              ),
              452 => 
              array (
                0 => 'phone',
                1 => 'fa fa-select-icon fa-phone',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/phone.svg',
              ),
              453 => 
              array (
                0 => 'plus-circle',
                1 => 'fa fa-select-icon fa-plus-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/plus-circle.svg',
              ),
              454 => 
              array (
                0 => 'comment-o',
                1 => 'fa fa-select-icon fa-comment-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/comment-o.svg',
              ),
              455 => 
              array (
                0 => 'inbox',
                1 => 'fa fa-select-icon fa-inbox',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/inbox.svg',
              ),
              456 => 
              array (
                0 => 'vine',
                1 => 'fa fa-select-icon fa-vine',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/vine.svg',
              ),
              457 => 
              array (
                0 => 'plus-square',
                1 => 'fa fa-select-icon fa-plus-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/plus-square.svg',
              ),
              458 => 
              array (
                0 => 'car',
                1 => 'fa fa-select-icon fa-car',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/car.svg',
              ),
              459 => 
              array (
                0 => 'building',
                1 => 'fa fa-select-icon fa-building',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/building.svg',
              ),
              460 => 
              array (
                0 => 'trello',
                1 => 'fa fa-select-icon fa-trello',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/trello.svg',
              ),
              461 => 
              array (
                0 => 'paragraph',
                1 => 'fa fa-select-icon fa-paragraph',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/paragraph.svg',
              ),
              462 => 
              array (
                0 => 'list-alt',
                1 => 'fa fa-select-icon fa-list-alt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/list-alt.svg',
              ),
              463 => 
              array (
                0 => 'caret-square-o-down',
                1 => 'fa fa-select-icon fa-caret-square-o-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-square-o-down.svg',
              ),
              464 => 
              array (
                0 => 'clock-o',
                1 => 'fa fa-select-icon fa-clock-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/clock-o.svg',
              ),
              465 => 
              array (
                0 => 'exclamation-triangle',
                1 => 'fa fa-select-icon fa-exclamation-triangle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/exclamation-triangle.svg',
              ),
              466 => 
              array (
                0 => 'paint-brush',
                1 => 'fa fa-select-icon fa-paint-brush',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/paint-brush.svg',
              ),
              467 => 
              array (
                0 => 'repeat',
                1 => 'fa fa-select-icon fa-repeat',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/repeat.svg',
              ),
              468 => 
              array (
                0 => 'filter',
                1 => 'fa fa-select-icon fa-filter',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/filter.svg',
              ),
              469 => 
              array (
                0 => 'moon-o',
                1 => 'fa fa-select-icon fa-moon-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/moon-o.svg',
              ),
              470 => 
              array (
                0 => 'toggle-on',
                1 => 'fa fa-select-icon fa-toggle-on',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/toggle-on.svg',
              ),
              471 => 
              array (
                0 => 'unlock',
                1 => 'fa fa-select-icon fa-unlock',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/unlock.svg',
              ),
              472 => 
              array (
                0 => 'instagram',
                1 => 'fa fa-select-icon fa-instagram',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/instagram.svg',
              ),
              473 => 
              array (
                0 => 'check-circle',
                1 => 'fa fa-select-icon fa-check-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/check-circle.svg',
              ),
              474 => 
              array (
                0 => 'cloud-download',
                1 => 'fa fa-select-icon fa-cloud-download',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cloud-download.svg',
              ),
              475 => 
              array (
                0 => 'superscript',
                1 => 'fa fa-select-icon fa-superscript',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/superscript.svg',
              ),
              476 => 
              array (
                0 => 'asterisk',
                1 => 'fa fa-select-icon fa-asterisk',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/asterisk.svg',
              ),
              477 => 
              array (
                0 => 'check-square',
                1 => 'fa fa-select-icon fa-check-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/check-square.svg',
              ),
              478 => 
              array (
                0 => 'digg',
                1 => 'fa fa-select-icon fa-digg',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/digg.svg',
              ),
              479 => 
              array (
                0 => 'level-up',
                1 => 'fa fa-select-icon fa-level-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/level-up.svg',
              ),
              480 => 
              array (
                0 => 'graduation-cap',
                1 => 'fa fa-select-icon fa-graduation-cap',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/graduation-cap.svg',
              ),
              481 => 
              array (
                0 => 'files-o',
                1 => 'fa fa-select-icon fa-files-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/files-o.svg',
              ),
              482 => 
              array (
                0 => 'caret-square-o-right',
                1 => 'fa fa-select-icon fa-caret-square-o-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-square-o-right.svg',
              ),
              483 => 
              array (
                0 => 'file-word-o',
                1 => 'fa fa-select-icon fa-file-word-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-word-o.svg',
              ),
              484 => 
              array (
                0 => 'mars-double',
                1 => 'fa fa-select-icon fa-mars-double',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/mars-double.svg',
              ),
              485 => 
              array (
                0 => 'youtube-play',
                1 => 'fa fa-select-icon fa-youtube-play',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/youtube-play.svg',
              ),
              486 => 
              array (
                0 => 'chevron-circle-up',
                1 => 'fa fa-select-icon fa-chevron-circle-up',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-circle-up.svg',
              ),
              487 => 
              array (
                0 => 'hacker-news',
                1 => 'fa fa-select-icon fa-hacker-news',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/hacker-news.svg',
              ),
              488 => 
              array (
                0 => 'chevron-circle-left',
                1 => 'fa fa-select-icon fa-chevron-circle-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-circle-left.svg',
              ),
              489 => 
              array (
                0 => 'caret-right',
                1 => 'fa fa-select-icon fa-caret-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-right.svg',
              ),
              490 => 
              array (
                0 => 'arrow-circle-right',
                1 => 'fa fa-select-icon fa-arrow-circle-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrow-circle-right.svg',
              ),
              491 => 
              array (
                0 => 'align-left',
                1 => 'fa fa-select-icon fa-align-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/align-left.svg',
              ),
              492 => 
              array (
                0 => 'eye-slash',
                1 => 'fa fa-select-icon fa-eye-slash',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/eye-slash.svg',
              ),
              493 => 
              array (
                0 => 'caret-left',
                1 => 'fa fa-select-icon fa-caret-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-left.svg',
              ),
              494 => 
              array (
                0 => 'meanpath',
                1 => 'fa fa-select-icon fa-meanpath',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/meanpath.svg',
              ),
              495 => 
              array (
                0 => 'outdent',
                1 => 'fa fa-select-icon fa-outdent',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/outdent.svg',
              ),
              496 => 
              array (
                0 => 'renren',
                1 => 'fa fa-select-icon fa-renren',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/renren.svg',
              ),
              497 => 
              array (
                0 => 'dropbox',
                1 => 'fa fa-select-icon fa-dropbox',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/dropbox.svg',
              ),
              498 => 
              array (
                0 => 'play-circle',
                1 => 'fa fa-select-icon fa-play-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/play-circle.svg',
              ),
              499 => 
              array (
                0 => 'google',
                1 => 'fa fa-select-icon fa-google',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/google.svg',
              ),
              500 => 
              array (
                0 => 'flickr',
                1 => 'fa fa-select-icon fa-flickr',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/flickr.svg',
              ),
              501 => 
              array (
                0 => 'life-ring',
                1 => 'fa fa-select-icon fa-life-ring',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/life-ring.svg',
              ),
              502 => 
              array (
                0 => 'bell-o',
                1 => 'fa fa-select-icon fa-bell-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bell-o.svg',
              ),
              503 => 
              array (
                0 => 'subscript',
                1 => 'fa fa-select-icon fa-subscript',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/subscript.svg',
              ),
              504 => 
              array (
                0 => 'fast-backward',
                1 => 'fa fa-select-icon fa-fast-backward',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/fast-backward.svg',
              ),
              505 => 
              array (
                0 => 'file-pdf-o',
                1 => 'fa fa-select-icon fa-file-pdf-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-pdf-o.svg',
              ),
              506 => 
              array (
                0 => 'tumblr-square',
                1 => 'fa fa-select-icon fa-tumblr-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tumblr-square.svg',
              ),
              507 => 
              array (
                0 => 'empire',
                1 => 'fa fa-select-icon fa-empire',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/empire.svg',
              ),
              508 => 
              array (
                0 => 'sign-out',
                1 => 'fa fa-select-icon fa-sign-out',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sign-out.svg',
              ),
              509 => 
              array (
                0 => 'envelope-o',
                1 => 'fa fa-select-icon fa-envelope-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/envelope-o.svg',
              ),
              510 => 
              array (
                0 => 'rss',
                1 => 'fa fa-select-icon fa-rss',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/rss.svg',
              ),
              511 => 
              array (
                0 => 'bug',
                1 => 'fa fa-select-icon fa-bug',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bug.svg',
              ),
              512 => 
              array (
                0 => 'compress',
                1 => 'fa fa-select-icon fa-compress',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/compress.svg',
              ),
              513 => 
              array (
                0 => 'ticket',
                1 => 'fa fa-select-icon fa-ticket',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/ticket.svg',
              ),
              514 => 
              array (
                0 => 'floppy-o',
                1 => 'fa fa-select-icon fa-floppy-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/floppy-o.svg',
              ),
              515 => 
              array (
                0 => 'vimeo-square',
                1 => 'fa fa-select-icon fa-vimeo-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/vimeo-square.svg',
              ),
              516 => 
              array (
                0 => 'long-arrow-left',
                1 => 'fa fa-select-icon fa-long-arrow-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/long-arrow-left.svg',
              ),
              517 => 
              array (
                0 => 'facebook-square',
                1 => 'fa fa-select-icon fa-facebook-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/facebook-square.svg',
              ),
              518 => 
              array (
                0 => 'sort-asc',
                1 => 'fa fa-select-icon fa-sort-asc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-asc.svg',
              ),
              519 => 
              array (
                0 => 'reddit-square',
                1 => 'fa fa-select-icon fa-reddit-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/reddit-square.svg',
              ),
              520 => 
              array (
                0 => 'pinterest',
                1 => 'fa fa-select-icon fa-pinterest',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pinterest.svg',
              ),
              521 => 
              array (
                0 => 'calculator',
                1 => 'fa fa-select-icon fa-calculator',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/calculator.svg',
              ),
              522 => 
              array (
                0 => 'file',
                1 => 'fa fa-select-icon fa-file',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file.svg',
              ),
              523 => 
              array (
                0 => 'long-arrow-right',
                1 => 'fa fa-select-icon fa-long-arrow-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/long-arrow-right.svg',
              ),
              524 => 
              array (
                0 => 'gratipay',
                1 => 'fa fa-select-icon fa-gratipay',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/gratipay.svg',
              ),
              525 => 
              array (
                0 => 'picture-o',
                1 => 'fa fa-select-icon fa-picture-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/picture-o.svg',
              ),
              526 => 
              array (
                0 => 'cart-plus',
                1 => 'fa fa-select-icon fa-cart-plus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cart-plus.svg',
              ),
              527 => 
              array (
                0 => 'cc-stripe',
                1 => 'fa fa-select-icon fa-cc-stripe',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cc-stripe.svg',
              ),
              528 => 
              array (
                0 => 'h-square',
                1 => 'fa fa-select-icon fa-h-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/h-square.svg',
              ),
              529 => 
              array (
                0 => 'search-plus',
                1 => 'fa fa-select-icon fa-search-plus',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/search-plus.svg',
              ),
              530 => 
              array (
                0 => 'money',
                1 => 'fa fa-select-icon fa-money',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/money.svg',
              ),
              531 => 
              array (
                0 => 'chevron-down',
                1 => 'fa fa-select-icon fa-chevron-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-down.svg',
              ),
              532 => 
              array (
                0 => 'git-square',
                1 => 'fa fa-select-icon fa-git-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/git-square.svg',
              ),
              533 => 
              array (
                0 => 'mars-stroke-v',
                1 => 'fa fa-select-icon fa-mars-stroke-v',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/mars-stroke-v.svg',
              ),
              534 => 
              array (
                0 => 'rebel',
                1 => 'fa fa-select-icon fa-rebel',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/rebel.svg',
              ),
              535 => 
              array (
                0 => 'file-text-o',
                1 => 'fa fa-select-icon fa-file-text-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-text-o.svg',
              ),
              536 => 
              array (
                0 => 'leaf',
                1 => 'fa fa-select-icon fa-leaf',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/leaf.svg',
              ),
              537 => 
              array (
                0 => 'unlock-alt',
                1 => 'fa fa-select-icon fa-unlock-alt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/unlock-alt.svg',
              ),
              538 => 
              array (
                0 => 'pencil-square',
                1 => 'fa fa-select-icon fa-pencil-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pencil-square.svg',
              ),
              539 => 
              array (
                0 => 'linux',
                1 => 'fa fa-select-icon fa-linux',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/linux.svg',
              ),
              540 => 
              array (
                0 => 'heartbeat',
                1 => 'fa fa-select-icon fa-heartbeat',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/heartbeat.svg',
              ),
              541 => 
              array (
                0 => 'cc',
                1 => 'fa fa-select-icon fa-cc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cc.svg',
              ),
              542 => 
              array (
                0 => 'apple',
                1 => 'fa fa-select-icon fa-apple',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/apple.svg',
              ),
              543 => 
              array (
                0 => 'birthday-cake',
                1 => 'fa fa-select-icon fa-birthday-cake',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/birthday-cake.svg',
              ),
              544 => 
              array (
                0 => 'cloud',
                1 => 'fa fa-select-icon fa-cloud',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cloud.svg',
              ),
              545 => 
              array (
                0 => 'arrows',
                1 => 'fa fa-select-icon fa-arrows',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/arrows.svg',
              ),
              546 => 
              array (
                0 => 'smile-o',
                1 => 'fa fa-select-icon fa-smile-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/smile-o.svg',
              ),
              547 => 
              array (
                0 => 'bitbucket-square',
                1 => 'fa fa-select-icon fa-bitbucket-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bitbucket-square.svg',
              ),
              548 => 
              array (
                0 => 'tag',
                1 => 'fa fa-select-icon fa-tag',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tag.svg',
              ),
              549 => 
              array (
                0 => 'frown-o',
                1 => 'fa fa-select-icon fa-frown-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/frown-o.svg',
              ),
              550 => 
              array (
                0 => 'heart-o',
                1 => 'fa fa-select-icon fa-heart-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/heart-o.svg',
              ),
              551 => 
              array (
                0 => 'linkedin',
                1 => 'fa fa-select-icon fa-linkedin',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/linkedin.svg',
              ),
              552 => 
              array (
                0 => 'fighter-jet',
                1 => 'fa fa-select-icon fa-fighter-jet',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/fighter-jet.svg',
              ),
              553 => 
              array (
                0 => 'bell-slash',
                1 => 'fa fa-select-icon fa-bell-slash',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bell-slash.svg',
              ),
              554 => 
              array (
                0 => 'align-right',
                1 => 'fa fa-select-icon fa-align-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/align-right.svg',
              ),
              555 => 
              array (
                0 => 'language',
                1 => 'fa fa-select-icon fa-language',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/language.svg',
              ),
              556 => 
              array (
                0 => 'behance-square',
                1 => 'fa fa-select-icon fa-behance-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/behance-square.svg',
              ),
              557 => 
              array (
                0 => 'mercury',
                1 => 'fa fa-select-icon fa-mercury',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/mercury.svg',
              ),
              558 => 
              array (
                0 => 'medium',
                1 => 'fa fa-select-icon fa-medium',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/medium.svg',
              ),
              559 => 
              array (
                0 => 'cubes',
                1 => 'fa fa-select-icon fa-cubes',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cubes.svg',
              ),
              560 => 
              array (
                0 => 'hand-o-right',
                1 => 'fa fa-select-icon fa-hand-o-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/hand-o-right.svg',
              ),
              561 => 
              array (
                0 => 'indent',
                1 => 'fa fa-select-icon fa-indent',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/indent.svg',
              ),
              562 => 
              array (
                0 => 'tasks',
                1 => 'fa fa-select-icon fa-tasks',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tasks.svg',
              ),
              563 => 
              array (
                0 => 'pagelines',
                1 => 'fa fa-select-icon fa-pagelines',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/pagelines.svg',
              ),
              564 => 
              array (
                0 => 'inr',
                1 => 'fa fa-select-icon fa-inr',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/inr.svg',
              ),
              565 => 
              array (
                0 => 'google-wallet',
                1 => 'fa fa-select-icon fa-google-wallet',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/google-wallet.svg',
              ),
              566 => 
              array (
                0 => 'buysellads',
                1 => 'fa fa-select-icon fa-buysellads',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/buysellads.svg',
              ),
              567 => 
              array (
                0 => 'folder-o',
                1 => 'fa fa-select-icon fa-folder-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/folder-o.svg',
              ),
              568 => 
              array (
                0 => 'caret-down',
                1 => 'fa fa-select-icon fa-caret-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/caret-down.svg',
              ),
              569 => 
              array (
                0 => 'glass',
                1 => 'fa fa-select-icon fa-glass',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/glass.svg',
              ),
              570 => 
              array (
                0 => 'align-center',
                1 => 'fa fa-select-icon fa-align-center',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/align-center.svg',
              ),
              571 => 
              array (
                0 => 'rub',
                1 => 'fa fa-select-icon fa-rub',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/rub.svg',
              ),
              572 => 
              array (
                0 => 'comments',
                1 => 'fa fa-select-icon fa-comments',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/comments.svg',
              ),
              573 => 
              array (
                0 => 'stop',
                1 => 'fa fa-select-icon fa-stop',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/stop.svg',
              ),
              574 => 
              array (
                0 => 'file-excel-o',
                1 => 'fa fa-select-icon fa-file-excel-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-excel-o.svg',
              ),
              575 => 
              array (
                0 => 'lastfm',
                1 => 'fa fa-select-icon fa-lastfm',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/lastfm.svg',
              ),
              576 => 
              array (
                0 => 'chevron-circle-right',
                1 => 'fa fa-select-icon fa-chevron-circle-right',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-circle-right.svg',
              ),
              577 => 
              array (
                0 => 'chevron-circle-down',
                1 => 'fa fa-select-icon fa-chevron-circle-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-circle-down.svg',
              ),
              578 => 
              array (
                0 => 'tachometer',
                1 => 'fa fa-select-icon fa-tachometer',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tachometer.svg',
              ),
              579 => 
              array (
                0 => 'check-circle-o',
                1 => 'fa fa-select-icon fa-check-circle-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/check-circle-o.svg',
              ),
              580 => 
              array (
                0 => 'upload',
                1 => 'fa fa-select-icon fa-upload',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/upload.svg',
              ),
              581 => 
              array (
                0 => 'folder',
                1 => 'fa fa-select-icon fa-folder',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/folder.svg',
              ),
              582 => 
              array (
                0 => 'train',
                1 => 'fa fa-select-icon fa-train',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/train.svg',
              ),
              583 => 
              array (
                0 => 'exchange',
                1 => 'fa fa-select-icon fa-exchange',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/exchange.svg',
              ),
              584 => 
              array (
                0 => 'gavel',
                1 => 'fa fa-select-icon fa-gavel',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/gavel.svg',
              ),
              585 => 
              array (
                0 => 'signal',
                1 => 'fa fa-select-icon fa-signal',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/signal.svg',
              ),
              586 => 
              array (
                0 => 'html5',
                1 => 'fa fa-select-icon fa-html5',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/html5.svg',
              ),
              587 => 
              array (
                0 => 'cc-amex',
                1 => 'fa fa-select-icon fa-cc-amex',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cc-amex.svg',
              ),
              588 => 
              array (
                0 => 'code-fork',
                1 => 'fa fa-select-icon fa-code-fork',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/code-fork.svg',
              ),
              589 => 
              array (
                0 => 'lightbulb-o',
                1 => 'fa fa-select-icon fa-lightbulb-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/lightbulb-o.svg',
              ),
              590 => 
              array (
                0 => 'yahoo',
                1 => 'fa fa-select-icon fa-yahoo',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/yahoo.svg',
              ),
              591 => 
              array (
                0 => 'cogs',
                1 => 'fa fa-select-icon fa-cogs',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/cogs.svg',
              ),
              592 => 
              array (
                0 => 'deviantart',
                1 => 'fa fa-select-icon fa-deviantart',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/deviantart.svg',
              ),
              593 => 
              array (
                0 => 'futbol-o',
                1 => 'fa fa-select-icon fa-futbol-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/futbol-o.svg',
              ),
              594 => 
              array (
                0 => 'magic',
                1 => 'fa fa-select-icon fa-magic',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/magic.svg',
              ),
              595 => 
              array (
                0 => 'chevron-left',
                1 => 'fa fa-select-icon fa-chevron-left',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/chevron-left.svg',
              ),
              596 => 
              array (
                0 => 'xing',
                1 => 'fa fa-select-icon fa-xing',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/xing.svg',
              ),
              597 => 
              array (
                0 => 'stumbleupon',
                1 => 'fa fa-select-icon fa-stumbleupon',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/stumbleupon.svg',
              ),
              598 => 
              array (
                0 => 'paw',
                1 => 'fa fa-select-icon fa-paw',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/paw.svg',
              ),
              599 => 
              array (
                0 => 'spoon',
                1 => 'fa fa-select-icon fa-spoon',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/spoon.svg',
              ),
              600 => 
              array (
                0 => 'book',
                1 => 'fa fa-select-icon fa-book',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/book.svg',
              ),
              601 => 
              array (
                0 => 'transgender',
                1 => 'fa fa-select-icon fa-transgender',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/transgender.svg',
              ),
              602 => 
              array (
                0 => 'camera',
                1 => 'fa fa-select-icon fa-camera',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/camera.svg',
              ),
              603 => 
              array (
                0 => 'bicycle',
                1 => 'fa fa-select-icon fa-bicycle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/bicycle.svg',
              ),
              604 => 
              array (
                0 => 'road',
                1 => 'fa fa-select-icon fa-road',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/road.svg',
              ),
              605 => 
              array (
                0 => 'qrcode',
                1 => 'fa fa-select-icon fa-qrcode',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/qrcode.svg',
              ),
              606 => 
              array (
                0 => 'file-powerpoint-o',
                1 => 'fa fa-select-icon fa-file-powerpoint-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/file-powerpoint-o.svg',
              ),
              607 => 
              array (
                0 => 'simplybuilt',
                1 => 'fa fa-select-icon fa-simplybuilt',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/simplybuilt.svg',
              ),
              608 => 
              array (
                0 => 'calendar-o',
                1 => 'fa fa-select-icon fa-calendar-o',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/calendar-o.svg',
              ),
              609 => 
              array (
                0 => 'wifi',
                1 => 'fa fa-select-icon fa-wifi',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/wifi.svg',
              ),
              610 => 
              array (
                0 => 'circle',
                1 => 'fa fa-select-icon fa-circle',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/circle.svg',
              ),
              611 => 
              array (
                0 => 'fax',
                1 => 'fa fa-select-icon fa-fax',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/fax.svg',
              ),
              612 => 
              array (
                0 => 'folder-open',
                1 => 'fa fa-select-icon fa-folder-open',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/folder-open.svg',
              ),
              613 => 
              array (
                0 => 'sort-numeric-desc',
                1 => 'fa fa-select-icon fa-sort-numeric-desc',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/sort-numeric-desc.svg',
              ),
              614 => 
              array (
                0 => 'square',
                1 => 'fa fa-select-icon fa-square',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/square.svg',
              ),
              615 => 
              array (
                0 => 'play',
                1 => 'fa fa-select-icon fa-play',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/play.svg',
              ),
              616 => 
              array (
                0 => 'long-arrow-down',
                1 => 'fa fa-select-icon fa-long-arrow-down',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/long-arrow-down.svg',
              ),
              617 => 
              array (
                0 => 'tablet',
                1 => 'fa fa-select-icon fa-tablet',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/tablet.svg',
              ),
              618 => 
              array (
                0 => 'volume-off',
                1 => 'fa fa-select-icon fa-volume-off',
                2 => 'EXT:mw_starterkit/Resources/Public/Icons/TCA/FontAwesome/volume-off.svg',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'header_style' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.header_style',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.header_style.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.header_style.1',
                1 => '1',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => '',
          ),
        ),
        'mw_profile_google' => 
        array (
          'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.google',
          'exclude' => 1,
          'displayCond' => 'FIELD:layout:=:110',
          'config' => 
          array (
            'type' => 'input',
            'size' => '50',
            'max' => '256',
            'eval' => 'trim',
            'renderType' => 'inputLink',
            'wizards' => 
            array (
              'link' => 
              array (
                'type' => 'popup',
                'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                'icon' => 'action-wizard-link',
                'params' => 
                array (
                  'blindLinkOptions' => 'page, mail, spec, file, dir, folder',
                ),
                'module' => 
                array (
                  'name' => 'wizard_link',
                  'urlParameters' => 
                  array (
                    'mode' => 'wizard',
                  ),
                ),
                'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'mw_profile_facebook' => 
        array (
          'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.facebook',
          'exclude' => 1,
          'displayCond' => 'FIELD:layout:=:110',
          'config' => 
          array (
            'type' => 'input',
            'size' => '50',
            'max' => '256',
            'eval' => 'trim',
            'renderType' => 'inputLink',
            'wizards' => 
            array (
              'link' => 
              array (
                'type' => 'popup',
                'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                'icon' => 'action-wizard-link',
                'params' => 
                array (
                  'blindLinkOptions' => 'page, mail, spec, file, dir, folder',
                ),
                'module' => 
                array (
                  'name' => 'wizard_link',
                  'urlParameters' => 
                  array (
                    'mode' => 'wizard',
                  ),
                ),
                'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'mw_profile_twitter' => 
        array (
          'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.twitter',
          'exclude' => 1,
          'displayCond' => 'FIELD:layout:=:110',
          'config' => 
          array (
            'type' => 'input',
            'size' => '50',
            'max' => '256',
            'eval' => 'trim',
            'renderType' => 'inputLink',
            'wizards' => 
            array (
              'link' => 
              array (
                'type' => 'popup',
                'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                'icon' => 'action-wizard-link',
                'params' => 
                array (
                  'blindLinkOptions' => 'page, mail, spec, file, dir, folder',
                ),
                'module' => 
                array (
                  'name' => 'wizard_link',
                  'urlParameters' => 
                  array (
                    'mode' => 'wizard',
                  ),
                ),
                'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'mw_profile_instagram' => 
        array (
          'label' => 'LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:field.instagram',
          'exclude' => 1,
          'displayCond' => 'FIELD:layout:=:110',
          'config' => 
          array (
            'type' => 'input',
            'size' => '50',
            'max' => '256',
            'eval' => 'trim',
            'renderType' => 'inputLink',
            'wizards' => 
            array (
              'link' => 
              array (
                'type' => 'popup',
                'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                'icon' => 'action-wizard-link',
                'params' => 
                array (
                  'blindLinkOptions' => 'page, mail, spec, file, dir, folder',
                ),
                'module' => 
                array (
                  'name' => 'wizard_link',
                  'urlParameters' => 
                  array (
                    'mode' => 'wizard',
                  ),
                ),
                'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1',
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'bullets' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bullets_type,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'header' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'text' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => 
                array (
                  'fullScreenRichtext' => 
                  array (
                    'disabled' => false,
                  ),
                ),
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => 
                array (
                  'fullScreenRichtext' => 
                  array (
                    'disabled' => false,
                  ),
                ),
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,mw_profile_facebook,mw_profile_google,mw_profile_twitter,mw_profile_instagram,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,assets,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => 
                array (
                  'fullScreenRichtext' => 
                  array (
                    'disabled' => false,
                  ),
                ),
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,image,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,--palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'html' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,recursive,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'subtype_value_field' => 'list_type',
          'subtypes_excludelist' => 
          array (
            'indexedsearch_pi2' => 'layout,pages,recursive',
            'news_pi1' => 'recursive,select_key,pages',
            'powermail_pi1' => 'select_key,pages,recursive',
          ),
          'subtypes_addlist' => 
          array (
            'news_pi1' => 'pi_flexform',
            'powermail_pi1' => 'pi_flexform',
            'powermail_pi2' => 'pi_flexform',
          ),
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,selected_categories,category_field,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_section' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'shortcut' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel, recursive,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'table' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,--palette--;;tableconfiguration,table_caption,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout;tablelayout,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media;uploads,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout;uploadslayout,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'login' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,pi_flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'gridelements_pi1' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,tx_gridelements_backend_layout,pi_flexform,tx_gridelements_children,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,assets,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements, tx_gridelements_container, tx_gridelements_columns',
        ),
        'mw_starterkit_button' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,header;LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:button,header_link;LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:button.link,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
        ),
        'mw_starterkit_iconbox' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,rowDescription,bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,icon,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
        ),
        'mw_starterkit_map' => 
        array (
          'showitem' => '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,mw_address,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,--div--;LLL:EXT:lang/locallang_tca.xlf:sys_category.tabs.category,categories,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'showitem' => '
                CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel,
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ,header_style',
        ),
        'headers' => 
        array (
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ,header_style',
        ),
        'gallerySettings' => 
        array (
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
            ',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            ',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
      ),
    ),
    'index_config' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'type',
        'default_sortby' => 'crdate',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-index_config',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,starttime,title,description,type,depth,table2index,alternative_source_pid,get_params,chashcalc,filepath,extensions',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.disable',
          'config' => 
          array (
            'type' => 'check',
            'default' => '1',
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 2,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.type.I.5',
                1 => '5',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'depth' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.depth',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.depth_4',
                1 => '4',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'table2index' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.table2index',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.table2index.I.0',
                1 => '0',
              ),
            ),
            'special' => 'tables',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'alternative_source_pid' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.alternative_source_pid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'indexcfgs' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.indexcfgs',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'index_config,pages',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 200,
          ),
        ),
        'get_params' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.get_params',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'fieldlist' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.fields',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'externalUrl' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.externalUrl',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'chashcalc' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.chashcalc',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'filepath' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.filepath',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'extensions' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.extensions',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'url_deny' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.url_deny',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 2,
          ),
        ),
        'records_indexonchange' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.records_indexonchange',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'timer_next_indexing' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_next_indexing',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'timer_offset' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_offset',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'time,int',
            'default' => 3600,
          ),
        ),
        'timer_frequency' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.0',
                1 => '3600',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.1',
                1 => '86400',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.timer_frequency.I.2',
                1 => '604800',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 86400,
          ),
        ),
        'recordsbatch' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.recordsbatch',
          'config' => 
          array (
            'type' => 'input',
            'size' => 8,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'set_id' => 
        array (
          'label' => 'LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.set_id',
          'config' => 
          array (
            'type' => 'none',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,table2index,alternative_source_pid,fieldlist,get_params,chashcalc,recordsbatch,records_indexonchange,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        2 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,filepath,extensions,depth,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,externalUrl,depth,url_deny,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,timer_next_indexing,timer_offset,timer_frequency,set_id,alternative_source_pid;LLL:EXT:indexed_search/Resources/Private/Language/locallang_db.xlf:index_config.rootpage,depth,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        5 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,indexcfgs,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,starttime,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => true,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'extension_key,version,integer_version,title,description,state,category,last_updated,update_comment,author_name,author_email,md5hash,serialized_dependencies',
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_repository' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => true,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,description,wsdl_url_mirror_list_url,last_update,extension_count',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'wsdl_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.wsdlUrl',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'mirror_list_url' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.mirrorListUrl',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
          ),
        ),
        'last_update' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.lastUpdate',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'extension_count' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_repository.extensionCount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, description, wsdl_url, mirror_list_url, last_update, extension_count',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'sys_action' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => -1,
        'setToDefaultOnCopy' => 'assign_to_groups',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_action',
        ),
        'type' => 'type',
        'searchFields' => 'title,description',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,type,description,assign_to_groups',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.type.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.type.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.type.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.type.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.type.5',
                1 => '5',
              ),
            ),
          ),
        ),
        'assign_to_groups' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.assign_to_groups',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'ORDER BY be_groups.title',
            'MM' => 'sys_action_asgr_mm',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 200,
            'autoSizeMax' => 10,
          ),
        ),
        't1_userprefix' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.t1_userprefix',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => '10',
            'eval' => 'trim',
          ),
        ),
        't1_allowed_groups' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.t1_allowed_groups',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'ORDER BY be_groups.title',
            'size' => 10,
            'maxitems' => 20,
            'autoSizeMax' => 10,
          ),
        ),
        't1_create_user_dir' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.t1_create_user_dir',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        't1_copy_of_user' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.t1_copy_of_user',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 1,
          ),
        ),
        't3_listPid' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.t3_listPid',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 1,
          ),
        ),
        't3_tables' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.t3_tables',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'tables',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        't4_recordsToEdit' => 
        array (
          'label' => 'LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.t4_recordsToEdit',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => '*',
            'prepend_tname' => true,
            'size' => 5,
            'maxitems' => 50,
            'minitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,assign_to_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,t1_userprefix,t1_copy_of_user,t1_allowed_groups,t1_create_user_dir,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,assign_to_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        2 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,assign_to_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,t3_listPid,t3_tables,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,assign_to_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,t4_recordsToEdit,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,assign_to_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        5 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,title,t3_listPid;LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.new_record.pid,t3_tables;LLL:EXT:sys_action/Resources/Private/Language/locallang_tca.xlf:sys_action.new_record.tablename,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,assign_to_groups,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_workspace' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace',
        'descriptionColumn' => 'description',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_workspace',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 30,
            'eval' => 'required,trim,unique',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'adminusers' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.adminusers',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 10,
            'autoSizeMax' => 10,
          ),
        ),
        'members' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.members',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 25,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND sys_filemounts.pid=0 ORDER BY sys_filemounts.title',
            'size' => 3,
            'maxitems' => 25,
            'autoSizeMax' => 10,
          ),
        ),
        'publish_time' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.publish_time',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'unpublish_time' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.unpublish_time',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145913200,
            ),
          ),
        ),
        'freeze' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.freeze',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'live_edit' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.live_edit',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'swap_modes' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.swap_modes',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'Swap-Into-Workspace on Auto-publish',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'Disable Swap-Into-Workspace',
                1 => 2,
              ),
            ),
          ),
        ),
        'publish_access' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.publish_access',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Publish only content in publish stage',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'Only workspace owner can publish',
                1 => 0,
              ),
            ),
          ),
        ),
        'stagechg_notification' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_workspace.stagechg_notification',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'Notify users on next stage only',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'Notify all users on any change',
                1 => 10,
              ),
            ),
          ),
        ),
        'custom_stages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.custom_stages',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_workspace_stage',
            'appearance' => 'useSortable,expandSingle',
            'foreign_field' => 'parentid',
            'foreign_table_field' => 'parenttable',
            'minitems' => 0,
          ),
          'default' => 0,
        ),
        'edit_notification_defaults' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'edit_allow_notificaton_settings' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.showDialog',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.changeablePreselection',
                1 => '',
              ),
            ),
            'default' => 3,
            'cols' => 2,
          ),
        ),
        'edit_notification_preselection' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.owners',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.members',
                1 => '',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.editors',
                1 => '',
              ),
            ),
            'default' => 2,
            'cols' => 3,
          ),
        ),
        'publish_notification_defaults' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'publish_allow_notificaton_settings' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.showDialog',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.changeablePreselection',
                1 => '',
              ),
            ),
            'default' => 3,
            'cols' => 2,
          ),
        ),
        'publish_notification_preselection' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.owners',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.members',
                1 => '',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.editors',
                1 => '',
              ),
            ),
            'default' => 1,
            'cols' => 3,
          ),
        ),
        'execute_notification_defaults' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'execute_allow_notificaton_settings' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.showDialog',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.changeablePreselection',
                1 => '',
              ),
            ),
            'default' => 3,
            'cols' => 2,
          ),
        ),
        'execute_notification_preselection' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.owners',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.members',
                1 => '',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.editors',
                1 => '',
              ),
            ),
            'default' => 3,
            'cols' => 3,
          ),
        ),
      ),
      'palettes' => 
      array (
        'stage.edit' => 
        array (
          'showitem' => 'edit_allow_notificaton_settings, edit_notification_preselection,',
        ),
        'stage.publish' => 
        array (
          'showitem' => 'publish_allow_notificaton_settings, publish_notification_preselection,',
        ),
        'stage.execute' => 
        array (
          'showitem' => 'execute_allow_notificaton_settings, execute_notification_preselection,',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.tabs.users,adminusers,members,--div--;LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:tabs.notification_settings,stagechg_notification,--palette--;LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xml:sys_workspace.palette.stage.edit;stage.edit,edit_notification_defaults,--palette--;LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xml:sys_workspace.palette.stage.publish;stage.publish,publish_notification_defaults,--palette--;LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xml:sys_workspace.palette.stage.execute;stage.execute,execute_notification_defaults,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.tabs.mountpoints,db_mountpoints,file_mountpoints,--div--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.tabs.publishing,publish_time,--div--;LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_filemounts.tabs.staging,custom_stages,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,freeze,live_edit,swap_modes,publish_access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,description,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_workspace_stage' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'delete' => 'deleted',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_workspace',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 30,
            'eval' => 'required,trim',
          ),
        ),
        'responsible_persons' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.responsible_persons',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'default_mailcomment' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.default_mailcomment',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'parentid' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.parentid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'parenttable' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.parenttable',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'notification_defaults' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace_stage.notification_defaults',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'be_users,be_groups',
            'prepend_tname' => true,
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 20,
          ),
        ),
        'allow_notificaton_settings' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.showDialog',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.settingsDialog.changeablePreselection',
                1 => '',
              ),
            ),
            'default' => 3,
            'cols' => 2,
          ),
        ),
        'notification_preselection' => 
        array (
          'label' => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.owners',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.members',
                1 => '',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.editors',
                1 => '',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:sys_workspace.preselection.responsiblePersons',
                1 => '',
              ),
            ),
            'default' => 8,
            'cols' => 4,
          ),
        ),
      ),
      'palettes' => 
      array (
        'stage' => 
        array (
          'showitem' => 'allow_notificaton_settings, notification_preselection,',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,title,responsible_persons,--div--;LLL:EXT:workspaces/Resources/Private/Language/locallang_db.xlf:tabs.notification_settings,--palette--;;stage,notification_defaults,default_mailcomment,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
        'searchFields' => 'subject,message',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'category,subject,message,personal',
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
                2 => 'sysnote-type-0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                1 => '1',
                2 => 'sysnote-type-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                1 => '3',
                2 => 'sysnote-type-3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                1 => '4',
                2 => 'sysnote-type-4',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                1 => '2',
                2 => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => '15',
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,category,subject,message,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,personal,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'tx_gridelements_backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'rootLevel' => -1,
        'thumbnail' => 'resources',
        'dividers2tabs' => true,
        'selicon_field' => 'icon',
        'selicon_field_path' => 'uploads/tx_gridelements',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'iconfile' => 'EXT:gridelements/Resources/Public/Icons/gridelements.svg',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'title,frame,config,pi_flexform_ds,description,hidden,icon',
      ),
      'columns' => 
      array (
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => '30',
            'max' => '30',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '256',
            'eval' => 'required',
          ),
        ),
        'alias' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.alias',
          'config' => 
          array (
            'type' => 'input',
            'size' => '25',
            'max' => '256',
            'eval' => 'nospace,alphanum_x,lower',
          ),
        ),
        'description' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => '5',
          ),
        ),
        'horizontal' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.horizontal',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.horizontal.I.0',
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.icon',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'jpg,gif,png,svg',
            'uploadfolder' => 'uploads/tx_gridelements',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 2,
          ),
        ),
        'frame' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.-1',
                1 => '-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.1',
                1 => '1',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.2',
                1 => '2',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.frame.I.3',
                1 => '3',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'top_level_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.top_level_layout',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_core.xlf:labels.enabled',
              ),
            ),
          ),
        ),
        'config' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
            'cols' => '25',
            'rows' => '5',
            'fixedFont' => true,
          ),
        ),
        'pi_flexform_ds' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.pi_flexform_ds',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '35',
            'rows' => '10',
          ),
        ),
        'pi_flexform_ds_file' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.pi_flexform_ds_file',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'file',
            'allowed' => 'xml',
            'maxitems' => 1,
            'size' => 1,
          ),
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'title, --linebreak--, description',
        ),
        'appearance' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'icon, horizontal, frame',
        ),
        'visibility' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'hidden',
        ),
        'flexform' => 
        array (
          'canNotCollapse' => 1,
          'showitem' => 'pi_flexform_ds, --linebreak--, pi_flexform_ds_file',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout;general,--palette--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.palette.appearance;appearance,--div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.div.configuration,top_level_layout,alias,config,--palette--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xml:tx_gridelements_backend_layout.ce_configuration;flexform,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility',
        ),
      ),
    ),
    'tx_news_domain_model_link' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'label_alt' => 'uri',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'ORDER BY sorting',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-link',
        ),
        'hideTable' => true,
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,title,description,uri',
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_table_where' => 'AND tx_news_domain_model_link.pid=###CURRENT_PID### AND tx_news_domain_model_link.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'uri' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri.placeholder',
            'size' => 30,
            'eval' => 'trim,required',
            'softref' => 'typolink',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'uri,--palette--;;paletteCore,title,--palette--;;paletteDescription',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,sys_language_uid,l10n_parent, l10n_diffsource,',
        ),
        'paletteDescription' => 
        array (
          'showitem' => 'description',
        ),
      ),
    ),
    'tx_news_domain_model_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'prependAtCopy' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'editlock' => 'editlock',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-type-default',
          1 => 'ext-news-type-internal',
          2 => 'ext-news-type-external',
        ),
        'useColumnsForDefaultValues' => 'type',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'default_sortby' => 'ORDER BY datetime DESC',
        'sortby' => '',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:news/Resources/Public/Icons/news_domain_model_news.svg',
        'searchFields' => 'uid,title',
        'thumbnail' => 'fal_media',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'cruser_id,pid,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime,fe_group,title,teaser,bodytext,datetime,archive,author,author_email,categories,related,type,keywords,media,internalurl,externalurl,istopnews,related_files,related_links,content_elements,tags,path_segment,alternative_title,fal_related_files',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_news',
            'foreign_table_where' => 'AND tx_news_domain_model_news.pid=###CURRENT_PID### AND tx_news_domain_model_news.sys_language_uid IN (-1,0)',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => true,
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'cruser_id' => 
        array (
          'label' => 'cruser_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'eval' => 'required',
          ),
        ),
        'alternative_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.alternative_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'teaser' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.teaser',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
            'enableRichtext' => false,
            'richtextConfiguration' => 'default',
          ),
        ),
        'bodytext' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'softref' => 'rtehtmlarea_images,typolink_tag,images,email[subst],url',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
        'datetime' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.datetime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 16,
            'eval' => 'datetime,int,required',
          ),
        ),
        'archive' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'copy',
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 30,
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'treeConfig' => 
            array (
              'dataProvider' => 'GeorgRinger\\News\\TreeProvider\\DatabaseTreeDataProvider',
              'parentField' => 'parent',
              'appearance' => 
              array (
                'showHeader' => true,
                'expandAll' => true,
                'maxLevels' => 99,
              ),
            ),
            'MM' => 'sys_category_record_mm',
            'MM_match_fields' => 
            array (
              'fieldname' => 'categories',
              'tablenames' => 'tx_news_domain_model_news',
            ),
            'MM_opposite_field' => 'items',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'related' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_news_domain_model_news',
            'foreign_table' => 'tx_news_domain_model_news',
            'MM_opposite_field' => 'related_from',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'suggestOptions' => true,
                'addWhere' => ' AND tx_news_domain_model_news.uid != ###THIS_UID###',
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'related_from' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_from',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'foreign_table' => 'tx_news_domain_model_news',
            'allowed' => 'tx_news_domain_model_news',
            'size' => 5,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'readOnly' => 1,
          ),
        ),
        'related_links' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_links',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tx_news_domain_model_link',
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'parent',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'levelLinksPosition' => 'bottom',
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'type' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.0',
                1 => 0,
                2 => 'ext-news-type-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
                1 => 1,
                2 => 'ext-news-type-internal',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.2',
                1 => 2,
                2 => 'ext-news-type-external',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.keywords.placeholder',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'internalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 30,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'typolink',
          ),
        ),
        'externalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'required',
            'softref' => 'typolink',
          ),
        ),
        'istopnews' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.istopnews',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'editlock' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'tags' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_news_domain_model_tag',
            'MM' => 'tx_news_domain_model_news_tag_mm',
            'foreign_table' => 'tx_news_domain_model_tag',
            'foreign_table_where' => ' AND (tx_news_domain_model_tag.sys_language_uid IN (-1,0) OR tx_news_domain_model_tag.l10n_parent = 0) ORDER BY tx_news_domain_model_tag.title',
            'size' => 10,
            'minitems' => 0,
            'maxitems' => 99,
            'fieldInformation' => 
            array (
              'tagInformation' => 
              array (
                'renderType' => 'NewsStaticText',
                'options' => 
                array (
                  'labels' => 
                  array (
                    0 => 
                    array (
                      'label' => '',
                      'bold' => true,
                      'italic' => true,
                    ),
                  ),
                ),
              ),
            ),
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'minimumCharacters' => 2,
                'searchWholePhrase' => true,
                'receiverClass' => 'GeorgRinger\\News\\Backend\\Wizard\\SuggestWizardReceiver',
              ),
            ),
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'type' => 'popup',
                  'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags.edit',
                  'module' => 
                  array (
                    'name' => 'wizard_edit',
                  ),
                  'popup_onlyOpenIfSelected' => true,
                  'icon' => 'actions-open',
                  'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'type' => 'script',
                  'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags.list',
                  'icon' => 'actions-system-list-open',
                  'params' => 
                  array (
                    'table' => 'tx_news_domain_model_tag',
                    'pid' => 1,
                  ),
                  'module' => 
                  array (
                    'name' => 'wizard_list',
                  ),
                ),
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'path_segment' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.path_segment',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,alphanum_x,lower,unique',
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'fal_media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_media',
              'tablenames' => 'tx_news_domain_model_news',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media.add',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'fal_related_files' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_related_files',
              'tablenames' => 'tx_news_domain_model_news',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'width' => '45',
                'height' => '45c',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files.add',
              'showPossibleLocalizationRecords' => true,
              'showRemovedLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'localizeChildrenAtParentLocalization' => true,
              'allowLanguageSynchronization' => true,
            ),
            'inline' => 
            array (
              'inlineOnlineMediaAddButtonStyle' => 'display:none',
            ),
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,--palette--;;paletteDate,bodytext,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements,content_elements,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,fal_media,fal_related_files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,related,related_from,related_links,tags,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;paletteLanguage,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;paletteHidden,--palette--;;paletteAccess,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        1 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,internalurl,--palette--;;paletteDate,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,fal_media,fal_related_files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,related,related_from,related_links,tags,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;paletteLanguage,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;paletteHidden,--palette--;;paletteAccess,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        2 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,externalurl,--palette--;;paletteDate,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,fal_media,fal_related_files,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,categories,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,related,related_from,related_links,tags,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,--palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;paletteLanguage,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;paletteHidden,--palette--;;paletteAccess,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
      ),
      'palettes' => 
      array (
        'paletteAuthor' => 
        array (
          'showitem' => 'author,author_email,',
        ),
        'paletteDate' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.dates',
          'showitem' => 'datetime,archive,',
        ),
        'paletteCore' => 
        array (
          'showitem' => 'type,istopnews,',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords,description,',
        ),
        'alternativeTitles' => 
        array (
          'showitem' => 'alternative_title',
        ),
        'paletteHidden' => 
        array (
          'showitem' => '
                hidden
            ',
        ),
        'paletteAccess' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'paletteLanguage' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent, l10n_diffsource,
            ',
        ),
        'paletteSlug' => 
        array (
          'showitem' => '
                path_segment
            ',
        ),
      ),
    ),
    'tx_news_domain_model_tag' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'default_sortby' => 'ORDER BY title',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-tag',
        ),
        'searchFields' => 'uid,title',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,sys_language_uid,l10n_parent,l10n_diffsource,title',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'special' => 'languages',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => -1,
                2 => 'flags-multiple',
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_tag',
            'foreign_table_where' => 'AND tx_news_domain_model_tag.pid=###CURRENT_PID### AND tx_news_domain_model_tag.sys_language_uid IN (-1,0)',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => true,
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,unique,trim',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title,--palette--;;paletteCore,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.tabs.seo,seo_title,seo_description,seo_headline,seo_text,--div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,notes,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;paletteLanguage',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,',
        ),
        'paletteLanguage' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent, l10n_diffsource,
            ',
        ),
      ),
    ),
    'tx_powermail_domain_model_answer' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer',
        'label' => 'value',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:powermail/Resources/Public/Icons/tx_powermail_domain_model_answer.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, value, value_type, field, mail',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'value, value_type, field, mail',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_powermail_domain_model_answer',
            'foreign_table_where' => 'AND tx_powermail_domain_model_answer.pid=###CURRENT_PID### AND tx_powermail_domain_model_answer.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'value' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.value',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '60',
            'rows' => '3',
          ),
        ),
        'value_type' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.value_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.value_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.value_type.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.value_type.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.value_type.3',
                1 => '3',
              ),
            ),
          ),
        ),
        'field' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.field',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_powermail_domain_model_field',
            'size' => 1,
            'maxitems' => 1,
            'multiple' => 0,
            'default' => 0,
          ),
        ),
        'mail' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_answer.mail',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tx_powermail_domain_model_mail',
            'size' => 1,
            'maxitems' => 1,
            'multiple' => 0,
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_powermail_domain_model_field' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field',
        'label' => 'title',
        'type' => 'type',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:powermail/Resources/Public/Icons/tx_powermail_domain_model_field.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, type, settings, path, content_element, text, prefill_value, placeholder, create_from_typoscript, mandatory, validation, validation_configuration, css, description, multiselect, datepicker_settings, feuser_value, sender_email, sender_name, own_marker_select, auto_marker, marker',
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'sender_email, sender_name',
          'canNotCollapse' => 1,
        ),
        2 => 
        array (
          'showitem' => 'mandatory, validation, validation_configuration',
          'canNotCollapse' => 1,
        ),
        21 => 
        array (
          'showitem' => 'mandatory',
          'canNotCollapse' => 1,
        ),
        3 => 
        array (
          'showitem' => 'prefill_value, placeholder, feuser_value, create_from_typoscript',
          'canNotCollapse' => 1,
        ),
        31 => 
        array (
          'showitem' => 'prefill_value, feuser_value',
          'canNotCollapse' => 1,
        ),
        32 => 
        array (
          'showitem' => 'prefill_value, placeholder, feuser_value',
          'canNotCollapse' => 1,
        ),
        33 => 
        array (
          'showitem' => 'feuser_value, create_from_typoscript',
          'canNotCollapse' => 1,
        ),
        4 => 
        array (
          'showitem' => 'css, multiselect, datepicker_settings',
        ),
        41 => 
        array (
          'showitem' => 'css, multiselect',
        ),
        42 => 
        array (
          'showitem' => 'css, datepicker_settings',
        ),
        43 => 
        array (
          'showitem' => 'css',
        ),
        5 => 
        array (
          'showitem' => 'auto_marker, marker, own_marker_select',
          'canNotCollapse' => 1,
        ),
        'canNotCollapse' => '1',
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'pages,title,type,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.palette1;1,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;2,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;32,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'input' => 
        array (
          'showitem' => 'pages,title,type,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.palette1;1,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;2,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;32,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'textarea' => 
        array (
          'showitem' => 'pages,title,type,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.palette1;1,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;2,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;32,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'select' => 
        array (
          'showitem' => 'pages,title,type,settings,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.palette1;1,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;33,--palette--;Layout;41,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'check' => 
        array (
          'showitem' => 'pages,title,type,settings,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.palette1;1,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;33,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'radio' => 
        array (
          'showitem' => 'pages,title,type,settings,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.palette1;1,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;33,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'submit' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'captcha' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'reset' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'text' => 
        array (
          'showitem' => 'pages,title,type,text,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'content' => 
        array (
          'showitem' => 'pages,title,type,content_element,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'html' => 
        array (
          'showitem' => 'pages,title,type,text,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'password' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'file' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21,--palette--;Layout;41,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'hidden' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;31,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'date' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21,--palette--;Layout;42,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'country' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation_title;21,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_title;31,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'location' => 
        array (
          'showitem' => 'pages,title,type,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,description,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
        'typoscript' => 
        array (
          'showitem' => 'pages,title,type,path,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,--palette--;Layout;43,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.marker_title;5,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_powermail_domain_model_field',
            'foreign_table_where' => 'AND tx_powermail_domain_model_field.pid=###CURRENT_PID### AND tx_powermail_domain_model_field.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'endtime' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'type' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.spacer1',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.0',
                1 => 'input',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.1',
                1 => 'textarea',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.2',
                1 => 'select',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.3',
                1 => 'check',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.4',
                1 => 'radio',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.5',
                1 => 'submit',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.spacer2',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.6',
                1 => 'captcha',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.7',
                1 => 'reset',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.8',
                1 => 'text',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.9',
                1 => 'content',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.10',
                1 => 'html',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.11',
                1 => 'password',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.12',
                1 => 'file',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.13',
                1 => 'hidden',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.14',
                1 => 'date',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.17',
                1 => 'country',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.15',
                1 => 'location',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.16',
                1 => 'typoscript',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.spacer3',
                1 => '--div--',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => 'required',
            'itemsProcFunc' => 'In2code\\Powermail\\Tca\\AddOptionsToSelection->addOptionsForType',
          ),
        ),
        'settings' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.settings',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '32',
            'rows' => '5',
            'default' => '',
          ),
        ),
        'path' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.path',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'content_element' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.content_element',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'tt_content',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'text' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '32',
            'rows' => '5',
            'default' => '',
          ),
        ),
        'sender_email' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sender_email',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'sender_name' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sender_name',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'mandatory' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.mandatory',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'validation' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'onChange' => 'reload',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pleaseChoose',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.spacer1',
                1 => '--div--',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.1',
                1 => 1,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.2',
                1 => 2,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.3',
                1 => 3,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.4',
                1 => 4,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.5',
                1 => 5,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.spacer2',
                1 => '--div--',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.6',
                1 => 6,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.7',
                1 => 7,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.8',
                1 => 8,
              ),
              11 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.9',
                1 => 9,
              ),
              12 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validation.10',
                1 => 10,
              ),
              13 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.type.spacer3',
                1 => '--div--',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'itemsProcFunc' => 'In2code\\Powermail\\Tca\\AddOptionsToSelection->addOptionsForValidation',
          ),
        ),
        'validation_configuration' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.validationConfiguration',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
          'displayCond' => 'FIELD:validation:>:5',
        ),
        'prefill_value' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.prefill_value',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '26',
            'rows' => '2',
            'default' => '',
          ),
        ),
        'placeholder' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.placeholder',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '26',
            'rows' => '2',
            'default' => '',
          ),
        ),
        'feuser_value' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pleaseChoose',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.name',
                1 => 'name',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.address',
                1 => 'address',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.phone',
                1 => 'telephone',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.fax',
                1 => 'fax',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.email',
                1 => 'email',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.zip',
                1 => 'zip',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.city',
                1 => 'city',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.country',
                1 => 'country',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.www',
                1 => 'www',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.feuser_value.company',
                1 => 'company',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => '',
            'itemsProcFunc' => 'In2code\\Powermail\\Tca\\AddOptionsToSelection->addOptionsForFeUserProperty',
          ),
        ),
        'create_from_typoscript' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.create_from_typoscript',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'css' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.css',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pleaseChoose',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.css.1',
                1 => 'layout1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.css.2',
                1 => 'layout2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.css.3',
                1 => 'layout3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.css.4',
                1 => 'nolabel',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => '',
          ),
        ),
        'multiselect' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.multiselect',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'datepicker_settings' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.datepicker_settings',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.datepicker_settings.1',
                1 => 'date',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.datepicker_settings.2',
                1 => 'datetime',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.datepicker_settings.3',
                1 => 'time',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => '',
          ),
        ),
        'auto_marker' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.auto_marker',
          'config' => 
          array (
            'type' => 'user',
            'userFunc' => 'In2code\\Powermail\\Tca\\Marker->createMarker',
          ),
          'displayCond' => 'FIELD:own_marker_select:REQ:false',
        ),
        'marker' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.own_marker',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,alphanum_x,lower,nospace',
          ),
          'displayCond' => 'FIELD:own_marker_select:REQ:true',
        ),
        'own_marker_select' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'onChange' => 'reload',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.own_marker_select',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '26',
            'rows' => '2',
            'eval' => 'trim',
          ),
        ),
        'pages' => 
        array (
          'exclude' => 1,
          'displayCond' => 'FIELD:sys_language_uid:<=:0',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.pages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_powermail_domain_model_page',
            'foreign_table_where' => 'AND tx_powermail_domain_model_page.pid=###CURRENT_PID### AND tx_powermail_domain_model_page.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
            'default' => 0,
          ),
        ),
        'sorting' => 
        array (
          'config' => 
          array (
            'type' => 'none',
          ),
        ),
      ),
    ),
    'tx_powermail_domain_model_form' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY title ASC',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:powermail/Resources/Public/Icons/tx_powermail_domain_model_form.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, css, pages, note',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'title,pages,note,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,css,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_powermail_domain_model_form',
            'foreign_table_where' => 'AND tx_powermail_domain_model_form.pid=###CURRENT_PID### AND tx_powermail_domain_model_form.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'endtime' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'note' => 
        array (
          'l10n_mode' => 'exclude',
          'config' => 
          array (
            'type' => 'user',
            'userFunc' => 'In2code\\Powermail\\Tca\\ShowFormNoteIfNoEmailOrNameSelected->showNote',
          ),
        ),
        'css' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form.css',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pleaseChoose',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form.css.1',
                1 => 'layout1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form.css.2',
                1 => 'layout2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form.css.3',
                1 => 'layout3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form.css.4',
                1 => 'nolabel',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => '',
          ),
        ),
        'pages' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_form.pages',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_powermail_domain_model_page',
            'foreign_table_where' => 'AND tx_powermail_domain_model_page.deleted = 1 aND tx_powermail_domain_model_page.hidden = 0 and tx_powermail_domain_model_page.sys_language_uid = 0',
            'foreign_field' => 'forms',
            'foreign_sortby' => 'sorting',
            'maxitems' => 1000,
            'appearance' => 
            array (
              'expandSingle' => 1,
              'useSortable' => 1,
              'newRecordLinkAddTitle' => 1,
              'levelLinksPosition' => 'top',
              'showSynchronizationLink' => 0,
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showRemovedLocalizationRecords' => 1,
            ),
          ),
        ),
      ),
    ),
    'tx_powermail_domain_model_mail' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail',
        'label' => 'sender_mail',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'ORDER BY crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:powermail/Resources/Public/Icons/tx_powermail_domain_model_mail.gif',
        'searchFields' => 'sender_mail, sender_name, subject, body',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, crdate, receiver_mail, sender_name, sender_mail, subject, form, answers, body, feuser, spam_factor, time, sender_ip, user_agent, marketing_referer_domain, marketing_referer, marketing_country, marketing_mobile_device, marketing_frontend_language, marketing_browser_language, marketing_page_funnel',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'crdate,receiver_mail,--palette--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.palette1;1,subject,body,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,form,answers,feuser,spam_factor,time,sender_ip,user_agent,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet2,marketing_referer_domain,marketing_referer,marketing_country,marketing_mobile_device,marketing_frontend_language,marketing_browser_language,marketing_page_funnel,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,hidden,starttime,endtime',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'sender_name, sender_mail',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'foreign_table' => 'sys_language',
            'renderType' => 'selectSingle',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_powermail_domain_model_mail',
            'foreign_table_where' => 'and tx_powermail_domain_model_mail.pid=###CURRENT_PID### and tx_powermail_domain_model_mail.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'crdate' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.crdate',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 30,
            'readOnly' => 1,
          ),
        ),
        'receiver_mail' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.receiver_mail',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
          ),
        ),
        'sender_mail' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.sender_mail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'sender_name' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.sender_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'subject' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'body' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.body',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
            'enableRichtext' => true,
            'fieldControl' => 
            array (
              'fullScreenRichtext' => 
              array (
                'disabled' => '',
                'options' => 
                array (
                  'title' => 'RTE',
                ),
              ),
            ),
            'wizards' => 
            array (
              '_PADDING' => 2,
              'RTE' => 
              array (
                'notNewRecords' => 1,
                'RTEonly' => 1,
                'type' => 'script',
                'title' => 'RTE',
                'icon' => 'actions-wizard-rte',
                'module' => 
                array (
                  'name' => 'wizard_rte',
                ),
              ),
            ),
          ),
        ),
        'form' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.form',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tx_powermail_domain_model_form',
            'foreign_table_where' => 'and tx_powermail_domain_model_form.deleted = 0 and tx_powermail_domain_model_form.hidden = 0 order by tx_powermail_domain_model_form.title',
          ),
        ),
        'answers' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.answers',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_powermail_domain_model_answer',
            'foreign_field' => 'mail',
            'maxitems' => 1000,
            'appearance' => 
            array (
              'collapse' => 1,
              'levelLinksPosition' => 'top',
              'showSynchronizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showAllLocalizationLink' => 1,
            ),
          ),
        ),
        'feuser' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.feuser',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'fe_users',
            'size' => 1,
            'minitems' => 0,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'spam_factor' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.spam_factor',
          'config' => 
          array (
            'type' => 'input',
            'size' => 13,
            'eval' => 'trim',
            'readOnly' => 1,
          ),
        ),
        'time' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.time',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'timesec',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'readOnly' => 1,
          ),
        ),
        'sender_ip' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.sender_ip',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'readOnly' => 1,
            'default' => '',
          ),
        ),
        'user_agent' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.user_agent',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'readOnly' => 1,
            'default' => '',
          ),
        ),
        'marketing_referer_domain' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.marketing_referer_domain',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'readOnly' => 1,
            'default' => '',
          ),
        ),
        'marketing_referer' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.marketing_referer',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
            'readOnly' => 1,
            'default' => '',
          ),
        ),
        'marketing_country' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.marketing_country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'readOnly' => 1,
            'default' => '',
          ),
        ),
        'marketing_mobile_device' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.marketing_mobile_device',
          'config' => 
          array (
            'type' => 'check',
            'readOnly' => 1,
            'default' => 0,
          ),
        ),
        'marketing_frontend_language' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.marketing_frontend_language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 2,
            'eval' => 'int',
            'readOnly' => 1,
            'default' => 0,
          ),
        ),
        'marketing_browser_language' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.marketing_browser_language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'readOnly' => 1,
            'default' => '',
          ),
        ),
        'marketing_page_funnel' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_mail.marketing_page_funnel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '30',
            'rows' => '5',
            'readOnly' => 1,
            'default' => '',
          ),
        ),
        'uid' => 
        array (
          'exclude' => 1,
          'label' => 'UID',
          'config' => 
          array (
            'type' => 'none',
          ),
        ),
      ),
    ),
    'tx_powermail_domain_model_page' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => true,
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'sortby' => 'sorting',
        'default_sortby' => 'ORDER BY sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:powermail/Resources/Public/Icons/tx_powermail_domain_model_page.gif',
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, css, fields',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'title,fields,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_field.sheet1,css,--div--;LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tabs.access,forms,sys_language_uid,l10n_parent,l10n_diffsource,hidden,starttime,endtime',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.allLanguages',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xml:LGL.default_value',
                1 => 0,
              ),
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_powermail_domain_model_page',
            'foreign_table_where' => 'and tx_powermail_domain_model_page.pid=###CURRENT_PID### AND tx_powermail_domain_model_page.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        'starttime' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'endtime' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'size' => 13,
            'checkbox' => 0,
            'default' => 0,
            'range' => 
            array (
              'lower' => 1636412400,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'css' => 
        array (
          'l10n_mode' => 'exclude',
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.css',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:pleaseChoose',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.css.1',
                1 => 'layout1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.css.2',
                1 => 'layout2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.css.3',
                1 => 'layout3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.css.4',
                1 => 'nolabel',
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
            'eval' => '',
          ),
        ),
        'fields' => 
        array (
          'exclude' => 0,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.fields',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_powermail_domain_model_field',
            'foreign_field' => 'pages',
            'foreign_sortby' => 'sorting',
            'maxitems' => 1000,
            'appearance' => 
            array (
              'expandSingle' => 1,
              'useSortable' => 1,
              'newRecordLinkAddTitle' => 1,
              'levelLinksPosition' => 'top',
              'showSynchronizationLink' => 0,
              'showAllLocalizationLink' => 1,
              'showPossibleLocalizationRecords' => 1,
              'showRemovedLocalizationRecords' => 1,
            ),
          ),
        ),
        'forms' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:powermail/Resources/Private/Language/locallang_db.xlf:tx_powermail_domain_model_page.forms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_powermail_domain_model_form',
            'foreign_table_where' => 'and tx_powermail_domain_model_form.pid=###CURRENT_PID### and tx_powermail_domain_model_form.sys_language_uid IN (-1,###REC_FIELD_sys_language_uid###)',
            'default' => 0,
          ),
        ),
        'sorting' => 
        array (
          'label' => 'Sorting',
          'config' => 
          array (
            'type' => 'none',
          ),
        ),
      ),
    ),
    'tx_rtehtmlarea_acronym' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_db.xlf:tx_rtehtmlarea_acronym',
        'label' => 'term',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_rtehtmlarea_acronym',
        ),
      ),
      'interface' => 
      array (
        'showRecordFieldList' => 'hidden,sys_language_uid,term,acronym',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date',
            'default' => 0,
            'range' => 
            array (
              'upper' => 1609369200,
              'lower' => 1633730400,
            ),
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_language',
            'foreign_table_where' => 'ORDER BY sys_language.title',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                1 => '-1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_db.xlf:tx_rtehtmlarea_acronym.type',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_db.xlf:tx_rtehtmlarea_acronym.type.I.1',
                1 => '2',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_db.xlf:tx_rtehtmlarea_acronym.type.I.0',
                1 => '1',
              ),
            ),
            'default' => '2',
          ),
        ),
        'term' => 
        array (
          'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_db.xlf:tx_rtehtmlarea_acronym.term',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'acronym' => 
        array (
          'label' => 'LLL:EXT:rtehtmlarea/Resources/Private/Language/locallang_db.xlf:tx_rtehtmlarea_acronym.acronym',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,type,term,acronym,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,sys_language_uid,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,hidden,--palette--;;1,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
  ),
  'categoryRegistry' => 'O:40:"TYPO3\\CMS\\Core\\Category\\CategoryRegistry":4:{s:11:"' . "\0" . '*' . "\0" . 'registry";a:3:{s:5:"pages";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:17:"sys_file_metadata";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}s:10:"tt_content";a:1:{s:10:"categories";a:1:{s:8:"position";s:18:"replace:categories";}}}s:13:"' . "\0" . '*' . "\0" . 'extensions";a:1:{s:4:"core";a:3:{s:5:"pages";a:1:{s:10:"categories";s:10:"categories";}s:17:"sys_file_metadata";a:1:{s:10:"categories";s:10:"categories";}s:10:"tt_content";a:1:{s:10:"categories";s:10:"categories";}}}s:20:"' . "\0" . '*' . "\0" . 'addedCategoryTabs";a:3:{s:5:"pages";s:5:"pages";s:17:"sys_file_metadata";s:17:"sys_file_metadata";s:10:"tt_content";s:10:"tt_content";}s:11:"' . "\0" . '*' . "\0" . 'template";s:60:"


CREATE TABLE %s (
  %s int(11) DEFAULT \'0\' NOT NULL
);


";}',
);
#