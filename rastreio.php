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
                       Rastreie seus Pedidos
                    </div>
                    <div class="card-body">
                        <h5>Pedido de numero 34555 <a href="meus-pedidos.php">Ver Pedido</a></h5>
                        <strong>Numero de Rastreio:</strong>
                        BR857584984657498ASDSAD
                        <br>
                        <a target="_blank" href="https://www2.correios.com.br/sistemas/rastreamento/">clique aqui para rastrear <i class="fa fa-external-link"></i></a>
                        <hr>
                        <h5>Pedido de numero 65498 <a href="meus-pedidos.php">Ver Pedido</a></h5>
                        <strong>Numero de Rastreio:</strong>
                        BR857RWEWR84657498ASDSAD
                        <br>
                        <a target="_blank" href="https://www2.correios.com.br/sistemas/rastreamento/">clique aqui para rastrear <i class="fa fa-external-link"></i></a>
                        <hr>
                        <h5>Pedido de numero 4564 <a href="meus-pedidos.php">Ver Pedido</a></h5>
                        <strong>Numero de Rastreio:</strong>
                        BR857584WER57498ASDSAD
                        <br>
                        <a target="_blank" href="https://www2.correios.com.br/sistemas/rastreamento/">clique aqui para rastrear <i class="fa fa-external-link"></i></a>
                       
                    </div>
                </div>
            </div>
            <?php require 'sidebar-dashboard.php'; ?>
        </div>
    </div>
    <div class="mb-5"></div>
</main>
<?php require 'footer.php'; ?>