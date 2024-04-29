<x-site-layout title="Contact overview">
    <div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <div>
            <h1 class="text-4xl font-bold text-gray-800 mb-3">INFO</h1>
            <p class="text-lg text-gray-600 mb-4">Looking for more information? Download my CV</p>
            <a href="/CV-LevanDalbashvili.pdf" download class="mb-4 inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg">
            Download My CV
            </a>
            <!-- Contact details and social media links -->
        </div>
        <div class="flex justify-end">
            <img src="./logo.png" alt="logo" class="rounded-full h-40 w-40">
        </div>
        <!-- Contact form -->
    </div>
</div>

    <div class="container mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
            <h1 class="text-4xl font-bold text-gray-800 mb-6">Contact Me</h1>
            <p class="text-lg text-gray-600 mb-4">Got a question or proposal, or just want to say hello? Go ahead!</p>
            <div>
                <p class="font-semibold text-gray-800">Email:</p>
                <a href="mailto:your.email@example.com" class="text-blue-500">your.email@example.com</a>
                <p class="font-semibold text-gray-800 mt-4">Follow Me:</p>
                <div class="flex space-x-4 mt-2">
                    <a href="https://www.instagram.com/levandalbashvili/" class="text-blue-500">Instagram</a>
                    <a href="https://www.linkedin.com/in/levani-dalbashvili-911404200/" class="text-blue-500">LinkedIn</a>
                    <a href="https://github.com/levdalba" class="text-blue-500">GitHub</a>
                </div>
            </div>
        </div>
        <div>
            <form action="{{ url('/contact') }}" method="POST">
                @csrf   
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email </label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                    <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-site-layout>