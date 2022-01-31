<script src="jquery-3.4.1.min.js">    
        </script>
<?php 
session_start();
//echo "<main role='main' class='container' id='container' >";
echo '<div class="container" id="">';
?>

<?php 
class showtext{
    public $id;



    public function view(){
        $conn =mysqli_connect("localhost","fadel2","fadel1234@","new");
        $s= "select * from writings";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        while($f= mysqli_fetch_array($q)){
            if($f[0] == $this->id){
                $u_id= $_SESSION['id'];
                $t_id= (int)$f[1];
                $f_s= "select * from fav where uid=$id and wid=$t_id";;
                $f_q= mysqli_query($conn,$f_s);
                $f_f= mysqli_fetch_array($f_q);
                if($f_f[0] == True){
                    echo "ttttt";
                    $fav= "<div class='border-bottom'><span><button id='fav' class='tto' onclick='fav()'><span id='plus'><svg  id='like' xmlns='http://www.w3.org/2000/svg' height='68' viewBox='0 0 24 24' width='40'><path d='M0 0h24v24H0z' fill='none'/><path d='M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z'/></svg></span> </button></span><span id='comment'><svg xmlns='http://www.w3.org/2000/svg' height='70' viewBox='0 0 24 24' width='35'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M22 4c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4zm-2 13.17L18.83 16H4V4h16v13.17zM13 5h-2v4H7v2h4v4h2v-4h4V9h-4z'/></svg></span></span><span id='viewcomments'><svg xmlns='http://www.w3.org/2000/svg' height='48' viewBox='0 0 24 24' width='35'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M15 4v7H5.17L4 12.17V4h11m1-2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm5 4h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1z'/></svg></span></div>";
                }
                else{
                    echo "ttt";
                    $fav= "<div class='border-bottom'><span><button id='fav' class='tto' style='fill:red;color:red;' onclick='fav()'><span id='plus'><svg  id='like' xmlns='http://www.w3.org/2000/svg' height='68' viewBox='0 0 24 24' width='40'><path d='M0 0h24v24H0z' fill='none'/><path d='M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z'/></svg></span> </button></span><span id='comment'><svg xmlns='http://www.w3.org/2000/svg' height='70' viewBox='0 0 24 24' width='35'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M22 4c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4zm-2 13.17L18.83 16H4V4h16v13.17zM13 5h-2v4H7v2h4v4h2v-4h4V9h-4z'/></svg></span></span><span id='viewcomments'><svg xmlns='http://www.w3.org/2000/svg' height='48' viewBox='0 0 24 24' width='35'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M15 4v7H5.17L4 12.17V4h11m1-2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm5 4h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1z'/></svg></span></div>";
                }

                $u_id= $f[0];
                $u_s= "select * from user where id=$u_id";
                $u_q= mysqli_query($conn,$u_s);
                $u_f= mysqli_fetch_array($u_q);
                $name= $u_f[1];
                $views= $f[7];
                $type= $f[4];
               
                if($u_f[10] == True){
                    $img= '<img class="img" src="data:image/png;base64 , '.base64_encode($u_f[10]).'">';
                }
                else{
                    $img= '';
                }
                $r= $svg[$type];
                echo " <div class='border-bottom' id='user'><p>$img<span><a  href=user.php?id=$u_f[0] id='name'>  $name</a> <div id='stat'> <span id='type'> <svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'><path d='M0 0h24v24H0z' fill='none'/><path d='M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z'/></svg>$type  </span>  <span id='views'><svg xmlns='http://www.w3.org/2000/svg' enable-background='new 0 0 24 24' height='24' viewBox='0 0 24 24' width='24'><g><rect fill='none' height='24' width='24' y='0'/></g><g><path d='M19.48,12.35c-1.57-4.08-7.16-4.3-5.81-10.23c0.1-0.44-0.37-0.78-0.75-0.55C9.29,3.71,6.68,8,8.87,13.62 c0.18,0.46-0.36,0.89-0.75,0.59c-1.81-1.37-2-3.34-1.84-4.75c0.06-0.52-0.62-0.77-0.91-0.34C4.69,10.16,4,11.84,4,14.37 c0.38,5.6,5.11,7.32,6.81,7.54c2.43,0.31,5.06-0.14,6.95-1.87C19.84,18.11,20.6,15.03,19.48,12.35z M10.2,17.38 c1.44-0.35,2.18-1.39,2.38-2.31c0.33-1.43-0.96-2.83-0.09-5.09c0.33,1.87,3.27,3.04,3.27,5.08C15.84,17.59,13.1,19.76,10.2,17.38z'/></g></svg> <span id='number'>$views</span> </span>      </div></span>   </p>   </div>  <span></span>";
                echo "<h2>$f[2]</h2>";
                echo "<div class='border-bottom'>$f[3]</div>";
                echo '';
                echo $fav;
                echo "<div class='fd'>$f[5]  شكر</div>";
                //echo "<div class='collapse' id='collapseExample'><div class='card card-body'><span><input type='text' id='commenttext' placeholder='اكتب تعليق'><button onclick='comm()' id='comm'><svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'><path d='M0 0h24v24H0z' fill='none'/><path d='M2.01 21L23 12 2.01 3 2 10l15 2-15 2z'/></svg></button></span></div></div>";
                echo "<span><input type='text' id='commenttext' placeholder='اكتب تعليق'><button onclick='comm()' id='comm'><svg xmlns='http://www.w3.org/2000/svg' height='32' viewBox='0 0 24 24' width='32'><path d='M0 0h24v24H0z' fill='none'/><path d='M2.01 21L23 12 2.01 3 2 10l15 2-15 2z'/></svg></button></span>";
            }            
        }
    }


