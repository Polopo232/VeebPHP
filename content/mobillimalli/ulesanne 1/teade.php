<link rel="stylesheet" href="style.css">

<h1>Värske teade</h1>

<div id="sisu">
    <?php
    echo nl2br(file_get_contents("teade.txt"));
    ?>
</div>

<div id="autor">
    <?php
    echo nl2br(file_get_contents("autor.txt"));
    ?>
</div>