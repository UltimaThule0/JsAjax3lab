$(document).ready(function (){
		var id = window.location.search.substring(4);
	$(".submit").click(
			function(){
				var name = document.getElementById('name').value;

				var email = document.getElementById('email').value;

				var text = document.getElementById('text').value;

			sendAjaxForm(name, email, text, id);
			return false; 
		});
    		comment(id);
});
	function fSuccessComment(data){
		alert("Комментарий успешно добавлен!");
		document.comment.reset();
	}

	function sendAjaxForm(name, email, text, id) {
				$.ajax ({
					url: "php/send_data.php",
					type: "POST",
					data: ({name: name, email: email, text: text, id: id}),
					dataType: "html",
					success: fSuccessComment
				});
}

		function comment(id) {
				$.ajax ({
					url: "php/get_data.php",
					type: "POST",
					data: ({id: id}),
					dataType: "html",
					success: fSuccessLoad
				});
}

	function fSuccessLoad (data) {
			data = JSON.parse(data);
			console.log(data);
			for( let i in data){
			let block = 
			`<div class="new__comment">
				<div class="comment__name">
					${data[i].name_comment}
				</div>

				<div class="comment__email">
					${data[i].email_comment}
				</div>

				<div class="comment__text">
					${data[i].text_comment}
				</div>
			</div>`;
			document.getElementById("comment__place").insertAdjacentHTML('afterbegin', block);
		}}