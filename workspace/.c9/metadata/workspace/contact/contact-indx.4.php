{"changed":true,"filter":false,"title":"contact-indx.4.php","tooltip":"/contact/contact-indx.4.php","value":"<!DOCTYPE html>\n<html lang=\"en\">\n  <head>\n    \n    <meta charset=\"utf-8\">\n    \n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n    \n    <meta name=\"description\" content=\"We are here to help you grow, reach your targets and achieve your business goals. Contact us today to learn more about our services. \">\n    \n    <meta name=\"author\" content=\"\">\n    \n    <title>\n      Contact Us | Miracle\n    </title>\n    \n    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">\n    \n    \n    \n    <link href=\"../css/main.css\" rel=\"stylesheet\">\n    \n    <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/default.css\"/>\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/component.css\"/>\n  \n   \n  \n  <link rel=\"shortcut icon\" href=\"../images/favicon.ico\">\n  \n  <style type=\"text/css\">\n    .box-div {\n\n    width: 600px;\n    height:130px;\n    border: 3px solid black;\n    padding: 25px;\n    margin: 25px;\n}\n\n.checkmark {\n  width: 120px;\n  margin: 0 auto;\n  padding-top: 40px;\n}\n\n\n.path {\n  stroke-dasharray: 1000;\n  stroke-dashoffset: 0;\n  animation: dash 2s ease-in-out;\n  -webkit-animation: dash 2s ease-in-out;\n}\n\n.spin {\n  animation: spin 2s;\n  -webkit-animation: spin 2s;\n  transform-origin: 50% 50%;\n  -webkit-transform-origin: 50% 50%;\n}\n\n\n\n@-webkit-keyframes dash {\n 0% {\n   stroke-dashoffset: 1000;\n }\n 100% {\n   stroke-dashoffset: 0;\n }\n}\n\n@keyframes dash {\n 0% {\n   stroke-dashoffset: 1000;\n }\n 100% {\n   stroke-dashoffset: 0;\n }\n}\n\n@-webkit-keyframes spin {\n  0% {\n    -webkit-transform: rotate(0deg);\n  }\n  100% {\n    -webkit-transform: rotate(360deg);\n  }\n}\n\n@keyframes spin {\n  0% {\n    -webkit-transform: rotate(0deg);\n  }\n  100% {\n    -webkit-transform: rotate(360deg);\n  }\n}\n\n@-webkit-keyframes text {\n  0% {\n    opacity: 0; }\n  100% {\n    opacity: 1;\n  }\n\n  \n  @keyframes text {\n  0% {\n    opacity: 0; }\n  100% {\n    opacity: 1;\n  }\n}\n\n</style>\n  \n  </head>\n  <?php include '../header.php';?>\n  <body>\n    \n   \n    \n    <section class=\"container\" id=\"contactForm\">\n      <br>\n      \n      <br>\n      <br>\n      <br><br><br>\n            \n     \n        \n    \n      \n          \n          \n           \n            \n            <form id=\"myForm\">\n  \n  <div class=\"row\">\n    \n    <div class=\"col-sm-12\">\n      \n      \n    <button type=\"button\" id=\"contactSubmit\" class=\"btn btn-primary\">Submit Details</button>  \n    </div>\n  \n  </div>\n  \n  \n  </form>\n  \n\n  <br>\n  </section>\n  \n  <section id=\"thankYou\">\n  <br><br><br><br>\n  \n  \n  <div class=\"row\">\n    \n     <div class=\"col-sm-1\"></div>\n     <div class=\"col-sm-10\">\n       <div class=\"checkmark\">\n  <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"\n\t viewBox=\"0 0 161.2 161.2\" enable-background=\"new 0 0 161.2 161.2\" xml:space=\"preserve\">\n\n<circle class=\"path\" fill=\"none\" stroke=\"green\" stroke-width=\"4\" stroke-miterlimit=\"10\" cx=\"80.6\" cy=\"80.6\" r=\"62.1\"/>\n<polyline class=\"path\" fill=\"none\" stroke=\"green\" stroke-width=\"6\" stroke-linecap=\"round\" stroke-miterlimit=\"10\" points=\"113,52.8 \n\t74.1,108.4 48.2,86.4 \"/>\n<circle class=\"spin\" fill=\"none\" stroke=\"green\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke-dasharray=\"12.2175,12.2175\" cx=\"80.6\" cy=\"80.6\" r=\"73.9\"/>\n\n</svg>\n</div>  \n<center><p2> Your details have been submitted<p2><br><p3> We’ll be in touch shortly.</p3></center>\n<br><br>\n\n     \n     </div>\n     <div class=\"col-sm-1\"></div>\n     \n   </div>\n  </section>\n  \n  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>\n  \n  <script>\n  $(document).ready(function(){\n    $(\"#thankYou\").hide(0);\n      $(\"#contactSubmit\").click(function(){\n      $(\"#contactForm\").hide(0);\n      $(\"#thankYou\").show(0);\n    });\n    \n  });\n</script>\n\n\n\n  \n  <?php include '../footer.php';?>\n  \n \n  </body>\n</html>","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[{"start":{"row":138,"column":30},"end":{"row":151,"column":2},"placeholder":"..."}],"scrolltop":1667,"scrollleft":0,"selection":{"start":{"row":112,"column":3},"end":{"row":112,"column":3},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":40,"state":"css-ruleset","mode":"ace/mode/php"}},"timestamp":1510579602043}