<!-- include js files -->
<script src="../../../source/assets/dest/js/jquery.js"></script>
<script src="../../../source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="../../../source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="../../../source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="../../../source/assets/dest/vendors/animo/Animo.js"></script>
<script src="../../../source/assets/dest/vendors/dug/dug.js"></script>
<script src="../../../source/assets/dest/js/scripts.min.js"></script>
<script src="../../../source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="../../../source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="../../../source/assets/dest/js/waypoints.min.js"></script>
<script src="../../../source/assets/dest/js/wow.min.js"></script>

<!--customjs-->
<script src="/public/source/assets/dest/js/custom2.js"></script>

<script>
	$(document).ready(function($) {
		$(window).scroll(function() {
			if ($(this).scrollTop() > 150) {
				$(".header-bottom").addClass('fixNav')
			} else {
				$(".header-bottom").removeClass('fixNav')
			}
		})
	})
</script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
	$(function() {

		$("#rateYo").rateYo({
			rating: 0,
			normalFill: "#A0A0A0",
			ratedFill: " #f1c40f"
		}).on("rateyo.set", function(e, data) {
			$('#rating_star').val(data.rating);
			 alert("The rating isset ti " + data.rating + "!");
		});
	});
</script> -->