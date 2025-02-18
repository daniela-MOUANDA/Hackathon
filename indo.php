<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta charset="UTF-8">
  
<script type="text/javascript">(window.NREUM||(NREUM={})).init={privacy:{cookies_enabled:true},ajax:{deny_list:["bam.nr-data.net"]},distributed_tracing:{enabled:true}};(window.NREUM||(NREUM={})).loader_config={agentID:"1386151550",accountID:"4359725",trustKey:"66686",xpid:"UAUCWFFRDRABVVNRDggOUVMG",licenseKey:"NRJS-a5e9036dbeb441881bb",applicationID:"1123999777"};;/*! For license information please see nr-loader-spa-1.278.2.min.js.LICENSE.txt */
(()=>{var e,t,r={8122:(e,t,r)=>{"use strict";r.d(t,{a:()=>i});var n=r(944);function i(e,t){try{if(!e||"object"!=typeof e)return(0,n.R)(3);if(!t||"object"!=typeof t)return(0,n.R)(4);const r=Object.create(Object.getPrototypeOf(t),Object.getOwnPropertyDescriptors(t)),o=0===Object.keys(r).length?e:r;for(let a in o)if(void 0!==e[a])try{if(null===e[a]){r[a]=null;continue}Array.isArray(e[a])&&Array.isArray(t[a])?r[a]=Array.from(new Set([...e[a],...t[a]])):"object"==typeof e[a]&&"object"==typeof t[a]?r[a]=i(e[a],t[a]):r[a]=e[a]}catch(e){(0,n.R)(1,e)}return r}catch(e){(0,n.R)(2,e)}}},2555:(e,t,r)=>{"use strict";r.d(t,{Vp:()=>c,fn:()=>s,x1:()=>u});var n=r(384),i=r(8122);const o={beacon:n.NT.beacon,errorBeacon:n.NT.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},a={};function s(e){try{const t=c(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}function c(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!a[e])throw new Error("Info for ".concat(e," was never set"));return a[e]}function u(e,t){if(!e)throw new Error("All info objects require an agent identifier!");a[e]=(0,i.a)(t,o);const r=(0,n.nY)(e);r&&(r.info=a[e])}},9417:(e,t,r)=>{"use strict";r.d(t,{D0:()=>p,gD:()=>m,xN:()=>g});var n=r(3333),i=r(993);const o=e=>{if(!e||"string"!=typeof e)return!1;try{document.createDocumentFragment().querySelector(e)}catch{return!1}return!0};var a=r(2614),s=r(944),c=r(384),u=r(8122);const d="[data-nr-mask]",l=()=>{const e={feature_flags:[],experimental:{marks:!1,measures:!1,resources:!1},mask_selector:"*",block_selector:"[data-nr-block]",mask_input_options:{color:!1,date:!1,"datetime-local":!1,email:!1,month:!1,number:!1,range:!1,search:!1,tel:!1,text:!1,time:!1,url:!1,week:!1,textarea:!1,select:!1,password:!0}};return{ajax:{deny_list:void 0,block_internal:!0,enabled:!0,autoStart:!0},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},get feature_flags(){return e.feature_flags},set feature_flags(t){e.feature_flags=t},generic_events:{enabled:!0,autoStart:!0},harvest:{interval:30},jserrors:{enabled:!0,autoStart:!0},logging:{enabled:!0,autoStart:!0,level:i.p_.INFO},metrics:{enabled:!0,autoStart:!0},obfuscate:void 0,page_action:{enabled:!0},page_view_event:{enabled:!0,autoStart:!0},page_view_timing:{enabled:!0,autoStart:!0},performance:{get capture_marks(){return e.feature_flags.includes(n.$v.MARKS)||e.experimental.marks},set capture_marks(t){e.experimental.marks=t},get capture_measures(){return e.feature_flags.includes(n.$v.MEASURES)||e.experimental.measures},set capture_measures(t){e.experimental.measures=t},resources:{get enabled(){return e.feature_flags.includes(n.$v.RESOURCES)||e.experimental.resources},set enabled(t){e.experimental.resources=t},asset_types:[],first_party_domains:[],ignore_newrelic:!0}},privacy:{cookies_enabled:!0},proxy:{assets:void 0,beacon:void 0},session:{expiresMs:a.wk,inactiveMs:a.BB},session_replay:{autoStart:!0,enabled:!1,preload:!1,sampling_rate:10,error_sampling_rate:100,collect_fonts:!1,inline_images:!1,fix_stylesheets:!0,mask_all_inputs:!0,get mask_text_selector(){return e.mask_selector},set mask_text_selector(t){o(t)?e.mask_selector="".concat(t,",").concat(d):""===t||null===t?e.mask_selector=d:(0,s.R)(5,t)},get block_class(){return"nr-block"},get ignore_class(){return"nr-ignore"},get mask_text_class(){return"nr-mask"},get block_selector(){return e.block_selector},set block_selector(t){o(t)?e.block_selector+=",".concat(t):""!==t&&(0,s.R)(6,t)},get mask_input_options(){return e.mask_input_options},set mask_input_options(t){t&&"object"==typeof t?e.mask_input_options={...t,password:!0}:(0,s.R)(7,t)}},session_trace:{enabled:!0,autoStart:!0},soft_navigations:{enabled:!0,autoStart:!0},spa:{enabled:!0,autoStart:!0},ssl:void 0,user_actions:{enabled:!0}}},f={},h="All configuration objects require an agent identifier!";function p(e){if(!e)throw new Error(h);if(!f[e])throw new Error("Configuration for ".concat(e," was never set"));return f[e]}function g(e,t){if(!e)throw new Error(h);f[e]=(0,u.a)(t,l());const r=(0,c.nY)(e);r&&(r.init=f[e])}function m(e,t){if(!e)throw new Error(h);var r=p(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}},5603:(e,t,r)=>{"use strict";r.d(t,{a:()=>c,o:()=>s});var n=r(384),i=r(8122);const o={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},a={};function s(e){if(!e)throw new Error("All loader-config objects require an agent identifier!");if(!a[e])throw new Error("LoaderConfig for ".concat(e," was never set"));return a[e]}function c(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");a[e]=(0,i.a)(t,o);const r=(0,n.nY)(e);r&&(r.loader_config=a[e])}},3371:(e,t,r)=>{"use strict";r.d(t,{V:()=>f,f:()=>l});var n=r(8122),i=r(384),o=r(6154),a=r(9324);let s=0;const c={buildEnv:a.F3,distMethod:a.Xs,version:a.xv,originTime:o.WN},u={customTransaction:void 0,disabled:!1,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,onerror:void 0,ptid:void 0,releaseIds:{},appMetadata:{},session:void 0,denyList:void 0,timeKeeper:void 0,obfuscator:void 0,harvester:void 0},d={};function l(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!d[e])throw new Error("Runtime for ".concat(e," was never set"));return d[e]}function f(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");d[e]={...(0,n.a)(t,u),...c},Object.hasOwnProperty.call(d[e],"harvestCount")||Object.defineProperty(d[e],"harvestCount",{get:()=>++s});const r=(0,i.nY)(e);r&&(r.runtime=d[e])}},9324:(e,t,r)=>{"use strict";r.d(t,{F3:()=>i,Xs:()=>o,Yq:()=>a,xv:()=>n});const n="1.278.2",i="PROD",o="CDN",a="^2.0.0-alpha.17"},6154:(e,t,r)=>{"use strict";r.d(t,{A4:()=>s,OF:()=>d,RI:()=>i,WN:()=>h,bv:()=>o,gm:()=>a,lR:()=>f,m:()=>u,mw:()=>c,sb:()=>l});var n=r(1863);const i="undefined"!=typeof window&&!!window.document,o="undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis.navigator instanceof WorkerNavigator),a=i?window:"undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis),s="complete"===a?.document?.readyState,c=Boolean("hidden"===a?.document?.visibilityState),u=""+a?.location,d=/iPad|iPhone|iPod/.test(a.navigator?.userAgent),l=d&&"undefined"==typeof SharedWorker,f=(()=>{const e=a.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/);return Array.isArray(e)&&e.length>=2?+e[1]:0})(),h=Date.now()-(0,n.t)()},7295:(e,t,r)=>{"use strict";r.d(t,{Xv:()=>a,gX:()=>i,iW:()=>o});var n=[];function i(e){if(!e||o(e))return!1;if(0===n.length)return!0;for(var t=0;t<n.length;t++){var r=n[t];if("*"===r.hostname)return!1;if(s(r.hostname,e.hostname)&&c(r.pathname,e.pathname))return!1}return!0}function o(e){return void 0===e.hostname}function a(e){if(n=[],e&&e.length)for(var t=0;t<e.length;t++){let r=e[t];if(!r)continue;0===r.indexOf("http://")?r=r.substring(7):0===r.indexOf("https:///")&&(r=r.substring(8));const i=r.indexOf("index.html");let o,a;i>0?(o=r.substring(0,i),a=r.substring(i)):(o=r,a="");let[s]=o.split(":");n.push({hostname:s,pathname:a})}}function s(e,t){return!(e.length>t.length)&&t.indexOf(e)===t.length-e.length}function c(e,t){return 0===e.indexOf("index.html")&&(e=e.substring(1)),0===t.indexOf("index.html")&&(t=t.substring(1)),""===e||e===t}},1687:(e,t,r)=>{"use strict";r.d(t,{Ak:()=>c,Ze:()=>l,x3:()=>u});var n=r(7836),i=r(3606),o=r(860),a=r(2646);const s={};function c(e,t){const r={staged:!1,priority:o.P3[t]||0};d(e),s[e].get(t)||s[e].set(t,r)}function u(e,t){e&&s[e]&&(s[e].get(t)&&s[e].delete(t),h(e,t,!1),s[e].size&&f(e))}function d(e){if(!e)throw new Error("agentIdentifier required");s[e]||(s[e]=new Map)}function l(e="",t="feature",r=!1){if(d(e),!e||!s[e].get(t)||r)return h(e,t);s[e].get(t).staged=!0,f(e)}function f(e){const t=Array.from(s[e]);t.every((([e,t])=>t.staged))&&(t.sort(((e,t)=>e[1].priority-t[1].priority)),t.forEach((([t])=>{s[e].delete(t),h(e,t)})))}function h(e,t,r=!0){const o=e?n.ee.get(e):n.ee,s=i.i.handlers;if(!o.aborted&&o.backlog&&s){if(r){const e=o.backlog[t],r=s[t];if(r){for(let t=0;e&&t<e.length;++t)p(e[t],r);Object.entries(r).forEach((([e,t])=>{Object.values(t||{}).forEach((t=>{t[0]?.on&&t[0]?.context()instanceof a.y&&t[0].on(e,t[1])}))}))}}o.isolatedBacklog||delete s[t],o.backlog[t]=null,o.emit("drain-"+t,[])}}function p(e,t){var r=e[1];Object.values(t[r]||{}).forEach((t=>{var r=e[0];if(t[0]===r){var n=t[1],i=e[3],o=e[2];n.apply(i,o)}}))}},7836:(e,t,r)=>{"use strict";r.d(t,{P:()=>c,ee:()=>u});var n=r(384),i=r(8990),o=r(3371),a=r(2646),s=r(5607);const c="nr@context:".concat(s.W),u=function e(t,r){var n={},s={},d={},l=!1;try{l=16===r.length&&(0,o.f)(r).isolatedBacklog}catch(e){}var f={on:p,addEventListener:p,removeEventListener:function(e,t){var r=n[e];if(!r)return;for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)},emit:function(e,r,n,i,o){!1!==o&&(o=!0);if(u.aborted&&!i)return;t&&o&&t.emit(e,r,n);for(var a=h(n),c=g(e),d=c.length,l=0;l<d;l++)c[l].apply(a,r);var p=v()[s[e]];p&&p.push([f,e,r,a]);return a},get:m,listeners:g,context:h,buffer:function(e,t){const r=v();if(t=t||"feature",f.aborted)return;Object.entries(e||{}).forEach((([e,n])=>{s[n]=t,t in r||(r[t]=[])}))},abort:function(){f._aborted=!0,Object.keys(f.backlog).forEach((e=>{delete f.backlog[e]}))},isBuffering:function(e){return!!v()[s[e]]},debugId:r,backlog:l?{}:t&&"object"==typeof t.backlog?t.backlog:{},isolatedBacklog:l};return Object.defineProperty(f,"aborted",{get:()=>{let e=f._aborted||!1;return e||(t&&(e=t.aborted),e)}}),f;function h(e){return e&&e instanceof a.y?e:e?(0,i.I)(e,c,(()=>new a.y(c))):new a.y(c)}function p(e,t){n[e]=g(e).concat(t)}function g(e){return n[e]||[]}function m(t){return d[t]=d[t]||e(f,t)}function v(){return f.backlog}}(void 0,"globalEE"),d=(0,n.Zm)();d.ee||(d.ee=u)},2646:(e,t,r)=>{"use strict";r.d(t,{y:()=>n});class n{constructor(e){this.contextId=e}}},9908:(e,t,r)=>{"use strict";r.d(t,{d:()=>n,p:()=>i});var n=r(7836).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},3606:(e,t,r)=>{"use strict";r.d(t,{i:()=>o});var n=r(9908);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.d,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.d);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3878:(e,t,r)=>{"use strict";function n(e,t){return{capture:e,passive:!1,signal:t}}function i(e,t,r=!1,i){window.addEventListener(e,t,n(r,i))}function o(e,t,r=!1,i){document.addEventListener(e,t,n(r,i))}r.d(t,{DD:()=>o,jT:()=>n,sp:()=>i})},5607:(e,t,r)=>{"use strict";r.d(t,{W:()=>n});const n=(0,r(9566).bz)()},9566:(e,t,r)=>{"use strict";r.d(t,{LA:()=>s,ZF:()=>c,bz:()=>a,el:()=>u});var n=r(6154);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n.gm?.crypto||n.gm?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(30))),i.split("").map((e=>"x"===e?o(t,r++).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n.gm?.crypto||n.gm?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(e)));const a=[];for(var s=0;s<e;s++)a.push(o(r,i++).toString(16));return a.join("")}function c(){return s(16)}function u(){return s(32)}},2614:(e,t,r)=>{"use strict";r.d(t,{BB:()=>a,H3:()=>n,g:()=>u,iL:()=>c,tS:()=>s,uh:()=>i,wk:()=>o});const n="NRBA",i="SESSION",o=144e5,a=18e5,s={STARTED:"session-started",PAUSE:"session-pause",RESET:"session-reset",RESUME:"session-resume",UPDATE:"session-update"},c={SAME_TAB:"same-tab",CROSS_TAB:"cross-tab"},u={OFF:0,FULL:1,ERROR:2}},1863:(e,t,r)=>{"use strict";function n(){return Math.floor(performance.now())}r.d(t,{t:()=>n})},7485:(e,t,r)=>{"use strict";r.d(t,{D:()=>i});var n=r(6154);function i(e){if(0===(e||"").indexOf("data:"))return{protocol:"data"};try{const t=new URL(e%2clocation.html),r={port:t.port,hostname:t.hostname,pathname:t.pathname,search:t.search,protocol:t.protocol.slice(0,t.protocol.indexOf(":")),sameOrigin:t.protocol===n.gm?.location?.protocol&&t.host===n.gm?.location?.host};return r.port&&""!==r.port||("http:"===t.protocol&&(r.port="80"),"https:"===t.protocol&&(r.port="443")),r.pathname&&""!==r.pathname?r.pathname.startsWith("index.html")||(r.pathname="/".concat(r.pathname)):r.pathname="index.html",r}catch(e){return{}}}},944:(e,t,r)=>{"use strict";function n(e,t){"function"==typeof console.debug&&console.debug("New Relic Warning: https://github.com/newrelic/newrelic-browser-agent/blob/main/docs/warning-codes.md#".concat(e),t)}r.d(t,{R:()=>n})},5284:(e,t,r)=>{"use strict";r.d(t,{t:()=>c,B:()=>s});var n=r(7836),i=r(6154);const o="newrelic";const a=new Set,s={};function c(e,t){const r=n.ee.get(t);s[t]??={},e&&"object"==typeof e&&(a.has(t)||(r.emit("rumresp",[e]),s[t]=e,a.add(t),function(e={}){try{i.gm.dispatchEvent(new CustomEvent(o,{detail:e}))}catch(e){}}({loaded:!0})))}},8990:(e,t,r)=>{"use strict";r.d(t,{I:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},6389:(e,t,r)=>{"use strict";function n(e,t=500,r={}){const n=r?.leading||!1;let i;return(...r)=>{n&&void 0===i&&(e.apply(this,r),i=setTimeout((()=>{i=clearTimeout(i)}),t)),n||(clearTimeout(i),i=setTimeout((()=>{e.apply(this,r)}),t))}}function i(e){let t=!1;return(...r)=>{t||(t=!0,e.apply(this,r))}}r.d(t,{J:()=>i,s:()=>n})},3304:(e,t,r)=>{"use strict";r.d(t,{A:()=>o});var n=r(7836);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())??""}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}return""}}},5289:(e,t,r)=>{"use strict";r.d(t,{GG:()=>o,sB:()=>a});var n=r(3878);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.sp)("load",e,t)}function a(e){if(i())return e();(0,n.DD)("DOMContentLoaded",e)}},384:(e,t,r)=>{"use strict";r.d(t,{NT:()=>o,US:()=>d,Zm:()=>a,bQ:()=>c,dV:()=>s,nY:()=>u,pV:()=>l});var n=r(6154),i=r(1863);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return n.gm.NREUM||(n.gm.NREUM={}),void 0===n.gm.newrelic&&(n.gm.newrelic=n.gm.NREUM),n.gm.NREUM}function s(){let e=a();return e.o||(e.o={ST:n.gm.setTimeout,SI:n.gm.setImmediate,CT:n.gm.clearTimeout,XHR:n.gm.XMLHttpRequest,REQ:n.gm.Request,EV:n.gm.Event,PR:n.gm.Promise,MO:n.gm.MutationObserver,FETCH:n.gm.fetch,WS:n.gm.WebSocket}),e}function c(e,t){let r=a();r.initializedAgents??={},t.initializedAt={ms:(0,i.t)(),date:new Date},r.initializedAgents[e]=t}function u(e){let t=a();return t.initializedAgents?.[e]}function d(e,t){a()[e]=t}function l(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},2843:(e,t,r)=>{"use strict";r.d(t,{u:()=>i});var n=r(3878);function i(e,t=!1,r,i){(0,n.DD)("visibilitychange",(function(){if(t)return void("hidden"===document.visibilityState&&e());e(document.visibilityState)}),r,i)}},8139:(e,t,r)=>{"use strict";r.d(t,{u:()=>f});var n=r(7836),i=r(3434),o=r(8990),a=r(6154);const s={},c=a.gm.XMLHttpRequest,u="addEventListener",d="removeEventListener",l="nr@wrapped:".concat(n.P);function f(e){var t=function(e){return(e||n.ee).get("events")}(e);if(s[t.debugId]++)return t;s[t.debugId]=1;var r=(0,i.YM)(t,!0);function f(e){r.inPlace(e,[u,d],"-",p)}function p(e,t){return e[1]}return"getPrototypeOf"in Object&&(a.RI&&h(document,f),c&&h(c.prototype,f),h(a.gm,f)),t.on(u+"-start",(function(e,t){var n=e[1];if(null!==n&&("function"==typeof n||"object"==typeof n)){var i=(0,o.I)(n,l,(function(){var e={object:function(){if("function"!=typeof n.handleEvent)return;return n.handleEvent.apply(n,arguments)},function:n}[typeof n];return e?r(e,"fn-",null,e.name||"anonymous"):n}));this.wrapped=e[1]=i}})),t.on(d+"-start",(function(e){e[1]=this.wrapped||e[1]})),t}function h(e,t,...r){let n=e;for(;"object"==typeof n&&!Object.prototype.hasOwnProperty.call(n,u);)n=Object.getPrototypeOf(n);n&&t(n,...r)}},3434:(e,t,r)=>{"use strict";r.d(t,{Jt:()=>o,YM:()=>c});var n=r(7836),i=r(5607);const o="nr@original:".concat(i.W);var a=Object.prototype.hasOwnProperty,s=!1;function c(e,t){return e||(e=n.ee),r.inPlace=function(e,t,n,i,o){n||(n="");const a="-"===n.charAt(0);for(let s=0;s<t.length;s++){const c=t[s],u=e[c];d(u)||(e[c]=r(u,a?c+n:n,i,c,o))}},r.flag=o,r;function r(t,r,n,s,c){return d(t)?t:(r||(r=""),nrWrapper[o]=t,function(e,t,r){if(Object.defineProperty&&Object.keys)try{return Object.keys(e).forEach((function(r){Object.defineProperty(t,r,{get:function(){return e[r]},set:function(t){return e[r]=t,t}})})),t}catch(e){u([e],r)}for(var n in e)a.call(e,n)&&(t[n]=e[n])}(t,nrWrapper,e),nrWrapper);function nrWrapper(){var o,a,d,l;try{a=this,o=[...arguments],d="function"==typeof n?n(o,a):n||{}}catch(t){u([t,"",[o,a,s],d],e)}i(r+"start",[o,a,s],d,c);try{return l=t.apply(a,o)}catch(e){throw i(r+"err",[o,a,e],d,c),e}finally{i(r+"end",[o,a,l],d,c)}}}function i(r,n,i,o){if(!s||t){var a=s;s=!0;try{e.emit(r,n,i,t,o)}catch(t){u([t,r,n,i],e)}s=a}}}function u(e,t){t||(t=n.ee);try{t.emit("internal-error",e)}catch(e){}}function d(e){return!(e&&"function"==typeof e&&e.apply&&!e[o])}},9300:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.ajax},3333:(e,t,r)=>{"use strict";r.d(t,{$v:()=>u,TZ:()=>n,Zp:()=>i,kd:()=>c,mq:()=>s,nf:()=>a,qN:()=>o});const n=r(860).K7.genericEvents,i=["auxclick","click","copy","keydown","paste","scrollend"],o=["focus","blur"],a=4,s=1e3,c=["PageAction","UserAction","BrowserPerformance"],u={MARKS:"experimental.marks",MEASURES:"experimental.measures",RESOURCES:"experimental.resources"}},6774:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.jserrors},993:(e,t,r)=>{"use strict";r.d(t,{ET:()=>o,TZ:()=>a,p_:()=>i});var n=r(860);const i={ERROR:"ERROR",WARN:"WARN",INFO:"INFO",DEBUG:"DEBUG",TRACE:"TRACE"},o="log",a=n.K7.logging},3785:(e,t,r)=>{"use strict";r.d(t,{R:()=>c,b:()=>u});var n=r(9908),i=r(1863),o=r(860),a=r(3969),s=r(993);function c(e,t,r={},c=s.p_.INFO){(0,n.p)(a.xV,["API/logging/".concat(c.toLowerCase(),"/called")],void 0,o.K7.metrics,e),(0,n.p)(s.ET,[(0,i.t)(),t,r,c],void 0,o.K7.logging,e)}function u(e){return"string"==typeof e&&Object.values(s.p_).some((t=>t===e.toUpperCase().trim()))}},3969:(e,t,r)=>{"use strict";r.d(t,{TZ:()=>n,XG:()=>s,rs:()=>i,xV:()=>a,z_:()=>o});const n=r(860).K7.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},6630:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.pageViewEvent},782:(e,t,r)=>{"use strict";r.d(t,{T:()=>n});const n=r(860).K7.pageViewTiming},6344:(e,t,r)=>{"use strict";r.d(t,{BB:()=>d,G4:()=>o,Qb:()=>l,TZ:()=>i,Ug:()=>a,_s:()=>s,bc:()=>u,yP:()=>c});var n=r(2614);const i=r(860).K7.sessionReplay,o={RECORD:"recordReplay",PAUSE:"pauseReplay",REPLAY_RUNNING:"replayRunning",ERROR_DURING_REPLAY:"errorDuringReplay"},a=.12,s={DomContentLoaded:0,Load:1,FullSnapshot:2,IncrementalSnapshot:3,Meta:4,Custom:5},c={[n.g.ERROR]:15e3,[n.g.FULL]:3e5,[n.g.OFF]:0},u={RESET:{message:"Session was reset",sm:"Reset"},IMPORT:{message:"Recorder failed to import",sm:"Import"},TOO_MANY:{message:"429: Too Many Requests",sm:"Too-Many"},TOO_BIG:{message:"Payload was too large",sm:"Too-Big"},CROSS_TAB:{message:"Session Entity was set to OFF on another tab",sm:"Cross-Tab"},ENTITLEMENTS:{message:"Session Replay is not allowed and will not be started",sm:"Entitlement"}},d=5e3,l={API:"api"}},5270:(e,t,r)=>{"use strict";r.d(t,{Aw:()=>c,CT:()=>u,SR:()=>s});var n=r(384),i=r(9417),o=r(7767),a=r(6154);function s(e){return!!(0,n.dV)().o.MO&&(0,o.V)(e)&&!0===(0,i.gD)(e,"session_trace.enabled")}function c(e){return!0===(0,i.gD)(e,"session_replay.preload")&&s(e)}function u(e,t){const r=t.correctAbsoluteTimestamp(e);return{originalTimestamp:e,correctedTimestamp:r,timestampDiff:e-r,originTime:a.WN,correctedOriginTime:t.correctedOriginTime,originTimeDiff:Math.floor(a.WN-t.correctedOriginTime)}}},3738:(e,t,r)=>{"use strict";r.d(t,{He:()=>i,Kp:()=>s,Lc:()=>u,Rz:()=>d,TZ:()=>n,bD:()=>o,d3:()=>a,jx:()=>l,uP:()=>c});const n=r(860).K7.sessionTrace,i="bstResource",o="resource",a="-start",s="-end",c="fn"+a,u="fn"+s,d="pushState",l=1e3},3962:(e,t,r)=>{"use strict";r.d(t,{AM:()=>o,O2:()=>c,Qu:()=>u,TZ:()=>s,ih:()=>d,pP:()=>a,tC:()=>i});var n=r(860);const i=["click","keydown","submit","popstate"],o="api",a="initialPageLoad",s=n.K7.softNav,c={INITIAL_PAGE_LOAD:"",ROUTE_CHANGE:1,UNSPECIFIED:2},u={INTERACTION:1,AJAX:2,CUSTOM_END:3,CUSTOM_TRACER:4},d={IP:"in progress",FIN:"finished",CAN:"cancelled"}},7378:(e,t,r)=>{"use strict";r.d(t,{$p:()=>x,BR:()=>b,Kp:()=>R,L3:()=>y,Lc:()=>c,NC:()=>o,SG:()=>d,TZ:()=>i,U6:()=>p,UT:()=>m,d3:()=>w,dT:()=>f,e5:()=>T,gx:()=>v,l9:()=>l,oW:()=>h,op:()=>g,rw:()=>u,tH:()=>A,uP:()=>s,wW:()=>E,xq:()=>a});var n=r(384);const i=r(860).K7.spa,o=["click","submit","keypress","keydown","keyup","change"],a=999,s="fn-start",c="fn-end",u="cb-start",d="api-ixn-",l="remaining",f="interaction",h="spaNode",p="jsonpNode",g="fetch-start",m="fetch-done",v="fetch-body-",b="jsonp-end",y=(0,n.dV)().o.ST,w="-start",R="-end",x="-body",E="cb"+R,T="jsTime",A="fetch"},4234:(e,t,r)=>{"use strict";r.d(t,{W:()=>o});var n=r(7836),i=r(1687);class o{constructor(e,t){this.agentIdentifier=e,this.ee=n.ee.get(e),this.featureName=t,this.blocked=!1}deregisterDrain(){(0,i.x3)(this.agentIdentifier,this.featureName)}}},7767:(e,t,r)=>{"use strict";r.d(t,{V:()=>o});var n=r(9417),i=r(6154);const o=e=>i.RI&&!0===(0,n.gD)(e,"privacy.cookies_enabled")},425:(e,t,r)=>{"use strict";r.d(t,{j:()=>j});var n=r(860),i=r(2555),o=r(3371),a=r(9908),s=r(7836),c=r(1687),u=r(5289),d=r(6154),l=r(944),f=r(3969),h=r(384),p=r(6344);const g=["setErrorHandler","finished","addToTrace","addRelease","recordCustomEvent","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId","setApplicationVersion","start",p.G4.RECORD,p.G4.PAUSE,"log","wrapLogger"],m=["setErrorHandler","finished","addToTrace","addRelease"];var v=r(1863),b=r(2614),y=r(993),w=r(3785),R=r(2646),x=r(3434);const E=new Map;function T(e,t,r,n){if("object"!=typeof t||!t||"string"!=typeof r||!r||"function"!=typeof t[r])return(0,l.R)(29);const i=function(e){return(e||s.ee).get("logger")}(e),o=(0,x.YM)(i),a=new R.y(s.P);a.level=n.level,a.customAttributes=n.customAttributes;const c=t[r]?.[x.Jt]||t[r];return E.set(c,a),o.inPlace(t,[r],"wrap-logger-",(()=>E.get(c))),i}function A(){const e=(0,h.pV)();g.forEach((t=>{e[t]=(...r)=>function(t,...r){let n=[];return Object.values(e.initializedAgents).forEach((e=>{e&&e.api?e.exposed&&e.api[t]&&n.push(e.api[t](...r)):(0,l.R)(38,t)})),n.length>1?n:n[0]}(t,...r)}))}const S={};var N=r(9417),_=r(5603),O=r(5284);const I=e=>{const t=e.startsWith("http");e+="index.html",r.p=t?e:"https://"+e};let P=!1;function j(e,t={},g,R){let{init:x,info:E,loader_config:j,runtime:C={},exposed:k=!0}=t;C.loaderType=g;const L=(0,h.pV)();E||(x=L.init,E=L.info,j=L.loader_config),(0,N.xN)(e.agentIdentifier,x||{}),(0,_.a)(e.agentIdentifier,j||{}),E.jsAttributes??={},d.bv&&(E.jsAttributes.isWorker=!0),(0,i.x1)(e.agentIdentifier,E);const H=(0,N.D0)(e.agentIdentifier),M=[E.beacon,E.errorBeacon];P||(H.proxy.assets&&(I(H.proxy.assets),M.push(H.proxy.assets)),H.proxy.beacon&&M.push(H.proxy.beacon),A(),(0,h.US)("activatedFeatures",O.B),e.runSoftNavOverSpa&&=!0===H.soft_navigations.enabled&&H.feature_flags.includes("soft_nav")),C.denyList=[...H.ajax.deny_list||[],...H.ajax.block_internal?M:[]],C.ptid=e.agentIdentifier,(0,o.V)(e.agentIdentifier,C),e.ee=s.ee.get(e.agentIdentifier),void 0===e.api&&(e.api=function(e,t,h=!1){t||(0,c.Ak)(e,"api");const g={};var R=s.ee.get(e),x=R.get("tracer");S[e]=b.g.OFF,R.on(p.G4.REPLAY_RUNNING,(t=>{S[e]=t}));var E="api-",A=E+"ixn-";function N(t,r,n,o){const a=(0,i.Vp)(e);return null===r?delete a.jsAttributes[t]:(0,i.x1)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),I(E,n,!0,o||null===r?"session":void 0)(t,r)}function _(){}g.log=function(e,{customAttributes:t={},level:r=y.p_.INFO}={}){(0,a.p)(f.xV,["API/log/called"],void 0,n.K7.metrics,R),(0,w.R)(R,e,t,r)},g.wrapLogger=(e,t,{customAttributes:r={},level:i=y.p_.INFO}={})=>{(0,a.p)(f.xV,["API/wrapLogger/called"],void 0,n.K7.metrics,R),T(R,e,t,{customAttributes:r,level:i})},m.forEach((e=>{g[e]=I(E,e,!0,"api")})),g.addPageAction=I(E,"addPageAction",!0,n.K7.genericEvents),g.recordCustomEvent=I(E,"recordCustomEvent",!0,n.K7.genericEvents),g.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,o.f)(e).customTransaction=(r||"http://custom.transaction")+t,I(E,"setPageViewName",!0)()},g.setCustomAttribute=function(e,t,r=!1){if("string"==typeof e){if(["string","number","boolean"].includes(typeof t)||null===t)return N(e,t,"setCustomAttribute",r);(0,l.R)(40,typeof t)}else(0,l.R)(39,typeof e)},g.setUserId=function(e){if("string"==typeof e||null===e)return N("enduser.id",e,"setUserId",!0);(0,l.R)(41,typeof e)},g.setApplicationVersion=function(e){if("string"==typeof e||null===e)return N("application.version",e,"setApplicationVersion",!1);(0,l.R)(42,typeof e)},g.start=()=>{try{(0,a.p)(f.xV,["API/start/called"],void 0,n.K7.metrics,R),R.emit("manual-start-all")}catch(e){(0,l.R)(23,e)}},g[p.G4.RECORD]=function(){(0,a.p)(f.xV,["API/recordReplay/called"],void 0,n.K7.metrics,R),(0,a.p)(p.G4.RECORD,[],void 0,n.K7.sessionReplay,R)},g[p.G4.PAUSE]=function(){(0,a.p)(f.xV,["API/pauseReplay/called"],void 0,n.K7.metrics,R),(0,a.p)(p.G4.PAUSE,[],void 0,n.K7.sessionReplay,R)},g.interaction=function(e){return(new _).get("object"==typeof e?e:{})};const O=_.prototype={createTracer:function(e,t){var r={},i=this,o="function"==typeof t;return(0,a.p)(f.xV,["API/createTracer/called"],void 0,n.K7.metrics,R),h||(0,a.p)(A+"tracer",[(0,v.t)(),e,r],i,n.K7.spa,R),function(){if(x.emit((o?"":"no-")+"fn-start",[(0,v.t)(),i,o],r),o)try{return t.apply(this,arguments)}catch(e){const t="string"==typeof e?new Error(e):e;throw x.emit("fn-err",[arguments,this,t],r),t}finally{x.emit("fn-end",[(0,v.t)()],r)}}}};function I(e,t,r,i){return function(){return(0,a.p)(f.xV,["API/"+t+"/called"],void 0,n.K7.metrics,R),i&&(0,a.p)(e+t,[r?(0,v.t)():performance.now(),...arguments],r?null:this,i,R),r?void 0:this}}function P(){r.e(478).then(r.bind(r,8778)).then((({setAPI:t})=>{t(e),(0,c.Ze)(e,"api")})).catch((e=>{(0,l.R)(27,e),R.abort()}))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{O[e]=I(A,e,void 0,h?n.K7.softNav:n.K7.spa)})),g.setCurrentRouteName=h?I(A,"routeName",void 0,n.K7.softNav):I(E,"routeName",!0,n.K7.spa),g.noticeError=function(t,r){"string"==typeof t&&(t=new Error(t)),(0,a.p)(f.xV,["API/noticeError/called"],void 0,n.K7.metrics,R),(0,a.p)("err",[t,(0,v.t)(),!1,r,!!S[e]],void 0,n.K7.jserrors,R)},d.RI?(0,u.GG)((()=>P()),!0):P(),g}(e.agentIdentifier,R,e.runSoftNavOverSpa)),void 0===e.exposed&&(e.exposed=k),P=!0}},8374:(e,t,r)=>{r.nc=(()=>{try{return document?.currentScript?.nonce}catch(e){}return""})()},860:(e,t,r)=>{"use strict";r.d(t,{$J:()=>u,K7:()=>s,P3:()=>c,XX:()=>i,qY:()=>n,v4:()=>a});const n="events",i="jserrors",o="browser/blobs",a="rum",s={ajax:"ajax",genericEvents:"generic_events",jserrors:i,logging:"logging",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionReplay:"session_replay",sessionTrace:"session_trace",softNav:"soft_navigations",spa:"spa"},c={[s.pageViewEvent]:1,[s.pageViewTiming]:2,[s.metrics]:3,[s.jserrors]:4,[s.spa]:5,[s.ajax]:6,[s.sessionTrace]:7,[s.softNav]:8,[s.sessionReplay]:9,[s.logging]:10,[s.genericEvents]:11},u={[s.pageViewEvent]:a,[s.pageViewTiming]:n,[s.ajax]:n,[s.spa]:n,[s.softNav]:n,[s.metrics]:i,[s.jserrors]:i,[s.sessionTrace]:o,[s.sessionReplay]:o,[s.logging]:"browser/logs",[s.genericEvents]:"ins"}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>({212:"nr-spa-compressor",249:"nr-spa-recorder",478:"nr-spa"}[e]+"-1.278.2.min.js"),i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA-1.278.2.PROD:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var l=u[d];if(l.getAttribute("src")==r||l.getAttribute("data-webpack")==t+o){s=l;break}}if(!s){c=!0;var f={478:"sha512-LyJuO9l6nGvSxIdDAH5w4L3R+Bn4r+UYrcpedtLnIcpXcZMvJE7ScYU9RkzfA+JLy9Hss3YbNdKuNso4YODcFQ==",249:"sha512-4zCEYvMPXYo8xYjDUNIIh2KbeG7ninqVP4gidiTCMvoQbdAy7f/Y4cnOvtEwS3i6p4599og04o4k4cRo0fisQg==",212:"sha512-aM9tSk7rER3AgTnylnbJ1mVxXKff/CrV8GZ+9nUtCGXY44LPaGRGNT+iWsobM3u/ji3rv4es5Mlh/8W7ssabKA=="};(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r,0!==s.src.indexOf(window.location.origin+"/")&&(s.crossOrigin="anonymous"),f[a]&&(s.integrity=f[a])}e[r]=[n];var h=(t,n)=>{s.onerror=s.onload=null,clearTimeout(p);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},p=setTimeout(h.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=h.bind(null,s.onerror),s.onload=h.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.p="https://js-agent.newrelic.com/",(()=>{var e={38:0,788:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=self["webpackChunk:NRBA-1.278.2.PROD"]=self["webpackChunk:NRBA-1.278.2.PROD"]||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),(()=>{"use strict";i(8374);var e=i(944),t=i(6344),r=i(9566);class n{agentIdentifier;constructor(e=(0,r.LA)(16)){this.agentIdentifier=e}#e(t,...r){if("function"==typeof this.api?.[t])return this.api[t](...r);(0,e.R)(35,t)}addPageAction(e,t){return this.#e("addPageAction",e,t)}recordCustomEvent(e,t){return this.#e("recordCustomEvent",e,t)}setPageViewName(e,t){return this.#e("setPageViewName",e,t)}setCustomAttribute(e,t,r){return this.#e("setCustomAttribute",e,t,r)}noticeError(e,t){return this.#e("noticeError",e,t)}setUserId(e){return this.#e("setUserId",e)}setApplicationVersion(e){return this.#e("setApplicationVersion",e)}setErrorHandler(e){return this.#e("setErrorHandler",e)}addRelease(e,t){return this.#e("addRelease",e,t)}log(e,t){return this.#e("log",e,t)}}class o extends n{#e(t,...r){if("function"==typeof this.api?.[t])return this.api[t](...r);(0,e.R)(35,t)}start(){return this.#e("start")}finished(e){return this.#e("finished",e)}recordReplay(){return this.#e(t.G4.RECORD)}pauseReplay(){return this.#e(t.G4.PAUSE)}addToTrace(e){return this.#e("addToTrace",e)}setCurrentRouteName(e){return this.#e("setCurrentRouteName",e)}interaction(){return this.#e("interaction")}wrapLogger(e,t,r){return this.#e("wrapLogger",e,t,r)}}var a=i(860),s=i(9417);const c=Object.values(a.K7);function u(e){const t={};return c.forEach((r=>{t[r]=function(e,t){return!0===(0,s.gD)(t,"".concat(e,".enabled"))}(r,e)})),t}var d=i(425);var l=i(1687),f=i(4234),h=i(5289),p=i(6154),g=i(5270),m=i(7767),v=i(6389);class b extends f.W{constructor(e,t,r=!0){super(e.agentIdentifier,t),this.auto=r,this.abortHandler=void 0,this.featAggregate=void 0,this.onAggregateImported=void 0,!1===e.init[this.featureName].autoStart&&(this.auto=!1),this.auto?(0,l.Ak)(e.agentIdentifier,t):this.ee.on("manual-start-all",(0,v.J)((()=>{(0,l.Ak)(e.agentIdentifier,this.featureName),this.auto=!0,this.importAggregator(e)})))}importAggregator(t,r={}){if(this.featAggregate||!this.auto)return;let n;this.onAggregateImported=new Promise((e=>{n=e}));const o=async()=>{let o;try{if((0,m.V)(this.agentIdentifier)){const{setupAgentSession:e}=await i.e(478).then(i.bind(i,6526));o=e(t)}}catch(t){(0,e.R)(20,t),this.ee.emit("internal-error",[t]),this.featureName===a.K7.sessionReplay&&this.abortHandler?.()}try{if(!this.#t(this.featureName,o))return(0,l.Ze)(this.agentIdentifier,this.featureName),void n(!1);const{lazyFeatureLoader:e}=await i.e(478).then(i.bind(i,6103)),{Aggregate:a}=await e(this.featureName,"aggregate");this.featAggregate=new a(t,r),t.runtime.harvester.initializedAggregates.push(this.featAggregate),n(!0)}catch(t){(0,e.R)(34,t),this.abortHandler?.(),(0,l.Ze)(this.agentIdentifier,this.featureName,!0),n(!1),this.ee&&this.ee.abort()}};p.RI?(0,h.GG)((()=>o()),!0):o()}#t(e,t){switch(e){case a.K7.sessionReplay:return(0,g.SR)(this.agentIdentifier)&&!!t;case a.K7.sessionTrace:return!!t;default:return!0}}}var y=i(6630);class w extends b{static featureName=y.T;constructor(e,t=!0){super(e,y.T,t),this.importAggregator(e)}}var R=i(384);var x=i(9908),E=i(2843),T=i(3878),A=i(782),S=i(1863);class N extends b{static featureName=A.T;constructor(e,t=!0){super(e,A.T,t),p.RI&&((0,E.u)((()=>(0,x.p)("docHidden",[(0,S.t)()],void 0,A.T,this.ee)),!0),(0,T.sp)("pagehide",(()=>(0,x.p)("winPagehide",[(0,S.t)()],void 0,A.T,this.ee))),this.importAggregator(e))}}var _=i(3969);class O extends b{static featureName=_.TZ;constructor(e,t=!0){super(e,_.TZ,t),this.importAggregator(e)}}var I=i(6774),P=i(3304);class j{constructor(e,t,r,n,i){this.name="UncaughtError",this.message="string"==typeof e?e:(0,P.A)(e),this.sourceURL=t,this.line=r,this.column=n,this.__newrelic=i}}function C(e){return H(e)?e:new j(void 0!==e?.message?e.message:e,e?.filename||e?.sourceURL,e?.lineno||e?.line,e?.colno||e?.col,e?.__newrelic)}function k(e){const t="Unhandled Promise Rejection";if(!e?.reason)return;if(H(e.reason))try{return e.reason.message=t+": "+e.reason.message,C(e.reason)}catch(t){return C(e.reason)}const r=C(e.reason);return r.message=t+": "+r?.message,r}function L(e){if(e.error instanceof SyntaxError&&!/:\d+$/.test(e.error.stack?.trim())){const t=new j(e.message,e.filename,e.lineno,e.colno,e.error.__newrelic);return t.name=SyntaxError.name,t}return H(e.error)?e.error:C(e)}function H(e){return e instanceof Error&&!!e.stack}class M extends b{static featureName=I.T;#r=!1;constructor(e,r=!0){super(e,I.T,r);try{this.removeOnAbort=new AbortController}catch(e){}this.ee.on("internal-error",((e,t)=>{this.abortHandler&&(0,x.p)("ierr",[C(e),(0,S.t)(),!0,{},this.#r,t],void 0,this.featureName,this.ee)})),this.ee.on(t.G4.REPLAY_RUNNING,(e=>{this.#r=e})),p.gm.addEventListener("unhandledrejection",(e=>{this.abortHandler&&(0,x.p)("err",[k(e),(0,S.t)(),!1,{unhandledPromiseRejection:1},this.#r],void 0,this.featureName,this.ee)}),(0,T.jT)(!1,this.removeOnAbort?.signal)),p.gm.addEventListener("error",(e=>{this.abortHandler&&(0,x.p)("err",[L(e),(0,S.t)(),!1,{},this.#r],void 0,this.featureName,this.ee)}),(0,T.jT)(!1,this.removeOnAbort?.signal)),this.abortHandler=this.#n,this.importAggregator(e)}#n(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}var D=i(8990);let K=1;const U="nr@id";function V(e){const t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===p.gm?0:(0,D.I)(e,U,(function(){return K++}))}function G(e){if("string"==typeof e&&e.length)return e.length;if("object"==typeof e){if("undefined"!=typeof ArrayBuffer&&e instanceof ArrayBuffer&&e.byteLength)return e.byteLength;if("undefined"!=typeof Blob&&e instanceof Blob&&e.size)return e.size;if(!("undefined"!=typeof FormData&&e instanceof FormData))try{return(0,P.A)(e).length}catch(e){return}}}var F=i(8139),B=i(7836),W=i(3434);const z={},q=["open","send"];function Z(t){var r=t||B.ee;const n=function(e){return(e||B.ee).get("xhr")}(r);if(void 0===p.gm.XMLHttpRequest)return n;if(z[n.debugId]++)return n;z[n.debugId]=1,(0,F.u)(r);var i=(0,W.YM)(n),o=p.gm.XMLHttpRequest,a=p.gm.MutationObserver,s=p.gm.Promise,c=p.gm.setInterval,u="readystatechange",d=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],l=[],f=p.gm.XMLHttpRequest=function(t){const r=new o(t),a=n.context(r);try{n.emit("new-xhr",[r],a),r.addEventListener(u,(s=a,function(){var e=this;e.readyState>3&&!s.resolved&&(s.resolved=!0,n.emit("xhr-resolved",[],e)),i.inPlace(e,d,"fn-",y)}),(0,T.jT)(!1))}catch(t){(0,e.R)(15,t);try{n.emit("internal-error",[t])}catch(e){}}var s;return r};function h(e,t){i.inPlace(t,["onreadystatechange"],"fn-",y)}if(function(e,t){for(var r in e)t[r]=e[r]}(o,f),f.prototype=o.prototype,i.inPlace(f.prototype,q,"-xhr-",y),n.on("send-xhr-start",(function(e,t){h(e,t),function(e){l.push(e),a&&(g?g.then(b):c?c(b):(m=-m,v.data=m))}(t)})),n.on("open-xhr-start",h),a){var g=s&&s.resolve();if(!c&&!s){var m=1,v=document.createTextNode(m);new a(b).observe(v,{characterData:!0})}}else r.on("fn-end",(function(e){e[0]&&e[0].type===u||b()}));function b(){for(var e=0;e<l.length;e++)h(0,l[e]);l.length&&(l=[])}function y(e,t){return t}return n}var Y="fetch-",X=Y+"body-",J=["arrayBuffer","blob","json","text","formData"],Q=p.gm.Request,ee=p.gm.Response,te="prototype";const re={};function ne(e){const t=function(e){return(e||B.ee).get("fetch")}(e);if(!(Q&&ee&&p.gm.fetch))return t;if(re[t.debugId]++)return t;function r(e,r,n){var i=e[r];"function"==typeof i&&(e[r]=function(){var e,r=[...arguments],o={};t.emit(n+"before-start",[r],o),o[B.P]&&o[B.P].dt&&(e=o[B.P].dt);var a=i.apply(this,r);return t.emit(n+"start",[r,e],a),a.then((function(e){return t.emit(n+"end",[null,e],a),e}),(function(e){throw t.emit(n+"end",[e],a),e}))})}return re[t.debugId]=1,J.forEach((e=>{r(Q[te],e,X),r(ee[te],e,X)})),r(p.gm,"fetch",Y),t.on(Y+"end",(function(e,r){var n=this;if(r){var i=r.headers.get("content-length");null!==i&&(n.rxSize=i),t.emit(Y+"done",[null,r],n)}else t.emit(Y+"done",[e],n)})),t}var ie=i(7485),oe=i(5603);class ae{constructor(e){this.agentIdentifier=e}generateTracePayload(e){if(!this.shouldGenerateTrace(e))return null;var t=(0,oe.o)(this.agentIdentifier);if(!t)return null;var n=(t.accountID||"").toString()||null,i=(t.agentID||"").toString()||null,o=(t.trustKey||"").toString()||null;if(!n||!i)return null;var a=(0,r.ZF)(),s=(0,r.el)(),c=Date.now(),u={spanId:a,traceId:s,timestamp:c};return(e.sameOrigin||this.isAllowedOrigin(e)&&this.useTraceContextHeadersForCors())&&(u.traceContextParentHeader=this.generateTraceContextParentHeader(a,s),u.traceContextStateHeader=this.generateTraceContextStateHeader(a,c,n,i,o)),(e.sameOrigin&&!this.excludeNewrelicHeader()||!e.sameOrigin&&this.isAllowedOrigin(e)&&this.useNewrelicHeaderForCors())&&(u.newrelicHeader=this.generateTraceHeader(a,s,c,n,i,o)),u}generateTraceContextParentHeader(e,t){return"00-"+t+"-"+e+"-01"}generateTraceContextStateHeader(e,t,r,n,i){return i+"@nr=0-1-"+r+"-"+n+"-"+e+"----"+t}generateTraceHeader(e,t,r,n,i,o){if(!("function"==typeof p.gm?.btoa))return null;var a={v:[0,1],d:{ty:"Browser",ac:n,ap:i,id:e,tr:t,ti:r}};return o&&n!==o&&(a.d.tk=o),btoa((0,P.A)(a))}shouldGenerateTrace(e){return this.isDtEnabled()&&this.isAllowedOrigin(e)}isAllowedOrigin(e){var t=!1,r={};if((0,s.gD)(this.agentIdentifier,"distributed_tracing")&&(r=(0,s.D0)(this.agentIdentifier).distributed_tracing),e.sameOrigin)t=!0;else if(r.allowed_origins instanceof Array)for(var n=0;n<r.allowed_origins.length;n++){var i=(0,ie.D)(r.allowed_origins[n]);if(e.hostname===i.hostname&&e.protocol===i.protocol&&e.port===i.port){t=!0;break}}return t}isDtEnabled(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.enabled}excludeNewrelicHeader(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.exclude_newrelic_header}useNewrelicHeaderForCors(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!1!==e.cors_use_newrelic_header}useTraceContextHeadersForCors(){var e=(0,s.gD)(this.agentIdentifier,"distributed_tracing");return!!e&&!!e.cors_use_tracecontext_headers}}var se=i(9300),ce=i(7295),ue=["load","error","abort","timeout"],de=ue.length,le=(0,R.dV)().o.REQ,fe=(0,R.dV)().o.XHR;class he extends b{static featureName=se.T;constructor(e,t=!0){super(e,se.T,t),this.dt=new ae(e.agentIdentifier),this.handler=(e,t,r,n)=>(0,x.p)(e,t,r,n,this.ee);try{const e={xmlhttprequest:"xhr",fetch:"fetch",beacon:"beacon"};p.gm?.performance?.getEntriesByType("resource").forEach((t=>{if(t.initiatorType in e&&0!==t.responseStatus){const r={status:t.responseStatus},n={rxSize:t.transferSize,duration:Math.floor(t.duration),cbTime:0};pe(r,t.name),this.handler("xhr",[r,n,t.startTime,t.responseEnd,e[t.initiatorType]],void 0,a.K7.ajax)}}))}catch(e){}ne(this.ee),Z(this.ee),function(e,t,r,n){function i(e){var t=this;t.totalCbs=0,t.called=0,t.cbTime=0,t.end=R,t.ended=!1,t.xhrGuids={},t.lastSize=null,t.loadCaptureCalled=!1,t.params=this.params||{},t.metrics=this.metrics||{},e.addEventListener("load",(function(r){E(t,e)}),(0,T.jT)(!1)),p.lR||e.addEventListener("progress",(function(e){t.lastSize=e.loaded}),(0,T.jT)(!1))}function o(e){this.params={method:e[0]},pe(this,e[1]),this.metrics={}}function s(t,r){e.loader_config.xpid&&this.sameOrigin&&r.setRequestHeader("X-NewRelic-ID",e.loader_config.xpid);var i=n.generateTracePayload(this.parsedOrigin);if(i){var o=!1;i.newrelicHeader&&(r.setRequestHeader("newrelic",i.newrelicHeader),o=!0),i.traceContextParentHeader&&(r.setRequestHeader("traceparent",i.traceContextParentHeader),i.traceContextStateHeader&&r.setRequestHeader("tracestate",i.traceContextStateHeader),o=!0),o&&(this.dt=i)}}function c(e,r){var n=this.metrics,i=e[0],o=this;if(n&&i){var a=G(i);a&&(n.txSize=a)}this.startTime=(0,S.t)(),this.body=i,this.listener=function(e){try{"abort"!==e.type||o.loadCaptureCalled||(o.params.aborted=!0),("load"!==e.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof r.onload)&&"function"==typeof o.end)&&o.end(r)}catch(e){try{t.emit("internal-error",[e])}catch(e){}}};for(var s=0;s<de;s++)r.addEventListener(ue[s],this.listener,(0,T.jT)(!1))}function u(e,t,r){this.cbTime+=e,t?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof r.onload||"function"!=typeof this.end||this.end(r)}function d(e,t){var r=""+V(e)+!!t;this.xhrGuids&&!this.xhrGuids[r]&&(this.xhrGuids[r]=!0,this.totalCbs+=1)}function l(e,t){var r=""+V(e)+!!t;this.xhrGuids&&this.xhrGuids[r]&&(delete this.xhrGuids[r],this.totalCbs-=1)}function f(){this.endTime=(0,S.t)()}function h(e,r){r instanceof fe&&"load"===e[0]&&t.emit("xhr-load-added",[e[1],e[2]],r)}function g(e,r){r instanceof fe&&"load"===e[0]&&t.emit("xhr-load-removed",[e[1],e[2]],r)}function m(e,t,r){t instanceof fe&&("onload"===r&&(this.onload=!0),("load"===(e[0]&&e[0].type)||this.onload)&&(this.xhrCbStart=(0,S.t)()))}function v(e,r){this.xhrCbStart&&t.emit("xhr-cb-time",[(0,S.t)()-this.xhrCbStart,this.onload,r],r)}function b(e){var t,r=e[1]||{};if("string"==typeof e[0]?0===(t=e[0]).length&&p.RI&&(t=""+p.gm.location.href):e[0]&&e[0].url?t=e[0].url:p.gm?.URL&&e[0]&&e[0]instanceof URL?t=e[0].href:"function"==typeof e[0].toString&&(t=e[0].toString()),"string"==typeof t&&0!==t.length){t&&(this.parsedOrigin=(0,ie.D)(t),this.sameOrigin=this.parsedOrigin.sameOrigin);var i=n.generateTracePayload(this.parsedOrigin);if(i&&(i.newrelicHeader||i.traceContextParentHeader))if(e[0]&&e[0].headers)s(e[0].headers,i)&&(this.dt=i);else{var o={};for(var a in r)o[a]=r[a];o.headers=new Headers(r.headers||{}),s(o.headers,i)&&(this.dt=i),e.length>1?e[1]=o:e.push(o)}}function s(e,t){var r=!1;return t.newrelicHeader&&(e.set("newrelic",t.newrelicHeader),r=!0),t.traceContextParentHeader&&(e.set("traceparent",t.traceContextParentHeader),t.traceContextStateHeader&&e.set("tracestate",t.traceContextStateHeader),r=!0),r}}function y(e,t){this.params={},this.metrics={},this.startTime=(0,S.t)(),this.dt=t,e.length>=1&&(this.target=e[0]),e.length>=2&&(this.opts=e[1]);var r,n=this.opts||{},i=this.target;"string"==typeof i?r=i:"object"==typeof i&&i instanceof le?r=i.url:p.gm?.URL&&"object"==typeof i&&i instanceof URL&&(r=i.href),pe(this,r);var o=(""+(i&&i instanceof le&&i.method||n.method||"GET")).toUpperCase();this.params.method=o,this.body=n.body,this.txSize=G(n.body)||0}function w(e,t){if(this.endTime=(0,S.t)(),this.params||(this.params={}),(0,ce.iW)(this.params))return;let n;this.params.status=t?t.status:0,"string"==typeof this.rxSize&&this.rxSize.length>0&&(n=+this.rxSize);const i={txSize:this.txSize,rxSize:n,duration:(0,S.t)()-this.startTime};r("xhr",[this.params,i,this.startTime,this.endTime,"fetch"],this,a.K7.ajax)}function R(e){const t=this.params,n=this.metrics;if(!this.ended){this.ended=!0;for(let t=0;t<de;t++)e.removeEventListener(ue[t],this.listener,!1);t.aborted||(0,ce.iW)(t)||(n.duration=(0,S.t)()-this.startTime,this.loadCaptureCalled||4!==e.readyState?null==t.status&&(t.status=0):E(this,e),n.cbTime=this.cbTime,r("xhr",[t,n,this.startTime,this.endTime,"xhr"],this,a.K7.ajax))}}function E(e,r){e.params.status=r.status;var n=function(e,t){var r=e.responseType;return"json"===r&&null!==t?t:"arraybuffer"===r||"blob"===r||"json"===r?G(e.response):"text"===r||""===r||void 0===r?G(e.responseText):void 0}(r,e.lastSize);if(n&&(e.metrics.rxSize=n),e.sameOrigin){var i=r.getResponseHeader("X-NewRelic-App-Data");i&&((0,x.p)(_.rs,["Ajax/CrossApplicationTracing/Header/Seen"],void 0,a.K7.metrics,t),e.params.cat=i.split(", ").pop())}e.loadCaptureCalled=!0}t.on("new-xhr",i),t.on("open-xhr-start",o),t.on("open-xhr-end",s),t.on("send-xhr-start",c),t.on("xhr-cb-time",u),t.on("xhr-load-added",d),t.on("xhr-load-removed",l),t.on("xhr-resolved",f),t.on("addEventListener-end",h),t.on("removeEventListener-end",g),t.on("fn-end",v),t.on("fetch-before-start",b),t.on("fetch-start",y),t.on("fn-start",m),t.on("fetch-done",w)}(e,this.ee,this.handler,this.dt),this.importAggregator(e)}}function pe(e,t){var r=(0,ie.D)(t),n=e.params||e;n.hostname=r.hostname,n.port=r.port,n.protocol=r.protocol,n.host=r.hostname+":"+r.port,n.pathname=r.pathname,e.parsedOrigin=r,e.sameOrigin=r.sameOrigin}const ge={},me=["pushState","replaceState"];function ve(e){const t=function(e){return(e||B.ee).get("history")}(e);return!p.RI||ge[t.debugId]++||(ge[t.debugId]=1,(0,W.YM)(t).inPlace(window.history,me,"-")),t}var be=i(3738);const{He:ye,bD:we,d3:Re,Kp:xe,TZ:Ee,Lc:Te,uP:Ae,Rz:Se}=be;class Ne extends b{static featureName=Ee;constructor(e,t=!0){super(e,Ee,t);if(!(0,m.V)(this.agentIdentifier))return void this.deregisterDrain();const r=this.ee;let n;ve(r),this.eventsEE=(0,F.u)(r),this.eventsEE.on(Ae,(function(e,t){this.bstStart=(0,S.t)()})),this.eventsEE.on(Te,(function(e,t){(0,x.p)("bst",[e[0],t,this.bstStart,(0,S.t)()],void 0,a.K7.sessionTrace,r)})),r.on(Se+Re,(function(e){this.time=(0,S.t)(),this.startPath=location.pathname+location.hash})),r.on(Se+xe,(function(e){(0,x.p)("bstHist",[location.pathname+location.hash,this.startPath,this.time],void 0,a.K7.sessionTrace,r)}));try{n=new PerformanceObserver((e=>{const t=e.getEntries();(0,x.p)(ye,[t],void 0,a.K7.sessionTrace,r)})),n.observe({type:we,buffered:!0})}catch(e){}this.importAggregator(e,{resourceObserver:n})}}var _e=i(2614);class Oe extends b{static featureName=t.TZ;#i;#o;constructor(e,r=!0){let n;super(e,t.TZ,r),this.replayRunning=!1,this.#o=e;try{n=JSON.parse(localStorage.getItem("".concat(_e.H3,"_").concat(_e.uh)))}catch(e){}(0,g.SR)(e.agentIdentifier)&&this.ee.on(t.G4.RECORD,(()=>this.#a())),this.#s(n)?(this.#i=n?.sessionReplayMode,this.#c()):this.importAggregator(e),this.ee.on("err",(e=>{this.replayRunning&&(this.errorNoticed=!0,(0,x.p)(t.G4.ERROR_DURING_REPLAY,[e],void 0,this.featureName,this.ee))})),this.ee.on(t.G4.REPLAY_RUNNING,(e=>{this.replayRunning=e}))}#s(e){return e&&(e.sessionReplayMode===_e.g.FULL||e.sessionReplayMode===_e.g.ERROR)||(0,g.Aw)(this.agentIdentifier)}#u=!1;async#c(e){if(!this.#u){this.#u=!0;try{const{Recorder:t}=await Promise.all([i.e(478),i.e(249)]).then(i.bind(i,8589));this.recorder??=new t({mode:this.#i,agentIdentifier:this.agentIdentifier,trigger:e,ee:this.ee,agentRef:this.#o}),this.recorder.startRecording(),this.abortHandler=this.recorder.stopRecording}catch(e){}this.importAggregator(this.#o,{recorder:this.recorder,errorNoticed:this.errorNoticed})}}#a(){this.featAggregate?this.featAggregate.mode!==_e.g.FULL&&this.featAggregate.initializeRecording(_e.g.FULL,!0):(this.#i=_e.g.FULL,this.#c(t.Qb.API),this.recorder&&this.recorder.parent.mode!==_e.g.FULL&&(this.recorder.parent.mode=_e.g.FULL,this.recorder.stopRecording(),this.recorder.startRecording(),this.abortHandler=this.recorder.stopRecording))}}var Ie=i(3962);class Pe extends b{static featureName=Ie.TZ;constructor(e,t=!0){if(super(e,Ie.TZ,t),!p.RI||!(0,R.dV)().o.MO)return;const r=ve(this.ee);Ie.tC.forEach((e=>{(0,T.sp)(e,(e=>{a(e)}),!0)}));const n=()=>(0,x.p)("newURL",[(0,S.t)(),""+window.location],void 0,this.featureName,this.ee);r.on("pushState-end",n),r.on("replaceState-end",n);try{this.removeOnAbort=new AbortController}catch(e){}(0,T.sp)("popstate",(e=>(0,x.p)("newURL",[e.timeStamp,""+window.location],void 0,this.featureName,this.ee)),!0,this.removeOnAbort?.signal);let i=!1;const o=new((0,R.dV)().o.MO)(((e,t)=>{i||(i=!0,requestAnimationFrame((()=>{(0,x.p)("newDom",[(0,S.t)()],void 0,this.featureName,this.ee),i=!1})))})),a=(0,v.s)((e=>{(0,x.p)("newUIEvent",[e],void 0,this.featureName,this.ee),o.observe(document.body,{attributes:!0,childList:!0,subtree:!0,characterData:!0})}),100,{leading:!0});this.abortHandler=function(){this.removeOnAbort?.abort(),o.disconnect(),this.abortHandler=void 0},this.importAggregator(e,{domObserver:o})}}var je=i(7378);const Ce={},ke=["appendChild","insertBefore","replaceChild"];function Le(e){const t=function(e){return(e||B.ee).get("jsonp")}(e);if(!p.RI||Ce[t.debugId])return t;Ce[t.debugId]=!0;var r=(0,W.YM)(t),n=/[?&](?:callback|cb)=([^&#]+)/,i=/(.*)\.([^.]+)/,o=/^(\w+)(\.|$)(.*)$/;function a(e,t){if(!e)return t;const r=e.match(o),n=r[1];return a(r[3],t[n])}return r.inPlace(Node.prototype,ke,"dom-"),t.on("dom-start",(function(e){!function(e){if(!e||"string"!=typeof e.nodeName||"script"!==e.nodeName.toLowerCase())return;if("function"!=typeof e.addEventListener)return;var o=(s=e.src,c=s.match(n),c?c[1]:null);var s,c;if(!o)return;var u=function(e){var t=e.match(i);if(t&&t.length>=3)return{key:t[2],parent:a(t[1],window)};return{key:e,parent:window}}(o);if("function"!=typeof u.parent[u.key])return;var d={};function l(){t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,T.jT)(!1)),e.removeEventListener("error",f,(0,T.jT)(!1))}function f(){t.emit("jsonp-error",[],d),t.emit("jsonp-end",[],d),e.removeEventListener("load",l,(0,T.jT)(!1)),e.removeEventListener("error",f,(0,T.jT)(!1))}r.inPlace(u.parent,[u.key],"cb-",d),e.addEventListener("load",l,(0,T.jT)(!1)),e.addEventListener("error",f,(0,T.jT)(!1)),t.emit("new-jsonp",[e.src],d)}(e[0])})),t}const He={};function Me(e){const t=function(e){return(e||B.ee).get("promise")}(e);if(He[t.debugId])return t;He[t.debugId]=!0;var r=t.context,n=(0,W.YM)(t),i=p.gm.Promise;return i&&function(){function e(r){var o=t.context(),a=n(r,"executor-",o,null,!1);const s=Reflect.construct(i,[a],e);return t.context(s).getCtx=function(){return o},s}p.gm.Promise=e,Object.defineProperty(e,"name",{value:"Promise"}),e.toString=function(){return i.toString()},Object.setPrototypeOf(e,i),["all","race"].forEach((function(r){const n=i[r];e[r]=function(e){let i=!1;[...e||[]].forEach((e=>{this.resolve(e).then(a("all"===r),a(!1))}));const o=n.apply(this,arguments);return o;function a(e){return function(){t.emit("propagate",[null,!i],o,!1,!1),i=i||!e}}}})),["resolve","reject"].forEach((function(r){const n=i[r];e[r]=function(e){const r=n.apply(this,arguments);return e!==r&&t.emit("propagate",[e,!0],r,!1,!1),r}})),e.prototype=i.prototype;const o=i.prototype.then;i.prototype.then=function(...e){var i=this,a=r(i);a.promise=i,e[0]=n(e[0],"cb-",a,null,!1),e[1]=n(e[1],"cb-",a,null,!1);const s=o.apply(this,e);return a.nextPromise=s,t.emit("propagate",[i,!0],s,!1,!1),s},i.prototype.then[W.Jt]=o,t.on("executor-start",(function(e){e[0]=n(e[0],"resolve-",this,null,!1),e[1]=n(e[1],"resolve-",this,null,!1)})),t.on("executor-err",(function(e,t,r){e[1](r)})),t.on("cb-end",(function(e,r,n){t.emit("propagate",[n,!0],this.nextPromise,!1,!1)})),t.on("propagate",(function(e,r,n){this.getCtx&&!r||(this.getCtx=function(){if(e instanceof Promise)var r=t.context(e);return r&&r.getCtx?r.getCtx():this})}))}(),t}const De={},Ke="setTimeout",Ue="setInterval",Ve="clearTimeout",Ge="-start",Fe=[Ke,"setImmediate",Ue,Ve,"clearImmediate"];function Be(e){const t=function(e){return(e||B.ee).get("timer")}(e);if(De[t.debugId]++)return t;De[t.debugId]=1;var r=(0,W.YM)(t);return r.inPlace(p.gm,Fe.slice(0,2),Ke+"-"),r.inPlace(p.gm,Fe.slice(2,3),Ue+"-"),r.inPlace(p.gm,Fe.slice(3),Ve+"-"),t.on(Ue+Ge,(function(e,t,n){e[0]=r(e[0],"fn-",null,n)})),t.on(Ke+Ge,(function(e,t,n){this.method=n,this.timerDuration=isNaN(e[1])?0:+e[1],e[0]=r(e[0],"fn-",this,n)})),t}const We={};function ze(e){const t=function(e){return(e||B.ee).get("mutation")}(e);if(!p.RI||We[t.debugId])return t;We[t.debugId]=!0;var r=(0,W.YM)(t),n=p.gm.MutationObserver;return n&&(window.MutationObserver=function(e){return this instanceof n?new n(r(e,"fn-")):n.apply(this,arguments)},MutationObserver.prototype=n.prototype),t}const{TZ:qe,d3:Ze,Kp:Ye,$p:Xe,wW:$e,e5:Je,tH:Qe,uP:et,rw:tt,Lc:rt}=je;class nt extends b{static featureName=qe;constructor(e,t=!0){if(super(e,qe,t),!p.RI)return;try{this.removeOnAbort=new AbortController}catch(e){}let r,n=0;const i=this.ee.get("tracer"),o=Le(this.ee),a=Me(this.ee),s=Be(this.ee),c=Z(this.ee),u=this.ee.get("events"),d=ne(this.ee),l=ve(this.ee),f=ze(this.ee);function h(e,t){l.emit("newURL",[""+window.location,t])}function g(){n++,r=window.location.hash,this[et]=(0,S.t)()}function m(){n--,window.location.hash!==r&&h(0,!0);var e=(0,S.t)();this[Je]=~~this[Je]+e-this[et],this[rt]=e}function v(e,t){e.on(t,(function(){this[t]=(0,S.t)()}))}this.ee.on(et,g),a.on(tt,g),o.on(tt,g),this.ee.on(rt,m),a.on($e,m),o.on($e,m),this.ee.on("fn-err",((...t)=>{t[2]?.__newrelic?.[e.agentIdentifier]||(0,x.p)("function-err",[...t],void 0,this.featureName,this.ee)})),this.ee.buffer([et,rt,"xhr-resolved"],this.featureName),u.buffer([et],this.featureName),s.buffer(["setTimeout"+Ye,"clearTimeout"+Ze,et],this.featureName),c.buffer([et,"new-xhr","send-xhr"+Ze],this.featureName),d.buffer([Qe+Ze,Qe+"-done",Qe+Xe+Ze,Qe+Xe+Ye],this.featureName),l.buffer(["newURL"],this.featureName),f.buffer([et],this.featureName),a.buffer(["propagate",tt,$e,"executor-err","resolve"+Ze],this.featureName),i.buffer([et,"no-"+et],this.featureName),o.buffer(["new-jsonp","cb-start","jsonp-error","jsonp-end"],this.featureName),v(d,Qe+Ze),v(d,Qe+"-done"),v(o,"new-jsonp"),v(o,"jsonp-end"),v(o,"cb-start"),l.on("pushState-end",h),l.on("replaceState-end",h),window.addEventListener("hashchange",h,(0,T.jT)(!0,this.removeOnAbort?.signal)),window.addEventListener("load",h,(0,T.jT)(!0,this.removeOnAbort?.signal)),window.addEventListener("popstate",(function(){h(0,n>1)}),(0,T.jT)(!0,this.removeOnAbort?.signal)),this.abortHandler=this.#n,this.importAggregator(e)}#n(){this.removeOnAbort?.abort(),this.abortHandler=void 0}}var it=i(3333);class ot extends b{static featureName=it.TZ;constructor(e,t=!0){super(e,it.TZ,t);const r=[e.init.page_action.enabled,e.init.performance.capture_marks,e.init.performance.capture_measures,e.init.user_actions.enabled,e.init.performance.resources.enabled];if(p.RI&&(e.init.user_actions.enabled&&(it.Zp.forEach((e=>(0,T.sp)(e,(e=>(0,x.p)("ua",[e],void 0,this.featureName,this.ee)),!0))),it.qN.forEach((e=>(0,T.sp)(e,(e=>(0,x.p)("ua",[e],void 0,this.featureName,this.ee)))))),e.init.performance.resources.enabled&&p.gm.PerformanceObserver?.supportedEntryTypes.includes("resource"))){new PerformanceObserver((e=>{e.getEntries().forEach((e=>{(0,x.p)("browserPerformance.resource",[e],void 0,this.featureName,this.ee)}))})).observe({type:"resource",buffered:!0})}r.some((e=>e))?this.importAggregator(e):this.deregisterDrain()}}var at=i(993),st=i(3785);class ct extends b{static featureName=at.TZ;constructor(e,t=!0){super(e,at.TZ,t);const r=this.ee;this.ee.on("wrap-logger-end",(function([e]){const{level:t,customAttributes:n}=this;(0,st.R)(r,e,n,t)})),this.importAggregator(e)}}new class extends o{constructor(t,r){super(r),p.gm?(this.features={},(0,R.bQ)(this.agentIdentifier,this),this.desiredFeatures=new Set(t.features||[]),this.desiredFeatures.add(w),this.runSoftNavOverSpa=[...this.desiredFeatures].some((e=>e.featureName===a.K7.softNav)),(0,d.j)(this,t,t.loaderType||"agent"),this.run()):(0,e.R)(21)}get config(){return{info:this.info,init:this.init,loader_config:this.loader_config,runtime:this.runtime}}run(){try{const t=u(this.agentIdentifier),r=[...this.desiredFeatures];r.sort(((e,t)=>a.P3[e.featureName]-a.P3[t.featureName])),r.forEach((r=>{if(!t[r.featureName]&&r.featureName!==a.K7.pageViewEvent)return;if(this.runSoftNavOverSpa&&r.featureName===a.K7.spa)return;if(!this.runSoftNavOverSpa&&r.featureName===a.K7.softNav)return;const n=function(e){switch(e){case a.K7.ajax:return[a.K7.jserrors];case a.K7.sessionTrace:return[a.K7.ajax,a.K7.pageViewEvent];case a.K7.sessionReplay:return[a.K7.sessionTrace];case a.K7.pageViewTiming:return[a.K7.pageViewEvent];default:return[]}}(r.featureName).filter((e=>!(e in this.features)));n.length>0&&(0,e.R)(36,{targetFeature:r.featureName,missingDependencies:n}),this.features[r.featureName]=new r(this)}))}catch(t){(0,e.R)(22,t);for(const e in this.features)this.features[e].abortHandler?.();const r=(0,R.Zm)();delete r.initializedAgents[this.agentIdentifier]?.api,delete r.initializedAgents[this.agentIdentifier]?.features,delete this.sharedAggregator;return r.ee.get(this.agentIdentifier).abort(),!1}}}({features:[he,w,N,Ne,Oe,O,M,ot,ct,Pe,nt],loaderType:"spa"})})()})();</script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>INPTIC</title>
<meta name='robots' content='max-image-preview:large' />

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<script data-cfasync="false" data-pagespeed-no-defer>
	var gtm4wp_datalayer_name = "dataLayer";
	var dataLayer = dataLayer || [];
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com --><link rel='dns-prefetch' href='index.html' />
<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
<link rel="alternate" type="application/rss+xml" title="INPTIC &raquo; Feed" href="http://news.stanford.edu/feed/" />
<link rel='stylesheet' id='formidable-css' href='https://www.stanford.edu/wp-admin/admin-ajax.php?action=frmpro_css&amp;ver=1152356' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css' href='wp-includes/css/dist/block-library/style.minb6a4.css?ver=6.6.1' type='text/css' media='all' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='awesome-weather-css' href='wp-content/plugins/awesome-weather-pro/awesome-weatherb6a4.css?ver=6.6.1' type='text/css' media='all' />
<style id='awesome-weather-inline-css' type='text/css'>
.awesome-weather-wrap { font-family: 'Open Sans', sans-serif; font-weight: 400; font-size: 14px; line-height: 14px; }
</style>

<link rel='stylesheet' id='opensans-googlefont-css' href='http://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300&amp;ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='homesite17-style-css' href='wp-content/themes/homesite17/styleb6a4.css?ver=6.6.1' type='text/css' media='all' />
<link rel='stylesheet' id='homesite17-master-style-css' href='wp-content/themes/homesite17/css/master.minb5ff.css?ver=2021.04.15.11.26' type='text/css' media='all' />
<script type="text/javascript" src="wp-includes/js/jquery/jquery.minf43b.js?ver=3.7.1" id="jquery-core-js"></script>
<link rel="shortcut icon" type="image/x-icon" href="icones.png">
<script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min5589.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" src="wp-content/plugins/site-improve-snippet/snippet5152.js?ver=1.0" id="site-improve-snippet-js"></script>
<script type="text/javascript" src="wp-content/plugins/stanford-fb-pixel/pixelf269.js?ver=1.0.1" id="sufb-pixel-js"></script>
<link rel="https://api.w.org/" href="wp-json/index.html" /><link rel="alternate" title="JSON" type="application/json" href="wp-json/wp/v2/pages/64.json" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
<meta name="generator" content="WordPress 6.6.1" />
<link rel="canonical" href="index.html" />
<link rel='shortlink' href='index.html' />
<link rel="alternate" title="oEmbed (JSON)" type="application/json+oembed" href="wp-json/oembed/1.0/embed62f4.json?url=https%3A%2F%2Fwww.stanford.edu%2F" />
<link rel="alternate" title="oEmbed (XML)" type="text/xml+oembed" href="wp-json/oembed/1.0/embed884b?url=https%3A%2F%2Fwww.stanford.edu%2F&amp;format=xml" />
<script>document.documentElement.className += " js";</script>

<!-- Google Tag Manager for WordPress by gtm4wp.com -->
<!-- GTM Container placement set to footer -->
<script data-cfasync="false" data-pagespeed-no-defer type="text/javascript">
	var dataLayer_content = {"pagePostType":"frontpage","pagePostType2":"single-page","pagePostAuthor":"Alex Harvison","browserName":"Chrome","browserVersion":"67.0.3396.99","browserEngineName":"Blink","browserEngineVersion":"","deviceType":"desktop","deviceManufacturer":"","deviceModel":""};
	dataLayer.push( dataLayer_content );
</script>
<script data-cfasync="false">
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T4N2WTT');
</script>
<!-- End Google Tag Manager for WordPress by gtm4wp.com -->		<style type="text/css" id="wp-custom-css">
			/* Style overrides for MOSI mockup */

.page-id-15261 .panel[data-type=interstitial-text][data-width=content] {
	padding-bottom: 2rem;
	padding-top: 2rem;
}

.page-id-15261 .info-box {
	margin-top: 35px
}

.page-id-15261 .panel[data-type="image-content"].theme--white {
	padding: 0 calc(50% - 402.5px);
}

/* Style overrides for Land Acknowledgement page .page-id-15321 */

.page-id-15321 .panel-collection .panel:nth-child(4) {
	background-image: url('wp-content/uploads/2021/07/20200728_Stanford_Dish-28.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
	position: relative;
}

.page-id-15321 .panel-collection .panel:nth-child(4)::after {
	content: '';
	background-color: #2F2424;
	height: 100%;
	width: 100%;
	display: block;
	opacity: .7;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 0;
}

.page-id-15321 .panel-collection .panel:nth-child(4) header, .page-id-15321 .panel-collection .panel:nth-child(4) section, .page-id-15321 .panel-collection .panel:nth-child(4) footer {
	position: relative;
	z-index: 1;
	text-shadow: 0px 0px 10px #2E2D29;
}

/* Needed to add button to land ack page, these are Decanter styles. Using the page-id selector as I don't know if this class is used elsewhere on the site at this time. The .su-button class was added to the anchor in the WYSIWYG in text mode. */
.page-id-15321 .su-button {
	background-color: #b1040e;
	color: #ffffff;
	display: inline-block;
	margin-top: 1rem;
	padding: 1rem 2rem;
	text-decoration: none;
}

.page-id-15321 .su-button:active,
.page-id-15321 .su-button:focus,
.page-id-15321 .su-button:hover {
	background-color: #820000;
	color: #ffffff;
}

.page-id-15321 .su-button--download::after {
	content: '\f019';
	font-family: FontAwesome;
	margin-left: 1rem;
}

/* NOBEL 2022, needed to move homepage alert banner down below logo as it was placed over top of the subjects' eyes in the photo. */

/* .home .widget_alert {
	left: 50%;
	top: 61%;
	width: 70%;
	max-width: 1200px;
	transform: translate(-50%, 0%);
} */


/* Button styles for Learn more section at bottom of /about page. */
.page-id-20180 a.su-button {
	background-color: #b1040e;
	color: #ffffff;
	display: block;
	font-size: 1.25em;	
	margin: 0 auto 0 0;
	padding: 1rem 2rem;
	text-decoration: none;
}

.page-id-20180 .su-button.first {
	margin: 0 0 0 auto;
}

.page-id-20180 a.su-button:active,
.page-id-20180 a.su-button:focus,
.page-id-20180 a.su-button:hover {
	background-color: #820000;
	color: #ffffff;
}

@media only screen and (min-width: 575px) { 
	.page-id-20180 	a.su-button {
		max-width: 75%
	}
}

		</style>
		
<!-- START - Open Graph and Twitter Card Tags 3.3.3 -->
 <!-- Facebook Open Graph -->
  <meta property="og:locale" content="en_US"/>
  <meta property="og:site_name" content="INPTIC"/>
  <meta property="og:title" content="INPTIC"/>
  <meta property="og:url" content="https://www.stanford.edu/"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="One of the world&#039;s leading research and teaching institutions. Catalyzing discovery, accelerating solutions, sustaining life on Earth, and preparing students for active citizenship."/>
  <meta property="og:image" content="https://www.stanford.edu/wp-content/uploads/2023/03/Community.png"/>
  <meta property="og:image:url" content="https://www.stanford.edu/wp-content/uploads/2023/03/Community.png"/>
  <meta property="og:image:secure_url" content="https://www.stanford.edu/wp-content/uploads/2023/03/Community.png"/>
  <meta property="article:publisher" content="https://www.facebook.com/stanford"/>
 <!-- Google+ / Schema.org -->
 <!-- Twitter Cards -->
  <meta name="twitter:title" content="INPTIC"/>
  <meta name="twitter:url" content="https://www.stanford.edu/"/>
  <meta name="twitter:description" content="One of the world&#039;s leading research and teaching institutions. Catalyzing discovery, accelerating solutions, sustaining life on Earth, and preparing students for active citizenship."/>
  <meta name="twitter:image" content="https://www.stanford.edu/wp-content/uploads/2023/03/Community.png"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:site" content="@Stanford"/>
 <!-- SEO -->
  <link rel="canonical" href="index.html"/>
  <meta name="description" content="One of the world&#039;s leading research and teaching institutions. Catalyzing discovery, accelerating solutions, sustaining life on Earth, and preparing students for active citizenship."/>
 <!-- Misc. tags -->
 <!-- is_singular -->
<!-- END - Open Graph and Twitter Card Tags 3.3.3 -->
	

  <link rel="apple-touch-icon" sizes="57x57" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="60x60" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-60x60.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-72x72.png" />
  <link rel="apple-touch-icon" sizes="76x76" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-114x114.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="144x144" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-144x144.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-152x152.png" />
  <link rel="apple-touch-icon" sizes="180x180" href="../www-media.stanford.edu/assets/favicon/apple-touch-icon-180x180.png" />

  <link rel="icon" type="image/png" href="../www-media.stanford.edu/assets/favicon/favicon-196x196.png" sizes="196x196" />
  <link rel="icon" type="image/png" href="../www-media.stanford.edu/assets/favicon/favicon-192x192.png" sizes="192x192" />
  <link rel="icon" type="image/png" href="../www-media.stanford.edu/assets/favicon/favicon-128.png" sizes="128x128" />
  <link rel="icon" type="image/png" href="../www-media.stanford.edu/assets/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/png" href="../www-media.stanford.edu/assets/favicon/favicon-32x32.png" sizes="32x32" />
  <link rel="icon" type="image/png" href="../www-media.stanford.edu/assets/favicon/favicon-16x16.png" sizes="16x16" />

  <link rel="mask-icon" href="https://www-media.stanford.edu/assets/favicon/safari-pinned-tab.svg" color="#ffffff">
  <meta name="application-name" content="INPTIC"/>
  <meta name="msapplication-TileColor" content="#FFFFFF" />
  <meta name="msapplication-TileImage" content="https://www-media.stanford.edu/assets/favicon/mstile-144x144.png" />
  <meta name="msapplication-square70x70logo" content="https://www-media.stanford.edu/assets/favicon/mstile-70x70.png" />
  <meta name="msapplication-square150x150logo" content="https://www-media.stanford.edu/assets/favicon/mstile-150x150.png" />
  <meta name="msapplication-square310x310logo" content="https://www-media.stanford.edu/assets/favicon/mstile-310x310.png" />

  <meta name="facebook-domain-verification" content="a91q4n8v45r4nm4mtheppcx6yaf3sl" />
  
  <!-- Ajout des styles pour le chatbot -->
  <link rel="stylesheet" href="tchap-bot/style.css">
  
  <!-- Ajout de l'icône dans le head -->
  <link rel="shortcut icon" type="image/x-icon" href="tchap-bot/gabon-logo.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body class="home page-template page-template-homepage page-template-homepage-php page page-id-64 splash-parallax normal-home">
  <header role="banner">




<a id="skiplinks" href="#main-content" data-ga-category="Skip links" data-ga-action="header" data-ga-label="Skip to content">Skip to content</a>
<section id="brand-bar" data-ga-category="Brand bar" data-ga-action="Gateway nav" style="background-color:rgb(144, 199, 239);">
    <!-- <a href="index.php" class="su-brand" rel="" id="header--wordmark" data-ga-action=""> </a> -->
    <nav id="gateway" class="menu-gateway-nav-container" aria-label="Gateway navigation">
        <div class="gateway-nav--label"></div>
        <ul id="menu-gateway-nav" class="menu">
            <li id="menu-item-9055" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9055">
                <a href="" style="color: #90e0ef;"></a>
            </li>
            <li id="menu-item-8817" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8817">
                <a href="" style="color: #90e0ef;"></a>
            </li>
            <li id="menu-item-17" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-17">
                <a href="" style="color: #90e0ef;"></a>
            </li>
            <li id="menu-item-7621" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7621">
                <a href="" style="color: #90e0ef;"></a>
            </li>
            <li id="menu-item-18" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-18">
                <a href="" style="color: #90e0ef;"></a>
            </li>
        </ul>
    </nav>      
    <button id="menu-toggle" aria-controls="primary-menu" aria-expanded="false" data-ga-action="Menu toggle" style="background-color: #90e0ef; color: white;">
        Menu
    </button>
</section>





<!--
<div id="menu-overlay" aria-hidden="true" role="presentation"></div>
<nav id="site-navigation" role="navigation" aria-label="Primary site navigation" data-ga-category="Top nav">
<div class="menu-primary-nav-container"><ul id="primary-menu" class="menu"><li id="menu-item-2297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2297"   ><a href="" style="color:#750909; text-decoration: none; background-color: rgba(117, 9, 9, 0.1); padding: 10px 20px; border: 2px solid #750909; border-radius: 5px; font-size: 16px; font-weight: bold; text-align: center; transition: all 0.3s ease; display: inline-block;" onmouseover="this.style.backgroundColor='#750909'; this.style.color='white'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.2)'" onmouseout="this.style.backgroundColor='rgba(117, 9, 9, 0.1)'; this.style.color='#750909'; this.style.boxShadow='none'">BIENVENUE-INPTIC</a>
</li>
<li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106"><a href="">Presse Universitaire</a></li>
<li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="student-gateway/index.php">Nos candidatures</a></li>


<li id="menu-item-21974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21974"><a href="">Nos communautés</a></li>

<li id="menu-item-21974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21974"><a href="">Nos partenaires</a></li>

<li id="menu-item-21974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21974"><a href="">Nous contactez</a></li>
</ul>
</div>    
</nav>
-->

<div id="menu-overlay" aria-hidden="true" role="presentation"></div>

<nav id="site-navigation" role="navigation" aria-label="Primary site navigation" data-ga-category="Top nav">
    <div class="menu-primary-nav-container">
        <ul id="primary-menu" class="menu">
            <li id="menu-item-2297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2297">
                <a href="" style="color:#00506b; text-decoration: none; background-color: rgba(144, 224, 239, 0.1); padding: 10px 20px; border: 2px solid #90e0ef; border-radius: 5px; font-size: 16px; font-weight: bold; text-align: center; transition: all 0.3s ease; display: inline-block;" 
                    onmouseover="this.style.backgroundColor='#90e0ef'; this.style.color='white'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.2)'" 
                    onmouseout="this.style.backgroundColor='rgba(144, 224, 239, 0.1)'; this.style.color='#00506b'; this.style.boxShadow='none'">
                    BIENVENUE-INPTIC
                </a>
            </li>
            <li id="menu-item-106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-106">
                <a href="" >Presse Universitaire</a>
            </li>
            <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108">
                <a href="student-gateway/index.php" >Nos candidatures</a>
            </li>
            <li id="menu-item-21974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21974">
                <a href="" >Nos communautés</a>
            </li>
            <li id="menu-item-21974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21974">
                <a href="" >Nos partenaires</a>
            </li>
            <li id="menu-item-21974" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21974">
                <a href="" >Nous contacter</a>
            </li>
        </ul>
    </div>    
</nav>







<style>
  .red-button {
  display: inline-block;
  padding: 10px 20px;
  color: #fff;
  background-color: #ff0000;
  text-decoration: none;
  font-size: 16px;
  font-weight: bold;
  border: 2px solid #ff4d4d;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
  transition: all 0.3s ease;
}

.red-button:hover {
  background-color: #e60000;
  box-shadow: 0 0 20px rgba(255, 0, 0, 1);
  transform: scale(1.05);
}

  </style>






<section id="search-wrapper">

  <div id="search-overlay" aria-hidden="true" role="presentation">
  </div>

  <div id="site-search" role="search">
  <form action="https://www.stanford.edu/search" method="get" id="search-form" accept-charset="UTF-8">
    <label for="search-field" class="sr-only-text">Search term</label>
    <input id="search-field" type="text" name="q" title="Search string" class="input-medium" placeholder="    Search Stanford websites" value="" size="15" maxlength="128" />
    <div id="search-type">
      <h2></h2>
      <input id="search-web" name="search_type" type="radio" value="web"  checked="checked"  class="radio-search"/>
      <label for="search-web">Web</label>
      <input id="search-people" name="search_type" type="radio" value="people"  class="radio-search"/>
      <label for="search-people">People</label>
    </div>
    <button id="search-btn" type="submit" name="submit" aria-label="Search" formmethod="get"><i class="fa fa-globe"></i>&nbsp;Search Web</button>
  </form>
    <p>
      Other ways to search:
        <a href="https://campus-map.stanford.edu/">Map</a>
        <a href="https://profiles.stanford.edu/">Profiles</a>
    </p>
  </div>
</section>
   










<section class="panel-collection" data-modular-content-collection>
  <section class="panel theme--choco" data-type="splash-image" id="splash-screen" data-modular-content data-js="panel" data-index="0" data-scroll-type="parallax" data-logo-loc-v="middle" data-logo-loc-h="center" data-ga-category="Splash Panel">
    <p id="splash--wordmark" class="su-brand splash__wordmark--middle splash__wordmark--center"></p>
    <p id="splash--scroller">
      <a href="#main-content" data-ga-action="Splash screen scroller">Session candidature ouverte 2025-2026</a>
    </p>
    <video class="bg-video" role="presentation" autoplay muted loop playsinline></video>
  </section>

  <div class="rotating-image-container">
    <img class="rotating-image" src="logoinptic.png" alt="Logo tournant" />
    <p class="rotating-text">Bienvenue à l'INPTIC</p>
  </div>

  <script>
    // Tableau des vidéos et textes associés
    const slides = [
      { videoSrc: "video1.mp4", text: "C'est un immense plaisir de vous accueillir à l'Institut National de la Poste, des Technologies de l'Information et de la Communication (INPTIC)" },
      { videoSrc: "video2.mp4", text: "Une grande vague de connaissance" },
      { videoSrc: "video3.mp4", text: "Nos innovations en techniques commerciales" },
      { videoSrc: "video4.mp4", text: "Nos départements : Réseaux et Systèmes Numériques, Management des TIC et Métiers de l'Audiovisuel" },
      { videoSrc: "video5.mp4", text: "Innovation et Excellence" },
      { videoSrc: "video6.mp4", text: "Les ambitions actuelles de notre institution s'alignent parfaitement avec les objectifs nationaux" },
      { videoSrc: "video7.mp4", text: "Nos départements offrent des programmes de formation initiale de haute qualité" },
      { videoSrc: "video8.mp4", text: "Nouvelles compétences dans les domaines émergents des TIC" },
      { videoSrc: "video9.mp4", text: "Pertinence immédiate sur le marché du travail" },
      { videoSrc: "video10.mp4", text: "À l'INPTIC, nous croyons en l'autonomisation par l'éducation et la transformation par la technologie" },
      { videoSrc: "video11.mp4", text: "Nous façonnons un avenir où chaque individu réalise son plein potentiel" },
    ];

    const videoElement = document.querySelector(".bg-video");
    const rotatingTextElement = document.querySelector(".rotating-text");

    let currentIndex = 0;

    function updateSlide() {
      const { videoSrc, text } = slides[currentIndex];
      videoElement.src = videoSrc; // Met à jour la vidéo
      rotatingTextElement.textContent = text; // Met à jour le texte rotatif
      currentIndex = (currentIndex + 1) % slides.length; // Passe au prochain slide
    }

    // Initialisation
    updateSlide();
    setInterval(updateSlide, 5000); // Changer toutes les 5 secondes
  </script>

  <style>
    /* Vidéo de fond */
    .bg-video {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover; /* Assure que la vidéo couvre toute la surface */
      z-index: -1;
    }

    /* Animation pour l'image pivotante */
    @keyframes rotate360 {
      from {
        transform: rotateY(0deg);
      }
      to {
        transform: rotateY(360deg);
      }
    }

    .rotating-image-container {
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 10;
      text-align: center;
    }

    .rotating-image {
      width: 350px;
      height: auto;
      animation: rotate360 5s linear infinite;
      transform-origin: center center;
    }

    .rotating-text {
      margin-top: 10px;
      font-size: 18px;
      color: #ffffff;
      font-weight: bold;
      text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
    }

    /* Responsiveness pour les petits écrans */
    @media (max-width: 768px) {
      .rotating-image {
        width: 250px;
      }

      .rotating-text {
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      .rotating-image {
        width: 200px;
      }

      .rotating-text {
        font-size: 14px;
      }

      .rotating-image-container {
        top: 55%;
      }
    }
  </style>
</section>



</header>









<main id="main" role="main">
<h2 id="main-content" class="sr-only-element" tabindex="-1">Main Content</h2>  
<section class="panel-collection" data-modular-content-collection>
<section class="panel theme--white" data-type="section" id="a-societal-mission" data-modular-content data-js="panel" data-index="3">

<header>
<h2 class="center">A Societal Mission</h2>
</header>
<section class="panel theme--white" data-type="position-stmt" id="position-stmt-1" data-width="full">

  <p>L'INPTIC Gabon : Un engagement pour l'excellence et l'avenir.
      Fondé pour répondre aux besoins de la société, l'Institut National des Postes, des Technologies de l'Information et de la Communication (INPTIC) forme des étudiants prêts à relever les défis de demain. Sa mission est de développer des compétences solides, d'encourager la créativité et d'offrir une éducation de qualité pour un impact durable dans les secteurs des TIC.
      
      1 532 étudiants diplômés
      50 enseignants qualifiés
      85 % de taux d'insertion professionnelle
      5 départements spécialisés</p>

</section>

<!--
<section class="panel" data-type="call-to-action" id="more-about-stanford">
<a href="student-gateway/index.php" data-ga-category="Call to action" data-ga-action="More about Stanford">Rejoignez notre institut  par candidature Cliquez ici </a>
</section>
-->

<section class="panel" data-type="call-to-action" id="more-about-stanford" style="; padding: 20px; text-align: center; border-radius: 8px;">
    <a href="student-gateway/index.php" 
       data-ga-category="Call to action" 
       data-ga-action="More about Stanford"
       style="color: white; text-decoration: none; font-size: 18px; font-weight: bold; padding: 10px 20px; background-color: #0077b6; border-radius: 5px; display: inline-block; transition: all 0.3s ease;"
       onmouseover="this.style.backgroundColor='#023e8a'"
       onmouseout="this.style.backgroundColor='#0077b6'">
        Rejoignez notre institut
    </a>
</section>


</section>
<section class="panel theme--fog" data-type="section" id="campus-news" data-modular-content data-js="panel" data-index="6">
<header>
<h2 class="center">Press|Inptic</h2>
<p>Histoires sur les personnes, la recherche et l'innovation à travers la ferme</p>
</header>
<section class="panel" data-type="posts" id="posts-4" data-width="full" data-posts-per-row="4" data-featured-post="first-last">


<div class="grid-container">


<article class="theme--primary">
<figure class="landscape">
  <a href="https://www.facebook.com/share/15dx9Angzw/" aria-hidden="true" tabindex="-1">
  <picture data-anchor-v="center" data-anchor-h="center">
    <source srcset="images/sensibilisation.jpg" />
    <img role="presentation" alt="Innovation numérique à l'INPTIC" src="images/sensibilisation.jpg" />
  </picture>
  </a>
</figure>

<div class='content'>
  <div class="post-meta">
    <p class="post-category">sensibilisation</p>
  </div>
  <h3><a href='https://www.facebook.com/share/15dx9Angzw/'> l'INPTIC a accueilli une campagne de sensibilisation animée par l'association « Ma Bannière », portant sur les dangers de l'usage détourné des médicaments et de la consommation de drogues en milieu scolaire et universitaire.</a></h3>
</div>
</article>

<article>
<figure class="landscape">
  <a href="https://www.facebook.com/share/19qwtKfckA/" aria-hidden="true" tabindex="-1">
  <picture data-anchor-v="center" data-anchor-h="center">
    <source srcset="images/partenariat.jpg" />
    <img role="presentation" alt="Partenariats industriels" src="images/partenariat.jpg" />
  </picture>
  </a>
</figure>

<div class='content'>
  <div class="post-meta">
    <p class="post-category">Partenariats</p>
  </div>
  <h3><a href='https://www.facebook.com/share/19qwtKfckA/'>Un partenariat stratégique entre le ministère de la Communication et des Médias et l'INPTIC</a></h3>
</div>
</article>

<article>
<figure class="landscape">
  <a href="https://www.facebook.com/share/p/1GjDf8sXC9/" aria-hidden="true" tabindex="-1">
  <picture data-anchor-v="center" data-anchor-h="center">
    <source srcset="images/GABON_DIGITAL.jpg" />
    <img role="presentation" alt="Formation continue" src="images/GABON_DIGITAL.jpg" />
  </picture>
  </a>
</figure>

<div class='content'>
  <div class="post-meta">
    <p class="post-category">GABON DIGITAL</p>
  </div>
  <h3><a href='https://www.facebook.com/share/p/1GjDf8sXC9/'>L'INPTIC Accueille L'événement GABON DIGITAL - Académie Mondiale des Compétences : Un Pas Vers un Avenir Numérique Durable</a></h3>
</div>
</article>

<article>
<figure class="landscape">
  <a href="https://www.facebook.com/share/v/1DN1Aay9j6/" aria-hidden="true" tabindex="-1">
  <picture data-anchor-v="center" data-anchor-h="center">
    <source srcset="images/journal_hebdomadaire.png" />
    <img role="presentation" alt="Recherche et développement" src="images/journal_hebdomadaire.png" />
  </picture>
  </a>
</figure>

<div class='content'>
  <div class="post-meta">
    <p class="post-category">journal hebdomadaire</p>
  </div>
  <h3><a href='https://www.facebook.com/share/v/1DN1Aay9j6/'>🎥Suivez un extrait du journal hebdomadaire de l'INPTIC produit par le club INPTIC TV</a></h3>
</div>
</article>

<article>
<figure class="landscape">
  <a href="https://www.facebook.com/61557159190234/videos/1665989034003248/" aria-hidden="true" tabindex="-1">
  <picture data-anchor-v="center" data-anchor-h="center">
    <source srcset="images/tournoi.jpg" />
    <img role="presentation" alt="Réussite étudiante" src="images/tournoi.jpg" />
  </picture>
  </a>
</figure>

<div class='content'>
  <div class="post-meta">
    <p class="post-category">Vie Étudiante</p>
  </div>
  <h3><a href='https://www.facebook.com/share/p/15Rj7pP7SQ/'>Un tournoi inter-filières sera organisé toutes les filières sont invitées à y participer. Chaque filière doit déposer une liste de 8 joueurs🏃‍♂️</a></h3>
</div>
</article>

<article class="theme--primary">
<figure class="landscape">
  <a href="https://www.facebook.com/share/p/19u87EyR3h/" aria-hidden="true" tabindex="-1">
  <picture data-anchor-v="center" data-anchor-h="center">
    <source srcset="images/𝗙𝗢𝗥𝗠𝗔𝗧𝗜𝗢𝗡_𝗤𝗨𝗔𝗟𝗜𝗙𝗜𝗔𝗡𝗧𝗘_𝗔_𝗟_𝗨𝗦𝗔𝗚𝗘_𝗗𝗘𝗦_𝗧𝗜𝗖.jpg" />
    <img role="presentation" alt="Nouvelles infrastructures" src="images/𝗙𝗢𝗥𝗠𝗔𝗧𝗜𝗢𝗡_𝗤𝗨𝗔𝗟𝗜𝗙𝗜𝗔𝗡𝗧𝗘_𝗔_𝗟_𝗨𝗦𝗔𝗚𝗘_𝗗𝗘𝗦_𝗧𝗜𝗖.jpg" />
  </picture>
  </a>
</figure>

<div class='content'>
  <div class="post-meta">
    <p class="post-category">𝗡𝗢𝗨𝗩𝗘𝗔𝗨 𝗣𝗥𝗢𝗚𝗥𝗔𝗠𝗠𝗘 𝗜𝗡𝗘́𝗗𝗜𝗧</p>
  </div>
  <h3><a href='https://www.facebook.com/share/p/19u87EyR3h/'>𝗙𝗢𝗥𝗠𝗔𝗧𝗜𝗢𝗡 𝗤𝗨𝗔𝗟𝗜𝗙𝗜𝗔𝗡𝗧𝗘 𝗔̀ 𝗟'𝗨𝗦𝗔𝗚𝗘 𝗗𝗘𝗦 𝗧𝗜𝗖 </a></h3>
</div>
</article>

</div>
</section>
<!--
<section class="panel" data-type="call-to-action" id="news-cat">
  <a href="https://www.facebook.com/profile.php?id=61557159190234" data-ga-category="Call to action" data-ga-action="More campus news">En savoir plus </a>
</section>
-->
<section class="panel" data-type="call-to-action" id="news-cat" style=" padding: 20px; text-align: center; border-radius: 8px;">
    <a href="https://www.facebook.com/profile.php?id=61557159190234" 
       data-ga-category="Call to action" 
       data-ga-action="More campus news"
       style="color: white; text-decoration: none; font-size: 18px; font-weight: bold; padding: 10px 20px; background-color: #0077b6; border-radius: 5px; display: inline-block; transition: all 0.3s ease;"
       onmouseover="this.style.backgroundColor='#023e8a'"
       onmouseout="this.style.backgroundColor='#0077b6'">
        En savoir plus
    </a>
</section>


</section>


<section class="panel theme--white" data-type="section" id="academics" data-modular-content data-js="panel" data-index="10">
<header>

<h2 class="center">Academique</h2>
<p>Préparer les étudiants à apporter des contributions significatives à la société en tant que citoyens engagés et leaders dans un monde complexe</p>
</header>


    <section class="panel" data-type="highlights" id="school-highlights" data-width="full" data-posts-per-row="3">
    
        <div class="grid-container">
            <section class='highlight'>
                <figure class="landscape">
                    <picture>
                        <img src="img.jpg" alt="Trois étudiants travaillant ensemble dans un laboratoire de robotique" />
                    </picture>
                </figure>
                <h3>Éducation de premier cycle</h3>
                <p>Des expériences d'apprentissage enrichissantes offrant une base solide en arts libéraux et une expertise approfondie dans les domaines d'étude.</p>
                <p class="highlight-link"><a class="jump-link" href="#">En savoir plus<span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
            </section>
            
            <section class='highlight'>
                <figure class="landscape">
                    <picture>
                        <img src="img2.jpg" alt="Paysage marin et station de recherche" />
                    </picture>
                </figure>
                <h3>Éducation de deuxième cycle</h3>
                <p>Des opportunités inégalées pour contribuer à l'avancement de domaines entiers de connaissances.</p>
                <p class="highlight-link"><a class="jump-link" href="#">En savoir plus<span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
            </section>
            
            <section class='highlight'>
                <figure class="landscape">
                    <picture>
                        <img src="imag.jpg" alt="Personne s'exprimant lors d'une conférence" />
                    </picture>
                </figure>
                <h3>Contribuer à l'impact</h3>
                <p>Formation continue pour adultes, programmes exécutifs et professionnels, ainsi que des initiatives pour les élèves du primaire et du secondaire.</p>
                <p class="highlight-link"><a class="jump-link" href="#">En savoir plus<span class="fa fa-angle-right" aria-hidden="true"></span></a></p>
            </section>
        </div>
    
    </section>





















<section class="panel" data-type="wysiwyg" id="seven-schools-in-which-to-pursue-your-passions" data-width="full">

    
<div class="content">
<h3 style="text-align: center;">Nos Atous </h3>
<ul class="inline-links large-text" style="text-align: center;">
<li><a href="#">Département Réseaux & Systèmes numériques</a></li>
<li><a href="#">Métiers de l'Audiovisuel</a></li>
<li><a href="#">Management des TIC</a></li>
<li><a href="#">Management et Commerce</a></li>
<li><a href="#">CybertSecurité </a></li>
<li><a href="#">Base données</a></li>
<li><a href="#">Object-Connecté</a></li>
</ul>
</div>


</section>



<section class="panel" data-type="call-to-action" id="academics-cta">

    


</section>

</section>







<section class="panel theme--stone" data-type="profile" id="tadashi-tokieda" data-modular-content data-js="panel" data-index="11" data-bg-img="true">


    
<h2 class="sr-only-element">Profile of Tadashi Tokieda</h2>

<picture aria-hidden="true" tabindex="-1">
<source srcset=" DG_banner.jpg 2000w, DG_banner.jpg 1023w, DG_banner.jpg 767w" />
<img class="bg-img" role="presentation" alt="Description de l'image" src="DG_banner.jpg" />
</picture>
<div class="content">
    <img width="240" height="240" src="wp-content/uploads/2024/08/Tadashi-homesite-profile-240x240.png" class="attachment-thumbnail size-thumbnail" alt="" decoding="async" fetchpriority="high" srcset="https://www.stanford.edu/wp-content/uploads/2024/08/Tadashi-homesite-profile-240x240.png 240w, https://www.stanford.edu/wp-content/uploads/2024/08/Tadashi-homesite-profile.png 500w" sizes="(max-width: 240px) 100vw, 240px" />  <p></p>
  <div class="attribution">
    <h3>Tadashi Tokieda</h3>
    <p>Professor (Teaching) of Mathematics</p>
    <a class="jump-link" href="#">More<span class="fa fa-angle-right" aria-hidden="true"></span></a>  </div>
</div>



</section>











<section class="panel theme--white" data-type="section" id="research" data-modular-content data-js="panel" data-index="14">

    <header>

      <h2 class="center">DG INPTIC - Landry BADIALI</h2>
      <p>Un institut d'excellence dédié à la formation et à l'innovation</p>
</header>

  <section class="panel" data-type="facts" id="research-facts" data-width="full" data-posts-per-row="3">

    <hr aria-hidden='true'/>
<div class="grid-container">
  <figure>
    <strong>4 Départements</strong> spécialisés en TIC et Télécommunications
  </figure>
  <figure>
    <strong>1 Bibliothèque</strong> numérique avec plus de 10 000 ressources
  </figure>
  <figure>
    <strong>Plusieurs Laboratoires</strong> de recherche et d'innovation
  </figure>
</div>
<hr aria-hidden='true'/>

  </section><!-- panel Research Facts -->


  <!--
  <section class="panel" data-type="call-to-action" id="research-cta">
    <a href="https://www.inptic-ga.org/" data-ga-category="Call to action" data-ga-action="More about research ">Visite virtuel </a>
  </section>
  -->
  <section class="panel" data-type="call-to-action" id="news-cat" style=" padding: 20px; text-align: center; border-radius: 8px;">
    <a href="https://www.inptic-ga.org/" 
       data-ga-category="Call to action" 
       data-ga-action="More campus news"
       style="color: white; text-decoration: none; font-size: 18px; font-weight: bold; padding: 10px 20px; background-color: #0077b6; border-radius: 5px; display: inline-block; transition: all 0.3s ease;"
       onmouseover="this.style.backgroundColor='#023e8a'"
       onmouseout="this.style.backgroundColor='#0077b6'">
       Visite virtuel
    </a>
</section>

  <!-- panel Research CTA -->



</section>







<section class="panel theme--fog" data-type="section" id="upcoming-events" data-modular-content data-js="panel" data-index="17">

    <header>

<h2 class="center">Événements à venir</h2>
</header>

<style>
        .events-widget {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem;
        }

        .event-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateY(50px);
            cursor: pointer;
        }

        .event-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        .event-card p {
            color: #666;
            margin-bottom: 0.5rem;
        }

        .event-card time {
            display: block;
            color: #888;
            font-size: 0.9rem;
        }
    </style>

    <!-- Import GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
</head>
<body>

<section class="panel" data-type="events" id="events-inptic" data-width="full">
    <div class="panel__content events-widget">
        <div id="events-widget-inptic" class="events-widget">
            <div class="event-card">
                <h3>Journée Portes Ouvertes</h3>
                <p>Découvrez nos formations en TIC</p>
                <time>15 février 2025</time>
            </div>
            <div class="event-card">
                <h3>Pour toutes vos formations </h3>
                <p>dans les Technologies de l’Information et de la Communication (TIC)</p>
                <time>1 mars 2025</time>
            </div>
            <div class="event-card">
                <h3>Conférence Cybersécurité</h3>
                <p>Enjeux et défis actuels</p>
                <time>20 mars 2025</time>
            </div>
            <div class="event-card">
                <h3>Forum Entreprises</h3>
                <p>Rencontrez vos futurs employeurs</p>
                <time>5 avril 2025</time>
            </div>
        </div>
    </div>
</section>

<script>
    // Enregistrer le plugin ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Animation d'entrée des cartes
    gsap.utils.toArray('.event-card').forEach((card, i) => {
        gsap.fromTo(card, 
            {
                opacity: 0,
                y: 50
            },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: card,
                    start: "top bottom-=100",
                    toggleActions: "play none none reverse"
                },
                delay: i * 0.2
            }
        );

        // Animation au survol
        card.addEventListener('mouseenter', () => {
            gsap.to(card, {
                scale: 1.05,
                boxShadow: "0 10px 20px rgba(0,0,0,0.15)",
                duration: 0.3
            });
        });

        card.addEventListener('mouseleave', () => {
            gsap.to(card, {
                scale: 1,
                boxShadow: "0 4px 15px rgba(0,0,0,0.1)",
                duration: 0.3
            });
        });

        // Animation de clic
        card.addEventListener('click', () => {
            gsap.timeline()
                .to(card, {
                    scale: 0.95,
                    duration: 0.1
                })
                .to(card, {
                    scale: 1,
                    duration: 0.1
                });
        });
    });

    // Animation du titre de chaque carte
    gsap.utils.toArray('.event-card h3').forEach(title => {
        gsap.from(title, {
            y: 20,
            opacity: 0,
            duration: 1,
            scrollTrigger: {
                trigger: title,
                start: "top bottom-=50",
                toggleActions: "play none none reverse"
            }
        });
    });
</script>
<!-- panel  -->


<!--
  <section class="panel" data-type="call-to-action" id="call-to-action-16">
    <a href="https://www.facebook.com/profile.php?id=61557159190234" data-ga-category="Call to action" data-ga-action="More events">Plus Événements</a>
  </section>
-->
  <section class="panel" data-type="call-to-action" id="news-cat" style=" padding: 20px; text-align: center; border-radius: 8px;">
    <a href="https://www.facebook.com/profile.php?id=61557159190234" 
       data-ga-category="Call to action" 
       data-ga-action="More campus news"
       style="color: white; text-decoration: none; font-size: 18px; font-weight: bold; padding: 10px 20px; background-color: #0077b6; border-radius: 5px; display: inline-block; transition: all 0.3s ease;"
       onmouseover="this.style.backgroundColor='#023e8a'"
       onmouseout="this.style.backgroundColor='#0077b6'">
       Plus Événements
    </a>
</section>
  
  <!-- panel  -->



</section>






</div>
</section>


<section class="panel" data-type="call-to-action" id="health-cta">



</section>


</section>


























<section class="panel theme--choco" data-type="profile" id="yannie-tan" data-modular-content data-js="panel" data-index="21" data-bg-img="true">
    <h2 class="sr-only-element">Profile of Yannie Tan</h2>
    
    <picture aria-hidden="true" tabindex="-1">
        
        <source srcset="
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner.png 2000w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-767x384.png 767w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-1023x512.png 1023w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-768x384.png 768w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-1536x768.png 1536w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-575x288.png 575w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-1499x750.png 1499w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-600x300.png 600w, 
            https://www.stanford.edu/wp-content/uploads/2024/08/yannie-banner-500x250.png 500w
        " />
        
        <img class="bg-img" role="presentation" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"/>
    </picture>

    <div class="content">
        <img width="240" height="240" src="wp-content/uploads/2024/08/yannie-240x240.png" 
             class="attachment-thumbnail size-thumbnail" alt="" decoding="async" 
             srcset="#" 
             sizes="(max-width: 240px) 100vw, 240px" />  

        <p>
            &#8220;I think about all the projects that students throw themselves at quarter after quarter, 
            just really expanding and stretching their minds. &#8230; Stanford allows you to experience 
            evolutions of yourself.&#8221;
        </p>
    </div>
</section>




<section class="panel theme--white" data-type="section" id="campus-life" data-modular-content data-js="panel" data-index="24">
    <header>
        <h2 class="center">Clubs et Communautés à l'INPTIC</h2>
        <p>Rejoignez une communauté dynamique d'étudiants passionnés par l'innovation et la technologie.</p>
    </header>

    <section class="panel theme--fog" data-type="section" id="clubs" data-modular-content data-js="panel" data-index="27">
        <section class="panel" data-type="highlights" id="highlights-25" data-width="full" data-posts-per-row="3">
            <div class="grid-container">
                <section class='highlight'>
                    <figure class="landscape">
                        <img src="images/inptic_foot1.jpeg" alt="Membres du Coding Club en pleine session" />
                    </figure>
                    <h3> INPTIC, Culture,</h3>
                    <p>Tournoi des grandes écoles : la 3ème place pour l'INPTIC</p>
                    <p class="highlight-link">
                        <a class="jump-link" href="https://inptic-ga.org/actu_controller/detail_actu/15">En savoir plus<span class="fa fa-angle-right" aria-hidden="true"></span></a>
                    </p>
                </section>

                <section class='highlight'>
                    <figure class="landscape">
                        <img src="images/huawei.jpeg" alt="Projet de robotique par les étudiants" />
                    </figure>
                    <h3>Visite du Chinois Huawei à l'INPTIC</h3>
                    <p>Une rencontre entre l'INPTIC et le Chinois Huawei s'est tenue le vendredi 25 Novembre 2022.</p>
                    <p class="highlight-link">
                        <a class="jump-link" href="https://inptic-ga.org/actu_controller/detail_actu/19">Découvrir<span class="fa fa-angle-right" aria-hidden="true"></span></a>
                    </p>
                </section>

                <section class='highlight'>
                    <figure class="landscape">
                        <img src="images/sing.jpg" alt="Atelier sur la cybersécurité" />
                    </figure>
                    <h3>Remise des prix aux étudiants de l'INPTIC qui façonnent l'avenir numérique du Gabon</h3>
                    <p>Cet événement, marqué par une cérémonie de remise de prix</p>
                    <p class="highlight-link">
                        <a class="jump-link" href="https://gabonmediatime.com/techies-awards-trois-startups-gabonaises-recompensees-pour-leur-innovation/">Voir plus<span class="fa fa-angle-right" aria-hidden="true"></span></a>
                    </p>
                </section>
            </div>
        </section>
        <!--
        <section class="panel" data-type="call-to-action" id="more-about-clubs">
            <a href="#clubs" data-ga-category="Call to action" data-ga-action="More about clubs">Découvrir tous les clubs</a>
        </section>
        -->

        <section class="panel" data-type="call-to-action" id="news-cat" style=" padding: 20px; text-align: center; border-radius: 8px;">
            <a href="#" 
              data-ga-category="Call to action" 
              data-ga-action="More campus news"
              style="color: white; text-decoration: none; font-size: 18px; font-weight: bold; padding: 10px 20px; background-color: #0077b6; border-radius: 5px; display: inline-block; transition: all 0.3s ease;"
              onmouseover="this.style.backgroundColor='#023e8a'"
              onmouseout="this.style.backgroundColor='#0077b6'">
              Découvrir tous les clubs
            </a>
        </section>

    </section>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    gsap.from(".highlight", {
        opacity: 0,
        y: 50,
        duration: 1,
        stagger: 0.3,
        ease: "power3.out"
    });
</script>

<!-- panel More About Athletics -->



</section>


<section class="panel theme--white" data-type="section" id="admission" data-modular-content data-js="panel" data-index="31">

  <header>
    <h2 class="center">Admission</h2>
    <p>Offrant une liberté extraordinaire pour explorer, collaborer et relever des défis.</p>
  </header>

  <section class="panel" data-type="hero-image" id="welcome-to-inptic" data-width="full">
    <figure data-text-loc-v="bottom" data-text-loc-h="left" data-text-display="hover">
      <picture>
        <source srcset="home.jpg 2000w, home.jpg 1023w, home.jpg 767w" />
        <img class="bg-img" role="presentation" alt="Belle vue naturelle" src="home.jpg" />
      </picture>
    </figure><!-- hero-image -->
  </section><!-- panel Welcome to INPTIC -->

  <section class="panel" data-type="highlights" id="admission-highlights" data-width="full" data-posts-per-row="2">
    <div class="grid-container">
      <section class="highlight">
        <h3>Explorez les possibilités d'une éducation à l'INPTIC en planifiant votre parcours universitaire.</h3>
        <p>Nous recherchons des étudiants distinctifs qui font preuve d'une grande énergie et curiosité dans leurs cours, activités, projets, recherches et vies.</p>
      </section>
      <section class="highlight">
        <h3>L'INPTIC répond aux besoins financiers de tous les étudiants admis qui remplissent les critères d'assistance.</h3>
        <p>Plus des deux tiers des étudiants bénéficient d'une forme d'aide financière. En général, les frais de scolarité sont couverts pour les familles ayant un revenu à 150 000 FCFA.</p>
      </section>
    </div>
  </section><!-- panel Admission Highlights -->

  <!--
  <section class="panel" data-type="call-to-action" id="admission-cta">
    <a href="student-gateway/index.php" >Alors rejoignez-nous</a>
  </section>
  -->

  <section class="panel" data-type="call-to-action" id="news-cat" style=" padding: 20px; text-align: center; border-radius: 8px;">
    <a href="student-gateway/index.php" 
       data-ga-category="Call to action" 
       data-ga-action="More campus news"
       style="color: white; text-decoration: none; font-size: 18px; font-weight: bold; padding: 10px 20px; background-color: #0077b6; border-radius: 5px; display: inline-block; transition: all 0.3s ease;"
       onmouseover="this.style.backgroundColor='#023e8a'"
       onmouseout="this.style.backgroundColor='#0077b6'">
       Alors rejoignez-nous
    </a>
</section>
  
  <!-- panel Call to Action -->

</section><!-- panel Admission -->

</main>


































<footer data-ga-category="Footer">
    <section id="footer__pre-footer" data-ga-action="Pre-footer">
        <div class="social">
          <ul style="list-style: none; display: flex; gap: 15px; padding: 0;">
            <li style="display: inline-block;">
                <a title="Facebook" class="xsu-link" href="https://www.facebook.com/profile.php?id=61557159190234"
                  style="text-decoration: none; display: flex; align-items: center;">
                    <img src="images/facebook_logo_icon.png" alt="Facebook" class="social-icon" 
                        style="width: 40px; height: 40px; transition: transform 0.3s ease-in-out;">
                </a>
            </li>
            <li style="display: inline-block;">
                <a title="YouTube" class="xsu-link" href="https://www.youtube.com/@INPTICGabonOfficiel"
                  style="text-decoration: none; display: flex; align-items: center;">
                    <img src="images/youtube.png" alt="YouTube" class="social-icon" 
                        style="width: 35px; height: 35px; transition: transform 0.3s ease-in-out;">
                </a>
            </li>
            <li style="display: inline-block;">
                <a title="TikTok" class="xsu-link" href="https://www.tiktok.com/@inptic.gabon.offi?_r=1&_d=eccl4lgf7g5ikc&sec_uid=MS4wLjABAAAAL4X2IeqkfwXT2-4JqMudZFXnsCC0mfFZBxeflYrswQDxN-aVVfMb2jrrI3Wf1Cd7&share_author_id=7379897303249601542&sharer_language=fr&source=h5_m&u_code=dehhja2204551i&timestamp=1738334487&user_id=6876214475914855429&sec_user_id=MS4wLjABAAAAwymTHsXxERS3Mrda0-qa5LRzWmVR1LJZmawCfPU1ZIAJ8dC4kmJCeGDg6ReVQV-R&utm_source=more&utm_campaign=client_share&utm_medium=android&share_iid=7463474399137957638&share_link_id=52c33d57-267f-4101-87dc-8bf1214050c1&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b6880%2Cb5836&social_share_type=5&enable_checksum=1"
                    style="text-decoration: none; display: flex; align-items: center;">
                    <img src="images/tiktok.png" alt="TikTok" class="social-icon" 
                        style="width: 35px; height: 35px; transition: transform 0.3s ease-in-out;">
                </a>
            </li>
          </ul>
        </div>
    </section>

    <script>
      // Animation GSAP pour les icônes
      document.querySelectorAll(".social-icon").forEach(icon => {
          icon.addEventListener("mouseenter", () => {
              gsap.to(icon, { scale: 1.3, duration: 0.3, ease: "power1.out" });
          });

          icon.addEventListener("mouseleave", () => {
              gsap.to(icon, { scale: 1, duration: 0.3, ease: "power1.out" });
          });
      });
    </script>
    <!--
    <section id="footer__global-footer" data-ga-action="Global footer">
        <div id="global-footer__brand">
            <a href="index.php" class="su-brand">INPTIC<br /></a>
        </div>
        <nav id="global-footer__nav" aria-label="menu du pied de page global">
            <ul id="global-policy-links">
                <li><a href="site/terms/index.html" title="Conditions d'utilisation des sites">Conditions d'utilisation</a></li>
                <li><a href="site/privacy/index.html" title="Politique de confidentialité et cookies">Confidentialité</a></li>
                <li><a href="https://uit.stanford.edu/security/copyright-infringement" title="Signaler une violation de copyright">Droits d'auteur</a></li>
                <li><a href="https://adminguide.stanford.edu/chapter-1/subchapter-5/policy-1-5-4" title="Propriété et utilisation des marques de l'INPTIC">Marques déposées</a></li>
                <li><a href="https://studentservices.stanford.edu/more-resources/student-policies/non-academic/non-discrimination" title="Politique de non-discrimination">Non-discrimination</a></li>
                <li><a href="site/accessibility/index.html" title="Signaler des problèmes d'accessibilité">Accessibilité</a></li>
            </ul>
        </nav>
        <div id="global-footer__info">
            <p class="vcard">
                <span aria-hidden="true">©</span>
                <span class="sr-only-text">Copyright </span>
                <span class="fn org">INPTIC</span>. &nbsp;
                <span class="adr">
                    <span class="locality">Libreville</span>,
                    <span class="region">Gabon</span>
                    <span class="postal-code">BP 1234</span>.
                </span>
            </p>
        </div>
    </section>
    -->
    <footer id="footer__global-footer" style="background-color:rgb(144, 199, 239); color: #023e8a; padding: 10px 20px; text-align: center;">
        <div id="global-footer__brand">
            <a href="index.php" class="su-brand" style="color: #023e8a; font-size: 24px; font-weight: bold; text-decoration: none; transition: color 0.3s ease-in-out;">
                INPTIC
            </a>
        </div>

        <nav id="global-footer__nav" aria-label="menu du pied de page global">
            <ul id="global-policy-links" style="list-style: none; padding: 0; display: flex; flex-wrap: wrap; justify-content: center; gap: 15px; margin-top: 15px;">
                <li><a style="text-decoration: none;" href="#" title="Conditions d'utilisation des sites" class="footer-link">Conditions d'utilisation</a></li>
                <li><a style="text-decoration: none;" href="site/privacy/index.html" title="Politique de confidentialité et cookies" class="footer-link">Confidentialité</a></li>
                <li><a style="text-decoration: none;" href="#t" title="Signaler une violation de copyright" class="footer-link">Droits d'auteur</a></li>
                <li><a style="text-decoration: none;" href="#" title="Propriété et utilisation des marques de l'INPTIC" class="footer-link">Marques déposées</a></li>
                <li><a style="text-decoration: none;" href="#" title="Politique de non-discrimination" class="footer-link">Non-discrimination</a></li>
                <li><a style="text-decoration: none;" href="#" class="footer-link">Accessibilité</a></li>
            </ul>
        </nav>

        <div id="global-footer__info" style="margin-top: 20px; font-size: 14px;">
            <p class="vcard">
                <span aria-hidden="true">©</span>
                <span class="sr-only-text">Copyright </span>
                <span class="fn org">INPTIC</span>. &nbsp;
                <span class="adr">
                    <span class="locality">Libreville</span>,
                    <span class="region">Gabon</span>
                    <span class="postal-code">BP 1234</span>.
                </span>
            </p>
        </div>

        <style>
            /* Animation des liens au survol */
            .footer-link {
                color: #023e8a;
                text-decoration: none;
                position: relative;
                font-weight: 500;
                transition: color 0.3s ease-in-out;
            }

            .footer-link::after {
                content: "";
                display: block;
                width: 0;
                height: 2px;
                background: #023e8a;
                transition: width 0.3s ease-in-out;
                position: absolute;
                bottom: -5px;
                left: 50%;
                transform: translateX(-50%);
                
            }

            .footer-link:hover {
                color: #0077b6;
                text-decoration: none;
            }

            .footer-link:hover::after {
                width: 100%;
                text-decoration: none;
            }

            /* Animation du logo INPTIC au survol */
            .su-brand:hover {
                color: #0077b6;
                text-decoration: none;
            }
        </style>
    </footer>

</footer>













<!-- GTM Container placement set to footer -->
<!-- Google Tag Manager (noscript) -->
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T4N2WTT" height="0" width="0" style="display:none;visibility:hidden" aria-hidden="true"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><script type="text/javascript" src="wp-content/plugins/awesome-weather-pro/js/awesome-weather-widget-frontend4963.js?ver=1.1" id="awesome_weather_pro-js"></script>
<script type="text/javascript" src="wp-content/plugins/awesome-weather-pro/js/js-cookie4963.js?ver=1.1" id="js-cookie-js"></script>
<script type="text/javascript" src="wp-content/themes/homesite17/js/dist/master.minb5ff.js?ver=2021.04.15.11.26" id="homesite17-master-scripts-js"></script>

<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"NRJS-a5e9036dbeb441881bb","applicationID":"1123999777","transactionName":"MlcHYUJVWxFVBxBRCgsdJFZEXVoMGwIWVwsRHxVUV1E=","queueTime":0,"applicationTime":369,"atts":"HhAEFwpPSB8=","errorBeacon":"bam.nr-data.net","agent":""}</script>
  
  

<!-- Ajout des styles et scripts du chatbot -->
<link rel="stylesheet" href="bot/style.css?v=1.0"> <!-- Added versioning to ensure style consistency -->

  <div id="chat-popup" class="chat-popup">
    <div class="chat-header" style="display: flex; align-items: center; justify-content: space-between; padding: 10px;color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
        <img src="tchat-bot/logoinptic.png" alt="INPTIC 2025" class="logo" style="width: 50px; height: auto; margin-right: auto;">
        <h2 style="flex-grow: 1; text-align: center; margin: 0;">INPTIC 2025</h2>
        <button id="close-chat" class="close-btn" style="background: none; border: none; color: white; font-size: 20px; cursor: pointer; margin-left: auto; box-shadow: none;">&times;</button>
    </div>
    <div class="chat-body">
        <p>Bonjour ! Posez moi une question</p>
        <button class="chat-option">Quels sont les prérequis pour postuler au concours d'entrée ?</button>
        <button class="chat-option">Quelles sont les filières disponibles à l’INPTIC ?</button>
        <button class="chat-option">Quels sont les frais d’inscription après le concours ?</button>
        <button class="chat-option">Quelles sont les options pour ceux qui souhaitent postuler en Licence 2 ou Licence 3 ?</button>
        <button class="chat-option">Comment puis-je suivre ma candidature sur le portail ?</button>
        <button class="chat-option">Quels sont les frais pour les formations professionnelles ?</button>
        <button class="chat-option">Puis-je postuler à une formation professionnelle sans baccalauréat ?</button>
        <button class="chat-option">Quelles certifications peuvent être obtenues après une formation professionnelle ?</button>
    </div>
    <div class="chat-footer">
        <input type="text" placeholder="Poser une question" id="user-input">
        <button id="send-btn">Envoyer</button>
    </div>
  </div>

  <div id="open-chat" class="open-chat" style="display: flex;margin-bottom: 35px;">
    <img src="tchat-bot/logoinptic.png" alt="INPTIC 2025" class="chat-icon">
  </div>

  <script src="tchat-bot/script.js"></script>
  <!-- End Generation Here -->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chatPopup = document.getElementById('chat-popup');
        const openChat = document.getElementById('open-chat');
        const closeChat = document.getElementById('close-chat');

        openChat.addEventListener('click', function() {
            gsap.to(chatPopup, { duration: 0.3, opacity: 1, display: 'block', ease: 'power2.out' });
        });

        closeChat.addEventListener('click', function() {
            gsap.to(chatPopup, { duration: 0.3, opacity: 0, display: 'none', ease: 'power2.in' });
        });
    });
</script>





































    

</body>
</html>
