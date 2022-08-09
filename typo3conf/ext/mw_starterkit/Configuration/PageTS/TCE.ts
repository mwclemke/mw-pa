TCEFORM.pages.layout {
    altLabels.1 = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xml:layout.1
    removeItems = 2,3
}

TCEFORM.tt_content {
    header_position {
        removeItems = right, left
    }

    imageorient.removeItems = 1,2,9,10
    imagecols.disabled = 1
    layout {
        addItems {
            100 = gallery
            110 = profile
            200 = red-background
            210 = full-screen-image
            220 = no-gutter
            230 = padding
            240 = grey-background
            300 = partner
        }

        altLabels {
            100 = Gallery
            110 = Profile
            200 = Coloured background behind all columns, full width
            210 = Full screen image behind all columns, full width
            220 = No padding between columns
            230 = Padding on top and bottom
            240 = Grey background
            300 = Partner
        }

        types {
            header {
                removeItems = 1,2,3,100,110,200,210,220,230,240,300
            }

            text < .header
            image < .header
            textpic < .header
            bullets < .header
            table < .header
            shortcut < .header
            list < .header
            div < .header
            html < .header
            mailform < .header
            login < .header
            mw_starterkit_button < .header
            mw_starterkit_iconbox < .header
            mw_starterkit_map < .header

            menu {
                keepItems = 0,300
                removeItems = 1,2,3,100,110,200,210,220,230,240
            }

            textmedia {
                removeItems = 200, 210,220,230,240
                keepItems = 0,100,110
            }

            gridelements_pi1 {
                removeItems = 100,110,1,2,3
                keepItems = 0,200, 210,220,230,240
            }
        }
    }
}

tx_news.templateLayouts {
    1 = Latest news
}