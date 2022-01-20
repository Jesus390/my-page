<?php require_once('header.php');?>
<?php require_once('menu.php');?>



<?php
if($result = $coneccion->query("SELECT * FROM posts WHERE slug = '$path_split[1]'")) {
    if($result->num_rows == 0) {
        echo '<section class="info-blog">
            <h3>No existe el tema</h3>
        </section';
    } else {
        $row = $result->fetch_assoc();
        echo '
        <section class="info-blog">
            <p class="date"> <span>Publicado: </span> ' . $row['created_up'] . '</p>
            <h3>' . $row['title'] . '</a></h3>
            <p class="text"> ' . $row['content'] .'...</p>
        </section>';
    }
    $result->free_result();
} else {
    echo '<section class="info-blog">
    <h3>Error al consultar la base de datos.</h3>
    </section';    
}

$coneccion->close();

?>




<?php require_once('footer.php');?>


