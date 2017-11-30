<?php $__env->startSection('content'); ?>
<div class="container">
     
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
             
                <div class="panel-heading">PRODUCTOS</div>
                <div  class="panel-heading">
                  <tr>

                  <td>
                   <a href="<?php echo e(url('/clientes')); ?>">Clientes </a>
                 </td>
                   
                 <td>
                 <a href="<?php echo e(url('/Proveedores')); ?>">Proveedores</a>
               </td>
                  
                  <td>
                 <a href="<?php echo e(url('/Productos')); ?>">Productos</a>
                 </td>

                 <td>
                 <a href="<?php echo e(url('/ventas')); ?>">Ventas</a>
               </td>
               <td>
                  <a href="<?php echo e(url('/ventas_detalle')); ?>">Detalle de ventas</a>
                </td>
                <td>
                  <a href="<?php echo e(url('/clientes_proveedor')); ?>">Clientes y Proveedores</a>
                  </td>
                  <td>
                  <a href="<?php echo e(url('/ventas/factura')); ?>">Facturacion</a>
                 </td>
                 <td>
                 <a href="<?php echo e(route('productos.create')); ?>">Ingrese Producto</a>
                 </td>
               </tr>
                       </div>          
                                
                           
                  
                <div class="panel-body">

                   
                      <table width="85%">
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                nombre
                            </td>
                            <td>
                                codigo
                            </td>
                            <td>
                                sku
                            </td>
                            <td>
                                Precio
                            </td>
                            <td>
                                acciones
                          </td>

                        </tr>
                         <?php $__currentLoopData = $consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($loop->iteration); ?></td>
                              <td><?php echo e($producto->nombre); ?></td>
                              <td><?php echo e($producto->codigo); ?></td>
                              <td><?php echo e($producto->sku); ?></td>
                              <td><?php echo e($producto->precio); ?></td>

                              <td>
                                
                                  <a href="<?php echo e(route('productos.edit', $producto->id_productos)); ?>"  >
                                  <button class="btn btn-info"  > EDITAR </button>
                                  </a>
                                  </td>
                                  <td>
                                   
                                  <a href="<?php echo e(route('productos.show', $producto->id_productos)); ?>">
                                   
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