<?php 
    include('header.php');
?>
<!-- <form action="controller/posts/createPost.php" method="post" class="container mt-4 mb-4" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="form-group">
        <label for="">Content</label>
        <textarea class="form-control" name="" id="" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="">Thumbnail:</label><br>
        <input type="file" class="form-control-file" name="" id="" placeholder="" aria-describedby="fileHelpId">
    </div>
            <button class="btn btn-success" type="submit" aria-label="">Action</button>
            <a name="" id="" class="btn btn-secondary" href="#" role="button">Cancel</a>
</form> -->
<?php
    include('footer.php')
?>

<form action="controller/posts/createPost.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>
