<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">INGRESO DE PRODUCTOS</div>

'                   <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('productos.store')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo e(old('nombre')); ?>" required autofocus>

                                <?php if($errors->has('nombre')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('codigo') ? ' has-error' : ''); ?>">
                            <label for="codigo" class="col-md-4 control-label">Codigo</label>

                            <div class="col-md-6">
                                <input id="codigo" type="number" class="form-control" name="codigo" value="<?php echo e(old('codigo')); ?>" required>

                                <?php if($errors->has('codigo')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('codigo')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('sku') ? ' has-error' : ''); ?>">
                            <label for="sku" class="col-md-4 control-label">Sku</label>

                            <div class="col-md-6">
                                <input id="sku" type="number" class="form-control" name="sku" value="<?php echo e(old('sku')); ?>" required>

                                <?php if($errors->has('sku')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('sku')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('precio') ? ' has-error' : ''); ?>">
                            <label for="precio" class="col-md-4 control-label">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control" name="precio" value="<?php echo e(old('precio')); ?>" required>

                                <?php if($errors->has('precio')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('precio')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
 
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>