<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin-right: 1100px;">
                <a style="margin-left: 25px;" href="{{ route('add-role') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Add role</a>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <style type="text/css">
                .table {
                    width: 100%;
                    border: none;
                }

                .table thead th {
                    padding: 10px;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    text-align: left;
                    color: #FFFFFF;
                    border-bottom: 2px solid #808080;
                }

                .table tbody td {
                    padding: 10px;
                    font-size: 14px;
                    line-height: 20px;
                    color: #FFFFFF;
                    border-top: 1px solid #808080;
                }
            </style>
        </div>
    </div>

    <div style="margin-top: 10px" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Created_at</th>
                        <th>Updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->created_at}}</td>
                        <td>{{$role->updated_at}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <style type="text/css">
                .table {
                    width: 100%;
                    border: none;
                }

                .table thead th {
                    padding: 10px;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 20px;
                    text-align: left;
                    color: #FFFFFF;
                    border-bottom: 2px solid #808080;
                }

                .table tbody td {
                    padding: 10px;
                    font-size: 14px;
                    line-height: 20px;
                    color: #FFFFFF;
                    border-top: 1px solid #808080;
                }
            </style>
        </div>
    </div>

</x-app-layout>