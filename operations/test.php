<?php 
echo "tttt";
$conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
$d= 0;
$t= "insert into user values('0','gdf','',$d,'','','','','','','')";
$i= 75;
$s= "select * from user where id=$i";
$q= mysqli_query($conn,$s);
$f= mysqli_fetch_array($q);
echo $f[1];
if($f[0] == False){
    echo mysqli_error($conn);
}
else{
    echo "true";
}
?>