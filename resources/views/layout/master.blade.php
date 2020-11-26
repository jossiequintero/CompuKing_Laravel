<!DOCTYPE html>
<html lang="es">
@include('layout.head')

@if ($template=='layout.template-home')
<body class="main-layout">
@elseif ($template=='layout.template-about')
<body class="main-layout inner_posituong computer_page">    
@endif
    @include('layout.header');
    @include($template);
    @include('layout.footer')
</body>

</html>
