<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-500 to-orange-500 p-4">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full">
            <h2 class="text-2xl font-bold mb-2">Sign up to your account</h2>
            <p class="text-zinc-600 mb-6">Greetings on your return! We kindly request you to enter your details.</p>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-zinc-700 mb-2" for="email">Email</label>
                    <input class="w-full px-3 py-2 border rounded-lg" type="email" id="email" name="email"
                        placeholder="pat@saturn.dev" required />
                </div>
                <div class="mb-4">
                    <label class="block text-zinc-700 mb-2" for="password">Password</label>
                    <input class="w-full px-3 py-2 border rounded-lg" type="password" id="password" name="password"
                        placeholder="min 12 cars" required />
                </div>
                <div class="mb-4 flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="mr-2" />
                    <label for="remember" class="text-zinc-700">Remember me</label>
                </div>
                <button
                    type="submit" class="w-full bg-orange-500 text-white py-2 rounded-lg mb-4 hover:shadow-lg transition duration-300">Login</button>
            </form>
            <p class="text-center text-zinc-600">Already have an account? <a href="#" class="text-red-500">Sign
                    in</a></p>
        </div>
    </div>
</body>

</html>
