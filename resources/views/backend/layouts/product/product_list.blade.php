@extends ('backend.master')

@section('content')

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table--no-card m-b-30">

                    <br>
                    <br>

                    <form method="get" action="{{route('product.form')}}">
                    <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="float:right;" type="submit"
                >
                  Add Product
                </button>
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
                      <th class="px-4 py-3">Product Name</th>
                      <th class="px-4 py-3">Category Name</th>
                      <th class="px-4 py-3">Image</th>
                      <th class="px-4 py-3">Prize</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>

                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($productStore as $key=>$ps)
                            <tr class="text-gray-700 dark:text-gray-400">
                            <th scope="row">{{$key+1}}</th>

                                <td class="px-4 py-3 text-sm">
                                 {{$ps->name}}
                                </td>
                                <td class="px-4 py-3 text-xs">
                                {{$ps->categoryRelation->category_name}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                <img src="{{ asset('upload/'.$ps->image) }}" width="75px" height="75px">
                                </td>
                                <td class="px-4 py-3 text-sm">
                                {{$ps->selling_price}}
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