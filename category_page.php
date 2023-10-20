<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DooMovie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
</head>

<body>

    <!-- Navbar -->
    <?php include 'components/navBarTop.php'; ?>

    <!-- Main Content -->
    <div class="container text-center my-5" style="padding-top: 56px; color:whitesmoke;">
        <h4 data-aos="fade-up" data-aos-duration="1000" class="mb-5">Genre</h4>
        <div data-aos="fade-right" data-aos-duration="1000" class="row my-4">
            <?php for ($i = 0; $i < 38; $i++) { ?>
                <div class="col-6 col-md-4">
                    <a href="movie_list.php" class="btn btn-secondary py-3 my-2 border border-0" style="width: 100%;background: rgba(49, 48, 54, 1);" onmouseover="this.style.backgroundColor='#dc3444'" onmouseout="this.style.backgroundColor='rgba(49, 48, 54, 1)'">Genre</a>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>

    <!-- NavBar Bottom -->
    <?php include 'components/navBarBottom.php'; ?>

    <!-- Search bar -->
    <?php include 'components/searchBar.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

    <!-- Function -->
    <script src="function/navBarScroll.js"></script>
    <script src="function/searchBar.js"></script>

</body>

</html>