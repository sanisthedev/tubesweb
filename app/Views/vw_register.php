<?= $this->extend('layout/admin/layoutregister') ?>

<?= $this->section('contentregister') ?>
 
<div class="container position-sticky z-index-sticky top-0">
    
  </div>
  <main class="main-content  mt-0">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <h4>Periksa Kembali Form Anda</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
            <?php endif; ?>
    <section>        
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Sign Up</h5>
            </div>
            <div class="card-body">
              <form method="post" action="<?= base_url(); ?>/register/process">
                <?= csrf_field(); ?>
                    
                     <div class="mb-3">
                      <input type="text" name="username" id="username" class="form-control form-control-lg" placeholder="Username" aria-label="Username" required autofocus>
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" required>
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password_conf" id="password_conf" class="form-control form-control-lg" placeholder="Confirm Password" aria-label="Confirm Password" required autofocus>
                    </div>
                    <div class="mb-3">
                      <input type="name" name="name" id="name" class="form-control form-control-lg" placeholder="Nama" aria-label="Nama" required>
                    </div>
                    <div class="mb-3">
                      <select name="role_id" id="role_id" class="form-control form-control-lg" required>
                        <option value="">Pilih role</option>
                        <?php foreach ($roles as $role) { ?>
                          <option value="<?= $role['id'] ?>"><?= ucwords($role['nama']) ?></option>
                        <?php } ?>
                      </select>
                    </div>

                <div class="form-check form-check-info text-start">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                  <label class="form-check-label" for="flexCheckDefault">
                    I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="<?= base_url('login/index') ?>" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?= $this->endSection() ?>  