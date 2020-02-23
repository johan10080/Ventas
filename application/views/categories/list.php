<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Lista         
            <small>Categorias</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url('categorias/agregar') ?>" class="btn btn-primary btn-flat">
                            <span>Agregar Categoria</span>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered btn-hover dataTable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripciones</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($categorias)): ?>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <tr>
                                            <td><?= $categoria->id ?></td>
                                            <td><?= $categoria->nombre ?></td>
                                            <td><?= $categoria->descripcion ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-view" value="<?= $categoria->id; ?>" data-toggle="modal" data-target="#modalInfoCategorie">
                                                                 <span class="fa fa-search"></span>
                                                            </button>
                                                            <a href="<?= base_url() ?>categorias/editar/<?= $categoria->id; ?>" class="btn btn-warning">
                                                                <span class="fa fa-pencil"></span>
                                                            </a>
                                                            <a href="<?= base_url() ?>categorias/eliminar/<?= $categoria->id; ?>" class="btn btn-danger btn-remove">
                                                                <span class="fa fa-remove"></span>
                                                            </a>
                                                </div>    
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>                
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
<!--modal para detalles-->    
<div class="modal fade" id="modalInfoCategorie">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informacion de Categoria</h4>
            </div>
            <div class="modal-body">
                               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
<!--                <button type="button" class="btn btn-primary">Save changes</button>-->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
<!-- /.content-wrapper -->

