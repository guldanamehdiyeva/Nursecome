
/*Dropdown activate*/
activate(' .js-user-btn, .js-action-btn, .js-notification');



/*Map open close on Order Map modal*/
$('.show-map').click( e => {
    $('.close-btn').addClass('active');
    $('.map').addClass('active');
})

$('.close-btn').click( e => {
    if ($('.map').hasClass('active')) {
        $('.map').removeClass('active')
    }

    if ($('.close-btn').hasClass('active')) {
        $('.close-btn').removeClass('active')
    }
    
})


/*Switch button on-off*/
$('.inner-circle').click( e => {
    $('.switch-btn').toggleClass('on');
})


/*Selectric*/
selectBox('select');


/*Modal*/
MicroModal.init({
    onShow: modal => console.info(`${modal.id} is shown`), // [1]
    onClose: modal => console.info(`${modal.id} is hidden`), // [2]
    openTrigger: 'data-custom-open', // [3]
    closeTrigger: 'data-custom-close', // [4]
    openClass: 'is-open', // [5]
    disableScroll: true, // [6]
    disableFocus: false, // [7]
    awaitOpenAnimation: false, // [8]
    awaitCloseAnimation: false, // [9]
    debugMode: true // [10]
  });

 