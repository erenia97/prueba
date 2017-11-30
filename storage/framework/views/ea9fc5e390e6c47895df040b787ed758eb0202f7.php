<?php $__env->startSection('content'); ?>
<div class="container">
     
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                 <a href="<?php echo e(url('/clientes')); ?>">Clientes</a>
                 <br>
                 <a href="<?php echo e(url('/proveedores')); ?>">Proveedores</a>
                  <br>
                 <a href="<?php echo e(url('/productos')); ?>">Productos</a>
                  <br>
                 <a href="<?php echo e(url('/ventas')); ?>">Ventas</a>
                  <br>
                  <a href="<?php echo e(url('/ventas_detalle')); ?>">Detalle de ventas</a>
                  <br>
                  <a href="<?php echo e(url('/clientes_proveedor')); ?>">Clientes y Proveedores</a>
                  <br>
                  <br>
                  <a href="<?php echo e(url('/ventas/factura')); ?>">Facturacion</a>
                  <br>


                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                   

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>