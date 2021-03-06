<div id="signup-modal" class="modal fade" tabindex="-1" role="dialog">

	<div class="modal-dialog modal-lg" role="document">

		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
						aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Please Enter Profile information</h4>
			</div>

			<div class="modal-body">

				<!-- actual form -->
				<form class="form-horizontal" #signupForm="ngForm" name="signupForm" (ngSubmit)="createSignUp();">

					<!-- twitter at handle -->
					<div class="form-group">
						<label for="atHandle" class="col-sm-2 control-label">Twitter @Handle</label>
						<div class="col-sm-10">
							<input type="text" id="atHandle" name="atHandle" class="form-control" required
									 [(ngModel)]=signUp.profileAtHandle>
						</div>
					</div>

					<!-- users profile email-->
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email Address </label>
						<div class="col-sm-10">
							<input type="email" id="email" name="email" class="form-control input-sm" required
									 [(ngModel)]="signUp.profileEmail" #signUpEmail="ngModel">
						</div>
					</div>

					<!-- users phone number -->
					<div class="form-group">
						<label for="phoneNumber" class="col-sm-2 control-label">EPhone Number</label>
						<div class="col-sm-10">
							<input type="text" id="phoneNumber" name="phoneNumber" class="form-control input-sm" required
									 [(ngModel)]="signUp.profilePhone" #signupProfilePhone="ngModel">
						</div>
					</div>

					<!-- user password -->
					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
							<input type="password" id="password" name="password" class="form-control input-sm" required
									 [(ngModel)]="signUp.profilePassword" #signUpPassword="ngModel">
						</div>
					</div>

					<!--confirm password -->
					<div class="form-group">
						<label for="passwordConfirm" class="col-sm-2 control-label">Password Confirm</label>
						<div class="col-sm-10">
							<input type="password" id="passwordConfirm" name="passwordConfirm" class="form-control input-sm"
									 required [(ngModel)]="signUp.profilePasswordConfirm" #signUpPasswordConfirm="ngModel">
						</div>
					</div>

					<!-- Submit button -->
					<button type="submit" id="submit" name="signUp" class="btn btn-info">Submit</button>
				</form>
			</div>

			<div *ngIf="status !== null" class="alert alert-dismissible" [ngClass]="status.type" role="alert">
				<button type="button" class="close" aria-label="Close" (click)="status = null;"><span
						aria-hidden="true">&times;</span></button>
				{{ status.message }}

			</div>
		</div>
	</div>