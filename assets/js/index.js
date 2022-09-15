document.onscroll = ()=>{
    let counter = document.querySelector('.counter_block');
    if(window.pageYOffset > (counter.offsetTop - counter.scrollWidth)){
        let item = counter.querySelectorAll('.counter_block-item');
        item.forEach((e)=>{
            let toCount = e.getAttribute('to-counter');
            $(e.querySelector('.counter-text')).each(function () {
                $(this).prop('Counter',0).animate({
                    Counter: toCount
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        })
        document.onscroll = null;
    }
}