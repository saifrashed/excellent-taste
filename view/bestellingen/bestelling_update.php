<div class="row">
    <div class="col-xs-12 col-md-12">
        <h1>Pas bestelling aan</h1>
    </div>

    <div id="bon" class="col-xs-12 col-md-6" style="display: inline-block">

        <?php if ($bestelling) { ?>

            <h2>Bestelling</h2>

            <table class="table">
                <tr>
                    <th>Bon</th>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Bestellingnummer:</td>
                    <td><?php echo $bestelling['bestelling_id'] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Tafelnummer:</td>
                    <td><?php echo $bestelling['tafel_nummer'] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Datum / tijd:</td>
                    <td><?php echo $bestelling['datum_aangemaakt'] . ' - ' . $bestelling['tijd'] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                <tr>
                    <th>Artikel</th>
                    <th>Prijs</th>
                    <th>Aantal</th>
                    <th>Totaal</th>
                </tr>
                <?php
                    while ($row = $artikelen->fetch(PDO::FETCH_ASSOC)) {
                        echo '<tr>';
                        echo '<td>' . $row['omschrijving'] . '</td>';
                        echo '<td>€' . $row['prijs'] . '</td>';
                        echo '<td>' . $row['aantal'] . '</td>';
                        echo '<td>€' . $row['prijs'] * $row['aantal'] . '</td>';
                        echo '</tr>';
                    }
                ?>

                <tr>
                    <td></td>
                    <td></td>
                    <td>Totaal:</td>
                    <td><?php echo '€' . $totaal ?></td>
                </tr>

            </table>

            <button class="btn btn-light" onclick="javascript:window.print()"> Print <i class="fas fa-print"></i></button>

        <?php } else { ?>

            <div class="alert alert-danger" role="alert">
                Geen bestelling gevonden!
            </div>

        <?php } ?>

    </div>

    <div class="col-xs-12 col-md-6" style="display: inline-block">
        <h2>Menukaart</h2>

        <?= $menukaart ?>
    </div>
</div>
