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
    <title>Product List</title>
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
            <h1>Product List</h1>
        </div>
        <div class="col-md-4 mt-3 text-end">
            <a class="btn btn-secondary btn-lg me-3" href="add.php">ADD</a>

            <form action="/delete-product" method="POST" id="delete-form" class="d-inline-block">
                <button for="delete-form" id="delete-product-btn" class="btn btn-secondary btn-lg me-3" type="submit">MASS DELETE</button>
            </form>


        </div>
    </div>


    <hr class="mb-5">

    <div class="row mx-auto">
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="form-check">
                            <label class="form-check-label text-center ms-5 pt-4">
                                <input form="delete-form" type="checkbox" class="delete-checkbox form-check-input" name={{ $product['sku'] }}>
                            </label>
                            <p>{{ $product->sku }}</p>
                            <p>{{ $product->name }}</p>
                            <p>{{ $product->price }}</p>
                            <p>{{ $product->type_id }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="fixed-bottom">
        <hr>
        <p class="text-muted text-center">
            This should be a footer
        </p>
    </div>
</div>


</body>
</html>
