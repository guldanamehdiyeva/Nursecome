<?php require_once 'inc/head.php' ?>

 <!--Mobile Header-->
 <div class=" bg-blue-lagoon d-lg-none <?= (in_array($checkFileName, [ 'cabinet-active.php', 'cabinet-progress.php'])) ? 'd-none' : '' ?>">
    <div class="container">
        <div class="row align-items-center justify-content-between ">

            <a href="index.php" class="d-flex ml-3">
                <figure class="mx-0 d-flex">
                    <img src="img/mobile-logo.svg" alt="">
                </figure>
            </a>

            <!--User ============================================= -->
            <span class="border-1-5 border-ffffff85 radius-4 square-30 mr-3 my-3 d-flex-xy pos-relative pointer js-user-btn events-none <?= (in_array($checkFileName, ['index.php', 'login.php', 'sign-up.php'])) ? '' : 'd-none' ?>">
                <span class="icon-user icon square-18"></span>

                <!--User dropdown============================================= -->
                <div class="action-dropdown action-dropdown-user hover border border-E7E5EA radius-16 box-shadow w-156 z-100">
                    <a href="login.php" class="underline-0 color-black-rock d-flex-x-center border border-E7E5EA radius-11 mx-2 my-2   py-1">
                        <span class="fs-14 lh-18  py-2 ">Giriş</span>
                    </a>

                    <a href="sign-up.php" class="underline-0 color-white bg-bondi-blue d-flex-x-center border border-E7E5EA radius-11 mx-2 mb-2   py-1">
                        <span class="fs-14 lh-18  py-2 ">Qeydiyyat</span>
                    </a>
                    
                </div>
            </span>

            <div class="d-inline-flex-y-center <?= (in_array($checkFileName, ['login.php', 'sign-up.php'])) ? 'd-none' : '' ?>">

                <!--Notification============================================= -->
                <span class="d-inline-flex-xy square-34 bg-lilac2 radius-50p mr-2 pos-relative js-notification events-none ">
                    <span class="icon icon-notification rect-17-20 invert-1"></span>
                    <span class="square-16 radius-50p d-inline-flex-xy bg-pomegranate pos-absolute number-pos">
                        <span class="fs-12 lh-16 color-white">2</span>
                    </span>

                    <!--Notification dropdown============================================= -->
                    <span class="action-dropdown action-dropdown-notification hover radius-16 box-shadow z-100 top-lg-55">
                        <span class="border-bot border-E7E5EA d-block">
                            <h2 class="fs-22 lh-30 color-black-rock fw-700 ml-3 my-2 py-1">Bildirişlərim</h2>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-inline-flex-y-center py-2" data-custom-open='modal-order-accepted'>
                            <span class="bg-whisper square-34 radius-50p d-flex-xy">
                                <span class="icon icon-corner-down  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1">
                                <span class="fs-14 lh-18 color-black-rock d-block">Sifarişiniz qəbul edildi</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">20 dəqiqə əvvəl</span>
                            </div>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-inline-flex-y-center py-2" data-custom-open='modal-specialist-appointed'>
                            <span class="bg-whisper square-34 radius-50p d-flex-xy">
                                <span class="icon icon-check-circle  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1">
                                <span class="fs-14 lh-18 color-black-rock d-block">Sizə mütəxəssis təyin olundu</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">4 saat əvvəl</span>
                            </div>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-inline-flex-y-center py-2">
                            <span class="bg-whisper h-34 w-50 radius-50p d-flex-xy">
                                <span class="icon icon-info  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1">
                                <span class="fs-14 lh-18 color-black-rock d-block">Mütəxəssis sifarişdən imtina etdi. Bir daha yoxlayın</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">2 gün əvvəl 16:30</span>
                            </div>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-inline-flex-y-center py-2 mb-2">
                            <span class="bg-whisper h-34 w-50 radius-50p d-flex-xy">
                                <span class="icon icon-triangle  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1">
                                <span class="fs-14 lh-18 color-black-rock d-block">Daxil etdiyiniz məlumatlara uyğun mütəxəssis tapılmadı</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">23.01.2020</span>
                            </div>
                        </span>
                    </span>
                    
                </span>

                <!--Profile============================================= -->
                <span class="pointer mx-3 my-2 py-1 js-action-btn  events-none pos-relative">
                    <span class="icon icon-profile square-34"></span>

                    
                    
                    <!--Profile dropdown============================================= -->
                    <div class="action-dropdown hover z-100 w-156 radius-8 top-48 box-shadow right-0">
                        

                            <a href="order.php" class="underline-0 color-black-rock py-2 d-flex-y-center"> 
                                <span class="icon icon-file-text square-22 ml-3 my-1"></span>
                                <span class="lh-18 ml-3 ">Sifarişlərim</span>
                            </a>
                            <a href="information.php" class="underline-0 color-black-rock border-top border-E7E5EA py-2 d-flex-y-center"> 
                                <span class="icon icon-user square-22 ml-3 my-1 invert-1   "></span>
                                <span class="lh-18 ml-3 ">Məlumatlarım</span>
                            </a>
                            <a href="support.php" class="underline-0 color-black-rock border-top border-E7E5EA py-2 d-flex-y-center"> 
                                <span class="icon icon-message square-22 ml-3 my-1"></span>
                                <span class="lh-18 ml-3 ">Dəstək</span>
                            </a>
                            <a href="#" class="underline-0 color-black-rock border-top border-E7E5EA py-2 d-flex-y-center mb-2"> 
                                <span class="icon icon-log-out square-22 ml-3 my-1"></span>
                                <span class="lh-18 ml-3 ">Çıxış</span>
                            </a>
                       
                        
                    </div>
                </span>
            </div>

        </div>
    </div>
