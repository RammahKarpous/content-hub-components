<?php
     function info() {
        return [
            "src" => "../assets/image.png",
            "alt" => "This is an image",
            "title" => "Het ultieme overzicht van alle socialmedia-afmetingen voor 2022",
            "excerpt" => "Een verkeerd uitgesneden afbeelding op een van je socialmediakanalen is verleden tijd. Check alle socialmedia-afmetingen per kanaal in dit handige en actuele overzicht voor 2022.",
            "link_text" => "Bekijk het overzicht",
            "link" => "https://www.frankwatching.com/archive/2022/01/22/socialmedia-afmetingen-2022/"
        ];
    } 

    function show( $item ) { echo info()[$item]; }
?>

<div class="measurements">
    <div class="img-wrapper">
        <img src="<?php show( 'src' ) ?>" alt="<?php show( 'alt' ) ?>">
    </div>

    <div class="measurements__content">
        <h3><?php show( 'title' ); ?></h3>
        <p><?php show( 'excerpt' ); ?></p>
        <a href="<?php show( 'link' ) ?>"><?php show( 'link_text' ) ?></a>
    </div>
</div>