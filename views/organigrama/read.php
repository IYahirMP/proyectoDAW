<style>
    .alineado {
        text-align: center;
    }
</style>

<h1 class="alineado">Organigramas</h1>


<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Área</th>
                <th scope="col">Descripción</th>
                <th scope="col">Area_depende</th>
                <th scope="col">Nivel</th>
                <th scope="col">Tipo_area</th>
                <th scope="col">Titular</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            <?php if ($datos->num_rows > 0) :
                while ($row = $datos->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row["ID_ORGANIGRAMA"]; ?></td>
                        <td><?php echo $row["AREA"]; ?></td>
                        <td><?php echo $row["DESCRIPCION"]; ?></td>
                        <td><?php echo $row["AREA_DEPENDE"]; ?></td>
                        <td><?php echo $row["NIVEL"]; ?></td>
                        <td><?php echo $row["TIPO_AREA"]; ?></td>
                        <td><?php echo $row["TITULAR"]; ?></td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?php echo $row["ID_ORGANIGRAMA"]; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg></button>
                            <div class="modal fade" id="<?php echo $row["ID_ORGANIGRAMA"]; ?>" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Información del organigrama</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="table table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Id</th>
                                                        <td><?php echo $row["ID_ORGANIGRAMA"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Área</th>
                                                        <td><?php echo $row["AREA"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Descripción</th>
                                                        <td><?php echo $row["DESCRIPCION"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Area_depende</th>
                                                        <td><?php echo $row["AREA_DEPENDE"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Nivel</th>
                                                        <td><?php echo $row["NIVEL"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Tipo_area</th>
                                                        <td><?php echo $row["TIPO_AREA"]; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Titular</th>
                                                        <td><?php echo $row["TITULAR"]; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary"><svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                            </button>
                            <button class="btn btn-danger"><svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
            <?php endwhile;
            endif; ?>
        </tbody>
    </table>
</div>