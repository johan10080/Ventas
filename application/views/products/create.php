<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Crear          
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
                        <?php if ($this->session->flashdata('error')): ?>
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i>
                                    <?php echo $this->session->flashdata('error'); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <form method="post" action="<?php echo base_url('productos/crear') ?>">
                            <div class="form-group">
                                <label>Codigo: </label>
                                <input type="text" class="form-control" name="codigo" id="inputCodigo">
                            </div>
                            <div class="form-group">
                                <label>Nombre: </label>
                                <input type="text" class="form-control" name="name" id="inputNmae">
                            </div>
                            <div class="form-group">
                                <label>Descripcion: </label>
                                <input type="text" class="form-control" name="descripcion" id="inputNmae">
                            </div>
                            <div class="form-group">
                                <label>Precio: </label>
                                <input type="text" class="form-control" name="precio" id="inputPrecio">
                            </div>
                            <div class="form-group">
                                <label>Stock: </label>
                                <input type="text" class="form-control" name="stock" id="inputStock">
                            </div>
                            <div class="form-group">
                                <label>Categoria:</label>
                                <select class="form-control" name="categoria">
                                    <?php foreach ($products as $product): ?>
                                        <option value="<?= $product->id ?>"><?= $product->nombre ?></option>                                    
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                            </div>                            
                        </form>
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
