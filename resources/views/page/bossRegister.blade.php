@extends('layout.layout');

@section('content')
<form method="POST"  action="bossjoin.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="UA_PL">Privilege</label>
    <input type="number" class="form-control" id="UA_PL" name="UA_PL" readonly="readonly" value = "0" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="identity">Identity</label>
    <input type="text" class="form-control" id="identity" name="identity" readonly="readonly" value = "B" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_VC">Company license</label>
    <input type="text" class="form-control" name="UA_VC" id="UA_VC" readonly="readonly" value = {{$rand}} style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_Acu">User Account</label>
    <input type="text" class="form-control" name="UA_Acu" id="UA_Acu" placeholder="account" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_Name">User Name</label>
    <input type="text" class="form-control" name="UA_Name" id="UA_Name" placeholder="USER NAME" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_Psw">User Password</label>
    <input type="password" class="form-control" name="UA_Psw" id="UA_Psw" placeholder="password" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_Phone">Phone Number</label>
    <input type="number" class="form-control" name="UA_Phone" id="UA_Phone" placeholder="phnumber" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="UA_Avatar">Head shot</label>
    <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
    <input id="UA_Avatar" style="display:none;" type="file" name="UA_Avatar">
    Choice File
    </label>
  </div>
  <div class="form-group">
    <label for="C_CN">Company Name</label>
    <input type="text" class="form-control" name="C_CN" id="C_CN" placeholder="CPName" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="C_CP">Company Number</label>
    <input type="number" class="form-control" name="C_CP" id="C_CP" placeholder="CPNumber" style="font-size:24px">
  </div>
  <div class="form-group">
    <label for="C_CL">Company Logo</label>
    <label class="btn btn-info" style="background: rgba(170, 175, 175, 0.7);border:2px #ccc;border-radius:10px;font-size:24px;">
    <input id="C_CL" style="display:none;" type="file" name="C_CL">
    Choice File
    </label>
  </div>
  <div class="cen" >
      <div class="submitBtn">
        <button type="submit" class="btn btn-default cen" style="font-family: 'Hi Melody', cursive;background: rgba(170, 175, 175, 0.7);width:300px;font-size:32px;color:white;">Submit</button>
      </div>
  </div>
</form>
@endsection
