<x-app-layout>


    <nav class="bg-black  flex justify-around items-center p-6">

        <div>
            <h1 class="text-red-600  font-bold text-2xl ">S&A GYM </h1>
        </div>
        <div class="flex gap-10">
            <a href="">About Us</a>
            <a href="">Pricing</a>
            <a href="">Contact</a>
            @if (Auth::user()->role == 'admin')
                <a href="/admin">admin</a>
            @endif
        </div>
        <div>
            <button class="bg-red-500 text-white p-2 rounded-lg">Join us</button>
        </div>


    </nav>


    <section class=" h bg-[#070707] flex justify-around items-center pt-5 h-[90vh] ">

        <div>
            <div class="font-bold pt-10">
                <h1 class="text-6xl text-white">Helps for your <br> ideal body fitness</h1> <br>
                <p class="text-white"> The resistance that you fight physically in the gym <br>and the resistance that
                    you fight in life can only build <br>a strong character </p>
            </div>

            <div class="flex justify-between pt-12  ">
                <div class="text-center">
                    <h3 class="text-xl text-red-500 font-bold">105</h3>
                    <p class=" text-white">Expert Trainers</p>
                </div>
                <div class="text-center">
                    <h3 class="text-xl text-red-500 font-bold">970+</h3>
                    <p class="text-white">Member Joined</p>
                </div>
                <div class="text-center">
                    <h3 class="text-xl text-red-500 font-bold">135+</h3>
                    <p class="text-white">Fitness Programs</p>
                </div>
            </div>

        </div>
        <div>
            <img width="600px" class="opacity-60 rounded-lg"
                src="https://images.pexels.com/photos/140955/pexels-photo-140955.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="">
        </div>

    </section>


    <div class=" py-5 bg-red-700">

    </div>

    <section class="  h-[75vh] flex justify-around p-14 items-center">



        <div class="">
            <h1 class=" font-bold text-6xl text-red-500"> About Us</h1>
            <br>
            <p class="text-black text-2xl ">
                At GymHeroics, we're not just a gym, we're a community of fitness <br>enthusiasts on a mission to help
                you become your own hero.<br> With a team of experienced trainers and a commitment to personalized <br>
                fitness, we're here to support your journey to greatness. Join us and <br> be part of a fitness</p>
            <div class="flex gap-6 pt-4">
                <button class="bg-red-500 p-3 rounded-lg font-bold text-white">Join us</button>
                <button class="bg-red-500 p-3 rounded-lg font-bold text-white">Join us</button>
            </div>
        </div>




        <div>
            <img width="300px" class="rounded-lg"
                src="https://images.pexels.com/photos/416809/pexels-photo-416809.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="">
        </div>


    </section>
    <div class=" py-5 bg-red-700">

    </div>
    <section class="flex bg-black justify-around items-center h-[75vh]">

        <div>
            <img width="600px"
                src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="">
        </div>




        <div>
            <div class="flex gap-[70px]">
                <h1 class="text-white font-bold text-5xl">S&A GYM </h1>
                <a href="/exercice" class="text-lg bg-red-500 font-bold mb-4">Find Ur Exercises </a>


            </div>
            <br>
            <p class="text-white text-xl"> Is a dedicated space for physical exercise and <br>fitness, equipped with
                machines, weights, and facilities <br> for strength training, cardio, and group workouts. <br>It
                promotes health, wellness, and mental well-being <br>through structured activities and professional
                guidance. </p>
        </div>


    </section>


    <section>
        <div class=" py-5 bg-red-700">

        </div>
        <div class="bg-white py-12">
            <!-- Title Section -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-extrabold text-red-600">OUR TRAINERS</h1>
                <p class="text-xl text-black mt-4">
                    Explore our diverse fitness classes, from high-intensity workouts to relaxing yoga
                    sessions, designed to cater to all levels and interests.
                </p>
                <!-- Buttons -->
                <div class="mt-6">
                    <button
                        class="bg-red-500 px-6 py-3 rounded-lg text-white font-bold shadow-lg hover:bg-red-600 transition">
                        Book Session
                    </button>
                    <button
                        class="bg-rose-500 px-6 py-3 ml-4 rounded-lg text-white font-bold shadow-lg hover:bg-rose-600 transition"
                        onclick="openModal('modelConfirm')">
                        Become a Trainer
                    </button>
                    @if (Auth::user()->role == 'trainer')
                       
                            <a href="/exercice">Create Exercice</a>
                       
                    @endif

                </div>
            </div>

            <!-- Trainers Section -->
            <div class="bg-white py-12 px-4">
                <!-- Title Section -->
                <div class="text-center mb-10">
                    <p class="text-lg text-black mt-4">
                        Meet our professional trainers who will help you achieve your fitness goals.
                    </p>
                </div>

                <!-- Trainers Section -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
                    <!-- Trainer Card -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition">
                        <img src="https://images.pexels.com/photos/16962906/pexels-photo-16962906/free-photo-of-homme-jeune-portrait-sourire.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
                            alt="Jhonathan" class="w-full h-56 bg-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-2xl font-semibold text-white">Jhonathan</h3>
                            <p class="text-sm text-gray-400">Personal Trainer</p>
                            <button
                                class="mt-4 px-4 py-2 bg-red-500 text-white font-bold rounded-lg hover:bg-red-600 transition">
                                View Profile
                            </button>
                        </div>
                    </div>

                    <!-- Trainer Card -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition">
                        <img src="https://images.pexels.com/photos/13219989/pexels-photo-13219989.jpeg" alt="Alexa"
                            class="w-full h-56 bg-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-2xl font-semibold text-white">Alexa</h3>
                            <p class="text-sm text-gray-400">Yoga Expert</p>
                            <button
                                class="mt-4 px-4 py-2 bg-red-500 text-white font-bold rounded-lg hover:bg-red-600 transition">
                                View Profile
                            </button>
                        </div>
                    </div>

                    <!-- Trainer Card -->
                    <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden transform hover:scale-105 transition">
                        <img src="https://images.pexels.com/photos/20340623/pexels-photo-20340623/free-photo-of-homme-modele-sport-fitness.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="Liam" class="w-full h-56 bg-cover">
                        <div class="p-6 text-center">
                            <h3 class="text-2xl font-semibold text-white">Liam</h3>
                            <p class="text-sm text-gray-400">Strength Coach</p>
                            <button
                                class="mt-4 px-4 py-2 bg-red-500 text-white font-bold rounded-lg hover:bg-red-600 transition">
                                View Profile
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div id="modelConfirm"
                class="fixed hidden z-50 inset-0 bg-gray-900 bg-opacity-60 overflow-y-auto h-full w-full px-4">
                <div class="relative top-40 mx-auto bg-white rounded-lg shadow-lg max-w-md">
                    <!-- Modal Header -->
                    <div class="flex justify-end p-4">
                        <button onclick="closeModal('modelConfirm')"
                            class="text-gray-400 hover:bg-gray-200 rounded-lg p-2 focus:outline-none">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd">
                                </path>
                            </svg>
                        </button>
                    </div>
                    <!-- Modal Body -->
                    <div class="p-6 text-center">
                        <h2 class="text-2xl font-bold text-gray-800">Become a Trainer</h2>

                        <form action="{{ route('coach.store') }}" method="post" class="mt-6">
                            @csrf
                            <div class="space-y-4">
                                <input type="text" name="name" placeholder="Full Name"
                                    class="w-full border rounded-md p-3 text-gray-700 focus:outline-none focus:ring focus:ring-red-500">
                                <input type="text" name="phone" placeholder="Phone Number"
                                    class="w-full border rounded-md p-3 text-gray-700 focus:outline-none focus:ring focus:ring-red-500">
                                <input type="email" name="email" placeholder="Email Address"
                                    class="w-full border rounded-md p-3 text-gray-700 focus:outline-none focus:ring focus:ring-red-500">
                            </div>
                            <button type="submit"
                                class="w-full mt-4 bg-red-500 text-white py-3 rounded-md hover:bg-red-600 focus:outline-none">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function openModal(modalId) {
                document.getElementById(modalId).style.display = 'block';
                document.body.classList.add('overflow-y-hidden');
            }

            function closeModal(modalId) {
                document.getElementById(modalId).style.display = 'none';
                document.body.classList.remove('overflow-y-hidden');
            }

            // Close modal on ESC key
            document.onkeydown = function(event) {
                if (event.keyCode === 27) {
                    document.body.classList.remove('overflow-y-hidden');
                    const modal = document.getElementById('modelConfirm');
                    if (modal) modal.style.display = 'none';
                }
            };
        </script>

    </section>


    <div class=" py-5 bg-red-700">

    </div>



    <section class="pricing-section">



        <div class="container mx-auto px-4 py-16">
            <h2 class="text-5xl font-bold text-center mb-12">Choose Your Plan</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-slate-950 text-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Basic</h3>
                    <p class="text-2xl font-bold mb-6">$99 <span class="text-sm">/Per Month</span></p>
                    <ul class="list-none mb-6">
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6   h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Access To Gym Facilities
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6    h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Unlimited Gym Access
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6    h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Free Group Fitness Classes
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6   h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Locker Room Access
                        </li>
                    </ul>
                    <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Choose
                        Plan</button>
                </div>

                <div class="bg-red-600 text-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Premium</h3>
                    <p class="text-2xl font-bold mb-6">$299 <span class="text-sm">/Per Month</span></p>
                    <ul class="list-none mb-6">
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6   h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            All Basic Package Benefits
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6   h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Personalized Training Plan
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6    h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Access To Advanced Equipment
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6   h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Monthly Fitness Assessment
                        </li>
                    </ul>
                    <button class="bg-white hover:bg-gray-100 text-red-600 font-bold py-2 px-4 rounded-full">Choose
                        Plan</button>
                </div>

                <div class="bg-slate-950 text-white p-8 rounded-lg shadow-md">
                    <h3 class="text-xl font-bold mb-4">Basic</h3>
                    <p class="text-2xl font-bold mb-6">$99 <span class="text-sm">/Per Month</span></p>
                    <ul class="list-none mb-6">
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6   h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Access To Gym Facilities
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6    h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Unlimited Gym Access
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6    h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Free Group Fitness Classes
                        </li>
                        <li class="flex items-center mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6   h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Locker Room Access
                        </li>
                    </ul>
                    <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                        <a href="/checkout">Choose Plan</a>
                    </button>
                </div>




            </div>
        </div>
    </section>


    <div class=" py-5 bg-red-700">

    </div>














    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4 md:px-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- About Section -->
                <div>
                    <h2 class="text-lg font-bold mb-4">About Us</h2>
                    <p class="text-gray-400">
                        S&A Gym is dedicated to helping you achieve your fitness goals. With expert trainers,
                        state-of-the-art facilities, and personalized plans, we are here to transform your fitness
                        journey.
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h2 class="text-lg font-bold mb-4">Quick Links</h2>
                    <ul class="space-y-2">
                        <li><a href="#about" class="hover:text-red-500">About Us</a></li>
                        <li><a href="#pricing" class="hover:text-red-500">Pricing</a></li>
                        <li><a href="#contact" class="hover:text-red-500">Contact</a></li>
                        <li><a href="#services" class="hover:text-red-500">Services</a></li>
                    </ul>
                </div>

                <!-- Contact Information -->
                <div>
                    <a class="text-lg font-bold mb-4">Contact Us</a>
                    <ul class="space-y-2 text-gray-400">
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 2.25c-4.97 0-9 4.03-9 9s4.03 9 9 9 9-4.03 9-9-4.03-9-9-9zm0 13.5a4.5 4.5 0 100-9 4.5 4.5 0 000 9z" />
                            </svg>
                            21 Revolution Street, Paris, France
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75c0 8.284 6.716 15 15 15H19.5a2.25 2.25 0 002.25-2.25v-1.125a1.5 1.5 0 00-.937-1.406l-4.5-1.8a1.5 1.5 0 00-1.425.156l-1.5 1.2a15.03 15.03 0 01-9.938-9.938l1.2-1.5a1.5 1.5 0 00.156-1.425l-1.8-4.5A1.5 1.5 0 001.125 2.25H0V1.5A2.25 2.25 0 012.25 0h1.5z" />
                            </svg>
                            +1 555 123456
                        </li>
                        <li class="flex items-center">
                            <svg class="w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25H4.5a2.25 2.25 0 01-2.25-2.25V6.75" />
                            </svg>
                            support@company.com
                        </li>
                    </ul>
                    <!-- Social Media -->
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="hover:text-red-500">
                            <i class="fa-brands fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" class="hover:text-red-500">
                            <i class="fa-brands fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" class="hover:text-red-500">
                            <i class="fa-brands fa-linkedin fa-lg"></i>
                        </a>
                        <a href="#" class="hover:text-red-500">
                            <i class="fa-brands fa-instagram fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Copyright Section -->
            <div class="mt-8 border-t border-gray-700 pt-4 text-center text-gray-400">
                <p>&copy; 2023 S&A Gym. All Rights Reserved.</p>
            </div>
        </div>
    </footer>



</x-app-layout>