    public function viewcomment(){
        $n= 'a';
        $b= 'b';
        
       echo "<div id='allcomments'>";
        $conn =mysqli_connect("localhost","fadel2","fadel1234@","new");
        $s= "select * from comment";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $n_c= 0;
        while($f= mysqli_fetch_array($q)){
            if($f[1] == $this->id){
                $n_c++;
                $u_s= "select * from user where id=$f[2]";
                $u_q= mysqli_query($conn,$u_s);
                $u_f= mysqli_fetch_array($u_q);
                $name= $u_f[1];
                $views= $f[7];
                $type= $f[4];
                $r_s= "select * from reply";
                $r_q= mysqli_query($conn,$r_s);
                $r_f= mysqli_fetch_array($r_q);

               
                if($u_f[10] == True){
                    $img= '<img class="img2" src="data:image/png;base64 , '.base64_encode($u_f[10]).'">';

                }
                else{
                    $img= '';
                }
                $cid= $f[0];
                echo "<div id='allcomment' ><span>$img</span><span>$name</span><div id='comments'>$f[3]</div><button class='$n' id='dd' onclick='expandreply(this.className)'><svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M22 4c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4zm-2 13.17L18.83 16H4V4h16v13.17zM13 5h-2v4H7v2h4v4h2v-4h4V9h-4z'/></svg></button><button class='$b' id='bb' onclick='expandreplies(this.className)'><svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'><path d='M0 0h24v24H0V0z' fill='none'/><path d='M15 4v7H5.17L4 12.17V4h11m1-2H3c-.55 0-1 .45-1 1v14l4-4h10c.55 0 1-.45 1-1V3c0-.55-.45-1-1-1zm5 4h-2v9H6v2c0 .55.45 1 1 1h11l4 4V7c0-.55-.45-1-1-1z'/></svg></button> </div>";
                echo" <div id='$n' class='tt'><h1><input type='text' id='$cid' class='replytext' name='reply' placeholder='اكتب رد'><button class='$cid' id='subreply' onclick='rep(this.className)' name='subreply' ><svg xmlns='http://www.w3.org/2000/svg' height='28' viewBox='0 0 24 24' width='28'><path d='M0 0h24v24H0z' fill='none'/><path d='M2.01 21L23 12 2.01 3 2 10l15 2-15 2z'/></svg></button></h1></div>";
                echo "<div  id='$b' class='ro'>";
                $n_r= 0;
                while($r_f= mysqli_fetch_array($r_q)){
                    if($r_f[1] === $cid){
                        $n_r++;
                        $r_u_s= "select * from user where id=$r_f[3]";
                        $r_u_q= mysqli_query($conn,$r_u_s);
                        $r_u_f= mysqli_fetch_array($r_u_q);
                        $name= $r_u_f[1];
                        $reply= $r_f[4];
                        if($r_u_f[10] == True){
                            $img= '<img class="img3" src="data:image/png;base64 , '.base64_encode($r_u_f[10]).'">';
        
                        }
                        else{
                            $img= '';
                        }
                        
                        echo "<div ><span>$img</span><span>$name</span><div id='textreply'>$reply</div> </div>";
                       
                    }
                   
                }
                
                echo "</div>";
                if($n_r != 0){
                    echo "<div class='countrep'>$n_r رد</div>";
                }
                
                $b= "b".$b;
              
                
                
                
                
                //echo "<div ><input type='text' id='$cid' class='replytext' name='reply'><button class='$cid' id='subreply' onclick='rep(this.className)' name='subreply'><svg xmlns='http://www.w3.org/2000/svg' height='32' viewBox='0 0 24 24' width='32'><path d='M0 0h24v24H0z' fill='none'/><path d='M2.01 21L23 12 2.01 3 2 10l15 2-15 2z'/></svg></button></div>";
            }
            $n="a".$n;
           
            
        }
        
        echo "</div>";
        
        if($n_c != 0){
            echo "<div id='ffd'>$n_c تعليق</div>";
        }
        else{
            echo "<div class='ffd'>لا يوجد تعليقات</div>";
        }
       
    }

