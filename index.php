<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="containter-fluid d-flex">
        <div class="title">
            <div class="box">
                <h1>FaceBook</h1>
                <p>Connect with friends and the world <br> around you on Facebook.</p>
            </div>

        </div>
        <div class="form-input">
            <div class="box-form">
                <form action="" method="post">
                    <input type="email" name="email" id="" class="form-control" placeholder="Email or phone number"
                        required>
                    <input type="password" name="password" id="" class="form-control mt-3" placeholder="Password"
                        required>
                    <button type="submit" name="btnLogin" class="btn form-control mt-3">Log In</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if (isset($_POST['btnLogin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == 'sok@gmail.com' && $password === '123') {

        echo '
        <script>
            $(document).ready(function () {
                swal({
                    title: "Good job!",
                    text: "You clicked the button!",
                    icon: "success",
                    button: "Aww yiss!",
                }).then((result) => {
                    if(result){
                       location.href="user.php";
                    }
                }).catch((err) => {

                });
            })
        </script>
        ';
    } else {
        echo '
        <script>
            $(document).ready(function () {
                swal({
                    title: "Error !",
                    text: "Please try again",
                    icon: "error",
                    button: "Aww yiss!",
                });
            })
        </script>
        ';
    }
}
