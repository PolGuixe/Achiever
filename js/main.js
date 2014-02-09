//globals
var uid = null;
var accessToken = null;

function logOut(){
	
}

function logIn(){
	FB.login(function(response) {
	   if (response.authResponse) {
	     console.log('Welcome!  Fetching your information.... ');
	     FB.api('/me', function(response) {
	       console.log(response);
	       uid = response["id"];
	       accessToken =   FB.getAuthResponse()['accessToken'];
	     });
	   } else {
	     console.log('User cancelled login or did not fully authorize.');
	   }
	});
}


$(window).load(function() {
	$("#fb_login").click(function(){
		logIn();
	})
	
	FB.getLoginStatus(function(response) {
	  if (response.status === 'connected') {
	    uid = response.authResponse.userID;
	    accessToken = response.authResponse.accessToken;
	    $(".logFace").hide();
	  }
	 });
	
	$('#goal_time').datetimepicker({
		format: 'Y/m/d H:i:s'
	});

});