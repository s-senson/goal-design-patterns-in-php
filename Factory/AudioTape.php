<?php
 
class AudioTape implements AlbumInterface{
    public $title;
    
    public function setAlbumTitle($title){
        $this->title = $title;
    }
    
    public function setRecords($records) {
        
    }
}