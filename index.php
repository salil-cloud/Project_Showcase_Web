<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Showcase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            /* Just once */
        }

        body {
            background: #FBEAEB;
            font-family: 'Josefin Sans', sans-serif;
        }

        .carousel-inner img {
            max-width: 100%;
            max-height: 99vh;
            /* This will maintain the aspect ratio of images */
        }

        .card-img-top {
            border-radius: 50px;
            padding: 20px;
        }

        .card {
            border-radius: 30px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        }

        .card-body {
            padding: 25px;
            margin-top: -15px;
        }

        .btn-primary {
            border-radius: 50px;
            width: 120px;
        }

        .btn-primary:hover {
            background-color: black;
            border: none;
        }

        /* Default styles for larger screens */
        .navbar {
            position: fixed;
            z-index: 1;
        }

        #carouselExampleCaptions {
            z-index: 0;
        }

        /* Media query for mobile screens */
        @media (max-width: 767px) {
            .navbar {
            position: relative;
            z-index: 1;
        }
            /* Apply margin-top only for mobile screens */
            #carouselExampleCaptions {
                margin-top: 0px;
                /* Adjust as needed */
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
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Homeimg.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>
                    <h3>Welcome to my project showcase website</h3>
                    </p>
                    <p>Access / Utilise / Share with you friends or colleagues</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/images2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>
                    <h3>File Whiz Windows Application</h3>
                    </p>
                    <p>File_Whiz simplifies file management, allowing users to effortlessly organize their files within selected directories.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/images3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <p>
                    <h3>Weather Application</h3>
                    </p>
                    <p>This Weather Applocation is Reponsive, Intuitive along with Modern UI</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" id="aboutus">About Me</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 ">
                    <img src="images/Myinfo.png" alt="About Us Image" class="img-fluid img-thumbnail	">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <br>
                    <p class="display-6"> I am Salil Debnath </p>
                    <p class="py-1">
                        I'm a software engineering student on a quest to learn various technologies.<br>
                        My journey so far has led me through C, C++, Java, HTML, CSS, and JavaScript.<br>
                        Currently, I'm diving into the world of Python and PHP.<br>
                        <br>
                        My hobbies revolve around keeping up with the latest technologies and reading<br>
                        extensively about them. I'm passionate about computer science and can engage<br>
                        in discussions about it for as long as needed.<br>
                        <br>
                        My ultimate goal is to become a successful software developer.<br>
                        I believe that my dedication to learning and my curiosity about<br>
                        new technologies will help me achieve that.
                    </p>
                    <a href="https://www.linkedin.com/in/salil-debnath-8530341a2/" target="_blank" class="btn btn-success">Explore More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-3">
            <h2 class="text-center" id="ProjectGallery">Project Gallery</h2>
        </div>
        <div class="py-3">
            <h3 class="text-center" id="weather_gallery">Weather Application</h3>
        </div>
        <div class="container-fluid h-100 d-flex align-items-center justify-content-center ">
            <div class="row gap-5">
                <div class="card py-2 " style="width: 25rem;">
                    <img src="images/goaimg.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Real time weather report of Goa city</h4>
                        </p>
                    </div>
                </div>
                <div class="card py-2" style="width: 25rem;">
                    <img src="images/moscowimg.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Get real time weather report of international cities like Moscow.<h4>
                                </p>
                    </div>
                </div>
                <div class="card py-2" style="width: 25rem;">
                    <img src="images/budapestimg.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">
                        <h4>Experience a mordern and reponsive UI</h4>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <section class="my-3 px-5">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/salil-cloud/Weather-Application" target="_blank">Git Repository</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Weather Application</h5>
                    <p class="card-text">Stay informed about the weather with our user-friendly weather app.
                        Get real-time updates on current weather conditions, forecasts, and more. Plan your
                        day with confidence, whether you're at home or traveling.
                        It's your reliable weather companion</p>
                    <a href="https://salil-cloud.github.io/Weather-Application/" target="_blank" class="btn btn-primary">Visit Website</a>
                </div>
            </div>
        </section>
        <section class="my-5">
            <div class="py-4">
                <h3 class="text-center" id="weather_gallery">File_Whiz Windows Application</h3>
            </div>
            <div class="container-fluid h-100 d-flex align-items-center justify-content-center ">
                <div class="row gap-5">
                    <div class="card py-2 " style="width: 25rem;">
                        <img src="images/filewhiz1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                            <h5>File_Whiz simplifies file management</h5>
                            <h6>allowing users to effortlessly organize and categorize their files within selected directories, enhancing efficiency and accessibility.</h6>
                            </p>
                        </div>
                    </div>
                    <div class="card py-2" style="width: 25rem;">
                        <img src="images/filewhiz2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                            <h5>Included a seperate tab to learn the working of File_Whiz application</h5>
                            </p>
                        </div>
                    </div>
                    <div class="card py-2" style="width: 25rem;">
                        <img src="images/filewhiz3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                            <h5>Experience a mordern and reponsive UI and also contact me for your feedback and recommendations.</h5>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <section class="my-3 px-5">
                <div class="card text-center">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://github.com/salil-cloud/File_Whiz" target="_blank">Git Repository</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">File_Whiz Windows/GUI Application</h5>
                        <p class="card-text">Empowering File Management with File_Whiz GUI Application: A Technical Journey.<br>I insist you to download and install our software and get first hand experience</p>
                        <a href="https://lnkd.in/djPQKsdK" target="_blank" class="btn btn-primary">Download Application</a>
                    </div>
                </div>
            </section>
        </section>

        <div class="container py-5">
            <h1 class="text-center">Tools utilized</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

                <div class="col">
                    <div class="card h-100">
                        <img src="images/pythonimg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Python and Tkinter</h5>
                            <p class="card-text">Python along with Tkinter library, which offers a robust framework for building graphical user interfaces.
                                I used both technologies to build File_whiz Application</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="images/ttkimg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ttkbootstrap</h5>
                            <p class="card-text">ttkbootstrap is a collection of modern, flat themes for tkinter/ttk.I used it while building File_Whiz app,
                                It's inspired by Bootstrap and has more than a dozen built-in dark and light themes.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="images/hcimg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">HTML5 <span>&#38;</span> CSS</h5>
                            <p class="card-text">HTML <span>&#38;</span> CSS</h2> in web development, particularly for building a weather application
                                and a restaurant portal website for structured content , styling and responsive design</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="images/bt5img.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap 5</h5>
                            <p class="card-text">Bootstrap is a framework for mobile-friendly web development. It helps developers build websites and web pages quickly and with a better UI.
                                I utilized its versatility in almost all my website.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="images/jsimg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JavaScript</h5>
                            <p class="card-text">JavaScript is a scripting language that developers use to create interactive web pages. It can be used on both the client-side and server-side.
                                I utilized thiz technology to build my weather application.</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100">
                        <img src="images/phpimg.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PHP</h5>
                            <p class="card-text">It's a server-side scripting language that's used to build websites and web applications. I utilized it to connect my client side website to the server side processing.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center" id="aboutus">Salutation</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 ">
                        <img src="images/thankyou.png" class="img-fluid" alt="...">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <br>
                        <p class="display-6">Dear Visitors</p>
                        <p class="py-3">
                            <br>Thank you for taking the time to explore my website and projects. Your interest and support mean a<br>
                            lot to me. To make my work even better, I would greatly appreciate your valuable feedback and reviews.<br>
                            Your insights will help me enhance my projects and deliver more value. Please don't hesitate to share<br>
                            your thoughts and suggestions with me. Together, we can create something remarkable!<br>
                            <br>Best regards,<br>
                            -SALIL DEBNATH<br>
                        </p>
                        <a href="form.php" class="btn btn-success">Click Here</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background: #FBEAEB;">
                © 2023 Copyright:
                <a class="text-dark" href="index.php">Salil Debnath</a>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>