{"changed":true,"filter":false,"title":"slide24.js","tooltip":"/slide24.js","value":"html.fp-enabled,\n.fp-enabled body {\n    margin: 0;\n    padding: 0;\n    overflow:hidden;\n\n    /*Avoid flicker on slides transitions for mobile phones #336 */\n    -webkit-tap-highlight-color: rgba(0,0,0,0);\n}\n#superContainer {\n    height: 100%;\n    position: relative;\n\n    /* Touch detection for Windows 8 */\n    -ms-touch-action: none;\n\n    /* IE 11 on Windows Phone 8.1*/\n    touch-action: none;\n}\n.fp-section {\n    position: relative;\n    -webkit-box-sizing: border-box; /* Safari<=5 Android<=3 */\n    -moz-box-sizing: border-box; /* <=28 */\n    box-sizing: border-box;\n}\n.fp-slide {\n    float: left;\n}\n.fp-slide, .fp-slidesContainer {\n    height: 100%;\n    display: block;\n}\n.fp-slides {\n    z-index:1;\n    height: 100%;\n    overflow: hidden;\n    position: relative;\n    -webkit-transition: all 0.3s ease-out; /* Safari<=6 Android<=4.3 */\n    transition: all 0.3s ease-out;\n}\n.fp-section.fp-table, .fp-slide.fp-table {\n    display: table;\n    table-layout:fixed;\n    width: 100%;\n}\n.fp-tableCell {\n    display: table-cell;\n    vertical-align: middle;\n    width: 100%;\n    height: 100%;\n}\n.fp-slidesContainer {\n    float: left;\n    position: relative;\n}\n.fp-controlArrow {\n    -webkit-user-select: none; /* webkit (safari, chrome) browsers */\n    -moz-user-select: none; /* mozilla browsers */\n    -khtml-user-select: none; /* webkit (konqueror) browsers */\n    -ms-user-select: none; /* IE10+ */\n    position: absolute;\n    z-index: 4;\n    top: 50%;\n    cursor: pointer;\n    width: 0;\n    height: 0;\n    border-style: solid;\n    margin-top: -38px;\n    -webkit-transform: translate3d(0,0,0);\n    -ms-transform: translate3d(0,0,0);\n    transform: translate3d(0,0,0);\n}\n.fp-controlArrow.fp-prev {\n    left: 15px;\n    width: 0;\n    border-width: 38.5px 34px 38.5px 0;\n    border-color: transparent #fff transparent transparent;\n}\n.fp-controlArrow.fp-next {\n    right: 15px;\n    border-width: 38.5px 0 38.5px 34px;\n    border-color: transparent transparent transparent #fff;\n}\n.fp-scrollable {\n    overflow: hidden;\n    position: relative;\n}\n.fp-scroller{\n    overflow: hidden;\n}\n.iScrollIndicator{\n    border: 0 !important;\n}\n.fp-notransition {\n    -webkit-transition: none !important;\n    transition: none !important;\n}\n#fp-nav {\n    position: fixed;\n    z-index: 100;\n    margin-top: -32px;\n    top: 50%;\n    opacity: 1;\n    -webkit-transform: translate3d(0,0,0);\n}\n#fp-nav.right {\n    right: 17px;\n}\n#fp-nav.left {\n    left: 17px;\n}\n.fp-slidesNav{\n    position: absolute;\n    z-index: 4;\n    left: 50%;\n    opacity: 1;\n    -webkit-transform: translate3d(0,0,0);\n    -ms-transform: translate3d(0,0,0);\n    transform: translate3d(0,0,0);\n}\n.fp-slidesNav.bottom {\n    bottom: 17px;\n}\n.fp-slidesNav.top {\n    top: 17px;\n}\n#fp-nav ul,\n.fp-slidesNav ul {\n  margin: 0;\n  padding: 0;\n}\n#fp-nav ul li,\n.fp-slidesNav ul li {\n    display: block;\n    width: 14px;\n    height: 13px;\n    margin: 7px;\n    position:relative;\n}\n.fp-slidesNav ul li {\n    display: inline-block;\n}\n#fp-nav ul li a,\n.fp-slidesNav ul li a {\n    display: block;\n    position: relative;\n    z-index: 1;\n    width: 100%;\n    height: 100%;\n    cursor: pointer;\n    text-decoration: none;\n}\n#fp-nav ul li a.active span,\n.fp-slidesNav ul li a.active span,\n#fp-nav ul li:hover a.active span,\n.fp-slidesNav ul li:hover a.active span{\n    height: 12px;\n    width: 12px;\n    margin: -6px 0 0 -6px;\n    border-radius: 100%;\n }\n#fp-nav ul li a span,\n.fp-slidesNav ul li a span {\n    border-radius: 50%;\n    position: absolute;\n    z-index: 1;\n    height: 4px;\n    width: 4px;\n    border: 0;\n    background: #333;\n    left: 50%;\n    top: 50%;\n    margin: -2px 0 0 -2px;\n    -webkit-transition: all 0.1s ease-in-out;\n    -moz-transition: all 0.1s ease-in-out;\n    -o-transition: all 0.1s ease-in-out;\n    transition: all 0.1s ease-in-out;\n}\n#fp-nav ul li:hover a span,\n.fp-slidesNav ul li:hover a span{\n    width: 10px;\n    height: 10px;\n    margin: -5px 0px 0px -5px;\n}\n#fp-nav ul li .fp-tooltip {\n    position: absolute;\n    top: -2px;\n    color: #fff;\n    font-size: 14px;\n    font-family: arial, helvetica, sans-serif;\n    white-space: nowrap;\n    max-width: 220px;\n    overflow: hidden;\n    display: block;\n    opacity: 0;\n    width: 0;\n    cursor: pointer;\n}\n#fp-nav ul li:hover .fp-tooltip,\n#fp-nav.fp-show-active a.active + .fp-tooltip {\n    -webkit-transition: opacity 0.2s ease-in;\n    transition: opacity 0.2s ease-in;\n    width: auto;\n    opacity: 1;\n}\n#fp-nav ul li .fp-tooltip.right {\n    right: 20px;\n}\n#fp-nav ul li .fp-tooltip.left {\n    left: 20px;\n}\n.fp-auto-height.fp-section,\n.fp-auto-height .fp-slide,\n.fp-auto-height .fp-tableCell{\n    height: auto !important;\n}\n\n.fp-responsive .fp-auto-height-responsive.fp-section,\n.fp-responsive .fp-auto-height-responsive .fp-slide,\n.fp-responsive .fp-auto-height-responsive .fp-tableCell {\n    height: auto !important;\n}","undoManager":{"mark":-2,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":228,"column":1},"action":"insert","lines":["/*!"," * fullPage 2.8.9"," * https://github.com/alvarotrigo/fullPage.js"," * MIT licensed"," *"," * Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo"," */","html.fp-enabled,",".fp-enabled body {","    margin: 0;","    padding: 0;","    overflow:hidden;","","    /*Avoid flicker on slides transitions for mobile phones #336 */","    -webkit-tap-highlight-color: rgba(0,0,0,0);","}","#superContainer {","    height: 100%;","    position: relative;","","    /* Touch detection for Windows 8 */","    -ms-touch-action: none;","","    /* IE 11 on Windows Phone 8.1*/","    touch-action: none;","}",".fp-section {","    position: relative;","    -webkit-box-sizing: border-box; /* Safari<=5 Android<=3 */","    -moz-box-sizing: border-box; /* <=28 */","    box-sizing: border-box;","}",".fp-slide {","    float: left;","}",".fp-slide, .fp-slidesContainer {","    height: 100%;","    display: block;","}",".fp-slides {","    z-index:1;","    height: 100%;","    overflow: hidden;","    position: relative;","    -webkit-transition: all 0.3s ease-out; /* Safari<=6 Android<=4.3 */","    transition: all 0.3s ease-out;","}",".fp-section.fp-table, .fp-slide.fp-table {","    display: table;","    table-layout:fixed;","    width: 100%;","}",".fp-tableCell {","    display: table-cell;","    vertical-align: middle;","    width: 100%;","    height: 100%;","}",".fp-slidesContainer {","    float: left;","    position: relative;","}",".fp-controlArrow {","    -webkit-user-select: none; /* webkit (safari, chrome) browsers */","    -moz-user-select: none; /* mozilla browsers */","    -khtml-user-select: none; /* webkit (konqueror) browsers */","    -ms-user-select: none; /* IE10+ */","    position: absolute;","    z-index: 4;","    top: 50%;","    cursor: pointer;","    width: 0;","    height: 0;","    border-style: solid;","    margin-top: -38px;","    -webkit-transform: translate3d(0,0,0);","    -ms-transform: translate3d(0,0,0);","    transform: translate3d(0,0,0);","}",".fp-controlArrow.fp-prev {","    left: 15px;","    width: 0;","    border-width: 38.5px 34px 38.5px 0;","    border-color: transparent #fff transparent transparent;","}",".fp-controlArrow.fp-next {","    right: 15px;","    border-width: 38.5px 0 38.5px 34px;","    border-color: transparent transparent transparent #fff;","}",".fp-scrollable {","    overflow: hidden;","    position: relative;","}",".fp-scroller{","    overflow: hidden;","}",".iScrollIndicator{","    border: 0 !important;","}",".fp-notransition {","    -webkit-transition: none !important;","    transition: none !important;","}","#fp-nav {","    position: fixed;","    z-index: 100;","    margin-top: -32px;","    top: 50%;","    opacity: 1;","    -webkit-transform: translate3d(0,0,0);","}","#fp-nav.right {","    right: 17px;","}","#fp-nav.left {","    left: 17px;","}",".fp-slidesNav{","    position: absolute;","    z-index: 4;","    left: 50%;","    opacity: 1;","    -webkit-transform: translate3d(0,0,0);","    -ms-transform: translate3d(0,0,0);","    transform: translate3d(0,0,0);","}",".fp-slidesNav.bottom {","    bottom: 17px;","}",".fp-slidesNav.top {","    top: 17px;","}","#fp-nav ul,",".fp-slidesNav ul {","  margin: 0;","  padding: 0;","}","#fp-nav ul li,",".fp-slidesNav ul li {","    display: block;","    width: 14px;","    height: 13px;","    margin: 7px;","    position:relative;","}",".fp-slidesNav ul li {","    display: inline-block;","}","#fp-nav ul li a,",".fp-slidesNav ul li a {","    display: block;","    position: relative;","    z-index: 1;","    width: 100%;","    height: 100%;","    cursor: pointer;","    text-decoration: none;","}","#fp-nav ul li a.active span,",".fp-slidesNav ul li a.active span,","#fp-nav ul li:hover a.active span,",".fp-slidesNav ul li:hover a.active span{","    height: 12px;","    width: 12px;","    margin: -6px 0 0 -6px;","    border-radius: 100%;"," }","#fp-nav ul li a span,",".fp-slidesNav ul li a span {","    border-radius: 50%;","    position: absolute;","    z-index: 1;","    height: 4px;","    width: 4px;","    border: 0;","    background: #333;","    left: 50%;","    top: 50%;","    margin: -2px 0 0 -2px;","    -webkit-transition: all 0.1s ease-in-out;","    -moz-transition: all 0.1s ease-in-out;","    -o-transition: all 0.1s ease-in-out;","    transition: all 0.1s ease-in-out;","}","#fp-nav ul li:hover a span,",".fp-slidesNav ul li:hover a span{","    width: 10px;","    height: 10px;","    margin: -5px 0px 0px -5px;","}","#fp-nav ul li .fp-tooltip {","    position: absolute;","    top: -2px;","    color: #fff;","    font-size: 14px;","    font-family: arial, helvetica, sans-serif;","    white-space: nowrap;","    max-width: 220px;","    overflow: hidden;","    display: block;","    opacity: 0;","    width: 0;","    cursor: pointer;","}","#fp-nav ul li:hover .fp-tooltip,","#fp-nav.fp-show-active a.active + .fp-tooltip {","    -webkit-transition: opacity 0.2s ease-in;","    transition: opacity 0.2s ease-in;","    width: auto;","    opacity: 1;","}","#fp-nav ul li .fp-tooltip.right {","    right: 20px;","}","#fp-nav ul li .fp-tooltip.left {","    left: 20px;","}",".fp-auto-height.fp-section,",".fp-auto-height .fp-slide,",".fp-auto-height .fp-tableCell{","    height: auto !important;","}","",".fp-responsive .fp-auto-height-responsive.fp-section,",".fp-responsive .fp-auto-height-responsive .fp-slide,",".fp-responsive .fp-auto-height-responsive .fp-tableCell {","    height: auto !important;","}"],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":7,"column":0},"action":"remove","lines":["/*!"," * fullPage 2.8.9"," * https://github.com/alvarotrigo/fullPage.js"," * MIT licensed"," *"," * Copyright (C) 2013 alvarotrigo.com - A project by Alvaro Trigo"," */",""],"id":2}]]},"ace":{"folds":[],"scrolltop":180,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":0,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":7,"state":"start","mode":"ace/mode/javascript"}},"timestamp":1485854218624}