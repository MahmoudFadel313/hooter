<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width" initial-scale="1.0"/>
        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="floating-labels.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet"> 
        <meta name="theme-color" color="#009879">  
            
  

</head>
<style>
body{
    background-color:white;
}
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
<body>


</body>
</html>



<?php
class comp{
    public $order;


    public function show(){
        echo '
        <form class="form-signin" method="post" enctype="multipart/form-data">
        <div >
                
            <div class="text-center mb-4">

        ';
        $edu= '
        <label for="custom-select">   اختر المستوي الدراسي
        <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 0 24 24" width="28"><path d="M0 0h24v24H0z" fill="none"/><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
        
        
        </label>
        <select class="custom-select" name="level" id="input" Style="border:1px solid blac;" onchange="rand()">
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
        
        ';
        $co= '
        <label for="custom-select">  اين تعيش
  
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="26px" height="26px"><path d="M0 0h24v24H0z" fill="none"/><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>   </label>
          <select class="custom-select" name="live" id="input" Style="border:1px solid blac;" onchange="rand()">
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
        
        ';

        $bio= '
        
        <div class="form-group">
        <label for="exampleFormControlTextarea">
          
        
      
        اكتب نبذة عنك
      
        <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 24 24" width="30"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"/></svg>
      </label>
        <textarea style="border:1px solid black;color:black;" name="info" id="exampleFormControlTextarea" class="form-control" cols="" rows="3"></textarea>
</div>
        
        ';

        if($_GET['order'] === "edu"){
            echo $edu;
        }
        elseif($_GET['order'] === "co"){
            echo $co;
        }
        elseif($_GET['order'] === "bio"){
            echo $bio;
        }


        echo "</div></form>";
    }
}
$get= new comp();
$get->order= "";

$get->show();

?>