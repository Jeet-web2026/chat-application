<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Mind</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="images/chat-mind-logo-template.png">

    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- fontawesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" crossorigin="anonymous" />

    <!-- custom css link -->
    <link rel="stylesheet" href="chat-style.css">

    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;900&display=swap" rel="stylesheet">
</head>

<body>
    <div id="second-content">
        <h1 class="text-center text-uppercase fs-4 mb-3">Hello buddy!</h1>
        <form class="shadow sign-up-form" style="height: 100%;" action="configaration/insert-data.php" method="POST">
            <p class="text-center py-2 mt-2 text-light bg-danger rounded">Error</p>
            <div class="mb-3">
                <label for="fullname" class="form-label fw-medium">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-medium">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mob" class="form-label fw-medium">Mobile Number</label>
                <input type="number" class="form-control" id="mob" name="mob" required>
            </div>
            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label fw-medium">Password</label>
                <div class="d-flex">
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass" required>
                    <button id="showhide" type="button" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-eye"></i>
                    </button>
                </div>
            </div>
            <div class="d-grid gap-1 mt-4">
                <button id="continueBtn" class="btn btn-outline-primary" type="submit">Continue</button>
            </div>
            <p id="redirection-btn" class="text-center mt-3">Already Signed?
                <a class="text-decoration-none" href="index.php" style="cursor: pointer;">Login Now</a>
            </p>
        </form>
    </div>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>

    <!-- custom js link -->
    <script src="main.js"></script>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#showhide').click(function() {
                const input = $('#exampleInputPassword1');
                const Icon = $(this);
                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    Icon.html('<i class="fa-solid fa-eye-slash"></i>');
                } else {
                    input.attr('type', 'password');
                    Icon.html('<i class="fa-solid fa-eye"></i>');
                }
            });

            $('.bg-danger').hide();
        });
    </script>
</body>

</html>