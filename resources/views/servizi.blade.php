<h1>Molto più di un hotel</h1>
<div class="content">
    <div class="msg">
        {{ $messaggio }}
    </div>
    
    <ul>
        @foreach ($lista_servizi as $servizio)
            <li> {{ $servizio }}</li>
        @endforeach
    </ul>
</div>

