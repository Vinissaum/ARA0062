<?php
session_start();

if ( ! isset($_SESSION["autenticado"]) ){
    echo "
    <script>
    window.location.replace('https://vinissaum.000webhostapp.com/');
    </script>
    ";
    
}

?>