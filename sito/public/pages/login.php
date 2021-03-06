<?php
require_once ROOT_PATH . "/sito/script/functions.php";
require_once ROOT_PATH . "/sito/public/pages/process_login.php";

if (isset($_GET['error'])) {
    echo 'Error Logging In!';
}
$message = "";
if (isset($_SESSION['error'])) {
    $message = $_SESSION['error'];
    $_SESSION['error'] = "";
}
?>


<?php if (login_check($mysqli) == false) : ?>
    <h1>Sezione di accesso al profilo personale</h1>
    <form id="login_form" action="?page=process_login" method="post">
        <label for="login_email">E-mail</label>
        <input id="login_email" type="text" name="email" required />
        <label for="login_password">Password</label>
        <input id="login_password" type="password" name="p" required />
        <span><?php echo ($message) ?></span>
        <input class="commit_button" type="submit" value="Login" onclick="formhash(this.form, this.form.login_password);" />
        <div>
            <p>Non sei ancora registrato? <a class="info" href="<?php echo ROOT_URL; ?>public?page=registrazione">Registrati adesso!</a>
            </p>
        </div>

    </form>


<?php else : ?>
    <h1>Profilo Personale</h1>
    <form id="logout_form" action="?page=logout" method="post" name="logout_form">
        <a class="commit_button" href="<?php echo ROOT_URL; ?>public?page=modify_data">Modifica Il Profilo</a>
        <input class="commit_button" type="submit" value="Logout" />
    </form>


<?php endif; ?>

<section id="about">
    <article id="trattamento">
        <h2>Sul trattamento dei dati:</h2>
        <p>Questo sito web utilizza cookie di tipo tecnico (per consentire il corretto funzionamento del sito e rendere più rapido e migliore il suo utilizzo). Non usufruiamo di ulteriori strumenti o cookie di diverso tipo da quelli sopracitati, ne ci affidiamo ad aziende di terze parti per la loro gestione o per poter garantire il corretto funzionamento del sito web.</p>
        <p>Per quanto concerne i dettagli sulla privacy e il trattamento dei dati, vi rimandiamo alla sezione <a class="info" href="<?php echo ROOT_URL; ?>public?page=info">Info e Contatti</a>.</p>
    </article>
</section>