tx_gridelements {
    # TS Elemente haben Vorrang vor Datensätzen mit gleichen IDs
    overruleRecords = 1
    setup {
        # Bezeichung des Elements (muss nicht zwingend eine ID sein)
        2-columns-25-75 {
            title = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.2-columns-25-75
            topLevelLayout = 1

            # Konfiguration die normal im Datensatz stehen würde
            config {
                colCount = 4
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
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.right-content
                                colspan = 3
                                colPos = 110
                                allowedGridTypes = accordion, carousel
                            }
                        }
                    }
                }
            }

            icon = EXT:mw_starterkit/Resources/Public/Images/Backend/2-columns-25-75.gif
        }
    }
}