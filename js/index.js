$(function(){

    $('.bloxPopup').lightboxController({
        appendRegion:   '.contentWrap',
		opened:			function(){console.log("overlay opened");},
		closed:			function(){console.log("overlay closed");}
    });

});