// var callhunterON = false;
// var ctd24ON = false;
// var ctd60ON = false;
// var ctdtestON = true;
// var ctdspanON = true;
// var anchor = true;

// if (anchor == true) {
// 	$(document).ready(function() { 
// 		$('a[href^="#"]').on('click', function() {
// 			var target = $(this).attr('href');
// 			if (target.search('#modal') == -1) {
// 				$('html, body').animate({scrollTop: $(target).offset().top}, 800);
// 				return false;
// 			}
// 		});  
// 	});
// }

$(document).ready(function(){
        $("#form").submit(function() { //устанавливаем событие отправки для формы с id=form
                var form_data = $(this).serialize(); //собераем все данные из формы
                $.ajax({
                type: "POST", //Метод отправки
                url: "ajax_form.php", //путь до php фаила отправителя
                data: form_data,
                success: function() {
                        //код в этом блоке выполняется при успешной отправке сообщения
                        alert("Ваше сообщение отпрвлено!");
                  }
                });
        });
});