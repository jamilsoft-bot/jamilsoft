<?php
namespace sms;

use JS_Pages;


class main{
    public function init()
    {
        global $Me,$CONF_APPS_DIR;
        $pg = new JS_Pages();
        
        if($Me->role() == "admin"){
            $this->get_nav();

        }else{
          echo  $pg->alert("Restricted","this is section required admin access");
        }
        
        
        
    }

    public function get_nav(){
        global $nav;
        echo "<div class='w3-bar w3-margin-top'>";
        $nav->gethtml("w3-hover-blue");
        echo "</div>";
        echo "<hr>";

    }
}
