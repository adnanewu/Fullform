<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	
    <a href="/ListData">List Data</a>
    <br/>
    <br/>
	
@if(count($errors)>0)
@foreach($errors->all() as $error)
<p class="alert alert-danger">{{$error }}</p>

@endforeach
@endif
  <form action="InsertData" method="post"> 
		<input type="hidden" name="_token" value="{{csrf_token()}}">
    Household_Number:<input type="text" name="Household_Number" placeholder="Household_Number">
      <br>
      <br>
  Household_Name:<input type="text" name="Household_Name" placeholder="Household_Name">
        <br>
        <br>
  Father/Husband_Name:<input type="text" name="Father/Husband_Name" placeholder="Father/Husband_Name">
        <br>
        <br>
  Mother_Name:<input type="text" name="Mother_Name" placeholder="Mother_Name">
        <br>
        <br>
  Occupation:<input type="text" name="Occupation" placeholder="Occupation">
        <br>
        <br>
  Mobile:<input type="text" name="Mobile" placeholder="Mobile">
        <br>
        <br>
  NID_Passport:<input type="text" name="NID_Passport" placeholder="NID_Passport">
        <br>
        <br>
   
  Education:<input type="text" name="Education" placeholder="Education">
  
        <br>
        <br>               
  Date_of_Birth:<input type="date" name="Date_of_Birth" placeholder="Date_of_Birth">
        <br>
        <br>      
   Gender:<input type="text" name="Gender" placeholder="Gender">
        <br>
        <br>     
   Religion:<input type="text" name="Religion" placeholder="Religion">
        <br>
        <br>
  Marital_Status:<input type="text" name="Marital_Status" placeholder="Marital_Status">
        <br>
        <br>
 Present_Address:<input type="text" name="Present_Address" placeholder="Present_Address">
        <br>
        <br>
   Ward:<input type="text" name="Ward" placeholder="Ward">
        <br>
        <br>
   Thana:<input type="text" name="Thana" placeholder="Thana">
        <br>
        <br>
   District:<input type="text" name="District" placeholder="District">
        <br>
        <br> 
   Affected_Land_No:<input type="text" name="Affected_Land_No" placeholder="Affected_Land_No">
        <br>
        <br>
   Yearly_income:<input type="text" name="Yearly_income" placeholder="Yearly_income">
        <br>
        <br>
   have_you_taken_any_traning_before:<input type="text" name="have_you_taken_any_traning_before" placeholder="have_you_taken_any_traning_before">
        <br>
        <br>
   If_yes_then_how_many_days:<input type="text" name="If_yes_then_how_many_days" placeholder="If_yes_then_how_many_days">
        <br>
        <br>
    Do_you_have_any_particular_trainning:<input type="text" name="Do_you_have_any_particular_trainning" placeholder="Do_you_have_any_particular_trainning?">
        <br>
        <br>
    Do_you_want_any_training:<input type="text" name="Do_you_want_any_training" placeholder="Do_you_want_any_training">
        <br>
        <br>                   
        <input type="submit" name="sub" value="Insert">
	</form>
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>

</body> 
</html> 