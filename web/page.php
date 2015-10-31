<html><head>
        <meta charset="UTF-8">
                 <link rel="icon" type="image/x-icon" href="/logo.png">   
        <title>SecuriNets Challenge</title>
     		                            <script type="text/javascript" src="/js/c52743d.js"></script>
<script language="javascript">
		function getPage(url)
		{
			$.ajax( {
				type : "GET",
			    url : url , 
			    success : function(data)
			        {
			        $('#mainBoxDiv').html(data);
			        },
		            error : function(xhr,options,erorrs)
		            {
							if (xhr.status == 403 ) alert("Your query was banned : code 403") ;
							else alert("An error has occurred");
		            }
			});
			$.ajax( {
				type : "GET",
			    url : "/app.php/challengerInfo" , 
			    success : function(data1)
			        {
			        $('#infoChallengerDiv').html(data1);
			        },
		            error : function(xhr1,options1,erorrs1)
		            {
							if (xhr1.status == 403 ) alert("Your query was banned : code 403") ;
							else alert("An error has occurred");
		            }
			});
		}

</script>
         
 

		     <script language="javascript">
		     		function getNews(url)
							{
							$.ajax(
								{
								type : "GET" ,
								url : url ,
								dataType : "json",
								success : function(data){
								if (data.exist) {
									alert("Info \n "+data.news);
								}
							}
								}
								);
							}
					window.setInterval(function(){getNews("/app.php/getNews")}
							,60000
							);
		     		</script>
		     

     			   <link rel="stylesheet" href="/css/8c25389.css" type="text/css">
		
<style>
	.lien:hover
	{
	cursor:  pointer;
	background-color : #505050 ;
	}	
	</style>
		
		

     </head>
<body style="background-image : url('/ctf_website.jpg'); background-size: cover ; ">

		<header>
		
<div class="navbar navbar-inverse">
<div class="container">
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><img style="width:80px ; height:50px;" src="/logo.png"></li>
<li><a onclick="getPage('/app.php/getRules')" class="lien">Rules</a></li>
<li><a onclick="getPage('/app.php/getTasks')" class="lien">Tasks</a></li>
<li><a onclick="getPage('/app.php/score')" class="lien">Ranking</a></li>
<li><a onclick="getPage('/app.php/stat')" class="lien">Statistiques</a></li>
</ul>
<div class="navbar-right">
<a href="/app.php/logout"><button class="btn btn-danger " style="height:50px;"><b>Log out <br>(Empereur)</b></button></a>
</div>
</div>
</div>
</div>	
		</header>
<style>
		#countDownBlock
		{
		position : relative ;
		height : 50px ;
		width : 30% ;
		margin-left : 5%;
		
		}
</style>
<div id="countDownBlock">
		 	
</div>

