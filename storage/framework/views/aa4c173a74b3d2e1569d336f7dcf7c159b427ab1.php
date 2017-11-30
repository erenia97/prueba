<?php $__env->startSection('content'); ?>
<div class="container">
     
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">PROVEEDORES</div>
                <div  class="panel-heading">

                 <a href="<?php echo e(route('proveedores.create')); ?>">Ingrese Proveedor</a>
                       </div>          
                                
                <div class="panel-body">
                   
                      <table width="100%">
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                nombre
                            </td>
                            <td>
                                direccion
                            </td>
                            <td>
                                
                                      nit

                            </td>
                            
                             <td>
                                telefono
                            </td>
                            <td>
                                acciones
                          </td>
                        </tr>
                         <?php $__currentLoopData = $consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedores): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                               <td><?php echo e($loop->iteration); ?></td>
                               <td><?php echo e($proveedores->nombre); ?></td>
                               <td><?php echo e($proveedores->direccion); ?></td>
                               <td> <?php echo e($proveedores->nit); ?></td>                     
                               <td><?php echo e($proveedores->telefono); ?></td>                                   
                         

                             <td>
                                
                                  <a href="<?php echo e(route('proveedores.edit', $proveedores->id_proveedores)); ?>"  >
                                  <button class="btn btn-info"  > EDITAR </button>
                                  </a>
                                </td>

                                <td>
                                   
                                  <a href="<?php echo e(route('proveedores.show', $proveedores->id_proveedores)); ?>">
                                   
                                      <button class="btn btn-danger"  > ELIMINAR</button> 
                                    </a>        
                                       
                                        
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>