<?php
/**
 * backend/config.php
 *
 * Author: pixelcave
 *
 * Backend pages configuration file
 *
 */

// **************************************************************************************************
// INCLUDED VIEWS
// **************************************************************************************************

$cb->inc_side_overlay           = 'inc/backend/views/inc_side_overlay.php';
$cb->inc_sidebar                = 'inc/backend/views/inc_sidebar.php';
$cb->inc_header                 = 'inc/backend/views/inc_header.php';
$cb->inc_footer                 = 'inc/backend/views/inc_footer.php';


// **************************************************************************************************
// MAIN MENU
// **************************************************************************************************

$cb->main_nav                   = array(
    array(
        'name'  => 'Dashboard',
        'icon'  => 'fa fa-house-user',
        'url'   => 'be_pages_dashboard.php'
    ),
    array(
        'name'  => 'Page Kits',
        'icon'  => 'fa fa-award',
        'sub'   => array(
            array(
                'name'  => 'Dashboards',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard 2',
                        'url'   => 'be_pages_dashboard2.php'
                    ),
                    array(
                        'name'  => 'Dashboard 3',
                        'url'   => 'be_pages_dashboard3.php'
                    ),
                    array(
                        'name'  => 'Dashboard 4',
                        'url'   => 'be_pages_dashboard4.php'
                    ),
                )
            ),
            array(
                'name'  => 'Alt Dashboards',
                'sub'   => array(
                    array(
                        'name'  => 'Classic',
                        'url'   => 'db_classic.php'
                    ),
                    array(
                        'name'  => 'Clean',
                        'url'   => 'db_clean.php'
                    ),
                    array(
                        'name'  => 'Social',
                        'url'   => 'db_social.php'
                    ),
                    array(
                        'name'  => 'Corporate',
                        'url'   => 'db_corporate.php'
                    ),
                    array(
                        'name'  => 'Minimal',
                        'url'   => 'db_minimal.php'
                    ),
                    array(
                        'name'  => 'Pop',
                        'url'   => 'db_pop.php'
                    ),
                    array(
                        'name'  => 'Medical',
                        'url'   => 'db_medical.php'
                    )
                )
            ),
            array(
                'name'  => 'Hosting',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_hosting_dashboard.php'
                    ),
                    array(
                        'name'  => 'Emails',
                        'url'   => 'be_pages_hosting_emails.php'
                    ),
                    array(
                        'name'  => 'Account',
                        'url'   => 'be_pages_hosting_account.php'
                    ),
                    array(
                        'name'  => 'Support',
                        'url'   => 'be_pages_hosting_support.php'
                    )
                )
            ),
            array(
                'name'  => 'Real Estate',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_real_estate_dashboard.php'
                    ),
                    array(
                        'name'  => 'Listing',
                        'url'   => 'be_pages_real_estate_listing.php'
                    ),
                    array(
                        'name'  => 'Add New Listing',
                        'url'   => 'be_pages_real_estate_listing_new.php'
                    )
                )
            ),
            array(
                'name'  => 'Crypto',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_crypto_dashboard.php'
                    ),
                    array(
                        'name'  => 'Buy/Sell',
                        'url'   => 'be_pages_crypto_buy_sell.php'
                    ),
                    array(
                        'name'  => 'Wallets',
                        'url'   => 'be_pages_crypto_wallets.php'
                    ),
                    array(
                        'name'  => 'Settings',
                        'url'   => 'be_pages_crypto_settings.php'
                    )
                )
            ),
            array(
                'name'  => 'e-Commerce',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'be_pages_ecom_dashboard.php'
                    ),
                    array(
                        'name'  => 'Orders',
                        'url'   => 'be_pages_ecom_orders.php'
                    ),
                    array(
                        'name'  => 'Order',
                        'url'   => 'be_pages_ecom_order.php'
                    ),
                    array(
                        'name'  => 'Products',
                        'url'   => 'be_pages_ecom_products.php'
                    ),
                    array(
                        'name'  => 'Product Edit',
                        'url'   => 'be_pages_ecom_product_edit.php'
                    ),
                    array(
                        'name'  => 'Customer',
                        'url'   => 'be_pages_ecom_customer.php'
                    )
                )
            ),
            array(
                'name'  => 'e-Learning',
                'sub'   => array(
                    array(
                        'name'  => 'Courses',
                        'url'   => 'be_pages_elearning_courses.php'
                    ),
                    array(
                        'name'  => 'Course',
                        'url'   => 'be_pages_elearning_course.php'
                    ),
                    array(
                        'name'  => 'Lesson',
                        'url'   => 'be_pages_elearning_lesson.php'
                    )
                )
            ),
            array(
                'name'  => 'Forum',
                'sub'   => array(
                    array(
                        'name'  => 'Categories',
                        'url'   => 'be_pages_forum_categories.php'
                    ),
                    array(
                        'name'  => 'Topics',
                        'url'   => 'be_pages_forum_topics.php'
                    ),
                    array(
                        'name'  => 'Discussion',
                        'url'   => 'be_pages_forum_discussion.php'
                    )
                )
            ),
            array(
                'name'  => 'Boxed Backend',
                'sub'   => array(
                    array(
                        'name'  => 'Dashboard',
                        'url'   => 'bd_dashboard.php'
                    ),
                    array(
                        'name'  => 'Search',
                        'url'   => 'bd_search.php'
                    ),
                    array(
                        'name'  => 'Hero Simple 1',
                        'url'   => 'bd_variations_hero_simple_1.php'
                    ),
                    array(
                        'name'  => 'Hero Simple 2',
                        'url'   => 'bd_variations_hero_simple_2.php'
                    ),
                    array(
                        'name'  => 'Hero Simple 3',
                        'url'   => 'bd_variations_hero_simple_3.php'
                    ),
                    array(
                        'name'  => 'Hero Simple 4',
                        'url'   => 'bd_variations_hero_simple_4.php'
                    ),
                    array(
                        'name'  => 'Hero Image 1',
                        'url'   => 'bd_variations_hero_image_1.php'
                    ),
                    array(
                        'name'  => 'Hero Image 2',
                        'url'   => 'bd_variations_hero_image_2.php'
                    ),
                    array(
                        'name'  => 'Hero Image 3',
                        'url'   => 'bd_variations_hero_image_3.php'
                    ),
                    array(
                        'name'  => 'Hero Image 4',
                        'url'   => 'bd_variations_hero_image_4.php'
                    ),
                    array(
                        'name'  => 'Hero Video 1',
                        'url'   => 'bd_variations_hero_video_1.php'
                    ),
                    array(
                        'name'  => 'Hero Video 2',
                        'url'   => 'bd_variations_hero_video_2.php'
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'User Interface',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Blocks',
        'icon'  => 'fa fa-grip-vertical',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_blocks_styles.php'
            ),
            array(
                'name'  => 'Options',
                'url'   => 'be_blocks_options.php'
            ),
            array(
                'name'  => 'Forms',
                'url'   => 'be_blocks_forms.php'
            ),
            array(
                'name'  => 'Themed',
                'url'   => 'be_blocks_themed.php'
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_blocks_api.php'
            )
        )
    ),
    array(
        'name'  => 'Widgets',
        'icon'  => 'fa fa-pencil-ruler',
        'sub'   => array(
            array(
                'name'  => 'Tiles',
                'url'   => 'be_widgets_tiles.php'
            ),
            array(
                'name'  => 'Users',
                'url'   => 'be_widgets_users.php'
            ),
            array(
                'name'  => 'Statistics',
                'url'   => 'be_widgets_stats.php'
            ),
            array(
                'name'  => 'Media',
                'url'   => 'be_widgets_media.php'
            ),
            array(
                'name'  => 'Blog',
                'url'   => 'be_widgets_blog.php'
            ),
            array(
                'name'  => 'Projects',
                'url'   => 'be_widgets_projects.php'
            )
        )
    ),
    array(
        'name'  => 'Elements',
        'icon'  => 'fa fa-layer-group',
        'sub'   => array(
            array(
                'name'  => 'Grid',
                'url'   => 'be_ui_grid.php'
            ),
            array(
                'name'  => 'Icons',
                'url'   => 'be_ui_icons.php'
            ),
            array(
                'name'  => 'Typography',
                'url'   => 'be_ui_typography.php'
            ),
            array(
                'name'  => 'Buttons',
                'url'   => 'be_ui_buttons.php'
            ),
            array(
                'name'  => 'Button Groups',
                'url'   => 'be_ui_buttons_groups.php'
            ),
            array(
                'name'  => 'Dropdowns',
                'url'   => 'be_ui_dropdowns.php'
            ),
            array(
                'name'  => 'Navigation',
                'url'   => 'be_ui_navigation.php'
            ),
            array(
                'name'  => 'Tabs',
                'url'   => 'be_ui_tabs.php'
            ),
            array(
                'name'  => 'Alerts',
                'url'   => 'be_ui_alerts.php'
            ),
            array(
                'name'  => 'Progress',
                'url'   => 'be_ui_progress.php'
            ),
            array(
                'name'  => 'Tooltips',
                'url'   => 'be_ui_tooltips.php'
            ),
            array(
                'name'  => 'Popovers',
                'url'   => 'be_ui_popovers.php'
            ),
            array(
                'name'  => 'Modals',
                'url'   => 'be_ui_modals.php'
            ),
            array(
                'name'  => 'Images',
                'url'   => 'be_ui_images.php'
            ),
            array(
                'name'  => 'Animations',
                'url'   => 'be_ui_animations.php'
            ),
            array(
                'name'  => 'Ribbons',
                'url'   => 'be_ui_ribbons.php'
            ),
            array(
                'name'  => 'Timeline',
                'url'   => 'be_ui_timeline.php'
            ),
            array(
                'name'  => 'Accordion',
                'url'   => 'be_ui_accordion.php'
            ),
            array(
                'name'  => 'Color Themes',
                'url'   => 'be_ui_color_themes.php'
            )
        )
    ),
    array(
        'name'  => 'Tables',
        'icon'  => 'fa fa-list-alt',
        'sub'   => array(
            array(
                'name'  => 'Styles',
                'url'   => 'be_tables_styles.php'
            ),
            array(
                'name'  => 'Responsive',
                'url'   => 'be_tables_responsive.php'
            ),
            array(
                'name'  => 'Helpers',
                'url'   => 'be_tables_helpers.php'
            ),
            array(
                'name'  => 'Pricing',
                'url'   => 'be_tables_pricing.php'
            ),
            array(
                'name'  => 'DataTables',
                'url'   => 'be_tables_datatables.php'
            )
        )
    ),
    array(
        'name'  => 'Forms',
        'icon'  => 'fa fa-edit',
        'sub'   => array(
            array(
                'name'  => 'Elements',
                'url'   => 'be_forms_elements.php'
            ),
            array(
                'name'  => 'Layouts',
                'url'   => 'be_forms_layouts.php'
            ),
            array(
                'name'  => 'Input Groups',
                'url'   => 'be_forms_input_groups.php'
            ),
            array(
                'name'  => 'Plugins',
                'url'   => 'be_forms_plugins.php'
            ),
            array(
                'name'  => 'Editors',
                'url'   => 'be_forms_editors.php'
            ),
            array(
                'name'  => 'CKEditor 5',
                'sub'   => array(
                    array(
                        'name'  => 'Classic',
                        'url'   => 'be_forms_ckeditor5_classic.php'
                    ),
                    array(
                        'name'  => 'Inline',
                        'url'   => 'be_forms_ckeditor5_inline.php'
                    ),
                )
            ),
            array(
                'name'  => 'Validation',
                'url'   => 'be_forms_validation.php'
            ),
            array(
                'name'  => 'Pre-made',
                'url'   => 'be_forms_premade.php'
            )
        )
    ),
    array(
        'name'  => 'Build',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Layout',
        'icon'  => 'fa fa-vector-square',
        'sub'   => array(
            array(
                'name'  => 'General',
                'sub'   => array(
                    array(
                        'name'  => 'Default',
                        'url'   => 'be_layout_default.php'
                    ),
                    array(
                        'name'  => 'Flipped',
                        'url'   => 'be_layout_flipped.php'
                    ),
                    array(
                        'name'  => 'Native Scrolling',
                        'url'   => 'be_layout_native_scrolling.php'
                    )
                )
            ),
            array(
                'name'  => 'Header',
                'sub'   => array(
                    array(
                        'name'  => 'Static',
                        'sub'   => array(
                            array(
                                'name'  => 'Modern',
                                'url'   => 'be_layout_header_modern.php'
                            ),
                            array(
                                'name'  => 'Classic',
                                'url'   => 'be_layout_header_classic.php'
                            ),
                            array(
                                'name'  => 'Classic Dark',
                                'url'   => 'be_layout_header_classic_dark.php'
                            ),
                            array(
                                'name'  => 'Glass',
                                'url'   => 'be_layout_header_glass.php'
                            ),
                            array(
                                'name'  => 'Glass Dark',
                                'url'   => 'be_layout_header_glass_dark.php'
                            )
                        )
                    ),
                    array(
                        'name'  => 'Fixed',
                        'sub'   => array(
                            array(
                                'name'  => 'Modern',
                                'url'   => 'be_layout_header_fixed_modern.php'
                            ),
                            array(
                                'name'  => 'Classic',
                                'url'   => 'be_layout_header_fixed_classic.php'
                            ),
                            array(
                                'name'  => 'Classic Dark',
                                'url'   => 'be_layout_header_fixed_classic_dark.php'
                            ),
                            array(
                                'name'  => 'Glass',
                                'url'   => 'be_layout_header_fixed_glass.php'
                            ),
                            array(
                                'name'  => 'Glass Dark',
                                'url'   => 'be_layout_header_fixed_glass_dark.php'
                            )
                        )
                    ),
                )
            ),
            array(
                'name'  => 'Sidebar',
                'sub'   => array(
                    array(
                        'name'  => 'Dark',
                        'url'   => 'be_layout_sidebar_dark.php'
                    ),
                    array(
                        'name'  => 'Hidden',
                        'url'   => 'be_layout_sidebar_hidden.php'
                    ),
                    array(
                        'name'  => 'Mini',
                        'url'   => 'be_layout_sidebar_mini.php'
                    )
                )
            ),
            array(
                'name'  => 'Side Overlay',
                'sub'   => array(
                    array(
                        'name'  => 'Visible',
                        'url'   => 'be_layout_side_overlay_visible.php'
                    ),
                    array(
                        'name'  => 'Hoverable',
                        'url'   => 'be_layout_side_overlay_hoverable.php'
                    ),
                    array(
                        'name'  => 'No Page Overlay',
                        'url'   => 'be_layout_side_overlay_no_page_overlay.php'
                    )
                )
            ),
            array(
                'name'  => 'Main Content',
                'sub'   => array(
                    array(
                        'name'  => 'Boxed',
                        'url'   => 'be_layout_content_boxed.php'
                    ),
                    array(
                        'name'  => 'Narrow',
                        'url'   => 'be_layout_content_narrow.php'
                    ),
                    array(
                        'name'  => 'Full Width',
                        'url'   => 'be_layout_content_full_width.php'
                    )
                )
            ),
            array(
                'name'  => 'Hero',
                'sub'   => array(
                    array(
                        'name'  => 'Color',
                        'url'   => 'be_layout_hero_color.php'
                    ),
                    array(
                        'name'  => 'Bubbles',
                        'url'   => 'be_layout_hero_bubbles.php'
                    ),
                    array(
                        'name'  => 'Image',
                        'url'   => 'be_layout_hero_image.php'
                    ),
                    array(
                        'name'  => 'Video',
                        'url'   => 'be_layout_hero_video.php'
                    )
                )
            ),
            array(
                'name'  => 'API',
                'url'   => 'be_layout_api.php'
            )
        )
    ),
    array(
        'name'  => 'Components',
        'icon'  => 'fa fa-cogs',
        'sub'   => array(
            array(
                'name'  => 'Charts',
                'url'   => 'be_comp_charts.php'
            ),
            array(
                'name'  => 'Onboarding',
                'url'   => 'be_comp_onboarding.php'
            ),
            array(
                'name'  => 'Loaders',
                'url'   => 'be_comp_loaders.php'
            ),
            array(
                'name'  => 'Dialogs',
                'url'   => 'be_comp_dialogs.php'
            ),
            array(
                'name'  => 'Notifications',
                'url'   => 'be_comp_notifications.php'
            ),
            array(
                'name'  => 'Nestable',
                'url'   => 'be_comp_nestable.php'
            ),
            array(
                'name'  => 'Gallery',
                'url'   => 'be_comp_gallery.php'
            ),
            array(
                'name'  => 'Sliders',
                'url'   => 'be_comp_sliders.php'
            ),
            array(
                'name'  => 'Carousel',
                'url'   => 'be_comp_carousel.php'
            ),
            array(
                'name'  => 'Offcanvas',
                'url'   => 'be_comp_offcanvas.php'
            ),
            array(
                'name'  => 'Rating',
                'url'   => 'be_comp_rating.php'
            ),
            array(
                'name'  => 'Appear',
                'url'   => 'be_comp_appear.php'
            ),
            array(
                'name'  => 'Calendar',
                'url'   => 'be_comp_calendar.php'
            ),
            array(
                'name'  => 'Image Cropper',
                'url'   => 'be_comp_image_cropper.php'
            ),
            array(
                'name'  => 'Vector Maps',
                'url'   => 'be_comp_maps_vector.php'
            ),
            array(
                'name'  => 'Syntax Highlighting',
                'url'   => 'be_comp_syntax_highlighting.php'
            )
        )
    ),
    array(
        'name'  => 'Main Menu',
        'icon'  => 'fa fa-puzzle-piece',
        'sub'   => array(
            array(
                'name'  => 'Link 1-1',
                'url'   => '#'
            ),
            array(
                'name'  => 'Link 1-2',
                'url'   => '#'
            ),
            array(
                'name'  => 'Sub Level 2',
                'sub'   => array(
                    array(
                        'name'  => 'Link 2-1',
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Link 2-2',
                        'url'   => '#'
                    ),
                    array(
                        'name'  => 'Sub Level 3',
                        'sub'   => array(
                            array(
                                'name'  => 'Link 3-1',
                                'url'   => '#'
                            ),
                            array(
                                'name'  => 'Link 3-2',
                                'url'   => '#'
                            )
                        )
                    )
                )
            )
        )
    ),
    array(
        'name'  => 'Pages',
        'type'  => 'heading'
    ),
    array(
        'name'  => 'Generic',
        'icon'  => 'fa fa-globe-americas',
        'sub'   => array(
            array(
                'name'  => 'Blank',
                'url'   => 'be_pages_generic_blank.php'
            ),
            array(
                'name'  => 'Blank (Block)',
                'url'   => 'be_pages_generic_blank_block.php'
            ),
            array(
                'name'  => 'Blank (Breadcrumb)',
                'url'   => 'be_pages_generic_blank_breadcrumb.php'
            ),
            array(
                'name'  => 'Search',
                'url'   => 'be_pages_generic_search.php'
            ),
            array(
                'name'  => 'Profile',
                'url'   => 'be_pages_generic_profile.php'
            ),
            array(
                'name'  => 'Profile Edit',
                'url'   => 'be_pages_generic_profile_edit.php'
            ),
            array(
                'name'  => 'Inbox',
                'url'   => 'be_pages_generic_inbox.php'
            ),
            array(
                'name'  => 'Invoice',
                'url'   => 'be_pages_generic_invoice.php'
            ),
            array(
                'name'  => 'FAQ',
                'url'   => 'be_pages_generic_faq.php'
            ),
            array(
                'name'  => 'Blog',
                'url'   => 'be_pages_generic_blog.php'
            ),
            array(
                'name'  => 'Story',
                'url'   => 'be_pages_generic_story.php'
            ),
            array(
                'name'  => 'Project List',
                'url'   => 'be_pages_generic_project_list.php'
            ),
            array(
                'name'  => 'Project',
                'url'   => 'be_pages_generic_project.php'
            ),
            array(
                'name'  => 'Upgrade Plan',
                'url'   => 'be_pages_generic_upgrade_plan.php'
            ),
            array(
                'name'  => 'Team',
                'url'   => 'be_pages_generic_team.php'
            ),
            array(
                'name'  => 'Contact',
                'url'   => 'be_pages_generic_contact.php'
            ),
            array(
                'name'  => 'Todo',
                'url'   => 'be_pages_generic_todo.php'
            ),
            array(
                'name'  => 'Sidebar with Mini Nav',
                'url'   => 'be_pages_sidebar_mini_nav.php'
            ),
            array(
                'name'  => 'Coming Soon',
                'url'   => 'op_coming_soon.php'
            ),
            array(
                'name'  => 'Maintenance',
                'url'   => 'op_maintenance.php'
            ),
            array(
                'name'  => 'Status',
                'url'   => 'op_status.php'
            ),
            array(
                'name'  => 'Installation',
                'url'   => 'op_installation.php'
            ),
            array(
                'name'  => 'Checkout',
                'url'   => 'op_checkout.php'
            )
        )
    ),
    array(
        'name'  => 'Authentication',
        'icon'  => 'fa fa-user-lock',
        'sub'   => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_auth_all.php'
            ),
            array(
                'name'  => 'Sign In',
                'url'   => 'op_auth_signin.php'
            ),
            array(
                'name'  => 'Sign In 2',
                'url'   => 'op_auth_signin2.php'
            ),
            array(
                'name'  => 'Sign In 3',
                'url'   => 'op_auth_signin3.php'
            ),
            array(
                'name'  => 'Sign Up',
                'url'   => 'op_auth_signup.php'
            ),
            array(
                'name'  => 'Sign Up 2',
                'url'   => 'op_auth_signup2.php'
            ),
            array(
                'name'  => 'Sign Up 3',
                'url'   => 'op_auth_signup3.php'
            ),
            array(
                'name'  => 'Lock Screen',
                'url'   => 'op_auth_lock.php'
            ),
            array(
                'name'  => 'Lock Screen 2',
                'url'   => 'op_auth_lock2.php'
            ),
            array(
                'name'  => 'Lock Screen 3',
                'url'   => 'op_auth_lock3.php'
            ),
            array(
                'name'  => 'Pass Reminder',
                'url'   => 'op_auth_reminder.php'
            ),
            array(
                'name'  => 'Pass Reminder 2',
                'url'   => 'op_auth_reminder2.php'
            ),
            array(
                'name'  => 'Pass Reminder 3',
                'url'   => 'op_auth_reminder3.php'
            )
        )
    ),
    array(
        'name'  => 'Error',
        'icon'  => 'fa fa-flag',
        'sub'    => array(
            array(
                'name'  => 'All',
                'url'   => 'be_pages_error_all.php'
            ),
            array(
                'name'  => '400',
                'url'   => 'op_error_400.php'
            ),
            array(
                'name'  => '401',
                'url'   => 'op_error_401.php'
            ),
            array(
                'name'  => '403',
                'url'   => 'op_error_403.php'
            ),
            array(
                'name'  => '404',
                'url'   => 'op_error_404.php'
            ),
            array(
                'name'  => '500',
                'url'   => 'op_error_500.php'
            ),
            array(
                'name'  => '503',
                'url'   => 'op_error_503.php'
            )
        )
    ),
    array(
        'name'  => 'Get Started',
        'icon'  => 'fa fa-coffee',
        'sub'   => array(
            array(
                'name'  => 'Backend',
                'url'   => 'gs_backend.php'
            ),
            array(
                'name'  => 'Backend Boxed',
                'url'   => 'gs_backend_boxed.php'
            ),
            array(
                'name'  => 'Landing',
                'url'   => 'gs_landing.php'
            ),
            array(
                'name'  => 'RTL Backend',
                'url'   => 'gs_rtl_backend.php'
            ),
            array(
                'name'  => 'RTL Backend Boxed',
                'url'   => 'gs_rtl_backend_boxed.php'
            ),
            array(
                'name'  => 'RTL Landing',
                'url'   => 'gs_rtl_landing.php'
            ),
        )
    )
);
