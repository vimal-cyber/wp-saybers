<?php

// Demo import

function saybers_import_files() {
    return array(
        array(
            'import_file_name'           => 'Demo Import',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/all-content.xml', 
         //   'import_widget_file_url'     => 'http://www.your_domain.com/saybers/widgets.json',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/saybers-export.dat',
            'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'saybers' ),
            
            
            'import_preview_image_url'   => 'http://www.your_domain.com/saybers/preview_import_image1.jpg',
            'import_notice'              => __( 'After you import this demo, you will have to setup the slider separately.', 'saybers' ),
            'preview_url'                => 'http://www.your_domain.com/my-demo-1',
        ),

    );
}
add_filter( 'pt-saybers/import_files', 'saybers_import_files' );

