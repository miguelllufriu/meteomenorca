var saveclass = null;

document.addEventListener('DOMContentLoaded', function() {
    var timeSelect = document.getElementById('timeSelect');
    var time = readCookie('time');

    timeSelect.value = time;
    saveclass = saveclass ? saveclass : document.body.className;
    document.body.className = saveclass + ' ' + time;
});

function setTimeRange(cookieValue)
{
    var sel = document.getElementById('timeSelect');

    saveclass = saveclass ? saveclass : document.body.className;
    document.body.className = saveclass + ' ' + sel.value;

    setCookie('time', cookieValue, 365);
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
