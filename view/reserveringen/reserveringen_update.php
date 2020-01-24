<div class="row">
    <div class="col-xs-12 col-md-12">
        <h1>Pas reservering aan</h1>

        <form action="<?= RESERVERINGEN_UPDATE ?>/<?=$reservationId?>/" method="GET">

            <div class="form-group">
                <label>Voornaam</label>
                <input type="text" name="voornaam" value="<?=$reservation['voornaam']?>" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label>Achternaam</label>
                <input type="text" name="achternaam" value="<?=$reservation['achternaam']?>" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?=$reservation['email']?>" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label>Mobiel nummer</label>
                <input type="number" name="tel" value="<?=$reservation['tel']?>" class="form-control" disabled>
            </div>

            <div class="form-group">
                <label>Aantal gasten</label>
                <input type="number" name="aantal_personen" value="<?=$reservation['aantal_personen']?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Datum</label>
                <input type="date" name="datum" value="<?=$reservation['datum']?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tijd</label>
                <input type="time" name="tijd" value="<?=$reservation['tijd']?>" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Tafel nummer</label>
                <input type="number" name="tafel_nummer" value="<?=$reservation['tafel_nummer']?>" class="form-control" required>
            </div>


            <button type="submit" class="btn btn-primary">Verzend</button>
        </form>
    </div>
</div>
