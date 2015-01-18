  <script type="text/javascript">

/*** 
    Simple jQuery Slideshow Script
    Released by Jon Raasch (jonraasch.com) under FreeBSD license: free to use or modify, not responsible for anything, etc.  Please link out to me if you like it :)
***/

function slideSwitch() {
    var $active = $('#slideshow DIV.active');

    if ( $active.length == 0 ) $active = $('#slideshow DIV:last');

    // use this to pull the divs in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $('#slideshow DIV:first');

    // uncomment below to pull the divs randomly
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 5000 );
});

</script>

<style type="text/css">

/*** set the width and height to match your images **/

#slideshow {
    position:relative;
    height:400px;

	width="570px"
	
}
.men{
	position:relative;
	float:left;
	top:-23px;
	margin-right:20px;
	margin-bottom:50px;
}
.women{
	position:relative;
	
	top:-23px;
	margin-bottom:50px;
	}

#slideshow DIV {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
    height: 400px;
    background-color: #FFF;
	
}
.thumbs{
	margin-left:auto;
margin-right:auto;
width:100%;

}
#slideshow DIV.active {
    z-index:10;
    opacity:1.0;
	

}
.slideshowcontainer{
	width:570px;
	float:left;
	top:-20px;
	margin-right:20px;
	margin-bottom:20px;
}

#slideshow DIV.last-active {
    z-index:9;
}

#slideshow DIV IMG {
    height: 350px;
    display: block;
    border: 0;
    margin-bottom: 10px;
}
</style>
<center>
<div>

   <img class="quote" src="<?php echo $this->webroot; ?>img/Main_Page_Image.jpg" >

 </div> 
 </center>