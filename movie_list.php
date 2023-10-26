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
    <?php include 'components/navBarTop.php' ?>

    <!-- Show Movie -->
    <?php include 'components/showMovie.php'; ?>

    <!-- Main Content -->
    <div class="container">
        <div>
            <div class="d-flex justify-content-start mt-4 mb-3">
                <h5 style="color: white" data-aos="fade-right" data-aos-duration="800">Genre</h5>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <?php for ($i = 0; $i < 42; $i++) { ?>
                    <div class="col-4 col-lg-2 d-flex justify-content-center px-2 mb-3">
                        <div class="card border border-0 overlay" style="width: 100%;">
                            <a href="movie_player.php?movie_id=<?= $i + 1 ?>">
                                <img src="assets/Movie_Poster.jpg" class="card-img-top" alt="">
                                <div class="position-absolute bottom-0 start-50 translate-middle-x text-linear-gradient" style="width:100%; height:30%">
                                    <p class="text-break text-center text-capitalize lh-sm text-overflow mt-1 mt-md-3 mt-lg-2 mb-0 px-2" style="color:whitesmoke;">Avengers: Infinity War (2018) อเวนเจอร์ส: มหาสงครามล้างจักรวาล</p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Select page -->
    <!-- <div class="container d-flex justify-content-center mt-2 mb-4">
        <nav data-aos="fade-up" data-aos-duration="1000">
            <ul class="pagination">
                <li class="page-item rounded-3 mx-1 p-0">
                    <a class="btn btn-secondary disabled" href="#" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                </li>
                <li class="page-item active rounded-3 mx-1 p-0" aria-current="page">
                    <a class="btn btn-secondary" href="#" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;">1</a>
                </li>
                <li class="page-item rounded-3 mx-1 p-0">
                    <a class="btn btn-secondary" href="#" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;">2</a>
                </li>
                <li class="page-item rounded-3 mx-1 p-0">
                    <a class="btn btn-secondary" href="#" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;">3</a>
                </li>
                <li class="page-item disabled rounded-3 mx-1 p-0">
                    <a class="btn btn-secondary disabled" href="#" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;">...</a>
                </li>
                <li class="page-item rounded-3 mx-1 p-0">
                    <a class="btn btn-secondary" href="#" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;">10</a>
                </li>
                <li class="page-item rounded-3 mx-1 p-0">
                    <a class="btn btn-secondary" href="#" style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: .7rem; --bs-btn-font-size: .75rem;"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </li>
            </ul>
        </nav>
    </div> -->

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