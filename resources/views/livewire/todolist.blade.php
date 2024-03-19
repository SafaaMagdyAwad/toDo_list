<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="m-5 ">
    <div class="container m-5 bg-dark text-light ">
        <div class="card m-5 bg-dark text-light  ">
            {{-- In work, do what you enjoy. --}}
            <label class="form-label">add to do</label>
            <input type="text" wire:model='todo' wire:keydown.enter='addTodo' placeholder="add todo" class="form-control">
            <hr>
            @forelse ($todoes as $todo)
            <div>
                @if ($todo->status=='open')
                    
                <input class="form-check-input" type="checkbox" value="" id="markasdone" wire:change="markasdone({{$todo->id}})"   >
                @endif
                <label id="markasdone" style="{{($todo->status=='done')?'text-decoration:line-through':''}}">{{$todo->todo}}</label>
                @if ($todo->status=='done')
                    <button wire:click="remove({{$todo->id}})" class="text-danger">.     delete</i>
                    </button>
                @endif
                
            </div>
               
            
            @empty
            <p>no todoes</p>
                
            @endforelse 
                
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
