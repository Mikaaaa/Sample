<?php include 'controller/installController.php';ini_set("display_errors",0); ?>
<div class="col s12 m6">
  <div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <span class="card-title">Composer</span>
      <p>Composer est un utilitaire que laravel utilise pour ces commandes, néssessite une connexion internet</p>
    </div>
    <div class="card-action">
      <a href="https://getcomposer.org/download/">Télécharger Composer</a>
    </div>
  </div>
</div>
<div class="col s12 m6">
  <div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <span class="card-title">Laravel</span>
      <p>Laravel ce framework de tout les possible , comment l'installer (n'éssessite une connexion internet), via cette requète
        <pre>composer create-project --prefer-dist laravel/laravel nomblog</pre> le composer va créer un dossier complet portant le nom spécifié</p>
        <br>

      <form action="index.php?page=installation" method="POST">
        <div class="input-field col s6">
          <input id="blog_name" type="text" name="blog_name" class="validate">
          <label for="blog_name">Nom du blog</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Créer<i class="material-icons right">send</i></button>
      </form>

      <br />
      <label><?php echo createBlog($_REQUEST['blog_name']) ?></label>
    </div>
    <div class="card-action">
      <a href=<?php echo 'http://localhost/'.$_REQUEST['blog_name'].'/public'?>>Accéder au site</a>
    </div>
  </div>
</div>