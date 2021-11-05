 <!--Footer-->
 <div class="bg-blue-lagoon border-bottom pb-4 pb-lg-0 <?= (in_array($checkFileName, ['personal-cabinet.php', 'cabinet-active.php', 'cabinet-progress.php'])) ? 'd-none d-lg-flex' : '' ?>">
        <div class="container mb-1 mb-lg-0 pb-3 pb-lg-0">
            <div class="row h-lg-186 align-items-center justify-content-lg-between ">
                <div class="col-lg-3 mt-4 pt-3 mt-lg-0 pt-lg-0 text-center text-lg-left">
                    <a href="index.php" class="d-flex-x-center justify-content-lg-start">
                        <figure class="mx-0 d-flex">
                            <img src="img/logo.svg" class="invert-1" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-lg-5 d-none d-lg-flex list-reset">
                    <ul class="d-inline-flex pl-0">
                    
                        <li><a href="http://nursecome/index.php#xidm%C9%99t" class="fw-700 text-capitalize mr-5 pr-xl-4 underline-0 fs-lg-16 lh-lg-26 color-white">xidmətlər</a></li>
                        <li><a href="http://nursecome/index.php#haqq%C4%B1m%C4%B1zda" class="fw-700 text-capitalize mr-5 pr-xl-4 pl-2 underline-0 fs-lg-16 lh-lg-26 color-white">haqqımızda</a></li>
                        <li><a href="http://nursecome/index.php#%C9%99laq%C9%99" class="fw-700 text-capitalize pl-2 underline-0 fs-lg-16 lh-lg-26 color-white">əlaqə</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 d-inline-flex-x-center justify-content-lg-end mt-4 pt-2 mt-lg-0 pt-lg-0">
                    <?php
                        $icons = [
                            'instagram' => 'fs-30 fs-lg-24',
                            'facebook-f' => 'fs-26 fs-lg-20 fw-700' ,
                            'linkedin-in' => 'fs-26 fs-lg-20'
                        ];
                    ?>

                    <?php foreach($icons as $key => $icon ) : ?>
                        <a href="#" class="<?= ($key === 'instagram') ? '' : 'ml-4 pl-2' ?>"><i class="fab fa-<?= $key ?>  <?= $icon ?> color-white opacity-5 opacity-lg-1 "></i></a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
 </div>

<div class="bg-blue-lagoon <?= (in_array($checkFileName, ['personal-cabinet.php', 'cabinet-active.php', 'cabinet-progress.php'])) ? 'd-none d-lg-flex' : '' ?>">
        <div class="container">
            <div class="row justify-content-center align-items-center h-lg-89  py-2 py-lg-0">
                <div class="col-lg-10 text-center py-1 py-lg-0">
                    <span class="color-white opacity-5 fs-14 lh-24 ls-03 fw-400">© 2020 Nursecome. All rights reserved.</span>
                </div>
            </div>
        </div>
</div>

<!--Footer End-->





<?php require_once 'foot.php' ?>