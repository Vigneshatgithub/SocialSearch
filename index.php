<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
<head>
	<title>
		Just Cooked
	</title>
	<link rel="icon" type="image/icon" href="images/fav-search.ico">
	<link rel="stylesheet" type="text/css" href="searchstyle.css" />	
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="s_client.js"></script>
	<script type="text/javascript">	
		var savedtwttab="";
		var savedfbtab="";
		var saveduttab="";
		var savedsearch="";
		var rpp=5;
		$(document).ready(function(){
		  $(".nowImg").click(function(){    			
		//	alert(this.id);		
		    var idret=this.id;
			var idhash='#'+this.id;
			
		
			
			if(idret=="twt")
			{
				settwttabCss();
			
			//	alert(idret);
				if(savedtwttab=="")
				{
					savedsearch="defaulttwt";
				}
				else
				{
					savedsearch=savedtwttab;
				}
		//		interimBoss('gen',0);
				document.getElementById('stab').value="twt";
				document.getElementById('scat').value=document.getElementById('remtw').value;
				formSubmit();
				
			}
			if(idret=="fb")
			{			    
			//	alert(idret);
				setfbtabCss();
						
				if(savedfbtab=="")
				{
					savedsearch="defaulttfb";
				}
				else
				{
					savedsearch=savedfbtab;
				}
			//	interimBoss('gen',0);
				document.getElementById('stab').value="fb";
				document.getElementById('scat').value=document.getElementById('remfb').value;
				formSubmit();
			}
			if(idret=="wiki")
			{
				setwikitabCss();
				
				if(saveduttab=="")
				{
					savedsearch="defaultut";
				}
				else
				{
					savedsearch=saveduttab;
				}								
			
			    document.getElementById('stab').value="wiki";
				document.getElementById('scat').value=document.getElementById('remut').value;
				formSubmit();
			}
			
			});
			
			$(".ctrends").click(function(){   
			 //  alert("Hi");
			   var x=document.getElementById(this.id).innerHTML;
			   document.getElementById("gsearch").value=x;  
			   formSubmit();
			});
			
			$(".nowRightMenu").click(function(){
			var idret=this.id;
			if(idret=="newData")
			{

			}
			if(idret=="oldData")
			{
				
			}
			});

			$(".nowMainMenu").click(function(){    			
		
		    var idret=this.id;
			var idhash='#'+this.id;
			
			// side menu selection starts - twitter
			if(idret=="defaulttwt")
			{
				setdefaulttwtCss();
				savedtwttab=idret;
				savedsearch="defaulttwt";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remtw').value=savedsearch;
				formSubmit();
			}
									
			if(idret=="usertwt")
			{
				setusertwtCss();
				savedtwttab=idret;
				savedsearch="usertwt";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remtw').value=savedsearch;	
				formSubmit();
			}

			if(idret=="toptrends")
			{
				settoptrendsCss();
				savedtwttab=idret;
				savedsearch="toptrends";			
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remtw').value=savedsearch;
				formSubmit();
			}

			// side menu selection starts - fb
			if(idret=="defaulttfb")
			{
				setdefaulttfbCss();
				savedfbtab=idret;
				savedsearch="defaulttfb";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remfb').value=savedsearch;
				formSubmit();
			}
			if(idret=="fbpages")
			{
				setfbpagesCss();
				savedfbtab=idret;
				savedsearch="fbpages";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remfb').value=savedsearch;
				formSubmit();
			}
			if(idret=="fbevents")
			{
				setfbeventsCss();				
				savedfbtab=idret;
				savedsearch="fbevents";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remfb').value=savedsearch;
				formSubmit();
			}
			
			if(idret=="defaultut")
			{
				setdefaultutCss();				
				savedfbtab=idret;
				savedsearch="defaultut";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="uttrend")
			{
				setuttrendCss();				
				savedfbtab=idret;
				savedsearch="uttrend";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="uttop")
			{
				setuttopCss();				
				savedfbtab=idret;
				savedsearch="uttop";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="utmostv")
			{
				setutmostvCss();				
				savedfbtab=idret;
				savedsearch="utmostv";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="utmostp")
			{
				setutmostpCss();				
				savedfbtab=idret;
				savedsearch="utmostp";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}			
			if(idret=="utmostr")
			{
				setutmostrCss();				
				savedfbtab=idret;
				savedsearch="utmostr";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}						
			
		  });
		  
		  	
		});
		
		function settwttabCss()
		{
				$("div#fbside").css("visibility","hidden");
			    $("div#twtside").css("visibility","visible");		
				$("div#utside").css("visibility","hidden");
		};
		
		function setfbtabCss()
		{
				$("div#fbside").css("visibility","visible");
			    $("div#twtside").css("visibility","hidden");		
				$("div#utside").css("visibility","hidden");
		};
		
		function setwikitabCss()
		{
				$("div#fbside").css("visibility","hidden");
				$("div#twtside").css("visibility","hidden");		
				$("div#utside").css("visibility","visible");				
		};
		
		function setdefaulttwtCss()
		{
				$("td#usertwt").css({"background-color":"#E1DCE6"}); //,"color":"black"});
				$("td#toptrends").css({"background-color":"#E1DCE6"}); //,"color":"black"});
				$("td#defaulttwt").css({"background-color":"white"}); //,"color":"black"});
		};
		
		function setusertwtCss()
		{
				$("td#defaulttwt").css({"background-color":"#E1DCE6"}); //,"color":"black"});
				$("td#toptrends").css({"background-color":"#E1DCE6"}); //,"color":"black"});
				$("td#usertwt").css({"background-color":"white"}); //,"color":"black"});
		};
		
		function settoptrendsCss()
		{
				$("td#defaulttwt").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#usertwt").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#toptrends").css({"background-color":"white"}); //,"color":"black"});		
		};
		
		function setdefaulttfbCss()
		{
				$("td#fbpages").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#fbevents").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#defaulttfb").css({"background-color":"white"}); //,"color":"black"});		
		};
		
		function setfbpagesCss()
		{
				$("td#defaulttfb").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#fbevents").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#fbpages").css({"background-color":"white"}); //,"color":"black"});			
		};
		
		function setfbeventsCss()
		{
				$("td#defaulttfb").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#fbpages").css({"background-color":"#E1DCE6"}); //,"color":"white"});
				$("td#fbevents").css({"background-color":"white"}); //,"color":"black"});
		
		};
		
		
		function setdefaultutCss()
		{
				$("td#defaultut").css({"background-color":"white"}); 
				$("td#uttrend").css({"background-color":"#E1DCE6"}); 
				$("td#uttop").css({"background-color":"#E1DCE6"}); 				
				$("td#utmostv").css({"background-color":"#E1DCE6"});
				$("td#utmostp").css({"background-color":"#E1DCE6"});
				$("td#utmostr").css({"background-color":"#E1DCE6"});
		};
		function setuttrendCss()
		{
				$("td#defaultut").css({"background-color":"#E1DCE6"}); 
				$("td#uttrend").css({"background-color":"white"}); 
				$("td#uttop").css({"background-color":"#E1DCE6"}); 				
				$("td#utmostv").css({"background-color":"#E1DCE6"});
				$("td#utmostp").css({"background-color":"#E1DCE6"});
				$("td#utmostr").css({"background-color":"#E1DCE6"});
		
		};
		function setuttopCss()
		{
				$("td#defaultut").css({"background-color":"#E1DCE6"}); 
				$("td#uttrend").css({"background-color":"#E1DCE6"}); 
				$("td#uttop").css({"background-color":"white"}); 				
				$("td#utmostv").css({"background-color":"#E1DCE6"});
				$("td#utmostp").css({"background-color":"#E1DCE6"});
				$("td#utmostr").css({"background-color":"#E1DCE6"});
		
		};
		function setutmostvCss()
		{
				$("td#defaultut").css({"background-color":"#E1DCE6"}); 
				$("td#uttrend").css({"background-color":"#E1DCE6"}); 
				$("td#uttop").css({"background-color":"#E1DCE6"}); 				
				$("td#utmostv").css({"background-color":"white"});
				$("td#utmostp").css({"background-color":"#E1DCE6"});
				$("td#utmostr").css({"background-color":"#E1DCE6"});
		
		};
		function setutmostpCss()
		{
				$("td#defaultut").css({"background-color":"#E1DCE6"}); 
				$("td#uttrend").css({"background-color":"#E1DCE6"}); 
				$("td#uttop").css({"background-color":"#E1DCE6"}); 				
				$("td#utmostv").css({"background-color":"#E1DCE6"});
				$("td#utmostp").css({"background-color":"white"});
				$("td#utmostr").css({"background-color":"#E1DCE6"});
		
		};
		function setutmostrCss()
		{
				$("td#defaultut").css({"background-color":"#E1DCE6"}); 
				$("td#uttrend").css({"background-color":"#E1DCE6"}); 
				$("td#uttop").css({"background-color":"#E1DCE6"}); 				
				$("td#utmostv").css({"background-color":"#E1DCE6"});
				$("td#utmostp").css({"background-color":"#E1DCE6"});
				$("td#utmostr").css({"background-color":"white"});		
		};
				
		function setFocus()
		{
			document.getElementById('gsearch').focus();
		};
		
		function formSubmit()
		{		
		document.getElementById("frmsearchm").submit();
		};		
		
				
	
	
	</script>
