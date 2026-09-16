<?php include "cabecalho.php"; ?>

<div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <h2 class="mb-5">Cadastro de Cliente</h2>
        <form action="salvarCliente.php" method="post">
            <input name="id" type="hidden" />
            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Nome:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="nome"
                            type="text" />
                </div>
            </div><!-- Linha do NOME -->
            <div class="row align-items-center mb-3">
                <div class="col-4">
                    CPF CNJ:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="cpf cnpj"
                            type="text" />
                </div>
            </div><!-- Linha do CPF CNPJ -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Email:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="email"
                            type="email" />
                </div>
            </div><!-- Linha do Email -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Telefone:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="telefone"
                            type="text" />
                </div>
            </div><!-- Linha do Telefone -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Data Nascimento:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="datanasc"
                            type="date" />
                </div>
            </div><!-- Linha da Data Nascimento -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Logradouro:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="logradouro"
                            type="text" />
                </div>
            </div><!-- Linha do Logradouro -->
            
            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Número:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="numero"
                            type="text" />
                </div>
            </div><!-- Linha do Número -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Complemento:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="complemento"
                            type="text" />
                </div>
            </div><!-- Linha do Complemento -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Bairro:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="bairro"
                            type="text" />
                </div>
            </div><!-- Linha do Bairro -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Cidade:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="cidade"
                            type="text" />
                </div>
            </div><!-- Linha da Cidade -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    Estado:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="estado"
                            type="text" />
                </div>
            </div><!-- Linha do Estado -->

            <div class="row align-items-center mb-3">
                <div class="col-4">
                    CEP:
                </div>
                <div class="col-8">
                    <input class="form-control"
                            name="cep"
                            type="text" />
                </div>
            </div><!-- Linha do Senha -->

                        <div class="row align-items-center mb-3">
                <div class="col-2"> Ativo:</div>
                <div class="col-10">
                    
                        <input class="form-check-input" type="radio" name="ativo" checked> Sim
                        <input class="form-check-input ms-5" type="radio" name="ativo" value="0" > Não
                </div>
               
            </div>

            <div class="row align-items-center mb-3">
                <div class="col-12 text-end">
                    <button class="btn btn-success " type="submit" >
                        Salvar Cliente
                    </button>
                </div>
                
            </div><!-- Linha do Salvar -->

<?php include "rodape.php"; ?>