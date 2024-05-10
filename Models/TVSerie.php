<?php

require_once __DIR__ . "/Production.php";

class TVSerie extends Production {

    public $seasonNum;

    function __construct($_title, $_language, $_seasonNum){
        // $this->title = $_title;
        // $this->language = $_language;
        // $this->setVote();
        parent::__construct($_title, $_language);
        $this->seasonNum = $_seasonNum;

    }
}