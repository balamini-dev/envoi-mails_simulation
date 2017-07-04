<style>
textarea[name=message] {</p>
<p> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> width:400px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset;</p>
<p>}</p>
<p>input[type=text] {</p>
<p> width:400px;<br /> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset; </p>
<p>}</p>
<p>input[type=int] {</p>
<p> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset; </p>
<p>}</p>
<p>input[type=date] {<br /> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset;<br />}</p>
<p>input[type=time] {<br /> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset; </p>
<p>}</p>
<p>input[type=number] {<br /> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset; </p>
<p>}</p>
<p>select[name=option] {<br /> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset; </p>
<p>}</p>
<p>input[type=submit] {<br /> padding:3px;<br /> border:1px solid #F5C5C5;<br /> border-radius:5px;<br /> box-shadow:1px 1px 2px #C0C0C0 inset; </p>
<p>}</p>
</style>

<form action="recapitulatif.php" method="post">
<h2 class="nxs-title nxs-align-left nxs-head-fontsize-3-0 "><span style="font-size: 24pt;"><strong>Remplissez votre demande, nous vous répondrons dans les plus brefs délais</strong></span></h2><br/>
<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"><label>Votre nom (obligatoire)</label> </span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"><input name="nom" type="text" /></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label>Votre e-mail (obligatoire)</label></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <input name="email" type="text" /></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label>Votre numéro de mobile (obligatoire)</label></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"><input name="num" type="int" /></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label>Date de départ (obligatoire)</label></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"><label> </label> <input name="date" type="date" /></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label>Heure de départ (obligatoire)</label></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"><label> </label> <input name="heure" type="time" /></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label>Adresse de départ (obligatoire) </label></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <input name="origin" type="text" value=" [insert_php] echo $_GET["var1"]; [/insert_php] "/></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label>Adresse de destination (obligatoire)</label></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"><label> </label> <input name="destination" type="text" value=" [insert_php] echo $_GET["var2"]; [/insert_php] " /></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label> Nombre de passagers (obligatoire) </label><input max="7" min="1" name="nbr" type="number" value="1" /></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label> Besoin d'un retour ? </label></span>

<select name="option" size="3">
<option>oui</option>
<option>non</option>
<option>je ne sais pas</option>
</select><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <label>Votre message (facultatif)</label> <textarea name="message"></textarea></span><br/>

<span style="font-family: verdana, geneva, sans-serif; font-size: 14pt;"> <input type="submit" /></span>

</form>