    public function related(){
        $conn =mysqli_connect("localhost","fadel2","fadel1234@","new");
        mysqli_set_charset($conn,"utf8"); 
        $u_s= "select * from writings where wid=$this->id";
        $u_q= mysqli_query($conn,$u_s);
        $u_f= mysqli_fetch_array($u_q);
        $t_arr= explode(' ', $u_f[2]);
       // print_r($t_arr);
        $s= "select * from writings";
        $q= mysqli_query($conn,$s);
        $f= mysqli_fetch_array($q);
        $top= array();
        while($f= mysqli_fetch_array($q)){
            $f_arr= explode(' ', $f[2]);
            if($f[4] === $u_f[4]){
                $n= 0;
                for($i = 0 ; $i < count($f_arr) ; $i++){
                    if(in_array($f_arr[$i], $t_arr)){
                        $n++;
                        //echo $n;
                    }
                }
                //echo "true";
                if($n != 0){
                    $top[$f[0]]= $n; 
                }                                            
            }

            

            
        }
        //print_r($top);
        echo "<main role='main' class='container' id='c' >

               
        <h6 class='border-bottom border-gray pb-2 mb-0'>نتائج البحث</h6>
       ";
            for($m = 0 ; $m < count($top) ; $m++){
                $conn =mysqli_connect("localhost","fadel2","fadel1234@","new");
                $t= array_keys($top);
                $tid= $t[$m];
                $s= "select * from writings where wid=$tid";
                $q= mysqli_query($conn,$s);
                $f= mysqli_fetch_array($q);
                $id= $f[1];
                $u_s= "select * from user where id=$id";
                $u_q= mysqli_query($conn,$u_s);
                $u_f= mysqli_fetch_array($u_q);
                $name= $u_f[1];
                if($m === count($top)){
                break;
                }
                elseif($m === 7){
                break;
                }
                if($u_f[10] == True){
                    $img= '<img class="img2" src="data:image/png;base64 , '.base64_encode($u_f[10]).'">';
    
                }
                else{
                    $img= '';
                }
                $text= $f[3];
                $title= $f[2];
                $type= $f[4];
               // echo $u_f[1]. $f[2].'</br>';
               // echo 'rr';
                echo "
                    
                    
                <div class='my-3 p-3 b-white rounded shadow-sm'>    
                <div class='border-bottom' id='user'><p> $img<span><a  href=user.php?id=$u_f[0]> $p_f[1]</a> <div>   <span id='views'>$views<span></span id='number'> مشاهدة </span>  <span id='type2'>$type</span>     </div></span>   </p>   </div>  <span></span>
                <div class='title'> <a href='text.php?tid=$f[0]'>$title<a></div>
                          
               
                </div>
                " ;  // show
            }
        //krsort($top);
        
       echo "true";
        //echo $t[1];
        
    }
   
    
    
}


$text= new showtext();
$text->id= $_GET['tid'];

$text->view();

$text->viewcomment();

$text->related();

