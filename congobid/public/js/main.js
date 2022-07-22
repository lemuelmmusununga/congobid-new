
const password = document.getElementById('password')
const passwords = document.getElementById('password_confirmation')
function isInputNumber(evt){
    var inputValid = String.fromCharCode(evt.which);

    if(!(/[0-9]/.test(inputValid))){
        evt.preventDefault();
    }
}
$('#show-password').click(function(){
    if(password.type === 'password'){
        password.setAttribute('type','text')
        $('#icon_hidden').addClass('hidden')
        $('#icon_show').addClass('show')
    }
    else{
        password.setAttribute('type','password')
        $('#icon_hidden').removeClass('hidden')
        $('#icon_show').removeClass('show')
    }
})

$('#show-password_two').click(function(){
    if(passwords.type === 'password'){
        passwords.setAttribute('type','text')
        $('#icon_hidden_two').addClass('hidden')
        $('#icon_show_two').addClass('show')
    }
    else{
        passwords.setAttribute('type','password')
        $('#icon_hidden_two').removeClass('hidden')
        $('#icon_show_two').removeClass('show')
    }
})
$('.btn-article').click(function(e){
    e.preventDefault()
    $('.side-menu-filter').addClass('active')
    $('.overplay').addClass('active')
})
$('.close-side-menu').click(function(){
    $('.side-menu-filter').removeClass('active')
    $('.overplay').removeClass('active')
})
$('.dropmenu').click(function(){
    $('.side-menu').addClass('active')
    $('.overplay').addClass('active')
});

$('.overplay').click(function(){
    $('.side-menu').removeClass('active')
    $('.overplay').removeClass('active')
    $('.side-menu-filter').removeClass('active')
});

$('.close-menu').click(function(){
    $('.side-menu').removeClass('active')
    $('.overplay').removeClass('active')
});

$('.btn-float, .block-title .btn').click(function(){
    $('.block-fond').addClass('active')
    $('.block-fond .content').addClass('active')
    $('.close').addClass('active')
});

$('.close, .fond').click(function(){
    $('.block-fond').removeClass('active')
    $('.block-fond .content').removeClass('active')
    $('.close').removeClass('active')
});
$(window).scroll(function() {

    if ($(this).scrollTop() > 40) {
        $(".btn-float").addClass('active');

    }
    else {
        $(".btn-float").removeClass('active');
    }

});


$('.click-button').click(function(e){
    e.preventDefault()
})
const textarea = document.querySelector(".nav-chat .form-control")

textarea.addEventListener("keyup", e =>{
    textarea.style.height = "45px";
    let scHeight = e.target.scrollHeight;
    textarea.style.height = scHeight+'px';
})
