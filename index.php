<?php
require_once("config.php");
class Index extends Config{

    function __construct(){
        /*variables*/
        $aData = array(
            "title" => "Roel M. Dingle",
			"sub-header" => "Web Developer",
			"font" => "#000",
			"background" => "#fff",
			"resume-dl-url" => "https://dl.dropboxusercontent.com/u/55912623/Roel%20M.%20Dingle%20(resume).pdf",
			"skills" => parent::getSkillsData(),
            "social" => parent::getSocialData(),
            "works" => parent::getWorksData()
        );

        include_once("views/v_".strtolower(__CLASS__).".php");
    }


}

$oIndex = new Index;