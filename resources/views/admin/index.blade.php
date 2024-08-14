<h1>Bienvenido</h1>
<div class="container">
    @if($message = Session::get('info'))
    <div class="alert alert-success">{{ $message }}</div>
    @endif
</div>