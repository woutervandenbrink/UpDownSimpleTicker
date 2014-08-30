<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple jquery up/down item ticker</title>
   <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style type="text/css">
.tickeroutercontainer {
	margin: 0px;
	padding:0px;
	background-color: #CBFEF9;
	border: 1px solid #006;
	width:300px;
	height:100px;
	line-height: 100px;
	color: green;
	overflow: visible;
	position: relative;	
	overflow:hidden;
}
.tickerinnercontainer {
	margin:0px;
	padding:0px;
	position: relative;	
	margin-top:0px;
}
.tickeritem {
	margin:0px;
	position: relative;	
}
</style>
  <script>
    // A $( document ).ready() block.
$( document ).ready(function() {
     /* all ticker items should be of the same height (fo simplicity) */
	 tickeritemheight=$('p.tickeritem').first().outerHeight();
	 //console.log(tickeritemheight);
	 cntptickeritems=$('p.tickeritem').length;//how many elements are here?
	 //console.log(cntptickeritems);
	 traveldist = (cntptickeritems * tickeritemheight);//how far must we move to pass every ticker item?
	 
	 //console.log(traveldist);
	 /**
	 * Creates movement of element by animation of property margin-top toward a value of 0 (zero).
	 *
	 * @param object  innerobject jquery selector object of element to animate down
	 * @param int traveldist Int representing ammount of pixels to travel: value to be passed on to  animatemoveup() function 
	 *
	 * @return null returns nothing: has side effect of animation and call animatemoveup() function
	 */
	 function animatemovedown(innerobject,traveldist){
		 // console.log(traveldist + "going down");
		 //animate toward margin-top = 0, and take traveldist*10 seconds for it, and then call animatemoveup() passing innerobject and traveldist
		innerobject.animate({"margin-top": 0}, traveldist*10,function(){
		 animatemoveup(innerobject,traveldist); 
	   });
	 }
	 
	 
	 /**
	 * Creates movement of element by animation of property margin-top toward a negative value traveldist.
	 *
	 * @param object  innerobject jquery selector object of element to animate up
	 * @param int traveldist Int representing ammount of pixels to travel
	 *
	 * @return null returns nothing: has side effect of animation and call animatemovedown() function
	 */
	 function animatemoveup(innerobject,traveldist){
		// console.log(traveldist + " going up");
		  //animate toward margin-top = traveldist, and take traveldist*10 seconds for it, and then call animatemovedown() passing innerobject and traveldist
		innerobject.animate({"margin-top": -(traveldist)}, traveldist*10,function(){
			
		animatemovedown(innerobject,traveldist);
	   }); ;
	 }
	
	
	/* action starts here */
	 $('div#tickerinnercontainerid').css("margin-top",-traveldist);//start in the up position
	  animatemovedown($('div#tickerinnercontainerid'),traveldist);//this will start a loop of two functions calling each other
	
});
  </script>
  </head>
  <body>
    <!-- page content -->
    <div id = "tickeroutercontainerid" class = "tickeroutercontainer" style="float:left;" data-remarks="">
      <div id="tickerinnercontainerid" class = "tickerinnercontainer" data-remarks="">
        <p class = "tickeritem">item 1 in ticker</p>
        <p class = "tickeritem">item 2 in ticker</p>
        <p class = "tickeritem">item 3 in ticker</p>
        <p class = "tickeritem">item 4 in ticker</p>
        <p class = "tickeritem">item 5 in ticker</p>
        <p class = "tickeritem">item 6 in ticker</p>
        <p class = "tickeritem">item 7 in ticker</p>
        <p class = "tickeritem">item 8 in ticker</p>
        <p class = "tickeritem">item 9 in ticker</p>
        <p class = "tickeritem">item 10 in ticker</p>
        <p class = "tickeritem">item 11 in ticker</p>
        <p class = "tickeritem">item 12 in ticker</p>
        <p class = "tickeritem">item 13 in ticker</p>
        <p class = "tickeritem">item 14 in ticker</p>
        <p class = "tickeritem">item 15 in ticker</p>
    	
      </div>
    	
    </div>
    
     
  </body>
</html>