<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
}

?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style2.css">
    <title>Forms</title>
    <meta charset="utf-8">
</head>

<body>

    <div class="container-fluid bg-light text-dark py-3">
        <header class="text-center">
            <h1 class="display-6">Welcome to form page</h1>

        </header>
    </div>
    <div class="container my-2 b     g-light w-50 text-light p-2">

        <form action="process_form.php" method="post" class="row g-3 p-3">
            <fieldset class="scheduler-border">
                <legend>Required</legend>
                <div>
                    text: <input type="text" class="form-control" name="name" placeholder="Gopesh Sharma" autofocus>
                </div>

                <div>
                    password: <input type="password" class="form-control" name="password">
                </div>

                <div>
                    tel: <input type="tel" class="form-control" name="telephone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                </div>
            </fieldset>


            <div>
                url: <input type="url" class="form-control" name="web_address">
            </div>

            <div>
                date: <input type="date" class="form-control" name="published_at">
            </div>

            <div>
                time: <input type="time" class="form-control" name="time_created">
            </div>

            <div>
                week: <input type="week" class="form-control" name="week">
            </div>

            <div>
                color: <input type="color" class="form-control" name="color">
            </div>

            <div>
                email: <input type="email" class="form-control" name="email">
            </div>

            <div>
                month: <input type="month" class="form-control" name="current_month">
            </div>

            <div>
                range: <input type="range" class="form-control" name="salary_range">
            </div>

            <div>
                hidden: <input type="hidden" class="form-control" name="hidden_value">
            </div>

            <div>
                number: <input type="number" class="form-control" name="number" min="10" max="100">
            </div>

            <div>
                search: <input type="search" class="form-control" name="search">
            </div>

            <div>
                datetime-local: <input type="datetime-local" class="form-control" name="local_date_time">
            </div>
            <div>
                state:
                <select class="form-control" name="state[]" multiple>
                    <optgroup label="East coast">
                        <option value="Virginia">VA</option>
                        <option value="Pennysylvania">PA</option>
                        <option selected value="Delaware">DE</option>
                        <option value="Washington">DC</option>
                        <option value="New York">NY</option>
                    </optgroup>
                    <optgroup label="Mid West">
                        <option value="Illinois">IL</option>
                        <option value="Texas">TX</option>
                        <option selected value="Utah">UT</option>
                    </optgroup>
                </select>
            </div>
            <fieldset>
                <div class="form-control">
                    <div>
                        <input type="checkbox" name="color[]" value="red" id="red_color" />
                        <label for="red_color">Red</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color[]" value="green" id="green_color" />
                        <label for="green_color">Green</label>
                    </div>
                    <div>
                        <input type="checkbox" name="color[]" value="blue" id="blue_color" />
                        <label for="blue_color">Blue</label>
                    </div>
                </div>
                <div class="form-control">
                    <label><input type="checkbox" name="visible" value="yes"> Visible</label>
                </div>
                <div>
                    textarea: <textarea name="longtext" class="form-control">Hello</textarea>
                </div>
            </fieldset>

            <button class="btn btn-primary" name="send_button" value="1">Send</button>
        </form>

    </div>


</body>

</html>