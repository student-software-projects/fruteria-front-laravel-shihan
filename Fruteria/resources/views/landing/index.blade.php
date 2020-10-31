@extends('layout')

@section('titulo', 'Inicio')

@section('contenido')
<div id="carouselExampleCaptions" class="carousel slide bg-light" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('imagenes/fresa.png')}}" class="d-block w-100" alt="Fresa" width="100" height="800">
        <div class="carousel-caption d-none d-md-block bg-danger" style="color: white; padding: 5px">
          <h5>Fresa</h5>
          <p>Las deliciosas y sumamente populares fresas son una de las frutas más consumidas a nivel mundial, presente en numerosos platillos y postres y uno de los sabores preferidos en helados, galletas, pasteles, etcétera. Pero, ¿sabías que las fresas que consumimos son un híbrido de otras plantas de fresa?</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/limon.png')}}" class="d-block w-100" alt="Fresa" width="100" height="800">
        <div class="carousel-caption d-none d-md-block bg-danger" style="color: white; padding: 5px">
          <h5>Limon</h5>
          <p>Acidez y aroma son dos de las características más destacadas del árbol del limón, el limonero. Actualmente existen muchísimas variedades de plantas de cítricos, pero no hay una especie silvestre original. </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/mandarina.png')}}" class="d-block w-100" alt="Fresa" width="100" height="800">
        <div class="carousel-caption d-none d-md-block bg-danger" style="color: white; padding: 5px">
          <h5>Mandarina</h5>
          <p>La mandarina es un fruto similar a la naranja pero más pequeña y achatada por su base. Su corteza es lisa, brillante color rojo anaranjado y es muy fácil de pelar, incluso con las manos. La mandarina se consume principalmente como fruta en fresco, aunque también son conocidos las conservas de gajos de mandarinas.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/mango.png')}}" class="d-block w-100" alt="Fresa" width="100" height="800">
        <div class="carousel-caption d-none d-md-block bg-danger" style="color: white; padding: 5px">
          <h5>Mango</h5>
          <p>Fruta por excelencia en los países tropicales, el mango ya es un alimento autóctono en España. Existen cultivos en Andalucía, Canarias y Catalunya, aunque es un árbol originario de la India y la mayor parte de mangos que encontramos en nuestros mercados y supermercados provienen de África y de Latinoamérica.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/manzana.png')}}" class="d-block w-100" alt="Fresa" width="100" height="800">
        <div class="carousel-caption d-none d-md-block bg-danger" style="color: white; padding: 5px">
          <h5>Manzana</h5>
          <p>La manzana es una de las frutas más completas y saludables que se conocen por su contenido en hidratos de carbono, fibra, vitaminas y potasio, siendo muy recomendable para todas las edades. Dice un aforismo inglés que «una manzana diaria mantiene al doctor a distancia».</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/sandia.png')}}" class="d-block w-100" alt="Fresa" width="100" height="800">
        <div class="carousel-caption d-none d-md-block bg-danger" style="color: white; padding: 5px">
          <h5>Sandia</h5>
          <p>La sandía, también conocida como patilla, melón de agua o melancia, es uno de los frutos de mayor tamaño de cuantos se conocen y puede alcanzar hasta los 10 kilos de peso. Es el fruto de la sandiera, planta de la familia de las Cucurbitáceas, que incluye unas 850 especies de plantas herbáceas que producen frutos generalmente de gran tamaño y protegidos por una corteza dura.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('imagenes/uvas.png')}}" class="d-block w-100" alt="Fresa" width="100" height="800">
        <div class="carousel-caption d-none d-md-block bg-danger" style="color: white; padding: 5px">
          <h5>Uvas</h5>
          <p>La uva es un fruta que crece en racimos apretados. Su pulpa es blanca o púrpura y de sabor dulce. Se consume como fruta fresca o zumo, aunque su utilidad principal es la obtención de vinos. También se realizan conservas con ella. Contiene diversos minerales y vitaminas, y se piensa que tiene poderes antioxidantes y anticancerígenos.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection