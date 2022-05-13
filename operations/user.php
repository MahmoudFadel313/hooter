<body>
<script src="jquery-3.4.1.min.js">    
        </script>    
</body>

<?php 
session_start();
ob_start();

class profile{
    public $name;
    public $bio;
    public $level;
    public $photo;
    public $country;
    public $writings;



    public function vieworigin(){
       // echo ' <img class="mr-3" src="20200805_060049_٠٠٠٠.png" alt=""  height="118" id="cover">';
        echo '<div class="container" id="container">
        
    
     
   ';
        $id= $_SESSION['id'];
        echo $id;
        echo "ttt";
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        mysqli_set_charset($conn,'utf8');
        $s= "select * from user where id=$id";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        if($f[0] == True){
            $native_photo= ' <img class="profile" src="data:image/png;base64 , '.base64_encode($f[$this->photo]).'">';
            $name= $f[$this->name];
            $bio= $f[$this->bio];
            $level= $f[$this->level];
            $country= $f[$this->country];
            $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
  $f_s= "select * from follow";
           $f_q= mysqli_query($conn,$f_s);
           $f_f= mysqli_fetch_array($f_q);
          

           $n= 0;
  while($f_f= mysqli_fetch_array($f_q)){
    if($f_f[1] == $_SESSION['id']){
        $n++;
    }


    $v= 0;
    $v_conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
    $v_s= "select * from writings";
    $v_q= mysqli_query($v_conn,$v_s);
    $v_f= mysqli_fetch_array($v_q);
    
    while($v_f= mysqli_fetch_array($v_q)){
        if($v_f[1] == $id){
           // echo $v_f[1];
            $v= (int)$v_f[7] + $v;
        }
    }
}
          //  echo "<div class='py-5 text-center'>
           
           echo "
           <div class='pro'>$native_photo<span class='name'>$name</span></div>
            
             <h2>  </h2>
             <p class='border-bottom' id='followers'><span class='bb'><svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 24 24' height='29' viewBox='0 0 24 24' width='29'><g><rect fill='none' height='24' width='24' y='0'/></g><g><path d='M19.48,12.35c-1.57-4.08-7.16-4.3-5.81-10.23c0.1-0.44-0.37-0.78-0.75-0.55C9.29,3.71,6.68,8,8.87,13.62 c0.18,0.46-0.36,0.89-0.75,0.59c-1.81-1.37-2-3.34-1.84-4.75c0.06-0.52-0.62-0.77-0.91-0.34C4.69,10.16,4,11.84,4,14.37 c0.38,5.6,5.11,7.32,6.81,7.54c2.43,0.31,5.06-0.14,6.95-1.87C19.84,18.11,20.6,15.03,19.48,12.35z M10.2,17.38 c1.44-0.35,2.18-1.39,2.38-2.31c0.33-1.43-0.96-2.83-0.09-5.09c0.33,1.87,3.27,3.04,3.27,5.08C15.84,17.59,13.1,19.76,10.2,17.38z'/></g></svg><span id='bbb' class='lead' >0</span></span><span class='aa'><svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 24 24' height='35' viewBox='0 0 24 24' width='35'><rect fill='none' height='24' width='24'/><g><path d='M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1C4.76,14.04,4.39,14,4,14 c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2 c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85C21.93,14.21,20.99,14,20,14 c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9 c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61C18,15.21,17.32,14.13,16.24,13.65z M8.07,16 c0.09-0.23,0.13-0.39,0.91-0.69c0.97-0.38,1.99-0.56,3.02-0.56s2.05,0.18,3.02,0.56c0.77,0.3,0.81,0.46,0.91,0.69H8.07z M12,8 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,8,12,8 M12,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3 C15,7.34,13.66,6,12,6L12,6z'/></g></svg><span id='aaa' class='lead'>0</span></span></p> 
 
             <p class='lead'> 
             
 
             <div class='my-3 p-3 b-white ' id='pro'>    
             
            
             ";
             echo "<div id='info' class='border-bottom'>  معلومات عن الشخص :</div>";
             echo "<div id='batry' class='border-bottom'>";
             if($f[$this->bio] != ''){
                echo "<div id='level1' > 
                <svg xmlns='http://www.w3.org/2000/svg' height='28' viewBox='0 0 24 24' width='28'><path d='M0 0h24v24H0z' fill='none'/><path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z'/></svg>
                 $bio
                </div>";

            }
            else{
                echo '<div id="level"><a href="complete.php?order=bio">اكتب نبذة عنك </a></div>';
            }
           
            if($f[$this->level] != '---اختر---'){
                echo "<div id='level2' > 
                <svg xmlns='http://www.w3.org/2000/svg' height='28' viewBox='0 0 24 24' width='28'><path d='M0 0h24v24H0z' fill='none'/><path d='M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z'/></svg>
                درس $level 
                </div>";
                        }
                        else{
                           echo '<div id="level"><a href="complete.php?order=edu">اختر المؤهل الدراسي </a></div>';
                        }
            
                        if($f[$this->country] != '---اختر---'){
                            echo "<div id='level3' > 
                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='black' width='28px' height='28px'><path d='M0 0h24v24H0z' fill='none'/><path d='M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z'/></svg>
                            $country 
                            </div>";
            
                        }
                        else{
                            echo '<div id="level"><a href="complete.php?order=co">اختر دولتك </a></div>';
                        }
           
                        echo " </div>
                        </div>
                        </div>";
           // echo ' <img src="data:image/png;base64 , '.base64_encode($f[$this->photo]).'">';
        }
        else{
            echo "false";
            echo mysqli_error($conn);
        }
        


    }
    public function blogs(){
        if(@$_GET['id']==True){
            $id= $_GET['id'];
        }
        else{
            $id= $_SESSION['id'];

        }
        $p_conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        //mysqli_set_charset($p_conn,'utf8');
        $p_s= "select * from writings";
        $p_q= mysqli_query($p_conn,$p_s);
        $p_f= mysqli_fetch_array($p_q);
        if($p_f[$this->writings] == True){
            //echo 'true1';
        }
        else{
            echo 'false2';
        }
        echo "<main role='main' class='container' id='t'>

            
              ";
              $c= 0;
        while($p_f= mysqli_fetch_array($p_q)){
            if($p_f[1] == $id){
                $u_conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
                $u_s= "Select * from user where id=$id";
                $u_q= mysqli_query($u_conn,$u_s);
                $u_f= mysqli_fetch_array($u_q);
                $name= $u_f[$this->name];
                $ph=  '<img id="identity" src="data:image/png;base64 , '.base64_encode($u_f[$this->photo]).'">';
                $blog= $p_f[3];
                $title= $p_f[2];
               // echo $blog;
               $c++;
                echo "

                <div class='my-3 p-3 b-white rounded shadow-sm'>    
                <div class='border-bottom' id='user'><a href=user.php?id=$p_f[1]>  $ph $name   </a></div>     <span></span>
                          <div class='title'> <a href='text.php?tid=$p_f[0]'>$title<a></div>
                          <div class='text'>$blog</div>
               
                </div>

                
               
                    " ; 


                //echo 'true';
            }
            
        //    else{
                //echo 'false';
         //   }
            

     //   }
    }
    if($n != 0){
        echo "<h2>لا يوجد لهذا الشخص كتابات حتي الان</h2>";
    }
    echo "</main>";
    }
    public function viewforign(){
       // echo '<main role="main" class="container">';

    
//echo ' <img class="mr-3" src="20200805_060049_٠٠٠٠.png" alt="" width="100%" height="118" id="cover">';
echo '<div class="container" id="container">
       
   
    
  ';
  $id=$_GET['id'];
  $fid= $_SESSION['id'];
  $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
  $f_s= "select * from follow";
           $f_q= mysqli_query($conn,$f_s);
           $f_f= mysqli_fetch_array($f_q);
           if($f_f[1] == True){
               echo "";
           }
           else{
               echo mysqli_error($conn);
               echo "false";
           }
           //echo $f_f[1];
           $n= 0;
  while($f_f= mysqli_fetch_array($f_q)){
    if($f_f[1] === $id){
        $n++;
    }
}


$v= 0;
    $v_conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
    $v_s= "select * from writings";
    $v_q= mysqli_query($v_conn,$v_s);
    $v_f= mysqli_fetch_array($v_q);
    
    while($v_f= mysqli_fetch_array($v_q)){
        if($v_f[1] == $id){
           // echo $v_f[1];
            $v= (int)$v_f[7] + $v;
        }
    }
//echo $n;
        
        
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        mysqli_set_charset($conn,'utf8');
        $s= "select * from user where id=$id";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $f_s= "select * from follow where fid=$fid and cid=$id";
        $f_q= mysqli_query($conn,$f_s);
        $f_f= mysqli_fetch_array($f_q);
        if($f_f[0] == True){
            $follow_ico= "<button class='ttr' onclick='follow1()'>تتابعه</button>";
        }
        else{
           
            $follow_ico= "<span> <button id='follow' class='tt' onclick='follow1()'> <svg class='t' xmlns='http://www.w3.org/2000/svg' height='25' viewBox='0 0 24 24' width='25'><path d='M0 0h24v24H0z' fill='none'/><path d='M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z'/></svg>تابع  </button>";
        }
        if($f[0] == True){
            $name= $f[$this->name];
            $blog= $this->writings;
            $bio= $this->bio;
            $level= $this->level;
            $country= $this->country;
            $photo= $this->photo;
            $native_photo= ' <img class="profile" src="data:image/png;base64 , '.base64_encode($f[$this->photo]).'">';
           
            echo "
            <div class='pro'>$native_photo<span class='name'>$name</span>
           $follow_ico
           </span></div>   
           <h2>  </h2>
              <p class='border-bottom' id='followers'><span class='bb'><svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 24 24' height='29' viewBox='0 0 24 24' width='29'><g><rect fill='none' height='24' width='24' y='0'/></g><g><path d='M19.48,12.35c-1.57-4.08-7.16-4.3-5.81-10.23c0.1-0.44-0.37-0.78-0.75-0.55C9.29,3.71,6.68,8,8.87,13.62 c0.18,0.46-0.36,0.89-0.75,0.59c-1.81-1.37-2-3.34-1.84-4.75c0.06-0.52-0.62-0.77-0.91-0.34C4.69,10.16,4,11.84,4,14.37 c0.38,5.6,5.11,7.32,6.81,7.54c2.43,0.31,5.06-0.14,6.95-1.87C19.84,18.11,20.6,15.03,19.48,12.35z M10.2,17.38 c1.44-0.35,2.18-1.39,2.38-2.31c0.33-1.43-0.96-2.83-0.09-5.09c0.33,1.87,3.27,3.04,3.27,5.08C15.84,17.59,13.1,19.76,10.2,17.38z'/></g></svg><span id='bbb' class='lead' >$v</span></span><span class='aa'><svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 24 24' height='35' viewBox='0 0 24 24' width='35'><rect fill='none' height='24' width='24'/><g><path d='M4,13c1.1,0,2-0.9,2-2c0-1.1-0.9-2-2-2s-2,0.9-2,2C2,12.1,2.9,13,4,13z M5.13,14.1C4.76,14.04,4.39,14,4,14 c-0.99,0-1.93,0.21-2.78,0.58C0.48,14.9,0,15.62,0,16.43V18l4.5,0v-1.61C4.5,15.56,4.73,14.78,5.13,14.1z M20,13c1.1,0,2-0.9,2-2 c0-1.1-0.9-2-2-2s-2,0.9-2,2C18,12.1,18.9,13,20,13z M24,16.43c0-0.81-0.48-1.53-1.22-1.85C21.93,14.21,20.99,14,20,14 c-0.39,0-0.76,0.04-1.13,0.1c0.4,0.68,0.63,1.46,0.63,2.29V18l4.5,0V16.43z M16.24,13.65c-1.17-0.52-2.61-0.9-4.24-0.9 c-1.63,0-3.07,0.39-4.24,0.9C6.68,14.13,6,15.21,6,16.39V18h12v-1.61C18,15.21,17.32,14.13,16.24,13.65z M8.07,16 c0.09-0.23,0.13-0.39,0.91-0.69c0.97-0.38,1.99-0.56,3.02-0.56s2.05,0.18,3.02,0.56c0.77,0.3,0.81,0.46,0.91,0.69H8.07z M12,8 c0.55,0,1,0.45,1,1s-0.45,1-1,1s-1-0.45-1-1S11.45,8,12,8 M12,6c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3s3-1.34,3-3 C15,7.34,13.66,6,12,6L12,6z'/></g></svg><span id='aaa' class='lead'>$n</span></span></p> 
  
              <p class='lead'> 
              
  
              <div class='my-3 p-3 b-white ' id='pro'>    
              
             
              ";
              echo "<div id='info' class='border-bottom'>  معلومات عن الشخص :</div>";
              echo "<div id='batry' class='border-bottom'>";


           /* echo "<div class='py-5 text-center'>
           
           
           $native_photo
            <h2>  $f[$name]</h2>
            <p class='lead' id='followers'>   <svg xmlns='http://www.w3.org/2000/svg' height='29' viewBox='0 0 24 24' width='29'><path d='M0 0h24v24H0z' fill='none'/><path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z'/></svg>$n   <span>   </span><span id='views'></span>  مشاهدة  </p> 

            <p class='lead'><span id='start'></span>
            

            <button id='follow' onclick='follow1()'> <svg xmlns='http://www.w3.org/2000/svg' height='20' viewBox='0 0 24 24' width='20'><path d='M0 0h24v24H0z' fill='none'/><path d='M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z'/></svg>تابع  </button></p>
            <div class='my-3 p-3 b-white ' id='pro'>    
            
           
            ";*/
            if($f[$this->bio] != ''){
                $bio= $f[$this->bio];
                echo "<div id='level1'> 
                <svg xmlns='http://www.w3.org/2000/svg' height='28' viewBox='0 0 24 24' width='28'><path d='M0 0h24v24H0z' fill='none'/><path d='M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z'/></svg>
                 $bio 
                </div>";
                
                //echo $f[$this->bio]; 

            }
            else{
                echo '';
            }            
           
            if($f[$this->level] != '---اختر---'){
                $level= $f[$this->level];
                echo "<div id='level2'> 
                <svg xmlns='http://www.w3.org/2000/svg' height='28' viewBox='0 0 24 24' width='28'><path d='M0 0h24v24H0z' fill='none'/><path d='M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z'/></svg>
                درس $level 
                </div>";
               // echo $f[$this->level].'</br>';
                        }
                        else{
                            echo '';
                        }
            //echo $f[$this->name];
            if($f[$this->country] != '---اختر---'){
                $country= $f[$this->country];
                echo "<div id='level3'> 
                <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='black' width='28px' height='28px'><path d='M0 0h24v24H0z' fill='none'/><path d='M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z'/></svg>
                $country 
                </div>";
              //echo $f[$this->country].'</br>';

            }
            else{
                echo "";
            }
           
                     
           if($f[$this->photo] == True){
            echo ' ';
           }
           else{
               echo '';
           }
           
           
            //echo '<button  onclick="follow1()">تابع</button>';
            echo   "<p id='ckeck'></p>";
       
       echo " </div>
       </div>
       </div>";
        }
        else{
            echo "false";
        }
    }

}


  

