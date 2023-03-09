 <?= $this->extend('template/default') ?>

 <?= $this->section('content') ?>
 <section class="content-main">
     <div class="row mt-60">
         <div class="col-sm-12">
             <div class="w-50 mx-auto text-center">
                 <img src="<?= base_url() ?>/assets/imgs/theme/404.png" width="350" alt="Page Not Found" />
                 <h3 class="mt-40 mb-15">Oops! Page not found</h3>
                 <p>It's looking like you may have taken a wrong turn. Don't worry... it happens to the best of us. Here's a little tip that might help you get back on track.</p>
                 <a href="<?= base_url('/dashboard') ?>" class="btn btn-primary mt-4"><i class="material-icons md-keyboard_return"></i> Back to main</a>
             </div>
         </div>
     </div>
 </section>
 <!-- content-main end// -->
 <?= $this->endSection() ?>