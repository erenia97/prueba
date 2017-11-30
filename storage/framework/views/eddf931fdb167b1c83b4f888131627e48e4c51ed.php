<?php $__env->startSection('content'); ?>
<div class="container">
     
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">CLIENTES</div>
                <div  class="panel-heading">

                 <a href="<?php echo e(route('clientes.create')); ?>">Ingrese Cliente</a>
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
                                fecha de nacimiento
                            </td>
                             <td>
                                sexo 
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
                         <?php $__currentLoopData = $consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($loop->iteration); ?></td>
                              <td><?php echo e($cliente->nombre); ?></td>
                              <td><?php echo e($cliente->direccion); ?></td>
                              <td><?php echo e($cliente->fecha_nacimiento); ?></td>
                              <td>
                              <?php if($cliente->sexo == 1): ?>
                                 Mujer
                              <?php else: ?>
                                 hombre
                              <?php endif; ?>
                              </td>                         
                              <td> <?php echo e($cliente->nit); ?></td> 
                               
                              <td><?php echo e($cliente->telefono); ?></td> 

                              <td>
                                <!--<a href="<?php echo e(url('clientes.edit', $cliente->id_clientes)); ?>" ><button class="btn btn-info">EDITAR</button></a>-->
                                
                                  <a href="<?php echo e(route('clientes.edit', $cliente->id_clientes)); ?>"  >
                                  <button class="btn btn-info"  > EDITAR </button>
                                  </a>
                                    
                                   </td>
                                   <td>
                                  <a href="<?php echo e(route('clientes.show', $cliente->id_clientes)); ?>">
                                   
                                      <button class="btn btn-danger"  >     ELIMINAR</button> 
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