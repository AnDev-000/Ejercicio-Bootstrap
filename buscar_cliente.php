<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Buscar clientes</title>
</head>
<body>

<div class="container">
    <!-- fila -->
    <div class="row">
        <!-- ocupara 6 columnas de las 12, pantalla media, centrado con mx-auto y margen eje y de 5-->
        <div class="col-md-6 mx-auto my-5">
            <form action="ver_busqueda.php">
                <label for="">Form_1</label>
                <div class="form-group">
                    <label for="nombreContacto">Nombre del Contacto</label>
                    <input type="text" class="form-control" name="nombre" id="nombreContacto" placeholder="Ingrese nombre que desea buscar">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto my-5">
            <form>
                <label for="">Form_2</label>
                <div class="form-group">
                    <label for="nombreContacto">Email Contacto</label>
                    <input type="text" class="form-control" id="nombreContacto" placeholder="Ingrese el nombre del contacto">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
        
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto my-5">
            <form>
                <label for="">Form_3</label>
                <div class="form-group">
                    <label for="nombreContacto">Rango de fechas</label>
                    <input type="text" class="form-control" id="nombreContacto" placeholder="Ingrese el nombre del contacto">
                </div>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
        </div>
        
    </div>
</div>
    
</body>
</html>