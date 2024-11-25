<x-app-layout>
    <div class="container mx-auto p-6">
        <!-- Title -->
        <h1 class="text-3xl font-bold mb-6 text-center">All Users</h1>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 border-b">Name</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 border-b">Email</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 border-b">Role</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700 border-b">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4 text-gray-700">{{ $user->name }}</td>
                            <td class="py-3 px-4 text-gray-700">{{ $user->email }}</td>
                            <td class="py-3 px-4 text-gray-700">{{ $user->role }}</td>
                            <td class="py-3 px-4 text-gray-700">
                                <form method="POST" action="{{ route('admin.update', $user->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <input value="{{ $user->id }}" name="user_id" type="hidden">
                                    <button>give rule</button>
                                </form>
                                <form method="post" action="{{ route('admin.destroy', $user->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button px-3 py-1 bgred-500 rounded-lg>delete</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
