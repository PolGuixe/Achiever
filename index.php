<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="HandheldFriendly" content="true" />

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
		 <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
         	
        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="js/jquery.js"></script>
        
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
        <script src="js/jquery.datetimepicker.js"></script>
        
        <title>Achiever</title>
    </head>
    <body>
		<div class="panel intro">
            <div id="logo">
                <img src="http://jsr35.host.cs.st-andrews.ac.uk/EF/img/achiever1-5-1000px.png"><br>
            <span>Be who you want to be</span>
            </div><!--logo-->
            <div class="header">
                Achieve your goals<br/>
            </div>
           
           <div class="contentWrapper">
           	<span>It's as easy as 1, 2, 3,...</span>        
           </div><!--contentWrapper-->
           <div class="imageBox">
           	<div class="imageWrapper">
           		<img src="http://jsr35.host.cs.st-andrews.ac.uk/EF/img/trophy.jpg">
                  <span>1.Choose your goal</span>
				</div>
               <div class="imageWrapper">
					<img src="http://jsr35.host.cs.st-andrews.ac.uk/EF/img/social.jpg">
                  <span>2.Set your stake</span>
               </div>
				<div class="imageWrapper">
					<img src="http://jsr35.host.cs.st-andrews.ac.uk/EF/img/achievement.jpg"> 
                	<span>3.Achieve your dreams!</span>
               </div> 
           </div>
           <div style="clear:both"></div>
           <div class="help">
           	<a onclick='overlay("overlay1")'>   ?</a>
            <div class="overlay" id="overlay1">
                <div>
                	<p>Achiever helps you to commit to your goals fully and overcome behavioural inertia. You tell us what you want to do and we use your social network to actually make you do it. Check out our blog for more info about the science behind it <a href="http://behaviouralinsights.wordpress.com/">here </a> </p>
                </div>
             </div>
           </div>  
           
           <div class="buttonWrapper"> 
           <input type="button" id="introButton" value="Set your GOAL!"> 
           </div>
               
		</div>
        
		<div class="panel chooseGoal">
			<div class="header">
            <span> Let's get started </span> 
            </div>
             <div class="contentWrapper"> 
				<span>I want to ....
    				<select id="goal_type" >
                    	<option value="null" selected disabled>Choose my goal</option>
                    	<option value="exercise">Exercise</option>
                      <option value="wakeup">Wake up early</option>  
					</select></span><br>
               
                    <div id="goal_extra">
                  	<span id="goal_desc_label"></span><br>
                 		<input type="text" id="goal_desc" value="i.e. 3 times"><br>
                 		<span id="goal_time_label"></span><br>
                  
                   
                 		<div class="datepickerContainer">
                            <input type="text" id="goal_time" name="goal_time">
                 		</div><!--datepickerContainer--> 
                 </div><!--goalextra -->
                 </div><!--contentWrapper-->

           <div class="help">
            <a onclick='overlay("overlay2")'>   ?</a>
            <div class="overlay" id="overlay2">
                <div>
                    <p>To make the best use of Achiever ensure your goals are clear and measureable.  For more info click <a href="http://behaviouralinsights.wordpress.com/">here </a> </p>
                </div>
             </div>
           </div>  

                 <div class="buttonWrapper"> 
                 <input type="button" class="nextButton" id="chooseGoalnext" value="Next"> 
                 </div>
		</div>


        



		<div class="panel logFace">
        	<div class="header">
				<span class="login">Login</span>
           </div>
           <div class="imageBox" style="width: 400px;">
           	
           		<img src="http://jsr35.host.cs.st-andrews.ac.uk/EF/img/fac2.png">
                  
				
                </div>
           <div class="contentWrapper">      
				Login with Facebook
   				<input type="button" name="fb_login" id="fb_login" value="Login"><br>
           </div><!--contentWrapper-->
                
            <!--  <div class="buttonWrapper">   
              <input type="button" class="nextButton" id="logFacenext" value="next"> 
              </div>-->
	        <div class="help">
	            <a onclick='overlay("overlay3")'>   ?</a>
	            <div class="overlay" id="overlay3">
	                <div>
	                    <p>If you fail to achieve your goals, we will let your Facebook friends know. Please give us permission to do this. For more info click  <a href="http://behaviouralinsights.wordpress.com/">here </a> </p>
	                </div>
	             </div>
	           </div>  
		</div>


        
		<div class="panel setStake">
			<div class="header">Set your stake</div>
			<div class="contentWrapper">
				<p> <h1> I stake ...</h1>  </p>
				<select id="stake_type" >
                    	<option value="facebookpost">One facebook post</option>
                      <option value="postphoto" selected disabled>Post a horrible picture on Facebook</option>
                      <option value="money" selected disabled>Give us a fiver!</option>
                      <option value="reward" selected disabled>Get a discount in your gym membership!</option> 
                      <option value="null" selected disabled>Choose your stake</option>
				</select><br>
				<div id="stake_extra">
                <input type="text" id="stake_desc" value="Saying... i.e. I am rubbish!"><br>
				
					<span id="stake_desc_label"> If I don't achieve my goal.... my friends will know! </span>
				</div><!--stakeextra-->
					
			</div><!--contentWrapper-->

            <div class="help">
            <a onclick='overlay("overlay4")'>   ?</a>
            <div class="overlay" id="overlay4">
                <div>
                    <p>In order to motivate you, there will be something at stake if you do not achieve your goal. Please select your motivator. </p>
                </div>
             </div>
           </div> 
                
           <div class="buttonWrapper"> 
           <input type="button" class="nextButton"id="setStakenext" value="Next"> 
           </div>
		</div>
		
        <div class="panel chooseReferee">
			<div class="header">Nominate your referee</div>
				<div class="contentWrapper">
					Select your referee:
                 
                 			<input type="text" id="ref_mail" value="i.e. yourbestfriend@gmail.com"><br>
                  		<input type="button" id="confirm_button" value="Set your goal!">
              </div><!--contentWrapper-->     
	<div class="help">
	            <a onclick='overlay("overlay5")'>   ?</a>
	            <div class="overlay" id="overlay5">
	                <div>
	                    <p>Someone will have to check on your progress, to make sure you really do what you promise. Select this person carefully to be independent and fair, your social reputation might be at stake. For more info click <a href="http://behaviouralinsights.wordpress.com/">here </a> </p>
	                </div>
	             </div>
	           </div> 
	</div>


<div class="panel congrats">
			<div id="congrats">CONGRATULATIONS!</div>
            <div class="contentWrapper">
            You have set your goal. Now go ACHIEVE!
			</div><!--contentWrapper--> 


</div>
<div id="footer">
<div id="logo">
   <img src="http://jsr35.host.cs.st-andrews.ac.uk/EF/img/achiever1-5-1000px.png"><br>
   <span>Be who you want to be</span>
   </div><!--logo-->


       
<p> Check out our <a href="http://behaviouralinsights.wordpress.com/" >blog! </a> </p>




</div><!--footer-->



		


<div id="fb-root"></div>
    <script src="js/main.js"></script>

    </body>
</html>

