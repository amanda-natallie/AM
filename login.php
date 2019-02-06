<?php require 'header.php'; ?>

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Painel de Controle do Cliente</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title mb-2">Login</h2>

                <form action="#" class="mb-1">
                    <label for="login-email">Endereço de E-mail<span class="required">*</span></label>
                    <input type="email" class="form-input form-wide mb-2" id="login-email" required="">

                    <label for="login-password">Senha <span class="required">*</span></label>
                    <input type="password" class="form-input form-wide mb-2" id="login-password" required="">

                    <div class="form-footer">
                        <button type="submit" class="btn btn-md" style="color:#fff;background:#000">Entrar</button>
                    </div>
                    <a href="esqueci-minha-senha.php" class="forget-password"> Esqueceu sua Senha?</a>
                </form>
            </div><!-- End .col-md-6 -->

            <div class="col-md-6">
                <h2 class="title">Cadastre-se</h2>
                
                <form action="#">
                    <label for="register-email">Endereço de Email <span class="required">*</span></label>
                    <input type="email" class="form-input form-wide mb-2" id="register-email" required="">

                    <label for="register-password">Escolha uma senha: <span class="required">*</span></label>
                    <input type="password" class="form-input form-wide mb-2" id="register-password" required="">

                    <div class="form-footer">
                        <button type="submit" class="btn btn-md" style="color:#fff;background:#000">Continuar</button>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" checked="" id="newsletter-signup">
                            <label class="custom-control-label" for="newsletter-signup">Quero receber novidades e promoções</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="mb-5"></div>
</main>
<?php require 'footer.php'; ?>