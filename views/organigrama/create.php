<h1>Crear organigrama</h1>

<h4 class="mb-3">Organigrama</h4>
<form class="needs-validation" action="<?= base_url ?>organigrama/save" method="POST">
    <div class="row g-3">
        <div class="col-12">
            <label for="area" class="form-label">&Aacute;rea</label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="area" id="area" placeholder="Area" required>
            </div>
        </div>

        <div class="col-12">
            <label for="descripcion" class="form-label">Descripci&oacute;n</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="">
        </div>

        <div class="col-12">
            <label for="area_depende" class="form-label">Area_depende</label>
            <?php $areaController->select("area_depende"); ?>
        </div>

        <div class="col-12">
            <label for="nivel" class="form-label">Nivel</label>
            <input type="number" class="form-control" id="nivel" name="nivel">
        </div>

        <div class="col-12">
            <label for="tipo_area" class="form-label">Tipo de &aacute;rea</label>
            <?php $areaController->select("tipo_area"); ?>
        </div>

        <div class="col-12">
            <label for="titular" class="form-label">Titular</label>
            <input type="tet" class="form-control" id="titular" name="titular">
        </div>
        <hr class="my-4">

        <button class="w-100 btn btn-primary btn-lg" type="submit">Guardar</button>
</form>