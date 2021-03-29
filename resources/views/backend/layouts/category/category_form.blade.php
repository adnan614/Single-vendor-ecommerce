@extends ('backend.master')

@section('content')

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Add Category
            </h2>

            <!-- General elements -->
            <form method="post" action="{{route('category.add')}}">
            @csrf
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="text" id="category_name" name="category_name"
                  placeholder="Enter Category"
                />
              </label>

              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Parent Category
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="parent_id" id="parent_id"
                >
                  <option value="0">Parent Category</option>
                    @foreach($levels as $row)
                    <option value="{{$row->id}}">{{$row->category_name}}</option>
                    @endforeach
                </select>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <input
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3"
                  type="text"
                  id="description"
                  name="description"
                  placeholder="Enter Description"
                ></input>

                <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="float:right; margin: 4% 0%;" type="submit"
                >
                  Add Category
                </button>
              </label>

            </div>
            </form>
          </div>



@endsection