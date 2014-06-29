<?php

include 'IndieArtistFactory.php';
include 'CD.php';
include 'AudioTape.php';

$indie = new IndieArtistFactory();
$indie_record = $indie->createAlbum(10); 
$indie_record->setAlbumTitle("New Indie Album!");
echo $indie_record->title;

echo "<br />";

$famous_artist = new IndieArtistFactory();
$artist_cd = $famous_artist->createAlbum(13);
$artist_cd->setAlbumTitle("New Famous Artist Album!");
echo $artist_cd->title;