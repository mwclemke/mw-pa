lib.gridelements.defaultGridSetup {
    cObject < lib.fluidContent
    cObject {
        templateName = Default
        templateRootPaths {
            10 = EXT:mw_starterkit/Resources/Private/Templates/Grids/
            20 = EXT:mw_starterkit/Resources/Private/Templates/Content/
        }

        partialRootPaths {
            10 = EXT:mw_starterkit/Resources/Private/Partials/
            20 = EXT:mw_starterkit/Resources/Private/Partials/Content/
            30 = EXT:mw_starterkit/Resources/Private/Templates/Content/
        }

        layoutRootPaths {
            10 = EXT:mw_starterkit/Resources/Private/Layouts/Grids/
        }

        dataProcessing {
            10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            10 {
                references.fieldName = media
            }

            20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
            20 {
                references.fieldName = assets
                as = assets
            }
        }
    }
}

tt_content.gridelements_pi1.20.10.setup {
    default < lib.gridelements.defaultGridSetup
    accordion < lib.gridelements.defaultGridSetup
    accordion.cObject.templateName = Accordion
    carousel < lib.gridelements.defaultGridSetup
    carousel.cObject.templateName = Carousel
    slider < lib.gridelements.defaultGridSetup
    slider.cObject.templateName = Slider
}