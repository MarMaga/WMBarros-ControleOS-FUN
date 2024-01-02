<?php
include_once dirname(__DIR__, 3) . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php require_once PATH . 'Template/_includes/_head.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <?php
        include_once PATH . 'Template/_includes/_topo.php';
        include_once PATH . 'Template/_includes/_menu.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h2 class="text-primary">Meus dados</h2>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Altere seus dados nos campos que estão habilitados</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="meus_dados.php" id="formCad">
                            <input type="hidden" id="id_endereco" value="<?= $dados['id_endereco'] ?>">
                            <div class="row">
                                <div class="form-group col-md-9">
                                    <label>Nome</label>
                                    <input disabled type="text" name="nome" id="nome" class="form-control obg"
                                        placeholder="Digite aqui o nome">
                                </div>
                                <div class="form-group col-md-3">
                                    <input type="hidden" id="telefoneOriginal">
                                    <label>Telefone</label>
                                    <input type="text" name="telefone" id="telefone" class="form-control num cel obg"
                                        onkeyup="ajustaMascaraFone(this.value)"
                                        placeholder="Digite aqui o telefone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-9">
                                    <label>E-mail</label>
                                    <input disabled type="text" name="email" id="email" class="form-control obg"
                                        placeholder="Digite aqui o e-mail">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>CPF</label>
                                    <input disabled type="text" name="cpf" id="cpf" class="form-control num cpf obg"
                                        placeholder="Digite aqui o CPF">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Setor</label>
                                <input disabled type="text" name="setor" id="setor" class="form-control num cpf obg"
                                        placeholder="Digite aqui o setor">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="cepOriginal">
                                <label>CEP</label>
                                <input onblur="pesquisaCep(this.value)" type="text" name="cep" id="cep"
                                    class="form-control num cep obg" placeholder="Digite aqui o CEP">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="ruaOriginal">
                                <label>Rua</label>
                                <input type="text" name="rua" id="rua" class="form-control obg"
                                    placeholder="Digite aqui a rua">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="bairroOriginal">
                                <label>Bairro</label>
                                <input type="text" name="bairro" id="bairro" class="form-control obg"
                                    placeholder="Digite aqui o bairro">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="hidden" id="estadoOriginal">
                                    <label>Estado</label>
                                    <input type="text" name="estado" id="estado" disabled class="form-control obg"
                                        placeholder="Digite aqui o estado (preenchimento automático)">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="hidden" id="cidadeOriginal">
                                    <label>Cidade</label>
                                    <input type="text" name="cidade" id="cidade" disabled class="form-control obg"
                                        placeholder="Digite aqui a cidade (preenchimento automático)">
                                </div>
                            </div>
                            <button type="button" class="btn btn-success" name="btn_alterar" id="btn_alterar"
                                onclick="AlterarMeusDados('formCad')">Alterar</button>
                        </form>
                    </div>
                </div>

            </section>
            <!-- /.content -->

        </div>
        <!-- /.content-wrapper -->

        <?php include_once PATH . 'Template/_includes/_footer.php'; ?>

    </div>
    <!-- ./wrapper -->

</body>

</html>