<?php require "header.php"; ?>

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
           
            <div class="col-lg-8">
                <div class="order-summary">
                    <h3>Resumo do Pedido</h3>

                    <h4>
                        <a data-toggle="collapse" href="#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">2 produtos no carrinho</a>
                    </h4>

                    <div class="collapse in" id="order-cart-section">
                        <table class="table table-mini-cart">
                            <tbody>
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="produto.php" class="product-image">
                                                <img src="assets/images/produto.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="produto.php">Nome do Produto Aqui</a>
                                            </h2>

                                            <span class="product-qty">Qdt: 4</span>
                                        </div>
                                    </td>
                                    <td class="price-col">R$156.00</td>
                                </tr>
                                <tr>
                                    <td class="product-col">
                                        <figure class="product-image-container">
                                            <a href="produto.php" class="product-image">
                                                <img src="assets/images/produto.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <div>
                                            <h2 class="product-title">
                                                <a href="produto.php">Nome do Produto Aqui</a>
                                            </h2>

                                            <span class="product-qty">Qdt: 4</span>
                                        </div>
                                    </td>
                                    <td class="price-col">R$220.00</td>
                                </tr>
                            </tbody>    
                        </table>
                    </div><!-- End #order-cart-section -->
                </div><!-- End .order-summary -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Enviar Para:
                        <a href="editar-enderecos.php" title="Edit" class="step-title-edit"><span class="sr-only">Editar</span><i class="icon-pencil"></i></a>
                    </h3>

                    <address>
                        Desmond Mason <br>
                        123 Street Name, City, USA <br>
                        Los Angeles, California 03100 <br>
                        United States <br>
                        (123) 456-7890
                    </address>
                </div><!-- End .checkout-info-box -->

                <div class="checkout-info-box">
                    <h3 class="step-title">Método de Envio: 
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Editar</span><i class="icon-pencil"></i></a>
                    </h3>

                    <p>SEDEX - 654 dias úteis</p>
                </div><!-- End .checkout-info-box -->
                <div class="checkout-info-box">
                    <h3 class="step-title">Método de Pagamento: 
                        <a href="#" title="Edit" class="step-title-edit"><span class="sr-only">Editar</span><i class="icon-pencil"></i></a>
                    </h3>

                    <p>PagSeguro - Sua compra segura</p>
                <button type="submit" class="btn btn-primary btn-md">Continuar</button>
                </div>
                
            </div>
            <?php require 'sidebar-dashboard.php'; ?>
     
        </div>
    </div>
    <div class="mb-6"></div>
</main>

<?php require "footer.php"; ?>