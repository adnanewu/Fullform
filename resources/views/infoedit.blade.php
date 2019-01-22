<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="/update/{{$data->id}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
      Household_Number:<input type="text" name="Household_Number" value="{{$data->Household_Number}}">
      <br>
      <br>
      Household_Name:<input type="text" name="Household_Name" value="{{$data->Household_Name}}">
      <br>
      <br>
      Father_Husband_Name:<input type="text" name="Father_Husband_Name" value="{{$data->Father_Husband_Name}}">
      <br>
      <br>
      Mother_Name:<input type="text" name="Mother_Name" value="{{$data->Mother_Name}}">
      <br>
      <br>
      Occupation:<input type="text" name="Occupation" value="{{$data->Occupation}}">
      <br>
      <br>
      Mobile:<input type="text" name="Mobile" value="{{$data->Mobile}}">
      <br>
      <br>
      NID_Passport:<input type="text" name="NID_Passport" value="{{$data->NID_Passport}}">
      <br>
      <br>
      Education:<input type="text" name="Education" value="{{$data->Education}}">
      <br>
      <br>
      Date_of_Birth:<input type="date" name="Date_of_Birth" value="{{$Date_of_Birth}}">
      <br>
      <br>
      Gender:<input type="text" name="Gender" value="{{$data->Gender}}">
      <br>
      <br>
      Religion:<input type="text" name="Religion" value="{{$data->Religion}}">
      <br>
      <br>
      Marital_Status:<input type="text" name="Marital_Status" value="{{$data->Marital_Status}}">
      <br>
      <br>
      Present_Address:<input type="text" name="Present_Address" value="{{$data->Present_Address}}">
      <br>
      <br>
      Ward:<input type="text" name="Ward" value="{{$data->Ward}}">
      <br>
      <br>
      Thana:<input type="text" name="Thana" value="{{$data->Thana}}">
      <br>
      <br>
      District:<input type="text" name="District" value="{{$data->District}}">
      <br>
      <br>
      Affected_Land_No:<input type="text" name="Affected_Land_No" value="{{$data->Affected_Land_No}}">
      <br>
      <br>
      Yearly_income:<input type="text" name="Yearly_income" value="{{$data->Yearly_income}}">
      <br>
      <br>
      have_you_taken_any_traning_before:<input type="text" name="have_you_taken_any_traning_before" value="{{$data->have_you_taken_any_traning_before}}">
      <br>
      <br>
      If_yes_then_how_many_days:<input type="text" name="If_yes_then_how_many_days" value="{{$data->If_yes_then_how_many_days}}">
      <br>
      <br>
      Do_you_have_any_particular_trainning:<input type="text" name="Do_you_have_any_particular_trainning" value="{{$data->Do_you_have_any_particular_trainning}}">
      <br>
      <br>
      Do_you_want_any_training:<input type="text" name="Do_you_want_any_training" value="{{$data->Do_you_want_any_training}}">
      <br>
      <br>
      <input type="submit" name="sub" value="update">        
    </form>

</body>
</html>