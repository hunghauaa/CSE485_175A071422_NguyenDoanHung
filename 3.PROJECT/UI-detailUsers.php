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
                    <th>Firtname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Created</th>
                    <!-- <th>Updated</th> -->
                    <!-- <th>Activation_code</th> -->
                    <!-- <th>Actived</th> -->
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once('controller/users/detailUser.php');
                    while($row = mysqli_fetch_assoc($result)){
                ?>
                    
                <tr>
                    <td scope="row"><?php echo $row['id'];?></td>
                    <td> <?php echo $row['firtname'];?></td>
                    <td> <?php echo $row['lastname'];?></td>
                    <td> <?php echo $row['email'];?></td>
                    <td style="width: 100px !important" > <?php echo $row['password'];?></td>
                    <td> <?php echo $row['role'];?></td>
                    <td> <?php echo $row['create_at'];?></td>
                    <!-- <td> <?php echo $row['update_at'];?></td> -->
                    <!-- <td> <?php echo $row['activation_code'];?></td> -->
                    <!-- <td> <?php echo $row['actived'];?></td> -->
                    <td><a href="http://localhost/web/3.PROJECT/UI-editUser.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td><a href="http://localhost/web/3.PROJECT/controller/users/deleteUser.php?id=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
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