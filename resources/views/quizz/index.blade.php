<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizz</title>
</head>
<body>
<h1><b>Quizz</b></span></h1>
<table border="1">
    <tbody>
        @foreach($quizz as $quizz)
            <tr>
                <td>{{ $quizz->id }}</td>
                <td>{{ $quizz->pseudo }}</td>
                <td>{{ $quizz->sujet }}</td>
                <td>{{ $quizz->sujet }}</td>
                <td>{{ $quizz->difficulte }}</td>
                <td>
                    <form action="">
                        <label for="pseudo">Pseudonyme:</label><br>
                        <input type="text" id="pseudo" name="pseudo"><br>
                        
                    </form>
              </td>
            </tr>
        @endforeach
    </tbody>
</table>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
</body>
</html>