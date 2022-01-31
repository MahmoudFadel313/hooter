<?php
session_start();
ob_start();
class factory{
    public $field;



    public function follow(){
        $id= $_SESSION['id'];
        $arr_follow= array();
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $f_s= "select * from follow";
        $f_q= mysqli_query($conn,$f_s);
        $f_f= mysqli_fetch_array($f_q);
        while($f_f= mysqli_fetch_array($f_q)){
            if($f_f[0] == $id){
                $n= $f_f[1];                            // following id
                $w_s= "select * from writings";
                $w_q= mysqli_query($conn,$w_s);
                $w_f= mysqli_fetch_array($w_q);
                $arr= array();
                while($w_f= mysqli_fetch_array($w_q)){
                    if($w_f[1] == $n){
                        $arr[count($arr)]= $w_f[0];
                        //$arr_follow[$n][count($arr_follow[$n])]= $w_f[0];      // writing id
                         
                    }
                }
               // echo count($arr);
                $arr_follow[$n]= $arr;
                //echo count($arr_follow_star);
              //  echo $arr_follow_star[0][0];
               
            }
        }
       // sort($arr_follow);
        $arr_follow_star= array_reverse($arr_follow);
       // echo count($arr_follow_star);
        //echo $arr_follow_star[0][2];
       // echo 'follow</br>';
        //print_r($arr_follow_star).'</br>';
        return $arr_follow_star;
    }

    public function trend(){
        $id= $_SESSION['id'];
        $arr_trend= array();
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $w_s= "select * from writings";
        $w_q= mysqli_query($conn,$w_s);
        $w_f= mysqli_fetch_array($w_q);
        while($w_f= mysqli_fetch_array($w_q)){
            $c= $w_f[7];                               // views
            $wid= $w_f[0];                             // writing id
            $arr_trend[$c]= $wid;
           
        }
         ksort($arr_trend);
         $arr_trend_star= array_reverse($arr_trend);
        //echo 'trend</br>';
        //echo count($arr_trend_star);
        //echo $arr_trend_star[0];      // ['1'=>'2','3'=>4','5'=>'6']
        //print_r($arr_trend_star);
        return $arr_trend_star;
    }

    public function field(){
        $id= $_SESSION['id'];
        $arr_field= array();
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $w_s= "select * from writings";
        $w_q= mysqli_query($conn,$w_s);
        $w_f= mysqli_fetch_array($w_q);
        while($w_f= mysqli_fetch_array($w_q)){
            if($w_f[4] == $this->field){
                $f= $w_f[7];           //veiws
                $wid= $w_f[0];         //writing id
                $arr_field[$f]= $wid; 
                
            }
        }
        ksort($arr_field);
        $arr_field_star= array_reverse($arr_field);
        return $arr_field;
    }

    public function view_follow(){

        echo "<main role='main' class='container' id='container' >

               
        <h6 class='border-bottom border-gray pb-2 mb-0'>نتائج البحث</h6>
       ";


        $follow= $this->follow();
        $trend= $this->trend();
       // print_r($trend);
        $n= 0;
        $d= 0;
        for($n = 0 ; $n < 10 ; $n++){
            for($i = 0 ; $i < 500 ; $i++){              // ['1'=>['a','c'],2'=>['b','t'],'1'=>['f','r']]    ['fid','wid']
                if(@$follow[$i] == True && @$follow[$i][$n] == True){
                    $arr= $follow[$i];
                    $r_follow= array_reverse($arr);   
                    $f_wid= $r_follow[$n];           
                    $f_conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
                    $f_s= "select * from writings where wid=$f_wid";
                    $f_q= mysqli_query($f_conn,$f_s);
                    $f_f= mysqli_fetch_array($f_q);            // writing
                    $u_id= $f_f[0];
                    $f_u_s= "select * from user where id=$u_id";
                    $f_u_q= mysqli_query($f_conn,$f_u_s);
                    $f_u_f= mysqli_fetch_array($f_u_q);       // user



                    if($f_u_f[10] == True){
                        $img= '<img class="img" src="data:image/png;base64 , '.base64_encode($f_u_f[10]).'">';
        
                    }
                    else{
                        $img= '';
                    }
        
                    echo "
                            
                            
                            <div class='my-3 p-3 b-white rounded shadow-sm'>    
                            <div class='border-bottom' id='user'><a href=user.php?id=$f_u_f[1]>  $img $f_u_f[1]   </a></div>     <span></span>
                                      <div class='title'> <a href='text.php?tid=$f_f[0]'>$f_f[2]<a></div>
                                      <div class='text'> $f_f[3]</div>
                           
                            </div>
                            " ;  // show




                                                                                            
                }
                
              
        }
       
           
        }
    }

