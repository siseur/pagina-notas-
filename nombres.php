<?php include_once "../9a/encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar Esudiante</h1>

        <form action="registrar.php" method="POST">
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input placeholder="Apellidos" class="form-control" type="text" name="apellidos" id="apellidos" required>
            </div>

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input placeholder="Nombres" class="form-control" type="text" name="nombres" id="nombres" required>
            </div>

            <div class="form-group">
                <label for="gru">Grupo</label>
                <input placeholder="Grupo" class="form-control" name="gru" id="gru" cols="30" rows="10">
                                 
                </div>



            <div class="form-group">
                <label for="ind">Individual</label>
                <input placeholder="Individual" class="form-control" name="ind" id="ind" cols="30" rows="10">
                           

            </div>

            <div class="form-group">
                <label for="t1">Tarea 1</label>
                <input placeholder="Tarea1" class="form-control" name="t1" id="t1" cols="30" rows="10" >
                        
            </div>
            <div class="form-group">
                <label for="t2">Tarea 2</label>
                <input placeholder="Tarea 2" class="form-control" name="t2" id="t2" cols="30" rows="10">
            </div>
            <div class="form-group">
                <label for="t3">Tarea 3</label>
                <input placeholder="Tarea 3" class="form-control" name="t3" id="t3" cols="30" rows="10">
            </div>

             <div class="form-group">
                <label for="cua"></label>
                <input placeholder="cuaderno" class="form-control" name="cua" id="cua" cols="30" rows="10" style="visibility:hidden">
            </div>

              <div class="form-group">
                <label for="soc">Social</label>
                <input placeholder="Social" class="form-control" name="soc" id="soc" cols="30" rows="10">
            </div>
            <div class="form-group">
                <label for="per">Personal</label>
                <input placeholder="Personal" class="form-control" name="per" id="per" cols="30" rows="10">
            </div>

            <div class="form-group">
                <label for="pro"></label>
                <input placeholder="" class="form-control" name="pro" id="pro" cols="30" rows="10"  style="visibility:hidden">
            </div>
            <div class="form-group">
                <label for="val"></label>

              <input placeholder="" class="form-control" name="val" id="val" cols="30" rows="10"  style="visibility:hidden">
            </div>
            <div class="form-group">
                <label for="acu"></label>
                <input placeholder="" class="form-control" name="acu" id="acu" cols="30" rows="10"  style="visibility:hidden">
            </div>

            </div>

                        
            <div class="form-group"><button class="btn btn-success">Guardar</button></div>
        </form>
    </div>
</div>
<?php include_once "../9a/pie.php"; ?>