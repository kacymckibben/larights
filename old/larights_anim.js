 function init_deportationdefensecolumnc()
 {
 	var div      = document.getElementById('deportationdefensecolumnc');
        if(div)
        {
 	var tw = new OpacityTween(div,Tween.regularEaseInOut,0,100,.5);
 	div.startf = function ()
  	             {
                        div.style.overflow = 'visible';
  	                tw.onMotionFinished = undefined;
  	                tw.continueTo(100, .5);
  	                div.style.display = 'block';
                        
  	             }
        div.endf   = function ()
  	             {
                        tw.onMotionFinished = function(){ div.style.display = 'none'; tw.onMotionFinished = undefined; }
  	                tw.continueTo(0, .5);
  	             }
        }
 }
 function init_i53deferredactionforchildhoo()
 {
 	var div      = document.getElementById('i53deferredactionforchildhoo');
        if(div)
        {
 	var tw = new OpacityTween(div,Tween.regularEaseInOut,0,100,.5);
 	div.startf = function ()
  	             {
                        div.style.overflow = 'visible';
  	                tw.onMotionFinished = undefined;
  	                tw.continueTo(100, .5);
  	                div.style.display = 'block';
                        
  	             }
        div.endf   = function ()
  	             {
                        tw.onMotionFinished = function(){ div.style.display = 'none'; tw.onMotionFinished = undefined; }
  	                tw.continueTo(0, .5);
  	             }
        }
 }
 function init_asylumcolumnclickshow()
 {
 	var div      = document.getElementById('asylumcolumnclickshow');
        if(div)
        {
 	var tw = new OpacityTween(div,Tween.regularEaseInOut,0,100,.5);
 	div.startf = function ()
  	             {
                        div.style.overflow = 'visible';
  	                tw.onMotionFinished = undefined;
  	                tw.continueTo(100, .5);
  	                div.style.display = 'block';
                        
  	             }
        div.endf   = function ()
  	             {
                        tw.onMotionFinished = function(){ div.style.display = 'none'; tw.onMotionFinished = undefined; }
  	                tw.continueTo(0, .5);
  	             }
        }
 }

function init_tweens()
{
 init_asylumcolumnclickshow();
 init_i53deferredactionforchildhoo();
 init_deportationdefensecolumnc();
}