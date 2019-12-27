<?php

class m_test extends CI_Model {
    //put your code here
    function __construct()
    {
        parent::__construct();
    }
   
    function hey($name)
    {
	$content = "Kapten ".$name."!!";
 	return $content;
    }

}


