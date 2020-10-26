<?php 
    session_start();
    if(!isset($_SESSION['role']) && !isset($_SESSION['id'])){
        Header("Location:http://localhost/web/3.PROJECT/UI-login.php");
    }
    include('header.php');
?>
<form action="controller/posts/createPost.php" method="post" class="container mt-4 mb-4" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="txtTitle" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" name="txtDescription" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <textarea class="form-control" name="txtContent" id="" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="">Thumbnail:</label><br>
        <input type="file" class="form-control-file" name="fileToUpload" id="" placeholder="" aria-describedby="fileHelpId">
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
