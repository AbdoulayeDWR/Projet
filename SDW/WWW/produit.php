<?php 
    include("../layout/header.html");
    include("data.php");
?>
<link rel="stylesheet" href="../css/product.css">
<main>
    <?php
        if (isset($_GET['num'])) {
            $num = $_GET['num'];
        };
    ?>
    <div id="photos">
        <?php
            echo "<img id='big' src=../". $tab[$num]['img'] ." alt='big_pic'>";
            echo "<div id='tiny'>";
            echo "<img src=../". $tab[$num]['img'] ." alt='tiny_pics'>";
            echo "<img src=../". $tab[$num]['img'] ." alt='tiny_pics'>";
            echo "<img src=../". $tab[$num]['img'] ." alt='tiny_pics'>";
            echo "<img src=../". $tab[$num]['img'] ." alt='tiny_pics'>";
            echo "</div>";
        ?>
    </div>

    <section id="product">
        <?php
            echo "<div>";
            echo "<h1>{$tab[$num]['name']}</h1>";
            echo "<p>Le Tudor Monte Carlo, le ' Paul Newman ' du pauvre... Poor Man's Paul Newman en VO.</p>";
            echo "<p>Le ' Monte Carlo ' aussi surnommé : le ' Paul Newman ' du pauvre, car ne coûtant qu'un dixième / neuvième / huitième /septième / sixième... Du ' Paul Newman'</p>";
            echo "<div id ='price'>";
            echo "<h2>Prix : {$tab[$num]['prix']}</h2>";
            echo "<button id='buy'>Ajouter au panier</button>";
            echo "</div>";
            echo "<h3>Caractéristiques</h3>";
            echo "</div>";
            echo "<table>";
            echo "<tr>";
            echo "<th>Réference</th>";
            echo "<td>{$tab[$num]['reference']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Mouvement</th>";
            echo "<td>{$tab[$num]['mouvement']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Boitier</th>";
            echo "<td>{$tab[$num]['boitier']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Bracelet</th>";
            echo "<td>{$tab[$num]['bracelet']}</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Année</th>";
            echo "<td>{$tab[$num]['annee']}</td>";
            echo "</tr>";
            echo "</table>";
        ?>
    </section>
</main>
<?php include("../layout/footer.html"); ?>