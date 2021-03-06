<?php 

class admin extends JX_Serivce implements JX_service{
    public function __construct()
    {
        global $Url;
        $this->setTitle($Url->get('serve') ." - ".$Url->get('action'));

        if(isset($_SESSION['uid'])){
        }else{
        echo "<script>";
        echo "location.assign('login&resume=admin')";
        echo "</script>";
        }
        
    }
    public function main(){
        global $Me;
        if($Me->role() == "admin"){
            include('containers/admin/admin.php');

        }else{
            $message = "You are not an Admin, please goto <a href='dashboard'>Dashboard</a> to continue";
            $linkback = "dashboard";
            include('containers/admin/errorpage.php');

        }
}

    public function blog(){
        
        include('containers/admin/blog-list.php');
        
    }

    public function viewbusiness(){
        global $JX_db, $Me, $Url;
        
        $code = $Url->get('b');
        
        
        if(isset($_POST['submit'])){
            $lg = $_FILES['logo'];
             $f = $lg['name'];
             $data = json_encode($_POST);
             $sql = business_update_with_logo($f,'data',$data,$code);
            
            if(UploadpostImage($lg)){
                if($JX_db->query($sql)){

                    echo "<div class='alert w3-green alert-dismissible fade show' role='alert'>";
                        echo "<strong>Business Alert!</strong> the Business was successfully updated.<br>";
                        echo "<button type='button' class='btn-close w3-white' data-bs-dismiss='alert' aria-label='Close'></button>";
                       echo "</div>";
                }else{
                    echo "<div class='alert w3-red alert-dismissible fade show' role='alert'>";
                        echo "<strong>Business Alert!</strong> ".$JX_db->error."<br>";
                        echo "<button type='button' class='btn-close w3-white' data-bs-dismiss='alert' aria-label='Close'></button>";
                       echo "</div>";
                }
            }else{
                echo "<div class='alert w3-red alert-dismissible fade show' role='alert'>";
                        echo "<strong>Business Alert!</strong> Image Was Not Upload<br>";
                        echo "<button type='button' class='btn-close w3-white' data-bs-dismiss='alert' aria-label='Close'></button>";
                       echo "</div>";
            }
        }
        
        include('containers/admin/view-bus.php');
        
    }

    public function about(){
        include "containers/admin/about.php";
    }

    public function updatecomp(){
        global $JX_db;
        $data = null;
        $data2 = null;
        //$sql2 = "INSERT INTO `options`(`name`,`value`)VALUES('cprofile','$data')";

        if(isset($_POST['submit'])){
            $data = json_encode($_POST);
            $sql2 = "UPDATE `options` SET `value`='$data' WHERE `name`='cprofile'";
            if($JX_db->query($sql2)){
                JX_Alert("Business Profile set");
            }else{
                // JX_Alert($JX_db->error);
               
            }
           
        }else{
            $sql1 =  "SELECT *FROM `options` WHERE `name`='cprofile'";
             $r = $JX_db->query($sql1);
                foreach($r as $t){
                    $data2 = $t['value'];
                }
        }
        $info = json_decode($data2);
        echo "<form action='' method='post'>";
        include('containers/admin/company.php');
        echo "</form>";
    }

    public function createuser(){
        $users = new Userserve();
        if(isset($_POST['submit'])){
            $users->reg();
        }
        include('containers/admin/userform.php');
    }

    public function applist(){
        global $JX_db, $Url, $Apps;
        $insall = $Url->get('install');
        $uninsall = $Url->get('uninstall');
        if($insall !== null){
          echo  $Apps->Install($insall);
        }

        if($uninsall !== null){
            echo  $Apps->Uninstall($uninsall);
          }
        include "containers/apps/app-list.php";
    }

    public function home(){
        
        include('containers/admin/home.php');
    }

    public function users(){
        
        $this->setTitle("User List");
        JX_delete_item('users');
        include('containers/admin/user-list.php');  
    }

   

    public function posts(){
        include('containers/admin/post-list.php');  
    }

    public function products(){
        include('containers/admin/product-list.php');  
    }

    public function offers(){
        include('containers/admin/businesses.php');  
    }


    public function businesses(){
        include('containers/admin/businesses.php');  
    }

}