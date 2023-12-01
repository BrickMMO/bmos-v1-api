<?php

include('includes/connect.php');
include('includes/config.php');
include('includes/functions.php');

if(isset($_SESSION['id'])) redirect('dashboard.php');

define('PAGE_TITLE', 'Login');

if(isset($_POST['submit']))
{
    

    $query = 'SELECT *
        FROM members
        WHERE email = "'.mysqli_real_escape_string($connect, $_POST['email']).'"
        AND password = "'.md5($_POST['password']).'"
        AND status = "active"
        LIMIT 1';
    $result = mysqli_query($connect, $query);

    /*
    print_r($query);
    print_r($result);
    die(mysqli_num_rows($result));
    */

    if(mysqli_num_rows($result))
    {
        
        $member = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $member['id'];

        // If member does not have a city, assign the most recent created city
        if(!$member['city_id'])
        {

            $query = 'SELECT *
                FROM cities
                WHERE member_id = "'.$member['id'].'"
                ORDER BY created_at
                LIMIT 1';
            $result = mysqli_query($connect, $query);

            $city = mysqli_fetch_assoc($result);

            $_SESSION['city_id'] = $city['id'];

            $query = 'UPDATE members SET
                city_id = "'.$city['id'].'"
                WHERE id = "'.$member['id'].'"
                LIMIT 1';
            $result = mysqli_query($connect, $query);

        }
        else
        {
            $_SESSION['city_id'] = $member['id'];
        }

        set_message('You have been logged in!', 'success');
        redirect('dashboard.php');

    }

}

include('includes/header.php');

?>

<h1>BrickMMO Login</h1>

<?php check_message(); ?>

<p>Welcome to the BrickMMO city application.</p>

<p>Login using your BrickMMO account:</p>

<hr>

<form method="post">

    <input type="hidden" name="submit" value="true">

    <label>
        Email:
        <br>
        <input type="email" name="email" value="brickmmo@gmail.com">
    </label>

    <label>
        Password:
        <br>
        <input type="password" name="password" value="password">
    </label>

    <input type="submit" value="Login">

</form>

<hr>

<div class="left">

    <h3>Testing Account:</h3>
    <p>Email: brickmmo@gmail.com<br>Password: password</p>

</div>


<hr>

<div class="left">

    <a href="forgot.php">Forgot Password</a>

</div>

<?php

include('includes/footer.php');