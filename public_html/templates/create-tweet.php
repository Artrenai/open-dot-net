<form class="form" #createTweets="ngForm" name="createTweets" (ngSubmit)="createTweet();">
	<div class="input-group">
		<label for="tweetContent"></label>

		<input id="tweetContent" class="form-control" placeholder="Tweet Tweet" type="text" name="tweetContent"
				 required [(ngModel)]=tweet.tweetContent #tweetContent="ngModel">
		<span class="input-group-btn"><button type="submit" id="submit" name="createTweets" class="btn btn-info">Submit</button></span>
	</div>

</form>

<div *ngIf="status !== null" class="alert alert-dismissible" [ngClass]="status.type" role="alert">
	<button type="button" class="close" aria-label="Close" (click)="status = null;"><span
			aria-hidden="true">&times;</span></button>
	{{ status.message }}

</div>


