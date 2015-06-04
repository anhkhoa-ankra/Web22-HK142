<div ng-app="commentsApp"  ng-controller="CommentListCtrl" class="comments-list">
	<h2 class="line-comment-blue">
		<div id="post_id" style="display:none;"><?php echo $post->id?></div>
		<span class="h2-line">@{{comments.list.length}} Comments </span>
	</h2>	
		 <div  ng-repeat="comment in comments.list">
			<div ng-if="checkComment(comment.id, comment.approved)" class="row comments-item">
				<div class="col-sm-2"><img class="user-img thumbnail" src="http://now.avg.com/wp-content/themes/AVG_Now/assets/images/default_user.png"></div>
			  	<div class="col-sm-10">
			 		<p class="comments-user-name"><a href="#">
					  	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						<span class="sr-only">Date:</span>@{{comment.name}}
			  		</a></p>
			  		<p>
			  			<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
		  				<span class="sr-only">Date:</span><a href="#"><b>Website:</b> @{{comment.website}}</a><br>
			  			<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
			  			<span class="sr-only">Date:</span><b>Time:</b> @{{comment.created_at.date}} 
			  			<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
			  			<span class="sr-only">Time:</span> <b>Place:</b> @{{comment.created_at.timezone}}
			  		</p>
			  		<p class="comments-content">
			  			@{{comment.content}}</p>
			  		<h2 class="line-comment-red"><span class="h4-line">
							<a href="" ng-click="reply(comment.name, comment.id)"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Reply</a>
					</span></h2>
					<div ng-repeat="subComment in comment.childs">
						<div ng-if="subComment.approved == 1" class="row comment-item" ng-init="load_subComment(subComment)">
							<div class="col-sm-3"><img class="user-img thumbnail" src="https://cdn3.iconfinder.com/data/icons/toolbar-people/512/user_man_male_profile_account_person_people-512.png"></div>
				  			<div class="col-sm-9">
				  				<p class="comments-user-name"><a href="#">
						  			<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
						  			<span class="sr-only">Date:</span> @{{subComment.name}}
						  		</a></p>
						  		<p>
						  			<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
						  			<span class="sr-only">Date:</span><a href="#"><b>Website:</b> @{{subComment.website}}</a><br>
						  			<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						  			<span class="sr-only">Date:</span> <b>Time:</b> @{{subComment.created_at.date}}
						  			<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
						  			<span class="sr-only">Time:</span> <b>Place:</b> @{{subComment.created_at.timezone}}
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
		<div class="comments-form" ng-init="load_comments()">
		<div><h4><span>@{{message}}</span></h4></div>
		<h4 ng-if="checkReply"><span class="cancel-comment"><a href="" ng-click="replyCancel()">Cancel Reply</a></span></h4>
		<form>
			<p>Your email address will not be published.</p>
			<p><input ng-model="user.name" class="form-control" name="author" id="author" type="text" value="" size="45" aria-required="true" placeholder="Your Name"></p>
			<p><input ng-model="user.mail" class="form-control" name="email" id="email" type="text" value="" size="45" aria-required="true" placeholder="Your Email"></p>
			<p><input ng-model="user.website" class="form-control" name="url" id="url" type="text" value="" size="45" placeholder="Your Website"></p>
			<p>
			<textarea ng-model="user.content" class="form-control" name="comment" id="comment" rows="10" aria-required="true" placeholder="Your Comment"></textarea>
			</p>
			<p class="form-submit text-right">

			<input ng-click="submit()" name="submit" type="submit" id="comment-submit" class="btn btn-primary" value="Post Comment">
			</p>
		</form>
		</div>
</div>
