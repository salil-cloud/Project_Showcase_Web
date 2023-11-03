<?php
include("userinfo.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #FBEAEB;
        }

        .form-area {
            padding-top: 7%;
        }

        .row.single-form {
            box-shadow: 0 2px 20px -5px rgba(0, 0, 0, 0.5);
        }

        .left {
            background: blueviolet;
            padding: 200px 98px;
        }

        .left h2 {
            font-family: poppins;
            color: #fff;
            font-weight: 700;
            font-size: 48px;
        }

        .left h2 span {
            font-weight: 100;
        }

        .single-form {
            background: #fff;
        }

        .right {
            padding: 70px 100px;
            position: relative;
        }

        .right i {
            position: absolute;
            font-size: 80px;
            left: -27px;
            top: 40%;
            color: #fff;
        }

        .form-control {
            border: 2px solid #000;
        }

        .right button {
            border: none;
            border-radius: 0;
            background: blueviolet;
            width: 180px;
            color: #fff;
            padding: 15px 0;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
        }

        .right button:hover {
            background-color: #252525;
        }


        /*responsive*/

        @media (min-width:768px) and (max-width:991px) {
            .right i {
                top: -52px;
                transform: rotate(90deg);
                left: 50%;
            }
        }

        @media (max-width:767px) {
            .left {
                padding: 90px 15px;
                text-align: center;
            }

            .left h2 {
                font-size: 25px;
            }

            .right {
                padding: 25px;
            }

            .right i {
                top: -52px;
                transform: rotate(90deg);
                left: 46%;
            }

            .right button {
                width: 150px;
                padding: 12px 0;
            }

        }

        /* Styles for the pop-up message */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #000;
        }

        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="form-area">
        <div class="container">
            <div class="row single-form g-0">
                <div class="col-sm-12 col-lg-6">
                    <div class="left">
                        <h2><span>Feedback/Contact</span> <br>form</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="right">
                        <i class="fa fa-caret-left"></i>
                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" id="form" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Message</label>
                                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="close-popup">&times;</span>
            <p>Thank you for your response!</p>
        </div>
    </div>
    <script>
        // Function to show the pop-up message
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
        }

        // Close the pop-up and redirect to index.html
        var closePopup = document.getElementById("close-popup");
        closePopup.onclick = function() {
            var popup = document.getElementById("popup");
            popup.style.display = "none";

            // Redirect to index.html
            window.location.href = "index.php";
        }
    </script>

</body>

</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $user_email_id = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
        $user_message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            echo "Please enter user name.";
        } elseif (empty($user_email_id)) {
            echo "Please enter your email id.";
        } elseif (empty($user_message)) {
            echo "Kindly enter a message";
        } else {
            $sql = "INSERT INTO user_info (user, email, message) VALUES ('$username', '$user_email_id', '$user_message')";
            mysqli_query($conn, $sql);
            echo '<script>showPopup();</script>';
        }
    }
    mysqli_close($conn);
?>