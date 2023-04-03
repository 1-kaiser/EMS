<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMS</title>

    <link rel="icon" href="./assets/img/configuration.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/aos.css">
    <link rel="stylesheet" href="./map_css/style.css">

</head>

<style>
    body {
        background-image: url("./assets/img/stacked-peaks-haikei.svg");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>

    <!-- homepage -->
    <div class="homepage">

        <!-- About Us -->
        <nav>
            <div class="nav_container">
                <div class="nav_items"  data-aos="fade-up" data-aos-delay="400">
                    <a href="../EMS/php/about_us/abtus.php">About Us</a>
                </div>
            </div>
        </nav>

        <div class="homepage_title">
            <div class="homepage_text">

                <h2 class="homepage_body_title" data-aos="fade-up" data-aos-delay="300"><span id="ems"></span></h2>
                <p class="homepage_body" data-aos="fade-up" data-aos-delay="300">A useful system in the business industry that can assist the human resources 
                <br>department in managing their employees more efficiently. <br><br> login as:</p>

                <!-- admin sign in modal codes below -->
                <div class="row">
                    <div class="col">
                        <a href="" data-bs-toggle="modal" data-bs-target="#admin">
                            <img src="./assets/img/admin.png" alt="" data-aos="fade-up" data-aos-delay="500">
                            <p data-aos="fade-up" data-aos-delay="700">Admin</p>
                        </a>
                    </div>

                    <!-- employee sign in modal codes below -->
                    <div class="col">
                        <a href="" data-bs-toggle="modal" data-bs-target="#employee">
                            <img src="./assets/img/user.png" alt="" data-aos="fade-up" data-aos-delay="700">
                            <p class="user" data-aos="fade-up" data-aos-delay="900">Employee</p>
                        </a>
                    </div>
                </div>
            </div>
            <img src="./assets/img/hero.gif" alt="" class="hero-pic" data-aos="fade-up" data-aos-delay="600">
        </div>
    </div>

    <!-- modals -->
    <div class="modals">

        <!-- modal admin-sign in -->
        <div class="modal1 modal modal-sm fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Admin Sign In</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="" method="">
                        <div class="mb-3">
                            <label for="Username" class="mb-2">Username</label>
                            <input type="text" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="mb-2">Password</label>
                            <input type="password" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Sign In</button>
                </div>
                </div>
            </div>
        </div>

        <!-- modal employee-sign in -->
        <div class="modal modal-sm fade" id="employee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Employee Sign In</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="" method="">
                        <div class="mb-3">
                            <label for="Username" class="mb-2">Username</label>
                            <input type="text" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="mb-2">Password</label>
                            <input type="password" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="signup-btn">
                    <p class="">or <a href="" data-bs-target="#admin-signup" data-bs-toggle="modal">Sign Up</a></p>
                    </div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Sign In</button>
                </div>
                </div>
            </div>
        </div>

        <!-- employee signup -->
        <div class="emp-signup modal modal-sm fade" id="admin-signup" tabindex="-1" aria-labelledby="admin-signup" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-4">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Employee Sign Up</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <form action="" method="">

                        <div class="mb-3">
                            <label for="Email" class="mb-2">Email</label>
                            <input type="email" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                        
                        <div class="mb-3">
                            <label for="Username" class="mb-2">Username</label>
                            <input type="text" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                        <div class="mb-3">
                            <label for="Password" class="mb-2">Password</label>
                            <input type="password" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                        <div class="mb-3">
                            <label for="cPassword" class="mb-2">Confirm Password</label>
                            <input type="password" class="form-control shadow-none rounded-4 border-dark">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Sign Up</button>
                </div>
                </div>
            </div>
        </div>

    </div>


    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="./assets/js/aos.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script>
        AOS.init ({
            offset: 120,
            duration: 1000,
        });
    </script>
    <script>
        var typed = new Typed('#ems', {
      strings: ['Employee Management System', 'EMS'],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1800,
            loop: true,
            autoStart: true
    });
    </script>
</body>
</html>