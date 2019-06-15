{{-- apply theme --}}
@extends('layouts.app')


{{-- include content --}}
@section("content")
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        {!! Form::open(['route' => 'bus.store', 'data-parsley-validate'=>'']) !!}
                 
            Bus Registration number :- <input type="text" class="form-control" placeholder="ex : NA-2200" name="b_regno" required data-parsley-maxlength="10" data-parsley-maxlength-message="Regitration number is too long. It should have 7 characters or fewer." data-parsley-trigger="keyup">
            <br>
            {{-- <input type="text" class="form-control" placeholder="Enter your role" name="role" required> --}}
            <br><br>
            Type :- <input type="text" class="form-control" placeholder="Enter vehicle type" name="v_type" required data-parsley-maxlength="30" data-parsley-maxlength-message="Vehicle type is too long ." required data-parsley-trigger="keyup">
            <br>
            Model :- <input type="text" class="form-control" placeholder="Enter vehicle model" name="m_type" required data-parsley-maxlength="30" data-parsley-maxlength-message="Vehicle model is too long ."required data-parsley-trigger="keyup">
            <br>
                      
            <input type="reset" class="btn btn-info waves-effect waves-light my-1" value="Clear">

            
            <input type="submit" class="btn btn-success waves-effect waves-light" value="Save bus">
            
        {!! Form::close() !!}
    </div>
    <div class="col-sm-3"></div>
</div>

<script>
    !function(t){"use strict";var e=e||{},n=document.querySelectorAll.bind(document);function a(t){var e="";for(var n in t)t.hasOwnProperty(n)&&(e+=n+":"+t[n]+";");return e}var i={duration:750,show:function(t,e){if(2===t.button)return!1;var n=e||this,o=document.createElement("div");o.className="waves-ripple",n.appendChild(o);var r,s,u,c,d,l=(c={top:0,left:0},d=(r=n)&&r.ownerDocument,s=d.documentElement,void 0!==r.getBoundingClientRect&&(c=r.getBoundingClientRect()),u=function(t){return null!==(e=t)&&e===e.window?t:9===t.nodeType&&t.defaultView;var e}(d),{top:c.top+u.pageYOffset-s.clientTop,left:c.left+u.pageXOffset-s.clientLeft}),m=t.pageY-l.top,f=t.pageX-l.left,p="scale("+n.clientWidth/100*10+")";"touches"in t&&(m=t.touches[0].pageY-l.top,f=t.touches[0].pageX-l.left),o.setAttribute("data-hold",Date.now()),o.setAttribute("data-scale",p),o.setAttribute("data-x",f),o.setAttribute("data-y",m);var v={top:m+"px",left:f+"px"};o.className=o.className+" waves-notransition",o.setAttribute("style",a(v)),o.className=o.className.replace("waves-notransition",""),v["-webkit-transform"]=p,v["-moz-transform"]=p,v["-ms-transform"]=p,v["-o-transform"]=p,v.transform=p,v.opacity="1",v["-webkit-transition-duration"]=i.duration+"ms",v["-moz-transition-duration"]=i.duration+"ms",v["-o-transition-duration"]=i.duration+"ms",v["transition-duration"]=i.duration+"ms",v["-webkit-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",v["-moz-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",v["-o-transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",v["transition-timing-function"]="cubic-bezier(0.250, 0.460, 0.450, 0.940)",o.setAttribute("style",a(v))},hide:function(t){o.touchup(t);var e=this,n=(e.clientWidth,null),r=e.getElementsByClassName("waves-ripple");if(!(r.length>0))return!1;var s=(n=r[r.length-1]).getAttribute("data-x"),u=n.getAttribute("data-y"),c=n.getAttribute("data-scale"),d=350-(Date.now()-Number(n.getAttribute("data-hold")));d<0&&(d=0),setTimeout(function(){var t={top:u+"px",left:s+"px",opacity:"0","-webkit-transition-duration":i.duration+"ms","-moz-transition-duration":i.duration+"ms","-o-transition-duration":i.duration+"ms","transition-duration":i.duration+"ms","-webkit-transform":c,"-moz-transform":c,"-ms-transform":c,"-o-transform":c,transform:c};n.setAttribute("style",a(t)),setTimeout(function(){try{e.removeChild(n)}catch(t){return!1}},i.duration)},d)},wrapInput:function(t){for(var e=0;e<t.length;e++){var n=t[e];if("input"===n.tagName.toLowerCase()){var a=n.parentNode;if("i"===a.tagName.toLowerCase()&&-1!==a.className.indexOf("waves-effect"))continue;var i=document.createElement("i");i.className=n.className+" waves-input-wrapper";var o=n.getAttribute("style");o||(o=""),i.setAttribute("style",o),n.className="waves-button-input",n.removeAttribute("style"),a.replaceChild(i,n),i.appendChild(n)}}}},o={touches:0,allowEvent:function(t){var e=!0;return"touchstart"===t.type?o.touches+=1:"touchend"===t.type||"touchcancel"===t.type?setTimeout(function(){o.touches>0&&(o.touches-=1)},500):"mousedown"===t.type&&o.touches>0&&(e=!1),e},touchup:function(t){o.allowEvent(t)}};function r(e){var n=function(t){if(!1===o.allowEvent(t))return null;for(var e=null,n=t.target||t.srcElement;null!==n.parentElement;){if(!(n instanceof SVGElement||-1===n.className.indexOf("waves-effect"))){e=n;break}if(n.classList.contains("waves-effect")){e=n;break}n=n.parentElement}return e}(e);null!==n&&(i.show(e,n),"ontouchstart"in t&&(n.addEventListener("touchend",i.hide,!1),n.addEventListener("touchcancel",i.hide,!1)),n.addEventListener("mouseup",i.hide,!1),n.addEventListener("mouseleave",i.hide,!1))}e.displayEffect=function(e){"duration"in(e=e||{})&&(i.duration=e.duration),i.wrapInput(n(".waves-effect")),"ontouchstart"in t&&document.body.addEventListener("touchstart",r,!1),document.body.addEventListener("mousedown",r,!1)},e.attach=function(e){"input"===e.tagName.toLowerCase()&&(i.wrapInput([e]),e=e.parentElement),"ontouchstart"in t&&e.addEventListener("touchstart",r,!1),e.addEventListener("mousedown",r,!1)},t.Waves=e,document.addEventListener("DOMContentLoaded",function(){e.displayEffect()},!1)}(window);
</script>

@endsection