<?php

$imgurl = 'https://www.spacejam.com/1996/img/p-jump.gif';
if( !@copy( $imgurl, './img/p-jump.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}


$imgurl = 'https://www.spacejam.com/1996/img/p-pressbox.gif';
if( !@copy( $imgurl, './img/p-pressbox.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}


$imgurl = 'https://www.spacejam.com/1996/img/p-jamcentral.gif';
if( !@copy( $imgurl, './img/p-jamcentral.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-bball.gif';
if( !@copy( $imgurl, './img/p-bball.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-lunartunes.gif';
if( !@copy( $imgurl, './img/p-lunartunes.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-lineup.gif';
if( !@copy( $imgurl, './img/p-lineup.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-jamlogo.gif';
if( !@copy( $imgurl, './img/p-jamlogo.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-junior.gif';
if( !@copy( $imgurl, './img/p-junior.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-studiostore.gif';
if( !@copy( $imgurl, './img/p-studiostore.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-behind.gif';
if( !@copy( $imgurl, './img/p-behind.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-souvenirs.gif';
if( !@copy( $imgurl, './img/p-souvenirs.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo "";
}

$imgurl = 'https://www.spacejam.com/1996/img/p-sitemap.gif';
if( !@copy( $imgurl, './img/p-sitemap.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo  "";
}

$imgurl = 'https://cdn.hipwallpaper.com/i/43/54/rWOd4f.gif';
if( !@copy( $imgurl, './img/bg_stars.gif' ) ) {
    $errors= error_get_last();
    echo "COPY ERROR: ".$errors['type'];
    echo "<br />\n".$errors['message'];
} else {
    echo  "\n Site carregado com sucesso ";
}
