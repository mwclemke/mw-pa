lib.contentElement {
    templateRootPaths {
        20 = EXT:mw_starterkit/Resources/Private/Templates/Content/
    }

    partialRootPaths {
        20 = EXT:mw_starterkit/Resources/Private/Partials/Content/
    }

    layoutRootPaths {
        20 = EXT:mw_starterkit/Resources/Private/Layouts/Content/
    }

    dataProcessing {
        100 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        100 {
            references.fieldName = image
            as = images
        }
    }
}


tt_content.accordion = FLUIDTEMPLATE
tt_content.accordion {
    file = EXT:mw_starterkit/Resources/Private/Partials/Content/ImageInAccordion.html
    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
        10 {
            table = tt_content
            where.data = field:uid
            where.wrap =  uid=|
            orderBy = sorting
            as = imageContent

            dataProcessing {
                10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
                10 {
                    references.fieldName = assets
                    references.table = tt_content
                    as = images
                }
            }
        }
    }
}