</head>
<body onload="setFocus();">
<div class="nowMain">
	<form id="frmsearchm" method="post" action="<?php echo $PHP_SELF;?>" onSubmit="return checkInputs(document.getElementById('gsearch').value)">
	<table cellspacing="20" >	
		<tr>			
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td id="nS">Ingeye</td>
			<td><input type="text" class="nowType"  name="gsearch" id="gsearch" value="<?php if(!empty($_POST)){echo $_POST['gsearch'];}?>"/></td>
			<td><input type="image" src="images/jnowSearchbtn.png" value="Next" onmouseover="jnowSearchbtnMO.png" onmouseout="images/jnowSearchbtn.png"/></td>
			<td><input type="hidden" name="stab" id="stab" value="<?php if(!empty($_POST)){echo $_POST['stab'];} else{echo "twt";}?>"/></td>
			<td><input type="hidden" name="scat" id="scat" value="<?php if(!empty($_POST)){echo $_POST['scat'];} else{echo "defaulttwt";}?>"/></td>
			<td><input type="hidden" name="remtw" id="remtw" value="<?php if(!empty($_POST)){echo $_POST['remtw'];} else{echo "defaulttwt";}?>"/></td>
			<td><input type="hidden" name="remfb" id="remfb" value="<?php if(!empty($_POST)){echo $_POST['remfb'];} else{echo "defaulttfb";}?>"/></td>
			<td><input type="hidden" name="remut" id="remut" value="<?php if(!empty($_POST)){echo $_POST['remut'];} else{echo "defaultut";}?>"/></td>
		</tr>				
	</table>
	</form>
	<table cellspacing="1" id="nowTable" >
		<tr>
			<td class="nowImg"></td><td class="nowImg"></td>
			<td class="nowImg" id="twt"><img src="images/m_logo_twitter_blue.png" id="twt"/></td>
			<td class="nowImg" id="fb"><img src="images/from_fb_home2.png" id="fb"/></td>
			<td class="nowImg" id="wiki"><img src="images/m_logo_utube_red.png" id="wiki"/></td>
		</tr>		
	</table>	
