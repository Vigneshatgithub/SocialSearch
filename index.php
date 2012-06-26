<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!DOCTYPE html>
<html>
<head>
	<title>
		Ingeye - the social search
	</title>
	<link rel="icon" type="image/icon" href="images/fav-search.ico">
	<link rel="stylesheet" type="text/css" href="searchstyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap.css" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="s_client.js"></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=412742978744845";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<script>!function(d,s,id){
	var js,fjs=d.getElementsByTagName(s)[0];
	if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
	js.src=	"//platform.twitter.com/widgets.js";
	fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="s_client.js"></script>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30914640-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
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
						
			$(".fixedstatus").mouseover(function(){
			$("div.expandbottom").css("visibility","visible")
			});
			
			$(".fixedstatus").mouseout(function(){
			$("div.expandbottom").css("visibility","hidden");
			});
			
			$(".expandbottom").mouseover(function(){
			$("div.expandbottom").css("visibility","visible");
			});
			
			$(".expandbottom").mouseout(function(){
			$("div.expandbottom").css("visibility","hidden");
			});
			
			
			$(".ctrends").click(function(){   
			 //  alert("Hi");
			   var x=document.getElementById(this.id).innerHTML;
			   document.getElementById("gsearch").value=x;  
			   // check to see if clicking on a trend switches to twitter tab
				chgPgnValue(0);
				setdefaulttwtCss();
				savedtwttab="defaulttwt";
				savedsearch="defaulttwt";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remtw').value=savedsearch;
			   // check to see if clicking on a trend switches to twitter tab
			   formSubmit();
			});
			
			$(".nowRightMenu").click(function(){
			//alert(this.id);
			var idret=this.id;
			if(idret=="newData")
			{
				chgPgnValue(8);
				formSubmit();
			}
			if(idret=="oldData")
			{
				chgPgnValue(-8);
				formSubmit();
			}
			});

			$(".nowMainMenu").click(function(){    			
		
		    var idret=this.id;
			var idhash='#'+this.id;
			
			// side menu selection starts - twitter
			if(idret=="defaulttwt")
			{
				chgPgnValue(0);
				setdefaulttwtCss();
				savedtwttab=idret;
				savedsearch="defaulttwt";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remtw').value=savedsearch;
				formSubmit();
			}
									
			if(idret=="usertwt")
			{
				chgPgnValue(0);
				setusertwtCss();
				savedtwttab=idret;
				savedsearch="usertwt";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remtw').value=savedsearch;	
				formSubmit();
			}

			if(idret=="toptrends")
			{
				chgPgnValue(0);
				settoptrendsCss();
				savedtwttab=idret;
				savedsearch="toptrends";			
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remtw').value=savedsearch;
				//formSubmit();
				document.getElementById("frmsearchm").submit();
				
			}

			// side menu selection starts - fb
			if(idret=="defaulttfb")
			{
				chgPgnValue(0);
				setdefaulttfbCss();
				savedfbtab=idret;
				savedsearch="defaulttfb";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remfb').value=savedsearch;
				formSubmit();
			}
			if(idret=="fbpages")
			{
				chgPgnValue(0);
				setfbpagesCss();
				savedfbtab=idret;
				savedsearch="fbpages";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remfb').value=savedsearch;
				formSubmit();
			}
			if(idret=="fbevents")
			{
				chgPgnValue(0);
				setfbeventsCss();				
				savedfbtab=idret;
				savedsearch="fbevents";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remfb').value=savedsearch;
				formSubmit();
			}
			
			if(idret=="defaultut")
			{
				chgPgnValue(0);
				setdefaultutCss();				
				savedfbtab=idret;
				savedsearch="defaultut";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="uttrend")
			{
				chgPgnValue(0);
				setuttrendCss();				
				savedfbtab=idret;
				savedsearch="uttrend";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="uttop")
			{
				chgPgnValue(0);
				setuttopCss();				
				savedfbtab=idret;
				savedsearch="uttop";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="utmostv")
			{
				chgPgnValue(0);
				setutmostvCss();				
				savedfbtab=idret;
				savedsearch="utmostv";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}
			if(idret=="utmostp")
			{
				chgPgnValue(0);
				setutmostpCss();				
				savedfbtab=idret;
				savedsearch="utmostp";
				document.getElementById('scat').value=savedsearch;
				document.getElementById('remut').value=savedsearch;
				formSubmit();
			}			
			if(idret=="utmostr")
			{
				chgPgnValue(0);
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
				$("td#usertwt").css({"background-color":"#85A3E0"}); //,"color":"black"});
				$("td#toptrends").css({"background-color":"#85A3E0"}); //,"color":"black"});
				$("td#defaulttwt").css({"background-color":"white"}); //,"color":"black"});
		};
		
		function setusertwtCss()
		{
				$("td#defaulttwt").css({"background-color":"#85A3E0"}); //,"color":"black"});
				$("td#toptrends").css({"background-color":"#85A3E0"}); //,"color":"black"});
				$("td#usertwt").css({"background-color":"white"}); //,"color":"black"});
		};
		
		function settoptrendsCss()
		{
				$("td#defaulttwt").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#usertwt").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#toptrends").css({"background-color":"white"}); //,"color":"black"});		
		};
		
		function setdefaulttfbCss()
		{
				$("td#fbpages").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#fbevents").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#defaulttfb").css({"background-color":"white"}); //,"color":"black"});		
		};
		
		function setfbpagesCss()
		{
				$("td#defaulttfb").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#fbevents").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#fbpages").css({"background-color":"white"}); //,"color":"black"});			
		};
		
		function setfbeventsCss()
		{
				$("td#defaulttfb").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#fbpages").css({"background-color":"#85A3E0"}); //,"color":"white"});
				$("td#fbevents").css({"background-color":"white"}); //,"color":"black"});
		
		};
		
		
		function setdefaultutCss()
		{
				$("td#defaultut").css({"background-color":"white"}); 
				$("td#uttrend").css({"background-color":"#85A3E0"}); 
				$("td#uttop").css({"background-color":"#85A3E0"}); 				
				$("td#utmostv").css({"background-color":"#85A3E0"});
				$("td#utmostp").css({"background-color":"#85A3E0"});
				$("td#utmostr").css({"background-color":"#85A3E0"});
		};
		function setuttrendCss()
		{
				$("td#defaultut").css({"background-color":"#85A3E0"}); 
				$("td#uttrend").css({"background-color":"white"}); 
				$("td#uttop").css({"background-color":"#85A3E0"}); 				
				$("td#utmostv").css({"background-color":"#85A3E0"});
				$("td#utmostp").css({"background-color":"#85A3E0"});
				$("td#utmostr").css({"background-color":"#85A3E0"});
		
		};
		function setuttopCss()
		{
				$("td#defaultut").css({"background-color":"#85A3E0"}); 
				$("td#uttrend").css({"background-color":"#85A3E0"}); 
				$("td#uttop").css({"background-color":"white"}); 				
				$("td#utmostv").css({"background-color":"#85A3E0"});
				$("td#utmostp").css({"background-color":"#85A3E0"});
				$("td#utmostr").css({"background-color":"#85A3E0"});
		
		};
		function setutmostvCss()
		{
				$("td#defaultut").css({"background-color":"#85A3E0"}); 
				$("td#uttrend").css({"background-color":"#85A3E0"}); 
				$("td#uttop").css({"background-color":"#85A3E0"}); 				
				$("td#utmostv").css({"background-color":"white"});
				$("td#utmostp").css({"background-color":"#85A3E0"});
				$("td#utmostr").css({"background-color":"#85A3E0"});
		
		};
		function setutmostpCss()
		{
				$("td#defaultut").css({"background-color":"#85A3E0"}); 
				$("td#uttrend").css({"background-color":"#85A3E0"}); 
				$("td#uttop").css({"background-color":"#85A3E0"}); 				
				$("td#utmostv").css({"background-color":"#85A3E0"});
				$("td#utmostp").css({"background-color":"white"});
				$("td#utmostr").css({"background-color":"#85A3E0"});
		
		};
		function setutmostrCss()
		{
				$("td#defaultut").css({"background-color":"#85A3E0"}); 
				$("td#uttrend").css({"background-color":"#85A3E0"}); 
				$("td#uttop").css({"background-color":"#85A3E0"}); 				
				$("td#utmostv").css({"background-color":"#85A3E0"});
				$("td#utmostp").css({"background-color":"#85A3E0"});
				$("td#utmostr").css({"background-color":"white"});		
		};
				
		function setFocus()
		{
			document.getElementById('gsearch').focus();
		};
		
		function formSubmit()
		{
			if(document.getElementById('gsearch').value!="")
			{
				document.getElementById("frmsearchm").submit();
			}
		};		
		
		function chgPgnValue(prpp)		
		{
			prpp=Number(prpp);
			var pass=document.getElementById('pagn').value;
			pass=Number(pass);
	//		alert(pass);
			if(prpp==0)
			{
	//			alert("inside prpp==0 if");
				document.getElementById('pagn').value=0;
	//			alert(pass);
			}
			else
			{
	//			alert("inside prpp!=0 if");
				pass=pass+prpp;
	//			alert(pass);
				if(pass<0 || pass>49)
				{
	//				alert("inside prpp<0 >49 if");
					document.getElementById('pagn').value=0;
				}
				else
				{
	//			alert("inside inner else");
				document.getElementById('pagn').value=pass;
	//			alert(document.getElementById('pagn').value);
				}
			}
			
		};
				
	
	
	</script>
</head>
<body onload="setFocus();">
<div class="nowMain">
	<form id="frmsearchm" method="get" action="<?php echo $PHP_SELF;?>" onSubmit="return checkInputs(document.getElementById('gsearch').value)">
	<table cellspacing="1" >	
		<tr>			
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
			<td></td><td></td><td></td><td></td><td></td>
			<!--<td id="nS">Ingeye</td>-->		
			<td><img src="images/ing_logo_v.png"></td>
			<td><input type="text" class="nowType search-query"  name="gsearch" id="gsearch" value="<?php if(!empty($_GET)){echo $_GET['gsearch'];}?>"/></td>
		<!--	<td><input type="image" src="images/jnowSearchbtn.png" value="Next" onmouseover="jnowSearchbtnMO.png" onmouseout="images/jnowSearchbtn.png"/></td>-->
		    <td></td><td></td><td></td><td></td><td></td><td><input type="button" id="btnS" value="Search" onclick="formSubmit();"/></td>			
			<td><input type="hidden" name="stab" id="stab" value="<?php if(!empty($_GET)){echo $_GET['stab'];} else{echo "twt";}?>"/></td>
			<td><input type="hidden" name="scat" id="scat" value="<?php if(!empty($_GET)){echo $_GET['scat'];} else{echo "defaulttwt";}?>"/></td>
			<td><input type="hidden" name="remtw" id="remtw" value="<?php if(!empty($_GET)){echo $_GET['remtw'];} else{echo "defaulttwt";}?>"/></td>
			<td><input type="hidden" name="remfb" id="remfb" value="<?php if(!empty($_GET)){echo $_GET['remfb'];} else{echo "defaulttfb";}?>"/></td>
			<td><input type="hidden" name="remut" id="remut" value="<?php if(!empty($_GET)){echo $_GET['remut'];} else{echo "defaultut";}?>"/></td>
			<td><input type="hidden" name="pagn" id="pagn" value="<?php if(!empty($_GET)){echo $_GET['pagn'];} else{echo 0;} ?>"/></td>
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
	<table class="table span5 table-bordered">
	<tr><td class="nowMainMenu" id="defaulttwt">Tweets</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="usertwt">User Tweets</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="toptrends">Trends</td></tr><tr></tr>
	</table>
</div>
<div class="nowSide" id="fbside">
	<table class="table span5 table-bordered th">
	<tr><td class="nowMainMenu" id="defaulttfb">Posts</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="fbpages">Pages</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="fbevents">Events</td></tr><tr></tr>
	</table>
</div>
<div class="nowSide" id="utside">
	<table class="table span5 table-bordered th">
	<tr><td class="nowMainMenu" id="defaultut">Default</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="uttrend">Trending</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="uttop">Top Rated</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="utmostv">Most Viewed</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="utmostp">Most Popular</td></tr><tr></tr>
	<tr><td class="nowMainMenu" id="utmostr">Most Recent</td></tr><tr></tr>
	</table>
</div>

<div class="nowRight">
	<table class="pager">
			
			<tr>
			<td class="nowRightMenu" id="newData"><a href="#"> Prev &rarr;</a></td>
			</tr>			
			<tr>
			<td class="nowRightMenu" id="oldData"><a href="#">&larr; Next </a></td>
			</tr>
			
	</table>
</div>
<div class="bottomline">
<table>
<tr>
<td class="fixedstatus">Social Connect with Ingeye</td>
</tr>
</table>
</div>
<div class="expandbottom">
<table class="siteinfoex">
<tr>
<td id="siteinfotxt">
<table>
<tr>
<td>
<div class="fb-like" data-href="http://www.ingeye.com" data-send="true" data-width="450" data-show-faces="true" data-font="lucida grande"></div>
</td>
</tr>
<tr>
<td>
<a href="https://twitter.com/ingeye" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @ingeye</a>
</td>
</tr>
<tr>
<td>
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-text="the social search engine" data-url="http://ingeye.com">Tweet about us</a>
</td>
</tr>
</table>
</td>
</tr>
</table>
</div>
<div id="txtAjax">			
<?php
if(!empty($_GET))
{
	$sear=$_GET['gsearch'];
	$sear=str_replace(" ","%20",$sear);
	$sear=str_replace("#","%23",$sear);
	$b=$_GET['pagn'];	
	// echo $_GET['gsearch'];
	// echo $_GET['stab'];
	// echo $_GET['scat'];
	// echo $b;
	//echo $sear;


	 if($_GET['scat']=="defaulttwt")
	 {
		echo "<script type='text/javascript' lang='javascript'>setdefaulttwtCss();</script>";
	 }
	 if($_GET['scat']=="usertwt")
	 {
		echo "<script type='text/javascript' lang='javascript'>setusertwtCss();</script>";
	 }
	 if($_GET['scat']=="toptrends")
	 {
		echo "<script type='text/javascript' lang='javascript'>settoptrendsCss();</script>";
	 }
	 if($_GET['scat']=="defaulttfb")
	 {
		echo "<script type='text/javascript' lang='javascript'>setdefaulttfbCss();</script>";		
	 }
	 if($_GET['scat']=="fbevents")
	 {
		echo "<script type='text/javascript' lang='javascript'>setfbeventsCss();</script>";		
	 }
	 if($_GET['scat']=="fbpages")
	 {
		echo "<script type='text/javascript' lang='javascript'>setfbpagesCss();</script>";		
	 }
	 if($_GET['scat']=="defaultut")
	 {
		echo "<script type='text/javascript' lang='javascript'>setdefaultutCss();</script>";		
	 }
	 if($_GET['scat']=="uttrend")
	 {
		echo "<script type='text/javascript' lang='javascript'>setuttrendCss();</script>";		
	 }
	 if($_GET['scat']=="uttop")
	 {
		echo "<script type='text/javascript' lang='javascript'>setuttopCss();</script>";		
	 }
	 if($_GET['scat']=="utmostv")
	 {
		echo "<script type='text/javascript' lang='javascript'>setutmostvCss();</script>";		
	 }
	 if($_GET['scat']=="utmostp")
	 {
		echo "<script type='text/javascript' lang='javascript'>setutmostpCss();</script>";		
	 }
	 if($_GET['scat']=="utmostr")
	 {
		echo "<script type='text/javascript' lang='javascript'>setutmostrCss();</script>";		
	 }
	 
	 if($_GET['stab']=="twt")
	 {
		echo "<script type='text/javascript' lang='javascript'>settwttabCss();</script>";
	 }
	 if($_GET['stab']=="fb")
	 {
		echo "<script type='text/javascript' lang='javascript'>setfbtabCss();</script>";
	 }
	 if($_GET['stab']=="wiki")
	 {
		echo "<script type='text/javascript' lang='javascript'>setwikitabCss();</script>";
	 }
	 
	 function twitterRes()
	 {

			
	 }

	 if($_GET['scat']=="defaulttwt")
	 {		
			$jsonurl = "http://search.twitter.com/search.json?q=".$sear."&page=1&rpp=50&lang=en";
			$json = @file_get_contents($jsonurl,0,null,null);
			$json_output = json_decode($json);
			$paginate=$json_output->results;


			if(empty($json_output))
			{			   
			   echo "<h3 class='noresult'>No results found <img src='images/nores_emo.png'/></h3>";
			}
			else
			{
					echo "<table id='apiresults' class='table table-twitter'>";
					//echo $paginate[1]->text;

					// for loop begins
					for($i=$b;$i<$b+8;$i++)
					{
						if(!empty($paginate[$i]))
						{
					//echo $paginate[$i]->text;
						  echo "<tr>";
						  echo "<td>";
						  echo "<a href='https://twitter.com/".$paginate[$i]->from_user."' target='_blank'><img src='".$paginate[$i]->profile_image_url."'/></a>";

						  echo "</td>";
						  $txt=$paginate[$i]->text;
						  $txt = preg_replace( '/(?!<\S)(\w+:\/\/[^<>\s]+\w)(?!\S)/i', '<a href="$1" target="_blank">$1</a>', $txt );
						  
						  //$txt=preg_replace('/@([a-zA-Z0-9_])*(:|\\s)/','<a href="http://twitter.com/$0" target="_blank">$0</a>',$txt);
						  $txt=preg_replace_callback('/@([a-zA-Z0-9_])*(\\s|:)/','atUserLink',$txt);
						  
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
	 if($_GET['scat']=="usertwt")
	 {
			
			$jsonurl = "https://api.twitter.com/1/statuses/user_timeline.json?screen_name=".$sear."&count=50&exclude_replies=true&&lang=en";
			$json = @file_get_contents($jsonurl,0,null,null);
			$json_output = json_decode($json);		
			$cerr=$json_output->error;
			$paginate=$json_output;			
			
			if($cerr=="Not authorized" || $cerr=="Not found")
			{			   
			   echo "<h3 class='noresult'>No such user exists <img src='images/nores_emo.png'/></h3>";
			   
			}
			else
			{
			//echo $source; // check parameter

			echo "<table id='apiresults' class='table table-twitter'>";

			for($i=$b;$i<$b+8;$i++)
			{
				  if(!empty($paginate[$i]))
				  {
				  echo "<tr>";
				  
				  echo "<td>";
				//  echo "{$res->user->profile_image_url_https}";
				  echo "<a href='https://twitter.com/".$paginate[$i]->user->screen_name."' target='_blank'><img src='".$paginate[$i]->user->profile_image_url."'/></a>";
				  echo "</td>";
				
				  $txt=$paginate[$i]->text;
				  $txt = preg_replace( '/(?!<\S)(\w+:\/\/[^<>\s]+\w)(?!\S)/i', '<a href="$1" target="_blank">$1</a>', $txt );
				  $txt=preg_replace_callback('/@([a-zA-Z0-9_])*(\\s|:)/','atUserLink',$txt);
				  echo "<td class='userspace'>";
				  echo $txt;
				  echo "</td>";
				  echo "</tr>";
				  }
				  
			}
			echo "</table>";
			}
	 }
		if($_GET['scat']=="toptrends") // trending topics
		{
		// top trending topics in India
		$jsonurl = "http://api.twitter.com/1/trends/23424848.json";
		$json = @file_get_contents($jsonurl,0,null,null);
		$json_output = json_decode($json,true);
		$cnt=0;
		$tdcnt=0;


		if(empty($json_output))
		{			
			echo "<h3 class='noresult'>No topics trending in India <img src='images/nores_emo.png'/></h3>";
		}

		else
		{

		$trends=$json_output[0]['trends'];
		echo "<table id='trendresults' class='table table-bordered'>";
		echo "<tr><td>India Trends</td></tr>";
		foreach ( $trends as $trend )
		{
			$cnt+=1;
			$tdcnt+=1;
			if($tdcnt==1)
			{
				echo "<tr>";
			}
			echo "<td class='trendspace'>";
			echo "<label class='ctrends' id='agt".$cnt."'>";
			echo $trend['name'];			
			echo "</label>";
			echo "</td>";						
			if($tdcnt==2)
			{
				echo "</tr>";
				$tdcnt=0;
			}
		
		}
		echo "</table>";
		}
		}
		// fb results
		if($_GET['scat']=="defaulttfb")
		{
			$jsonurl = "https://graph.facebook.com/search?q=".$sear."&type=post";
			$json = @file_get_contents($jsonurl,0,null,null);
			$json_output = json_decode($json);
			$paginate=$json_output->data;
			if(empty($json_output))
			{			   				
				echo "<h3 class='noresult'>No results found <img src='images/nores_emo.png'/></h3>";
			}
			else
			{
				echo "<table id='apiresults' class='table table-facebook'>";
				for($i=$b;$i<$b+8;$i++)
				{
				if(!empty($paginate[$i]->message))
				{
				//	$json_userid_url="https://graph.facebook.com/".$paginate[$i]->from->id;					
				//	$json_profile_pic=json_decode(@file_get_contents($json_userid_url,0,null,null));					
					echo "<tr>";						  
						  echo "<td><a href='https://www.facebook.com/".$paginate[$i]->from->id."' target='_blank'>";
					/*	  if(!empty($json_profile_pic->username))
						  {
							echo "<img src='https://graph.facebook.com/".$json_profile_pic->username."/picture' />";
						  }
						  else
						  {
							echo "<img src='images/f_prof_def.png' />";
						  }
					*/	  
						  echo $paginate[$i]->from->name;
						  echo "</a></td>";
						  $txt=$paginate[$i]->message;
						  $txt = preg_replace( '/(?!<\S)(\w+:\/\/[^<>\s]+\w)(?!\S)/i', '<a href="$1" target="_blank">$1</a>', $txt );
						  echo "<td class='postspace'>";
						  if(strlen($txt)>200)
						  {
							echo substr($txt,0,200)."...";
						  }
						  else
						  {
							echo $txt;
						  }
						  echo "</td>";
						  echo "</tr>";
						  
				}
				}
				echo "</table>";
			}
		}
		
		if($_GET['scat']=="fbpages")
		{
			$jsonurl = "https://graph.facebook.com/search?q=".$sear."&type=page";
			$json = @file_get_contents($jsonurl,0,null,null);
			$json_output = json_decode($json);
			$paginate=$json_output->data;
			if(empty($json_output))
			{			   				
				echo "<h3 class='noresult'>No results found <img src='images/nores_emo.png'/></h3>";
			}
			else
			{
				echo "<table id='apiresults' class='table table-facebook'>";
				echo "<tr><th>Page name</th><th>Category</th></tr>";
				for($i=$b;$i<$b+8;$i++)
				{
				
					if(!empty($paginate[$i]->name))
					{
					echo "<tr>";						  
						  echo "<td><a href='https://www.facebook.com/".$paginate[$i]->id."' target='_blank'>";
					  
						  echo $paginate[$i]->name;
						  echo "</a></td>";
						  $txt=$paginate[$i]->category;
						  //$txt = preg_replace( '/(?!<\S)(\w+:\/\/[^<>\s]+\w)(?!\S)/i', '<a href="$1" target="_blank">$1</a>', $txt );
						  echo "<td class='postspace'>";
						  if(strlen($txt)>200)
						  {
							echo substr($txt,0,200)."...";
						  }
						  else
						  {
							echo $txt;
						  }
						  echo "</td>";
						  echo "</tr>";
						  
					}
				}
				echo "</table>";
			}
		}
		
		if($_GET['scat']=="fbevents")
		{
			$jsonurl = "https://graph.facebook.com/search?q=".$sear."&type=event";
			$json = @file_get_contents($jsonurl,0,null,null);
			$json_output = json_decode($json);
			$paginate=$json_output->data;
			if(empty($json_output))
			{			   				
				echo "<h3 class='noresult'>No results found <img src='images/nores_emo.png'/></h3>";
			}
			else
			{
				echo "<table id='apiresults' class='table table-facebook'>";
				echo "<tr><th>Event name</th><th>Details</th></tr>";
				for($i=$b;$i<$b+8;$i++)
				{
					if(!empty($paginate[$i]->name))
					{					
					echo "<tr>";						  
						  echo "<td><a href='https://www.facebook.com/".$paginate[$i]->id."' target='_blank'>";
					
						  echo $paginate[$i]->name;
						  echo "</a></td>";
						  $txt="Start time: ".$paginate[$i]->start_time." End time: ".$paginate[$i]->end_time." Location: ".$paginate[$i]->location;
						  //$txt = preg_replace( '/(?!<\S)(\w+:\/\/[^<>\s]+\w)(?!\S)/i', '<a href="$1" target="_blank">$1</a>', $txt );
						  echo "<td class='postspace'>";
						 /* if(strlen($txt)>200)
						  {
							echo substr($txt,0,200)."...";
						  }
						  else
						  {*/
							echo $txt;
						  //}
						  echo "</td>";
						  echo "</tr>";
					}	  
				
				}
				echo "</table>";
			}
		}
		// fb results
		
		
		// youtube api call
		if($_GET['scat']=="defaultut")
		{
			$feedUrl='http://gdata.youtube.com/feeds/api/videos?q='.$sear.'&max-results=50&v=2&alt=jsonc';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds,$b);		
		}
		if($_GET['scat']=="uttrend")
		{
		//	echo "uttrend";
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/on_the_web?max-results=50&v=2&alt=jsonc';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds,$b);		
		}
		if($_GET['scat']=="uttop")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/top_rated?max-results=50&v=2&alt=jsonc';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds,$b);		
		}
		if($_GET['scat']=="utmostv")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/most_viewed?max-results=50&v=2&alt=jsonc';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds,$b);		
		}
		if($_GET['scat']=="utmostp")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/most_popular?max-results=50&v=2&alt=jsonc';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds,$b);		
		}
		if($_GET['scat']=="utmostr")
		{
			$feedUrl='https://gdata.youtube.com/feeds/api/standardfeeds/most_recent?max-results=50&v=2&alt=jsonc';
			$loadedFeeds = getFeeds($feedUrl);
			displayResults($loadedFeeds,$b);		
		}
		
		// youtube api call
	 
}

?>
</div>
<?php

function atUserLink($matches)
{
$same=$matches[0];
$trunc_match=substr($matches[0],1,strlen($matches[0])-1);
$trunc_match=str_replace(":","",$trunc_match);
return "<a class='userlink' href='http://twitter.com/".$trunc_match."' target='_blank'>".$same."</a>";
}
// youtube api fetch code from sesii
function getFeeds($findDetailsFromURL){
		
	//$feed_entry=file_get_contents($findDetailsFromURL);
	//echo $feed_entry;
	$json = @file_get_contents($findDetailsFromURL,0,null,null);
	$json_output = json_decode($json);
	$feed_entry=$json_output->data->items;
	return $feed_entry;
	
}
function displayResults($feed_entry,$pgn)
{
echo "<table id='apiresults' class='table'>";
// foreach ($feed_entry->entry as $entry) 
if(empty($feed_entry))
{
echo "<h3 class='noresult'>No results found <img src='images/nores_emo.png'/></h3>";

}
else
{
 for($i=$pgn;$i<$pgn+8;$i++)
 {								        
        $length = $feed_entry[$i]->duration; 
        $rating=(($feed_entry[$i]->rating)>0)?($feed_entry[$i]->rating):0;
        

        // print record        
        echo "<tr>";
        echo "<td><a href='".$feed_entry[$i]->player->default."' target='_blank'><img src='".$feed_entry[$i]->thumbnail->sqDefault."'/></a></td>";
				
		echo "<td class='utspace'><a class='noline' href='".$feed_entry[$i]->player->default."' target='_blank'>".$feed_entry[$i]->title."</a><br/>";
		
        echo sprintf("%0.2f", $length/60) . " min. | {$rating} user rating"."<br/>";
		if(strlen($feed_entry[$i]->description)>150)
		{
			echo substr($feed_entry[$i]->description,0,150) . " ...";
		}
		else
		{
			echo $feed_entry[$i]->description;
		}
		
		echo "</td>";
        echo "</tr>";				
      }
 	  echo "</table>";	
  }
 }

// youtube api fetch code from sesii
?>

</body>
</html>
