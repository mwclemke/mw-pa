mod {
    web_layout {
        BackendLayouts {
            homepage {
                title = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.homepage
                config {
                    backend_layout {
                        colCount = 3
                        rowCount = 3
                        rows {
                            1 {
                                columns {
                                    1 {
                                        name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.slider
                                        colspan = 3
                                        colPos = 20
                                        allowedGridTypes = slider
                                    }
                                }
                            }

                            2 {
                                columns {
                                    1 {
                                        name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                                        colspan = 3
                                        colPos = 0
                                    }
                                }
                            }

                            3 {
                                columns {
                                    1 {
                                        name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.1
                                        colPos = 10
                                    }

                                    2 {
                                        name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.2
                                        colPos = 11
                                    }

                                    3 {
                                        name = LLL:EXT:mw_starterkit/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.3
                                        colPos = 12
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
