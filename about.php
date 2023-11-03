<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <title>About Salil Debnath</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
    <style>
        body {
            background: #FBEAEB;
        }

        .container {
            margin-top: 7%;
        }

        .single-team {
            position: relative;
            width: auto;
            height: 500px;
            background-size: cover;
            background-position: center;
            overflow: hidden;
            box-shadow: 15px 15px 30px rgba(0, 0, 0, 0.3);
        }

        .single-team:before {
            content: "";
            width: 100%;
            height: 100%;
            background: #161619;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: all .35s ease 0s
        }

        .single-team:hover:before {
            opacity: 1
        }

        .single-team .content {
            width: 90%;
            height: 90%;
            position: absolute;
            top: 5%;
            left: 5%
        }

        .single-team .content:after,
        .single-team .content:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            transition: all .7s ease 0s
        }

        .single-team .content:before {
            border-bottom: 10px double rgba(255, 255, 255, .5);
            border-top: 10px double rgba(255, 255, 255, .5);
            transform: scale(0, 1);
            transform-origin: 0 0 0
        }

        .single-team .content:after {
            border-left: 10px double rgba(255, 255, 255, .5);
            border-right: 10px double rgba(255, 255, 255, .5);
            transform: scale(1, 0);
            transform-origin: 100% 0 0
        }

        .single-team:hover .content:after,
        .single-team:hover .content:before {
            opacity: 1;
            transform: scale(1);
            transition-delay: .15s
        }

        .single-team h3 {
            font-size: 31px;
            font-weight: 700;
            color: #fff;
            margin: 160px 0;
            opacity: 0;
            transform: translate3d(0, -50px, 0);
            transition: transform .5s ease 0s;
            text-align: center;
            line-height: 1.4;
            font-family: 'Alfa Slab One', cursive;
            text-transform: uppercase;
        }

        .single-team h3 span {
            font-family: 'Montserrat', sans-serif;
            font-size: 18px;
            display: block;
            letter-spacing: 5px;
            opacity: .5;
        }

        .single-team:hover h3 {
            opacity: 1;
            transform: translate3d(0, 0, 0)
        }

        @media (max-width: 991px) {
            .single-team {
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ffcccc;">
        <div class="container-fluid">
            Salil Debnath
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php" target="_blank">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="form.php" class="nav-link" target="_blank">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="single-team" style="background-image: url(aboutpage1.jpg);">
                    <div class="content">
                        <h3>Salil Debnath <span>Software engineer</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="single-team" style="background-image: url(aboutpage2.jpg);">
                    <div class="content">
                        <h3>Web Developer <span>Certification<br>John Hopkins Uni.</span></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="single-team" style="background-image: url(aboutpage3.jpg);">
                    <div class="content">
                        <h3>Python Developer <span>Certifiation<br>Google Python<br>Bootcamp</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>