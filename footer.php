<div class="mdl-layout-spacer" style="       padding-bottom: 5px;"></div>
            
			<footer class="mdl-mini-footer">
		  <div class="mdl-mini-footer__left-section">
			<div class="mdl-logo">
			  &copy; Николойчук Никита 2015
			</div>
			<ul class="mdl-mini-footer__link-list">
			  <li><a href="">Link 1</a></li>
			  <li><a href="">Link 2</a></li>
			  <li><a href="">Link 3</a></li>
			</ul>
		  </div>
		  <div class="mdl-mini-footer__right-section">
			<button class="mdl-mini-footer__social-btn"></button>
			<button class="mdl-mini-footer__social-btn"></button>
			<button class="mdl-mini-footer__social-btn"></button>
		  </div>
		</footer>
      </main>
    </div>
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>

	<script>
	$(".place").hover(function() {
		   $(this).addClass("hover"); 
		}, function() {
		   $(this).removeClass("hover");
		});
		$('.place').click(function(event) {
				var id = $(this).attr('arr');
				$("#sendradio").val(id);
		        $('.place').not(this).removeClass('clicked');
		        $(this).toggleClass('clicked'); 
		    });






	/*$('.place').click(function(){
	var id = $(this).attr('arr');
	$("#sendradio").val(id);
	  if($(this).css('background-color')=='rgb(230, 230, 230)'){
		$(this).animate({backgroundColor: 'white'}, 'slow');
		} else {
		$('.place').animate({backgroundColor: 'white'}, 'slow');
		$(this).animate({backgroundColor: '#E6E6E6'}, 'slow').stop(true);
		}
	});*/
	</script>
  </body>
</html>