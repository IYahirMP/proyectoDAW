<select class="form-select" aria-label="Default select" id="<?php if (isset($id)) {
                                                                echo $id;
                                                            } ?>" name="<?php if (isset($id)) {
                                                                            echo $id;
                                                                        } ?>">
    <option selected>Selecciona un area</option>
    <?php
    if ($datos->num_rows > 0) :
        while ($row = $datos->fetch_assoc()) : ?>
            <option value="<?php echo $row["NOMBRE_AREA"]; ?>"><?php echo $row["NOMBRE_AREA"]; ?></option>
    <?php endwhile;
    endif; ?>
</select>