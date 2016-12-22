<head>

    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
</head>
<?php
include ('connection.php');
extract($_POST);
extract($_GET);
$sql="select * from blog WHERE id=$id";
$result=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($result)){
?>
<form action="" method="post" enctype="multipart/form-data">
    post_by: <input type="text" name="post_by" value="<?php echo $row['post_by']?>"><br><br>
   Blog Title: <input type="text" name="b_title" value="<?php echo $row['b_title']?>"><br><br>
    Short discribtion: <input type="text" name="short_note" value="<?php echo $row['short_note']?>"><br><br>

    Main Content: <textarea name="editor1" value="<?php echo $row['m_content']?>"></textarea><br><br>
    category: <input type="text" name="category"  style="text-transform:uppercase" value="<?php echo $row['category']?>"><br><br>
    feature image: <input type="file" name="f_Image" value="<?php echo $row['f_image']?>"><br><br>

    date: <input type="text" name="date"  style="text-transform:uppercase" value="<?php echo $row['date']?>"><br><br>
    time: <input type="text" name="time"  style="text-transform:uppercase" value="<?php echo $row['time']?>"><br><br>
    <input type="submit" value="Submit" name="Submit">
</form>
    <?php }?>
<script>
    CKEDITOR.replace( 'editor1');
    //CKEDITOR.instances.editor1.getData();
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