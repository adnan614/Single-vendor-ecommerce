@extends ('backend.master')

@section('content')

<div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Edit Category
            </h2>

            <!-- General elements -->
            <form method="post" action="{{route('category.update',$category->id)}}">
            @method('put')
            @csrf
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" 
                  type="text" id="category_name" name="category_name" required value="{{$category->category_name}}"
                />
              </label>

              
              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                Parent Category
                </span>
                <select
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" 
                  name="parent_id" id="parent_id"
                >
                <?php echo $categories_dropdown;   ?>
                </select>
              </label>

              <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <input
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3" type="text" id="description" name="description" required value="{{$category->description}}"
                ></input>

                <input type="hidden" name="category_slug" value="category slug">

                <button
                  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" style="float:right; margin: 4% 0%;" type="submit"
                >
                  Update
                </button>
              </label>

            </div>
            </form>
          </div>



@endsection