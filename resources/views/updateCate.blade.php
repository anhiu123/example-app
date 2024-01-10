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
        <h2 class="text-3xl font-semibold mb-4">Sửa Thể Loại</h2>
        <br>
    
        <br>
        <br>
<form method="POST" class="bg-white p-6 rounded-md shadow-md">
@csrf
        <label class="block text-gray-600" for="name">Name</label>
        <input class="w-full border border-gray-300 p-2 rounded-md" type="text" name="name" id="name" value="{{$data->name}}">
<br>
        <button  class="bg-green-500 text-white px-4 py-2 rounded-md" type="submit">Submit</button>

        </form>

   

</body>
</html>