<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Basic Banking System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
</head>

<body>

    <?php
     include 'navbar.php';
    ?>
    
    <div class="container-fluid">
        <!-- Introduction section -->
        <div class="row intro py-1">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1>National Bank</h1>
                </div>
            </div>
            <div class="col-sm-12 col-md img text-center">
                <img src="img/Bankmain.png" class="img-fluid pt-4">
            </div>
        </div>

        <!-- Activity section -->
        <h2 class="text-center pt-2" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Services</h2>
        <div class="container">
        <div class="row activity text-center">

            <div class="col-md-4 col-sm-4 act">
                <div class="card">
                    <img src="img/user.png" style="padding: 20px;">
                    <div class="card-container">
                        <a href="userslist.php"><button>Users List</button></a>
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
        <p>&copy 2021. Develop By <b>Kenil Patel</b> <br>Web Developer Intern @<b> The Spark Foundation</b> </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</html>