<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud - Omar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-2">
        <h1 class="text-white text-center h2">Laravel CRUD Operation</h1>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 mt-4">
                <div class="card  border-0 shadow-sm with-3d-shadow">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Crate Products</h3>
                    </div>
                    <form action={{route('products.store')}} method="post">
                        @csrf
                        <div class="card-body">
                            <div class=" mb-3 h5">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter Product Name" class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>
                            <div class=" mb-3 h5">
                                <label for="sku" class="form-label">Sku</label>
                                <input type="text" name="sku" id="sku" placeholder="sku" class="@error('name') is-invalid @enderror form-control">
                                @error('sku')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <div class=" mb-3 h5">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" name="price" id="price" placeholder="price" class="@error('name') is-invalid @enderror form-control">
                                @error('sku')
                                <p class="invalid-feedback">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="mb-3 h5">
                                <label for="desc" class="form-label">Description</label>
                                <textarea name="desc" id="desc" placeholder="Enter Description" class="form-control"></textarea>
                            </div>

                            <div class=" mb-3 h5">
                                <label for="File" class="form-label">Image</label>
                                <input type="file" name="File" id="File" placeholder="Enter Image" class="form-control">
                            </div>

                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-lg btn-dark text-white">Submit</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>