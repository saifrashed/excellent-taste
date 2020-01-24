<div class="row">
    <div class="col-xs-12 col-md-12">
        <h1>Creeër reservering</h1>

        <form action="<?= RESERVERINGEN_CREATE ?>/<?= $customerId ?>/" method="GET">


            <div class="form-group">
                <label>Bestaande klant:</label>
                <select class="form-control" id="customer-list" name="klantnummer" onchange="fillUser()">
                    <option value="0">Kies een klant</option>
                    <?php
                        while ($row = $customerList->fetch(PDO::FETCH_ASSOC)) {
                            echo '<option value="' . $row['klant_id'] . '">' . $row['voornaam'] . '</option>';
                        }
                    ?>
                </select>
            </div>

            <?php if ($customerId) { ?>
                <div class="form-group">
                    <label>Voornaam</label>
                    <input type="text" name="voornaam" value="<?= $customer['voornaam'] ?>" class="form-control"
                           disabled>
                </div>

                <div class="form-group">
                    <label>Achternaam</label>
                    <input type="text" name="achternaam" value="<?= $customer['achternaam'] ?>" class="form-control"
                           disabled>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?= $customer['email'] ?>" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <label>Mobiel nummer</label>
                    <input type="number" name="tel" value="<?= $customer['tel'] ?>" class="form-control" disabled>
                </div>

            <?php } else { ?>
                <div class="form-group">
                    <label>Voornaam</label>
                    <input type="text" name="voornaam" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Achternaam</label>
                    <input type="text" name="achternaam" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Mobiel nummer</label>
                    <input type="number" name="tel" class="form-control" required>
                </div>
            <?php } ?>

            <div class="form-group">
                <label>Aantal gasten</label>
                <input type="number" name="aantal_personen" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Datum</label>
                <input type="date" name="datum" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tijd</label>
                <input type="time" name="tijd" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tafel nummer</label>
                <input type="number" name="tafel_nummer" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-primary">Verzend</button>
        </form>
    </div>
</div>
