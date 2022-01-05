/*!
 * jQuery JavaScript Library v2.1.4
 * http://jquery.com/
 *
 * @licstart The following is the entire license notice for the
 *  JavaScript code in this file.
 *
 * Copyright 2005, 2015 jQuery Foundation, Inc.
 *
 * Licensed under the MIT licenses
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @licend The above is the entire license notice
 *  for the JavaScript code in this file.
 */
!function(a,b){"object"==typeof module&&"object"==typeof module.exports?module.exports=a.document?b(a,!0):function(a){if(!a.document)throw new Error("jQuery requires a window with a document");return b(a)}:b(a)}("undefined"!=typeof window?window:this,function(a,b){var c=[],d=c.slice,e=c.concat,f=c.push,g=c.indexOf,h={},i=h.toString,j=h.hasOwnProperty,k={},l=a.document,m="2.1.4",n=function(a,b){return new n.fn.init(a,b)},o=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,p=/^-ms-/,q=/-([\da-z])/gi,r=function(a,b){return b.toUpperCase()};n.fn=n.prototype={jquery:m,constructor:n,selector:"",length:0,toArray:function(){return d.call(this)},get:function(a){return null!=a?0>a?this[a+this.length]:this[a]:d.call(this)},pushStack:function(a){var b=n.merge(this.constructor(),a);return b.prevObject=this,b.context=this.context,b},each:function(a,b){return n.each(this,a,b)},map:function(a){return this.pushStack(n.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return this.pushStack(d.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(a){var b=this.length,c=+a+(0>a?b:0);return this.pushStack(c>=0&&b>c?[this[c]]:[])},end:function(){return this.prevObject||this.constructor(null)},push:f,sort:c.sort,splice:c.splice},n.extend=n.fn.extend=function(){var a,b,c,d,e,f,g=arguments[0]||{},h=1,i=arguments.length,j=!1;for("boolean"==typeof g&&(j=g,g=arguments[h]||{},h++),"object"==typeof g||n.isFunction(g)||(g={}),h===i&&(g=this,h--);i>h;h++)if(null!=(a=arguments[h]))for(b in a)c=g[b],d=a[b],g!==d&&(j&&d&&(n.isPlainObject(d)||(e=n.isArray(d)))?(e?(e=!1,f=c&&n.isArray(c)?c:[]):f=c&&n.isPlainObject(c)?c:{},g[b]=n.extend(j,f,d)):void 0!==d&&(g[b]=d));return g},n.extend({expando:"jQuery"+(m+Math.random()).replace(/\D/g,""),isReady:!0,error:function(a){throw new Error(a)},noop:function(){},isFunction:function(a){return"function"===n.type(a)},isArray:Array.isArray,isWindow:function(a){return null!=a&&a===a.window},isNumeric:function(a){return!n.isArray(a)&&a-parseFloat(a)+1>=0},isPlainObject:function(a){return"object"!==n.type(a)||a.nodeType||n.isWindow(a)?!1:a.constructor&&!j.call(a.constructor.prototype,"isPrototypeOf")?!1:!0},isEmptyObject:function(a){var b;for(b in a)return!1;return!0},type:function(a){return null==a?a+"":"object"==typeof a||"function"==typeof a?h[i.call(a)]||"object":typeof a},globalEval:function(a){var b,c=eval;a=n.trim(a),a&&(1===a.indexOf("use strict")?(b=l.createElement("script"),b.text=a,l.head.appendChild(b).parentNode.removeChild(b)):c(a))},camelCase:function(a){return a.replace(p,"ms-").replace(q,r)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toLowerCase()===b.toLowerCase()},each:function(a,b,c){var d,e=0,f=a.length,g=s(a);if(c){if(g){for(;f>e;e++)if(d=b.apply(a[e],c),d===!1)break}else for(e in a)if(d=b.apply(a[e],c),d===!1)break}else if(g){for(;f>e;e++)if(d=b.call(a[e],e,a[e]),d===!1)break}else for(e in a)if(d=b.call(a[e],e,a[e]),d===!1)break;return a},trim:function(a){return null==a?"":(a+"").replace(o,"")},makeArray:function(a,b){var c=b||[];return null!=a&&(s(Object(a))?n.merge(c,"string"==typeof a?[a]:a):f.call(c,a)),c},inArray:function(a,b,c){return null==b?-1:g.call(b,a,c)},merge:function(a,b){for(var c=+b.length,d=0,e=a.length;c>d;d++)a[e++]=b[d];return a.length=e,a},grep:function(a,b,c){for(var d,e=[],f=0,g=a.length,h=!c;g>f;f++)d=!b(a[f],f),d!==h&&e.push(a[f]);return e},map:function(a,b,c){var d,f=0,g=a.length,h=s(a),i=[];if(h)for(;g>f;f++)d=b(a[f],f,c),null!=d&&i.push(d);else for(f in a)d=b(a[f],f,c),null!=d&&i.push(d);return e.apply([],i)},guid:1,proxy:function(a,b){var c,e,f;return"string"==typeof b&&(c=a[b],b=a,a=c),n.isFunction(a)?(e=d.call(arguments,2),f=function(){return a.apply(b||this,e.concat(d.call(arguments)))},f.guid=a.guid=a.guid||n.guid++,f):void 0},now:Date.now,support:k}),n.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){h["[object "+b+"]"]=b.toLowerCase()});function s(a){var b="length"in a&&a.length,c=n.type(a);return"function"===c||n.isWindow(a)?!1:1===a.nodeType&&b?!0:"array"===c||0===b||"number"==typeof b&&b>0&&b-1 in a}var t=function(a){var b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u="sizzle"+1*new Date,v=a.document,w=0,x=0,y=ha(),z=ha(),A=ha(),B=function(a,b){return a===b&&(l=!0),0},C=1<<31,D={}.hasOwnProperty,E=[],F=E.pop,G=E.push,H=E.push,I=E.slice,J=function(a,b){for(var c=0,d=a.length;d>c;c++)if(a[c]===b)return c;return-1},K="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",L="[\\x20\\t\\r\\n\\f]",M="(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",N=M.replace("w","w#"),O="\\["+L+"*("+M+")(?:"+L+"*([*^$|!~]?=)"+L+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+N+"))|)"+L+"*\\]",P=":("+M+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+O+")*)|.*)\\)|)",Q=new RegExp(L+"+","g"),R=new RegExp("^"+L+"+|((?:^|[^\\\\])(?:\\\\.)*)"+L+"+$","g"),S=new RegExp("^"+L+"*,"+L+"*"),T=new RegExp("^"+L+"*([>+~]|"+L+")"+L+"*"),U=new RegExp("="+L+"*([^\\]'\"]*?)"+L+"*\\]","g"),V=new RegExp(P),W=new RegExp("^"+N+"$"),X={ID:new RegExp("^#("+M+")"),CLASS:new RegExp("^\\.("+M+")"),TAG:new RegExp("^("+M.replace("w","w*")+")"),ATTR:new RegExp("^"+O),PSEUDO:new RegExp("^"+P),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+L+"*(even|odd|(([+-]|)(\\d*)n|)"+L+"*(?:([+-]|)"+L+"*(\\d+)|))"+L+"*\\)|)","i"),bool:new RegExp("^(?:"+K+")$","i"),needsContext:new RegExp("^"+L+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+L+"*((?:-\\d)?\\d*)"+L+"*\\)|)(?=[^-]|$)","i")},Y=/^(?:input|select|textarea|button)$/i,Z=/^h\d$/i,$=/^[^{]+\{\s*\[native \w/,_=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,aa=/[+~]/,ba=/'|\\/g,ca=new RegExp("\\\\([\\da-f]{1,6}"+L+"?|("+L+")|.)","ig"),da=function(a,b,c){var d="0x"+b-65536;return d!==d||c?b:0>d?String.fromCharCode(d+65536):String.fromCharCode(d>>10|55296,1023&d|56320)},ea=function(){m()};try{H.apply(E=I.call(v.childNodes),v.childNodes),E[v.childNodes.length].nodeType}catch(fa){H={apply:E.length?function(a,b){G.apply(a,I.call(b))}:function(a,b){var c=a.length,d=0;while(a[c++]=b[d++]);a.length=c-1}}}function ga(a,b,d,e){var f,h,j,k,l,o,r,s,w,x;if((b?b.ownerDocument||b:v)!==n&&m(b),b=b||n,d=d||[],k=b.nodeType,"string"!=typeof a||!a||1!==k&&9!==k&&11!==k)return d;if(!e&&p){if(11!==k&&(f=_.exec(a)))if(j=f[1]){if(9===k){if(h=b.getElementById(j),!h||!h.parentNode)return d;if(h.id===j)return d.push(h),d}else if(b.ownerDocument&&(h=b.ownerDocument.getElementById(j))&&t(b,h)&&h.id===j)return d.push(h),d}else{if(f[2])return H.apply(d,b.getElementsByTagName(a)),d;if((j=f[3])&&c.getElementsByClassName)return H.apply(d,b.getElementsByClassName(j)),d}if(c.qsa&&(!q||!q.test(a))){if(s=r=u,w=b,x=1!==k&&a,1===k&&"object"!==b.nodeName.toLowerCase()){o=g(a),(r=b.getAttribute("id"))?s=r.replace(ba,"\\$&"):b.setAttribute("id",s),s="[id='"+s+"'] ",l=o.length;while(l--)o[l]=s+ra(o[l]);w=aa.test(a)&&pa(b.parentNode)||b,x=o.join(",")}if(x)try{return H.apply(d,w.querySelectorAll(x)),d}catch(y){}finally{r||b.removeAttribute("id")}}}return i(a.replace(R,"$1"),b,d,e)}function ha(){var a=[];function b(c,e){return a.push(c+" ")>d.cacheLength&&delete b[a.shift()],b[c+" "]=e}return b}function ia(a){return a[u]=!0,a}function ja(a){var b=n.createElement("div");try{return!!a(b)}catch(c){return!1}finally{b.parentNode&&b.parentNode.removeChild(b),b=null}}function ka(a,b){var c=a.split("|"),e=a.length;while(e--)d.attrHandle[c[e]]=b}function la(a,b){var c=b&&a,d=c&&1===a.nodeType&&1===b.nodeType&&(~b.sourceIndex||C)-(~a.sourceIndex||C);if(d)return d;if(c)while(c=c.nextSibling)if(c===b)return-1;return a?1:-1}function ma(a){return function(b){var c=b.nodeName.toLowerCase();return"input"===c&&b.type===a}}function na(a){return function(b){var c=b.nodeName.toLowerCase();return("input"===c||"button"===c)&&b.type===a}}function oa(a){return ia(function(b){return b=+b,ia(function(c,d){var e,f=a([],c.length,b),g=f.length;while(g--)c[e=f[g]]&&(c[e]=!(d[e]=c[e]))})})}function pa(a){return a&&"undefined"!=typeof a.getElementsByTagName&&a}c=ga.support={},f=ga.isXML=function(a){var b=a&&(a.ownerDocument||a).documentElement;return b?"HTML"!==b.nodeName:!1},m=ga.setDocument=function(a){var b,e,g=a?a.ownerDocument||a:v;return g!==n&&9===g.nodeType&&g.documentElement?(n=g,o=g.documentElement,e=g.defaultView,e&&e!==e.top&&(e.addEventListener?e.addEventListener("unload",ea,!1):e.attachEvent&&e.attachEvent("onunload",ea)),p=!f(g),c.attributes=ja(function(a){return a.className="i",!a.getAttribute("className")}),c.getElementsByTagName=ja(function(a){return a.appendChild(g.createComment("")),!a.getElementsByTagName("*").length}),c.getElementsByClassName=$.test(g.getElementsByClassName),c.getById=ja(function(a){return o.appendChild(a).id=u,!g.getElementsByName||!g.getElementsByName(u).length}),c.getById?(d.find.ID=function(a,b){if("undefined"!=typeof b.getElementById&&p){var c=b.getElementById(a);return c&&c.parentNode?[c]:[]}},d.filter.ID=function(a){var b=a.replace(ca,da);return function(a){return a.getAttribute("id")===b}}):(delete d.find.ID,d.filter.ID=function(a){var b=a.replace(ca,da);return function(a){var c="undefined"!=typeof a.getAttributeNode&&a.getAttributeNode("id");return c&&c.value===b}}),d.find.TAG=c.getElementsByTagName?function(a,b){return"undefined"!=typeof b.getElementsByTagName?b.getElementsByTagName(a):c.qsa?b.querySelectorAll(a):void 0}:function(a,b){var c,d=[],e=0,f=b.getElementsByTagName(a);if("*"===a){while(c=f[e++])1===c.nodeType&&d.push(c);return d}return f},d.find.CLASS=c.getElementsByClassName&&function(a,b){return p?b.getElementsByClassName(a):void 0},r=[],q=[],(c.qsa=$.test(g.querySelectorAll))&&(ja(function(a){o.appendChild(a).innerHTML="<a id='"+u+"'></a><select id='"+u+"-\f]' msallowcapture=''><option selected=''></option></select>",a.querySelectorAll("[msallowcapture^='']").length&&q.push("[*^$]="+L+"*(?:''|\"\")"),a.querySelectorAll("[selected]").length||q.push("\\["+L+"*(?:value|"+K+")"),a.querySelectorAll("[id~="+u+"-]").length||q.push("~="),a.querySelectorAll(":checked").length||q.push(":checked"),a.querySelectorAll("a#"+u+"+*").length||q.push(".#.+[+~]")}),ja(function(a){var b=g.createElement("input");b.setAttribute("type","hidden"),a.appendChild(b).setAttribute("name","D"),a.querySelectorAll("[name=d]").length&&q.push("name"+L+"*[*^$|!~]?="),a.querySelectorAll(":enabled").length||q.push(":enabled",":disabled"),a.querySelectorAll("*,:x"),q.push(",.*:")})),(c.matchesSelector=$.test(s=o.matches||o.webkitMatchesSelector||o.mozMatchesSelector||o.oMatchesSelector||o.msMatchesSelector))&&ja(function(a){c.disconnectedMatch=s.call(a,"div"),s.call(a,"[s!='']:x"),r.push("!=",P)}),q=q.length&&new RegExp(q.join("|")),r=r.length&&new RegExp(r.join("|")),b=$.test(o.compareDocumentPosition),t=b||$.test(o.contains)?function(a,b){var c=9===a.nodeType?a.documentElement:a,d=b&&b.parentNode;return a===d||!(!d||1!==d.nodeType||!(c.contains?c.contains(d):a.compareDocumentPosition&&16&a.compareDocumentPosition(d)))}:function(a,b){if(b)while(b=b.parentNode)if(b===a)return!0;return!1},B=b?function(a,b){if(a===b)return l=!0,0;var d=!a.compareDocumentPosition-!b.compareDocumentPosition;return d?d:(d=(a.ownerDocument||a)===(b.ownerDocument||b)?a.compareDocumentPosition(b):1,1&d||!c.sortDetached&&b.compareDocumentPosition(a)===d?a===g||a.ownerDocument===v&&t(v,a)?-1:b===g||b.ownerDocument===v&&t(v,b)?1:k?J(k,a)-J(k,b):0:4&d?-1:1)}:function(a,b){if(a===b)return l=!0,0;var c,d=0,e=a.parentNode,f=b.parentNode,h=[a],i=[b];if(!e||!f)return a===g?-1:b===g?1:e?-1:f?1:k?J(k,a)-J(k,b):0;if(e===f)return la(a,b);c=a;while(c=c.parentNode)h.unshift(c);c=b;while(c=c.parentNode)i.unshift(c);while(h[d]===i[d])d++;return d?la(h[d],i[d]):h[d]===v?-1:i[d]===v?1:0},g):n},ga.matches=function(a,b){return ga(a,null,null,b)},ga.matchesSelector=function(a,b){if((a.ownerDocument||a)!==n&&m(a),b=b.replace(U,"='$1']"),!(!c.matchesSelector||!p||r&&r.test(b)||q&&q.test(b)))try{var d=s.call(a,b);if(d||c.disconnectedMatch||a.document&&11!==a.document.nodeType)return d}catch(e){}return ga(b,n,null,[a]).length>0},ga.contains=function(a,b){return(a.ownerDocument||a)!==n&&m(a),t(a,b)},ga.attr=function(a,b){(a.ownerDocument||a)!==n&&m(a);var e=d.attrHandle[b.toLowerCase()],f=e&&D.call(d.attrHandle,b.toLowerCase())?e(a,b,!p):void 0;return void 0!==f?f:c.attributes||!p?a.getAttribute(b):(f=a.getAttributeNode(b))&&f.specified?f.value:null},ga.error=function(a){throw new Error("Syntax error, unrecognized expression: "+a)},ga.uniqueSort=function(a){var b,d=[],e=0,f=0;if(l=!c.detectDuplicates,k=!c.sortStable&&a.slice(0),a.sort(B),l){while(b=a[f++])b===a[f]&&(e=d.push(f));while(e--)a.splice(d[e],1)}return k=null,a},e=ga.getText=function(a){var b,c="",d=0,f=a.nodeType;if(f){if(1===f||9===f||11===f){if("string"==typeof a.textContent)return a.textContent;for(a=a.firstChild;a;a=a.nextSibling)c+=e(a)}else if(3===f||4===f)return a.nodeValue}else while(b=a[d++])c+=e(b);return c},d=ga.selectors={cacheLength:50,createPseudo:ia,match:X,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(a){return a[1]=a[1].replace(ca,da),a[3]=(a[3]||a[4]||a[5]||"").replace(ca,da),"~="===a[2]&&(a[3]=" "+a[3]+" "),a.slice(0,4)},CHILD:function(a){return a[1]=a[1].toLowerCase(),"nth"===a[1].slice(0,3)?(a[3]||ga.error(a[0]),a[4]=+(a[4]?a[5]+(a[6]||1):2*("even"===a[3]||"odd"===a[3])),a[5]=+(a[7]+a[8]||"odd"===a[3])):a[3]&&ga.error(a[0]),a},PSEUDO:function(a){var b,c=!a[6]&&a[2];return X.CHILD.test(a[0])?null:(a[3]?a[2]=a[4]||a[5]||"":c&&V.test(c)&&(b=g(c,!0))&&(b=c.indexOf(")",c.length-b)-c.length)&&(a[0]=a[0].slice(0,b),a[2]=c.slice(0,b)),a.slice(0,3))}},filter:{TAG:function(a){var b=a.replace(ca,da).toLowerCase();return"*"===a?function(){return!0}:function(a){return a.nodeName&&a.nodeName.toLowerCase()===b}},CLASS:function(a){var b=y[a+" "];return b||(b=new RegExp("(^|"+L+")"+a+"("+L+"|$)"))&&y(a,function(a){return b.test("string"==typeof a.className&&a.className||"undefined"!=typeof a.getAttribute&&a.getAttribute("class")||"")})},ATTR:function(a,b,c){return function(d){var e=ga.attr(d,a);return null==e?"!="===b:b?(e+="","="===b?e===c:"!="===b?e!==c:"^="===b?c&&0===e.indexOf(c):"*="===b?c&&e.indexOf(c)>-1:"$="===b?c&&e.slice(-c.length)===c:"~="===b?(" "+e.replace(Q," ")+" ").indexOf(c)>-1:"|="===b?e===c||e.slice(0,c.length+1)===c+"-":!1):!0}},CHILD:function(a,b,c,d,e){var f="nth"!==a.slice(0,3),g="last"!==a.slice(-4),h="of-type"===b;return 1===d&&0===e?function(a){return!!a.parentNode}:function(b,c,i){var j,k,l,m,n,o,p=f!==g?"nextSibling":"previousSibling",q=b.parentNode,r=h&&b.nodeName.toLowerCase(),s=!i&&!h;if(q){if(f){while(p){l=b;while(l=l[p])if(h?l.nodeName.toLowerCase()===r:1===l.nodeType)return!1;o=p="only"===a&&!o&&"nextSibling"}return!0}if(o=[g?q.firstChild:q.lastChild],g&&s){k=q[u]||(q[u]={}),j=k[a]||[],n=j[0]===w&&j[1],m=j[0]===w&&j[2],l=n&&q.childNodes[n];while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if(1===l.nodeType&&++m&&l===b){k[a]=[w,n,m];break}}else if(s&&(j=(b[u]||(b[u]={}))[a])&&j[0]===w)m=j[1];else while(l=++n&&l&&l[p]||(m=n=0)||o.pop())if((h?l.nodeName.toLowerCase()===r:1===l.nodeType)&&++m&&(s&&((l[u]||(l[u]={}))[a]=[w,m]),l===b))break;return m-=e,m===d||m%d===0&&m/d>=0}}},PSEUDO:function(a,b){var c,e=d.pseudos[a]||d.setFilters[a.toLowerCase()]||ga.error("unsupported pseudo: "+a);return e[u]?e(b):e.length>1?(c=[a,a,"",b],d.setFilters.hasOwnProperty(a.toLowerCase())?ia(function(a,c){var d,f=e(a,b),g=f.length;while(g--)d=J(a,f[g]),a[d]=!(c[d]=f[g])}):function(a){return e(a,0,c)}):e}},pseudos:{not:ia(function(a){var b=[],c=[],d=h(a.replace(R,"$1"));return d[u]?ia(function(a,b,c,e){var f,g=d(a,null,e,[]),h=a.length;while(h--)(f=g[h])&&(a[h]=!(b[h]=f))}):function(a,e,f){return b[0]=a,d(b,null,f,c),b[0]=null,!c.pop()}}),has:ia(function(a){return function(b){return ga(a,b).length>0}}),contains:ia(function(a){return a=a.replace(ca,da),function(b){return(b.textContent||b.innerText||e(b)).indexOf(a)>-1}}),lang:ia(function(a){return W.test(a||"")||ga.error("unsupported lang: "+a),a=a.replace(ca,da).toLowerCase(),function(b){var c;do if(c=p?b.lang:b.getAttribute("xml:lang")||b.getAttribute("lang"))return c=c.toLowerCase(),c===a||0===c.indexOf(a+"-");while((b=b.parentNode)&&1===b.nodeType);return!1}}),target:function(b){var c=a.location&&a.location.hash;return c&&c.slice(1)===b.id},root:function(a){return a===o},focus:function(a){return a===n.activeElement&&(!n.hasFocus||n.hasFocus())&&!!(a.type||a.href||~a.tabIndex)},enabled:function(a){return a.disabled===!1},disabled:function(a){return a.disabled===!0},checked:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&!!a.checked||"option"===b&&!!a.selected},selected:function(a){return a.parentNode&&a.parentNode.selectedIndex,a.selected===!0},empty:function(a){for(a=a.firstChild;a;a=a.nextSibling)if(a.nodeType<6)return!1;return!0},parent:function(a){return!d.pseudos.empty(a)},header:function(a){return Z.test(a.nodeName)},input:function(a){return Y.test(a.nodeName)},button:function(a){var b=a.nodeName.toLowerCase();return"input"===b&&"button"===a.type||"button"===b},text:function(a){var b;return"input"===a.nodeName.toLowerCase()&&"text"===a.type&&(null==(b=a.getAttribute("type"))||"text"===b.toLowerCase())},first:oa(function(){return[0]}),last:oa(function(a,b){return[b-1]}),eq:oa(function(a,b,c){return[0>c?c+b:c]}),even:oa(function(a,b){for(var c=0;b>c;c+=2)a.push(c);return a}),odd:oa(function(a,b){for(var c=1;b>c;c+=2)a.push(c);return a}),lt:oa(function(a,b,c){for(var d=0>c?c+b:c;--d>=0;)a.push(d);return a}),gt:oa(function(a,b,c){for(var d=0>c?c+b:c;++d<b;)a.push(d);return a})}},d.pseudos.nth=d.pseudos.eq;for(b in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})d.pseudos[b]=ma(b);for(b in{submit:!0,reset:!0})d.pseudos[b]=na(b);function qa(){}qa.prototype=d.filters=d.pseudos,d.setFilters=new qa,g=ga.tokenize=function(a,b){var c,e,f,g,h,i,j,k=z[a+" "];if(k)return b?0:k.slice(0);h=a,i=[],j=d.preFilter;while(h){(!c||(e=S.exec(h)))&&(e&&(h=h.slice(e[0].length)||h),i.push(f=[])),c=!1,(e=T.exec(h))&&(c=e.shift(),f.push({value:c,type:e[0].replace(R," ")}),h=h.slice(c.length));for(g in d.filter)!(e=X[g].exec(h))||j[g]&&!(e=j[g](e))||(c=e.shift(),f.push({value:c,type:g,matches:e}),h=h.slice(c.length));if(!c)break}return b?h.length:h?ga.error(a):z(a,i).slice(0)};function ra(a){for(var b=0,c=a.length,d="";c>b;b++)d+=a[b].value;return d}function sa(a,b,c){var d=b.dir,e=c&&"parentNode"===d,f=x++;return b.first?function(b,c,f){while(b=b[d])if(1===b.nodeType||e)return a(b,c,f)}:function(b,c,g){var h,i,j=[w,f];if(g){while(b=b[d])if((1===b.nodeType||e)&&a(b,c,g))return!0}else while(b=b[d])if(1===b.nodeType||e){if(i=b[u]||(b[u]={}),(h=i[d])&&h[0]===w&&h[1]===f)return j[2]=h[2];if(i[d]=j,j[2]=a(b,c,g))return!0}}}function ta(a){return a.length>1?function(b,c,d){var e=a.length;while(e--)if(!a[e](b,c,d))return!1;return!0}:a[0]}function ua(a,b,c){for(var d=0,e=b.length;e>d;d++)ga(a,b[d],c);return c}function va(a,b,c,d,e){for(var f,g=[],h=0,i=a.length,j=null!=b;i>h;h++)(f=a[h])&&(!c||c(f,d,e))&&(g.push(f),j&&b.push(h));return g}function wa(a,b,c,d,e,f){return d&&!d[u]&&(d=wa(d)),e&&!e[u]&&(e=wa(e,f)),ia(function(f,g,h,i){var j,k,l,m=[],n=[],o=g.length,p=f||ua(b||"*",h.nodeType?[h]:h,[]),q=!a||!f&&b?p:va(p,m,a,h,i),r=c?e||(f?a:o||d)?[]:g:q;if(c&&c(q,r,h,i),d){j=va(r,n),d(j,[],h,i),k=j.length;while(k--)(l=j[k])&&(r[n[k]]=!(q[n[k]]=l))}if(f){if(e||a){if(e){j=[],k=r.length;while(k--)(l=r[k])&&j.push(q[k]=l);e(null,r=[],j,i)}k=r.length;while(k--)(l=r[k])&&(j=e?J(f,l):m[k])>-1&&(f[j]=!(g[j]=l))}}else r=va(r===g?r.splice(o,r.length):r),e?e(null,g,r,i):H.apply(g,r)})}function xa(a){for(var b,c,e,f=a.length,g=d.relative[a[0].type],h=g||d.relative[" "],i=g?1:0,k=sa(function(a){return a===b},h,!0),l=sa(function(a){return J(b,a)>-1},h,!0),m=[function(a,c,d){var e=!g&&(d||c!==j)||((b=c).nodeType?k(a,c,d):l(a,c,d));return b=null,e}];f>i;i++)if(c=d.relative[a[i].type])m=[sa(ta(m),c)];else{if(c=d.filter[a[i].type].apply(null,a[i].matches),c[u]){for(e=++i;f>e;e++)if(d.relative[a[e].type])break;return wa(i>1&&ta(m),i>1&&ra(a.slice(0,i-1).concat({value:" "===a[i-2].type?"*":""})).replace(R,"$1"),c,e>i&&xa(a.slice(i,e)),f>e&&xa(a=a.slice(e)),f>e&&ra(a))}m.push(c)}return ta(m)}function ya(a,b){var c=b.length>0,e=a.length>0,f=function(f,g,h,i,k){var l,m,o,p=0,q="0",r=f&&[],s=[],t=j,u=f||e&&d.find.TAG("*",k),v=w+=null==t?1:Math.random()||.1,x=u.length;for(k&&(j=g!==n&&g);q!==x&&null!=(l=u[q]);q++){if(e&&l){m=0;while(o=a[m++])if(o(l,g,h)){i.push(l);break}k&&(w=v)}c&&((l=!o&&l)&&p--,f&&r.push(l))}if(p+=q,c&&q!==p){m=0;while(o=b[m++])o(r,s,g,h);if(f){if(p>0)while(q--)r[q]||s[q]||(s[q]=F.call(i));s=va(s)}H.apply(i,s),k&&!f&&s.length>0&&p+b.length>1&&ga.uniqueSort(i)}return k&&(w=v,j=t),r};return c?ia(f):f}return h=ga.compile=function(a,b){var c,d=[],e=[],f=A[a+" "];if(!f){b||(b=g(a)),c=b.length;while(c--)f=xa(b[c]),f[u]?d.push(f):e.push(f);f=A(a,ya(e,d)),f.selector=a}return f},i=ga.select=function(a,b,e,f){var i,j,k,l,m,n="function"==typeof a&&a,o=!f&&g(a=n.selector||a);if(e=e||[],1===o.length){if(j=o[0]=o[0].slice(0),j.length>2&&"ID"===(k=j[0]).type&&c.getById&&9===b.nodeType&&p&&d.relative[j[1].type]){if(b=(d.find.ID(k.matches[0].replace(ca,da),b)||[])[0],!b)return e;n&&(b=b.parentNode),a=a.slice(j.shift().value.length)}i=X.needsContext.test(a)?0:j.length;while(i--){if(k=j[i],d.relative[l=k.type])break;if((m=d.find[l])&&(f=m(k.matches[0].replace(ca,da),aa.test(j[0].type)&&pa(b.parentNode)||b))){if(j.splice(i,1),a=f.length&&ra(j),!a)return H.apply(e,f),e;break}}}return(n||h(a,o))(f,b,!p,e,aa.test(a)&&pa(b.parentNode)||b),e},c.sortStable=u.split("").sort(B).join("")===u,c.detectDuplicates=!!l,m(),c.sortDetached=ja(function(a){return 1&a.compareDocumentPosition(n.createElement("div"))}),ja(function(a){return a.innerHTML="<a href='#'></a>","#"===a.firstChild.getAttribute("href")})||ka("type|href|height|width",function(a,b,c){return c?void 0:a.getAttribute(b,"type"===b.toLowerCase()?1:2)}),c.attributes&&ja(function(a){return a.innerHTML="<input/>",a.firstChild.setAttribute("value",""),""===a.firstChild.getAttribute("value")})||ka("value",function(a,b,c){return c||"input"!==a.nodeName.toLowerCase()?void 0:a.defaultValue}),ja(function(a){return null==a.getAttribute("disabled")})||ka(K,function(a,b,c){var d;return c?void 0:a[b]===!0?b.toLowerCase():(d=a.getAttributeNode(b))&&d.specified?d.value:null}),ga}(a);n.find=t,n.expr=t.selectors,n.expr[":"]=n.expr.pseudos,n.unique=t.uniqueSort,n.text=t.getText,n.isXMLDoc=t.isXML,n.contains=t.contains;var u=n.expr.match.needsContext,v=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,w=/^.[^:#\[\.,]*$/;function x(a,b,c){if(n.isFunction(b))return n.grep(a,function(a,d){return!!b.call(a,d,a)!==c});if(b.nodeType)return n.grep(a,function(a){return a===b!==c});if("string"==typeof b){if(w.test(b))return n.filter(b,a,c);b=n.filter(b,a)}return n.grep(a,function(a){return g.call(b,a)>=0!==c})}n.filter=function(a,b,c){var d=b[0];return c&&(a=":not("+a+")"),1===b.length&&1===d.nodeType?n.find.matchesSelector(d,a)?[d]:[]:n.find.matches(a,n.grep(b,function(a){return 1===a.nodeType}))},n.fn.extend({find:function(a){var b,c=this.length,d=[],e=this;if("string"!=typeof a)return this.pushStack(n(a).filter(function(){for(b=0;c>b;b++)if(n.contains(e[b],this))return!0}));for(b=0;c>b;b++)n.find(a,e[b],d);return d=this.pushStack(c>1?n.unique(d):d),d.selector=this.selector?this.selector+" "+a:a,d},filter:function(a){return this.pushStack(x(this,a||[],!1))},not:function(a){return this.pushStack(x(this,a||[],!0))},is:function(a){return!!x(this,"string"==typeof a&&u.test(a)?n(a):a||[],!1).length}});var y,z=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,A=n.fn.init=function(a,b){var c,d;if(!a)return this;if("string"==typeof a){if(c="<"===a[0]&&">"===a[a.length-1]&&a.length>=3?[null,a,null]:z.exec(a),!c||!c[1]&&b)return!b||b.jquery?(b||y).find(a):this.constructor(b).find(a);if(c[1]){if(b=b instanceof n?b[0]:b,n.merge(this,n.parseHTML(c[1],b&&b.nodeType?b.ownerDocument||b:l,!0)),v.test(c[1])&&n.isPlainObject(b))for(c in b)n.isFunction(this[c])?this[c](b[c]):this.attr(c,b[c]);return this}return d=l.getElementById(c[2]),d&&d.parentNode&&(this.length=1,this[0]=d),this.context=l,this.selector=a,this}return a.nodeType?(this.context=this[0]=a,this.length=1,this):n.isFunction(a)?"undefined"!=typeof y.ready?y.ready(a):a(n):(void 0!==a.selector&&(this.selector=a.selector,this.context=a.context),n.makeArray(a,this))};A.prototype=n.fn,y=n(l);var B=/^(?:parents|prev(?:Until|All))/,C={children:!0,contents:!0,next:!0,prev:!0};n.extend({dir:function(a,b,c){var d=[],e=void 0!==c;while((a=a[b])&&9!==a.nodeType)if(1===a.nodeType){if(e&&n(a).is(c))break;d.push(a)}return d},sibling:function(a,b){for(var c=[];a;a=a.nextSibling)1===a.nodeType&&a!==b&&c.push(a);return c}}),n.fn.extend({has:function(a){var b=n(a,this),c=b.length;return this.filter(function(){for(var a=0;c>a;a++)if(n.contains(this,b[a]))return!0})},closest:function(a,b){for(var c,d=0,e=this.length,f=[],g=u.test(a)||"string"!=typeof a?n(a,b||this.context):0;e>d;d++)for(c=this[d];c&&c!==b;c=c.parentNode)if(c.nodeType<11&&(g?g.index(c)>-1:1===c.nodeType&&n.find.matchesSelector(c,a))){f.push(c);break}return this.pushStack(f.length>1?n.unique(f):f)},index:function(a){return a?"string"==typeof a?g.call(n(a),this[0]):g.call(this,a.jquery?a[0]:a):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(a,b){return this.pushStack(n.unique(n.merge(this.get(),n(a,b))))},addBack:function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}});function D(a,b){while((a=a[b])&&1!==a.nodeType);return a}n.each({parent:function(a){var b=a.parentNode;return b&&11!==b.nodeType?b:null},parents:function(a){return n.dir(a,"parentNode")},parentsUntil:function(a,b,c){return n.dir(a,"parentNode",c)},next:function(a){return D(a,"nextSibling")},prev:function(a){return D(a,"previousSibling")},nextAll:function(a){return n.dir(a,"nextSibling")},prevAll:function(a){return n.dir(a,"previousSibling")},nextUntil:function(a,b,c){return n.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return n.dir(a,"previousSibling",c)},siblings:function(a){return n.sibling((a.parentNode||{}).firstChild,a)},children:function(a){return n.sibling(a.firstChild)},contents:function(a){return a.contentDocument||n.merge([],a.childNodes)}},function(a,b){n.fn[a]=function(c,d){var e=n.map(this,b,c);return"Until"!==a.slice(-5)&&(d=c),d&&"string"==typeof d&&(e=n.filter(d,e)),this.length>1&&(C[a]||n.unique(e),B.test(a)&&e.reverse()),this.pushStack(e)}});var E=/\S+/g,F={};function G(a){var b=F[a]={};return n.each(a.match(E)||[],function(a,c){b[c]=!0}),b}n.Callbacks=function(a){a="string"==typeof a?F[a]||G(a):n.extend({},a);var b,c,d,e,f,g,h=[],i=!a.once&&[],j=function(l){for(b=a.memory&&l,c=!0,g=e||0,e=0,f=h.length,d=!0;h&&f>g;g++)if(h[g].apply(l[0],l[1])===!1&&a.stopOnFalse){b=!1;break}d=!1,h&&(i?i.length&&j(i.shift()):b?h=[]:k.disable())},k={add:function(){if(h){var c=h.length;!function g(b){n.each(b,function(b,c){var d=n.type(c);"function"===d?a.unique&&k.has(c)||h.push(c):c&&c.length&&"string"!==d&&g(c)})}(arguments),d?f=h.length:b&&(e=c,j(b))}return this},remove:function(){return h&&n.each(arguments,function(a,b){var c;while((c=n.inArray(b,h,c))>-1)h.splice(c,1),d&&(f>=c&&f--,g>=c&&g--)}),this},has:function(a){return a?n.inArray(a,h)>-1:!(!h||!h.length)},empty:function(){return h=[],f=0,this},disable:function(){return h=i=b=void 0,this},disabled:function(){return!h},lock:function(){return i=void 0,b||k.disable(),this},locked:function(){return!i},fireWith:function(a,b){return!h||c&&!i||(b=b||[],b=[a,b.slice?b.slice():b],d?i.push(b):j(b)),this},fire:function(){return k.fireWith(this,arguments),this},fired:function(){return!!c}};return k},n.extend({Deferred:function(a){var b=[["resolve","done",n.Callbacks("once memory"),"resolved"],["reject","fail",n.Callbacks("once memory"),"rejected"],["notify","progress",n.Callbacks("memory")]],c="pending",d={state:function(){return c},always:function(){return e.done(arguments).fail(arguments),this},then:function(){var a=arguments;return n.Deferred(function(c){n.each(b,function(b,f){var g=n.isFunction(a[b])&&a[b];e[f[1]](function(){var a=g&&g.apply(this,arguments);a&&n.isFunction(a.promise)?a.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[f[0]+"With"](this===d?c.promise():this,g?[a]:arguments)})}),a=null}).promise()},promise:function(a){return null!=a?n.extend(a,d):d}},e={};return d.pipe=d.then,n.each(b,function(a,f){var g=f[2],h=f[3];d[f[1]]=g.add,h&&g.add(function(){c=h},b[1^a][2].disable,b[2][2].lock),e[f[0]]=function(){return e[f[0]+"With"](this===e?d:this,arguments),this},e[f[0]+"With"]=g.fireWith}),d.promise(e),a&&a.call(e,e),e},when:function(a){var b=0,c=d.call(arguments),e=c.length,f=1!==e||a&&n.isFunction(a.promise)?e:0,g=1===f?a:n.Deferred(),h=function(a,b,c){return function(e){b[a]=this,c[a]=arguments.length>1?d.call(arguments):e,c===i?g.notifyWith(b,c):--f||g.resolveWith(b,c)}},i,j,k;if(e>1)for(i=new Array(e),j=new Array(e),k=new Array(e);e>b;b++)c[b]&&n.isFunction(c[b].promise)?c[b].promise().done(h(b,k,c)).fail(g.reject).progress(h(b,j,i)):--f;return f||g.resolveWith(k,c),g.promise()}});var H;n.fn.ready=function(a){return n.ready.promise().done(a),this},n.extend({isReady:!1,readyWait:1,holdReady:function(a){a?n.readyWait++:n.ready(!0)},ready:function(a){(a===!0?--n.readyWait:n.isReady)||(n.isReady=!0,a!==!0&&--n.readyWait>0||(H.resolveWith(l,[n]),n.fn.triggerHandler&&(n(l).triggerHandler("ready"),n(l).off("ready"))))}});function I(){l.removeEventListener("DOMContentLoaded",I,!1),a.removeEventListener("load",I,!1),n.ready()}n.ready.promise=function(b){return H||(H=n.Deferred(),"complete"===l.readyState?setTimeout(n.ready):(l.addEventListener("DOMContentLoaded",I,!1),a.addEventListener("load",I,!1))),H.promise(b)},n.ready.promise();var J=n.access=function(a,b,c,d,e,f,g){var h=0,i=a.length,j=null==c;if("object"===n.type(c)){e=!0;for(h in c)n.access(a,b,h,c[h],!0,f,g)}else if(void 0!==d&&(e=!0,n.isFunction(d)||(g=!0),j&&(g?(b.call(a,d),b=null):(j=b,b=function(a,b,c){return j.call(n(a),c)})),b))for(;i>h;h++)b(a[h],c,g?d:d.call(a[h],h,b(a[h],c)));return e?a:j?b.call(a):i?b(a[0],c):f};n.acceptData=function(a){return 1===a.nodeType||9===a.nodeType||!+a.nodeType};function K(){Object.defineProperty(this.cache={},0,{get:function(){return{}}}),this.expando=n.expando+K.uid++}K.uid=1,K.accepts=n.acceptData,K.prototype={key:function(a){if(!K.accepts(a))return 0;var b={},c=a[this.expando];if(!c){c=K.uid++;try{b[this.expando]={value:c},Object.defineProperties(a,b)}catch(d){b[this.expando]=c,n.extend(a,b)}}return this.cache[c]||(this.cache[c]={}),c},set:function(a,b,c){var d,e=this.key(a),f=this.cache[e];if("string"==typeof b)f[b]=c;else if(n.isEmptyObject(f))n.extend(this.cache[e],b);else for(d in b)f[d]=b[d];return f},get:function(a,b){var c=this.cache[this.key(a)];return void 0===b?c:c[b]},access:function(a,b,c){var d;return void 0===b||b&&"string"==typeof b&&void 0===c?(d=this.get(a,b),void 0!==d?d:this.get(a,n.camelCase(b))):(this.set(a,b,c),void 0!==c?c:b)},remove:function(a,b){var c,d,e,f=this.key(a),g=this.cache[f];if(void 0===b)this.cache[f]={};else{n.isArray(b)?d=b.concat(b.map(n.camelCase)):(e=n.camelCase(b),b in g?d=[b,e]:(d=e,d=d in g?[d]:d.match(E)||[])),c=d.length;while(c--)delete g[d[c]]}},hasData:function(a){return!n.isEmptyObject(this.cache[a[this.expando]]||{})},discard:function(a){a[this.expando]&&delete this.cache[a[this.expando]]}};var L=new K,M=new K,N=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,O=/([A-Z])/g;function P(a,b,c){var d;if(void 0===c&&1===a.nodeType)if(d="data-"+b.replace(O,"-$1").toLowerCase(),c=a.getAttribute(d),"string"==typeof c){try{c="true"===c?!0:"false"===c?!1:"null"===c?null:+c+""===c?+c:N.test(c)?n.parseJSON(c):c}catch(e){}M.set(a,b,c)}else c=void 0;return c}n.extend({hasData:function(a){return M.hasData(a)||L.hasData(a)},data:function(a,b,c){
return M.access(a,b,c)},removeData:function(a,b){M.remove(a,b)},_data:function(a,b,c){return L.access(a,b,c)},_removeData:function(a,b){L.remove(a,b)}}),n.fn.extend({data:function(a,b){var c,d,e,f=this[0],g=f&&f.attributes;if(void 0===a){if(this.length&&(e=M.get(f),1===f.nodeType&&!L.get(f,"hasDataAttrs"))){c=g.length;while(c--)g[c]&&(d=g[c].name,0===d.indexOf("data-")&&(d=n.camelCase(d.slice(5)),P(f,d,e[d])));L.set(f,"hasDataAttrs",!0)}return e}return"object"==typeof a?this.each(function(){M.set(this,a)}):J(this,function(b){var c,d=n.camelCase(a);if(f&&void 0===b){if(c=M.get(f,a),void 0!==c)return c;if(c=M.get(f,d),void 0!==c)return c;if(c=P(f,d,void 0),void 0!==c)return c}else this.each(function(){var c=M.get(this,d);M.set(this,d,b),-1!==a.indexOf("-")&&void 0!==c&&M.set(this,a,b)})},null,b,arguments.length>1,null,!0)},removeData:function(a){return this.each(function(){M.remove(this,a)})}}),n.extend({queue:function(a,b,c){var d;return a?(b=(b||"fx")+"queue",d=L.get(a,b),c&&(!d||n.isArray(c)?d=L.access(a,b,n.makeArray(c)):d.push(c)),d||[]):void 0},dequeue:function(a,b){b=b||"fx";var c=n.queue(a,b),d=c.length,e=c.shift(),f=n._queueHooks(a,b),g=function(){n.dequeue(a,b)};"inprogress"===e&&(e=c.shift(),d--),e&&("fx"===b&&c.unshift("inprogress"),delete f.stop,e.call(a,g,f)),!d&&f&&f.empty.fire()},_queueHooks:function(a,b){var c=b+"queueHooks";return L.get(a,c)||L.access(a,c,{empty:n.Callbacks("once memory").add(function(){L.remove(a,[b+"queue",c])})})}}),n.fn.extend({queue:function(a,b){var c=2;return"string"!=typeof a&&(b=a,a="fx",c--),arguments.length<c?n.queue(this[0],a):void 0===b?this:this.each(function(){var c=n.queue(this,a,b);n._queueHooks(this,a),"fx"===a&&"inprogress"!==c[0]&&n.dequeue(this,a)})},dequeue:function(a){return this.each(function(){n.dequeue(this,a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,b){var c,d=1,e=n.Deferred(),f=this,g=this.length,h=function(){--d||e.resolveWith(f,[f])};"string"!=typeof a&&(b=a,a=void 0),a=a||"fx";while(g--)c=L.get(f[g],a+"queueHooks"),c&&c.empty&&(d++,c.empty.add(h));return h(),e.promise(b)}});var Q=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,R=["Top","Right","Bottom","Left"],S=function(a,b){return a=b||a,"none"===n.css(a,"display")||!n.contains(a.ownerDocument,a)},T=/^(?:checkbox|radio)$/i;!function(){var a=l.createDocumentFragment(),b=a.appendChild(l.createElement("div")),c=l.createElement("input");c.setAttribute("type","radio"),c.setAttribute("checked","checked"),c.setAttribute("name","t"),b.appendChild(c),k.checkClone=b.cloneNode(!0).cloneNode(!0).lastChild.checked,b.innerHTML="<textarea>x</textarea>",k.noCloneChecked=!!b.cloneNode(!0).lastChild.defaultValue}();var U="undefined";k.focusinBubbles="onfocusin"in a;var V=/^key/,W=/^(?:mouse|pointer|contextmenu)|click/,X=/^(?:focusinfocus|focusoutblur)$/,Y=/^([^.]*)(?:\.(.+)|)$/;function Z(){return!0}function $(){return!1}function _(){try{return l.activeElement}catch(a){}}n.event={global:{},add:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=L.get(a);if(r){c.handler&&(f=c,c=f.handler,e=f.selector),c.guid||(c.guid=n.guid++),(i=r.events)||(i=r.events={}),(g=r.handle)||(g=r.handle=function(b){return typeof n!==U&&n.event.triggered!==b.type?n.event.dispatch.apply(a,arguments):void 0}),b=(b||"").match(E)||[""],j=b.length;while(j--)h=Y.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o&&(l=n.event.special[o]||{},o=(e?l.delegateType:l.bindType)||o,l=n.event.special[o]||{},k=n.extend({type:o,origType:q,data:d,handler:c,guid:c.guid,selector:e,needsContext:e&&n.expr.match.needsContext.test(e),namespace:p.join(".")},f),(m=i[o])||(m=i[o]=[],m.delegateCount=0,l.setup&&l.setup.call(a,d,p,g)!==!1||a.addEventListener&&a.addEventListener(o,g,!1)),l.add&&(l.add.call(a,k),k.handler.guid||(k.handler.guid=c.guid)),e?m.splice(m.delegateCount++,0,k):m.push(k),n.event.global[o]=!0)}},remove:function(a,b,c,d,e){var f,g,h,i,j,k,l,m,o,p,q,r=L.hasData(a)&&L.get(a);if(r&&(i=r.events)){b=(b||"").match(E)||[""],j=b.length;while(j--)if(h=Y.exec(b[j])||[],o=q=h[1],p=(h[2]||"").split(".").sort(),o){l=n.event.special[o]||{},o=(d?l.delegateType:l.bindType)||o,m=i[o]||[],h=h[2]&&new RegExp("(^|\\.)"+p.join("\\.(?:.*\\.|)")+"(\\.|$)"),g=f=m.length;while(f--)k=m[f],!e&&q!==k.origType||c&&c.guid!==k.guid||h&&!h.test(k.namespace)||d&&d!==k.selector&&("**"!==d||!k.selector)||(m.splice(f,1),k.selector&&m.delegateCount--,l.remove&&l.remove.call(a,k));g&&!m.length&&(l.teardown&&l.teardown.call(a,p,r.handle)!==!1||n.removeEvent(a,o,r.handle),delete i[o])}else for(o in i)n.event.remove(a,o+b[j],c,d,!0);n.isEmptyObject(i)&&(delete r.handle,L.remove(a,"events"))}},trigger:function(b,c,d,e){var f,g,h,i,k,m,o,p=[d||l],q=j.call(b,"type")?b.type:b,r=j.call(b,"namespace")?b.namespace.split("."):[];if(g=h=d=d||l,3!==d.nodeType&&8!==d.nodeType&&!X.test(q+n.event.triggered)&&(q.indexOf(".")>=0&&(r=q.split("."),q=r.shift(),r.sort()),k=q.indexOf(":")<0&&"on"+q,b=b[n.expando]?b:new n.Event(q,"object"==typeof b&&b),b.isTrigger=e?2:3,b.namespace=r.join("."),b.namespace_re=b.namespace?new RegExp("(^|\\.)"+r.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,b.result=void 0,b.target||(b.target=d),c=null==c?[b]:n.makeArray(c,[b]),o=n.event.special[q]||{},e||!o.trigger||o.trigger.apply(d,c)!==!1)){if(!e&&!o.noBubble&&!n.isWindow(d)){for(i=o.delegateType||q,X.test(i+q)||(g=g.parentNode);g;g=g.parentNode)p.push(g),h=g;h===(d.ownerDocument||l)&&p.push(h.defaultView||h.parentWindow||a)}f=0;while((g=p[f++])&&!b.isPropagationStopped())b.type=f>1?i:o.bindType||q,m=(L.get(g,"events")||{})[b.type]&&L.get(g,"handle"),m&&m.apply(g,c),m=k&&g[k],m&&m.apply&&n.acceptData(g)&&(b.result=m.apply(g,c),b.result===!1&&b.preventDefault());return b.type=q,e||b.isDefaultPrevented()||o._default&&o._default.apply(p.pop(),c)!==!1||!n.acceptData(d)||k&&n.isFunction(d[q])&&!n.isWindow(d)&&(h=d[k],h&&(d[k]=null),n.event.triggered=q,d[q](),n.event.triggered=void 0,h&&(d[k]=h)),b.result}},dispatch:function(a){a=n.event.fix(a);var b,c,e,f,g,h=[],i=d.call(arguments),j=(L.get(this,"events")||{})[a.type]||[],k=n.event.special[a.type]||{};if(i[0]=a,a.delegateTarget=this,!k.preDispatch||k.preDispatch.call(this,a)!==!1){h=n.event.handlers.call(this,a,j),b=0;while((f=h[b++])&&!a.isPropagationStopped()){a.currentTarget=f.elem,c=0;while((g=f.handlers[c++])&&!a.isImmediatePropagationStopped())(!a.namespace_re||a.namespace_re.test(g.namespace))&&(a.handleObj=g,a.data=g.data,e=((n.event.special[g.origType]||{}).handle||g.handler).apply(f.elem,i),void 0!==e&&(a.result=e)===!1&&(a.preventDefault(),a.stopPropagation()))}return k.postDispatch&&k.postDispatch.call(this,a),a.result}},handlers:function(a,b){var c,d,e,f,g=[],h=b.delegateCount,i=a.target;if(h&&i.nodeType&&(!a.button||"click"!==a.type))for(;i!==this;i=i.parentNode||this)if(i.disabled!==!0||"click"!==a.type){for(d=[],c=0;h>c;c++)f=b[c],e=f.selector+" ",void 0===d[e]&&(d[e]=f.needsContext?n(e,this).index(i)>=0:n.find(e,this,null,[i]).length),d[e]&&d.push(f);d.length&&g.push({elem:i,handlers:d})}return h<b.length&&g.push({elem:this,handlers:b.slice(h)}),g},props:"altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),fixHooks:{},keyHooks:{props:"char charCode key keyCode".split(" "),filter:function(a,b){return null==a.which&&(a.which=null!=b.charCode?b.charCode:b.keyCode),a}},mouseHooks:{props:"button buttons clientX clientY offsetX offsetY pageX pageY screenX screenY toElement".split(" "),filter:function(a,b){var c,d,e,f=b.button;return null==a.pageX&&null!=b.clientX&&(c=a.target.ownerDocument||l,d=c.documentElement,e=c.body,a.pageX=b.clientX+(d&&d.scrollLeft||e&&e.scrollLeft||0)-(d&&d.clientLeft||e&&e.clientLeft||0),a.pageY=b.clientY+(d&&d.scrollTop||e&&e.scrollTop||0)-(d&&d.clientTop||e&&e.clientTop||0)),a.which||void 0===f||(a.which=1&f?1:2&f?3:4&f?2:0),a}},fix:function(a){if(a[n.expando])return a;var b,c,d,e=a.type,f=a,g=this.fixHooks[e];g||(this.fixHooks[e]=g=W.test(e)?this.mouseHooks:V.test(e)?this.keyHooks:{}),d=g.props?this.props.concat(g.props):this.props,a=new n.Event(f),b=d.length;while(b--)c=d[b],a[c]=f[c];return a.target||(a.target=l),3===a.target.nodeType&&(a.target=a.target.parentNode),g.filter?g.filter(a,f):a},special:{load:{noBubble:!0},focus:{trigger:function(){return this!==_()&&this.focus?(this.focus(),!1):void 0},delegateType:"focusin"},blur:{trigger:function(){return this===_()&&this.blur?(this.blur(),!1):void 0},delegateType:"focusout"},click:{trigger:function(){return"checkbox"===this.type&&this.click&&n.nodeName(this,"input")?(this.click(),!1):void 0},_default:function(a){return n.nodeName(a.target,"a")}},beforeunload:{postDispatch:function(a){void 0!==a.result&&a.originalEvent&&(a.originalEvent.returnValue=a.result)}}},simulate:function(a,b,c,d){var e=n.extend(new n.Event,c,{type:a,isSimulated:!0,originalEvent:{}});d?n.event.trigger(e,null,b):n.event.dispatch.call(b,e),e.isDefaultPrevented()&&c.preventDefault()}},n.removeEvent=function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)},n.Event=function(a,b){return this instanceof n.Event?(a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||void 0===a.defaultPrevented&&a.returnValue===!1?Z:$):this.type=a,b&&n.extend(this,b),this.timeStamp=a&&a.timeStamp||n.now(),void(this[n.expando]=!0)):new n.Event(a,b)},n.Event.prototype={isDefaultPrevented:$,isPropagationStopped:$,isImmediatePropagationStopped:$,preventDefault:function(){var a=this.originalEvent;this.isDefaultPrevented=Z,a&&a.preventDefault&&a.preventDefault()},stopPropagation:function(){var a=this.originalEvent;this.isPropagationStopped=Z,a&&a.stopPropagation&&a.stopPropagation()},stopImmediatePropagation:function(){var a=this.originalEvent;this.isImmediatePropagationStopped=Z,a&&a.stopImmediatePropagation&&a.stopImmediatePropagation(),this.stopPropagation()}},n.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(a,b){n.event.special[a]={delegateType:b,bindType:b,handle:function(a){var c,d=this,e=a.relatedTarget,f=a.handleObj;return(!e||e!==d&&!n.contains(d,e))&&(a.type=f.origType,c=f.handler.apply(this,arguments),a.type=b),c}}}),k.focusinBubbles||n.each({focus:"focusin",blur:"focusout"},function(a,b){var c=function(a){n.event.simulate(b,a.target,n.event.fix(a),!0)};n.event.special[b]={setup:function(){var d=this.ownerDocument||this,e=L.access(d,b);e||d.addEventListener(a,c,!0),L.access(d,b,(e||0)+1)},teardown:function(){var d=this.ownerDocument||this,e=L.access(d,b)-1;e?L.access(d,b,e):(d.removeEventListener(a,c,!0),L.remove(d,b))}}}),n.fn.extend({on:function(a,b,c,d,e){var f,g;if("object"==typeof a){"string"!=typeof b&&(c=c||b,b=void 0);for(g in a)this.on(g,b,c,a[g],e);return this}if(null==c&&null==d?(d=b,c=b=void 0):null==d&&("string"==typeof b?(d=c,c=void 0):(d=c,c=b,b=void 0)),d===!1)d=$;else if(!d)return this;return 1===e&&(f=d,d=function(a){return n().off(a),f.apply(this,arguments)},d.guid=f.guid||(f.guid=n.guid++)),this.each(function(){n.event.add(this,a,d,c,b)})},one:function(a,b,c,d){return this.on(a,b,c,d,1)},off:function(a,b,c){var d,e;if(a&&a.preventDefault&&a.handleObj)return d=a.handleObj,n(a.delegateTarget).off(d.namespace?d.origType+"."+d.namespace:d.origType,d.selector,d.handler),this;if("object"==typeof a){for(e in a)this.off(e,b,a[e]);return this}return(b===!1||"function"==typeof b)&&(c=b,b=void 0),c===!1&&(c=$),this.each(function(){n.event.remove(this,a,c,b)})},trigger:function(a,b){return this.each(function(){n.event.trigger(a,b,this)})},triggerHandler:function(a,b){var c=this[0];return c?n.event.trigger(a,b,c,!0):void 0}});var aa=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,ba=/<([\w:]+)/,ca=/<|&#?\w+;/,da=/<(?:script|style|link)/i,ea=/checked\s*(?:[^=]|=\s*.checked.)/i,fa=/^$|\/(?:java|ecma)script/i,ga=/^true\/(.*)/,ha=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,ia={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};ia.optgroup=ia.option,ia.tbody=ia.tfoot=ia.colgroup=ia.caption=ia.thead,ia.th=ia.td;function ja(a,b){return n.nodeName(a,"table")&&n.nodeName(11!==b.nodeType?b:b.firstChild,"tr")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function ka(a){return a.type=(null!==a.getAttribute("type"))+"/"+a.type,a}function la(a){var b=ga.exec(a.type);return b?a.type=b[1]:a.removeAttribute("type"),a}function ma(a,b){for(var c=0,d=a.length;d>c;c++)L.set(a[c],"globalEval",!b||L.get(b[c],"globalEval"))}function na(a,b){var c,d,e,f,g,h,i,j;if(1===b.nodeType){if(L.hasData(a)&&(f=L.access(a),g=L.set(b,f),j=f.events)){delete g.handle,g.events={};for(e in j)for(c=0,d=j[e].length;d>c;c++)n.event.add(b,e,j[e][c])}M.hasData(a)&&(h=M.access(a),i=n.extend({},h),M.set(b,i))}}function oa(a,b){var c=a.getElementsByTagName?a.getElementsByTagName(b||"*"):a.querySelectorAll?a.querySelectorAll(b||"*"):[];return void 0===b||b&&n.nodeName(a,b)?n.merge([a],c):c}function pa(a,b){var c=b.nodeName.toLowerCase();"input"===c&&T.test(a.type)?b.checked=a.checked:("input"===c||"textarea"===c)&&(b.defaultValue=a.defaultValue)}n.extend({clone:function(a,b,c){var d,e,f,g,h=a.cloneNode(!0),i=n.contains(a.ownerDocument,a);if(!(k.noCloneChecked||1!==a.nodeType&&11!==a.nodeType||n.isXMLDoc(a)))for(g=oa(h),f=oa(a),d=0,e=f.length;e>d;d++)pa(f[d],g[d]);if(b)if(c)for(f=f||oa(a),g=g||oa(h),d=0,e=f.length;e>d;d++)na(f[d],g[d]);else na(a,h);return g=oa(h,"script"),g.length>0&&ma(g,!i&&oa(a,"script")),h},buildFragment:function(a,b,c,d){for(var e,f,g,h,i,j,k=b.createDocumentFragment(),l=[],m=0,o=a.length;o>m;m++)if(e=a[m],e||0===e)if("object"===n.type(e))n.merge(l,e.nodeType?[e]:e);else if(ca.test(e)){f=f||k.appendChild(b.createElement("div")),g=(ba.exec(e)||["",""])[1].toLowerCase(),h=ia[g]||ia._default,f.innerHTML=h[1]+e.replace(aa,"<$1></$2>")+h[2],j=h[0];while(j--)f=f.lastChild;n.merge(l,f.childNodes),f=k.firstChild,f.textContent=""}else l.push(b.createTextNode(e));k.textContent="",m=0;while(e=l[m++])if((!d||-1===n.inArray(e,d))&&(i=n.contains(e.ownerDocument,e),f=oa(k.appendChild(e),"script"),i&&ma(f),c)){j=0;while(e=f[j++])fa.test(e.type||"")&&c.push(e)}return k},cleanData:function(a){for(var b,c,d,e,f=n.event.special,g=0;void 0!==(c=a[g]);g++){if(n.acceptData(c)&&(e=c[L.expando],e&&(b=L.cache[e]))){if(b.events)for(d in b.events)f[d]?n.event.remove(c,d):n.removeEvent(c,d,b.handle);L.cache[e]&&delete L.cache[e]}delete M.cache[c[M.expando]]}}}),n.fn.extend({text:function(a){return J(this,function(a){return void 0===a?n.text(this):this.empty().each(function(){(1===this.nodeType||11===this.nodeType||9===this.nodeType)&&(this.textContent=a)})},null,a,arguments.length)},append:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=ja(this,a);b.appendChild(a)}})},prepend:function(){return this.domManip(arguments,function(a){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var b=ja(this,a);b.insertBefore(a,b.firstChild)}})},before:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this)})},after:function(){return this.domManip(arguments,function(a){this.parentNode&&this.parentNode.insertBefore(a,this.nextSibling)})},remove:function(a,b){for(var c,d=a?n.filter(a,this):this,e=0;null!=(c=d[e]);e++)b||1!==c.nodeType||n.cleanData(oa(c)),c.parentNode&&(b&&n.contains(c.ownerDocument,c)&&ma(oa(c,"script")),c.parentNode.removeChild(c));return this},empty:function(){for(var a,b=0;null!=(a=this[b]);b++)1===a.nodeType&&(n.cleanData(oa(a,!1)),a.textContent="");return this},clone:function(a,b){return a=null==a?!1:a,b=null==b?a:b,this.map(function(){return n.clone(this,a,b)})},html:function(a){return J(this,function(a){var b=this[0]||{},c=0,d=this.length;if(void 0===a&&1===b.nodeType)return b.innerHTML;if("string"==typeof a&&!da.test(a)&&!ia[(ba.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(aa,"<$1></$2>");try{for(;d>c;c++)b=this[c]||{},1===b.nodeType&&(n.cleanData(oa(b,!1)),b.innerHTML=a);b=0}catch(e){}}b&&this.empty().append(a)},null,a,arguments.length)},replaceWith:function(){var a=arguments[0];return this.domManip(arguments,function(b){a=this.parentNode,n.cleanData(oa(this)),a&&a.replaceChild(b,this)}),a&&(a.length||a.nodeType)?this:this.remove()},detach:function(a){return this.remove(a,!0)},domManip:function(a,b){a=e.apply([],a);var c,d,f,g,h,i,j=0,l=this.length,m=this,o=l-1,p=a[0],q=n.isFunction(p);if(q||l>1&&"string"==typeof p&&!k.checkClone&&ea.test(p))return this.each(function(c){var d=m.eq(c);q&&(a[0]=p.call(this,c,d.html())),d.domManip(a,b)});if(l&&(c=n.buildFragment(a,this[0].ownerDocument,!1,this),d=c.firstChild,1===c.childNodes.length&&(c=d),d)){for(f=n.map(oa(c,"script"),ka),g=f.length;l>j;j++)h=c,j!==o&&(h=n.clone(h,!0,!0),g&&n.merge(f,oa(h,"script"))),b.call(this[j],h,j);if(g)for(i=f[f.length-1].ownerDocument,n.map(f,la),j=0;g>j;j++)h=f[j],fa.test(h.type||"")&&!L.access(h,"globalEval")&&n.contains(i,h)&&(h.src?n._evalUrl&&n._evalUrl(h.src):n.globalEval(h.textContent.replace(ha,"")))}return this}}),n.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){n.fn[a]=function(a){for(var c,d=[],e=n(a),g=e.length-1,h=0;g>=h;h++)c=h===g?this:this.clone(!0),n(e[h])[b](c),f.apply(d,c.get());return this.pushStack(d)}});var qa,ra={};function sa(b,c){var d,e=n(c.createElement(b)).appendTo(c.body),f=a.getDefaultComputedStyle&&(d=a.getDefaultComputedStyle(e[0]))?d.display:n.css(e[0],"display");return e.detach(),f}function ta(a){var b=l,c=ra[a];return c||(c=sa(a,b),"none"!==c&&c||(qa=(qa||n("<iframe frameborder='0' width='0' height='0'/>")).appendTo(b.documentElement),b=qa[0].contentDocument,b.write(),b.close(),c=sa(a,b),qa.detach()),ra[a]=c),c}var ua=/^margin/,va=new RegExp("^("+Q+")(?!px)[a-z%]+$","i"),wa=function(b){return b.ownerDocument.defaultView.opener?b.ownerDocument.defaultView.getComputedStyle(b,null):a.getComputedStyle(b,null)};function xa(a,b,c){var d,e,f,g,h=a.style;return c=c||wa(a),c&&(g=c.getPropertyValue(b)||c[b]),c&&(""!==g||n.contains(a.ownerDocument,a)||(g=n.style(a,b)),va.test(g)&&ua.test(b)&&(d=h.width,e=h.minWidth,f=h.maxWidth,h.minWidth=h.maxWidth=h.width=g,g=c.width,h.width=d,h.minWidth=e,h.maxWidth=f)),void 0!==g?g+"":g}function ya(a,b){return{get:function(){return a()?void delete this.get:(this.get=b).apply(this,arguments)}}}!function(){var b,c,d=l.documentElement,e=l.createElement("div"),f=l.createElement("div");if(f.style){f.style.backgroundClip="content-box",f.cloneNode(!0).style.backgroundClip="",k.clearCloneStyle="content-box"===f.style.backgroundClip,e.style.cssText="border:0;width:0;height:0;top:0;left:-9999px;margin-top:1px;position:absolute",e.appendChild(f);function g(){f.style.cssText="-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute",f.innerHTML="",d.appendChild(e);var g=a.getComputedStyle(f,null);b="1%"!==g.top,c="4px"===g.width,d.removeChild(e)}a.getComputedStyle&&n.extend(k,{pixelPosition:function(){return g(),b},boxSizingReliable:function(){return null==c&&g(),c},reliableMarginRight:function(){var b,c=f.appendChild(l.createElement("div"));return c.style.cssText=f.style.cssText="-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0",c.style.marginRight=c.style.width="0",f.style.width="1px",d.appendChild(e),b=!parseFloat(a.getComputedStyle(c,null).marginRight),d.removeChild(e),f.removeChild(c),b}})}}(),n.swap=function(a,b,c,d){var e,f,g={};for(f in b)g[f]=a.style[f],a.style[f]=b[f];e=c.apply(a,d||[]);for(f in b)a.style[f]=g[f];return e};var za=/^(none|table(?!-c[ea]).+)/,Aa=new RegExp("^("+Q+")(.*)$","i"),Ba=new RegExp("^([+-])=("+Q+")","i"),Ca={position:"absolute",visibility:"hidden",display:"block"},Da={letterSpacing:"0",fontWeight:"400"},Ea=["Webkit","O","Moz","ms"];function Fa(a,b){if(b in a)return b;var c=b[0].toUpperCase()+b.slice(1),d=b,e=Ea.length;while(e--)if(b=Ea[e]+c,b in a)return b;return d}function Ga(a,b,c){var d=Aa.exec(b);return d?Math.max(0,d[1]-(c||0))+(d[2]||"px"):b}function Ha(a,b,c,d,e){for(var f=c===(d?"border":"content")?4:"width"===b?1:0,g=0;4>f;f+=2)"margin"===c&&(g+=n.css(a,c+R[f],!0,e)),d?("content"===c&&(g-=n.css(a,"padding"+R[f],!0,e)),"margin"!==c&&(g-=n.css(a,"border"+R[f]+"Width",!0,e))):(g+=n.css(a,"padding"+R[f],!0,e),"padding"!==c&&(g+=n.css(a,"border"+R[f]+"Width",!0,e)));return g}function Ia(a,b,c){var d=!0,e="width"===b?a.offsetWidth:a.offsetHeight,f=wa(a),g="border-box"===n.css(a,"boxSizing",!1,f);if(0>=e||null==e){if(e=xa(a,b,f),(0>e||null==e)&&(e=a.style[b]),va.test(e))return e;d=g&&(k.boxSizingReliable()||e===a.style[b]),e=parseFloat(e)||0}return e+Ha(a,b,c||(g?"border":"content"),d,f)+"px"}function Ja(a,b){for(var c,d,e,f=[],g=0,h=a.length;h>g;g++)d=a[g],d.style&&(f[g]=L.get(d,"olddisplay"),c=d.style.display,b?(f[g]||"none"!==c||(d.style.display=""),""===d.style.display&&S(d)&&(f[g]=L.access(d,"olddisplay",ta(d.nodeName)))):(e=S(d),"none"===c&&e||L.set(d,"olddisplay",e?c:n.css(d,"display"))));for(g=0;h>g;g++)d=a[g],d.style&&(b&&"none"!==d.style.display&&""!==d.style.display||(d.style.display=b?f[g]||"":"none"));return a}n.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=xa(a,"opacity");return""===c?"1":c}}}},cssNumber:{columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":"cssFloat"},style:function(a,b,c,d){if(a&&3!==a.nodeType&&8!==a.nodeType&&a.style){var e,f,g,h=n.camelCase(b),i=a.style;return b=n.cssProps[h]||(n.cssProps[h]=Fa(i,h)),g=n.cssHooks[b]||n.cssHooks[h],void 0===c?g&&"get"in g&&void 0!==(e=g.get(a,!1,d))?e:i[b]:(f=typeof c,"string"===f&&(e=Ba.exec(c))&&(c=(e[1]+1)*e[2]+parseFloat(n.css(a,b)),f="number"),null!=c&&c===c&&("number"!==f||n.cssNumber[h]||(c+="px"),k.clearCloneStyle||""!==c||0!==b.indexOf("background")||(i[b]="inherit"),g&&"set"in g&&void 0===(c=g.set(a,c,d))||(i[b]=c)),void 0)}},css:function(a,b,c,d){var e,f,g,h=n.camelCase(b);return b=n.cssProps[h]||(n.cssProps[h]=Fa(a.style,h)),g=n.cssHooks[b]||n.cssHooks[h],g&&"get"in g&&(e=g.get(a,!0,c)),void 0===e&&(e=xa(a,b,d)),"normal"===e&&b in Da&&(e=Da[b]),""===c||c?(f=parseFloat(e),c===!0||n.isNumeric(f)?f||0:e):e}}),n.each(["height","width"],function(a,b){n.cssHooks[b]={get:function(a,c,d){return c?za.test(n.css(a,"display"))&&0===a.offsetWidth?n.swap(a,Ca,function(){return Ia(a,b,d)}):Ia(a,b,d):void 0},set:function(a,c,d){var e=d&&wa(a);return Ga(a,c,d?Ha(a,b,d,"border-box"===n.css(a,"boxSizing",!1,e),e):0)}}}),n.cssHooks.marginRight=ya(k.reliableMarginRight,function(a,b){return b?n.swap(a,{display:"inline-block"},xa,[a,"marginRight"]):void 0}),n.each({margin:"",padding:"",border:"Width"},function(a,b){n.cssHooks[a+b]={expand:function(c){for(var d=0,e={},f="string"==typeof c?c.split(" "):[c];4>d;d++)e[a+R[d]+b]=f[d]||f[d-2]||f[0];return e}},ua.test(a)||(n.cssHooks[a+b].set=Ga)}),n.fn.extend({css:function(a,b){return J(this,function(a,b,c){var d,e,f={},g=0;if(n.isArray(b)){for(d=wa(a),e=b.length;e>g;g++)f[b[g]]=n.css(a,b[g],!1,d);return f}return void 0!==c?n.style(a,b,c):n.css(a,b)},a,b,arguments.length>1)},show:function(){return Ja(this,!0)},hide:function(){return Ja(this)},toggle:function(a){return"boolean"==typeof a?a?this.show():this.hide():this.each(function(){S(this)?n(this).show():n(this).hide()})}});function Ka(a,b,c,d,e){return new Ka.prototype.init(a,b,c,d,e)}n.Tween=Ka,Ka.prototype={constructor:Ka,init:function(a,b,c,d,e,f){this.elem=a,this.prop=c,this.easing=e||"swing",this.options=b,this.start=this.now=this.cur(),this.end=d,this.unit=f||(n.cssNumber[c]?"":"px")},cur:function(){var a=Ka.propHooks[this.prop];return a&&a.get?a.get(this):Ka.propHooks._default.get(this)},run:function(a){var b,c=Ka.propHooks[this.prop];return this.options.duration?this.pos=b=n.easing[this.easing](a,this.options.duration*a,0,1,this.options.duration):this.pos=b=a,this.now=(this.end-this.start)*b+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),c&&c.set?c.set(this):Ka.propHooks._default.set(this),this}},Ka.prototype.init.prototype=Ka.prototype,Ka.propHooks={_default:{get:function(a){var b;return null==a.elem[a.prop]||a.elem.style&&null!=a.elem.style[a.prop]?(b=n.css(a.elem,a.prop,""),b&&"auto"!==b?b:0):a.elem[a.prop]},set:function(a){n.fx.step[a.prop]?n.fx.step[a.prop](a):a.elem.style&&(null!=a.elem.style[n.cssProps[a.prop]]||n.cssHooks[a.prop])?n.style(a.elem,a.prop,a.now+a.unit):a.elem[a.prop]=a.now}}},Ka.propHooks.scrollTop=Ka.propHooks.scrollLeft={set:function(a){a.elem.nodeType&&a.elem.parentNode&&(a.elem[a.prop]=a.now)}},n.easing={linear:function(a){return a},swing:function(a){return.5-Math.cos(a*Math.PI)/2}},n.fx=Ka.prototype.init,n.fx.step={};var La,Ma,Na=/^(?:toggle|show|hide)$/,Oa=new RegExp("^(?:([+-])=|)("+Q+")([a-z%]*)$","i"),Pa=/queueHooks$/,Qa=[Va],Ra={"*":[function(a,b){var c=this.createTween(a,b),d=c.cur(),e=Oa.exec(b),f=e&&e[3]||(n.cssNumber[a]?"":"px"),g=(n.cssNumber[a]||"px"!==f&&+d)&&Oa.exec(n.css(c.elem,a)),h=1,i=20;if(g&&g[3]!==f){f=f||g[3],e=e||[],g=+d||1;do h=h||".5",g/=h,n.style(c.elem,a,g+f);while(h!==(h=c.cur()/d)&&1!==h&&--i)}return e&&(g=c.start=+g||+d||0,c.unit=f,c.end=e[1]?g+(e[1]+1)*e[2]:+e[2]),c}]};function Sa(){return setTimeout(function(){La=void 0}),La=n.now()}function Ta(a,b){var c,d=0,e={height:a};for(b=b?1:0;4>d;d+=2-b)c=R[d],e["margin"+c]=e["padding"+c]=a;return b&&(e.opacity=e.width=a),e}function Ua(a,b,c){for(var d,e=(Ra[b]||[]).concat(Ra["*"]),f=0,g=e.length;g>f;f++)if(d=e[f].call(c,b,a))return d}function Va(a,b,c){var d,e,f,g,h,i,j,k,l=this,m={},o=a.style,p=a.nodeType&&S(a),q=L.get(a,"fxshow");c.queue||(h=n._queueHooks(a,"fx"),null==h.unqueued&&(h.unqueued=0,i=h.empty.fire,h.empty.fire=function(){h.unqueued||i()}),h.unqueued++,l.always(function(){l.always(function(){h.unqueued--,n.queue(a,"fx").length||h.empty.fire()})})),1===a.nodeType&&("height"in b||"width"in b)&&(c.overflow=[o.overflow,o.overflowX,o.overflowY],j=n.css(a,"display"),k="none"===j?L.get(a,"olddisplay")||ta(a.nodeName):j,"inline"===k&&"none"===n.css(a,"float")&&(o.display="inline-block")),c.overflow&&(o.overflow="hidden",l.always(function(){o.overflow=c.overflow[0],o.overflowX=c.overflow[1],o.overflowY=c.overflow[2]}));for(d in b)if(e=b[d],Na.exec(e)){if(delete b[d],f=f||"toggle"===e,e===(p?"hide":"show")){if("show"!==e||!q||void 0===q[d])continue;p=!0}m[d]=q&&q[d]||n.style(a,d)}else j=void 0;if(n.isEmptyObject(m))"inline"===("none"===j?ta(a.nodeName):j)&&(o.display=j);else{q?"hidden"in q&&(p=q.hidden):q=L.access(a,"fxshow",{}),f&&(q.hidden=!p),p?n(a).show():l.done(function(){n(a).hide()}),l.done(function(){var b;L.remove(a,"fxshow");for(b in m)n.style(a,b,m[b])});for(d in m)g=Ua(p?q[d]:0,d,l),d in q||(q[d]=g.start,p&&(g.end=g.start,g.start="width"===d||"height"===d?1:0))}}function Wa(a,b){var c,d,e,f,g;for(c in a)if(d=n.camelCase(c),e=b[d],f=a[c],n.isArray(f)&&(e=f[1],f=a[c]=f[0]),c!==d&&(a[d]=f,delete a[c]),g=n.cssHooks[d],g&&"expand"in g){f=g.expand(f),delete a[d];for(c in f)c in a||(a[c]=f[c],b[c]=e)}else b[d]=e}function Xa(a,b,c){var d,e,f=0,g=Qa.length,h=n.Deferred().always(function(){delete i.elem}),i=function(){if(e)return!1;for(var b=La||Sa(),c=Math.max(0,j.startTime+j.duration-b),d=c/j.duration||0,f=1-d,g=0,i=j.tweens.length;i>g;g++)j.tweens[g].run(f);return h.notifyWith(a,[j,f,c]),1>f&&i?c:(h.resolveWith(a,[j]),!1)},j=h.promise({elem:a,props:n.extend({},b),opts:n.extend(!0,{specialEasing:{}},c),originalProperties:b,originalOptions:c,startTime:La||Sa(),duration:c.duration,tweens:[],createTween:function(b,c){var d=n.Tween(a,j.opts,b,c,j.opts.specialEasing[b]||j.opts.easing);return j.tweens.push(d),d},stop:function(b){var c=0,d=b?j.tweens.length:0;if(e)return this;for(e=!0;d>c;c++)j.tweens[c].run(1);return b?h.resolveWith(a,[j,b]):h.rejectWith(a,[j,b]),this}}),k=j.props;for(Wa(k,j.opts.specialEasing);g>f;f++)if(d=Qa[f].call(j,a,k,j.opts))return d;return n.map(k,Ua,j),n.isFunction(j.opts.start)&&j.opts.start.call(a,j),n.fx.timer(n.extend(i,{elem:a,anim:j,queue:j.opts.queue})),j.progress(j.opts.progress).done(j.opts.done,j.opts.complete).fail(j.opts.fail).always(j.opts.always)}n.Animation=n.extend(Xa,{tweener:function(a,b){n.isFunction(a)?(b=a,a=["*"]):a=a.split(" ");for(var c,d=0,e=a.length;e>d;d++)c=a[d],Ra[c]=Ra[c]||[],Ra[c].unshift(b)},prefilter:function(a,b){b?Qa.unshift(a):Qa.push(a)}}),n.speed=function(a,b,c){var d=a&&"object"==typeof a?n.extend({},a):{complete:c||!c&&b||n.isFunction(a)&&a,duration:a,easing:c&&b||b&&!n.isFunction(b)&&b};return d.duration=n.fx.off?0:"number"==typeof d.duration?d.duration:d.duration in n.fx.speeds?n.fx.speeds[d.duration]:n.fx.speeds._default,(null==d.queue||d.queue===!0)&&(d.queue="fx"),d.old=d.complete,d.complete=function(){n.isFunction(d.old)&&d.old.call(this),d.queue&&n.dequeue(this,d.queue)},d},n.fn.extend({fadeTo:function(a,b,c,d){return this.filter(S).css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=n.isEmptyObject(a),f=n.speed(b,c,d),g=function(){var b=Xa(this,n.extend({},a),f);(e||L.get(this,"finish"))&&b.stop(!0)};return g.finish=g,e||f.queue===!1?this.each(g):this.queue(f.queue,g)},stop:function(a,b,c){var d=function(a){var b=a.stop;delete a.stop,b(c)};return"string"!=typeof a&&(c=b,b=a,a=void 0),b&&a!==!1&&this.queue(a||"fx",[]),this.each(function(){var b=!0,e=null!=a&&a+"queueHooks",f=n.timers,g=L.get(this);if(e)g[e]&&g[e].stop&&d(g[e]);else for(e in g)g[e]&&g[e].stop&&Pa.test(e)&&d(g[e]);for(e=f.length;e--;)f[e].elem!==this||null!=a&&f[e].queue!==a||(f[e].anim.stop(c),b=!1,f.splice(e,1));(b||!c)&&n.dequeue(this,a)})},finish:function(a){return a!==!1&&(a=a||"fx"),this.each(function(){var b,c=L.get(this),d=c[a+"queue"],e=c[a+"queueHooks"],f=n.timers,g=d?d.length:0;for(c.finish=!0,n.queue(this,a,[]),e&&e.stop&&e.stop.call(this,!0),b=f.length;b--;)f[b].elem===this&&f[b].queue===a&&(f[b].anim.stop(!0),f.splice(b,1));for(b=0;g>b;b++)d[b]&&d[b].finish&&d[b].finish.call(this);delete c.finish})}}),n.each(["toggle","show","hide"],function(a,b){var c=n.fn[b];n.fn[b]=function(a,d,e){return null==a||"boolean"==typeof a?c.apply(this,arguments):this.animate(Ta(b,!0),a,d,e)}}),n.each({slideDown:Ta("show"),slideUp:Ta("hide"),slideToggle:Ta("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){n.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),n.timers=[],n.fx.tick=function(){var a,b=0,c=n.timers;for(La=n.now();b<c.length;b++)a=c[b],a()||c[b]!==a||c.splice(b--,1);c.length||n.fx.stop(),La=void 0},n.fx.timer=function(a){n.timers.push(a),a()?n.fx.start():n.timers.pop()},n.fx.interval=13,n.fx.start=function(){Ma||(Ma=setInterval(n.fx.tick,n.fx.interval))},n.fx.stop=function(){clearInterval(Ma),Ma=null},n.fx.speeds={slow:600,fast:200,_default:400},n.fn.delay=function(a,b){return a=n.fx?n.fx.speeds[a]||a:a,b=b||"fx",this.queue(b,function(b,c){var d=setTimeout(b,a);c.stop=function(){clearTimeout(d)}})},function(){var a=l.createElement("input"),b=l.createElement("select"),c=b.appendChild(l.createElement("option"));a.type="checkbox",k.checkOn=""!==a.value,k.optSelected=c.selected,b.disabled=!0,k.optDisabled=!c.disabled,a=l.createElement("input"),a.value="t",a.type="radio",k.radioValue="t"===a.value}();var Ya,Za,$a=n.expr.attrHandle;n.fn.extend({attr:function(a,b){return J(this,n.attr,a,b,arguments.length>1)},removeAttr:function(a){return this.each(function(){n.removeAttr(this,a)})}}),n.extend({attr:function(a,b,c){var d,e,f=a.nodeType;if(a&&3!==f&&8!==f&&2!==f)return typeof a.getAttribute===U?n.prop(a,b,c):(1===f&&n.isXMLDoc(a)||(b=b.toLowerCase(),d=n.attrHooks[b]||(n.expr.match.bool.test(b)?Za:Ya)),
void 0===c?d&&"get"in d&&null!==(e=d.get(a,b))?e:(e=n.find.attr(a,b),null==e?void 0:e):null!==c?d&&"set"in d&&void 0!==(e=d.set(a,c,b))?e:(a.setAttribute(b,c+""),c):void n.removeAttr(a,b))},removeAttr:function(a,b){var c,d,e=0,f=b&&b.match(E);if(f&&1===a.nodeType)while(c=f[e++])d=n.propFix[c]||c,n.expr.match.bool.test(c)&&(a[d]=!1),a.removeAttribute(c)},attrHooks:{type:{set:function(a,b){if(!k.radioValue&&"radio"===b&&n.nodeName(a,"input")){var c=a.value;return a.setAttribute("type",b),c&&(a.value=c),b}}}}}),Za={set:function(a,b,c){return b===!1?n.removeAttr(a,c):a.setAttribute(c,c),c}},n.each(n.expr.match.bool.source.match(/\w+/g),function(a,b){var c=$a[b]||n.find.attr;$a[b]=function(a,b,d){var e,f;return d||(f=$a[b],$a[b]=e,e=null!=c(a,b,d)?b.toLowerCase():null,$a[b]=f),e}});var _a=/^(?:input|select|textarea|button)$/i;n.fn.extend({prop:function(a,b){return J(this,n.prop,a,b,arguments.length>1)},removeProp:function(a){return this.each(function(){delete this[n.propFix[a]||a]})}}),n.extend({propFix:{"for":"htmlFor","class":"className"},prop:function(a,b,c){var d,e,f,g=a.nodeType;if(a&&3!==g&&8!==g&&2!==g)return f=1!==g||!n.isXMLDoc(a),f&&(b=n.propFix[b]||b,e=n.propHooks[b]),void 0!==c?e&&"set"in e&&void 0!==(d=e.set(a,c,b))?d:a[b]=c:e&&"get"in e&&null!==(d=e.get(a,b))?d:a[b]},propHooks:{tabIndex:{get:function(a){return a.hasAttribute("tabindex")||_a.test(a.nodeName)||a.href?a.tabIndex:-1}}}}),k.optSelected||(n.propHooks.selected={get:function(a){var b=a.parentNode;return b&&b.parentNode&&b.parentNode.selectedIndex,null}}),n.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){n.propFix[this.toLowerCase()]=this});var ab=/[\t\r\n\f]/g;n.fn.extend({addClass:function(a){var b,c,d,e,f,g,h="string"==typeof a&&a,i=0,j=this.length;if(n.isFunction(a))return this.each(function(b){n(this).addClass(a.call(this,b,this.className))});if(h)for(b=(a||"").match(E)||[];j>i;i++)if(c=this[i],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(ab," "):" ")){f=0;while(e=b[f++])d.indexOf(" "+e+" ")<0&&(d+=e+" ");g=n.trim(d),c.className!==g&&(c.className=g)}return this},removeClass:function(a){var b,c,d,e,f,g,h=0===arguments.length||"string"==typeof a&&a,i=0,j=this.length;if(n.isFunction(a))return this.each(function(b){n(this).removeClass(a.call(this,b,this.className))});if(h)for(b=(a||"").match(E)||[];j>i;i++)if(c=this[i],d=1===c.nodeType&&(c.className?(" "+c.className+" ").replace(ab," "):"")){f=0;while(e=b[f++])while(d.indexOf(" "+e+" ")>=0)d=d.replace(" "+e+" "," ");g=a?n.trim(d):"",c.className!==g&&(c.className=g)}return this},toggleClass:function(a,b){var c=typeof a;return"boolean"==typeof b&&"string"===c?b?this.addClass(a):this.removeClass(a):this.each(n.isFunction(a)?function(c){n(this).toggleClass(a.call(this,c,this.className,b),b)}:function(){if("string"===c){var b,d=0,e=n(this),f=a.match(E)||[];while(b=f[d++])e.hasClass(b)?e.removeClass(b):e.addClass(b)}else(c===U||"boolean"===c)&&(this.className&&L.set(this,"__className__",this.className),this.className=this.className||a===!1?"":L.get(this,"__className__")||"")})},hasClass:function(a){for(var b=" "+a+" ",c=0,d=this.length;d>c;c++)if(1===this[c].nodeType&&(" "+this[c].className+" ").replace(ab," ").indexOf(b)>=0)return!0;return!1}});var bb=/\r/g;n.fn.extend({val:function(a){var b,c,d,e=this[0];{if(arguments.length)return d=n.isFunction(a),this.each(function(c){var e;1===this.nodeType&&(e=d?a.call(this,c,n(this).val()):a,null==e?e="":"number"==typeof e?e+="":n.isArray(e)&&(e=n.map(e,function(a){return null==a?"":a+""})),b=n.valHooks[this.type]||n.valHooks[this.nodeName.toLowerCase()],b&&"set"in b&&void 0!==b.set(this,e,"value")||(this.value=e))});if(e)return b=n.valHooks[e.type]||n.valHooks[e.nodeName.toLowerCase()],b&&"get"in b&&void 0!==(c=b.get(e,"value"))?c:(c=e.value,"string"==typeof c?c.replace(bb,""):null==c?"":c)}}}),n.extend({valHooks:{option:{get:function(a){var b=n.find.attr(a,"value");return null!=b?b:n.trim(n.text(a))}},select:{get:function(a){for(var b,c,d=a.options,e=a.selectedIndex,f="select-one"===a.type||0>e,g=f?null:[],h=f?e+1:d.length,i=0>e?h:f?e:0;h>i;i++)if(c=d[i],!(!c.selected&&i!==e||(k.optDisabled?c.disabled:null!==c.getAttribute("disabled"))||c.parentNode.disabled&&n.nodeName(c.parentNode,"optgroup"))){if(b=n(c).val(),f)return b;g.push(b)}return g},set:function(a,b){var c,d,e=a.options,f=n.makeArray(b),g=e.length;while(g--)d=e[g],(d.selected=n.inArray(d.value,f)>=0)&&(c=!0);return c||(a.selectedIndex=-1),f}}}}),n.each(["radio","checkbox"],function(){n.valHooks[this]={set:function(a,b){return n.isArray(b)?a.checked=n.inArray(n(a).val(),b)>=0:void 0}},k.checkOn||(n.valHooks[this].get=function(a){return null===a.getAttribute("value")?"on":a.value})}),n.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "),function(a,b){n.fn[b]=function(a,c){return arguments.length>0?this.on(b,null,a,c):this.trigger(b)}}),n.fn.extend({hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)},bind:function(a,b,c){return this.on(a,null,b,c)},unbind:function(a,b){return this.off(a,null,b)},delegate:function(a,b,c,d){return this.on(b,a,c,d)},undelegate:function(a,b,c){return 1===arguments.length?this.off(a,"**"):this.off(b,a||"**",c)}});var cb=n.now(),db=/\?/;n.parseJSON=function(a){return JSON.parse(a+"")},n.parseXML=function(a){var b,c;if(!a||"string"!=typeof a)return null;try{c=new DOMParser,b=c.parseFromString(a,"text/xml")}catch(d){b=void 0}return(!b||b.getElementsByTagName("parsererror").length)&&n.error("Invalid XML: "+a),b};var eb=/#.*$/,fb=/([?&])_=[^&]*/,gb=/^(.*?):[ \t]*([^\r\n]*)$/gm,hb=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,ib=/^(?:GET|HEAD)$/,jb=/^\/\//,kb=/^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,lb={},mb={},nb="*/".concat("*"),ob=a.location.href,pb=kb.exec(ob.toLowerCase())||[];function qb(a){return function(b,c){"string"!=typeof b&&(c=b,b="*");var d,e=0,f=b.toLowerCase().match(E)||[];if(n.isFunction(c))while(d=f[e++])"+"===d[0]?(d=d.slice(1)||"*",(a[d]=a[d]||[]).unshift(c)):(a[d]=a[d]||[]).push(c)}}function rb(a,b,c,d){var e={},f=a===mb;function g(h){var i;return e[h]=!0,n.each(a[h]||[],function(a,h){var j=h(b,c,d);return"string"!=typeof j||f||e[j]?f?!(i=j):void 0:(b.dataTypes.unshift(j),g(j),!1)}),i}return g(b.dataTypes[0])||!e["*"]&&g("*")}function sb(a,b){var c,d,e=n.ajaxSettings.flatOptions||{};for(c in b)void 0!==b[c]&&((e[c]?a:d||(d={}))[c]=b[c]);return d&&n.extend(!0,a,d),a}function tb(a,b,c){var d,e,f,g,h=a.contents,i=a.dataTypes;while("*"===i[0])i.shift(),void 0===d&&(d=a.mimeType||b.getResponseHeader("Content-Type"));if(d)for(e in h)if(h[e]&&h[e].test(d)){i.unshift(e);break}if(i[0]in c)f=i[0];else{for(e in c){if(!i[0]||a.converters[e+" "+i[0]]){f=e;break}g||(g=e)}f=f||g}return f?(f!==i[0]&&i.unshift(f),c[f]):void 0}function ub(a,b,c,d){var e,f,g,h,i,j={},k=a.dataTypes.slice();if(k[1])for(g in a.converters)j[g.toLowerCase()]=a.converters[g];f=k.shift();while(f)if(a.responseFields[f]&&(c[a.responseFields[f]]=b),!i&&d&&a.dataFilter&&(b=a.dataFilter(b,a.dataType)),i=f,f=k.shift())if("*"===f)f=i;else if("*"!==i&&i!==f){if(g=j[i+" "+f]||j["* "+f],!g)for(e in j)if(h=e.split(" "),h[1]===f&&(g=j[i+" "+h[0]]||j["* "+h[0]])){g===!0?g=j[e]:j[e]!==!0&&(f=h[0],k.unshift(h[1]));break}if(g!==!0)if(g&&a["throws"])b=g(b);else try{b=g(b)}catch(l){return{state:"parsererror",error:g?l:"No conversion from "+i+" to "+f}}}return{state:"success",data:b}}n.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:ob,type:"GET",isLocal:hb.test(pb[1]),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":nb,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":n.parseJSON,"text xml":n.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(a,b){return b?sb(sb(a,n.ajaxSettings),b):sb(n.ajaxSettings,a)},ajaxPrefilter:qb(lb),ajaxTransport:qb(mb),ajax:function(a,b){"object"==typeof a&&(b=a,a=void 0),b=b||{};var c,d,e,f,g,h,i,j,k=n.ajaxSetup({},b),l=k.context||k,m=k.context&&(l.nodeType||l.jquery)?n(l):n.event,o=n.Deferred(),p=n.Callbacks("once memory"),q=k.statusCode||{},r={},s={},t=0,u="canceled",v={readyState:0,getResponseHeader:function(a){var b;if(2===t){if(!f){f={};while(b=gb.exec(e))f[b[1].toLowerCase()]=b[2]}b=f[a.toLowerCase()]}return null==b?null:b},getAllResponseHeaders:function(){return 2===t?e:null},setRequestHeader:function(a,b){var c=a.toLowerCase();return t||(a=s[c]=s[c]||a,r[a]=b),this},overrideMimeType:function(a){return t||(k.mimeType=a),this},statusCode:function(a){var b;if(a)if(2>t)for(b in a)q[b]=[q[b],a[b]];else v.always(a[v.status]);return this},abort:function(a){var b=a||u;return c&&c.abort(b),x(0,b),this}};if(o.promise(v).complete=p.add,v.success=v.done,v.error=v.fail,k.url=((a||k.url||ob)+"").replace(eb,"").replace(jb,pb[1]+"//"),k.type=b.method||b.type||k.method||k.type,k.dataTypes=n.trim(k.dataType||"*").toLowerCase().match(E)||[""],null==k.crossDomain&&(h=kb.exec(k.url.toLowerCase()),k.crossDomain=!(!h||h[1]===pb[1]&&h[2]===pb[2]&&(h[3]||("http:"===h[1]?"80":"443"))===(pb[3]||("http:"===pb[1]?"80":"443")))),k.data&&k.processData&&"string"!=typeof k.data&&(k.data=n.param(k.data,k.traditional)),rb(lb,k,b,v),2===t)return v;i=n.event&&k.global,i&&0===n.active++&&n.event.trigger("ajaxStart"),k.type=k.type.toUpperCase(),k.hasContent=!ib.test(k.type),d=k.url,k.hasContent||(k.data&&(d=k.url+=(db.test(d)?"&":"?")+k.data,delete k.data),k.cache===!1&&(k.url=fb.test(d)?d.replace(fb,"$1_="+cb++):d+(db.test(d)?"&":"?")+"_="+cb++)),k.ifModified&&(n.lastModified[d]&&v.setRequestHeader("If-Modified-Since",n.lastModified[d]),n.etag[d]&&v.setRequestHeader("If-None-Match",n.etag[d])),(k.data&&k.hasContent&&k.contentType!==!1||b.contentType)&&v.setRequestHeader("Content-Type",k.contentType),v.setRequestHeader("Accept",k.dataTypes[0]&&k.accepts[k.dataTypes[0]]?k.accepts[k.dataTypes[0]]+("*"!==k.dataTypes[0]?", "+nb+"; q=0.01":""):k.accepts["*"]);for(j in k.headers)v.setRequestHeader(j,k.headers[j]);if(k.beforeSend&&(k.beforeSend.call(l,v,k)===!1||2===t))return v.abort();u="abort";for(j in{success:1,error:1,complete:1})v[j](k[j]);if(c=rb(mb,k,b,v)){v.readyState=1,i&&m.trigger("ajaxSend",[v,k]),k.async&&k.timeout>0&&(g=setTimeout(function(){v.abort("timeout")},k.timeout));try{t=1,c.send(r,x)}catch(w){if(!(2>t))throw w;x(-1,w)}}else x(-1,"No Transport");function x(a,b,f,h){var j,r,s,u,w,x=b;2!==t&&(t=2,g&&clearTimeout(g),c=void 0,e=h||"",v.readyState=a>0?4:0,j=a>=200&&300>a||304===a,f&&(u=tb(k,v,f)),u=ub(k,u,v,j),j?(k.ifModified&&(w=v.getResponseHeader("Last-Modified"),w&&(n.lastModified[d]=w),w=v.getResponseHeader("etag"),w&&(n.etag[d]=w)),204===a||"HEAD"===k.type?x="nocontent":304===a?x="notmodified":(x=u.state,r=u.data,s=u.error,j=!s)):(s=x,(a||!x)&&(x="error",0>a&&(a=0))),v.status=a,v.statusText=(b||x)+"",j?o.resolveWith(l,[r,x,v]):o.rejectWith(l,[v,x,s]),v.statusCode(q),q=void 0,i&&m.trigger(j?"ajaxSuccess":"ajaxError",[v,k,j?r:s]),p.fireWith(l,[v,x]),i&&(m.trigger("ajaxComplete",[v,k]),--n.active||n.event.trigger("ajaxStop")))}return v},getJSON:function(a,b,c){return n.get(a,b,c,"json")},getScript:function(a,b){return n.get(a,void 0,b,"script")}}),n.each(["get","post"],function(a,b){n[b]=function(a,c,d,e){return n.isFunction(c)&&(e=e||d,d=c,c=void 0),n.ajax({url:a,type:b,dataType:e,data:c,success:d})}}),n._evalUrl=function(a){return n.ajax({url:a,type:"GET",dataType:"script",async:!1,global:!1,"throws":!0})},n.fn.extend({wrapAll:function(a){var b;return n.isFunction(a)?this.each(function(b){n(this).wrapAll(a.call(this,b))}):(this[0]&&(b=n(a,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstElementChild)a=a.firstElementChild;return a}).append(this)),this)},wrapInner:function(a){return this.each(n.isFunction(a)?function(b){n(this).wrapInner(a.call(this,b))}:function(){var b=n(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){var b=n.isFunction(a);return this.each(function(c){n(this).wrapAll(b?a.call(this,c):a)})},unwrap:function(){return this.parent().each(function(){n.nodeName(this,"body")||n(this).replaceWith(this.childNodes)}).end()}}),n.expr.filters.hidden=function(a){return a.offsetWidth<=0&&a.offsetHeight<=0},n.expr.filters.visible=function(a){return!n.expr.filters.hidden(a)};var vb=/%20/g,wb=/\[\]$/,xb=/\r?\n/g,yb=/^(?:submit|button|image|reset|file)$/i,zb=/^(?:input|select|textarea|keygen)/i;function Ab(a,b,c,d){var e;if(n.isArray(b))n.each(b,function(b,e){c||wb.test(a)?d(a,e):Ab(a+"["+("object"==typeof e?b:"")+"]",e,c,d)});else if(c||"object"!==n.type(b))d(a,b);else for(e in b)Ab(a+"["+e+"]",b[e],c,d)}n.param=function(a,b){var c,d=[],e=function(a,b){b=n.isFunction(b)?b():null==b?"":b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};if(void 0===b&&(b=n.ajaxSettings&&n.ajaxSettings.traditional),n.isArray(a)||a.jquery&&!n.isPlainObject(a))n.each(a,function(){e(this.name,this.value)});else for(c in a)Ab(c,a[c],b,e);return d.join("&").replace(vb,"+")},n.fn.extend({serialize:function(){return n.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var a=n.prop(this,"elements");return a?n.makeArray(a):this}).filter(function(){var a=this.type;return this.name&&!n(this).is(":disabled")&&zb.test(this.nodeName)&&!yb.test(a)&&(this.checked||!T.test(a))}).map(function(a,b){var c=n(this).val();return null==c?null:n.isArray(c)?n.map(c,function(a){return{name:b.name,value:a.replace(xb,"\r\n")}}):{name:b.name,value:c.replace(xb,"\r\n")}}).get()}}),n.ajaxSettings.xhr=function(){try{return new XMLHttpRequest}catch(a){}};var Bb=0,Cb={},Db={0:200,1223:204},Eb=n.ajaxSettings.xhr();a.attachEvent&&a.attachEvent("onunload",function(){for(var a in Cb)Cb[a]()}),k.cors=!!Eb&&"withCredentials"in Eb,k.ajax=Eb=!!Eb,n.ajaxTransport(function(a){var b;return k.cors||Eb&&!a.crossDomain?{send:function(c,d){var e,f=a.xhr(),g=++Bb;if(f.open(a.type,a.url,a.async,a.username,a.password),a.xhrFields)for(e in a.xhrFields)f[e]=a.xhrFields[e];a.mimeType&&f.overrideMimeType&&f.overrideMimeType(a.mimeType),a.crossDomain||c["X-Requested-With"]||(c["X-Requested-With"]="XMLHttpRequest");for(e in c)f.setRequestHeader(e,c[e]);b=function(a){return function(){b&&(delete Cb[g],b=f.onload=f.onerror=null,"abort"===a?f.abort():"error"===a?d(f.status,f.statusText):d(Db[f.status]||f.status,f.statusText,"string"==typeof f.responseText?{text:f.responseText}:void 0,f.getAllResponseHeaders()))}},f.onload=b(),f.onerror=b("error"),b=Cb[g]=b("abort");try{f.send(a.hasContent&&a.data||null)}catch(h){if(b)throw h}},abort:function(){b&&b()}}:void 0}),n.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/(?:java|ecma)script/},converters:{"text script":function(a){return n.globalEval(a),a}}}),n.ajaxPrefilter("script",function(a){void 0===a.cache&&(a.cache=!1),a.crossDomain&&(a.type="GET")}),n.ajaxTransport("script",function(a){if(a.crossDomain){var b,c;return{send:function(d,e){b=n("<script>").prop({async:!0,charset:a.scriptCharset,src:a.url}).on("load error",c=function(a){b.remove(),c=null,a&&e("error"===a.type?404:200,a.type)}),l.head.appendChild(b[0])},abort:function(){c&&c()}}}});var Fb=[],Gb=/(=)\?(?=&|$)|\?\?/;n.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var a=Fb.pop()||n.expando+"_"+cb++;return this[a]=!0,a}}),n.ajaxPrefilter("json jsonp",function(b,c,d){var e,f,g,h=b.jsonp!==!1&&(Gb.test(b.url)?"url":"string"==typeof b.data&&!(b.contentType||"").indexOf("application/x-www-form-urlencoded")&&Gb.test(b.data)&&"data");return h||"jsonp"===b.dataTypes[0]?(e=b.jsonpCallback=n.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,h?b[h]=b[h].replace(Gb,"$1"+e):b.jsonp!==!1&&(b.url+=(db.test(b.url)?"&":"?")+b.jsonp+"="+e),b.converters["script json"]=function(){return g||n.error(e+" was not called"),g[0]},b.dataTypes[0]="json",f=a[e],a[e]=function(){g=arguments},d.always(function(){a[e]=f,b[e]&&(b.jsonpCallback=c.jsonpCallback,Fb.push(e)),g&&n.isFunction(f)&&f(g[0]),g=f=void 0}),"script"):void 0}),n.parseHTML=function(a,b,c){if(!a||"string"!=typeof a)return null;"boolean"==typeof b&&(c=b,b=!1),b=b||l;var d=v.exec(a),e=!c&&[];return d?[b.createElement(d[1])]:(d=n.buildFragment([a],b,e),e&&e.length&&n(e).remove(),n.merge([],d.childNodes))};var Hb=n.fn.load;n.fn.load=function(a,b,c){if("string"!=typeof a&&Hb)return Hb.apply(this,arguments);var d,e,f,g=this,h=a.indexOf(" ");return h>=0&&(d=n.trim(a.slice(h)),a=a.slice(0,h)),n.isFunction(b)?(c=b,b=void 0):b&&"object"==typeof b&&(e="POST"),g.length>0&&n.ajax({url:a,type:e,dataType:"html",data:b}).done(function(a){f=arguments,g.html(d?n("<div>").append(n.parseHTML(a)).find(d):a)}).complete(c&&function(a,b){g.each(c,f||[a.responseText,b,a])}),this},n.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(a,b){n.fn[b]=function(a){return this.on(b,a)}}),n.expr.filters.animated=function(a){return n.grep(n.timers,function(b){return a===b.elem}).length};var Ib=a.document.documentElement;function Jb(a){return n.isWindow(a)?a:9===a.nodeType&&a.defaultView}n.offset={setOffset:function(a,b,c){var d,e,f,g,h,i,j,k=n.css(a,"position"),l=n(a),m={};"static"===k&&(a.style.position="relative"),h=l.offset(),f=n.css(a,"top"),i=n.css(a,"left"),j=("absolute"===k||"fixed"===k)&&(f+i).indexOf("auto")>-1,j?(d=l.position(),g=d.top,e=d.left):(g=parseFloat(f)||0,e=parseFloat(i)||0),n.isFunction(b)&&(b=b.call(a,c,h)),null!=b.top&&(m.top=b.top-h.top+g),null!=b.left&&(m.left=b.left-h.left+e),"using"in b?b.using.call(a,m):l.css(m)}},n.fn.extend({offset:function(a){if(arguments.length)return void 0===a?this:this.each(function(b){n.offset.setOffset(this,a,b)});var b,c,d=this[0],e={top:0,left:0},f=d&&d.ownerDocument;if(f)return b=f.documentElement,n.contains(b,d)?(typeof d.getBoundingClientRect!==U&&(e=d.getBoundingClientRect()),c=Jb(f),{top:e.top+c.pageYOffset-b.clientTop,left:e.left+c.pageXOffset-b.clientLeft}):e},position:function(){if(this[0]){var a,b,c=this[0],d={top:0,left:0};return"fixed"===n.css(c,"position")?b=c.getBoundingClientRect():(a=this.offsetParent(),b=this.offset(),n.nodeName(a[0],"html")||(d=a.offset()),d.top+=n.css(a[0],"borderTopWidth",!0),d.left+=n.css(a[0],"borderLeftWidth",!0)),{top:b.top-d.top-n.css(c,"marginTop",!0),left:b.left-d.left-n.css(c,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||Ib;while(a&&!n.nodeName(a,"html")&&"static"===n.css(a,"position"))a=a.offsetParent;return a||Ib})}}),n.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(b,c){var d="pageYOffset"===c;n.fn[b]=function(e){return J(this,function(b,e,f){var g=Jb(b);return void 0===f?g?g[c]:b[e]:void(g?g.scrollTo(d?a.pageXOffset:f,d?f:a.pageYOffset):b[e]=f)},b,e,arguments.length,null)}}),n.each(["top","left"],function(a,b){n.cssHooks[b]=ya(k.pixelPosition,function(a,c){return c?(c=xa(a,b),va.test(c)?n(a).position()[b]+"px":c):void 0})}),n.each({Height:"height",Width:"width"},function(a,b){n.each({padding:"inner"+a,content:b,"":"outer"+a},function(c,d){n.fn[d]=function(d,e){var f=arguments.length&&(c||"boolean"!=typeof d),g=c||(d===!0||e===!0?"margin":"border");return J(this,function(b,c,d){var e;return n.isWindow(b)?b.document.documentElement["client"+a]:9===b.nodeType?(e=b.documentElement,Math.max(b.body["scroll"+a],e["scroll"+a],b.body["offset"+a],e["offset"+a],e["client"+a])):void 0===d?n.css(b,c,g):n.style(b,c,d,g)},b,f?d:void 0,f,null)}})}),n.fn.size=function(){return this.length},n.fn.andSelf=n.fn.addBack,"function"==typeof define&&define.amd&&define("jquery",[],function(){return n});var Kb=a.jQuery,Lb=a.$;return n.noConflict=function(b){return a.$===n&&(a.$=Lb),b&&a.jQuery===n&&(a.jQuery=Kb),n},typeof b===U&&(a.jQuery=a.$=n),n});






/**
 * Roundcube common js library
 *
 * This file is part of the Roundcube Webmail client
 *
 * @licstart  The following is the entire license notice for the
 * JavaScript code in this file.
 *
 * Copyright (c) 2005-2014, The Roundcube Dev Team
 *
 * The JavaScript code in this page is free software: you can
 * redistribute it and/or modify it under the terms of the GNU
 * General Public License (GNU GPL) as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option)
 * any later version.  The code is distributed WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.
 *
 * As additional permission under GNU GPL version 3 section 7, you
 * may distribute non-source (e.g., minimized or compacted) forms of
 * that code without the copy of the GNU GPL normally required by
 * section 4, provided you include this license notice and a URL
 * through which recipients can access the Corresponding Source.
 *
 * @licend  The above is the entire license notice
 * for the JavaScript code in this file.
 */

// Constants
var CONTROL_KEY = 1;
var SHIFT_KEY = 2;
var CONTROL_SHIFT_KEY = 3;

/**
 * Default browser check class
 * @constructor
 */
function roundcube_browser()
{
  var n = navigator;

  this.agent = n.userAgent;
  this.agent_lc = n.userAgent.toLowerCase();
  this.name = n.appName;
  this.vendor = n.vendor ? n.vendor : '';
  this.vendver = n.vendorSub ? parseFloat(n.vendorSub) : 0;
  this.product = n.product ? n.product : '';
  this.platform = String(n.platform).toLowerCase();
  this.lang = n.language ? n.language.substring(0,2) :
              n.browserLanguage ? n.browserLanguage.substring(0,2) :
              n.systemLanguage ? n.systemLanguage.substring(0,2) : 'en';

  this.win = this.platform.indexOf('win') >= 0;
  this.mac = this.platform.indexOf('mac') >= 0;
  this.linux = this.platform.indexOf('linux') >= 0;
  this.unix = this.platform.indexOf('unix') >= 0;

  this.dom = document.getElementById ? true : false;
  this.dom2 = document.addEventListener && document.removeEventListener;

  this.webkit = this.agent_lc.indexOf('applewebkit') > 0;
  this.ie = (document.all && !window.opera) || (this.win && this.agent_lc.indexOf('trident/') > 0);

  if (this.ie) {
    this.ie7 = n.appVersion.indexOf('MSIE 7') > 0;
    this.ie8 = n.appVersion.indexOf('MSIE 8') > 0;
    this.ie9 = n.appVersion.indexOf('MSIE 9') > 0;
  }
  else if (window.opera) {
    this.opera = true; // Opera < 15
    this.vendver = opera.version();
  }
  else {
    this.chrome = this.agent_lc.indexOf('chrome') > 0;
    this.opera = this.webkit && this.agent.indexOf(' OPR/') > 0; // Opera >= 15
    this.safari = !this.chrome && !this.opera && (this.webkit || this.agent_lc.indexOf('safari') > 0);
    this.konq = this.agent_lc.indexOf('konqueror') > 0;
    this.mz = this.dom && !this.chrome && !this.safari && !this.konq && !this.opera && this.agent.indexOf('Mozilla') >= 0;
    this.iphone = this.safari && (this.agent_lc.indexOf('iphone') > 0 || this.agent_lc.indexOf('ipod') > 0);
    this.ipad = this.safari && this.agent_lc.indexOf('ipad') > 0;
  }

  if (!this.vendver) {
    // common version strings
    this.vendver = /(opera|opr|khtml|chrome|safari|applewebkit|msie)(\s|\/)([0-9\.]+)/.test(this.agent_lc) ? parseFloat(RegExp.$3) : 0;

    // any other (Mozilla, Camino, IE>=11)
    if (!this.vendver)
      this.vendver = /rv:([0-9\.]+)/.test(this.agent) ? parseFloat(RegExp.$1) : 0;
  }

  // get real language out of safari's user agent
  if (this.safari && (/;\s+([a-z]{2})-[a-z]{2}\)/.test(this.agent_lc)))
    this.lang = RegExp.$1;

  this.tablet = /ipad|android|xoom|sch-i800|playbook|tablet|kindle/i.test(this.agent_lc);
  this.mobile = /iphone|ipod|blackberry|iemobile|opera mini|opera mobi|mobile/i.test(this.agent_lc);
  this.touch = this.mobile || this.tablet;
  this.cookies = n.cookieEnabled;

  // test for XMLHTTP support
  this.xmlhttp_test = function()
  {
    var activeX_test = new Function("try{var o=new ActiveXObject('Microsoft.XMLHTTP');return true;}catch(err){return false;}");
    this.xmlhttp = window.XMLHttpRequest || (('ActiveXObject' in window) && activeX_test());
    return this.xmlhttp;
  };

  // set class names to html tag according to the current user agent detection
  // this allows browser-specific css selectors like "html.chrome .someclass"
  this.set_html_class = function()
  {
    var classname = ' js';

    if (this.ie)
      classname += ' ie ie'+parseInt(this.vendver);
    else if (this.opera)
      classname += ' opera';
    else if (this.konq)
      classname += ' konqueror';
    else if (this.safari)
      classname += ' chrome';
    else if (this.chrome)
      classname += ' chrome';
    else if (this.mz)
      classname += ' mozilla';

    if (this.iphone)
      classname += ' iphone';
    else if (this.ipad)
      classname += ' ipad';
    else if (this.webkit)
      classname += ' webkit';

    if (this.mobile)
      classname += ' mobile';
    if (this.tablet)
      classname += ' tablet';

    if (document.documentElement)
      document.documentElement.className += classname;
  };
};


// static functions for DOM event handling
var rcube_event = {

/**
 * returns the event target element
 */
get_target: function(e)
{
  e = e || window.event;
  return e && e.target ? e.target : e.srcElement;
},

/**
 * returns the event key code
 */
get_keycode: function(e)
{
  e = e || window.event;
  return e && e.keyCode ? e.keyCode : (e && e.which ? e.which : 0);
},

/**
 * returns the event key code
 */
get_button: function(e)
{
  e = e || window.event;
  return e && e.button !== undefined ? e.button : (e && e.which ? e.which : 0);
},

/**
 * returns modifier key (constants defined at top of file)
 */
get_modifier: function(e)
{
  var opcode = 0;
  e = e || window.event;

  if (bw.mac && e)
    opcode += (e.metaKey && CONTROL_KEY) + (e.shiftKey && SHIFT_KEY);
  else if (e)
    opcode += (e.ctrlKey && CONTROL_KEY) + (e.shiftKey && SHIFT_KEY);

  return opcode;
},

/**
 * Return absolute mouse position of an event
 */
get_mouse_pos: function(e)
{
  if (!e) e = window.event;
  var mX = (e.pageX) ? e.pageX : e.clientX,
    mY = (e.pageY) ? e.pageY : e.clientY;

  if (document.body && document.all) {
    mX += document.body.scrollLeft;
    mY += document.body.scrollTop;
  }

  if (e._offset) {
    mX += e._offset.left;
    mY += e._offset.top;
  }

  return { x:mX, y:mY };
},

/**
 * Add an object method as event listener to a certain element
 */
add_listener: function(p)
{
  if (!p.object || !p.method)  // not enough arguments
    return;
  if (!p.element)
    p.element = document;

  if (!p.object._rc_events)
    p.object._rc_events = {};

  var key = p.event + '*' + p.method;
  if (!p.object._rc_events[key])
    p.object._rc_events[key] = function(e){ return p.object[p.method](e); };

  if (p.element.addEventListener)
    p.element.addEventListener(p.event, p.object._rc_events[key], false);
  else if (p.element.attachEvent) {
    // IE allows multiple events with the same function to be applied to the same object
    // forcibly detach the event, then attach
    p.element.detachEvent('on'+p.event, p.object._rc_events[key]);
    p.element.attachEvent('on'+p.event, p.object._rc_events[key]);
  }
  else
    p.element['on'+p.event] = p.object._rc_events[key];
},

/**
 * Remove event listener
 */
remove_listener: function(p)
{
  if (!p.element)
    p.element = document;

  var key = p.event + '*' + p.method;
  if (p.object && p.object._rc_events && p.object._rc_events[key]) {
    if (p.element.removeEventListener)
      p.element.removeEventListener(p.event, p.object._rc_events[key], false);
    else if (p.element.detachEvent)
      p.element.detachEvent('on'+p.event, p.object._rc_events[key]);
    else
      p.element['on'+p.event] = null;
  }
},

/**
 * Prevent event propagation and bubbling
 */
cancel: function(evt)
{
  var e = evt ? evt : window.event;

  if (e.preventDefault)
    e.preventDefault();
  else
    e.returnValue = false;

  if (e.stopPropagation)
    e.stopPropagation();

  e.cancelBubble = true;

  return false;
},

/**
 * Determine whether the given event was trigered from keyboard
 */
is_keyboard: function(e)
{
  return e && (
      (e.pointerType !== undefined && e.pointerType !== 'mouse') ||       // IE 11+
      (e.mozInputSource && e.mozInputSource == e.MOZ_SOURCE_KEYBOARD) ||  // Firefox
      (e.offsetX === 0 && e.offsetY === 0) || // Opera
      (!e.pageX && (e.pageY || 0) <= 0 && !e.clientX && (e.clientY || 0) <= 0) ||  // others
      (bw.ie && rcube_event._last_keyboard_event && rcube_event._last_keyboard_event.target == e.target)  // hack for IE <= 10
    );
},

/**
 * Accept event if triggered from keyboard action (e.g. <Enter>)
 */
keyboard_only: function(e)
{
  return rcube_event.is_keyboard(e) ? true : rcube_event.cancel(e);
},

touchevent: function(e)
{
  return { pageX:e.pageX, pageY:e.pageY, offsetX:e.pageX - e.target.offsetLeft, offsetY:e.pageY - e.target.offsetTop, target:e.target, istouch:true };
}

};


/**
 * rcmail objects event interface
 */
function rcube_event_engine()
{
  this._events = {};
};

rcube_event_engine.prototype = {

/**
 * Setter for object event handlers
 *
 * @param {String}   Event name
 * @param {Function} Handler function
 */
addEventListener: function(evt, func, obj)
{
  if (!this._events)
    this._events = {};
  if (!this._events[evt])
    this._events[evt] = [];

  this._events[evt].push({func:func, obj:obj ? obj : window});

  return this; // chainable
},

/**
 * Removes a specific event listener
 *
 * @param {String} Event name
 * @param {Int}    Listener ID to remove
 */
removeEventListener: function(evt, func, obj)
{
  if (obj === undefined)
    obj = window;

  for (var h,i=0; this._events && this._events[evt] && i < this._events[evt].length; i++)
    if ((h = this._events[evt][i]) && h.func == func && h.obj == obj)
      this._events[evt][i] = null;
},

/**
 * This will execute all registered event handlers
 *
 * @param {String} Event to trigger
 * @param {Object} Event object/arguments
 */
triggerEvent: function(evt, e)
{
  var ret, h;

  if (e === undefined)
    e = this;
  else if (typeof e === 'object')
    e.event = evt;

  if (!this._event_exec)
    this._event_exec = {};

  if (this._events && this._events[evt] && !this._event_exec[evt]) {
    this._event_exec[evt] = true;
    for (var i=0; i < this._events[evt].length; i++) {
      if ((h = this._events[evt][i])) {
        if (typeof h.func === 'function')
          ret = h.func.call ? h.func.call(h.obj, e) : h.func(e);
        else if (typeof h.obj[h.func] === 'function')
          ret = h.obj[h.func](e);

        // cancel event execution
        if (ret !== undefined && !ret)
          break;
      }
    }
    if (ret && ret.event) {
      try {
        delete ret.event;
      } catch (err) {
        // IE6-7 doesn't support deleting HTMLFormElement attributes (#1488017)
        $(ret).removeAttr('event');
      }
    }
  }

  delete this._event_exec[evt];

  if (e.event) {
    try {
      delete e.event;
    } catch (err) {
      // IE6-7 doesn't support deleting HTMLFormElement attributes (#1488017)
      $(e).removeAttr('event');
    }
  }

  return ret;
}

};  // end rcube_event_engine.prototype


// check if input is a valid email address
// By Cal Henderson <cal@iamcal.com>
// http://code.iamcal.com/php/rfc822/
function rcube_check_email(input, inline)
{
  if (input && window.RegExp) {
    var qtext = '[^\\x0d\\x22\\x5c\\x80-\\xff]',
      dtext = '[^\\x0d\\x5b-\\x5d\\x80-\\xff]',
      atom = '[^\\x00-\\x20\\x22\\x28\\x29\\x2c\\x2e\\x3a-\\x3c\\x3e\\x40\\x5b-\\x5d\\x7f-\\xff]+',
      quoted_pair = '\\x5c[\\x00-\\x7f]',
      quoted_string = '\\x22('+qtext+'|'+quoted_pair+')*\\x22',
      ipv4 = '\\[(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])(\.(25[0-5]|2[0-4][0-9]|1[0-9][0-9]|[1-9]?[0-9])){3}\\]',
      ipv6 = '\\[IPv6:[0-9a-f:.]+\\]',
      ip_addr = '(' + ipv4 + ')|(' + ipv6 + ')',
      // Use simplified domain matching, because we need to allow Unicode characters here
      // So, e-mail address should be validated also on server side after idn_to_ascii() use
      //domain_literal = '\\x5b('+dtext+'|'+quoted_pair+')*\\x5d',
      //sub_domain = '('+atom+'|'+domain_literal+')',
      // allow punycode/unicode top-level domain
      domain = '(('+ip_addr+')|(([^@\\x2e]+\\x2e)+([^\\x00-\\x40\\x5b-\\x60\\x7b-\\x7f]{2,}|xn--[a-z0-9]{2,})))',
      // ICANN e-mail test (http://idn.icann.org/E-mail_test)
      icann_domains = [
        '\\u0645\\u062b\\u0627\\u0644\\x2e\\u0625\\u062e\\u062a\\u0628\\u0627\\u0631',
        '\\u4f8b\\u5b50\\x2e\\u6d4b\\u8bd5',
        '\\u4f8b\\u5b50\\x2e\\u6e2c\\u8a66',
        '\\u03c0\\u03b1\\u03c1\\u03ac\\u03b4\\u03b5\\u03b9\\u03b3\\u03bc\\u03b1\\x2e\\u03b4\\u03bf\\u03ba\\u03b9\\u03bc\\u03ae',
        '\\u0909\\u0926\\u093e\\u0939\\u0930\\u0923\\x2e\\u092a\\u0930\\u0940\\u0915\\u094d\\u0937\\u093e',
        '\\u4f8b\\u3048\\x2e\\u30c6\\u30b9\\u30c8',
        '\\uc2e4\\ub840\\x2e\\ud14c\\uc2a4\\ud2b8',
        '\\u0645\\u062b\\u0627\\u0644\\x2e\\u0622\\u0632\\u0645\\u0627\\u06cc\\u0634\u06cc',
        '\\u043f\\u0440\\u0438\\u043c\\u0435\\u0440\\x2e\\u0438\\u0441\\u043f\\u044b\\u0442\\u0430\\u043d\\u0438\\u0435',
        '\\u0b89\\u0ba4\\u0bbe\\u0bb0\\u0ba3\\u0bae\\u0bcd\\x2e\\u0baa\\u0bb0\\u0bbf\\u0b9f\\u0bcd\\u0b9a\\u0bc8',
        '\\u05d1\\u05f2\\u05b7\\u05e9\\u05e4\\u05bc\\u05d9\\u05dc\\x2e\\u05d8\\u05e2\\u05e1\\u05d8'
      ],
      icann_addr = 'mailtest\\x40('+icann_domains.join('|')+')',
      word = '('+atom+'|'+quoted_string+')',
      delim = '[,;\\s\\n]',
      local_part = word+'(\\x2e'+word+')*',
      addr_spec = '(('+local_part+'\\x40'+domain+')|('+icann_addr+'))',
      reg1 = inline ? new RegExp('(^|<|'+delim+')'+addr_spec+'($|>|'+delim+')', 'i') : new RegExp('^'+addr_spec+'$', 'i');

    return reg1.test(input) ? true : false;
  }

  return false;
};

// recursively copy an object
function rcube_clone_object(obj)
{
  var out = {};

  for (var key in obj) {
    if (obj[key] && typeof obj[key] === 'object')
      out[key] = rcube_clone_object(obj[key]);
    else
      out[key] = obj[key];
  }

  return out;
};

// make a string URL safe (and compatible with PHP's rawurlencode())
function urlencode(str)
{
  if (window.encodeURIComponent)
    return encodeURIComponent(str).replace('*', '%2A');

  return escape(str)
    .replace('+', '%2B')
    .replace('*', '%2A')
    .replace('/', '%2F')
    .replace('@', '%40');
};


// get any type of html objects by id/name
function rcube_find_object(id, d)
{
  var n, f, obj, e;

  if (!d) d = document;

  if (d.getElementById)
    if (obj = d.getElementById(id))
      return obj;

  if (!obj && d.getElementsByName && (e = d.getElementsByName(id)))
    obj = e[0];

  if (!obj && d.all)
    obj = d.all[id];

  if (!obj && d.images.length)
    obj = d.images[id];

  if (!obj && d.forms.length) {
    for (f=0; f<d.forms.length; f++) {
      if (d.forms[f].name == id)
        obj = d.forms[f];
      else if(d.forms[f].elements[id])
        obj = d.forms[f].elements[id];
    }
  }

  if (!obj && d.layers) {
    if (d.layers[id])
      obj = d.layers[id];
    for (n=0; !obj && n<d.layers.length; n++)
      obj = rcube_find_object(id, d.layers[n].document);
  }

  return obj;
};

// determine whether the mouse is over the given object or not
function rcube_mouse_is_over(ev, obj)
{
  var mouse = rcube_event.get_mouse_pos(ev),
    pos = $(obj).offset();

  return (mouse.x >= pos.left) && (mouse.x < (pos.left + obj.offsetWidth)) &&
    (mouse.y >= pos.top) && (mouse.y < (pos.top + obj.offsetHeight));
};


// cookie functions by GoogieSpell
function setCookie(name, value, expires, path, domain, secure)
{
  var curCookie = name + "=" + escape(value) +
      (expires ? "; expires=" + expires.toGMTString() : "") +
      (path ? "; path=" + path : "") +
      (domain ? "; domain=" + domain : "") +
      (secure ? "; secure" : "");

  document.cookie = curCookie;
};

function getCookie(name)
{
  var dc = document.cookie,
    prefix = name + "=",
    begin = dc.indexOf("; " + prefix);

  if (begin == -1) {
    begin = dc.indexOf(prefix);
    if (begin != 0)
      return null;
  }
  else {
    begin += 2;
  }

  var end = dc.indexOf(";", begin);
  if (end == -1)
    end = dc.length;

  return unescape(dc.substring(begin + prefix.length, end));
};

// deprecated aliases, to be removed, use rcmail.set_cookie/rcmail.get_cookie
roundcube_browser.prototype.set_cookie = setCookie;
roundcube_browser.prototype.get_cookie = getCookie;

var bw = new roundcube_browser();
bw.set_html_class();


// Add escape() method to RegExp object
// http://dev.rubyonrails.org/changeset/7271
RegExp.escape = function(str)
{
  return String(str).replace(/([.*+?^=!:${}()|[\]\/\\])/g, '\\$1');
};

// Extend Date prototype to detect Standard timezone without DST
// from http://www.michaelapproved.com/articles/timezone-detect-and-ignore-daylight-saving-time-dst/
Date.prototype.getStdTimezoneOffset = function()
{
  var m = 12,
    d = new Date(null, m, 1),
    tzo = d.getTimezoneOffset();

    while (--m) {
      d.setUTCMonth(m);
      if (tzo != d.getTimezoneOffset()) {
        return Math.max(tzo, d.getTimezoneOffset());
    }
  }

  return tzo;
}

// define String's startsWith() method for old browsers
if (!String.prototype.startsWith) {
  String.prototype.startsWith = function(search, position) {
    position = position || 0;
    return this.slice(position, search.length) === search;
  };
}

// array utility function
jQuery.last = function(arr) {
  return arr && arr.length ? arr[arr.length-1] : undefined;
}

// jQuery plugin to emulate HTML5 placeholder attributes on input elements
jQuery.fn.placeholder = function(text) {
  return this.each(function() {
    var active = false, elem = $(this);
    this.title = text;

    // Try HTML5 placeholder attribute first
    if ('placeholder' in this) {
      elem.attr('placeholder', text);
    }
    // Fallback to Javascript emulation of placeholder
    else {
      this._placeholder = text;
      elem.blur(function(e) {
        if ($.trim(elem.val()) == "")
          elem.val(text);
        elem.triggerHandler('change');
      })
      .focus(function(e) {
        if ($.trim(elem.val()) == text)
          elem.val("");
        elem.triggerHandler('change');
      })
      .change(function(e) {
        var active = elem.val() == text;
        elem[(active ? 'addClass' : 'removeClass')]('placeholder').attr('spellcheck', active);
      });

      // Do not blur currently focused element (catch exception: #1489008)
      try { active = this == document.activeElement; } catch(e) {}
      if (!active)
        elem.blur();
    }
  });
};

// function to parse query string into an object
rcube_parse_query = function(query)
{
  if (!query)
    return {};

  var params = {}, e, k, v,
    re = /([^&=]+)=?([^&]*)/g,
    decodeRE = /\+/g, // Regex for replacing addition symbol with a space
    decode = function (str) { return decodeURIComponent(str.replace(decodeRE, ' ')); };

  query = query.replace(/\?/, '');

  while (e = re.exec(query)) {
    k = decode(e[1]);
    v = decode(e[2]);

    if (k.substring(k.length - 2) === '[]') {
      k = k.substring(0, k.length - 2);
      (params[k] || (params[k] = [])).push(v);
    }
    else
      params[k] = v;
  }

  return params;
};


// Base64 code from Tyler Akins -- http://rumkin.com
var Base64 = (function () {
  var keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";

  // private method for UTF-8 encoding
  var utf8_encode = function(string) {
    string = string.replace(/\r\n/g, "\n");
    var utftext = '';

    for (var n = 0; n < string.length; n++) {
      var c = string.charCodeAt(n);

      if (c < 128) {
        utftext += String.fromCharCode(c);
      }
      else if(c > 127 && c < 2048) {
        utftext += String.fromCharCode((c >> 6) | 192);
        utftext += String.fromCharCode((c & 63) | 128);
      }
      else {
        utftext += String.fromCharCode((c >> 12) | 224);
        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
        utftext += String.fromCharCode((c & 63) | 128);
      }
    }

    return utftext;
  };

  // private method for UTF-8 decoding
  var utf8_decode = function (utftext) {
    var i = 0, string = '', c = c2 = c3 = 0;

    while (i < utftext.length) {
      c = utftext.charCodeAt(i);
      if (c < 128) {
        string += String.fromCharCode(c);
        i++;
      }
      else if (c > 191 && c < 224) {
        c2 = utftext.charCodeAt(i + 1);
        string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
        i += 2;
      }
      else {
        c2 = utftext.charCodeAt(i + 1);
        c3 = utftext.charCodeAt(i + 2);
        string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
        i += 3;
      }
    }

    return string;
  };

  var obj = {
    /**
     * Encodes a string in base64
     * @param {String} input The string to encode in base64.
     */
    encode: function (input) {
      // encode UTF8 as btoa() may fail on some characters
      input = utf8_encode(input);

      if (typeof(window.btoa) === 'function') {
        try {
          return btoa(input);
        }
        catch (e) {};
      }

      var chr1, chr2, chr3, enc1, enc2, enc3, enc4, i = 0, output = '', len = input.length;

      while (i < len) {
        chr1 = input.charCodeAt(i++);
        chr2 = input.charCodeAt(i++);
        chr3 = input.charCodeAt(i++);

        enc1 = chr1 >> 2;
        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
        enc4 = chr3 & 63;

        if (isNaN(chr2))
          enc3 = enc4 = 64;
        else if (isNaN(chr3))
          enc4 = 64;

        output = output
          + keyStr.charAt(enc1) + keyStr.charAt(enc2)
          + keyStr.charAt(enc3) + keyStr.charAt(enc4);
      }

      return output;
    },

    /**
     * Decodes a base64 string.
     * @param {String} input The string to decode.
     */
    decode: function (input) {
      if (typeof(window.atob) === 'function') {
        try {
          return utf8_decode(atob(input));
        }
        catch (e) {};
      }

      var chr1, chr2, chr3, enc1, enc2, enc3, enc4, len, i = 0, output = '';

      // remove all characters that are not A-Z, a-z, 0-9, +, /, or =
      input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
      len = input.length;

      while (i < len) {
        enc1 = keyStr.indexOf(input.charAt(i++));
        enc2 = keyStr.indexOf(input.charAt(i++));
        enc3 = keyStr.indexOf(input.charAt(i++));
        enc4 = keyStr.indexOf(input.charAt(i++));

        chr1 = (enc1 << 2) | (enc2 >> 4);
        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
        chr3 = ((enc3 & 3) << 6) | enc4;

        output = output + String.fromCharCode(chr1);

        if (enc3 != 64)
          output = output + String.fromCharCode(chr2);
        if (enc4 != 64)
          output = output + String.fromCharCode(chr3);
      }

      return utf8_decode(output);
    }
  };

  return obj;
})();






/**
 * Roundcube Webmail Client Script
 *
 * This file is part of the Roundcube Webmail client
 *
 * @licstart  The following is the entire license notice for the
 * JavaScript code in this file.
 *
 * Copyright (C) 2005-2015, The Roundcube Dev Team
 * Copyright (C) 2011-2015, Kolab Systems AG
 *
 * The JavaScript code in this page is free software: you can
 * redistribute it and/or modify it under the terms of the GNU
 * General Public License (GNU GPL) as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option)
 * any later version.  The code is distributed WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.
 *
 * As additional permission under GNU GPL version 3 section 7, you
 * may distribute non-source (e.g., minimized or compacted) forms of
 * that code without the copy of the GNU GPL normally required by
 * section 4, provided you include this license notice and a URL
 * through which recipients can access the Corresponding Source.
 *
 * @licend  The above is the entire license notice
 * for the JavaScript code in this file.
 *
 * @author Thomas Bruederli <roundcube@gmail.com>
 * @author Aleksander 'A.L.E.C' Machniak <alec@alec.pl>
 * @author Charles McNulty <charles@charlesmcnulty.com>
 *
 * @requires jquery.js, common.js, list.js
 */

function rcube_webmail()
{
  this.labels = {};
  this.buttons = {};
  this.buttons_sel = {};
  this.gui_objects = {};
  this.gui_containers = {};
  this.commands = {};
  this.command_handlers = {};
  this.onloads = [];
  this.messages = {};
  this.group2expand = {};
  this.http_request_jobs = {};
  this.menu_stack = [];

  // webmail client settings
  this.dblclick_time = 500;
  this.message_time = 5000;
  this.identifier_expr = /[^0-9a-z_-]/gi;

  // environment defaults
  this.env = {
    request_timeout: 180,  // seconds
    draft_autosave: 0,     // seconds
    comm_path: './',
    recipients_separator: ',',
    recipients_delimiter: ', ',
    popup_width: 1150,
    popup_width_small: 900
  };

  // create protected reference to myself
  this.ref = 'rcmail';
  var ref = this;

  // set jQuery ajax options
  $.ajaxSetup({
    cache: false,
    timeout: this.env.request_timeout * 1000,
    error: function(request, status, err){ ref.http_error(request, status, err); },
    beforeSend: function(xmlhttp){ xmlhttp.setRequestHeader('X-Roundcube-Request', ref.env.request_token); }
  });

  // unload fix
  $(window).on('beforeunload', function() { ref.unload = true; });

  // set environment variable(s)
  this.set_env = function(p, value)
  {
    if (p != null && typeof p === 'object' && !value)
      for (var n in p)
        this.env[n] = p[n];
    else
      this.env[p] = value;
  };

  // add a localized label to the client environment
  this.add_label = function(p, value)
  {
    if (typeof p == 'string')
      this.labels[p] = value;
    else if (typeof p == 'object')
      $.extend(this.labels, p);
  };

  // add a button to the button list
  this.register_button = function(command, id, type, act, sel, over)
  {
    var button_prop = {id:id, type:type};

    if (act) button_prop.act = act;
    if (sel) button_prop.sel = sel;
    if (over) button_prop.over = over;

    if (!this.buttons[command])
      this.buttons[command] = [];

    this.buttons[command].push(button_prop);

    if (this.loaded)
      init_button(command, button_prop);
  };

  // register a specific gui object
  this.gui_object = function(name, id)
  {
    this.gui_objects[name] = this.loaded ? rcube_find_object(id) : id;
  };

  // register a container object
  this.gui_container = function(name, id)
  {
    this.gui_containers[name] = id;
  };

  // add a GUI element (html node) to a specified container
  this.add_element = function(elm, container)
  {
    if (this.gui_containers[container] && this.gui_containers[container].jquery)
      this.gui_containers[container].append(elm);
  };

  // register an external handler for a certain command
  this.register_command = function(command, callback, enable)
  {
    this.command_handlers[command] = callback;

    if (enable)
      this.enable_command(command, true);
  };

  // execute the given script on load
  this.add_onload = function(f)
  {
    this.onloads.push(f);
  };

  // initialize webmail client
  this.init = function()
  {
    var n;
    this.task = this.env.task;

    // check browser capabilities (never use version checks here)
    if (this.env.server_error != 409 && (!bw.dom || !bw.xmlhttp_test())) {
      this.goto_url('error', '_code=0x199');
      return;
    }

    if (!this.env.blankpage)
      this.env.blankpage = this.assets_path('program/resources/blank.gif');

    // find all registered gui containers
    for (n in this.gui_containers)
      this.gui_containers[n] = $('#'+this.gui_containers[n]);

    // find all registered gui objects
    for (n in this.gui_objects)
      this.gui_objects[n] = rcube_find_object(this.gui_objects[n]);

    // clickjacking protection
    if (this.env.x_frame_options) {
      try {
        // bust frame if not allowed
        if (this.env.x_frame_options == 'deny' && top.location.href != self.location.href)
          top.location.href = self.location.href;
        else if (top.location.hostname != self.location.hostname)
          throw 1;
      } catch (e) {
        // possible clickjacking attack: disable all form elements
        $('form').each(function(){ ref.lock_form(this, true); });
        this.display_message("Blocked: possible clickjacking attack!", 'error');
        return;
      }
    }

    // init registered buttons
    this.init_buttons();

    // tell parent window that this frame is loaded
    if (this.is_framed()) {
      parent.rcmail.set_busy(false, null, parent.rcmail.env.frame_lock);
      parent.rcmail.env.frame_lock = null;
    }

    // enable general commands
    this.enable_command('close', 'logout', 'mail', 'addressbook', 'settings', 'save-pref',
      'compose', 'undo', 'about', 'switch-task', 'menu-open', 'menu-close', 'menu-save', true);

    // set active task button
    this.set_button(this.task, 'sel');

    if (this.env.permaurl)
      this.enable_command('permaurl', 'extwin', true);

    switch (this.task) {

      case 'mail':
        // enable mail commands
        this.enable_command('list', 'checkmail', 'add-contact', 'search', 'reset-search', 'collapse-folder', 'import-messages', true);

        if (this.gui_objects.messagelist) {
          this.message_list = new rcube_list_widget(this.gui_objects.messagelist, {
            multiselect:true, multiexpand:true, draggable:true, keyboard:true,
            column_movable:this.env.col_movable, dblclick_time:this.dblclick_time
            });
          this.message_list
            .addEventListener('initrow', function(o) { ref.init_message_row(o); })
            .addEventListener('dblclick', function(o) { ref.msglist_dbl_click(o); })
            .addEventListener('click', function(o) { ref.msglist_click(o); })
            .addEventListener('keypress', function(o) { ref.msglist_keypress(o); })
            .addEventListener('select', function(o) { ref.msglist_select(o); })
            .addEventListener('dragstart', function(o) { ref.drag_start(o); })
            .addEventListener('dragmove', function(e) { ref.drag_move(e); })
            .addEventListener('dragend', function(e) { ref.drag_end(e); })
            .addEventListener('expandcollapse', function(o) { ref.msglist_expand(o); })
            .addEventListener('column_replace', function(o) { ref.msglist_set_coltypes(o); })
            .addEventListener('listupdate', function(o) { ref.triggerEvent('listupdate', o); })
            .init();

          // TODO: this should go into the list-widget code
          $(this.message_list.thead).on('click', 'a.sortcol', function(e){
            return ref.command('sort', $(this).attr('rel'), this);
          });

          this.enable_command('toggle_status', 'toggle_flag', 'sort', true);
          this.enable_command('set-listmode', this.env.threads && !this.is_multifolder_listing());

          // load messages
          this.command('list');

          $(this.gui_objects.qsearchbox).val(this.env.search_text).focusin(function() { ref.message_list.blur(); });
        }

        this.set_button_titles();

        this.env.message_commands = ['show', 'reply', 'reply-all', 'reply-list',
          'move', 'copy', 'delete', 'open', 'mark', 'edit', 'viewsource',
          'print', 'load-attachment', 'download-attachment', 'show-headers', 'hide-headers', 'download',
          'forward', 'forward-inline', 'forward-attachment', 'change-format'];

        if (this.env.action == 'show' || this.env.action == 'preview') {
          this.enable_command(this.env.message_commands, this.env.uid);
          this.enable_command('reply-list', this.env.list_post);

          if (this.env.action == 'show') {
            this.http_request('pagenav', {_uid: this.env.uid, _mbox: this.env.mailbox, _search: this.env.search_request},
              this.display_message('', 'loading'));
          }

          if (this.env.blockedobjects) {
            if (this.gui_objects.remoteobjectsmsg)
              this.gui_objects.remoteobjectsmsg.style.display = 'block';
            this.enable_command('load-images', 'always-load', true);
          }

          // make preview/message frame visible
          if (this.env.action == 'preview' && this.is_framed()) {
            this.enable_command('compose', 'add-contact', false);
            parent.rcmail.show_contentframe(true);
          }

          // initialize drag-n-drop on attachments, so they can e.g.
          // be dropped into mail compose attachments in another window
          if (this.gui_objects.attachments)
            $('li > a', this.gui_objects.attachments).not('.drop').on('dragstart', function(e) {
              var n, href = this.href, dt = e.originalEvent.dataTransfer;
              if (dt) {
                // inject username to the uri
                href = href.replace(/^https?:\/\//, function(m) { return m + urlencode(ref.env.username) + '@'});
                // cleanup the node to get filename without the size test
                n = $(this).clone();
                n.children().remove();

                dt.setData('roundcube-uri', href);
                dt.setData('roundcube-name', $.trim(n.text()));
              }
            });
        }
        else if (this.env.action == 'compose') {
          this.env.address_group_stack = [];
          this.env.compose_commands = ['send-attachment', 'remove-attachment', 'send', 'cancel',
            'toggle-editor', 'list-addresses', 'pushgroup', 'search', 'reset-search', 'extwin',
            'insert-response', 'save-response', 'menu-open', 'menu-close'];

          if (this.env.drafts_mailbox)
            this.env.compose_commands.push('savedraft')

          this.enable_command(this.env.compose_commands, 'identities', 'responses', true);

          // add more commands (not enabled)
          $.merge(this.env.compose_commands, ['add-recipient', 'firstpage', 'previouspage', 'nextpage', 'lastpage']);

          if (window.googie) {
            this.env.editor_config.spellchecker = googie;
            this.env.editor_config.spellcheck_observer = function(s) { ref.spellcheck_state(); };

            this.env.compose_commands.push('spellcheck')
            this.enable_command('spellcheck', true);
          }

          // initialize HTML editor
          this.editor_init(this.env.editor_config, this.env.composebody);

          // init canned response functions
          if (this.gui_objects.responseslist) {
            $('a.insertresponse', this.gui_objects.responseslist)
              .attr('unselectable', 'on')
              .mousedown(function(e) { return rcube_event.cancel(e); })
              .on('mouseup keypress', function(e) {
                if (e.type == 'mouseup' || rcube_event.get_keycode(e) == 13) {
                  ref.command('insert-response', $(this).attr('rel'));
                  $(document.body).trigger('mouseup');  // hides the menu
                  return rcube_event.cancel(e);
                }
              });

            // avoid textarea loosing focus when hitting the save-response button/link
            $.each(this.buttons['save-response'] || [], function (i, v) {
              $('#' + v.id).mousedown(function(e){ return rcube_event.cancel(e); })
            });
          }

          // init message compose form
          this.init_messageform();
        }
        else if (this.env.action == 'get') {
          this.enable_command('download', true);

          // Mozilla's PDF.js viewer does not allow printing from host page (#5125)
          // to minimize user confusion we disable the Print button
          if (bw.mz && this.env.mimetype == 'application/pdf') {
            n = 0; // there will be two onload events, first for the preload page
            $(this.gui_objects.messagepartframe).on('load', function() {
              if (n++) try { this.contentWindow.document; ref.enable_command('print', true); }
                catch (e) {/* ignore */}
            });
          }
          else
            this.enable_command('print', true);
        }
        // show printing dialog
        else if (this.env.action == 'print' && this.env.uid
          && !this.env.is_pgp_content && !this.env.pgp_mime_part
        ) {
          this.print_dialog();
        }

        // get unread count for each mailbox
        if (this.gui_objects.mailboxlist) {
          this.env.unread_counts = {};
          this.gui_objects.folderlist = this.gui_objects.mailboxlist;
          this.http_request('getunread', {_page: this.env.current_page});
        }

        // init address book widget
        if (this.gui_objects.contactslist) {
          this.contact_list = new rcube_list_widget(this.gui_objects.contactslist,
            { multiselect:true, draggable:false, keyboard:true });
          this.contact_list
            .addEventListener('initrow', function(o) { ref.triggerEvent('insertrow', { cid:o.uid, row:o }); })
            .addEventListener('select', function(o) { ref.compose_recipient_select(o); })
            .addEventListener('dblclick', function(o) { ref.compose_add_recipient(); })
            .addEventListener('keypress', function(o) {
              if (o.key_pressed == o.ENTER_KEY) {
                if (!ref.compose_add_recipient()) {
                  // execute link action on <enter> if not a recipient entry
                  if (o.last_selected && String(o.last_selected).charAt(0) == 'G') {
                    $(o.rows[o.last_selected].obj).find('a').first().click();
                  }
                }
              }
            })
            .init();

          // remember last focused address field
          $('#_to,#_cc,#_bcc').focus(function() { ref.env.focused_field = this; });
        }

        if (this.gui_objects.addressbookslist) {
          this.gui_objects.folderlist = this.gui_objects.addressbookslist;
          this.enable_command('list-addresses', true);
        }

        // ask user to send MDN
        if (this.env.mdn_request && this.env.uid) {
          var postact = 'sendmdn',
            postdata = {_uid: this.env.uid, _mbox: this.env.mailbox};
          if (!confirm(this.get_label('mdnrequest'))) {
            postdata._flag = 'mdnsent';
            postact = 'mark';
          }
          this.http_post(postact, postdata);
        }

        this.check_mailvelope(this.env.action);

        // detect browser capabilities
        if (!this.is_framed() && !this.env.extwin)
          this.browser_capabilities_check();

        break;

      case 'addressbook':
        this.env.address_group_stack = [];

        if (this.gui_objects.folderlist)
          this.env.contactfolders = $.extend($.extend({}, this.env.address_sources), this.env.contactgroups);

        this.enable_command('add', 'import', this.env.writable_source);
        this.enable_command('list', 'listgroup', 'pushgroup', 'popgroup', 'listsearch', 'search', 'reset-search', 'advanced-search', true);

        if (this.gui_objects.contactslist) {
          this.contact_list = new rcube_list_widget(this.gui_objects.contactslist,
            {multiselect:true, draggable:this.gui_objects.folderlist?true:false, keyboard:true});
          this.contact_list
            .addEventListener('initrow', function(o) { ref.triggerEvent('insertrow', { cid:o.uid, row:o }); })
            .addEventListener('keypress', function(o) { ref.contactlist_keypress(o); })
            .addEventListener('select', function(o) { ref.contactlist_select(o); })
            .addEventListener('dragstart', function(o) { ref.drag_start(o); })
            .addEventListener('dragmove', function(e) { ref.drag_move(e); })
            .addEventListener('dragend', function(e) { ref.drag_end(e); })
            .init();

          $(this.gui_objects.qsearchbox).focusin(function() { ref.contact_list.blur(); });

          this.update_group_commands();
          this.command('list');
        }

        if (this.gui_objects.savedsearchlist) {
          this.savedsearchlist = new rcube_treelist_widget(this.gui_objects.savedsearchlist, {
            id_prefix: 'rcmli',
            id_encode: this.html_identifier_encode,
            id_decode: this.html_identifier_decode
          });

          this.savedsearchlist.addEventListener('select', function(node) {
            ref.triggerEvent('selectfolder', { folder:node.id, prefix:'rcmli' }); });
        }

        this.set_page_buttons();

        if (this.env.cid) {
          this.enable_command('show', 'edit', true);
          // register handlers for group assignment via checkboxes
          if (this.gui_objects.editform) {
            $('input.groupmember').change(function() {
              ref.group_member_change(this.checked ? 'add' : 'del', ref.env.cid, ref.env.source, this.value);
            });
          }
        }

        if (this.gui_objects.editform) {
          this.enable_command('save', true);
          if (this.env.action == 'add' || this.env.action == 'edit' || this.env.action == 'search')
              this.init_contact_form();
        }
        else if (this.env.action == 'print') {
          this.print_dialog();
        }

        break;

      case 'settings':
        this.enable_command('preferences', 'identities', 'responses', 'save', 'folders', true);

        if (this.env.action == 'identities') {
          this.enable_command('add', this.env.identities_level < 2);
        }
        else if (this.env.action == 'edit-identity' || this.env.action == 'add-identity') {
          this.enable_command('save', 'edit', 'toggle-editor', true);
          this.enable_command('delete', this.env.identities_level < 2);

          // initialize HTML editor
          this.editor_init(this.env.editor_config, 'rcmfd_signature');
        }
        else if (this.env.action == 'folders') {
          this.enable_command('subscribe', 'unsubscribe', 'create-folder', 'rename-folder', true);
        }
        else if (this.env.action == 'edit-folder' && this.gui_objects.editform) {
          this.enable_command('save', 'folder-size', true);
          parent.rcmail.env.exists = this.env.messagecount;
          parent.rcmail.enable_command('purge', this.env.messagecount);
        }
        else if (this.env.action == 'responses') {
          this.enable_command('add', true);
        }

        if (this.gui_objects.identitieslist) {
          this.identity_list = new rcube_list_widget(this.gui_objects.identitieslist,
            {multiselect:false, draggable:false, keyboard:true});
          this.identity_list
            .addEventListener('select', function(o) { ref.identity_select(o); })
            .addEventListener('keypress', function(o) {
              if (o.key_pressed == o.ENTER_KEY) {
                ref.identity_select(o);
              }
            })
            .init()
            .focus();
        }
        else if (this.gui_objects.sectionslist) {
          this.sections_list = new rcube_list_widget(this.gui_objects.sectionslist, {multiselect:false, draggable:false, keyboard:true});
          this.sections_list
            .addEventListener('select', function(o) { ref.section_select(o); })
            .addEventListener('keypress', function(o) { if (o.key_pressed == o.ENTER_KEY) ref.section_select(o); })
            .init()
            .focus();
        }
        else if (this.gui_objects.subscriptionlist) {
          this.init_subscription_list();
        }
        else if (this.gui_objects.responseslist) {
          this.responses_list = new rcube_list_widget(this.gui_objects.responseslist, {multiselect:false, draggable:false, keyboard:true});
          this.responses_list
            .addEventListener('select', function(list) {
              var win, id = list.get_single_selection();
              ref.enable_command('delete', !!id && $.inArray(id, ref.env.readonly_responses) < 0);
              if (id && (win = ref.get_frame_window(ref.env.contentframe))) {
                ref.set_busy(true);
                ref.location_href({ _action:'edit-response', _key:id, _framed:1 }, win);
              }
            })
            .init()
            .focus();
        }

        break;

      case 'login':
        var tz, tz_name, jstz = window.jstz,
            input_user = $('#rcmloginuser'),
            input_tz = $('#rcmlogintz');

        input_user.keyup(function(e) { return ref.login_user_keyup(e); });

        if (input_user.val() == '')
          input_user.focus();
        else
          $('#rcmloginpwd').focus();

        // detect client timezone
        if (jstz && (tz = jstz.determine()))
          tz_name = tz.name();

        input_tz.val(tz_name ? tz_name : (new Date().getStdTimezoneOffset() / -60));

        // display 'loading' message on form submit, lock submit button
        $('form').submit(function () {
          $('input[type=submit]', this).prop('disabled', true);
          ref.clear_messages();
          ref.display_message('', 'loading');
        });

        this.enable_command('login', true);
        break;
    }

    // select first input field in an edit form
    if (this.gui_objects.editform)
      $("input,select,textarea", this.gui_objects.editform)
        .not(':hidden').not(':disabled').first().select().focus();

    // unset contentframe variable if preview_pane is enabled
    if (this.env.contentframe && !$('#' + this.env.contentframe).is(':visible'))
      this.env.contentframe = null;

    // prevent from form submit with Enter key in file input fields
    if (bw.ie)
      $('input[type=file]').keydown(function(e) { if (e.keyCode == '13') e.preventDefault(); });

    // flag object as complete
    this.loaded = true;
    this.env.lastrefresh = new Date();

    // show message
    if (this.pending_message)
      this.display_message.apply(this, this.pending_message);

    // init treelist widget
    if (this.gui_objects.folderlist && window.rcube_treelist_widget
      // some plugins may load rcube_treelist_widget and there's one case
      // when this will cause problems - addressbook widget in compose,
      // which already has been initialized using rcube_list_widget
      && this.gui_objects.folderlist != this.gui_objects.addressbookslist
    ) {
      this.treelist = new rcube_treelist_widget(this.gui_objects.folderlist, {
          selectable: true,
          id_prefix: 'rcmli',
          parent_focus: true,
          id_encode: this.html_identifier_encode,
          id_decode: this.html_identifier_decode,
          check_droptarget: function(node) { return !node.virtual && ref.check_droptarget(node.id) }
      });

      this.treelist
        .addEventListener('collapse', function(node) { ref.folder_collapsed(node) })
        .addEventListener('expand', function(node) { ref.folder_collapsed(node) })
        .addEventListener('beforeselect', function(node) { return !ref.busy; })
        .addEventListener('select', function(node) { ref.triggerEvent('selectfolder', { folder:node.id, prefix:'rcmli' }) });
    }

    // activate html5 file drop feature (if browser supports it and if configured)
    if (this.gui_objects.filedrop && this.env.filedrop && ((window.XMLHttpRequest && XMLHttpRequest.prototype && XMLHttpRequest.prototype.sendAsBinary) || window.FormData)) {
      $(document.body).on('dragover dragleave drop', function(e) { return ref.document_drag_hover(e, e.type == 'dragover'); });
      $(this.gui_objects.filedrop).addClass('droptarget')
        .on('dragover dragleave', function(e) { return ref.file_drag_hover(e, e.type == 'dragover'); })
        .get(0).addEventListener('drop', function(e) { return ref.file_dropped(e); }, false);
    }

    // catch document (and iframe) mouse clicks
    var body_mouseup = function(e) { return ref.doc_mouse_up(e); };
    $(document.body)
      .mouseup(body_mouseup)
      .keydown(function(e) { return ref.doc_keypress(e); });

    rcube_webmail.set_iframe_events({mouseup: body_mouseup});

    // trigger init event hook
    this.triggerEvent('init', { task:this.task, action:this.env.action });

    // execute all foreign onload scripts
    // @deprecated
    for (n in this.onloads) {
      if (typeof this.onloads[n] === 'string')
        eval(this.onloads[n]);
      else if (typeof this.onloads[n] === 'function')
        this.onloads[n]();
    }

    // start keep-alive and refresh intervals
    this.start_refresh();
    this.start_keepalive();
  };

  this.log = function(msg)
  {
    if (window.console && console.log)
      console.log(msg);
  };

  /*********************************************************/
  /*********       client command interface        *********/
  /*********************************************************/

  // execute a specific command on the web client
  this.command = function(command, props, obj, event)
  {
    var ret, uid, cid, url, flag, aborted = false;

    if (obj && obj.blur && !(event && rcube_event.is_keyboard(event)))
      obj.blur();

    // do nothing if interface is locked by another command
    // with exception for searching reset and menu
    if (this.busy && !(command == 'reset-search' && this.last_command == 'search') && !command.match(/^menu-/))
      return false;

    // let the browser handle this click (shift/ctrl usually opens the link in a new window/tab)
    if ((obj && obj.href && String(obj.href).indexOf('#') < 0) && rcube_event.get_modifier(event)) {
      return true;
    }

    // command not supported or allowed
    if (!this.commands[command]) {
      // pass command to parent window
      if (this.is_framed())
        parent.rcmail.command(command, props);

      return false;
    }

    // check input before leaving compose step
    if (this.task == 'mail' && this.env.action == 'compose' && !this.env.server_error && command != 'save-pref'
      && $.inArray(command, this.env.compose_commands) < 0
    ) {
      if (!this.env.is_sent && this.cmp_hash != this.compose_field_hash() && !confirm(this.get_label('notsentwarning')))
        return false;

      // remove copy from local storage if compose screen is left intentionally
      this.remove_compose_data(this.env.compose_id);
      this.compose_skip_unsavedcheck = true;
    }

    this.last_command = command;

    // process external commands
    if (typeof this.command_handlers[command] === 'function') {
      ret = this.command_handlers[command](props, obj, event);
      return ret !== undefined ? ret : (obj ? false : true);
    }
    else if (typeof this.command_handlers[command] === 'string') {
      ret = window[this.command_handlers[command]](props, obj, event);
      return ret !== undefined ? ret : (obj ? false : true);
    }

    // trigger plugin hooks
    this.triggerEvent('actionbefore', {props:props, action:command, originalEvent:event});
    ret = this.triggerEvent('before'+command, props || event);
    if (ret !== undefined) {
      // abort if one of the handlers returned false
      if (ret === false)
        return false;
      else
        props = ret;
    }

    ret = undefined;

    // process internal command
    switch (command) {

      case 'login':
        if (this.gui_objects.loginform)
          this.gui_objects.loginform.submit();
        break;

      // commands to switch task
      case 'logout':
      case 'mail':
      case 'addressbook':
      case 'settings':
        this.switch_task(command);
        break;

      case 'about':
        this.redirect('?_task=settings&_action=about', false);
        break;

      case 'permaurl':
        if (obj && obj.href && obj.target)
          return true;
        else if (this.env.permaurl)
          parent.location.href = this.env.permaurl;
        break;

      case 'extwin':
        if (this.env.action == 'compose') {
          var form = this.gui_objects.messageform,
            win = this.open_window('');

          if (win) {
            this.save_compose_form_local();
            this.compose_skip_unsavedcheck = true;
            $("input[name='_action']", form).val('compose');
            form.action = this.url('mail/compose', { _id: this.env.compose_id, _extwin: 1 });
            form.target = win.name;
            form.submit();
          }
        }
        else {
          this.open_window(this.env.permaurl, true);
        }
        break;

      case 'change-format':
        url = this.env.permaurl + '&_format=' + props;

        if (this.env.action == 'preview')
          url = url.replace(/_action=show/, '_action=preview') + '&_framed=1';
        if (this.env.extwin)
          url += '&_extwin=1';

        location.href = url;
        break;

      case 'menu-open':
        if (props && props.menu == 'attachmentmenu') {
          var mimetype = this.env.attachments[props.id];
          this.enable_command('open-attachment', mimetype && this.env.mimetypes && $.inArray(mimetype, this.env.mimetypes) >= 0);
        }
        this.show_menu(props, props.show || undefined, event);
        break;

      case 'menu-close':
        this.hide_menu(props, event);
        break;

      case 'menu-save':
        this.triggerEvent(command, {props:props, originalEvent:event});
        return false;

      case 'open':
        if (uid = this.get_single_uid()) {
          obj.href = this.url('show', this.params_from_uid(uid));
          return true;
        }
        break;

      case 'close':
        if (this.env.extwin)
          window.close();
        break;

      case 'list':
        if (props && props != '') {
          this.reset_qsearch(true);
        }
        if (this.env.action == 'compose' && this.env.extwin) {
          window.close();
        }
        else if (this.task == 'mail') {
          this.list_mailbox(props);
          this.set_button_titles();
        }
        else if (this.task == 'addressbook')
          this.list_contacts(props);
        break;

      case 'set-listmode':
        this.set_list_options(null, undefined, undefined, props == 'threads' ? 1 : 0);
        break;

      case 'sort':
        var sort_order = this.env.sort_order,
          sort_col = !this.env.disabled_sort_col ? props : this.env.sort_col;

        if (!this.env.disabled_sort_order)
          sort_order = this.env.sort_col == sort_col && sort_order == 'ASC' ? 'DESC' : 'ASC';

        // set table header and update env
        this.set_list_sorting(sort_col, sort_order);

        // reload message list
        this.list_mailbox('', '', sort_col+'_'+sort_order);
        break;

      case 'nextpage':
        this.list_page('next');
        break;

      case 'lastpage':
        this.list_page('last');
        break;

      case 'previouspage':
        this.list_page('prev');
        break;

      case 'firstpage':
        this.list_page('first');
        break;

      case 'expunge':
        if (this.env.exists)
          this.expunge_mailbox(this.env.mailbox);
        break;

      case 'purge':
      case 'empty-mailbox':
        if (this.env.exists)
          this.purge_mailbox(this.env.mailbox);
        break;

      // common commands used in multiple tasks
      case 'show':
        if (this.task == 'mail') {
          uid = this.get_single_uid();
          if (uid && (!this.env.uid || uid != this.env.uid)) {
            if (this.env.mailbox == this.env.drafts_mailbox)
              this.open_compose_step({ _draft_uid: uid, _mbox: this.env.mailbox });
            else
              this.show_message(uid);
          }
        }
        else if (this.task == 'addressbook') {
          cid = props ? props : this.get_single_cid();
          if (cid && !(this.env.action == 'show' && cid == this.env.cid))
            this.load_contact(cid, 'show');
        }
        break;

      case 'add':
        if (this.task == 'addressbook')
          this.load_contact(0, 'add');
        else if (this.task == 'settings' && this.env.action == 'responses') {
          var frame;
          if ((frame = this.get_frame_window(this.env.contentframe))) {
            this.set_busy(true);
            this.location_href({ _action:'add-response', _framed:1 }, frame);
          }
        }
        else if (this.task == 'settings') {
          this.identity_list.clear_selection();
          this.load_identity(0, 'add-identity');
        }
        break;

      case 'edit':
        if (this.task == 'addressbook' && (cid = this.get_single_cid()))
          this.load_contact(cid, 'edit');
        else if (this.task == 'settings' && props)
          this.load_identity(props, 'edit-identity');
        else if (this.task == 'mail' && (uid = this.get_single_uid())) {
          url = { _mbox: this.get_message_mailbox(uid) };
          url[this.env.mailbox == this.env.drafts_mailbox && props != 'new' ? '_draft_uid' : '_uid'] = uid;
          this.open_compose_step(url);
        }
        break;

      case 'save':
        var input, form = this.gui_objects.editform;
        if (form) {
          // adv. search
          if (this.env.action == 'search') {
          }
          // user prefs
          else if ((input = $("input[name='_pagesize']", form)) && input.length && isNaN(parseInt(input.val()))) {
            alert(this.get_label('nopagesizewarning'));
            input.focus();
            break;
          }
          // contacts/identities
          else {
            // reload form
            if (props == 'reload') {
              form.action += '&_reload=1';
            }
            else if (this.task == 'settings' && (this.env.identities_level % 2) == 0  &&
              (input = $("input[name='_email']", form)) && input.length && !rcube_check_email(input.val())
            ) {
              alert(this.get_label('noemailwarning'));
              input.focus();
              break;
            }

            // clear empty input fields
            $('input.placeholder').each(function(){ if (this.value == this._placeholder) this.value = ''; });
          }

          // add selected source (on the list)
          if (parent.rcmail && parent.rcmail.env.source)
            form.action = this.add_url(form.action, '_orig_source', parent.rcmail.env.source);

          form.submit();
        }
        break;

      case 'delete':
        // mail task
        if (this.task == 'mail')
          this.delete_messages(event);
        // addressbook task
        else if (this.task == 'addressbook')
          this.delete_contacts();
        // settings: canned response
        else if (this.task == 'settings' && this.env.action == 'responses')
          this.delete_response();
        // settings: user identities
        else if (this.task == 'settings')
          this.delete_identity();
        break;

      // mail task commands
      case 'move':
      case 'moveto': // deprecated
        if (this.task == 'mail')
          this.move_messages(props, event);
        else if (this.task == 'addressbook')
          this.move_contacts(props);
        break;

      case 'copy':
        if (this.task == 'mail')
          this.copy_messages(props, event);
        else if (this.task == 'addressbook')
          this.copy_contacts(props);
        break;

      case 'mark':
        if (props)
          this.mark_message(props);
        break;

      case 'toggle_status':
      case 'toggle_flag':
        flag = command == 'toggle_flag' ? 'flagged' : 'read';

        if (uid = props) {
          // toggle flagged/unflagged
          if (flag == 'flagged') {
            if (this.message_list.rows[uid].flagged)
              flag = 'unflagged';
          }
          // toggle read/unread
          else if (this.message_list.rows[uid].deleted)
            flag = 'undelete';
          else if (!this.message_list.rows[uid].unread)
            flag = 'unread';

          this.mark_message(flag, uid);
        }

        break;

      case 'always-load':
        if (this.env.uid && this.env.sender) {
          this.add_contact(this.env.sender);
          setTimeout(function(){ ref.command('load-images'); }, 300);
          break;
        }

      case 'load-images':
        if (this.env.uid)
          this.show_message(this.env.uid, true, this.env.action=='preview');
        break;

      case 'load-attachment':
      case 'open-attachment':
      case 'download-attachment':
        var qstring = '_mbox='+urlencode(this.env.mailbox)+'&_uid='+this.env.uid+'&_part='+props,
          mimetype = this.env.attachments[props];

        // open attachment in frame if it's of a supported mimetype
        if (command != 'download-attachment' && mimetype && this.env.mimetypes && $.inArray(mimetype, this.env.mimetypes) >= 0) {
          if (this.open_window(this.env.comm_path+'&_action=get&'+qstring+'&_frame=1'))
            break;
        }

        this.goto_url('get', qstring+'&_download=1', false, true);
        break;

      case 'select-all':
        this.select_all_mode = props ? false : true;
        this.dummy_select = true; // prevent msg opening if there's only one msg on the list
        if (props == 'invert')
          this.message_list.invert_selection();
        else
          this.message_list.select_all(props == 'page' ? '' : props);
        this.dummy_select = null;
        break;

      case 'select-none':
        this.select_all_mode = false;
        this.message_list.clear_selection();
        break;

      case 'expand-all':
        this.env.autoexpand_threads = 1;
        this.message_list.expand_all();
        break;

      case 'expand-unread':
        this.env.autoexpand_threads = 2;
        this.message_list.collapse_all();
        this.expand_unread();
        break;

      case 'collapse-all':
        this.env.autoexpand_threads = 0;
        this.message_list.collapse_all();
        break;

      case 'nextmessage':
        if (this.env.next_uid)
          this.show_message(this.env.next_uid, false, this.env.action == 'preview');
        break;

      case 'lastmessage':
        if (this.env.last_uid)
          this.show_message(this.env.last_uid);
        break;

      case 'previousmessage':
        if (this.env.prev_uid)
          this.show_message(this.env.prev_uid, false, this.env.action == 'preview');
        break;

      case 'firstmessage':
        if (this.env.first_uid)
          this.show_message(this.env.first_uid);
        break;

      case 'compose':
        url = {};

        if (this.task == 'mail') {
          url = {_mbox: this.env.mailbox, _search: this.env.search_request};
          if (props)
            url._to = props;
        }
        // modify url if we're in addressbook
        else if (this.task == 'addressbook') {
          // switch to mail compose step directly
          if (props && props.indexOf('@') > 0) {
            url._to = props;
          }
          else {
            var a_cids = [];
            // use contact id passed as command parameter
            if (props)
              a_cids.push(props);
            // get selected contacts
            else if (this.contact_list)
              a_cids = this.contact_list.get_selection();

            if (a_cids.length)
              this.http_post('mailto', { _cid: a_cids.join(','), _source: this.env.source }, true);
            else if (this.env.group)
              this.http_post('mailto', { _gid: this.env.group, _source: this.env.source }, true);

            break;
          }
        }
        else if (props && typeof props == 'string') {
          url._to = props;
        }
        else if (props && typeof props == 'object') {
          $.extend(url, props);
        }

        this.open_compose_step(url);
        break;

      case 'spellcheck':
        if (this.spellcheck_state()) {
          this.editor.spellcheck_stop();
        }
        else {
          this.editor.spellcheck_start();
        }
        break;

      case 'savedraft':
        // Reset the auto-save timer
        clearTimeout(this.save_timer);

        // compose form did not change (and draft wasn't saved already)
        if (this.env.draft_id && this.cmp_hash == this.compose_field_hash()) {
          this.auto_save_start();
          break;
        }

        this.submit_messageform(true);
        break;

      case 'send':
        if (!props.nocheck && !this.env.is_sent && !this.check_compose_input(command))
          break;

        // Reset the auto-save timer
        clearTimeout(this.save_timer);

        this.submit_messageform();
        break;

      case 'send-attachment':
        // Reset the auto-save timer
        clearTimeout(this.save_timer);

        if (!(flag = this.upload_file(props || this.gui_objects.uploadform, 'upload'))) {
          if (flag !== false)
            alert(this.get_label('selectimportfile'));
          aborted = true;
        }
        break;

      case 'insert-sig':
        this.change_identity($("[name='_from']")[0], true);
        break;

      case 'list-addresses':
        this.list_contacts(props);
        this.enable_command('add-recipient', false);
        break;

      case 'add-recipient':
        this.compose_add_recipient(props);
        break;

      case 'reply-all':
      case 'reply-list':
      case 'reply':
        if (uid = this.get_single_uid()) {
          url = {_reply_uid: uid, _mbox: this.get_message_mailbox(uid), _search: this.env.search_request};
          if (command == 'reply-all')
            // do reply-list, when list is detected and popup menu wasn't used
            url._all = (!props && this.env.reply_all_mode == 1 && this.commands['reply-list'] ? 'list' : 'all');
          else if (command == 'reply-list')
            url._all = 'list';

          this.open_compose_step(url);
        }
        break;

      case 'forward-attachment':
      case 'forward-inline':
      case 'forward':
        var uids = this.env.uid ? [this.env.uid] : (this.message_list ? this.message_list.get_selection() : []);
        if (uids.length) {
          url = { _forward_uid: this.uids_to_list(uids), _mbox: this.env.mailbox, _search: this.env.search_request };
          if (command == 'forward-attachment' || (!props && this.env.forward_attachment) || uids.length > 1)
            url._attachment = 1;
          this.open_compose_step(url);
        }
        break;

      case 'print':
        if (this.task == 'addressbook') {
          if (uid = this.contact_list.get_single_selection()) {
            url = '&_action=print&_cid=' + uid;
            if (this.env.source)
              url += '&_source=' + urlencode(this.env.source);
            this.open_window(this.env.comm_path + url, true, true);
          }
        }
        else if (this.env.action == 'get') {
          this.gui_objects.messagepartframe.contentWindow.print();
        }
        else if (uid = this.get_single_uid()) {
          url = this.url('print', this.params_from_uid(uid, {_safe: this.env.safemode ? 1 : 0}));
          if (this.open_window(url, true, true)) {
            if (this.env.action != 'show')
              this.mark_message('read', uid);
          }
        }
        break;

      case 'viewsource':
        if (uid = this.get_single_uid())
          this.open_window(this.url('viewsource', this.params_from_uid(uid)), true, true);
        break;

      case 'download':
        if (this.env.action == 'get') {
          location.href = this.secure_url(location.href.replace(/_frame=/, '_download='));
        }
        else if (uid = this.get_single_uid()) {
          this.goto_url('viewsource', this.params_from_uid(uid, {_save: 1}), false, true);
        }
        break;

      // quicksearch
      case 'search':
        if (!props && this.gui_objects.qsearchbox)
          props = this.gui_objects.qsearchbox.value;
        if (props) {
          this.qsearch(props);
          break;
        }

      // reset quicksearch
      case 'reset-search':
        var n, s = this.env.search_request || this.env.qsearch;

        this.reset_qsearch(true);

        if (s && this.env.action == 'compose') {
          if (this.contact_list)
            this.list_contacts_clear();
        }
        else if (s && this.env.mailbox) {
          this.list_mailbox(this.env.mailbox, 1);
        }
        else if (s && this.task == 'addressbook') {
          if (this.env.source == '') {
            for (n in this.env.address_sources) break;
            this.env.source = n;
            this.env.group = '';
          }
          this.list_contacts(this.env.source, this.env.group, 1);
        }
        break;

      case 'pushgroup':
        // add group ID and current search to stack
        var group = {
          id: props.id,
          search_request: this.env.search_request,
          page: this.env.current_page,
          search: this.env.search_request && this.gui_objects.qsearchbox ? this.gui_objects.qsearchbox.value : null
        };

        this.env.address_group_stack.push(group);
        if (obj && event)
          rcube_event.cancel(event);

      case 'listgroup':
        this.reset_qsearch();
        this.list_contacts(props.source, props.id, 1, group);
        break;

      case 'popgroup':
        if (this.env.address_group_stack.length) {
          var old = this.env.address_group_stack.pop();
          this.reset_qsearch();

          if (old.search_request) {
            // this code is executed when going back to the search result
            if (old.search && this.gui_objects.qsearchbox)
              $(this.gui_objects.qsearchbox).val(old.search);
            this.env.search_request = old.search_request;
            this.list_contacts_remote(null, null, this.env.current_page = old.page);
          }
          else
            this.list_contacts(props.source, this.env.address_group_stack[this.env.address_group_stack.length-1].id);
        }
        break;

      case 'import-messages':
        var form = props || this.gui_objects.importform,
          importlock = this.set_busy(true, 'importwait');

        $('input[name="_unlock"]', form).val(importlock);

        if (!(flag = this.upload_file(form, 'import', importlock))) {
          this.set_busy(false, null, importlock);
          if (flag !== false)
            alert(this.get_label('selectimportfile'));
          aborted = true;
        }
        break;

      case 'import':
        if (this.env.action == 'import' && this.gui_objects.importform) {
          var file = document.getElementById('rcmimportfile');
          if (file && !file.value) {
            alert(this.get_label('selectimportfile'));
            aborted = true;
            break;
          }
          this.gui_objects.importform.submit();
          this.set_busy(true, 'importwait');
          this.lock_form(this.gui_objects.importform, true);
        }
        else
          this.goto_url('import', (this.env.source ? '_target='+urlencode(this.env.source)+'&' : ''));
        break;

      case 'export':
        if (this.contact_list.rowcount > 0) {
          this.goto_url('export', { _source: this.env.source, _gid: this.env.group, _search: this.env.search_request }, false, true);
        }
        break;

      case 'export-selected':
        if (this.contact_list.rowcount > 0) {
          this.goto_url('export', { _source: this.env.source, _gid: this.env.group, _cid: this.contact_list.get_selection().join(',') }, false, true);
        }
        break;

      case 'upload-photo':
        this.upload_contact_photo(props || this.gui_objects.uploadform);
        break;

      case 'delete-photo':
        this.replace_contact_photo('-del-');
        break;

      // user settings commands
      case 'preferences':
      case 'identities':
      case 'responses':
      case 'folders':
        this.goto_url('settings/' + command);
        break;

      case 'undo':
        this.http_request('undo', '', this.display_message('', 'loading'));
        break;

      // unified command call (command name == function name)
      default:
        var func = command.replace(/-/g, '_');
        if (this[func] && typeof this[func] === 'function') {
          ret = this[func](props, obj, event);
        }
        break;
    }

    if (!aborted && this.triggerEvent('after'+command, props) === false)
      ret = false;
    this.triggerEvent('actionafter', { props:props, action:command, aborted:aborted, ret:ret });

    return ret === false ? false : obj ? false : true;
  };

  // set command(s) enabled or disabled
  this.enable_command = function()
  {
    var i, n, args = Array.prototype.slice.call(arguments),
      enable = args.pop(), cmd;

    for (n=0; n<args.length; n++) {
      cmd = args[n];
      // argument of type array
      if (typeof cmd === 'string') {
        this.commands[cmd] = enable;
        this.set_button(cmd, (enable ? 'act' : 'pas'));
        this.triggerEvent('enable-command', {command: cmd, status: enable});
      }
      // push array elements into commands array
      else {
        for (i in cmd)
          args.push(cmd[i]);
      }
    }
  };

  this.command_enabled = function(cmd)
  {
    return this.commands[cmd];
  };

  // lock/unlock interface
  this.set_busy = function(a, message, id)
  {
    if (a && message) {
      var msg = this.get_label(message);
      if (msg == message)
        msg = 'Loading...';

      id = this.display_message(msg, 'loading');
    }
    else if (!a && id) {
      this.hide_message(id);
    }

    this.busy = a;
    //document.body.style.cursor = a ? 'wait' : 'default';

    if (this.gui_objects.editform)
      this.lock_form(this.gui_objects.editform, a);

    return id;
  };

  // return a localized string
  this.get_label = function(name, domain)
  {
    if (domain && this.labels[domain+'.'+name])
      return this.labels[domain+'.'+name];
    else if (this.labels[name])
      return this.labels[name];
    else
      return name;
  };

  // alias for convenience reasons
  this.gettext = this.get_label;

  // switch to another application task
  this.switch_task = function(task)
  {
    if (this.task === task && task != 'mail')
      return;

    var url = this.get_task_url(task);

    if (task == 'mail')
      url += '&_mbox=INBOX';
    else if (task == 'logout' && !this.env.server_error) {
      url = this.secure_url(url);
      this.clear_compose_data();
    }

    this.redirect(url);
  };

  this.get_task_url = function(task, url)
  {
    if (!url)
      url = this.env.comm_path;

    if (url.match(/[?&]_task=[a-zA-Z0-9_-]+/))
        return url.replace(/_task=[a-zA-Z0-9_-]+/, '_task=' + task);
    else
        return url.replace(/\?.*$/, '') + '?_task=' + task;
  };

  this.reload = function(delay)
  {
    if (this.is_framed())
      parent.rcmail.reload(delay);
    else if (delay)
      setTimeout(function() { ref.reload(); }, delay);
    else if (window.location)
      location.href = this.url('', {_extwin: this.env.extwin});
  };

  // Add variable to GET string, replace old value if exists
  this.add_url = function(url, name, value)
  {
    value = urlencode(value);

    if (/(\?.*)$/.test(url)) {
      var urldata = RegExp.$1,
        datax = RegExp('((\\?|&)'+RegExp.escape(name)+'=[^&]*)');

      if (datax.test(urldata)) {
        urldata = urldata.replace(datax, RegExp.$2 + name + '=' + value);
      }
      else
        urldata += '&' + name + '=' + value

      return url.replace(/(\?.*)$/, urldata);
    }

    return url + '?' + name + '=' + value;
  };

  // append CSRF protection token to the given url
  this.secure_url = function(url)
  {
    return this.add_url(url, '_token', this.env.request_token);
  },

  this.is_framed = function()
  {
    return this.env.framed && parent.rcmail && parent.rcmail != this && typeof parent.rcmail.command == 'function';
  };

  this.save_pref = function(prop)
  {
    var request = {_name: prop.name, _value: prop.value};

    if (prop.session)
      request._session = prop.session;
    if (prop.env)
      this.env[prop.env] = prop.value;

    this.http_post('save-pref', request);
  };

  this.html_identifier = function(str, encode)
  {
    return encode ? this.html_identifier_encode(str) : String(str).replace(this.identifier_expr, '_');
  };

  this.html_identifier_encode = function(str)
  {
    return Base64.encode(String(str)).replace(/=+$/, '').replace(/\+/g, '-').replace(/\//g, '_');
  };

  this.html_identifier_decode = function(str)
  {
    str = String(str).replace(/-/g, '+').replace(/_/g, '/');

    while (str.length % 4) str += '=';

    return Base64.decode(str);
  };


  /*********************************************************/
  /*********        event handling methods         *********/
  /*********************************************************/

  this.drag_menu = function(e, target)
  {
    var modkey = rcube_event.get_modifier(e),
      menu = this.gui_objects.dragmenu;

    if (menu && modkey == SHIFT_KEY && this.commands['copy']) {
      var pos = rcube_event.get_mouse_pos(e);
      this.env.drag_target = target;
      this.show_menu(this.gui_objects.dragmenu.id, true, e);
      $(menu).css({top: (pos.y-10)+'px', left: (pos.x-10)+'px'});
      return true;
    }

    return false;
  };

  this.drag_menu_action = function(action)
  {
    var menu = this.gui_objects.dragmenu;
    if (menu) {
      $(menu).hide();
    }
    this.command(action, this.env.drag_target);
    this.env.drag_target = null;
  };

  this.drag_start = function(list)
  {
    this.drag_active = true;

    if (this.preview_timer)
      clearTimeout(this.preview_timer);
    if (this.preview_read_timer)
      clearTimeout(this.preview_read_timer);

    // prepare treelist widget for dragging interactions
    if (this.treelist)
      this.treelist.drag_start();
  };

  this.drag_end = function(e)
  {
    var list, model;

    if (this.treelist)
      this.treelist.drag_end();

    // execute drag & drop action when mouse was released
    if (list = this.message_list)
      model = this.env.mailboxes;
    else if (list = this.contact_list)
      model = this.env.contactfolders;

    if (this.drag_active && model && this.env.last_folder_target) {
      var target = model[this.env.last_folder_target];
      list.draglayer.hide();

      if (this.contact_list) {
        if (!this.contacts_drag_menu(e, target))
          this.command('move', target);
      }
      else if (!this.drag_menu(e, target))
        this.command('move', target);
    }

    this.drag_active = false;
    this.env.last_folder_target = null;
  };

  this.drag_move = function(e)
  {
    if (this.gui_objects.folderlist) {
      var drag_target, oldclass,
        layerclass = 'draglayernormal',
        mouse = rcube_event.get_mouse_pos(e);

      if (this.contact_list && this.contact_list.draglayer)
        oldclass = this.contact_list.draglayer.attr('class');

      // mouse intersects a valid drop target on the treelist
      if (this.treelist && (drag_target = this.treelist.intersects(mouse, true))) {
        this.env.last_folder_target = drag_target;
        layerclass = 'draglayer' + (this.check_droptarget(drag_target) > 1 ? 'copy' : 'normal');
      }
      else {
        // Clear target, otherwise drag end will trigger move into last valid droptarget
        this.env.last_folder_target = null;
      }

      if (layerclass != oldclass && this.contact_list && this.contact_list.draglayer)
        this.contact_list.draglayer.attr('class', layerclass);
    }
  };

  this.collapse_folder = function(name)
  {
    if (this.treelist)
      this.treelist.toggle(name);
  };

  this.folder_collapsed = function(node)
  {
    var prefname = this.env.task == 'addressbook' ? 'collapsed_abooks' : 'collapsed_folders',
      old = this.env[prefname];

    if (node.collapsed) {
      this.env[prefname] = this.env[prefname] + '&'+urlencode(node.id)+'&';

      // select the folder if one of its childs is currently selected
      // don't select if it's virtual (#1488346)
      if (!node.virtual && this.env.mailbox && this.env.mailbox.startsWith(node.id + this.env.delimiter))
        this.command('list', node.id);
    }
    else {
      var reg = new RegExp('&'+urlencode(node.id)+'&');
      this.env[prefname] = this.env[prefname].replace(reg, '');
    }

    if (!this.drag_active) {
      if (old !== this.env[prefname])
        this.command('save-pref', { name: prefname, value: this.env[prefname] });

      if (this.env.unread_counts)
        this.set_unread_count_display(node.id, false);
    }
  };

  // global mouse-click handler to cleanup some UI elements
  this.doc_mouse_up = function(e)
  {
    var list, id, target = rcube_event.get_target(e);

    // ignore event if jquery UI dialog is open
    if ($(target).closest('.ui-dialog, .ui-widget-overlay').length)
      return;

    // remove focus from list widgets
    if (window.rcube_list_widget && rcube_list_widget._instances.length) {
      $.each(rcube_list_widget._instances, function(i,list){
        if (list && !rcube_mouse_is_over(e, list.list.parentNode))
          list.blur();
      });
    }

    // reset 'pressed' buttons
    if (this.buttons_sel) {
      for (id in this.buttons_sel)
        if (typeof id !== 'function')
          this.button_out(this.buttons_sel[id], id);
      this.buttons_sel = {};
    }

    // reset popup menus; delayed to have updated menu_stack data
    setTimeout(function(e){
      var obj, skip, config, id, i, parents = $(target).parents();
      for (i = ref.menu_stack.length - 1; i >= 0; i--) {
        id = ref.menu_stack[i];
        obj = $('#' + id);

        if (obj.is(':visible')
          && target != obj.data('opener')
          && target != obj.get(0)  // check if scroll bar was clicked (#1489832)
          && !parents.is(obj.data('opener'))
          && id != skip
          && (obj.attr('data-editable') != 'true' || !$(target).parents('#' + id).length)
          && (obj.attr('data-sticky') != 'true' || !rcube_mouse_is_over(e, obj.get(0)))
        ) {
          ref.hide_menu(id, e);
        }
        skip = obj.data('parent');
      }
    }, 10, e);
  };

  // global keypress event handler
  this.doc_keypress = function(e)
  {
    // Helper method to move focus to the next/prev active menu item
    var focus_menu_item = function(dir) {
      var obj, item, mod = dir < 0 ? 'prevAll' : 'nextAll', limit = dir < 0 ? 'last' : 'first';
      if (ref.focused_menu && (obj = $('#'+ref.focused_menu))) {
        item = obj.find(':focus').closest('li')[mod](':has(:not([aria-disabled=true]))').find('a,input')[limit]();
        if (!item.length)
          item = obj.find(':focus').closest('ul')[mod](':has(:not([aria-disabled=true]))').find('a,input')[limit]();
        return item.focus().length;
      }

      return 0;
    };

    var target = e.target || {},
      keyCode = rcube_event.get_keycode(e);

    // save global reference for keyboard detection on click events in IE
    rcube_event._last_keyboard_event = e;

    if (e.keyCode != 27 && (!this.menu_keyboard_active || target.nodeName == 'TEXTAREA' || target.nodeName == 'SELECT')) {
      return true;
    }

    switch (keyCode) {
      case 38:
      case 40:
      case 63232: // "up", in safari keypress
      case 63233: // "down", in safari keypress
        focus_menu_item(keyCode == 38 || keyCode == 63232 ? -1 : 1);
        return rcube_event.cancel(e);

      case 9:   // tab
        if (this.focused_menu) {
          var mod = rcube_event.get_modifier(e);
          if (!focus_menu_item(mod == SHIFT_KEY ? -1 : 1)) {
            this.hide_menu(this.focused_menu, e);
          }
        }
        return rcube_event.cancel(e);

      case 27:  // esc
        if (this.menu_stack.length)
          this.hide_menu(this.menu_stack[this.menu_stack.length-1], e);
        break;
    }

    return true;
  }

  this.msglist_select = function(list)
  {
    if (this.preview_timer)
      clearTimeout(this.preview_timer);
    if (this.preview_read_timer)
      clearTimeout(this.preview_read_timer);

    var selected = list.get_single_selection();

    this.enable_command(this.env.message_commands, selected != null);
    if (selected) {
      // Hide certain command buttons when Drafts folder is selected
      if (this.env.mailbox == this.env.drafts_mailbox)
        this.enable_command('reply', 'reply-all', 'reply-list', 'forward', 'forward-attachment', 'forward-inline', false);
      // Disable reply-list when List-Post header is not set
      else {
        var msg = this.env.messages[selected];
        if (!msg.ml)
          this.enable_command('reply-list', false);
      }
    }
    // Multi-message commands
    this.enable_command('delete', 'move', 'copy', 'mark', 'forward', 'forward-attachment', list.selection.length > 0);

    // reset all-pages-selection
    if (selected || (list.selection.length && list.selection.length != list.rowcount))
      this.select_all_mode = false;

    // start timer for message preview (wait for double click)
    if (selected && this.env.contentframe && !list.multi_selecting && !this.dummy_select)
      this.preview_timer = setTimeout(function() { ref.msglist_get_preview(); }, this.dblclick_time);
    else if (this.env.contentframe)
      this.show_contentframe(false);
  };

  // This allow as to re-select selected message and display it in preview frame
  this.msglist_click = function(list)
  {
    if (list.multi_selecting || !this.env.contentframe)
      return;

    if (list.get_single_selection())
      return;

    var win = this.get_frame_window(this.env.contentframe);

    if (win && win.location.href.indexOf(this.env.blankpage) >= 0) {
      if (this.preview_timer)
        clearTimeout(this.preview_timer);
      if (this.preview_read_timer)
        clearTimeout(this.preview_read_timer);

      this.preview_timer = setTimeout(function() { ref.msglist_get_preview(); }, this.dblclick_time);
    }
  };

  this.msglist_dbl_click = function(list)
  {
    if (this.preview_timer)
      clearTimeout(this.preview_timer);
    if (this.preview_read_timer)
      clearTimeout(this.preview_read_timer);

    var uid = list.get_single_selection();

    if (uid && (this.env.messages[uid].mbox || this.env.mailbox) == this.env.drafts_mailbox)
      this.open_compose_step({ _draft_uid: uid, _mbox: this.env.mailbox });
    else if (uid)
      this.show_message(uid, false, false);
  };

  this.msglist_keypress = function(list)
  {
    if (list.modkey == CONTROL_KEY)
      return;

    if (list.key_pressed == list.ENTER_KEY)
      this.command('show');
    else if (list.key_pressed == list.DELETE_KEY || list.key_pressed == list.BACKSPACE_KEY)
      this.command('delete');
    else if (list.key_pressed == 33)
      this.command('previouspage');
    else if (list.key_pressed == 34)
      this.command('nextpage');
  };

  this.msglist_get_preview = function()
  {
    var uid = this.get_single_uid();
    if (uid && this.env.contentframe && !this.drag_active)
      this.show_message(uid, false, true);
    else if (this.env.contentframe)
      this.show_contentframe(false);
  };

  this.msglist_expand = function(row)
  {
    if (this.env.messages[row.uid])
      this.env.messages[row.uid].expanded = row.expanded;
    $(row.obj)[row.expanded?'addClass':'removeClass']('expanded');
  };

  this.msglist_set_coltypes = function(list)
  {
    var i, found, name, cols = list.thead.rows[0].cells;

    this.env.listcols = [];

    for (i=0; i<cols.length; i++)
      if (cols[i].id && cols[i].id.startsWith('rcm')) {
        name = cols[i].id.slice(3);
        this.env.listcols.push(name);
      }

    if ((found = $.inArray('flag', this.env.listcols)) >= 0)
      this.env.flagged_col = found;

    if ((found = $.inArray('subject', this.env.listcols)) >= 0)
      this.env.subject_col = found;

    this.command('save-pref', { name: 'list_cols', value: this.env.listcols, session: 'list_attrib/columns' });
  };

  this.check_droptarget = function(id)
  {
    switch (this.task) {
      case 'mail':
        return (this.env.mailboxes[id]
            && !this.env.mailboxes[id].virtual
            && (this.env.mailboxes[id].id != this.env.mailbox || this.is_multifolder_listing())) ? 1 : 0;

      case 'addressbook':
        var target;
        if (id != this.env.source && (target = this.env.contactfolders[id])) {
          // droptarget is a group
          if (target.type == 'group') {
            if (target.id != this.env.group && !this.env.contactfolders[target.source].readonly) {
              var is_other = this.env.selection_sources.length > 1 || $.inArray(target.source, this.env.selection_sources) == -1;
              return !is_other || this.commands.move ? 1 : 2;
            }
          }
          // droptarget is a (writable) addressbook and it's not the source
          else if (!target.readonly && (this.env.selection_sources.length > 1 || $.inArray(id, this.env.selection_sources) == -1)) {
            return this.commands.move ? 1 : 2;
          }
        }
    }

    return 0;
  };

  // open popup window
  this.open_window = function(url, small, toolbar)
  {
    var wname = 'rcmextwin' + new Date().getTime();

    url += (url.match(/\?/) ? '&' : '?') + '_extwin=1';

    if (this.env.standard_windows)
      var extwin = window.open(url, wname);
    else {
      var win = this.is_framed() ? parent.window : window,
        page = $(win),
        page_width = page.width(),
        page_height = bw.mz ? $('body', win).height() : page.height(),
        w = Math.min(small ? this.env.popup_width_small : this.env.popup_width, page_width),
        h = page_height, // always use same height
        l = (win.screenLeft || win.screenX) + 20,
        t = (win.screenTop || win.screenY) + 20,
        extwin = window.open(url, wname,
          'width='+w+',height='+h+',top='+t+',left='+l+',resizable=yes,location=no,scrollbars=yes'
          +(toolbar ? ',toolbar=yes,menubar=yes,status=yes' : ',toolbar=no,menubar=no,status=no'));
    }

    // detect popup blocker (#1489618)
    // don't care this might not work with all browsers
    if (!extwin || extwin.closed) {
      this.display_message(this.get_label('windowopenerror'), 'warning');
      return;
    }

    // write loading... message to empty windows
    if (!url && extwin.document) {
      extwin.document.write('<html><body>' + this.get_label('loading') + '</body></html>');
    }

    // allow plugins to grab the window reference (#1489413)
    this.triggerEvent('openwindow', { url:url, handle:extwin });

    // focus window, delayed to bring to front
    setTimeout(function() { extwin && extwin.focus(); }, 10);

    return extwin;
  };


  /*********************************************************/
  /*********     (message) list functionality      *********/
  /*********************************************************/

  this.init_message_row = function(row)
  {
    var i, fn = {}, uid = row.uid,
      status_icon = (this.env.status_col != null ? 'status' : 'msg') + 'icn' + row.id;

    if (uid && this.env.messages[uid])
      $.extend(row, this.env.messages[uid]);

    // set eventhandler to status icon
    if (row.icon = document.getElementById(status_icon)) {
      fn.icon = function(e) { ref.command('toggle_status', uid); };
    }

    // save message icon position too
    if (this.env.status_col != null)
      row.msgicon = document.getElementById('msgicn'+row.id);
    else
      row.msgicon = row.icon;

    // set eventhandler to flag icon
    if (this.env.flagged_col != null && (row.flagicon = document.getElementById('flagicn'+row.id))) {
      fn.flagicon = function(e) { ref.command('toggle_flag', uid); };
    }

    // set event handler to thread expand/collapse icon
    if (!row.depth && row.has_children && (row.expando = document.getElementById('rcmexpando'+row.id))) {
      fn.expando = function(e) { ref.expand_message_row(e, uid); };
    }

    // attach events
    $.each(fn, function(i, f) {
      row[i].onclick = function(e) { f(e); return rcube_event.cancel(e); };
      if (bw.touch && row[i].addEventListener) {
        row[i].addEventListener('touchend', function(e) {
          if (e.changedTouches.length == 1) {
            f(e);
            return rcube_event.cancel(e);
          }
        }, false);
      }
    });

    this.triggerEvent('insertrow', { uid:uid, row:row });
  };

  // create a table row in the message list
  this.add_message_row = function(uid, cols, flags, attop)
  {
    if (!this.gui_objects.messagelist || !this.message_list)
      return false;

    // Prevent from adding messages from different folder (#1487752)
    if (flags.mbox != this.env.mailbox && !flags.skip_mbox_check)
      return false;

    if (!this.env.messages[uid])
      this.env.messages[uid] = {};

    // merge flags over local message object
    $.extend(this.env.messages[uid], {
      deleted: flags.deleted?1:0,
      replied: flags.answered?1:0,
      unread: !flags.seen?1:0,
      forwarded: flags.forwarded?1:0,
      flagged: flags.flagged?1:0,
      has_children: flags.has_children?1:0,
      depth: flags.depth?flags.depth:0,
      unread_children: flags.unread_children?flags.unread_children:0,
      parent_uid: flags.parent_uid?flags.parent_uid:0,
      selected: this.select_all_mode || this.message_list.in_selection(uid),
      ml: flags.ml?1:0,
      ctype: flags.ctype,
      mbox: flags.mbox,
      // flags from plugins
      flags: flags.extra_flags
    });

    var c, n, col, html, css_class, label, status_class = '', status_label = '',
      tree = '', expando = '',
      list = this.message_list,
      rows = list.rows,
      message = this.env.messages[uid],
      msg_id = this.html_identifier(uid,true),
      row_class = 'message'
        + (!flags.seen ? ' unread' : '')
        + (flags.deleted ? ' deleted' : '')
        + (flags.flagged ? ' flagged' : '')
        + (message.selected ? ' selected' : ''),
      row = { cols:[], style:{}, id:'rcmrow'+msg_id, uid:uid };

    // message status icons
    css_class = 'msgicon';
    if (this.env.status_col === null) {
      css_class += ' status';
      if (flags.deleted) {
        status_class += ' deleted';
        status_label += this.get_label('deleted') + ' ';
      }
      else if (!flags.seen) {
        status_class += ' unread';
        status_label += this.get_label('unread') + ' ';
      }
      else if (flags.unread_children > 0) {
        status_class += ' unreadchildren';
      }
    }
    if (flags.answered) {
      status_class += ' replied';
      status_label += this.get_label('replied') + ' ';
    }
    if (flags.forwarded) {
      status_class += ' forwarded';
      status_label += this.get_label('forwarded') + ' ';
    }

    // update selection
    if (message.selected && !list.in_selection(uid))
      list.selection.push(uid);

    // threads
    if (this.env.threading) {
      if (message.depth) {
        // This assumes that div width is hardcoded to 15px,
        tree += '<span id="rcmtab' + msg_id + '" class="branch" style="width:' + (message.depth * 15) + 'px;">&nbsp;&nbsp;</span>';

        if ((rows[message.parent_uid] && rows[message.parent_uid].expanded === false)
          || ((this.env.autoexpand_threads == 0 || this.env.autoexpand_threads == 2) &&
            (!rows[message.parent_uid] || !rows[message.parent_uid].expanded))
        ) {
          row.style.display = 'none';
          message.expanded = false;
        }
        else
          message.expanded = true;

        row_class += ' thread expanded';
      }
      else if (message.has_children) {
        if (message.expanded === undefined && (this.env.autoexpand_threads == 1 || (this.env.autoexpand_threads == 2 && message.unread_children))) {
          message.expanded = true;
        }

        expando = '<div id="rcmexpando' + row.id + '" class="' + (message.expanded ? 'expanded' : 'collapsed') + '">&nbsp;&nbsp;</div>';
        row_class += ' thread' + (message.expanded? ' expanded' : '');
      }

      if (flags.unread_children && flags.seen && !message.expanded)
        row_class += ' unroot';
    }

    tree += '<span id="msgicn'+row.id+'" class="'+css_class+status_class+'" title="'+status_label+'"></span>';
    row.className = row_class;

    // build subject link
    if (cols.subject) {
      var action  = flags.mbox == this.env.drafts_mailbox ? 'compose' : 'show',
        uid_param = flags.mbox == this.env.drafts_mailbox ? '_draft_uid' : '_uid',
        query = { _mbox: flags.mbox };
      query[uid_param] = uid;
      cols.subject = '<a href="' + this.url(action, query) + '" onclick="return rcube_event.keyboard_only(event)"' +
        ' onmouseover="rcube_webmail.long_subject_title(this,'+(message.depth+1)+')" tabindex="-1"><span>'+cols.subject+'</span></a>';
    }

    // add each submitted col
    for (n in this.env.listcols) {
      c = this.env.listcols[n];
      col = {className: String(c).toLowerCase(), events:{}};

      if (this.env.coltypes[c] && this.env.coltypes[c].hidden) {
        col.className += ' hidden';
      }

      if (c == 'flag') {
        css_class = (flags.flagged ? 'flagged' : 'unflagged');
        label = this.get_label(css_class);
        html = '<span id="flagicn'+row.id+'" class="'+css_class+'" title="'+label+'"></span>';
      }
      else if (c == 'attachment') {
        label = this.get_label('withattachment');
        if (flags.attachmentClass)
          html = '<span class="'+flags.attachmentClass+'" title="'+label+'"></span>';
        else if (/application\/|multipart\/(m|signed)/.test(flags.ctype))
          html = '<span class="attachment" title="'+label+'"></span>';
        else if (/multipart\/report/.test(flags.ctype))
          html = '<span class="report"></span>';
          else
          html = '&nbsp;';
      }
      else if (c == 'status') {
        label = '';
        if (flags.deleted) {
          css_class = 'deleted';
          label = this.get_label('deleted');
        }
        else if (!flags.seen) {
          css_class = 'unread';
          label = this.get_label('unread');
        }
        else if (flags.unread_children > 0) {
          css_class = 'unreadchildren';
        }
        else
          css_class = 'msgicon';
        html = '<span id="statusicn'+row.id+'" class="'+css_class+status_class+'" title="'+label+'"></span>';
      }
      else if (c == 'threads')
        html = expando;
      else if (c == 'subject') {
        if (bw.ie)
          col.events.mouseover = function() { rcube_webmail.long_subject_title_ex(this); };
        html = tree + cols[c];
      }
      else if (c == 'priority') {
        if (flags.prio > 0 && flags.prio < 6) {
          label = this.get_label('priority') + ' ' + flags.prio;
          html = '<span class="prio'+flags.prio+'" title="'+label+'"></span>';
        }
        else
          html = '&nbsp;';
      }
      else if (c == 'folder') {
        html = '<span onmouseover="rcube_webmail.long_subject_title(this)">' + cols[c] + '<span>';
      }
      else
        html = cols[c];

      col.innerHTML = html;
      row.cols.push(col);
    }

    list.insert_row(row, attop);

    // remove 'old' row
    if (attop && this.env.pagesize && list.rowcount > this.env.pagesize) {
      var uid = list.get_last_row();
      list.remove_row(uid);
      list.clear_selection(uid);
    }
  };

  this.set_list_sorting = function(sort_col, sort_order)
  {
    var sort_old = this.env.sort_col == 'arrival' ? 'date' : this.env.sort_col,
      sort_new = sort_col == 'arrival' ? 'date' : sort_col;

    // set table header class
    $('#rcm' + sort_old).removeClass('sorted' + this.env.sort_order.toUpperCase());
    if (sort_new)
      $('#rcm' + sort_new).addClass('sorted' + sort_order);

    // if sorting by 'arrival' is selected, click on date column should not switch to 'date'
    $('#rcmdate > a').prop('rel', sort_col == 'arrival' ? 'arrival' : 'date');

    this.env.sort_col = sort_col;
    this.env.sort_order = sort_order;
  };

  this.set_list_options = function(cols, sort_col, sort_order, threads)
  {
    var update, post_data = {};

    if (sort_col === undefined)
      sort_col = this.env.sort_col;
    if (!sort_order)
      sort_order = this.env.sort_order;

    if (this.env.sort_col != sort_col || this.env.sort_order != sort_order) {
      update = 1;
      this.set_list_sorting(sort_col, sort_order);
    }

    if (this.env.threading != threads) {
      update = 1;
      post_data._threads = threads;
    }

    if (cols && cols.length) {
      // make sure new columns are added at the end of the list
      var i, idx, name, newcols = [], oldcols = this.env.listcols;
      for (i=0; i<oldcols.length; i++) {
        name = oldcols[i];
        idx = $.inArray(name, cols);
        if (idx != -1) {
          newcols.push(name);
          delete cols[idx];
        }
      }
      for (i=0; i<cols.length; i++)
        if (cols[i])
          newcols.push(cols[i]);

      if (newcols.join() != oldcols.join()) {
        update = 1;
        post_data._cols = newcols.join(',');
      }
    }

    if (update)
      this.list_mailbox('', '', sort_col+'_'+sort_order, post_data);
  };

  // when user double-clicks on a row
  this.show_message = function(id, safe, preview)
  {
    if (!id)
      return;

    var win, target = window,
      url = this.params_from_uid(id, {_caps: this.browser_capabilities()});

    if (preview && (win = this.get_frame_window(this.env.contentframe))) {
      target = win;
      url._framed = 1;
    }

    if (safe)
      url._safe = 1;

    // also send search request to get the right messages
    if (this.env.search_request)
      url._search = this.env.search_request;

    if (this.env.extwin)
      url._extwin = 1;

    url = this.url(preview ? 'preview': 'show', url);

    if (preview && String(target.location.href).indexOf(url) >= 0) {
      this.show_contentframe(true);
    }
    else {
      if (!preview && this.env.message_extwin && !this.env.extwin)
        this.open_window(url, true);
      else
        this.location_href(url, target, true);

      // mark as read and change mbox unread counter
      if (preview && this.message_list && this.message_list.rows[id] && this.message_list.rows[id].unread && this.env.preview_pane_mark_read > 0) {
        this.preview_read_timer = setTimeout(function() {
          ref.set_unread_message(id, ref.env.mailbox);
          ref.http_post('mark', {_uid: id, _flag: 'read', _mbox: ref.env.mailbox, _quiet: 1});
        }, this.env.preview_pane_mark_read * 1000);
      }
    }
  };

  // update message status and unread counter after marking a message as read
  this.set_unread_message = function(id, folder)
  {
    var self = this;

    // find window with messages list
    if (!self.message_list)
      self = self.opener();

    if (!self && window.parent)
      self = parent.rcmail;

    if (!self || !self.message_list)
      return;

    // this may fail in multifolder mode
    if (self.set_message(id, 'unread', false) === false)
      self.set_message(id + '-' + folder, 'unread', false);

    if (self.env.unread_counts[folder] > 0) {
      self.env.unread_counts[folder] -= 1;
      self.set_unread_count(folder, self.env.unread_counts[folder], folder == 'INBOX' && !self.is_multifolder_listing());
    }
  };

  this.show_contentframe = function(show)
  {
    var frame, win, name = this.env.contentframe;

    if (name && (frame = this.get_frame_element(name))) {
      if (!show && (win = this.get_frame_window(name))) {
        if (win.location.href.indexOf(this.env.blankpage) < 0) {
          if (win.stop)
            win.stop();
          else // IE
            win.document.execCommand('Stop');

          win.location.href = this.env.blankpage;
        }
      }
      else if (!bw.safari && !bw.konq)
        $(frame)[show ? 'show' : 'hide']();
    }

    if (!show && this.env.frame_lock)
      this.set_busy(false, null, this.env.frame_lock);
  };

  this.get_frame_element = function(id)
  {
    var frame;

    if (id && (frame = document.getElementById(id)))
      return frame;
  };

  this.get_frame_window = function(id)
  {
    var frame = this.get_frame_element(id);

    if (frame && frame.name && window.frames)
      return window.frames[frame.name];
  };

  this.lock_frame = function()
  {
    if (!this.env.frame_lock)
      (this.is_framed() ? parent.rcmail : this).env.frame_lock = this.set_busy(true, 'loading');
  };

  // list a specific page
  this.list_page = function(page)
  {
    if (page == 'next')
      page = this.env.current_page+1;
    else if (page == 'last')
      page = this.env.pagecount;
    else if (page == 'prev' && this.env.current_page > 1)
      page = this.env.current_page-1;
    else if (page == 'first' && this.env.current_page > 1)
      page = 1;

    if (page > 0 && page <= this.env.pagecount) {
      this.env.current_page = page;

      if (this.task == 'addressbook' || this.contact_list)
        this.list_contacts(this.env.source, this.env.group, page);
      else if (this.task == 'mail')
        this.list_mailbox(this.env.mailbox, page);
    }
  };

  // sends request to check for recent messages
  this.checkmail = function()
  {
    var lock = this.set_busy(true, 'checkingmail'),
      params = this.check_recent_params();

    this.http_post('check-recent', params, lock);
  };

  // list messages of a specific mailbox using filter
  this.filter_mailbox = function(filter)
  {
    if (this.filter_disabled)
      return;

    var lock = this.set_busy(true, 'searching');

    this.clear_message_list();

    // reset vars
    this.env.current_page = 1;
    this.env.search_filter = filter;
    this.http_request('search', this.search_params(false, filter), lock);
  };

  // reload the current message listing
  this.refresh_list = function()
  {
    this.list_mailbox(this.env.mailbox, this.env.current_page || 1, null, { _clear:1 }, true);
    if (this.message_list)
      this.message_list.clear_selection();
  };

  // list messages of a specific mailbox
  this.list_mailbox = function(mbox, page, sort, url, update_only)
  {
    var win, target = window;

    if (typeof url != 'object')
      url = {};

    if (!mbox)
      mbox = this.env.mailbox ? this.env.mailbox : 'INBOX';

    // add sort to url if set
    if (sort)
      url._sort = sort;

    // folder change, reset page, search scope, etc.
    if (this.env.mailbox != mbox) {
      page = 1;
      this.env.current_page = page;
      this.env.search_scope = 'base';
      this.select_all_mode = false;
      this.reset_search_filter();
    }
    // also send search request to get the right messages
    else if (this.env.search_request)
      url._search = this.env.search_request;

    if (!update_only) {
      // unselect selected messages and clear the list and message data
      this.clear_message_list();

      if (mbox != this.env.mailbox || (mbox == this.env.mailbox && !page && !sort))
        url._refresh = 1;

      this.select_folder(mbox, '', true);
      this.unmark_folder(mbox, 'recent', '', true);
      this.env.mailbox = mbox;
    }

    // load message list remotely
    if (this.gui_objects.messagelist) {
      this.list_mailbox_remote(mbox, page, url);
      return;
    }

    if (win = this.get_frame_window(this.env.contentframe)) {
      target = win;
      url._framed = 1;
    }

    if (this.env.uid)
      url._uid = this.env.uid;

    // load message list to target frame/window
    if (mbox) {
      this.set_busy(true, 'loading');
      url._mbox = mbox;
      if (page)
        url._page = page;
      this.location_href(url, target);
    }
  };

  this.clear_message_list = function()
  {
    this.env.messages = {};

    this.show_contentframe(false);
    if (this.message_list)
      this.message_list.clear(true);
  };

  // send remote request to load message list
  this.list_mailbox_remote = function(mbox, page, url)
  {
    var lock = this.set_busy(true, 'loading');

    if (typeof url != 'object')
      url = {};
    url._mbox = mbox;
    if (page)
      url._page = page;

    this.http_request('list', url, lock);
    this.update_state({ _mbox: mbox, _page: (page && page > 1 ? page : null) });
  };

  // removes messages that doesn't exists from list selection array
  this.update_selection = function()
  {
    var list = this.message_list,
      selected = list.selection,
      rows = list.rows,
      i, selection = [];

    for (i in selected)
      if (rows[selected[i]])
        selection.push(selected[i]);

    list.selection = selection;

    // reset preview frame, if currently previewed message is not selected (has been removed)
    try {
      var win = this.get_frame_window(this.env.contentframe),
        id = win.rcmail.env.uid;

      if (id && !list.in_selection(id))
        this.show_contentframe(false);
    }
    catch (e) {};
  };

  // expand all threads with unread children
  this.expand_unread = function()
  {
    var r, tbody = this.message_list.tbody,
      new_row = tbody.firstChild;

    while (new_row) {
      if (new_row.nodeType == 1 && (r = this.message_list.rows[new_row.uid]) && r.unread_children) {
        this.message_list.expand_all(r);
        this.set_unread_children(r.uid);
      }

      new_row = new_row.nextSibling;
    }

    return false;
  };

  // thread expanding/collapsing handler
  this.expand_message_row = function(e, uid)
  {
    var row = this.message_list.rows[uid];

    // handle unread_children mark
    row.expanded = !row.expanded;
    this.set_unread_children(uid);
    row.expanded = !row.expanded;

    this.message_list.expand_row(e, uid);
  };

  // message list expanding
  this.expand_threads = function()
  {
    if (!this.env.threading || !this.env.autoexpand_threads || !this.message_list)
      return;

    switch (this.env.autoexpand_threads) {
      case 2: this.expand_unread(); break;
      case 1: this.message_list.expand_all(); break;
    }
  };

  // Initializes threads indicators/expanders after list update
  this.init_threads = function(roots, mbox)
  {
    // #1487752
    if (mbox && mbox != this.env.mailbox)
      return false;

    for (var n=0, len=roots.length; n<len; n++)
      this.add_tree_icons(roots[n]);
    this.expand_threads();
  };

  // adds threads tree icons to the list (or specified thread)
  this.add_tree_icons = function(root)
  {
    var i, l, r, n, len, pos, tmp = [], uid = [],
      row, rows = this.message_list.rows;

    if (root)
      row = rows[root] ? rows[root].obj : null;
    else
      row = this.message_list.tbody.firstChild;

    while (row) {
      if (row.nodeType == 1 && (r = rows[row.uid])) {
        if (r.depth) {
          for (i=tmp.length-1; i>=0; i--) {
            len = tmp[i].length;
            if (len > r.depth) {
              pos = len - r.depth;
              if (!(tmp[i][pos] & 2))
                tmp[i][pos] = tmp[i][pos] ? tmp[i][pos]+2 : 2;
            }
            else if (len == r.depth) {
              if (!(tmp[i][0] & 2))
                tmp[i][0] += 2;
            }
            if (r.depth > len)
              break;
          }

          tmp.push(new Array(r.depth));
          tmp[tmp.length-1][0] = 1;
          uid.push(r.uid);
        }
        else {
          if (tmp.length) {
            for (i in tmp) {
              this.set_tree_icons(uid[i], tmp[i]);
            }
            tmp = [];
            uid = [];
          }
          if (root && row != rows[root].obj)
            break;
        }
      }
      row = row.nextSibling;
    }

    if (tmp.length) {
      for (i in tmp) {
        this.set_tree_icons(uid[i], tmp[i]);
      }
    }
  };

  // adds tree icons to specified message row
  this.set_tree_icons = function(uid, tree)
  {
    var i, divs = [], html = '', len = tree.length;

    for (i=0; i<len; i++) {
      if (tree[i] > 2)
        divs.push({'class': 'l3', width: 15});
      else if (tree[i] > 1)
        divs.push({'class': 'l2', width: 15});
      else if (tree[i] > 0)
        divs.push({'class': 'l1', width: 15});
      // separator div
      else if (divs.length && !divs[divs.length-1]['class'])
        divs[divs.length-1].width += 15;
      else
        divs.push({'class': null, width: 15});
    }

    for (i=divs.length-1; i>=0; i--) {
      if (divs[i]['class'])
        html += '<div class="tree '+divs[i]['class']+'" />';
      else
        html += '<div style="width:'+divs[i].width+'px" />';
    }

    if (html)
      $('#rcmtab'+this.html_identifier(uid, true)).html(html);
  };

  // update parent in a thread
  this.update_thread_root = function(uid, flag)
  {
    if (!this.env.threading)
      return;

    var root = this.message_list.find_root(uid);

    if (uid == root)
      return;

    var p = this.message_list.rows[root];

    if (flag == 'read' && p.unread_children) {
      p.unread_children--;
    }
    else if (flag == 'unread' && p.has_children) {
      // unread_children may be undefined
      p.unread_children = p.unread_children ? p.unread_children + 1 : 1;
    }
    else {
      return;
    }

    this.set_message_icon(root);
    this.set_unread_children(root);
  };

  // update thread indicators for all messages in a thread below the specified message
  // return number of removed/added root level messages
  this.update_thread = function (uid)
  {
    if (!this.env.threading)
      return 0;

    var r, parent, count = 0,
      rows = this.message_list.rows,
      row = rows[uid],
      depth = rows[uid].depth,
      roots = [];

    if (!row.depth) // root message: decrease roots count
      count--;
    else if (row.unread) {
      // update unread_children for thread root
      parent = this.message_list.find_root(uid);
      rows[parent].unread_children--;
      this.set_unread_children(parent);
    }

    parent = row.parent_uid;

    // childrens
    row = row.obj.nextSibling;
    while (row) {
      if (row.nodeType == 1 && (r = rows[row.uid])) {
        if (!r.depth || r.depth <= depth)
          break;

        r.depth--; // move left
        // reset width and clear the content of a tab, icons will be added later
        $('#rcmtab'+r.id).width(r.depth * 15).html('');
        if (!r.depth) { // a new root
          count++; // increase roots count
          r.parent_uid = 0;
          if (r.has_children) {
            // replace 'leaf' with 'collapsed'
            $('#'+r.id+' .leaf:first')
              .attr('id', 'rcmexpando' + r.id)
              .attr('class', (r.obj.style.display != 'none' ? 'expanded' : 'collapsed'))
              .mousedown({uid: r.uid}, function(e) {
                return ref.expand_message_row(e, e.data.uid);
              });

            r.unread_children = 0;
            roots.push(r);
          }
          // show if it was hidden
          if (r.obj.style.display == 'none')
            $(r.obj).show();
        }
        else {
          if (r.depth == depth)
            r.parent_uid = parent;
          if (r.unread && roots.length)
            roots[roots.length-1].unread_children++;
        }
      }
      row = row.nextSibling;
    }

    // update unread_children for roots
    for (r=0; r<roots.length; r++)
      this.set_unread_children(roots[r].uid);

    return count;
  };

  this.delete_excessive_thread_rows = function()
  {
    var rows = this.message_list.rows,
      tbody = this.message_list.tbody,
      row = tbody.firstChild,
      cnt = this.env.pagesize + 1;

    while (row) {
      if (row.nodeType == 1 && (r = rows[row.uid])) {
        if (!r.depth && cnt)
          cnt--;

        if (!cnt)
          this.message_list.remove_row(row.uid);
      }
      row = row.nextSibling;
    }
  };

  // set message icon
  this.set_message_icon = function(uid)
  {
    var css_class, label = '',
      row = this.message_list.rows[uid];

    if (!row)
      return false;

    if (row.icon) {
      css_class = 'msgicon';
      if (row.deleted) {
        css_class += ' deleted';
        label += this.get_label('deleted') + ' ';
      }
      else if (row.unread) {
        css_class += ' unread';
        label += this.get_label('unread') + ' ';
      }
      else if (row.unread_children)
        css_class += ' unreadchildren';
      if (row.msgicon == row.icon) {
        if (row.replied) {
          css_class += ' replied';
          label += this.get_label('replied') + ' ';
        }
        if (row.forwarded) {
          css_class += ' forwarded';
          label += this.get_label('forwarded') + ' ';
        }
        css_class += ' status';
      }

      $(row.icon).attr('class', css_class).attr('title', label);
    }

    if (row.msgicon && row.msgicon != row.icon) {
      label = '';
      css_class = 'msgicon';
      if (!row.unread && row.unread_children) {
        css_class += ' unreadchildren';
      }
      if (row.replied) {
        css_class += ' replied';
        label += this.get_label('replied') + ' ';
      }
      if (row.forwarded) {
        css_class += ' forwarded';
        label += this.get_label('forwarded') + ' ';
      }

      $(row.msgicon).attr('class', css_class).attr('title', label);
    }

    if (row.flagicon) {
      css_class = (row.flagged ? 'flagged' : 'unflagged');
      label = this.get_label(css_class);
      $(row.flagicon).attr('class', css_class)
        .attr('aria-label', label)
        .attr('title', label);
    }
  };

  // set message status
  this.set_message_status = function(uid, flag, status)
  {
    var row = this.message_list.rows[uid];

    if (!row)
      return false;

    if (flag == 'unread') {
      if (row.unread != status)
        this.update_thread_root(uid, status ? 'unread' : 'read');
    }

    if ($.inArray(flag, ['unread', 'deleted', 'replied', 'forwarded', 'flagged']) > -1)
      row[flag] = status;
  };

  // set message row status, class and icon
  this.set_message = function(uid, flag, status)
  {
    var row = this.message_list && this.message_list.rows[uid];

    if (!row)
      return false;

    if (flag)
      this.set_message_status(uid, flag, status);

    if ($.inArray(flag, ['unread', 'deleted', 'flagged']) > -1)
      $(row.obj)[row[flag] ? 'addClass' : 'removeClass'](flag);

    this.set_unread_children(uid);
    this.set_message_icon(uid);
  };

  // sets unroot (unread_children) class of parent row
  this.set_unread_children = function(uid)
  {
    var row = this.message_list.rows[uid];

    if (row.parent_uid)
      return;

    if (!row.unread && row.unread_children && !row.expanded)
      $(row.obj).addClass('unroot');
    else
      $(row.obj).removeClass('unroot');
  };

  // copy selected messages to the specified mailbox
  this.copy_messages = function(mbox, event)
  {
    if (mbox && typeof mbox === 'object')
      mbox = mbox.id;
    else if (!mbox)
      return this.folder_selector(event, function(folder) { ref.command('copy', folder); });

    // exit if current or no mailbox specified
    if (!mbox || mbox == this.env.mailbox)
      return;

    var post_data = this.selection_post_data({_target_mbox: mbox});

    // exit if selection is empty
    if (!post_data._uid)
      return;

    // send request to server
    this.http_post('copy', post_data, this.display_message(this.get_label('copyingmessage'), 'loading'));
  };

  // move selected messages to the specified mailbox
  this.move_messages = function(mbox, event)
  {
    if (mbox && typeof mbox === 'object')
      mbox = mbox.id;
    else if (!mbox)
      return this.folder_selector(event, function(folder) { ref.command('move', folder); });

    // exit if current or no mailbox specified
    if (!mbox || (mbox == this.env.mailbox && !this.is_multifolder_listing()))
      return;

    var lock = false, post_data = this.selection_post_data({_target_mbox: mbox});

    // exit if selection is empty
    if (!post_data._uid)
      return;

    // show wait message
    if (this.env.action == 'show')
      lock = this.set_busy(true, 'movingmessage');
    else
      this.show_contentframe(false);

    // Hide message command buttons until a message is selected
    this.enable_command(this.env.message_commands, false);

    this._with_selected_messages('move', post_data, lock);
  };

  // delete selected messages from the current mailbox
  this.delete_messages = function(event)
  {
    var list = this.message_list, trash = this.env.trash_mailbox;

    // if config is set to flag for deletion
    if (this.env.flag_for_deletion) {
      this.mark_message('delete');
      return false;
    }
    // if there isn't a defined trash mailbox or we are in it
    else if (!trash || this.env.mailbox == trash)
      this.permanently_remove_messages();
    // we're in Junk folder and delete_junk is enabled
    else if (this.env.delete_junk && this.env.junk_mailbox && this.env.mailbox == this.env.junk_mailbox)
      this.permanently_remove_messages();
    // if there is a trash mailbox defined and we're not currently in it
    else {
      // if shift was pressed delete it immediately
      if ((list && list.modkey == SHIFT_KEY) || (event && rcube_event.get_modifier(event) == SHIFT_KEY)) {
        if (confirm(this.get_label('deletemessagesconfirm')))
          this.permanently_remove_messages();
      }
      else
        this.move_messages(trash);
    }

    return true;
  };

  // delete the selected messages permanently
  this.permanently_remove_messages = function()
  {
    var post_data = this.selection_post_data();

    // exit if selection is empty
    if (!post_data._uid)
      return;

    this.show_contentframe(false);
    this._with_selected_messages('delete', post_data);
  };

  // Send a specific move/delete request with UIDs of all selected messages
  // @private
  this._with_selected_messages = function(action, post_data, lock)
  {
    var count = 0, msg,
      remove = (action == 'delete' || !this.is_multifolder_listing());

    // update the list (remove rows, clear selection)
    if (this.message_list) {
      var n, id, root, roots = [],
        selection = this.message_list.get_selection();

      for (n=0, len=selection.length; n<len; n++) {
        id = selection[n];

        if (this.env.threading) {
          count += this.update_thread(id);
          root = this.message_list.find_root(id);
          if (root != id && $.inArray(root, roots) < 0) {
            roots.push(root);
          }
        }
        if (remove)
          this.message_list.remove_row(id, (this.env.display_next && n == selection.length-1));
      }
      // make sure there are no selected rows
      if (!this.env.display_next && remove)
        this.message_list.clear_selection();
      // update thread tree icons
      for (n=0, len=roots.length; n<len; n++) {
        this.add_tree_icons(roots[n]);
      }
    }

    if (count < 0)
      post_data._count = (count*-1);
    // remove threads from the end of the list
    else if (count > 0 && remove)
      this.delete_excessive_thread_rows();

    if (!remove)
      post_data._refresh = 1;

    if (!lock) {
      msg = action == 'move' ? 'movingmessage' : 'deletingmessage';
      lock = this.display_message(this.get_label(msg), 'loading');
    }

    // send request to server
    this.http_post(action, post_data, lock);
  };

  // build post data for message delete/move/copy/flag requests
  this.selection_post_data = function(data)
  {
    if (typeof(data) != 'object')
      data = {};

    data._mbox = this.env.mailbox;

    if (!data._uid) {
      var uids = this.env.uid ? [this.env.uid] : this.message_list.get_selection();
      data._uid = this.uids_to_list(uids);
    }

    if (this.env.action)
      data._from = this.env.action;

    // also send search request to get the right messages
    if (this.env.search_request)
      data._search = this.env.search_request;

    if (this.env.display_next && this.env.next_uid)
      data._next_uid = this.env.next_uid;

    return data;
  };

  // set a specific flag to one or more messages
  this.mark_message = function(flag, uid)
  {
    var a_uids = [], r_uids = [], len, n, id,
      list = this.message_list;

    if (uid)
      a_uids[0] = uid;
    else if (this.env.uid)
      a_uids[0] = this.env.uid;
    else if (list)
      a_uids = list.get_selection();

    if (!list)
      r_uids = a_uids;
    else {
      list.focus();
      for (n=0, len=a_uids.length; n<len; n++) {
        id = a_uids[n];
        if ((flag == 'read' && list.rows[id].unread)
            || (flag == 'unread' && !list.rows[id].unread)
            || (flag == 'delete' && !list.rows[id].deleted)
            || (flag == 'undelete' && list.rows[id].deleted)
            || (flag == 'flagged' && !list.rows[id].flagged)
            || (flag == 'unflagged' && list.rows[id].flagged))
        {
          r_uids.push(id);
        }
      }
    }

    // nothing to do
    if (!r_uids.length && !this.select_all_mode)
      return;

    switch (flag) {
        case 'read':
        case 'unread':
          this.toggle_read_status(flag, r_uids);
          break;
        case 'delete':
        case 'undelete':
          this.toggle_delete_status(r_uids);
          break;
        case 'flagged':
        case 'unflagged':
          this.toggle_flagged_status(flag, a_uids);
          break;
    }
  };

  // set class to read/unread
  this.toggle_read_status = function(flag, a_uids)
  {
    var i, len = a_uids.length,
      post_data = this.selection_post_data({_uid: this.uids_to_list(a_uids), _flag: flag}),
      lock = this.display_message(this.get_label('markingmessage'), 'loading');

    // mark all message rows as read/unread
    for (i=0; i<len; i++)
      this.set_message(a_uids[i], 'unread', (flag == 'unread' ? true : false));

    this.http_post('mark', post_data, lock);
  };

  // set image to flagged or unflagged
  this.toggle_flagged_status = function(flag, a_uids)
  {
    var i, len = a_uids.length,
      post_data = this.selection_post_data({_uid: this.uids_to_list(a_uids), _flag: flag}),
      lock = this.display_message(this.get_label('markingmessage'), 'loading');

    // mark all message rows as flagged/unflagged
    for (i=0; i<len; i++)
      this.set_message(a_uids[i], 'flagged', (flag == 'flagged' ? true : false));

    this.http_post('mark', post_data, lock);
  };

  // mark all message rows as deleted/undeleted
  this.toggle_delete_status = function(a_uids)
  {
    var len = a_uids.length,
      i, uid, all_deleted = true,
      rows = this.message_list ? this.message_list.rows : {};

    if (len == 1) {
      if (!this.message_list || (rows[a_uids[0]] && !rows[a_uids[0]].deleted))
        this.flag_as_deleted(a_uids);
      else
        this.flag_as_undeleted(a_uids);

      return true;
    }

    for (i=0; i<len; i++) {
      uid = a_uids[i];
      if (rows[uid] && !rows[uid].deleted) {
        all_deleted = false;
        break;
      }
    }

    if (all_deleted)
      this.flag_as_undeleted(a_uids);
    else
      this.flag_as_deleted(a_uids);

    return true;
  };

  this.flag_as_undeleted = function(a_uids)
  {
    var i, len = a_uids.length,
      post_data = this.selection_post_data({_uid: this.uids_to_list(a_uids), _flag: 'undelete'}),
      lock = this.display_message(this.get_label('markingmessage'), 'loading');

    for (i=0; i<len; i++)
      this.set_message(a_uids[i], 'deleted', false);

    this.http_post('mark', post_data, lock);
  };

  this.flag_as_deleted = function(a_uids)
  {
    var r_uids = [],
      post_data = this.selection_post_data({_uid: this.uids_to_list(a_uids), _flag: 'delete'}),
      lock = this.display_message(this.get_label('markingmessage'), 'loading'),
      list = this.message_list,
      rows = list ? list.rows : {},
      count = 0;

    for (var i=0, len=a_uids.length; i<len; i++) {
      uid = a_uids[i];
      if (rows[uid]) {
        if (rows[uid].unread)
          r_uids[r_uids.length] = uid;

        if (this.env.skip_deleted) {
          count += this.update_thread(uid);
          list.remove_row(uid, (this.env.display_next && i == list.selection.length-1));
        }
        else
          this.set_message(uid, 'deleted', true);
      }
    }

    // make sure there are no selected rows
    if (this.env.skip_deleted && list) {
      if (!this.env.display_next || !list.rowcount)
        list.clear_selection();
      if (count < 0)
        post_data._count = (count*-1);
      else if (count > 0)
        // remove threads from the end of the list
        this.delete_excessive_thread_rows();
    }

    // set of messages to mark as seen
    if (r_uids.length)
      post_data._ruid = this.uids_to_list(r_uids);

    if (this.env.skip_deleted && this.env.display_next && this.env.next_uid)
      post_data._next_uid = this.env.next_uid;

    this.http_post('mark', post_data, lock);
  };

  // flag as read without mark request (called from backend)
  // argument should be a coma-separated list of uids
  this.flag_deleted_as_read = function(uids)
  {
    var uid, i, len,
      rows = this.message_list ? this.message_list.rows : {};

    if (typeof uids == 'string')
      uids = uids.split(',');

    for (i=0, len=uids.length; i<len; i++) {
      uid = uids[i];
      if (rows[uid])
        this.set_message(uid, 'unread', false);
    }
  };

  // Converts array of message UIDs to comma-separated list for use in URL
  // with select_all mode checking
  this.uids_to_list = function(uids)
  {
    return this.select_all_mode ? '*' : (uids.length <= 1 ? uids.join(',') : uids);
  };

  // Sets title of the delete button
  this.set_button_titles = function()
  {
    var label = 'deletemessage';

    if (!this.env.flag_for_deletion
      && this.env.trash_mailbox && this.env.mailbox != this.env.trash_mailbox
      && (!this.env.delete_junk || !this.env.junk_mailbox || this.env.mailbox != this.env.junk_mailbox)
    )
      label = 'movemessagetotrash';

    this.set_alttext('delete', label);
  };

  // Initialize input element for list page jump
  this.init_pagejumper = function(element)
  {
    $(element).addClass('rcpagejumper')
      .on('focus', function(e) {
        // create and display popup with page selection
        var i, html = '';

        for (i = 1; i <= ref.env.pagecount; i++)
          html += '<li>' + i + '</li>';

        html = '<ul class="toolbarmenu">' + html + '</ul>';

        if (!ref.pagejump) {
          ref.pagejump = $('<div id="pagejump-selector" class="popupmenu"></div>')
            .appendTo(document.body)
            .on('click', 'li', function() {
              if (!ref.busy)
                $(element).val($(this).text()).change();
            });
        }

        if (ref.pagejump.data('count') != i)
          ref.pagejump.html(html);

        ref.pagejump.attr('rel', '#' + this.id).data('count', i);

        // display page selector
        ref.show_menu('pagejump-selector', true, e);
        $(this).keydown();
      })
      // keyboard navigation
      .on('keydown keyup click', function(e) {
        var current, selector = $('#pagejump-selector'),
          ul = $('ul', selector),
          list = $('li', ul),
          height = ul.height(),
          p = parseInt(this.value);

        if (e.which != 27 && e.which != 9 && e.which != 13 && !selector.is(':visible'))
          return ref.show_menu('pagejump-selector', true, e);

        if (e.type == 'keydown') {
          // arrow-down
          if (e.which == 40) {
            if (list.length > p)
              this.value = (p += 1);
          }
          // arrow-up
          else if (e.which == 38) {
            if (p > 1 && list.length > p - 1)
              this.value = (p -= 1);
          }
          // enter
          else if (e.which == 13) {
            return $(this).change();
          }
          // esc, tab
          else if (e.which == 27 || e.which == 9) {
            return $(element).val(ref.env.current_page);
          }
        }

        $('li.selected', ul).removeClass('selected');

        if ((current = $(list[p - 1])).length) {
          current.addClass('selected');
          $('#pagejump-selector').scrollTop(((ul.height() / list.length) * (p - 1)) - selector.height() / 2);
        }
      })
      .on('change', function(e) {
        // go to specified page
        var p = parseInt(this.value);
        if (p && p != ref.env.current_page && !ref.busy) {
          ref.hide_menu('pagejump-selector');
          ref.list_page(p);
        }
      });
  };

  // Update page-jumper state on list updates
  this.update_pagejumper = function()
  {
    $('input.rcpagejumper').val(this.env.current_page).prop('disabled', this.env.pagecount < 2);
  };

  // check for mailvelope API
  this.check_mailvelope = function(action)
  {
    if (typeof window.mailvelope !== 'undefined') {
      this.mailvelope_load(action);
    }
    else {
      $(window).on('mailvelope', function() {
        ref.mailvelope_load(action);
      });
    }
  };

  // Load Mailvelope functionality (and initialize keyring if needed)
  this.mailvelope_load = function(action)
  {
    if (this.env.browser_capabilities)
      this.env.browser_capabilities['pgpmime'] = 1;

    var keyring = this.env.user_id;

    mailvelope.getKeyring(keyring).then(function(kr) {
      ref.mailvelope_keyring = kr;
      ref.mailvelope_init(action, kr);
    }, function(err) {
      // attempt to create a new keyring for this app/user
      mailvelope.createKeyring(keyring).then(function(kr) {
        ref.mailvelope_keyring = kr;
        ref.mailvelope_init(action, kr);
      }, function(err) {
        console.error(err);
      });
    });
  };

  // Initializes Mailvelope editor or display container
  this.mailvelope_init = function(action, keyring)
  {
    if (!window.mailvelope)
      return;

    if (action == 'show' || action == 'preview' || action == 'print') {
      // decrypt text body
      if (this.env.is_pgp_content) {
        var data = $(this.env.is_pgp_content).text();
        ref.mailvelope_display_container(this.env.is_pgp_content, data, keyring);
      }
      // load pgp/mime message and pass it to the mailvelope display container
      else if (this.env.pgp_mime_part) {
        var msgid = this.display_message(this.get_label('loadingdata'), 'loading'),
          selector = this.env.pgp_mime_container;

        $.ajax({
          type: 'GET',
          url: this.url('get', { '_mbox': this.env.mailbox, '_uid': this.env.uid, '_part': this.env.pgp_mime_part }),
          error: function(o, status, err) {
            ref.http_error(o, status, err, msgid);
          },
          success: function(data) {
            ref.mailvelope_display_container(selector, data, keyring, msgid);
          }
        });
      }
    }
    else if (action == 'compose') {
      this.env.compose_commands.push('compose-encrypted');

      var is_html = $('input[name="_is_html"]').val() > 0;

      if (this.env.pgp_mime_message) {
        // fetch PGP/Mime part and open load into Mailvelope editor
        var lock = this.set_busy(true, this.get_label('loadingdata'));

        $.ajax({
          type: 'GET',
          url: this.url('get', this.env.pgp_mime_message),
          error: function(o, status, err) {
            ref.http_error(o, status, err, lock);
            ref.enable_command('compose-encrypted', !is_html);
          },
          success: function(data) {
            ref.set_busy(false, null, lock);

            if (is_html) {
              ref.command('toggle-editor', {html: false, noconvert: true});
              $('#' + ref.env.composebody).val('');
            }

            ref.compose_encrypted({ quotedMail: data });
            ref.enable_command('compose-encrypted', true);
          }
        });
      }
      else {
        // enable encrypted compose toggle
        this.enable_command('compose-encrypted', !is_html);
      }

      // make sure to disable encryption button after toggling editor into HTML mode
      this.addEventListener('actionafter', function(args) {
        if (args.ret && args.action == 'toggle-editor')
          ref.enable_command('compose-encrypted', !args.props.html);
      });
    }
  };

  // handler for the 'compose-encrypted' command
  this.compose_encrypted = function(props)
  {
    var options, container = $('#' + this.env.composebody).parent();

    // remove Mailvelope editor if active
    if (ref.mailvelope_editor) {
      ref.mailvelope_editor = null;
      ref.compose_skip_unsavedcheck = false;
      ref.set_button('compose-encrypted', 'act');

      container.removeClass('mailvelope')
        .find('iframe:not([aria-hidden=true])').remove();
      $('#' + ref.env.composebody).show();
      $("[name='_pgpmime']").remove();

      // disable commands that operate on the compose body
      ref.enable_command('spellcheck', 'insert-sig', 'toggle-editor', 'insert-response', 'save-response', true);
      ref.triggerEvent('compose-encrypted', { active:false });
    }
    // embed Mailvelope editor container
    else {
      if (this.spellcheck_state())
        this.editor.spellcheck_stop();

      if (props.quotedMail) {
        options = { quotedMail: props.quotedMail, quotedMailIndent: false };
      }
      else {
        options = { predefinedText: $('#' + this.env.composebody).val() };
      }

      if (this.env.compose_mode == 'reply') {
        options.quotedMailIndent = true;
        options.quotedMailHeader = this.env.compose_reply_header;
      }

      mailvelope.createEditorContainer('#' + container.attr('id'), ref.mailvelope_keyring, options).then(function(editor) {
        ref.mailvelope_editor = editor;
        ref.compose_skip_unsavedcheck = true;
        ref.set_button('compose-encrypted', 'sel');

        container.addClass('mailvelope');
        $('#' + ref.env.composebody).hide();

        // disable commands that operate on the compose body
        ref.enable_command('spellcheck', 'insert-sig', 'toggle-editor', 'insert-response', 'save-response', false);
        ref.triggerEvent('compose-encrypted', { active:true });

        // notify user about loosing attachments
        if (ref.env.attachments && !$.isEmptyObject(ref.env.attachments)) {
          alert(ref.get_label('encryptnoattachments'));

          $.each(ref.env.attachments, function(name, attach) {
            ref.remove_from_attachment_list(name);
          });
        }
      }, function(err) {
        console.error(err);
        console.log(options);
      });
    }
  };

  // callback to replace the message body with the full armored
  this.mailvelope_submit_messageform = function(draft, saveonly)
  {
    // get recipients
    var recipients = [];
    $.each(['to', 'cc', 'bcc'], function(i,field) {
      var pos, rcpt, val = $.trim($('[name="_' + field + '"]').val());
      while (val.length && rcube_check_email(val, true)) {
        rcpt = RegExp.$2;
        recipients.push(rcpt);
        val = val.substr(val.indexOf(rcpt) + rcpt.length + 1).replace(/^\s*,\s*/, '');
      }
    });

    // check if we have keys for all recipients
    var isvalid = recipients.length > 0;
    ref.mailvelope_keyring.validKeyForAddress(recipients).then(function(status) {
      var missing_keys = [];
      $.each(status, function(k,v) {
        if (v === false) {
          isvalid = false;
          missing_keys.push(k);
        }
      });

      // list recipients with missing keys
      if (!isvalid && missing_keys.length) {
        // display dialog with missing keys
        ref.show_popup_dialog(
          ref.get_label('nopubkeyfor').replace('$email', missing_keys.join(', ')) +
          '<p>' + ref.get_label('searchpubkeyservers') + '</p>',
          ref.get_label('encryptedsendialog'),
          [{
            text: ref.get_label('search'),
            'class': 'mainaction',
            click: function() {
              var $dialog = $(this);
              ref.mailvelope_search_pubkeys(missing_keys, function() {
                $dialog.dialog('close')
              });
            }
          },
          {
            text: ref.get_label('cancel'),
            click: function(){
              $(this).dialog('close');
            }
          }]
        );
        return false;
      }

      if (!isvalid) {
        if (!recipients.length) {
          alert(ref.get_label('norecipientwarning'));
          $("[name='_to']").focus();
        }
        return false;
      }

      // add sender identity to recipients to be able to decrypt our very own message
      var senders = [], selected_sender = ref.env.identities[$("[name='_from'] option:selected").val()];
      $.each(ref.env.identities, function(k, sender) {
        senders.push(sender.email);
      });

      ref.mailvelope_keyring.validKeyForAddress(senders).then(function(status) {
        valid_sender = null;
        $.each(status, function(k,v) {
          if (v !== false) {
            valid_sender = k;
            if (valid_sender == selected_sender) {
              return false;  // break
            }
          }
        });

        if (!valid_sender) {
          if (!confirm(ref.get_label('nopubkeyforsender'))) {
            return false;
          }
        }

        recipients.push(valid_sender);

        ref.mailvelope_editor.encrypt(recipients).then(function(armored) {
          // all checks passed, send message
          var form = ref.gui_objects.messageform,
            hidden = $("[name='_pgpmime']", form),
            msgid = ref.set_busy(true, draft || saveonly ? 'savingmessage' : 'sendingmessage')

          form.target = 'savetarget';
          form._draft.value = draft ? '1' : '';
          form.action = ref.add_url(form.action, '_unlock', msgid);
          form.action = ref.add_url(form.action, '_framed', 1);

          if (saveonly) {
            form.action = ref.add_url(form.action, '_saveonly', 1);
          }

          // send pgp conent via hidden field
          if (!hidden.length) {
            hidden = $('<input type="hidden" name="_pgpmime">').appendTo(form);
          }
          hidden.val(armored);

          form.submit();

        }, function(err) {
          console.log(err);
        });  // mailvelope_editor.encrypt()

      }, function(err) {
        console.error(err);
      });  // mailvelope_keyring.validKeyForAddress(senders)

    }, function(err) {
      console.error(err);
    });  // mailvelope_keyring.validKeyForAddress(recipients)

    return false;
  };

  // wrapper for the mailvelope.createDisplayContainer API call
  this.mailvelope_display_container = function(selector, data, keyring, msgid)
  {
    mailvelope.createDisplayContainer(selector, data, keyring, { showExternalContent: this.env.safemode }).then(function() {
      $(selector).addClass('mailvelope').children().not('iframe').hide();
      ref.hide_message(msgid);
      setTimeout(function() { $(window).resize(); }, 10);
    }, function(err) {
      console.error(err);
      ref.hide_message(msgid);
      ref.display_message('Message decryption failed: ' + err.message, 'error')
    });
  };

  // subroutine to query keyservers for public keys
  this.mailvelope_search_pubkeys = function(emails, resolve)
  {
    // query with publickey.js
    var deferreds = [],
      pk = new PublicKey(),
      lock = ref.display_message(ref.get_label('loading'), 'loading');

    $.each(emails, function(i, email) {
      var d = $.Deferred();
      pk.search(email, function(results, errorCode) {
        if (errorCode !== null) {
          // rejecting would make all fail
          // d.reject(email);
          d.resolve([email]);
        }
        else {
          d.resolve([email].concat(results));
        }
      });
      deferreds.push(d);
    });

    $.when.apply($, deferreds).then(function() {
      var missing_keys = [],
        key_selection = [];

      // alanyze results of all queries
      $.each(arguments, function(i, result) {
        var email = result.shift();
        if (!result.length) {
          missing_keys.push(email);
        }
        else {
          key_selection = key_selection.concat(result);
        }
      });

      ref.hide_message(lock);
      resolve(true);

      // show key import dialog
      if (key_selection.length) {
        ref.mailvelope_key_import_dialog(key_selection);
      }
      // some keys could not be found
      if (missing_keys.length) {
        ref.display_message(ref.get_label('nopubkeyfor').replace('$email', missing_keys.join(', ')), 'warning');
      }
    }).fail(function() {
      console.error('Pubkey lookup failed with', arguments);
      ref.hide_message(lock);
      ref.display_message('pubkeysearcherror', 'error');
      resolve(false);
    });
  };

  // list the given public keys in a dialog with options to import
  // them into the local Maivelope keyring
  this.mailvelope_key_import_dialog = function(candidates)
  {
    var ul = $('<div>').addClass('listing mailvelopekeyimport');
    $.each(candidates, function(i, keyrec) {
      var li = $('<div>').addClass('key');
      if (keyrec.revoked)  li.addClass('revoked');
      if (keyrec.disabled) li.addClass('disabled');
      if (keyrec.expired)  li.addClass('expired');

      li.append($('<label>').addClass('keyid').text(ref.get_label('keyid')));
      li.append($('<a>').text(keyrec.keyid.substr(-8).toUpperCase())
        .attr('href', keyrec.info)
        .attr('target', '_blank')
        .attr('tabindex', '-1'));

      li.append($('<label>').addClass('keylen').text(ref.get_label('keylength')));
      li.append($('<span>').text(keyrec.keylen));

      if (keyrec.expirationdate) {
        li.append($('<label>').addClass('keyexpired').text(ref.get_label('keyexpired')));
        li.append($('<span>').text(new Date(keyrec.expirationdate * 1000).toDateString()));
      }

      if (keyrec.revoked) {
        li.append($('<span>').addClass('keyrevoked').text(ref.get_label('keyrevoked')));
      }

      var ul_ = $('<ul>').addClass('uids');
      $.each(keyrec.uids, function(j, uid) {
        var li_ = $('<li>').addClass('uid');
        if (uid.revoked)  li_.addClass('revoked');
        if (uid.disabled) li_.addClass('disabled');
        if (uid.expired)  li_.addClass('expired');

        ul_.append(li_.text(uid.uid));
      });

      li.append(ul_);
      li.append($('<input>')
        .attr('type', 'button')
        .attr('rel', keyrec.keyid)
        .attr('value', ref.get_label('import'))
        .addClass('button importkey')
        .prop('disabled', keyrec.revoked || keyrec.disabled || keyrec.expired));

      ul.append(li);
    });

    // display dialog with missing keys
    ref.show_popup_dialog(
      $('<div>')
        .append($('<p>').html(ref.get_label('encryptpubkeysfound')))
        .append(ul),
      ref.get_label('importpubkeys'),
      [{
        text: ref.get_label('close'),
        click: function(){
          $(this).dialog('close');
        }
      }]
    );

    // delegate handler for import button clicks
    ul.on('click', 'input.button.importkey', function() {
      var btn = $(this),
        keyid = btn.attr('rel'),
        pk = new PublicKey(),
        lock = ref.display_message(ref.get_label('loading'), 'loading');

        // fetch from keyserver and import to Mailvelope keyring
        pk.get(keyid, function(armored, errorCode) {
          ref.hide_message(lock);

          if (errorCode) {
            ref.display_message(ref.get_label('keyservererror'), 'error');
            return;
          }

          // import to keyring
          ref.mailvelope_keyring.importPublicKey(armored).then(function(status) {
            if (status === 'REJECTED') {
              // alert(ref.get_label('Key import was rejected'));
            }
            else {
              var $key = keyid.substr(-8).toUpperCase();
              btn.closest('.key').fadeOut();
              ref.display_message(ref.get_label('keyimportsuccess').replace('$key', $key), 'confirmation');
            }
          }, function(err) {
            console.log(err);
          });
        });
    });

  };


  /*********************************************************/
  /*********       mailbox folders methods         *********/
  /*********************************************************/

  this.expunge_mailbox = function(mbox)
  {
    var lock, post_data = {_mbox: mbox};

    // lock interface if it's the active mailbox
    if (mbox == this.env.mailbox) {
      lock = this.set_busy(true, 'loading');
      post_data._reload = 1;
      if (this.env.search_request)
        post_data._search = this.env.search_request;
    }

    // send request to server
    this.http_post('expunge', post_data, lock);
  };

  this.purge_mailbox = function(mbox)
  {
    var lock, post_data = {_mbox: mbox};

    if (!confirm(this.get_label('purgefolderconfirm')))
      return false;

    // lock interface if it's the active mailbox
    if (mbox == this.env.mailbox) {
       lock = this.set_busy(true, 'loading');
       post_data._reload = 1;
     }

    // send request to server
    this.http_post('purge', post_data, lock);
  };

  // test if purge command is allowed
  this.purge_mailbox_test = function()
  {
    return (this.env.exists && (
      this.env.mailbox == this.env.trash_mailbox
      || this.env.mailbox == this.env.junk_mailbox
      || this.env.mailbox.startsWith(this.env.trash_mailbox + this.env.delimiter)
      || this.env.mailbox.startsWith(this.env.junk_mailbox + this.env.delimiter)
    ));
  };


  /*********************************************************/
  /*********           login form methods          *********/
  /*********************************************************/

  // handler for keyboard events on the _user field
  this.login_user_keyup = function(e)
  {
    var key = rcube_event.get_keycode(e),
      passwd = $('#rcmloginpwd');

    // enter
    if (key == 13 && passwd.length && !passwd.val()) {
      passwd.focus();
      return rcube_event.cancel(e);
    }

    return true;
  };


  /*********************************************************/
  /*********        message compose methods        *********/
  /*********************************************************/

  this.open_compose_step = function(p)
  {
    var url = this.url('mail/compose', p);

    // open new compose window
    if (this.env.compose_extwin && !this.env.extwin) {
      this.open_window(url);
    }
    else {
      this.redirect(url);
      if (this.env.extwin)
        window.resizeTo(Math.max(this.env.popup_width, $(window).width()), $(window).height() + 24);
    }
  };

  // init message compose form: set focus and eventhandlers
  this.init_messageform = function()
  {
    if (!this.gui_objects.messageform)
      return false;

    var i, elem, pos, input_from = $("[name='_from']"),
      input_to = $("[name='_to']"),
      input_subject = $("input[name='_subject']"),
      input_message = $("[name='_message']").get(0),
      html_mode = $("input[name='_is_html']").val() == '1',
      ac_fields = ['cc', 'bcc', 'replyto', 'followupto'],
      ac_props, opener_rc = this.opener();

    // close compose step in opener
    if (opener_rc && opener_rc.env.action == 'compose') {
      setTimeout(function(){
        if (opener.history.length > 1)
          opener.history.back();
        else
          opener_rc.redirect(opener_rc.get_task_url('mail'));
      }, 100);
      this.env.opened_extwin = true;
    }

    // configure parallel autocompletion
    if (this.env.autocomplete_threads > 0) {
      ac_props = {
        threads: this.env.autocomplete_threads,
        sources: this.env.autocomplete_sources
      };
    }

    // init live search events
    this.init_address_input_events(input_to, ac_props);
    for (i in ac_fields) {
      this.init_address_input_events($("[name='_"+ac_fields[i]+"']"), ac_props);
    }

    if (!html_mode) {
      pos = this.env.top_posting && this.env.compose_mode ? 0 : input_message.value.length;

      // add signature according to selected identity
      // if we have HTML editor, signature is added in a callback
      if (input_from.prop('type') == 'select-one') {
        // for some reason the caret initially is not at pos=0 in Firefox 51 (#5628)
        this.set_caret_pos(input_message, 0);
        this.change_identity(input_from[0]);
      }

      // set initial cursor position
      this.set_caret_pos(input_message, pos);

      // scroll to the bottom of the textarea (#1490114)
      if (pos) {
        $(input_message).scrollTop(input_message.scrollHeight);
      }
    }

    // check for locally stored compose data
    if (this.env.save_localstorage)
      this.compose_restore_dialog(0, html_mode)

    if (input_to.val() == '')
      elem = input_to;
    else if (input_subject.val() == '')
      elem = input_subject;
    else if (input_message)
      elem = input_message;

    // focus first empty element (need to be visible on IE8)
    $(elem).filter(':visible').focus();

    this.env.compose_focus_elem = document.activeElement;

    // get summary of all field values
    this.compose_field_hash(true);

    // start the auto-save timer
    this.auto_save_start();
  };

  this.compose_restore_dialog = function(j, html_mode)
  {
    var i, key, formdata, index = this.local_storage_get_item('compose.index', []);

    var show_next = function(i) {
      if (++i < index.length)
        ref.compose_restore_dialog(i, html_mode)
    }

    for (i = j || 0; i < index.length; i++) {
      key = index[i];
      formdata = this.local_storage_get_item('compose.' + key, null, true);
      if (!formdata) {
        continue;
      }
      // restore saved copy of current compose_id
      if (formdata.changed && key == this.env.compose_id) {
        this.restore_compose_form(key, html_mode);
        break;
      }
      // skip records from 'other' drafts
      if (this.env.draft_id && formdata.draft_id && formdata.draft_id != this.env.draft_id) {
        continue;
      }
      // skip records on reply
      if (this.env.reply_msgid && formdata.reply_msgid != this.env.reply_msgid) {
        continue;
      }
      // show dialog asking to restore the message
      if (formdata.changed && formdata.session != this.env.session_id) {
        this.show_popup_dialog(
          this.get_label('restoresavedcomposedata')
            .replace('$date', new Date(formdata.changed).toLocaleString())
            .replace('$subject', formdata._subject)
            .replace(/\n/g, '<br/>'),
          this.get_label('restoremessage'),
          [{
            text: this.get_label('restore'),
            'class': 'mainaction',
            click: function(){
              ref.restore_compose_form(key, html_mode);
              ref.remove_compose_data(key);  // remove old copy
              ref.save_compose_form_local();  // save under current compose_id
              $(this).dialog('close');
            }
          },
          {
            text: this.get_label('delete'),
            'class': 'delete',
            click: function(){
              ref.remove_compose_data(key);
              $(this).dialog('close');
              show_next(i);
            }
          },
          {
            text: this.get_label('ignore'),
            click: function(){
              $(this).dialog('close');
              show_next(i);
            }
          }]
        );
        break;
      }
    }
  }

  this.init_address_input_events = function(obj, props)
  {
    this.env.recipients_delimiter = this.env.recipients_separator + ' ';

    obj.keydown(function(e) { return ref.ksearch_keydown(e, this, props); })
      .attr({ 'autocomplete': 'off', 'aria-autocomplete': 'list', 'aria-expanded': 'false', 'role': 'combobox' });
  };

  this.submit_messageform = function(draft, saveonly)
  {
    var form = this.gui_objects.messageform;

    if (!form)
      return;

    // the message has been sent but not saved, ask the user what to do
    if (!saveonly && this.env.is_sent) {
      return this.show_popup_dialog(this.get_label('messageissent'), '',
        [{
          text: this.get_label('save'),
          'class': 'mainaction',
          click: function() {
            ref.submit_messageform(false, true);
            $(this).dialog('close');
          }
        },
        {
          text: this.get_label('cancel'),
          click: function() {
            $(this).dialog('close');
          }
        }]
      );
    }

    // delegate sending to Mailvelope routine
    if (this.mailvelope_editor) {
      return this.mailvelope_submit_messageform(draft, saveonly);
    }

    // all checks passed, send message
    var msgid = this.set_busy(true, draft || saveonly ? 'savingmessage' : 'sendingmessage'),
      lang = this.spellcheck_lang(),
      files = [];

    // send files list
    $('li', this.gui_objects.attachmentlist).each(function() { files.push(this.id.replace(/^rcmfile/, '')); });
    $('input[name="_attachments"]', form).val(files.join());

    form.target = 'savetarget';
    form._draft.value = draft ? '1' : '';
    form.action = this.add_url(form.action, '_unlock', msgid);
    form.action = this.add_url(form.action, '_lang', lang);
    form.action = this.add_url(form.action, '_framed', 1);

    if (saveonly) {
      form.action = this.add_url(form.action, '_saveonly', 1);
    }

    // register timer to notify about connection timeout
    this.submit_timer = setTimeout(function(){
      ref.set_busy(false, null, msgid);
      ref.display_message(ref.get_label('requesttimedout'), 'error');
    }, this.env.request_timeout * 1000);

    form.submit();
  };

  this.compose_recipient_select = function(list)
  {
    var id, n, recipients = 0;
    for (n=0; n < list.selection.length; n++) {
      id = list.selection[n];
      if (this.env.contactdata[id])
        recipients++;
    }
    this.enable_command('add-recipient', recipients);
  };

  this.compose_add_recipient = function(field)
  {
    // find last focused field name
    if (!field) {
      field = $(this.env.focused_field).filter(':visible');
      field = field.length ? field.attr('id').replace('_', '') : 'to';
    }

    var recipients = [], input = $('#_'+field), delim = this.env.recipients_delimiter;

    if (this.contact_list && this.contact_list.selection.length) {
      for (var id, n=0; n < this.contact_list.selection.length; n++) {
        id = this.contact_list.selection[n];
        if (id && this.env.contactdata[id]) {
          recipients.push(this.env.contactdata[id]);

          // group is added, expand it
          if (id.charAt(0) == 'E' && this.env.contactdata[id].indexOf('@') < 0 && input.length) {
            var gid = id.substr(1);
            this.group2expand[gid] = { name:this.env.contactdata[id], input:input.get(0) };
            this.http_request('group-expand', {_source: this.env.source, _gid: gid}, false);
          }
        }
      }
    }

    if (recipients.length && input.length) {
      var oldval = input.val(), rx = new RegExp(RegExp.escape(delim) + '\\s*$');
      if (oldval && !rx.test(oldval))
        oldval += delim + ' ';
      input.val(oldval + recipients.join(delim + ' ') + delim + ' ').change();
      this.triggerEvent('add-recipient', { field:field, recipients:recipients });
    }

    return recipients.length;
  };

  // checks the input fields before sending a message
  this.check_compose_input = function(cmd)
  {
    // check input fields
    var input_to = $("[name='_to']"),
      input_cc = $("[name='_cc']"),
      input_bcc = $("[name='_bcc']"),
      input_from = $("[name='_from']"),
      input_subject = $("[name='_subject']");

    // check sender (if have no identities)
    if (input_from.prop('type') == 'text' && !rcube_check_email(input_from.val(), true)) {
      alert(this.get_label('nosenderwarning'));
      input_from.focus();
      return false;
    }

    // check for empty recipient
    var recipients = input_to.val() ? input_to.val() : (input_cc.val() ? input_cc.val() : input_bcc.val());
    if (!rcube_check_email(recipients.replace(/^\s+/, '').replace(/[\s,;]+$/, ''), true)) {
      alert(this.get_label('norecipientwarning'));
      input_to.focus();
      return false;
    }

    // check if all files has been uploaded
    for (var key in this.env.attachments) {
      if (typeof this.env.attachments[key] === 'object' && !this.env.attachments[key].complete) {
        alert(this.get_label('notuploadedwarning'));
        return false;
      }
    }

    // display localized warning for missing subject
    if (input_subject.val() == '') {
      var buttons = {},
        myprompt = $('<div class="prompt">').html('<div class="message">' + this.get_label('nosubjectwarning') + '</div>')
          .appendTo(document.body),
        prompt_value = $('<input>').attr({type: 'text', size: 30}).val(this.get_label('nosubject'))
          .appendTo(myprompt),
        save_func = function() {
          input_subject.val(prompt_value.val());
          myprompt.dialog('close');
          ref.command(cmd, { nocheck:true });  // repeat command which triggered this
        };

      buttons[this.get_label('sendmessage')] = function() {
        save_func($(this));
      };
      buttons[this.get_label('cancel')] = function() {
        input_subject.focus();
        $(this).dialog('close');
      };

      myprompt.dialog({
        modal: true,
        resizable: false,
        buttons: buttons,
        close: function(event, ui) { $(this).remove(); }
      });

      prompt_value.select().keydown(function(e) {
        if (e.which == 13) save_func();
      });

      return false;
    }

    // check for empty body (only possible if not mailvelope encrypted)
    if (!this.mailvelope_editor && !this.editor.get_content() && !confirm(this.get_label('nobodywarning'))) {
      this.editor.focus();
      return false;
    }

    // move body from html editor to textarea (just to be sure, #1485860)
    this.editor.save();

    return true;
  };

  this.toggle_editor = function(props, obj, e)
  {
    // @todo: this should work also with many editors on page
    var result = this.editor.toggle(props.html, props.noconvert || false);

    // satisfy the expectations of aftertoggle-editor event subscribers
    props.mode = props.html ? 'html' : 'plain';

    if (!result && e) {
      // fix selector value if operation failed
      props.mode = props.html ? 'plain' : 'html';
      $(e.target).filter('select').val(props.mode);
    }

    if (result) {
      // update internal format flag
      $("input[name='_is_html']").val(props.html ? 1 : 0);
    }

    return result;
  };

  this.insert_response = function(key)
  {
    var insert = this.env.textresponses[key] ? this.env.textresponses[key].text : null;

    if (!insert)
      return false;

    this.editor.replace(insert);
  };

  /**
   * Open the dialog to save a new canned response
   */
  this.save_response = function()
  {
    // show dialog to enter a name and to modify the text to be saved
    var buttons = {}, text = this.editor.get_content({selection: true, format: 'text', nosig: true}),
      html = '<form class="propform">' +
      '<div class="prop block"><label>' + this.get_label('responsename') + '</label>' +
      '<input type="text" name="name" id="ffresponsename" size="40" /></div>' +
      '<div class="prop block"><label>' + this.get_label('responsetext') + '</label>' +
      '<textarea name="text" id="ffresponsetext" cols="40" rows="8"></textarea></div>' +
      '</form>';

    buttons[this.get_label('save')] = function(e) {
      var name = $('#ffresponsename').val(),
        text = $('#ffresponsetext').val();

      if (!text) {
        $('#ffresponsetext').select();
        return false;
      }
      if (!name)
        name = text.substring(0,40);

      var lock = ref.display_message(ref.get_label('savingresponse'), 'loading');
      ref.http_post('settings/responses', { _insert:1, _name:name, _text:text }, lock);
      $(this).dialog('close');
    };

    buttons[this.get_label('cancel')] = function() {
      $(this).dialog('close');
    };

    this.show_popup_dialog(html, this.get_label('newresponse'), buttons, {button_classes: ['mainaction']});

    $('#ffresponsetext').val(text);
    $('#ffresponsename').select();
  };

  this.add_response_item = function(response)
  {
    var key = response.key;
    this.env.textresponses[key] = response;

    // append to responses list
    if (this.gui_objects.responseslist) {
      var li = $('<li>').appendTo(this.gui_objects.responseslist);
      $('<a>').addClass('insertresponse active')
        .attr('href', '#')
        .attr('rel', key)
        .attr('tabindex', '0')
        .html(this.quote_html(response.name))
        .appendTo(li)
        .mousedown(function(e) {
          return rcube_event.cancel(e);
        })
        .on('mouseup keypress', function(e) {
          if (e.type == 'mouseup' || rcube_event.get_keycode(e) == 13) {
            ref.command('insert-response', $(this).attr('rel'));
            $(document.body).trigger('mouseup');  // hides the menu
            return rcube_event.cancel(e);
          }
        });
    }
  };

  this.edit_responses = function()
  {
    // TODO: implement inline editing of responses
  };

  this.delete_response = function(key)
  {
    if (!key && this.responses_list) {
      var selection = this.responses_list.get_selection();
      key = selection[0];
    }

    // submit delete request
    if (key && confirm(this.get_label('deleteresponseconfirm'))) {
      this.http_post('settings/delete-response', { _key: key }, false);
    }
  };

  // updates spellchecker buttons on state change
  this.spellcheck_state = function()
  {
    var active = this.editor.spellcheck_state();

    $.each(this.buttons.spellcheck || [], function(i, v) {
      $('#' + v.id)[active ? 'addClass' : 'removeClass']('selected');
    });

    return active;
  };

  // get selected language
  this.spellcheck_lang = function()
  {
    return this.editor.get_language();
  };

  this.spellcheck_lang_set = function(lang)
  {
    this.editor.set_language(lang);
  };

  // resume spellchecking, highlight provided mispellings without new ajax request
  this.spellcheck_resume = function(data)
  {
    this.editor.spellcheck_resume(data);
  };

  this.set_draft_id = function(id)
  {
    if (id && id != this.env.draft_id) {
      var filter = {task: 'mail', action: ''},
        rc = this.opener(false, filter) || this.opener(true, filter);

      // refresh the drafts folder in the opener window
      if (rc && rc.env.mailbox == this.env.drafts_mailbox)
        rc.command('checkmail');

      this.env.draft_id = id;
      $("input[name='_draft_saveid']").val(id);

      // reset history of hidden iframe used for saving draft (#1489643)
      // but don't do this on timer-triggered draft-autosaving (#1489789)
      if (window.frames['savetarget'] && window.frames['savetarget'].history && !this.draft_autosave_submit && !this.mailvelope_editor) {
        window.frames['savetarget'].history.back();
      }

      this.draft_autosave_submit = false;
    }

    // always remove local copy upon saving as draft
    this.remove_compose_data(this.env.compose_id);
    this.compose_skip_unsavedcheck = false;
  };

  this.auto_save_start = function()
  {
    if (this.env.draft_autosave) {
      this.draft_autosave_submit = false;
      this.save_timer = setTimeout(function(){
          ref.draft_autosave_submit = true;  // set auto-saved flag (#1489789)
          ref.command("savedraft");
      }, this.env.draft_autosave * 1000);
    }

    // save compose form content to local storage every 5 seconds
    if (!this.local_save_timer && window.localStorage && this.env.save_localstorage) {
      // track typing activity and only save on changes
      this.compose_type_activity = this.compose_type_activity_last = 0;
      $(document).keypress(function(e) { ref.compose_type_activity++; });

      this.local_save_timer = setInterval(function(){
        if (ref.compose_type_activity > ref.compose_type_activity_last) {
          ref.save_compose_form_local();
          ref.compose_type_activity_last = ref.compose_type_activity;
        }
      }, 5000);

      $(window).on('unload', function() {
        // remove copy from local storage if compose screen is left after warning
        if (!ref.env.server_error)
          ref.remove_compose_data(ref.env.compose_id);
      });
    }

    // check for unsaved changes before leaving the compose page
    if (!window.onbeforeunload) {
      window.onbeforeunload = function() {
        if (!ref.compose_skip_unsavedcheck && ref.cmp_hash != ref.compose_field_hash()) {
          return ref.get_label('notsentwarning');
        }
      };
    }

    // Unlock interface now that saving is complete
    this.busy = false;
  };

  this.compose_field_hash = function(save)
  {
    // check input fields
    var i, id, val, str = '', hash_fields = ['to', 'cc', 'bcc', 'subject'];

    for (i=0; i<hash_fields.length; i++)
      if (val = $('[name="_' + hash_fields[i] + '"]').val())
        str += val + ':';

    str += this.editor.get_content({refresh: false});

    if (this.env.attachments)
      for (id in this.env.attachments)
        str += id;

    // we can't detect changes in the Mailvelope editor so assume it changed
    if (this.mailvelope_editor) {
      str += ';' + new Date().getTime();
    }

    if (save)
      this.cmp_hash = str;

    return str;
  };

  // store the contents of the compose form to localstorage
  this.save_compose_form_local = function()
  {
    // feature is disabled
    if (!this.env.save_localstorage)
      return;

    var formdata = { session:this.env.session_id, changed:new Date().getTime() },
      ed, empty = true;

    // get fresh content from editor
    this.editor.save();

    if (this.env.draft_id) {
      formdata.draft_id = this.env.draft_id;
    }
    if (this.env.reply_msgid) {
      formdata.reply_msgid = this.env.reply_msgid;
    }

    $('input, select, textarea', this.gui_objects.messageform).each(function(i, elem) {
      switch (elem.tagName.toLowerCase()) {
        case 'input':
          if (elem.type == 'button' || elem.type == 'submit' || (elem.type == 'hidden' && elem.name != '_is_html')) {
            break;
          }
          formdata[elem.name] = elem.type != 'checkbox' || elem.checked ? $(elem).val() : '';

          if (formdata[elem.name] != '' && elem.type != 'hidden')
            empty = false;
          break;

        case 'select':
          formdata[elem.name] = $('option:checked', elem).val();
          break;

        default:
          formdata[elem.name] = $(elem).val();
          if (formdata[elem.name] != '')
            empty = false;
      }
    });

    if (!empty) {
      var index = this.local_storage_get_item('compose.index', []),
        key = this.env.compose_id;

      if ($.inArray(key, index) < 0) {
        index.push(key);
      }

      this.local_storage_set_item('compose.' + key, formdata, true);
      this.local_storage_set_item('compose.index', index);
    }
  };

  // write stored compose data back to form
  this.restore_compose_form = function(key, html_mode)
  {
    var ed, formdata = this.local_storage_get_item('compose.' + key, true);

    if (formdata && typeof formdata == 'object') {
      $.each(formdata, function(k, value) {
        if (k[0] == '_') {
          var elem = $("*[name='"+k+"']");
          if (elem[0] && elem[0].type == 'checkbox') {
            elem.prop('checked', value != '');
          }
          else {
            elem.val(value);
          }
        }
      });

      // initialize HTML editor
      if ((formdata._is_html == '1' && !html_mode) || (formdata._is_html != '1' && html_mode)) {
        this.command('toggle-editor', {id: this.env.composebody, html: !html_mode, noconvert: true});
      }
    }
  };

  // remove stored compose data from localStorage
  this.remove_compose_data = function(key)
  {
    var index = this.local_storage_get_item('compose.index', []);

    if ($.inArray(key, index) >= 0) {
      this.local_storage_remove_item('compose.' + key);
      this.local_storage_set_item('compose.index', $.grep(index, function(val,i) { return val != key; }));
    }
  };

  // clear all stored compose data of this user
  this.clear_compose_data = function()
  {
    var i, index = this.local_storage_get_item('compose.index', []);

    for (i=0; i < index.length; i++) {
      this.local_storage_remove_item('compose.' + index[i]);
    }

    this.local_storage_remove_item('compose.index');
  };

  this.change_identity = function(obj, show_sig)
  {
    if (!obj || !obj.options)
      return false;

    if (!show_sig)
      show_sig = this.env.show_sig;

    var id = obj.options[obj.selectedIndex].value,
      sig = this.env.identity,
      delim = this.env.recipients_separator,
      rx_delim = RegExp.escape(delim);

    // enable manual signature insert
    if (this.env.signatures && this.env.signatures[id]) {
      this.enable_command('insert-sig', true);
      this.env.compose_commands.push('insert-sig');
    }
    else
      this.enable_command('insert-sig', false);

    // first function execution
    if (!this.env.identities_initialized) {
      this.env.identities_initialized = true;
      if (this.env.show_sig_later)
        this.env.show_sig = true;
      if (this.env.opened_extwin)
        return;
    }

    // update reply-to/bcc fields with addresses defined in identities
    $.each(['replyto', 'bcc'], function() {
      var rx, key = this,
        old_val = sig && ref.env.identities[sig] ? ref.env.identities[sig][key] : '',
        new_val = id && ref.env.identities[id] ? ref.env.identities[id][key] : '',
        input = $('[name="_'+key+'"]'), input_val = input.val();

      // remove old address(es)
      if (old_val && input_val) {
        rx = new RegExp('\\s*' + RegExp.escape(old_val) + '\\s*');
        input_val = input_val.replace(rx, '');
      }

      // cleanup
      rx = new RegExp(rx_delim + '\\s*' + rx_delim, 'g');
      input_val = String(input_val).replace(rx, delim);
      rx = new RegExp('^[\\s' + rx_delim + ']+');
      input_val = input_val.replace(rx, '');

      // add new address(es)
      if (new_val && input_val.indexOf(new_val) == -1 && input_val.indexOf(new_val.replace(/"/g, '')) == -1) {
        if (input_val) {
          rx = new RegExp('[' + rx_delim + '\\s]+$')
          input_val = input_val.replace(rx, '') + delim + ' ';
        }

        input_val += new_val + delim + ' ';
      }

      if (old_val || new_val)
        input.val(input_val).change();
    });

    this.editor.change_signature(id, show_sig);
    this.env.identity = id;
    this.triggerEvent('change_identity');
    return true;
  };

  // upload (attachment) file
  this.upload_file = function(form, action, lock)
  {
    if (!form)
      return;

    // count files and size on capable browser
    var size = 0, numfiles = 0;

    $('input[type=file]', form).each(function(i, field) {
      var files = field.files ? field.files.length : (field.value ? 1 : 0);

      // check file size
      if (field.files) {
        for (var i=0; i < files; i++)
          size += field.files[i].size;
      }

      numfiles += files;
    });

    // create hidden iframe and post upload form
    if (numfiles) {
      if (this.env.max_filesize && this.env.filesizeerror && size > this.env.max_filesize) {
        this.display_message(this.env.filesizeerror, 'error');
        return false;
      }

      var frame_name = this.async_upload_form(form, action || 'upload', function(e) {
        var d, content = '';
        try {
          if (this.contentDocument) {
            d = this.contentDocument;
          } else if (this.contentWindow) {
            d = this.contentWindow.document;
          }
          content = d.childNodes[1].innerHTML;
        } catch (err) {}

        if (!content.match(/add2attachment/) && (!bw.opera || (ref.env.uploadframe && ref.env.uploadframe == e.data.ts))) {
          if (!content.match(/display_message/))
            ref.display_message(ref.get_label('fileuploaderror'), 'error');
          ref.remove_from_attachment_list(e.data.ts);

          if (lock)
            ref.set_busy(false, null, lock);
        }
        // Opera hack: handle double onload
        if (bw.opera)
          ref.env.uploadframe = e.data.ts;
      });

      // display upload indicator and cancel button
      var content = '<span>' + this.get_label('uploading' + (numfiles > 1 ? 'many' : '')) + '</span>',
        ts = frame_name.replace(/^rcmupload/, '');

      this.add2attachment_list(ts, { name:'', html:content, classname:'uploading', frame:frame_name, complete:false });

      // upload progress support
      if (this.env.upload_progress_time) {
        this.upload_progress_start('upload', ts);
      }

      // set reference to the form object
      this.gui_objects.attachmentform = form;
      return true;
    }
  };

  // add file name to attachment list
  // called from upload page
  this.add2attachment_list = function(name, att, upload_id)
  {
    if (upload_id)
      this.triggerEvent('fileuploaded', {name: name, attachment: att, id: upload_id});

    if (!this.env.attachments)
      this.env.attachments = {};

    if (upload_id && this.env.attachments[upload_id])
      delete this.env.attachments[upload_id];

    this.env.attachments[name] = att;

    if (!this.gui_objects.attachmentlist)
      return false;

    if (!att.complete && this.env.loadingicon)
      att.html = '<img src="'+this.env.loadingicon+'" alt="" class="uploading" />' + att.html;

    if (!att.complete && att.frame)
      att.html = '<a title="'+this.get_label('cancel')+'" onclick="return rcmail.cancel_attachment_upload(\''+name+'\', \''+att.frame+'\');" href="#cancelupload" class="cancelupload">'
        + (this.env.cancelicon ? '<img src="'+this.env.cancelicon+'" alt="'+this.get_label('cancel')+'" />' : this.get_label('cancel')) + '</a>' + att.html;

    var indicator, li = $('<li>');

    li.attr('id', name)
      .addClass(att.classname)
      .html(att.html)
      .on('mouseover', function() { rcube_webmail.long_subject_title_ex(this); });

    // replace indicator's li
    if (upload_id && (indicator = document.getElementById(upload_id))) {
      li.replaceAll(indicator);
    }
    else { // add new li
      li.appendTo(this.gui_objects.attachmentlist);
    }

    // set tabindex attribute
    var tabindex = $(this.gui_objects.attachmentlist).attr('data-tabindex') || '0';
    li.find('a').attr('tabindex', tabindex);

    return true;
  };

  this.remove_from_attachment_list = function(name)
  {
    if (this.env.attachments) {
      delete this.env.attachments[name];
      $('#'+name).remove();
    }
  };

  this.remove_attachment = function(name)
  {
    if (name && this.env.attachments[name])
      this.http_post('remove-attachment', { _id:this.env.compose_id, _file:name });

    return true;
  };

  this.cancel_attachment_upload = function(name, frame_name)
  {
    if (!name || !frame_name)
      return false;

    this.remove_from_attachment_list(name);
    $("iframe[name='"+frame_name+"']").remove();
    return false;
  };

  this.upload_progress_start = function(action, name)
  {
    setTimeout(function() { ref.http_request(action, {_progress: name}); },
      this.env.upload_progress_time * 1000);
  };

  this.upload_progress_update = function(param)
  {
    var elem = $('#'+param.name + ' > span');

    if (!elem.length || !param.text)
      return;

    elem.text(param.text);

    if (!param.done)
      this.upload_progress_start(param.action, param.name);
  };

  // send remote request to add a new contact
  this.add_contact = function(value)
  {
    if (value)
      this.http_post('addcontact', {_address: value});

    return true;
  };

  // send remote request to search mail or contacts
  this.qsearch = function(value)
  {
    if (value != '') {
      var r, lock = this.set_busy(true, 'searching'),
        url = this.search_params(value),
        action = this.env.action == 'compose' && this.contact_list ? 'search-contacts' : 'search';

      if (this.message_list)
        this.clear_message_list();
      else if (this.contact_list)
        this.list_contacts_clear();

      if (this.env.source)
        url._source = this.env.source;
      if (this.env.group)
        url._gid = this.env.group;

      // reset vars
      this.env.current_page = 1;

      r = this.http_request(action, url, lock);

      this.env.qsearch = {lock: lock, request: r};
      this.enable_command('set-listmode', this.env.threads && (this.env.search_scope || 'base') == 'base');

      return true;
    }

    return false;
  };

  this.continue_search = function(request_id)
  {
    var lock = this.set_busy(true, 'stillsearching');

    setTimeout(function() {
      var url = ref.search_params();
      url._continue = request_id;
      ref.env.qsearch = { lock: lock, request: ref.http_request('search', url, lock) };
    }, 100);
  };

  // build URL params for search
  this.search_params = function(search, filter)
  {
    var n, url = {}, mods_arr = [],
      mods = this.env.search_mods,
      scope = this.env.search_scope || 'base',
      mbox = scope == 'all' ? '*' : this.env.mailbox;

    if (!filter && this.gui_objects.search_filter)
      filter = this.gui_objects.search_filter.value;

    if (!search && this.gui_objects.qsearchbox)
      search = this.gui_objects.qsearchbox.value;

    if (filter)
      url._filter = filter;

    if (this.gui_objects.search_interval)
      url._interval = $(this.gui_objects.search_interval).val();

    if (search) {
      url._q = search;

      if (mods && this.message_list)
        mods = mods[mbox] || mods['*'];

      if (mods) {
        for (n in mods)
          mods_arr.push(n);
        url._headers = mods_arr.join(',');
      }
    }

    if (scope)
      url._scope = scope;
    if (mbox && scope != 'all')
      url._mbox = mbox;

    return url;
  };

  // reset search filter
  this.reset_search_filter = function()
  {
    this.filter_disabled = true;
    if (this.gui_objects.search_filter)
      $(this.gui_objects.search_filter).val('ALL').change();
    this.filter_disabled = false;
  };

  // reset quick-search form
  this.reset_qsearch = function(all)
  {
    if (this.gui_objects.qsearchbox)
      this.gui_objects.qsearchbox.value = '';

    if (this.gui_objects.search_interval)
      $(this.gui_objects.search_interval).val('');

    if (this.env.qsearch)
      this.abort_request(this.env.qsearch);

    if (all) {
      this.env.search_scope = 'base';
      this.reset_search_filter();
    }

    this.env.qsearch = null;
    this.env.search_request = null;
    this.env.search_id = null;
    this.select_all_mode = false;

    this.enable_command('set-listmode', this.env.threads);
  };

  this.set_searchscope = function(scope)
  {
    var old = this.env.search_scope;
    this.env.search_scope = scope;

    // re-send search query with new scope
    if (scope != old && this.env.search_request) {
      if (!this.qsearch(this.gui_objects.qsearchbox.value) && this.env.search_filter && this.env.search_filter != 'ALL')
        this.filter_mailbox(this.env.search_filter);
      if (scope != 'all')
        this.select_folder(this.env.mailbox, '', true);
    }
  };

  this.set_searchinterval = function(interval)
  {
    var old = this.env.search_interval;
    this.env.search_interval = interval;

    // re-send search query with new interval
    if (interval != old && this.env.search_request) {
      if (!this.qsearch(this.gui_objects.qsearchbox.value) && this.env.search_filter && this.env.search_filter != 'ALL')
        this.filter_mailbox(this.env.search_filter);
      if (interval)
        this.select_folder(this.env.mailbox, '', true);
    }
  };

  this.set_searchmods = function(mods)
  {
    var mbox = this.env.mailbox,
      scope = this.env.search_scope || 'base';

    if (scope == 'all')
      mbox = '*';

    if (!this.env.search_mods)
      this.env.search_mods = {};

    if (mbox)
      this.env.search_mods[mbox] = mods;
  };

  this.is_multifolder_listing = function()
  {
    return this.env.multifolder_listing !== undefined ? this.env.multifolder_listing :
      (this.env.search_request && (this.env.search_scope || 'base') != 'base');
  };

  // action executed after mail is sent
  this.sent_successfully = function(type, msg, folders, save_error)
  {
    this.display_message(msg, type);
    this.compose_skip_unsavedcheck = true;

    if (this.env.extwin) {
      if (!save_error)
        this.lock_form(this.gui_objects.messageform);

      var filter = {task: 'mail', action: ''},
        rc = this.opener(false, filter) || this.opener(true, filter);

      if (rc) {
        rc.display_message(msg, type);
        // refresh the folder where sent message was saved or replied message comes from
        if (folders && $.inArray(rc.env.mailbox, folders) >= 0) {
          rc.command('checkmail');
        }
      }

      if (!save_error)
        setTimeout(function() { window.close(); }, 1000);
    }
    else if (!save_error) {
      // before redirect we need to wait some time for Chrome (#1486177)
      setTimeout(function() { ref.list_mailbox(); }, 500);
    }

    if (save_error)
      this.env.is_sent = true;
  };


  /*********************************************************/
  /*********     keyboard live-search methods      *********/
  /*********************************************************/

  // handler for keyboard events on address-fields
  this.ksearch_keydown = function(e, obj, props)
  {
    if (this.ksearch_timer)
      clearTimeout(this.ksearch_timer);

    var key = rcube_event.get_keycode(e),
      mod = rcube_event.get_modifier(e);

    switch (key) {
      case 38:  // arrow up
      case 40:  // arrow down
        if (!this.ksearch_visible())
          return;

        var dir = key == 38 ? 1 : 0,
          highlight = document.getElementById('rcmkSearchItem' + this.ksearch_selected);

        if (!highlight)
          highlight = this.ksearch_pane.__ul.firstChild;

        if (highlight)
          this.ksearch_select(dir ? highlight.previousSibling : highlight.nextSibling);

        return rcube_event.cancel(e);

      case 9:   // tab
        if (mod == SHIFT_KEY || !this.ksearch_visible()) {
          this.ksearch_hide();
          return;
        }

      case 13:  // enter
        if (!this.ksearch_visible())
          return false;

        // insert selected address and hide ksearch pane
        this.insert_recipient(this.ksearch_selected);
        this.ksearch_hide();

        return rcube_event.cancel(e);

      case 27:  // escape
        this.ksearch_hide();
        return;

      case 37:  // left
      case 39:  // right
        return;
    }

    // start timer
    this.ksearch_timer = setTimeout(function(){ ref.ksearch_get_results(props); }, 200);
    this.ksearch_input = obj;

    return true;
  };

  this.ksearch_visible = function()
  {
    return this.ksearch_selected !== null && this.ksearch_selected !== undefined && this.ksearch_value;
  };

  this.ksearch_select = function(node)
  {
    if (this.ksearch_pane && node) {
      this.ksearch_pane.find('li.selected').removeClass('selected').removeAttr('aria-selected');
    }

    if (node) {
      $(node).addClass('selected').attr('aria-selected', 'true');
      this.ksearch_selected = node._rcm_id;
      $(this.ksearch_input).attr('aria-activedescendant', 'rcmkSearchItem' + this.ksearch_selected);
    }
  };

  this.insert_recipient = function(id)
  {
    if (id === null || !this.env.contacts[id] || !this.ksearch_input)
      return;

    // get cursor pos
    var inp_value = this.ksearch_input.value,
      cpos = this.get_caret_pos(this.ksearch_input),
      p = inp_value.lastIndexOf(this.ksearch_value, cpos),
      trigger = false,
      insert = '',
      // replace search string with full address
      pre = inp_value.substring(0, p),
      end = inp_value.substring(p+this.ksearch_value.length, inp_value.length);

    this.ksearch_destroy();

    // insert all members of a group
    if (typeof this.env.contacts[id] === 'object' && this.env.contacts[id].type == 'group' && !this.env.contacts[id].email) {
      insert += this.env.contacts[id].name + this.env.recipients_delimiter;
      this.group2expand[this.env.contacts[id].id] = $.extend({ input: this.ksearch_input }, this.env.contacts[id]);
      this.http_request('mail/group-expand', {_source: this.env.contacts[id].source, _gid: this.env.contacts[id].id}, false);
    }
    else if (typeof this.env.contacts[id] === 'object' && this.env.contacts[id].name) {
      insert = this.env.contacts[id].name + this.env.recipients_delimiter;
      trigger = true;
    }
    else if (typeof this.env.contacts[id] === 'string') {
      insert = this.env.contacts[id] + this.env.recipients_delimiter;
      trigger = true;
    }

    this.ksearch_input.value = pre + insert + end;

    // set caret to insert pos
    this.set_caret_pos(this.ksearch_input, p + insert.length);

    if (trigger) {
      this.triggerEvent('autocomplete_insert', { field:this.ksearch_input, insert:insert, data:this.env.contacts[id] });
      this.compose_type_activity++;
    }
  };

  this.replace_group_recipients = function(id, recipients)
  {
    if (this.group2expand[id]) {
      this.group2expand[id].input.value = this.group2expand[id].input.value.replace(this.group2expand[id].name, recipients);
      this.triggerEvent('autocomplete_insert', { field:this.group2expand[id].input, insert:recipients });
      this.group2expand[id] = null;
      this.compose_type_activity++;
    }
  };

  // address search processor
  this.ksearch_get_results = function(props)
  {
    var inp_value = this.ksearch_input ? this.ksearch_input.value : null;

    if (inp_value === null)
      return;

    if (this.ksearch_pane && this.ksearch_pane.is(":visible"))
      this.ksearch_pane.hide();

    // get string from current cursor pos to last comma
    var cpos = this.get_caret_pos(this.ksearch_input),
      p = inp_value.lastIndexOf(this.env.recipients_separator, cpos-1),
      q = inp_value.substring(p+1, cpos),
      min = this.env.autocomplete_min_length,
      data = this.ksearch_data;

    // trim query string
    q = $.trim(q);

    // Don't (re-)search if the last results are still active
    if (q == this.ksearch_value)
      return;

    this.ksearch_destroy();

    if (q.length && q.length < min) {
      if (!this.ksearch_info) {
        this.ksearch_info = this.display_message(
          this.get_label('autocompletechars').replace('$min', min));
      }
      return;
    }

    var old_value = this.ksearch_value;
    this.ksearch_value = q;

    // ...string is empty
    if (!q.length)
      return;

    // ...new search value contains old one and previous search was not finished or its result was empty
    if (old_value && old_value.length && q.startsWith(old_value) && (!data || data.num <= 0) && this.env.contacts && !this.env.contacts.length)
      return;

    var sources = props && props.sources ? props.sources : [''];
    var reqid = this.multi_thread_http_request({
      items: sources,
      threads: props && props.threads ? props.threads : 1,
      action:  props && props.action ? props.action : 'mail/autocomplete',
      postdata: { _search:q, _source:'%s' },
      lock: this.display_message(this.get_label('searching'), 'loading')
    });

    this.ksearch_data = { id:reqid, sources:sources.slice(), num:sources.length };
  };

  this.ksearch_query_results = function(results, search, reqid)
  {
    // trigger multi-thread http response callback
    this.multi_thread_http_response(results, reqid);

    // search stopped in meantime?
    if (!this.ksearch_value)
      return;

    // ignore this outdated search response
    if (this.ksearch_input && search != this.ksearch_value)
      return;

    // display search results
    var i, id, len, ul, text, type, init,
      value = this.ksearch_value,
      maxlen = this.env.autocomplete_max ? this.env.autocomplete_max : 15;

    // create results pane if not present
    if (!this.ksearch_pane) {
      ul = $('<ul>');
      this.ksearch_pane = $('<div>').attr('id', 'rcmKSearchpane').attr('role', 'listbox')
        .css({ position:'absolute', 'z-index':30000 }).append(ul).appendTo(document.body);
      this.ksearch_pane.__ul = ul[0];
    }

    ul = this.ksearch_pane.__ul;

    // remove all search results or add to existing list if parallel search
    if (reqid && this.ksearch_pane.data('reqid') == reqid) {
      maxlen -= ul.childNodes.length;
    }
    else {
      this.ksearch_pane.data('reqid', reqid);
      init = 1;
      // reset content
      ul.innerHTML = '';
      this.env.contacts = [];
      // move the results pane right under the input box
      var pos = $(this.ksearch_input).offset();
      this.ksearch_pane.css({ left:pos.left+'px', top:(pos.top + this.ksearch_input.offsetHeight)+'px', display: 'none'});
    }

    // add each result line to list
    if (results && (len = results.length)) {
      for (i=0; i < len && maxlen > 0; i++) {
        text = typeof results[i] === 'object' ? (results[i].display || results[i].name) : results[i];
        type = typeof results[i] === 'object' ? results[i].type : '';
        id = i + this.env.contacts.length;
        $('<li>').attr('id', 'rcmkSearchItem' + id)
          .attr('role', 'option')
          .html('<i class="icon"></i>' + this.quote_html(text.replace(new RegExp('('+RegExp.escape(value)+')', 'ig'), '##$1%%')).replace(/##([^%]+)%%/g, '<b>$1</b>'))
          .addClass(type || '')
          .appendTo(ul)
          .mouseover(function() { ref.ksearch_select(this); })
          .mouseup(function() { ref.ksearch_click(this); })
          .get(0)._rcm_id = id;
        maxlen -= 1;
      }
    }

    if (ul.childNodes.length) {
      // set the right aria-* attributes to the input field
      $(this.ksearch_input)
        .attr('aria-haspopup', 'true')
        .attr('aria-expanded', 'true')
        .attr('aria-owns', 'rcmKSearchpane');

      this.ksearch_pane.show();

      // select the first
      if (!this.env.contacts.length) {
        this.ksearch_select($('li:first', ul).get(0));
      }
    }

    if (len)
      this.env.contacts = this.env.contacts.concat(results);

    if (this.ksearch_data.id == reqid)
      this.ksearch_data.num--;
  };

  this.ksearch_click = function(node)
  {
    if (this.ksearch_input)
      this.ksearch_input.focus();

    this.insert_recipient(node._rcm_id);
    this.ksearch_hide();
  };

  this.ksearch_blur = function()
  {
    if (this.ksearch_timer)
      clearTimeout(this.ksearch_timer);

    this.ksearch_input = null;
    this.ksearch_hide();
  };

  this.ksearch_hide = function()
  {
    this.ksearch_selected = null;
    this.ksearch_value = '';

    if (this.ksearch_pane)
      this.ksearch_pane.hide();

    $(this.ksearch_input)
      .attr('aria-haspopup', 'false')
      .attr('aria-expanded', 'false')
      .removeAttr('aria-activedescendant')
      .removeAttr('aria-owns');

    this.ksearch_destroy();
  };

  // Clears autocomplete data/requests
  this.ksearch_destroy = function()
  {
    if (this.ksearch_data)
      this.multi_thread_request_abort(this.ksearch_data.id);

    if (this.ksearch_info)
      this.hide_message(this.ksearch_info);

    if (this.ksearch_msg)
      this.hide_message(this.ksearch_msg);

    this.ksearch_data = null;
    this.ksearch_info = null;
    this.ksearch_msg = null;
  };


  /*********************************************************/
  /*********         address book methods          *********/
  /*********************************************************/

  this.contactlist_keypress = function(list)
  {
    if (list.key_pressed == list.DELETE_KEY)
      this.command('delete');
  };

  this.contactlist_select = function(list)
  {
    if (this.preview_timer)
      clearTimeout(this.preview_timer);

    var n, id, sid, contact, writable = false,
      selected = list.selection.length,
      source = this.env.source ? this.env.address_sources[this.env.source] : null;

    // we don't have dblclick handler here, so use 200 instead of this.dblclick_time
    if (this.env.contentframe && (id = list.get_single_selection()))
      this.preview_timer = setTimeout(function(){ ref.load_contact(id, 'show'); }, 200);
    else if (this.env.contentframe)
      this.show_contentframe(false);

    if (selected) {
      list.draggable = false;

      // no source = search result, we'll need to detect if any of
      // selected contacts are in writable addressbook to enable edit/delete
      // we'll also need to know sources used in selection for copy
      // and group-addmember operations (drag&drop)
      this.env.selection_sources = [];

      if (source) {
        this.env.selection_sources.push(this.env.source);
      }

      for (n in list.selection) {
        contact = list.data[list.selection[n]];
        if (!source) {
          sid = String(list.selection[n]).replace(/^[^-]+-/, '');
          if (sid && this.env.address_sources[sid]) {
            writable = writable || (!this.env.address_sources[sid].readonly && !contact.readonly);
            this.env.selection_sources.push(sid);
          }
        }
        else {
          writable = writable || (!source.readonly && !contact.readonly);
        }

        if (contact._type != 'group')
          list.draggable = true;
      }

      this.env.selection_sources = $.unique(this.env.selection_sources);
    }

    // if a group is currently selected, and there is at least one contact selected
    // thend we can enable the group-remove-selected command
    this.enable_command('group-remove-selected', this.env.group && selected && writable);
    this.enable_command('compose', this.env.group || selected);
    this.enable_command('print', selected == 1);
    this.enable_command('export-selected', 'copy', selected > 0);
    this.enable_command('edit', id && writable);
    this.enable_command('delete', 'move', selected && writable);

    return false;
  };

  this.list_contacts = function(src, group, page, search)
  {
    var win, folder, index = -1, url = {},
      refresh = src === undefined && group === undefined && page === undefined,
      target = window;

    if (!src)
      src = this.env.source;

    if (refresh)
      group = this.env.group;

    if (src != this.env.source) {
      page = this.env.current_page = 1;
      this.reset_qsearch();
    }
    else if (!refresh && group != this.env.group)
      page = this.env.current_page = 1;

    if (this.env.search_id)
      folder = 'S'+this.env.search_id;
    else if (!this.env.search_request)
      folder = group ? 'G'+src+group : src;

    this.env.source = src;
    this.env.group = group;

    // truncate groups listing stack
    $.each(this.env.address_group_stack, function(i, v) {
      if (ref.env.group == v.id) {
        index = i;
        return false;
      }
    });

    this.env.address_group_stack = index < 0 ? [] : this.env.address_group_stack.slice(0, index);

    // make sure the current group is on top of the stack
    if (this.env.group) {
      if (!search) search = {};
      search.id = this.env.group;
      this.env.address_group_stack.push(search);

      // mark the first group on the stack as selected in the directory list
      folder = 'G'+src+this.env.address_group_stack[0].id;
    }
    else if (this.gui_objects.addresslist_title) {
        $(this.gui_objects.addresslist_title).text(this.get_label('contacts'));
    }

    if (!this.env.search_id)
      this.select_folder(folder, '', true);

    // load contacts remotely
    if (this.gui_objects.contactslist) {
      this.list_contacts_remote(src, group, page);
      return;
    }

    if (win = this.get_frame_window(this.env.contentframe)) {
      target = win;
      url._framed = 1;
    }

    if (group)
      url._gid = group;
    if (page)
      url._page = page;
    if (src)
      url._source = src;

    // also send search request to get the correct listing
    if (this.env.search_request)
      url._search = this.env.search_request;

    this.set_busy(true, 'loading');
    this.location_href(url, target);
  };

  // send remote request to load contacts list
  this.list_contacts_remote = function(src, group, page)
  {
    // clear message list first
    this.list_contacts_clear();

    // send request to server
    var url = {}, lock = this.set_busy(true, 'loading');

    if (src)
      url._source = src;
    if (page)
      url._page = page;
    if (group)
      url._gid = group;

    this.env.source = src;
    this.env.group = group;

    // also send search request to get the right records
    if (this.env.search_request)
      url._search = this.env.search_request;

    this.http_request(this.env.task == 'mail' ? 'list-contacts' : 'list', url, lock);

    if (this.env.task != 'mail')
      this.update_state({_source: src, _page: page && page > 1 ? page : null, _gid: group});
  };

  this.list_contacts_clear = function()
  {
    this.contact_list.data = {};
    this.contact_list.clear(true);
    this.show_contentframe(false);
    this.enable_command('delete', 'move', 'copy', 'print', false);
    this.enable_command('compose', this.env.group);
  };

  this.set_group_prop = function(prop)
  {
    if (this.gui_objects.addresslist_title) {
      var boxtitle = $(this.gui_objects.addresslist_title).html('');  // clear contents

      // add link to pop back to parent group
      if (this.env.address_group_stack.length > 1
        || (this.env.address_group_stack.length == 1 && this.env.address_group_stack[0].search_request)
      ) {
        $('<a href="#list">...</a>')
          .attr('title', this.get_label('uponelevel'))
          .addClass('poplink')
          .appendTo(boxtitle)
          .click(function(e){ return ref.command('popgroup','',this); });
        boxtitle.append('&nbsp;&raquo;&nbsp;');
      }

      boxtitle.append($('<span>').text(prop ? prop.name : this.get_label('contacts')));
    }
  };

  // load contact record
  this.load_contact = function(cid, action, framed)
  {
    var win, url = {}, target = window,
      rec = this.contact_list ? this.contact_list.data[cid] : null;

    if (win = this.get_frame_window(this.env.contentframe)) {
      url._framed = 1;
      target = win;
      this.show_contentframe(true);

      // load dummy content, unselect selected row(s)
      if (!cid)
        this.contact_list.clear_selection();

      this.enable_command('compose', rec && rec.email);
      this.enable_command('export-selected', 'print', rec && rec._type != 'group');
    }
    else if (framed)
      return false;

    if (action && (cid || action == 'add') && !this.drag_active) {
      if (this.env.group)
        url._gid = this.env.group;

      if (this.env.search_request)
        url._search = this.env.search_request;

      url._action = action;
      url._source = this.env.source;
      url._cid = cid;

      this.location_href(url, target, true);
    }

    return true;
  };

  // add/delete member to/from the group
  this.group_member_change = function(what, cid, source, gid)
  {
    if (what != 'add')
      what = 'del';

    var label = this.get_label(what == 'add' ? 'addingmember' : 'removingmember'),
      lock = this.display_message(label, 'loading'),
      post_data = {_cid: cid, _source: source, _gid: gid};

    this.http_post('group-'+what+'members', post_data, lock);
  };

  this.contacts_drag_menu = function(e, to)
  {
    var dest = to.type == 'group' ? to.source : to.id,
      source = this.env.source;

    if (!this.env.address_sources[dest] || this.env.address_sources[dest].readonly)
      return true;

    // search result may contain contacts from many sources, but if there is only one...
    if (source == '' && this.env.selection_sources.length == 1)
      source = this.env.selection_sources[0];

    if (to.type == 'group' && dest == source) {
      var cid = this.contact_list.get_selection().join(',');
      this.group_member_change('add', cid, dest, to.id);
      return true;
    }
    // move action is not possible, "redirect" to copy if menu wasn't requested
    else if (!this.commands.move && rcube_event.get_modifier(e) != SHIFT_KEY) {
      this.copy_contacts(to);
      return true;
    }

    return this.drag_menu(e, to);
  };

  // copy contact(s) to the specified target (group or directory)
  this.copy_contacts = function(to)
  {
    var dest = to.type == 'group' ? to.source : to.id,
      source = this.env.source,
      group = this.env.group ? this.env.group : '',
      cid = this.contact_list.get_selection().join(',');

    if (!cid || !this.env.address_sources[dest] || this.env.address_sources[dest].readonly)
      return;

    // search result may contain contacts from many sources, but if there is only one...
    if (source == '' && this.env.selection_sources.length == 1)
      source = this.env.selection_sources[0];

    // tagret is a group
    if (to.type == 'group') {
      if (dest == source)
        return;

      var lock = this.display_message(this.get_label('copyingcontact'), 'loading'),
        post_data = {_cid: cid, _source: this.env.source, _to: dest, _togid: to.id, _gid: group};

      this.http_post('copy', post_data, lock);
    }
    // target is an addressbook
    else if (to.id != source) {
      var lock = this.display_message(this.get_label('copyingcontact'), 'loading'),
        post_data = {_cid: cid, _source: this.env.source, _to: to.id, _gid: group};

      this.http_post('copy', post_data, lock);
    }
  };

  // move contact(s) to the specified target (group or directory)
  this.move_contacts = function(to)
  {
    var dest = to.type == 'group' ? to.source : to.id,
      source = this.env.source,
      group = this.env.group ? this.env.group : '';

    if (!this.env.address_sources[dest] || this.env.address_sources[dest].readonly)
      return;

    // search result may contain contacts from many sources, but if there is only one...
    if (source == '' && this.env.selection_sources.length == 1)
      source = this.env.selection_sources[0];

    if (to.type == 'group') {
      if (dest == source)
        return;

      this._with_selected_contacts('move', {_to: dest, _togid: to.id});
    }
    // target is an addressbook
    else if (to.id != source)
      this._with_selected_contacts('move', {_to: to.id});
  };

  // delete contact(s)
  this.delete_contacts = function()
  {
    var undelete = this.env.source && this.env.address_sources[this.env.source].undelete;

    if (!undelete && !confirm(this.get_label('deletecontactconfirm')))
      return;

    return this._with_selected_contacts('delete');
  };

  this._with_selected_contacts = function(action, post_data)
  {
    var selection = this.contact_list ? this.contact_list.get_selection() : [];

    // exit if no contact specified or if selection is empty
    if (!selection.length && !this.env.cid)
      return;

    var n, a_cids = [],
      label = action == 'delete' ? 'contactdeleting' : 'movingcontact',
      lock = this.display_message(this.get_label(label), 'loading');

    if (this.env.cid)
      a_cids.push(this.env.cid);
    else {
      for (n=0; n<selection.length; n++) {
        id = selection[n];
        a_cids.push(id);
        this.contact_list.remove_row(id, (n == selection.length-1));
      }

      // hide content frame if we delete the currently displayed contact
      if (selection.length == 1)
        this.show_contentframe(false);
    }

    if (!post_data)
      post_data = {};

    post_data._source = this.env.source;
    post_data._from = this.env.action;
    post_data._cid = a_cids.join(',');

    if (this.env.group)
      post_data._gid = this.env.group;

    // also send search request to get the right records from the next page
    if (this.env.search_request)
      post_data._search = this.env.search_request;

    // send request to server
    this.http_post(action, post_data, lock)

    return true;
  };

  // update a contact record in the list
  this.update_contact_row = function(cid, cols_arr, newcid, source, data)
  {
    var list = this.contact_list;

    cid = this.html_identifier(cid);

    // when in searching mode, concat cid with the source name
    if (!list.rows[cid]) {
      cid = cid + '-' + source;
      if (newcid)
        newcid = newcid + '-' + source;
    }

    list.update_row(cid, cols_arr, newcid, true);
    list.data[cid] = data;
  };

  // add row to contacts list
  this.add_contact_row = function(cid, cols, classes, data)
  {
    if (!this.gui_objects.contactslist)
      return false;

    var c, col, list = this.contact_list,
      row = { cols:[] };

    row.id = 'rcmrow' + this.html_identifier(cid);
    row.className = 'contact ' + (classes || '');

    if (list.in_selection(cid))
      row.className += ' selected';

    // add each submitted col
    for (c in cols) {
      col = {};
      col.className = String(c).toLowerCase();
      col.innerHTML = cols[c];
      row.cols.push(col);
    }

    // store data in list member
    list.data[cid] = data;
    list.insert_row(row);

    this.enable_command('export', list.rowcount > 0);
  };

  this.init_contact_form = function()
  {
    var col;

    if (this.env.coltypes) {
      this.set_photo_actions($('#ff_photo').val());
      for (col in this.env.coltypes)
        this.init_edit_field(col, null);
    }

    $('.contactfieldgroup .row a.deletebutton').click(function() {
      ref.delete_edit_field(this);
      return false;
    });

    $('select.addfieldmenu').change(function() {
      ref.insert_edit_field($(this).val(), $(this).attr('rel'), this);
      this.selectedIndex = 0;
    });

    // enable date pickers on date fields
    if ($.datepicker && this.env.date_format) {
      $.datepicker.setDefaults({
        dateFormat: this.env.date_format,
        changeMonth: true,
        changeYear: true,
        yearRange: '-120:+10',
        showOtherMonths: true,
        selectOtherMonths: true
//        onSelect: function(dateText) { $(this).focus().val(dateText); }
      });
      $('input.datepicker').datepicker();
    }

    // Submit search form on Enter
    if (this.env.action == 'search')
      $(this.gui_objects.editform).append($('<input type="submit">').hide())
        .submit(function() { $('input.mainaction').click(); return false; });
  };

  // group creation dialog
  this.group_create = function()
  {
    var input = $('<input>').attr('type', 'text'),
      content = $('<label>').text(this.get_label('namex')).append(input);

    this.show_popup_dialog(content, this.get_label('newgroup'),
      [{
        text: this.get_label('save'),
        'class': 'mainaction',
        click: function() {
          var name;

          if (name = input.val()) {
            ref.http_post('group-create', {_source: ref.env.source, _name: name},
              ref.set_busy(true, 'loading'));
          }

          $(this).dialog('close');
        }
      }]
    );
  };

  // group rename dialog
  this.group_rename = function()
  {
    if (!this.env.group)
      return;

    var group_name = this.env.contactgroups['G' + this.env.source + this.env.group].name,
      input = $('<input>').attr('type', 'text').val(group_name),
      content = $('<label>').text(this.get_label('namex')).append(input);

    this.show_popup_dialog(content, this.get_label('grouprename'),
      [{
        text: this.get_label('save'),
        'class': 'mainaction',
        click: function() {
          var name;

          if ((name = input.val()) && name != group_name) {
            ref.http_post('group-rename', {_source: ref.env.source, _gid: ref.env.group, _name: name},
              ref.set_busy(true, 'loading'));
          }

          $(this).dialog('close');
        }
      }],
      {open: function() { input.select(); }}
    );
  };

  this.group_delete = function()
  {
    if (this.env.group && confirm(this.get_label('deletegroupconfirm'))) {
      var lock = this.set_busy(true, 'groupdeleting');
      this.http_post('group-delete', {_source: this.env.source, _gid: this.env.group}, lock);
    }
  };

  // callback from server upon group-delete command
  this.remove_group_item = function(prop)
  {
    var key = 'G'+prop.source+prop.id;

    if (this.treelist.remove(key)) {
      this.triggerEvent('group_delete', { source:prop.source, id:prop.id });
      delete this.env.contactfolders[key];
      delete this.env.contactgroups[key];
    }

    this.list_contacts(prop.source, 0);
  };

  //remove selected contacts from current active group
  this.group_remove_selected = function()
  {
    this.http_post('group-delmembers', {_cid: this.contact_list.selection,
      _source: this.env.source, _gid: this.env.group});
  };

  //callback after deleting contact(s) from current group
  this.remove_group_contacts = function(props)
  {
    if (this.env.group !== undefined && (this.env.group === props.gid)) {
      var n, selection = this.contact_list.get_selection();
      for (n=0; n<selection.length; n++) {
        id = selection[n];
        this.contact_list.remove_row(id, (n == selection.length-1));
      }
    }
  };

  // callback for creating a new contact group
  this.insert_contact_group = function(prop)
  {
    prop.type = 'group';

    var key = 'G'+prop.source+prop.id,
      link = $('<a>').attr('href', '#')
        .attr('rel', prop.source+':'+prop.id)
        .click(function() { return ref.command('listgroup', prop, this); })
        .html(prop.name);

    this.env.contactfolders[key] = this.env.contactgroups[key] = prop;
    this.treelist.insert({ id:key, html:link, classes:['contactgroup'] }, prop.source, 'contactgroup');

    this.triggerEvent('group_insert', { id:prop.id, source:prop.source, name:prop.name, li:this.treelist.get_item(key) });
  };

  // callback for renaming a contact group
  this.update_contact_group = function(prop)
  {
    var key = 'G'+prop.source+prop.id,
      newnode = {};

    // group ID has changed, replace link node and identifiers
    if (prop.newid) {
      var newkey = 'G'+prop.source+prop.newid,
        newprop = $.extend({}, prop);

      this.env.contactfolders[newkey] = this.env.contactfolders[key];
      this.env.contactfolders[newkey].id = prop.newid;
      this.env.group = prop.newid;

      delete this.env.contactfolders[key];
      delete this.env.contactgroups[key];

      newprop.id = prop.newid;
      newprop.type = 'group';

      newnode.id = newkey;
      newnode.html = $('<a>').attr('href', '#')
        .attr('rel', prop.source+':'+prop.newid)
        .click(function() { return ref.command('listgroup', newprop, this); })
        .html(prop.name);
    }
    // update displayed group name
    else {
      $(this.treelist.get_item(key)).children().first().html(prop.name);
      this.env.contactfolders[key].name = this.env.contactgroups[key].name = prop.name;
      this.set_group_prop(prop);
    }

    // update list node and re-sort it
    this.treelist.update(key, newnode, true);

    this.triggerEvent('group_update', { id:prop.id, source:prop.source, name:prop.name, li:this.treelist.get_item(key), newid:prop.newid });
  };

  this.update_group_commands = function()
  {
    var source = this.env.source != '' ? this.env.address_sources[this.env.source] : null,
      supported = source && source.groups && !source.readonly;

    this.enable_command('group-create', supported);
    this.enable_command('group-rename', 'group-delete', supported && this.env.group);
  };

  this.init_edit_field = function(col, elem)
  {
    var label = this.env.coltypes[col].label;

    if (!elem)
      elem = $('.ff_' + col);

    if (label)
      elem.placeholder(label);
  };

  this.insert_edit_field = function(col, section, menu)
  {
    // just make pre-defined input field visible
    var elem = $('#ff_'+col);
    if (elem.length) {
      elem.show().focus();
      $(menu).children('option[value="'+col+'"]').prop('disabled', true);
    }
    else {
      var lastelem = $('.ff_'+col),
        appendcontainer = $('#contactsection'+section+' .contactcontroller'+col);

      if (!appendcontainer.length) {
        var sect = $('#contactsection'+section),
          lastgroup = $('.contactfieldgroup', sect).last();
        appendcontainer = $('<fieldset>').addClass('contactfieldgroup contactcontroller'+col);
        if (lastgroup.length)
          appendcontainer.insertAfter(lastgroup);
        else
          sect.prepend(appendcontainer);
      }

      if (appendcontainer.length && appendcontainer.get(0).nodeName == 'FIELDSET') {
        var input, colprop = this.env.coltypes[col],
          input_id = 'ff_' + col + (colprop.count || 0),
          row = $('<div>').addClass('row'),
          cell = $('<div>').addClass('contactfieldcontent data'),
          label = $('<div>').addClass('contactfieldlabel label');

        if (colprop.subtypes_select)
          label.html(colprop.subtypes_select);
        else
          label.html('<label for="' + input_id + '">' + colprop.label + '</label>');

        var name_suffix = colprop.limit != 1 ? '[]' : '';

        if (colprop.type == 'text' || colprop.type == 'date') {
          input = $('<input>')
            .addClass('ff_'+col)
            .attr({type: 'text', name: '_'+col+name_suffix, size: colprop.size, id: input_id})
            .appendTo(cell);

          this.init_edit_field(col, input);

          if (colprop.type == 'date' && $.datepicker)
            input.datepicker();
        }
        else if (colprop.type == 'textarea') {
          input = $('<textarea>')
            .addClass('ff_'+col)
            .attr({ name: '_'+col+name_suffix, cols:colprop.size, rows:colprop.rows, id: input_id })
            .appendTo(cell);

          this.init_edit_field(col, input);
        }
        else if (colprop.type == 'composite') {
          var i, childcol, cp, first, templ, cols = [], suffices = [];

          // read template for composite field order
          if ((templ = this.env[col+'_template'])) {
            for (i=0; i < templ.length; i++) {
              cols.push(templ[i][1]);
              suffices.push(templ[i][2]);
            }
          }
          else {  // list fields according to appearance in colprop
            for (childcol in colprop.childs)
              cols.push(childcol);
          }

          for (i=0; i < cols.length; i++) {
            childcol = cols[i];
            cp = colprop.childs[childcol];
            input = $('<input>')
              .addClass('ff_'+childcol)
              .attr({ type: 'text', name: '_'+childcol+name_suffix, size: cp.size })
              .appendTo(cell);
            cell.append(suffices[i] || " ");
            this.init_edit_field(childcol, input);
            if (!first) first = input;
          }
          input = first;  // set focus to the first of this composite fields
        }
        else if (colprop.type == 'select') {
          input = $('<select>')
            .addClass('ff_'+col)
            .attr({ 'name': '_'+col+name_suffix, id: input_id })
            .appendTo(cell);

          var options = input.attr('options');
          options[options.length] = new Option('---', '');
          if (colprop.options)
            $.each(colprop.options, function(i, val){ options[options.length] = new Option(val, i); });
        }

        if (input) {
          var delbutton = $('<a href="#del"></a>')
            .addClass('contactfieldbutton deletebutton')
            .attr({title: this.get_label('delete'), rel: col})
            .html(this.env.delbutton)
            .click(function(){ ref.delete_edit_field(this); return false })
            .appendTo(cell);

          row.append(label).append(cell).appendTo(appendcontainer.show());
          input.first().focus();

          // disable option if limit reached
          if (!colprop.count) colprop.count = 0;
          if (++colprop.count == colprop.limit && colprop.limit)
            $(menu).children('option[value="'+col+'"]').prop('disabled', true);
        }
      }
    }
  };

  this.delete_edit_field = function(elem)
  {
    var col = $(elem).attr('rel'),
      colprop = this.env.coltypes[col],
      fieldset = $(elem).parents('fieldset.contactfieldgroup'),
      addmenu = fieldset.parent().find('select.addfieldmenu');

    // just clear input but don't hide the last field
    if (--colprop.count <= 0 && colprop.visible)
      $(elem).parent().children('input').val('').blur();
    else {
      $(elem).parents('div.row').remove();
      // hide entire fieldset if no more rows
      if (!fieldset.children('div.row').length)
        fieldset.hide();
    }

    // enable option in add-field selector or insert it if necessary
    if (addmenu.length) {
      var option = addmenu.children('option[value="'+col+'"]');
      if (option.length)
        option.prop('disabled', false);
      else
        option = $('<option>').attr('value', col).html(colprop.label).appendTo(addmenu);
      addmenu.show();
    }
  };

  this.upload_contact_photo = function(form)
  {
    if (form && form.elements._photo.value) {
      this.async_upload_form(form, 'upload-photo', function(e) {
        ref.set_busy(false, null, ref.file_upload_id);
      });

      // display upload indicator
      this.file_upload_id = this.set_busy(true, 'uploading');
    }
  };

  this.replace_contact_photo = function(id)
  {
    var img_src = id == '-del-' ? this.env.photo_placeholder :
      this.env.comm_path + '&_action=photo&_source=' + this.env.source + '&_cid=' + (this.env.cid || 0) + '&_photo=' + id;

    this.set_photo_actions(id);
    $(this.gui_objects.contactphoto).children('img').attr('src', img_src);
  };

  this.photo_upload_end = function()
  {
    this.set_busy(false, null, this.file_upload_id);
    delete this.file_upload_id;
  };

  this.set_photo_actions = function(id)
  {
    var n, buttons = this.buttons['upload-photo'];
    for (n=0; buttons && n < buttons.length; n++)
      $('a#'+buttons[n].id).html(this.get_label(id == '-del-' ? 'addphoto' : 'replacephoto'));

    $('#ff_photo').val(id);
    this.enable_command('upload-photo', this.env.coltypes.photo ? true : false);
    this.enable_command('delete-photo', this.env.coltypes.photo && id != '-del-');
  };

  // load advanced search page
  this.advanced_search = function()
  {
    var win, url = {_form: 1, _action: 'search'}, target = window;

    if (win = this.get_frame_window(this.env.contentframe)) {
      url._framed = 1;
      target = win;
      this.contact_list.clear_selection();
    }

    this.location_href(url, target, true);

    return true;
  };

  // unselect directory/group
  this.unselect_directory = function()
  {
    this.select_folder('');
    this.enable_command('search-delete', false);
  };

  // callback for creating a new saved search record
  this.insert_saved_search = function(name, id)
  {
    var key = 'S'+id,
      link = $('<a>').attr('href', '#')
        .attr('rel', id)
        .click(function() { return ref.command('listsearch', id, this); })
        .html(name),
      prop = { name:name, id:id };

    this.savedsearchlist.insert({ id:key, html:link, classes:['contactsearch'] }, null, 'contactsearch');
    this.select_folder(key,'',true);
    this.enable_command('search-delete', true);
    this.env.search_id = id;

    this.triggerEvent('abook_search_insert', prop);
  };

  // creates a dialog for saved search
  this.search_create = function()
  {
    var input = $('<input>').attr('type', 'text'),
      content = $('<label>').text(this.get_label('namex')).append(input);

    this.show_popup_dialog(content, this.get_label('searchsave'),
      [{
        text: this.get_label('save'),
        'class': 'mainaction',
        click: function() {
          var name;

          if (name = input.val()) {
            ref.http_post('search-create', {_search: ref.env.search_request, _name: name},
              ref.set_busy(true, 'loading'));
          }

          $(this).dialog('close');
        }
      }]
    );
  };

  this.search_delete = function()
  {
    if (this.env.search_request) {
      var lock = this.set_busy(true, 'savedsearchdeleting');
      this.http_post('search-delete', {_sid: this.env.search_id}, lock);
    }
  };

  // callback from server upon search-delete command
  this.remove_search_item = function(id)
  {
    var li, key = 'S'+id;
    if (this.savedsearchlist.remove(key)) {
      this.triggerEvent('search_delete', { id:id, li:li });
    }

    this.env.search_id = null;
    this.env.search_request = null;
    this.list_contacts_clear();
    this.reset_qsearch();
    this.enable_command('search-delete', 'search-create', false);
  };

  this.listsearch = function(id)
  {
    var lock = this.set_busy(true, 'searching');

    if (this.contact_list) {
      this.list_contacts_clear();
    }

    this.reset_qsearch();

    if (this.savedsearchlist) {
      this.treelist.select('');
      this.savedsearchlist.select('S'+id);
    }
    else
      this.select_folder('S'+id, '', true);

    // reset vars
    this.env.current_page = 1;
    this.http_request('search', {_sid: id}, lock);
  };


  /*********************************************************/
  /*********        user settings methods          *********/
  /*********************************************************/

  // preferences section select and load options frame
  this.section_select = function(list)
  {
    var win, id = list.get_single_selection(), target = window,
      url = {_action: 'edit-prefs', _section: id};

    if (id) {
      if (win = this.get_frame_window(this.env.contentframe)) {
        url._framed = 1;
        target = win;
      }
      this.location_href(url, target, true);
    }

    return true;
  };

  this.identity_select = function(list)
  {
    var id;
    if (id = list.get_single_selection()) {
      this.enable_command('delete', list.rowcount > 1 && this.env.identities_level < 2);
      this.load_identity(id, 'edit-identity');
    }
  };

  // load identity record
  this.load_identity = function(id, action)
  {
    if (action == 'edit-identity' && (!id || id == this.env.iid))
      return false;

    var win, target = window,
      url = {_action: action, _iid: id};

    if (win = this.get_frame_window(this.env.contentframe)) {
      url._framed = 1;
      target = win;
    }

    if (id || action == 'add-identity') {
      this.location_href(url, target, true);
    }

    return true;
  };

  this.delete_identity = function(id)
  {
    // exit if no identity is specified or if selection is empty
    var selection = this.identity_list.get_selection();
    if (!(selection.length || this.env.iid))
      return;

    if (!id)
      id = this.env.iid ? this.env.iid : selection[0];

    // submit request with appended token
    if (id && confirm(this.get_label('deleteidentityconfirm')))
      this.http_post('settings/delete-identity', { _iid: id }, true);
  };

  this.update_identity_row = function(id, name, add)
  {
    var list = this.identity_list,
      rid = this.html_identifier(id);

    if (add) {
      list.insert_row({ id:'rcmrow'+rid, cols:[ { className:'mail', innerHTML:name } ] });
      list.select(rid);
    }
    else {
      list.update_row(rid, [ name ]);
    }
  };

  this.update_response_row = function(response, oldkey)
  {
    var list = this.responses_list;

    if (list && oldkey) {
      list.update_row(oldkey, [ response.name ], response.key, true);
    }
    else if (list) {
      list.insert_row({ id:'rcmrow'+response.key, cols:[ { className:'name', innerHTML:response.name } ] });
      list.select(response.key);
    }
  };

  this.remove_response = function(key)
  {
    var frame;

    if (this.env.textresponses) {
      delete this.env.textresponses[key];
    }

    if (this.responses_list) {
      this.responses_list.remove_row(key);
      if (this.env.contentframe && (frame = this.get_frame_window(this.env.contentframe))) {
        frame.location.href = this.env.blankpage;
      }
    }

    this.enable_command('delete', false);
  };

  this.remove_identity = function(id)
  {
    var frame, list = this.identity_list,
      rid = this.html_identifier(id);

    if (list && id) {
      list.remove_row(rid);
      if (this.env.contentframe && (frame = this.get_frame_window(this.env.contentframe))) {
        frame.location.href = this.env.blankpage;
      }
    }

    this.enable_command('delete', false);
  };


  /*********************************************************/
  /*********        folder manager methods         *********/
  /*********************************************************/

  this.init_subscription_list = function()
  {
    var delim = RegExp.escape(this.env.delimiter);

    this.last_sub_rx = RegExp('['+delim+']?[^'+delim+']+$');

    this.subscription_list = new rcube_treelist_widget(this.gui_objects.subscriptionlist, {
        selectable: true,
        tabexit: false,
        parent_focus: true,
        id_prefix: 'rcmli',
        id_encode: this.html_identifier_encode,
        id_decode: this.html_identifier_decode,
        searchbox: '#foldersearch'
    });

    this.subscription_list
      .addEventListener('select', function(node) { ref.subscription_select(node.id); })
      .addEventListener('collapse', function(node) { ref.folder_collapsed(node) })
      .addEventListener('expand', function(node) { ref.folder_collapsed(node) })
      .addEventListener('search', function(p) { if (p.query) ref.subscription_select(); })
      .draggable({cancel: 'li.mailbox.root,input,div.treetoggle'})
      .droppable({
        // @todo: find better way, accept callback is executed for every folder
        // on the list when dragging starts (and stops), this is slow, but
        // I didn't find a method to check droptarget on over event
        accept: function(node) {
          if (!$(node).is('.mailbox'))
            return false;

          var source_folder = ref.folder_id2name($(node).attr('id')),
            dest_folder = ref.folder_id2name(this.id),
            source = ref.env.subscriptionrows[source_folder],
            dest = ref.env.subscriptionrows[dest_folder];

          return source && !source[2]
            && dest_folder != source_folder.replace(ref.last_sub_rx, '')
            && !dest_folder.startsWith(source_folder + ref.env.delimiter);
        },
        drop: function(e, ui) {
          var source = ref.folder_id2name(ui.draggable.attr('id')),
            dest = ref.folder_id2name(this.id);

          ref.subscription_move_folder(source, dest);
        }
      });
  };

  this.folder_id2name = function(id)
  {
    return id ? ref.html_identifier_decode(id.replace(/^rcmli/, '')) : null;
  };

  this.subscription_select = function(id)
  {
    var folder;

    if (id && id != '*' && (folder = this.env.subscriptionrows[id])) {
      this.env.mailbox = id;
      this.show_folder(id);
      this.enable_command('delete-folder', !folder[2]);
    }
    else {
      this.env.mailbox = null;
      this.show_contentframe(false);
      this.enable_command('delete-folder', 'purge', false);
    }
  };

  this.subscription_move_folder = function(from, to)
  {
    if (from && to !== null && from != to && to != from.replace(this.last_sub_rx, '')) {
      var path = from.split(this.env.delimiter),
        basename = path.pop(),
        newname = to === '' || to === '*' ? basename : to + this.env.delimiter + basename;

      if (newname != from) {
        this.http_post('rename-folder', {_folder_oldname: from, _folder_newname: newname},
          this.set_busy(true, 'foldermoving'));
      }
    }
  };

  // tell server to create and subscribe a new mailbox
  this.create_folder = function()
  {
    this.show_folder('', this.env.mailbox);
  };

  // delete a specific mailbox with all its messages
  this.delete_folder = function(name)
  {
    if (!name)
      name = this.env.mailbox;

    if (name && confirm(this.get_label('deletefolderconfirm'))) {
      this.http_post('delete-folder', {_mbox: name}, this.set_busy(true, 'folderdeleting'));
    }
  };

  // Add folder row to the table and initialize it
  this.add_folder_row = function (id, name, display_name, is_protected, subscribed, class_name, refrow, subfolders)
  {
    if (!this.gui_objects.subscriptionlist)
      return false;

    // reset searching
    if (this.subscription_list.is_search()) {
      this.subscription_select();
      this.subscription_list.reset_search();
    }

    // disable drag-n-drop temporarily
    this.subscription_list.draggable('destroy').droppable('destroy');

    var row, n, tmp, tmp_name, rowid, collator, pos, p, parent = '',
      folders = [], list = [], slist = [],
      list_element = $(this.gui_objects.subscriptionlist);
      row = refrow ? refrow : $($('li', list_element).get(1)).clone(true);

    if (!row.length) {
      // Refresh page if we don't have a table row to clone
      this.goto_url('folders');
      return false;
    }

    // set ID, reset css class
    row.attr({id: 'rcmli' + this.html_identifier_encode(id), 'class': class_name});

    if (!refrow || !refrow.length) {
      // remove old data, subfolders and toggle
      $('ul,div.treetoggle', row).remove();
      row.removeData('filtered');
    }

    // set folder name
    $('a:first', row).text(display_name);

    // update subscription checkbox
    $('input[name="_subscribed[]"]:first', row).val(id)
      .prop({checked: subscribed ? true : false, disabled: is_protected ? true : false});

    // add to folder/row-ID map
    this.env.subscriptionrows[id] = [name, display_name, false];

    // copy folders data to an array for sorting
    $.each(this.env.subscriptionrows, function(k, v) { v[3] = k; folders.push(v); });

    try {
      // use collator if supported (FF29, IE11, Opera15, Chrome24)
      collator = new Intl.Collator(this.env.locale.replace('_', '-'));
    }
    catch (e) {};

    // sort folders
    folders.sort(function(a, b) {
      var i, f1, f2,
        path1 = a[0].split(ref.env.delimiter),
        path2 = b[0].split(ref.env.delimiter),
        len = path1.length;

      for (i=0; i<len; i++) {
        f1 = path1[i];
        f2 = path2[i];

        if (f1 !== f2) {
          if (f2 === undefined)
            return 1;
          if (collator)
            return collator.compare(f1, f2);
          else
            return f1 < f2 ? -1 : 1;
        }
        else if (i == len-1) {
          return -1
        }
      }
    });

    for (n in folders) {
      p = folders[n][3];
      // protected folder
      if (folders[n][2]) {
        tmp_name = p + this.env.delimiter;
        // prefix namespace cannot have subfolders (#1488349)
        if (tmp_name == this.env.prefix_ns)
          continue;
        slist.push(p);
        tmp = tmp_name;
      }
      // protected folder's child
      else if (tmp && p.startsWith(tmp))
        slist.push(p);
      // other
      else {
        list.push(p);
        tmp = null;
      }
    }

    // check if subfolder of a protected folder
    for (n=0; n<slist.length; n++) {
      if (id.startsWith(slist[n] + this.env.delimiter))
        rowid = slist[n];
    }

    // find folder position after sorting
    for (n=0; !rowid && n<list.length; n++) {
      if (n && list[n] == id)
        rowid = list[n-1];
    }

    // add row to the table
    if (rowid && (n = this.subscription_list.get_item(rowid, true))) {
      // find parent folder
      if (pos = id.lastIndexOf(this.env.delimiter)) {
        parent = id.substring(0, pos);
        parent = this.subscription_list.get_item(parent, true);

        // add required tree elements to the parent if not already there
        if (!$('div.treetoggle', parent).length) {
          $('<div>&nbsp;</div>').addClass('treetoggle collapsed').appendTo(parent);
        }
        if (!$('ul', parent).length) {
          $('<ul>').css('display', 'none').appendTo(parent);
        }
      }

      if (parent && n == parent) {
        $('ul:first', parent).append(row);
      }
      else {
        while (p = $(n).parent().parent().get(0)) {
          if (parent && p == parent)
            break;
          if (!$(p).is('li.mailbox'))
            break;
          n = p;
        }

        $(n).after(row);
      }
    }
    else {
      list_element.append(row);
    }

    // add subfolders
    $.extend(this.env.subscriptionrows, subfolders || {});

    // update list widget
    this.subscription_list.reset(true);
    this.subscription_select();

    // expand parent
    if (parent) {
      this.subscription_list.expand(this.folder_id2name(parent.id));
    }

    row = row.show().get(0);
    if (row.scrollIntoView)
      row.scrollIntoView();

    return row;
  };

  // replace an existing table row with a new folder line (with subfolders)
  this.replace_folder_row = function(oldid, id, name, display_name, is_protected, class_name)
  {
    if (!this.gui_objects.subscriptionlist) {
      if (this.is_framed()) {
        // @FIXME: for some reason this 'parent' variable need to be prefixed with 'window.'
        return window.parent.rcmail.replace_folder_row(oldid, id, name, display_name, is_protected, class_name);
      }

      return false;
    }

    // reset searching
    if (this.subscription_list.is_search()) {
      this.subscription_select();
      this.subscription_list.reset_search();
    }

    var subfolders = {},
      row = this.subscription_list.get_item(oldid, true),
      parent = $(row).parent(),
      old_folder = this.env.subscriptionrows[oldid],
      prefix_len_id = oldid.length,
      prefix_len_name = old_folder[0].length,
      subscribed = $('input[name="_subscribed[]"]:first', row).prop('checked');

    // no renaming, only update class_name
    if (oldid == id) {
      $(row).attr('class', class_name || '');
      return;
    }

    // update subfolders
    $('li', row).each(function() {
      var fname = ref.folder_id2name(this.id),
        folder = ref.env.subscriptionrows[fname],
        newid = id + fname.slice(prefix_len_id);

      this.id = 'rcmli' + ref.html_identifier_encode(newid);
      $('input[name="_subscribed[]"]:first', this).val(newid);
      folder[0] = name + folder[0].slice(prefix_len_name);

      subfolders[newid] = folder;
      delete ref.env.subscriptionrows[fname];
    });

    // get row off the list
    row = $(row).detach();

    delete this.env.subscriptionrows[oldid];

    // remove parent list/toggle elements if not needed
    if (parent.get(0) != this.gui_objects.subscriptionlist && !$('li', parent).length) {
      $('ul,div.treetoggle', parent.parent()).remove();
    }

    // move the existing table row
    this.add_folder_row(id, name, display_name, is_protected, subscribed, class_name, row, subfolders);
  };

  // remove the table row of a specific mailbox from the table
  this.remove_folder_row = function(folder)
  {
    // reset searching
    if (this.subscription_list.is_search()) {
      this.subscription_select();
      this.subscription_list.reset_search();
    }

    var list = [], row = this.subscription_list.get_item(folder, true);

    // get subfolders if any
    $('li', row).each(function() { list.push(ref.folder_id2name(this.id)); });

    // remove folder row (and subfolders)
    this.subscription_list.remove(folder);

    // update local list variable
    list.push(folder);
    $.each(list, function(i, v) { delete ref.env.subscriptionrows[v]; });
  };

  this.subscribe = function(folder)
  {
    if (folder) {
      var lock = this.display_message(this.get_label('foldersubscribing'), 'loading');
      this.http_post('subscribe', {_mbox: folder}, lock);
    }
  };

  this.unsubscribe = function(folder)
  {
    if (folder) {
      var lock = this.display_message(this.get_label('folderunsubscribing'), 'loading');
      this.http_post('unsubscribe', {_mbox: folder}, lock);
    }
  };

  // when user select a folder in manager
  this.show_folder = function(folder, path, force)
  {
    var win, target = window,
      url = '&_action=edit-folder&_mbox='+urlencode(folder);

    if (path)
      url += '&_path='+urlencode(path);

    if (win = this.get_frame_window(this.env.contentframe)) {
      target = win;
      url += '&_framed=1';
    }

    if (String(target.location.href).indexOf(url) >= 0 && !force)
      this.show_contentframe(true);
    else
      this.location_href(this.env.comm_path+url, target, true);
  };

  // disables subscription checkbox (for protected folder)
  this.disable_subscription = function(folder)
  {
    var row = this.subscription_list.get_item(folder, true);
    if (row)
      $('input[name="_subscribed[]"]:first', row).prop('disabled', true);
  };

  // resets state of subscription checkbox (e.g. on error)
  this.reset_subscription = function(folder, state)
  {
    var row = this.subscription_list.get_item(folder, true);
    if (row)
      $('input[name="_subscribed[]"]:first', row).prop('checked', state);
  };

  this.folder_size = function(folder)
  {
    var lock = this.set_busy(true, 'loading');
    this.http_post('folder-size', {_mbox: folder}, lock);
  };

  this.folder_size_update = function(size)
  {
    $('#folder-size').replaceWith(size);
  };

  // filter folders by namespace
  this.folder_filter = function(prefix)
  {
    this.subscription_list.reset_search();

    this.subscription_list.container.children('li').each(function() {
      var i, folder = ref.folder_id2name(this.id);
      // show all folders
      if (prefix == '---') {
      }
      // got namespace prefix
      else if (prefix) {
        if (folder !== prefix) {
          $(this).data('filtered', true).hide();
          return
        }
      }
      // no namespace prefix, filter out all other namespaces
      else {
        // first get all namespace roots
        for (i in ref.env.ns_roots) {
          if (folder === ref.env.ns_roots[i]) {
            $(this).data('filtered', true).hide();
            return;
          }
        }
      }

      $(this).removeData('filtered').show();
    });
  };

  /*********************************************************/
  /*********           GUI functionality           *********/
  /*********************************************************/

  var init_button = function(cmd, prop)
  {
    var elm = document.getElementById(prop.id);
    if (!elm)
      return;

    var preload = false;
    if (prop.type == 'image') {
      elm = elm.parentNode;
      preload = true;
    }

    elm._command = cmd;
    elm._id = prop.id;
    if (prop.sel) {
      elm.onmousedown = function(e) { return ref.button_sel(this._command, this._id); };
      elm.onmouseup = function(e) { return ref.button_out(this._command, this._id); };
      if (preload)
        new Image().src = prop.sel;
    }
    if (prop.over) {
      elm.onmouseover = function(e) { return ref.button_over(this._command, this._id); };
      elm.onmouseout = function(e) { return ref.button_out(this._command, this._id); };
      if (preload)
        new Image().src = prop.over;
    }
  };

  // set event handlers on registered buttons
  this.init_buttons = function()
  {
    for (var cmd in this.buttons) {
      if (typeof cmd !== 'string')
        continue;

      for (var i=0; i<this.buttons[cmd].length; i++) {
        init_button(cmd, this.buttons[cmd][i]);
      }
    }
  };

  // set button to a specific state
  this.set_button = function(command, state)
  {
    var n, button, obj, $obj, a_buttons = this.buttons[command],
      len = a_buttons ? a_buttons.length : 0;

    for (n=0; n<len; n++) {
      button = a_buttons[n];
      obj = document.getElementById(button.id);

      if (!obj || button.status === state)
        continue;

      // get default/passive setting of the button
      if (button.type == 'image' && !button.status) {
        button.pas = obj._original_src ? obj._original_src : obj.src;
        // respect PNG fix on IE browsers
        if (obj.runtimeStyle && obj.runtimeStyle.filter && obj.runtimeStyle.filter.match(/src=['"]([^'"]+)['"]/))
          button.pas = RegExp.$1;
      }
      else if (!button.status)
        button.pas = String(obj.className);

      button.status = state;

      // set image according to button state
      if (button.type == 'image' && button[state]) {
        obj.src = button[state];
      }
      // set class name according to button state
      else if (button[state] !== undefined) {
        obj.className = button[state];
      }
      // disable/enable input buttons
      if (button.type == 'input') {
        obj.disabled = state == 'pas';
      }
      else if (button.type == 'uibutton') {
        button.status = state;
        $(obj).button('option', 'disabled', state == 'pas');
      }
      else {
        $obj = $(obj);
        $obj
          .attr('tabindex', state == 'pas' || state == 'sel' ? '-1' : ($obj.attr('data-tabindex') || '0'))
          .attr('aria-disabled', state == 'pas' || state == 'sel' ? 'true' : 'false');
      }
    }
  };

  // display a specific alttext
  this.set_alttext = function(command, label)
  {
    var n, button, obj, link, a_buttons = this.buttons[command],
      len = a_buttons ? a_buttons.length : 0;

    for (n=0; n<len; n++) {
      button = a_buttons[n];
      obj = document.getElementById(button.id);

      if (button.type == 'image' && obj) {
        obj.setAttribute('alt', this.get_label(label));
        if ((link = obj.parentNode) && link.tagName.toLowerCase() == 'a')
          link.setAttribute('title', this.get_label(label));
      }
      else if (obj)
        obj.setAttribute('title', this.get_label(label));
    }
  };

  // mouse over button
  this.button_over = function(command, id)
  {
    this.button_event(command, id, 'over');
  };

  // mouse down on button
  this.button_sel = function(command, id)
  {
    this.button_event(command, id, 'sel');
  };

  // mouse out of button
  this.button_out = function(command, id)
  {
    this.button_event(command, id, 'act');
  };

  // event of button
  this.button_event = function(command, id, event)
  {
    var n, button, obj, a_buttons = this.buttons[command],
      len = a_buttons ? a_buttons.length : 0;

    for (n=0; n<len; n++) {
      button = a_buttons[n];
      if (button.id == id && button.status == 'act') {
        if (button[event] && (obj = document.getElementById(button.id))) {
          obj[button.type == 'image' ? 'src' : 'className'] = button[event];
        }

        if (event == 'sel') {
          this.buttons_sel[id] = command;
        }
      }
    }
  };

  // write to the document/window title
  this.set_pagetitle = function(title)
  {
    if (title && document.title)
      document.title = title;
  };

  // display a system message, list of types in common.css (below #message definition)
  this.display_message = function(msg, type, timeout, key)
  {
    // pass command to parent window
    if (this.is_framed())
      return parent.rcmail.display_message(msg, type, timeout);

    if (!this.gui_objects.message) {
      // save message in order to display after page loaded
      if (type != 'loading')
        this.pending_message = [msg, type, timeout, key];
      return 1;
    }

    if (!type)
      type = 'notice';

    if (!key)
      key = this.html_identifier(msg);

    var date = new Date(),
      id = type + date.getTime();

    if (!timeout) {
      switch (type) {
        case 'error':
        case 'warning':
          timeout = this.message_time * 2;
          break;

        case 'uploading':
          timeout = 0;
          break;

        default:
          timeout = this.message_time;
      }
    }

    if (type == 'loading') {
      key = 'loading';
      timeout = this.env.request_timeout * 1000;
      if (!msg)
        msg = this.get_label('loading');
    }

    // The same message is already displayed
    if (this.messages[key]) {
      // replace label
      if (this.messages[key].obj)
        this.messages[key].obj.html(msg);
      // store label in stack
      if (type == 'loading') {
        this.messages[key].labels.push({'id': id, 'msg': msg});
      }
      // add element and set timeout
      this.messages[key].elements.push(id);
      setTimeout(function() { ref.hide_message(id, type == 'loading'); }, timeout);
      return id;
    }

    // create DOM object and display it
    var obj = $('<div>').addClass(type).html(msg).data('key', key),
      cont = $(this.gui_objects.message).append(obj).show();

    this.messages[key] = {'obj': obj, 'elements': [id]};

    if (type == 'loading') {
      this.messages[key].labels = [{'id': id, 'msg': msg}];
    }
    else if (type != 'uploading') {
      obj.click(function() { return ref.hide_message(obj); })
        .attr('role', 'alert');
    }

    this.triggerEvent('message', { message:msg, type:type, timeout:timeout, object:obj });

    if (timeout > 0)
      setTimeout(function() { ref.hide_message(id, type != 'loading'); }, timeout);

    return id;
  };

  // make a message to disapear
  this.hide_message = function(obj, fade)
  {
    // pass command to parent window
    if (this.is_framed())
      return parent.rcmail.hide_message(obj, fade);

    if (!this.gui_objects.message)
      return;

    var k, n, i, o, m = this.messages;

    // Hide message by object, don't use for 'loading'!
    if (typeof obj === 'object') {
      o = $(obj);
      k = o.data('key');
      this.hide_message_object(o, fade);
      if (m[k])
        delete m[k];
    }
    // Hide message by id
    else {
      for (k in m) {
        for (n in m[k].elements) {
          if (m[k] && m[k].elements[n] == obj) {
            m[k].elements.splice(n, 1);
            // hide DOM element if last instance is removed
            if (!m[k].elements.length) {
              this.hide_message_object(m[k].obj, fade);
              delete m[k];
            }
            // set pending action label for 'loading' message
            else if (k == 'loading') {
              for (i in m[k].labels) {
                if (m[k].labels[i].id == obj) {
                  delete m[k].labels[i];
                }
                else {
                  o = m[k].labels[i].msg;
                  m[k].obj.html(o);
                }
              }
            }
          }
        }
      }
    }
  };

  // hide message object and remove from the DOM
  this.hide_message_object = function(o, fade)
  {
    if (fade)
      o.fadeOut(600, function() {$(this).remove(); });
    else
      o.hide().remove();
  };

  // remove all messages immediately
  this.clear_messages = function()
  {
    // pass command to parent window
    if (this.is_framed())
      return parent.rcmail.clear_messages();

    var k, n, m = this.messages;

    for (k in m)
      for (n in m[k].elements)
        if (m[k].obj)
          this.hide_message_object(m[k].obj);

    this.messages = {};
  };

  // display uploading message with progress indicator
  // data should contain: name, total, current, percent, text
  this.display_progress = function(data)
  {
    if (!data || !data.name)
      return;

    var msg = this.messages['progress' + data.name];

    if (!data.label)
      data.label = this.get_label('uploadingmany');

    if (!msg) {
      if (!data.percent || data.percent < 100)
        this.display_message(data.label, 'uploading', 0, 'progress' + data.name);
      return;
    }

    if (!data.total || data.percent >= 100) {
      this.hide_message(msg.obj);
      return;
    }

    if (data.text)
      data.label += ' ' + data.text;

    msg.obj.text(data.label);
  };

  // open a jquery UI dialog with the given content
  this.show_popup_dialog = function(content, title, buttons, options)
  {
    // forward call to parent window
    if (this.is_framed()) {
      return parent.rcmail.show_popup_dialog(content, title, buttons, options);
    }

    var popup = $('<div class="popup">');

    if (typeof content == 'object')
      popup.append(content);
    else
      popup.html(content);

    options = $.extend({
        title: title,
        buttons: buttons,
        modal: true,
        resizable: true,
        width: 500,
        close: function(event, ui) { $(this).remove(); }
      }, options || {});

    popup.dialog(options);

    // resize and center popup
    var win = $(window), w = win.width(), h = win.height(),
      width = popup.width(), height = popup.height();

    popup.dialog('option', {
      height: Math.min(h - 40, height + 75 + (buttons ? 50 : 0)),
      width: Math.min(w - 20, width + 36)
    });

    // assign special classes to dialog buttons
    $.each(options.button_classes || [], function(i, v) {
      if (v) $($('.ui-dialog-buttonpane button.ui-button', popup.parent()).get(i)).addClass(v);
    });

    return popup;
  };

  // enable/disable buttons for page shifting
  this.set_page_buttons = function()
  {
    this.enable_command('nextpage', 'lastpage', this.env.pagecount > this.env.current_page);
    this.enable_command('previouspage', 'firstpage', this.env.current_page > 1);

    this.update_pagejumper();
  };

  // mark a mailbox as selected and set environment variable
  this.select_folder = function(name, prefix, encode)
  {
    if (this.savedsearchlist) {
      this.savedsearchlist.select('');
    }

    if (this.treelist) {
      this.treelist.select(name);
    }
    else if (this.gui_objects.folderlist) {
      $('li.selected', this.gui_objects.folderlist).removeClass('selected');
      $(this.get_folder_li(name, prefix, encode)).addClass('selected');

      // trigger event hook
      this.triggerEvent('selectfolder', { folder:name, prefix:prefix });
    }
  };

  // adds a class to selected folder
  this.mark_folder = function(name, class_name, prefix, encode)
  {
    $(this.get_folder_li(name, prefix, encode)).addClass(class_name);
    this.triggerEvent('markfolder', {folder: name, mark: class_name, status: true});
  };

  // adds a class to selected folder
  this.unmark_folder = function(name, class_name, prefix, encode)
  {
    $(this.get_folder_li(name, prefix, encode)).removeClass(class_name);
    this.triggerEvent('markfolder', {folder: name, mark: class_name, status: false});
  };

  // helper method to find a folder list item
  this.get_folder_li = function(name, prefix, encode)
  {
    if (!prefix)
      prefix = 'rcmli';

    if (this.gui_objects.folderlist) {
      name = this.html_identifier(name, encode);
      return document.getElementById(prefix+name);
    }
  };

  // for reordering column array (Konqueror workaround)
  // and for setting some message list global variables
  this.set_message_coltypes = function(listcols, repl, smart_col)
  {
    var list = this.message_list,
      thead = list ? list.thead : null,
      repl, cell, col, n, len, tr;

    this.env.listcols = listcols;

    if (!this.env.coltypes)
      this.env.coltypes = {};

    // replace old column headers
    if (thead) {
      if (repl) {
        thead.innerHTML = '';
        tr = document.createElement('tr');

        for (c=0, len=repl.length; c < len; c++) {
          cell = document.createElement('th');
          cell.innerHTML = repl[c].html || '';
          if (repl[c].id) cell.id = repl[c].id;
          if (repl[c].className) cell.className = repl[c].className;
          tr.appendChild(cell);
        }
        thead.appendChild(tr);
      }

      for (n=0, len=this.env.listcols.length; n<len; n++) {
        col = this.env.listcols[n];
        if ((cell = thead.rows[0].cells[n]) && (col == 'from' || col == 'to' || col == 'fromto')) {
          $(cell).attr('rel', col).find('span,a').text(this.get_label(col == 'fromto' ? smart_col : col));
        }
      }
    }

    this.env.subject_col = null;
    this.env.flagged_col = null;
    this.env.status_col = null;

    if (this.env.coltypes.folder)
      this.env.coltypes.folder.hidden = !(this.env.search_request || this.env.search_id) || this.env.search_scope == 'base';

    if ((n = $.inArray('subject', this.env.listcols)) >= 0) {
      this.env.subject_col = n;
      if (list)
        list.subject_col = n;
    }
    if ((n = $.inArray('flag', this.env.listcols)) >= 0)
      this.env.flagged_col = n;
    if ((n = $.inArray('status', this.env.listcols)) >= 0)
      this.env.status_col = n;

    if (list) {
      list.hide_column('folder', (this.env.coltypes.folder && this.env.coltypes.folder.hidden) || $.inArray('folder', this.env.listcols) < 0);
      list.init_header();
    }
  };

  // replace content of row count display
  this.set_rowcount = function(text, mbox)
  {
    // #1487752
    if (mbox && mbox != this.env.mailbox)
      return false;

    $(this.gui_objects.countdisplay).html(text);

    // update page navigation buttons
    this.set_page_buttons();
  };

  // replace content of mailboxname display
  this.set_mailboxname = function(content)
  {
    if (this.gui_objects.mailboxname && content)
      this.gui_objects.mailboxname.innerHTML = content;
  };

  // replace content of quota display
  this.set_quota = function(content)
  {
    if (this.gui_objects.quotadisplay && content && content.type == 'text')
      $(this.gui_objects.quotadisplay).text((content.percent||0) + '%').attr('title', content.title);

    this.triggerEvent('setquota', content);
    this.env.quota_content = content;
  };

  // update trash folder state
  this.set_trash_count = function(count)
  {
    this[(count ? 'un' : '') + 'mark_folder'](this.env.trash_mailbox, 'empty', '', true);
  };

  // update the mailboxlist
  this.set_unread_count = function(mbox, count, set_title, mark)
  {
    if (!this.gui_objects.mailboxlist)
      return false;

    this.env.unread_counts[mbox] = count;
    this.set_unread_count_display(mbox, set_title);

    if (mark)
      this.mark_folder(mbox, mark, '', true);
    else if (!count)
      this.unmark_folder(mbox, 'recent', '', true);
  };

  // update the mailbox count display
  this.set_unread_count_display = function(mbox, set_title)
  {
    var reg, link, text_obj, item, mycount, childcount, div;

    if (item = this.get_folder_li(mbox, '', true)) {
      mycount = this.env.unread_counts[mbox] ? this.env.unread_counts[mbox] : 0;
      link = $(item).children('a').eq(0);
      text_obj = link.children('span.unreadcount');
      if (!text_obj.length && mycount)
        text_obj = $('<span>').addClass('unreadcount').appendTo(link);
      reg = /\s+\([0-9]+\)$/i;

      childcount = 0;
      if ((div = item.getElementsByTagName('div')[0]) &&
          div.className.match(/collapsed/)) {
        // add children's counters
        for (var k in this.env.unread_counts)
          if (k.startsWith(mbox + this.env.delimiter))
            childcount += this.env.unread_counts[k];
      }

      if (mycount && text_obj.length)
        text_obj.html(this.env.unreadwrap.replace(/%[sd]/, mycount));
      else if (text_obj.length)
        text_obj.remove();

      // set parent's display
      reg = new RegExp(RegExp.escape(this.env.delimiter) + '[^' + RegExp.escape(this.env.delimiter) + ']+$');
      if (mbox.match(reg))
        this.set_unread_count_display(mbox.replace(reg, ''), false);

      // set the right classes
      if ((mycount+childcount)>0)
        $(item).addClass('unread');
      else
        $(item).removeClass('unread');
    }

    // set unread count to window title
    reg = /^\([0-9]+\)\s+/i;
    if (set_title && document.title) {
      var new_title = '',
        doc_title = String(document.title);

      if (mycount && doc_title.match(reg))
        new_title = doc_title.replace(reg, '('+mycount+') ');
      else if (mycount)
        new_title = '('+mycount+') '+doc_title;
      else
        new_title = doc_title.replace(reg, '');

      this.set_pagetitle(new_title);
    }
  };

  // display fetched raw headers
  this.set_headers = function(content)
  {
    if (this.gui_objects.all_headers_row && this.gui_objects.all_headers_box && content)
      $(this.gui_objects.all_headers_box).html(content).show();
  };

  // display all-headers row and fetch raw message headers
  this.show_headers = function(props, elem)
  {
    if (!this.gui_objects.all_headers_row || !this.gui_objects.all_headers_box || !this.env.uid)
      return;

    $(elem).removeClass('show-headers').addClass('hide-headers');
    $(this.gui_objects.all_headers_row).show();
    elem.onclick = function() { ref.command('hide-headers', '', elem); };

    // fetch headers only once
    if (!this.gui_objects.all_headers_box.innerHTML) {
      this.http_post('headers', {_uid: this.env.uid, _mbox: this.env.mailbox},
        this.display_message(this.get_label('loading'), 'loading')
      );
    }
  };

  // hide all-headers row
  this.hide_headers = function(props, elem)
  {
    if (!this.gui_objects.all_headers_row || !this.gui_objects.all_headers_box)
      return;

    $(elem).removeClass('hide-headers').addClass('show-headers');
    $(this.gui_objects.all_headers_row).hide();
    elem.onclick = function() { ref.command('show-headers', '', elem); };
  };

  // create folder selector popup, position and display it
  this.folder_selector = function(event, callback)
  {
    var container = this.folder_selector_element;

    if (!container) {
      var rows = [],
        delim = this.env.delimiter,
        ul = $('<ul class="toolbarmenu">'),
        link = document.createElement('a');

      container = $('<div id="folder-selector" class="popupmenu"></div>');
      link.href = '#';
      link.className = 'icon';

      // loop over sorted folders list
      $.each(this.env.mailboxes_list, function() {
        var n = 0, s = 0,
          folder = ref.env.mailboxes[this],
          id = folder.id,
          a = $(link.cloneNode(false)),
          row = $('<li>');

        if (folder.virtual)
          a.addClass('virtual').attr('aria-disabled', 'true').attr('tabindex', '-1');
        else
          a.addClass('active').data('id', folder.id);

        if (folder['class'])
          a.addClass(folder['class']);

        // calculate/set indentation level
        while ((s = id.indexOf(delim, s)) >= 0) {
          n++; s++;
        }
        a.css('padding-left', n ? (n * 16) + 'px' : 0);

        // add folder name element
        a.append($('<span>').text(folder.name));

        row.append(a);
        rows.push(row);
      });

      ul.append(rows).appendTo(container);

      // temporarily show element to calculate its size
      container.css({left: '-1000px', top: '-1000px'})
        .appendTo($('body')).show();

      // set max-height if the list is long
      if (rows.length > 10)
        container.css('max-height', $('li', container)[0].offsetHeight * 10 + 9);

      // register delegate event handler for folder item clicks
      container.on('click', 'a.active', function(e){
        container.data('callback')($(this).data('id'));
        return false;
      });

      this.folder_selector_element = container;
    }

    container.data('callback', callback);

    // position menu on the screen
    this.show_menu('folder-selector', true, event);
  };


  /***********************************************/
  /*********    popup menu functions     *********/
  /***********************************************/

  // Show/hide a specific popup menu
  this.show_menu = function(prop, show, event)
  {
    var name = typeof prop == 'object' ? prop.menu : prop,
      obj = $('#'+name),
      ref = event && event.target ? $(event.target) : $(obj.attr('rel') || '#'+name+'link'),
      keyboard = rcube_event.is_keyboard(event),
      align = obj.attr('data-align') || '',
      stack = false;

    // find "real" button element
    if (ref.get(0).tagName != 'A' && ref.closest('a').length)
      ref = ref.closest('a');

    if (typeof prop == 'string')
      prop = { menu:name };

    // let plugins or skins provide the menu element
    if (!obj.length) {
      obj = this.triggerEvent('menu-get', { name:name, props:prop, originalEvent:event });
    }

    if (!obj || !obj.length) {
      // just delegate the action to subscribers
      return this.triggerEvent(show === false ? 'menu-close' : 'menu-open', { name:name, props:prop, originalEvent:event });
    }

    // move element to top for proper absolute positioning
    obj.appendTo(document.body);

    if (typeof show == 'undefined')
      show = obj.is(':visible') ? false : true;

    if (show && ref.length) {
      var win = $(window),
        pos = ref.offset(),
        above = align.indexOf('bottom') >= 0;

      stack = ref.attr('role') == 'menuitem' || ref.closest('[role=menuitem]').length > 0;

      ref.offsetWidth = ref.outerWidth();
      ref.offsetHeight = ref.outerHeight();
      if (!above && pos.top + ref.offsetHeight + obj.height() > win.height()) {
        above = true;
      }
      if (align.indexOf('right') >= 0) {
        pos.left = pos.left + ref.outerWidth() - obj.width();
      }
      else if (stack) {
        pos.left = pos.left + ref.offsetWidth - 5;
        pos.top -= ref.offsetHeight;
      }
      if (pos.left + obj.width() > win.width()) {
        pos.left = win.width() - obj.width() - 12;
      }
      pos.top = Math.max(0, pos.top + (above ? -obj.height() : ref.offsetHeight));
      obj.css({ left:pos.left+'px', top:pos.top+'px' });
    }

    // add menu to stack
    if (show) {
      // truncate stack down to the one containing the ref link
      for (var i = this.menu_stack.length - 1; stack && i >= 0; i--) {
        if (!$(ref).parents('#'+this.menu_stack[i]).length && $(event.target).parent().attr('role') != 'menuitem')
          this.hide_menu(this.menu_stack[i], event);
      }
      if (stack && this.menu_stack.length) {
        obj.data('parent', $.last(this.menu_stack));
        obj.css('z-index', ($('#'+$.last(this.menu_stack)).css('z-index') || 0) + 1);
      }
      else if (!stack && this.menu_stack.length) {
        this.hide_menu(this.menu_stack[0], event);
      }

      obj.show().attr('aria-hidden', 'false').data('opener', ref.attr('aria-expanded', 'true').get(0));
      this.triggerEvent('menu-open', { name:name, obj:obj, props:prop, originalEvent:event });
      this.menu_stack.push(name);

      this.menu_keyboard_active = show && keyboard;
      if (this.menu_keyboard_active) {
        this.focused_menu = name;
        obj.find('a,input:not(:disabled)').not('[aria-disabled=true]').first().focus();
      }
    }
    else {  // close menu
      this.hide_menu(name, event);
    }

    return show;
  };

  // hide the given popup menu (and it's childs)
  this.hide_menu = function(name, event)
  {
    if (!this.menu_stack.length) {
      // delegate to subscribers
      this.triggerEvent('menu-close', { name:name, props:{ menu:name }, originalEvent:event });
      return;
    }

    var obj, keyboard = rcube_event.is_keyboard(event);
    for (var j=this.menu_stack.length-1; j >= 0; j--) {
      obj = $('#' + this.menu_stack[j]).hide().attr('aria-hidden', 'true').data('parent', false);
      this.triggerEvent('menu-close', { name:this.menu_stack[j], obj:obj, props:{ menu:this.menu_stack[j] }, originalEvent:event });
      if (this.menu_stack[j] == name) {
        j = -1;  // stop loop
        if (obj.data('opener')) {
          $(obj.data('opener')).attr('aria-expanded', 'false');
          if (keyboard)
            obj.data('opener').focus();
        }
      }
      this.menu_stack.pop();
    }

    // focus previous menu in stack
    if (this.menu_stack.length && keyboard) {
      this.menu_keyboard_active = true;
      this.focused_menu = $.last(this.menu_stack);
      if (!obj || !obj.data('opener'))
        $('#'+this.focused_menu).find('a,input:not(:disabled)').not('[aria-disabled=true]').first().focus();
    }
    else {
      this.focused_menu = null;
      this.menu_keyboard_active = false;
    }
  }


  // position a menu element on the screen in relation to other object
  this.element_position = function(element, obj)
  {
    var obj = $(obj), win = $(window),
      width = obj.outerWidth(),
      height = obj.outerHeight(),
      menu_pos = obj.data('menu-pos'),
      win_height = win.height(),
      elem_height = $(element).height(),
      elem_width = $(element).width(),
      pos = obj.offset(),
      top = pos.top,
      left = pos.left + width;

    if (menu_pos == 'bottom') {
      top += height;
      left -= width;
    }
    else
      left -= 5;

    if (top + elem_height > win_height) {
      top -= elem_height - height;
      if (top < 0)
        top = Math.max(0, (win_height - elem_height) / 2);
    }

    if (left + elem_width > win.width())
      left -= elem_width + width;

    element.css({left: left + 'px', top: top + 'px'});
  };

  // initialize HTML editor
  this.editor_init = function(config, id)
  {
    this.editor = new rcube_text_editor(config, id);
  };


  /********************************************************/
  /*********  html to text conversion functions   *********/
  /********************************************************/

  this.html2plain = function(html, func)
  {
    return this.format_converter(html, 'html', func);
  };

  this.plain2html = function(plain, func)
  {
    return this.format_converter(plain, 'plain', func);
  };

  this.format_converter = function(text, format, func)
  {
    // warn the user (if converted content is not empty)
    if (!text
      || (format == 'html' && !(text.replace(/<[^>]+>|&nbsp;|\xC2\xA0|\s/g, '')).length)
      || (format != 'html' && !(text.replace(/\xC2\xA0|\s/g, '')).length)
    ) {
      // without setTimeout() here, textarea is filled with initial (onload) content
      if (func)
        setTimeout(function() { func(''); }, 50);
      return true;
    }

    var confirmed = this.env.editor_warned || confirm(this.get_label('editorwarning'));

    this.env.editor_warned = true;

    if (!confirmed)
      return false;

    var url = '?_task=utils&_action=' + (format == 'html' ? 'html2text' : 'text2html'),
      lock = this.set_busy(true, 'converting');

    $.ajax({ type: 'POST', url: url, data: text, contentType: 'application/octet-stream',
      error: function(o, status, err) { ref.http_error(o, status, err, lock); },
      success: function(data) {
        ref.set_busy(false, null, lock);
        if (func) func(data);
      }
    });

    return true;
  };


  /********************************************************/
  /*********        remote request methods        *********/
  /********************************************************/

  // compose a valid url with the given parameters
  this.url = function(action, query)
  {
    var querystring = typeof query === 'string' ? query : '';

    if (typeof action !== 'string')
      query = action;
    else if (!query || typeof query !== 'object')
      query = {};

    if (action)
      query._action = action;
    else if (this.env.action)
      query._action = this.env.action;

    var url = this.env.comm_path, k, param = {};

    // overwrite task name
    if (action && action.match(/([a-z0-9_-]+)\/([a-z0-9-_.]+)/)) {
      query._action = RegExp.$2;
      url = url.replace(/\_task=[a-z0-9_-]+/, '_task=' + RegExp.$1);
    }

    // remove undefined values
    for (k in query) {
      if (query[k] !== undefined && query[k] !== null)
        param[k] = query[k];
    }

    if (param = $.param(param))
      url += (url.indexOf('?') > -1 ? '&' : '?') + param;

    if (querystring)
      url += (url.indexOf('?') > -1 ? '&' : '?') + querystring;

    return url;
  };

  this.redirect = function(url, lock)
  {
    if (lock || lock === null)
      this.set_busy(true);

    if (this.is_framed()) {
      parent.rcmail.redirect(url, lock);
    }
    else {
      if (this.env.extwin) {
        if (typeof url == 'string')
          url += (url.indexOf('?') < 0 ? '?' : '&') + '_extwin=1';
        else
          url._extwin = 1;
      }
      this.location_href(url, window);
    }
  };

  this.goto_url = function(action, query, lock, secure)
  {
    var url = this.url(action, query)
    if (secure) url = this.secure_url(url);
    this.redirect(url, lock);
  };

  this.location_href = function(url, target, frame)
  {
    if (frame)
      this.lock_frame();

    if (typeof url == 'object')
      url = this.env.comm_path + '&' + $.param(url);

    // simulate real link click to force IE to send referer header
    if (bw.ie && target == window)
      $('<a>').attr('href', url).appendTo(document.body).get(0).click();
    else
      target.location.href = url;

    // reset keep-alive interval
    this.start_keepalive();
  };

  // update browser location to remember current view
  this.update_state = function(query)
  {
    if (window.history.replaceState)
      try {
        // This may throw security exception in Firefox (#5400)
        window.history.replaceState({}, document.title, rcmail.url('', query));
      }
      catch(e) { /* ignore */ };
  };

  // send a http request to the server
  this.http_request = function(action, data, lock, type)
  {
    if (type != 'POST')
      type = 'GET';

    if (typeof data !== 'object')
      data = rcube_parse_query(data);

    data._remote = 1;
    data._unlock = lock ? lock : 0;

    // trigger plugin hook
    var result = this.triggerEvent('request' + action, data);

    // abort if one of the handlers returned false
    if (result === false) {
      if (data._unlock)
        this.set_busy(false, null, data._unlock);
      return false;
    }
    else if (result !== undefined) {
      data = result;
      if (data._action) {
        action = data._action;
        delete data._action;
      }
    }

    var url = this.url(action);

    // reset keep-alive interval
    this.start_keepalive();

    // send request
    return $.ajax({
      type: type, url: url, data: data, dataType: 'json',
      success: function(data) { ref.http_response(data); },
      error: function(o, status, err) { ref.http_error(o, status, err, lock, action); }
    });
  };

  // send a http GET request to the server
  this.http_get = this.http_request;

  // send a http POST request to the server
  this.http_post = function(action, data, lock)
  {
    return this.http_request(action, data, lock, 'POST');
  };

  // aborts ajax request
  this.abort_request = function(r)
  {
    if (r.request)
      r.request.abort();
    if (r.lock)
      this.set_busy(false, null, r.lock);
  };

  // handle HTTP response
  this.http_response = function(response)
  {
    if (!response)
      return;

    if (response.unlock)
      this.set_busy(false);

    this.triggerEvent('responsebefore', {response: response});
    this.triggerEvent('responsebefore'+response.action, {response: response});

    // set env vars
    if (response.env)
      this.set_env(response.env);

    var i;

    // we have labels to add
    if (typeof response.texts === 'object') {
      for (i in response.texts)
        if (typeof response.texts[i] === 'string')
          this.add_label(i, response.texts[i]);
    }

    // if we get javascript code from server -> execute it
    if (response.exec) {
      eval(response.exec);
    }

    // execute callback functions of plugins
    if (response.callbacks && response.callbacks.length) {
      for (i=0; i < response.callbacks.length; i++)
        this.triggerEvent(response.callbacks[i][0], response.callbacks[i][1]);
    }

    // process the response data according to the sent action
    switch (response.action) {
      case 'delete':
        if (this.task == 'addressbook') {
          var sid, uid = this.contact_list.get_selection(), writable = false;

          if (uid && this.contact_list.rows[uid]) {
            // search results, get source ID from record ID
            if (this.env.source == '') {
              sid = String(uid).replace(/^[^-]+-/, '');
              writable = sid && this.env.address_sources[sid] && !this.env.address_sources[sid].readonly;
            }
            else {
              writable = !this.env.address_sources[this.env.source].readonly;
            }
          }
          this.enable_command('compose', (uid && this.contact_list.rows[uid]));
          this.enable_command('delete', 'edit', writable);
          this.enable_command('export', (this.contact_list && this.contact_list.rowcount > 0));
          this.enable_command('export-selected', 'print', false);
        }

      case 'move':
        if (this.env.action == 'show') {
          // re-enable commands on move/delete error
          this.enable_command(this.env.message_commands, true);
          if (!this.env.list_post)
            this.enable_command('reply-list', false);
        }
        else if (this.task == 'addressbook') {
          this.triggerEvent('listupdate', { folder:this.env.source, rowcount:this.contact_list.rowcount });
        }

      case 'purge':
      case 'expunge':
        if (this.task == 'mail') {
          if (!this.env.exists) {
            // clear preview pane content
            if (this.env.contentframe)
              this.show_contentframe(false);
            // disable commands useless when mailbox is empty
            this.enable_command(this.env.message_commands, 'purge', 'expunge',
              'select-all', 'select-none', 'expand-all', 'expand-unread', 'collapse-all', false);
          }
          if (this.message_list)
            this.triggerEvent('listupdate', { folder:this.env.mailbox, rowcount:this.message_list.rowcount });
        }
        break;

      case 'refresh':
      case 'check-recent':
        // update message flags
        $.each(this.env.recent_flags || {}, function(uid, flags) {
          ref.set_message(uid, 'deleted', flags.deleted);
          ref.set_message(uid, 'replied', flags.answered);
          ref.set_message(uid, 'unread', !flags.seen);
          ref.set_message(uid, 'forwarded', flags.forwarded);
          ref.set_message(uid, 'flagged', flags.flagged);
        });
        delete this.env.recent_flags;

      case 'getunread':
      case 'search':
        this.env.qsearch = null;
      case 'list':
        if (this.task == 'mail') {
          var is_multifolder = this.is_multifolder_listing(),
            list = this.message_list,
            uid = this.env.list_uid;

          this.enable_command('show', 'select-all', 'select-none', this.env.messagecount > 0);
          this.enable_command('expunge', this.env.exists && !is_multifolder);
          this.enable_command('purge', this.purge_mailbox_test() && !is_multifolder);
          this.enable_command('import-messages', !is_multifolder);
          this.enable_command('expand-all', 'expand-unread', 'collapse-all', this.env.threading && this.env.messagecount && !is_multifolder);

          if (list) {
            if (response.action == 'list' || response.action == 'search') {
              // highlight message row when we're back from message page
              if (uid) {
                if (!list.rows[uid])
                  uid += '-' + this.env.mailbox;
                if (list.rows[uid]) {
                  list.select(uid);
                }
                delete this.env.list_uid;
              }

              this.enable_command('set-listmode', this.env.threads && !is_multifolder);
              if (list.rowcount > 0 && !$(document.activeElement).is('input,textarea'))
                list.focus();

              // trigger 'select' so all dependent actions update its state
              // e.g. plugins use this event to activate buttons (#1490647)
              list.triggerEvent('select');
            }

            if (response.action != 'getunread')
              this.triggerEvent('listupdate', { folder:this.env.mailbox, rowcount:list.rowcount });
          }
        }
        else if (this.task == 'addressbook') {
          this.enable_command('export', (this.contact_list && this.contact_list.rowcount > 0));

          if (response.action == 'list' || response.action == 'search') {
            this.enable_command('search-create', this.env.source == '');
            this.enable_command('search-delete', this.env.search_id);
            this.update_group_commands();
            if (this.contact_list.rowcount > 0 && !$(document.activeElement).is('input,textarea'))
              this.contact_list.focus();
            this.triggerEvent('listupdate', { folder:this.env.source, rowcount:this.contact_list.rowcount });
          }
        }
        break;

      case 'list-contacts':
      case 'search-contacts':
        if (this.contact_list && this.contact_list.rowcount > 0)
          this.contact_list.focus();
        break;
    }

    if (response.unlock)
      this.hide_message(response.unlock);

    this.triggerEvent('responseafter', {response: response});
    this.triggerEvent('responseafter'+response.action, {response: response});

    // reset keep-alive interval
    this.start_keepalive();
  };

  // handle HTTP request errors
  this.http_error = function(request, status, err, lock, action)
  {
    var errmsg = request.statusText;

    this.set_busy(false, null, lock);
    request.abort();

    // don't display error message on page unload (#1488547)
    if (this.unload)
      return;

    if (request.status && errmsg)
      this.display_message(this.get_label('servererror') + ' (' + errmsg + ')', 'error');
    else if (status == 'timeout')
      this.display_message(this.get_label('requesttimedout'), 'error');
    else if (request.status == 0 && status != 'abort')
      this.display_message(this.get_label('connerror'), 'error');

    // redirect to url specified in location header if not empty
    var location_url = request.getResponseHeader("Location");
    if (location_url && this.env.action != 'compose')  // don't redirect on compose screen, contents might get lost (#1488926)
      this.redirect(location_url);

    // 403 Forbidden response (CSRF prevention) - reload the page.
    // In case there's a new valid session it will be used, otherwise
    // login form will be presented (#1488960).
    if (request.status == 403) {
      (this.is_framed() ? parent : window).location.reload();
      return;
    }

    // re-send keep-alive requests after 30 seconds
    if (action == 'keep-alive')
      setTimeout(function(){ ref.keep_alive(); ref.start_keepalive(); }, 30000);
  };

  // handler for session errors detected on the server
  this.session_error = function(redirect_url)
  {
    this.env.server_error = 401;

    // save message in local storage and do not redirect
    if (this.env.action == 'compose') {
      this.save_compose_form_local();
      this.compose_skip_unsavedcheck = true;
    }
    else if (redirect_url) {
      setTimeout(function(){ ref.redirect(redirect_url, true); }, 2000);
    }
  };

  // callback when an iframe finished loading
  this.iframe_loaded = function(unlock)
  {
    this.set_busy(false, null, unlock);

    if (this.submit_timer)
      clearTimeout(this.submit_timer);
  };

  /**
   Send multi-threaded parallel HTTP requests to the server for a list if items.
   The string '%' in either a GET query or POST parameters will be replaced with the respective item value.
   This is the argument object expected: {
       items: ['foo','bar','gna'],      // list of items to send requests for
       action: 'task/some-action',      // Roudncube action to call
       query: { q:'%s' },               // GET query parameters
       postdata: { source:'%s' },       // POST data (sends a POST request if present)
       threads: 3,                      // max. number of concurrent requests
       onresponse: function(data){ },   // Callback function called for every response received from server
       whendone: function(alldata){ }   // Callback function called when all requests have been sent
   }
  */
  this.multi_thread_http_request = function(prop)
  {
    var i, item, reqid = new Date().getTime(),
      threads = prop.threads || 1;

    prop.reqid = reqid;
    prop.running = 0;
    prop.requests = [];
    prop.result = [];
    prop._items = $.extend([], prop.items);  // copy items

    if (!prop.lock)
      prop.lock = this.display_message(this.get_label('loading'), 'loading');

    // add the request arguments to the jobs pool
    this.http_request_jobs[reqid] = prop;

    // start n threads
    for (i=0; i < threads; i++) {
      item = prop._items.shift();
      if (item === undefined)
        break;

      prop.running++;
      prop.requests.push(this.multi_thread_send_request(prop, item));
    }

    return reqid;
  };

  // helper method to send an HTTP request with the given iterator value
  this.multi_thread_send_request = function(prop, item)
  {
    var k, postdata, query;

    // replace %s in post data
    if (prop.postdata) {
      postdata = {};
      for (k in prop.postdata) {
        postdata[k] = String(prop.postdata[k]).replace('%s', item);
      }
      postdata._reqid = prop.reqid;
    }
    // replace %s in query
    else if (typeof prop.query == 'string') {
      query = prop.query.replace('%s', item);
      query += '&_reqid=' + prop.reqid;
    }
    else if (typeof prop.query == 'object' && prop.query) {
      query = {};
      for (k in prop.query) {
        query[k] = String(prop.query[k]).replace('%s', item);
      }
      query._reqid = prop.reqid;
    }

    // send HTTP GET or POST request
    return postdata ? this.http_post(prop.action, postdata) : this.http_request(prop.action, query);
  };

  // callback function for multi-threaded http responses
  this.multi_thread_http_response = function(data, reqid)
  {
    var prop = this.http_request_jobs[reqid];
    if (!prop || prop.running <= 0 || prop.cancelled)
      return;

    prop.running--;

    // trigger response callback
    if (prop.onresponse && typeof prop.onresponse == 'function') {
      prop.onresponse(data);
    }

    prop.result = $.extend(prop.result, data);

    // send next request if prop.items is not yet empty
    var item = prop._items.shift();
    if (item !== undefined) {
      prop.running++;
      prop.requests.push(this.multi_thread_send_request(prop, item));
    }
    // trigger whendone callback and mark this request as done
    else if (prop.running == 0) {
      if (prop.whendone && typeof prop.whendone == 'function') {
        prop.whendone(prop.result);
      }

      this.set_busy(false, '', prop.lock);

      // remove from this.http_request_jobs pool
      delete this.http_request_jobs[reqid];
    }
  };

  // abort a running multi-thread request with the given identifier
  this.multi_thread_request_abort = function(reqid)
  {
    var prop = this.http_request_jobs[reqid];
    if (prop) {
      for (var i=0; prop.running > 0 && i < prop.requests.length; i++) {
        if (prop.requests[i].abort)
          prop.requests[i].abort();
      }

      prop.running = 0;
      prop.cancelled = true;
      this.set_busy(false, '', prop.lock);
    }
  };

  // post the given form to a hidden iframe
  this.async_upload_form = function(form, action, onload)
  {
    // create hidden iframe
    var ts = new Date().getTime(),
      frame_name = 'rcmupload' + ts,
      frame = this.async_upload_form_frame(frame_name);

    // upload progress support
    if (this.env.upload_progress_name) {
      var fname = this.env.upload_progress_name,
        field = $('input[name='+fname+']', form);

      if (!field.length) {
        field = $('<input>').attr({type: 'hidden', name: fname});
        field.prependTo(form);
      }

      field.val(ts);
    }

    // handle upload errors by parsing iframe content in onload
    frame.on('load', {ts:ts}, onload);

    $(form).attr({
        target: frame_name,
        action: this.url(action, {_id: this.env.compose_id || '', _uploadid: ts, _from: this.env.action}),
        method: 'POST'})
      .attr(form.encoding ? 'encoding' : 'enctype', 'multipart/form-data')
      .submit();

    return frame_name;
  };

  // create iframe element for files upload
  this.async_upload_form_frame = function(name)
  {
    return $('<iframe>').attr({name: name, style: 'border: none; width: 0; height: 0; visibility: hidden'})
      .appendTo(document.body);
  };

  // html5 file-drop API
  this.document_drag_hover = function(e, over)
  {
    // don't e.preventDefault() here to not block text dragging on the page (#1490619)
    $(this.gui_objects.filedrop)[(over?'addClass':'removeClass')]('active');
  };

  this.file_drag_hover = function(e, over)
  {
    e.preventDefault();
    e.stopPropagation();
    $(this.gui_objects.filedrop)[(over?'addClass':'removeClass')]('hover');
  };

  // handler when files are dropped to a designated area.
  // compose a multipart form data and submit it to the server
  this.file_dropped = function(e)
  {
    // abort event and reset UI
    this.file_drag_hover(e, false);

    // prepare multipart form data composition
    var uri, files = e.target.files || e.dataTransfer.files,
      formdata = window.FormData ? new FormData() : null,
      fieldname = (this.env.filedrop.fieldname || '_file') + (this.env.filedrop.single ? '' : '[]'),
      boundary = '------multipartformboundary' + (new Date).getTime(),
      dashdash = '--', crlf = '\r\n',
      multipart = dashdash + boundary + crlf,
      args = {_id: this.env.compose_id || this.env.cid || '', _remote: 1, _from: this.env.action};

    if (!files || !files.length) {
      // Roundcube attachment, pass its uri to the backend and attach
      if (uri = e.dataTransfer.getData('roundcube-uri')) {
        var ts = new Date().getTime(),
          // jQuery way to escape filename (#1490530)
          content = $('<span>').text(e.dataTransfer.getData('roundcube-name') || this.get_label('attaching')).html();

        args._uri = uri;
        args._uploadid = ts;

        // add to attachments list
        if (!this.add2attachment_list(ts, {name: '', html: content, classname: 'uploading', complete: false}))
          this.file_upload_id = this.set_busy(true, 'attaching');

        this.http_post(this.env.filedrop.action || 'upload', args);
      }
      return;
    }

    // inline function to submit the files to the server
    var submit_data = function() {
      var multiple = files.length > 1,
        ts = new Date().getTime(),
        // jQuery way to escape filename (#1490530)
        content = $('<span>').text(multiple ? ref.get_label('uploadingmany') : files[0].name).html();

      // add to attachments list
      if (!ref.add2attachment_list(ts, { name:'', html:content, classname:'uploading', complete:false }))
        ref.file_upload_id = ref.set_busy(true, 'uploading');

      // complete multipart content and post request
      multipart += dashdash + boundary + dashdash + crlf;

      args._uploadid = ts;

      $.ajax({
        type: 'POST',
        dataType: 'json',
        url: ref.url(ref.env.filedrop.action || 'upload', args),
        contentType: formdata ? false : 'multipart/form-data; boundary=' + boundary,
        processData: false,
        timeout: 0, // disable default timeout set in ajaxSetup()
        data: formdata || multipart,
        headers: {'X-Roundcube-Request': ref.env.request_token},
        xhr: function() { var xhr = jQuery.ajaxSettings.xhr(); if (!formdata && xhr.sendAsBinary) xhr.send = xhr.sendAsBinary; return xhr; },
        success: function(data){ ref.http_response(data); },
        error: function(o, status, err) { ref.http_error(o, status, err, null, 'attachment'); }
      });
    };

    // get contents of all dropped files
    var last = this.env.filedrop.single ? 0 : files.length - 1;
    for (var j=0, i=0, f; j <= last && (f = files[i]); i++) {
      if (!f.name) f.name = f.fileName;
      if (!f.size) f.size = f.fileSize;
      if (!f.type) f.type = 'application/octet-stream';

      // file name contains non-ASCII characters, do UTF8-binary string conversion.
      if (!formdata && /[^\x20-\x7E]/.test(f.name))
        f.name_bin = unescape(encodeURIComponent(f.name));

      // filter by file type if requested
      if (this.env.filedrop.filter && !f.type.match(new RegExp(this.env.filedrop.filter))) {
        // TODO: show message to user
        continue;
      }

      // do it the easy way with FormData (FF 4+, Chrome 5+, Safari 5+)
      if (formdata) {
        formdata.append(fieldname, f);
        if (j == last)
          return submit_data();
      }
      // use FileReader supporetd by Firefox 3.6
      else if (window.FileReader) {
        var reader = new FileReader();

        // closure to pass file properties to async callback function
        reader.onload = (function(file, j) {
          return function(e) {
            multipart += 'Content-Disposition: form-data; name="' + fieldname + '"';
            multipart += '; filename="' + (f.name_bin || file.name) + '"' + crlf;
            multipart += 'Content-Length: ' + file.size + crlf;
            multipart += 'Content-Type: ' + file.type + crlf + crlf;
            multipart += reader.result + crlf;
            multipart += dashdash + boundary + crlf;

            if (j == last)  // we're done, submit the data
              return submit_data();
          }
        })(f,j);
        reader.readAsBinaryString(f);
      }
      // Firefox 3
      else if (f.getAsBinary) {
        multipart += 'Content-Disposition: form-data; name="' + fieldname + '"';
        multipart += '; filename="' + (f.name_bin || f.name) + '"' + crlf;
        multipart += 'Content-Length: ' + f.size + crlf;
        multipart += 'Content-Type: ' + f.type + crlf + crlf;
        multipart += f.getAsBinary() + crlf;
        multipart += dashdash + boundary +crlf;

        if (j == last)
          return submit_data();
      }

      j++;
    }
  };

  // starts interval for keep-alive signal
  this.start_keepalive = function()
  {
    if (!this.env.session_lifetime || this.env.framed || this.env.extwin || this.task == 'login' || this.env.action == 'print')
      return;

    if (this._keepalive)
      clearInterval(this._keepalive);

    // use Math to prevent from an integer overflow (#5273)
    // maximum interval is 15 minutes, minimum is 30 seconds
    var interval = Math.min(1800, this.env.session_lifetime) * 0.5 * 1000;
    this._keepalive = setInterval(function() { ref.keep_alive(); }, interval < 30000 ? 30000 : interval);
  };

  // starts interval for refresh signal
  this.start_refresh = function()
  {
    if (!this.env.refresh_interval || this.env.framed || this.env.extwin || this.task == 'login' || this.env.action == 'print')
      return;

    if (this._refresh)
      clearInterval(this._refresh);

    this._refresh = setInterval(function(){ ref.refresh(); }, this.env.refresh_interval * 1000);
  };

  // sends keep-alive signal
  this.keep_alive = function()
  {
    if (!this.busy)
      this.http_request('keep-alive');
  };

  // sends refresh signal
  this.refresh = function()
  {
    if (this.busy) {
      // try again after 10 seconds
      setTimeout(function(){ ref.refresh(); ref.start_refresh(); }, 10000);
      return;
    }

    var params = {}, lock = this.set_busy(true, 'refreshing');

    if (this.task == 'mail' && this.gui_objects.mailboxlist)
      params = this.check_recent_params();

    params._last = Math.floor(this.env.lastrefresh.getTime() / 1000);
    this.env.lastrefresh = new Date();

    // plugins should bind to 'requestrefresh' event to add own params
    this.http_post('refresh', params, lock);
  };

  // returns check-recent request parameters
  this.check_recent_params = function()
  {
    var params = {_mbox: this.env.mailbox};

    if (this.gui_objects.mailboxlist)
      params._folderlist = 1;
    if (this.gui_objects.quotadisplay)
      params._quota = 1;
    if (this.env.search_request)
      params._search = this.env.search_request;

    if (this.gui_objects.messagelist) {
      params._list = 1;

      // message uids for flag updates check
      params._uids = $.map(this.message_list.rows, function(row, uid) { return uid; }).join(',');
    }

    return params;
  };


  /********************************************************/
  /*********            helper methods            *********/
  /********************************************************/

  /**
   * Quote html entities
   */
  this.quote_html = function(str)
  {
    return String(str).replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
  };

  // get window.opener.rcmail if available
  this.opener = function(deep, filter)
  {
    var i, win = window.opener;

    // catch Error: Permission denied to access property rcmail
    try {
      if (win && !win.closed) {
        // try parent of the opener window, e.g. preview frame
        if (deep && (!win.rcmail || win.rcmail.env.framed) && win.parent && win.parent.rcmail)
          win = win.parent;

        if (win.rcmail && filter)
          for (i in filter)
            if (win.rcmail.env[i] != filter[i])
              return;

        return win.rcmail;
      }
    }
    catch (e) {}
  };

  // check if we're in show mode or if we have a unique selection
  // and return the message uid
  this.get_single_uid = function()
  {
    var uid = this.env.uid || (this.message_list ? this.message_list.get_single_selection() : null);
    var result = ref.triggerEvent('get_single_uid', { uid: uid });
    return result || uid;
  };

  // same as above but for contacts
  this.get_single_cid = function()
  {
    var cid = this.env.cid || (this.contact_list ? this.contact_list.get_single_selection() : null);
    var result = ref.triggerEvent('get_single_cid', { cid: cid });
    return result || cid;
  };

  // get the IMP mailbox of the message with the given UID
  this.get_message_mailbox = function(uid)
  {
    var msg = (this.env.messages && uid ? this.env.messages[uid] : null) || {};
    return msg.mbox || this.env.mailbox;
  };

  // build request parameters from single message id (maybe with mailbox name)
  this.params_from_uid = function(uid, params)
  {
    if (!params)
      params = {};

    params._uid = String(uid).split('-')[0];
    params._mbox = this.get_message_mailbox(uid);

    return params;
  };

  // gets cursor position
  this.get_caret_pos = function(obj)
  {
    if (obj.selectionEnd !== undefined)
      return obj.selectionEnd;

    return obj.value.length;
  };

  // moves cursor to specified position
  this.set_caret_pos = function(obj, pos)
  {
    try {
      if (obj.setSelectionRange)
        obj.setSelectionRange(pos, pos);
    }
    catch(e) {} // catch Firefox exception if obj is hidden
  };

  // get selected text from an input field
  this.get_input_selection = function(obj)
  {
    var start = 0, end = 0, normalizedValue = '';

    if (typeof obj.selectionStart == "number" && typeof obj.selectionEnd == "number") {
      normalizedValue = obj.value;
      start = obj.selectionStart;
      end = obj.selectionEnd;
    }

    return {start: start, end: end, text: normalizedValue.substr(start, end-start)};
  };

  // disable/enable all fields of a form
  this.lock_form = function(form, lock)
  {
    if (!form || !form.elements)
      return;

    var n, len, elm;

    if (lock)
      this.disabled_form_elements = [];

    for (n=0, len=form.elements.length; n<len; n++) {
      elm = form.elements[n];

      if (elm.type == 'hidden')
        continue;
      // remember which elem was disabled before lock
      if (lock && elm.disabled)
        this.disabled_form_elements.push(elm);
      else if (lock || $.inArray(elm, this.disabled_form_elements) < 0)
        elm.disabled = lock;
    }
  };

  this.mailto_handler_uri = function()
  {
    return location.href.split('?')[0] + '?_task=mail&_action=compose&_to=%s';
  };

  this.register_protocol_handler = function(name)
  {
    try {
      window.navigator.registerProtocolHandler('mailto', this.mailto_handler_uri(), name);
    }
    catch(e) {
      this.display_message(String(e), 'error');
    }
  };

  this.check_protocol_handler = function(name, elem)
  {
    var nav = window.navigator;

    if (!nav || (typeof nav.registerProtocolHandler != 'function')) {
      $(elem).addClass('disabled').click(function(){ return false; });
    }
    else if (typeof nav.isProtocolHandlerRegistered == 'function') {
      var status = nav.isProtocolHandlerRegistered('mailto', this.mailto_handler_uri());
      if (status)
        $(elem).parent().find('.mailtoprotohandler-status').html(status);
    }
    else {
      $(elem).click(function() { ref.register_protocol_handler(name); return false; });
    }
  };

  // Checks browser capabilities eg. PDF support, TIF support
  this.browser_capabilities_check = function()
  {
    if (!this.env.browser_capabilities)
      this.env.browser_capabilities = {};

    $.each(['pdf', 'flash', 'tif'], function() {
      if (ref.env.browser_capabilities[this] === undefined)
        ref.env.browser_capabilities[this] = ref[this + '_support_check']();
    });
  };

  // Returns browser capabilities string
  this.browser_capabilities = function()
  {
    if (!this.env.browser_capabilities)
      return '';

    var n, ret = [];

    for (n in this.env.browser_capabilities)
      ret.push(n + '=' + this.env.browser_capabilities[n]);

    return ret.join();
  };

  this.tif_support_check = function()
  {
    window.setTimeout(function() {
      var img = new Image();
      img.onload = function() { ref.env.browser_capabilities.tif = 1; };
      img.onerror = function() { ref.env.browser_capabilities.tif = 0; };
      img.src = ref.assets_path('program/resources/blank.tif');
    }, 10);

    return 0;
  };

  this.pdf_support_check = function()
  {
    var plugin = navigator.mimeTypes ? navigator.mimeTypes["application/pdf"] : {},
      plugins = navigator.plugins,
      len = plugins.length,
      regex = /Adobe Reader|PDF|Acrobat/i;

    if (plugin && plugin.enabledPlugin)
        return 1;

    if ('ActiveXObject' in window) {
      try {
        if (plugin = new ActiveXObject("AcroPDF.PDF"))
          return 1;
      }
      catch (e) {}
      try {
        if (plugin = new ActiveXObject("PDF.PdfCtrl"))
          return 1;
      }
      catch (e) {}
    }

    for (i=0; i<len; i++) {
      plugin = plugins[i];
      if (typeof plugin === 'String') {
        if (regex.test(plugin))
          return 1;
      }
      else if (plugin.name && regex.test(plugin.name))
        return 1;
    }

    window.setTimeout(function() {
      $('<object>').css({position: 'absolute', left: '-10000px'})
        .attr({data: ref.assets_path('program/resources/dummy.pdf'), width: 1, height: 1, type: 'application/pdf'})
        .load(function() { ref.env.browser_capabilities.pdf = 1; })
        .error(function() { ref.env.browser_capabilities.pdf = 0; })
        .appendTo($('body'));
      }, 10);

    return 0;
  };

  this.flash_support_check = function()
  {
    var plugin = navigator.mimeTypes ? navigator.mimeTypes["application/x-shockwave-flash"] : {};

    if (plugin && plugin.enabledPlugin)
        return 1;

    if ('ActiveXObject' in window) {
      try {
        if (plugin = new ActiveXObject("ShockwaveFlash.ShockwaveFlash"))
          return 1;
      }
      catch (e) {}
    }

    return 0;
  };

  this.assets_path = function(path)
  {
    if (this.env.assets_path && !path.startsWith(this.env.assets_path)) {
      path = this.env.assets_path + path;
    }

    return path;
  };

  // Cookie setter
  this.set_cookie = function(name, value, expires)
  {
    setCookie(name, value, expires, this.env.cookie_path, this.env.cookie_domain, this.env.cookie_secure);
  };

  this.get_local_storage_prefix = function()
  {
    if (!this.local_storage_prefix)
      this.local_storage_prefix = 'roundcube.' + (this.env.user_id || 'anonymous') + '.';

    return this.local_storage_prefix;
  };

  // wrapper for localStorage.getItem(key)
  this.local_storage_get_item = function(key, deflt, encrypted)
  {
    var item, result;

    // TODO: add encryption
    try {
      item = localStorage.getItem(this.get_local_storage_prefix() + key);
      result = JSON.parse(item);
    }
    catch (e) { }

    return result || deflt || null;
  };

  // wrapper for localStorage.setItem(key, data)
  this.local_storage_set_item = function(key, data, encrypted)
  {
    // try/catch to handle no localStorage support, but also error
    // in Safari-in-private-browsing-mode where localStorage exists
    // but can't be used (#1489996)
    try {
      // TODO: add encryption
      localStorage.setItem(this.get_local_storage_prefix() + key, JSON.stringify(data));
      return true;
    }
    catch (e) {
      return false;
    }
  };

  // wrapper for localStorage.removeItem(key)
  this.local_storage_remove_item = function(key)
  {
    try {
      localStorage.removeItem(this.get_local_storage_prefix() + key);
      return true;
    }
    catch (e) {
      return false;
    }
  };

  this.print_dialog = function()
  {
    if (bw.safari)
      setTimeout('window.print()', 10);
    else
      window.print();
  };
}  // end object rcube_webmail


// some static methods
rcube_webmail.long_subject_title = function(elem, indent)
{
  if (!elem.title) {
    var $elem = $(elem);
    if ($elem.width() + (indent || 0) * 15 > $elem.parent().width())
      elem.title = rcube_webmail.subject_text(elem);
  }
};

rcube_webmail.long_subject_title_ex = function(elem)
{
  if (!elem.title) {
    var $elem = $(elem),
      txt = $.trim($elem.text()),
      tmp = $('<span>').text(txt)
        .css({'position': 'absolute', 'float': 'left', 'visibility': 'hidden',
          'font-size': $elem.css('font-size'), 'font-weight': $elem.css('font-weight')})
        .appendTo($('body')),
      w = tmp.width();

    tmp.remove();
    if (w + $('span.branch', $elem).width() * 15 > $elem.width())
      elem.title = rcube_webmail.subject_text(elem);
  }
};

rcube_webmail.subject_text = function(elem)
{
  var t = $(elem).clone();
  t.find('.skip-on-drag').remove();
  return t.text();
};

// set event handlers on all iframe elements (and their contents)
rcube_webmail.set_iframe_events = function(events)
{
  $('iframe').each(function() {
    var frame = $(this);
    $.each(events, function(event_name, event_handler) {
      frame.on('load', function(e) {
        try { $(this).contents().on(event_name, event_handler); }
        catch (e) {/* catch possible permission error in IE */ }
      });

      try { frame.contents().on(event_name, event_handler); }
      catch (e) {/* catch possible permission error in IE */ }
    });
  });
};

rcube_webmail.prototype.get_cookie = getCookie;

// copy event engine prototype
rcube_webmail.prototype.addEventListener = rcube_event_engine.prototype.addEventListener;
rcube_webmail.prototype.removeEventListener = rcube_event_engine.prototype.removeEventListener;
rcube_webmail.prototype.triggerEvent = rcube_event_engine.prototype.triggerEvent;

































/**
 * Roundcube List Widget
 *
 * This file is part of the Roundcube Webmail client
 *
 * @licstart  The following is the entire license notice for the
 * JavaScript code in this file.
 *
 * Copyright (c) 2005-2014, The Roundcube Dev Team
 *
 * The JavaScript code in this page is free software: you can
 * redistribute it and/or modify it under the terms of the GNU
 * General Public License (GNU GPL) as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option)
 * any later version.  The code is distributed WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.
 *
 * As additional permission under GNU GPL version 3 section 7, you
 * may distribute non-source (e.g., minimized or compacted) forms of
 * that code without the copy of the GNU GPL normally required by
 * section 4, provided you include this license notice and a URL
 * through which recipients can access the Corresponding Source.
 *
 * @licend  The above is the entire license notice
 * for the JavaScript code in this file.
 *
 * @author Thomas Bruederli <roundcube@gmail.com>
 * @author Charles McNulty <charles@charlesmcnulty.com>
 *
 * @requires jquery.js, common.js
 */


/**
 * Roundcube List Widget class
 * @constructor
 */
function rcube_list_widget(list, p)
{
  // static contants
  this.ENTER_KEY = 13;
  this.DELETE_KEY = 46;
  this.BACKSPACE_KEY = 8;

  this.list = list ? list : null;
  this.tagname = this.list ? this.list.nodeName.toLowerCase() : 'table';
  this.id_regexp = /^rcmrow([a-z0-9\-_=\+\/]+)/i;
  this.rows = {};
  this.selection = [];
  this.rowcount = 0;
  this.colcount = 0;

  this.subject_col = 0;
  this.modkey = 0;
  this.multiselect = false;
  this.multiexpand = false;
  this.multi_selecting = false;
  this.draggable = false;
  this.column_movable = false;
  this.keyboard = false;
  this.toggleselect = false;
  this.aria_listbox = false;
  this.parent_focus = true;

  this.drag_active = false;
  this.col_drag_active = false;
  this.column_fixed = null;
  this.last_selected = null;
  this.shift_start = null;
  this.focused = false;
  this.drag_mouse_start = null;
  this.dblclick_time = 500; // default value on MS Windows is 500
  this.row_init = function(){};  // @deprecated; use list.addEventListener('initrow') instead

  // overwrite default paramaters
  if (p && typeof p === 'object')
    for (var n in p)
      this[n] = p[n];

  // register this instance
  rcube_list_widget._instances.push(this);
};


rcube_list_widget.prototype = {


/**
 * get all message rows from HTML table and init each row
 */
init: function()
{
  if (this.tagname == 'table' && this.list && this.list.tBodies[0]) {
    this.thead = this.list.tHead;
    this.tbody = this.list.tBodies[0];
  }
  else if (this.tagname != 'table' && this.list) {
    this.tbody = this.list;
  }

  if ($(this.list).attr('role') == 'listbox') {
    this.aria_listbox = true;
    if (this.multiselect)
      $(this.list).attr('aria-multiselectable', 'true');
  }

  var me = this;

  if (this.tbody) {
    this.rows = {};
    this.rowcount = 0;

    var r, len, rows = this.tbody.childNodes;

    for (r=0, len=rows.length; r<len; r++) {
      if (rows[r].nodeType == 1)
        this.rowcount += this.init_row(rows[r]) ? 1 : 0;
    }

    this.init_header();
    this.frame = this.list.parentNode;

    // set body events
    if (this.keyboard) {
      rcube_event.add_listener({event:'keydown', object:this, method:'key_press'});

      // allow the table element to receive focus.
      $(this.list).attr('tabindex', '0')
        .on('focus', function(e){ me.focus(e); });
    }
  }

  if (this.parent_focus) {
    this.list.parentNode.onclick = function(e) { me.focus(); };
  }

  return this;
},


/**
 * Init list row and set mouse events on it
 */
init_row: function(row)
{
  row.uid = this.get_row_uid(row);

  // make references in internal array and set event handlers
  if (row && row.uid) {
    var self = this, uid = row.uid;
    this.rows[uid] = {uid:uid, id:row.id, obj:row};

    $(row).data('uid', uid)
      // set eventhandlers to table row (only left-button-clicks in mouseup)
      .mousedown(function(e) { return self.drag_row(e, this.uid); })
      .mouseup(function(e) {
        if (e.which == 1 && !self.drag_active)
          return self.click_row(e, this.uid);
        else
          return true;
      });

    if (bw.touch && row.addEventListener) {
      row.addEventListener('touchstart', function(e) {
        if (e.touches.length == 1) {
          self.touchmoved = false;
          self.drag_row(rcube_event.touchevent(e.touches[0]), this.uid)
        }
      }, false);
      row.addEventListener('touchend', function(e) {
        if (e.changedTouches.length == 1) {
          if (!self.touchmoved && !self.click_row(rcube_event.touchevent(e.changedTouches[0]), this.uid))
            e.preventDefault();
        }
      }, false);
      row.addEventListener('touchmove', function(e) {
        if (e.changedTouches.length == 1) {
          self.touchmoved = true;
          if (self.drag_active)
            e.preventDefault();
        }
      }, false);
    }

    // label the list row with the subject col as descriptive label
    if (this.aria_listbox) {
      var lbl_id = 'l:' + row.id;
      $(row)
        .attr('role', 'option')
        .attr('aria-labelledby', lbl_id)
        .find(this.col_tagname()).eq(this.subject_col).attr('id', lbl_id);
    }

    if (document.all)
      row.onselectstart = function() { return false; };

    this.row_init(this.rows[uid]);  // legacy support
    this.triggerEvent('initrow', this.rows[uid]);

    return true;
  }
},


/**
 * Init list column headers and set mouse events on them
 */
init_header: function()
{
  if (this.thead) {
    this.colcount = 0;

    if (this.fixed_header) {  // copy (modified) fixed header back to the actual table
      $(this.list.tHead).replaceWith($(this.fixed_header).find('thead').clone());
      $(this.list.tHead).find('th,td').attr('style', '').find('a').attr('tabindex', '-1');  // remove fixed widths
    }
    else if (!bw.touch && this.list.className.indexOf('fixedheader') >= 0) {
      this.init_fixed_header();
    }

    var col, r, p = this;
    // add events for list columns moving
    if (this.column_movable && this.thead && this.thead.rows) {
      for (r=0; r<this.thead.rows[0].cells.length; r++) {
        if (this.column_fixed == r)
          continue;
        col = this.thead.rows[0].cells[r];
        col.onmousedown = function(e) { return p.drag_column(e, this); };
        this.colcount++;
      }
    }
  }
},

init_fixed_header: function()
{
  var clone = $(this.list.tHead).clone();

  if (!this.fixed_header) {
    this.fixed_header = $('<table>')
      .attr('class', this.list.className + ' fixedcopy')
      .attr('role', 'presentation')
      .css({ position:'fixed' })
      .append(clone)
      .append('<tbody></tbody>');
    $(this.list).before(this.fixed_header);

    var me = this;
    $(window).resize(function() { me.resize(); });
    $(window).scroll(function() {
      var w = $(window);
      me.fixed_header.css({
        marginLeft: -w.scrollLeft() + 'px',
        marginTop: -w.scrollTop() + 'px'
      });
    });
  }
  else {
    $(this.fixed_header).find('thead').replaceWith(clone);
  }

  // avoid scrolling header links being focused
  $(this.list.tHead).find('a.sortcol').attr('tabindex', '-1');

  // set tabindex to fixed header sort links
  clone.find('a.sortcol').attr('tabindex', '0');

  this.thead = clone.get(0);
  this.resize();
},

resize: function()
{
    if (!this.fixed_header)
      return;

    var column_widths = [];

    // get column widths from original thead
    $(this.tbody).parent().find('thead th,thead td').each(function(index) {
      column_widths[index] = $(this).width();
    });

    // apply fixed widths to fixed table header
    $(this.thead).parent().width($(this.tbody).parent().width());
    $(this.thead).find('th,td').each(function(index) {
      $(this).width(column_widths[index]);
    });

    $(window).scroll();
},

/**
 * Remove all list rows
 */
clear: function(sel)
{
  if (this.tagname == 'table') {
    var tbody = document.createElement('tbody');
    this.list.insertBefore(tbody, this.tbody);
    this.list.removeChild(this.list.tBodies[1]);
    this.tbody = tbody;
  }
  else {
    $(this.row_tagname() + ':not(.thead)', this.tbody).remove();
  }

  this.rows = {};
  this.rowcount = 0;
  this.last_selected = null;

  if (sel)
    this.clear_selection();

  // reset scroll position (in Opera)
  if (this.frame)
    this.frame.scrollTop = 0;

  // fix list header after removing any rows
  this.resize();
},


/**
 * 'remove' message row from list (just hide it)
 */
remove_row: function(uid, sel_next)
{
  var self = this, node = this.rows[uid] ? this.rows[uid].obj : null;

  if (!node)
    return;

  node.style.display = 'none';

  if (sel_next)
    this.select_next();

  delete this.rows[uid];
  this.rowcount--;

  // fix list header after removing any rows
  clearTimeout(this.resize_timeout)
  this.resize_timeout = setTimeout(function() { self.resize(); }, 50);
},


/**
 * Add row to the list and initialize it
 */
insert_row: function(row, before)
{
  var self = this, tbody = this.tbody;

  // create a real dom node first
  if (row.nodeName === undefined) {
    // for performance reasons use DOM instead of jQuery here
    var domrow = document.createElement(this.row_tagname());

    if (row.id) domrow.id = row.id;
    if (row.uid) domrow.uid = row.uid;
    if (row.className) domrow.className = row.className;
    if (row.style) $.extend(domrow.style, row.style);

    for (var e, domcell, col, i=0; row.cols && i < row.cols.length; i++) {
      col = row.cols[i];
      domcell = document.createElement(this.col_tagname());
      if (col.className) domcell.className = col.className;
      if (col.innerHTML) domcell.innerHTML = col.innerHTML;
      for (e in col.events)
        domcell['on' + e] = col.events[e];
      domrow.appendChild(domcell);
    }

    row = domrow;
  }

  if (before && tbody.childNodes.length)
    tbody.insertBefore(row, (typeof before == 'object' && before.parentNode == tbody) ? before : tbody.firstChild);
  else
    tbody.appendChild(row);

  this.init_row(row);
  this.rowcount++;

  // fix list header after adding any rows
  clearTimeout(this.resize_timeout)
  this.resize_timeout = setTimeout(function() { self.resize(); }, 50);
},

/**
 * 
 */
update_row: function(id, cols, newid, select)
{
  var row = this.rows[id];
  if (!row) return false;

  var i, domrow = row.obj;
  for (i = 0; cols && i < cols.length; i++) {
    this.get_cell(domrow, i).html(cols[i]);
  }

  if (newid) {
    delete this.rows[id];
    domrow.uid = newid;
    domrow.id = 'rcmrow' + newid;
    this.init_row(domrow);

    if (select)
      this.selection[0] = newid;

    if (this.last_selected == id)
      this.last_selected = newid;
  }
},


/**
 * Set focus to the list
 */
focus: function(e)
{
  if (this.focused)
    return;

  this.focused = true;

  if (e)
    rcube_event.cancel(e);

  var focus_elem = null;

  if (this.last_selected && this.rows[this.last_selected]) {
    focus_elem = $(this.rows[this.last_selected].obj).find(this.col_tagname()).eq(this.subject_col).attr('tabindex', '0');
  }

  // Un-focus already focused elements (#1487123, #1487316, #1488600, #1488620)
  if (focus_elem && focus_elem.length) {
    // We now fix this by explicitly assigning focus to a dedicated link element
    this.focus_noscroll(focus_elem);
  }
  else {
    // It looks that window.focus() does the job for all browsers, but not Firefox (#1489058)
    $('iframe,:focus:not(body)').blur();
    window.focus();
  }

  $(this.list).addClass('focus').removeAttr('tabindex');

  // set internal focus pointer to first row
  if (!this.last_selected)
    this.select_first(CONTROL_KEY);
},


/**
 * remove focus from the list
 */
blur: function(e)
{
  this.focused = false;

  // avoid the table getting focus right again
  var me = this;
  setTimeout(function(){
    $(me.list).removeClass('focus').attr('tabindex', '0');
  }, 20);

  if (this.last_selected && this.rows[this.last_selected]) {
    $(this.rows[this.last_selected].obj)
      .find(this.col_tagname()).eq(this.subject_col).removeAttr('tabindex');
  }
},

/**
 * Focus the given element without scrolling the list container
 */
focus_noscroll: function(elem)
{
  var y = this.frame.scrollTop || this.frame.scrollY;
  elem.focus();
  this.frame.scrollTop = y;
},


/**
 * Set/unset the given column as hidden
 */
hide_column: function(col, hide)
{
  var method = hide ? 'addClass' : 'removeClass';

  if (this.fixed_header)
    $(this.row_tagname()+' '+this.col_tagname()+'.'+col, this.fixed_header)[method]('hidden');

  $(this.row_tagname()+' '+this.col_tagname()+'.'+col, this.list)[method]('hidden');
},


/**
 * onmousedown-handler of message list column
 */
drag_column: function(e, col)
{
  if (this.colcount > 1) {
    this.drag_start = true;
    this.drag_mouse_start = rcube_event.get_mouse_pos(e);

    rcube_event.add_listener({event:'mousemove', object:this, method:'column_drag_mouse_move'});
    rcube_event.add_listener({event:'mouseup', object:this, method:'column_drag_mouse_up'});

    // enable dragging over iframes
    this.add_dragfix();

    // find selected column number
    for (var i=0; i<this.thead.rows[0].cells.length; i++) {
      if (col == this.thead.rows[0].cells[i]) {
        this.selected_column = i;
        break;
      }
    }
  }

  return false;
},


/**
 * onmousedown-handler of message list row
 */
drag_row: function(e, id)
{
  // don't do anything (another action processed before)
  if (!this.is_event_target(e))
    return true;

  // accept right-clicks
  if (rcube_event.get_button(e) == 2)
    return true;

  this.in_selection_before = e && e.istouch || this.in_selection(id) ? id : false;

  // selects currently unselected row
  if (!this.in_selection_before) {
    var mod_key = rcube_event.get_modifier(e);
    this.select_row(id, mod_key, true);
  }

  if (this.draggable && this.selection.length && this.in_selection(id)) {
    this.drag_start = true;
    this.drag_mouse_start = rcube_event.get_mouse_pos(e);

    rcube_event.add_listener({event:'mousemove', object:this, method:'drag_mouse_move'});
    rcube_event.add_listener({event:'mouseup', object:this, method:'drag_mouse_up'});
    if (bw.touch) {
      rcube_event.add_listener({event:'touchmove', object:this, method:'drag_mouse_move'});
      rcube_event.add_listener({event:'touchend', object:this, method:'drag_mouse_up'});
    }

    // enable dragging over iframes
    this.add_dragfix();
  }

  return false;
},


/**
 * onmouseup-handler of message list row
 */
click_row: function(e, id)
{
  // sanity check
  if (!id || !this.rows[id])
    return false;

  // don't do anything (another action processed before)
  if (!this.is_event_target(e))
    return true;

  var now = new Date().getTime(),
    dblclicked = now - this.rows[id].clicked < this.dblclick_time;

  // unselects currently selected row
  if (!this.drag_active && !dblclicked && this.in_selection_before == id)
    this.select_row(id, rcube_event.get_modifier(e), true);

  this.drag_start = false;
  this.in_selection_before = false;

  // row was double clicked
  if (this.rowcount && dblclicked && this.in_selection(id)) {
    this.triggerEvent('dblclick');
    now = 0;
  }
  else
    this.triggerEvent('click');

  if (!this.drag_active) {
    // remove temp divs
    this.del_dragfix();
    rcube_event.cancel(e);
  }

  this.rows[id].clicked = now;
  this.focus();

  return false;
},


/**
 * Check target of the current event
 */
is_event_target: function(e)
{
  var target = rcube_event.get_target(e),
    tagname = target.tagName.toLowerCase();

  return !(target && (tagname == 'input' || tagname == 'img' || (tagname != 'a' && target.onclick)));
},


/*
 * Returns thread root ID for specified row ID
 */
find_root: function(uid)
{
   var r = this.rows[uid];

   if (r && r.parent_uid)
     return this.find_root(r.parent_uid);
   else
     return uid;
},


expand_row: function(e, id)
{
  var row = this.rows[id],
    evtarget = rcube_event.get_target(e),
    mod_key = rcube_event.get_modifier(e);

  // Don't treat double click on the expando as double click on the message.
  row.clicked = 0;

  if (row.expanded) {
    evtarget.className = 'collapsed';
    if (mod_key == CONTROL_KEY || this.multiexpand)
      this.collapse_all(row);
    else
      this.collapse(row);
  }
  else {
    evtarget.className = 'expanded';
    if (mod_key == CONTROL_KEY || this.multiexpand)
      this.expand_all(row);
    else
     this.expand(row);
  }
},

collapse: function(row)
{
  var r, depth = row.depth,
    new_row = row ? row.obj.nextSibling : null;

  row.expanded = false;
  this.triggerEvent('expandcollapse', { uid:row.uid, expanded:row.expanded, obj:row.obj });

  while (new_row) {
    if (new_row.nodeType == 1) {
      r = this.rows[new_row.uid];
      if (r && r.depth <= depth)
        break;

      $(new_row).css('display', 'none');
      if (r.expanded) {
        r.expanded = false;
        this.triggerEvent('expandcollapse', { uid:r.uid, expanded:r.expanded, obj:new_row });
      }
    }
    new_row = new_row.nextSibling;
  }

  this.resize();
  this.triggerEvent('listupdate');

  return false;
},

expand: function(row)
{
  var r, p, depth, new_row, last_expanded_parent_depth;

  if (row) {
    row.expanded = true;
    depth = row.depth;
    new_row = row.obj.nextSibling;
    this.update_expando(row.id, true);
    this.triggerEvent('expandcollapse', { uid:row.uid, expanded:row.expanded, obj:row.obj });
  }
  else {
    var tbody = this.tbody;
    new_row = tbody.firstChild;
    depth = 0;
    last_expanded_parent_depth = 0;
  }

  while (new_row) {
    if (new_row.nodeType == 1) {
      r = this.rows[new_row.uid];
      if (r) {
        if (row && (!r.depth || r.depth <= depth))
          break;

        if (r.parent_uid) {
          p = this.rows[r.parent_uid];
          if (p && p.expanded) {
            if ((row && p == row) || last_expanded_parent_depth >= p.depth - 1) {
              last_expanded_parent_depth = p.depth;
              $(new_row).css('display', '');
              r.expanded = true;
              this.triggerEvent('expandcollapse', { uid:r.uid, expanded:r.expanded, obj:new_row });
            }
          }
          else
            if (row && (! p || p.depth <= depth))
              break;
        }
      }
    }
    new_row = new_row.nextSibling;
  }

  this.resize();
  this.triggerEvent('listupdate');
  return false;
},


collapse_all: function(row)
{
  var depth, new_row, r;

  if (row) {
    row.expanded = false;
    depth = row.depth;
    new_row = row.obj.nextSibling;
    this.update_expando(row.id);
    this.triggerEvent('expandcollapse', { uid:row.uid, expanded:row.expanded, obj:row.obj });

    // don't collapse sub-root tree in multiexpand mode 
    if (depth && this.multiexpand)
      return false;
  }
  else {
    new_row = this.tbody.firstChild;
    depth = 0;
  }

  while (new_row) {
    if (new_row.nodeType == 1) {
      if (r = this.rows[new_row.uid]) {
        if (row && (!r.depth || r.depth <= depth))
          break;

        if (row || r.depth)
          $(new_row).css('display', 'none');
        if (r.has_children && r.expanded) {
          r.expanded = false;
          this.update_expando(r.id, false);
          this.triggerEvent('expandcollapse', { uid:r.uid, expanded:r.expanded, obj:new_row });
        }
      }
    }
    new_row = new_row.nextSibling;
  }

  this.resize();
  this.triggerEvent('listupdate');
  return false;
},


expand_all: function(row)
{
  var depth, new_row, r;

  if (row) {
    row.expanded = true;
    depth = row.depth;
    new_row = row.obj.nextSibling;
    this.update_expando(row.id, true);
    this.triggerEvent('expandcollapse', { uid:row.uid, expanded:row.expanded, obj:row.obj });
  }
  else {
    new_row = this.tbody.firstChild;
    depth = 0;
  }

  while (new_row) {
    if (new_row.nodeType == 1) {
      if (r = this.rows[new_row.uid]) {
        if (row && r.depth <= depth)
          break;

        $(new_row).css('display', '');
        if (r.has_children && !r.expanded) {
          r.expanded = true;
          this.update_expando(r.id, true);
          this.triggerEvent('expandcollapse', { uid:r.uid, expanded:r.expanded, obj:new_row });
        }
      }
    }
    new_row = new_row.nextSibling;
  }

  this.resize();
  this.triggerEvent('listupdate');
  return false;
},


update_expando: function(id, expanded)
{
  var expando = document.getElementById('rcmexpando' + id);
  if (expando)
    expando.className = expanded ? 'expanded' : 'collapsed';
},

get_row_uid: function(row)
{
  if (!row)
    return;

  if (!row.uid) {
    var uid = $(row).data('uid');
    if (uid)
      row.uid = uid;
    else if (String(row.id).match(this.id_regexp))
      row.uid = RegExp.$1;
  }

  return row.uid;
},

/**
 * get first/next/previous/last rows that are not hidden
 */
get_next_row: function()
{
  if (!this.rowcount)
    return false;

  var last_selected_row = this.rows[this.last_selected],
    new_row = last_selected_row ? last_selected_row.obj.nextSibling : null;

  while (new_row && (new_row.nodeType != 1 || new_row.style.display == 'none'))
    new_row = new_row.nextSibling;

  return new_row;
},

get_prev_row: function()
{
  if (!this.rowcount)
    return false;

  var last_selected_row = this.rows[this.last_selected],
    new_row = last_selected_row ? last_selected_row.obj.previousSibling : null;

  while (new_row && (new_row.nodeType != 1 || new_row.style.display == 'none'))
    new_row = new_row.previousSibling;

  return new_row;
},

get_first_row: function()
{
  if (this.rowcount) {
    var i, uid, rows = this.tbody.childNodes;

    for (i=0; i<rows.length; i++)
      if (rows[i].id && (uid = this.get_row_uid(rows[i])))
        return uid;
  }

  return null;
},

get_last_row: function()
{
  if (this.rowcount) {
    var i, uid, rows = this.tbody.childNodes;

    for (i=rows.length-1; i>=0; i--)
      if (rows[i].id && (uid = this.get_row_uid(rows[i])))
        return uid;
  }

  return null;
},

row_tagname: function()
{
  var row_tagnames = { table:'tr', ul:'li', '*':'div' };
  return row_tagnames[this.tagname] || row_tagnames['*'];
},

col_tagname: function()
{
  var col_tagnames = { table:'td', '*':'span' };
  return col_tagnames[this.tagname] || col_tagnames['*'];
},

get_cell: function(row, index)
{
  return $(this.col_tagname(), row).eq(index);
},

/**
 * selects or unselects the proper row depending on the modifier key pressed
 */
select_row: function(id, mod_key, with_mouse)
{
  var select_before = this.selection.join(','),
    in_selection_before = this.in_selection(id);

  if (!this.multiselect && with_mouse)
    mod_key = 0;

  if (!this.shift_start)
    this.shift_start = id

  if (!mod_key) {
    this.shift_start = id;
    this.highlight_row(id, false);
    this.multi_selecting = false;
  }
  else {
    switch (mod_key) {
      case SHIFT_KEY:
        this.shift_select(id, false);
        break;

      case CONTROL_KEY:
        if (with_mouse) {
          this.shift_start = id;
          this.highlight_row(id, true);
        }
        break;

      case CONTROL_SHIFT_KEY:
        this.shift_select(id, true);
        break;

      default:
        this.highlight_row(id, false);
        break;
    }

    this.multi_selecting = true;
  }

  if (this.last_selected && this.rows[this.last_selected]) {
    $(this.rows[this.last_selected].obj).removeClass('focused')
      .find(this.col_tagname()).eq(this.subject_col).removeAttr('tabindex');
  }

  // unselect if toggleselect is active and the same row was clicked again
  if (this.toggleselect && in_selection_before && !mod_key) {
    this.clear_selection();
  }
  // trigger event if selection changed
  else if (this.selection.join(',') != select_before) {
    this.triggerEvent('select');
  }

  if (this.rows[id]) {
    $(this.rows[id].obj).addClass('focused');
    // set cursor focus to link inside selected row
    if (this.focused)
      this.focus_noscroll($(this.rows[id].obj).find(this.col_tagname()).eq(this.subject_col).attr('tabindex', '0'));
  }

  if (!this.selection.length)
    this.shift_start = null;

  this.last_selected = id;
},


/**
 * Alias method for select_row
 */
select: function(id)
{
  this.select_row(id, false);
  this.scrollto(id);
},


/**
 * Select row next to the last selected one.
 * Either below or above.
 */
select_next: function()
{
  var next_row = this.get_next_row(),
    prev_row = this.get_prev_row(),
    new_row = (next_row) ? next_row : prev_row;

  if (new_row)
    this.select_row(new_row.uid, false, false);
},


/**
 * Select first row 
 */
select_first: function(mod_key)
{
  var row = this.get_first_row();
  if (row) {
    this.select_row(row, mod_key, false);
    this.scrollto(row);
  }
},


/**
 * Select last row
 */
select_last: function(mod_key)
{
  var row = this.get_last_row();
  if (row) {
    this.select_row(row, mod_key, false);
    this.scrollto(row);
  }
},


/**
 * Add all childs of the given row to selection
 */
select_children: function(uid)
{
  var i, children = this.row_children(uid), len = children.length;

  for (i=0; i<len; i++)
    if (!this.in_selection(children[i]))
      this.select_row(children[i], CONTROL_KEY, true);
},


/**
 * Perform selection when shift key is pressed
 */
shift_select: function(id, control)
{
  if (!this.rows[this.shift_start] || !this.selection.length)
    this.shift_start = id;

  var n, i, j, to_row = this.rows[id],
    from_rowIndex = this._rowIndex(this.rows[this.shift_start].obj),
    to_rowIndex = this._rowIndex(to_row.obj);

  // if we're going down the list, and we hit a thread, and it's closed, select the whole thread
  if (from_rowIndex < to_rowIndex && !to_row.expanded && to_row.has_children)
    if (to_row = this.rows[(this.row_children(id)).pop()])
      to_rowIndex = this._rowIndex(to_row.obj);

  i = ((from_rowIndex < to_rowIndex) ? from_rowIndex : to_rowIndex),
  j = ((from_rowIndex > to_rowIndex) ? from_rowIndex : to_rowIndex);

  // iterate through the entire message list
  for (n in this.rows) {
    if (this._rowIndex(this.rows[n].obj) >= i && this._rowIndex(this.rows[n].obj) <= j) {
      if (!this.in_selection(n)) {
        this.highlight_row(n, true);
      }
    }
    else {
      if (this.in_selection(n) && !control) {
        this.highlight_row(n, true);
      }
    }
  }
},


/**
 * Helper method to emulate the rowIndex property of non-tr elements
 */
_rowIndex: function(obj)
{
  return (obj.rowIndex !== undefined) ? obj.rowIndex : $(obj).prevAll().length;
},

/**
 * Check if given id is part of the current selection
 */
in_selection: function(id, index)
{
  for (var n in this.selection)
    if (this.selection[n] == id)
      return index ? parseInt(n) : true;

  return false;
},


/**
 * Select each row in list
 */
select_all: function(filter)
{
  if (!this.rowcount)
    return false;

  // reset but remember selection first
  var n, select_before = this.selection.join(',');
  this.selection = [];

  for (n in this.rows) {
    if (!filter || this.rows[n][filter] == true) {
      this.last_selected = n;
      this.highlight_row(n, true, true);
    }
    else {
      $(this.rows[n].obj).removeClass('selected').removeAttr('aria-selected');
    }
  }

  // trigger event if selection changed
  if (this.selection.join(',') != select_before)
    this.triggerEvent('select');

  this.focus();

  return true;
},


/**
 * Invert selection
 */
invert_selection: function()
{
  if (!this.rowcount)
    return false;

  // remember old selection
  var n, select_before = this.selection.join(',');

  for (n in this.rows)
    this.highlight_row(n, true);

  // trigger event if selection changed
  if (this.selection.join(',') != select_before)
    this.triggerEvent('select');

  this.focus();

  return true;
},


/**
 * Unselect selected row(s)
 */
clear_selection: function(id, no_event)
{
  var n, num_select = this.selection.length;

  // one row
  if (id) {
    for (n in this.selection)
      if (this.selection[n] == id) {
        this.selection.splice(n,1);
        break;
      }
  }
  // all rows
  else {
    for (n in this.selection)
      if (this.rows[this.selection[n]]) {
        $(this.rows[this.selection[n]].obj).removeClass('selected').removeAttr('aria-selected');
      }

    this.selection = [];
  }

  if (num_select && !this.selection.length && !no_event) {
    this.triggerEvent('select');
    this.last_selected = null;
  }
},


/**
 * Getter for the selection array
 */
get_selection: function(deep)
{
  var res = $.merge([], this.selection);

  // return children of selected threads even if only root is selected
  if (deep !== false && res.length) {
    for (var uid, uids, i=0, len=res.length; i<len; i++) {
      uid = res[i];
      if (this.rows[uid] && this.rows[uid].has_children && !this.rows[uid].expanded) {
        uids = this.row_children(uid);
        for (var j=0, uids_len=uids.length; j<uids_len; j++) {
          uid = uids[j];
          if (!this.in_selection(uid))
            res.push(uid);
        }
      }
    }
  }

  return res;
},


/**
 * Return the ID if only one row is selected
 */
get_single_selection: function()
{
  if (this.selection.length == 1)
    return this.selection[0];
  else
    return null;
},


/**
 * Highlight/unhighlight a row
 */
highlight_row: function(id, multiple, norecur)
{
  if (!this.rows[id])
    return;

  if (!multiple) {
    if (this.selection.length > 1 || !this.in_selection(id)) {
      this.clear_selection(null, true);
      this.selection[0] = id;
      $(this.rows[id].obj).addClass('selected').attr('aria-selected', 'true');
    }
  }
  else {
    var pre, post, p = this.in_selection(id, true);

    if (p === false) { // select row
      this.selection.push(id);
      $(this.rows[id].obj).addClass('selected').attr('aria-selected', 'true');
      if (!norecur && !this.rows[id].expanded)
        this.highlight_children(id, true);
    }
    else { // unselect row
      pre = this.selection.slice(0, p);
      post = this.selection.slice(p+1, this.selection.length);

      this.selection = pre.concat(post);
      $(this.rows[id].obj).removeClass('selected').removeAttr('aria-selected');
      if (!norecur && !this.rows[id].expanded)
        this.highlight_children(id, false);
    }
  }
},


/**
 * Highlight/unhighlight all childs of the given row
 */
highlight_children: function(id, status)
{
  var i, selected,
    children = this.row_children(id), len = children.length;

  for (i=0; i<len; i++) {
    selected = this.in_selection(children[i]);
    if ((status && !selected) || (!status && selected))
      this.highlight_row(children[i], true, true);
  }
},


/**
 * Handler for keyboard events
 */
key_press: function(e)
{
  var target = e.target || {};

  if (this.focused != true || target.nodeName == 'INPUT' || target.nodeName == 'TEXTAREA' || target.nodeName == 'SELECT')
    return true;

  var keyCode = rcube_event.get_keycode(e),
    mod_key = rcube_event.get_modifier(e);

  switch (keyCode) {
    case 40:
    case 38:
    case 63233: // "down", in safari keypress
    case 63232: // "up", in safari keypress
      // Stop propagation so that the browser doesn't scroll
      rcube_event.cancel(e);
      return this.use_arrow_key(keyCode, mod_key);

    case 32:
      rcube_event.cancel(e);
      return this.select_row(this.last_selected, mod_key, true);

    case 37: // Left arrow key
    case 39: // Right arrow key
      // Stop propagation
      rcube_event.cancel(e);
      var ret = this.use_arrow_key(keyCode, mod_key);
      this.key_pressed = keyCode;
      this.modkey = mod_key;
      this.triggerEvent('keypress');
      this.modkey = 0;
      return ret;

    case 36: // Home
      this.select_first(mod_key);
      return rcube_event.cancel(e);

    case 35: // End
      this.select_last(mod_key);
      return rcube_event.cancel(e);

    case 27:
      if (this.drag_active)
        return this.drag_mouse_up(e);

      if (this.col_drag_active) {
        this.selected_column = null;
        return this.column_drag_mouse_up(e);
      }

      return rcube_event.cancel(e);

    case 9: // Tab
      this.blur();
      break;

    case 13: // Enter
      if (!this.selection.length)
        this.select_row(this.last_selected, mod_key, false);

    default:
      this.key_pressed = keyCode;
      this.modkey = mod_key;
      this.triggerEvent('keypress');
      this.modkey = 0;

      if (this.key_pressed == this.BACKSPACE_KEY)
        return rcube_event.cancel(e);
  }

  return true;
},


/**
 * Special handling method for arrow keys
 */
use_arrow_key: function(keyCode, mod_key)
{
  var new_row,
    selected_row = this.rows[this.last_selected];

  // Safari uses the nonstandard keycodes 63232/63233 for up/down, if we're
  // using the keypress event (but not the keydown or keyup event).
  if (keyCode == 40 || keyCode == 63233) // down arrow key pressed
    new_row = this.get_next_row();
  else if (keyCode == 38 || keyCode == 63232) // up arrow key pressed
    new_row = this.get_prev_row();
  else {
    if (!selected_row || !selected_row.has_children)
      return;

    // expand
    if (keyCode == 39) {
      if (selected_row.expanded)
        return;

      if (mod_key == CONTROL_KEY || this.multiexpand)
        this.expand_all(selected_row);
      else
        this.expand(selected_row);
    }
    // collapse
    else {
      if (!selected_row.expanded)
        return;

      if (mod_key == CONTROL_KEY || this.multiexpand)
        this.collapse_all(selected_row);
      else
        this.collapse(selected_row);
    }

    this.update_expando(selected_row.id, selected_row.expanded);

    return false;
  }

  if (new_row) {
    // simulate ctr-key if no rows are selected
    if (!mod_key && !this.selection.length)
      mod_key = CONTROL_KEY;

    this.select_row(new_row.uid, mod_key, false);
    this.scrollto(new_row.uid);
  }
  else if (!new_row && !selected_row) {
    // select the first row if none selected yet
    this.select_first(CONTROL_KEY);
  }

  return false;
},


/**
 * Try to scroll the list to make the specified row visible
 */
scrollto: function(id)
{
  var row = this.rows[id] ? this.rows[id].obj : null;

  if (row && this.frame) {
    var scroll_to = Number(row.offsetTop),
      head_offset = 0;

    // expand thread if target row is hidden (collapsed)
    if (!scroll_to && this.rows[id].parent_uid) {
      var parent = this.find_root(this.rows[id].uid);
      this.expand_all(this.rows[parent]);
      scroll_to = Number(row.offsetTop);
    }

    if (this.fixed_header)
      head_offset = Number(this.thead.offsetHeight);

    // if row is above the frame (or behind header)
    if (scroll_to < Number(this.frame.scrollTop) + head_offset) {
      // scroll window so that row isn't behind header
      this.frame.scrollTop = scroll_to - head_offset;
    }
    else if (scroll_to + Number(row.offsetHeight) > Number(this.frame.scrollTop) + Number(this.frame.offsetHeight))
      this.frame.scrollTop = (scroll_to + Number(row.offsetHeight)) - Number(this.frame.offsetHeight);
  }
},


/**
 * Handler for mouse move events
 */
drag_mouse_move: function(e)
{
  // convert touch event
  if (e.type == 'touchmove') {
    if (e.touches.length == 1 && e.changedTouches.length == 1)
      e = rcube_event.touchevent(e.changedTouches[0]);
    else
      return rcube_event.cancel(e);
  }

  if (this.drag_start) {
    // check mouse movement, of less than 3 pixels, don't start dragging
    var m = rcube_event.get_mouse_pos(e),
      limit = 10, selection = [], self = this;

    if (!this.drag_mouse_start || (Math.abs(m.x - this.drag_mouse_start.x) < 3 && Math.abs(m.y - this.drag_mouse_start.y) < 3))
      return false;

    // remember dragging start position
    this.drag_start_pos = {left: m.x, top: m.y};

    // initialize drag layer
    if (!this.draglayer)
      this.draglayer = $('<div>').attr('id', 'rcmdraglayer')
        .css({position: 'absolute', display: 'none', 'z-index': 2000})
        .appendTo(document.body);
    else
      this.draglayer.html('');

    // get selected rows (in display order), don't use this.selection here
    $(this.row_tagname() + '.selected', this.tbody).each(function() {
      var uid = self.get_row_uid(this), row = self.rows[uid];

      if (!row || $.inArray(uid, selection) > -1)
        return;

      selection.push(uid);

      // also handle children of (collapsed) trees for dragging (they might be not selected)
      if (row.has_children && !row.expanded)
        $.each(self.row_children(uid), function() {
          if ($.inArray(this, selection) > -1)
            return;
          selection.push(this);
        });

      // break the loop asap
      if (selection.length > limit + 1)
        return false;
    });

    // append subject (of every row up to the limit) to the drag layer
    $.each(selection, function(i, uid) {
      if (i > limit) {
        self.draglayer.append('...');
        return false;
      }

      $('> ' + self.col_tagname(), self.rows[uid].obj).each(function(n, cell) {
        if (self.subject_col < 0 || (self.subject_col >= 0 && self.subject_col == n)) {
          // remove elements marked with "skip-on-drag" class
          cell = $(cell).clone();
          $(cell).find('.skip-on-drag').remove();

          var subject = cell.text();

          if (subject) {
            // remove leading spaces
            subject = $.trim(subject);
            // truncate line to 50 characters
            subject = (subject.length > 50 ? subject.substring(0, 50) + '...' : subject);

            self.draglayer.append($('<div>').text(subject));
            return false;
          }
        }
      });
    });

    this.draglayer.show();
    this.drag_active = true;
    this.triggerEvent('dragstart');
  }

  if (this.drag_active && this.draglayer) {
    var pos = rcube_event.get_mouse_pos(e);
    this.draglayer.css({ left:(pos.x+20)+'px', top:(pos.y-5 + (bw.ie ? document.documentElement.scrollTop : 0))+'px' });
    this.triggerEvent('dragmove', e?e:window.event);
  }

  this.drag_start = false;

  return false;
},


/**
 * Handler for mouse up events
 */
drag_mouse_up: function(e)
{
  document.onmousemove = null;

  if (e.type == 'touchend') {
    if (e.changedTouches.length != 1)
      return rcube_event.cancel(e);
  }

  if (this.draglayer && this.draglayer.is(':visible')) {
    if (this.drag_start_pos)
      this.draglayer.animate(this.drag_start_pos, 300, 'swing').hide(20);
    else
      this.draglayer.hide();
  }

  if (this.drag_active)
    this.focus();
  this.drag_active = false;

  rcube_event.remove_listener({event:'mousemove', object:this, method:'drag_mouse_move'});
  rcube_event.remove_listener({event:'mouseup', object:this, method:'drag_mouse_up'});

  if (bw.touch) {
    rcube_event.remove_listener({event:'touchmove', object:this, method:'drag_mouse_move'});
    rcube_event.remove_listener({event:'touchend', object:this, method:'drag_mouse_up'});
  }

  // remove temp divs
  this.del_dragfix();

  this.triggerEvent('dragend', e);

  return rcube_event.cancel(e);
},


/**
 * Handler for mouse move events for dragging list column
 */
column_drag_mouse_move: function(e)
{
  if (this.drag_start) {
    // check mouse movement, of less than 3 pixels, don't start dragging
    var i, m = rcube_event.get_mouse_pos(e);

    if (!this.drag_mouse_start || (Math.abs(m.x - this.drag_mouse_start.x) < 3 && Math.abs(m.y - this.drag_mouse_start.y) < 3))
      return false;

    if (!this.col_draglayer) {
      var lpos = $(this.list).offset(),
        cells = this.thead.rows[0].cells;

      // fix layer position when list is scrolled
      lpos.top += this.list.scrollTop + this.list.parentNode.scrollTop;

      // create dragging layer
      this.col_draglayer = $('<div>').attr('id', 'rcmcoldraglayer')
        .css(lpos).css({ position:'absolute', 'z-index':2001,
           'background-color':'white', opacity:0.75,
           height: (this.frame.offsetHeight-2)+'px', width: (this.frame.offsetWidth-2)+'px' })
        .appendTo(document.body)
        // ... and column position indicator
       .append($('<div>').attr('id', 'rcmcolumnindicator')
          .css({ position:'absolute', 'border-right':'2px dotted #555', 
          'z-index':2002, height: (this.frame.offsetHeight-2)+'px' }));

      this.cols = [];
      this.list_pos = this.list_min_pos = lpos.left;
      // save columns positions
      for (i=0; i<cells.length; i++) {
        this.cols[i] = cells[i].offsetWidth;
        if (this.column_fixed !== null && i <= this.column_fixed) {
          this.list_min_pos += this.cols[i];
        }
      }
    }

    this.col_draglayer.show();
    this.col_drag_active = true;
    this.triggerEvent('column_dragstart');
  }

  // set column indicator position
  if (this.col_drag_active && this.col_draglayer) {
    var i, cpos = 0, pos = rcube_event.get_mouse_pos(e);

    for (i=0; i<this.cols.length; i++) {
      if (pos.x >= this.cols[i]/2 + this.list_pos + cpos)
        cpos += this.cols[i];
      else
        break;
    }

    // handle fixed columns on left
    if (i == 0 && this.list_min_pos > pos.x)
      cpos = this.list_min_pos - this.list_pos;
    // empty list needs some assignment
    else if (!this.list.rowcount && i == this.cols.length)
      cpos -= 2;
    $('#rcmcolumnindicator').css({ width: cpos+'px'});
    this.triggerEvent('column_dragmove', e?e:window.event);
  }

  this.drag_start = false;

  return false;
},


/**
 * Handler for mouse up events for dragging list columns
 */
column_drag_mouse_up: function(e)
{
  document.onmousemove = null;

  if (this.col_draglayer) {
    (this.col_draglayer).remove();
    this.col_draglayer = null;
  }

  rcube_event.remove_listener({event:'mousemove', object:this, method:'column_drag_mouse_move'});
  rcube_event.remove_listener({event:'mouseup', object:this, method:'column_drag_mouse_up'});

  // remove temp divs
  this.del_dragfix();

  if (this.col_drag_active) {
    this.col_drag_active = false;
    this.focus();
    this.triggerEvent('column_dragend', e);

    if (this.selected_column !== null && this.cols && this.cols.length) {
      var i, cpos = 0, pos = rcube_event.get_mouse_pos(e);

      // find destination position
      for (i=0; i<this.cols.length; i++) {
        if (pos.x >= this.cols[i]/2 + this.list_pos + cpos)
          cpos += this.cols[i];
        else
          break;
      }

      if (i != this.selected_column && i != this.selected_column+1) {
        this.column_replace(this.selected_column, i);
      }
    }
  }

  return rcube_event.cancel(e);
},


/**
 * Returns IDs of all rows in a thread (except root) for specified root
 */
row_children: function(uid)
{
  if (!this.rows[uid] || !this.rows[uid].has_children)
    return [];

  var res = [], depth = this.rows[uid].depth,
    row = this.rows[uid].obj.nextSibling;

  while (row) {
    if (row.nodeType == 1) {
      if (r = this.rows[row.uid]) {
        if (!r.depth || r.depth <= depth)
          break;
        res.push(r.uid);
      }
    }
    row = row.nextSibling;
  }

  return res;
},


/**
 * Creates a layer for drag&drop over iframes
 */
add_dragfix: function()
{
  $('iframe').each(function() {
    $('<div class="iframe-dragdrop-fix"></div>')
      .css({background: '#fff',
        width: this.offsetWidth+'px', height: this.offsetHeight+'px',
        position: 'absolute', opacity: '0.001', zIndex: 1000
      })
      .css($(this).offset())
      .appendTo(document.body);
  });
},


/**
 * Removes the layer for drag&drop over iframes
 */
del_dragfix: function()
{
  $('div.iframe-dragdrop-fix').remove();
},


/**
 * Replaces two columns
 */
column_replace: function(from, to)
{
  // only supported for <table> lists
  if (!this.thead || !this.thead.rows)
    return;

  var len, cells = this.thead.rows[0].cells,
    elem = cells[from],
    before = cells[to],
    td = document.createElement('td');

  // replace header cells
  if (before)
    cells[0].parentNode.insertBefore(td, before);
  else
    cells[0].parentNode.appendChild(td);
  cells[0].parentNode.replaceChild(elem, td);

  // replace list cells
  for (r=0, len=this.tbody.rows.length; r<len; r++) {
    row = this.tbody.rows[r];

    elem = row.cells[from];
    before = row.cells[to];
    td = document.createElement('td');

    if (before)
      row.insertBefore(td, before);
    else
      row.appendChild(td);
    row.replaceChild(elem, td);
  }

  // update subject column position
  if (this.subject_col == from)
    this.subject_col = to > from ? to - 1 : to;
  else if (this.subject_col < from && to <= this.subject_col)
    this.subject_col++;
  else if (this.subject_col > from && to >= this.subject_col)
    this.subject_col--;

  if (this.fixed_header)
    this.init_header();

  this.triggerEvent('column_replace');
}

};

rcube_list_widget.prototype.addEventListener = rcube_event_engine.prototype.addEventListener;
rcube_list_widget.prototype.removeEventListener = rcube_event_engine.prototype.removeEventListener;
rcube_list_widget.prototype.triggerEvent = rcube_event_engine.prototype.triggerEvent;

// static
rcube_list_widget._instances = [];
