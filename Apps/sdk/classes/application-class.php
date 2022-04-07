<?php

class sms_Application{
    public function init(){
        global $db, $Me;
        $sql = "";
        if($Me->role() == "admin"){
            $sql = "SELECT *FROM sms_applications";
        }else{
            $sql = "SELECT *FROM sms_applications WHERE `application_name`='".$Me->username() . "'";
        }

        $dt = $db->Query($sql);
        
        echo "<div class='table-responsive w3-margin-top'><table class='table table-striped table-hover'>";
        echo "<tr><th>Application Id</th><th>Application Name</th><th>Selected Course</th><th>Price</th><th>Applied Dated</th><th>Operations</th></tr>";
        foreach($dt as $s){
            echo "<tr>";
            echo "<td>". $s['id'] . "</td>";
            echo "<td>". $s['application_name'] . "</td>";
            echo "<td>". $s['selected_course'] . "</td>";
            echo "<td> N". $s['price'] . "</td>";
            echo "<td>". $s['applied_date'] . "</td>";
            //echo "<td><a href='?serve=sms&action=invoice&id=".$s['id']."'><i class='fa fa-coins'></i></a></td>";
            echo "<td><a href='?serve=payment&action=pay&p=".$s['price']."'><i class='fa fa-coins'></i></a></td>";
            echo "</tr>";
        }
        echo "<table></div>";
        echo "welcome to application center";
    }

    
}