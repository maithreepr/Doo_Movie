<div id="carouselExampleFade" class="carousel slide carousel-fade padding-top" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php for ($i = 0; $i < 2; $i++) {
            if ($i == 0) {
                echo '<div class="carousel-item active" data-bs-interval="1000">';
            } else {
                echo '<div class="carousel-item" data-bs-interval="1000">';
            } ?>
            <div class="img-gradient"></div>
            <div class="container position-absolute top-50 start-50 translate-middle py-5" style="width: 100%; height: 100%;">
                <div class="row align-items-end" style="height: 100%;" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7 col-xxl-7 text-center text-lg-start">
                        <img style="color:whitesmoke" src="" alt="Movie Title">
                        <br><br>
                        <p class="d-none d-lg-block" style="color:whitesmoke;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos excepturi magni laudantium corrupti laboriosam perferendis nobis libero ipsam a quibusdam. Repellendus provident minima ad ipsum quis et nostrum! Voluptatum sapiente quia tenetur labore praesentium aliquam amet quasi sequi pariatur ratione.</p>
                        <div>
                            <a href="movie_player.php" class="btn btn-danger"><i class="fa fa-play fa-lg"></i> ดูหนัง</a>
                            <button class="btn btn-secondary"><i class="fa fa-plus fa-lg"></i> รายการของฉัน</button>
                        </div>';
                    </div>
                </div>
            </div>
            <!-- img size 2859 × 1308 pixels for md lg xl xxl size -->
            <?php echo '<img src="assets/Poster_' . $i + 1 . '.jpg" class="d-none d-md-block w-100" alt="Poster_1">'; ?>
            <!-- img size  pixels for sm size -->
            <?php echo '<img src="assets/Poster_' . $i + 1 . '.jpg" class="d-block d-md-none w-100" alt="Poster_1">'; ?>
    </div>';
<?php } ?>
</div>
</div>