<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <h1 class="bienvenida">Bienvenido a 5W</h1>
        <p class="parrafo">Con nuestra aplicación web usted podrá manejar todas las tareas administrativas de su taller a un costo reducido, unas maximas prestaciones y un servicio de soporte 24/4. Podrá visualizar su agenda y la de sus empleados,emitir presupuestos a sus clientes, llevar un control del stock, tener un control documental de sus dosumentos importantes.<br>Podrá adjuntar fotos a las ordenes, directamente desde el móvil o una tableta, sin pasar por un ordenador.</p>
    </div>
    <div class="contenedor-servicios">
        <div class="card" style="background-image: url('https://th.bing.com/th/id/R.75365afa7e5addff824a08bf1d33140f?rik=S1bxaGc9Q5RNeQ&pid=ImgRaw&r=0')">
			<div class="textos">
				<h3>Rock In Rio</h3>
				<p>27 de Octubre 2021</p>
			</div>
		</div>
        <div class="card" style="background-image: url('https://www.stylist.co.uk/images/app/uploads/2019/11/07071743/dua-lipa-social-media.jpg?w=1200&h=1&fit=max&auto=format%2Ccompress')">
			<div class="textos">
				<h3>Rock In Rio</h3>
				<p>27 de Octubre 2021</p>
			</div>
		</div>
        <div class="card" style="background-image: url('https://th.bing.com/th/id/R.75365afa7e5addff824a08bf1d33140f?rik=S1bxaGc9Q5RNeQ&pid=ImgRaw&r=0')">
			<div class="textos">
				<h3>Rock In Rio</h3>
				<p>27 de Octubre 2021</p>
			</div>
		</div>
        <div class="card" style="background-image: url('https://www.stylist.co.uk/images/app/uploads/2019/11/07071743/dua-lipa-social-media.jpg?w=1200&h=1&fit=max&auto=format%2Ccompress')">
			<div class="textos">
				<h3>Rock In Rio</h3>
				<p>27 de Octubre 2021</p>
			</div>
		</div>
    </div>
</body>
</html>

<style>
    .bienvenida{
        text-align: center;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .parrafo{
        padding-top: 2rem;
        padding-right: 10rem;
        padding-left: 10rem;
        padding-bottom: 2rem;   
    }
    .contenedor-servicios{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }
    .card{
        border-radius: 10px;
	    min-height: 200px;
	    font-weight: bold;
	    padding: 20px;
	    position: relative;
	    overflow: hidden;
	    background-size: cover;
	    background-position: center center;
        max-width: 450px;
    }
</style>