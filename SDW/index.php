<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="stylesheet" href="css/propos_faq.css">
    <title>Heure24</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <header>
        <div>
            <h1>HEURE24</h1>
            <p>The World's Watch Market</p>
        </div>
        <a href="WWW/cart.php"><button>Panier :<span>0</span></button></a>
    </header>
    <hr>
    <nav>
        <a href="index.php">Acceuil</a>
        <a href="WWW/collection.php">Collection</a>
        <a href="WWW/propos.php">A propos</a>
        <a href="WWW/FAQ.php">FAQ</a>
        <a href="WWW/contact.php">Contact</a>
    </nav>
    <hr>
<main>
    <article class="big">
        <article>
            <!-- <div>
                <img src="media/images/cover4.jpg" alt="" >
            </div> -->
        </article>
    </article>
    <?php
    $page = 1;
    if (isset($_GET['page'])){
        $page = $_GET['page'];
    }

    $element = 6;
    include("WWW/data.php");
    $nb_pages = ceil(count($tab) / $element);
    $next_page = ($page == $nb_pages) ? $page : $page+1;
    $previous_page = ($page == 1) ? : $page -1;

    if (isset($_GET['element'])){
        $element = $_GET['element'];
    }
    if ($page == 1){
        for ($i=0; $i < $element ; $i++) { 
            echo'<section>';
            echo "<a href='WWW/produit.php?num=". $i ."'>";
            echo "<img src = {$tab[$i]['img']} >";
            echo "</a>";
            echo $tab[$i]['name'];
            echo '<br>';
            echo $tab[$i]['prix'];
            echo '</section>';
        }
    } else {
        for ($i= $element*($page - 1); $i < $element*$page ; $i++) { 
            if ($i > count($tab)-1){
                break;
            }
            echo'<section>';
            echo "<a href='WWW/produit.php?num=". $i ."'>";
            echo "<img src ={$tab[$i]['img']}>";
            echo "</a>";
            echo $tab[$i]['name'];
            echo '<br>';
            echo $tab[$i]['prix'];
            echo '</section>';
        }
    }
    ?>
    <div aria-label="...">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="<?php echo "index.php?page={$previous_page}&element={$element}"?>">Previous</a>
            </li>
            <?php
                for ($x = 1 ; $x <= $nb_pages ; $x++){
                    // if ($page == $x){
                        //     $is_active = "active";
                        // } else {
                    //     $is_active = "";
                    // }
                    $is_active = ($page == $x) ? "active" : "";
                    echo "<li class='page-item {$is_active}'><a class='page-link' href='index.php?page={$x}&element={$element}'>{$x}</a></li>";
                } 
            ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo "index.php?page={$next_page}&element={$element}"; ?>">Next</a>
            </li>
        </ul>
    </div>
</main>
<footer>
    <p>#SupDeWeb</p>
    <div>
        <a href="" target="_blank"><img src="media/facebook.svg" alt="logo facebook"></a>
        <a href="" target="_blank"><img src="media/twitter.svg" alt="logo twitter"></a>
    </div>
</footer>
</body>
</html>