<div ng-app="commentsApp"  ng-controller="CommentListCtrl" class="comments-list">
	<h2 class="line-comment-blue">
		<span class="h2-line">3s Comments</span>
	</h2>	
		 <div ng-repeat="comment in list">
			<div ng-if="comment.IDparent == undefined" class="row comments-item">
				<div class="col-sm-2"><img class="user-img thumbnail" src="http://now.avg.com/wp-content/themes/AVG_Now/assets/images/default_user.png"></div>
			  	<div class="col-sm-10">
			 		<p><a class="comments-user-name" href="#">
					  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<span class="sr-only">Date:</span>@{{comment.name}}
			  		</a></p>
			  		<p>
			  			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
		  				<span class="sr-only">Date:</span><a href="#">Mail: @{{comment.mail}}</a><br>
			  			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
			  			<span class="sr-only">Date:</span> @{{comment.date}} 
			  			<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			  			<span class="sr-only">Time:</span> @{{comment.time}}
			  		</p>
			  		<p class="comments-content">
			  			@{{comment.content}}</p>
			  		<h2 class="line-comment-red">
						<span class="h4-line"><a href="#"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Reply</a></span>
					</h2>
					<div ng-repeat="subComment in subList">
						<div ng-if="subComment.IDparent == comment.id" class="row comment-item">
							<div class="col-sm-3"><img class="user-img thumbnail" src="https://cdn3.iconfinder.com/data/icons/toolbar-people/512/user_man_male_profile_account_person_people-512.png"></div>
				  			<div class="col-sm-9">
				  				<p><a class="comments-user-name" href="#">
						  			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						  			<span class="sr-only">Date:</span> @{{subComment.name}}
						  		</a></p>
						  		<p>
						  			<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						  			<span class="sr-only">Date:</span><a href="#">Mail: @{{subComment.mail}}</a><br>
						  			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						  			<span class="sr-only">Date:</span> @{{subComment.date}}
						  			<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						  			<span class="sr-only">Time:</span> @{{subComment.time}}
						  		</p>
						  		<p class="comments-content">
						  			@{{subComment.content}}
						  		</p>
				  			</div>
						</div>
					</div>

			  	</div>
		  	</div>
		</div>
</div>