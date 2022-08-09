mod.wizards.newContentElement.wizardItems.mittwald.header = Starterkit

mod.wizards.newContentElement.wizardItems.mittwald {
    elements {
        mw_starterkit_button {
            iconIdentifier = ce-icon-button
            title = Button
            description = Link as Button
            tt_content_defValues {
                CType = mw_starterkit_button
            }
        }
    }

    show := addToList(mw_starterkit_button)
}