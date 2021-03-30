@extends ('backend.master')

@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-30">

                    <br>
                    <br>

                    <form method="get" action="{{route('user.store')}}">
                    
                </form>
                    @if(session()->has('message'))
                    <p class="alert alert-danger">{{session()->get('message')}}</p>
                    @endif
                    <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">ID</th>
                      <th class="px-4 py-3">Customer Name</th>
                      <th class="px-4 py-3">Contact</th>
                      <th class="px-4 py-3">Email</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($users as $key=>$data)
                            <tr class="text-gray-700 dark:text-gray-400">
                            <th scope="row">{{$key+1}}</th>

                                <td class="px-4 py-3 text-sm">
                                 {{$data->name}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                {{$data->contact}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                {{$data->email}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                <a href="#" class="btn btn-sm btn-info">Delete</a>
                                    <a href="#" class="btn btn-sm btn-info">view</a>
                                    <a href="#" class="btn btn-sm btn-info">edit</a>
                                </td>
                            </tr>
                            @endforeach
                   
                             
                  </tbody>
                </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>

</div>





@endsection