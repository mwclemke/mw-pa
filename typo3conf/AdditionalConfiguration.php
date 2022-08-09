<?php






if (PHP_SAPI === "cli") {
    // cache config for CLI here
    $GLOBALS["TYPO3_CONF_VARS"]["SYS"]["caching"]["cacheConfigurations"]["extbase_object"]["backend"] = "TYPO3\CMS\Core\Cache\Backend\Typo3DatabaseBackend";
}





include_once "MwCachingConfiguration.php";





























