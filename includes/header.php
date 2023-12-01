<?php

if(isset($_GET['id']))
{

    $_SESSION['city_id'] = $_GET['id'];

    $query = 'UPDATE members SET
        city_id = "'.$_GET['id'].'"
        WHERE id = "'.$_SESSION['id'].'"
        LIMIT 1';
    $result = mysqli_query($connect, $query);

    set_message('City has ben selected');

    redirect('dashboard.php');

}


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=PAGE_TITLE?> | Flow</title>

    <link href="styles.css" type="text/css" rel="stylesheet">

</head>
<body>

    <div id="container">

        <div class="center">

            <span style="font-size: 90px;">&#8660;</span>

            <?php if(isset($_SESSION['id'])): ?>

                <?php

                $query = 'SELECT *
                    FROM cities
                    WHERE member_id = "'.$_SESSION['id'].'"
                    ORDER BY NAME';
                $result = mysqli_query($connect, $query);

                ?>

                <select name="city_id" id="city">

                    <?php while($city = mysqli_fetch_assoc($result)): ?>

                        <option value="<?=$city['id']?>" <?=$city['id'] == $_SESSION['city_id'] ? 'selected' : ''?>>
                            <?=$city['name']?>
                        </option>

                    <?php endwhile; ?>

                </select>

                <script>

                (function () {

                    let city = document.getElementById('city');
                    city.addEventListener('change', function(e){

                        let city_id = e.target.value;
                        window.location = '/dashboard.php?id=' + city_id;

                    });

                })();

                </script>


            <?php endif; ?>

        </div>

        <hr>
