<!DOCTYPE html>
<?php include ('connection.php')?>
<html>
    <head>
        <meta charset="utf-8">
        <title>CKEditor</title>
        <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
    </head>
    <body>
    <form method="post">
        <textarea name="editor1"></textarea>
<input type="submit" name="submit" value="submit">
    </form >
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    </body>
</html>
<?php
if(isset($_POST['submit'])){
    echo 1;
    extract($_POST);
    $sql="INSERT INTO `blog`( `m_content`) VALUES ('$editor1')";
    $result=mysqli_query($con,$sql);


}


?>