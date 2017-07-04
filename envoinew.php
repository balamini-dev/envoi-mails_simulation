 <?php

 if(isset($_POST['mailform'])){
        $destinataire = "balamini92@gmail.com";
        $sujet = 'Reservation';
        $entete = "From: bala_92i@hotmail.fr \n";
        $entete .= "Reply-to: bala_92i@hotmail.fr \n";

        $delim = md5(uniqid(rand()));
        
        $entete .="MIME-Version: 1.0\n";
        $entete .="Content-Type: multipart/mixed;boundary=\"$delim\" \n";
        $entete .="\n";


        $msg ="--$delim \n";
        $msg .="Content-Type: text/plain; charset=\"utf-8\" \n";
        $msg .="Content-Transfer-Encoding: 8bit \n";
        $msg .="\n";


        $msg=' Nouvelle réservation, voir la pièce jointe.';

        $msg .="\n";

        $fichier = 'C:\wamp64\www\Envoimailsimulation\pj.pdf';
        $jointe = file_get_contents($fichier);
        $jointe = chunk_split(base64_encode($jointe));

        $msg .= "--$delim \n";
        $msg .= "Content-Type: application/pdf;name\"pj\" \n";
        $msg .= "Content-Transfer-Encoding: base64 \n";
        $msg .="\n";
        $msg .=$jointe. "\n";
        $msg .="\n";

        $msg .= "--$delim--";


        mail($destinataire, $sujet, $msg, $entete);
          }

          echo "Votre message a bien été envoyé, Merci.";
?>