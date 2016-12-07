<script type="text/javascript">
	$(document).ready(function(){
	$("input.mytextarea").click(function(e){
	var textvalue = $("textarea.mytextarea").val();
	$("#scomm-srevie").prepend("<p>"+textvalue+"<\p>");
	$("textarea.mytextarea").val("");
	e.preventDefault();
	});
});
</script>
