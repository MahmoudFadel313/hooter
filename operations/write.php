<?php 
session_start();
ob_start();

?>
<!DOCTYPE html>
<html dir='rtl'>
        <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity= "sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If"  crossorigin= "anonymous">
        <link type="text/css" rel="stylesheet" href="bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="floaing-labels.css">
                <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet">  
                
                <title>CKEditor</title>
                <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/translations/ar.js"></script>
                <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>

</head>
<style>
    
div{
    font-family: 'Cairo', sans-serif;
    height:500px;
}
h2{
    font-family: 'Cairo', sans-serif;
    text-align: center;
    

}
button{
        font-family: 'Cairo', sans-serif;
        margin-top:50px;
        background-color:black;
        color:white;
}
</style>
        <body>
        <span style="color:white">gdfgdd</span>
            <h2>
                
            
            (:  اكتب مقالك 
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="36" viewBox="0 0 24 24" width="36"><g><rect fill="none" height="24" width="24"/><g><path d="M19,5v14H5V5H19 M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3L19,3z"/></g><path d="M14,17H7v-2h7V17z M17,13H7v-2h10V13z M17,9H7V7h10V9z"/></g></svg>
            </h2>
            <span style="color:white">gdfgdd</span>
                <!--<div id="editor"></div>-->
                <form method="post">
                <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
                <h2>(: اكتب عنوان المقال </h2>
                <textarea name="title" id="" class="form-control" cols="30" rows="5" style="margin-top:50px;border:1px solid black;"></textarea>
                <select name="field">
                        <option >مال واعمال</option>
                        <option >تاريخ</option>
                        <option >طب الحيوي</option>
                        <option >تقنية وتكنولوجيا</option>
                        <option >علوم طبيعية</option>
                        <option >فنون</option>
                        <option >شخصيات</option>
                        <option >خواطر واراء</option>
                        <option >سياسة</option>
                        <option >تنمية ذاتية</option>
                        
                </select>
                <button type='submit' name="subblog" class="btn btn-lg btn-primary btn-block" id="sub">نشر</button>
</form>
                <script>
                    
                        ClassicEditor
                        
                                .create( document.querySelector( '#editor' ) ,{
                                    language: {
                                        ui: 'ar',
                                        content: 'ar'

                                    }
                                })
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
<?php 
if(isset($_POST['subblog'])){
        $title= $_POST['title'];
        $text= $_POST['editor'];
        $field= $_POST['field'];
        $id= $_SESSION['id'];
        
        $conn= mysqli_connect("localhost","fadel2","fadel1234@","new");
        $i= "insert into writings values('0',$id,'$title','$text','$field','0','0','0')";
        $q= mysqli_query($conn,$i);
        if($q == True){
                echo "true";

        }
        else{
                echo "false";
                echo mysqli_error($conn);
        }

}

?>

<script src="jquery-3.4.1.min.js">    
        </script>
        <script src="bootstrap.min.js"></script>
        </body>
</html>