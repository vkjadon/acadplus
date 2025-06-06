<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <!-- link css -->
    <link href="./output.css" rel="stylesheet" />
  </head>
  <body>
    <div class="flex flex-col items-center justify-center h-screen">
      <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold text-gray-900 mb-4 text-center">
          Sign Up
        </h1>
        <form onsubmit="signup(event)" class="flex flex-col">
          <input
            placeholder="Enter your Full Name"
            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            type="text"
            name="fullname"
            id="fullname"
            required
          />
          <!-- Gender -->
          <label class="text-sm mb-2 text-gray-900 cursor-pointer" for="gender">
            What is your Gender?
          </label>
          <select
            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            id="gender"
            name="gender"
            required
          >
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
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
          <!-- User Type -->
          <label
            class="text-sm mb-2 text-gray-900 cursor-pointer"
            for="usertype"
          >
            What is your User Type
          </label>
          <select
            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            id="usertype"
            name="usertype"
            required
          >
            <option value="student">Student</option>
            <option value="faculty">Faculty</option>
          </select>
          <!-- RollNo or EmployeeID -->
          <input
            placeholder="Enter your Roll No / Employee ID"
            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            type="text"
            name="rollnoempid"
            id="rollnoempid"
            required
          />
          <!-- Department -->
          <label
            class="text-sm mb-2 text-gray-900 cursor-pointer"
            for="department"
          >
            Choose your Department
          </label>
          <select
            class="bg-gray-100 text-gray-900 border-0 rounded-md p-2 mb-4 focus:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-blue-500 transition ease-in-out duration-150"
            id="department"
            name="department"
            required
          >
            <option value="DME">Department of Mechanical Engineering</option>
            <option value="DCE">Department of Civil Engineering</option>
            <option value="DEE">Department of Electrical Engineering</option>
            <option value="DMCE">Department of Mechatronics Engineering</option>
          </select>
          <p class="text-gray-900 mt-4">
            Already have an account?
            <a
              class="text-sm text-blue-500 -200 hover:underline mt-4"
              href="login"
              >Login</a
            >
          </p>
          <!-- submit -->
          <button
            class="bg-gradient-to-r from-indigo-500 to-blue-500 text-white font-bold py-2 px-4 rounded-md mt-4 hover:bg-indigo-600 hover:to-blue-600 transition ease-in-out duration-150"
            type="submit"
          >
            Sign Up
          </button>
        </form>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
