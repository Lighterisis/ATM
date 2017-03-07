var app = angular.module('app',[]);
app.controller("controller",function($scope) {
	var s = $scope;
	s.confirm = function() {
	  var money = $scope.money;
	  $scope.x = 0; $scope.a = 99; 
	  $scope.y = 0; $scope.b = 30;
	  $scope.z = 0; $scope.c = 300;
	  $scope.checker = true;
	  $scope.checkerbill = true;

	  if(money%100 != 0){
	  	$scope.checker = false;
	  	return ;
	  }else if(money > 144000){
	  	$scope.checkerbill = false;
	  }else{
			  while(money >= 100) {
			      if(money >= 1000 && $scope.a > 0) {
			        money -= 1000;
			        $scope.x++;
			        $scope.a--;
			        continue;
			      }
			      if(money >= 500 && $scope.b > 0) {
			        money -= 500;
			        $scope.y++;
			        $scope.b--;
			        continue;
			      }
			      if(money >= 100 && $scope.c > 0) {
			        money -= 100;
			        $scope.z++;
			        $scope.c--;
			        continue;
			      }
		  		}
		  	 alert("Confirm your money -> " + $scope.money);
			}
		}
});

app.$inject = ['$scope'];
app.directive('format', ['$filter', function ($filter) {
    return {
        require: '?ngModel',
        link: function (scope, elem, attrs, ctrl) {
            if (!ctrl) return;


            ctrl.$formatters.unshift(function (a) {
                return $filter(attrs.format)(ctrl.$modelValue)
            });


            ctrl.$parsers.unshift(function (viewValue) {
                var plainNumber = viewValue.replace(/[^\d|\-+|\.+]/g, '');
                elem.val($filter(attrs.format)(plainNumber));
                return plainNumber;
            });
        }
    };
}]);