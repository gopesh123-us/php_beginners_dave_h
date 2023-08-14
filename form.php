<?php

var_dump($_GET);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>FORM Document</title>
</head>

<body>

    <body>
        <div class="container">
            <div class="row">
                <h2>Forms Post Button</h2>
                <div class="row g-3">
                    <form action='process_form.php' method="POST" class="form-group">
                        <label for="search">Name</label>
                        <input type="text" name="search" id="search" class="form-control input-lg">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control input-lg">
                        <button class="btn btn-info form-control">POST Button</button>
                    </form>
                </div>

            </div>

            <div class="row">
                <h2>Forms Get Button</h2>
                <form action='process_form.php' method="GET" class="form-group">
                    <label for="search">Name</label>
                    <input type="text" name="search" id="search" class="form-control input-lg">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control input-lg">
                    <button class="btn btn-warning mt-2 form-control">GET Button</button>
                </form>
            </div>
            <h1>
                <?php
                if (isset($_GET['search'])) {
                    echo $_GET['search'];
                }
                ?>
            </h1>
        </div>
    </body>

</html>