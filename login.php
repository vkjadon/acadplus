<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- link css -->
    <link href="./output.css" rel="stylesheet">
</head>
<body>
    <div class="flex flex-col items-center justify-center h-screen">
      <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-gray-900 mb-4 text-center">Log In</h1>
        <form onsubmit="login(event)" class="flex flex-col">
        <!-- Email -->
          <input
            placeholder="Enter your Email"
            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            type="email"
            name="email"
            id="email"
            required
          />
          <!-- Password -->
          <div class="flex items-center">
            <input
              type="password"
              id="password"
              placeholder="Enter your Password"
              required
              name="password"
              class="mt-1 p-2 w-full border rounded-md pr-10 bg-gray-100 text-gray-900 border-0 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 mb-4"
            />
            <button
              type="button"
              id="togglePassword"
              class="focus:outline-none -ml-8"
            >
              <img
                src="image/visible.png"
                alt="eyedropper image click to toggle password visibility"
                id="togglePasswordIcon"
                class="w-4"
              />
            </button>
          </div>
          <p class="text-gray-900 mt-4">
            Create an account?
            <a
              class="text-sm text-blue-500 -200 hover:underline mt-4"
              href="signup"
              >Signup</a
            >
          </p>
          <!-- submit button -->
          <button
            class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150"
            type="submit"
          >
            Log In
          </button>
        </form>
       </div>
    </div>
    <script src="js/script.js"></script>

</body>
</html>
