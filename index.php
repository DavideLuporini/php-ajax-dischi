<?php
include __DIR__ . '/./data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class="d-flex align-items-center justify-content-between">

        <i class="fab fa-spotify px-4"></i>
    </header>
    <main class="container d-flex justify-content-center align-items-center">
        <ul class="d-flex flex-wrap my-1">
            <?php foreach ($database as $album) { ?>
                <li id="card" class="text-center m-2 p-1">
                    <img class="p-3" src="<?= $album['poster'] ?>" alt="" />
                    <h4 class=" subtitle text-white"> <?= $album['title'] ?> </h4>
                    <h5 class="text-secondary"> <?= $album['author'] ?> </h5>
                    <h6 class="text-secondary"> <?= $album['year'] ?> </h6>
                </li>
            <?php
            } ?>
        </ul>
    </main>
</body>

</html>

</html>