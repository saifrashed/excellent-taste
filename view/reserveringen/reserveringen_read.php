<div class="row">
    <div class="col-xs-12 col-md-12">
        <h1>Reservering overzicht</h1>

        <div class="actions-bar">
            <form action="<?= RESERVERINGEN_CREATE ?>/" method="GET" class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-plus"></i></button>
            </form>
        </div>

        <table class="table">
            <tr>
                <th>Reserveringsnummer</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Telefoonnummer</th>
                <th>Aantal personen</th>
                <th>Datum</th>
                <th>Tijd</th>
                <th>Tafelnummer</th>
                <th>Acties</th>
            </tr>

            <?php
                // Displays order in data within the table
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['reservering_id'] . '</td>';
                    echo '<td>' . $row['voornaam'] . '</td>';
                    echo '<td>' . $row['achternaam'] . '</td>';
                    echo '<td>' . $row['tel'] . '</td>';
                    echo '<td>' . $row['aantal_personen'] . '</td>';
                    echo '<td>' . $row['datum'] . '</td>';
                    echo '<td>' . $row['tijd'] . '</td>';
                    echo '<td>' . $row['tafel_nummer'] . '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-light" href="' . RESERVERINGEN_UPDATE . '/' . $row['reservering_id'] . '">Wijzigen</a>';
                    echo '<a class="btn btn-danger" href="' . RESERVERINGEN_DELETE . '/' . $row['reservering_id'] . '"><i class="fas fa-times"></i></a>';
                    echo '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</div>
