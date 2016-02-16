var myApp = angular.module('app',[]);

myApp.controller('GreetingController', ['$scope', function($scope) {

  $scope.user = {};

  $scope.calculateQuantity = function() {
   console.log($("#fullName").val());
  };

  $scope.submitClicked = function(){
  	$('#submitButt').html('<i class="fa fa-spinner fa-spin" style="margin-right:22px"></i>');
  };
}]);
var width = 420;
$('#nextButt').click(function(e){
	e.preventDefault();
    $('#holder').animate({scrollLeft: width }, 600);
    $(this).fadeOut(100);
    $('#submitButt').fadeIn(300);
});

$('#backButt').click(function(e){
	e.preventDefault();
	$('#submitButt').hide();
	$('#nextButt').fadeIn(300);
    $('#holder').animate({scrollLeft: -width }, 600);
    
});

$('#submitButt').click(function(){

});