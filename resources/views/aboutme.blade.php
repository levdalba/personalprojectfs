<x-site-layout title="About Me">
    <div class="container mx-auto max-w-7xl px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center my-10">
            <!-- Personal Photo Section -->
            <div class="flex justify-center">
                <div class="w-52 h-52 rounded-full overflow-hidden shadow-xl">
                    <img src="/pic.jpg" alt="Levan Dalbashvili" class="object-cover w-full h-full transition-transform duration-300 ease-in-out hover:scale-110">
                </div>
            </div>

            <!-- About Me Content -->
            <div class="space-y-6">
                <h1 class="text-4xl font-bold text-gray-800">About Me</h1>
                <p class="text-lg text-gray-600">
                    Hello, I'm Levan Dalbashvili, a dedicated student at Harbour Space University, focusing on Web Development. With a passion for solving complex problems through code, I have a solid foundation in both frontend and backend technologies. My academic and competitive programming background fuels my ability to design and optimize algorithms for innovative software solutions.
                </p>
                <h2 class="text-2xl font-bold text-gray-800">Skills</h2>
                <ul class="list-disc pl-5 text-gray-600 space-y-2">
                    <li>Competitive Programming</li>
                    <li>Frontend Web Development: HTML, CSS, JavaScript, TypeScript, React</li>
                    <li>Backend Development: PHP, Python</li>
                    <li>Database Management: PostgreSQL</li>
                    <li>Other Technical Skills: Material UI, Tailwind CSS, Styled Components, Redux, GIT</li>
                </ul>
            </div>

        </div>

        <!-- Skills Bar -->
        <div class="mt-10 ">
            <h3 class="text-2xl font-bold text-gray-800 mb-4 pace-y-10">Proficiency With Frameworks</h3>
            <div class="space-y-10 ">
                <div class="skill">
                    <p class="font-semibold">React</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill">
                    <p class="font-semibold">Laravel</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 30%"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-site-layout>
