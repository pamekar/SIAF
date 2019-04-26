<template>

    <nav id="sidebar" aria-label="Main Navigation">
        <div class="content-header bg-white-5">
            <a class="font-w600 text-dual" href="index-3.html">
                <i class="fa fa-circle-notch text-primary"></i>
                <span class="smini-hide">
                <span class="font-w700 font-size-h5">ne</span> <span class="font-w400">4.2</span>
            </span>
            </a>
            <div>
                <div class="dropdown d-inline-block ml-3">
                    <a class="text-dual font-size-sm" id="sidebar-themes-dropdown" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="si si-drop"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0"
                         aria-labelledby="sidebar-themes-dropdown">
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme"
                           data-theme="default" href="#">
                            <span>Default</span>
                            <i class="fa fa-circle text-default"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme"
                           data-theme="assets/css/themes/amethyst.min-4.2.css" href="#">
                            <span>Amethyst</span>
                            <i class="fa fa-circle text-amethyst"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme"
                           data-theme="assets/css/themes/city.min-4.2.css" href="#">
                            <span>City</span>
                            <i class="fa fa-circle text-city"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme"
                           data-theme="assets/css/themes/flat.min-4.2.css" href="#">
                            <span>Flat</span>
                            <i class="fa fa-circle text-flat"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme"
                           data-theme="assets/css/themes/modern.min-4.2.css" href="#">
                            <span>Modern</span>
                            <i class="fa fa-circle text-modern"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" data-toggle="theme"
                           data-theme="assets/css/themes/smooth.min-4.2.css" href="#">
                            <span>Smooth</span>
                            <i class="fa fa-circle text-smooth"></i>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_light" href="#">
                            <span>Sidebar Light</span>
                        </a>
                        <a class="dropdown-item" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                            <span>Sidebar Dark</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" data-toggle="layout" data-action="header_style_light" href="#">
                            <span>Header Light</span>
                        </a>
                        <a class="dropdown-item" data-toggle="layout" data-action="header_style_dark" href="#">
                            <span>Header Dark</span>
                        </a>
                    </div>
                </div>
                <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close"
                   href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link active" href="be_pages_dashboard.html">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">User Interface</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-energy"></i>
                        <span class="nav-main-link-name">Blocks</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_styles.html">
                                <span class="nav-main-link-name">Styles</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_options.html">
                                <span class="nav-main-link-name">Options</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_forms.html">
                                <span class="nav-main-link-name">Forms</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_themed.html">
                                <span class="nav-main-link-name">Themed</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_blocks_api.html">
                                <span class="nav-main-link-name">API</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-badge"></i>
                        <span class="nav-main-link-name">Elements</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_grid.html">
                                <span class="nav-main-link-name">Grid</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_typography.html">
                                <span class="nav-main-link-name">Typography</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_icons.html">
                                <span class="nav-main-link-name">Icons</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_buttons.html">
                                <span class="nav-main-link-name">Buttons</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_buttons_groups.html">
                                <span class="nav-main-link-name">Button Groups</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_dropdowns.html">
                                <span class="nav-main-link-name">Dropdowns</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_tabs.html">
                                <span class="nav-main-link-name">Tabs</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_navigation.html">
                                <span class="nav-main-link-name">Navigation</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_progress.html">
                                <span class="nav-main-link-name">Progress</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_alerts.html">
                                <span class="nav-main-link-name">Alerts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_tooltips.html">
                                <span class="nav-main-link-name">Tooltips</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_popovers.html">
                                <span class="nav-main-link-name">Popovers</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_modals.html">
                                <span class="nav-main-link-name">Modals</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_images.html">
                                <span class="nav-main-link-name">Images Overlay</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_timeline.html">
                                <span class="nav-main-link-name">Timeline</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_ribbons.html">
                                <span class="nav-main-link-name">Ribbons</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_animations.html">
                                <span class="nav-main-link-name">Animations</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_ui_color_themes.html">
                                <span class="nav-main-link-name">Color Themes</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-grid"></i>
                        <span class="nav-main-link-name">Tables</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_styles.html">
                                <span class="nav-main-link-name">Styles</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_responsive.html">
                                <span class="nav-main-link-name">Responsive</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_helpers.html">
                                <span class="nav-main-link-name">Helpers</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_pricing.html">
                                <span class="nav-main-link-name">Pricing</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_tables_datatables.html">
                                <span class="nav-main-link-name">DataTables</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-note"></i>
                        <span class="nav-main-link-name">Forms</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_elements.html">
                                <span class="nav-main-link-name">Elements</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_custom_controls.html">
                                <span class="nav-main-link-name">Custom Controls</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_layouts.html">
                                <span class="nav-main-link-name">Layouts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_input_groups.html">
                                <span class="nav-main-link-name">Input Groups</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_plugins.html">
                                <span class="nav-main-link-name">Plugins</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_editors.html">
                                <span class="nav-main-link-name">Editors</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_validation.html">
                                <span class="nav-main-link-name">Validation</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_forms_wizard.html">
                                <span class="nav-main-link-name">Wizard</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">Develop</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-wrench"></i>
                        <span class="nav-main-link-name">Components</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_loaders.html">
                                <span class="nav-main-link-name">Loaders</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_image_cropper.html">
                                <span class="nav-main-link-name">Image Cropper</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_appear.html">
                                <span class="nav-main-link-name">Appear</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_charts.html">
                                <span class="nav-main-link-name">Charts</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_calendar.html">
                                <span class="nav-main-link-name">Calendar</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_sliders.html">
                                <span class="nav-main-link-name">Sliders</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_syntax_highlighting.html">
                                <span class="nav-main-link-name">Syntax Highlighting</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_rating.html">
                                <span class="nav-main-link-name">Rating</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_maps_google.html">
                                <span class="nav-main-link-name">Google Maps</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_maps_vector.html">
                                <span class="nav-main-link-name">Vector Maps</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_dialogs.html">
                                <span class="nav-main-link-name">Dialogs</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_notifications.html">
                                <span class="nav-main-link-name">Notifications</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_comp_gallery.html">
                                <span class="nav-main-link-name">Gallery</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-magic-wand"></i>
                        <span class="nav-main-link-name">Layout</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Page</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_page_default.html">
                                        <span class="nav-main-link-name">Default</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_page_flipped.html">
                                        <span class="nav-main-link-name">Flipped</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_page_native_scrolling.html">
                                        <span class="nav-main-link-name">Native Scrolling</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Main Content</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_full_width.html">
                                        <span class="nav-main-link-name">Full Width</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_narrow.html">
                                        <span class="nav-main-link-name">Narrow</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_content_main_boxed.html">
                                        <span class="nav-main-link-name">Boxed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Header</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-heading">Fixed</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_fixed_light.html">
                                        <span class="nav-main-link-name">Light</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_fixed_dark.html">
                                        <span class="nav-main-link-name">Dark</span>
                                    </a>
                                </li>
                                <li class="nav-main-heading">Static</li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_static_light.html">
                                        <span class="nav-main-link-name">Light</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_header_static_dark.html">
                                        <span class="nav-main-link-name">Dark</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Sidebar</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                                        <span class="nav-main-link-name">Mini</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_light.html">
                                        <span class="nav-main-link-name">Light</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                                        <span class="nav-main-link-name">Dark</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                                        <span class="nav-main-link-name">Hidden</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Side Overlay</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                                        <span class="nav-main-link-name">Visible</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_side_overlay_mode_hover.html">
                                        <span class="nav-main-link-name">Hover Mode</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                                        <span class="nav-main-link-name">No Page Overlay</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_layout_api.html">
                                <span class="nav-main-link-name">API</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-puzzle"></i>
                        <span class="nav-main-link-name">Multi Level Menu</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                                <span class="nav-main-link-name">Link 1-1</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="#">
                                <span class="nav-main-link-name">Link 1-2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <span class="nav-main-link-name">Sub Level 2</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 2-1</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="#">
                                        <span class="nav-main-link-name">Link 2-2</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                       aria-haspopup="true" aria-expanded="false" href="#">
                                        <span class="nav-main-link-name">Sub Level 3</span>
                                    </a>
                                    <ul class="nav-main-submenu">
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 3-1</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link" href="#">
                                                <span class="nav-main-link-name">Link 3-2</span>
                                            </a>
                                        </li>
                                        <li class="nav-main-item">
                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                               aria-haspopup="true" aria-expanded="false" href="#">
                                                <span class="nav-main-link-name">Sub Level 4</span>
                                            </a>
                                            <ul class="nav-main-submenu">
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 4-1</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link" href="#">
                                                        <span class="nav-main-link-name">Link 4-2</span>
                                                    </a>
                                                </li>
                                                <li class="nav-main-item">
                                                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                                       aria-haspopup="true" aria-expanded="false" href="#">
                                                        <span class="nav-main-link-name">Sub Level 5</span>
                                                    </a>
                                                    <ul class="nav-main-submenu">
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 5-1</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link" href="#">
                                                                <span class="nav-main-link-name">Link 5-2</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu"
                                                               data-toggle="submenu" aria-haspopup="true"
                                                               aria-expanded="false" href="#">
                                                                <span class="nav-main-link-name">Sub Level 6</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link 6-1</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">Link 6-2</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-heading">Pages</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-layers"></i>
                        <span class="nav-main-link-name">Generic</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_blank.html">
                                <span class="nav-main-link-name">Blank</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_blank_block.html">
                                <span class="nav-main-link-name">Blank (Block)</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_search.html">
                                <span class="nav-main-link-name">Search</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_profile.html">
                                <span class="nav-main-link-name">Profile</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_inbox.html">
                                <span class="nav-main-link-name">Inbox</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_invoice.html">
                                <span class="nav-main-link-name">Invoice</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_faq.html">
                                <span class="nav-main-link-name">FAQ</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_team.html">
                                <span class="nav-main-link-name">Team</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_contact.html">
                                <span class="nav-main-link-name">Contact</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_support.html">
                                <span class="nav-main-link-name">Support</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_generic_upgrade_plan.html">
                                <span class="nav-main-link-name">Upgrade Plan</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_maintenance.html">
                                <span class="nav-main-link-name">Maintenance</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_status.html">
                                <span class="nav-main-link-name">Status</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_coming_soon.html">
                                <span class="nav-main-link-name">Coming Soon</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-layers"></i>
                        <span class="nav-main-link-name"><span class="sidebar-mini-hide">Page Packs</span></span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-bubbles"></i>
                                <span class="nav-main-link-name">Forum</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_forum_categories.html">
                                        <span class="nav-main-link-name">Categories</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_forum_topics.html">
                                        <span class="nav-main-link-name">Topics</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_forum_discussion.html">
                                        <span class="nav-main-link-name">Discussion</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-pencil"></i>
                                <span class="nav-main-link-name">Blog</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_classic.html">
                                        <span class="nav-main-link-name">Classic</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_list.html">
                                        <span class="nav-main-link-name">List</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_grid.html">
                                        <span class="nav-main-link-name">Grid</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_story.html">
                                        <span class="nav-main-link-name">Story</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_blog_story_cover.html">
                                        <span class="nav-main-link-name">Story Cover</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                               aria-expanded="false" href="#">
                                <i class="nav-main-link-icon si si-graduation"></i>
                                <span class="nav-main-link-name">e-Learning</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_elearning_courses.html">
                                        <span class="nav-main-link-name">Courses</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_elearning_course.html">
                                        <span class="nav-main-link-name">Course</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="be_pages_elearning_lesson.html">
                                        <span class="nav-main-link-name">Lesson</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-lock"></i>
                        <span class="nav-main-link-name">Authentication</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_auth_all.html">
                                <span class="nav-main-link-name">All</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signin.html">
                                <span class="nav-main-link-name">Sign In</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signin2.html">
                                <span class="nav-main-link-name">Sign In 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signup.html">
                                <span class="nav-main-link-name">Sign Up</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_signup2.html">
                                <span class="nav-main-link-name">Sign Up 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_lock.html">
                                <span class="nav-main-link-name">Lock Screen</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_lock2.html">
                                <span class="nav-main-link-name">Lock Screen 2</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_reminder.html">
                                <span class="nav-main-link-name">Pass Reminder</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_auth_reminder2.html">
                                <span class="nav-main-link-name">Pass Reminder 2</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon si si-fire"></i>
                        <span class="nav-main-link-name">Error Pages</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="be_pages_error_all.html">
                                <span class="nav-main-link-name">All</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_400.html">
                                <span class="nav-main-link-name">400</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_401.html">
                                <span class="nav-main-link-name">401</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_403.html">
                                <span class="nav-main-link-name">403</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_404.html">
                                <span class="nav-main-link-name">404</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_500.html">
                                <span class="nav-main-link-name">500</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link" href="op_error_503.html">
                                <span class="nav-main-link-name">503</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</template>

<script>

    export default {
        props: {
            menu: Array
        }
    }
</script>