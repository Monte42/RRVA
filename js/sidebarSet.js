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
