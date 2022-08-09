tx_gridelements {
    # TS Elemente haben Vorrang vor Datensätzen mit gleichen IDs
    overruleRecords = 1
    setup {
        # Bezeichung des Elements (muss nicht zwingend eine ID sein)
        carousel {
            title = Carousel
            topLevelLayout = 0

            # Konfiguration die normal im Datensatz stehen würde
            config {
                colCount = 1
                rowCount = 1
                rows {
                    1 {
                        columns {
                            1 {
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                                colPos = 100
                                allowed = textmedia
                            }
                        }
                    }
                }
            }

            icon = EXT:mw_starterkit/Resources/Public/Images/Backend/1-column.gif
        }
    }
}