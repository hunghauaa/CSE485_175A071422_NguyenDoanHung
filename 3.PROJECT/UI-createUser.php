<?php
    include('header.php');
?>
    <main class="container mt-4 mb-4">
        <form action="/web/3.PROJECT/controller/users/createuser.php" method="post">
            <div class="form-group">
                <label for="txtEmail">First Name:</label>
                <input type="text" class="form-control" name="txtFirtName" aria-describedby="emailHelpId">
            </div>
            <div class="form-group">
                <label for="txtEmail">Last Name:</label>
                <input type="text" class="form-control" name="txtLastName" aria-describedby="emailHelpId">
            </div>  
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" name="txtEmail" aria-describedby="emailHelpId" placeholder="abc@xvy.com">
            </div>  
            <div class="form-group">
                <label for="txtEmail">Password:</label>
                <input type="password" class="form-control" name="txtPassword1" aria-describedby="emailHelpId">
            </div>  
            <div class="form-group">
                <label for="txtEmail">Password Confirm:</label>
                <input type="password" class="form-control" name="txtPassword2" aria-describedby="emailHelpId">
            </div>  
            <input class="form-control btn btn-success" type="submit" value="Sign in">
        </form>
    </main>
<?php
    include('footer.php');
?>