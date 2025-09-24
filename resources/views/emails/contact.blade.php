<p>Has recibido un nuevo mensaje desde el formulario de contacto:</p>

<p><strong>Nombre:</strong> {{ $userName }}</p>
<p><strong>Correo:</strong> {{ $userEmail }}</p>
<p><strong>Mensaje:</strong><br>{{ nl2br(e($userMessage)) }}</p>
