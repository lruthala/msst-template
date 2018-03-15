/*!
 * typeahead.js 0.10.2
 * https://github.com/twitter/typeahead.js
 * Copyright 2013-2014 Twitter, Inc. and other contributors; Licensed MIT
 */
!function(e){var t={isMsie:function(){return/(msie|trident)/i.test(navigator.userAgent)?navigator.userAgent.match(/(msie |rv:)(\d+(.\d+)?)/i)[2]:!1},isBlankString:function(e){return!e||/^\s*$/.test(e)},escapeRegExChars:function(e){return e.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g,"\\$&")},isString:function(e){return"string"==typeof e},isNumber:function(e){return"number"==typeof e},isArray:e.isArray,isFunction:e.isFunction,isObject:e.isPlainObject,isUndefined:function(e){return"undefined"==typeof e},bind:e.proxy,each:function(t,n){function i(e,t){return n(t,e)}e.each(t,i)},map:e.map,filter:e.grep,every:function(t,n){var i=!0;return t?(e.each(t,function(e,r){return(i=n.call(null,r,e,t))?void 0:!1}),!!i):i},some:function(t,n){var i=!1;return t?(e.each(t,function(e,r){return(i=n.call(null,r,e,t))?!1:void 0}),!!i):i},mixin:e.extend,getUniqueId:function(){var e=0;return function(){return e++}}(),templatify:function(t){function n(){return String(t)}return e.isFunction(t)?t:n},defer:function(e){setTimeout(e,0)},debounce:function(e,t,n){var i,r;return function(){var o,s,a=this,u=arguments;return o=function(){i=null,n||(r=e.apply(a,u))},s=n&&!i,clearTimeout(i),i=setTimeout(o,t),s&&(r=e.apply(a,u)),r}},throttle:function(e,t){var n,i,r,o,s,a;return s=0,a=function(){s=new Date,r=null,o=e.apply(n,i)},function(){var u=new Date,c=t-(u-s);return n=this,i=arguments,0>=c?(clearTimeout(r),r=null,s=u,o=e.apply(n,i)):r||(r=setTimeout(a,c)),o}},noop:function(){}},n={wrapper:'<span class="twitter-typeahead"></span>',dropdown:'<span class="tt-dropdown-menu"></span>',dataset:'<div class="tt-dataset-%CLASS%"></div>',suggestions:'<span class="tt-suggestions"></span>',suggestion:'<div class="tt-suggestion"></div>'},i={wrapper:{position:"relative",display:"inline-block"},hint:{position:"absolute",top:"0",left:"0",borderColor:"transparent",boxShadow:"none"},input:{position:"relative",verticalAlign:"top",backgroundColor:"transparent"},inputWithNoHint:{position:"relative",verticalAlign:"top"},dropdown:{position:"absolute",top:"100%",left:"0",zIndex:"100",display:"none"},suggestions:{display:"block"},suggestion:{whiteSpace:"nowrap",cursor:"pointer"},suggestionChild:{whiteSpace:"normal"},ltr:{left:"0",right:"auto"},rtl:{left:"auto",right:" 0"}};t.isMsie()&&t.mixin(i.input,{backgroundImage:"url(data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7)"}),t.isMsie()&&t.isMsie()<=7&&t.mixin(i.input,{marginTop:"-1px"});var r=function(){function n(t){t&&t.el||e.error("EventBus initialized without el"),this.$el=e(t.el)}var i="typeahead:";return t.mixin(n.prototype,{trigger:function(e){var t=[].slice.call(arguments,1);this.$el.trigger(i+e,t)}}),n}(),o=function(){function e(e,t,n,i){var r;if(!n)return this;for(t=t.split(u),n=i?a(n,i):n,this._callbacks=this._callbacks||{};r=t.shift();)this._callbacks[r]=this._callbacks[r]||{sync:[],async:[]},this._callbacks[r][e].push(n);return this}function t(t,n,i){return e.call(this,"async",t,n,i)}function n(t,n,i){return e.call(this,"sync",t,n,i)}function i(e){var t;if(!this._callbacks)return this;for(e=e.split(u);t=e.shift();)delete this._callbacks[t];return this}function r(e){var t,n,i,r,s;if(!this._callbacks)return this;for(e=e.split(u),i=[].slice.call(arguments,1);(t=e.shift())&&(n=this._callbacks[t]);)r=o(n.sync,this,[t].concat(i)),s=o(n.async,this,[t].concat(i)),r()&&c(s);return this}function o(e,t,n){function i(){for(var i,r=0;!i&&r<e.length;r+=1)i=e[r].apply(t,n)===!1;return!i}return i}function s(){var e;return e=window.setImmediate?function(e){setImmediate(function(){e()})}:function(e){setTimeout(function(){e()},0)}}function a(e,t){return e.bind?e.bind(t):function(){e.apply(t,[].slice.call(arguments,0))}}var u=/\s+/,c=s();return{onSync:n,onAsync:t,off:i,trigger:r}}(),s=function(e){function n(e,n,i){for(var r,o=[],s=0;s<e.length;s++)o.push(t.escapeRegExChars(e[s]));return r=i?"\\b("+o.join("|")+")\\b":"("+o.join("|")+")",n?new RegExp(r):new RegExp(r,"i")}var i={node:null,pattern:null,tagName:"strong",className:null,wordsOnly:!1,caseSensitive:!1};return function(r){function o(t){var n,i;return(n=a.exec(t.data))&&(wrapperNode=e.createElement(r.tagName),r.className&&(wrapperNode.className=r.className),i=t.splitText(n.index),i.splitText(n[0].length),wrapperNode.appendChild(i.cloneNode(!0)),t.parentNode.replaceChild(wrapperNode,i)),!!n}function s(e,t){for(var n,i=3,r=0;r<e.childNodes.length;r++)n=e.childNodes[r],n.nodeType===i?r+=t(n)?1:0:s(n,t)}var a;r=t.mixin({},i,r),r.node&&r.pattern&&(r.pattern=t.isArray(r.pattern)?r.pattern:[r.pattern],a=n(r.pattern,r.caseSensitive,r.wordsOnly),s(r.node,o))}}(window.document),a=function(){function n(n){var r,o,s,u,c=this;n=n||{},n.input||e.error("input is missing"),r=t.bind(this._onBlur,this),o=t.bind(this._onFocus,this),s=t.bind(this._onKeydown,this),u=t.bind(this._onInput,this),this.$hint=e(n.hint),this.$input=e(n.input).on("blur.tt",r).on("focus.tt",o).on("keydown.tt",s),0===this.$hint.length&&(this.setHint=this.getHint=this.clearHint=this.clearHintIfInvalid=t.noop),t.isMsie()?this.$input.on("keydown.tt keypress.tt cut.tt paste.tt",function(e){a[e.which||e.keyCode]||t.defer(t.bind(c._onInput,c,e))}):this.$input.on("input.tt",u),this.query=this.$input.val(),this.$overflowHelper=i(this.$input)}function i(t){return e('<pre aria-hidden="true"></pre>').css({position:"absolute",visibility:"hidden",whiteSpace:"pre",fontFamily:t.css("font-family"),fontSize:t.css("font-size"),fontStyle:t.css("font-style"),fontVariant:t.css("font-variant"),fontWeight:t.css("font-weight"),wordSpacing:t.css("word-spacing"),letterSpacing:t.css("letter-spacing"),textIndent:t.css("text-indent"),textRendering:t.css("text-rendering"),textTransform:t.css("text-transform")}).insertAfter(t)}function r(e,t){return n.normalizeQuery(e)===n.normalizeQuery(t)}function s(e){return e.altKey||e.ctrlKey||e.metaKey||e.shiftKey}var a;return a={9:"tab",27:"esc",37:"left",39:"right",13:"enter",38:"up",40:"down"},n.normalizeQuery=function(e){return(e||"").replace(/^\s*/g,"").replace(/\s{2,}/g," ")},t.mixin(n.prototype,o,{_onBlur:function(){this.resetInputValue(),this.trigger("blurred")},_onFocus:function(){this.trigger("focused")},_onKeydown:function(e){var t=a[e.which||e.keyCode];this._managePreventDefault(t,e),t&&this._shouldTrigger(t,e)&&this.trigger(t+"Keyed",e)},_onInput:function(){this._checkInputValue()},_managePreventDefault:function(e,t){var n,i,r;switch(e){case"tab":i=this.getHint(),r=this.getInputValue(),n=i&&i!==r&&!s(t);break;case"up":case"down":n=!s(t);break;default:n=!1}n&&t.preventDefault()},_shouldTrigger:function(e,t){var n;switch(e){case"tab":n=!s(t);break;default:n=!0}return n},_checkInputValue:function(){var e,t,n;e=this.getInputValue(),t=r(e,this.query),n=t?this.query.length!==e.length:!1,t?n&&this.trigger("whitespaceChanged",this.query):this.trigger("queryChanged",this.query=e)},focus:function(){this.$input.focus()},blur:function(){this.$input.blur()},getQuery:function(){return this.query},setQuery:function(e){this.query=e},getInputValue:function(){return this.$input.val()},setInputValue:function(e,t){this.$input.val(e),t?this.clearHint():this._checkInputValue()},resetInputValue:function(){this.setInputValue(this.query,!0)},getHint:function(){return this.$hint.val()},setHint:function(e){this.$hint.val(e)},clearHint:function(){this.setHint("")},clearHintIfInvalid:function(){var e,t,n,i;e=this.getInputValue(),t=this.getHint(),n=e!==t&&0===t.indexOf(e),i=""!==e&&n&&!this.hasOverflow(),!i&&this.clearHint()},getLanguageDirection:function(){return(this.$input.css("direction")||"ltr").toLowerCase()},hasOverflow:function(){var e=this.$input.width()-2;return this.$overflowHelper.text(this.getInputValue()),this.$overflowHelper.width()>=e},isCursorAtEnd:function(){var e,n,i;return e=this.$input.val().length,n=this.$input[0].selectionStart,t.isNumber(n)?n===e:document.selection?(i=document.selection.createRange(),i.moveStart("character",-e),e===i.text.length):!0},destroy:function(){this.$hint.off(".tt"),this.$input.off(".tt"),this.$hint=this.$input=this.$overflowHelper=null}}),n}(),u=function(){function r(i){i=i||{},i.templates=i.templates||{},i.source||e.error("missing source"),i.name&&!c(i.name)&&e.error("invalid dataset name: "+i.name),this.query=null,this.highlight=!!i.highlight,this.name=i.name||t.getUniqueId(),this.source=i.source,this.displayFn=a(i.display||i.displayKey),this.templates=u(i.templates,this.displayFn),this.$el=e(n.dataset.replace("%CLASS%",this.name))}function a(e){function n(t){return t[e]}return e=e||"value",t.isFunction(e)?e:n}function u(e,n){function i(e){return"<p>"+n(e)+"</p>"}return{empty:e.empty&&t.templatify(e.empty),header:e.header&&t.templatify(e.header),footer:e.footer&&t.templatify(e.footer),suggestion:e.suggestion||i}}function c(e){return/^[_a-zA-Z0-9-]+$/.test(e)}var l="ttDataset",p="ttValue",f="ttDatum";return r.extractDatasetName=function(t){return e(t).data(l)},r.extractValue=function(t){return e(t).data(p)},r.extractDatum=function(t){return e(t).data(f)},t.mixin(r.prototype,o,{_render:function(r,o){function a(){return g.templates.empty({query:r,isEmpty:!0})}function u(){function a(t){var r;return r=e(n.suggestion).append(g.templates.suggestion(t)).data(l,g.name).data(p,g.displayFn(t)).data(f,t),r.children().each(function(){e(this).css(i.suggestionChild)}),r}var u,c;return u=e(n.suggestions).css(i.suggestions),c=t.map(o,a),u.append.apply(u,c),g.highlight&&s({node:u[0],pattern:r}),u}function c(){return g.templates.header({query:r,isEmpty:!h})}function d(){return g.templates.footer({query:r,isEmpty:!h})}if(this.$el){var h,g=this;this.$el.empty(),h=o&&o.length,!h&&this.templates.empty?this.$el.html(a()).prepend(g.templates.header?c():null).append(g.templates.footer?d():null):h&&this.$el.html(u()).prepend(g.templates.header?c():null).append(g.templates.footer?d():null),this.trigger("rendered")}},getRoot:function(){return this.$el},update:function(e){function t(t){n.canceled||e!==n.query||n._render(e,t)}var n=this;this.query=e,this.canceled=!1,this.source(e,t)},cancel:function(){this.canceled=!0},clear:function(){this.cancel(),this.$el.empty(),this.trigger("rendered")},isEmpty:function(){return this.$el.is(":empty")},destroy:function(){this.$el=null}}),r}(),c=function(){function n(n){var i,o,s,a=this;n=n||{},n.menu||e.error("menu is required"),this.isOpen=!1,this.isEmpty=!0,this.datasets=t.map(n.datasets,r),i=t.bind(this._onSuggestionClick,this),o=t.bind(this._onSuggestionMouseEnter,this),s=t.bind(this._onSuggestionMouseLeave,this),this.$menu=e(n.menu).on("click.tt",".tt-suggestion",i).on("mouseenter.tt",".tt-suggestion",o).on("mouseleave.tt",".tt-suggestion",s),t.each(this.datasets,function(e){a.$menu.append(e.getRoot()),e.onSync("rendered",a._onRendered,a)})}function r(e){return new u(e)}return t.mixin(n.prototype,o,{_onSuggestionClick:function(t){this.trigger("suggestionClicked",e(t.currentTarget))},_onSuggestionMouseEnter:function(t){this._removeCursor(),this._setCursor(e(t.currentTarget),!0)},_onSuggestionMouseLeave:function(){this._removeCursor()},_onRendered:function(){function e(e){return e.isEmpty()}this.isEmpty=t.every(this.datasets,e),this.isEmpty?this._hide():this.isOpen&&this._show(),this.trigger("datasetRendered")},_hide:function(){this.$menu.hide()},_show:function(){this.$menu.css("display","block")},_getSuggestions:function(){return this.$menu.find(".tt-suggestion")},_getCursor:function(){return this.$menu.find(".tt-cursor").first()},_setCursor:function(e,t){e.first().addClass("tt-cursor"),!t&&this.trigger("cursorMoved")},_removeCursor:function(){this._getCursor().removeClass("tt-cursor")},_moveCursor:function(e){var t,n,i,r;if(this.isOpen){if(n=this._getCursor(),t=this._getSuggestions(),this._removeCursor(),i=t.index(n)+e,i=(i+1)%(t.length+1)-1,-1===i)return void this.trigger("cursorRemoved");-1>i&&(i=t.length-1),this._setCursor(r=t.eq(i)),this._ensureVisible(r)}},_ensureVisible:function(e){var t,n,i,r;t=e.position().top,n=t+e.outerHeight(!0),i=this.$menu.scrollTop(),r=this.$menu.height()+parseInt(this.$menu.css("paddingTop"),10)+parseInt(this.$menu.css("paddingBottom"),10),0>t?this.$menu.scrollTop(i+t):n>r&&this.$menu.scrollTop(i+(n-r))},close:function(){this.isOpen&&(this.isOpen=!1,this._removeCursor(),this._hide(),this.trigger("closed"))},open:function(){this.isOpen||(this.isOpen=!0,!this.isEmpty&&this._show(),this.trigger("opened"))},setLanguageDirection:function(e){this.$menu.css("ltr"===e?i.ltr:i.rtl)},moveCursorUp:function(){this._moveCursor(-1)},moveCursorDown:function(){this._moveCursor(1)},getDatumForSuggestion:function(e){var t=null;return e.length&&(t={raw:u.extractDatum(e),value:u.extractValue(e),datasetName:u.extractDatasetName(e)}),t},getDatumForCursor:function(){return this.getDatumForSuggestion(this._getCursor().first())},getDatumForTopSuggestion:function(){return this.getDatumForSuggestion(this._getSuggestions().first())},update:function(e){function n(t){t.update(e)}t.each(this.datasets,n)},empty:function(){function e(e){e.clear()}t.each(this.datasets,e),this.isEmpty=!0},isVisible:function(){return this.isOpen&&!this.isEmpty},destroy:function(){function e(e){e.destroy()}this.$menu.off(".tt"),this.$menu=null,t.each(this.datasets,e)}}),n}(),l=function(){function o(n){var i,o,u;n=n||{},n.input||e.error("missing input"),this.isActivated=!1,this.autoselect=!!n.autoselect,this.minLength=t.isNumber(n.minLength)?n.minLength:1,this.$node=s(n.input,n.withHint),i=this.$node.find(".tt-dropdown-menu"),o=this.$node.find(".tt-input"),u=this.$node.find(".tt-hint"),o.on("blur.tt",function(e){var n,r,s;n=document.activeElement,r=i.is(n),s=i.has(n).length>0,t.isMsie()&&(r||s)&&(e.preventDefault(),e.stopImmediatePropagation(),t.defer(function(){o.focus()}))}),i.on("mousedown.tt",function(e){e.preventDefault()}),this.eventBus=n.eventBus||new r({el:o}),this.dropdown=new c({menu:i,datasets:n.datasets}).onSync("suggestionClicked",this._onSuggestionClicked,this).onSync("cursorMoved",this._onCursorMoved,this).onSync("cursorRemoved",this._onCursorRemoved,this).onSync("opened",this._onOpened,this).onSync("closed",this._onClosed,this).onAsync("datasetRendered",this._onDatasetRendered,this),this.input=new a({input:o,hint:u}).onSync("focused",this._onFocused,this).onSync("blurred",this._onBlurred,this).onSync("enterKeyed",this._onEnterKeyed,this).onSync("tabKeyed",this._onTabKeyed,this).onSync("escKeyed",this._onEscKeyed,this).onSync("upKeyed",this._onUpKeyed,this).onSync("downKeyed",this._onDownKeyed,this).onSync("leftKeyed",this._onLeftKeyed,this).onSync("rightKeyed",this._onRightKeyed,this).onSync("queryChanged",this._onQueryChanged,this).onSync("whitespaceChanged",this._onWhitespaceChanged,this),this._setLanguageDirection()}function s(t,r){var o,s,a,c;o=e(t),s=e(n.wrapper).css(i.wrapper),a=e(n.dropdown).css(i.dropdown),c=o.clone().css(i.hint).css(u(o)),c.val("").removeData().addClass("tt-hint").removeAttr("id name placeholder").prop("disabled",!0).attr({autocomplete:"off",spellcheck:"false"}),o.data(p,{dir:o.attr("dir"),autocomplete:o.attr("autocomplete"),spellcheck:o.attr("spellcheck"),style:o.attr("style")}),o.addClass("tt-input").attr({autocomplete:"off",spellcheck:!1}).css(r?i.input:i.inputWithNoHint);try{!o.attr("dir")&&o.attr("dir","auto")}catch(l){}return o.wrap(s).parent().prepend(r?c:null).append(a)}function u(e){return{backgroundAttachment:e.css("background-attachment"),backgroundClip:e.css("background-clip"),backgroundColor:e.css("background-color"),backgroundImage:e.css("background-image"),backgroundOrigin:e.css("background-origin"),backgroundPosition:e.css("background-position"),backgroundRepeat:e.css("background-repeat"),backgroundSize:e.css("background-size")}}function l(e){var n=e.find(".tt-input");t.each(n.data(p),function(e,i){t.isUndefined(e)?n.removeAttr(i):n.attr(i,e)}),n.detach().removeData(p).removeClass("tt-input").insertAfter(e),e.remove()}var p="ttAttrs";return t.mixin(o.prototype,{_onSuggestionClicked:function(e,t){var n;(n=this.dropdown.getDatumForSuggestion(t))&&this._select(n)},_onCursorMoved:function(){var e=this.dropdown.getDatumForCursor();this.input.setInputValue(e.value,!0),this.eventBus.trigger("cursorchanged",e.raw,e.datasetName)},_onCursorRemoved:function(){this.input.resetInputValue(),this._updateHint()},_onDatasetRendered:function(){this._updateHint()},_onOpened:function(){this._updateHint(),this.eventBus.trigger("opened")},_onClosed:function(){this.input.clearHint(),this.eventBus.trigger("closed")},_onFocused:function(){this.isActivated=!0,this.dropdown.open()},_onBlurred:function(){this.isActivated=!1,this.dropdown.empty(),this.dropdown.close()},_onEnterKeyed:function(e,t){var n,i;n=this.dropdown.getDatumForCursor(),i=this.dropdown.getDatumForTopSuggestion(),n?(this._select(n),t.preventDefault()):this.autoselect&&i&&(this._select(i),t.preventDefault())},_onTabKeyed:function(e,t){var n;(n=this.dropdown.getDatumForCursor())?(this._select(n),t.preventDefault()):this._autocomplete(!0)},_onEscKeyed:function(){this.dropdown.close(),this.input.resetInputValue()},_onUpKeyed:function(){var e=this.input.getQuery();this.dropdown.isEmpty&&e.length>=this.minLength?this.dropdown.update(e):this.dropdown.moveCursorUp(),this.dropdown.open()},_onDownKeyed:function(){var e=this.input.getQuery();this.dropdown.isEmpty&&e.length>=this.minLength?this.dropdown.update(e):this.dropdown.moveCursorDown(),this.dropdown.open()},_onLeftKeyed:function(){"rtl"===this.dir&&this._autocomplete()},_onRightKeyed:function(){"ltr"===this.dir&&this._autocomplete()},_onQueryChanged:function(e,t){this.input.clearHintIfInvalid(),t.length>=this.minLength?this.dropdown.update(t):this.dropdown.empty(),this.dropdown.open(),this._setLanguageDirection()},_onWhitespaceChanged:function(){this._updateHint(),this.dropdown.open()},_setLanguageDirection:function(){var e;this.dir!==(e=this.input.getLanguageDirection())&&(this.dir=e,this.$node.css("direction",e),this.dropdown.setLanguageDirection(e))},_updateHint:function(){var e,n,i,r,o,s;e=this.dropdown.getDatumForTopSuggestion(),e&&this.dropdown.isVisible()&&!this.input.hasOverflow()?(n=this.input.getInputValue(),i=a.normalizeQuery(n),r=t.escapeRegExChars(i),o=new RegExp("^(?:"+r+")(.+$)","i"),s=o.exec(e.value),s?this.input.setHint(n+s[1]):this.input.clearHint()):this.input.clearHint()},_autocomplete:function(e){var t,n,i,r;t=this.input.getHint(),n=this.input.getQuery(),i=e||this.input.isCursorAtEnd(),t&&n!==t&&i&&(r=this.dropdown.getDatumForTopSuggestion(),r&&this.input.setInputValue(r.value),this.eventBus.trigger("autocompleted",r.raw,r.datasetName))},_select:function(e){this.input.setQuery(e.value),this.input.setInputValue(e.value,!0),this._setLanguageDirection(),this.eventBus.trigger("selected",e.raw,e.datasetName),this.dropdown.close(),t.defer(t.bind(this.dropdown.empty,this.dropdown))},open:function(){this.dropdown.open()},close:function(){this.dropdown.close()},setVal:function(e){this.isActivated?this.input.setInputValue(e):(this.input.setQuery(e),this.input.setInputValue(e,!0)),this._setLanguageDirection()},getVal:function(){return this.input.getQuery()},destroy:function(){this.input.destroy(),this.dropdown.destroy(),l(this.$node),this.$node=null}}),o}();!function(){var n,i,o;n=e.fn.typeahead,i="ttTypeahead",o={initialize:function(n,o){function s(){var s,a,u=e(this);t.each(o,function(e){e.highlight=!!n.highlight}),a=new l({input:u,eventBus:s=new r({el:u}),withHint:t.isUndefined(n.hint)?!0:!!n.hint,minLength:n.minLength,autoselect:n.autoselect,datasets:o}),u.data(i,a)}return o=t.isArray(o)?o:[].slice.call(arguments,1),n=n||{},this.each(s)},open:function(){function t(){var t,n=e(this);(t=n.data(i))&&t.open()}return this.each(t)},close:function(){function t(){var t,n=e(this);(t=n.data(i))&&t.close()}return this.each(t)},val:function(t){function n(){var n,r=e(this);(n=r.data(i))&&n.setVal(t)}function r(e){var t,n;return(t=e.data(i))&&(n=t.getVal()),n}return arguments.length?this.each(n):r(this.first())},destroy:function(){function t(){var t,n=e(this);(t=n.data(i))&&(t.destroy(),n.removeData(i))}return this.each(t)}},e.fn.typeahead=function(e){return o[e]?o[e].apply(this,[].slice.call(arguments,1)):o.initialize.apply(this,arguments)},e.fn.typeahead.noConflict=function(){return e.fn.typeahead=n,this}}()}(window.jQuery);