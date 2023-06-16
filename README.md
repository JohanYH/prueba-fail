# prueba fake para prepararse ha trabajar con laravel

## consiste en 6 endpoints este api, con 5 migraciones, bodegas, historiales, inventarios, productos, users. para usar esta api debes realizar las migraciones y conectar tus credenciales de mysql, y llenar con tados las tablas(opcional)

### EndPoint 1: Metodo Get("/api/bodegas"). Permita listar todas las bodegas ordenadas alfabéticamente.

### EndPoint 2: Metodo Post("/api/bodega"). permite crear una bodega. Datos obligatorias ha enviar -->   { "nombre": string, "id_responsable": number }

### EndPoint 3: Metodo Get("/api/productos-order-total"). permita listar todos los productos en orden descendente por el campo "Total". El campo "Total" es la cantidad de unidades que la empresa tiene de este producto, considerando la unión de todas las bodegas.

### EndPoint 4: Metodo Post("/api/producto"). insertar un producto y a su vez asigne una cantidad inicial del mismo en la tabla inventarios en una de las bodegas por default. datos obligatorios --> { "id_bodega": number, "cantidad": number, "nombre": string, "descripcion": string }.

### EndPoint 5: Metodo Post("/api/inventario"). permita insertar registros en la tabla de inventarios. La tabla no puede repetir la combinación de Bodega I Producto, Si es una combinación totalmente nueva, se hace un lnsert, Si es una combinación existente, entonces se debe hacer un Update a este registro. Datos obligatorios ---> { "id_producto": number, "id_bodega": number, "cantidad": number }.

### EndPoint 6: Metodo Post("/api/trasladar"). permite Trasladar un producto de una bodega a otra, datos obligatorios ---> { "id_producto": number, "id_bodega_origen": number, "id_bodega_destino": number, "cantidad": number }.