<?php

abstract class AlbumFactory
{
    const NUM_TRACKS = 10;
    
    abstract protected function createAlbum($param) ;
    
    public function create ($type) {
        $album = $this->createAlbum($type);
        $album->setAlbumTitle("Solo EP");
        return $album;
    }
}