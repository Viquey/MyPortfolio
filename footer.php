
<hr class="cleanit">

<div id="footer">
        <div id="footer_in">
            
            <p>Ce portfolio a &eacute;t&eacute; inspir&eacute; du template de <a href="http://ries.cz"> <b>Vilém Ries</b></a>
            <br/> Vous pouvez trouver ce Template HTML <a href="http://nina.ries.cz/index.html"><b>ici</b></a></p>
            <span><b>Auteur: </b><br/>Vyach Sellathurai</span>

        </div>
        
</div>

<script>
	$(window).bind('scroll', function() {
		if(!$('#header').hasClass("elemFixed") && ($(window).scrollTop() > 40)) {
			$('#header').removeClass("elemeInit");
			$('#header').addClass("elemFixed").data("top", $('#header').offset().top);
			$('#menu').removeClass("menuBack");
			$('#menu').addClass("menuFixed").data("top", $('#menu').offset().top);
			
		} 
		else if ($('#header').hasClass("elemFixed") && ($(window).scrollTop() < 40)) {
			$('#header').removeClass("elemFixed");
			$('#header').addClass("elemeInit")
			$('#menu').removeClass("menuFixed");
			$('#menu').addClass("menuBack")
		}
	});
</script>

