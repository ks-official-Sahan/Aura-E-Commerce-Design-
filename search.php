<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <!-- Search -->
    <div class="col-12 mb-3">
        <div class="row justify-content-center align-items-center">

            <div class="col-12 col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" />
                    <select class="form-select" style="max-width: 200px;">
                        <option>All Categories</option>
                        <option>Analogue Electronics</option>
                        <option>Computer Electronics</option>
                        <option>Digital Electronics</option>
                        <option>Phone & Accessories</option>
                    </select>
                    <button class="btn btn-primary" type="button" onclick="basicSearch();"><i class="bi bi-search"></i></button>
                    <!-- <button class="btn btn-dark">Advanced</button> -->
                </div>
            </div>

            <div class="col-lg-2 col-12 text-center">
                <a href="advancedSearch.php" class="fw-bold link-info text-decoration-none">Advanced Search</a>
            </div>

        </div>
    </div>
    <!-- Search -->

    <script src="script.js"></script>
</body>

</html>