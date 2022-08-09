config {
    absRefPrefix = auto
    no_cache = 0
    uniqueLinkVars = 1
    pageTitleFirst = 1
    linkVars = L
    prefixLocalAnchors = {$config.prefixLocalAnchors}
    renderCharset = utf-8
    metaCharset = utf-8
    doctype = html5
    removeDefaultJS = 0
    inlineStyle2TempFile = 1
    admPanel = 0
    debug = 0
    cache_period = 86400
    sendCacheHeaders = 0
    intTarget =
    extTarget =
    disablePrefixComment = 1
    index_enable = 1
    index_externals = 1
    index_metatags = 1

    // Enable RealUrl
    tx_realurl_enable = {$config.enable_realurl}
    simulateStaticDocuments = 0

    // Language Settings
    sys_language_uid = 0
    sys_language_overlay = 1
    sys_language_mode = content_fallback
    language = {$config.language}
    locale_all = {$config.locale_all}
    htmlTag_setParams =

    // Compression and Concatenation of CSS and JS Files
    compressJs = {$config.compressJs}
    compressCss = {$config.compressCss}
    concatenateJs = {$config.concatenateJs}
    concatenateCss = {$config.concatenateCss}

    spamProtectEmailAddresses = 2
    spamProtectEmailAddresses_atSubst = &copy;
}