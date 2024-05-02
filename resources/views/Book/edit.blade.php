<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        body {
            background-color: #e0f2f1; 
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
                
        .container {
            text-align: center;
        }
        form {
            background-color: #ffffff; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            text-align: center;
            margin-top: 20px; 
        }
        
        h1 {
            color: #37474f; 
            margin-bottom: 20px; 
        }
        
        span {
            display: block;
            margin-bottom: 10px;
            text-align: center; 
        }
        
        input {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            text-align: left; 
        }
        
        button {
            background-color: #f48fb1; 
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        button:hover {
            background-color: #ec407a; 
        }
    </style>
</head>
<body>
<div class="container">
<h1>Edite seu Livro</h1>
<form action="{{route('book.update', $book->id)}}" method="POST">
    @csrf
    @method('PUT')
    <span>Titulo:</span>
    <input type="text" name="title" value="{{$book->title}}">   
    <span>Autor:</span>
    <input type="text" name="author" value="{{$book->author}}">  
    <span>Descrição:</span>
    <input type="text" name="description" value="{{$book->description}}">   
    <span>Preço:</span> 
    <input type="number" name="price" value="{{$book->price}}">   

    <button type="submit">Salvar</button>
</form>
</div>
</body>
</html>
