<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        'display_name'         => 'LSKIT WEBSITE CONTENT',
        'menu_title'           => esc_html__( 'WEBSITE CONTENT', 'lskit' ),
        'customizer'           => false,
    );

    Redux::setArgs( $opt_name, $args );
    
    // common content
    Redux::setSection( $opt_name, array(
        'title' => __( 'Common', 'lskit' ),
        'id'    => 'common',
        'icon'  => 'el el-home',
        'fields'     => array(
            array(
                'id'       => 'back_top_icon',
                'type'     => 'media',
                'url'      =>true,
                'title'    => __( 'Back to Top Icon', 'lskit' ),
            ),
            array(
                'id'       => 'whatsapp_icon',
                'type'     => 'media',
                'url'      =>true,
                'title'    => __( 'Whatsapp Icon', 'lskit' ),
            ),
            array(
                'id'       => 'whatsapp_num',
                'type'     => 'text',
                'title'    => __( 'Whatsapp Number', 'lskit' ),
                'default'  => '+8801631483563',
            ),
        )
    ) );

    // header content
    Redux::setSection( $opt_name, array(
        'title' => __( 'Header', 'lskit' ),
        'id'    => 'header',
        'icon'  => 'el el-home',
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Logo', 'lskit' ),
        'id'         => 'logo',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'logoupload',
                'type'     => 'media',
                'url'      =>true,
                'title'    => __( 'Upload Logo', 'lskit' ),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Button', 'lskit' ),
        'id'         => 'header_btn',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'header_btn_text',
                'type'     => 'text',
                'title'    => __( 'Header Button Text', 'lskit' ),
                'default'  => 'REQUEST A QUOTE',
            ),
        )
    ) );

    // home page content 
    Redux::setSection( $opt_name, array(
        'title' => __( 'Home', 'lskit' ),
        'id'    => 'home',
        'icon'  => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Banner', 'lskit' ),
        'id'         => 'banner',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'heading1',
                'type'     => 'textarea',
                'title'    => __( 'Heading 1', 'lskit' ),
                'default'  => 'Your digital partner for creative <br> and impactful it solutions.',
            ),
            array(
                'id'       => 'heading2',
                'type'     => 'textarea',
                'title'    => __( 'Heading 2', 'lskit' ),
                'default'  => 'We would like to thank all our customers for making us the most <br> trusted IT solution company',
            ),
            array(
                'id'       => 'button_text1',
                'type'     => 'text',
                'title'    => __( 'Button 1 Text', 'lskit' ),
                'default'  => 'Lets turn your concept right into a successful business!',
            ),
            array(
                'id'       => 'button_link1',
                'type'     => 'text',
                'title'    => __( 'Button 1 Link', 'lskit' ),
                'default'    => '/',
            ),
            array(
                'id'       => 'button_text2',
                'type'     => 'text',
                'title'    => __( 'Button 2 Text', 'lskit' ),
                'default'    => 'View Case Study',
            ),
            array(
                'id'       => 'button_link2',
                'type'     => 'text',
                'title'    => __( 'Button 2 Link', 'lskit' ),
                'default'    => '/',
            ),
            array(
                'id'       => 'button_link2_icon',
                'type'     => 'media',
                'url'      =>true,
                'title'    => __( 'Button 2 Icon', 'lskit' ),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Counter', 'lskit' ),
        'id'         => 'counter',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'counter_repeat',
                'type'     => 'repeater',
                'fields'         => array(
                    array(
                        'id'          => 'count_title',
                        'type'        => 'text',
                        'default'     => 'Years in the business',
                    ),
                    array(
                        'id'          => 'count_num',
                        'type'        => 'text',
                        'default'     => '10',
                    ),
                )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Success Stories', 'lskit' ),
        'id'         => 'success_stories',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'success_title',
                'type'     => 'text',
                'title'    => __( 'Success Title', 'lskit'),
                'default'  => 'Success Stories',
            ),
            array(
                'id'       => 'success_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Success Sub Title', 'lskit'),
                'default'  => 'The world’s best brands trust us with their produccts.Explore out selected cases and 
                <br> 
                convince yourself of our pragmatic and user-centerd approagh.',
            ),
            array(
                'id'       => 'brand_slider',
                'type'     => 'repeater',
                'title'        => 'Brand Logo',
                'fields'         => array(
                    array(
                        'id'          => 'brand_logo',
                        'type'        => 'media',
                        'url'        => true,
                        'title'      => 'logo',
                    ),
                )
            ),
            array(
                'id'       => 'success_btn_text',
                'type'     => 'text',
                'title'    => __( 'Success Button Text', 'lskit'),
                'default'  => 'Succes',
            ),
            array(
                'id'       => 'success_btn_link',
                'type'     => 'text',
                'title'    => __( 'Success Button Link', 'lskit'),
                'default'  => '/',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Service Card', 'lskit' ),
        'id'         => 'service_card',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_title',
                'type'     => 'text',
                'title'    => __( 'Service Title', 'lskit'),
                'default'  => 'Our Services',
            ),
            array(
                'id'       => 'service_subtitle',
                'type'     => 'text',
                'title'    => __( 'Service Sub Title', 'lskit'),
                'default'  => 'End-to-end expertise across the digital ecosystem',
            ),
            array(
                'id'       => 'service_card_repeat',
                'type'     => 'repeater',
                'title'        => 'Service Inner Card',
                'fields'         => array(
                    array(
                        'id'          => 'service_card_title',
                        'type'        => 'text',
                        'title'        => 'Service Card Title',
                        'default'        => 'Digital Consulting',
                    ),
                    array(
                        'id'          => 'service_card_des',
                        'type'        => 'textarea',
                        'title'        => 'Service Card Description',
                        'default'        => 'Our research based and goal driven approach in consulting, lays the perfect foundation and strategy.',
                    ),
                )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Design Section', 'lskit' ),
        'id'         => 'design_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'design_image',
                'type'     => 'media',
                'url'     => true,
                'title'    => __( 'Design section Image', 'lskit'),
            ),
            array(
                'id'       => 'design_top_title',
                'type'     => 'Text',
                'title'    => __( 'Design Top Title', 'lskit'),
                'default'  => 'BE WITH LSKIT',
            ),
            array(
                'id'       => 'design_title',
                'type'     => 'Text',
                'title'    => __( 'Design Title', 'lskit'),
                'default'  => 'We Pour Our Love Into Every Design.',
            ),
            array(
                'id'       => 'design_subtitle',
                'type'     => 'Textarea',
                'title'    => __( 'Design Sub Title', 'lskit'),
                'default'  => ' As an award-winning agency, our team has been producing fantastic websites & applications for 10 years.',
            ),
            array(
                'id'       => 'design_list_item',
                'type'     => 'repeater',
                'title'        => 'Design List Item',
                'fields'         => array(
                    array(
                        'id'          => 'design_list_text',
                        'type'        => 'text',
                        'title'        => 'Design List Text',
                        'default'        => 'Branding and Digital Strategies',
                    ),
                )
            ),
            array(
                'id'       => 'design_btntext',
                'type'     => 'text',
                'title'    => __( 'Design Button Text', 'lskit'),
                'default'  => 'Learn More',
            ),
            array(
                'id'       => 'design_btnlink',
                'type'     => 'text',
                'title'    => __( 'Design Button Link', 'lskit'),
                'default'  => '/',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Home Card 1', 'lskit' ),
        'id'         => 'home_card1',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'card1',
                'type'     => 'repeater',
                'title'        => 'Card List',
                'fields'         => array(
                    array(
                        'id'          => 'card1_title',
                        'type'        => 'text',
                        'title'        => 'Card 1 Title',
                        'default'        => ' We Build Great Websites ',
                    ),
                    array(
                        'id'          => 'card1_des',
                        'type'        => 'textarea',
                        'title'        => 'Card 1 Description',
                        'default'        => ' Follow us for any kind of website build or any assistance ',
                    ),
                    array(
                        'id'          => 'card1_icon',
                        'type'        => 'media',
                        'title'        => 'Card 1 Icon',
                    ),
                )
            ),
            array(
                'id'       => 'card1_btn_text',
                'type'     => 'text',
                'title'    => __( 'Card 1 Button Text', 'lskit'),
                'default'  => 'Get Started',
            ),
            array(
                'id'       => 'card1_btn_link',
                'type'     => 'text',
                'title'    => __( 'Card 1 Button Link', 'lskit'),
                'default'  => '/',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Working Process', 'lskit' ),
        'id'         => 'working_process',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'working_process_title',
                'type'     => 'textarea',
                'title'    => __( 'Working Process Title', 'lskit'),
                'default'  => ' Our working process to help your boost your business ',
            ),
            array(
                'id'       => 'working_process_subtitle',
                'type'     => 'textarea',
                'title'    => __( 'Working Process Sub Title', 'lskit'),
                'default'  => '  As an award-winning agency, our team has been producing fantastic websites & applications for 10 years.  ',
            ),
            array(
                'id'       => 'working_process_list',
                'type'     => 'repeater',
                'title'        => 'Working Process List',
                'fields'         => array(
                    array(
                        'id'          => 'working_process_text',
                        'type'        => 'text',
                        'title'        => 'Working Process Text',
                        'default'        => ' Dedicated account manager for each account  ',
                    ),
                )
            ),
            array(
                'id'       => 'working_process_img',
                'type'     => 'media',
                'title'    => __( 'Working Process Image', 'lskit'),
                'url'      => true
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Home Card 2', 'lskit' ),
        'id'         => 'home_card2',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'card2',
                'type'     => 'repeater',
                'title'        => 'Working Process List',
                'fields'         => array(
                    array(
                        'id'          => 'card2_title',
                        'type'        => 'text',
                        'title'        => 'Card 2 title',
                        'default'        => ' Earning Traffic  ',
                    ),
                    array(
                        'id'          => 'card2_des',
                        'type'        => 'textarea',
                        'title'        => 'Card 2 Description',
                        'default'        => ' The right advertising campaign  ',
                    ),
                    array(
                        'id'          => 'card2_icon',
                        'type'        => 'media',
                        'title'        => 'Card 2 Icon',
                        'url'          => true
                    ),
                )
            ),
            array(
                'id'       => 'card2_btn_text',
                'type'     => 'text',
                'title'    => __( 'Card 2 Button Text', 'lskit'),
                'default'  => 'Get to Know',
            ),
            array(
                'id'       => 'card2_btn_link',
                'type'     => 'text',
                'title'    => __( 'Card 2 Button Link', 'lskit'),
                'default'  => '/',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Figure', 'lskit' ),
        'id'         => 'figure',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'figure_title',
                'type'     => 'text',
                'title'    => __( 'Figure Title', 'lskit'),
                'default'  => 'According to the figures',
            ),
            array(
                'id'       => 'figure_subtitle',
                'type'     => 'text',
                'title'    => __( 'Figure Sub Title', 'lskit'),
                'default'  => 'Our top- tier digital marketing agency',
            ),
            array(
                'id'       => 'figure_card',
                'type'     => 'repeater',
                'title'        => 'Working Process List',
                'fields'         => array(
                    array(
                        'id'          => 'figure_cardtitle',
                        'type'        => 'text',
                        'title'        => 'Figure title',
                        'default'        => ' Retention Rate  ',
                    ),
                    array(
                        'id'          => 'figure_per',
                        'type'        => 'text',
                        'title'        => 'Figure Percent',
                        'default'        => ' 91 ',
                    ),
                    array(
                        'id'          => 'figure_des',
                        'type'        => 'textarea',
                        'title'        => 'Figure Description',
                        'default'        => ' LSKIT takes care of your company. ',
                    ),
                    array(
                        'id'          => 'figure_icon',
                        'type'        => 'media',
                        'title'        => 'Figure Icon',
                        'url'          => true
                    ),
                )
            ),
            array(
                'id'       => 'figure_btn_text',
                'type'     => 'text',
                'title'    => __( 'Figure Button Text', 'lskit'),
                'default'  => 'Get to Know',
            ),
            array(
                'id'       => 'figure_btn_link',
                'type'     => 'text',
                'title'    => __( 'Figure Button Link', 'lskit'),
                'default'  => '/',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Ready to Grow', 'lskit' ),
        'id'         => 'ready_grow',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'ready_grow_title',
                'type'     => 'text',
                'title'    => __( 'Grow Title', 'lskit'),
                'default'  => ' Are you ready to Grow? Get your free proosal right now: ',
            ),
            array(
                'id'       => 'ready_grow_des',
                'type'     => 'textarea',
                'title'    => __( 'Grow Description', 'lskit'),
                'default'  => ' Take the next step in growing your business with digital marketing. ',
            ),
            array(
                'id'       => 'ready_grow_img',
                'type'     => 'media',
                'title'    => __( 'Grow Image', 'lskit'),
                'url'    => true
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Process', 'lskit' ),
        'id'         => 'process',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'process_title',
                'type'     => 'text',
                'title'    => __( 'Process Title', 'lskit'),
                'default'  => ' OUR PROCESS ',
            ),
            array(
                'id'       => 'process_subtitle',
                'type'     => 'text',
                'title'    => __( 'Process Sub Title', 'lskit'),
                'default'  => ' Domum can help you save on your home - related finances ',
            ),
            array(
                'id'       => 'process_card',
                'type'     => 'repeater',
                'title'        => 'Process Card',
                'fields'         => array(
                    array(
                        'id'          => 'process_card_title',
                        'type'        => 'text',
                        'title'        => 'Process Card title',
                        'default'        => 'Discovery',
                    ),
                    array(
                        'id'          => 'process_card_des',
                        'type'        => 'text',
                        'title'        => 'Process Card Description',
                        'default'        => ' It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. ',
                    ),
                    array(
                        'id'          => 'process_card_icon',
                        'type'        => 'media',
                        'title'        => 'Process Card Icon',
                    ),
                )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Home Card 3', 'lskit' ),
        'id'         => 'home_card3',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'home_card3_toptitle',
                'type'     => 'text',
                'title'    => __( 'Top Title', 'lskit'),
                'default'  => ' LSIKT ',
            ),
            array(
                'id'       => 'home_card3_title',
                'type'     => 'textarea',
                'title'    => __( 'Main Title', 'lskit'),
                'default'  => ' A comprehensive set of services to <br> help you achieve your objectives.  ',
            ),
            array(
                'id'       => 'home_card3_list',
                'type'     => 'repeater',
                'title'        => 'Card List',
                'fields'         => array(
                    array(
                        'id'          => 'card3_title',
                        'type'        => 'text',
                        'title'        => 'Card 3 title',
                        'default'        => 'Growth Strategy',
                    ),
                    array(
                        'id'          => 'card3_des',
                        'type'        => 'textarea',
                        'title'        => 'Card 3 Description',
                        'default'        => 'We believe that a happy team that enjoys ',
                    ),
                    array(
                        'id'          => 'card3_icon',
                        'type'        => 'media',
                        'title'        => 'Card 3 Icon',
                    ),
                )
            ),
            array(
                'id'       => 'card3_btntext',
                'type'     => 'text',
                'title'    => __( 'Card 3 Button Text', 'lskit'),
                'default'  => ' Get to know ',
            ),
            array(
                'id'       => 'card3_btnlink',
                'type'     => 'text',
                'title'    => __( 'Card 3 Button Link', 'lskit'),
                'default'  => '/',
            ),
        )
    ) );

    // About Page
    Redux::setSection( $opt_name, array(
        'title' => __( 'About', 'lskit' ),
        'id'    => 'about',
        'icon'  => 'el el-lastfm'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Section', 'lskit' ),
        'id'         => 'about_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'about_section_list',
                'type'     => 'repeater',
                'title'        => 'About Section List',
                'fields'         => array(
                    array(
                        'id'          => 'about_section_title',
                        'type'        => 'text',
                        'title'        => 'About Section Title',
                        'default'        => 'Our Mission',
                    ),
                    array(
                        'id'          => 'about_section_des',
                        'type'        => 'textarea',
                        'title'        => 'About Section Description',
                        'default'        => 'As an award-winning agency, our team has been producing',
                    ),
                    array(
                        'id'          => 'about_section_img',
                        'type'        => 'media',
                        'title'        => 'About Section Image',
                        'url'         => true,
                    ),
                     array(
                        'id'       => 'button-set-single',
                        'type'     => 'button_set',
                        'options' => array(
                            '1' => 'Reverse Not', 
                            '2' => 'Reverse', 
                        ), 
                        'default' => '1'
                    ) 
                ),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'About Card', 'lskit' ),
        'id'         => 'about_page_card',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'aboutpagecard',
                'type'     => 'repeater',
                'title'        => 'About Card List',
                'fields'         => array(
                    array(
                        'id'          => 'aboutpagecard_title',
                        'type'        => 'text',
                        'title'        => 'About Page Card title',
                        'default'        => ' Earning Traffic  ',
                    ),
                    array(
                        'id'          => 'aboutpagecard_des',
                        'type'        => 'textarea',
                        'title'        => 'About Page Card Description',
                        'default'        => ' The right advertising campaign  ',
                    ),
                    array(
                        'id'          => 'aboutpagecard_icon',
                        'type'        => 'media',
                        'title'        => 'About Page Card Icon',
                        'url'          => true
                    ),
                )
            ),
            array(
                'id'       => 'aboutpagecard_btn_text',
                'type'     => 'text',
                'title'    => __( 'About Page Card Button Text', 'lskit'),
                'default'  => 'Get to Know',
            ),
            array(
                'id'       => 'aboutpagecard_btn_link',
                'type'     => 'text',
                'title'    => __( 'About Page Card Button Link', 'lskit'),
                'default'  => '/',
            ),
        )
    ) );

    // Solution Page
    Redux::setSection( $opt_name, array(
        'title' => __( 'Solution', 'lskit' ),
        'id'    => 'solution',
        'icon'  => 'el el-lastfm'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Solution Section', 'lskit' ),
        'id'         => 'solution_section',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'solution_section_list',
                'type'     => 'repeater',
                'title'        => 'Solution Section List',
                'fields'         => array(
                    array(
                        'id'          => 'solution_section_title',
                        'type'        => 'text',
                        'title'        => 'Solution Section Title',
                        'default'        => 'Web Development Solution',
                    ),
                    array(
                        'id'          => 'solution_section_des',
                        'type'        => 'textarea',
                        'title'        => 'Solution Section Description',
                        'default'        => 'As an award-winning agency, ',
                    ),
                    array(
                        'id'          => 'solution_section_img',
                        'type'        => 'media',
                        'title'        => 'Solution Section Image',
                        'url'         => true,
                    ),
                    array(
                        'id'          => 'solution_section_btntext',
                        'type'        => 'text',
                        'title'        => 'Solution Section Button Text',
                        'default'        => 'Learn More',
                    ),
                    array(
                        'id'          => 'solution_section_btnlink',
                        'type'        => 'text',
                        'title'        => 'Solution Section Button Link',
                        'default'        => '/',
                    ),
                     array(
                        'id'       => 'solution_button_set',
                        'type'     => 'button_set',
                        'options' => array(
                            '1' => 'Reverse Not', 
                            '2' => 'Reverse', 
                        ), 
                        'default' => '1'
                    ) 
                ),
            ),
        )
    ) );

    // Service Page
    Redux::setSection( $opt_name, array(
        'title' => __( 'Service', 'lskit' ),
        'id'    => 'service',
        'icon'  => 'el el-lastfm'
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Banner', 'lskit' ),
        'id'         => 'service_banner',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_banner_title',
                'type'     => 'text',
                'title'    => 'Service Banner Title',
                'default'  => 'Our Services',
            ),
            array(
                'id'       => 'service_banner_subtitle',
                'type'     => 'textarea',
                'title'    => 'Service Banner Sub Title',
                'default'  => 'At Lskit, we create winning SEO, paid search Professional Applications & digital marketing campaigns',
            ),
            array(
                'id'       => 'service_banner_btntext',
                'type'     => 'text',
                'title'    => 'Service Banner Button Text',
                'default'  => 'Get a free Proposal',
            ),
            array(
                'id'       => 'service_banner_btnlink',
                'type'     => 'text',
                'title'    => 'Service Banner Button Link',
                'default'  => '/',
            ),
            array(
                'id'       => 'service_banner_bg',
                'type'     => 'media',
                'title'    => 'Service Banner Background',
                'url'      => true,
            ),
            array(
                'id'       => 'service_banner_item',
                'type'     => 'repeater',
                'title'    => 'Service Banner Item',
                'fields'  => array(
                    array(
                        'id'       => 'service_banner_itemtitle',
                        'type'     => 'text',
                        'title'    => 'Item Title',
                        'default'  => 'Ontime Service',
                    ),
                    array(
                        'id'       => 'service_banner_itemIcon',
                        'type'     => 'media',
                        'title'    => 'Item Icon',
                        'url'      => true,
                    ),
                ),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Image Text', 'lskit' ),
        'id'         => 'service_imgtext',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_imgtext_img',
                'type'     => 'media',
                'url'      => true,
                'title'    => 'Image',
            ),
            array(
                'id'       => 'service_imgtext_text',
                'type'     => 'editor',
                'title'    => __( 'Text', 'lskit' ),
                'default'  => 'Get your time and focus',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Service flowchart', 'lskit' ),
        'id'         => 'service_flowchart',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_flowchart_img',
                'type'     => 'media',
                'url'      => true,
                'title'    => 'Flow Chart Image',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Term Section', 'lskit' ),
        'id'         => 'service_term',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_term_title',
                'type'     => 'text',
                'title'    => 'Service Term Title',
                'default'  => 'Get your projects done—on your terms',
            ),
            array(
                'id'       => 'service_term_card',
                'type'     => 'repeater',
                'title'        => 'Service Term Card',
                'fields'         => array(
                    array(
                        'id'          => 'service_term_cardtitle',
                        'type'        => 'text',
                        'title'        => 'Card Title',
                        'default'        => 'Find the right fit',
                    ),
                    array(
                        'id'          => 'service_term_carddes',
                        'type'        => 'textarea',
                        'title'        => 'Card Description',
                        'default'        => 'It is a long established fact',
                    ),
                    array(
                        'id'          => 'service_term_cardicon',
                        'type'        => 'media',
                        'title'        => 'Card Icon',
                        'url'          => true,
                    ),
                )
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Store', 'lskit' ),
        'id'         => 'service_store',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'service_store_img',
                'type'     => 'media',
                'url'      => true,
                'title'    => 'Service Store Image',
            ),
            array(
                'id'       => 'service_store_text',
                'type'     => 'editor',
                'title'    => 'Service Store Text',
                'default'  => 'How to Design Your Online Store ',
            ),
        )
    ) );

    // common content
    Redux::setSection( $opt_name, array(
        'title' => __( 'Template Page', 'lskit' ),
        'id'    => 'template_page',
        'icon'  => 'el el-home',
        'fields'     => array(
            array(
                'id'       => 'template_page_title',
                'type'     => 'textarea',
                'title'    => __( 'Template Page Title', 'lskit' ),
                'default'  => 'Beautiful website templates <br /> made for every industry ',
            ),
            array(
                'id'       => 'template_page_bottom_title',
                'type'     => 'text',
                'title'    => __( 'Template Page Bottom Title', 'lskit' ),
                'default'  => 'Find the right template for you',
            ),
            array(
                'id'       => 'template_page_bottom_subtitle',
                'type'     => 'text',
                'title'    => __( 'Template Page Bottom Sub Title', 'lskit' ),
                'default'  => 'Create a job and get matched with experts best suited to your needs.',
            ),
            array(
                'id'       => 'template_page_bottom_btntext',
                'type'     => 'text',
                'title'    => __( 'Template Page Bottom Button Text', 'lskit' ),
                'default'  => 'BULD YOUR WEBSITE',
            ),
            array(
                'id'       => 'template_page_bottom_btnlink',
                'type'     => 'text',
                'title'    => __( 'Template Page Bottom Button Link', 'lskit' ),
                'default'  => '/',
            ),
        )
    ) );

    // career page 
    Redux::setSection( $opt_name, array(
        'title' => __( 'Career', 'lskit' ),
        'id'    => 'career',
        'icon'  => 'el el-lastfm'
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Career Banner', 'lskit' ),
        'id'         => 'career_banner',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'career_banner_title',
                'type'     => 'text',
                'title'    => __( 'Career Banner Title', 'lskit' ),
                'default'  => 'Careers at LSKIT',
            ),
            array(
                'id'       => 'career_banner_des',
                'type'     => 'textarea',
                'title'    => __( 'Career Banner Description', 'lskit' ),
                'default'  => 'It is a long established fact that a reader will be distracted',
            ),
            array(
                'id'       => 'career_bannerbtn_text',
                'type'     => 'text',
                'title'    => __( 'Career Button Text', 'lskit' ),
                'default'  => 'Join Us',
            ),
            array(
                'id'       => 'career_bannerbtn_link',
                'type'     => 'text',
                'title'    => __( 'Career Button Link', 'lskit' ),
                'default'  => '#',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Why Working Section', 'lskit' ),
        'id'         => 'career_why_working',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'career_whyworking_title',
                'type'     => 'text',
                'title'    => __( 'Heading', 'lskit' ),
                'default'  => 'Why working with us',
            ),
            array(
                'id'       => 'career_whyworking_img',
                'type'     => 'media',
                'title'    => __( 'Image', 'lskit' ),
                'url'    => true,
            ),
            array(
                'id'       => 'career_whyworking_list',
                'type'     => 'repeater',
                'title'    => __( 'Why Working List', 'lskit' ),
                'fields'    => array(
                    array(
                        'id'       => 'career_whyworking_listtitle',
                        'type'     => 'text',
                        'title'    => __( 'List Title', 'lskit' ),
                        'default'  => 'You learn a lot',
                    ),
                    array(
                        'id'       => 'career_whyworking_listdes',
                        'type'     => 'textarea',
                        'title'    => __( 'List Description', 'lskit' ),
                        'default'  => 'You will work in the most dynamic industries',
                    ),
                ),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Staff Feel', 'lskit' ),
        'id'         => 'career_stafffeel',
        'subsection' => true,
        'fields'      => array(
            array(
                'id'       => 'career_stafffeel_title',
                'type'     => 'text',
                'title'    => __( 'Staff Feel Title', 'lskit' ),
                'default'  => 'How our staff feel',
            ),
            array(
                'id'       => 'career_stafffeel_list',
                'type'     => 'repeater',
                'title'    => __( 'Staff Feel List', 'lskit' ),
                'fields'      => array(
                    array(
                        'id'       => 'career_stafffeel_listtitle',
                        'type'     => 'text',
                        'title'    => __( 'Staff Feel Title', 'lskit' ),
                        'default'  => 'Kit Worker',
                    ),
                    array(
                        'id'       => 'career_stafffeel_position',
                        'type'     => 'text',
                        'title'    => __( 'Staff Feel Position', 'lskit' ),
                        'default'  => 'Front-line support',
                    ),
                    array(
                        'id'       => 'career_stafffeel_des',
                        'type'     => 'textarea',
                        'title'    => __( 'Staff Feel Description', 'lskit' ),
                        'default'  => 'Working at LSKIT is a great experience. ',
                    ),
                    array(
                        'id'       => 'career_stafffeel_img',
                        'type'     => 'media',
                        'title'    => __( 'Staff Feel Avatar', 'lskit' ),
                        'url'  => true,
                    ),
                ),
            ),
        ),
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Career Footer Card', 'lskit' ),
        'id'         => 'career_footer_card',
        'subsection' => true,
        'fields'      => array(
            array(
                'id'       => 'career_footer_bg',
                'type'     => 'media',
                'title'    => __( 'Career Footer Background', 'lskit' ),
                'url'  => true,
            ),
            array(
                'id'       => 'career_footer_text',
                'type'     => 'textarea',
                'title'    => __( 'Career Footer Text', 'lskit' ),
                'default'  => 'Explore the #1 Shopify <br> Page Builder today. ',
            ),
            array(
                'id'       => 'career_footer_btn',
                'type'     => 'text',
                'title'    => __( 'Career Footer Button', 'lskit' ),
                'default'  => 'Try LSKIT Free',
            ),
            array(
                'id'       => 'career_footer_btnlink',
                'type'     => 'text',
                'title'    => __( 'Career Footer Button Link', 'lskit' ),
                'default'  => '/',
            ),
        ),
    ) );
    
    // footer content 
    Redux::setSection( $opt_name, array(
        'title' => __( 'Footer', 'lskit' ),
        'id'    => 'footer',
        'icon'  => 'el el-lastfm'
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Meeting', 'lskit' ),
        'id'         => 'meeting',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'meeting_title',
                'type'     => 'text',
                'title'    => __( 'Meeting Title', 'lskit' ),
                'default'  => 'Let’s talk about your growth strategy.',
            ),
            array(
                'id'       => 'meeting_btntext',
                'type'     => 'text',
                'title'    => __( 'Meeting Button Text', 'lskit' ),
                'default'  => 'Schedule a meeting',
            ),
            array(
                'id'       => 'meeting_btnlink',
                'type'     => 'text',
                'title'    => __( 'Meeting Button Link', 'lskit' ),
                'default'  => '/',
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Client', 'lskit' ),
        'id'         => 'footer_client',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'footer_client_img',
                'type'     => 'media',
                'title'    => __( 'Rocket Image', 'lskit' ),
                'url'      => true,
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(    
        'title'      => __( 'Expert', 'lskit' ),
        'id'         => 'expert',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'expert_title',
                'type'     => 'text',
                'title'    => __( 'Expert Title', 'lskit' ),
                'default'  => 'Ready to speak with a marking expert? Give us a ring',
            ),
            array(
                'id'       => 'expert_num',
                'type'     => 'text',
                'title'    => __( 'Expert Number', 'lskit' ),
                'default'  => '000-000-0000',
            ),
            array(
                'id'       => 'expert_img',
                'type'     => 'media',
                'title'    => __( 'Expert Image', 'lskit' ),
                'url'      => true,
            ),
        )
    ) );