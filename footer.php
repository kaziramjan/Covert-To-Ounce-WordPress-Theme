        <!-- ======= FOOTER ======= -->
        <footer id="footer">
            <div class="footer-newsletter">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <h4>Subscribe to Our Newsletter</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati ab error quisquam et unde id.</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top">
                <?php get_sidebar(); ?>
            </div>
            <div class="container py-4">
                <div class="copyright">
                    <?php global $ounce; echo $ounce['copyright-text']; ?>
                </div>
                <div class="credits">
                    <?php global $ounce; echo $ounce['footer-right-text']; ?>
                </div>
            </div>
        </footer>
        <!-- ======= FOOTER ======= -->
        <!-- ======= PRELOADER ======= -->
        <div id="preloader"></div>
        <!-- ======= BACK TO TOP ======= -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    <?php wp_footer(); ?>
    </body>
</html>