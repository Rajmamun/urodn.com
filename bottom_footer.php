	<div class="container">
		<div class="row">
        	<div class="col-md-12 col-sm-12 col-xs-12"><p style="font-size:11px;" align="center">&copy; 20012-2014 URO Design World, Inc. All rights reserved. Made In URO Design Network.</p> </div>
        </div>
	</div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script type="text/javascript">

    $(document).ready(function() {
        var images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg'];

        $('.jumbotron').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
    });

</script>
  </body>
</html>