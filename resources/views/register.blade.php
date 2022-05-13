<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <div class="col-12 vh-100">
        <div class="bg-warning w-100 h-50 d-inline-block d-flex justify-content-center align-items-center">
            <span class="material-icons text-secondary" style="font-size: 100px">
                image
            </span>
        </div>
        <div class="d-flex flex-column p-2 bd-highlight align-items-center px-5 position-absolute w-100 bottom-0 bg-white rounded-top-3">
            <h3>
                Register
            </h3>
            <p class="text-success">
                Create Your Account
            </p>
            <div class="form-floating mb-3 col-12">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating col-12">
                <input type="text" class="form-control" id="floatingCompanyCode" placeholder="Company Code">
                <label for="floatingCompanyCode">Company Code</label>
            </div>
            <div class="form-floating mb-3 col-12">
                <input type="password" class="form-control" id="floatingInput" placeholder="Password">
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating col-12">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm Password">
                <label for="floatingPassword">Conirm Password</label>
            </div>
            <button type="button" class="btn btn-primary col-8 my-3">Register</button>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>