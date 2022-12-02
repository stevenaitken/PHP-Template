<?php
/* if you are working with PHP sessions they myst be the first entry on a web page starting at line 1 */
if(isset($_SESSION['user']))  
{  
  echo "active";
} 

else {
    echo "don't see a session";
}

?>

<!doctype html>
<html lang="en">




<?php 
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
?>

<head>

    <title><?php echo "PHP includes template" ?></title>
    <meta charset="UTF-8">
    <meta name="description" content="Website desciption blah blah blah">

    <meta name="author" content="John Doe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Rubik+Microbe&display=swap" rel="stylesheet">



    <style>
    body {
        font-family: 'Aclonica', sans-serif;
        color: #f00
    }

    .main-content {
        margin-top: 20px;
        background-color: #eeeeee;
        text-align: center;
        font-size: 200%;
    }

    .jumbotron {
        text-align: center;
        color: darkslategrey;
    }

    .footer {
        font-size: 120%;
        text-align: center;
    }
    </style>


</head>

<body>

    <!-- Header data  -->
    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">PHP template page</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 3</a></li>
                </ul>
            </div>
        </nav>

        <<div class="jumbotron">
            <h1>Hello there. I am looking for a hero!</h1>
            </div>
    </header>

    <main class="main-content">
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
        <p>My PHP contact page</p>
    </main>


    <!-- Footer data  -->
    <footer>Footer Information</footer>
</body>

</html>