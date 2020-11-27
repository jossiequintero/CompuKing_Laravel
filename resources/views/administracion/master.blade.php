<!DOCTYPE html>
<html lang="es">

<head>
    <title>
        Administracion
    </title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            background-color: rgb(255, 255, 255);
            display: flex;
            flex-direction: row;
        }

        .aside {
            height: 100vh;
            width: 150px;
            background-color: rgb(13, 38, 105);
            padding-top: 20px; 
        }

        .menu_item {
            list-style: none;
            display: block;
            padding: 10px;
        }

        .menu_item a {
            text-decoration: none;
            color: white;
        }

        h1 {
            padding-top: 20px;
            text-align: center;
        }

        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: calc(100%-150px);
        }

        .editar {

            width: 300px;
        }

        table {
            margin: 0 auto;
            border: 1px solid black;
            border-collapse: collapse;
            border-radius: 20px;
        }

        tr,
        td {
            border: 1px solid black;
            padding: 10px;
            border-collapse: collapse;
        }
        td{
            padding: 10px!important;
        }

        thead {
            background-color: blue;
            color: white;
        }

        tbody {
            background: white;

        }

        .contenedor {
           
        }

        .input {
            width: 80px;
            background: #1141c7;
            height: 40px;
            color: white;
            float: right;
            padding: 10px;
            margin: 10px;
        }
.inputtext{
    border: none;
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
        <div style="text-align: center">
        <h1 >Ventana de Administracion</h1>
    </div>
        <hr>
        <section class="editar home">
            <h2 style="text-align: center">
                Editar Pagina Home
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
                                    <input class="inputtext"  type="text" id="Titulo" name="Titulo"
                                        value="{{$carrosel_home_item->titulo}}">
                                </td>
                                <td>
                                    <input class="inputtext"  type="text" id="Promocion" name="Promocion"
                                        value="{{$carrosel_home_item->promocion}}">
                                </td>
                                <td><input class="inputtext" type="text" id="Descripcion" name="Descripcion"
                                        value="{{$carrosel_home_item->descripcion}}">
                                </td>
                            <tr>
                                @endforeach

                        </tbody>

                    </table>
                    <input type="submit" value="Guardar" class="input">
                </form>
            </div>
        </section>

        {{-- <section class="editar about">
            <h2 style="text-align: center">
                Editar Pagina About
            </h2>
            <div class="contenedor">

            </div>
        </section>
        <section class="editar about">
            <h2 style="text-align: center">
                Editar Pagina About
            </h2>
            <div class="contenedor">

            </div>
        </section>
        <section class="editar about">
            <h2 style="text-align: center">
                Editar Pagina About
            </h2>
            <div class="contenedor">

            </div>
        </section> --}}
    </main>




    <footer>

    </footer>

</body>

</html>
