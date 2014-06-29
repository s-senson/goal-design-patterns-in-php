<?php

include 'AlbumFactory.php';

class IndieArtistFactory extends AlbumFactory {
    public function createAlbum($param) {
        $album = null;
        switch($param) {
            case parent::NUM_TRACKS : 
                $album = new AudioTape();
                break;
            default : 
                $album =  new CD(); 
                break;
        }
        return $album;
    }
}