<!DOCTYPE html>

<html lang="fr">
  <head>
	<meta name="Description" content="Page permettant de nous contacter.">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="robots" content="noindex, nofollow">
	<link rel="icon" href="Img/icones/favicon2.ico" type="image/x-icon">
	<link rel="stylesheet" href="CSSDeMonSiteWeb.css" />
	<link rel="stylesheet" href="CSScontact.css" />
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?key='> </script>
	<script src="main.js"></script>
    <title>Contactez-nous !</title>

  </head>

  <body >
	 <div class="head" id="app-3">
      <img onclick="topFunction()" id="flecheHaut" src="Img/icones/up_arrow2.png" alt="fleche_haut" class="fleche_haut"  sizes="5em" srcset="Img/icones/up_arrow.png 200w,
             Img/icones/up_arrow2.png 640w">
	
      <img src="Img/logo.png" alt="logo" class="logo_accueil">
    
     <button class="accordion" @click="seen =! seen">Menu</button>
        <div class="panel" v-if="seen" >
          <ul>
              <li><a href="index.html" >Accueil </a></li>
              <li><a href="quisommesnous.html" >Qui sommes-nous ? </a></li>
              <li><a href="contact.php"  >Contact </a></li>
            </ul>
        </div>

		<nav class="navigation" aria-label="Primary">
		    <ul>
		      <li><a href="index.html" >Accueil </a></li>
		      <li><a href="quisommesnous.html">Qui sommes-nous ? </a></li>   
		      <li><a href="contact.php" class="activeNav" >Contact </a></li>
		    </ul>
	    </nav>
	</div>
  	
<br>


<div style='overflow:hidden;height:440px;width:100%;' class="maps">

    <!--position de la carte dans la page html-->
    <div id='gmap_canvas' style='height:350px;width:100%;'></div>
    <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
    <script>
            function init_map() {
            var myOptions = {
                zoom: 16,
                center: new google.maps.LatLng(46.6931,-1.37312),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        }
        google.maps.event.addDomListener(window, 'load', init_map);
       
       </script>

</div>


<main>
  	<form class="formulaire" action="contact.php" method="post">
	    <div class="form_name">
	        <label for="name">Nom</label>
	        <input type="text" id="name" name="user_name">
	    </div>
	    <div class="form_prenom">
	        <label for="prenom">Prénom</label>
	        <input type="text" id="prenom" name="user_first_name">
	    </div>
	    <div class="form_email">
	        <label for="mail">E-mail </label>
	        <input type="email" id="mail" name="user_mail">
	    </div>
	    <div class="form_objet">
	        <label for="objet">Objet </label>
	        <input type="text" id="objet" name="user_object">
	    </div>
	    <div class="form_message">
	        <label for="message">Message</label>
	       <textarea id="message" class="form_message_text" placeholder="Votre message..." name="textarea" rows="5" cols="30" ></textarea>
	    </div>
	    <input type="submit" value="Envoyer" class="form_submit">
	</form>
</main>
		<footer>
			<div class="footer" >
				<div class="contact">
					<a href="contact.php" target="_blank" >    <img src="Img/icones/nousContactez.png" alt="Contactez-nous">
					</a> 
					<div class="soustitre" >
						<p>Contactez Nous</p>
					</div>
					<div class="info_contact">
						<p>02 51 98 18 32 <br>contact@madera-construction.com <br>
						 MADERA <br> 
						 Rue Enzo Ferrari <br>
						 85000 La Roche sur Yon
						</p>
					</div>
				</div>	
			
		       <div class="suiveznous"> 
		          <img src="Img/icones/suivezNous.png" alt="suivez_nous">
		          <div class="soustitre_suiveznous">
		            <p>Suivez Nous</p>
		          </div>
		          <div class="reseaux">

		            <div class="facebook">
		              <a href="https://www.facebook.com/Madera-construction-bois-170020203016473/" target="_blank"  rel="noopener">
		              <img src="Img/icones/fb.png" alt="facebook" width="60" height="60"></a>
		            </div>
		            <div class="linkedin">
		              <a href="https://www.linkedin.com/company/madera---le-modulaire-bois/" target="_blank"  rel="noopener">
		              <img src="Img/icones/linkedin.png" alt="facebook" width="60" height="60"></a>
		            </div>
		          </div>
		          
		        </div>

	        </div>

		</footer>
<script src="application.js"></script>
  </body>

</html>
