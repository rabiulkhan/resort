<div class="pg-opt">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Sign in</h2>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Sign in</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="slice slice-lg bg-image" style="background-image:url(<?php echo base_url();?>template/front/images/backgrounds/login_bg.jpg);">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="wp-block default user-form user-form-alpha no-margin"> 
                        <div class="form-header">
                            <h2 class="c-white">Sign in to your account</h2>
                        </div>
                        <div class="form-body">
                            <form action="" id="frmLogin" class="sky-form">                                    
                                <fieldset>                  
                                    <section>
                                        <div class="form-group">
                                            <label class="label c-white">Email</label>
                                            <label class="input c-gold">
                                                <i class="icon-append fa fa-envelope"></i>
                                                <input type="email" name="email">
                                            </label>
                                        </div>     
                                    </section>
                                    <section>
                                        <div class="form-group">
                                            <label class="label c-white">Password</label>
                                            <label class="input c-gold">
                                                <i class="icon-append fa fa-key"></i>
                                                <input type="password" name="password">
                                            </label>
                                        </div>     
                                    </section> 
                                    <section>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="checkbox c-white"><input type="checkbox" name="remember" checked><i></i>Keep me logged in</label>
                                            </div>
                                        </div>
                                    </section>

                                    <section>
                                        <button class="btn btn-gold btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                            <span>Signin</span>
                                        </button>
                                    </section>
                                </fieldset>  
                            </form>  
                        </div>
                        <div class="form-footer">
                            <p class="c-white">Lost your password? <a href="#" class="c-white">Click here to recover.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>