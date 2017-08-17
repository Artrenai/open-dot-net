<div class="col-xs-12">
	<h3>All The Things</h3>

	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>User</th>
				<th>Tweet</th>
				<th>Date</th>
			</tr>
		</thead>
		<tbody>
			<tr *ngFor="let tweetProfile of tweetProfiles">
				<td>{{tweetProfile.tweetAtHandle}}</td>
				<td> {{tweetProfile.tweetContent }}</td>
				<td> {{ tweetProfile.tweetDate | date: 'medium'}} </td>
			</tr>
		</tbody>
	</table>


</div>