<aside class="aside2" id="infoChallengerDiv">				<style>
		#zoneInfo
		{
		width : 80%;
		position  : relative ;
		color : #27A400 ;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#000), color-stop(.5, rgba(0, 100, 0, .5)), to(#000));
	background-image: -moz-linear-gradient(top, #000, rgba(0, 100, 0, .5) 50%, #000);
	-webkit-transition: opacity 1000ms ease;
	-moz-transition: opacity 1000ms ease;
		border-radius : 150px ;
		padding-bottom : 10px ;
		}
		</style>

		<div id="zoneInfo">
		<center>
			<u><h3>Info</h3></u>
		     Empereur <br>
		     Rank :  61 <br>
		     Score : 0
		</center>
		</div>
				     </aside>			
		<article id="mainBoxDiv"><style>
.tableScore
{
border: 4px inset grey;
width : 80% ;
}

th 
{
border: 4px inset grey;
text-align: center;
font-size : 18px;
color : white ;
}

td
{
border: 4px inset grey;
text-align: center;
font-size : 14px;
}

</style>
<div style=" width: 100% ; height : 100% ;"> <!-- overflow-y : auto ; -->
<br>
<center>
<h3>Score Board</h3>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Highcharts Example</title><div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div><table class="tableScore">
  <thead>
  <tr><th>
  #
  </th>
  <th width="20%">
  Challenger
  </th>
  <th width="60%">
  Validated Tasks
  </th>
  <th width="20%">
  Score
  </th>
  </tr></thead>
  																																																																																																																																																																																																																						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 											 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 						  					 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 						  					 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 						  					 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																																																																																			 											 						  					 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 						  					 											 											 						  					 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																																																																																																																			 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																																																																																																																										  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 											 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 																																																																																																																																																																																																							 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																																																																																							 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 						  					 											 						  					 											 											 											 																																																																																																																																																																																																							 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																																																							 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																																																																																																							 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																							 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 															  																																																																																																																																																																												  					 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																				  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 						  					 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 						  					 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 						  					 											 											 											 											 											 						  					 											 											 											 											 						  					 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 						  					 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 						  					 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																																																																									 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 															  																																																																																																																																																														  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 						  					 						  					 											 											 											 											 											 						  					 											 						  					 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 						  					 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 																																																																																																																																																																											 											 											 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 						  					 											 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 						  					 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																																																											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																																																											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 															  																																																																																																																																																																																			  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 						  					 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 											 						  					 						  					 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 											 						  					 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																																																																																 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																																																																																 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 															  																																																																																																																																																																												  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 											 											 											 											 											 						  					 						  					 											 						  					 											 						  					 											 											 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 											 											 											 											 											 						  					 						  					 											 						  					 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 											 											 											 											 											 						  					 						  					 											 											 											 											 											 						  					 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 											 											 											 											 											 						  					 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																																																																																																																			  					 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																											  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 											 											 											 											 											 											 						  					 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 						  					 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																																																 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																																																																																																 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																																																																																 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																																																																																																												  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																				  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 						  					 											 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 						  					 											 											 											 											 											 						  					 											 						  					 											 						  					 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 						  					 											 											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 						  					 											 											 											 						  					 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 																																																																																																																																																																																									 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																																																																																														  					 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																																																						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 						  					 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																																																											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																																																											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																																																											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																																																																											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 																																																																																																																																																																											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																																																											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 																																																																																																																																																																											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 															  																																																																																																																																		  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 																																																																																																																																															 						  					 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 						  					 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 											 											 											 											 						  					 											 											 											 						  					 											 											 											 											 											 																																																																																																																																															 											 											 											 											 											 						  					 											 											 											 											 											 											 						  					 											 											 																																																																																																																																															 											 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																															 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 															  																																																																																																																																		  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 						  					 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 						  					 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 						  					 											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																															 											 						  					 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 						  					 											 											 											 											 											 											 											 						  					 											 						  					 						  					 											 											 																																																																																																																																															 											 						  					 											 											 											 											 											 											 											 						  					 											 						  					 											 											 											 																																																																																																																																															 											 						  					 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																															 											 						  					 											 											 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																																															 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 															  																																																																																																																																		  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 						  					 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																																															 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 											 											 						  					 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																																															 											 											 											 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 						  					 											 						  					 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 											 						  					 											 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																																															 											 											 											 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																																															 											 											 											 											 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																																															 											 						  					 											 											 											 											 											 											 											 											 											 											 											 											 											 															  																																																																																																													  					 											 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																					  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 						  					 						  					 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																										 						  					 						  					 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																										 						  					 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 						  					 											 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																										 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 											 											 											 						  					 											 											 											 						  					 											 											 											 											 																																																																																																																										 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																										 											 											 											 											 											 											 											 											 											 											 											 						  					 																																																																																																																										 											 											 											 											 											 											 											 											 											 						  					 											 											 																																																																																																																										 											 											 											 											 											 											 											 											 											 											 						  					 											 																																																																																																																										 											 											 											 											 											 											 											 											 						  					 											 											 											 															  																																																																																																													  					 											 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																					  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 						  					 											 						  					 											 											 											 											 											 						  					 											 											 											 																																																																																																																										 						  					 											 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																										 						  					 											 											 											 						  					 						  					 											 											 											 											 											 											 																																																																																																																										 						  					 											 											 											 						  					 											 											 											 											 											 											 											 																																																																																																																										 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 											 											 											 						  					 											 											 						  					 											 											 											 											 											 																																																																																																																										 											 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																										 											 											 											 											 											 											 											 											 											 						  					 						  					 											 																																																																																																																										 											 											 											 											 											 											 											 											 											 						  					 											 											 																																																																																																																										 											 											 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																																						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																			 						  					 						  					 											 						  					 											 											 											 											 											 											 											 																																																																																																																			 						  					 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																			 						  					 											 											 											 						  					 											 											 											 											 											 											 																																																																																																																			 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																			 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																			 											 											 											 											 											 						  					 											 						  					 						  					 											 											 																																																																																																																			 											 											 											 											 											 						  					 											 						  					 											 						  					 											 																																																																																																																			 											 											 											 											 											 						  					 											 						  					 											 											 											 																																																																																																																			 											 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																			 											 											 											 											 											 											 						  					 											 											 											 											 																																																																																																																			 											 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																	  					 											 											 						  					 											 						  					 											 											 											 																																																																																									  					 											 											 						  					 											 											 						  					 											 											 																																																																																									  					 											 											 						  					 											 											 											 											 											 																																																																																									  					 											 											 											 						  					 											 											 											 											 																																																																																									  					 											 											 											 											 											 											 											 											 																																																																																														 						  					 											 											 											 											 											 						  					 											 																																																																																														 						  					 											 											 											 											 											 											 											 																																																																																														 											 											 											 											 											 											 											 						  					 																																																																																														 											 						  					 											 											 											 											 											 											 															  																																																																																															  					 						  					 											 						  					 											 											 											 											 											 											 											 																																																																																																							  					 						  					 											 											 											 											 											 											 											 											 											 																																																																																																							  					 											 						  					 											 											 											 											 						  					 											 											 											 																																																																																																							  					 											 						  					 											 											 											 											 											 											 											 											 																																																																																																							  					 											 											 											 											 											 											 											 											 											 											 																																																																																																												 											 											 											 						  					 						  					 						  					 											 											 											 											 																																																																																																												 											 											 											 						  					 						  					 											 											 											 											 											 																																																																																																												 											 											 											 						  					 											 											 											 											 											 											 																																																																																																												 											 											 											 											 											 											 											 						  					 											 											 																																																																																																												 											 											 											 											 											 											 											 											 						  					 											 																																																																																																												 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																																													  					 						  					 											 											 						  					 											 											 											 											 											 											 											 											 																																																																																																																					  					 						  					 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																					  					 											 											 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 											 						  					 						  					 											 						  					 											 											 											 											 											 											 											 																																																																																																																										 											 						  					 						  					 											 											 						  					 											 											 											 						  					 											 											 																																																																																																																										 											 						  					 						  					 											 											 						  					 											 											 											 											 						  					 											 																																																																																																																										 											 						  					 						  					 											 											 						  					 											 											 											 											 											 											 																																																																																																																										 											 						  					 						  					 											 											 											 											 											 											 											 											 											 																																																																																																																										 											 						  					 											 											 											 											 						  					 						  					 											 											 											 											 																																																																																																																										 											 						  					 											 											 											 											 						  					 											 											 											 											 											 																																																																																																																										 											 						  					 											 											 											 											 											 											 											 											 											 											 																																																																																																																										 											 											 											 											 											 											 											 											 						  					 											 											 											 																																																																																																																										 											 											 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																															  					 											 											 											 											 											 											 						  					 											 											 											 																																																																																																							  					 											 											 											 											 											 											 											 											 											 											 																																																																																																												 						  					 						  					 											 						  					 											 											 											 											 											 											 																																																																																																												 						  					 						  					 											 											 											 											 											 											 						  					 											 																																																																																																												 						  					 						  					 											 											 											 											 											 											 											 											 																																																																																																												 						  					 											 											 											 											 											 											 											 											 											 																																																																																																												 											 											 						  					 											 						  					 						  					 											 											 											 											 																																																																																																												 											 											 						  					 											 						  					 											 											 						  					 											 											 																																																																																																												 											 											 						  					 											 						  					 											 											 											 											 											 																																																																																																												 											 											 						  					 											 											 											 											 											 											 											 																																																																																																												 											 											 											 											 											 											 											 											 											 						  					 															  																																																																																															  					 											 											 											 											 											 											 											 											 											 											 																																																																																																												 											 											 						  					 											 						  					 											 											 						  					 											 											 																																																																																																												 											 											 						  					 											 						  					 											 											 											 											 											 																																																																																																												 											 											 						  					 											 											 						  					 											 											 											 											 																																																																																																												 											 											 						  					 											 											 											 											 											 											 											 																																																																																																												 											 											 											 											 											 											 											 											 											 						  					 																																																																																																												 						  					 											 											 						  					 											 											 											 											 											 											 																																																																																																												 						  					 											 											 											 											 											 						  					 											 											 											 																																																																																																												 						  					 											 											 											 											 											 											 											 											 											 																																																																																																												 											 						  					 											 											 											 											 											 											 											 											 																																																																																																												 											 											 											 											 											 											 											 											 						  					 											 															  																																																																																						 						  					 											 											 						  					 											 											 						  					 											 																																																																																														 						  					 											 											 						  					 											 											 											 											 																																																																																														 						  					 											 											 											 											 						  					 											 											 																																																																																														 						  					 											 											 											 											 											 											 											 																																																																																														 											 											 											 											 											 											 											 						  					 																																																																																									  					 											 											 						  					 											 											 											 											 											 																																																																																									  					 											 											 											 											 											 											 											 											 																																																																																														 											 											 											 											 						  					 											 											 											 																																																																																														 											 						  					 											 											 											 											 											 											 															  																																																																										  					 											 											 											 											 											 											 											 																																																																																							 											 											 						  					 											 						  					 											 											 																																																																																							 											 											 						  					 											 											 											 											 																																																																																							 											 											 											 						  					 											 											 											 																																																																																							 											 											 											 											 											 						  					 											 																																																																																							 											 											 											 											 											 											 						  					 																																																																																							 						  					 											 											 											 											 											 											 																																																																																							 											 						  					 											 											 											 											 											 															  																																																																																															  					 											 						  					 						  					 											 											 						  					 											 											 											 											 																																																																																																							  					 											 						  					 						  					 											 											 											 											 											 											 											 																																																																																																							  					 											 						  					 											 											 											 											 											 											 											 											 																																																																																																							  					 											 											 											 											 											 											 											 											 											 											 																																																																																																												 						  					 											 											 						  					 											 											 											 											 											 											 																																																																																																												 						  					 											 											 											 						  					 											 											 											 											 											 																																																																																																												 						  					 											 											 											 											 											 						  					 											 											 											 																																																																																																												 						  					 											 											 											 											 											 											 						  					 											 											 																																																																																																												 						  					 											 											 											 											 											 											 											 											 											 																																																																																																												 											 											 											 											 											 											 											 											 						  					 											 																																																																																																												 											 											 											 											 											 											 											 											 											 						  					 															  																																																																															 											 											 											 											 											 											 						  					 																																																																																		  					 											 											 											 											 											 											 											 																																																																																							 											 											 											 						  					 											 											 											 																																																																																							 											 											 											 											 						  					 											 											 																																																																																							 											 											 											 											 											 						  					 											 																																																																																							 						  					 											 											 											 											 											 											 																																																																																							 											 											 						  					 											 											 											 											 																																																																																							 											 						  					 											 											 											 											 											 															  																																																																										  					 											 											 						  					 											 											 											 											 																																																																																		  					 											 											 											 											 											 											 											 																																																																																							 						  					 						  					 											 						  					 						  					 											 											 																																																																																							 						  					 						  					 											 						  					 											 											 											 																																																																																							 						  					 						  					 											 											 											 						  					 											 																																																																																							 						  					 						  					 											 											 											 											 											 																																																																																							 						  					 											 											 											 											 											 											 																																																																																							 											 											 											 											 											 											 						  					 															  																																																																			  					 											 											 						  					 											 											 											 																																																																											  					 											 											 											 											 											 											 																																																																																 						  					 											 											 						  					 											 											 																																																																																 						  					 											 											 											 											 											 																																																																																 											 						  					 											 											 											 											 																																																																																 											 											 											 											 						  					 											 																																																																																 											 											 											 											 											 						  					 															  																																																												  					 											 											 											 						  					 											 																																																																				  					 											 											 											 											 											 																																																																									 						  					 						  					 						  					 											 											 																																																																									 						  					 						  					 											 											 											 																																																																									 						  					 											 											 											 											 																																																																									 											 											 											 											 						  					 															  																																																																								 											 											 						  					 											 											 											 																																																																																 											 											 											 											 						  					 											 																																																																																 											 											 											 											 											 						  					 																																																																											  					 						  					 											 											 											 											 											 																																																																											  					 											 						  					 											 											 											 											 																																																																											  					 											 											 											 											 											 											 																																																																																 											 											 											 						  					 											 											 															  																																																												  					 											 											 											 											 											 																																																																									 						  					 											 											 											 											 																																																																									 											 						  					 						  					 						  					 											 																																																																									 											 						  					 						  					 											 											 																																																																									 											 						  					 											 											 											 																																																																									 											 											 											 											 						  					 															  																																																																			  					 						  					 											 											 											 											 											 																																																																											  					 											 						  					 						  					 											 											 											 																																																																											  					 											 						  					 											 						  					 											 											 																																																																											  					 											 						  					 											 											 											 											 																																																																											  					 											 											 											 											 						  					 											 																																																																											  					 											 											 											 											 											 											 																																																																																 											 											 											 											 											 						  					 															  																																																										 						  					 						  					 											 											 																																																																		 						  					 											 											 											 																																																																		 											 											 											 						  					 																																																																		 											 											 						  					 											 																																																													  					 											 											 											 											 															  																																																																			  					 						  					 											 						  					 											 											 											 																																																																											  					 						  					 											 											 											 											 											 																																																																											  					 											 						  					 											 											 						  					 											 																																																																											  					 											 						  					 											 											 											 											 																																																																											  					 											 											 											 											 											 											 																																																																																 											 											 											 											 											 						  					 																																																																																 											 											 											 						  					 											 											 															  																																																												  					 											 											 											 											 											 																																																																									 						  					 						  					 						  					 											 											 																																																																									 						  					 						  					 											 											 											 																																																																									 						  					 											 											 						  					 											 																																																																									 						  					 											 											 											 											 																																																																									 											 											 											 											 						  					 															  																																																					  					 											 											 											 											 																																																																		 						  					 											 											 											 																																																																		 											 											 											 						  					 																																																																		 											 											 						  					 											 																																																																		 											 						  					 											 											 															  																																																												  					 											 						  					 											 											 											 																																																																				  					 											 											 						  					 											 											 																																																																				  					 											 											 											 											 											 																																																																									 											 											 											 											 						  					 																																																																									 											 											 											 						  					 											 																																																																									 						  					 											 											 											 											 															  																																							  					 											 											 																																																				 						  					 											 																																																				 											 						  					 															  																																														  					 						  					 											 											 																																																						  					 											 						  					 											 																																																						  					 											 											 											 																																																											 											 											 						  					 															  																																														  					 											 											 											 																																																											 						  					 											 											 																																																											 											 											 						  					 																																																											 											 						  					 											 															  																																														  					 											 											 											 																																																											 						  					 											 											 																																																											 											 						  					 											 																																																											 											 											 						  					 															  																																							  					 											 											 																																																				 											 						  					 																																																				 						  					 											 															  																																												 											 						  					 																																															  					 											 											 																																																				 						  					 											 															  																																												 											 						  					 																																																				 						  					 											 																																															  					 											 											 															  																																							  					 											 											 																																																				 						  					 											 																																																				 											 						  					 															  																																							  					 											 											 																																																				 						  					 											 																																																				 											 						  					 															  																																  					 											 																																													 						  					 															  																																					 						  					 																																								  					 											 															  																																					 						  					 																																								  					 											 															  																									  					 															  																																					 						  					 																																								  					 											 															  																																					 						  					 																																								  					 											 															  																																  					 											 																																													 						  					 															  																									  					 															  																									  					 															  																									  					 															  																									  					 															  																									  					 															  																									  					 															  																									  					 															  																									  					 															  																									  					 															  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				  				
  <tbody>
		
		

		<script type="text/javascript" src="/js/c52743d_jquery-1.9.1_1.js"></script>
		<script type="text/javascript">
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Statistiques CTF Securinets Qual 2015'
            },
            subtitle: {
                text: '20 Mars 2015'
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                	day: '%b %e',
                	month: '%B',
                	year: '%Y',
                	hour:'%H',
                	minute:'%M'
                },
                title: {
                    text: 'Date'
                }
            },
            yAxis: {
                title: {
                    text: 'Score'
                },
                min: 0
            },
            tooltip: {
                headerFormat: '<b>{series.name}</b><br>',
                pointFormat: '{point.x:%H:%M %b %e}: {point.y:.2f} m'
            },

            series: [
						{
                name: 'SpectriX',
                // Define the data points. All series have a dummy year
                // of 1970/71 in order to be compared on the same x axis. Note
                // that in JavaScript, months start at 0 for January, 1 for February etc.
                data: [
  		    		    		    			[Date.UTC(2015,03,20,20,00), 0 ],
	  			                    [Date.UTC(2015,03,20,21,30), 50 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,20,21,36), 150 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,01,14), 250 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,01,47), 400 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,02,19), 500 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,02,36), 650 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,03,14), 900 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,03,24), 1300 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,03,52), 1400 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,04,44), 1600 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,04,57), 1625 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,06,46), 1875 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,09,44), 1925 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,11,35), 2125 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,14,05), 2225 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,14,12), 2325 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,15,48), 2625 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,16,20), 2725 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,16,59), 2975 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,17,40), 3055 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,17,52), 3355 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,19,09), 3405 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,19,12), 3480 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,19,17), 3580 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,19,38), 3605 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,19,52), 3755 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,21,08), 3780 ]
			     , 	  		    	  			                    [Date.UTC(2015,03,21,21,40), 3830 ]
			     , 	  		    	  					[Date.UTC(2015,03,21,22,00), 3830 ]
		                    ]
            }
	    	      	    	    ]
        });
    });
    

		</script>
	
	
