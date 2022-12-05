<?php include("includes/active_session.php"); include("includes/error-reporting.php");include("includes/config.php");?>
<!doctype html>
<html lang="en">

<head>
    
    <?php include("modules/head-content.php");?>

</head>

<body>

    <!-- Header data  -->
    <header>
     
    <?php include("modules/top-nav.php");include("modules/design-top-hero.php");?>

    </header>


    <!-- main content data  -->
    <main class="main-content">
        <?php
        for ($i = 0; $i < 20; $i++){

echo "<p>My PHP contact page</p>";
        }
        
         ?>

    </main>


    <!-- Footer data  -->
    <<?php include("modules/footer.php");?>
</body>

</html>