$(document).ready(function () {
			$("#btn__load__more").bind("click", function(){
				var countNews = document.getElementById('place__for__all_news').getElementsByClassName('new').length;
				$.ajax ({
					url: "php/loadNews.php",
					type: "POST",
					data: ({kol: 5, tek: countNews}),
					dataType: "html",
					success: fSuccess
				});
			});
		});


function fSuccess (data){
			data = JSON.parse(data);
			console.log(data);
			for(var i in data)
			{
			let news = 
			`<div class="new">
							<div class="new__category">
								<a href="${data[i].link}">
									${data[i].category}
								</a>
							</div>

							<div class="new__title">
								<a href="${data[i].url}">
									${data[i].title}
								</a>
							</div>

							<div class="new__date">
								${data[i].date}
							</div>

							<div class="new__text">
								<a href="${data[i].url}">
								${data[i].text}	
								</a>
							</div>

							<div class="send__comment">
								<a href="comment.php?id=${data[i].id}">Оставить комментарий к записи</a>
							</div>
						</div>`;
			document.getElementById("place__for__all_news").insertAdjacentHTML('beforeend', news);
		}}

