<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Cover Image</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Publish Date</th>
            </tr>
        </thead>
        <tbody>
            <? foreach ($books as $book) {
            ?>
                <tr>
                    <th scope="row"><?$book['id']?></th>
                    <td><?$book['title']?></td>
                    <td><?$book['cover_image']?></td>
                    <td><?$book['author']?></td>
                    <td><?$book['publisher']?></td>
                    <td><?$book['publish_date']?></td>
                </tr>
            <? }
            ?>

        </tbody>
    </table>
</body>

</html>