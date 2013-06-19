<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>News Site</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/style.css" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<!--<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>-->
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>

<!--<script type="text/javascript"
src="scripts/jquery.js"></script>-->
<script type="text/javascript">
$(document).ready(function() {
	
$("ul#topnav li").hover(function() { //Hover over event on list item
	$(this).css({ 'background' : '#000 '}); //Add background color + image on hovered list item
	$(this).find("span").show(); //Show the subnav
} , function() { //on hover out...
	$(this).css({ 'background' : 'none'}); //Ditch the background
	$(this).find("span").hide(); //Hide the subnav
});
	
});
</script>
</head>
<body id="top">
<?php include('includes/header.php') ?>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="images/demo/1.gif" alt="" />
            <div class="panel-overlay">
              <h2>Nullamlacus dui ipsum</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/2.gif" alt="" />
            <div class="panel-overlay">
              <h2>Aliquatjusto quisque nam</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/3.gif" alt="" />
            <div class="panel-overlay">
              <h2>Dapiensociis temper donec</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/4.gif" alt="" />
            <div class="panel-overlay">
              <h2>Semvelit nonummy odio tempus</h2>
              <p>Justolacus eger at pede felit in dictum sempus elit curabitur ipsum. Ametpellentum.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="images/demo/5.gif" alt="" />
            <div class="panel-overlay">
              <h2>Pedefamet orci orci quisque</h2>
              <p>Nonnam aenenasce morbi liberos malesuada risus id donec volutpat estibulum curabitae.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="column">
      <ul class="latestnews">
        <li><img src="images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
        <li><img src="images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
        <li class="last"><img src="images/demo/100x100.gif" alt="" />
          <p><strong><a href="#">Indonectetus facilis leo.</a></strong> Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="#">Environment &raquo;</a></h2>
      <img src="images/demo/60x60.gif" align="left" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <h2><a href="#">Technology &raquo;</a></h2>
      <img src="images/demo/60x60.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
    </div>
    <div class="fl_right_vids">
      <h2><a href="#">Videos &raquo;</a></h2>
      <div class="videoframe">
      <iframe  src="http://www.youtube.com/embed/GB57anEa4Q4" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>
   

    <br class="clear" />
    <div class="fl_left">
      <h2><a href="#">Entertainment &raquo;</a></h2>
      <img src="images/demo/60x60.gif" alt="" />
     <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <h2><a href="#">Politics &raquo;</a></h2>
      <img src="images/demo/60x60.gif" alt="" />
     <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
      
    </div>
     <div class="fl_right_adv">
     <h3>Area for advertisement</h3>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="#">Environment &raquo;</a></h2>
      <img src="images/demo/60x60.gif" align="left" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <h2><a href="#">Technology &raquo;</a></h2>
      <img src="images/demo/60x60.gif" alt="" />
      <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
    </div>
    <div class="fl_right_vids">
      <h2><a href="#">Videos &raquo;</a></h2>
      <div class="videoframe">
      <iframe src="http://www.youtube.com/embed/GB57anEa4Q4" frameborder="0" allowfullscreen></iframe>
    </div>
    </div>
   

    <br class="clear" />
    <div class="fl_left">
      <h2><a href="#">Sports &raquo;</a></h2>
      <img src="images/demo/60x60.gif" alt="" />
     <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <h2><a href="#">Politics &raquo;</a></h2>
      <img src="images/demo/60x60.gif" alt="" />
     <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
      <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. </p>
      <ul>
      <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
       <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
        <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
         <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
          <li><a href="#">Morbitincidunt maurisque eros molest</a></li>
      </ul>
      
    </div>
     <div class="fl_right_adv">
     <h3>Area for advertisement</h3>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
    <div class="footbox">
      <h2>Amaging world</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Foreign</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Literature</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    
    <div class="footbox_last">
      <h2>Facebook</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
   <div class="footeradv"> <img src="images/demo/300x80.gif" align="left"  /></div>
   <div class="footeradv">   <img src="images/demo/300x80.gif" align="left"    /></div>
    <div class="footeradv">   <img src="images/demo/300x80.gif" align="left"    /></div>
 <br class="clear" />
  </div>



</div>
</div>

<?php include('includes/footer.php') ?>
</body>
</html>
