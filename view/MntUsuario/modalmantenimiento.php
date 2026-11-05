<div id="modalmantenimiento" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow-lg border-0" style="border-radius: 12px;">
            <form method="post" id="producto_form">
                
                <!-- Encabezado con botón de cerrar integrado -->
                <div class="modal-header bg-light" style="border-top-left-radius: 12px; border-top-right-radius: 12px;">
                    <h5 class="modal-title font-weight-bold text-dark" id="mdltitulo"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <!-- Cuerpo del Modal con mejor espaciado y placeholders limpios -->
                <div class="modal-body p-4">
                    <input type="hidden" id="prod_id" name="prod_id">

                    <!-- Campo: Nombre -->
                    <div class="form-group mb-3">
                        <label class="form-label font-weight-bold text-secondary" for="prod_nom">Nombre del Registro</label>
                        <input type="text" class="form-control form-control-lg bg-light border-0" id="prod_nom" name="prod_nom" placeholder="Ej. Juan Pérez" required style="border-radius: 8px;">
                    </div>
                    
                    <!-- Campo: Usuario -->
                    <div class="form-group mb-3">
                        <label class="form-label font-weight-bold text-secondary" for="prod_usuario">Usuario de Acceso</label>
                        <input type="text" class="form-control form-control-lg bg-light border-0" id="prod_usuario" name="prod_usuario" placeholder="Ej. jperez99" required style="border-radius: 8px;">
                    </div>
                    
                    <!-- Campo: Contraseña (tipo password por seguridad) -->
                    <div class="form-group mb-2">
                        <label class="form-label font-weight-bold text-secondary" for="prod_contrasena">Contraseña</label>
                        <input type="password" class="form-control form-control-lg bg-light border-0" id="prod_contrasena" name="prod_contrasena" placeholder="••••••••" required style="border-radius: 8px;">
                    </div>
                </div>
                
                <!-- Pie del Modal con botones alineados y limpios -->
                <div class="modal-footer border-top-0 p-3 get-right">
                    <button type="button" class="btn btn-light px-4" data-dismiss="modal" style="border-radius: 8px; font-weight: 500;">Cerrar</button>
                    <button type="submit" name="action" id="btnGuardar" value="add" class="btn btn-primary px-4 shadow-sm" style="border-radius: 8px; font-weight: 500; background-color: #007bff;">Guardar Cambios</button>
                </div>
                
            </form>
        </div>
    </div>
</div>
