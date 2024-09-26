<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Mind</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="images/chat-mind-logo-template.png">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css link -->
    <link rel="stylesheet" href="chat-style.css">

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

</head>

<body>
    <div id="main-content">
        <h1 class="text-center text-uppercase fs-4">welcome to chat mind</h1>
        <p class="text-center text-capitalize mb-0">have a good day!</p>
        <div class="d-flex justify-content-center align-items center">
            <hr class="my-3" style="width: 50%;">
        </div>
        <form id="loginForm" class="shadow login-form" action="authentication/auth.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Email address</label>
                <input name="login-email" type="email" class="form-control" id="exampleInputEmail1"  style="border-radius: 20px;" required>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label fw-medium">Password</label>
                <div class="d-flex">
                    <input type="password" class="form-control" id="exampleInputPassword1" name="login-password" style="border-radius: 20px 0px 0px 20px;" required>
                    <button id="showhide" type="button" class="btn btn-outline-secondary" style="border-radius: 0px 20px 20px 0px;"><i class="fa-solid fa-eye"></i></button>
                </div>
            </div>
            <div class="d-grid gap-1">
                <button class="btn btn-outline-primary" type="submit" style="border-radius: 20px;">Continue to chat</button>
            </div>
            <p id="redirection-btn" class="text-center mt-3">Noy yet signed up? <a class="text-decoration-none" href="sign-up.php" style="cursor: pointer;">Signup Now</a></p>
        </form>
    </div>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js link -->
    <script src="main.js"></script>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#showhide').click(function() {
                const input = $('#exampleInputPassword1');
                const Icon = $('#showhide');
                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    Icon.html('<i class="fa-solid fa-eye-slash"></i>');
                } else {
                    input.attr('type', 'password');
                    Icon.html('<i class="fa-solid fa-eye"></i>');
                }
            });

        });
    </script>

</body>

</html>