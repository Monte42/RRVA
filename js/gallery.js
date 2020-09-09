var array1 = document.getElementsByClassName('pic');
for (var i = 0; i < array1.length; i++) {
    var modal = document.getElementById("myModal");
    var img = document.getElementById(array1[i].id);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt
    }
    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none"
    }
}

$(document).ready(function() {
    setTimeout(function() {
        mobilePage()
    }, 500)
});
window.onresize = function() {
    mobilePage()
};

function mobilePage(){
  if (isMobileDevice()) {
    $('body').offset({top: 30, left: screenLeft});
    $('body').css('width', '120vw');
    $('#footer').css('width', '102%');
  }
}


function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};
