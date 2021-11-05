<?php require_once 'inc/header.php' ?>


<div>
    <section class="container h-xl-799 mb-5 pb-5 mb-xl-0 pb-xl-0">
        <div class="row  justify-content-center mb-2 mb-lg-5 pb-4">
            <div class="col-lg-10 text-lg-center mb-lg-2">
                <h2 class="color-black-rock fs-36 lh-46 fs-lg-48 lh-lg-56 mt-4 pt-3 pt-lg-1 mb-0 ">Məlumatlarım</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-5 mb-xl-0">
            <div class="col-lg-10">
                <form action="" novalidate>
                    <div class="row justify-content-center">
                        <div class="col-xl-5">
                            <label class="d-inline-flex-y-center w-100p h-56 bg-mischka radius-28 pr-1 mb-3">
                                <input type="text"  required class="w-100p ml-4 border-0 outline-0 bg-transparent" placeholder="Ad, soyad" >
                            </label>

                            <label class="d-inline-flex-y-center w-100p h-56 bg-mischka radius-28 pr-1 mb-3">
                                <input type="email" required class="w-100p ml-4 border-0 outline-0 bg-transparent" placeholder="Email" >
                            </label>

                            <div class="d-inline-flex-y-center justify-content-between w-100p mb-3">
                                <label class="d-flex-y-center w-48p h-56">
                                    <select class="selectric-custom border-0 color-black-rock fs-16 lh-26" required>
                                        <option value="" class="d-none">055</option>
                                        <option value="1">050</option>
                                        <option value="2">070</option>
                                        <option value="3">077</option>
                                        <option value="4">051</option>
                                        
                                    </select>
                                </label>

                                <label class="d-flex-y-center w-48p h-56 bg-mischka radius-28 pr-1">
                                    <input type="text"  required class="w-md-70p w-60p ml-4 border-0 outline-0 bg-transparent" placeholder="_ _ _  _ _  _ _" >
                                </label>
                            </div>

                            <div class="d-inline-flex-y-center justify-content-between w-100p mb-3">
                                <label class="d-flex-y-center w-48p h-56">
                                    <select class="selectric-custom border-0 color-black-rock fs-16 lh-26" required>
                                        <option value="" class="d-none">Yaş</option>
                                        <option value="1">18-25</option>
                                        <option value="2">26-35</option>
                                        <option value="3">36-40</option>
                                        <option value="4">41-60</option>
                                        
                                    </select>
                                </label>

                                <label class="d-flex-y-center w-48p h-56">
                                    <select class="selectric-custom border-0 color-black-rock fs-16 lh-26" required>
                                        <option value="" class="d-none">Cins</option>
                                        <option value="1">Qadın</option>
                                        <option value="2">Kişi</option>   
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="col-xl-5">
                            <label class="d-flex-y-center w-100p h-56 mb-3">
                                <select class="selectric-custom border-0 color-black-rock fs-16 lh-26" required>
                                    <option value="" class="d-none">Məhkumluğunuz olubmu?</option>
                                    <option value="1">Olub</option>
                                    <option value="2">Olmayıb</option>   
                                </select>
                            </label>

                            <label class="d-inline-flex-y-center w-100p h-56 bg-mischka radius-28 pr-1 mb-3">
                                <input type="text" required class="w-100p ml-4 border-0 outline-0 bg-transparent" placeholder="Yaşadığınız ünvan" >
                            </label>

                            <div class="d-inline-flex-y-center justify-content-between w-100p mb-3">
                                <label class="d-flex w-48p h-56 bg-mischka radius-28 pr-1">
                                    <input type="password" required class="w-100p ml-4 border-0 outline-0 bg-transparent" placeholder="Şifrə" >
                                </label>

                                <label class="d-flex w-48p h-56 bg-mischka radius-28 pr-1">
                                    <input type="password" required class="w-100p ml-4 border-0 outline-0 bg-transparent d-none d-md-flex" placeholder="Yeni şifrə" >
                                    <input type="password" required class="w-100p ml-4 border-0 outline-0 bg-transparent d-md-none" placeholder="Şifrə təkrarı" >
                                </label>
                            </div>  

                            <label class="d-inline-flex-y-center w-100p h-56 bg-mischka radius-28 pr-1">
                                <input type="password" class="w-100p ml-3 border-0 outline-0 bg-transparent" placeholder="Yeni şifrənin təkrarı" >
                            </label>
                        </div>
                        
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-5">
                            <input type="submit" value="Yadda saxla" class="hover-darkest hover-node pointer w-100p bg-bondi-blue radius-28 mt-4 py-3 color-white fw-700 border-0 outline-0 bg-transparent">
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
</div>

<?php require_once 'inc/footer.php' ?>