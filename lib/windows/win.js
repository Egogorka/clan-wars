
complain('win.js loaded');

/*document.addEventListener('load',function(){

    complain('win.js : window.onload happend');
    var windows = document.querySelectorAll('.window');
    for( i=windows.length-1; i>=0; i--){
        var curwin = windows[i];


        curwin.style.display = 'none';
    }

});*/

function win_show(id) {
    var curwin = GetByID(id);

    curwin.style.display = 'flex';

    curwin.style.top = window.innerHeight/2 - curwin.offsetHeight/2 + "px";
    curwin.style.left = window.innerWidth/2 - curwin.offsetWidth/2 + "px";
}

function win_hide(id) {
    complain(id+' is hidden now');
    GetByID(id).style.display = 'none';
}