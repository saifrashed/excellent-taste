<!DOCTYPE html>
<html lang="en">

<head>
    <title>Excellent Taste</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="<?= BASE_URL ?>/assets/css/main.css">
</head>

<body>


<div class="container-fluid">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?= BASE_URL ?>">Excellent Taste</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=RESERVERINGEN_READ?>">Reserveringen</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?=BESTELLINGEN_READ?>">Bestellingen</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Overzichten
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Kok</a>
                            <a class="dropdown-item" href="#">Barman</a>
                            <a class="dropdown-item" href="#">Ober</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Gegevens</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
