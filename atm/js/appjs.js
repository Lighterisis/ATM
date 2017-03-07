var app = angular.module('app',[]);
app.controller("controller",function($scope) {
	var s = $scope;
	s.confirm = function() {
	  var money = $scope.money;
	  $scope.x = 0;
	  $scope.y = 0;
	  $scope.z = 0;
	  $scope.checker = true;
	  $scope.checkerbill = true;
	  if(money%100 != 0){
	  	$scope.checker = false;
	  	return ;
	  }

	  while(money >= 100) {
	      if(money >= 1000) {
	        money = money-1000;
	        $scope.x++;
	        if($scope.x > 99){
	        	$scope.checkerbill = false;
	        }
	        continue;
	      }
	      if(money >= 500) {
	        money = money-500;
	        $scope.y++;
	        if($scope.y > 30){
	        	$scope.checkerbill = false;
	        }
	        continue;
	      }
	      if(money >= 100) {
	        money = money-100;
	        $scope.z++;
	        if($scope.z > 300){
	        	$scope.checkerbill = false;
	        }
	        continue;
	      }
  		}
  		s.confirm = function() {
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