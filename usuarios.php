<?php  
include "cabecalho.php"; ?>

<div class ="row">
    <div class= "col-12">
        <div class="card">
            <div class ="card-header">
                Pesquisar Usuários
            </div> <!-- fechador da card-header -->
            <div class="card-body">
                <div class= "row">
                    <div class=" col-2">
                        <a href="novoUsuario.php" class ="btn btn-success">
                            Novo Usuário
                        </a>
                    </div> <!-- fechador da col-2 -->

                    <div class = "col-8">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <button class="btn btn-primary" type="button">
                                Pesquisar
</button>
</div>
                    </div> <!-- fechador da col-8 -->
                </div> <!-- fechador da Row -->

            </div> <!-- fechador da card-body -->
        </div> <!-- fechador da card -->
    </div> <!-- fechador da col-12 -->
</div> <!-- fechador da Row -->


<?php include "rodape.php"; ?>