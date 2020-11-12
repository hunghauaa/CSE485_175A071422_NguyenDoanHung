<?php
require_once('header.php');
    if(isset($_GET['id'])){
        require_once('controller/config.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM posts WHERE id = '$id'";
        $result = mysqli_query($conn,$sql);
        if ($result){
            $row = mysqli_fetch_assoc($result);
        }else{
            die("Không lấy được bài viết1");
        }
    }
?>
<div class="container mt-4 mb-4">
    <h1 style="font-size:2rem"><?php echo $row['title']; ?></h1>
    <span class="content">
    <?php echo $row['description']; ?>
    <img src="<?php echo $row['image']; ?>" alt="image" class="mt-4 mb-4" width="90%" height="auto"> <br>    
    <?php echo $row['content']; ?>
    </span>
</div>
<h6 class="container d-flex justify-content-end">
    <?php 
            $user_id = $row['user_id'];
            $sql1 ="SELECT users.firtname,users.lastname FROM users, posts WHERE users.id=posts.user_id AND user_id='$user_id' ORDER BY firtname DESC LIMIT 0,1";
            $result1 =mysqli_query($conn,$sql1);
            if($result1){
                $row1 = mysqli_fetch_assoc($result1);
            }
            echo 'Tác giả: '.$row1['firtname'];
        ?>
</h6>
<?php
    require_once('footer.php');
?>
