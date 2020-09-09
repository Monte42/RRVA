document.querySelector('.out-eat').addEventListener('click', function() {
    doThing(this, 0, 0)
});
document.querySelector('.out-golf').addEventListener('click', function() {
    doThing(this, 0, 220)
});
document.querySelector('.out-ski').addEventListener('click', function() {
    doThing(this, 0, 315)
});
document.querySelector('.out-activity').addEventListener('click', function() {
    doThing(this, 0, 400)
});
document.querySelector('.out-art').addEventListener('click', function() {
    doThing(this, 0, 490)
});
document.querySelector('.out-distillery').addEventListener('click', function() {
  doThing(this, 0, 580)
});
document.querySelector('.out-more').addEventListener('click', function() {
    doThing(this, 0, 690)
});

function doThing(el, x, y) {
    if (!el.childNodes[3].classList.contains('expand')) {
        var els = document.getElementsByClassName('outer');
        for (var i = 0; i < els.length; i++) {
            if (els[i].childNodes[3].classList.contains('expand')) {
                els[i].childNodes[3].classList.toggle('expand')
            }
        };
        el.childNodes[3].classList.toggle('expand')
        window.scrollTo(x, y)
    } else {
        el.childNodes[3].classList.toggle('expand')
        window.scrollTo(0, 0)
    }
}
