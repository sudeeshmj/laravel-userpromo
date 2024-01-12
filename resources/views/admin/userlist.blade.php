@extends('admin.layouts.master')
@section('content')

<div class="container-fluid p-4">
    <div class="row">
        <div class="col-md-12">
            <div id="response_message"></div>
            <div class="card">
                <div class="card-header">
                    <h5>
                        Users
                    </h5>
                </div>
                <div class="card-body">
                    <div id="response_message"></div>
                    <table class="table table-sm table-striped table-bordered hover" id="myDataTable">
                        <thead>
                          <tr>
                            <th scope="col" style="width: 5%;" >#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Points</th>
                          </tr>
                        </thead>
                        <tbody id="tbody">
                           
                         @foreach ($users as $user)
                         <tr>
                            <td class="align-middle">{{$loop->iteration}}</td>
                            <td class="align-middle">{{$user->name}}</td>
                            <td class="align-middle">{{$user->points}}</td>
                          
                          </tr>
                         @endforeach
                        
                       
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection