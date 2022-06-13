<div class="formRegister">
    <h1>Inscription</h1>
    <div class="form-saisie">
        <form action="../src/Controller/UserController.php" method="POST">
            <input type="text" name="ville" placeholder="Ville">        
            <span>Adresse e-mail :</span>
            <input type="text" name="email" placeholder="Email">
            <span>Mot de passe :</span>
            <input type="password" name="mot_de_passe" placeholder="Mot de passe">
            <span>Loisirs :</span>
            <input type="text" name="loisir" placeholder="Loisirs">
            <input type="submit" value="Envoyer">
        </form>
        <!-- <p id="dejaInscrit"><a href="./formLogin.php">Vous avez déjà un compte ?</a></p> -->
    </div>
</div>
