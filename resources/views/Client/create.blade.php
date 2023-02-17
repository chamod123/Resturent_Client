@extends('layouts.app_layout')

@section('content')

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-6"><a href="/Client" class="btn btn-dark">Back</a></div>

        </div>

        <hr>

        <form action="/Client/Save" method="POST" enctype="multipart/form-data" id="FormId">

            @csrf


            <div class="row">

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">First Name <span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="text" name="first_name"
                                   id="first_name">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Last Name <span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="text" name="last_name"
                                   id="last_name">
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Contact <span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="text" name="contact"
                                   id="contact">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Email Address <span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="text"  name="email"
                                   id="email">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Gender</label>
                        <select class="form-control" required name="gender" id="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Date Of Birth <span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="date"  name="dob"
                                   id="dob">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Street No <span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="text" name="street_no"
                                   id="street_no">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Street Address <span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="text" name="street_address"
                                   id="street_address">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">City<span style="color: red">*</span> </label>
                        <div>
                            <input class="form-control" required type="text" name="city"
                                   id="city">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-form-label">Is Active<span style="color: red">*</span> </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                        </div>
                    </div>
                </div>





            </div>

            <br>

            <div class="form-group row">
                <button type="submit" class="btn btn-dark" >Save</button>
            </div>


        </form>
    </div>
@endsection
