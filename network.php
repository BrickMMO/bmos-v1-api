<?php

include('includes/connect.php');
include('includes/config.php');
include('includes/functions.php');

secure('admin');

define('PAGE_TITLE', 'Dashboard');

include('includes/header.php');

?>

<h1>City Network</h1>

<?php check_message(); ?>

<hr>

<h2>Your IP is: <?=get_ip()?></h2>

<p>List of devices currently connected:</p>




<?php

include('includes/footer.php');