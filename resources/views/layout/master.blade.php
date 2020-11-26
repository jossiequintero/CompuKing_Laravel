<!DOCTYPE html>
<html lang="es">
@include('layout.head')

@if ($template=='layout.template-home')
<body class="main-layout">
@elseif($template=='layout.template-product')
<body class="main-layout inner_posituong">
@elseif($template=='layout.template-contact')
<body class="main-layout inner_posituong contact_page">
@else
<body class="main-layout inner_posituong computer_page">    
@endif
    @include('layout.header');
    @include($template);
    @include('layout.footer')
</body>

</html>
