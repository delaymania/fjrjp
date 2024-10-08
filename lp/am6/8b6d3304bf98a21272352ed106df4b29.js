/**
 * letteranimation.js
 * Current Version: 1.0.2
 * https://www.cssanimatio.io
 * Created and maintained by: Pavel
 * Find me at: https://www.linkedin.com/in/yesiamrocks/
 * Email: hello@cssanimation.io
 * Github: https://github.com/yesiamrocks/cssanimation.io
 * Title: A CSS Animation Library for Developers and Ninjas
 * Copyright (c) 2017 Pavel
 * License: cssanimation.io is licensed under the MIT license
 **/
 function animateSequence(){for(var n=document.getElementsByClassName("sequence"),a=0;a<n.length;a++){var e=n[a],t=e.innerHTML;t=t.trim();var i="",m=100;for(l=0;l<t.length;l++)" "!=t[l]?(i+='<span style="animation-delay:'+m+"ms; -moz-animation-delay:"+m+"ms; -webkit-animation-delay:"+m+'ms; ">'+t[l]+"</span>",m+=150):i+=t[l];e.innerHTML=i}}function animateRandom(){for(var n=document.getElementsByClassName("random"),a=0;a<n.length;a++){var e=n[a],t=e.innerHTML;t=t.trim();var i=70,m=new Array,o=new Array;for(j=0;j<t.length;j++){for(;;){var r=getRandomInt(0,t.length-1);if(-1==m.indexOf(r))break}m[j]=r}for(l=0;l<m.length;l++){var s="",d=m[l];" "!=t[d]?(s='<span style="animation-delay:'+i+"ms; -moz-animation-delay:"+i+"ms; -webkit-animation-delay:"+i+'ms; ">'+t[d]+"</span>",o[d]=s):o[d]=t[d],i+=80}o=o.join(""),e.innerHTML=o}}function getRandomInt(n,a){return Math.floor(Math.random()*(a-n+1))+n}window.onload=function(){animateSequence(),animateRandom()};
;