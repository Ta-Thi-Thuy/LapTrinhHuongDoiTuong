<?php
class StopWatch{
    public $startTime;
    public $endTime;

    public function __construct()
    {
        $this->startTime= microtime();
    }
    public function start(){
        $this->startTime = microtime();
    }
    public function stop(){
        $this->endTime = microtime();
    }
    public function getElapsedTime() {
        return microtime();

}

}
