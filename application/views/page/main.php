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
                        <a class="nav-link active" aria-current="page" href="#header">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Berita</a>
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
    
    <!-- Header -->
    <header id="header" class="header py-5 mt-5">
        <div class="container-xl my-0 py-0">
            <div class="row flex-row-reverse align-items-center my-0 py-0">
                <div class="col-lg-6">
                    <img class="img-fluid" src="<?= base_url('theme/') ?>images/tkr.jpg" width="1000"  alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                        <div class="section-title">PMI Provinsi Sumatera Utara</div>
                        <h1 class="h1-large">Temu Karya Relawan</h1>
                        <h6>"SUMUT BANGKIT BERSAMA RELAWAN"</h6>
                        <p class="p-large">Aekna Pine Resort, Kabupaten Simalungun <br>28 Oktober - 1 November 2022</p>
                        <?php
                      if($this->session->userdata('status') == "login"){
                        echo'
                        <a class="btn-solid-lg" href="'.base_url('user/dashboard').'">Dashboard</a>
                        ';
                      }else{
                        echo'
                        <a class="btn-solid-lg" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login Markas</a>
                        ';
                      }
                    ?>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Services -->
    <div id="services" class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon blue">
                            <span class="far fa-file-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Petunjuk Pelaksana</h5>
                            <a href="<?= $doc['juklak'] ?>" class="btn btn-danger btn-solid-sm"><span class="fas fa-download"></span> Download</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon yellow">
                            <span class="far fa-file-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Petunjuk Teknis</h5>
                            <a href="<?= $doc['juknis'] ?>" class="btn btn-danger btn-solid-sm"><span class="fas fa-download"></span> Download</a>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-icon red">
                            <span class="far fa-file-alt"></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Jadwal Kegiatan</h5>
                            <a href="<?= $doc['jadwal'] ?>" class="btn btn-danger btn-solid-sm"><span class="fas fa-download"></span> Download</a>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of services -->

    <div id="details" class="basic-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="text-container">
                        <div  class="mb-5">
                            <h2>Kriteria Peserta</h2>
                            <p>Peserta adalah anggota relawan PMI yang akan terlibat langsung diseluruh proses Temu Karya</p>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <strong>Anggota KSR</strong>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Anggota KSR PMI (unsur unit markas/perguruan tinggi/instansi)
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <strong>Anggota TSR</strong>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Anggota TSR yang mempunyai keterampilan/profesi sesuai pelayanan kebutuhan PMI. Misal : dokter, paramedis, guru pembina PMR, jurnalis, psikolog, seniman, akuntan, penerjmah, pendamping Odha/Ohidha, Perusahaan dll.
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <strong>Anggota Donor Darah Sukarela</strong>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Mendapat mandat dari PMI Kabupaten/Kota.
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>

    <!-- Projects -->
	<div id="projects" class="filter bg-gray">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading"><span>Kegiatan</span> <br>Berita Kegiatan</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="row justify-content-center">
                        <div class="element-item col-lg-4">
                            <a href="article.html">
                                <img class="img-fluid" src="<?= base_url('theme/') ?>images/project-1.jpg" alt="alternative">
                                <p><strong>Online banking pellentesque tincidunt leo eu laoreedt integer quis vanos compren</strong></p>
                            </a>
                        </div>
                        <div class="element-item col-lg-4">
                            <a href="article.html">
                                <img class="img-fluid" src="<?= base_url('theme/') ?>images/project-1.jpg" alt="alternative">
                                <p><strong>Online banking pellentesque tincidunt leo eu laoreedt integer quis vanos compren</strong></p>
                            </a>
                        </div>
                        <div class="element-item col-lg-4">
                            <a href="article.html">
                                <img class="img-fluid" src="<?= base_url('theme/') ?>images/project-1.jpg" alt="alternative">
                                <p><strong>Online banking pellentesque tincidunt leo eu laoreedt integer quis vanos compren</strong></p>
                            </a>
                        </div>
                        <div class="element-item col-lg-4">
                            <a href="article.html">
                                <img class="img-fluid" src="<?= base_url('theme/') ?>images/project-1.jpg" alt="alternative">
                                <p><strong>Online banking pellentesque tincidunt leo eu laoreedt integer quis vanos compren</strong></p>
                            </a>
                        </div>
                        <div class="element-item col-lg-4">
                            <a href="article.html">
                                <img class="img-fluid" src="<?= base_url('theme/') ?>images/project-1.jpg" alt="alternative">
                                <p><strong>Online banking pellentesque tincidunt leo eu laoreedt integer quis vanos compren</strong></p>
                            </a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->