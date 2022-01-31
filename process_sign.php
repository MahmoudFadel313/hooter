<?php
session_start();
ob_start();
//header("location: log.html");
foreach($_POST as $er){
    echo $er;

}
echo $_POST['ticket'];

class system{
    public $email;
    public $password;
    public $name;
    public $phone;

    public function signin(){
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $s= "select * from users where email='$this->email' and password='$this->password'";
        $q=mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        if($f[0] == True){
            echo "exist";
        }       
        else{
            $i= "insert into users values('','$this->name','$this->email','$this->password','','$this->phone','','','','')";
            $q= mysqli_query($conn,$i);
            $SESSION['id']= mysqli_insert_id($conn);
        //  header("location: user.php");
          //exit();
           echo "<script type='text/javascript'>history.pushstate({},'','user.php') </script>";
            //die();
            //header("location: http://" . $_SERVER['HTTP_HOST'] . "/user.php");
            //exit();
        }
    }

    public function login(){
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $s= "select * from users where email='$this->email' , password='$this->password'";
        $q=mysqli_query($conn,$s);
        
        if($f= mysqli_fetch_array($q)){
            $SESSION['id']= $f[0];
            echo $_SESSION['id'];
            header("location: http//" .$_SERVER['HTTP_HOST'] . "user.php");
        }
        else{
            echo "exist";
        }
    }
}
    $sign= new system();
    @$sign->email= $_POST['email'];
    @$sign->name= $_POST['name'];
    @$sign->password= $_POST['password'];
    @$sign->phone= $_POST['phone'];



    $log= new system();
    @$log->email= $_POST['email'];
    @$log->password= $_POST['password'];


    if($_POST['state'] == "sign"){
       // header("location: l.php");
        $sign->signin();
    }





?>




