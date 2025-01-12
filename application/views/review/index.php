<section id="breadcrumb">
    <div class="container">
        <div class="row">
            <nav aria-label="breadcrumb">

            </nav>
        </div>
    </div>
</section>

<!-- start content -->
<div class="container">
    <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
        <h2>Review</h2>
    </div>
    <div class="section-title mb-4 mb-xl-0" data-aos="fade-left" data-aos-duration="1000">
        <div class="row row-gap-3">
            <tbody>
                <section id="cars">
                    <div class="filter-wrap mt-4 d-flex flex-lg-row flex-column justify-content-lg-center row-gap-2 column-gap-3 mb-4"
                        data-aos="zoom-in" data-aos-duration="1000">
                        <span class="filter-btn filter-active" data-filter="*">All</span>                        
                        <?php
                        
foreach ($tipe as $t) { ?>
    <span class="filter-btn" data-filter="filter-<?= $t->tipe; ?>"><?= $t->tipe; ?></span>
<?php } ?>
</div>
                    <div class="row cars-container" data-aos="zoom-in" data-aos-duration="1000">
                        <?php
                        
                        foreach ($review as $r) 
                        { 
                            ?>
                        <?php if ($r['is_active'] == 1) { ?>
                            <div class="col-xl-4 col-lg-4 col-md-4 col-4 mt-4 cars-item filter-<?= $r['tipe']; ?> min-height: 540px">
                                <div class="card mb-3" style="max-width: 540px;">
                                    <div class="d-flex align-items-center mt-4">
                                        <img src="<?= base_url('assets/img/profil/'.$r['gambar']) ?>" class="img-profile rounded-circle" style="object-fit: cover; margin-left: 20px; margin-right: 10px; width: 40px; height: 40px;">
                                        <div>
                                            <h5 class="card-title  pt-2"><?= $r['username']; ?></h5>
                                            <div class="position-relative">
                                                <img src="<?= base_url('assets/img/star/star'). $r['rating']; ?>.png" class="img-fluid mx-auto d-block" style="width: 75px;">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class=" col-12 mt-3">
                                            <div class="card-body">
                                                <i>
                                                    <p class="card-text mb-3 fs-6">
                                                        "
                                                        <?= $r['massage']; ?>"
                                                    </p>
                                                </i>
                                                <p class="card-text"><small class="text-muted">
                                                        <?= $r['nama']; ?>
                                                    </small></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                        <?php } ?>
            </tbody>
        </div>

    </div>
</div>
</div>
</div>
</section>
