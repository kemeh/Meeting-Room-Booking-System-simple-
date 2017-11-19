<?php
if(isset($_SESSION['messages'])){
    foreach ($_SESSION['messages'] as $message){
        echo '<div class="alert alert-' . $message['type']. '">';
        echo $message['text'];
        echo '</div>';
    }

    unset($_SESSION['messages']);
}