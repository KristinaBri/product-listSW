<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">
    <title>Product Add</title>
    <style>
        body {
            font-family: 'Comic Neue', cursive;
        }
        hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }
    </style>
</head>

<body>

<div class="container mt-4">
    <div class="row mx-auto">
        <div class="col-md-8">
            <h1>Product Add</h1>
        </div>
        <div class="col-md-4 mt-3 text-end">
            <a class="btn btn-secondary btn-lg me-3" href="#">Save</a>
            <a class="btn btn-secondary btn-lg me-3" href="#">Cancel</a>
            <a class="btn btn-outline-dark btn-lg" href="index.php">
                <i class="fa-solid fa-house-user"></i>
            </a>
        </div>
    </div>


    <hr class="mb-5">


    <form action="" method="POST">
        <input type="hidden" name="action" value="insert">

        <div class="col-md-4 mt-3">
            <input name="sku" type="text" class="form-control mb-4" id="sku" placeholder="SKU:">
            <input name="name" type="text" class="form-control mb-4" id="name" placeholder="Name:">
            <input name="price" type="text" class="form-control mb-4" id="price" placeholder="Price:">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select product type:</option>
                <option value="dvd">DVD</option>
                <option value="furniture">Furniture</option>
                <option value="book">Book</option>
            </select>


        </div>
    </form>


    <div class="fixed-bottom">
        <hr>
        <p class="text-muted text-center">
            This should be a footer
        </p>
    </div>
</div>



<script src="https://kit.fontawesome.com/4de3af1323.js" crossorigin="anonymous"></script>
</body>
</html>