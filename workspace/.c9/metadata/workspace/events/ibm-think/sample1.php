{"filter":false,"title":"sample1.php","tooltip":"/events/ibm-think/sample1.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":122,"column":74},"action":"insert","lines":["var $overflow = $(\"#overflow\");","var $viewport = $(\".viewport\");","var $wrapper  = $(\".wrapper\");","var $boxes    = $(\".boxes\");","var $proxy    = $(\"<div/>\");","","","var numBoxes  = 100;  ","var boxWidth  = 350;","var boxHeight = 250;  ","var imgWidth  = boxWidth  - 6;","var imgHeight = boxHeight - 14;","var viewWidth = $viewport.width();","var wrapWidth = numBoxes * boxWidth;","var progress  = 0;","","","var xMin = 0;","var xMax = 0;","","","TweenLite.set([$wrapper, $viewport], { height: boxHeight, xPercent: -50 });","TweenLite.set($boxes, { left: -boxWidth });","","","for (var i = 1; i <= numBoxes; i++) {","","","  var src = \"https://unsplash.it/\" + imgWidth + \"/\" + imgHeight + \"?random=\" + i;","  var num = $(\"<div class='num'/>\").text(i);    ","  var img = $(\"<img />\", { src: src, width: imgWidth, height: imgHeight });","  var box = $(\"<div class='box'/>\").append(img).append(num).appendTo($boxes);","","","  TweenLite.set(box, { x: i * boxWidth, width: boxWidth, height: boxHeight });","}","","","var animation = TweenMax.to(\".box\", 1, {","  x: \"+=\" + wrapWidth, ","  ease: Linear.easeNone,","  paused: true,","  repeat: -1,","  modifiers: {","    x: function(x, target) {","      x = x % wrapWidth;","      target.style.visibility = x - boxWidth > viewWidth ? \"hidden\" : \"visible\";","      return x;","    }","  }","});","","","var d = Draggable.create($proxy, {","  type: \"x\",","  trigger: \".wrapper\",","  throwProps: true,","  // onDragStart: setRange,","  onDrag: updateProgress,","  onThrowUpdate: updateProgress,","  snap: { ","    x: snapX ","  }","})[0];","","","$overflow.on(\"change\", applyOverflow);","$(window).resize(resize);","","","// function setRange() {   ","  ","//   // We really don't care what the draggable values are. ","//   // We just need a starting point to use in the normalize function","//   // to figure out how much change there has been","//   // xMin = this.x;","//   // xMax = xMin + wrapWidth;","//   // progress = animation.progress();","// }","","","function snapX(x) {","  return Math.round(x / boxWidth) * boxWidth;","}","","","function updateProgress() {  ","  console.log(\"update progress\")","  animation.progress(this.x / wrapWidth);","}","","","","","","","// function normalize(value, min, max) {","//   return (value - min) / (max - min);","// }","","","function resize() {","  viewWidth = $viewport.width();","  animation.render(animation.time(), false, true);","}","","","function applyOverflow() {","  if($overflow.prop(\"checked\")){","    TweenLite.set(\".wrapper\", {overflow:\"visible\"});","  }else {","    TweenLite.set(\".wrapper\", {overflow:\"hidden\"});","  }","}","","","","","function updateDraggable() {","  d.update();","  animation.progress(d.x / wrapWidth);","}","TweenLite.to(d.target, 1, {x:\"-=700\", onUpdate:updateDraggable, delay:2});"],"id":1}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":116,"column":0},"end":{"row":116,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1518617770620,"hash":"802335bfeaa0cfadff2759dd128e36e28f464531"}