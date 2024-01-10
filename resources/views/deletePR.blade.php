<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="max-w-md mx-auto bg-white rounded-md p-6 shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Delete Product</h2>
    
    <form  method="POST">
        @csrf

        <p class="text-gray-700 mb-4">Are you sure you want to delete the product ""?</p>

        <div class="flex justify-end">
            <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
            <a href="{{ route('index') }}" class="ml-2 text-gray-600">Cancel</a>
        </div>
    </form>
</div>
</body>
</html>