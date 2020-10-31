<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="container">
    <?php
        include "config.php";
    ?>
    <h3>Select data</h3>
    <h6 class="mt-5">Select Category <h6>
    <select class="form-control" id="sel_category">
    <option value="0">- Select -</option>
    <?php
    // Fetch Department
        $sql = "SELECT * FROM category";
        $category = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($category) ){
        $category_id = $row['category_id'];
        $category_title = $row['category_title'];
        // Option
        echo "<option value='".$category_id."' >".$category_title."</option>";
        }
    ?>
</select>
    </select >
        <h6  class="mt-4">Select Sub Category</h6>
    <select class="form-control" id="sel_subcategory">
        <option value="0">- Select -</option>
    </select>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./script.js"></script>
  </body>
</html>