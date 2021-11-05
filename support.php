<?php require_once 'inc/header.php' ?>


<div>
        <section class="container pb-1 pb-xl-0">
            <div class="row justify-content-between h-xl-799 mb-5 pb-2 mb-xl-0 pb-xl-0" id="əlaqə">
                <div class="col-md-10 col-xl-5 d-xl-flex-x-center mt-4 pt-3 mt-lg-5 pt-lg-5 " >
                    <div class="w-xl-350 ">
                        <h2 class="color-black-rock  lh-46 fs-36 fs-lg-48 lh-lg-56 fw-700   my-0 ">Dəstək</h2>
                        <p class="color-black-rock opacity-5 fs-16 lh-24 ls-04 fs-lg-18 lh-lg-28 my-0 mt-lg-4 pt-3 mb-lg-4 pb-lg-1">Hər hansı sualınız yaranarsa bizə zəng edə və ya məktub yaza bilərsiniz</p>
                        
                        <?php
                            $icons = [
                                'phone' => '(+994) 51 310 12 69',
                                'mail' => 'info@nursecome.az',
                                'location' => 'Səbail rayonu, Nizami küçəsi 140',
                            ];
                        ?>

                        <?php foreach($icons as $key => $icon) : ?>
                            <div class="d-flex  mt-4 mt-lg-4 pt-2">
                                <span class="icon icon-<?= $key ?> square-24 "></span>
                                <span class="color-black-rock ls-03 fw-500 fs-14 lh-24 ml-3"><?= $icon ?></span>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>

                <div class="col-md-9 col-lg-8 col-xl-6 d-xl-flex-x-center mt-lg-5 pt-lg-1  mt-4 pt-3 pb-1 ">
                    <div class="w-xl-440 h-lg-472 border border-E7E5EA radius-32 py-3 px-3">
                        <form action="" id="form" class="py-4 px-1">
                            <label>
                                <input type="text" required name="" id="" class="border-0 radius-28 outline-0 bg-mischka w-100p h-56 mb-4 color-black-rock pl-3" placeholder="Ad və soyad" >
                            </label>

                            <label>
                                <input type="email" required  name="" id="" class="border-0 radius-28 outline-0 bg-mischka w-100p h-56 mb-4 color-black-rock pl-3" placeholder="E-mail" >
                            </label>

                            <label>
                                <textarea name="message"  class="border-0 radius-28 outline-0 bg-mischka w-100p mb-4 h-152 color-black-rock pl-3 pt-3 resize-none" placeholder="Mesajınız" ></textarea>
                            </label>
                            
                            <input type="submit" id="submit" value="Mesaj göndər" class="pointer hover-darkest hover-node border-0 outline-0 radius-28 w-100p pointer bg-bondi-blue color-white py-3 fs-lg-16 lh-lg-26 fw-700">
                        </form>
                    </div>
                </div>
            </div>
        </section>
</div>

<?php require_once 'inc/footer.php' ?>