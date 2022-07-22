/* Description: Custom JS file */
(function($) {
    "use strict";
    /* Countdown Timer - The Final Countdown */


	$('#clock').countdown('2022/7/24 10:50:56') /* change here your "countdown to" date */
	.on('update.countdown', function(event) {
		var format = '<span class="counter-number p-1">%D<span class="timer-text">J</span></span><span class="counter-number p-1">%H<span class="timer-text">H</span></span><span class="counter-number p-1">%M<span class="timer-text">M</span></span><span class="counter-number p-1">%S<span class="timer-text">S</span></span>';
		$(this).html(event.strftime(format));
	})
	.on('finish.countdown', function(event) {
	    $(this).html('Enchere Fermé')
		.parent().addClass('disabled');
        $('.btn-bid').addClass('disabled');
    });

    var clicks = 0;
    var labelClick = $('.num-clic');

    $('.btn-bid').on('click', function () {
        clicks += 1;
        console.log(clicks);
        $.ajaxSetup({
            headers : {
                'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: '/click/count/btn/ajax',
            method: 'POST',
            data: 'click='+clicks,
            done: function (data) {
                console.log(data);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });

})(jQuery);

// // foundre
// let timeSecond = 120;
// const timeH = document.querySelector("h1");

// displayTime(timeSecond);

// const countDown = setInterval(() => {
//   timeSecond--;
//   displayTime(timeSecond);
//   if (timeSecond == 0 || timeSecond < 1) {
//     endCount();
//     clearInterval(countDown);
//   }
// }, 1000);

// function displayTime(second) {
//   const min = Math.floor(second / 60);
//   const sec = Math.floor(second % 60);
//   timeH.innerHTML = `
//   ${min < 10 ? "0" : ""}${min}:${sec < 10 ? "0" : ""}${sec}
//   `;
// }

// function endCount() {
//   timeH.innerHTML = "Time out";
// }

// *********************
// This Code is for only the floating card in right bottom corner
// **********************

const touchButton = document.querySelector(".float-text");
const card = document.querySelector(".float-card-info");
const close = document.querySelector(".gg-close-r");

touchButton.addEventListener("click", moveCard);
close.addEventListener("click", moveCard);

function moveCard() {
  card.classList.toggle("active");
}