$user= new profile();
$user->name= 1;
$user->bio= 9;
$user->photo= 10;
$user->country= 8;
$user->level= 6;
$user->writings= 1;


if(@$_GET['id'] == True){
    $user->viewforign();
}
else{
    $user->vieworigin();
}
$user->blogs();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
        <link type="text/css" rel="stylesheet" href="floating-labels.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rakkas&display=swap" rel="stylesheet"> 

        
    </head>
    <style>
    body{
        background-color:white;
        dir:rtl;
    }
   
    #container{
        position:absolute;
        top:85px;
    }
    #blogs{
        position:absolute;
        top:200px;
    }
    div{
        font-family: 'Cairo', sans-serif;
    }
    #t{
        position:absolute;
        top:500px;
    }
    #cover{
        position:absolute;
        width:97%;
        top:90px;
        height:180px;
        border:1px solid black;
        border-radius:10px;
    }
    .aa{
        position:relative;
        border-left:2px solis black;
        height:200px;
        right:30px;
       


    }
    #aaa{
        position:absolute;
        top:25px;
        left:5px;
        text-align:center;
        
    }
    .bb{
        position:absolute;
        right:270px;
    }
    #bbb{
        position:absolute;
        top:30px;
        left:5px;
        text-align:center;
    }
    #pro{
        position:relative;
        right:10px;
    }
    svg{
        background-color:white;
    }
    .to{
        fill:red;
        height:30px;
        width:30px;
    }
    .ttr{
        fill:red;
        heigt:30px;
        width:65px;
        background-color:black;
        color:white;
        font-family: 'Rakkas', cursive;
        font-size:x-large;
        border:2px solid white;
        border-radius:15px;


    }
    .profile{
        
        border:2px solid white;
        border-radius:160px;
        height:140px;
        width:140px;
    }
    .tt{
        position:absolute;
        top:70px;
        left:115px;
        border:2px solid black;
        font-family: 'Rakkas', cursive;
        font-size:x-large;
        color:black;
        background-color:white;
        border-radius:20px;
        height:40px;
        width:80px;
        padding-right:7px;
        outline:none;
    }
    #identity{
        width:50px;
        height:50px;
        border:2px solid black;
        border-radius:9px;
    }
    #batry{
        position:relative;
        left:20px;

    }
    #info{
        font-family: 'Cairo', sans-serif;
        font-size:large;
        position:relative;
        bottom:20px;
        left:10px;
    }
    #level1{
        font-family: 'Cairo', sans-serif;
        font-size:large; 
        margin-bottom:15px;
        border:2px solid white;
       
    }
    #level2{
        font-family: 'Cairo', sans-serif;
        font-size:large;    
        margin-bottom:15px;
    }
    #level3{
        font-family: 'Cairo', sans-serif;
        font-size:large;   
        margin-bottom:15px;
    }
    #followers{
        font-family: 'Cairo', sans-serif;
        position:relative;
        height:70px;
    }
    #write{
        background-color:white;
        border:none;
        border-radius:40px;
        margin-bottom:10px;
        margin-left:10px;
        outline:none;
        
    }
    #goprofile{
       
        margin-right:55px;
        background-color:white;
        border:none;
        height:30px;
        width:30px;
        border-radius:40px;
        margin-bottom:30px;
        margin-left:10px;
        outline:none;
    }
    .name{
        font-size:x-large;
        margin-bottom:50px;
        position:relative;
        bottom:20px;
    }
    .tto{
        
        background-color:white;
        border:none;
        color:white;
        outline:none;
        font-family: 'Cairo', sans-serif;
        content:"njk";
        font-size:xx-large;

        
    }
   .img4{
       border:1px solid transfer;
       border-radius:27px;
       width:45px;
       height:45px;
       margin-bottom:17px;
       margin-right:11px;
       box-shadow: 0 0 0 3px white,
                   0 0 0 7px black;
   }


    
    @media only screen and (min-width:160px) and  (max-width: 800px){
        #cover{
            top:40px;
            width:94%;
            margin-left:30px;
            left:30px;
            height:170px;
        }
        .profile{
            width:120px;
            height:120px;
        }
        #t{
            top:470px;
        }
    }
    @media only screen and (min-width:160px) and  (max-width: 340px){
        #follow{
            left:70px;;

        }
        .name{
            font-size:large;

        }
    }
    @media only screen and (min-width:800px) and  (max-width: 1300px){
        #level1{
            width:400px;
        }
    }
    </style>
    <body  dir='rtl'>
    
    <?php //echo "gg"; ?>
