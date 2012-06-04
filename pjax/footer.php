<?

if($pjax){
	return;
}
?>

</div><!-- //main -->




<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="pjax.js"></script>

<script>
$(function(){

	$('#debug').html(new Date().getTime());
	
	$('a').pjax('#main');


	
});

</script>


</body>
</html>