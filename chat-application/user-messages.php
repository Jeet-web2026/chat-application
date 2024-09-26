<?php

include('configaration/database.php');
include('configaration/functions-data.php');

$messageview = displaymessageData();

$anotherresult = displayanotherData();


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
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

    <style>
        #messages-content .person-img {
            height: 40px;
            border: 2px solid #111;
            border-radius: 50%;
        }

        #messages-content .messages-body-content {
            height: 95vh;
            width: 35vw;
        }

        #messages-content .card-drop {
            height: 73vh;
            width: 35vw;
        }

        ::-webkit-scrollbar {
            width: 0px;
        }
    </style>
</head>

<body>

    <div id="messages-content">
        <div class="messages-body-content">
            <div class="card py-1 px-3 shadow" style="border-radius: 20px 20px 0px 0px;">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <a href="user.php"><i class="fa-solid fa-arrow-left text-dark"></i></a>
                        </div>
                        <img src="images/man-1.png" alt="person-1" class="img-fluid person-img me-2">
                        <div>
                            <?php

                            while ($anotherrow = mysqli_fetch_assoc($anotherresult)) {

                            ?>
                                <h5 class="text-capitalize mb-0"><?php echo $anotherrow['fullname'] ?></h5>
                                <p class="text-capitalize mb-0"><?php echo $anotherrow['mob'] ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card py-1 px-3 shadow card-drop" style="border-radius: 0px; background-color: #e7dfdf82;">
                <div class="card-body" style="overflow-y: scroll;">
                    <?php
                    $messages = mysqli_fetch_all($messageview, MYSQLI_ASSOC);

                    foreach ($messages as $currentMessage) {
                    ?>
                        <p class="text-light bg-dark p-3 fs-5 text-end w-50 ms-auto mb-0" style="border-radius: 20px 20px 0px 20px;">
                            <?php echo htmlspecialchars($currentMessage['messagedata']); ?>
                        </p>
                        <p class="ms-auto w-50 text-end" style="font-size: 15px;"><?php echo htmlspecialchars($currentMessage['date']) . ',' . ($currentMessage['currentday']) . ' ' . ($currentMessage['time']); ?></p>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <form action="configaration/message-data.php" method="POST" class="d-flex p-3" style="border: 1px solid grey; border-top: none; border-radius: 0px 0px 20px 20px;">
                <input id="meaase-box" name="message-content" type="text" placeholder="Enter your text here..." class="ps-2" style="width: 100%; border: 1px solid grey; border-radius: 0px 0px 0px 15px;">
                <button type="submit" class="btn btn-outline-dark px-3" style="border-radius: 0px 0px 20px 0px; border-color: grey;"><i class="fa-solid fa-paper-plane"></i></button>
            </form>
        </div>
    </div>

    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js link -->
    <script src="main.js"></script>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>