</div>	

<div class="nowSide" id="twtside">
	<table>
	<tr><td class="nowMainMenu" id="defaulttwt">Tweets</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="usertwt">User Tweets</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="toptrends">Trends</td></tr><tr></tr>
	</table>
</div>
<div class="nowSide" id="fbside">
	<table>
	<tr><td class="nowMainMenu" id="defaulttfb">Posts</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="fbpages">Pages</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="fbevents">Events</td></tr><tr></tr>
	</table>
</div>
<div class="nowSide" id="utside">
	<table>
	<tr><td class="nowMainMenu" id="defaultut">Default</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="uttrend">Trending</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="uttop">Top Rated</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="utmostv">Most Viewed</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="utmostp">Most Popular</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="utmostr">Most Recent</td></tr><tr></tr>
	</table>
</div>

<div class="nowRight">
	<table>
			
			<tr>
			<td class="nowRightMenu" id="newData" onmouseover="this.style.color='red';" onmouseout="this.style.color='black';" >Prev</td>
			</tr>
			<tr><td><hr/></td>
			<tr>
			<td class="nowRightMenu" id="oldData" onmouseover="this.style.color='red';" onmouseout="this.style.color='black';" >Next</td>
			</tr>
			
	</table>
</div>

<div id="txtAjax">			
<?php
if(!empty($_POST))
{
	$sear=$_POST['gsearch'];
//	 echo $_POST['gsearch'];
//	 echo $_POST['stab'];
//	 echo $_POST['scat'];

	 if($_POST['scat']=="defaulttwt")
	 {
		echo "<script type='text/javascript' lang='javascript'>setdefaulttwtCss();</script>";
	 }
	 if($_POST['scat']=="usertwt")
	 {
		echo "<script type='text/javascript' lang='javascript'>setusertwtCss();</script>";
	 }
	 if($_POST['scat']=="toptrends")
	 {
		echo "<script type='text/javascript' lang='javascript'>settoptrendsCss();</script>";
	 }
	 if($_POST['scat']=="defaulttfb")
	 {
		echo "<script type='text/javascript' lang='javascript'>setdefaulttfbCss();</script>";		
	 }
	 if($_POST['scat']=="fbevents")
	 {
		echo "<script type='text/javascript' lang='javascript'>setfbeventsCss();</script>";		
	 }
	 if($_POST['scat']=="fbpages")
	 {
		echo "<script type='text/javascript' lang='javascript'>setfbpagesCss();</script>";		
	 }
	 if($_POST['scat']=="defaultut")
	 {
		echo "<script type='text/javascript' lang='javascript'>setdefaultutCss();</script>";		
	 }
	 if($_POST['scat']=="uttrend")
	 {
		echo "<script type='text/javascript' lang='javascript'>setuttrendCss();</script>";		
	 }
	 if($_POST['scat']=="uttop")
	 {
		echo "<script type='text/javascript' lang='javascript'>setuttopCss();</script>";		
	 }
	 if($_POST['scat']=="utmostv")
	 {
		echo "<script type='text/javascript' lang='javascript'>setutmostvCss();</script>";		
	 }
	 if($_POST['scat']=="utmostp")
	 {
		echo "<script type='text/javascript' lang='javascript'>setutmostpCss();</script>";		
	 }
	 if($_POST['scat']=="utmostr")
	 {
		echo "<script type='text/javascript' lang='javascript'>setutmostrCss();</script>";		
	 }
	 
	 if($_POST['stab']=="twt")
	 {
		echo "<script type='text/javascript' lang='javascript'>settwttabCss();</script>";
	 }
	 if($_POST['stab']=="fb")
	 {
		echo "<script type='text/javascript' lang='javascript'>setfbtabCss();</script>";
	 }
	 if($_POST['stab']=="wiki")
	 {
		echo "<script type='text/javascript' lang='javascript'>setwikitabCss();</script>";
	 }

	 if($_POST['scat']=="defaulttwt")
	 {		
			$jsonurl = "http://search.twitter.com/search.json?q=".$sear."&page=1&rpp=50&lang=en";
			$json = @file_get_contents($jsonurl,0,null,null);
			$json_output = json_decode($json);
			$paginate=$json_output->results;


			if(empty($json_output))
			{
			   echo "No results found";
			}
			else
			{
					echo "<table id='apiresults'>";
					//echo $paginate[1]->text;

					// for loop begins
					for($i=0;$i<8;$i++)
					{
						if(!empty($paginate[$i]))
						{
					//echo $paginate[$i]->text;
						  echo "<tr>";
						  echo "<td>";
						  echo "<img src='".$paginate[$i]->profile_image_url."'/>";

						  echo "</td>";
						  $txt=$paginate[$i]->text;

						  $txt = preg_replace( '/(?!<\S)(\w+:\/\/[^<>\s]+\w)(?!\S)/i', '<a href="$1" target="_blank">$1</a>', $txt );
						  echo "<td class='tweetspace'>";
						  echo $txt;
						  echo "</td>";
						  echo "</tr>";
						}
					}
					// for loop ends
					echo "</table>";
			}
	 }
	 if($_POST['scat']=="usertwt")
	 {
			
			$jsonurl = "https://api.twitter.com/1/statuses/user_timeline.json?screen_name=".$sear."&count=50&exclude_replies=true&&lang=en";
			$json = @file_get_contents($jsonurl,0,null,null);
			$json_output = json_decode($json);
			$paginate=$json_output;			

			if(empty($paginate))
			{
			   echo "No such user exists";
			}
			else
			{
			//echo $source; // check parameter

			echo "<table id='apiresults'>";

			for($i=0;$i<8;$i++)
			{
				  if(!empty($paginate[$i]))
				  {
				  echo "<tr>";
				  
				  echo "<td>";
				//  echo "{$res->user->profile_image_url_https}";
				  echo "<img src='".$paginate[$i]->user->profile_image_url."'/>";
				  echo "</td>";
				
				  $txt=$paginate[$i]->text;
				  $txt = preg_replace( '/(?!<\S)(\w+:\/\/[^<>\s]+\w)(?!\S)/i', '<a href="$1" target="_blank">$1</a>', $txt );
				  
				  echo "<td class='userspace'>";
				  echo $txt;
				  echo "</td>";
				  echo "</tr>";
				  }
				  
			}
			echo "</table>";
			}
	 }
		if($_POST['scat']=="toptrends") // trending topics
		{
		// top trending topics in India
		$jsonurl = "http://api.twitter.com/1/trends/23424848.json";
		$json = @file_get_contents($jsonurl,0,null,null);
		$json_output = json_decode($json,true);
		$cnt=0;


		if(empty($json_output))
		{
		   echo "No topics trending in India";
		}

		else
		{

		$trends=$json_output[0]['trends'];

		foreach ( $trends as $trend )
		{
			$cnt+=1;
			echo "<label class='ctrends' id='agt".$cnt."'>";
			echo $trend['name'];			
			echo "</label>";
			echo " | ";
		//	if($cnt==4)
		//	{
		//		echo "<br/><br/>";
		//	}
		}
		}
		}
		
		// youtube api call
		if($_POST['scat']=="defaultut")
		{
			$feedUrl='http://gdata.youtube.com/feeds/api/videos?q='.$sear;
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds);		
		}
		if($_POST['scat']=="uttrend")
		{
		//	echo "uttrend";
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/on_the_web';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds);		
		}
		if($_POST['scat']=="uttop")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/top_rated';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds);		
		}
		if($_POST['scat']=="utmostv")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/most_viewed';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds);		
		}
		if($_POST['scat']=="utmostp")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/most_popular';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds);		
		}
		if($_POST['scat']=="utmostr")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/most_recent';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds);		
		}
		
		// youtube api call
	 
}

