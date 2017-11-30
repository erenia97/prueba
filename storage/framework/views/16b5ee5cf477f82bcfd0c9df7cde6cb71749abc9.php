<?php $__env->startSection('content'); ?>
<div class="container">
     
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> VENTAS</div>
                <div class="panel-body">
                   
                      <table width="100%">
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                Usuarios
                            </td>
                            <td>
                              CLIENTES
                            </td>
                           
                            <td>
                               TOTAL
                            </td>
                            <td>
                               ESTADO
                            </td>
                            <td>
                              ACCIONES
                            </td>
                            
                            
                        </tr>
                         
                         <?php $__currentLoopData = $consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ventas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($loop->iteration); ?></td>
                              <td><?php echo e($ventas->usuario->name); ?></td>
                              <td><?php echo e($ventas->cliente->nombre); ?></td>
                              <td><?php echo e($ventas->total); ?></td>
                              <td>
                                <?php if($ventas->status==0): ?>

                                    ACTIVO
                                  <?php else: ?>

                                    ANULADO

                                  <?php endif; ?>

                              </td>
                               <td>

                                <a href="<?php echo e(route('ventas.show', $ventas->id_ventas)); ?>">
                                  <button class="btn btn-info"  >Detalles</button>
                                  </a>
                                </td>
                                <td>

                                <?php if($ventas->status==0): ?>

                                  <form class="form-horizontal" method="POST" action="<?php echo e(route('ventas.update',$ventas->id_ventas)); ?>">
                                     <?php echo e(csrf_field()); ?>

                                      <input name="_method" type="hidden" value="PUT">

                                  <button class="btn btn-danger" type="submit"> ANULAR </button>
                                </form>

                                 <?php endif; ?>
                               </td>

                                                                                          
                        </tr>

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       </table>

                    

                   

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


                                   

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>