<script src="/js/highcharts/js/highcharts.js"></script>
<script src="/js/highcharts/js/modules/exporting.js"></script>


      <tr>
    <td>
    	1
    </td>
  
  	<td>
  		SpectriX
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Broken , 
  		  		Google , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Document , 
  		  		Card Games (Jeux de cartes) , 
  		  		Be Genious , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Reverse , 
  		  		Hidden1 , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Mathematics (Mathématique) , 
  		  		Admin Banned , 
  		  		Obfuscation , 
  		  		Please don't stop the music , 
  		  		Misc PWNable , 
  		  		Recon1 , 
  		  		Ghost in wires , 
  		  		Forensics2 , 
  		  		Tedx , 
  		  		Upside down (A l'envers) , 
  		  		Bonus1 , 
  		  		Reverse 0 , 
  		  		Bonus2 , 
  		  		mail , 
  				  	</td>
  	
  	<td>
  		3830
  	</td>
  </tr>
    <tr>
    <td>
    	2
    </td>
  
  	<td>
  		SpectriXJunior
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Broken , 
  		  		Google , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Document , 
  		  		Card Games (Jeux de cartes) , 
  		  		Be Genious , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Mathematics (Mathématique) , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Please don't stop the music , 
  		  		Reverse , 
  		  		Obfuscation , 
  		  		Upside down (A l'envers) , 
  		  		Tedx , 
  		  		Admin Banned , 
  		  		Hidden1 , 
  		  		Recon1 , 
  		  		Forensics2 , 
  		  		Reverse 0 , 
  		  		Ghost in wires , 
  				  	</td>
  	
  	<td>
  		3480
  	</td>
  </tr>
    <tr>
    <td>
    	3
    </td>
  
  	<td>
  		COIAC
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Document , 
  		  		Google , 
  		  		Broken , 
  		  		Be Genious , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Lock , 
  		  		Account disabled (compte désactivé) , 
  		  		Basics (Basique) , 
  		  		Reverse , 
  		  		Obfuscation , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Ghost in wires , 
  		  		Misc PWNable , 
  		  		Card Games (Jeux de cartes) , 
  		  		Forensics2 , 
  		  		Reverse 0 , 
  		  		Tedx , 
  		  		Admin Banned , 
  		  		Please don't stop the music , 
  		  		Recon1 , 
  				  	</td>
  	
  	<td>
  		3480
  	</td>
  </tr>
    <tr>
    <td>
    	4
    </td>
  
  	<td>
  		pleaseImid
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Lock , 
  		  		Admin Banned , 
  		  		Obfuscation , 
  		  		Be Genious , 
  		  		Misc PWNable , 
  		  		Card Games (Jeux de cartes) , 
  		  		Google , 
  		  		Ghost in wires , 
  		  		Reverse , 
  		  		Document , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Reverse 0 , 
  		  		Please don't stop the music , 
  		  		Mathematics (Mathématique) , 
  		  		Broken , 
  		  		Account disabled (compte désactivé) , 
  		  		Tedx , 
  		  		Bonus2 , 
  		  		Matrix everywhere (Des matrices partout) , 
  				  	</td>
  	
  	<td>
  		3350
  	</td>
  </tr>
    <tr>
    <td>
    	5
    </td>
  
  	<td>
  		DATATECH
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Lock , 
  		  		Broken , 
  		  		Account disabled (compte désactivé) , 
  		  		Basics (Basique) , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Obfuscation , 
  		  		Be Genious , 
  		  		Card Games (Jeux de cartes) , 
  		  		Hidden1 , 
  		  		Tedx , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Mathematics (Mathématique) , 
  		  		Reverse , 
  		  		Reverse 0 , 
  		  		Misc PWNable , 
  		  		Please don't stop the music , 
  		  		Recon1 , 
  		  		Google , 
  		  		Bonus2 , 
  		  		mail , 
  		  		Document , 
  				  	</td>
  	
  	<td>
  		3255
  	</td>
  </tr>
    <tr>
    <td>
    	6
    </td>
  
  	<td>
  		FSBShadows
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Broken , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Obfuscation , 
  		  		Card Games (Jeux de cartes) , 
  		  		Hidden1 , 
  		  		Be Genious , 
  		  		Tedx , 
  		  		Mathematics (Mathématique) , 
  		  		Reverse 0 , 
  		  		Misc PWNable , 
  		  		Please don't stop the music , 
  		  		Recon1 , 
  		  		Google , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Bonus2 , 
  		  		Reverse , 
  		  		mail , 
  				  	</td>
  	
  	<td>
  		3105
  	</td>
  </tr>
    <tr>
    <td>
    	7
    </td>
  
  	<td>
  		0x1337
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Broken , 
  		  		Be Genious , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Google , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Card Games (Jeux de cartes) , 
  		  		Document , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Misc PWNable , 
  		  		Forensics2 , 
  		  		Obfuscation , 
  		  		Bonus1 , 
  		  		Reverse 0 , 
  		  		Tedx , 
  		  		Mathematics (Mathématique) , 
  		  		Hidden1 , 
  		  		Please don't stop the music , 
  		  		Recon1 , 
  		  		mail , 
  				  	</td>
  	
  	<td>
  		3055
  	</td>
  </tr>
    <tr>
    <td>
    	8
    </td>
  
  	<td>
  		dcua
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Document , 
  		  		Broken , 
  		  		Google , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Account disabled (compte désactivé) , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Be Genious , 
  		  		Mathematics (Mathématique) , 
  		  		Ghost in wires , 
  		  		Reverse , 
  		  		Please don't stop the music , 
  		  		Obfuscation , 
  		  		Bonus1 , 
  		  		Forensics2 , 
  		  		Reverse 0 , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Bonus2 , 
  		  		Tedx , 
  		  		mail , 
  				  	</td>
  	
  	<td>
  		3000
  	</td>
  </tr>
    <tr>
    <td>
    	9
    </td>
  
  	<td>
  		Spiderz
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Document , 
  		  		Broken , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Account disabled (compte désactivé) , 
  		  		Basics (Basique) , 
  		  		Google , 
  		  		Mathematics (Mathématique) , 
  		  		Reverse , 
  		  		Lock , 
  		  		Please don't stop the music , 
  		  		Admin Banned , 
  		  		Tedx , 
  		  		Obfuscation , 
  		  		Forensics2 , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Bonus1 , 
  		  		Hidden1 , 
  		  		Reverse 0 , 
  				  	</td>
  	
  	<td>
  		2375
  	</td>
  </tr>
    <tr>
    <td>
    	10
    </td>
  
  	<td>
  		ASIS
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Document , 
  		  		Broken , 
  		  		crack1 , 
  		  		Google , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Reverse , 
  		  		Be Genious , 
  		  		Card Games (Jeux de cartes) , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Reverse 0 , 
  		  		Forensics2 , 
  		  		Please don't stop the music , 
  				  	</td>
  	
  	<td>
  		2375
  	</td>
  </tr>
    <tr>
    <td>
    	11
    </td>
  
  	<td>
  		Zoldik
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Broken , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Decrypt me (Décrypte moi) , 
  		  		Please don't stop the music , 
  		  		Document , 
  		  		Misc PWNable , 
  		  		Reverse 0 , 
  		  		Mathematics (Mathématique) , 
  		  		Obfuscation , 
  		  		Tedx , 
  		  		Hidden1 , 
  				  	</td>
  	
  	<td>
  		1975
  	</td>
  </tr>
    <tr>
    <td>
    	12
    </td>
  
  	<td>
  		cyber
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Broken , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Decrypt me (Décrypte moi) , 
  		  		Please don't stop the music , 
  		  		Document , 
  		  		Mathematics (Mathématique) , 
  		  		Misc PWNable , 
  		  		Tedx , 
  		  		Reverse 0 , 
  		  		Hidden1 , 
  		  		Obfuscation , 
  				  	</td>
  	
  	<td>
  		1975
  	</td>
  </tr>
    <tr>
    <td>
    	13
    </td>
  
  	<td>
  		BalalaikaCr3w
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Broken , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Basics (Basique) , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Reverse , 
  		  		Google , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Be Genious , 
  		  		Forensics2 , 
  		  		Reverse 0 , 
  				  	</td>
  	
  	<td>
  		1875
  	</td>
  </tr>
    <tr>
    <td>
    	14
    </td>
  
  	<td>
  		girav
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Reverse , 
  		  		Basics (Basique) , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Broken , 
  		  		Lock , 
  		  		Obfuscation , 
  		  		Account disabled (compte désactivé) , 
  		  		Please don't stop the music , 
  		  		Ghost in wires , 
  		  		Reverse 0 , 
  		  		Tedx , 
  				  	</td>
  	
  	<td>
  		1850
  	</td>
  </tr>
    <tr>
    <td>
    	15
    </td>
  
  	<td>
  		Hexpresso
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Broken , 
  		  		Basics (Basique) , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Please don't stop the music , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Ghost in wires , 
  		  		Forensics2 , 
  		  		crack1 , 
  		  		Reverse 0 , 
  		  		mail , 
  				  	</td>
  	
  	<td>
  		1425
  	</td>
  </tr>
    <tr>
    <td>
    	16
    </td>
  
  	<td>
  		CTFinfinit
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Reverse , 
  		  		Basics (Basique) , 
  		  		Broken , 
  		  		Cookies , 
  		  		Ghost in wires , 
  		  		Lock , 
  		  		Tedx , 
  		  		Obfuscation , 
  				  	</td>
  	
  	<td>
  		1400
  	</td>
  </tr>
    <tr>
    <td>
    	17
    </td>
  
  	<td>
  		CyberSec
  	</td>
  	
  	<td>
  		  		Broken , 
  		  		Lock , 
  		  		Be Genious , 
  		  		Basics (Basique) , 
  		  		Cookies , 
  		  		crack1 , 
  		  		Account disabled (compte désactivé) , 
  		  		Card Games (Jeux de cartes) , 
  		  		Hidden1 , 
  		  		Tedx , 
  		  		Bonus1 , 
  				  	</td>
  	
  	<td>
  		1375
  	</td>
  </tr>
    <tr>
    <td>
    	18
    </td>
  
  	<td>
  		Battiikhs
  	</td>
  	
  	<td>
  		  		Broken , 
  		  		Lock , 
  		  		Cookies , 
  		  		Decrypt me (Décrypte moi) , 
  		  		Hidden1 , 
  		  		Tedx , 
  		  		Account disabled (compte désactivé) , 
  		  		Basics (Basique) , 
  		  		Mathematics (Mathématique) , 
  		  		crack1 , 
  		  		Obfuscation , 
  		  		Recon1 , 
  		  		mail , 
  				  	</td>
  	
  	<td>
  		1355
  	</td>
  </tr>
    <tr>
    <td>
    	19
    </td>
  
  	<td>
  		Unknowns
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Broken , 
  		  		Be Genious , 
  		  		Basics (Basique) , 
  		  		Lock , 
  		  		Account disabled (compte désactivé) , 
  		  		Mathematics (Mathématique) , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Please don't stop the music , 
  		  		Forensics2 , 
  				  	</td>
  	
  	<td>
  		1325
  	</td>
  </tr>
    <tr>
    <td>
    	20
    </td>
  
  	<td>
  		noraneco
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Document , 
  		  		Broken , 
  		  		Google , 
  		  		Basics (Basique) , 
  		  		Hidden1 , 
  		  		Please don't stop the music , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Obfuscation , 
  		  		Forensics2 , 
  				  	</td>
  	
  	<td>
  		1275
  	</td>
  </tr>
    <tr>
    <td>
    	21
    </td>
  
  	<td>
  		HackCat
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Broken , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Reverse , 
  		  		Basics (Basique) , 
  		  		Cookies , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Obfuscation , 
  				  	</td>
  	
  	<td>
  		1225
  	</td>
  </tr>
    <tr>
    <td>
    	22
    </td>
  
  	<td>
  		9tatesManelAmara
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Broken , 
  		  		Account disabled (compte désactivé) , 
  		  		Be Genious , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		1175
  	</td>
  </tr>
    <tr>
    <td>
    	23
    </td>
  
  	<td>
  		Freeways1337
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Broken , 
  		  		Basics (Basique) , 
  		  		Cookies , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Account disabled (compte désactivé) , 
  		  		Mathematics (Mathématique) , 
  		  		Document , 
  		  		Lock , 
  		  		Recon1 , 
  		  		Bonus1 , 
  				  	</td>
  	
  	<td>
  		1030
  	</td>
  </tr>
    <tr>
    <td>
    	24
    </td>
  
  	<td>
  		noname
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Broken , 
  		  		Google , 
  		  		Matrix everywhere (Des matrices partout) , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Obfuscation , 
  				  	</td>
  	
  	<td>
  		1025
  	</td>
  </tr>
    <tr>
    <td>
    	25
    </td>
  
  	<td>
  		ITeam
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  		  		Cookies , 
  		  		Account disabled (compte désactivé) , 
  		  		Broken , 
  		  		Dos Attack (Attaque Dos) , 
  		  		Obfuscation , 
  		  		Lock , 
  		  		Bonus1 , 
  				  	</td>
  	
  	<td>
  		1000
  	</td>
  </tr>
    <tr>
    <td>
    	26
    </td>
  
  	<td>
  		JeSuisAkil
  	</td>
  	
  	<td>
  		  		Document , 
  		  		Card Games (Jeux de cartes) , 
  		  		Recon1 , 
  		  		Mathematics (Mathématique) , 
  		  		Upside down (A l'envers) , 
  		  		Forensics2 , 
  		  		mail , 
  				  	</td>
  	
  	<td>
  		780
  	</td>
  </tr>
    <tr>
    <td>
    	27
    </td>
  
  	<td>
  		Spounchers
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Cookies , 
  		  		Account disabled (compte désactivé) , 
  		  		Basics (Basique) , 
  		  		Lock , 
  		  		Ghost in wires , 
  				  	</td>
  	
  	<td>
  		775
  	</td>
  </tr>
    <tr>
    <td>
    	28
    </td>
  
  	<td>
  		usedoils
  	</td>
  	
  	<td>
  		  		Broken , 
  		  		Account disabled (compte désactivé) , 
  		  		Document , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Cookies , 
  		  		Matrix everywhere (Des matrices partout) , 
  				  	</td>
  	
  	<td>
  		725
  	</td>
  </tr>
    <tr>
    <td>
    	29
    </td>
  
  	<td>
  		IsStDaXe
  	</td>
  	
  	<td>
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		crack1 , 
  		  		Account disabled (compte désactivé) , 
  		  		Card Games (Jeux de cartes) , 
  		  		Hidden1 , 
  				  	</td>
  	
  	<td>
  		725
  	</td>
  </tr>
    <tr>
    <td>
    	30
    </td>
  
  	<td>
  		TheDHARMAInitiative
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  		  		Broken , 
  		  		Google , 
  		  		Please don't stop the music , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Forensics2 , 
  				  	</td>
  	
  	<td>
  		725
  	</td>
  </tr>
    <tr>
    <td>
    	31
    </td>
  
  	<td>
  		nomatta
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Account disabled (compte désactivé) , 
  		  		Misc PWNable , 
  		  		Reverse 0 , 
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		625
  	</td>
  </tr>
    <tr>
    <td>
    	32
    </td>
  
  	<td>
  		IDKIDC
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Basics (Basique) , 
  		  		Tedx , 
  		  		Please don't stop the music , 
  		  		Lock , 
  		  		mail , 
  		  		Hidden1 , 
  				  	</td>
  	
  	<td>
  		600
  	</td>
  </tr>
    <tr>
    <td>
    	33
    </td>
  
  	<td>
  		SDSLabs
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Broken , 
  		  		Basics (Basique) , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  		  		Tedx , 
  				  	</td>
  	
  	<td>
  		550
  	</td>
  </tr>
    <tr>
    <td>
    	34
    </td>
  
  	<td>
  		KH2RS
  	</td>
  	
  	<td>
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		crack1 , 
  		  		Account disabled (compte désactivé) , 
  		  		Broken , 
  				  	</td>
  	
  	<td>
  		525
  	</td>
  </tr>
    <tr>
    <td>
    	35
    </td>
  
  	<td>
  		CSupTB
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  		  		Broken , 
  		  		Cookies , 
  		  		Hidden1 , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  				  	</td>
  	
  	<td>
  		525
  	</td>
  </tr>
    <tr>
    <td>
    	36
    </td>
  
  	<td>
  		Jwe3a
  	</td>
  	
  	<td>
  		  		Google , 
  		  		Card Games (Jeux de cartes) , 
  		  		Matrix everywhere (Des matrices partout) , 
  				  	</td>
  	
  	<td>
  		500
  	</td>
  </tr>
    <tr>
    <td>
    	37
    </td>
  
  	<td>
  		BoolShift
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  		  		Broken , 
  		  		Lock , 
  		  		Mathematics (Mathématique) , 
  				  	</td>
  	
  	<td>
  		425
  	</td>
  </tr>
    <tr>
    <td>
    	38
    </td>
  
  	<td>
  		CaptureTheSwag
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Broken , 
  		  		Document , 
  		  		crack1 , 
  				  	</td>
  	
  	<td>
  		400
  	</td>
  </tr>
    <tr>
    <td>
    	39
    </td>
  
  	<td>
  		EatToSleep
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Lock , 
  		  		Basics (Basique) , 
  		  		Mathematics (Mathématique) , 
  				  	</td>
  	
  	<td>
  		375
  	</td>
  </tr>
    <tr>
    <td>
    	40
    </td>
  
  	<td>
  		c0d3r
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Account disabled (compte désactivé) , 
  		  		Lock , 
  				  	</td>
  	
  	<td>
  		350
  	</td>
  </tr>
    <tr>
    <td>
    	41
    </td>
  
  	<td>
  		WhAtEvEr
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Lock , 
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		325
  	</td>
  </tr>
    <tr>
    <td>
    	42
    </td>
  
  	<td>
  		OuMed
  	</td>
  	
  	<td>
  		  		Broken , 
  		  		Basics (Basique) , 
  		  		Lock , 
  				  	</td>
  	
  	<td>
  		325
  	</td>
  </tr>
    <tr>
    <td>
    	43
    </td>
  
  	<td>
  		Darwin
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		crack1 , 
  		  		Document , 
  				  	</td>
  	
  	<td>
  		300
  	</td>
  </tr>
    <tr>
    <td>
    	44
    </td>
  
  	<td>
  		4then4
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Broken , 
  		  		crack1 , 
  				  	</td>
  	
  	<td>
  		250
  	</td>
  </tr>
    <tr>
    <td>
    	45
    </td>
  
  	<td>
  		baghdadi
  	</td>
  	
  	<td>
  		  		Cookies , 
  		  		Lock , 
  				  	</td>
  	
  	<td>
  		250
  	</td>
  </tr>
    <tr>
    <td>
    	46
    </td>
  
  	<td>
  		winners
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  		  		Lock , 
  				  	</td>
  	
  	<td>
  		225
  	</td>
  </tr>
    <tr>
    <td>
    	47
    </td>
  
  	<td>
  		JeNNy
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Broken , 
  				  	</td>
  	
  	<td>
  		200
  	</td>
  </tr>
    <tr>
    <td>
    	48
    </td>
  
  	<td>
  		Hawk1n5
  	</td>
  	
  	<td>
  		  		Lock , 
  				  	</td>
  	
  	<td>
  		200
  	</td>
  </tr>
    <tr>
    <td>
    	49
    </td>
  
  	<td>
  		HJHSH
  	</td>
  	
  	<td>
  		  		Broken , 
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		125
  	</td>
  </tr>
    <tr>
    <td>
    	50
    </td>
  
  	<td>
  		ISITDTU
  	</td>
  	
  	<td>
  		  		crack1 , 
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		125
  	</td>
  </tr>
    <tr>
    <td>
    	51
    </td>
  
  	<td>
  		frincks
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  		  		Account disabled (compte désactivé) , 
  				  	</td>
  	
  	<td>
  		125
  	</td>
  </tr>
    <tr>
    <td>
    	52
    </td>
  
  	<td>
  		LCABP
  	</td>
  	
  	<td>
  		  		Cookies , 
  				  	</td>
  	
  	<td>
  		50
  	</td>
  </tr>
    <tr>
    <td>
    	53
    </td>
  
  	<td>
  		bucen
  	</td>
  	
  	<td>
  		  		Cookies , 
  				  	</td>
  	
  	<td>
  		50
  	</td>
  </tr>
    <tr>
    <td>
    	54
    </td>
  
  	<td>
  		khack40
  	</td>
  	
  	<td>
  		  		Cookies , 
  				  	</td>
  	
  	<td>
  		50
  	</td>
  </tr>
    <tr>
    <td>
    	55
    </td>
  
  	<td>
  		Getctf
  	</td>
  	
  	<td>
  		  		Cookies , 
  				  	</td>
  	
  	<td>
  		50
  	</td>
  </tr>
    <tr>
    <td>
    	56
    </td>
  
  	<td>
  		mau5
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		25
  	</td>
  </tr>
    <tr>
    <td>
    	57
    </td>
  
  	<td>
  		Hackosis
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		25
  	</td>
  </tr>
    <tr>
    <td>
    	58
    </td>
  
  	<td>
  		n00bs
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		25
  	</td>
  </tr>
    <tr>
    <td>
    	59
    </td>
  
  	<td>
  		Securicom
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		25
  	</td>
  </tr>
    <tr>
    <td>
    	60
    </td>
  
  	<td>
  		Insecurity
  	</td>
  	
  	<td>
  		  		Basics (Basique) , 
  				  	</td>
  	
  	<td>
  		25
  	</td>
  </tr>
    <tr>
    <td>
    	61
    </td>
  
  	<td>
  		1337Sector
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	62
    </td>
  
  	<td>
  		scarrednets
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	63
    </td>
  
  	<td>
  		Poutchy
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	64
    </td>
  
  	<td>
  		Battikhs
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	65
    </td>
  
  	<td>
  		mourouj6
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	66
    </td>
  
  	<td>
  		NotANumber
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	67
    </td>
  
  	<td>
  		sWxY99
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	68
    </td>
  
  	<td>
  		Losers
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	69
    </td>
  
  	<td>
  		guisnel
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	70
    </td>
  
  	<td>
  		Fj3wA
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	71
    </td>
  
  	<td>
  		gumGroup
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	72
    </td>
  
  	<td>
  		Aegis
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	73
    </td>
  
  	<td>
  		SecurinetsISI
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	74
    </td>
  
  	<td>
  		NotSunnyD
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	75
    </td>
  
  	<td>
  		DegdegTeam
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	76
    </td>
  
  	<td>
  		Sala9ta
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	77
    </td>
  
  	<td>
  		proHackers
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	78
    </td>
  
  	<td>
  		n0l3ptr
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	79
    </td>
  
  	<td>
  		TEAMXOR
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	80
    </td>
  
  	<td>
  		cctt
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	81
    </td>
  
  	<td>
  		Nightingale
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	82
    </td>
  
  	<td>
  		frenchies
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	83
    </td>
  
  	<td>
  		Hopjesvla
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	84
    </td>
  
  	<td>
  		javox
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	85
    </td>
  
  	<td>
  		1337AT
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	86
    </td>
  
  	<td>
  		BYTE
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	87
    </td>
  
  	<td>
  		Codernate
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	88
    </td>
  
  	<td>
  		Arose
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	89
    </td>
  
  	<td>
  		BabyPhD
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	90
    </td>
  
  	<td>
  		blackshark
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	91
    </td>
  
  	<td>
  		xenocidewiki
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	92
    </td>
  
  	<td>
  		gooligans
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	93
    </td>
  
  	<td>
  		dodododo
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	94
    </td>
  
  	<td>
  		XVHHV
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	95
    </td>
  
  	<td>
  		FSBSHADOWS2
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    <tr>
    <td>
    	96
    </td>
  
  	<td>
  		Empereur
  	</td>
  	
  	<td>
  				  	</td>
  	
  	<td>
  		0
  	</td>
  </tr>
    </tbody>
</table>
</center> 
</div>
</article>
<div style="display:none">clave@securinets.com</div>


</body></html>
