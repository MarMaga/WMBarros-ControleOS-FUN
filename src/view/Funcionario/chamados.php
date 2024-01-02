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
                            <h2 class="text-primary">Chamados</h2>
                            <a>Consulte os chamados do seu setor e acompanhe os atendimentos</a>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Consulte os seus chamados por situação</h3>
                    </div>
                    <div class="card-body">
                        <form id="formChamados" method="post" action="chamados.php">
                            <div class="form-group">
                                <label>Escolha a situação</label>
                                <select class="form-control select2 obg" name="status" id="status" style="width: 100%;">
                                    <option value="<?= SITUACAO_CHAMADO_TODOS ?>" selected="selected">Todos</option>
                                    <option value="<?= SITUACAO_CHAMADO_AGUARDANDO_ATENDIMENTO ?>">Aguardando
                                        atendimento</option>
                                    <option value="<?= SITUACAO_CHAMADO_EM_ATENDIMENTO ?>">Em atendimento</option>
                                    <option value="<?= SITUACAO_CHAMADO_ENCERRADO ?>">Encerrado</option>
                                </select>
                            </div>
                            <button onclick="return NotificarCampos('formChamados')" class="btn btn-success"
                                name="btn_pesquisar">Pesquisar</button>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Chamados encontrados</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Data Abertura</th>
                                                    <th>Funcionário</th>
                                                    <th>Equipamento</th>
                                                    <th>Problema</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#" class="btn btn-block bg-gradient-info btn-xs"
                                                            data-toggle="modal" data-target="#modalDetalhes" style="max-width: 100px";>Ver
                                                            detalhes</a>
                                                    </td>
                                                    <td>...</td>
                                                    <td>...</td>
                                                    <td>...</td>
                                                    <td>...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper <-->

        <?php
        include_once PATH . 'Template/_includes/_footer.php';
        include_once 'modais/detalhes_chamado.php';
        ?>

    </div>
    <!-- ./wrapper -->

</body>

</html>