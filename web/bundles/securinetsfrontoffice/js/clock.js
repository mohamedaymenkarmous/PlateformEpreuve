	hours = $('#hours').html() ;
	minutes = $('#minutes').html() ;
	seconds = $('#seconds').html() ;
	if ( hours < 10 ) {  hours = "0"+hours ;}
	if ( minutes < 10 ) minutes = "0"+minutes ;
	if (seconds < 10) seconds = "0"+seconds ;
	$('#hours').html(hours) ;
	$('#minutes').html(minutes) ;
	$('#seconds').html(seconds) ;

	
window.setInterval(
function(){


	
	hours = $('#hours').html() ;
	minutes = $('#minutes').html() ;
	seconds = $('#seconds').html() ;
	
		  if (seconds==0 && minutes== 0 && hours ==0 ) 
			{
				if ($('[name ="dot"]').hasClass('on')) 
				{
				}else
				{
					 $('[name ="dot"]').removeClass('off'); $('[name ="dot"]').addClass('on');  	
				}
			}else{
  
				if ($('[name ="dot"]').hasClass('on')) 
				{
				 $('[name ="dot"]').removeClass('on'); $('[name ="dot"]').addClass('off');  
				}else
				{
					 $('[name ="dot"]').removeClass('off'); $('[name ="dot"]').addClass('on');  	
				}
				
				if (seconds == 0 ) { 
					seconds= 59 ; 
					if ( minutes == 0 ) {
						minutes = 59;
						hours = hours - 1 ;
					}else
					{
						minutes = minutes - 1 ;
					}	
				}else
				{
					seconds = seconds - 1 ;
				}
			}
hh = hours.toString().trim();
mm = minutes.toString().trim();
ss = seconds.toString().trim() ;

	if ( hh.length < 2 ) hh = "0"+hours ;
	if ( mm.length < 2 ) mm = "0"+mm ;
	if (ss.length < 2) ss = "0"+ss ;
	$('#hours').html(hh) ;
	$('#minutes').html(mm) ;
	$('#seconds').html(ss) ;
	
},1000);