<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">MODIFICACION</div>

'                   <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('clientes.update',$cliente->id_clientes)); ?>">
                         <?php echo e(csrf_field()); ?>

                         <!--se agrego para validar el metodo put -->
                        <input name="_method" type="hidden" value="PUT">
                        <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                            <label for="nombre" class="col-md-4 control-label">nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="<?php echo e($cliente->nombre); ?>" required autofocus>

                                <?php if($errors->has('nombre')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('direccion') ? ' has-error' : ''); ?>">
                            <label for="direccion" class="col-md-4 control-label">Direccion</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control" name="direccion" value="<?php echo e($cliente->direccion); ?>" required>
                               
                                <?php if($errors->has('direccion')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('direccion')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('nit') ? ' has-error' : ''); ?>">
                            <label for="nit" class="col-md-4 control-label">Nit</label>

                            <div class="col-md-6">
                                <input id="nit" type="number" class="form-control" name="nit" value="<?php echo e($cliente->nit); ?>" required autofocus>

                                <?php if($errors->has('nit')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nit')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('telefono') ? ' has-error' : ''); ?>">
                            <label for="telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="number" class="form-control" name="telefono" value="<?php echo e($cliente->telefono); ?>" required autofocus>

                                <?php if($errors->has('telefono')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('telefono')); ?></strong>
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

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>