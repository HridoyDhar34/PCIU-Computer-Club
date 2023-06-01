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
      <h2>Member Registration Form</h2>
    </div>
    <div class="row clearfix">
      <div class="">
      <form action="send.php" method="post" >

         <label for="linkInput">Full Name:</label>
          <input type="text"class="form_container" placeholder="Enter your name" name="name">
          <label for="linkInput">Father Name:</label>
          <input type="text"class="form_container" placeholder="Enter father name" name="fathername">
          <label for="linkInput">Mother Name:</label>
          <input type="text" class="form_container" placeholder="Enter mother name" name="mothername">
          <label for="linkInput">Email:</label>
          <input type="text" class="form_container" placeholder="Enter email" name="email">
          <label for="linkInput">Contact:</label>
          <input type="text" class="form_container" placeholder="Enter contact number" name="contact">
          <label for="linkInput">NID:</label>
          <input type="text"class="form_container" placeholder="Enter nid number" name="nid">
          <label for="linkInput">Blood:</label>
          <input type="text" class="form_container" placeholder="Enter blood group" name="blood">
          <label for="linkInput">Date:</label>
          <input type="text" class="form_container" placeholder="Enter date" name="date">
          <div class="row clearfix">
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-id-card"></i></span>
                <input type="text" class="form_container" placeholder="StudentId" name="id"/>
              </div>
            </div>
            <div class="col_half">
              <div class="input_field"> <span><i aria-hidden="true" class="fa fa-podcast"></i></span>
                <input type="text"class="form_container" placeholder="Batch" name="batch"/>
              </div>
            </div>
          </div>
          <div class="input_field radio_option">
            <input type="radio" name="radiogroup1" id="rd1">
            <label for="rd1">Male</label>
            <input type="radio" name="radiogroup1" id="rd2">
            <label for="rd2">Female</label>
            </div>
          </fieldset>
          <fieldset>
            <label>Upload a profile picture: <input type="file" class="form_container" placeholder="Picture" Profile="profile"/></label>
            
        </form>
<button type="submit" class="btn-btn-primary" name="submit">Submit</button>
     
		  





      </div>
    </div>
  </div>
</div>
</body>
</html>
