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

document.querySelector('.out-main').addEventListener('click', function() {
    doThing(this, 0, 0, $('#BLPrint'))
});
document.querySelector('.out-reg').addEventListener('click', function() {
    doThing(this, 0, 350, $('#regulationPrint'))
});
document.querySelector('.out-amend').addEventListener('click', function() {
    doThing(this, 0, 450, $('#amendmentPrint'))
});
document.querySelector('.out-fines').addEventListener('click', function() {
    doThing(this, 0, 550, $('#finePrint'))
});
document.querySelector('.out-rent').addEventListener('click', function() {
    doThing(this, 0, 550, $('#rentLawsPrint'))
});
document.querySelector('.out-more').addEventListener('click', function() {
    doThing(this, 0, 650, $('#moreInfoPrint'))
});

function doThing(el, x, y, btn) {
    $('#BLPrint').css('display','none')
    $('#regulationPrint').css('display','none')
    $('#amendmentPrint').css('display','none')
    $('#finePrint').css('display','none')
    $('#rentLawsPrint').css('display','none')
    $('#moreInfoPrint').css('display','none')
    if (!el.childNodes[3].classList.contains('expand')) {
        var els = document.getElementsByClassName('outer');
        for (var i = 0; i < els.length; i++) {
            if (els[i].childNodes[3].classList.contains('expand')) {
                els[i].childNodes[3].classList.toggle('expand')
            }
        };
        el.childNodes[3].classList.toggle('expand')
        window.scrollTo(x, y)
        btn.css('display','block')
    } else {
        el.childNodes[3].classList.toggle('expand')
        window.scrollTo(0, 0)
        btn.css('display','none')
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
