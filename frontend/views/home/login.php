<div class="container mt-2">
    <section id="page-wrapper">
        <div class="wrapper">
            <div class="grid">
                <div class="grid__item large--one-third push--large--one-third text-center">
                    <div id="LoginForm" class="form-vertical">
                        <form accept-charset="UTF-8" action="<? echo base_url('home/handle_login') ?>" id="login" method="post">
                            <input name="form_type" type="hidden" value="login">
                            <input name="utf8" type="hidden" value="✓">
                            <h3><b>Đăng nhập</b></h3>
                            <div>
                                <label for="Email" class="hidden-label">Email<input type="email" name="email" id="Email" class="form-control" placeholder="Email" require> <?php echo $errors['email']; ?></label>
                            </div>
                            <div>
                                <label for="Password" class="hidden-label">Mật khẩu<input type="password" value="" name="password" id="Password" class="form-control" placeholder="Mật khẩu" require>
                                    <?php echo $errors['password']; ?></label>
                            </div>
                            <p>
                                <input type="submit" class="btn" value="Đăng nhập">
                            </p>
                            <p><a class="btn btn-control" href="<?php echo base_url('home/index') ?>">Trở về</a></p>
                            <p><a class="btn" href="/account/register" id="register_link">Đăng kí</a></p>
                            <p><a class="btn" href="#recover" id="RecoverPassword">Quên mật khẩu?</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>