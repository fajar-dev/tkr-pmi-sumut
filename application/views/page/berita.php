<!-- Navigation -->
<nav id="navbarExample" class="navbar navbar-expand-lg fixed-top navbar-light" aria-label="Main navigation">
        <div class="container-xl">

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="<?= base_url('theme/') ?>images/pmi.jpg" alt="alternative"></a> 

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text" href="index.html">Zinc</a> -->

            <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ms-auto navbar-nav-scroll">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                    </li>
                </ul>
                <span class="nav-item">
                      <?php
                      if($this->session->userdata('status') == "login"){
                        echo'
                        <a class="btn-solid-sm" href="'.base_url('user/dashboard').'">Dashboard</a>
                        ';
                      }else{
                        echo'
                        <a class="btn-solid-sm" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login</a>
                        ';
                      }
                    ?>

                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

    <!-- Basic -->
    <div class="ex-basic-1 pt-5 mt-5 pb-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <img class="img-fluid mb-5" src="<?= base_url('theme/') ?>images/article-details-small.jpg" alt="alternative">
                    <div class="mb-4">
                        <h2>New elements added to the package</h2>
                        <small class="text-muted">
                            <i class="far fa-clock"></i>
                            10 April 2022
                        </small>
                        <small class="text-muted ms-3">
                            <i class="far fa-user"></i>
                            admin
                        </small>
                    </div>
                    <p>Ye on properly handsome returned throwing am no whatever. In without wishing he of picture no exposed talking minutes. Curiosity continual belonging offending so explained it exquisite. Do remember to followed yourself material mr recurred carriage. Way mrs end gave fat skin brown yesterday tall walk fact bed.</p>
                    <p class="mb-5">High drew west we no or at john. About or given on witty event. Or sociable up material bachelor bringing landlord confined. Busy so many in hung easy find well up. So of exquisite my an explained remainder. Dashwood denoting securing be on perceive my laughing so. Ye on properly handsome returned throwing am no whatever.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->