var myApp = angular.module('app',[]);
$(".card").flip({
  trigger: 'manual'
});
myApp.controller('GreetingController', ['$scope','$http', function($scope, $http) {

  $scope.user = {};
  width = 420;

  $scope.calculateQuantity = function() {
  	   var check = true;
  	   var check2 = true;

	   if(!$("#fullName").val()){
	   		$("#fullName").css("border-bottom", "1px solid red");
	   		check2 = false;
	   }else{
	   		$("#fullName").css("border-bottom", "1px solid #000");
	   }

	   if(!$('#email').val()){
	   			$("#email").css("border-bottom", "1px solid red");
	   			check = false;
	   		
	   }else{
	   		$("#email").css("border-bottom", "1px solid #000");
	   		if(!isValidEmailAddress($('#email').val())){
	   			check = false;
	   			$("#email").css("border-bottom", "1px solid red");
	   		}else{
	   			check = true;
	   		}
	   }

	   if (!$("#aboutArea").val()) {
	   		$("#aboutArea").css("border-bottom", "1px solid red");
	   		check = false;
	   }else{
			$("#aboutArea").css("border-bottom", "1px solid #000");
	   }

	   if (check && check2) {
		    $('#holder').animate({scrollLeft: width }, 600);
		    $('#nextButt').fadeOut(100);
		    $('#submitButt').fadeIn(300);

	   }
  };
	
   $scope.formSubmit = function(){
   	var answer = $("#submitRequest");
  	if (!answer.val()) {
  		answer.css("border-bottom", "1px solid red");
  		check3 = false;
  	}else{
  		answer.css("border-bottom", "1px solid #000");
  		$http({
		method: 'POST',
		url: '/sendMail',
		data: $.param({
			name: $scope.name,
			email: $scope.email,
			about: $scope.about,
			motiv: $scope.radioValue,
			output: $scope.output
			
		}),
		headers: {'Content-Type' : 'application/X-WWW-form-urlencoded'}
	})
	.success(function(data){
		if (data == 'exists') {
			$('.card').css('background', 'url("/imgs/x.png")');
			$('.card').flip(true);
		}else{
			$('.card').css('background', 'url("/imgs/yr.png")');
  			$('.card').flip(true);
  		}
	})
	.error(function(data){
		console.log(data);
	});
  	}
   		
   }
}]);
function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
};


$('#backButt').click(function(e){
	e.preventDefault();
	$('#submitButt').hide();
	$('#nextButt').fadeIn(300);
    $('#holder').animate({scrollLeft: -width }, 600);
});

$('#submitButt').click(function(){

});