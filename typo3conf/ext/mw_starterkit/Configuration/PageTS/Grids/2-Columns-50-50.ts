tx_gridelements {
    # TS Elemente haben Vorrang vor Datensätzen mit gleichen IDs
    overruleRecords = 1
    setup {
        # Bezeichung des Elements (muss nicht zwingend eine ID sein)
        2-columns-50-50 {
            title = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.2-columns-50-50
            topLevelLayout = 1

            # Konfiguration die normal im Datensatz stehen würde
            config {
                colCount = 2
                rowCount = 1
                rows {
                    1 {
                        columns {
                            1 {
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.left-content
                                colPos = 100
                                allowedGridTypes = accordion, carousel
                            }

                            2 {
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.right-content
                                colPos = 110
                                allowedGridTypes = accordion, carousel
                            }
                        }
                    }
                }
            }

            icon = EXT:mw_starterkit/Resources/Public/Images/Backend/2-columns-50-50.gif
        }

        2-columns-50-50-full-screen {
            title = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.2-columns-50-50-full-screen
            topLevelLayout = 1

            # Konfiguration die normal im Datensatz stehen würde
            config {
                colCount = 2
                rowCount = 1
                rows {
                    1 {
                        columns {
                            1 {
                                name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.left-content
                                colPos = 100
                                allowedGridTypes = accordion, carousel
                            }

                            2 {
                                colPos >
                            }
                        }
                    }
                }
            }

            icon = EXT:mw_starterkit/Resources/Public/Images/Backend/2-columns-50-50.gif
        }
    }
}