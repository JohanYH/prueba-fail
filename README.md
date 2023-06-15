# prueba fake para prepararse ha trabajar con laravel

## Puntos ha hacer

###    1. Crear un proyecto en PHP V.8 y conecta la base de datos PDO --> hecho ✔️

###    2. Crear las migraciones para las 5 tablas que se van a usar en el proyecto. (se anexa el modelo relacional de la base de datos), bodegas, historiales, inventarios, productos, users --> hecho ✔️


###    3. Realizar un EndPolnt que permita listar todas las bodegas ordenadas alfabéticamente. endpoint bodegas --> hecho ✔️


###    4. Realizar un EndPolnt que permita crear una bodegas.(agregar en los comentarios de la función los datos de entrada). endpoint bodega metodo posts --> hecho ✔️ 


###    5. Realizar un EndPoint que permita listar todos los productos en orden descendente por el campo "Total". El campo "Total" es la cantidad de unidades que la empresa tiene de este producto, considerando la unión de todas las bodegas, es decir que el dato como tal no existe en la base de datos,sino se debe calcular. Si la Bodega A tiene 1O unidades, la Bodega B tiene 5 unidades y la Bodega C tiene 3 unidades. Total= 18. --> hecho ✔️ 


###    6. Realizar un EndPoint que permita insertar un productos y a su vez asigne una cantidad inicial del mismo en la tabla inventarios en una de las bodegas por default.  --> hecho ✔️ 


###     7. Realizar un EndPoint que permita insertar registros en la tabla de inventarios, los parámetros de entrada deben ser (id_producto,id_bodega,cantidad). ◦ La tabla no puede repetir la combinación de Bodega I Producto Por lo tanto será necesario validar si el ingreso que se está realizado ya existe o es una combinación totalmente nueva. ◦ Si es una combinación totalmente nueva, se debe hacer un lnsert, considerando los datos ingresados. ◦ Si es una combinación existente, entonces se debe hacer un Update a este registro, considerando la suma de la cantidad existente con la cantidad nueva.