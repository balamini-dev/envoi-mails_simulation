<?php

if (!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['num']) && !empty($_POST['date']) && !empty($_POST['heure']) && !empty($_POST['origin']) && !empty($_POST['destination']) && !empty($_POST['nbr']) && !empty($_POST['option']))
    {
        echo $_POST['nom'].'</br>';
        echo $_POST['email'].'</br>';
        echo $_POST['num'].'</br>';
        echo $_POST['date'].'</br>';
        echo $_POST['heure'].'</br>';
        echo $_POST['origin'].'</br>';
        echo $_POST['destination'].'</br>';
        echo $_POST['nbr'].'</br>';
        echo $_POST['option'].'</br>';

        ?>

        <form method="POST" action="envoifinal.php">
        <input type="submit" value="CONFIRMER" name="mailform"/>
        </form>
    <?php
    }
    ?>