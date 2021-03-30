@extends ('backend.master')

@section('content')


<div class="section__content section__content--p30">
        <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">

                                        <br>
                                        <br>

                                        <form method="get" action="{{route('slider.form')}}">
                                                <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="float:right; margin-right:20px;" type="submit">
                                                        Add Slider
                                                </button>
                                        </form>

                                        <table class="w-full whitespace-no-wrap">
                                                <thead>
                                                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                                                <th class="px-4">#</th>
                                                                <th class="px-4">Slider Name</th>
                                                                <th class="px-4">Image</th>
                                                                <th class="px-4">Action</th>
                                                        </tr>
                                                </thead>
                                               
                                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                                        @foreach($slider as  $key=>$data)
                                                        <tr class="text-gray-700 dark:text-gray-400">
                                                               <td class="px-3">{{$key+1}}</td>
                                                                <td class="px-5">{{$data->name}}</td>
                                                                <td class="px-5"> <img src="{{ asset('upload/'.$data->image) }}" width="60px" height="80px">
                                                                </td>
                                                             
                                                                        
                                                                 <td> <a href="javascript:;" class="sa-delete" data-form-id="slider-delete-{{$data->id}}"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                                                               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"  />
                                                              </svg> </a>
                                                                 <form id="slider-delete-{{$data->id}}" action="{{route('slider.delete',$data->id)}}" method="post">

                                                                 @csrf
                                                                 @method('DELETE')
                                                                </form>
                                                                
                                                                 </td>

                                                               <td> <a href="#">  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6">
                                                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg> <a href="#"> </td>


                                                             
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






                                                              