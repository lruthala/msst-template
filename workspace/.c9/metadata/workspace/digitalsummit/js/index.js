{"changed":true,"filter":false,"title":"index.js","tooltip":"/digitalsummit/js/index.js","value":"$('.dot:nth-child(1)').click(function(){\n  $('.inside').animate({\n    'width' : '15%'\n  }, 500);\n});\n$('.dot:nth-child(2)').click(function(){\n  $('.inside').animate({\n    'width' : '15%'\n  }, 500);\n});\n$('.dot:nth-child(3)').click(function(){\n  $('.inside').animate({\n    'width' : '15%'\n  }, 500);\n});\n$('.dot:nth-child(4)').click(function(){\n  $('.inside').animate({\n    'width' : '15%'\n  }, 500);\n});\n$('.dot:nth-child(5)').click(function(){\n  $('.inside').animate({\n    'width' : '15%'\n  }, 500);\n});\n$('.dot:nth-child(6)').click(function(){\n  $('.inside').animate({\n    'width' : '15%'\n  }, 500);\n});\n$('.dot:nth-child(7)').click(function(){\n  $('.inside').animate({\n    'width' : '15%'\n  }, 500);\n});\nif ($('#switch1').not(':checked')){\n  $('.modal').wrap('<div class=\"mask\"></div>')\n    $('.mask').click(function(){\n      $(this).fadeOut(300);\n      $('.mask article').animate({\n        'top' : '-100%'\n      }, 300)\n    });\n\n    $('.dot').click(function(){\n      var modal = $(this).attr('id');\n      $('.mask').has('article.' + modal).fadeIn(300);\n      $('.mask article.' + modal).fadeIn(0).animate({\n        'top' : '10%'\n      }, 300);\n    });\n}\n$(\"#switch1\").click(function(){\n  if ($('#switch1').is(':checked')){\n    $('.modal').unwrap('<div class=\"mask\"></div>');\n    $('.modal').hide();\n    $('.modal').addClass('nobox');\n    $('.dot').click(function(){\n    var modal = $(this).attr('id');\n    $('article.nobox').hide()\n    $('article.nobox.' + modal).fadeIn(200)\n\t});\n  } else {\n    $('article').removeClass(\"nobox\");\n    $('.modal').wrap('<div class=\"mask\"></div>')\n    $('.mask').click(function(){\n      $(this).fadeOut(300);\n      $('.mask article').animate({\n        'top' : '-100%'\n      }, 300)\n    });\n\n    $('.dot').click(function(){\n      var modal = $(this).attr('id');\n      $('.mask').has('article.' + modal).fadeIn(300);\n      $('.mask article.' + modal).fadeIn(0).animate({\n        'top' : '10%'\n      }, 300);\n    });\n  }\n})","undoManager":{"mark":-2,"position":28,"stack":[[{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"remove","lines":["0"],"id":2}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"remove","lines":["2"],"id":3}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":["1"],"id":4},{"start":{"row":2,"column":16},"end":{"row":2,"column":17},"action":"insert","lines":["5"]}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"remove","lines":["0"],"id":5}],[{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"remove","lines":["4"],"id":6}],[{"start":{"row":7,"column":15},"end":{"row":7,"column":16},"action":"insert","lines":["1"],"id":7}],[{"start":{"row":7,"column":16},"end":{"row":7,"column":17},"action":"insert","lines":["5"],"id":8}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"remove","lines":["0"],"id":9}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"remove","lines":["6"],"id":10}],[{"start":{"row":12,"column":15},"end":{"row":12,"column":16},"action":"insert","lines":["1"],"id":11}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":17},"action":"insert","lines":["5"],"id":12}],[{"start":{"row":17,"column":15},"end":{"row":17,"column":17},"action":"remove","lines":["80"],"id":13}],[{"start":{"row":17,"column":15},"end":{"row":17,"column":16},"action":"insert","lines":["1"],"id":15}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":17},"action":"insert","lines":["5"],"id":16}],[{"start":{"row":19,"column":3},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":17}],[{"start":{"row":20,"column":0},"end":{"row":24,"column":3},"action":"insert","lines":["$('.dot:nth-child(4)').click(function(){","  $('.inside').animate({","    'width' : '15%'","  }, 500);","});"],"id":18}],[{"start":{"row":24,"column":3},"end":{"row":25,"column":0},"action":"insert","lines":["",""],"id":19}],[{"start":{"row":25,"column":0},"end":{"row":29,"column":3},"action":"insert","lines":["$('.dot:nth-child(4)').click(function(){","  $('.inside').animate({","    'width' : '15%'","  }, 500);","});"],"id":20}],[{"start":{"row":29,"column":3},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":21}],[{"start":{"row":30,"column":0},"end":{"row":34,"column":3},"action":"insert","lines":["$('.dot:nth-child(4)').click(function(){","  $('.inside').animate({","    'width' : '15%'","  }, 500);","});"],"id":22}],[{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"remove","lines":["4"],"id":23},{"start":{"row":20,"column":18},"end":{"row":20,"column":19},"action":"insert","lines":["5"]}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":["4"],"id":24}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"insert","lines":["5"],"id":25}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"remove","lines":["5"],"id":26}],[{"start":{"row":25,"column":18},"end":{"row":25,"column":19},"action":"insert","lines":["6"],"id":27}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"remove","lines":["4"],"id":28}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["6"],"id":29}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"remove","lines":["6"],"id":30}],[{"start":{"row":30,"column":18},"end":{"row":30,"column":19},"action":"insert","lines":["7"],"id":31}]]},"ace":{"folds":[],"scrolltop":188,"scrollleft":0,"selection":{"start":{"row":30,"column":18},"end":{"row":30,"column":18},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":10,"state":"start","mode":"ace/mode/javascript"}},"timestamp":1479309638442}