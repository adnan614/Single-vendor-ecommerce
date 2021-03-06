@extends ('backend.master')

@section('content')

<div class="section__content section__content--p30">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive table--no-card m-b-30">

          <br>
          <br>

          <form method="get" action="{{route('brand.form')}}">
            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="float:right;" type="submit">
              Add Brand
            </button>
          </form>
          @if(session()->has('message'))
          <p class="alert alert-danger">{{session()->get('message')}}</p>
          @endif
          <table class="w-full whitespace-no-wrap">
            <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <th class="px-4 py-3">ID</th>
                <th class="px-4 py-3">Brand Name</th>
                <th class="px-4 py-3">Description</th>
                <th class="px-4 py-3">Action</th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
              @foreach($brands as $key=>$data)
              <tr class="text-gray-700 dark:text-gray-400">
                <th scope="row">{{$key+1}}</th>

                <td class="px-4 py-3 text-sm">
                  {{$data->name}}
                </td>
                <td class="px-4 py-3 text-sm">
                  {{$data->description}}
                </td>
                <td> <a href="javascript:;" class="sa-delete" data-form-id="brand-delete-{{$data->id}}"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg> </a>
                  <form id="brand-delete-{{$data->id}}" action="{{route('brand.delete',$data->id)}}" method="post">

                    @csrf
                    @method('DELETE')
                  </form>
                  <a href="#" class="btn btn-sm btn-info">view</a>
                  <a href="{{route('brand.edit',$data->id)}}" class="btn btn-sm btn-info">edit</a>
                </td>
                <td> <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg> <a href="#"> </td>

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