<?php require_once('header.php');?>
<?php require_once('menu.php');?>

<?php
if($result = $coneccion->query("SELECT * FROM posts ORDER BY idposts DESC LIMIT 3")) {
    if($result->num_rows == 0) {
        echo '<section class="info-blog">
            <h3>No hay publicaciones</h3>
        </section';
    } else {
        while($row = $result->fetch_assoc()) {
            echo '
            <section class="info-blog">
                <p class="date"> <span>Publicado: </span> ' . $row['created_up'] . '</p>
                <h3><a href="/blog/' . $row['slug'] . '"> ' . $row['title'] . '</a></h3>
                <p class="text"> ' . $row['content'] .'...</p>
            </section>';   
        }
    }
    $result->free_result();
} else {
    echo '<section class="info-blog">
    <h3>Error al consultar la base de datos.</h3>
    </section';    
}

$coneccion->close();

?>


<section class="network">
    <h3>Mis Redes</h3>
    <ul>
        <li><a href="https://github.com/Jesus390" target="_blank" title="Go my github">Github</a></li>
        <li><a href="https://www.linkedin.com/in/marioespinola/" target="_blank" title="Go my Linkedin">linkedin</a></li>
    </ul>
</section>

<?php require_once('footer.php');?>
