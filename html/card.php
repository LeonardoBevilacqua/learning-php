<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main>
        <?php for ($i=0; $i < 4; $i++) { ?>
            <div class="card">
                <div class="container">
                    <h2>Titulo card <?= $i ?></h2>
                    <p>descrição <?= $i ?></p>
                    <button>Clique aqui</button>
                </div>
            </div>
        <?php } ?>
    </main>
</body>
</html>