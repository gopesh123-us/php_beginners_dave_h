<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/style.css">
    <title>Add article</title>
    <script>
        $('#datetime').datetimepicker({
            format: 'yyyy-mm-dd hh:mm:ss'
        });
    </script>
</head>

<body>
    <div class="container-fluid bg-dark text-light py-3">
        <header class="text-center">
            <h2 class="display-2">CMS</h2>
            <h6 class="display-6">Add new article</h6>
        </header>
    </div>
    <section class="container my-2 bg-dark w-50 text-light p-2">
        <form action="new_article_process_form.php" method="POST" class="row g-3 p-3">
            <div class="row-md-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter article title" name="title" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="row-md-4">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control w-100" id="content" placeholder="Add content" name="content" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4">
                <label for="datetime" class="form-label">Date</label>
                <input type="date" class="form-control" id="datetime" name="published_at">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </section>

</body>

</html>