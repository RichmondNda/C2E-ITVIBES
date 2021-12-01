<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Excel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                
                <div class="grid grid-cols-8 p-4">

                    <div class="col-span-3">
                        <img src="{{asset('img/ItVibesLogo.jpeg')}}" class="h-96 w-96" alt="ItVibes">
                    </div>

                    <div class="col-span-5 text-center">

                        @if ($message = Session::get('success'))
                        <div class="flex justify-center py-4">
                            
                            <div
                                class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                <div class="flex items-center justify-center w-12 bg-green-500">
                                    <svg
                                    class="w-6 h-6 text-white fill-current"
                                    viewBox="0 0 40 40"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
                                    />
                                    </svg>
                                </div>
                        
                                <div class="px-4 py-2 -mx-3">
                                    <div class="mx-3">
                                        <span class="font-bold text-green-500 dark:text-green-400"
                                        >IT-VIBES </span
                                        >
                                        <p class="text-sm text-gray-600 dark:text-gray-200">
                                        {{$message}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    @endif

                        <div class="flex items-center justify-center h-full">

                            <form style="" action="{{ route('importExcel') }}" class="" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="file" name="import_file" />
                                @error('import_file')
                                      <div class="font-semibold text-center text-red-600">{{ $errors->first('import_file') }}  </div>
                                @enderror
                                <button class="px-4 py-3 font-bold text-white bg-indigo-600 rounded-md"> Validation </button>
                            </form>
                        </div>
                    </div>

                </div>
                
                
                


                
            </div>
        </div>
    </div>
</x-app-layout>