?>
</div>
<?php
// youtube api fetch code from sesii
function getFeeds($findDetailsFromURL){
	
//	echo "Hi";
	$feed_entry=simplexml_load_file($findDetailsFromURL);
	return $feed_entry;
	
}
function displayResults($feed_entry)
{
echo "<table id='apiresults'>";
 foreach ($feed_entry->entry as $entry) 
 {
        // get nodes in media: namespace for media information
        $media = $entry->children('http://search.yahoo.com/mrss/');
        
        // get video player URL
        $attrs = $media->group->player->attributes();
        $watch = $attrs['url']; 
        
        // get video thumbnail
        $attrs = $media->group->thumbnail[1]->attributes();
        $thumbnail = $attrs['url']; 
        
        // get <yt:duration> node for video length
        $yt = $media->children('http://gdata.youtube.com/schemas/2007');
        $attrs = $yt->duration->attributes();
        $length = $attrs['seconds']; 
        
        // get <gd:rating> node for video ratings
        $gd = $entry->children('http://schemas.google.com/g/2005'); 
        if ($gd->rating) {
          $attrs = $gd->rating->attributes();
          $rating = $attrs['average']; 
        } else {
          $rating = 0; 
        }

        // print record        
        echo "<tr>";
        echo "<td><a href='".$watch."' target='_blank'><img src='".$thumbnail."'/></a></td>";
				
		echo "<td class='utspace'><a class='noline' href='".$watch."' target='_blank'>".$media->group->title."</a><br/>";
		
        echo sprintf("%0.2f", $length/60) . " min. | {$rating} user rating"."<br/>";
		if(strlen($media->group->description)>150)
		{
			echo substr($media->group->description,0,150) . " ...";
		}
		else
		{
			echo $media->group->description;
		}
		
		echo "</td>";
        echo "</tr>";		
			
      }
 	  echo "</table>";	
  }

// youtube api fetch code from sesii
?>

</body>
</html>
