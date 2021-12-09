
<!DOCTYPE html>
<html lang="en">
  <head>
  	@include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">

  	@include("admin.sidebar")


  	<div class="container-fluid page-body-wrapper">
        @include("admin.navbar");

  		@include("admin.body")
  	</div>
    </div>


  	@include("admin.adminscript")
  </body>
</html>