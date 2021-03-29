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
                      <th class="px-4 py-3">Brand Name</th>
                      <th class="px-4 py-3">Prize</th>
                      <th class="px-4 py-3">Action</th>
                    </tr>
                  </thead>
                 
                </table>
                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>

</div>





@endsection