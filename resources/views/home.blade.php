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
        <h1 class="text-3xl font-bold mb-4">Sản Phẩm</h1>
        <a class="bg-green-500 text-white px-4 py-2 rounded-md" href="/category">Thể Loại</a>
        <br>
        <br>
        <br>
      <a class="bg-green-500 text-white px-4 py-2 rounded-md" href="/addpr">Thêm Sản Phẩm</a>
      <br>
        <!-- <label for="filterType" class="text-lg font-semibold mb-2">Chọn ID Loại để lọc:</label>
<select id="filterType" class="p-2 border border-gray-300 rounded-md mb-4">
    <option value="">Tất cả</option>
    @foreach($category as $category1)
        <option value="{{ $category1->id }}">{{ $category1->name }}</option>
    @endforeach
</select> -->

<table class="min-w-full table-auto">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b text-left">ID</th>
            <th class="py-2 px-4 border-b text-left">Name</th>
            <th class="py-2 px-4 border-b text-left">Category Name</th>
            <th class="py-2 px-4 border-b text-left">Xóa </th>
            <th class="py-2 px-4 border-b text-left">Sửa </th>
            <!-- Thêm các cột khác nếu cần -->
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td class="py-2 px-4 border-b">{{ $product->id }}</td>
            <td class="py-2 px-4 border-b">{{ $product->name }}</td>
            <td class="py-2 px-4 border-b">{{ $product->category->name }}</td>
           <td>   <button class="bg-red-500 text-white px-4 py-2 rounded-md delete-btn" ><a href="/delete/{{ $product->id }}">Xóa</a></button></td>
            <td><button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md"><a href="/update/{{ $product->id }}">Sửa</a> </button></td>
            <!-- Thêm các ô khác nếu cần -->
        </tr>
        @endforeach
    </tbody>
</table>

    </div>


</body>
</html>
