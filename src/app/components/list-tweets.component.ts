import {Component, OnInit} from "@angular/core";
import {TweetService} from "../services/tweet.service";
import {Status} from "../classes/status";
import {TweetProfile} from "../classes/tweetProfile";

@Component({
	selector: "list-tweet",
	templateUrl: "./templates/list-tweets.php"
})

export class ListTweetsComponent implements OnInit{

	//declare needed state variables for latter use
	status: Status = null;

	tweetProfile: TweetProfile = new TweetProfile(null,null,null,null);
	tweetProfiles: TweetProfile[] = [];

	constructor(private tweetService: TweetService) {}

	//life cycling before my eyes
	ngOnInit() : void {
		this.listTweets()
	}


	listTweets(): void {
		this.tweetService.getAllTweets()
			.subscribe(tweetProfiles => this.tweetProfiles = tweetProfiles);

	}
}