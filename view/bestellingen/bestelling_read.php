<div class="row">
    <div class="col-xs-12 col-md-12">
        <h1>Bestelling overzicht</h1>

        <div class="actions-bar">
            <form action="<?=BESTELLINGEN_CREATE?>/" method="GET" class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" name="tafelnummer" placeholder="Tafel nummer" required>
                <input  type="hidden" name="datum" value="<?=date('Y/m/d')?>">
                <input  type="hidden" name="tijd" value="<?=date('H:i:s')?>">

                <button class="btn btn-light my-2 my-sm-0" type="submit"><i class="fas fa-plus"></i></button>
            </form>
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
                    echo '</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div>
</div>
