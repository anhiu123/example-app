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
        <h2 class="text-3xl font-semibold mb-4">Add Product</h2>
        <br>
        <a href="/"> Sản Phẩm</a>
        <br>
        <br>
<form method="POST" class="bg-white p-6 rounded-md shadow-md">
@csrf
        <label class="block text-gray-600" for="name">Name</label>
        <input class="w-full border border-gray-300 p-2 rounded-md" type="text" name="name" id="name" value="{{$data->name}}">


        <label for="filterType" class="text-lg font-semibold mb-2">Chọn ID Loại:</label>
            <input type="hidden" id="idloai_hidden" name="idloai_hidden" value="">
<select id="filterType" class="p-2 border border-gray-300 rounded-md mb-4">
    @foreach($category as $category1)
        <option value="{{ $category1->id }}">{{ $category1->name }}</option>
    @endforeach
</select>
<br>
        <button  class="bg-green-500 text-white px-4 py-2 rounded-md" type="submit">Submit</button>

        </form>

        <script>
  document.getElementById('filterType').addEventListener('change', function () {
    console.log('Selected value:', this.value);
    document.getElementById('idloai_hidden').value = this.value;
});

document.addEventListener('DOMContentLoaded', function () {
    var defaultId = document.getElementById('filterType').value;
    document.getElementById('idloai_hidden').value = defaultId;
});
</script>

</body>
</html>