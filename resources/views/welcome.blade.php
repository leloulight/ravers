<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>
    
        <div class="container">
            <div class="content">
            @if(Auth::user())
                <div>Estas logueado</div>
            @else
                <div><a href="{{ route('twitter') }}">Sing in</a></div>
            @endif
                
                

            </div>
        </div>
    </body>
</html>
