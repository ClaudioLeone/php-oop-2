<!-- 
    Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
        - L'e-commerce vende **prodotti** per animali. I prodotti sono categorizzati, le **categorie** sono Cani o Gatti.
        - I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc.

    Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria, tipo
    di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
-->

<?php
require __DIR__ . "/db.php";

include __DIR__ . "/Views/layout/head.php";

include __DIR__ . "/Views/partials/content.php";

include __DIR__ . "/Views/layout/footer.php";