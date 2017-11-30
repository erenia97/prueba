<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DETALLES</div>

                  <div class="panel-body">
                    <form class="form-horizontal"  action="<?php echo e(route('ventas.index')); ?>" >
                         <?php echo e(csrf_field()); ?>


                       <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="name" type="text" readonly="readonly" class="form-control" name="name" value="<?php echo e($ventas->usuario->name); ?>" required autofocus>
                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('nombre') ? ' has-error' : ''); ?>">
                            <label for="nombre" class="col-md-4 control-label">Cliente</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" readonly="readonly" class="form-control" name="nombre" value="<?php echo e($ventas->cliente->nombre); ?>" required>
                               
                                <?php if($errors->has('nombre')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nombre')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('nit') ? ' has-error' : ''); ?>">
                            <label for="nit" class="col-md-4 control-label">nit</label>

                            <div class="col-md-6">
                                <input id="nit" type="number" readonly="readonly" class="form-control" name="nit" value="<?php echo e($ventas->cliente->nit); ?>" required>

                                <?php if($errors->has('nit')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('nit')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                       
                 
                        </div>

                      
                       
                        

                    <div class="panel-body">
                      <table width="100%">
                        <tr>
                           
                            <td>
                                Productos
                            </td>
                            <td>    </td>
                            <td>   </td>
                            <td>
                              Cantidad
                            </td>
                           <td>    </td>
                           <td>   </td>
                            <td>
                               SubTotal
                            </td>
                            <td>   </td>
                            <td>  </td>
                             <td>
                               Total
                            </td>
                            
                        </tr>
                         
                         <?php for($x=0; $x < count($ventas->detalle); $x++): ?>
                            <tr>
                            
                              <td><?php echo e($ventas->detalle[$x]->productos->nombre); ?></td>
                              <td>  </td>
                              <td> </td>
                              <td><?php echo e($ventas->detalle[$x]->cantidad); ?></td>
                              <td>  </td>
                              <td>  </td>
                              <td><?php echo e($ventas->detalle[$x]->subtotal); ?></td>
                              <td>  </td>
                              <td> </td>
                                 <td><?php echo e($ventas->total); ?></td>
                           </tr>   
                          <?php endfor; ?>
                           

                       </table>

                   </div>
               </form>

                          <div>
 
                                  <a href="<?php echo e(route('ventas.index')); ?>">
                                  <button class="btn btn-danger"  >Regresar</button>
                                  </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>