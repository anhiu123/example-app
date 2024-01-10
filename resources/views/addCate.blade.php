<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<div class="container mx-auto mt-8">
        <h2 class="text-3xl font-semibold mb-4">Add Category</h2>
        <br>
        <a class="bg-green-500 text-white px-4 py-2 rounded-md" href="/category"> Thể Loại</a>
        <br>
        <form method="POST" class="bg-white p-6 rounded-md shadow-md">
            @csrf

            <!-- Product Name -->
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Tên Thể Loại:</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 p-2 rounded-md">
            </div>

            <div>
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md">Add Category</button>
            </div>
        </form>
    </div>

</body>
</html>