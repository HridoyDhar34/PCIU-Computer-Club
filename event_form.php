<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Responsive Registration Form</title>
  <link rel="stylesheet" href="membership_form.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>Create Event</h2>
    </div>
    <div class="row clearfix">
      <div class="">
      <form action="event_data.php" method="post" >

         <label for="linkInput">Full Name:</label>
          <input type="text"class="form_container" placeholder="Enter your name" name="fullname">
          <label for="linkInput">Number:</label>
          <input type="text"class="form_container" placeholder="Enter father name" name="number">
          <label for="linkInput">link:</label>
          <input type="text"class="form_container" placeholder="Enter father name" name="link">
            
        </form>
<button type="submit" class="btn-btn-primary" name="submit">Submit</button>
     
		  





      </div>
    </div>
  </div>
</div>
</body>
</html>
