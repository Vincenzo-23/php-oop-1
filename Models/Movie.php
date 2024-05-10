<?php

require_once __DIR__ . "/Production.php";

class Movie extends Production {

    public $profits;
    public $length;

    function __construct($_title, $_language, $_profits, $_length){
        // $this->title = $_title;
        // $this->language = $_language;
        // $this->setVote();
        parent::__construct($_title, $_language);
        $this->profits = $_profits;
        $this->length = $_length;

    }
}