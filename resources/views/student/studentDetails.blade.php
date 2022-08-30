<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Details') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Session Status -->
            <x-success-status class="mb-4" :status="session('message')" />

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card m-2">
                        <div class="card-header alert-primary p-2">
                            <p class="text-center h4">Student Details</p>
                        </div>

                    </div>
                    <table class="table table-border">
                        <thead class="text-center alert-primary fs-5">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @forelse($studentDetails as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->email }}</td>
                                <td>{{ $student->phone }}</td>
                                <td>
                                    <a href="{{ url('/edit-student/'.$student->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <!-- <a href="{{ url('/delete-student/'.$student->id) }}"
                                        class="btn btn-danger">Delete</a> -->
                                        <form action="{{ url('/delete-student/'.$student->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <x-button class="btn btn-danger">Delete</x-button>
                                        </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6">NO Data Found</td>
                            </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>