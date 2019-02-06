<?php require 'header.php'; ?>

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Cadastro</li>
            </ol>
        </div><!-- End .container -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="step-title">Dados Pessoais</h2>
            </div>
            <div class="col-lg-6 col-md-6 pull-left">
                <ul class="checkout-steps">
                    <li>
                        <form action="#">
                            <div class="form-group">
                                <input type="radio" required >
                                <label>Pessoa Física </label>
                            </div>
                            <div class="form-group required-field">
                                <label>CPF </label>
                                <input type="text" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Nome </label>
                                <input type="text" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Como gosta de ser chamado? </label>
                                <input type="text" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Data de Nascimento (dd/mm/aaaa) </label>
                                <input type="date" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Sexo </label><br>
                                <input type="radio" required > Masculino &nbsp;&nbsp;&nbsp;
                                <input type="radio"  required > Feminino
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 ">
                <ul class="checkout-steps">
                    <li>
                        <form action="#">
                            <div class="form-group">
                                <input type="radio" required >
                                <label>Pessoa Jurídica </label>
                            </div>
                            <div class="form-group required-field">
                                <label>CNPJ </label>
                                <input type="text" class="form-control" required >
                            </div>

                            <div class="form-group required-field">
                                <label>Razão Social </label>
                                <input type="text" class="form-control" required >
                            </div>

                            <div class="form-group required-field">
                                <label>Contato </label>
                                <input type="text" class="form-control" required >
                            </div>

                            <div class="form-group required-field">
                                <label>I.E. </label>
                                <input type="text" class="form-control" required >
                            </div>
                            
                        </form>
                    </li>
                </ul>
            </div>



        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2 class="step-title">Contato</h2>
            </div>
            <div class="col-lg-6 col-md-6 pull-left">
                <ul class="checkout-steps">
                    <li>
                        <form action="#">
                            <div class="form-group required-field">
                                <label>CEP (sem traço)  </label>
                                <input type="text" class="form-control" required >
                            </div>
                            
                            <div class="form-group required-field" style="width: 100%">
                                <div  style="width: 70%; float: left; margin-right: 3%">
                                    <label>Rua </label>
                                    <input type="text" class="form-control" required >
                                </div>
                                <div  style="width: 27%; float: left">
                                    <label>Nº </label>
                                    <input type="text" class="form-control" required >
                                </div>
                            </div>
                            <br>
                            <div class="form-group required-field">
                                <label>Complemento </label>
                                <input type="text" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Telefone</label>
                                <input type="number" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Celular </label>
                                <input type="number" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <input type="checkbox"  required > <b>Gostaria de receber e-mails com novidades da AM Gráfica</b>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 ">
                <ul class="checkout-steps">
                    <li>
                        <form action="#">
                             <div class="form-group required-field">
                                <label>Bairro  </label>
                                <input type="text" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Estado </label>
                                <select name="estados-brasil" class="form-control">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>

                            <div class="form-group required-field">
                                <label>Cidade </label>
                                <input type="text" class="form-control" required >
                            </div>

                            <div class="form-group required-field">
                                <label>E-mail </label>
                                <input type="email" class="form-control" required >
                            </div>

                            <div class="form-group required-field">
                                <label>Senha </label>
                                <input type="password" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <label>Confirmar Senha </label>
                                <input type="password" class="form-control" required >
                            </div>
                            <div class="form-group required-field">
                                <div class="checkout-steps-action">
                                    <a href="checkout-review.html" class="btn btn-primary float-right">PROXIMO</a>
                                </div>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>



        </div>


    </div>

    <div class="mb-5"></div>
</main>
<?php require 'footer.php'; ?>