<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <style>
        body {
            background-color: #e0f2f1;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Sombra suave */
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }

        .add-button {
            position: absolute;
            top: 10px;
            left: 20px;
            background-color: #64b5f6;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;

        }

        .add-button:hover {
            background-color: #1e88e5;
           
        }

        .edit-button {
            background-color: #4caf50; 
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px;
            text-decoration: none;
        }

        .edit-button:hover {
            background-color: #388e3c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 60px;
        }

        th,
        td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #ffecb3;
            
        }

        tbody tr:nth-child(even) {
            background-color: #f5f5f5;
           
        }

        form button {
            background-color: #f48fb1;
            
            color: white;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin: 10px;
        }

        form button:hover {
            background-color: #ec407a;
          
        }
    </style>
</head>

<body>
    <div class="container">
        <a href="{{route('book.create')}}" class="add-button">Adicionar Livro</a>
        <table>
            <thead>
                <tr>

                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>

                    <td>{{$book->title}}</td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->description}}</td>
                    <td>{{$book->price}}</td>
                    <td>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                        <a href="{{route('book.edit', $book->id)}}" class="edit-button">Editar</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>