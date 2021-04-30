require('./bootstrap');

require('alpinejs');


function changement() {
    let hauteurDeLaFenetre = window.innerHeight;
    let hauteurScroller = window.scrollY;
    if( hauteurScroller > (hauteurDeLaFenetre/2) ) {
        document.getElementById('ttt').classList.remove('hide');
        document.getElementById('ttt').classList.add('show');
    } else {
        document.getElementById('ttt').classList.add('hide');
        document.getElementById('ttt').classList.remove('show');
    }
}
window.addEventListener( 'scroll' , changement );
