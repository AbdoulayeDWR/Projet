<?php /* 
faut faire un truc pour que quand on appui sur le bouton ajouter au panier, le tab panier récup l'id de la montre.

une fois l'id récup, on affiche sous forme de tableau l'image de la montre et son nom, de l'autre coté y'aura son prix et le bouton croix pour le supprimer.

ensuite faut faire le bouton de commande
*/

include("layout/header.php");

?>

<h3>Ceci est exemple de la page panier, nous n'avons pas reçu à la faire</h3>

<hr>
<div class="cart">
    <div>
        <img src="../media/montre1.jpg" alt="montre1">
        <h5>Air King</h5>
        <p>7350€</p>
    </div>
    <img class="cross" src="../media/cross.png" alt="cross">

</div>
<hr>
<?php
    include("layout/footer.php");
?>