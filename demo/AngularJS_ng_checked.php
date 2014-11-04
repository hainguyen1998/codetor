<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Example - example-checkbox-input-directive-production</title>
  
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.0/angular.min.js"></script>
  
</head>
<body ng-app="checkboxExample">
   <script>
   angular.module('checkboxExample', [])
     .controller('ExampleController', ['$scope', function($scope) {
       $scope.value1 = 1;
       $scope.value2 = 'Default Message'
     }]);
 </script>
 <form name="myForm" ng-controller="ExampleController">
   Value1: 
   <input type="checkbox" ng-model="value1"> <br/>
   Value2: 
   <input type="checkbox" ng-model="value2"  ng-true-value="'Custom True Message'" ng-false-value="'Custom False Message'"> <br/>
   <tt>value1 = {{value1}}</tt><br/>
   <tt>value2 = {{value2}}</tt><br/>
  </form>
</body>
</html>