<?php
    session_start();
    if(!isset($_SESSION['role'])){
        Header("Location:http://localhost/web/3.PROJECT/UI-login.php");
    }
    include('header.php');
    require_once('controller/config.php');
    if(isset($_GET)){
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if($result){
            $result = mysqli_fetch_assoc($result);
        }
    }
?>
    <main class="container mt-4 mb-4">
        <form action="/web/3.PROJECT/controller/users/editUser.php" method="post">
            <label for="txtEmail">ID:</label>
            <input class="form-control" name="id" type="text" value="<?php echo $result['id']; ?>"readonly>
            <div class="form-group">
                <label for="txtEmail">First Name:</label>
                <input type="text" class="form-control" name="txtFirtName" aria-describedby="emailHelpId" value ="<?php echo $result['firtname']?>">
            </div>
            <div class="form-group">
                <label for="txtEmail">Last Name:</label>
                <input type="text" class="form-control" name="txtLastName" aria-describedby="emailHelpId" value ="<?php echo $result['lastname']?>">
            </div>  
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" name="txtEmail" aria-describedby="emailHelpId" placeholder="abc@xvy.com" value ="<?php echo $result['email']?>">
            </div>
            <div class="form-group">
                <label class="form-check-label">Role</label><br>
                <input type="radio"  name="role" id="" value="User" checked>
                <label class="form-check-label mr-4">User</label>
                <input type="radio" name="role" id="" value="Admin" >
                <label class="form-check-label">Admin</label>
            </div>
            <input class="btn btn-success" type="submit" value=" Save ">
            <input class="btn btn-secondary" type="submit" value="Cancel">

        </form>
    </main>
<?php
    include('footer.php');
?>