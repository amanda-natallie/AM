<?php require "header.php"; ?>

            <main class="main">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <div class="container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contate-nos</li>
                        </ol>
                    </div><!-- End .container -->
                </nav>

                <div class="container">
                    <div id="map"></div><!-- End #map -->

                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="light-title">Escreva-nos</h2>

                            <form action="#">
                                <div class="form-group required-field">
                                    <label for="contact-name">Nome</label>
                                    <input type="text" class="form-control" id="contact-name" name="contact-name" required>
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label for="contact-email">E-mail</label>
                                    <input type="email" class="form-control" id="contact-email" name="contact-email" required>
                                </div><!-- End .form-group -->

                                <div class="form-group">
                                    <label for="contact-phone">Numero de Telefone</label>
                                    <input type="tel" class="form-control" id="contact-phone" name="contact-phone">
                                </div><!-- End .form-group -->

                                <div class="form-group required-field">
                                    <label for="contact-message">Sua Mensagem</label>
                                    <textarea cols="30" rows="1" id="contact-message" class="form-control" name="contact-message" required></textarea>
                                </div><!-- End .form-group -->

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div><!-- End .form-footer -->
                            </form>
                        </div><!-- End .col-md-8 -->

                        <div class="col-md-4">
                            <h2 class="light-title">Detalhes de  <strong>Contato</strong></h2>

                            <div class="contact-info">
                                <div>
                                    <i class="icon-phone"></i>
                                    <p><a href="tel:">0201 203 2032</a></p>
                                    <p><a href="tel:">0201 203 2032</a></p>
                                </div>
                                <div>
                                    <i class="icon-mobile"></i>
                                    <p><a href="tel:">201-123-3922</a></p>
                                    <p><a href="tel:">302-123-3928</a></p>
                                </div>
                                <div>
                                    <i class="icon-mail-alt"></i>
                                    <p><a href="mailto:#">amgrafica@gmail.com</a></p>
                                    <p><a href="mailto:#">amgrafica@amgraficaamgrafica.com</a></p>
                                </div>
                                <div>
                                    <i class="icon-skype"></i>
                                    <p>amgrafica_skype</p>
                                    <p>amgrafica_amgrafica</p>
                                </div>
                            </div><!-- End .contact-info -->
                        </div><!-- End .col-md-4 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb-8"></div><!-- margin -->
            </main>

            <?php require "footer.php"; ?>