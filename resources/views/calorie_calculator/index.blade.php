<x-app-layout>
    
   <div class="flex justify-center items-center p-10">
    <div class="w-[500px]">
        <form action="{{ route('calorie_calculator.calculate') }}" method="POST" class="bg-gray-800 text-white p-8 rounded-lg shadow-md">
            @csrf
            <h2 class="text-2xl font-bold mb-4">Calorie Calculator</h2>
        
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium mb-2">Name:</label>
                <input type="text" name="name" id="name" required class="bg-gray-700 border border-gray-600 text-white focus:ring-red-500 focus:border-red-500 block w-full p-2 rounded-md" value="{{ Auth::user()->name }}">
            </div>
        
            <div class="mb-4">
                <label for="age" class="block text-sm font-medium mb-2">Age:</label>
                <input type="number" name="age" id="age" required class="bg-gray-700 border border-gray-600 text-white focus:ring-red-500 focus:border-red-500 block w-full p-2 rounded-md">
            </div>
        
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium mb-2">Gender:</label>
                <select name="gender" id="gender" required class="bg-gray-700 border border-gray-600 text-white focus:ring-red-500 focus:border-red-500 block w-full p-2 rounded-md">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        
            <div class="mb-4">
                <label for="weight" class="block text-sm font-medium mb-2">Weight (kg):</label>
                <input type="number" step="0.1" name="weight" id="weight" required class="bg-gray-700 border border-gray-600 text-white focus:ring-red-500 focus:border-red-500 block w-full p-2 rounded-md">
            </div>
        
            <div class="mb-4">
                <label for="height" class="block text-sm font-medium mb-2">Height (cm):</label>
                <input type="number" step="0.1" name="height" id="height" required class="bg-gray-700 border border-gray-600 text-white focus:ring-red-500 focus:border-red-500 block w-full p-2 rounded-md">
            </div>
        
            <div class="mb-4">
                <label for="activity_level" class="block text-sm font-medium mb-2">Activity Level:</label>
                <select name="activity_level" id="activity_level" required class="bg-gray-700 border border-gray-600 text-white focus:ring-red-500 focus:border-red-500 block w-full p-2 rounded-md">
                    <option value="sedentary">Sedentary</option>
                    <option value="light">Light</option>
                    <option value="moderate">Moderate</option>
                    <option value="active">Active</option>
                    <option value="very_active">Very Active</option>
                </select>
            </div>
        
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                <a href="{{ route('dashboard') }}">calculate</a>
            </button>
        </form>
    </div>
   </div>
</x-app-layout>