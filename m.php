<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />


<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js'></script>

  <script src="https://cdn.tiny.cloud/1/73xafzbya18h22nstsf9irqq57ms48v3z1myo455zspyq2iy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script src=""></script>
<style>
   body {
      text-align: center;
    }
    div#editor {
      width: 81%;
      margin: auto;
      text-align: left;
    }
    .ss {
      background-color: red;
    }
    textarea{
        height:600px;
    }
</style>
</head>
<body>
<script src="require.js"></script>
  <script>
    $(function(){
      $('div#froala-editor').froalaEditor({
        language: 'ar'
      })
    });
    require.config({
      packages: [{
        name: 'froala-editor',
        main: 'js/froala_editor.min'
      }],
      paths: {
        // Change this to your server if you do not wish to use our CDN.
        'froala-editor': 'https://cdn.jsdelivr.net/npm/froala-editor@3.1.0'
      }
    });
  </script>
  <script>
    require([
      'froala-editor',
      'froala-editor/js/plugins/align.min'
    ], function(FroalaEditor) {
      new FroalaEditor('#edit')
    });
  </script>
  <form method="post">
  <textarea name="text" column='7'>
    Welcome to TinyMCE!
  </textarea>
  <input type="submit" name="sub">
  </form>
  <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',


      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      plugins: 'casechange',
  toolbar: 'casechange',
  plugins: "lists",
  toolbar: "numlist bullist"
    });
  </script>
  <?php 
  if(isset($_POST['sub'])){
    $text= $_POST['text'];
    $conn= mysqli_connect("localhost","root","1234","new");
    $i= "insert into user values('','$text','','','','','','','','','')";
    $q= mysqli_query($conn,$i);

  }
  $conn= mysqli_connect("localhost","root","1234","new");
  $s= "select * from user where id=4";
 $q= mysqli_query($conn,$s);
  $f= mysqli_fetch_array($q);
  echo $f[1];
  
  
  ?>
  <div id="editor">
    <div id='edit' style='margin-top:30px;'>
    </div>
  </div>
</body>
</html>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/css/froala_editor.css">

  

  <style>
   
  </style>
</head>

<body>
  

  