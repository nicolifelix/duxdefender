    <footer class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    $logo_footer = get_field('logo_dux');
                ?>
                <div class="logo">
                    <img srcset="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt']; ?>" >
                </div>
                    <p>copyright 2021. dux grupo. via Waldomiro bertassi, 1198 - itupeva, sp</p>
            </div>
        </div>
    </footer>

    <!-- jquery  e bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- custom js -->
    <script src="assets/js/main.js"></script>
    <script src="js/navigation.js"></script>
    <?php wp_footer(); ?>

</body>
</html>
