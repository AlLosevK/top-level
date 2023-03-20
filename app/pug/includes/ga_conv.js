/*
Event snippet for Отправка квиза conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
*/
function gtag_report_conversion1(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      //window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-11066823186/j-jHCKWLi5IYEJKkiZ0p',
      'event_callback': callback
  });
  return false;
}


//////////////////////////////////////////////////////////////////////////////////

/*
Event snippet for Отправка заявки conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
*/

function gtag_report_conversion2(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      //window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-11066823186/w2uBCKiLi5IYEJKkiZ0p',
      'event_callback': callback
  });
  return false;
}



//////////////////////////////////////////////////////////////////////////////////


/*
Event snippet for Перешёл в WhatsApp conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
*/

function gtag_report_conversion3(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      //window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-11066823186/LHnCCKuLi5IYEJKkiZ0p',
      'event_callback': callback
  });
  return false;
}


//////////////////////////////////////////////////////////////////////////////////
