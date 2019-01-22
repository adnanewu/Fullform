<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><a href="/">ADD Data</a></center>
  <table align="center" border="1">
    <tr>
      <th>No</th>
      <th>Household_Number</th>
      <th>Household_Name</th>
      <th>Father_Husband_Name</th>
      <th>Mother_Name</th>
      <th>Occupation</th>
      <th>Mobile</th>
      <th>NID_Passport</th>
      <th>Education</th>
      <th>Date_of_Birth</th>
      <th>Gender</th>
      <th>Religion</th>
      <th>Marital_Status</th>
      <th>Present_Address</th>
      <th>Ward</th>
      <th>Thana</th>
      <th>District</th>
      <th>Affected_Land_No</th>
      <th>Yearly_income</th>
      <th>have_you_taken_any_traning_before</th>
      <th>If_yes_then_how_many_days</th>
      <th>Do_you_have_any_particular_trainning</th>
      <th>Do_you_want_any_training</th>
      <th>Action</th>
      
    </tr>
    @foreach($data as $key=>$val)
    <tr>
      <td>{{++$key}}</td>
      <td>{{$val->Household_Number}}</td>
      <td>{{$val->Household_Name}}</td>
      <td>{{$val->Father_Husband_Name}}</td>
      <td>{{$val->Mother_Name}}</td>
      <td>{{$val->Occupation}}</td>
      <td>{{$val->Mobile}}</td>
      <td>{{$val->NID_Passpor}}</td>
      <td>{{$val->Education}}</td>
      <td>{{$val->Date_of_Birth}}</td>
      <td>{{$val->Gender}}</td>
      <td>{{$val->Religion}}</td>
      <td>{{$val->Marital_Status}}</td>
      <td>{{$val->Present_Address}}</td>
      <td>{{$val->Ward}}</td>
      <td>{{$val->Thana}}</td>
      <td>{{$val->District}}</td>
      <td>{{$val->Affected_Land_No}}</td>
      <td>{{$val->Yearly_income}}</td>
      <td>{{$val->have_you_taken_any_traning_before}}</td>
      <td>{{$val->If_yes_then_how_many_days}}</td>
      <td>{{$val->Do_you_have_any_particular_trainning}}</td>
      <td>{{$val->Do_you_want_any_training}}</td>
      <td><a href="/Del/{{$val->id}}">Delete</a> || <a href="/edit/{{$val->id}}">Edit</a></td>
    </tr>
    @endforeach
  </table>

</body>
</html>