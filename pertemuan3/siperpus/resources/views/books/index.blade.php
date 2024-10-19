<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-center">
    <p>Halaman List Buku</p>
    @if (isset($data['books']))
    <table class="border">
        <thead class="border">
            <tr class="border">
                <th class="border">Judul</th>
                <th class="border">Halaman</th>
                <th class="border">Penulis</th>
            </tr>
        </thead>
        <tbody class="border">
            @foreach ($books as $book )
                <tr>
                    <td class="border">{{$book['judul']}}</td>
                    <td class="border">{{$book['halaman']}}</td>
                    <td class="border">{{$book['penulis']}}</td>
                </tr>
            @endforeach
        </tbody>
    @endif
    @if (isset($id))
        <p>Anda mencari data : {{$id}}</p>
    @endif
    
    </table>
</body>
</html>