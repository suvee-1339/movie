<?php

//index.php

session_start();

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Movie Search</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
  <style>
  .form_style
  {
   width: 600px;
   margin: 0 auto;
  }
  </style>
 </head>
 <body>
  
  <div class="container" ng-app="live_search_app" ng-controller="live_search_controller" ng-init="fetchData()">
   <br />
   <h3 align="center">BOOK YOUR SHOW</h3>
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_query" ng-model="search_query" ng-keyup="fetchData()" placeholder="Search by Movies" class="form-control" />
    </div>
   </div>
   <br />
   <table class="table table-striped table-bordered">
    <thead>
     <tr>
      <th>Movies Name</th>
      <th>Theatre Name</th>
      <th>Theatre Location</th>
      <th>Release Date</th>
      <th>Book</th>
     </tr>
    </thead>
    <tbody>
     <tr ng-repeat="data in searchData">
      <td>{{ data.movies }}</td>
      <td>{{ data.theatre }}</td>
      <td>{{ data.location }}</td>
      <td>{{ data.date }}</td>
      <td><a href="book.php">Book Now</a><br>
     </tr>
    </tbody>
   </table>
  </div>
  
 </body>
</html>

<script>
var app = angular.module('live_search_app', []);
app.controller('live_search_controller', function($scope, $http){
 $scope.fetchData = function(){
  $http({
   method:"POST",
   url:"fetch.php",
   data:{search_query:$scope.search_query}
  }).success(function(data){
   $scope.searchData = data;
  });
 };
});
</script>