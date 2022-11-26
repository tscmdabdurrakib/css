$(document).ready(function(){
	$("#imgBox").hide();

	$("#generate").on("click", function(e){
		e.preventDefault();

		var img_type = $("#image_type").val();
		var width = $("#width").val();
		var height = $("#height").val();

		if ((img_type === "") || (width === "") || (height === "")) {
			alert("All fields are required.");
		}else {
			$("#imgBox").fadeIn();
			$("#form").hide();

			$("#imgBox img").attr("src", "https://source.unsplash.com/"+width+"x"+height+"/?"+img_type);
		}
	});

	$("#go_back").on("click", function(){
		$("#form").fadeIn();
		$("#imgBox").hide();

		var img_type = $("#image_type").val('');
		var width = $("#width").val('');
		var height = $("#height").val('');
	});
});