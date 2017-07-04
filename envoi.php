 <?php

 if(isset($_POST['mailform']))
        {
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"TEST"<"b.diaby@hotmail.fr">'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';

        $message='
        <html>
            <body>
                <div align="center">
                    <img src="http://www.primfx.com/mailing/banniere.png"/>
                    <br />
                    J\'ai envoyé ce mail avec PHP ! ET çA MARCHE §
                    <br />
                    <img src="http://www.primfx.com/mailing/separation.png"/>
                </div>
            </body>
        </html>
        '.$_GET['var1'].''.$nom'';

        mail("balamini92@gmail.com", "Réservation ABSOLUTE DRIVER !", $message, $header);
          }

          echo "Votre message a bien été envoyé, Merci."
?>
