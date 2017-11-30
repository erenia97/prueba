extends('layouts.app')

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">MODIFICACION</div>

'                   <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('ventas.update',$ventas->id_ventas)); ?>">
                         <?php echo e(csrf_field()); ?>

                         <!--se agrego para validar el metodo put -->
                        <input name="_method" type="hidden" value="PUT">
                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e($ventas->usuario->name); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                         <input name="_method" type="hidden" value="PUT">
                        <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                            <label for="nombre" class="col-md-4 control-label">nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo e($ventas->cliente->nombre); ?>" required autofocus>

                                <?php if($errors->has('nombre')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                      


                        <div class="form-group<?php echo e($errors->has('total') ? ' has-error' : ''); ?>">
                            <label for="total" class="col-md-4 control-label">Total</label>

                            <div class="col-md-6">
                                <input id="total" type="number" class="form-control" name="total" value="<?php echo e($ventas->total); ?>" required autofocus>

                                <?php if($errors->has('total')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('total')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('status') ? ' has-error' : ''); ?>">
                            <label for="status" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="status" type="number" class="form-control" name="status" value="<?php echo e($ventas->status); ?>" required autofocus>

                                <?php if($errors->has('status')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('status')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Modificar
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