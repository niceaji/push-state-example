<?
//공통 footer


if($pjax){
	return;
}
?>

</div><!-- //main -->



<!-- jQuery 필요 -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="pjax.js"></script>

<script>
$(function(){

	//실제 url 이동이 아니라는걸 보여주기 위한 
	$('#debug').html(new Date().getTime());
	
	//자동으로 a태그의 href부분을 ajax 로 읽어서 #main 에 넣어준다. 
	$('a').pjax('#main');
	
});

</script>



<script type="text/javascript">//<![CDATA[
var _gaq = _gaq || [];
_gaq.push(['_setAccount','UA-29102773-1']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
//]]></script>


</body>
</html>