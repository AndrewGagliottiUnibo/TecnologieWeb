<?php 
require_once ROOT_PATH . "/sito/script/functions.php";
?>
<h1>Registrazione</h1>
<section id="accessPoint">
    <form action="?page=process_registration" method="post" name="registration_form">
        Username: <input type="text" name="username" /><br />
        Email: <input type="text" name="email" /><br />
        Password: <input type="password" name="p" id="password" /><br />
        <input type="submit" value="Registration" onclick="formhash(this.form, this.form.password)" />
    </form>
    <form>
        <h2>Inserisci qui i tuoi dati personali per registrarti presso <a href="<?php echo ROOT_URL; ?>public?page=homepage">Cacplus.inc</a></h2>
        <label for="email">Email:<input type="email" name="email"></label><br />
        <label for="email">Password:<input type="password" name="email"></label><br />
        <input type="submit" value="Registrati">
    </form>
</section>
<section id="about">
    <article id="trattamento">
        <h2>Sul trattamento dei dati:</h2>
        <p>Questo sito web utilizza cookie di tipo tecnico (per consentire il corretto funzionamento del sito e rendere più rapido e migliore il suo utilizzo). Non usufruiamo di ulteriori strumenti o cookie di diverso tipo da quelli sopracitati, ne ci affidiamo ad aziende di terze parti per la loro gestione o per poter garantire il corretto funzionamento del sito web.</p>
        <p>Per quanto concerne i dettagli sulla privacy e il trattamento dei dati, vi rimandiamo alla sezione <a href="<?php echo ROOT_URL; ?>public?page=info">Info e Contatti</a>.</p>
        <p> <span id="important">Registrandoti a questo sito dichiari di aver accettato la politica sul trattamento dei dati e sull'utilizzo di cookie tecnici per garantire il corretto funzionamento dei nostri servizi</span>.</p>
    </article>
    <aside id="pageFiller"></aside>
</section>