<?php
include 'SongInterface.php';
include 'Mp3Interface.php';
class IpodAdapter implements SongInterface {
    protected $songs;
    
    public function __construct(Mp3Interface $songs) {
        $this->songs = $songs;
    }
    
    public function nextSong() {
        $this->songs->nextTrack();
    }

    public function play() {
        $this->songs->repeatTrack();
    }

}