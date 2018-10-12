<?php

    @ini_set( 'upload_max_size' , '64M' );
    @ini_set( 'upload_max_filesize' , '64M' );
    @ini_set( 'post_max_size', '64M');
    @ini_set( 'memory_limit', '3000M' );
    @ini_set( 'file_uploads', 'on' );
    @ini_set( 'max_execution_time', '300' );

    // Add RSS links to <head> section
    automatic_feed_links();

    // A.1.0.5. Wordpress Menu

    register_nav_menus( array(  
    'primary' => __( 'Primary Navigation', 'iamnotthai' )
    ) );

    // A.1.0.5. Wordpress Menu

    // A.1.0.6. Wordpress Stuff
    
    add_theme_support( 'post-thumbnails' ); 


// A.4 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.4 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// A.5 END ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    
    // Load jQuery
    if ( !is_admin() ) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
       wp_enqueue_script('jquery');
    }
    

?>