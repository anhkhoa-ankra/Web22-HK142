var commentsApp = angular.module('commentsApp',[]);

commentsApp.controller('CommentListCtrl', function ($scope) {
  $scope.fuck = 'fuck yeaeh';
  $scope.list = [
    {	id: 1,
    	IDparent: undefined,
    	name: 'David Beckham',
    	date: 'May 12, 2014',
    	time: '11:15 PM',
    	mail: 'jkyokovu@gmail.com',
     	content: 'Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.'},
    {	id: 2,
    	IDparent: 1,
    	name: 'Mourinho',
    	date: 'May 12, 2014',
    	time: '11:15 PM',
    	mail: 'jkyokovu@gmail.com',
     	content: 'Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori.'},
    {	id: 3,
    	IDparent: undefined,
    	name: 'Alex Ferguson',
    	date: 'May 12, 2014',
    	time: '11:15 PM',
    	mail: 'jkyokovu@gmail.com',
     	content: 'Celery quandong swiss chard chicory earthnut pea potato. Salsify taro catsear garlic gram celery bitterleaf wattle seed collard greens nori. Grape wattle seed kombu beetroot horseradish carrot squash brussels sprout chard.Lorem ipsum primis elementum et integer tincidunt purus senectus litora luctus, nisi metus hac egestas senectus erat consequat phasellus egestas aliquam pharetra, neque eleifend magna imperdiet neque suspendisse aenean dictumst sit.'}
  ];
  $scope.subList = $scope.list;
});