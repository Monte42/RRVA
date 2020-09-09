$('.sidebar').css('top', '0px')

function mapsSelector() {
    if ((navigator.platform.indexOf("iPhone") != -1) || (navigator.platform.indexOf("iPod") != -1) || (navigator.platform.indexOf("iPad") != -1))
        window.open("maps://maps.google.com/maps?daddr=42.241699,-74.575375&amp;ll=");
    else window.open("https://maps.google.com/maps?daddr=42.241699,-74.575375&amp;ll=")
}
