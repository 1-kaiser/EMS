<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>

    <link rel="icon" href="../../assets/img/configuration.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@400;500;600&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/aos.css">
    <link rel="stylesheet" href="../../map_css/login.css">
</head>
<body>

    <div class="card">
        <div class="card-body">
            <div class="container">
                <div class="card-title">
                    <h3>Employee Login</h3>
                </div>
                <form action="" method="POST">
                <div class="uname">
                    <label for="username" class="username">Username</label>
                    <div class="uname-input">
                    <input type="text" class="uname-control">
                    </div>
                </div>

                <div class="pword">
                    <label for="password" class="password">Password</label>
                    <div class="pword-input">
                    <input type="password" class="pword-control">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="../../index.php">
                    <p>back home -></p>
                </a>
                </form>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="/assets/js/aos.js"></script>
    <script>
        AOS.init ({
            offset: 120,
            duration: 1000,
        });
    </script>
</body>
</html>