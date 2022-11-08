<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body id="question" class="js-fullheight text-center">
    <main class="form-ask">
    <h1 class = "heading-section">Pose ta question</h1>
    <div class = "form-group">
        <input type="text" class="form-input" id="questionInput" placeholder="Question" required>
    </div>  
    <div>
        <button type="button" class=" btn btn-primary" type="submit">Primary</button>
    </div> 
    @foreach ($answers as $answer)
    <div>
        {{ $answer->answer}}
    </div>
        
    @endforeach   
    </main>
</body>

</html>