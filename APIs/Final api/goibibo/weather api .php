<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<div id='openweathermap-widget'></div>
                    <script type='text/javascript'>
                    window.myWidgetParam = {
                        id: 15,
                        cityid: 1271476,
                        appid: '79b8bacc3f81462c88dcc307c2674f5a',
                        units: 'metric',
                        containerid: 'openweathermap-widget',                        
                    };
                    (function() {
                        var script = document.createElement('script');
                        script.type = 'text/javascript';
                        script.async = true;
                        script.src = 'http://openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js';
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(script, s);
                    })();
                  </script>
</body>
</html>