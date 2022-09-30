var nav = document.querySelector('nav');

window.addEventListener('scroll', function(){
    if(window.pageXOffset > 100){
        nav.classList.add('bg-white', 'shadow');
    }else{
        nav.classList.reomve('bg-white', 'shadow');
    }
});