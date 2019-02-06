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
            <div class="col-lg-9 order-lg-last dashboard-content">
                <div class="card">
                    <div class="card-header">
                        Editar Endereço
                    </div>
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-name">CEP:</label>
                                                <input type="text" class="form-control" id="acc-name" name="acc-name" required>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-mname">Logradouro</label>
                                                <input type="text" class="form-control" id="acc-mname" name="acc-mname">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="acc-mname">Complemento</label>
                                                <input type="text" class="form-control" id="acc-mname" name="acc-mname">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-lastname">Bairro</label>
                                                <input type="text" class="form-control" id="acc-lastname" name="acc-lastname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-lastname">Cidade</label>
                                                <input type="text" class="form-control" id="acc-lastname" name="acc-lastname" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group required-field">
                                                <label for="acc-lastname">Estado</label>
                                                <input type="text" class="form-control" id="acc-lastname" name="acc-lastname" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="required text-right">* Campos requeridos</div>
                            <div class="form-footer">
                                <a href="#"><i class="icon-angle-double-left"></i>Voltar</a>

                                <div class="form-footer-right">
                                    <button type="submit" class="btn btn-primary">Salvar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php require 'sidebar-dashboard.php'; ?>
        </div>
    </div>
    <div class="mb-5"></div>
</main>
<?php require 'footer.php'; ?>