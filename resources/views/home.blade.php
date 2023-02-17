@extends('layouts.app_layout')

@section('content')
    <div class="container">
        <br>
        <div style="background-color: white">
            <div style="text-align: center">
                <H4>Orders</H4>
                <label style="color: #1d68a7">1 FEBRUARY,2023 - 28 FEBRUARY,2023</label>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div style="background-color:#1d68a7;border-radius: 10px;height: 30px;margin: 10px">
                        <div class="row" style="color: white;text-align: center;padding: 5px">
                            <div class="col-md-8"> Total Orders</div>
                            <div class="col-md-4"> 40</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div style="background-color:#1da754;border-radius: 10px;height: 30px;margin: 10px">
                        <div class="row" style="color: white;text-align: center;padding: 5px">
                            <div class="col-md-8"> Total Revenue</div>
                            <div class="col-md-4"> 40</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div style="background-color:#ac84ff;border-radius: 10px;height: 30px;margin: 10px">
                        <div class="row" style="color: white;text-align: center;padding: 5px">
                            <div class="col-md-8"> Total Customers</div>
                            <div class="col-md-4"> 40</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div style="background-color:#ff529a;border-radius: 10px;height: 30px;margin: 10px">
                        <div class="row" style="color: white;text-align: center;padding: 5px">
                            <div class="col-md-8"> Cancel Revenue</div>
                            <div class="col-md-4"> 40</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
