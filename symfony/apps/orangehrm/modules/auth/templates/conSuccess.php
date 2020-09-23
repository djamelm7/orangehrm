
<div class="container">
        <div class="row ">
            <div class="col-md-12 mt-5 mb-3 mr ">
            <h5 class="text-center text-white "> [°} By Djamel.tms</h5>
        </div>
     <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
         <div class="cntr d-flex justify-content-center align-items-center">
           <div class="card mb-5 animate__animated animate__fadeIn">
            <div class="card-body ">
                <h5 class="card-title text-center my-5">
                    Connectez-vous
                </h5>
                <form id="frmLogin" class="form-signin" method="post" action="<?php echo url_for('auth/validateCredentials'); ?>">
                <?php
                    echo $form->renderHiddenFields(); //csrf_token
                ?>
                    <div class="form-label-group my-5">
                    <?php echo $form['Username']->render(); ?>

                    </div>
      
                    <div class="form-label-group">
                    <?php echo $form['Password']->render(); ?>

                    </div>
                    <div class="row" >
                        <div class="col-md-6 col-sm-5  ">
                    <div class="custom-control custom-checkbox mt-3 mb-5 fn">
                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                      <label class="custom-control-label text-muted fn" for="customCheck1">Se souvenir de moi </label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-7 mt-3 mb-5 md ">

                    <a href="<?php echo url_for('auth/requestPasswordResetCode'); ?>" class="ft">Mot de pass oublié ?</a>
                </div>
            </div>
            <?php if (!empty($message)) : ?>
                <span id="spanMessage" class="text-danger">*<?php echo __($message); ?></span>

                    <?php endif; ?>
            <input type="submit" value="SE CONNECTER" id="btnLogin"class="btn btn-lg  btn-block text-uppercase btco">
           
                    <p class="text-muted text-center mt-4 ft"> Vous n'avez pas de compte ? <a href="">Contactez-nous! </a></p>
                </form>
            </div>
        </div> 
    </div>
</div>
    </div>
    </div>


    