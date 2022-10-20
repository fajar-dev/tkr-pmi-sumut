<!-- Details Modal -->
<div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="row">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="<?= base_url('theme/') ?>images/details-modal.jpg"  alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-4 my-auto ">
                    <h3>Login Markas</h3>
                    <hr>
                    <p>Masukan Username dan Password Anda untuk masuk ke sistem Registrasi peserta TKR</p>
                    <form method="POST" action="<?= base_url('auth/index') ?>"> 
                    <?php echo $this->session->flashdata('msg') ?>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control-input" name="username" placeholder="Username Markas..." required="">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control-input" name="password" placeholder="Password...." required="">
                        </div>
                        <button type="submit" class="form-control-submit-button mt-3">login</button>
                    </form>
                    <!-- <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button> -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of modal-content -->
    </div> <!-- end of modal-dialog -->
</div> <!-- end of modal -->
<!-- end of details modal -->


    <!-- Footer -->
    <div class="footer bg-danger">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-white">
                    <img src="<?= base_url('theme/') ?>images/tkr.jpg" class="img-fluid" alt="">
                </div> <!-- end of col -->
                <div class="col-lg-9 text-white">
                    <h3 class="text-white">Temu karya Relawan</h3>
                    <p>Temukarya PMI Provinsi Jawa Timur tahun 2022 bertujuan untuk meningkatkan karakter kepalangmerahan, kualitas, dan kepemimpinan relawan PMI untuk mendukung kapasitas organisasi dan pelayanan secara profesional.</p>
                    <div class="text-start">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-youtube fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright bg-dark text-white">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <p class="p-small ">Copyright © <a href="https://pmisumut.or.id">PMI SUMUT 2022</a></p>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <p class="p-small statement">Develop By <a href="https://fajar-dev.my.id" class="text-danger" style="color: red !important ;" target="_blank">fajar-dev</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    

    <!-- Back To Top Button -->
    <button onclick="topFunction()" id="myBtn">
        <img src="<?= base_url('theme/') ?>images/up-arrow.png" alt="alternative">
    </button>
    <!-- end of back to top button -->
    	
    <!-- Scripts -->
    <script src="<?= base_url('theme/') ?>js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url('theme/') ?>js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="<?= base_url('theme/') ?>js/purecounter.min.js"></script> <!-- Purecounter counter for statistics numbers -->
    <script src="<?= base_url('theme/') ?>js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="<?= base_url('theme/') ?>js/scripts.js"></script> <!-- Custom scripts -->
    
</body>
</html>