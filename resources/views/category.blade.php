<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
<div class="container mx-auto my-8 p-8 bg-white shadow-md rounded-md">
        <h1 class="text-3xl font-bold mb-4">Thể Loại</h1>
        <a class="bg-green-500 text-white px-4 py-2 rounded-md" href="/"> Sản Phẩm</a>
        <hr>
        <br>
        <br>
        <a class="bg-green-500 text-white px-4 py-2 rounded-md" href="/addct"> Thêm Thể Loại</a>


        <table class="min-w-full table-auto">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b text-left">ID</th>
            <th class="py-2 px-4 border-b text-left">Name</th>
            <th class="py-2 px-4 border-b text-left">Xóa </th>
            <th class="py-2 px-4 border-b text-left">Sửa </th>
           
            <!-- Thêm các cột khác nếu cần -->
        </tr>
    </thead>
    <tbody>
        @foreach($category as $category1)
        <tr>
            <td class="py-2 px-4 border-b">{{ $category1->id }}</td>
            <td class="py-2 px-4 border-b">{{ $category1->name }}</td>
            <td>   <button class="bg-red-500 text-white px-4 py-2 rounded-md delete-btn" ><a href="/deleteCate/{{ $category1->id }}">Xóa</a></button></td>
            <td><button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md"><a href="/updateCate/{{ $category1->id }}">Sửa</a> </button></td>
            <!-- Thêm các ô khác nếu cần -->
        </tr>
        @endforeach
    </tbody>
</table>
    </div>

</body>
</html>