    public function view_trend(){


        echo "<main role='main' class='container' id='container' >

               
               <h6 class='border-bottom border-gray pb-2 mb-0'>نتائج البحث</h6>
              ";




        $trend= $this->trend();
        for($i = 0 ; $i < count($trend) ; $i++){
            $f_conn= mysqli_connect("localhost","fadel","fadel1234@","new");
            $t_wid= $trend[$i];
            $f_s= "select * from writings where wid=$t_wid";
            $f_q= mysqli_query($f_conn,$f_s);
            $f_f= mysqli_fetch_array($f_q);  
           
            $u_id= $f_f[1];
            $f_u_s= "select * from user where id=$u_id";
            $f_u_q= mysqli_query($f_conn,$f_u_s);
            $f_u_f= mysqli_fetch_array($f_u_q);   

            if($f_u_f[10] == True){
                $img= '<img class="img" src="data:image/png;base64 , '.base64_encode($f_u_f[10]).'">';

            }
            else{
                $img= '';
            }

            echo "
                    
                    
                    <div class='my-3 p-3 b-white rounded shadow-sm'>    
                    <div class='border-bottom' id='user'><a href=user.php?id=$f_u_f[1]>  $img $f_u_f[1]   </a></div>     <span></span>
                              <div class='title'> <a href='text.php?tid=$f_f[0]'>$f_f[2]<a></div>
                              <div class='text'> $f_f[3]</div>
                   
                    </div>
                    " ;  // show
                      
            
            
        }
        

          
    }
    public function view_field(){
        $field= $this->field();
        for($i = 0 ; $i < count($field) ; $i++){
            $f_conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
            $t_wid= $field[$i];
            $f_s= "select * from writings where wid=$t_wid";
            $f_q= mysqli_query($f_conn,$f_s);
            $f_f= mysqli_fetch_array($f_q);  
           
            $u_id= $f_f[1];
            $f_u_s= "select * from user where id=$u_id";
            $f_u_q= mysqli_query($f_conn,$f_u_s);
            $f_u_f= mysqli_fetch_array($f_u_q);   
            echo $f_u_f[1];
            echo $f_f[2].'</br>'; 
            echo $f_f[3];
            echo $f_f[0].'</br>';     
        }
    }

}
 $normal= new factory();
 $normal->field= 'مال واعمال';

 if(@$_GET['field'] == True){
     $normal->field= $_GET['field'];
     $normal->view_field();
 }
 else{
    $normal->view_trend();
 }
 //$normal->follow();
 //$normal->trend();
 //$normal->view_follow();
 
 //$normal->view_field();

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <!--<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">-->
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
        <link type="text/css" rel="stylesheet" href="offcanvas.css">

        <link type="text/css" rel="stylesheet" href="floatig-labels.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
    </head>
    <style>
    .img{
        width:60px;
        height:60px;
        border:2px solid black;
        margin-bottom:5px;
        border-radius:40px;
    }
    #container{
        margin-top:60px;
    }
    a{
        color:black;
    }
    a:visited{
        color:black;
    }
    a:hover{
        color:black;
    }
    #user{
        font-size:large;
    }
    .text{
        color:gray;
        font-size:large;
        top:50px;
        font-family: 'Cairo', sans-serif;
    }
    #div{
        position:relative;
        margin-bottom:90px;
        top:-30px;
    }
    </style>
    <body dir='rtl'style='background-color:white;'>





    <nav class="navbar navbar-expand-lg " style="background-color:white;display:flex;background: rgba(55,255,255,.2)">
          
          </nav>
          
         
          <nav class="navbar fixed-top "style="background-color:white;display:flex;height:75px;padding-bottom:0px;">
          <a class="navbar-brand" href="#"><img src="IMG_٢٠٢٠٠٧٢٧_٢٣٠٥٣٦.jpg" alt="logo" style="position:relative;top:-11px;width:80px;height:80px;position:asolute;"></a>
                      
            <span class='shadow-sm' style='position:relative;top:-11px;border-bottom:11px solid black;width:55px;height:2p;padding-right:0px;padding-top:0px;border:2px solid white;border-radius:100px;width:50px;'>
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="47" viewBox="0 0 24 24" width="47"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19,9.3V4h-3v2.6L12,3L2,12h3v8h5v-6h4v6h5v-8h3L19,9.3z M10,10c0-1.1,0.9-2,2-2s2,0.9,2,2H10z"/></g></svg>
            </span>
           <!-- <span>
                <svg xmlns="http://www.w3.org/2000/svg" style="color:black;background-color:blac;" width="35" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>



            </span>-->
            <span class='shadow-sm' style='position:relative;top:-11px;border:2px solid white;border-radius:100px;width:15px;padding-left:65px;'>
                <a href='search.php'><svg xmlns="http://www.w3.org/2000/svg" style="color:black;background-color:blac;" width="35" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
