{"filter":false,"title":"haiii.php","tooltip":"/haiii.php","undoManager":{"mark":51,"position":51,"stack":[[{"start":{"row":0,"column":0},"end":{"row":149,"column":9},"action":"insert","lines":["<script>","   (function($) {","  $.fn.dragevent = function(opts) {","    var defaults = {","      throttle: 0","    },","      options = $.extend(defaults, opts),","      lastX,","      lastY;","","    return this.each(function() {","      var element = $(this),","        dragging = false,","        firstMove = false;","","      element.prop(\"draggable\", false);","","      element.on(\"mousedown\", function() {","        dragging = true;","      });","","      element.on(\"mouseup\", function() {","        if (dragging) {","          element.trigger(\"dragend\");","        }","        dragging = false;","        lastX = null;","        lastY = null;","        firstMove = false;","      });","","      element.on(\"mousemove\", function(e) {","        if (dragging && !firstMove) {","          element.trigger(\"dragstart\");","          firstMove = true;","        }","","        if (dragging) {","          var moveX = Number.isFinite(lastX) ? e.pageX - lastX : 0,","            moveY = Number.isFinite(lastY) ? e.pageY - lastY : 0;","","          element.trigger(\"dragmove\", [e.pageX, e.pageY, moveX, moveY]);","          lastX = e.pageX;","          lastY = e.pageY;","        }","      });","    });","  };","})(jQuery);","","$(\".carousel\").each(function() {","  var carousel = $(this);","  var list = carousel.find(\".carousel-list\");","  var clonedItems = list.find(\".carousel-item\").clone();","  var listWidth = list.outerWidth();","  var winWidth = $(window).width();","  var animationDuration = 20000;","  var listX = 0;","  var dragging = false;","  var lastTouchX;","  var didDrag = false;","  ","  function loop(val, min, max) {","\t    var p = max - min + 1;","\t    var mod = (val - min) % p;","","\t    if(mod < 0) {","\t        mod += p;","\t    }","","\t    return min + mod;","\t}","","  clonedItems.attr(\"role\", \"presentation\");","  list.append(clonedItems);","","  carousel.dragevent();","","  function animate() {","    list","      .velocity(","        {","          translateX: 0","        },","        {","          duration: 0","        }","      )","      .velocity(","        {","          translateX: 0 - listWidth","        },","        {","          duration: animationDuration,","          easing: \"linear\",","          complete: animate","        }","      );","  }","","  carousel.on(\"mouseover\", function() {","    console.log('mouseover')","    list.velocity(\"pause\");","  });"," ","","  carousel.on(\"mouseout\", function() {","    console.log('mouseout')","    if(!didDrag) {","      list.velocity(\"resume\");","    }","    else {","      list.velocity(","        {","          translateX: [0 - listWidth]","        },","        {","          duration: animationDuration * ((listWidth - Math.abs(listX)) / listWidth),","          easing: \"linear\",","          complete: animate","        }","      );","    }","    didDrag = false;","  });","","  carousel.on(\"dragstart\", function(e) {","    list.velocity(\"stop\");","    listX = list.offset().left;","  });","","  carousel.on(\"dragend\", function() {","    didDrag = true;","  });","","  carousel.on(\"dragmove\", function(e, pageX, pageY, moveX, moveY) {","    listX = loop(listX + moveX, 0 - listWidth, 0);","","    list.velocity('stop').velocity(","      {","        translateX: listX","      },","      { duration: 0 }","    );","  });","","  animate();","});"," ","</script>"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":2,"column":0},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""],"id":5}],[{"start":{"row":4,"column":0},"end":{"row":5,"column":0},"action":"insert","lines":["",""],"id":6}],[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":7}],[{"start":{"row":6,"column":0},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":8}],[{"start":{"row":7,"column":0},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":9}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":10}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":11}],[{"start":{"row":10,"column":0},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":12}],[{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":13}],[{"start":{"row":12,"column":0},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":14}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":15}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":16}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":0},"action":"insert","lines":["",""],"id":18}],[{"start":{"row":0,"column":0},"end":{"row":30,"column":10},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"en\">","   <head>","      <meta charset=\"utf-8\">","      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">","      <meta name=\"description\" content=\"\">","      <!-- meta tags start for Facebook -->","      <meta property=\"og:url\"   content=\"/events/ibm-think/index.php\" />","      <meta property=\"og:type\"  content=\"article\" />","      <meta property=\"og:title\" content=\"Platinium sponsors again\" />","      <meta property=\"og:description\"  content=\"How much does culture influence creative thinking?\" />","      ","      <!-- meta tags end for facebook   -->","      <title>Think 2018 | Miracle</title>","      <link href=\"/css/bootstrap.min.css\" rel=\"stylesheet\">","      <link href=\"/css/font-awesome.min.css\" rel=\"stylesheet\">","      <link href=\"/css/animate.css\" rel=\"stylesheet\">","      <link href=\"/css/main.css\" rel=\"stylesheet\">","      <link href=\"//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css\" rel=\"stylesheet\">","      <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">","      <link href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css\" rel=\"stylesheet\">","      <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/default.css\" />","      <link rel=\"stylesheet\" type=\"text/css\" href=\"/css/component.css\" />","      <link href=\"/css/think-2018.css\" rel=\"stylesheet\">","      <link rel=\"shortcut icon\" href=\"../../images/favicon.ico\">","      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>","      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>","     ","     ","      ","   </head>"],"id":19}],[{"start":{"row":34,"column":0},"end":{"row":45,"column":0},"action":"remove","lines":["","","","","","","","","","","",""],"id":20}],[{"start":{"row":185,"column":9},"end":{"row":186,"column":0},"action":"insert","lines":["",""],"id":21}],[{"start":{"row":186,"column":0},"end":{"row":187,"column":0},"action":"insert","lines":["",""],"id":22}],[{"start":{"row":187,"column":0},"end":{"row":188,"column":0},"action":"insert","lines":["",""],"id":23}],[{"start":{"row":188,"column":0},"end":{"row":189,"column":0},"action":"insert","lines":["",""],"id":24}],[{"start":{"row":189,"column":0},"end":{"row":190,"column":0},"action":"insert","lines":["",""],"id":25}],[{"start":{"row":190,"column":0},"end":{"row":190,"column":1},"action":"insert","lines":["<"],"id":26}],[{"start":{"row":190,"column":1},"end":{"row":190,"column":2},"action":"insert","lines":["/"],"id":27}],[{"start":{"row":190,"column":2},"end":{"row":190,"column":3},"action":"insert","lines":["h"],"id":28}],[{"start":{"row":190,"column":3},"end":{"row":190,"column":4},"action":"insert","lines":["t"],"id":29}],[{"start":{"row":190,"column":4},"end":{"row":190,"column":5},"action":"insert","lines":["m"],"id":30}],[{"start":{"row":190,"column":5},"end":{"row":190,"column":6},"action":"insert","lines":["l"],"id":31}],[{"start":{"row":190,"column":6},"end":{"row":190,"column":7},"action":"insert","lines":[">"],"id":32}],[{"start":{"row":187,"column":0},"end":{"row":187,"column":1},"action":"insert","lines":["<"],"id":33}],[{"start":{"row":187,"column":1},"end":{"row":187,"column":2},"action":"insert","lines":["s"],"id":34}],[{"start":{"row":187,"column":2},"end":{"row":187,"column":3},"action":"insert","lines":["t"],"id":35}],[{"start":{"row":187,"column":3},"end":{"row":187,"column":4},"action":"insert","lines":["y"],"id":36}],[{"start":{"row":187,"column":4},"end":{"row":187,"column":5},"action":"insert","lines":["l"],"id":37}],[{"start":{"row":187,"column":5},"end":{"row":187,"column":6},"action":"insert","lines":["e"],"id":38}],[{"start":{"row":187,"column":6},"end":{"row":187,"column":15},"action":"insert","lines":["></style>"],"id":39}],[{"start":{"row":187,"column":7},"end":{"row":229,"column":1},"action":"insert","lines":["* {","  box-sizing: border-box;","}","",".carousel {","  overflow-x: hidden;","}","",".carousel-list {","  display: table;","  cursor: -moz-grab;","  cursor: -webkit-grab;","  cursor: grab;","}","",".carousel-item {","  display: table-cell;","  padding: 0 1em;","}","",".box {","  width: 300px;","  height: 300px;","  background-color: #c00;","  color: #fff;","  font-size: 50px;","  text-align: center;","  padding-top: 110px;","}","",".box-green {","  background-color: #090;","}","",".box-blue {","  background-color: #00c;","}",".box-yellow {","  background-color: #fc0;","}",".box-purple {","  background-color: #c0c;","}"],"id":40}],[{"start":{"row":229,"column":1},"end":{"row":230,"column":0},"action":"insert","lines":["",""],"id":41}],[{"start":{"row":231,"column":0},"end":{"row":231,"column":1},"action":"insert","lines":["<"],"id":42}],[{"start":{"row":231,"column":1},"end":{"row":231,"column":2},"action":"insert","lines":["b"],"id":43}],[{"start":{"row":231,"column":2},"end":{"row":231,"column":3},"action":"insert","lines":["o"],"id":44}],[{"start":{"row":231,"column":3},"end":{"row":231,"column":4},"action":"insert","lines":["d"],"id":45}],[{"start":{"row":231,"column":4},"end":{"row":231,"column":5},"action":"insert","lines":["y"],"id":46}],[{"start":{"row":231,"column":5},"end":{"row":231,"column":13},"action":"insert","lines":["></body>"],"id":47}],[{"start":{"row":231,"column":6},"end":{"row":233,"column":0},"action":"insert","lines":["","  ",""],"id":48}],[{"start":{"row":232,"column":2},"end":{"row":233,"column":0},"action":"insert","lines":["",""],"id":49},{"start":{"row":233,"column":0},"end":{"row":233,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":233,"column":2},"end":{"row":234,"column":0},"action":"insert","lines":["",""],"id":50},{"start":{"row":234,"column":0},"end":{"row":234,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":233,"column":2},"end":{"row":251,"column":6},"action":"insert","lines":["<div class=\"carousel\">","  <div class=\"carousel-list\">","    <div class=\"carousel-item\">","      <div class=\"box\">1</div>","    </div>","    <div class=\"carousel-item\">","      <div class=\"box box-blue\">2</div>","    </div>","    <div class=\"carousel-item\">","      <div class=\"box box-green\">3</div>","    </div>","    <div class=\"carousel-item\">","      <div class=\"box box-yellow\">4</div>","    </div>","    <div class=\"carousel-item\">","      <div class=\"box box-purple\">5</div>","    </div>","  </div>","</div>"],"id":51}],[{"start":{"row":26,"column":19},"end":{"row":26,"column":86},"action":"remove","lines":["https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"],"id":52},{"start":{"row":26,"column":19},"end":{"row":26,"column":85},"action":"insert","lines":["https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.js"]}]]},"ace":{"folds":[{"start":{"row":36,"column":8},"end":{"row":185,"column":0},"placeholder":"..."}],"scrolltop":240,"scrollleft":0,"selection":{"start":{"row":16,"column":35},"end":{"row":16,"column":35},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":14,"state":"start","mode":"ace/mode/php"}},"timestamp":1517582314043,"hash":"c09d279807d82179bca69d65490e42e95cfa291b"}