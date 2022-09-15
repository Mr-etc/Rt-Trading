window.addEventListener("load", ()=>{
    const naviH = document.querySelector('nav.navi').offsetHeight;
    window.onscroll = ()=>{
        let navi = document.querySelector('nav.navi');
        let header = document.querySelector('header');
        if(window.pageYOffset >= (header.offsetTop + header.offsetHeight)){
            header.style.marginTop = naviH + "px";
            navi.classList.add('fixed');
        }
        else if(window.pageYOffset <= (naviH - navi.offsetHeight)){
            header.style.transition = "none";
            header.style.marginTop = '0';
            navi.classList.remove('fixed');
        }
    }
    var mob_burger = document.querySelector('nav .mobile-burger');
    mob_burger.addEventListener('click', (e)=>{
        if(!mob_burger.classList.contains('active')){
            mob_burger.classList.add('active');
            mob_burger.offsetParent.querySelector('.navi-links').classList.add('active');
            document.body.style.overflowY = 'hidden';
        }else{
            mob_burger.classList.remove('active');
            mob_burger.offsetParent.querySelector('.navi-links').classList.remove('active');
            document.body.style.overflowY = 'auto'
        }
    });
});
    