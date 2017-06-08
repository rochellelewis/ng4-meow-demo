<meow-navbar></meow-navbar>

<main class="bg">
	<div class="container">
		<div class="row">

			<div class="col-md-4">
				<h1>Create New Post</h1>

				<!-- Create New Post Form -->
				<form id="contact-form">
					<div class="form-group">
						<label class="sr-only" for="postTitle">Title <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="postTitle" name="postTitle" placeholder="Post Title">
						</div>
					</div>
					<div class="form-group">
						<label class="sr-only" for="postContent">Content <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<textarea class="form-control" name="postContent" id="postContent" cols="30" rows="10" placeholder="1024 characters max."></textarea>
						</div>
					</div>

					<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Submit</button>
					<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
				</form>

			</div>

			<div class="col-md-8">
				<h1>Blabbermouth Kitty Diary</h1>

				<!-- Begin Post Item -->
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="h4">Post Title <small>// post date</small></div>
					</div>
					<div class="panel-body">
						This is the post content
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<meow-footer></meow-footer>