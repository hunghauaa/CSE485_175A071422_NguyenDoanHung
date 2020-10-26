<?php 
    session_start();
    if(!isset($_SESSION['role']) && !isset($_SESSION['id'])){
        Header("Location:http://localhost/web/3.PROJECT/UI-login.php");
    }
    include('header.php');
    require_once('controller/config.php');
    if(isset($_GET)){
        $id = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $result = mysqli_fetch_assoc($result);
        }
    }
?>
<form action="controller/posts/editPost.php" method="post" class="container mt-4 mb-4" enctype="multipart/form-data">
    <div class="form-group">

            <label for="txtEmail">ID:</label>
            <input class="form-control" name="id" type="text" value="<?php echo $result['id']; ?>"readonly>
    </div>
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="txtTitle" id="" aria-describedby="helpId" placeholder="" value="<?php echo $result['title']; ?>">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" name="txtDescription" id="" aria-describedby="helpId" placeholder=""value="<?php echo $result['description']; ?>">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <textarea class="form-control" name="txtContent" id="" rows="3" ><?php echo $result['content']; ?></textarea>
    </div>
    <!-- <div class="form-group">
        <label for="">Thumbnail:</label><br>
        <input type="file" class="form-control-file" name="fileToUpload" id="" placeholder="" aria-describedby="fileHelpId" value="<?php echo 'C:/xampp/htdocs/web/3.PROJECT/'.$result['image']; ?>">
    </div> -->
    <div class="form-group">
        <label > Published</label> <br>
        <label > Yes</label>
        <input type="radio"  name="published" id="" value="1" checked>
        <label > No</label>
        <input type="radio"  name="published" id="" value="0" >

    </div>
            <button class="btn btn-success" type="submit" aria-label="">Upload</button>
            <a name="" id="" class="btn btn-secondary" href="http://localhost/web/3.PROJECT/UI-detailPost.php" role="button">Cancel</a>
</form>
<?php
    include('footer.php')
?>
<!-- 
<form action="controller/posts/createPost.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form> -->