<p id="serverResponseFollow"></p>
<?php
if(@$_GET['id'] == False){
    $gid= $_SESSION['id'];
}
else{
    $gid= $_SESSION['id'];
    $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        mysqli_set_charset($conn,'utf8');
        $s= "select * from user where id=$gid";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $goprofile=  ' <img class="img4" src="data:image/png;base64 , '.base64_encode($f[10]).'">';
    echo " <a class='fixed-bottom shadow-sm' href='user.php'><div  id='goprofle'>$goprofile</div></a>";
}

?>
<a href='write.php'><button class='fixed-bottom shadow-sm' id='write'  href='write.php' role='link'> <svg xmlns="http://www.w3.org/2000/svg" height="54" viewBox="0 0 24 24" width="54"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg></button></a>
  


<script type='text/javascript'>
$(document).ready(function(){
    $("#follow").click(function(){
        $(this).toggleClass('tto');
        $(".t").toggleClass("to");
       // $("svg").css("fill","red");
       // $(".tto").html("<em>تتابعه</em>");
    })
})
/*
class show{
    element;
    ticket;

    


    httpserver(){
        var element= this.element; 
        const params= new URLSearchParams(window.location.search);
           var getid= params.get('id');
        $.ajax({
    type: "post",
    url: "user_proccess.php",
    data: {aid: getid, ticket: this.ticket},
    success: function(data, status, xhr){
        console.log(data);
        console.log(status);
        element.innerHTML= xhr['responseText'];
        //console.log(xhr['responseText']);
    }
        

    



      
    })
}
}
let follow= new  show();
follow.element= document.getElementById('serverResponseFollow');
follow.ticket= 'follow';
//console.log(follow.httpserver())

let check_follow= new show();
check_follow.element= document.getElementById('check');
check_follow.ticket= 'checkfollow';


check_follow.httpserver();
follow.httpserver();
    */
    
