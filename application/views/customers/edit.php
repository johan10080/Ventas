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
                        <form method="post" action="<?php echo base_url('customers/actualizar')?>">
                             <input type="hidden" name="idCustomers" value="<?= $customers->id ?>">
                            <div class="form-group">
                                <label>Nombres: </label>
                                <input type="text" class="form-control" name="names" id="inputNmae" value="<?= $customers->nombres ?>">
                            </div>
                            <div class="form-group">
                                <label>Apellidos: </label>
                                <input type="text" class="form-control" name="surnames" id="inputNmae" value="<?= $customers->apellidos ?>">
                            </div>
                            <div class="form-group">
                                <label>Telefono: </label>
                                <input type="text" class="form-control" name="phone" id="inputNmae" value="<?= $customers->telefono ?>">
                            </div>
                            <div class="form-group">
                                <label>Direccion: </label>
                                <input type="text" class="form-control" name="address" id="inputNmae" value="<?= $customers->direccion ?>">
                            </div>
                            <div class="form-group">
                                <label>Nit: </label>
                                <input type="text" class="form-control" name="ruc" id="inputNmae" value="<?= $customers->ruc ?>">
                            </div>
                            <div class="form-group">
                                <label>Empresa: </label>
                                <input type="text" class="form-control" name="business" id="inputDescription" value="<?= $customers->empresa ?>">
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
