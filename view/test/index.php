<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h3><?php echo $welcome;?></h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<p>To change the Content of this page please edit the view file in view/test/index.php</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<p>The Defaut theme is Based on Twitter Boostrap</p>
			<p> To change Theme you can either modify the content of the default Theme in  public/theme/default or create your own theme inside the public/theme directory and pass it to the view using View::render($this->data,$themeName); where $themeName is the name of the theme.
				$this->data is an array for passing data to the view
			</p>
			<p class="alert alert-info">
				A sample Controller,Model and view are in the package
			</p>
		</div>
	</div>
</div>

