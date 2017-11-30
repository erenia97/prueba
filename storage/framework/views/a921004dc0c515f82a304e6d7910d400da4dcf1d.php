<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ELIMINAR PRODUCTO</div>

'                   <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('productos.destroy',$producto->id_productos)); ?>">
                         <?php echo e(csrf_field()); ?>

                          <?php echo e(method_field('DELETE')); ?>

                       
                        <input name="method" type="hidden" value="DELETE">

                         <!--se agrego para validar el metodo put 
                         <input name="_method" type="hidden" value="PUT">-->
                        <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                            <label for="nombre" class="col-md-4 control-label">nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo e($producto->nombre); ?>" required autofocus>

                                <?php if($errors->has('nombre')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('codigo') ? ' has-error' : ''); ?>">
                            <label for="codigo" class="col-md-4 control-label">codigo</label>

                            <div class="col-md-6">
                                <input id="codigo" type="number" class="form-control" name="direccion" value="<?php echo e($producto->codigo); ?>" required>
                               
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
                                <input id="sku" type="number" class="form-control" name="sku" value="<?php echo e($producto->sku); ?>" required>

                                <?php if($errors->has('sku')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('sku')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
 
                       
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-danger" type="submit" value="delete">
                                   ELIMINAR
                                </button>

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