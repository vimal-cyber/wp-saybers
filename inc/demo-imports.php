<?php
/*Import content data*/
if ( ! function_exists( 'saybers_import_files' ) ) :
    function saybers_import_files() {
        return array(
            array(
                'import_file_name'             => 'Default Demo',
                'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/all-content.xml',
                //'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo/default/widgets.wie',
                'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/saybers-export.dat',
                'import_preview_image_url'     => trailingslashit( get_template_directory() ) . 'demo/screenshot.png',
                'import_notice'                => __( 'Please waiting for a few minutes, do not close the window or refresh the page until the data is imported.', 'saybers' ),
            ),
        );    
    }
    add_filter( 'pt-ocdi/import_files', 'saybers_import_files' );
    endif;
    

