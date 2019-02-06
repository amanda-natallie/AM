<?php require 'header.php'; ?>

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="#">Categoria</a></li>
                <li class="breadcrumb-item active" aria-current="page">subcategoria</li>
            </ol>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="product-single-container product-single-default">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 product-single-gallery">
                            <div class="product-slider-container product-item">
                                <div class="product-single-carousel owl-carousel owl-theme">
                                    <div class="product-item">
                                        <img class="product-single-image" src="assets/images/produto.jpg" data-zoom-image="assets/images/produto.jpg"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="assets/images/produto.jpg" data-zoom-image="assets/images/produto.jpg"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="assets/images/produto.jpg" data-zoom-image="assets/images/produto.jpg"/>
                                    </div>
                                    <div class="product-item">
                                        <img class="product-single-image" src="assets/images/produto.jpg" data-zoom-image="assets/images/produto.jpg"/>
                                    </div>
                                </div>
                                <span class="prod-full-screen">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                <div class="col-3 owl-dot">
                                    <img src="assets/images/produto.jpg"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="assets/images/produto.jpg"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="assets/images/produto.jpg"/>
                                </div>
                                <div class="col-3 owl-dot">
                                    <img src="assets/images/produto.jpg"/>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-md-6">
                            <div class="product-single-details">
                                <h1 class="product-title">Nome do Produto</h1>


                                <div class="price-box">
                                    <span class="product-price">R$81,00</span>
                                </div>

                                <div class="product-desc">
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                                </div>
                                <div class="product-filters-container">
                                    <div class="product-single-filter">
                                        <label>Cor:</label>
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #6085a5;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #b19970;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #11426b;"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="product-action product-all-icons">
                                    <div class="product-single-qty">
                                        <input class="horizontal-quantity form-control" type="text">
                                    </div><!-- End .product-single-qty -->

                                    <a href="cart.html" class="paction add-cart" title="Add to Cart">
                                        <span>Adicionar ao Carrinho</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-single-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Descrição do produto</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                            <div class="product-desc-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                <ul>
                                    <li><i class="icon-ok"></i>Any Product types that You want - Simple, Configurable</li>
                                    <li><i class="icon-ok"></i>Downloadable/Digital Products, Virtual Products</li>
                                    <li><i class="icon-ok"></i>Inventory Management with Backordered items</li>
                                </ul>
                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div><!-- End .product-desc-content -->
                        </div>

                    </div><!-- End .tab-content -->
                </div><!-- End .product-single-tabs -->
            </div><!-- End .col-lg-9 -->

            <div class="sidebar-overlay"></div>
            <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
            <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                <div class="sidebar-wrapper">

                    <div class="widget widget-info">
                        <ul>
                            <li>
                                <i class="icon-shipping"></i>
                                <h4>PRODUÇÃO<br>24H</h4>
                            </li>
                            <li>
                                <i class="icon-us-dollar"></i>
                                <h4>FRETE GRÁTIS<br>PARA TODO BRASIL</h4>
                            </li>
                            <li>
                                <i class="icon-online-support"></i>
                                <h4>PERSONALIZE<br>SEU PRODUTO</h4>
                            </li>
                        </ul>
                    </div>

                </div>
            </aside>
        </div>
    </div>
    <div class="featured-section">
        <div class="container">
            <h2 class="carousel-title">Produtos Relacionados</h2>

            <div class="featured-products owl-carousel owl-theme owl-dots-top">

                <div class="product">
                    <figure class="product-image-container">
                        <a href="" class="product-image">
                            <img src="assets/images/produto.jpg" alt="">
                        </a>                                
                    </figure>
                    <div class="product-details">                                
                        <h2 class="product-title">
                            <a href="">Papel Floral Ref 03 - Pérola Prata com Preto - Tam. 32x65cm - 180g/m²</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">R$74,10</span>
                        </div>
                        <div class="product-action">                                    
                            <a href="" class="paction add-cart" title="Add to Cart">
                                <span>Ver Detalhes</span>
                            </a>                                    
                        </div>
                    </div>
                </div>
                <div class="product">
                    <figure class="product-image-container">
                        <a href="" class="product-image">
                            <img src="assets/images/produto.jpg" alt="">
                        </a>                                
                    </figure>
                    <div class="product-details">                                
                        <h2 class="product-title">
                            <a href="">Papel Floral Ref 03 - Pérola Prata com Preto - Tam. 32x65cm - 180g/m²</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">R$74,10</span>
                        </div>
                        <div class="product-action">                                    
                            <a href="" class="paction add-cart" title="Add to Cart">
                                <span>Ver Detalhes</span>
                            </a>                                    
                        </div>
                    </div>
                </div>
                <div class="product">
                    <figure class="product-image-container">
                        <a href="" class="product-image">
                            <img src="assets/images/produto.jpg" alt="">
                        </a>                                
                    </figure>
                    <div class="product-details">                                
                        <h2 class="product-title">
                            <a href="">Papel Floral Ref 03 - Pérola Prata com Preto - Tam. 32x65cm - 180g/m²</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">R$74,10</span>
                        </div>
                        <div class="product-action">                                    
                            <a href="" class="paction add-cart" title="Add to Cart">
                                <span>Ver Detalhes</span>
                            </a>                                    
                        </div>
                    </div>
                </div>
                <div class="product">
                    <figure class="product-image-container">
                        <a href="" class="product-image">
                            <img src="assets/images/produto.jpg" alt="">
                        </a>                                
                    </figure>
                    <div class="product-details">                                
                        <h2 class="product-title">
                            <a href="">Papel Floral Ref 03 - Pérola Prata com Preto - Tam. 32x65cm - 180g/m²</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">R$74,10</span>
                        </div>
                        <div class="product-action">                                    
                            <a href="" class="paction add-cart" title="Add to Cart">
                                <span>Ver Detalhes</span>
                            </a>                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require 'footer.php'; ?>