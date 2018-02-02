@extends('dashboard')

@section('style')
<link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
@stop

@section('content')
<script src="{{  asset('js/jquery.min.js')  }}"></script>
<script src="{{  asset('js/toastr.js')  }}"></script>
@if ($errors->any())
<script type="text/javascript">
    toastr.error(' <?php echo implode('', $errors->all(':message')) ?>', "There's something wrong!")
</script>             
@endif
@if(session('error'))
<script type="text/javascript">
    toastr.error(' <?php echo session('error'); ?>', "There's something wrong!")
</script>
@endif
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">New Resident</h3>

    </div>
    <div class="box-body">
        <div class="row" style="padding:20px;">
            <form action="{{ url('/Resident/Store') }}" method="post" files="true" enctype="multipart/form-data">
            <div class="col-sm-3 bg-primary">
                <div class="form-group" style="margin-top:10px; border:1px solid black; padding:10px" >
                    <center><img class="img-responsive" id="pic" src="{{ URL::asset('img/steve.jpg')}}" width="300px" style="max-width:200px; background-size: contain" /></center>
                    <b><label style="margin-top:20px;" for="exampleInputFile">Photo Upload</label></b>
                    <input type="file" class="form-control-file" name="image" onChange="readURL(this)" id="exampleInputFile" aria-describedby="fileHelp">
                </div>
            </div>
            <div class="col-sm-9">
                {{ csrf_field() }}
                <div class="" style="padding:10px; background:#252525; color:white;">
                    Personal Information
                </div>
                <div style="margin-top:10px;">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="First Name" name="firstName">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="Middle Name" name="middleName">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="Last Name" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-sm-5">
                                    <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="Street" name="street" >
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="Brgy" name="brgy">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="City" name="city">
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="Province" name="province">
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control select" name="citizenship">
                                        <option value="0" disabled>Please select your citizenship</option>
                                        <option value="By Birth">By Birth</option>
                                        <option value="Naturalized">Naturalized</option>
                                        <option value="Reacquired">Reacquired</option>
                                    </select>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="Religion" name="religion">
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label class="checkbox-inline">
                                    <input type="checkbox" checked name="gender" id="inlineCheckbox1" value="1"> Male
                                    </label>
                                    <label class="checkbox-inline">
                                    <input type="checkbox" name="gender" id="inlineCheckbox2" value="2"> Female
                                    </label>
                                </div>
                                <div class="col-sm-3">
                                    <div class='input-group date' id='datetimepicker1'>
                                        <input type='text' name="birthdate" placeholder="YYYY-MM-DD"  class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="birthPlace" class="col-sm-6 form-control" id="exampleInputEmail1" placeholder="Place of Birth">
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-control select" name="civilStatus">
                                        <option value="0" disabled>Please select your civil status</option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow/er">Widow/er</option>
                                        <option value="Legally Separated">Legally Separated</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="col-sm-6 form-control" name="occupation" id="exampleInputEmail1" placeholder="Profession/Occupation">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="col-sm-6 form-control" name="tinNo" id="exampleInputEmail1" placeholder="Tin No.">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="col-sm-6 form-control" name="periodResidence" id="exampleInputEmail1" placeholder="Period of Residence">
                                </div>
                            </div>
                    </div>
                    <div class="" style="padding:10px; background:#252525; color:white;">
                    Mother's Information
                    </div>
                    <div style="margin-top:10px; margin-bottom:10px;">
                    <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="col-sm-6 form-control" name="motherFirstName" id="exampleInputEmail1" placeholder="First Name">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="col-sm-6 form-control" name="motherMiddleName" id="exampleInputEmail1" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="col-sm-6 form-control" name="motherLastName" id="exampleInputEmail1" placeholder="Last Name">
                            </div>
                    </div>
                     </div>
                    <div class="" style="padding:10px; background:#252525; color:white;">
                    Father's Information
                    </div>
                    <div style="margin-top:10px; margin-bottom:10px;">
                    <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="col-sm-6 form-control" name="fatherFirstName" id="exampleInputEmail1" placeholder="First Name">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="col-sm-6 form-control" name="fatherMiddleName" id="exampleInputEmail1" placeholder="Middle Name">
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="col-sm-6 form-control" name="fatherLastName" id="exampleInputEmail1" placeholder="Last Name">
                            </div>
                    </div>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
           
            </div>
        </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                        reader.onload = function (e) {
                            $('#pic')
                            .attr('src', e.target.result)
                            .width(300);
                        };
                    reader.readAsDataURL(input.files[0]);
                }
                }
    </script>
@stop