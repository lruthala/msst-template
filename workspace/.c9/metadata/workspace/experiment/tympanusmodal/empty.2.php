{"filter":false,"title":"empty.2.php","tooltip":"/experiment/tympanusmodal/empty.2.php","undoManager":{"mark":89,"position":89,"stack":[[{"start":{"row":596,"column":4},"end":{"row":596,"column":5},"action":"remove","lines":["l"],"id":372}],[{"start":{"row":596,"column":3},"end":{"row":596,"column":4},"action":"remove","lines":["e"],"id":373}],[{"start":{"row":596,"column":3},"end":{"row":596,"column":4},"action":"insert","lines":["l"],"id":374}],[{"start":{"row":596,"column":4},"end":{"row":596,"column":5},"action":"insert","lines":["e"],"id":375}],[{"start":{"row":596,"column":0},"end":{"row":596,"column":5},"action":"remove","lines":["style"],"id":376},{"start":{"row":596,"column":0},"end":{"row":598,"column":8},"action":"insert","lines":["<style type=\"text/css\">","  ","</style>"]}],[{"start":{"row":599,"column":0},"end":{"row":599,"column":943},"action":"remove","lines":["<div class=\"slider slider-horizontal\" id=\"\"><div class=\"slider-track\"><div class=\"slider-track-low\" style=\"left: 0px; width: 50%;\"></div><div class=\"slider-selection\" style=\"left: 50%; width: 30%;\"></div><div class=\"slider-track-high\" style=\"right: 0px; width: 20%;\"></div><div class=\"slider-handle min-slider-handle round\" tabindex=\"0\" style=\"left: 50%;\"></div><div class=\"slider-handle max-slider-handle round\" tabindex=\"0\" style=\"left: 80%;\"></div></div><div class=\"tooltip tooltip-main top\" style=\"left: 65%; margin-left: -19.5px;\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">5 : 8</div></div><div class=\"tooltip tooltip-min top\" style=\"left: 50%; margin-left: 0px; display: none;\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">5</div></div><div class=\"tooltip tooltip-max top\" style=\"left: 80%; margin-left: 0px; display: none;\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\">8</div></div></div>"],"id":377}],[{"start":{"row":599,"column":0},"end":{"row":599,"column":199},"action":"insert","lines":["Filter by price interval: <b>€ 10</b> <input id=\"ex2\" type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"10\" data-slider-max=\"1000\" data-slider-step=\"5\" data-slider-value=\"[250,450]\"/> <b>€ 1000</b>"],"id":378}],[{"start":{"row":599,"column":0},"end":{"row":599,"column":25},"action":"remove","lines":["Filter by price interval:"],"id":379}],[{"start":{"row":599,"column":4},"end":{"row":599,"column":5},"action":"remove","lines":["€"],"id":380}],[{"start":{"row":599,"column":163},"end":{"row":599,"column":164},"action":"remove","lines":["€"],"id":381}],[{"start":{"row":599,"column":166},"end":{"row":599,"column":167},"action":"remove","lines":["0"],"id":382}],[{"start":{"row":599,"column":104},"end":{"row":599,"column":105},"action":"remove","lines":["0"],"id":383}],[{"start":{"row":599,"column":149},"end":{"row":599,"column":150},"action":"remove","lines":["0"],"id":384}],[{"start":{"row":599,"column":152},"end":{"row":599,"column":153},"action":"remove","lines":["0"],"id":385}],[{"start":{"row":602,"column":4},"end":{"row":602,"column":8},"action":"remove","lines":["<br>"],"id":386}],[{"start":{"row":600,"column":4},"end":{"row":600,"column":8},"action":"insert","lines":["<br>"],"id":387}],[{"start":{"row":600,"column":8},"end":{"row":600,"column":12},"action":"insert","lines":["<br>"],"id":388}],[{"start":{"row":600,"column":12},"end":{"row":600,"column":16},"action":"insert","lines":["<br>"],"id":389}],[{"start":{"row":595,"column":0},"end":{"row":598,"column":8},"action":"remove","lines":["","<style type=\"text/css\">","  ","</style>"],"id":390}],[{"start":{"row":205,"column":0},"end":{"row":594,"column":9},"action":"remove","lines":["<script >","    /* ========================================================="," * bootstrap-slider.js v2.0.0"," * http://www.eyecon.ro/bootstrap-slider"," * ========================================================="," * Copyright 2012 Stefan Petre"," *"," * Licensed under the Apache License, Version 2.0 (the \"License\");"," * you may not use this file except in compliance with the License."," * You may obtain a copy of the License at"," *"," * http://www.apache.org/licenses/LICENSE-2.0"," *"," * Unless required by applicable law or agreed to in writing, software"," * distributed under the License is distributed on an \"AS IS\" BASIS,"," * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied."," * See the License for the specific language governing permissions and"," * limitations under the License."," * ========================================================= */"," ","!function( $ ) {","","\tvar Slider = function(element, options) {","\t\tthis.element = $(element);","\t\tthis.picker = $('<div class=\"slider\">'+","\t\t\t\t\t\t\t'<div class=\"slider-track\">'+","\t\t\t\t\t\t\t\t'<div class=\"slider-selection\"></div>'+","\t\t\t\t\t\t\t\t'<div class=\"slider-handle\"></div>'+","\t\t\t\t\t\t\t\t'<div class=\"slider-handle\"></div>'+","\t\t\t\t\t\t\t'</div>'+","\t\t\t\t\t\t\t'<div class=\"tooltip\"><div class=\"tooltip-arrow\"></div><div class=\"tooltip-inner\"></div></div>'+","\t\t\t\t\t\t'</div>')","\t\t\t\t\t\t\t.insertBefore(this.element)","\t\t\t\t\t\t\t.append(this.element);","\t\tthis.id = this.element.data('slider-id')||options.id;","\t\tif (this.id) {","\t\t\tthis.picker[0].id = this.id;","\t\t}","","\t\tif (typeof Modernizr !== 'undefined' && Modernizr.touch) {","\t\t\tthis.touchCapable = true;","\t\t}","","\t\tvar tooltip = this.element.data('slider-tooltip')||options.tooltip;","","\t\tthis.tooltip = this.picker.find('.tooltip');","\t\tthis.tooltipInner = this.tooltip.find('div.tooltip-inner');","","\t\tthis.orientation = this.element.data('slider-orientation')||options.orientation;","\t\tswitch(this.orientation) {","\t\t\tcase 'vertical':","\t\t\t\tthis.picker.addClass('slider-vertical');","\t\t\t\tthis.stylePos = 'top';","\t\t\t\tthis.mousePos = 'pageY';","\t\t\t\tthis.sizePos = 'offsetHeight';","\t\t\t\tthis.tooltip.addClass('right')[0].style.left = '100%';","\t\t\t\tbreak;","\t\t\tdefault:","\t\t\t\tthis.picker","\t\t\t\t\t.addClass('slider-horizontal')","\t\t\t\t\t.css('width', this.element.outerWidth());","\t\t\t\tthis.orientation = 'horizontal';","\t\t\t\tthis.stylePos = 'left';","\t\t\t\tthis.mousePos = 'pageX';","\t\t\t\tthis.sizePos = 'offsetWidth';","\t\t\t\tthis.tooltip.addClass('top')[0].style.top = -this.tooltip.outerHeight() - 14 + 'px';","\t\t\t\tbreak;","\t\t}","","\t\tthis.min = this.element.data('slider-min')||options.min;","\t\tthis.max = this.element.data('slider-max')||options.max;","\t\tthis.step = this.element.data('slider-step')||options.step;","\t\tthis.value = this.element.data('slider-value')||options.value;","\t\tif (this.value[1]) {","\t\t\tthis.range = true;","\t\t}","","\t\tthis.selection = this.element.data('slider-selection')||options.selection;","\t\tthis.selectionEl = this.picker.find('.slider-selection');","\t\tif (this.selection === 'none') {","\t\t\tthis.selectionEl.addClass('hide');","\t\t}","\t\tthis.selectionElStyle = this.selectionEl[0].style;","","","\t\tthis.handle1 = this.picker.find('.slider-handle:first');","\t\tthis.handle1Stype = this.handle1[0].style;","\t\tthis.handle2 = this.picker.find('.slider-handle:last');","\t\tthis.handle2Stype = this.handle2[0].style;","","\t\tvar handle = this.element.data('slider-handle')||options.handle;","\t\tswitch(handle) {","\t\t\tcase 'round':","\t\t\t\tthis.handle1.addClass('round');","\t\t\t\tthis.handle2.addClass('round');","\t\t\t\tbreak","\t\t\tcase 'triangle':","\t\t\t\tthis.handle1.addClass('triangle');","\t\t\t\tthis.handle2.addClass('triangle');","\t\t\t\tbreak","\t\t}","","\t\tif (this.range) {","\t\t\tthis.value[0] = Math.max(this.min, Math.min(this.max, this.value[0]));","\t\t\tthis.value[1] = Math.max(this.min, Math.min(this.max, this.value[1]));","\t\t} else {","\t\t\tthis.value = [ Math.max(this.min, Math.min(this.max, this.value))];","\t\t\tthis.handle2.addClass('hide');","\t\t\tif (this.selection == 'after') {","\t\t\t\tthis.value[1] = this.max;","\t\t\t} else {","\t\t\t\tthis.value[1] = this.min;","\t\t\t}","\t\t}","\t\tthis.diff = this.max - this.min;","\t\tthis.percentage = [","\t\t\t(this.value[0]-this.min)*100/this.diff,","\t\t\t(this.value[1]-this.min)*100/this.diff,","\t\t\tthis.step*100/this.diff","\t\t];","","\t\tthis.offset = this.picker.offset();","\t\tthis.size = this.picker[0][this.sizePos];","","\t\tthis.formater = options.formater;","","\t\tthis.layout();","","\t\tif (this.touchCapable) {","\t\t\t// Touch: Bind touch events:","\t\t\tthis.picker.on({","\t\t\t\ttouchstart: $.proxy(this.mousedown, this)","\t\t\t});","\t\t} else {","\t\t\tthis.picker.on({","\t\t\t\tmousedown: $.proxy(this.mousedown, this)","\t\t\t});","\t\t}","","\t\tif (tooltip === 'show') {","\t\t\tthis.picker.on({","\t\t\t\tmouseenter: $.proxy(this.showTooltip, this),","\t\t\t\tmouseleave: $.proxy(this.hideTooltip, this)","\t\t\t});","\t\t} else {","\t\t\tthis.tooltip.addClass('hide');","\t\t}","\t};","","\tSlider.prototype = {","\t\tconstructor: Slider,","","\t\tover: false,","\t\tinDrag: false,","\t\t","\t\tshowTooltip: function(){","\t\t\tthis.tooltip.addClass('in');","\t\t\t//var left = Math.round(this.percent*this.width);","\t\t\t//this.tooltip.css('left', left - this.tooltip.outerWidth()/2);","\t\t\tthis.over = true;","\t\t},","\t\t","\t\thideTooltip: function(){","\t\t\tif (this.inDrag === false) {","\t\t\t\tthis.tooltip.removeClass('in');","\t\t\t}","\t\t\tthis.over = false;","\t\t},","","\t\tlayout: function(){","\t\t\tthis.handle1Stype[this.stylePos] = this.percentage[0]+'%';","\t\t\tthis.handle2Stype[this.stylePos] = this.percentage[1]+'%';","\t\t\tif (this.orientation == 'vertical') {","\t\t\t\tthis.selectionElStyle.top = Math.min(this.percentage[0], this.percentage[1]) +'%';","\t\t\t\tthis.selectionElStyle.height = Math.abs(this.percentage[0] - this.percentage[1]) +'%';","\t\t\t} else {","\t\t\t\tthis.selectionElStyle.left = Math.min(this.percentage[0], this.percentage[1]) +'%';","\t\t\t\tthis.selectionElStyle.width = Math.abs(this.percentage[0] - this.percentage[1]) +'%';","\t\t\t}","\t\t\tif (this.range) {","\t\t\t\tthis.tooltipInner.text(","\t\t\t\t\tthis.formater(this.value[0]) + ","\t\t\t\t\t' : ' + ","\t\t\t\t\tthis.formater(this.value[1])","\t\t\t\t);","\t\t\t\tthis.tooltip[0].style[this.stylePos] = this.size * (this.percentage[0] + (this.percentage[1] - this.percentage[0])/2)/100 - (this.orientation === 'vertical' ? this.tooltip.outerHeight()/2 : this.tooltip.outerWidth()/2) +'px';","\t\t\t} else {","\t\t\t\tthis.tooltipInner.text(","\t\t\t\t\tthis.formater(this.value[0])","\t\t\t\t);","\t\t\t\tthis.tooltip[0].style[this.stylePos] = this.size * this.percentage[0]/100 - (this.orientation === 'vertical' ? this.tooltip.outerHeight()/2 : this.tooltip.outerWidth()/2) +'px';","\t\t\t}","\t\t},","","\t\tmousedown: function(ev) {","","\t\t\t// Touch: Get the original event:","\t\t\tif (this.touchCapable && ev.type === 'touchstart') {","\t\t\t\tev = ev.originalEvent;","\t\t\t}","","\t\t\tthis.offset = this.picker.offset();","\t\t\tthis.size = this.picker[0][this.sizePos];","","\t\t\tvar percentage = this.getPercentage(ev);","","\t\t\tif (this.range) {","\t\t\t\tvar diff1 = Math.abs(this.percentage[0] - percentage);","\t\t\t\tvar diff2 = Math.abs(this.percentage[1] - percentage);","\t\t\t\tthis.dragged = (diff1 < diff2) ? 0 : 1;","\t\t\t} else {","\t\t\t\tthis.dragged = 0;","\t\t\t}","","\t\t\tthis.percentage[this.dragged] = percentage;","\t\t\tthis.layout();","","\t\t\tif (this.touchCapable) {","\t\t\t\t// Touch: Bind touch events:","\t\t\t\t$(document).on({","\t\t\t\t\ttouchmove: $.proxy(this.mousemove, this),","\t\t\t\t\ttouchend: $.proxy(this.mouseup, this)","\t\t\t\t});","\t\t\t} else {","\t\t\t\t$(document).on({","\t\t\t\t\tmousemove: $.proxy(this.mousemove, this),","\t\t\t\t\tmouseup: $.proxy(this.mouseup, this)","\t\t\t\t});","\t\t\t}","","\t\t\tthis.inDrag = true;","\t\t\tvar val = this.calculateValue();","\t\t\tthis.element.trigger({","\t\t\t\t\ttype: 'slideStart',","\t\t\t\t\tvalue: val","\t\t\t\t}).trigger({","\t\t\t\t\ttype: 'slide',","\t\t\t\t\tvalue: val","\t\t\t\t});","\t\t\treturn false;","\t\t},","","\t\tmousemove: function(ev) {","\t\t\t","\t\t\t// Touch: Get the original event:","\t\t\tif (this.touchCapable && ev.type === 'touchmove') {","\t\t\t\tev = ev.originalEvent;","\t\t\t}","","\t\t\tvar percentage = this.getPercentage(ev);","\t\t\tif (this.range) {","\t\t\t\tif (this.dragged === 0 && this.percentage[1] < percentage) {","\t\t\t\t\tthis.percentage[0] = this.percentage[1];","\t\t\t\t\tthis.dragged = 1;","\t\t\t\t} else if (this.dragged === 1 && this.percentage[0] > percentage) {","\t\t\t\t\tthis.percentage[1] = this.percentage[0];","\t\t\t\t\tthis.dragged = 0;","\t\t\t\t}","\t\t\t}","\t\t\tthis.percentage[this.dragged] = percentage;","\t\t\tthis.layout();","\t\t\tvar val = this.calculateValue();","\t\t\tthis.element","\t\t\t\t.trigger({","\t\t\t\t\ttype: 'slide',","\t\t\t\t\tvalue: val","\t\t\t\t})","\t\t\t\t.data('value', val)","\t\t\t\t.prop('value', val);","\t\t\treturn false;","\t\t},","","\t\tmouseup: function(ev) {","\t\t\tif (this.touchCapable) {","\t\t\t\t// Touch: Bind touch events:","\t\t\t\t$(document).off({","\t\t\t\t\ttouchmove: this.mousemove,","\t\t\t\t\ttouchend: this.mouseup","\t\t\t\t});","\t\t\t} else {","\t\t\t\t$(document).off({","\t\t\t\t\tmousemove: this.mousemove,","\t\t\t\t\tmouseup: this.mouseup","\t\t\t\t});","\t\t\t}","","\t\t\tthis.inDrag = false;","\t\t\tif (this.over == false) {","\t\t\t\tthis.hideTooltip();","\t\t\t}","\t\t\tthis.element;","\t\t\tvar val = this.calculateValue();","\t\t\tthis.element","\t\t\t\t.trigger({","\t\t\t\t\ttype: 'slideStop',","\t\t\t\t\tvalue: val","\t\t\t\t})","\t\t\t\t.data('value', val)","\t\t\t\t.prop('value', val);","\t\t\treturn false;","\t\t},","","\t\tcalculateValue: function() {","\t\t\tvar val;","\t\t\tif (this.range) {","\t\t\t\tval = [","\t\t\t\t\t(this.min + Math.round((this.diff * this.percentage[0]/100)/this.step)*this.step),","\t\t\t\t\t(this.min + Math.round((this.diff * this.percentage[1]/100)/this.step)*this.step)","\t\t\t\t];","\t\t\t\tthis.value = val;","\t\t\t} else {","\t\t\t\tval = (this.min + Math.round((this.diff * this.percentage[0]/100)/this.step)*this.step);","\t\t\t\tthis.value = [val, this.value[1]];","\t\t\t}","\t\t\treturn val;","\t\t},","","\t\tgetPercentage: function(ev) {","\t\t\tif (this.touchCapable) {","\t\t\t\tev = ev.touches[0];","\t\t\t}","\t\t\tvar percentage = (ev[this.mousePos] - this.offset[this.stylePos])*100/this.size;","\t\t\tpercentage = Math.round(percentage/this.percentage[2])*this.percentage[2];","\t\t\treturn Math.max(0, Math.min(100, percentage));","\t\t},","","\t\tgetValue: function() {","\t\t\tif (this.range) {","\t\t\t\treturn this.value;","\t\t\t}","\t\t\treturn this.value[0];","\t\t},","","\t\tsetValue: function(val) {","\t\t\tthis.value = val;","","\t\t\tif (this.range) {","\t\t\t\tthis.value[0] = Math.max(this.min, Math.min(this.max, this.value[0]));","\t\t\t\tthis.value[1] = Math.max(this.min, Math.min(this.max, this.value[1]));","\t\t\t} else {","\t\t\t\tthis.value = [ Math.max(this.min, Math.min(this.max, this.value))];","\t\t\t\tthis.handle2.addClass('hide');","\t\t\t\tif (this.selection == 'after') {","\t\t\t\t\tthis.value[1] = this.max;","\t\t\t\t} else {","\t\t\t\t\tthis.value[1] = this.min;","\t\t\t\t}","\t\t\t}","\t\t\tthis.diff = this.max - this.min;","\t\t\tthis.percentage = [","\t\t\t\t(this.value[0]-this.min)*100/this.diff,","\t\t\t\t(this.value[1]-this.min)*100/this.diff,","\t\t\t\tthis.step*100/this.diff","\t\t\t];","\t\t\tthis.layout();","\t\t}","\t};","","\t$.fn.slider = function ( option, val ) {","\t\treturn this.each(function () {","\t\t\tvar $this = $(this),","\t\t\t\tdata = $this.data('slider'),","\t\t\t\toptions = typeof option === 'object' && option;","\t\t\tif (!data)  {","\t\t\t\t$this.data('slider', (data = new Slider(this, $.extend({}, $.fn.slider.defaults,options))));","\t\t\t}","\t\t\tif (typeof option == 'string') {","\t\t\t\tdata[option](val);","\t\t\t}","\t\t})","\t};","","\t$.fn.slider.defaults = {","\t\tmin: 0,","\t\tmax: 10,","\t\tstep: 1,","\t\torientation: 'horizontal',","\t\tvalue: 5,","\t\tselection: 'before',","\t\ttooltip: 'show',","\t\thandle: 'round',","\t\tformater: function(value) {","\t\t\treturn value;","\t\t}","\t};","","\t$.fn.slider.Constructor = Slider;","","}( window.jQuery );","</script>"],"id":391}],[{"start":{"row":99,"column":0},"end":{"row":204,"column":8},"action":"remove","lines":["<style>","    /*!"," * Slider for Bootstrap"," *"," * Copyright 2012 Stefan Petre"," * Licensed under the Apache License v2.0"," * http://www.apache.org/licenses/LICENSE-2.0"," *"," */","",".slider {","\tdisplay: inline-block;","\tvertical-align: middle;","\tposition: relative;","\t&.slider-horizontal {","\t\twidth: 210px;","\t\theight: @baseLineHeight;","\t\t.slider-track {","\t\t\theight: @baseLineHeight/2;","\t\t\twidth: 100%;","\t\t\tmargin-top: -@baseLineHeight/4;","\t\t\ttop: 50%;","\t\t\tleft: 0;","\t\t}","\t\t.slider-selection {","\t\t\theight: 100%;","\t\t\ttop: 0;","\t\t\tbottom: 0;","\t\t}","\t\t.slider-handle {","\t\t\tmargin-left: -@baseLineHeight/2;","\t\t\tmargin-top: -@baseLineHeight/4;","\t\t\t&.triangle {","    \t\t\tborder-width: 0 @baseLineHeight/2 @baseLineHeight/2 @baseLineHeight/2;","\t\t\t\twidth: 0;","\t\t\t\theight: 0;","\t\t\t\tborder-bottom-color: #0480be;","\t\t\t\tmargin-top: 0;","\t\t\t}","\t\t}","\t}","\t&.slider-vertical {","\t\theight: 210px;","\t\twidth: @baseLineHeight;","\t\t.slider-track {","\t\t\twidth: @baseLineHeight/2;","\t\t\theight: 100%;","\t\t\tmargin-left: -@baseLineHeight/4;","\t\t\tleft: 50%;","\t\t\ttop: 0;","\t\t}","\t\t.slider-selection {","\t\t\twidth: 100%;","\t\t\tleft: 0;","\t\t\ttop: 0;","\t\t\tbottom: 0;","\t\t}","\t\t.slider-handle {","\t\t\tmargin-left: -@baseLineHeight/4;","\t\t\tmargin-top: -@baseLineHeight/2;","\t\t\t&.triangle {","\t\t\t\tborder-width: @baseLineHeight/2 0 @baseLineHeight/2 @baseLineHeight/2;","\t\t\t\twidth: 1px;","\t\t\t\theight: 1px;","\t\t\t\tborder-left-color: #0480be;","\t\t\t\tmargin-left: 0;","\t\t\t}","\t\t}","\t}","\tinput {","\t\tdisplay: none;","\t}","\t.tooltip-inner {","\t\twhite-space: nowrap;","\t}","}",".slider-track {","\tposition: absolute;","\tcursor: pointer;","\t#gradient > .vertical(#f5f5f5, #f9f9f9);","\t.box-shadow(inset 0 1px 2px rgba(0,0,0,.1));","\t.border-radius(@baseBorderRadius);","}",".slider-selection {","\tposition: absolute;","\t#gradient > .vertical(#f9f9f9, #f5f5f5);","\t.box-shadow(inset 0 -1px 0 rgba(0,0,0,.15));","\t.box-sizing(border-box);","\t.border-radius(@baseBorderRadius);","}",".slider-handle {","\tposition: absolute;","\twidth: @baseLineHeight;","\theight: @baseLineHeight;","\t#gradient > .vertical(#149bdf, #0480be);","\t.box-shadow(~\"inset 0 1px 0 rgba(255,255,255,.2), 0 1px 2px rgba(0,0,0,.05)\");","\topacity: 0.8;","\tborder: 0px solid transparent;","\t&.round {","\t\t.border-radius(@baseLineHeight);","\t}","\t&.triangle {","\t\tbackground: transparent none;","\t}","}","</style>"],"id":392}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":37},"action":"insert","lines":["<script src=\"flipclock.js\"></script>\t"],"id":393}],[{"start":{"row":43,"column":21},"end":{"row":43,"column":22},"action":"remove","lines":["k"],"id":394}],[{"start":{"row":43,"column":20},"end":{"row":43,"column":21},"action":"remove","lines":["c"],"id":395}],[{"start":{"row":43,"column":19},"end":{"row":43,"column":20},"action":"remove","lines":["o"],"id":396}],[{"start":{"row":43,"column":18},"end":{"row":43,"column":19},"action":"remove","lines":["l"],"id":397}],[{"start":{"row":43,"column":17},"end":{"row":43,"column":18},"action":"remove","lines":["c"],"id":398}],[{"start":{"row":43,"column":16},"end":{"row":43,"column":17},"action":"remove","lines":["p"],"id":399}],[{"start":{"row":43,"column":15},"end":{"row":43,"column":16},"action":"remove","lines":["i"],"id":400}],[{"start":{"row":43,"column":14},"end":{"row":43,"column":15},"action":"remove","lines":["l"],"id":401}],[{"start":{"row":43,"column":13},"end":{"row":43,"column":14},"action":"remove","lines":["f"],"id":402}],[{"start":{"row":43,"column":13},"end":{"row":43,"column":14},"action":"insert","lines":["b"],"id":403}],[{"start":{"row":43,"column":14},"end":{"row":43,"column":15},"action":"insert","lines":["o"],"id":404}],[{"start":{"row":43,"column":15},"end":{"row":43,"column":16},"action":"insert","lines":["o"],"id":405}],[{"start":{"row":43,"column":16},"end":{"row":43,"column":17},"action":"insert","lines":["t"],"id":406}],[{"start":{"row":43,"column":17},"end":{"row":43,"column":18},"action":"insert","lines":["s"],"id":407}],[{"start":{"row":43,"column":18},"end":{"row":43,"column":19},"action":"insert","lines":["t"],"id":408}],[{"start":{"row":43,"column":19},"end":{"row":43,"column":20},"action":"insert","lines":["r"],"id":409}],[{"start":{"row":43,"column":20},"end":{"row":43,"column":21},"action":"insert","lines":["a"],"id":410}],[{"start":{"row":43,"column":21},"end":{"row":43,"column":22},"action":"insert","lines":["p"],"id":411}],[{"start":{"row":43,"column":22},"end":{"row":43,"column":23},"action":"insert","lines":["-"],"id":412}],[{"start":{"row":43,"column":23},"end":{"row":43,"column":24},"action":"insert","lines":["s"],"id":413}],[{"start":{"row":43,"column":24},"end":{"row":43,"column":25},"action":"insert","lines":["l"],"id":414}],[{"start":{"row":43,"column":25},"end":{"row":43,"column":26},"action":"insert","lines":["i"],"id":415}],[{"start":{"row":43,"column":26},"end":{"row":43,"column":27},"action":"insert","lines":["d"],"id":416}],[{"start":{"row":43,"column":27},"end":{"row":43,"column":28},"action":"insert","lines":["e"],"id":417}],[{"start":{"row":43,"column":28},"end":{"row":43,"column":29},"action":"insert","lines":["r"],"id":418}],[{"start":{"row":43,"column":44},"end":{"row":44,"column":0},"action":"insert","lines":["",""],"id":419}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":1},"action":"insert","lines":["s"],"id":420}],[{"start":{"row":44,"column":1},"end":{"row":44,"column":2},"action":"insert","lines":["t"],"id":421}],[{"start":{"row":44,"column":2},"end":{"row":44,"column":3},"action":"insert","lines":["y"],"id":422}],[{"start":{"row":44,"column":3},"end":{"row":44,"column":4},"action":"insert","lines":["l"],"id":423}],[{"start":{"row":44,"column":4},"end":{"row":44,"column":5},"action":"insert","lines":["e"],"id":424}],[{"start":{"row":44,"column":0},"end":{"row":44,"column":5},"action":"remove","lines":["style"],"id":425},{"start":{"row":44,"column":0},"end":{"row":46,"column":8},"action":"insert","lines":["<style type=\"text/css\">","  ","</style>"]}],[{"start":{"row":44,"column":7},"end":{"row":44,"column":22},"action":"remove","lines":["type=\"text/css\""],"id":426}],[{"start":{"row":44,"column":7},"end":{"row":44,"column":8},"action":"insert","lines":["s"],"id":427}],[{"start":{"row":44,"column":8},"end":{"row":44,"column":9},"action":"insert","lines":["r"],"id":428}],[{"start":{"row":44,"column":9},"end":{"row":44,"column":10},"action":"insert","lines":["c"],"id":429}],[{"start":{"row":44,"column":10},"end":{"row":44,"column":11},"action":"insert","lines":["="],"id":430}],[{"start":{"row":44,"column":11},"end":{"row":44,"column":12},"action":"insert","lines":["\""],"id":431}],[{"start":{"row":44,"column":12},"end":{"row":44,"column":13},"action":"insert","lines":["\""],"id":432}],[{"start":{"row":44,"column":12},"end":{"row":44,"column":13},"action":"insert","lines":["s"],"id":433}],[{"start":{"row":44,"column":13},"end":{"row":44,"column":14},"action":"insert","lines":["l"],"id":434}],[{"start":{"row":44,"column":14},"end":{"row":44,"column":15},"action":"insert","lines":["i"],"id":435}],[{"start":{"row":44,"column":15},"end":{"row":44,"column":16},"action":"insert","lines":["d"],"id":436}],[{"start":{"row":44,"column":16},"end":{"row":44,"column":17},"action":"insert","lines":["e"],"id":437}],[{"start":{"row":44,"column":17},"end":{"row":44,"column":18},"action":"insert","lines":["r"],"id":438}],[{"start":{"row":44,"column":18},"end":{"row":44,"column":19},"action":"insert","lines":["."],"id":439}],[{"start":{"row":44,"column":19},"end":{"row":44,"column":20},"action":"insert","lines":["c"],"id":440}],[{"start":{"row":44,"column":20},"end":{"row":44,"column":21},"action":"insert","lines":["s"],"id":441}],[{"start":{"row":44,"column":21},"end":{"row":44,"column":22},"action":"insert","lines":["s"],"id":442}],[{"start":{"row":45,"column":0},"end":{"row":46,"column":0},"action":"remove","lines":["  ",""],"id":443}],[{"start":{"row":44,"column":24},"end":{"row":45,"column":0},"action":"remove","lines":["",""],"id":444}],[{"start":{"row":45,"column":2},"end":{"row":45,"column":39},"action":"remove","lines":["<script src=\"flipclock.js\"></script>\t"],"id":445}],[{"start":{"row":46,"column":1},"end":{"row":46,"column":89},"action":"remove","lines":["<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js\"></script>"],"id":446}],[{"start":{"row":47,"column":3},"end":{"row":57,"column":14},"action":"remove","lines":[" <script type=\"text/javascript\">","            $(document).ready(function(){","                $('#btn1').click(function(){","            $(\"p\").slideToggle(\"fast\");","     ","        $(document).ready(function(){","            console.log('document is ready');","        });","        });","        });","    </script>\t"],"id":447}],[{"start":{"row":25,"column":3},"end":{"row":26,"column":13},"action":"remove","lines":[" <script src=\"../js/modernizr.custom.js\">","    </script>"],"id":448}],[{"start":{"row":90,"column":0},"end":{"row":90,"column":1},"action":"insert","lines":["s"],"id":449}],[{"start":{"row":90,"column":1},"end":{"row":90,"column":2},"action":"insert","lines":["t"],"id":450}],[{"start":{"row":90,"column":2},"end":{"row":90,"column":3},"action":"insert","lines":["y"],"id":451}],[{"start":{"row":90,"column":3},"end":{"row":90,"column":4},"action":"insert","lines":["l"],"id":452}],[{"start":{"row":90,"column":4},"end":{"row":90,"column":5},"action":"insert","lines":["e"],"id":453}],[{"start":{"row":90,"column":0},"end":{"row":90,"column":5},"action":"remove","lines":["style"],"id":454},{"start":{"row":90,"column":0},"end":{"row":92,"column":8},"action":"insert","lines":["<style type=\"text/css\">","  ","</style>"]}],[{"start":{"row":91,"column":2},"end":{"row":94,"column":0},"action":"insert","lines":["#ex1Slider .slider-selection {","\tbackground: #BABABA;","}",""],"id":455}],[{"start":{"row":90,"column":6},"end":{"row":90,"column":22},"action":"remove","lines":[" type=\"text/css\""],"id":456}],[{"start":{"row":90,"column":0},"end":{"row":95,"column":8},"action":"remove","lines":["<style>","  #ex1Slider .slider-selection {","\tbackground: #BABABA;","}","","</style>"],"id":457}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":46},"action":"remove","lines":["  <link rel=\"stylesheet\" href=\"flipclock.css\">"],"id":458}],[{"start":{"row":42,"column":0},"end":{"row":43,"column":0},"action":"insert","lines":["",""],"id":459}],[{"start":{"row":89,"column":0},"end":{"row":89,"column":24},"action":"remove","lines":["  <!---B2B WEBINAR -->  "],"id":506}],[{"start":{"row":93,"column":1},"end":{"row":95,"column":4},"action":"remove","lines":["<b> 10</b> <input id=\"ex2\" type=\"text\" class=\"span2\" value=\"\" data-slider-min=\"10\" data-slider-max=\"100\" data-slider-step=\"5\" data-slider-value=\"[25,45]\"/> <b> 100</b>","    <br><br><br><button id=\"btn1\" class=\"btn btn-primary\">Customer SignUp</button>","    "],"id":507}]]},"ace":{"folds":[],"scrolltop":973.0000381469727,"scrollleft":0,"selection":{"start":{"row":91,"column":0},"end":{"row":91,"column":0},"isBackwards":true},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":50,"state":"start","mode":"ace/mode/php"}},"timestamp":1442504537897,"hash":"05f177af40a0821e2f171501360fa289d6cfcf0e"}