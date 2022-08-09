tx_gridelements {
    # TS Elemente haben Vorrang vor Datensätzen mit gleichen IDs
    overruleRecords = 1
    setup {
        # Bezeichung des Elements (muss nicht zwingend eine ID sein)
        3-columns-33-33-33 {
            title = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.3-columns-33-33-33
            topLevelLayout = 1

            # Konfiguration die normal im Datensatz stehen würde
            config {
                colCount = 3
                rowCount = 1
                rows {
                    1 {
                        columns {
                            1 {
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.left-content
                                colspan = 1
                                colPos = 100
                                allowedGridTypes = accordion, carousel
                            }

                            2 {
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.middle-content
                                colspan = 1
                                colPos = 120
                                allowedGridTypes = accordion, carousel
                            }

                            3 {
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.right-content
                                colspan = 1
                                colPos = 110
                                allowedGridTypes = accordion, carousel
                            }
                        }
                    }
                }
            }

            icon = EXT:mw_starterkit/Resources/Public/Images/Backend/3-columns-33-33-33.gif
        }
        3-columns-33-33-33-full-screen < .3-columns-33-33-33
        3-columns-33-33-33-full-screen.title = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.3-columns-33-33-33-full-screen
    }
}