$(document).ready(function() {
    setTimeout(function() {
        fullBuild()
    }, 50)
});
window.onresize = function() {
    fullBuild()
};

function fullBuild() {
    $('.sidebar').css('top', '0px');
    setFooter()
};
document.querySelector('.out-box1').addEventListener('click', function() {
    doThing(this, 0, 0)
});
document.querySelector('.out-box2').addEventListener('click', function() {
    doThing(this, 0, 350)
});
document.querySelector('.out-box3').addEventListener('click', function() {
    doThing(this, 0, 475)
});
document.querySelector('.out-box4').addEventListener('click', function() {
    doThing(this, 0, 575)
});
document.querySelector('.out-box5').addEventListener('click', function() {
    doThing(this, 0, 675)
});
document.querySelector('.out-box6').addEventListener('click', function() {
    doThing(this, 0, 775)
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

function setFooter() {
    var footer = $('#footer'),
        footTop = $('#head').height() + $('#nav').height() + $('.about-content').height()
    footer.css('width', `${window.innerWidth}px`);
    footer.css('z-index', '-1');
    if (window.innerWidth > 768) {
        footer.offset({
            top: footTop,
            left: 0
        })
    } else {
        footer.offset({
            top: footTop + 20,
            left: 0
        })
    }
}
