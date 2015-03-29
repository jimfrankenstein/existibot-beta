<?
	class utils {
		public static function versionNum()  {
			return 1.1;
		}
		public static function getQueryVariable( $name ) {
			return $_GET[ $name ];
		}
		public static function mobileDetect() {
			$userAgent = strtolower( $_SERVER['HTTP_USER_AGENT'] );
			if(
				strrpos( $userAgent, "android" ) > -1
				|| strrpos( $userAgent, "avantgo" ) > -1
				|| strrpos( $userAgent, "blackberry" ) > -1
				|| strrpos( $userAgent, "blazer" ) > -1
				|| strrpos( $userAgent, "bolt" ) > -1
				|| strrpos( $userAgent, "iemobile" ) > -1
				|| strrpos( $userAgent, "ipad" ) > -1
				|| strrpos( $userAgent, "iphone" ) > -1
				|| strrpos( $userAgent, "ipod" ) > -1
				|| strrpos( $userAgent, "kindle" ) > -1
				|| strrpos( $userAgent, "nokia" ) > -1
				|| strrpos( $userAgent, "nook" ) > -1
				|| strrpos( $userAgent, "palmos" ) > -1
				|| strrpos( $userAgent, "playbook" ) > -1
				|| strrpos( $userAgent, "playstation" ) > -1
				|| strrpos( $userAgent, "opera mobi" ) > -1
				|| strrpos( $userAgent, "opera mini" ) > -1
				|| strrpos( $userAgent, "orange" ) > -1
				|| strrpos( $userAgent, "wii" ) > -1
				|| strrpos( $userAgent, "windows ce" ) > -1
				|| strrpos( $userAgent, "windows phone" ) > -1
				|| strrpos( $userAgent, "wm5 pie" ) > -1
			)
				return "mobile";
			else
				return "immobile";
		}
	}
?>