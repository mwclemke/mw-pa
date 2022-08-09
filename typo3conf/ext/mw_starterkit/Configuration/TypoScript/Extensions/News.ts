# News title at detail page
lib.newsTitle = RECORDS
lib.newsTitle {
    source = {GP:tx_news_pi1|news}
    source.insertData = 1
    tables = tx_news_domain_model_news
    conf.tx_news_domain_model_news >
    conf.tx_news_domain_model_news = TEXT
    conf.tx_news_domain_model_news.field = title
}

# Plugin config
plugin.tx_news {
    view {
        templateRootPaths {
            10 = EXT:mw_starterkit/Resources/Private/Templates/
        }

        partialRootPaths {
            10 = EXT:mw_starterkit/Resources/Private/Partials/
        }

        layoutRootPaths {
            10 = EXT:mw_starterkit/Resources/Private/Layouts/
        }

        widget.GeorgRinger\News\ViewHelpers\Widget\PaginateViewHelper.templateRootPath = EXT:mw_starterkit/Resources/Private/Templates/
    }

    settings {
        cssFile >

        list {
            # media configuration
            media {
                image {
                    maxWidth = 370
                    maxHeight = 270
                }
            }
        }
    }
}