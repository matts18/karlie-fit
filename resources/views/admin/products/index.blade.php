@extends('layouts.admin')

@section('content')
<div class="w-full pb-2 border-b flex justify-between items-baseline">
    <h1 class="text-3xl font-bold text-gray-900">Products</h1>

    <a class="text-indigo-600 text-lg font-semibold" href="/admin/products/create">Create</a>
</div>
<div class="mt-5 flex flex-col">
    <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
        <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Name
                        </th>
                        <th class="text-right px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Duration
                        </th>
                        <th class="text-right px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Price
                        </th>

                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($products as $product)
                    <tr>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10">
                                    <img class="h-10 w-10 rounded" src="{{ $product->imageUrl }}" alt="{{ $product->name }}" />
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm leading-5 font-medium text-gray-900">{{ $product->name }}</div>

                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900 text-right">{{ $product->duration }} weeks</div>

                        </td>
                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                            <div class="text-sm leading-5 text-gray-900 text-right">${{ $product->price }}</div>

                        </td>

                        <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                            <div class="flex justify-between">
                                <a href="/admin/products/{{ $product->id }}/edit" class="text-indigo-600 hover:text-indigo-900 focus:outline-none focus:underline">Edit</a>
                                <form method="post" action="/admin/products/{{ $product->id }}" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-block text-red-600 hover:text-red-900 focus:outline-none focus:underline">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection