import {Injectable} from "@angular/core";
import {Http} from "@angular/http";
import {BaseService} from "./base.service";
import {Status} from "../classes/status";
import {Tweet} from "../classes/tweet";
import {Observable} from "rxjs/Observable";
import {TweetProfile} from "../classes/tweetProfile";

@Injectable ()
export class TweetService extends BaseService {

	constructor(protected http:Http ) {
		super(http);
	}

	//define the API endpoint
	private tweetUrl = "api/tweet/";

	// call to the tweet API and delete the tweet in question
	deleteTweet(tweetId: number) : Observable<Status> {
		return(this.http.delete(this.tweetUrl + tweetId)
			.map(this.extractMessage)
			.catch(this.handleError));
	}

	// call to the tweet API and edit the tweet in question
	editTweet(tweet : Tweet) : Observable<Status> {
		return(this.http.put(this.tweetUrl + tweet.tweetId, tweet)
			.map(this.extractMessage)
			.catch(this.handleError));
	}

	// call to the tweet API and create the tweet in question
	createTweet(tweet : Tweet) : Observable<Status> {
		return(this.http.post(this.tweetUrl, tweet)
			.map(this.extractMessage)
			.catch(this.handleError));
	}

	// call to the tweet API and get a tweet object based on its Id
	getTweet(tweetId : number) : Observable<Tweet> {
		return(this.http.get(this.tweetUrl + tweetId)
			.map(this.extractData)
			.catch(this.handleError));
	}

	// call to the API and get an array of tweets based off the profileId
	getTweetbyProfileId(tweetProfileId : number) : Observable<Tweet[]> {
		return(this.http.get(this.tweetUrl + tweetProfileId)
			.map(this.extractData)
			.catch(this.handleError));
	}

	// call to tweet API and get an array of tweets based off the tweetContent
	getTweetByContent(tweetContent : string) : Observable<Tweet[]> {
		return(this.http.get(this.tweetUrl +tweetContent)
			.map(this.extractData)
			.catch(this.handleError));
	}

	//call to the API and get an array of all the tweets in the database
	getAllTweets() : Observable<TweetProfile[]> {
		return(this.http.get(this.tweetUrl)
			.map(this.extractData)
			.catch(this.extractData));
	}




}