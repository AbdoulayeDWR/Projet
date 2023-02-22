<?php
    include("../layout/header.html")
?>
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
    include("data.php");
    $nb_pages = ceil(count($tab) / $element);
    $next_page = ($page == $nb_pages) ? $page : $page+1;
    $previous_page = ($page == 1) ? : $page -1;

    if (isset($_GET['element'])){
        $element = $_GET['element'];
    }
    if ($page == 1){
        for ($i=0; $i < $element ; $i++) { 
            echo'<section>';
            echo '<img src =' .$tab[$i]['img'] . '>';
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
            echo '<img src =' .$tab[$i]['img'] . '>';
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
<?php
    include("../layout/footer.html")
?>
