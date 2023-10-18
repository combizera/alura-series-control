<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séries</title>
</head>

<body>
    <section id="hero">
        <h1>Séries</h1>
        <ul>
            <?php foreach ($series as $serie) : ?>
                <li><?php $serie; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>

</html>