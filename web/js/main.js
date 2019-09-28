$(document).ready(function () {

    $('.nav-units-main-btn').on('click', function (e) {
        e.preventDefault();
        $('.nav-units-main-hided').slideToggle();
    })
    
    $('.navbar-toggle').on('click', function () {
        $('#main-menu').slideToggle(400);
    })
});

function featureInProgress() {
    alert('Данная услуга находится в режиме разработки.\nВы можете узнать всю интересующую Вас информацию по телефонам:\n+38 (067) 760 98 88\n' +
        '+38 (050) 888 26 65\n' )
}
