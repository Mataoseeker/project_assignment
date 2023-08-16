<?php 

$username = $email = $password = '';
//initializing the username, email and password as empty strings

$errors = array('email' =>'', 'username' =>'', 'password' =>'');
//initializing the errors as an array

if(isset($_POST['submit'])){

//form validation
if(empty($_POST['email'])){
    $errors['email'] = 'An email is required <br />';
} else {
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'email must be a valid email address';
    }
}

if(empty($_POST['username'])){
    $errors['username'] =  'A username is required <br />';
} else {
    $username = $_POST['username'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $username)){     //matching the username to a regular expression
        $errors['username'] = 'username must be letters and spaces only';
    }
}

if(empty($_POST['password'])){
    $errors['password'] = 'Password is required <br />';
} else {
    $password = $_POST['password'];
    if(!preg_match('/^[a-zA-Z\s]+$/', $password)){    //matching the password to a regular expression
        $errors['password'] = 'Password must be letters';
    }
}


if(array_filter($errors)){      //checks for errors
    // echo 'errors in the form';
} else {
    // echo 'form is valid';
    header('Location: field.php');
}
} 
?>




<!DOCTYPE html>
<html lang="en">

<?php include('styling.php'); ?>

<section class="right">
        <a href="../index.php" class="waves-effect waves-light btn-small"> Go Home</a>
</section>

<section class="container grey-text">

    <form action="save_data.php" method="POST" class="grey lighten-4">
    <p class="center">ENTER YOUR LOGIN DETAILS</p>
        <label>Enter your username:</label>
        <input type="text" name="username" value="<?php echo $username ?>">
        <div class="red-text"><?php echo $errors['username']; ?></div>

        <label>Enter your email:</label>
        <input type="email" name="email" value="<?php echo $email ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>

        <label>Enter your password:</label>
        <input type="password" name="password" value="<?php echo $password ?>">
        <div class="red-text"><?php echo $errors['password']; ?></div>

        <div class="center">
            <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
</html>