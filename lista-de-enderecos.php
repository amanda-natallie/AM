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
                       Lista de Endereços
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="">Endereço 1</h4>
                                <address>
                                    Rua Quiari, 200, Bairro Garças, <br>Pampulha/Belo Horizonte - MG<br>CEP: 02658-59<br>
                                    <a href="editar-enderecos.php">Editar Endereço</a>
                                </address>
                            </div>
                            <div class="col-md-6">
                                <h4 class="">Endereço 2</h4>
                                <address>
                                    Rua Quiari, 200, Bairro Garças, <br>Pampulha/Belo Horizonte - MG<br>CEP: 02658-59<br>
                                    <a href="editar-enderecos.php">Editar Endereço</a>
                                </address>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="">Endereço 1</h4>
                                <address>
                                    Rua Quiari, 200, Bairro Garças, <br>Pampulha/Belo Horizonte - MG<br>CEP: 02658-59<br>
                                    <a href="editar-enderecos.php">Editar Endereço</a>
                                </address>
                            </div>
                            <div class="col-md-6">
                                <h4 class="">Endereço 2</h4>
                                <address>
                                    Rua Quiari, 200, Bairro Garças, <br>Pampulha/Belo Horizonte - MG<br>CEP: 02658-59<br>
                                    <a href="editar-enderecos.php">Editar Endereço</a>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php require 'sidebar-dashboard.php'; ?>
        </div>
    </div>

    <div class="mb-5"></div>
</main>
<?php require 'footer.php'; ?>