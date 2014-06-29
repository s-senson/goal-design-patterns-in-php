<?php

include 'Album.php';
class FoofightersAlbum extends Album {

    protected function setAlbumName() {
        $this->album_name = "Greatest Hits";
        echo "Album : {$this->album_name} <br />";
    }

    protected function setArtist() {
        $this->artist = "Foo Fighters";
        echo "Artist : {$this->artist} <br />";
    }
    
}
