{"filter":false,"title":"chatui-6.13.php","tooltip":"/experiment/chatui-6.13.php","undoManager":{"mark":40,"position":40,"stack":[[{"start":{"row":765,"column":1},"end":{"row":766,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":766,"column":0},"end":{"row":767,"column":0},"action":"insert","lines":["",""],"id":3}],[{"start":{"row":767,"column":0},"end":{"row":768,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":767,"column":0},"end":{"row":780,"column":1},"action":"insert","lines":["$(document).ready(function() {","  var target = $(\"#div\");","  $(\"#btn\").click(function() {","    removeElement(target);","  });","});","","function removeElement(target) {","  target.animate({","    opacity: \"-=1\"","  }, 1000, function() {","    target.remove();","  });","}"],"id":5}],[{"start":{"row":768,"column":18},"end":{"row":768,"column":19},"action":"remove","lines":["#"],"id":6}],[{"start":{"row":768,"column":18},"end":{"row":768,"column":19},"action":"remove","lines":["d"],"id":7}],[{"start":{"row":768,"column":18},"end":{"row":768,"column":19},"action":"remove","lines":["i"],"id":8}],[{"start":{"row":768,"column":18},"end":{"row":768,"column":19},"action":"remove","lines":["v"],"id":9}],[{"start":{"row":768,"column":18},"end":{"row":768,"column":19},"action":"insert","lines":["."],"id":10}],[{"start":{"row":768,"column":19},"end":{"row":768,"column":20},"action":"insert","lines":["b"],"id":11}],[{"start":{"row":768,"column":20},"end":{"row":768,"column":21},"action":"insert","lines":["t"],"id":12}],[{"start":{"row":768,"column":21},"end":{"row":768,"column":22},"action":"insert","lines":["n"],"id":13}],[{"start":{"row":768,"column":22},"end":{"row":768,"column":23},"action":"insert","lines":["s"],"id":14}],[{"start":{"row":768,"column":23},"end":{"row":768,"column":24},"action":"insert","lines":["u"],"id":15}],[{"start":{"row":768,"column":24},"end":{"row":768,"column":25},"action":"insert","lines":["b"],"id":16}],[{"start":{"row":768,"column":25},"end":{"row":768,"column":26},"action":"insert","lines":["1"],"id":17}],[{"start":{"row":769,"column":8},"end":{"row":769,"column":9},"action":"remove","lines":["n"],"id":18}],[{"start":{"row":769,"column":7},"end":{"row":769,"column":8},"action":"remove","lines":["t"],"id":19}],[{"start":{"row":769,"column":6},"end":{"row":769,"column":7},"action":"remove","lines":["b"],"id":20}],[{"start":{"row":769,"column":5},"end":{"row":769,"column":6},"action":"remove","lines":["#"],"id":21}],[{"start":{"row":769,"column":5},"end":{"row":769,"column":6},"action":"insert","lines":["."],"id":22}],[{"start":{"row":769,"column":6},"end":{"row":769,"column":7},"action":"insert","lines":["b"],"id":23}],[{"start":{"row":769,"column":7},"end":{"row":769,"column":8},"action":"insert","lines":["t"],"id":24}],[{"start":{"row":769,"column":8},"end":{"row":769,"column":9},"action":"insert","lines":["n"],"id":25}],[{"start":{"row":769,"column":9},"end":{"row":769,"column":10},"action":"insert","lines":["s"],"id":26}],[{"start":{"row":769,"column":10},"end":{"row":769,"column":11},"action":"insert","lines":["u"],"id":27}],[{"start":{"row":769,"column":11},"end":{"row":769,"column":12},"action":"insert","lines":["b"],"id":28}],[{"start":{"row":769,"column":12},"end":{"row":769,"column":13},"action":"insert","lines":["1"],"id":29}],[{"start":{"row":782,"column":0},"end":{"row":785,"column":7},"action":"remove","lines":["$('.btnsub1').click(function() {","          $(\".btnsub1\").addClass(\"eff\");","            $(\"#pannel-out\").show('slow');","    });"],"id":30}],[{"start":{"row":770,"column":26},"end":{"row":771,"column":0},"action":"insert","lines":["",""],"id":31},{"start":{"row":771,"column":0},"end":{"row":771,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":771,"column":4},"end":{"row":771,"column":38},"action":"insert","lines":["    $(\"#pannel-out\").show('slow');"],"id":32}],[{"start":{"row":771,"column":0},"end":{"row":772,"column":0},"action":"remove","lines":["        $(\"#pannel-out\").show('slow');",""],"id":33}],[{"start":{"row":433,"column":0},"end":{"row":438,"column":1},"action":"remove","lines":[".eff{"," display:none;","  opacity:0;","  transition:opacity 50s ease-out;","   -moz-transition:opacity 50s ease-out;","}"],"id":34}],[{"start":{"row":772,"column":5},"end":{"row":772,"column":6},"action":"remove","lines":["1"],"id":35}],[{"start":{"row":772,"column":5},"end":{"row":772,"column":6},"action":"insert","lines":["2"],"id":36}],[{"start":{"row":772,"column":5},"end":{"row":772,"column":6},"action":"remove","lines":["2"],"id":37}],[{"start":{"row":772,"column":5},"end":{"row":772,"column":6},"action":"insert","lines":["1"],"id":38}],[{"start":{"row":771,"column":16},"end":{"row":771,"column":17},"action":"remove","lines":["1"],"id":39}],[{"start":{"row":771,"column":16},"end":{"row":771,"column":17},"action":"insert","lines":["2"],"id":40}],[{"start":{"row":771,"column":16},"end":{"row":771,"column":17},"action":"remove","lines":["2"],"id":41}],[{"start":{"row":771,"column":16},"end":{"row":771,"column":17},"action":"insert","lines":["1"],"id":42}]]},"ace":{"folds":[],"scrolltop":7992.5,"scrollleft":53,"selection":{"start":{"row":501,"column":83},"end":{"row":501,"column":90},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":431,"state":"css-ruleset","mode":"ace/mode/php"}},"timestamp":1520423257508,"hash":"51a429473827421916a5b1fa4e13093b251b85cc"}