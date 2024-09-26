<?php


include('configaration/database.php');
include('configaration/functions-data.php');

$result = displayData();

$anotherresult = displayanotherData();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Chat</title>

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
        #chat-content .person-img {
            height: 40px;
            border: 2px solid #111;
            border-radius: 50%;
        }

        #chat-content .card {
            width: 40vw;
            border-radius: 20px;
        }

        ::-webkit-scrollbar {
            width: 0px;
        }

        a {
            text-decoration: none;
            color: #111;
        }
    </style>
</head>

<body>
    <div id="chat-content">
        <div class="card shadow border-0 px-2 py-3">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <img src="images/man-1.png" alt="person-1" class="img-fluid person-img me-2">
                        <div>
                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                <h5 class="text-capitalize mb-0"><?php echo $row['fullname'] ?></h5>
                                <p class="text-capitalize mb-0"><?php echo $row['mob'] ?></p>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div>
                        <a href="index.php" class="btn btn-outline-dark text-capitalize" style="border-radius: 0px;">logout</a>
                    </div>
                </div>
                <hr>
                <form class="d-flex mb-4" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius: 0px;">
                    <button id="searchButton" class="btn btn-outline-dark" type="button" style="border-radius: 0px;"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
                <div style="height: 400px; overflow: auto; padding: 0px 20px;">
                    <a href="user-messages.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex">
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
                            <div>
                                <p class="p-1 bg-success me-4 mt-3" style="border-radius: 50%;"></p>
                            </div>
                        </div>
                    </a>
                    <hr>
                </div>
            </div>
        </div>
    </div>


    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js link -->
    <script src="main.js"></script>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('#searchButton').click(function() {
                const searchBtn = $('#searchButton');
                const currentIcon = searchBtn.html();

                if (currentIcon.includes('fa-magnifying-glass')) {
                    searchBtn.html('<i class="fa-solid fa-xmark"></i>');
                } else {
                    searchBtn.html('<i class="fa-solid fa-magnifying-glass"></i>');
                }
            });

        });
    </script>

</body>

</html>