<?php
include '../Backend/common.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
<?php include $backendPath . '/include/_headMeta.inc.php'; ?>

<?php include $backendPath . '/include/_head.inc.php'; ?>
	</head>
	<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo"><a href="/">Home</a></div>
			<div id="ad-1" class="ad-container" filename="googlead1" style="top: 30px; margin-top: 0; left: 100px">&nbsp;</div>
			<div id="header-options"></div>
		</div>
			
		<div id="container">
			<div id="content-main">
				<div style="position: relative; width: 760px; left: 50px;">
					<div id="loading-container">
						<img src="<?php echo $assetUrl ?>/graphics/loading.gif" alt="loading image"/>
						<div id="loading-text">...loading...</div>
			        </div>
			        <div id="app-container" style="height: 520px; width: 760px;">
						<!--<div id="main-container"><div id="login-container"><div class="facebook-large-login-button facebook-login" onclick="window.top.location='https://thegreenspirit.ct8.pl/spiritaccount/apps/tetrisbattle'"></div></div></div>-->
						
						<div id="main-container" align="center">
							<h1 style="font-size: 14px">Tetris Battle is coming soon... In the mean time, challenge yourself with a game of Tetris Marathon!</h1>
							<div id="flashContent" style="height: 640px; width: 470px;"></div><br>
							<span style="font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;font-size:11px;">
								If the game doesn't load or you experience problems, please see
								<a href="https://thegreenspirit.ct8.pl/games/flash.html" target="_parent"> this guide</a>.
							</span>
						</div>
					</div>
				</div>
				<table id="content-promo" cellpadding="0" cellborder="0" cellspacing="0">
					<tr>
						<td>
							<a id="btn-bpb" href="https://apps.facebook.com/bubblepopbattle/?kt_type=partner&amp;kt_st1=app_announcement&amp;kt_st2=tb.com">Try our new game Bubble Pop Battle!</a>
						</td>
						<td>
							<a id="btn-twitter" href="https://twitter.com/tetrisbattle/?kt_type=partner&amp;kt_st1=app_announcement&amp;kt_st2=tb.com">Visit us on Twitter</a>
						</td>
						<td>
							<a id="btn-forums" href="https://retry-game.ct8.pl">Join the Forums</a>
						</td>
					</tr>
				</table>
			</div>
			
			<div id="content-right-col">
				<div id="ad-3" class="ad-container" filename="googlead3" width="160" height="600">&nbsp;</div><br/>
			</div>
			<div class="clear"></div>
		</div>

		<script type="text/javascript">
			$(document).ready(function() {
			    Tetris.config.staticUrl = '//tetrisbattle.ct8.pl/';
	
				$.extend(Tetris.config, getInitParams());
				
				Tetris.initAdvertisements();
			});
	
			function getInitParams() {
				return {
					advertisingPartialURL: Tetris.config.staticUrl + "/advertisement/",
					staticURL: Tetris.config.staticUrl,
			        googleAds: {
			        	enabledAds: ["ad-1","ad-2","ad-3","ad-4"]
			        },
					flashVars: {}
				};
			}
		</script>

		<div class="clear"></div>
	
<?php include $backendPath . '/include/_bottomnav.inc.php' ?>
		<div id="fb-root"></div>
	</body>
	<script type="text/javascript">
		// Temporary!
		function renderFlash() {
			flashVars = {
				version : '002'
			};
	
			function setFocusOnFlash() {
		    	var fl = document.getElementById('TetrisWebFlash');
				if (fl) { fl.focus(); }
			}
	
			swfobject.embedSWF("data" + flashVars.version + "/flash/TetrisWebFlash.swf", "flashContent", "640", "470", "9.0.0", {}, flashVars, {wmode: "window"}, {allowscriptaccess: "always"}, {id:"TetrisWebFlash", name:"TetrisWebFlash"});
			var flashContainer = document.getElementById('container');
			flashContainer.focus();
	
			swfobject.addDomLoadEvent(setFocusOnFlash);
		}
		
		renderFlash();
	</script>
</html>