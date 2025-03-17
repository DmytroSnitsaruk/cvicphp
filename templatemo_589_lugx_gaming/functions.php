<?php

function generateSlides($dir) {
    
    $files = glob($dir . "/*.jpg");    
    $json = file_get_contents("data.json");    
    $data = json_decode($json, true);
    $text = $data["text_banner"];

    foreach ($files as $file) {         
        echo '<div class="col-lg-3 col-md-6">';
        echo '<div class="item">';
        echo '<div class="thumb">';
        echo '<a href="product-details.html"><img src="'.$file.'" alt=""></a>';
        echo '<span class="price"><em>$28</em>$20</span>';
        echo '</div>';
        echo '<div class="down-content">';
        echo '<span class="category">Action</span>';
        echo '<h4>'.($text[basename($file)]).'</h4>';
        echo '<a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

}

?>