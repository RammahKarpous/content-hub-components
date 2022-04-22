<?php
function items() {
    return [
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "Haal meer uit Facebook met deze 7 tips voor gratis engagement" 
            ], 
            "title" => "Haal meer uit Facebook met deze 7 tips voor gratis engagement" 
        ],
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "8 tips voor meer engagement op Facebook [infographic]" 
            ], 
            "title" => "8 tips voor meer engagement op Facebook [infographic]" 
        ],
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "Facebook & organisch bereik: wat je vooral níet moet doen" 
            ], 
            "title" => "Facebook & organisch bereik: wat je vooral níet moet doen" 
        ],
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "Adverteren of sponsored posts op Facebook, waar kies je voor?" 
            ], 
            "title" => "Adverteren of sponsored posts op Facebook, waar kies je voor?" 
        ],
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "-- Haal meer uit Facebook met deze 7 tips voor gratis engagement 2" 
            ], 
            "title" => "-- Haal meer uit Facebook met deze 7 tips voor gratis engagement 2" 
        ],
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "-- 8 tips voor meer engagement op Facebook [infographic] 2" 
            ], 
            "title" => "-- 8 tips voor meer engagement op Facebook [infographic] 2" 
        ],
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "-- Facebook & organisch bereik: wat je vooral níet moet doen 2" 
            ], 
            "title" => "-- Facebook & organisch bereik: wat je vooral níet moet doen 2" 
        ],
        [ 
            "image" => [ 
                "url" => "image.png", 
                "alt" => "-- Adverteren of sponsored posts op Facebook, waar kies je voor? 2" 
            ], 
            "title" => "-- Adverteren of sponsored posts op Facebook, waar kies je voor? 2" 
        ],
    ];
}

$title = "Facebook voor beginners";

function image( $item ) { echo items()[ 0 ][ $item ]; }
function text( $item ) { echo items()[ $item ]; }
?>

<div class="carousel">
    <h2 class="carousel__title"><?php echo $title ?></h2>

    <div class="carousel__wrapper">
        <span class="carousel__arrow-left"></span>
        
        <div class="carousel__slides">
            <?php foreach(items() as $item) : ?>
                <div class="slide">
                    <!-- <img src="<?php // echo $item[ 'image' ][ 'url' ] ?>" alt="<?php // echo $item[ 'image' ][ 'alt' ] ?>"> -->
                    <span class="slide__image"></span>
                    <h4 class="slide__title"><?php echo $item[ 'title' ] ?></h4>
                </div>
            <?php endforeach;?>
        </div>
        
        <span class="carousel__arrow-right"></span>
    </div>

</div>