<?php 
echo $_POST['ticket'];
echo "true1";
echo "true12";
echo "true13";
echo "true14";
if($_POST['ticket'] === 'comment'){
    echo "true1";
}
else{
    echo "false2";
}
?>
<?php 
session_start();
ob_start();



class system{
    public $id;
    public $aid;
    public $query;


    public function add(){
        $id= $_SESSION['id'];
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
      
       if($_POST['ticket'] === 'follow'){
            $s= "select * from follow where fid=$this->id and  cid=$this->aid";
        }
        elseif($this->query === 'view'){
            $s= "select * from view where uid=$this->id and wid=$this->aid";
        }
        elseif($this->query === 'fav'){
            $s= "select * from fav where uid=$this->id and wid=$this->aid";
        }
        elseif($_POST['ticket'] === 'reply'){
            $s= '';
            $aid= (int)$this->aid;
            $u_id= (int)$_SESSION['id'];
            $cid= (int)$this->index;
            $i= "insert into reply values('0',$cid,$aid,$u_id,'$this->query')";
            $q= mysqli_query($conn,$i);
            if($q){
                echo "true2";
            }
            else{
                $e= mysqli_error($conn);
                header("location: user.php?p=" .mysqli_error($conn));
            }
        }
        elseif($_POST['ticket'] === 'comment'){
            $s= '';
            $aid= (int)$this->aid;
            $u_id= (int)$this->id;

            $i= "insert into comment values('0',$aid,$u_id,'$this->query')";
            $q= mysqli_query($conn,$i);
            if($q){
                echo "true";
            }
            else{
                echo mysqli_error($conn);
                header("location: user.php");
            }
        }
        
        $s_q= mysqli_query($conn,$s);
        @$f= mysqli_fetch_array($s_q);  
        if(@$f[0] == True && $s != ''){
            if($_POST['ticket'] === "follow"){
                $d= "delete from follow where fid=$this->id and  cid=$this->aid";
                $d_q= mysqli_query($conn,$d);
            }
            if($_POST['ticket'] === "fav"){
                $d= "delete from fav where uid=$this->id and wid=$this->aid";
                $d_q= mysqli_query($conn,$d);
            }
            if($d_q == False){
                header("location: tt.php");
            }
            echo "followed";
        }
        elseif($this->query === 'follow'){
            $uid= (int)$this->id;
            $aid= (int)$this->aid;
            $i= "insert into follow values($uid,$aid)";
            $q= mysqli_query($conn,$i);
        }
        elseif($this->query === 'view'){
            $i= "insert into view values('0',$this->id,$this->aid)";
            $q= mysqli_query($conn,$i);
            if($q){
                echo "true";
            }
            else{
                echo "false";
            }
            $s= "select * from writings where wid=$this->aid";
            $s_q= mysqli_query($conn,$s);
            $f= mysqli_fetch_array($s_q);
            if($f[0] == True){
                $n= (int)$f[7] + 1;
                $u= "update writings set views=$n where wid=$this->aid";
                $u_q= mysqli_query($conn,$u);
            }
        }      
        elseif($this->query === 'fav'){
            $i= "insert into fav values('0',$this->id,$this->aid)";
            $q= mysqli_query($conn,$i);
            $s= "select * from writings where wid=$this->aid";
            $s_q= mysqli_query($conn,$s);
            $f= mysqli_fetch_array($s_q);
            if($f[0] == True){
                $n= (int)$f[$this->index] + 1;
                $u= "update writings set likes=$n where wid=$this->aid";
                $u_q= mysqli_query($conn,$u);
            }
        }
        
       
  
    }
   public function issure(){
       $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
       $s= "select * from follow where fid=$this->id and cid=$this->aid";
       $q= mysqli_query($conn,$s);
       $f= mysqli_fetch_array($q);
       if($f[0] == True){
           echo "تتابعه ";

       }
       else{
           echo "";
       }
   }

   


    public function count(){
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $s= "select * from $this->query";
        if($this->query === 'view'){
            $s= "select * from writings";
        }
        $q= mysqli_query($conn,$s); 
        $f= mysqli_fetch_array($q);
        $n= 0;
        while($f= mysqli_fetch_array($q)){
            if($f[$this->index] === $this->aid){
                $n= (int)$f[7]+ $n;
                
            }
        }
        if($n != 0){
            echo $n;
        }
        else{
            echo 'empty';
        }
       
    }
}


$follow= new system();
$follow->id= $_SESSION['id'];
@$follow->aid= $_POST['aid'];
$follow->query= 'follow';
$follow->index= 1;

$u_follow= new system();
@$u_follow->id= $_POST['aid'];
$u_follow->aid= $_SESSION['id'];
$u_follow->query= 'follow';
$u_follow->index= 1;

$comment= new system();
$comment->id= $_SESSION['id'];
@$comment->aid= $_POST['aid'];
@$comment->query= $_POST['query'];
$comment->index= '';

$reply= new system();
$reply->id= $_SESSION['id'];
@$reply->aid= $_POST['aid'];
@$reply->query= $_POST['query'];
@$reply->index= $_POST['cid'];      // comment id

$fav= new system();
$fav->id= $_SESSION['id'];
@$fav->aid= $_POST['aid'];
$fav->query= 'fav';
$fav->index= 5;

$view= new system();
$view->id= $_SESSION['id'];
@$view->aid= $_POST['aid'];
$view->query= 'view';
$view->index= 1;

if($_POST['ticket'] === 'follow'){
    $follow->add();
}
if($_POST['ticket'] === 'u_count_follow'){
    $u_follow->count();
}
if($_POST['ticket'] === 'count_follow'){
    $follow->count();
}
if($_POST['ticket'] === 'comment'){
    $comment->add();
}
if($_POST['ticket'] === 'fav'){
    $fav->add();
}
if($_POST['ticket'] === 'checkfav'){
    $fav->check();
}
if($_POST['ticket'] === 'view1'){
    $view->count();
}
if($_POST['ticket'] === 'view2'){
    $view->add();
}
if($_POST['ticket'] === 'check'){
    $follow->issure();
}
if($_POST['ticket'] === 'reply'){
    $reply->add();
}
?>