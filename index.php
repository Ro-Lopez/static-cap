<html>

	<head>
		<title>Pet Foster ABQ Sign-In</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<link rel="stylesheet" href="css/style.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<script src="https://code.jquery.com/jquery.js"></script>

		<script src="css/style.css"></script>
	</head>

	<body>

		<h2>Pet Rescue ABQ Sign In</h2>

		<!-- Trigger/Open The Modal -->
		<button id="myBtn">Hey! Sign In!</button>

		<!-- The Modal -->
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2>Pet Resecue ABQ Header</h2>
				</div>

				<form #signInForm="ngForm" name="signInForm" id="signInForm"
						(ngSubmit)="signIn();">

				<div class="modal-body">
					<div class="container">
						<h2 align="center">Authentication</h2>
						<div class="center">
							<form method="post" action="/signin" class="form-horizontal" role="form" align="center">
								<div class="form-group" align="center">
									<label class="control-label col-sm-2" for="email">Email:<em>*</em></label>
									<div class="col-sm-6">

										<input type="text" name="email" id="email" placeholder="email" required [(ngModel)]="signIn.profileEmail" #profileEmail="ngModel" class="form-control" />

									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2" for="password">Password:<em>*</em></label>
									<div class="col-sm-6">

										<input type="password" name="password" id="password" required [(ngModel)]="signIn.profilePassword" #profilePassword="ngModel" class="form-control" />

									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-8">
										<input type="submit" name="signin" id="signin" [disabled]="signInForm.invalid" value="Sign In" class="btn btn-default" />
									</div>
								</div>
							</form>
						</div>
					</div>



				</div>
				<div class="modal-footer">
					<h3>Footer</h3>
				</div>
			</div>

		</div>




	</body>

</html>



<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal
	btn.onclick = function() {
		modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
		modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>