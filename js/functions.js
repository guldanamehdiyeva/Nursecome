
/*Dropdown activate*/
const activate = (selectors, options = {}) => {
    $(selectors).on('click keyup', e => {
        if(!$(e.target).hasClass('js-is-active')) {
            $(selectors).removeClass('js-is-active');
        }

        if($(e.target).is(selectors)) {
            $(e.target).toggleClass('js-is-active');
        }

        if('onClick' in options && options.onClick instanceof Function && e.type === 'click') {
            options.onClick.call(activate, e.target);
        }

        if('onKeyup' in options && options.onClick instanceof Function && e.type === 'keyup') {
            options.onKeyup.call(activate, e.target);
        }
    });
}


/*Selectric*/
const selectBox = (selector, options = {}) => {
    // for mobile event handler
    if ("onChangeMobile" in options && options.onChangeMobile instanceof Function) {
        options.onChangeMobile.call(selectBox, selector);
    }

    return $(selector).selectric(options);
};

/*Modal*/
MicroModal.init();