?>
<?php 

$tid=$_GET['tid'];
?>

<!DOCTYPE html>
<html dir='rtl' lang='ar'>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">-->
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="floatig-labels.css">
        <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">
<title>text</title>
       
    </head>
    <style>
        body{
            text-align:right;
        }
        .img{
            width:100px;
            height:100px;
            border:2px solid white;
            border-radius:90px;
            position:relative;
            top:20px;
        }
        .img2{
            width:50px;
            height:50px;
            border:2px solid white;
            border-radius:90px;
            position:relative;
           
        }
        .img3{
            width:40px;
            height:40px;
            border:2px solid white;
            border-radius:90px;
            position:relative;
           
        }
        #type2{
           position:relative;
           left:30px;
        }
        .tto{
            border:none;
            background-color:white;
            outline:none;
        }
        #plus{

        }
        #comment{
            position:relative;
            right:300px;
        }
        #textreply{
            width:200px;
            border:2px solid whitesmoke;
            border-radius:30px;
            background-color:whitesmoke;
            margin-right:5px;

        }
        #reply{
            text-align:center;
        position:asolute;
       
        border:1px solid black;
        font-family: 'Cairo', sans-serif;
        color:black;
        width:200px;
        height:29px;
        border-radius:25px;
        margin-top:70px;
        margin-right:40px;
        outline:none;
        }
        #commenttext{
            position:asolute;
            text-align:center;
            background-color:whitesmoke;

       border:1px solid white;
       font-family: 'Cairo', sans-serif;
       color:black;
       width:240px;
       height:40px;
       border-radius:25px;
       margin-top:70px;
       margin-right:0px;
       outline:none;
        }
        #collapseExample{
            border:none;
            height:30px;
        }
        .replytext{
            border:2px solid whitesmoke;
            background-color:whitesmoke;
            margin-top:10px;
            border-radius:30px;
            text-align:center;
            width:230px;
            height:35px;
            font-size:large;

        }
        .ro{
            display:none;
        }
        #allcomment{
            margin-top:5px;
        }
        #viewcomments{
            position:relative;
            right:700px;*/
        }
        #addcomm{
            border:2px solid whtiesmoke;
            background-color:whitesmoke;        
            border-radius:10px;
            }
        #addcomm2{
            border:2px solid whtiesmoke;
            background-color:whitesmoke;
            margin-right:5px;
            border-radius:10px;

        }
        #bb{
        border:none;
        background-color:white;
        outline:none;
    }

    #dd{
        border:none;
        background-color:white;
        outline:none;
    }

    h2{
        font-family: 'Cairo', sans-serif;

    }
    div{
        font-family: 'Cairo', sans-serif;
       
    }
    #c{
        position:relative;
        top:95px;
    }
    .tt{
        display:none;
    }
    #comments{
        border:2px solid whitesmoke;
        background-color:whitesmoke;
        max-width:290px;
        min-width:100px;
        border-radius:70px;
        padding-right:5px;
    }
    #subreply{
        border:none;
        background-color:white;
    }
   a{
       color:black;
   }
   #stat{
       font-size:small;
   }
   #views{
       position:relative;
       right:100px;
   }
   a.visited{
       color:black;
   }
   #user{
       font-size:small;
   }
   #number{
       font-size:large;
       margin-top:6px;
   }
   #name{
       font-size:x-large;
   }
   .container{
    position:absolute;
        top:100px;
   }
   #container2{
       idth:300px;
      
   }
   .countrep{
       position:relative;
      
   }
   #addrep{
       border:2px solid white;
       background-color:whitesmoke;
       border-radius:30px;
       width:95px;

   }
   #addrep2{
    border:2px solid whitesmoke;
       background-color:whitesmoke;
       border-radius:30px;
       width:355px;
       margin-right:30px;
   }
   #comm{
       background-color:white;
       outline:none;
       border:none;
   }
   .liko{
       
       fill:red;
       color:red
   }
   fd{
       position:relative;
       right:105px;
   }
   #ffd{
       position:absolute;
       right:175px;
       top:257px;
   }
   @media only screen and (min-width:594px){
       #container2{
           position:relative;
           left:0px
       }
   }
   @media only screen and (min-width:160px) and  (max-width: 340px){
    #viewcomments{
        right:170px;
    }
    #comment{
        right:90px;
    }
    #commenttext{
        position:relative;
        right:0;
    }
    #container{
        border:2px solid black;
        border-top:none;
        border-bottom:none;
        position:relative;
        top:65px;
       /* width:150%;*/
    }
   }
    @media only screen and (min-width:341px) and  (max-width: 593px){
        #container{
        border:2px solid black;
        border-top:none;
        border-bottom:none;
        position:relative;
        top:65px;
       /* width:150%;*/
    }
    #viewcomments{
        right:205px;
    }
    #comment{
        right:105px;
    }
    #commenttext{
        position:relative;
        right:0;
    }
    

    }
    </style>
    <body class='rtl'>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f4434afc5b64e2b"></script>
