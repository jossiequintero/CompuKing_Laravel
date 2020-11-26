<!DOCTYPE html>
<html lang="es">
<head>
<title>
    Administracion
</title>
<style>
    *{
        box-sizing: border-box;
        padding:0;
        margin: 0;
    }
    body{
        background-color: aquamarine;
        
       
    }
   
    .aside{
        display: flex;
        justify-content: center;
        height: 40px;
        width: 100%;
        background-color: rgb(13, 38, 105);
    }
    .menu_item{
        list-style: none;
        display: inline-block;
        padding: 10px;
    }
    .menu_item a{
        text-decoration: none;
        color: white;
    }
    h1
    {
        padding-top: 20px; 
    }
    .main{
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    .editar
    {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 300px;
    }
    table{
        margin: 0 auto; 
        border: 1px solid black;
        border-style: collapse; 
    }
    tr,td{
        border: 1px solid black;
    }
    thead{
        background-color: blue; 
        color: white;
    }
    tbody{
        background: white;
        
    }
.contenedor{
    style="display: flex";
    justify-content: center;
}
form{
    display: flex;
    justify-content: center;
    flex-direction: column;
}
.input{
    width: 60px;
}
</style>
</head>

<body>
    <aside class="aside">
    <nav class="menu">
     <ul>
        <li class="menu_item">
            <a href="home">Home</a>
        </li>
        <li class="menu_item">
            <a href="about">Nosotros</a>
        </li>
        <li class="menu_item">
            <a href="computer">Computer</a>
        </li>
        <li class="menu_item">
            <a href="laptop">laptop</a>
        </li>
        <li class="menu_item">
            <a href="contact">contact</a>
        </li>
        <li class="menu_item">
            <a href="product">product</a>
        </li>
    </ul>
</nav>
</aside>

<main class="main">
 <h1 style="text-align: center;margin-bottom:20px;">Ventana de Administracion</h1>
 <hr>
<section class="editar home">
<h2 style="text-align: center">
    Editar Home
</h2>
<div class="contenedor">
    <form name="promoform" action="{{url('promoGuardar')}}" method="POST">
        @csrf
    <table>
        <thead>
            <tr>
                <td>
                    Titulo
                </td>
                <td>
                    Promocion
                </td>
                <td>
                    Descripcion
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($carrosel_home_items as $carrosel_home_item)
            <tr>
                <td>
                    <input type="text" id="Titulo" name="Titulo" value="{{$carrosel_home_item->titulo}}" >
                </td>
                <td>
                    <input type="text" id="Promocion" name="Promocion" value="{{$carrosel_home_item->promocion}}" >
                </td>
                <td><input type="text" id="Descripcion" name="Descripcion" value="{{$carrosel_home_item->descripcion}}">
                </td>   
                <tr>
                @endforeach
             
        </tbody>

    </table>
    <input type="submit" value="Guardar" class="input">
    </form>
</div>
</section>

<section class="editar about">
    <h2 style="text-align: center">
        Editar Pagina About
    </h2>
    <div class="contenedor">
        <form name="promoform" action="{{url('promoGuardar')}}" method="POST">
        <table>
            <thead>
                <tr>
                    <td>
                        Titulo
                    </td>
                  
                    <td>
                        Descripcion
                    </td>
                </tr>
            </thead>
            {{-- <tbody>
                
                <tr>
                    <td>
                        <input type="text" id="Titulo" name="Titulo" value="{{$about->titulo}}" >
                    </td>
                    <td>
                        <input type="text" id="Promocion" name="Promocion" value="{{$carrosel_home_item->promocion}}" >
                    </td>
                    <td><input type="text" id="Descripcion" name="Descripcion" value="{{$carrosel_home_item->descripcion}}">
                    </td>
                    @endforeach
            </tbody> --}}
    
        </table>
        <input type="submit" value="Guardar" class="input">
        </form>
    </div>
    </section>
</main>


    

    <footer>

</footer>

</body>

</html>
