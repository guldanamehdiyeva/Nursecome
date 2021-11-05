<?php require_once 'inc/header.php' ?>

<div>
    <section class="container h-lg-939 h-xl-799 mb-2 pb-1 mb-md-3 mb-lg-0 pb-lg-0">
        <div class="row   justify-content-center mb-2 mb-lg-5 pb-4">
            <div class="col-lg-10 text-lg-center mb-lg-2">
                <h2 class="color-black-rock fs-36 lh-46 fs-lg-48 lh-lg-56 mt-4 pt-3 pt-lg-1 mb-0 ">Sifarişlərim</h2>
            </div>
        </div>



        <!--For Desktop-->
        <div class="row border-2 border-E7E5EA radius-32 d-none d-lg-flex">
            <div class="col-lg-12 ">
                <div class="row border-bot-2 border-E7E5EA px-4">
                    <div class="col-lg-2  py-4">
                        <span class="fw-500 fs-18 lh-28 color-black-rock py-2">Xidmətin adı</span>
                    </div>
                    <div class="col-lg-2 text-center text-xl-left py-4">
                        <span class="fw-500 fs-18 lh-28 color-black-rock py-2">Mütəxəssisin adı</span>
                    </div>
                    <div class="col-lg-2 text-center py-4">
                        <span class="fw-500 fs-18 lh-28 color-black-rock py-2">Tarix</span>
                    </div>
                    <div class="col-lg-2 text-center py-4">
                        <span class="fw-500 fs-18 lh-28 color-black-rock py-2">Başlama vaxtı</span>
                    </div>
                    <div class="col-lg-2 text-center py-4">
                        <span class="fw-500 fs-18 lh-28 color-black-rock py-2">Bitmə vaxtı</span>
                    </div>
                    <div class="col-lg-2 text-center py-4">
                        <span class="fw-500 fs-18 lh-28 color-black-rock py-2">Xidmətin qiyməti</span>
                    </div>
                </div>

                <?php
                    $strings = [
                        'Damar iynəsi' ,
                        'Sistem köçürülməsi' ,
                        'İynə',
                        'Sistem' 
                    ];
                ?>

                <?php foreach($strings as $key) : ?>
                    <div class="row py-4 my-1 px-4">
                        <div class="col-lg-2 ">
                            <span class="fs-18 lh-28 color-black-rock py-2 "><?= $key ?></span>
                        </div>
                        <div class="col-lg-2 text-center">
                            <span class="fs-18 lh-28 color-black-rock py-2">Mehriban Hacıyeva</span>
                        </div>
                        <div class="col-lg-2 text-center">
                            <span class="fs-18 lh-28 color-black-rock py-2">17.02.2020</span>
                        </div>
                        <div class="col-lg-2 text-center">
                            <span class="fs-18 lh-28 color-black-rock py-2">16:30</span>
                        </div>
                        <div class="col-lg-2 text-center">
                            <span class="fs-18 lh-28 color-black-rock py-2">18:00</span>
                        </div>
                        <div class="col-lg-2 text-center">
                            <span class="fw-700 fs-18 lh-28 color-black-rock py-2">3 AZN</span>
                        </div>
                        
                    </div>
                <?php endforeach ?>
            
            </div>
        </div>

        

        <!--For Mobile devices-->
        <div class="border-2 border-E7E5EA radius-32  d-lg-none mb-5">
            <div class="row mx-auto border-bot-2 border-E7E5EA  pl-md-4">
                <div class="col-5  py-4">
                    <span class="fw-500 fs-14 lh-28 color-black-rock py-2">Xidmətin adı</span>
                </div>
                <div class="col-6  py-4">
                    <span class="fw-500 fs-14 lh-28 color-black-rock py-2">Mütəxəssis adı</span>
                </div>
            </div>

            <?php
                $strings = [
                    'Damar iynəsi' => 'Mehriban' ,
                    'Sistem köçü..'=> 'Lamiyə' ,
                    'Əzələ iynəsi' => 'Gülçöhrə'
                    
                ];
            ?>

            <?php foreach($strings as $key => $string) : ?>
                
                <div class="row mx-auto py-4 my-1 pl-md-4 ">
                    <div class="col-5 pr-0 ">
                        <span class="fs-14 lh-28 color-black-rock py-2 "><?= $key ?></span>
                    </div>
                    <div class="col-4">
                        <span class="fs-14 lh-28 color-black-rock py-2"><?= $string ?></span>
                    </div>
                    <div class="col-3">
                        <a href="#" class="fs-14 lh-28 color-bondi-blue2 py-2" data-custom-open="modal-order-details">Ətraflı</a>
                    </div>
                    
                </div>

            
            <?php endforeach ?>

            <?php foreach($strings as $key => $string) : ?>
                
                <div class="row mx-auto py-4 my-1 pl-md-4">
                    <div class="col-5 pr-0 ">
                        <span class="fs-14 lh-28 color-black-rock py-2 "><?= $key ?></span>
                    </div>
                    <div class="col-4">
                        <span class="fs-14 lh-28 color-black-rock py-2"><?= $string ?></span>
                    </div>
                    <div class="col-3">
                        <a href="#" class="fs-14 lh-28 color-bondi-blue2 py-2"  data-custom-open="modal-order-details">Ətraflı</a>
                    </div>
                    
                </div>

            
            <?php endforeach ?>
        </div>
                
            
         

    </section>
</div>



<?php require_once 'inc/modal.php' ?>
<?php require_once 'inc/footer.php' ?>