</div>

<!--Desktop Header-->
<div>
    <span class="header-background w-100p h-140 d-none d-lg-block"></span>
    <div class="container <?= (in_array($checkFileName, ['login.php', 'sign-up.php'])) ? 'container-custom' : '' ?> pt-1">
        <div class="row align-items-center justify-content-between pt-4  mb-5 pb-4 d-none d-lg-flex ">
            <div class="col-lg-3">

                <a href="index.php" class="d-flex">

                    <figure class="mx-0 d-flex">
                        <img src="img/logo.svg" alt="">
                    </figure>
                    
                </a>

            </div>
            <div class="col-lg-5 text-center text-xl-right list-reset  <?= (in_array($checkFileName, ['login.php', 'sign-up.php'])) ? '' : 'd-none' ?>">
                <ul class="d-inline-flex">
                    <li><a href="http://nursecome/index.php#xidm%C9%99t" class="fw-500 text-capitalize mr-5 pr-xl-4 underline-0 fs-lg-18 lh-lg-23 color-black-rock">xidmətlər</a></li>
                    <li><a href="http://nursecome/index.php#haqq%C4%B1m%C4%B1zda" class="fw-500 text-capitalize mr-5 pr-xl-4 pl-2 underline-0 fs-lg-18 lh-lg-23 color-black-rock">haqqımızda</a></li>
                    <li><a href="http://nursecome/index.php#%C9%99laq%C9%99" class="fw-500 text-capitalize pl-2 underline-0 fs-lg-18 lh-lg-23 color-black-rock">əlaqə</a></li>
                </ul>
            </div>
            <div class="col-lg-4 text-right <?= (in_array($checkFileName, ['login.php', 'sign-up.php'])) ? '' : 'd-none' ?>">

                <a href="login.php" class=" mr-2 py-2 px-4 border border-12022F radius-60 d-inline-flex underline-0 color-black-rock">
                    <span class="py-1 px-3 text-capitalize fw-500 fs-lg-16 lh-lg-24">giriş</span>
                </a>


                <a href="sign-up.php" class="hover-darkest hover-node ml-1 py-2 px-4 bg-bondi-blue radius-60 d-inline-flex underline-0 color-black-rock">
                    <span class="py-1 px-2 text-capitalize color-white fw-500 fs-lg-16 lh-lg-24">qeydiyyat</span>
                </a>
            </div>

            <div class="col-lg-7 justify-content-end d-inline-flex-y-center <?= (in_array($checkFileName, ['login.php', 'sign-up.php'])) ? 'd-none' : '' ?>">
               <div class="d-flex-y-center <?= (in_array($checkFileName, ['personal-cabinet.php', 'cabinet-active.php', 'cabinet-progress.php'])) ? '' : 'd-none' ?>">
                  <a href="#" class="d-inline-flex-xy square-40 bg-lilac radius-50p">
                    <span class="icon icon-phone-call square-22"></span>
                  </a>

                  <a href="#" class="underline-0 fw-500 fs-14 lh-24 color-black-rock ml-2 mr-4">051 310 12 69</a>
               </div>

                <!--Notification============================================= -->
                <span class="d-inline-flex-xy square-40 bg-lilac radius-50p mr-2 pos-relative pointer js-notification events-none">
                    <span class="icon icon-notification rect-17-20"></span>
                    <span class="square-16 radius-50p d-inline-flex-xy bg-pomegranate pos-absolute number-lg-pos">
                        <span class="fs-12 lh-16 color-white">2</span>
                    </span>

                    <!--Notification dropdown============================================= -->
                    <span class="action-dropdown action-dropdown-notification hover radius-20 box-shadow z-100 top-lg-55" >
                        <span class="border-bot border-E7E5EA d-block">
                            <h2 class="fs-22 lh-30 color-black-rock fw-700 ml-3 my-2 py-1">Bildirişlərim</h2>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-flex-y-center py-2" data-custom-open='modal-order-accepted'>
                            <span class="bg-whisper square-34 radius-50p d-flex-xy">
                                <span class="icon icon-corner-down  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1" >
                                <span class="fs-14 lh-18 color-black-rock d-block">Sifarişiniz qəbul edildi</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">20 dəqiqə əvvəl</span>
                            </div>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-flex-y-center py-2" data-custom-open='modal-specialist-appointed'>
                            <span class="bg-whisper square-34 radius-50p d-flex-xy">
                                <span class="icon icon-check-circle  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1">
                                <span class="fs-14 lh-18 color-black-rock d-block">Sizə mütəxəssis təyin olundu</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">4 saat əvvəl</span>
                            </div>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-flex-y-center py-2">
                            <span class="bg-whisper square-34 radius-50p d-flex-xy">
                                <span class="icon icon-info  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1">
                                <span class="fs-14 lh-18 color-black-rock d-block">Mütəxəssis sifarişdən imtina etdi. Bir daha yoxlayın</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">2 gün əvvəl 16:30</span>
                            </div>
                        </span>
                        <span class="radius-12 hover-node hover-notification pl-2 mx-2 d-flex-y-center py-2 mb-2">
                            <span class="bg-whisper square-34 radius-50p d-flex-xy">
                                <span class="icon icon-triangle  square-18"></span>
                            </span>
                            
                            <div class="ml-2 my-1">
                                <span class="fs-14 lh-18 color-black-rock d-block">Daxil etdiyiniz məlumatlara uyğun mütəxəssis tapılmadı</span>
                                <span class="opacity-5 color-black-rock fs-11 lh-14">23.01.2020</span>
                            </div>
                        </span>
                    </span>
                    
                </span>

                <a href="#" class="d-inline-flex radius-28 ml-4 hover-darkest hover-node  py-1 px-4 bg-bondi-blue underline-0 <?= (in_array($checkFileName, ['personal-cabinet.php', 'cabinet-active.php', 'cabinet-progress.php'])) ? 'd-none' : '' ?>">
                    <span class="color-white fs-16 lh-26 fw-700 py-2">Çağır gəlsin</span>
                </a>
                
                <!--Profile============================================= -->
                <span class=" underline-0 border border-E7E5EA radius-40 ml-3 py-2 pl-2 pr-4 pointer js-action-btn events-none">
                    <div class="d-inline-flex-y-center">
                        <span class="icon icon-profile square-34 ml-1"></span>
                        <div class="ml-2">
                            <span class="d-block text-capitalize color-black-rock fs-14 lh-18 fw-500">vahid quluzadə</span>
                            <span class="d-block fs-12 lh-16 color-black-rock opacity-6">+994 55 434 04 38</span>
                        </div>
                        <span class="icon icon-down square-18 ml-4"></span>
                    </div>
                   

                   
                    
                    <!--Profile dropdown============================================= -->
                    <div class="action-dropdown hover z-100 w-230 radius-bot-left top-lg-55 right-15">
                        
                            <a href="order.php" class="underline-0 color-black-rock border-top border-E7E5EA py-2 d-flex-y-center"> 
                                <span class="icon icon-file-text square-22 ml-3 my-1"></span>
                                <span class="lh-18 ml-3 ">Sifarişlərim</span>
                            </a>
                            <a href="information.php" class="underline-0 color-black-rock border-top border-E7E5EA py-2 d-flex-y-center"> 
                                <span class="icon icon-user square-22 ml-3 my-1 invert-1   "></span>
                                <span class="lh-18 ml-3 ">Məlumatlarım</span>
                            </a>
                            <a href="support.php" class="underline-0 color-black-rock border-top border-E7E5EA py-2 d-flex-y-center"> 
                                <span class="icon icon-message square-22 ml-3 my-1"></span>
                                <span class="lh-18 ml-3 ">Dəstək</span>
                            </a>
                            <a href="#" class="underline-0 color-black-rock border-top border-E7E5EA py-2 d-flex-y-center mb-2"> 
                                <span class="icon icon-log-out square-22 ml-3 my-1"></span>
                                <span class="lh-18 ml-3 ">Çıxış</span>
                            </a>
                       
                    </div>
                </span>
            </div>
        </div>
    </div>
</div>


<?php require_once 'inc/modal.php' ?>


