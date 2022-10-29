/**
 * Jquery.rcounter.js 
 * Version: 1.0.0
 * Author: Sharifur
 * Inspired By Benjamin Intal
 * */
 !function(t){"use strict";t.fn.rCounter=function(n){var i=t.extend({duration:20,easing:"swing"},n);return this.each(function(){var n=t(this),r=function(){var t=[];n.length;for(var r=n.text(),e=/[,\-]/.test(r),o=/[,\-]/.test(r),r=r.replace(/,/g,""),a=i.duration,f=o?(r.split(".")[1]||[]).length:0,s=a;s>=1;s--){var u=parseInt(r/a*s);if(o&&(u=parseFloat(r/a*s).toFixed(f)),e)for(;/(\d+)(\d{3})/.test(u.toString());)u=u.toString().replace(/(\d+)(\d{3})/,"$1,$2");t.unshift(u)}var c=function(){n.text(t.shift()),setTimeout(c,i.duration)};setTimeout(c,i.duration)};n.waypoint(r,{offset:"100%",triggerOnce:!0})})}}(jQuery);