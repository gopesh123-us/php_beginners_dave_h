<?php require 'includes/header.php'; ?>

<form method="POST" class="form-group">
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            var_dump($_POST);
        }
        ?>
        <h2>New Article</h2>
        <div>
            <label for="title">Title</label>
            <input class="form-control w-25" type="text" name="title" id="title" placeholder="Enter title" />
        </div>
        <div>
            <label for="content">Content</label>
            <textarea class="form-control w-25" name="content" id="content" placeholder="Enter content"></textarea>
        </div>
        <div>
            <label for="published_at">Publication date and time</label>
            <input class="form-control w-25" type="datetime" name="published_at" id="published_at">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>
<?php require 'includes/footer.php'; ?>