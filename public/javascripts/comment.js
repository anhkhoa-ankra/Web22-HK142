//javascript variable
var today = new Date();
function abc(){
  var post_id = $('#post_id').text();
  alert(post_id);
}

//angular variable
var commentsApp = angular.module('commentsApp',[]);

commentsApp.controller('CommentListCtrl', function ($scope, $http) {
  $scope.fuck = 'fuck yeaeh';
  $scope.list = [
    {	id: 1,
    	IDparent: undefined,
    	name: 'David Beckham',
    	date: 'May 12, 2014',
    	time: '11:15 PM',
    	mail: 'jkyokovu@gmail.com',
    	website: 'david.com',
     	content: 'Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.'},
    {	id: 2,
    	IDparent: 1,
    	name: 'Mourinho',
    	date: 'May 12, 2014',
    	time: '11:15 PM',
    	mail: 'jkyokovu@gmail.com',
    	website: 'david.com',
     	content: 'Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori.'},
    {	id: 3,
    	IDparent: undefined,
    	name: 'Alex Ferguson',
    	date: 'May 12, 2014',
    	time: '11:15 PM',
    	mail: 'jkyokovu@gmail.com',
    	website: 'david.com',
     	content: 'Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.Lorem ipsum primis elementum et integer tincidunt purus senectus litora luctus, nisi metus hac egestas senectus erat consequat phasellus egestas aliquam pharetra, neque eleifend magna imperdiet neque suspendisse aenean dictumst sit.'}
  ];
  $scope.subList = $scope.list;
  $scope.user = {};
  $scope.user.new = {};
  $scope.user.submit = function(){
  	$scope.user.new.id = 5;
  	$scope.user.new.IDparent = undefined;
  	$scope.user.new.name = $scope.user.name;
  	$scope.user.new.date = 'May 19, 2014';
  	$scope.user.new.time = '11:15 PM';
  	$scope.user.new.mail = $scope.user.mail;
  	$scope.user.new.website = $scope.user.website;
  	$scope.user.new.content = $scope.user.content;

	$scope.list.push($scope.user.new);
  };
  $scope.abc = {};
  $scope.load_comments = function(){
    var post_id = $('#post_id').text();
    $scope.link = "/comment?post=" + post_id;
    $http({
      method: 'GET',
      url: $scope.link
      }).success(function(data) {
        console.log(data);
        alert(data);
    }).error(function(error) {
      console.log(error);
    });
  }
});