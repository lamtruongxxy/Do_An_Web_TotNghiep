/*@shinsenter/defer.js*/
!function(e,o,n,t,i,c){function r(e,n){n=n||80,c?t(e,n):i.push(e,n)}c=/p/.test(o.readyState),e.defer=r,e.deferscript=function(n,t,e,i){r(function(e){o.getElementById(t)||(e=o.createElement('SCRIPT'),t&&(e.id=t),i&&(e.onload=i),e.src=n,o.head.appendChild(e))},e)},e.addEventListener('on'+n in e?n:'load',function(){for(c=!0;i.length;)t(i.shift(),i.shift())})}(this,document,'pageshow',setTimeout,[]),function(s,l){var e='jQuery',u='IntersectionObserver',h='forEach',m=Function(),p=s.defer||m;function n(a,f){return f||(f=['srcset','src','data']),function(n,e,i,o,t,c,r){function d(n,t){!1!==o.call(n,n)&&(t=n.dataset||{},f[h](function(e){t[e]&&(n[e]=t[e])})),n.className+=' '+i}i=i||'lazied',o=o||m,r=u in s?(c=new s[u](function(e){e[h](function(e,n){e.isIntersecting&&(n=e.target)&&(c.unobserve(n),d(n))})},t)).observe.bind(c):d,p(function(e){e=(n||a+'.lazy')+':not(.'+i+')',[].slice.call(l.querySelectorAll(e))[h](r)},e)}}s[e]||(s.$=s[e]=p),s.deferstyle=function(n,t,e,i){p(function(e){l.getElementById(t)||((e=l.createElement('LINK')).rel='stylesheet',t&&(e.id=t),i&&(e.onload=i),e.href=n,l.head.appendChild(e))},e)},s.deferimg=n('IMG'),s.deferiframe=n('IFRAME')}(this,document);