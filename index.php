<!DOCTYPE html>
<?php
if (empty($_REQUEST['page'])) {
        $_REQUEST['page'] ="";
      }
?>
  <html class="grey-text lighten-5">
    <head >
      <title>Plugin</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="lib/css/materialize.min.css"  media="screen,projection"/>
      <!-- Compiled and minified JavaScript -->
      <script src="lib/js/materialize.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <script type="text/javascript">
      
        $(document).ready(function(){
           $(".button-collapse").sideNav();
        });
       $(document).ready(function(){
          $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
          });
        });
       </script>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <ul id="slide-out" class="side-nav fixed blue-grey lighten-5" style="transform: translateX(0%);">
          <li class="logo"><h4 class="black-text">Plugin</h4></li>
          <li><a href="?page=installation"><i class="material-icons">file_download</i>Installation</a></li>
          <li class="no-padding">
          <ul class="collapsible blue-grey lighten-5" data-collapsible="accordion"><?php include 'lib/menu.php' ?></ul>
          </li>
      </ul>
    <nav>
      <div class="nav-wrapper blue darken-4">
        <div class="row hide-on-med-and-down">
      <div class="col s6 center ">
        <a href="?page=" class="breadcrumb">Accueil</a>
        <?php if (isset($_REQUEST['dir'])) {
          echo '<a href="?page=" class="breadcrumb">'.ucfirst($_REQUEST['dir']).'</a>';
        }  ?>        
        <a href="?page=" class="breadcrumb"><?php echo ucfirst($_REQUEST['page']) ?></a>
      </div>
      <a href="?page=music" class="right grey-text" style="margin-right:10px"><i class="material-icons">play_circle_outline</i></a>
      </div>
      </div>
    </nav>

    <div class="row">
      <div class="col offset-s2">
      <?php
        switch ($_REQUEST['page']) {
          case '':
            include('view/index.view.php');break;
          case 'installation':
            include('view/install.view.php');break;
          case 'code':
            include('view/code.view.php');break;
          case 'music':
            include('view/code.view.php');break;
          case 'controller':
            include('view/controller.view.php');break;
          case 'route':
            include('view/route.view.php');break;
        }
      ?>
      </div>
      </div>
    </body>
  </html>