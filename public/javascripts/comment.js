//javascript variable
var today = new Date();

//angular variable
var commentsApp = angular.module('commentsApp',[]);

commentsApp.controller('CommentListCtrl', function ($scope, $http) {
  $scope.comments = {};
  $scope.comments.list = [];
  $scope.comments.subList = [];
  $scope.user = {};
  $scope.checkReply = false;
  $scope.reply = {};
  $scope.message = "Leave A Reply";
  $scope.submit = function(){
    $scope.comments.new();
    if($scope.checkReply){
      for(i = 0; i < $scope.comments.list.length; i++){

        if($scope.comments.list[i].id == $scope.reply.id){
          $scope.comments.list[i].childs.push($scope.comments.data);
          $.post("/comment",
            {
              'post': $scope.comments.data.id,
              'cmt-parent': $scope.reply.id,
              'cmt-name': $scope.comments.data.name,
              'cmt-email': $scope.comments.data.mail,
              'cmt-website': $scope.comments.data.website,
              'cmt-content': $scope.comments.data.content
            },
            function(data,status){
                alert("You send comment success");
          });
        }

      }
    }else{
      $scope.comments.add($scope.comments.data);
      $.post("/comment",
        {
          'post': $scope.comments.data.id,
          'cmt-name': $scope.comments.data.name,
          'cmt-email': $scope.comments.data.mail,
          'cmt-website': $scope.comments.data.website,
          'cmt-content': $scope.comments.data.content
        },
        function(data,status){
            alert("You send comment success");
        });
    }
  }
  $scope.comments.new = function(){
    $scope.comments.data = {};
    $scope.comments.data.id = $('#post_id').text();
    $scope.comments.data.name = $scope.user.name;
    $scope.comments.data.mail = $scope.user.mail;
    $scope.comments.data.childs = [];
    $scope.comments.data.approved = 1;
    $scope.comments.data.created_at = {};
    $scope.comments.data.created_at.date = "04/06/2014 11:12PM";
    $scope.comments.data.created_at.timezone = "Asia/ HaNoi;"
    $scope.comments.data.website = $scope.user.website;
    $scope.comments.data.content = $scope.user.content;
  }
  $scope.reply = function(name, id){
    $scope.reply.id = id;
    $scope.checkReply = true;
    $scope.message = "Reply to " + name;
  }
  $scope.replyCancel = function(){
    $scope.checkReply = false;
    $scope.message = "Leave A Reply";
  }
  $scope.comments.reset = function(){
    $scope.comments.list = [];
    $scope.comments.subList = [];
  };
  $scope.comments.add = function(comment){
    $scope.comments.list.push(comment);
  };
  $scope.comments.addChilds = function(comments){

  }
  $scope.load_comments = function(){
    var post_id = $('#post_id').text();
    $scope.link = "/comment?post=" + post_id;
    $http({
      method: 'GET',
      url: $scope.link
      }).success(function(data) {
        $scope.comments.reset();
        for(i = 0; i < data.length; i++){
          $scope.comments.add(data[i]);
        }
    }).error(function(error) {
      console.log(error);
    });
  }
  $scope.load_subComment = function(subComment){
    $scope.comments.subList.push(subComment);
  };
  $scope.checkComment = function(id, approved){
    for(i = 0; i < $scope.comments.subList.length; i++){
      if(id == $scope.comments.subList[i].id)
        return false;
    }
    if(approved == 1)
      return true;
    return false;
  };
});