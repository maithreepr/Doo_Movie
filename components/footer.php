<div class="container-fluid border-top border-2 border-danger">
    <footer data-aos="fade-up" data-aos-duration="1000" class="py-3 mt-3 mb-5">
        <div class="row justify-content-center px-5">
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="col-4 col-md-3 col-lg-2 mb-2 p-0">
                    <a href="movie_list.php?genra_id=<?= $i + 1 ?>" class="btn btn-secondary btn-sm rounded-pill"
                        style="width: 95%;">
                        <p class="footer-text-overflow m-0">Genre</p>
                    </a>
                </div>
            <?php } ?>
        </div>
        <p class="text-center mt-3 mb-5 mb-lg-0" style="color: whitesmoke;">Footer Title</p>
    </footer>
</div>