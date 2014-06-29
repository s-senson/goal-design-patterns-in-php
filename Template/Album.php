<?php

abstract class Album{
    var $song_number;
    var $song_array = array();
    var $album_name = "";
    var $artist = "";
    final public function releaseAlbum(){
        $this->setArtist();
        $this->setAlbumName();
        $this->setNumberOfSongs();
        $this->setSongs();
        $this->preparePackage();
        $this->sellInStore();
    }
    
    abstract protected function setArtist();
    abstract protected function setAlbumName();


    private function setNumberOfSongs(){
        $this->song_number = 12;
        echo "Number of Songs in album : {$this->song_number} <br />";
    }
    
    private function setSongs () {
        echo "Songs in Album: <br />";
        for($i=1; $i<=12; $i++) {
            $this->song_array[$i] = "{$this->artist} Song $i";
            echo "{$this->song_array[$i]} <br />";
        }
    }
    
    private function preparePackage() {
        echo "Preparing Album Package...<br />";
    }
    
    private function sellInStore() {
        echo "Now Selling In Stores! <br />";
    }
}