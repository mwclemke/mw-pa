##############
#### PAGE ####
##############
page = PAGE
page {
    typeNum = 0
    shortcutIcon = {$page.includePath.icons}favicon.ico

    meta.viewport = width=device-width, initial-scale=1.0

    headerData {
        10 = HMENU
        10 {
            special = browse
            special {
                items = prev|next
            }

            1 = TMENU
            1.NO {
                allWrap = <link rel="prev" href="|"> |*| <link rel="next" href="|">
                doNotLinkIt = 1
                stdWrap {
                    typolink {
                        parameter.data = field:uid
                        useCacheHash = 1
                        returnLast = url
                    }
                }
            }
        }
    }

    10 = FLUIDTEMPLATE
    10 {
        file.stdWrap.cObject = CASE
        file.stdWrap.cObject {
            key.data = levelfield:-1, backend_layout_next_level, slide
            key.override.field = backend_layout

            default = TEXT
            default.value = {$page.fluidtemplate.templateRootPath}Default.html
            default.insertData = 1

            pagets__news-detail = TEXT
            pagets__news-detail.value = {$page.fluidtemplate.templateRootPath}NewsDetail.html
            pagets__news-detail.insertData = 1

            pagets__homepage = TEXT
            pagets__homepage.value = {$page.fluidtemplate.templateRootPath}Home.html
            pagets__homepage.insertData = 1
        }

        partialRootPath = {$page.fluidtemplate.partialRootPath}
        layoutRootPath = {$page.fluidtemplate.layoutRootPath}

        variables {
            mainMenuStartingPid = TEXT
            mainMenuStartingPid.value = {$navigation.main.startingPid}

            backgroundImage < lib.subHeaderBackgroundImage
        }

        settings {
            social {
                facebook = {$settings.social.facebook}
                twitter = {$settings.social.twitter}
                google = {$settings.social.google}
                mail = {$settings.social.mail}
            }

            logo = {$settings.logo}
        }
    }

    includeCSS {
        main = {$page.fluidtemplate.stylesRootPath}main.css
    }

    includeJSFooterlibs {
        1 = {$page.fluidtemplate.scriptsRootPath}jquery.min.js
        2 = {$page.fluidtemplate.scriptsRootPath}bootstrap.min.js
        3 = {$page.fluidtemplate.scriptsRootPath}jquery.isotope.min.js
        4 = {$page.fluidtemplate.scriptsRootPath}easing.js
        5 = {$page.fluidtemplate.scriptsRootPath}jquery.ui.totop.js
        6 = {$page.fluidtemplate.scriptsRootPath}ender.js
        7 = {$page.fluidtemplate.scriptsRootPath}owl.carousel.js
        8 = {$page.fluidtemplate.scriptsRootPath}jquery.fitvids.js
        9 = {$page.fluidtemplate.scriptsRootPath}jquery.plugin.js
        10 = {$page.fluidtemplate.scriptsRootPath}wow.min.js
        11 = {$page.fluidtemplate.scriptsRootPath}jquery.magnific-popup.min.js
        12 = {$page.fluidtemplate.scriptsRootPath}jquery.stellar.js
        13 = {$page.fluidtemplate.scriptsRootPath}typed.js
        14 = {$page.fluidtemplate.scriptsRootPath}jquery.scrollto.js
    }

    includeJSLibs {
        15 = //maps.googleapis.com/maps/api/js?v=3.exp
        15.external = 1
        15.disableCompression = 1
        15.excludeFromConcatenation = 1
    }

    includeJSFooter {
        10 = {$page.fluidtemplate.scriptsRootPath}custom.js

        20 = {$page.fluidtemplate.scriptsRootPath}rs-plugin/js/jquery.themepunch.plugins.min.js
        21 = {$page.fluidtemplate.scriptsRootPath}rs-plugin/js/jquery.themepunch.revolution.min.js
        22 = {$page.fluidtemplate.scriptsRootPath}revslider-custom.js
    }
}