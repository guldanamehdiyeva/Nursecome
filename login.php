<?php require_once 'inc/header.php' ?>

<span class="img-login-bg bg-no-repeat bg-cover pos-absolute  w-54p h-100p top-0 right-0 z-n1 d-none d-xl-flex"></span>
<span class="header-background w-54p right-0 top-0 z-n1 h-140 d-none d-xl-flex"></span>

<div>
    
    <section class="container container-custom">
        <div class="row justify-content-center justify-content-xl-start">
            <div class="col-lg-10 col-xl-5  mt-3 mt-lg-0">
                <h2 class=" fw-700 fs-36 lh-46 color-black-rock mt-4 mt-lg-2 mb-3">Giriş</h2>
                <p class="fs-18 lh-28 color-black-rock my-0">Xoş gəlmisiniz, sizin üçün darıxmışdıq</p>

                <form action="" class="mt-4 pt-2 mt-lg-5 pt-lg-3  mb-2">
                    <label class="d-inline-flex-y-center w-100p h-56 bg-mischka radius-28 pr-1 mb-3">
                        <span class="icon icon-mail square-24 ml-3 mr-1"></span>
                        <input type="email" required  class="w-100p ml-3 border-0 outline-0 bg-transparent" placeholder="Email" >
                    </label>

                    <label class="d-inline-flex-y-center w-100p h-56 bg-mischka radius-28 pr-1">
                        <span class="icon icon-lock square-24 ml-3 mr-1"></span>
                        <input type="password" required class="w-100p ml-3 border-0 outline-0 bg-transparent" placeholder="Şifrə" >
                    </label>
                    
                    <div class="d-inline-flex-y-center justify-content-between w-100p mt-4 pt-lg-2">
                        <div class="d-inline-flex-y-center ml-4">

                            <div class="checkbox-wrapper mr-1">
                                <input type="checkbox"  id="check" class="d-none">
                                <label for="check" class="checkmark  d-block square-16 border border-089BAB pointer  radius-2 pos-relative"></label>
                            </div>
                           
                            <span class="ml-3 color-black-rock opacity-5 fs-16 lh-26">Məni yadda saxla</span>
                        
                        </div>
                        
                        <a href="#" class="fw-700 fs-16 lh-26 color-black-rock underline-0 d-none d-lg-flex">Şifrəni unutmusan?</a>
                    </div>

                    <input type="submit" value="Giriş" class="hover-node hover-darkest pointer w-100p bg-bondi-blue radius-28 mt-4 py-3 color-white fw-700 border-0 outline-0 bg-transparent">
                </form>

               
                
                <a href="#" class="fw-700 w-100p fs-16 lh-26 color-black-rock underline-0 justify-content-center d-flex d-lg-none mt-4">Şifrəni unutmusan?</a>
                <span class="w-100p h-1 border-E7E5EA border-bot mt-4 pt-2 pt-lg-3 d-flex"></span>

                <div class="d-lg-flex-y-center mt-4 mb-4 pb-2 pt-2 pt-lg-3 w-100p text-center">
                    <span class="fw-700 fs-16 lh-26 color-black-rock d-block ">Hələ də hesabınız yoxdur?</span> 
                    <a href="http://nursecome/sign-up.php" class="underline-0 fw-700 fs-16 lh-26 ml-1 color-bondi-blue2"> Qeydiyyatdan keçin</a>
                </div>
                
            </div>
            
        </div>
    </section>
</div>


<?php require_once 'inc/foot.php' ?>