<?
	$userAgent = strtolower( $_SERVER['HTTP_USER_AGENT'] );
	$mobileParam = strtolower( $_GET["mobile"] );
	
	if(
		$userAgent.indexOf("android") > -1
		|| $userAgent.indexOf("avantgo") > -1
		|| $userAgent.indexOf("blackberry") > -1
		|| $userAgent.indexOf("blazer") > -1
		|| $userAgent.indexOf("iemobile") > -1
		|| $userAgent.indexOf("ipad") > -1
		|| $userAgent.indexOf("iphone") > -1
		|| $userAgent.indexOf("ipod") > -1
		|| $userAgent.indexOf("kindle") > -1
		|| $userAgent.indexOf("palmos") > -1
		|| $userAgent.indexOf("opera mobi") > -1
		|| $userAgent.indexOf("opera mini") > -1
		|| $userAgent.indexOf("windows ce") > -1
		|| $userAgent.indexOf("windows phone") > -1
	) { $userAgent = "mobile"; }
	
	// '' -------------------------------------------------------------------------------- If user is on a mobile device
	if( $userAgent == "mobile" ) {
	// '' -------------------------------------------------------------------------------- and 'mobile=false' is not present,
		if( $mobileParam != "false" ) {
?>
		<script type="text/javascript">
	// '' ---------------------------------------------------------------------------------------------------- check if the 'preventMobileRedirect' cookie is in place.
			var preventMobileRedirect = {
				isPresent: function(){
					var nameEQ = 'preventMobileRedirect=';
					var ca = document.cookie.split(';');
					for( var i = 0; i < ca.length; i++ ) {
						var c = ca[i];
						while ( c.charAt(0) == ' ' ) c = c.substring(1,c.length);
						if ( c.indexOf(nameEQ) == 0 ) return c.substring( nameEQ.length, c.length );
					}
					return null;
				}
			};
	// '' ---------------------------------------------------------------------------------------------------- If it's not, redirect them to the mobile site.
			if( !preventMobileRedirect.isPresent() )
				window.location = '/trucks/mobile';
		</script>
<?
	// '' -------------------------------------------------------------------------------- But if 'mobile=false' is present, set the 'preventMobileRedirect' cookie.
		} else {
?>
		<script type="text/javascript">
			var days = 7; // set number of days until expire
			days = days * 24 * 60 * 60 * 1000; // convert days to millisecons
			document.cookie = 'preventMobileRedirect=true; expires=' + days + '; path=/';
		</script>
<?
		}
	}
?>