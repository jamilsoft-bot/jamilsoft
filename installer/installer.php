<?php

class installer {

    public function home(){
        include "main.php";
    }
    public function step1(){
        echo "<form action='?action=step2' method='post'";
        include "step1.php";
        echo "</form>";
    }

    private function dbform(){
        $dbname = $_POST['dbname'];
        $dbhost = $_POST['dbhost'];
        $dbpass = $_POST['dbpass'];
        $dbuser = $_POST['dbuser'];
$output =  <<<END
<?php

\$DB_Data = [
    "DB_Host" => "$dbhost",
    "DB_User" => "$dbuser",
    "DB_Pass" => "$dbpass",
    "DB_Name" => "$dbname",

];
END;
        if(!file_put_contents("../conf.php",$output)){
            return "Could not create file";
        }else{
            return "Database Information all set, click install to begin installation";
        }
    }


    public function install(){
        if(file_exists("../conf.php")){
            include "../conf.php";
            $query = new mysqli($DB_Data['DB_Host'],$DB_Data['DB_User'],$DB_Data['DB_Pass'],$DB_Data['DB_Name']);
        $input = file_get_contents("sql.sql");
        if($query->multi_query($input)){
            $message = "Database tables create success";
            include "step3.php";
        }
        }else{
            $message = "Cannot access the conf.php file";
            include "step3.php";
        }
       
    }

    public function step2(){
        $message = null;
        if(isset($_POST['dbnext'])){
            $message = $this->dbform();
        }
        include "step2.php";
    }

    public function step4(){
        include "step4.php";
    }
    public function step5(){
        include "businfo.php";
    }
    public function main(){
        include "installer.php";
    }
}