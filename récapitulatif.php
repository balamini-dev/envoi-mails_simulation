[insert_php]

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
[/insert_php]

               <form method="POST" action="">
            <input type="submit" value="CONFIRMER" name="mailform"/>
        </form>
[insert_php]
    
        if(isset($_POST['mailform']))
        {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"$_POST['nom']"<"$_POST['email']">'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
        <html>
            <body>
                <div align="center">
                    <img src="http://www.primfx.com/mailing/banniere.png"/>
                    <br />
                    J\'ai envoyé ce mail avec PHP !
                    <br />
                    <img src="http://www.primfx.com/mailing/separation.png"/>
                </div>
            </body>
        </html>
        ';

        mail("balamini92@gmail.com", "Réservation ABSOLUTE DRIVER !", $message, $header);
        }
[/insert_php]
    }
    else
    {
        echo'Il manque un renseignement';
    }


[/insert_php]



<a href="izi.php"> <input type="button" value="RETOUR AU FORMULAIRE"> </a> 







