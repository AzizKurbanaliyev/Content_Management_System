<?php
if(isset($_POST['create_user'])){

    $user_firstname = escape($_POST['user_firstname']);
    $user_lastname =escape($_POST['user_lastname']);
    $user_role = escape($_POST['user_role']);
    /*$post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];*/
    $username= escape($_POST['username']);
    $user_email = escape($_POST['user_email']);
    $user_password = escape($_POST['user_password']);
    //$post_date = date('d-m-y');
    //move_uploaded_file($post_image_temp, "../images/$post_image");
    $user_password = escape(password_hash($user_password, PASSWORD_BCRYPT, array('cost' => 10)));

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role,username,user_email,user_password) ";

    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}', '{$user_password}') ";

    $create_user_query = mysqli_query($connection, $query);
    confirm($create_user_query);

    echo "<h4 class='text-center'>User successfully created: " . "<a href='users.php'>View users</a></h4>" ;

}

?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="author">First name</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
        <label for="post_status">Last name</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>

    <select name="user_role" id="">
        <option value="subscriber">Select options</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>
        
    </select>

    <!--<div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div>-->
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    <div class="form-group">
        <label for="user_password">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add user">
    </div>

</form>