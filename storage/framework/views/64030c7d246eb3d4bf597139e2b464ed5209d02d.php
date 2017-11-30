<?php $__env->startSection('content'); ?>
<div class="container">
     
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CLIENTES Y PROVEEDORES</div>
                <div class="panel-body">
                   
                      <table>
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                Cliente
                            </td>
                            <td>
                               Proveedor
                            </td>
                            
                            
                        </tr>
                         <?php $__currentLoopData = $consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v_detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($loop->iteration); ?></td>
                              <td><?php echo e($v_detalle->cliente->nombre); ?></td>
                              <td><?php echo e($v_detalle->proveedor->nombre); ?></td>
                              
                                                                
                         </tr>
                       

                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                       </table>

                    

                   

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>