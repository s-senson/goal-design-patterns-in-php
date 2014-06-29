<?php

class EraserheadsAlbum extends Album {
  
    
    protected function setAlbumName() {
        $this->album_name = "Circus";
        echo "Album : {$this->album_name} <br />";
    }

    protected function setArtist() {
        $this->artist = "Eraserheads";
        echo "Artist : {$this->artist} <br />";
    }

}
