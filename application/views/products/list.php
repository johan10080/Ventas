<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Lista         
            <small>Productos</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url('productos/agregar') ?>" class="btn btn-primary btn-flat">
                            <span>Agregar Producto</span>
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
                                    <th>Descripcion</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Codigo</th>
                                    <th>Categoria</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($products)): ?>
                                    <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td><?= $product->idProducto ?></td>
                                            <td><?= $product->nombreProducto ?></td>
                                            <td><?= $product->descripcion ?></td>
                                            <td><?= $product->precio ?></td>
                                            <td><?= $product->stock ?></td>
                                            <td><?= $product->codigo ?></td>
                                            <td><?= $product->nombreCategoria ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info btn-viewProducts" value="<?= $product->idProducto; ?>" data-toggle="modal" data-target="#modalInfoProducts">
                                                                 <span class="fa fa-search"></span>
                                                            </button>
                                                            <a href="<?= base_url() ?>productos/editar/<?= $product->idProducto; ?>" class="btn btn-warning">
                                                                <span class="fa fa-pencil"></span>
                                                            </a>
                                                            <a href="<?= base_url() ?>productos/eliminar/<?= $product->idProducto; ?>" class="btn btn-danger btn-removeProducts">
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
<div class="modal fade" id="modalInfoProducts">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Informacion de Productos</h4>
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


