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
		
	<script src="<?php echo $assetUrl ?>/js/ZeroClipboard.js" type="text/javascript"></script>
	<style type="text/css">
	#flash-container,
	#flash-object
	{
		position: relative;
	}
	</style>
	<div id="container">
		<div id="content-left-col">
			<div id="ad-2" class="ad-container" filename="googlead2" width="160" height="600">&nbsp;</div><br/>
		</div>
		
		<div id="content-center">
			<div id="replayer-container">
				<div id="replayer-form-container" style="display: none">
					<form id="replayer-form" method="GET" action="/replayer.php">
						<p style="text-align: center">Please Enter Replay ID:</p> 
						<br/>
						<br/>
						<table>
							<tr>
								<td>
									<input id="replay-id-input" name="id" type="text"></input>
								</td>
								<td>
									<input id="replay-watch-btn" class="replay-watch-btn replay-watch-btn-disabled" value="" type="submit">
								</td>
							</tr>
						</table>
					</form>
				</div>
				<div id="flash-container" align="center" style="display: none">
					<div>
						<span>Replay ID: </span>
						<span id="replay-id"></span>
					</div>
					<br/>
					<div id="flash-object"></div>
				</div>
				
				<div id="share-container" style="display: none">
					<table>
						<tr>
							<td>
								<iframe src="//www.facebook.com/plugins/like.php?href&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21&amp;appId=249860381692947" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:75px; height:21px;" allowtransparency="true"></iframe>
							</td>
							<td>
								<a href="https://twitter.com/share" class="twitter-share-button"></a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</td>
							<td>
								<!-- Place this tag where you want the +1 button to render -->
								<g:plusone size="medium" annotation="inline" width="120"></g:plusone>
								
								<!-- Place this render call where appropriate -->
								<script type="text/javascript">
								  (function() {
								    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
								    po.src = 'https://apis.google.com/js/plusone.js';
								    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
								  })();
								</script>
							</td>
							<td>
								<!-- Facebook -->
								<a href="javascript:void(0)" onclick="window.open('http://www.facebook.com/share.php?u=' + encodeURIComponent(window.location) + '&amp;t=' + encodeURIComponent(document.title)); return false"> <img width="16" height="16" border="0" src="//tetrisow.ct8.pl/data5_0_1_1/images/sharethis/14x14_facebook.gif" alt="Facebook"> </a>
								<!-- StumbleUpon -->
								<!--<a href="javascript:void(0)" onclick="window.open('http://www.stumbleupon.com/submit?url=' + encodeURIComponent(window.location) + '&amp;title=' + encodeURIComponent(document.title)); return false"><img border="0" src="//tetrisow.ct8.pl/data5_0_1_1/images/sharethis/16x16_su_round_clean.gif" alt="StumbleUpon"> </a>-->
								<!-- MySpace --> 
								<a href="javascript:void(0)" onclick="window.open('http://www.myspace.com/Modules/PostTo/Pages/?u='+encodeURIComponent(document.location.toString()))"> <img src="//cms.myspacecdn.com/cms//ShareOnMySpace/Myspace_16.png" border="0" alt="Share on Myspace"/> </a>
								<!-- Reddit -->
								<a href="javascript:void(0)" onclick="window.open('http://www.reddit.com/submit?url=' + encodeURIComponent(window.location)); return false"> <img src="//www.reddit.com/static/spreddit1.gif" alt="submit to reddit" border="0"/> </a>
								
								<!--<div id="orkut_share" style="display: inline"></div><script src="http://www.google.com/jsapi" type="text/javascript"></script><script type="text/javascript">google.load('orkut.share', '1');google.setOnLoadCallback(function(){new google.orkut.share.Button({style:'mini'}).draw('orkut_share');}, true);</script>
								
								<a target="_parent" href="javascript:void(0)" onclick="window.open('http://del.icio.us/post?url=' + encodeURIComponent(window.location) + '&amp;title=' + encodeURIComponent(document.title)); return false"><img width="16" height="16" border="0" src="//tetrisow.ct8.pl/data5_0_1_1/images/sharethis/16x16_delicious.gif" alt="Delicious"></a>-->
								
								<a target="_parent" href="javascript:void(0)" onclick="window.location = 'mailto:?subject=Watch%20My%20Tetris%20Battle%20Replay!&amp;body=' + encodeURIComponent(window.location); return false"><img width="16" height="16" border="0" src="<?php echo $assetUrl ?>/graphics/OW/mailicon_16x16.png"></a>
							</td>
							<td>
								<a id="embed-button" href="javascript:void(0)" onclick="Tetris.toggleReplayEmbedBox()"></a>
							</td>
						</tr>
					</table>
					
					<div id="embed-content">
						<div id="embed-info" align="center">
							<table>
								<tr>
									<td>
										<textarea id="replay-embed-html" value="" onclick="Tetris.util.selectAllText(this)"></textarea>
									</td>
									<td>
										<div id="replay-embed-copy-btn" class="replay-copy-button" copy-input="replay-embed-html"></div>
									</td>
								</tr>
							</table>
							<p id="replay-note"><b>Note</b>: Click COPY for use on your website.</p>
						</div>
						<br/>
					</div>
				</div>
			</div>
		</div>
		
		<div id="content-right-col">
			<div id="ad-3" class="ad-container" filename="googlead3" width="160" height="600">&nbsp;</div><br/>
		</div>
		<div class="clear"></div>
	</div>
	<div id="fb-root"></div>
	<script type="text/javascript">
		$(document).ready(function() {
			if (typeof(FB.log) != 'function') {
				FB.log = function(data) {
					if (typeof(console) != undefined && typeof(console) != "undefined") {
			    		console.log(data);
			    	}
				};
			}
			
		    Tetris.config.appId = 130409810307796;
		    Tetris.config.staticUrl = '//tetrisbattle.ct8.pl/';
		    Tetris.channelUrl = 'https://tetrisbattle.ct8.pl/channel_ssl.html';

			$.extend(Tetris.config, getInitParams());
			
			Tetris.initReplayer(config.replayId);
			
			Tetris.initAdvertisements();
		});

		function getInitParams() {
			var replayId = "<?php echo $_GET['id'] ?>"; 
			var replayCdnUrl = "";

			//replayCdnUrl = "http://tetrisfb-a.akamaihd.net/data/flash/replayer/launcher.swf?url=http://";
			//replayCdnUrl = "http://data.tbc.tetrisfb.com/data/flash/replayer/launcher.swf?url=http://";
			replayCdnUrl = "//tetrisbattle-assets.ct8.pl/data1.81.0/flash/replayer/launcher.swf?url=";
			
			return {
				advertisingPartialURL: Tetris.config.staticUrl + "/advertisement/",
				staticURL: Tetris.config.staticUrl,
				replayId: replayId,
				replayerCdnUrl: replayCdnUrl,
				//replayerApiUrl: "http://tbc.tetrisfb.com/",
				replayerApiUrl: "//tetrisfb.ct8.pl/",
				minimumVersion: {
		          	majorVersion: 10,
		            minorVersion: 0,
		        	revision: 0
		        },
		        googleAds: {
		        	enabledAds: ["ad-1","ad-2","ad-3","ad-4"]
		        },
				flashVars: {}
			};
		}
	</script>
	<div class="clear"></div>
<?php include $backendPath . '/include/_bottomnav.inc.php' ?>
		
	</body>
</html>
