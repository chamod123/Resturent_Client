@extends('layouts.app_layout')

@section('content')


    <div class="container">
        <br>
        <div class="row">
            <h1 class="col-md-8" >Clients</h1>
            <div class="col-md-4"><a href="/Client/NewClient" class="btn btn-dark" >Create New</a></div>
        </div>



        <table id="selectedColumn" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">

        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>
                        <img style="height: 50px" class="img-responsive img-rounded" src="{{ asset('images/user.png') }}" alt="User picture">
                    </td>
                    <td>{{$client->first_name}} {{$client->last_name}}</td>
                    <td>{{$client->contact}}</td>
                    <td>{{$client->email}}</td>
                    <td>@if($client->status) <span>Active</span> @else <span>Inactive</span> @endif</td>
                    <td>
                        <a class="btn" href="/Client/{{$client->id}}/Edit" style="background-color: #0d56ff;color: white"><i class="fa fa-pencil" aria-hidden="false"></i></a>
{{--                        <a class="btn" href="/Client/{{$client->id}}/Delete" style="background-color: #c71111;color: white"><i class="fa fa-trash" aria-hidden="false"></i></a>--}}
                        <a class="btn" onclick="delete_client('{{$client->id}}')" style="background-color: #c71111;color: white"><i class="fa fa-trash" aria-hidden="false"></i></a>
                        <a class="btn" href="#" style="background-color: #000000;color: white"><i class="fa fa-eye" aria-hidden="false"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>


@endsection



@section('footer_content')

    <script>
        function delete_client(client_id){
            swal({
                title: "Are you sure?",
                text: "Do you want to Delete the Selected Client",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                // showCancelButton: true,
                // confirmButtonColor: '#3085d6',
                // cancelButtonColor: '#d33',
                // confirmButtonText: 'Yes, delete it!'
            })
                .then((willDelete) => {
                    if (willDelete) {

                        $.ajax({
                            url: '/Client/'+client_id+'/Delete',
                            type: 'get',
                            data: {},
                            // beforeSend: function () {
                                // $("#loading-image").show();
                            // },
                            success: function (data) {
                                swal("Client deleted!", {
                                    icon: "success",
                                });
                                location.reload();
                            },
                            error: function () {
                                swal("Client Not Deleted!");
                            }
                        });

                    } else {
                        swal("Client Not Deleted!");
                    }
                });

        }
    </script>


@endsection




