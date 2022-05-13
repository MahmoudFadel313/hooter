<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">

        <link type="text/css" rel="stylesheet" href="floating-labels.css">
        <link type="text/css" rel="stylesheet" href="index2.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">  
        
        <style>
          #h3{
            font-family: 'Cairo', sans-serif;
          }
          a{
            font-family: 'Cairo', sans-serif;

          }
          button{
            font-family: 'Cairo', sans-serif;
          }
          input{
            font-family: 'Cairo', sans-serif;
          }
          label{
            font-family: 'Cairo', sans-serif;
          }
        
        </style>
            
    </head>
    <body style="background-color:white;">



    <nav class="navbar fixed-top "style="background-color:white;box-hadow:0px 3px 3px rgba(0,0,0,.1)">
            <a class="navbar-brand" href="#"><img src="IMG_٢٠٢٠٠٧٢٧_٢٣٠٥٣٦.jpg" alt="logo" style="width:70;height:70px;position:absolute;top:-8px;"  ></a>





</a>


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:none;" >
              <div class="navbar-icon" style="color:white;background-color:white;border:2px solid black;border-radius:80px;width:33px;height:0px;"></div>
              <div class="navbar-icon" style="margin-top:9px;color:white;background-color:white;border:2px solid black;border-radius:80px;width:25px;height:0px;"></div>
              <div class="navbar-icon" style="margin-top:9px;color:white;background-color:white;border:2px solid black;border-radius:30px;width:33px;height:0px;"></div>

            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <div>___________________________________________</div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">من نحن  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <div>___________________________________________</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">كيف تربح المال معنا</a>
      </li>
      <li class="nav-item">
        <div>___________________________________________</div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">تواصل معنا</a>
      </li>
     
      
     
  </div>
          </nav>        

    
        <p id="p"></p>
            <form class="form-signin" method="post">
                <div >
                        
                    <div class="text-center mb-4">
                     
                      
                     
                      <!--<h1 class="h3 mb-3 font-weight-normal">  </h1>-->
                      <!--<img class="mb-4" src="images (12).png" alt="main" width="62" height="62">-->
                      <p id="h3" class="h3 mb-3 font-weight-normal"> انشئ حساب  </p>
                      <p id="h3" class="h3 mb-3 font-weight-normal"> (: مجانا  </p>
                    </div>
                    
                          
            </div>
            <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" placeholder="اسم المستخدم  " name="name" required >
                    <label for="inputEmail" id="label4"> اسم المستخدم </label>
                  </div>
                  <div class="form-label-group">
                        <input type="number" id="inputPhone" class="form-control" placeholder="رقم الهاتف  " name="phone" required >
                        <label for="inputEmail" id="label4">رقم الهاتف  </label>
                      </div>
                    <div class="form-label-group">
                      <input type="email" id="inputEmail" class="form-control" placeholder="البريد الالكتروني" name="email" required >
                      <label for="inputEmail" id="label4">البريد الالكتروني</label>
                    </div>
                   
                    <div class="form-label-group">
                      <input type="password" id="inputPassword" class="form-control" placeholder="الرقم السري" name="password" required>
                      <label for="inputPassword" id="label3">الرقم السري</label>
                    </div>
                    
                   
                    <div class="checkbox mb-3">
                      <label>
                        <input type="checkbox" value="remember-me"> Remember me
                      </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" id="sub" type="submit" name="subsign" > تسجيل</button>
                    <div style="color:white;">    cghcghc</div>
                    <div class="form-label-group" style="text-align:center;"> _______________ أو _______________          </div>
                    <div style="color:white;">    cghcghc</div>
                  </form>
                  <div id="afe">  
                                <form action="log.html" class="form-signin">
                                   <div>
                                            
                                        <div class="text-center mb-4">
                                            <button class="btn btn-lg btn-primary btn-block" id="sub" type="submit" Style="background-color:black;color:white;border:2px solid rd;">انشاء حساب</button>
              
                                          </div>
                                          </div>
                                          <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-{{ site.time | date: "%Y" }}</p>
            </form>
</div>
                          <!-- <button  onclick="co()"> </button>-->



                            <script type="text/javascript">
            function co(){
          const xhr = new XMLHttpRequest();
           var name= document.getElementById('inputName').value;
           var email= document.getElementById('inputEmail').value;
           var password= document.getElementById('inputPassword').value;
           var phone= document.getElementById('inputPhone').value;
           xhr.onload = function(){
               const serverResponse = document.getElementById("p");
               serverResponse.innerHTML = this.responseText;
               //document.write(this.responseText);
           };
           xhr.open("post", "process_sign.php",true);
           xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhr.send("name="+ name + "&" + "email=" + email + "&" + "password=" + password + "&" + "phone=" + phone + "&" + "state=sign");
          // xhr.send('name=' + element );
           
           
        };
            </script>




          
        <?php 
       // echo "jkb";
        class system{
          public $email;
          public $password;
          public $name;
          public $phone;
      
          public function signin(){
              $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
              $s= "select * from user where email='$this->email' and password='$this->password'";
              $q=mysqli_query($conn,$s);
              $f= mysqli_fetch_array($q);
              if($f[0] == True){
                  echo "exist";
              }       
              else{
                  $i= "insert into user values('0','$this->name','$this->email','$this->password','','$this->phone','','','','','')";
                  $q= mysqli_query($conn,$i);
                  $_SESSION['id']= mysqli_insert_id($conn);
                  
                  header("location: info.php");
                //exit();
                  //die();
                  //header("location: http://" . $_SERVER['HTTP_HOST'] . "/user.php");
                  //exit();
              }
          }
      
          public function login(){
              $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
              $s= "select * from user where email='$this->email' , password='$this->password'";
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
      
      
          if(isset($_POST['subsign'])){
             // header("location: l.php");
              $sign->signin();
          }
      
      
        
        
        
        ?>







        <script src="jquery-3.4.1.min.js">    
        </script>
        <script src="bootstrap.min.js"></script>
            
    </body>
</html>
