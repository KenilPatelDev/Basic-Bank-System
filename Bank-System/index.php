<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Basic Banking System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
        .card {
            box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 5px;
            padding: 20px 30px 10px;
            
        }
        .card:hover {
            box-shadow: 0 10px 16px 0 rgba(0, 0, 0, 0.2);
        }
        .card-container {
            padding: 10px;
        }
    </style> 
</head>

<body>

    <?php
     include 'navbar.php';
    ?>

<!-- temp
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Bank</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="createuser.php">Create Usert</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transfermoney.php">Transfer Money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transactionhistory.php">Transaction History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contactus.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Banner Text one</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>
                        Banner Text two</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    -->
    
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1>My Bank</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/bank5-removebg-preview.png" class="img-fluid pt-4">
            </div>
        </div>

        <!-- Activity section -->
        <h2 class="text-center pt-4">Services</h2>
        <div class="container">
        <div class="row activity text-center">

            <div class="col-md-4 col-sm-4 act">
                <div class="card">
                    <img src="img/user.png" style="padding: 20px;">
                    <div class="card-container">
                        <a href="createuser.php"><button>Create a User</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 act">
                <div class="card">
                    <img src="img/money.png" class="img-fluid" style="padding: 20px;">
                    <div class="card-container">
                        <a href="transfermoney.php"><button>Make a Transaction</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 act">
                <div class="card">
                    <img src="img/history.png" class="img-fluid" style="padding: 20px;">
                    <div class="card-container">
                        <a href="transactionhistory.php"><button>Transaction History</button></a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made with &hearts; by <b>Kenil Patel</b> <br>Web Developer Intern @ TSF </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</html>