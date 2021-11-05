<?php require_once 'inc/header.php' ?>

<div>
    <section class="container">
        <div class="row justify-content-center mb-2 mb-lg-5 pb-4">
            <div class="col-lg-10 text-lg-center mb-lg-2">
                <h2 class="color-black-rock fs-36 lh-46 fs-lg-48 lh-lg-56 mt-4 pt-3 pt-lg-1 mb-1 ">Çağır gəlsin</h2>
            </div>
        </div>

        <div class="row mb-4 pb-3 mb-lg-5  pb-lg-5">
            <?php
                $strings = [
                    'İynə' => '2 azn',
                    'Damar iynəsi' => '3 azn',
                    'Sistem köçürülməsi' => '8 azn',
                    'Masaj' => '35 azn'
                ];
            ?>

            <?php foreach($strings as $key => $string) : ?>
                <div class="col-md-6 col-xl-3 pb-1 pb-lg-0 mb-4">
                    <div class="border-2 border-E7E5EA radius-32 text-center  pb-3 hover-node price-hover">
                        <span class="d-block fs-22 lh-28 fw-500 color-bondi-blue2 mt-4 pt-3 "><?= $key ?></span>
                        <span class="d-block fw-700 fs-48 lh-56 mt-4 pt-2 color-black-rock"><?= $string ?></span>

                        <span class="d-block color-black-rock fw-700 fs-18 lh-28 mt-4 pt-3"><?= ($key === 'Masaj') ? '45 dəqiqə' : 'Peşəkar tibb bacısı' ?></span>
                        <span class="d-block color-black-rock fw-700 fs-18 lh-28 pt-3 <?= ($key === 'İynə') ? '' : 'd-none' ?>">Əzələyə vurulan iynə</span>
                        <span class="d-block color-black-rock fw-700 fs-18 lh-28 pt-3 <?= ($key === 'Damar iynəsi') ? '' : 'd-none' ?>">Damara vurulan iynə</span>
                        <span class="d-block color-black-rock fw-700 fs-18 lh-28 pt-3 <?= ($key === 'Sistem köçürülməsi') ? '' : 'd-none' ?>">Bədənə sistem köçürülməsi</span>
                        <span class="d-block color-black-rock fw-700 fs-18 lh-28 pt-3 <?= ($key === 'Masaj') ? '' : 'd-none' ?>">Bütöv bədən masajı</span>
                        <span class="d-block color-black-rock fw-700 fs-18 lh-28 pt-3 mb-2"><?= ($key === 'Masaj') ? 'Xüsusi çarpayı' : 'Steril avadanlıqlar' ?></span>
                    
                        <a href="#" class="color-white hover-darkest hover-node  d-inline-flex-x-center py-3 bg-bondi-blue underline-0 radius-28 w-80p mt-5 mb-4 " data-custom-open='modal-order-map'>
                            <span class="fw-700 fs-16 lh-26">Çağır gəlsin</span>
                        </a>
                    </div>
                    
                </div>
            <?php endforeach ?>
        </div>
    </section>
</div>



<?php require_once 'inc/modal.php' ?>
<?php require_once 'inc/footer.php' ?>