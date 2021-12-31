<x-guest-layout>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-6 sm:px-6 bg-white border-b border-gray-200">
                    <h1 class="font-semibold text-3xl text-gray-800 leading-tight flex">See all your laravel logs in one place!</h1>
                    <span class="text-sm text-gray-500">With all, we mean all your logs from all your projects 😉</span>
                    <p class="sm:mt-4">
                        Logcrawler collects all your laravel logs from all your different projects into just one place. So, you no more need to connect to your production maschine just to see the logs and you can use one place to view your logs ... even when you are not at your working maschine.<br />
                        Use logcrawler, never miss an error again and save time.
                    </p>
                    <div class="flex justify-center mb-12 md:mb-0">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded shadow-lg"
                           href="https://github.com/spresnac/logcrawler-server">Clone and start 🚀</a>
                    </div>
                </div>
            </div>

            <div class="mt-6 bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="py-6 sm:px-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-2xl text-gray-800 leading-tight">How to get started?</h2>
                    <p class="my-6">
                        <h2 class="text-xl text-gray-800 leading-tight font-semibold">Step 1: Clone the repo</h2>
                        Easy, clone the repo to where you want to get started.
                    </p>
                    <p class="my-6">
                        <h2 class="text-xl text-gray-800 leading-tight font-semibold">Step 2: Fit the .env file</h2>
                        Fit the .env file to your needs. In case you do not have a .env, copy the .env.example and go on.
                    </p>
                    <p class="my-6">
                        <h2 class="text-xl text-gray-800 leading-tight font-semibold">Step 3: Create a first user</h2>
                        Since the default registration is disabled, `php artisan user:create` will help you get your first user "installed".<br>
                        After that, run `php artisan user:activate &lt;your_user_id&gt;` to get active!
                    </p>
                    <p class="my-6">
                        <h2 class="text-xl text-gray-800 leading-tight font-semibold">Step 4: Create a your first project</h2>
                        Create your project in logcrawler and look at the steps to get your logs to this project in the project settings.<br>
                        Keep in mind that you need at least 1 API key from the user-menue top right ;)
                    </p>
                    <p class="my-6">
                        <h2 class="text-xl text-gray-800 leading-tight font-semibold">Step 5: Help improving this project</h2>
                        In case you have some minutes, you can contribute to this project ;)
                    </p>
                    <div class="flex justify-center mb-12 md:mb-0">
                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded shadow-lg"
                           href="https://github.com/spresnac/logcrawler-server">Clone and start 🚀</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
