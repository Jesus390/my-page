<?php require_once("app/coneccion.php");?>

<?php
    if(isset($_REQUEST['path'])) {
        $path = htmlspecialchars($_REQUEST['path']);
        $path_split = explode("/", $path);

        switch(count($path_split)) {
            case 1: 
                switch($path_split[0]) {
                    case '':
                    include_once("home.php");
                        break;
                    case "blog":
                        include_once("blog.php");
                        break;
                    default:
                        include_once("error.php");
                }
                break;
            case 2: 
                include_once("blog_.php");
                break;
            default:
                include_once("error.php");
        }   
    }
?>