</a>




            </span>
            
           
            <button  class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas" style='position:relative;top:-11px;'>
              <div class="navbar-icon" style="color:white;background-color:white;border:2px solid black;border-radius:30px;width:40px;height:0px;"></div>
              <div class="navbar-icon" style="margin-top:9px;color:white;background-color:white;border:2px solid black;border-radius:30px;width:30px;height:0px;"></div>
              <div class="navbar-icon" style="margin-top:9px;color:white;background-color:white;border:2px solid black;border-radius:30px;width:40px;height:0px;"></div>

            </button>


            <div class="nav-scroller bg-white  " id='div' style=''>
              <nav class="nav nav-underline">
                <a class="nav-link " href="#" style="color:black;font-family: 'Cairo', sans-serif;"> <svg xmlns='http://www.w3.org/2000/svg' width='35' height='19' viewBox='0 0 512 512'><title>ionicons-v5-j</title><path d='M264,480A232,232,0,0,1,32,248C32,154,86,69.72,169.61,33.33a16,16,0,0,1,21.06,21.06C181.07,76.43,176,104.66,176,136c0,110.28,89.72,200,200,200,31.34,0,59.57-5.07,81.61-14.67a16,16,0,0,1,21.06,21.06C442.28,426,358,480,264,480Z'/></svg>   اسلام</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;">
                <svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 24 24" width="34"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 16v-2l-8-5V3.5c0-.83-.67-1.5-1.5-1.5S10 2.67 10 3.5V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"/></svg>   
                  سياحة وسفر
                  <!--<span class="badge badge-pill bg-light align-text-bottom">27</span>-->
                </a>
                <a class="nav-link" href="factory.php?field=مال واعمال" style="color:black;font-family: 'Cairo', sans-serif;"> <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>  مال واعمال</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M20,6h-4V4c0-1.1-0.9-2-2-2h-4C8.9,2,8,2.9,8,4v2H4C2.9,6,2,6.9,2,8v12c0,1.1,0.9,2,2,2h16c1.1,0,2-0.9,2-2V8 C22,6.9,21.1,6,20,6z M10,4h4v2h-4V4z M16,15h-3v3h-2v-3H8v-2h3v-3h2v3h3V15z"/></g></g></svg>  صحة وعناية شخصية</a>
                <a class="nav-link" href="factory.php?field=تاريخ" style="color:black;font-family: 'Cairo', sans-serif;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M9,4v1.38c-0.83-0.33-1.72-0.5-2.61-0.5c-1.79,0-3.58,0.68-4.95,2.05l3.33,3.33h1.11v1.11c0.86,0.86,1.98,1.31,3.11,1.36 V15H6v3c0,1.1,0.9,2,2,2h10c1.66,0,3-1.34,3-3V4H9z M7.89,10.41V8.26H5.61L4.57,7.22C5.14,7,5.76,6.88,6.39,6.88 c1.34,0,2.59,0.52,3.54,1.46l1.41,1.41l-0.2,0.2c-0.51,0.51-1.19,0.8-1.92,0.8C8.75,10.75,8.29,10.63,7.89,10.41z M19,17 c0,0.55-0.45,1-1,1s-1-0.45-1-1v-2h-6v-2.59c0.57-0.23,1.1-0.57,1.56-1.03l0.2-0.2L15.59,14H17v-1.41l-6-5.97V6h8V17z"/></g></g></svg>   تاريخ</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;"> <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M7,19c-1.1,0-2,0.9-2,2h14c0-1.1-0.9-2-2-2h-4v-2h3c1.1,0,2-0.9,2-2h-8c-1.66,0-3-1.34-3-3c0-1.09,0.59-2.04,1.46-2.56 C8.17,9.03,8,8.54,8,8c0-0.21,0.04-0.42,0.09-0.62C6.28,8.13,5,9.92,5,12c0,2.76,2.24,5,5,5v2H7z"/><path d="M10.56,5.51C11.91,5.54,13,6.64,13,8c0,0.75-0.33,1.41-0.85,1.87l0.59,1.62l0.94-0.34l0.34,0.94l1.88-0.68l-0.34-0.94 l0.94-0.34L13.76,2.6l-0.94,0.34L12.48,2L10.6,2.68l0.34,0.94L10,3.97L10.56,5.51z"/><circle cx="10.5" cy="8" r="1.5"/></g></g></svg>   طب الحيوي</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg> تقنية وتكنولوجيا</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;"><svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="22" viewBox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M19.8,18.4L14,10.67V6.5l1.35-1.69C15.61,4.48,15.38,4,14.96,4H9.04C8.62,4,8.39,4.48,8.65,4.81L10,6.5v4.17L4.2,18.4 C3.71,19.06,4.18,20,5,20h14C19.82,20,20.29,19.06,19.8,18.4z"/></g></svg>   علوم طبيعية</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M7 14c-1.66 0-3 1.34-3 3 0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2 2.21 0 4-1.79 4-4 0-1.66-1.34-3-3-3zm13.71-9.37l-1.34-1.34c-.39-.39-1.02-.39-1.41 0L9 12.25 11.75 15l8.96-8.96c.39-.39.39-1.02 0-1.41z"/></svg>  فنون</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;"><svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16.5 12c1.38 0 2.49-1.12 2.49-2.5S17.88 7 16.5 7C15.12 7 14 8.12 14 9.5s1.12 2.5 2.5 2.5zM9 11c1.66 0 2.99-1.34 2.99-3S10.66 5 9 5C7.34 5 6 6.34 6 8s1.34 3 3 3zm7.5 3c-1.83 0-5.5.92-5.5 2.75V19h11v-2.25c0-1.83-3.67-2.75-5.5-2.75zM9 13c-2.33 0-7 1.17-7 3.5V19h7v-2.25c0-.85.33-2.34 2.37-3.47C10.5 13.1 9.66 13 9 13z"/></svg>   شخصيات</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;">خواطر واراء</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;">سياسة</a>
                <a class="nav-link" href="#" style="color:black;font-family: 'Cairo', sans-serif;">تنمية ذاتية</a>
              </nav>
            </div>
   
            
           
          </nav>
         








    <script src="jquery-3.4.1.min.js">    
        </script>
        <script src="offcanvas.js">    
        </script>
        <script src="bootstrap.min.js"></script>
    </body>
</html>