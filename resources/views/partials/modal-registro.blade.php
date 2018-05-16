<div id="myModal"  class="modal fade" style="overflow-y: scroll;" >
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content overflow-y: auto;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Inscripción</h4>
            </div>
            <div class="modal-body">

                <form id="registro_activitis" name="inscripcion" method="post" action="#">

                    <div class="form-group">
                        <label>Cédula:</label>
                        <input id="pruebas" type="text" name="cod_ced" class="form-control has-error"
                               placeholder="Cédula" required="required" maxlength="30">
                        <span id="prueba" class="error text-danger"></span>

                    </div>

                    <label>Nombre:</label>
                    <div class="form-group">
                        <input id="names" type="text" name="na" class="form-control" placeholder="Nombre" maxlength="40" required="required">
                        <span id="name" class="error text-danger"></span>
                    </div>

                    <label>Celular:</label>
                    <div class="form-group">
                        <input id="tels" type="text" name="tel" class="form-control" placeholder="Celular" maxlength="10" required="required">
                        <span id="tel" class="error text-danger"></span>
                    </div>

                    <label>Rol:</label>
                    <div class="form-group">
                        <select name="rol" class="form-control" required="required">
                            <option value="Estudiante">Estudiante</option>
                            <option value="Docente">Docente</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <label>Correo:</label>

                    <div class="form-group">
                        <input id="emails" type="email" name="em" class="form-control" maxlength="60" placeholder="Email"
                               required="required">
                        <span id="email" class="error text-danger"></span>
                    </div>

                    <label>Sede - Extensión:</label>
                    <div class="form-group">
                        <select name="sede_ext" class="form-control" required="required">
                            <option value="Facatativá">Facatativá</option>
                            <option value="Fusagasugá">Fusagasugá</option>
                            <option value="Girardot">Girardot</option>
                            <option value="Ubate">Ubaté</option>
                            <option value="Soacha">Soacha</option>
                            <option value="Zipaquirá">Zipaquirá</option>
                            <option value="Chia">Chia</option>
                            <option value="Chocontá">Chocontá</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn-submit btn-sub">Enviar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-cerrar" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>