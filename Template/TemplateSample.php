<?php

include 'FoofightersAlbum.php';
include 'EraserheadsAlbum.php';

$foofighters = new FoofightersAlbum();
$foofighters->releaseAlbum();

$eraserheads = new EraserheadsAlbum();
$eraserheads->releaseAlbum();