function follow2(){
          const xhr = new XMLHttpRequest();
         
          xhr.onload = function(){
               const server = document.getElementById("start");
               server.innerHTML = this.responseText;
           }; 
           const params= new URLSearchParams(window.location.search);
       var get= params.get('id');
       //document.write(get);
           xhr.open("post", "user_proccess.php",true);
           xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhr.send("aid=" + get + "&" + "ticket=check");
          // xhr.send('name=' + element );
          
           
        };
        
        follow2();
        function follow1(){
          const xhr = new XMLHttpRequest();
         
          xhr.onload = function(){
               const server = document.getElementById("serverResponseFollow");
               server.innerHTML = this.responseText;
           }; 
           const params= new URLSearchParams(window.location.search);
       var get= params.get('id');
       //document.write(get);
           xhr.open("post", "user_proccess.php",true);
           xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           xhr.send("aid=" + get + "&" + "ticket=follow");
          // xhr.send('name=' + element );
          
           
        };
        function follow3(){
            const xhr = new XMLHttpRequest();
         
         xhr.onload = function(){
              const server = document.getElementById("views");
              server.innerHTML = this.responseText;
          }; 
          const params= new URLSearchParams(window.location.search);
      var get= params.get('id');
      //document.write(get);
          xhr.open("post", "user_proccess.php",true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.send("aid=" + get + "&" + "ticket=view1");
         // xhr.send('name=' + element );
        };
       follow3();
       
</script>







    
         
          <nav class="navbar fixed-top "style="background-color:white;display:flex;height:75px;padding-bottom:0px;">
          <a class="navbar-brand" href="#"><img src="IMG_٢٠٢٠٠٧٢٧_٢٣٠٥٣٦.jpg" alt="logo" style="position:relative;top:-11px;width:80px;height:80px;position:asolute;"></a>
                      
            <span style='position:relative;top:-11px;'>
          <a href='factory.php'>  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="47" viewBox="0 0 24 24" width="47"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M19,9.3V4h-3v2.6L12,3L2,12h3v8h6v-6h2v6h6v-8h3L19,9.3z M17,18h-2v-6H9v6H7v-7.81l5-4.5l5,4.5V18z"/><path d="M10,10h4c0-1.1-0.9-2-2-2S10,8.9,10,10z"/></g></g></svg>
    </a>
            </span>
           <!-- <span>
                <svg xmlns="http://www.w3.org/2000/svg" style="color:black;background-color:blac;" width="35" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>



            </span>-->
            <span style='position:relative;top:-11px;'>
           <a href='search.php'> <svg xmlns="http://www.w3.org/2000/svg" height="45" viewBox="0 0 24 24" width="40"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
    </a>


            </span>
            
           
            <button  class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" style='position:relative;top:-11px;'>
              <div class="navbar-icon" style="color:white;background-color:white;border:2px solid black;border-radius:30px;width:40px;height:0px;"></div>
              <div class="navbar-icon" style="margin-top:9px;color:white;background-color:white;border:2px solid black;border-radius:30px;width:30px;height:0px;"></div>
              <div class="navbar-icon" style="margin-top:9px;color:white;background-color:white;border:2px solid black;border-radius:30px;width:40px;height:0px;"></div>

            </button>




            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
                </ul>
              </div>
          </nav>







        
    <script src="jquery-3.4.1.min.js">    
        </script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>