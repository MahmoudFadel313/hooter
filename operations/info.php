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
        <link type="text/css" rel="stylesheet" href="floating-labels.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet"> 
        <meta name="theme-color" color="#009879">  
              <title>

        <title>

        </title>
        <style>
        option{
          font-family: 'Cairo', sans-serif;

        }
        label{
          font-family: 'Cairo', sans-serif;
        }
        div{
          font-family: 'Cairo', sans-serif;
        }
        </style>

    </head>
    <body style="background-color:white;">
   <script>
  function rand()
  {
      var a=document.getElementById('input').value;
      if(a = 'ثانوي'){
        var array= ['هندسه كهرباء','هندسة ميكانيكية'];
               

      }
      else if(a === 'التعليم الذاتي'){
        var array= [];
      }
      else if(a = 'بكالوريوس'){
           array= ['الطب','الهندسة','العلوم','الحقوق','الاداب'];

      }
      else if(a = 'دكتوراه'){
         array= ['تصميم','كتابة مقالات','عمل علي الانترنت','التجارة والاعمال','تطوير المواقع والتطبيقات','حرف يدوية','التسويق والاعلان','حرف اخري'];

      }
      else{
           array =[];
      }
      var string= '';
      for(i = 0;i < arr.length;i++){
        string =string+'<option value='arry[i]'>'+array[i]+'</option>';

      }
     string = "<select name='hn'>"+string+"</select>";
    document.getElementById('output').innerHTML= string;

  }
   
  
   </script>

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





    <form class="form-signin" method="post" enctype="multipart/form-data">
                <div >
                        
                    <div class="text-center mb-4">
                    <p id="h3" class="h3 mb-3 font-weight-normal">(: اختياري</p>


                    <div class="form-group">
          <label for="exampleFormControlTextarea">
            
          
        
          اكتب نبذة عنك
        
          <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
        </label>
          <textarea style="border:1px solid black;color:black;" name="info" id="exampleFormControlTextarea" class="form-control" cols="" rows="3"></textarea>
</div>
<div>
اختر صورة لك

<svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 10l-.94 2.06L9 13l2.06.94L12 16l.94-2.06L15 13l-2.06-.94zm8-5h-3.17L15 3H9L7.17 5H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 14H4V7h4.05l.59-.65L9.88 5h4.24l1.24 1.35.59.65H20v12zM12 8c-2.76 0-5 2.24-5 5s2.24 5 5 5 5-2.24 5-5-2.24-5-5-5zm0 8c-1.65 0-3-1.35-3-3s1.35-3 3-3 3 1.35 3 3-1.35 3-3 3z"/></svg>

</div>
    <div class="custom-file" >
        <input type="file" name="img" class="custom-file-input" id="customFile" style="width:200px;border:1px solid black;background-color:white;">
        <label class="custom-file-label" for="customFile"> choose</label>
      </div>
      <div style="color:white;">    cghcghc</div>
      <div>
          <label for="custom-select">   اختر المستوي الدراسي
          <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 0 24 24" width="28"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
          
          
          </label>
          <select class="custom-select" name='level' id="input" Style="border:1px solid blac;" onchange="rand()">
          <option>---اختر---</option>
        <option>التعليم الذاتي</option>
        <option>التعليم الثانوي</option>
        <option>العلوم الشرعية</option>
        <option>الهندسة</option>
        <option>الطب</option>
        <option>الاقتصاد</option>
        <option>التجارة والمال</option>
        <option>السياسة</option>
        <option>الفلسفة</option>
        <option>الحقوق</option>
        <option>اللغات</option>
        <option>العلوم الإنسانية</option>
        <option>علوم الحاسب</option>
        <option>الفنون</option>
        <option>العلوم</option>
        <option>السياحة وادارة الفنادق</option>
        <option>مؤهل صناعي</option>
        
        
      </select>
</div>
<div>
<div style="color:white;">    cghcghc</div>
<label for="custom-select">  اين تعيش
  
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="26px" height="26px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>   </label>
          <select class="custom-select" name='live' id="input" Style="border:1px solid blac;" onchange="rand()">
          <option>---اختر---</option>          <option>اليمن</option>
          <option>فلسطين</option>
          <option>سوريا</option>
          <option>مصر</option>
          <option>السعودية</option>
          <option>الامارات</option>
          <option>الكويت</option>
          <option>السودان</option>
          <option>ليبيا</option>
          <option>تونس</option>
          <option>الجزائر</option>
          <option>الاردن</option>
          <option>عمان</option>
          <option>قطر</option>
          <option>البحرين</option>
</select>
</div>


      <div style="color:white;">    cghcghc</div>
      <button class="btn btn-lg btn-primary btn-block" id="sub" type="submit" name="suboption" style="color:white;background-color:black;" >  التالي &raquo;</button>

      

     

     
</div>
</div>
</form>
<?php 
 $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
 mysqli_set_charset($conn,"utf8");  
if(isset($_POST['suboption'])){
      $level= $_POST['level'];
      $bio= $_POST['info'];
      $country= $_POST['live'];
      $photo = addslashes(file_get_contents($_FILES['img']['tmp_name']));
      $id= $_SESSION['id'];
    $u= "update user set level='$level' , photo='$photo' , country='$country' , info='$bio'  where id='$id'";
    $q= mysqli_query($conn,$u);
    // $q= mysqli_query($conn,"UPDATE new.user SET level='$level' , photo='$photo' , country='$country' ,  info='$bio' WHERE id=$id");
    if($q == True){
      header("location: user.php");
        echo "true";
    }
    else{
        echo mysqli_error($conn);
        echo "false";
    }
  }



?>


<?php 
class insert{
    public $bio;
    public $level;
    public $photo;

    public function update(){
        $id= $_SESSION['id'];
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $u= "update users set level='$this->level',photo='$this->photo',info='$this->bio',where id=$id";
        $q= mysqli_query($conn,$u);
        if($q == True){
            echo "true";
        }
        else{
            echo mysqli_error($conn);
            echo "false";
        }
    }

   
}
 @$input = new insert();
   @$input->bio= $_POST['info'];
   @$input->level= $_POST['level'];
   @$input->photo= addslashes(file_get_contents($_FILES['img']['tmp_name']));

   if(isset($_POST['suboption'])){
     //  $input->update();
   }






?>

<script src="jquery-3.4.1.min.js">    
        </script>
        <script src="bootstrap.min.js"></script>
        <script>
       
        
        </script>
            
    </body>
</html>