<?php
class customMetaBox
{
    function __construct()
    {
        add_action('add_meta_boxes', array( $this, 'add_meta_box_program_instruktor'),0);
        add_action('save_post', array( $this, 'spremi_programe_instruktora'));
        add_action('add_meta_boxes', array( $this, 'add_meta_box_info'));
        add_action('save_post', array( $this, 'save_info')); 
    }
    function add_meta_box_program_instruktor()
    {
        add_meta_box( 
            'fit_program_instruktora', 
            'Programi:', 
            array($this, 'html_meta_box_programi_instruktora'), 
            'instruktor', 
            'normal', 
            'low'
        );
    }
    function html_meta_box_programi_instruktora($post)
    {
        wp_nonce_field('spremi_programe_instruktora', 'programi_instruktora_nonce');
        $programi_instruktora_ids = get_post_meta($post->ID, 'programi_instruktora', true);
        $programi_instruktora_ids = explode( ',', $programi_instruktora_ids );
        $args = array(
            'posts_per_page'    => -1,
            'post_type'         => 'program',
            'post_status'       => 'publish',
        );
        $programi = get_posts( $args ); 
        $programi_form = '<select name="programi[]" id="programi[]" class="s2" multiple>';
        foreach ($programi as $program) 
        {
            $selected_text = (in_array($program->ID, $programi_instruktora_ids)) ? "selected" : "" ;
            $programi_form .= '<option '.$selected_text.' value="'.$program->ID.'">'.$program->post_title.'</option>';
        }
        $programi_form .= '</select>';
        echo '
            <div>
                '.$programi_form.'
            </div>';    
    }
    function spremi_programe_instruktora($post_id)
    {
        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce_programi_instruktora = ( isset( $_POST[ 'programi_instruktora_nonce' ] ) && wp_verify_nonce( $_POST[ 'programi_instruktora_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
        if ( $is_autosave || $is_revision || !$is_valid_nonce_programi_instruktora) 
        {
            return;
        }
        if(!empty($_POST['programi']))
        {
            $programi = implode(",", $_POST['programi']);
            update_post_meta($post_id, 'programi_instruktora', $programi);
        }
            else
        {
            delete_post_meta($post_id, 'programi_instruktora');
        }
    }

    function add_meta_box_info()
    {
        add_meta_box( 
            'instruktor_info', 
            'Podaci o instruktoru', 
            array($this, 'html_meta_box_instruktor_info'), 
            'instruktor', 
            'normal', 
            'low');
    }

    function html_meta_box_instruktor_info($post)
    {
        wp_nonce_field('save_info', 'kilaza');
        wp_nonce_field('save_info', 'visina');
        wp_nonce_field('save_info', 'godina_rodjenja');

        $kg = get_post_meta($post->ID, 'kilaza', true);
        $cm = get_post_meta($post->ID, 'visina', true);
        $god = get_post_meta($post->ID, 'godina_rodjenja', true);

        $args = array(
            'posts_per_page' => -1,
            'post_type' => 'instruktor',
            'post_status' => 'publish'
        );
        $instruktori = get_posts( $args );

        echo '
        <div>
            <div>
                <label for="kilaza">Kilaža: </label>
                <input type="text" id="kilaza" name="kilaza" value="'.$kg.'" />
            </div>
            <br/>
            <div>
                <label for="visina">Visina: </label>
                <input type="text" id="visina" name="visina" value="'.$cm.'" />
            </div>
            <br/>
            <div>
                <label for="godina_rodjenja">Godina rođenja: </label>
                <input type="text" id="godina_rodjenja" name="godina_rodjenja" value="'.$god.'" />
            </div>
            <br/>
        </div>';    
    }

    function save_info($post_id)
    {
        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce_kilaza = ( isset( $_POST[ 'kilaza_nonce' ] ) && wp_verify_nonce( $_POST[ 'kilaza_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
        $is_valid_nonce_visina = ( isset( $_POST[ 'visina_nonce' ] ) && wp_verify_nonce( $_POST[ 'visina_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
        $is_valid_nonce_godina = ( isset( $_POST[ 'godina_nonce' ] ) && wp_verify_nonce( $_POST[ 'godina_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
        if ( $is_autosave || $is_revision || !$is_valid_nonce_kilaza || !$is_valid_nonce_visina || !$is_valid_nonce_godina)
        {
            return;
        }

        if(!empty($_POST['kilaza']))
        {
            update_post_meta($post_id, 'kilaza', $_POST['kilaza']);
        }
        else
        {
            delete_post_meta($post_id, 'kilaza');
        }

        if(!empty($_POST['visina']))
        {
            update_post_meta($post_id, 'visina', $_POST['visina']);
        }
        else
        {
            delete_post_meta($post_id, 'visina');
        }

        if(!empty($_POST['godina_rodjenja']))
        {
            update_post_meta($post_id, 'godina_rodjenja', $_POST['godina_rodjenja']);
        }
        else
        {
            delete_post_meta($post_id, 'godina_rodjenja');
        }
    }
}