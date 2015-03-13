<?php
if(!isset($_SESSION['auth']) or $_SESSION['auth']!=true){
    header ("location: /login?msg=02");
}
