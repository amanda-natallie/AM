<?php require 'header.php'; ?>

<main class="main">
    <div class="banner banner-cat" style="background-image: url('assets/images/banners/banner-top.jpg');">
        <div class="banner-content container">
            <h2 class="banner-subtitle">confira nossos mais de <span>200</span></h2>
            <h1 class="banner-title">
                PRODUTOS incríveis
            </h1>
            <a href="#" class="btn btn-dark">Saiba Mais</a>
        </div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb mt-0">
                <li class="breadcrumb-item"><a href=""><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item"><a href="">Categorias</a></li>
                <li class="breadcrumb-item active" aria-current="page">Produtos</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="row row-sm">
                    <?php for($i=1;$i<=21;$i++) { ?>
                    <div class="col-6 col-md-4">
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
                    <?php } ?>
                </div>

                <nav class="toolbox toolbox-pagination">
                    
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><span>...</span></li>
                        <li class="page-item"><a class="page-link" href="#">15</a></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div><!-- End .col-lg-9 -->

            <aside class="sidebar-shop col-lg-3 order-lg-first">
                <div class="sidebar-wrapper">
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-1" role="button" aria-expanded="true" aria-controls="widget-body-1">Categoria 1</a>
                        </h3>

                        <div class="collapse show" id="widget-body-1">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">SubCategoria 1</a></li>
                                    <li><a href="#">SubCategoria 2</a></li>
                                    <li><a href="#">SubCategoria 3</a></li>
                                    <li><a href="#">SubCategoria 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="false" aria-controls="widget-body-1">Categoria 2</a>
                        </h3>

                        <div class="collapse show" id="widget-body-2">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">SubCategoria 1</a></li>
                                    <li><a href="#">SubCategoria 2</a></li>
                                    <li><a href="#">SubCategoria 3</a></li>
                                    <li><a href="#">SubCategoria 4</a></li>
                                    <li><a href="#">SubCategoria 5</a></li>
                                    <li><a href="#">SubCategoria 6</a></li>
                                    <li><a href="#">SubCategoria 7</a></li>
                                    <li><a href="#">SubCategoria 8</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="widget-title">
                            <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="false" aria-controls="widget-body-1">Categoria 3</a>
                        </h3>

                        <div class="collapse show" id="widget-body-3">
                            <div class="widget-body">
                                <ul class="cat-list">
                                    <li><a href="#">SubCategoria 1</a></li>
                                    <li><a href="#">SubCategoria 2</a></li>
                                    <li><a href="#">SubCategoria 3</a></li>
                                    <li><a href="#">SubCategoria 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>



                </div><!-- End .sidebar-wrapper -->
            </aside><!-- End .col-lg-3 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

    <div class="mb-5"></div><!-- margin -->
</main>

<?php require 'footer.php'; ?>   