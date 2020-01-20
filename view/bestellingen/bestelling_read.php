<div class="row">
    <div class="col-xs-12 col-md-12">
        <h1>Bestelling overzicht</h1>

        <div class="actions-bar">
            <a class="btn btn-primary" href="<?= BESTELLINGEN_CREATE ?>"><i class="fas fa-plus"></i></a>
        </div>

        <table class="table">
            <tr>
                <th>Bestellingnummer</th>
                <th>Tafelnummer</th>
                <th>Datum bestelling</th>
                <th>Tijd</th>
                <th>Acties</th>
            </tr>

            <?php
                // Displays order in data within the table
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['bestelling_id'] . '</td>';
                    echo '<td>' . $row['tafel_nummer'] . '</td>';
                    echo '<td>' . $row['datum_aangemaakt'] . '</td>';
                    echo '<td>' . $row['tijd'] . '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-light" href="' . BESTELLINGEN_UPDATE . '/' . $row['bestelling_id'] . '">Wijzigen</a>';
                    echo '<a class="btn btn-danger" href="' . BESTELLINGEN_DELETE . '/' . $row['bestelling_id'] . '"><i class="fas fa-times"></i></a>';
                    echo '</td>';
                    echo '</tr>';
                }
            ?>


        </table>

    </div>
</div>
