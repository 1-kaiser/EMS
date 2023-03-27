<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMs</title>

    <link rel="icon" href="./assets/img/configuration.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./map_css/style.css">

</head>
<body>

    <!-- user/admin -->
    <div class="homepage">

        <nav>
            <div class="nav_container">
                <div class="nav_title">
                    <h4 data-aos="fade-up" class="title">EMS</h4>
                </div>
                <div class="nav_items"  data-aos="fade-up" data-aos-delay="400">
                    <a href="#dev">About Us</a>
                </div>
            </div>
        </nav>

        <div class="homepage_title">
            <div class="homepage_text">

                <h2 class="homepage_body_title" data-aos="fade-up" data-aos-delay="300">Employee Management System</h2>
                <p class="homepage_body" data-aos="fade-up" data-aos-delay="300">A useful system in the business industry that can assist the human resources 
                <br>department in managing their employees more efficiently. <br><br> login as:</p>

                <div class="row">
                    <div class="col">
                        <a href="../EMS/php/admin/login.php">
                            <img src="./assets/img/admin.png" alt="" data-aos="fade-up" data-aos-delay="500">
                            <p data-aos="fade-up" data-aos-delay="700">Admin</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="../EMS/php/employee/login.php">
                            <img src="./assets/img/user.png" alt="" data-aos="fade-up" data-aos-delay="700">
                            <p class="user" data-aos="fade-up" data-aos-delay="900">User</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="homepage_hero" data-aos="fade-up" data-aos-delay="600">
                <img src="./assets/img/hero.png" alt="">
            </div>
        </div>
    </div>

    <div class="dev" id="dev">
        
        <div class="dev_title" data-aos="fade-up">
            <h2>Developers</h2>
        </div>

        <div class="dev_body">
            <div class="row">

                <div class="col">
                    <img src="./assets/img/dev/arendain.jpg" alt="" class="card_pic" data-aos="fade-up">
                    <p data-aos="fade-up" data-aos-delay="200">Alexander Arendain</p>
                </div>

                <div class="col">
                    <img src="./assets/img/dev/empleo.jpg" alt="" class="card_pic" data-aos="fade-up" data-aos-delay="300">
                    <p data-aos="fade-up" data-aos-delay="400">Mark Ivan Empleo</p>
                </div>

                <div class="col">
                    <img src="./assets/img/dev/goto.jpg" alt="" class="card_pic" data-aos="fade-up" data-aos-delay="600">
                    <p data-aos="fade-up" data-aos-delay="600">Kevin Goto</p>
                </div>

                <div class="col">
                    <img src="./assets/img/dev/indita.jpg" alt="" class="card_pic" data-aos="fade-up" data-aos-delay="900">
                    <p data-aos="fade-up" data-aos-delay="800">Renz Daniel Indita</p>
                </div>

                <div class="col">
                    <img src="./assets/img/dev/punay.jpg" alt="" class="card_pic" data-aos="fade-up" data-aos-delay="1200">
                    <p data-aos="fade-up" data-aos-delay="1000">Emmanuel Punay</p>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/aos.js"></script>
    <script>
        AOS.init ({
            offset: 120,
            duration: 1000,
        });
    </script>
</body>
</html>