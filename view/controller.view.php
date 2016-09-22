<?php include 'controller/gestController.php';ini_set("display_errors",0); ?>
<div class="col s12 m6">
  <div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <span class="card-title">Liste des controller</span>
      <p class="blue-grey darken-1"><ul class="collection" style="border:0px"><?php listControllers($_REQUEST['dir']); openfile($_REQUEST['dir'],$_REQUEST['file'] ) ?></ul></p>
    </div>
    <div class="card-action">
      <a href="" onclick="document.location.reload(false)">Actualiser</a>
    </div>
  </div>
</div>
<div class="col s12 m6">
  <div class="card blue-grey darken-1">
    <div class="card-content white-text">
      <span class="card-title">Créer un controller</span>
      <p>Laravel ce framework de tout les possible , comment créer une controller, via cette requète
        <pre>php artisan make:controller nomController</pre> le nom du controller doit impérativement être suivi du nom "Controller" ex. nomController ou encore PostController</p>
        <br>

      <form class="col s12" action= <?php echo "index.php?page=controller&dir=".$_REQUEST['dir']."" ?> method="POST">
        <div class="input-field col s6">
          <input id="controller_name" type="text" name="controller_name" class="validate">
          <label for="controller_name">Nom du Controller</label>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action" >Créer<i class="material-icons right">send</i></button>
      </form>
      <br />
      <label><?php echo '<p>'.createController($_REQUEST['dir'],$_REQUEST['controller_name']).'</p>' ?></label>
    </div>
    
  </div>
</div>