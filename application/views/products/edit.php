<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Editar          
            <small>Clientes</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">                    
                    <div class="col-md-12">
                        <?php if($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissable" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p><i class="icon fa fa-ban"></i>
                            <?php echo $this->session->flashdata('error'); ?>
                            </p>
                        </div>
                        <?php endif; ?>
                        <form method="post" action="<?php echo base_url('productos/actualizar')?>">
                             <input type="hidden" name="idProductos" value="<?= $products->idProducto ?>">
                            <div class="form-group">
                                <label>Codigo: </label>
                                <input type="text" class="form-control" value="<?= $products->codigo ?> "name="codigo" id="inputCodigo">
                            </div>
                            <div class="form-group">
                                <label>Nombre: </label>
                                <input type="text" class="form-control" value="<?= $products->nombreCategoria ?> "name="name" id="inputNmae">
                            </div>
                            <div class="form-group">
                                <label>Descripcion: </label>
                                <input type="text" class="form-control" value="<?= $products->descripcion ?>" name="descripcion" id="inputNmae">
                            </div>
                            <div class="form-group">
                                <label>Precio: </label>
                                <input type="text" class="form-control" value="<?= $products->precio ?> " name="precio" id="inputPrecio">
                            </div>
                            <div class="form-group">
                                <label>Stock: </label>
                                <input type="text" class="form-control" value="<?= $products->stock ?>" name="stock" id="inputStock">
                            </div>
                            <div class="form-group">
                                <label>Categoria:</label>
                                <select class="form-control" name="categoria">
                                    <?php foreach ($categories as $categorie): ?>
                                     <?php if($categorie->id === $products->categoria_id): ?>
                                        <option value="<?= $categorie->id ?>"><?= $categorie->nombre ?></option>
                                     <?php endif; ?>
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
