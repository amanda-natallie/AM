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
                        Meus Pedidos
                    </div>
                    <div class="card-body">
                        <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="product-col">Código do Pedido</th>
                                        <th class="price-col">Valor Total da Compra</th>
                                        <th class="qty-col">Valor do Frete</th>
                                        <th>Data da Compra</th>
                                        <th>Opções</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-row">
                                        <td>87236487236</td>
                                        <td>R$659,05</td>                                        
                                        <td>R$59,05</td>                                        
                                        <td>12/10/2020</td>                                        
                                        <td><a href="detalhes-do-pedido.php" class="btn btn-outline-secondary">Detalhes</a></td>                                        
                                    </tr>
                                    <tr class="product-row">
                                        <td>87236487236</td>
                                        <td>R$659,05</td>                                        
                                        <td>R$59,05</td>                                        
                                        <td>12/10/2020</td>                                        
                                        <td><a href="detalhes-do-pedido.php" class="btn btn-outline-secondary">Detalhes</a></td>                                        
                                    </tr>
                                    <tr class="product-row">
                                        <td>87236487236</td>
                                        <td>R$659,05</td>                                        
                                        <td>R$59,05</td>                                        
                                        <td>12/10/2020</td>                                        
                                        <td><a href="detalhes-do-pedido.php" class="btn btn-outline-secondary">Detalhes</a></td>                                        
                                    </tr>
                                    <tr class="product-row">
                                        <td>87236487236</td>
                                        <td>R$659,05</td>                                        
                                        <td>R$59,05</td>                                        
                                        <td>12/10/2020</td>                                        
                                        <td><a href="detalhes-do-pedido.php" class="btn btn-outline-secondary">Detalhes</a></td>                                        
                                    </tr>

                              
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="index.php" class="btn btn-outline-secondary">Continuar Comprando</a>
                                            </div>

                                           
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                    </div>
                </div>
            </div>
            <?php require 'sidebar-dashboard.php'; ?>
        </div>
    </div>
    <div class="mb-5"></div>
</main>
<?php require 'footer.php'; ?>