<?php require 'header.php'; ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Carrinho de Compras</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-table-container">
                            <table class="table table-cart">
                                <thead>
                                    <tr>
                                        <th class="product-col">Produto</th>
                                        <th class="price-col">Preço</th>
                                        <th class="qty-col">Quantidade</th>
                                        <th>Subtotal</th>
                                        <th>Opções</th>
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
                                            <input class="vertical-quantity form-control" type="text">
                                        </td>
                                        <td>R$17.90</td>
                                        <td>
                                            <div class="float-right">
                                                <a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
                                            </div>
                                        </td>
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
                                            <input class="vertical-quantity form-control" type="text">
                                        </td>
                                        <td>R$17.90</td>
                                        <td>
                                            <div class="float-right">
                                                <a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
                                            </div>
                                        </td>
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
                                            <input class="vertical-quantity form-control" type="text">
                                        </td>
                                        <td>R$17.90</td>
                                        <td>
                                            <div class="float-right">
                                                <a href="#" title="Remove product" class="btn-remove"><span class="sr-only">Remove</span></a>
                                            </div>
                                        </td>
                                    </tr>

                            
                              
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="4" class="clearfix">
                                            <div class="float-left">
                                                <a href="category.html" class="btn btn-outline-secondary">Continuar Comprando</a>
                                            </div>

                                            <div class="float-right">
                                                <a href="#" class="btn btn-outline-secondary btn-clear-cart">Limpar carrinho</a>
                                                <a href="#" class="btn btn-outline-secondary btn-update-cart">Atualizar Carrinho</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="cart-discount">
                            <h4>Aplicar cupom de desconto</h4>
                            <form action="#">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Digite o codigo do cupom"  required>
                                    <div class="input-group-append">
                                        <button class="btn btn-sm btn-primary" type="submit">Aplicar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="cart-summary">
                            <h3>Resumo</h3>

                            <h4>
                                <a data-toggle="collapse" href="#total-estimate-section" class="collapsed" role="button" aria-expanded="false" aria-controls="total-estimate-section">Calcular Frete</a>
                            </h4>

                            <div class="collapse" id="total-estimate-section">
                                <form action="#">
                                 
                                    <div class="form-group form-group-sm">
                                        <label>Digite seu CEP:</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group form-group-custom-control">
                                        <label>PAC</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="flat-rate">
                                            <label class="custom-control-label" for="flat-rate">R$5,00</label>
                                        </div>
                                    </div>

                                    <div class="form-group form-group-custom-control">
                                        <label>SEDEX</label>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="best-rate">
                                            <label class="custom-control-label" for="best-rate">R$15,00</label>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <table class="table table-totals">
                                <tbody>
                                    <tr>
                                        <td>Subtotal</td>
                                        <td>R$17.90</td>
                                    </tr>

                                    <tr>
                                        <td>Taxa</td>
                                        <td>R$0.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>Total</td>
                                        <td>R$17.90</td>
                                    </tr>
                                </tfoot>
                            </table>

                            <div class="checkout-methods">
                                <a href="checkout-shipping.html" class="btn btn-block btn-sm" style="background: #000; color:#fff">Finalizar Compra</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-6"></div>
        </main>
<?php require 'footer.php'; ?>