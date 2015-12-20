</div>

<nav class="span4">
    <h3>Menu</h3>

    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="inscription.php">S'inscrire</a></li>
        <li><a href="connexion.php">Se connecter</a></li>
        <li><a href="article.php">Rédiger un article</a></li>
        <li><a href="deconnexion.php">Se déconnecter</a></li>				
    </ul>
    <br />
    <form action="recherche.php" method="post" enctype="multipart/form-data" id="form_recherche" name="form_recherche">
        <div class="clearfix">
            <label for="motcle">Mot clé: </label>
            <div class="input">
                <input type="text" name="motcle" id="motcle" value=""/>
            </div>
        </div> 
        <div>
            <input type="submit" name="Rechercher" value="Rechercher" class="btn btn-small btn-primary"  style="float:right"/>
        </div>   		
    </form>
</nav>
</div>

</div>
