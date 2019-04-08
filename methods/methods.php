<?php 
function programi()
{
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'program',
        'post_status' => 'publish');
    $programi = get_posts( $args );
    $html = "";
    foreach ($programi as $program)
    {
        $url = $program->guid;
        $name = $program->post_title;
        $thumbnail = get_the_post_thumbnail_url($program->ID);
        $row =
        "<div class='box'>
            <a href='".$url."'>
                <div class='thumbnail_box' style='background-image: url(".$thumbnail."')>
                </div>
            </a>
            <h3><a href='".$url."'>".$name."</a></h3>
        </div>";
        $html .= $row;
    }
    return $html;
}
function instruktori()
{
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'instruktor',
        'post_status' => 'publish');
    $instruktori = get_posts( $args );
    $html = "";
    foreach ($instruktori as $instruktor)
    {
        $url = $instruktor->guid;
        $name = $instruktor->post_title;
        $thumbnail = get_the_post_thumbnail_url($instruktor->ID);
        $row =
        "<div class='box'>
            <a href='".$url."'>
                <div class='thumbnail_box_instruktor_single' style='background-image: url(".$thumbnail."')>
                </div>
            </a>
            <h3><a href='".$url."'>".$name."</a></h3>
        </div>";
        $html .= $row;
    }
    return $html;
}
function programi_arhiva()
{
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'program',
        'post_status' => 'publish'
    );
    $programi = get_posts( $args );
    $html = "";
    foreach ($programi as $program)
    {
        $url = $program->guid;
        $name = $program->post_title;
        $row =
        "<h3>
            <a href='".$url."'>".$name."</a>
        </h3>";
        $html .= $row;
    }
    return $html;
}
function instruktori_arhiva()
{
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'instruktor',
        'post_status' => 'publish'
    );
    $instruktori = get_posts( $args );
    $html = "";
    foreach ($instruktori as $instruktor)
    {
        $url = $instruktor->guid;
        $name = $instruktor->post_title;
        $row =
        "<h3>
            <a href='".$url."'>".$name."</a>
        </h3>";
        $html .= $row;
    }
    return $html;
}
function html_programi_instruktora($instruktor_id)
{
    $programi_instruktora_ids = get_post_meta($instruktor_id, 'programi_instruktora', true);
    $sHtml = "";
    if( $programi_instruktora_ids != "")
        {
        $programi_instruktora_ids = explode(",", $programi_instruktora_ids);
        foreach ($programi_instruktora_ids as $program_id) 
        {
            $program = get_post($program_id);
            $program_naziv = $program->post_title;
            $program_url = $program->guid;
            $sHtml.="<div class='box'>
            <a href='".$program_url."'>
            <div class='thumbnail_box' style='background-image: url(".get_the_post_thumbnail_url($program_id).")'></div></a>
            <h3><a href='".$program_url."'>".$program_naziv."</a></h3></div>";
        }
    }
    else
    {
        $sHtml .= "<div class='box'><h3>Nema programa koje ovaj instruktor vodi</h3></div>";
    }
    return $sHtml;
} 
function html_info_instruktor($instruktor_id)
{
    $args = array(
            'posts_per_page' => -1,
            'post_type' => 'instruktor',
            'post_status' => 'publish',
        );
        $instruktori = get_posts( $args );
        $sHtml = "";
    foreach ($instruktori as $instruktor)
    {
        if( $instruktor_id == $instruktor->ID )
        {
            $kg = get_post_meta($instruktor->ID, 'kilaza', true) ? get_post_meta($instruktor->ID, 'kilaza', true) : "0" ;
            $cm = (get_post_meta($instruktor->ID, 'visina', true) != "") ? get_post_meta($instruktor->ID, 'visina', true) : "0" ;
            $god = (get_post_meta($instruktor->ID, 'godina_rodjenja', true) != "") ? get_post_meta($instruktor->ID, 'godina_rodjenja', true) : "0";
            $sRow = "
                      <h3> Kilaža: ".$kg."</h3>
                      <h3> Visina".$cm."</h3>
                      <h3> Godina rođenja: ".$god."</h3>
                    ";
            $sHtml .= $sRow;  
        }   
    }
    return $sHtml;
} 
add_shortcode( 'programi', 'programi' );
add_shortcode( 'instruktori', 'instruktori' );
add_shortcode( 'programi_arhiva', 'programi_arhiva');
add_shortcode('instruktori_arhiva', 'instruktori_arhiva');
?>