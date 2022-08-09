tx_gridelements {
    # TS Elemente haben Vorrang vor Datensätzen mit gleichen IDs
    overruleRecords = 1
    setup {
        # Bezeichung des Elements (muss nicht zwingend eine ID sein)
        slider {
            title = Slider
            topLevelLayout = 0

            # Konfiguration die normal im Datensatz stehen würde
            config {
                colCount = 0
                rowCount = 0
            }

            icon = EXT:mw_starterkit/Resources/Public/Images/Backend/1-column.gif
        }
    }
}