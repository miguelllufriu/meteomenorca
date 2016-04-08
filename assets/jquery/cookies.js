var saveclass = null;

document.addEventListener('DOMContentLoaded', function() {
    var locationSelect = document.getElementById('locationSelect');
    var location = readCookie('location');

    locationSelect.value = location;
    saveclass = saveclass ? saveclass : document.body.className;
    document.body.className = saveclass + ' ' + location;
});

function setLocation(cookieValue)
{
    var sel = document.getElementById('locationSelect');

    saveclass = saveclass ? saveclass : document.body.className;
    document.body.className = saveclass + ' ' + sel.value;

    setCookie('location', cookieValue, 365);
}

function setCookie(cookieName, cookieValue, nDays) {
    var today = new Date();
    var expire = new Date();

    if (!nDays)
        nDays=1;

    expire.setTime(today.getTime() + 3600000*24*nDays);
    document.cookie = cookieName+"="+escape(cookieValue) + ";expires="+expire.toGMTString();
}

function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}
