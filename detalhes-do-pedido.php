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
                                        <th class="product-col">Produto</th>
                                        <th class="price-col">Preço</th>
                                        <th class="qty-col">Quantidade</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="produto.php" class="product-image">
                                                    <img src="assets/images/produto.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <h2 class="product-title">
                                                <a href="produto.php">Nome do Produto</a>
                                            </h2>
                                        </td>
                                        <td>R$17.90</td>
                                        <td>
                                           10
                                        </td>
                                        <td>R$17.90</td>
                                        
                                    </tr>
                                    <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="produto.php" class="product-image">
                                                    <img src="assets/images/produto.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <h2 class="product-title">
                                                <a href="produto.php">Nome do Produto</a>
                                            </h2>
                                        </td>
                                        <td>R$17.90</td>
                                        <td>
                                           10
                                        </td>
                                        <td>R$17.90</td>
                                        
                                    </tr>
                                    <tr class="product-row">
                                        <td class="product-col">
                                            <figure class="product-image-container">
                                                <a href="produto.php" class="product-image">
                                                    <img src="assets/images/produto.jpg" alt="product">
                                                </a>
                                            </figure>
                                            <h2 class="product-title">
                                                <a href="produto.php">Nome do Produto</a>
                                            </h2>
                                        </td>
                                        <td>R$17.90</td>
                                        <td>
                                           10
                                        </td>
                                        <td>R$17.90</td>
                                        
                                    </tr>

                            
                              
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="index.php" class="btn btn-outline-secondary">Continuar Comprando</a>
                                                <a href="meus-pedidos.php" class="btn btn-outline-secondary">Voltar para pedidos</a>
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