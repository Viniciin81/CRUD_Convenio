<?php

    function alertErro($msg)
    {
        echo '<div class="alert alert-danger" role="alert">';
            echo $msg;
        echo '</div>';   
    }
    function alertSucesso($msg)
    {
        echo '<div class="alert alert-success" role="alert">';
        echo $msg;
        echo '</div>';
    }

?>