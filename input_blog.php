<head>

    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<form action="" method="post" enctype="multipart/form-data">
    post_by: <input type="text" name="post_by"><br><br>
   Blog Title: <input type="text" name="b_title"><br><br>
    Short discribtion: <input type="text" name="short_note"><br><br>

    Main Content: <textarea name="editor1"></textarea><br><br>
    category: <input type="text" name="category"  style="text-transform:uppercase"><br><br>
    feature image: <input type="file" name="f_Image"><br><br>

    <input type="submit" value="Submit" name="Submit">
</form>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
<?php
include ('connection.php');
if(isset($_POST['Submit'])){
    extract($_POST);
    $date=date("Y-m-d");
    $time=time();

    $fileName = $_FILES["f_Image"]["name"];
    move_uploaded_file($_FILES["f_Image"]["tmp_name"], "images/" . $fileName);

    $sql="INSERT INTO `blog`(`post_by`, `b_title`, `short_note`, `m_content`, `category`, `f_image`, `date`, `time`) VALUES ('$post_by','$b_title','$short_note','$editor1','$category','$fileName','$date','$time')";
    $result=mysqli_query($con,$sql);
}
?>