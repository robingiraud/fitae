@extends('layouts.app')

@section('content')
    <div class="flex flex-wrap justify-center">
        @foreach ($products as $product)
            <div class="max-w-sm w-full sm:w-1/2 lg:w-1/3 py-6 px-3">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-56 p-4" style="background-image: url({{ url($product->image)  }})">
                        <div class="flex justify-end">
                            <svg class="h-6 w-6 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M12.76 3.76a6 6 0 0 1 8.48 8.48l-8.53 8.54a1 1 0 0 1-1.42 0l-8.53-8.54a6 6 0 0 1 8.48-8.48l.76.75.76-.75zm7.07 7.07a4 4 0 1 0-5.66-5.66l-1.46 1.47a1 1 0 0 1-1.42 0L9.83 5.17a4 4 0 1 0-5.66 5.66L12 18.66l7.83-7.83z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="uppercase tracking-wide text-sm font-bold text-gray-700">{{ $product->title }} • 5y old</p>
                        <p class="text-3xl text-gray-900">{{ $product->getPrice() }}</p>
                        <p class="text-gray-700">{{ $product->subtitle }}</p>
                    </div>
                    <div class="p-4">
                        <a href="{{ route('products.show', $product->slug) }}" class="px-6 py-2 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none">
                            En savoir plus
                        </a>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection
