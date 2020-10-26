<?php
    session_start();
    if(!isset($_SESSION['role'])){
        Header("Location:http://localhost/web/3.PROJECT/UI-login.php");
    }
    include('header.php');
?>
<div class="container-fluid" >

    <table class="table  mb-4" >
            <thead class="thead-dark">
                <tr><a href="http://localhost/web/3.PROJECT/UI-createUser.php" class="btn btn-success mt-4 mr-1">+ Add User</a></tr>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Published</th>
                    <th>User ID</th> 
                    <th>Created</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('controller/posts/detailPosts.php');
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    
                <tr>
                    <td style="width: 10px !important" scope="row"><?php echo $row['id'];?></td>
                    <td style="width: 10px !important"> <?php echo $row['title'];?></td>
                    <td style="width: 100px !important"> <?php echo $row['description'];?></td>
                    <td> <?php echo $row['content'];?></td>
                    <td style="width: 50px !important" > <img src="<?php echo $row['image'];?>" width="50px" height="50px"  alt=""> </td>
                    <td style="width: 10px !important"> <?php echo $row['published'];?></td>
                    <td style="width: 100px !important"> <?php echo $row['user_id'];?></td>
                    <td style="width: 10px !important"> <?php echo $row['created_at'];?></td>
                    <!-- <td> <?php echo $row['activation_code'];?></td> -->
                    <!-- <td> <?php echo $row['actived'];?></td> -->
                    <td style="width: 30px !important"><a href="http://localhost/web/3.PROJECT/UI-editPost.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td style="width: 30px !important" ><a href="http://localhost/web/3.PROJECT/controller/posts/deletePost.php?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div> 
<?php
    include('footer.php');

?>