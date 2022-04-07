<?php
$sidebar->add("sms","SMS");
$sidebar->add("sms&action=application","Application");

include "classes/sms.php";
include "classes/sms-nav.php";
include "sms-services.php";

class sms{
    public $title ="Student management System";
    public function main(){
        global $main, $Notification;
        
        $main->init();
    }

    public function application(){
        global $Me, $main, $Url,$nav;
        $ac =  $Url->get('action');
        $ac2 = "sms_".$ac;
        $s = new $ac2();
        $nav->gethtmlu();
        $s->init();
    }

    public function apply(){
        global $Me, $main, $db,$nav;
        $sql = "SELECT * FROM `sms_courses`";

        $nav->gethtmlu();
        $dt = $db->Query($sql);
        include('containers/appform.php');
    }

    public function applied(){
        global $Me, $main, $Url, $db;

        $app_name = null; 
        $app_price = null; 
        $app_cs = null;
        $app_fields = null;
        $app_cs = $Url->post('courses');
        
        $sql = "SELECT *FROM sms_courses WHERE coursename ='$app_cs'";

        $ds = $db->Query($sql);
        foreach($ds  as $s){
            $app_price =  $s['courseprice'];
        }
        
        $app_name   = $Url->post('user-id') ;
       

        unset($_POST['courses']);
        unset($_POST['submit']);
        unset($_POST['agreed']);


        $csv = implode(",",$_POST);

        $app_fields =  $csv;


        $sql = "INSERT INTO `sms_applications`(`application_name`,`selected_course`,`price`,`csv_fields`)VALUES('$app_name','$app_cs','$app_price','$app_fields')";

        if($db->Query($sql)){
            echo "Application submitted Successfully";
        }
        
    }


    public function addcs(){
        global $Url, $Me;

        if($Me->role() == "Admin"){
         include('containers/courseform.php');

        }else{
            echo "this section required Admin Access";
        }

    }

    public function addedcs(){
        global $Url,$db;

        $csname = $Url->post('course-name');
        $csprice = $Url->post('course-price');
        $csdiscount = $Url->post('course-discount');

        $sql = "INSERT INTO sms_courses(`coursename`,`courseprice`,`coursediscount`)VALUES('$csname',$csprice,$csdiscount)";
       
        if($db->Query($sql) == true){
           echo "Course Added Success";
        }else{
            echo "Course Operation failure";

        }


    }

    public function getcs($id =null){
        global $Me, $main, $Url, $db;

        $sql = "SELECT *FROM `sms_applications` WHERE `id` = $id" ;

        $result = $db->Query($sql);

        $r = mysqli_fetch_row($result);

        $json = json_encode($r);

        return $json;
       // return $r;
       }

        public function invoice(){
            global $Url;

            $ar =  $this->getcs($Url->get('id'));

            $er = json_decode($ar,true);

            echo $er[4];
        }
    
}