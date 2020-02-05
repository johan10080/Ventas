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
                        <a href="" class="btn btn-primary btn-flat">
                            <span>Agregar Categoria</span>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered btn-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Descripciones</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($categorias)):  ?>
                                <?php foreach ($categorias as $categoria): ?>
                                <tr>
                                    <td><?= $categoria->id ?></td>
                                    <td><?= $categoria->nombre ?></td>
                                    <td><?= $categoria->descripcion ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="" class="btn btn-info">
                                                <span class="fa fa-eye"></span>
                                            </a>
                                            <a href="" class="btn btn-warning">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="" class="btn btn-danger">
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
</div>
<!-- /.content-wrapper -->
