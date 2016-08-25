$(function() {
	setTimeout(function() {
		$("email").each(function() {
			var val = $(this).attr('val');
			$.ajax({
				type: "POST",
				url: "ajaxEmaCrypt.php",
				data: { email: val },
				timeout: 3000,
				success: function(data) {
						$("[val='"+val+"']").html('<a href="mailto:'+data+'">'+data+'</a>');
				}
			});
		});
	}, 1000);
});