<?php echo "gg" ?>
    <h1 id='start'>cg</h1>
    <h1 id='start2'>cg</h1>
    <script>
    $(document).ready(function(){
       // $('h1').hide();
        //$('body').show(400);
        $('#allcomments').hide();
        $('#commenttext').hide();
        $('#comm').hide();
      
       // $('#reply').hide();
       // $('#reply').toggle(400);
        $('#comment').click(function(){
            $('#commenttext').toggle(400);
            $('#comm').toggle(400);
            $('#fav').toggleClass('ttr');
        })
        $("#viewcomments").click(function(){
            $("#allcomments").toggle(700);
        })
        //var ans= document.getElementById('ans').value;
        //var f= 'vjhvh';
        $('#fav').click(function(){
            $('#fav').toggleClass('liko');
           // $(this).toggleClass("liko");
           // ("#plus").innerHTML= 'vhj <svg xmlns="http://www.w3.org/2000/svg" height="68" viewBox="0 0 24 24" width="40"><path d="M0 0h24v24H0z" fill="none"/><path d="M0 0h24v24H0z" fill="none"/><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>';
        })
        
    })
    </script>
    <script>
    
    function expandreply(tr){
       //document.write(tr);
        yy= document.getElementById(tr);
        if(yy.style.display == "block"){
            yy= document.getElementById(tr).style.display="none";
        }
        else{
            yy= document.getElementById(tr).style.display="block";
        }
     // y.style.display="none;"
       
   // ys= y.innerHTML;
    //document.write(ys); 
        
    }

    function expandreplies(rr){
       //document.write(tr);
        y= document.getElementById(rr);
        if(y.style.display == "block"){
            y= document.getElementById(rr).style.display="none";
        }
        else{
            y= document.getElementById(rr).style.display="block";
        }
     // y.style.display="none;"
       
   // ys= y.innerHTML;
    //document.write(ys); 
        
    }

   function comment(){
    const xhr = new XMLHttpRequest();
         var comment= document.getElementById('comment').value;
         var out= document.getElementById('out');
         var out2= out.innerHTML;
         out2= out2 + comment;
         console.log(out2);
         xhr.onload = function(){
              const server = document.getElementById("start").val;
              server.innerHTML = this.responseText;
              document.write("<p>this.responseText</p>");
          }; 
          const params= new URLSearchParams(window.location.search);
      var get= params.get('tid');
      //document.write(get);
          xhr.open("post", "user_proccess.php",true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.send("aid=" + get + "&" + "ticket=comment" + "&" + "query=" + comment);
         // xhr.send('name=' + element );
         
          
   }

   function addview(){
    const xhr = new XMLHttpRequest();
         var comment= document.getElementById('comment').value;
         xhr.onload = function(){
              const server = document.getElementById("start").val;
              server.innerHTML = this.responseText;
              document.write("<p>this.responseText</p>");
          }; 
          const params= new URLSearchParams(window.location.search);
      var get= params.get('tid');
      //document.write(get);
          xhr.open("post", "user_proccess.php",true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.send("aid=" + get + "&" + "ticket=view2");
         // xhr.send('name=' + element );
         
          
   }
addview();

   function comm(){
    var comment= document.getElementById('commenttext').value;
       var rr= document.getElementById("allcomments");
       
       rr.innerHTML = rr.innerHTML + "<div>"+ "<span id='addcomm'>تعليقك</span>" + "<span id='addcomm2'>" + comment + "</span>"  + "</div>";
    const xhr = new XMLHttpRequest();
         
         xhr.onload = function(){
              const server = document.getElementById("start").val;
              server.innerHTML = this.responseText;
              document.write("<p>this.responseText</p>");
            
          }; 
          const params= new URLSearchParams(window.location.search);
      var get= params.get('tid');
      //document.write(get);
          xhr.open("post", "user_proccess.php",true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.send("aid=" + get + "&" + "ticket=comment" + "&" + "query=" + comment);

         
         // xhr.send('name=' + element );
         
          
   }



function rep(te){
    var e= document.getElementById(te).value; 
    var ro= document.getElementsByClassName("ro");
       var ri= ro[0];
       ri.innerHTML = ri.innerHTML + "<div><span  id='addrep'>ردٌك</span>" + "<span id='addrep2'>" + e + "</span></div>"  ;
             //  var replyid= getElementById(commid)
    const xhr = new XMLHttpRequest();
        
         xhr.onload = function(){
              const server = document.getElementById("start").val;
              //server.innerHTML = this.responseText;
              //document.write("<p>this.responseText</p>");
          }; 
          const params= new URLSearchParams(window.location.search);
      var get= params.get('tid');
      //document.write(get);
          xhr.open("post", "user_proccess.php",true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
         
            xhr.send("aid=" + get + "&" + "ticket=reply" + "&" + "query=" + e + "&" + "cid=" + te);

          }
          
         // xhr.send('name=' + element );
         
          
   
//rep();


function fav(){
    const xhr = new XMLHttpRequest();
       /*  var fav= document.getElementById("#fav");
         var infav= fav.innerHTML;
         document.write(infav);
         var dark= "<svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'><path d='M0 0h24v24H0z' fill='none'/><path d='M0 0h24v24H0z' fill='none'/><path d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z'/></svg>";
         var border= "<svg xmlns='http://www.w3.org/2000/svg' height='24' viewBox='0 0 24 24' width='24'><path d='M0 0h24v24H0z' fill='none'/><path d='M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z'/></svg>";
         if(infav === dark){
             fav.innerHTML= border;
         }
         else{
             fav.innerHTML= dark;
         }*/
         xhr.onload = function(){
              const server = document.getElementById("start").val;
             // server.innerHTML = this.responseText;
             // document.write("<p>this.responseText</p>");
          }; 
          const params= new URLSearchParams(window.location.search);
      var get= params.get('tid');
      //document.write(get);
          xhr.open("post", "user_proccess.php",true);
          xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
          xhr.send("aid=" + get + "&" + "ticket=fav");
         // xhr.send('name=' + element );
         
          
   }
 
    
    </script>
      </div>

      <nav class="navbar fixed-top "style="background-color:white;display:flex;height:75px;padding-bottom:0px;">
          <a class="navbar-brand" href="#"><img src="IMG_٢٠٢٠٠٧٢٧_٢٣٠٥٣٦.jpg" alt="logo" style="position:relative;top:-11px;width:80px;height:80px;position:asolute;"></a>
                      
            <span class='shadow-sm' style='position:relative;top:-11px;border:2px solid white;border-radius:40px;'>
          <a href='factory.php'>  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="47" viewBox="0 0 24 24" width="47"><g><rect fill="none" height="24" width="24"/></g><g><g><path d="M19,9.3V4h-3v2.6L12,3L2,12h3v8h6v-6h2v6h6v-8h3L19,9.3z M17,18h-2v-6H9v6H7v-7.81l5-4.5l5,4.5V18z"/><path d="M10,10h4c0-1.1-0.9-2-2-2S10,8.9,10,10z"/></g></g></svg>
    </a>
            </span>
           <!-- <span>
                <svg xmlns="http://www.w3.org/2000/svg" style="color:black;background-color:blac;" width="35" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>



            </span>-->
            <span class='shadow-sm' style='position:relative;top:-11px;border:2px solid white;border-radius:100px;width:50px;'>
           <a href='search.php'> <svg xmlns="http://www.w3.org/2000/svg" height="45" viewBox="0 0 24 24" width="40"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
    </a>


            </span>
            
           
            <button  class="navbar-toggler p-0 border-0 shadow-sm" type="button" data-toggle="offcanvas" style='position:relative;border:2px solid white;top:-11px;'>
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
