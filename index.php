<?php require_once 'inc/head.php' ?>

     <!--Mobile Header-->
    <div class=" bg-blue-lagoon d-lg-none">
        <div class="container">
            <div class="row align-items-center justify-content-between ">
                
                <a href="index.php" class="d-flex ml-3">
                    <figure class="mx-0 d-flex">
                        <img src="img/mobile-logo.svg" alt="">
                    </figure>
                </a>

                <!--User ============================================= -->
                <span class="border-1-5 border-ffffff85  radius-4 square-30 mr-3 my-3 d-flex-xy pos-relative pointer js-user-btn events-none">
                    <span class="icon-user icon square-18 "></span>

                    <!--User dropdown============================================= -->
                    <span class="action-dropdown action-dropdown-user hover border border-E7E5EA radius-16 box-shadow w-156 z-100">
                        <a href="login.php" class="underline-0 color-black-rock d-flex-x-center border border-E7E5EA radius-11 mx-2 my-2   py-1">
                            <span class="fs-14 lh-18  py-2 ">Giriş</span>
                        </a>

                        <a href="sign-up.php" class="underline-0 color-white bg-bondi-blue d-flex-x-center border border-E7E5EA radius-11 mx-2 mb-2   py-1">
                            <span class="fs-14 lh-18  py-2 ">Qeydiyyat</span>
                        </a>
                    
                    </span>
                </span>
                
            </div>
        </div>
    </div>


     <!--Header-->
    <div class="img-header bg-no-repeat bg-cover bg-right bg-lg-center  w-100p h-lg-640 h-md-360 h-224 ">
        <span class="header-background w-100p h-140 d-none d-lg-flex"></span>
        <div class="container pt-1">
            <div class="row align-items-center pt-4  mb-5 pb-4 d-none d-lg-flex ">
                <div class="col-lg-3">
                    
                    <a href="#" class="d-flex">
                        <figure class="mx-0 d-flex">
                            <img src="img/logo.svg" alt="">
                        </figure>
                    </a>
                </div>
                <div class="col-lg-5 text-center text-xl-right list-reset">
                    <ul class="d-inline-flex">
                        <li><a href="#xidmət" class="fw-500 text-capitalize mr-5 pr-xl-4 underline-0 fs-lg-18 lh-lg-23 color-black-rock">xidmətlər</a></li>
                        <li><a href="#haqqımızda" class="fw-500 text-capitalize mr-5 pr-xl-4 pl-2 underline-0 fs-lg-18 lh-lg-23 color-black-rock">haqqımızda</a></li>
                        <li><a href="#əlaqə" class="fw-500 text-capitalize pl-2 underline-0 fs-lg-18 lh-lg-23 color-black-rock">əlaqə</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 text-right">
                    
                    <a href="login.php" class=" mr-2 py-2 px-4 border border-12022F radius-60 d-inline-flex underline-0 color-black-rock">
                        <span class="py-1 px-3 text-capitalize fw-500 fs-lg-16 lh-lg-24">giriş</span>
                    </a>
                    
                    
                    <a href="sign-up.php" class="hover-darkest hover-node ml-1 py-2 px-4 bg-bondi-blue radius-60 d-inline-flex underline-0 color-black-rock">
                        <span class="py-1 px-2 text-capitalize color-white fw-500 fs-lg-16 lh-lg-24">qeydiyyat</span>
                    </a>
                </div>
            </div>

           
            <div class="row align-items-center pt-4">
                <div class="col-md-6 col-lg-8 pt-1">
                    <h2 class=" my-0 fs-24 lh-32 w-184 w-md-100p fs-lg-60 lh-lg-78 fw-700 color-black-rock">Tibb və masaj xidmətləri bir kliklə evinizdə</h2>
                    <p  class=" color-mid-gray w-lg-672 d-none d-md-flex mt-4 mb-3 fs-lg-20 lh-lg-32 fw-400">İstədiyiniz xidmət növünü seçib, düyməyə basmaqla, evinizi, komfort zonanızı tərk etmədən təklif etdiyimiz xidmətlərdən yararlana bilərsiniz.</p>
                    <a href="sign-up.php" class="hover-node hover-darkest py-2 py-lg-3 px-2 mt-4 bg-bondi-blue d-inline-flex radius-50 underline-0 color-white ">
                        <span class="px-4 py-1 py-lg-0 fw-500 fw-lg-700 fs-14 lh-18 fs-lg-16 lh-lg-22">Qeydiyyatdan keç</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--Services-->
    <div>
        <div class="container">
            <div class="row justify-content-center" id="xidmət">
                <div class="col-lg-8 mt-4 pt-2 text-center">
                    <h2 class="my-0 mt-lg-5 mb-lg-4 pb-3 color-black-rock text-capitalize fw-700 fs-24 lh-32 fs-lg-48 lh-lg-56">xidmətlərimiz</h2>
                    <p class=" color-black-rock my-0 mb-lg-5 pb-4 fw-400 fs-16 lh-28 fs-lg-18 lh-lg-28">We've done it carefully and simply. Combined with the ingredients makes for beautiful landings. It is definitely the tool you need to speed up your design process.</p>
                </div>
            </div>


        <?php
        $icons = [
            'needle' => 'İynə vurulması',
            'system' => 'Sistem köçürülməsi',
            'massage' => 'Bədən masajı',
        ];
        ?>
        
        <div class="row justify-content-center pt-lg-2 mb-3 pb-4 mb-lg-5 pb-lg-4">
        <?php foreach($icons as $key => $icon) : ?>
            <div class="col-md-9 col-lg-4 mt-4 mt-lg-0">
                <div class="hover-node box border border-E7E5EA radius-32 text-center pt-3 pt-lg-0 pb-3 pb-lg-2">
                    <span class="icon icon-<?= $key ?> square-48 mt-4 mt-lg-5 pt-lg-2 mb-4 d-inline-block"></span>
                    <h3 class="mt-0 mt-lg-2 mb-3 color-black-rock fw-700 fs-24 lh-34"><?= $icon ?></h3>
                    <p class="fw-400 fs-16 lh-26 color-black-rock px-3 px-lg-4  mb-4 pb-lg-2 ">A high quality solution beautifully designed for startups</p>
                    <a href="price.php" class="hover-node arrow-hover mb-lg-5 mb-4  radius-50p border border-E7E5EA square-56 d-inline-flex-xy">
                        <span class="icon icon-arrow square-24"></span>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
        </div>
    </div>

    <!--About-->
    <div class="bg-whisper mt-lg-2">
        <div class="container">
            <div class="row h-lg-700 justify-content-between align-items-center" id="haqqımızda">
                <figure class="col-lg-6 d-none d-lg-flex ">
                    <img src="img/nurse.png" class="w-100p" alt="">
                </figure>
                <div class="col-lg-5 mb-3 mb-lg-0 px-3 ">
                    <span class="text-upper fw-700 ls-4 color-black-rock opacity-5 fs-14 lh-24 mb-xl-4 mt-4 pt-3 mt-lg-0 pt-lg-0 pb-2 pb-lg-0 mb-1 mb-lg-0 d-block">haqqımızda</span>
                    <h2 class="fw-700 color-black-rock fs-24 lh-36 fs-lg-35 fs-xl-48 lh-lg-45 lh-xl-56 ls-08 ls-lg-2 mt-0 mb-3 mb-lg-4 pb-xl-3">Mütəxəssislərimizlə xidmətinizdəyik</h2>
                    <p class="fw-400 fs-16 fs-lg-14 fs-xl-18 lh-28 color-mulled-wine ls-04 mt-0 mb-3 mb-lg-4 pb-xl-3">100-lərlə 5 ildən çox təcrübəyə malik olan Tibb bacıları və 2 ildən çox təcrübəyə malik olan Masaj mütəxəssislərimizlə xidmətinizdəyik. NurseCome 2021-ci ildə Zahid Vaqif oğlu Gülməmmədov tərəfindən yaradılmışdır. İstədiyiniz xidmət növünü seçib, düyməyə basmaqla, evinizi, komfort zonanızı tərk etmədən bizim təklif etdiyimiz xidmətlərdən yararlana bilərsiniz.</p>
                    <a href="sign-up.php" class="hover-node hover-darkest  py-2 py-lg-3 px-2 mt-lg-4 mb-4 mb-lg-0 bg-bondi-blue radius-50 d-inline-flex underline-0 color-white ">
                        <span class="px-4 py-1 py-lg-0 fw-500 fw-lg-700 fs-14 lh-18 fs-lg-16 lh-lg-22">Qeydiyyatdan keç</span>
                    </a>
                </div>
            </div>
            
        </div>
    </div>

    <!--Contact-->
    <div>
        <div class="container">
            <div class="row h-lg-632 align-items-center justify-content-between mb-5 pb-2 mb-lg-0 pb-lg-0" id="əlaqə">
                <div class="col-md-5 d-lg-flex-x-center " >
                    <div class="w-lg-350 ">
                        <h2 class="color-black-rock fs-24 lh-36 fs-lg-48 lh-lg-56 fw-700 ls-08 ls-lg-2 mt-4 pt-3 pt-lg-0 mt-lg-0 mb-0 ">Bizimlə əlaqə</h2>
                        <p class="color-black-rock opacity-5 fs-16 lh-24 ls-04 fs-lg-18 lh-lg-28 my-0 mt-lg-4 pt-3 pb-lg-1">Hər hansı sualınız yaranarsa bizə zəng edə və ya məktub yaza bilərsiniz</p>
                        
                        <?php
                            $icons = [
                                'phone' => '(+994) 51 310 12 69',
                                'mail' => 'info@nursecome.az',
                                'location' => 'Səbail rayonu, Nizami küçəsi 140',
                            ];
                        ?>

                        <?php foreach($icons as $key => $icon) : ?>
                            <div class="d-flex  mt-4 mt-lg-5 pt-2">
                                <span class="icon icon-<?= $key ?> square-24 mr-4"></span>
                                <span class="color-black-rock ls-03 fw-500 fs-14 lh-24"><?= $icon ?></span>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="col-md-6 d-lg-flex-x-center  mt-4 pt-3 pb-1 mt-lg-0 pt-lg-0 pb-lg-0">
                    <div class="w-lg-440 h-lg-472 border border-E7E5EA radius-32 py-3 px-3">
                        <form action="" id="form" class="py-4 px-1">
                            <label class="d-block">
                                <input type="text" required  class="border-0 radius-28 outline-0 bg-mischka w-100p h-56 mb-4 color-black-rock pl-3" placeholder="Ad və soyad">
                            </label>

                            <label class="d-block">
                                <input type="email" required  class="border-0 radius-28 outline-0 bg-mischka w-100p h-56 mb-4 color-black-rock pl-3" placeholder="E-mail">
                            </label>

                            <label class="d-block">
                                <textarea   class="border-0 radius-28 outline-0 bg-mischka w-100p mb-4 h-152 color-black-rock pl-3 pt-3 resize-none" placeholder="Mesajınız"></textarea>
                            </label>

                            <input type="submit" id="submit" value="Mesaj göndər" class="pointer hover-darkest hover-node border-0 outline-0 radius-28 w-100p pointer bg-bondi-blue color-white py-3 fs-lg-16 lh-lg-26 fw-700">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    

    <?php require_once 'inc/footer.php' ?>
