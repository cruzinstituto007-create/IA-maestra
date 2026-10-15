# IA-maestra
#Prompt: Comportate como un profesor experto en PHP con más de 15 años de experiencia y dame ejercicios para aprender a #programar en PHP, ya se hacer bucles y condicionales y me manejo con las variables, pasame al siguiente nivel con #ejercicios sencillos para el aprendizaje, me gustarían aproximadamente 4 propuestas de ejercicios de un nivel #medio, que tarde un par de clases en hacerlos, no me des tu solución aún pues los quiero hacer solo para empezar

# ¡Hola! Qué gran noticia que ya domines los fundamentos de PHP (variables, condicionales y bucles). Es el cimiento perfecto para dar el salto a una programación más estructurada, reutilizable y orientada a resolver problemas reales.

Como profesor, me encanta ver ese entusiasmo por no querer ver la solución todavía; esa es la mejor forma de aprender de verdad.

Aquí tienes **4 propuestas de ejercicios de nivel medio** diseñadas para que profundices en la manipulación de arrays avanzados, funciones personalizadas, formularios básicos (POST/GET) o manipulación de cadenas y ficheros. Están pensados para que te lleven un par de sesiones de práctica.

---

### 1. El Catálogo de Productos con Filtros (Arrays y Funciones)

* **Objetivo:** Aprender a estructurar datos complejos con arrays multidimensionales y a encapsular la lógica usando funciones.
* **El reto:**
* Crea un array multidimensional que almacene al menos 5 productos (cada uno con: ID, nombre, precio, categoría y stock).
* Escribe una función llamada `filtrarProductosPorPrecio($productos, $precioMaximo)` que devuelva un nuevo array solo con los productos que cuesten menos de esa cantidad.
* Escribe otra función llamada `calcularValorInventario($productos)` que calcule el precio total de todo el stock disponible sumando `precio * stock` de cada artículo.
* Muestra los resultados en pantalla de forma ordenada usando una tabla HTML básica generada con PHP.



### 2. Validador de Registro de Usuario (Funciones y Validaciones)

* **Objetivo:** Practicar la manipulación de cadenas de texto (*strings*), expresiones regulares básicas o funciones nativas de validación, y el manejo de errores.
* **El reto:**
* Crea una función llamada `validarRegistro($datos)` que reciba un array asociativo con: `nombre`, `email`, `password` y `edad`.
* La función debe devolver un array con los mensajes de error correspondientes si se cumple alguna de estas condiciones:
* El nombre tiene menos de 3 caracteres.
* El email no tiene un formato válido (puedes usar `filter_var`).
* La contraseña tiene menos de 6 caracteres o no incluye al menos un número.
* La edad es menor de 18 años.


* Si el array de errores está vacío, debe devolver un mensaje de éxito. Prueba la función pasando diferentes casos de prueba (unos válidos y otros inválidos).



### 3. Simulador de Carrito de Compras (Arrays Asociativos y Sesiones básicas o Lógica de Estado)

* **Objetivo:** Simular la lógica de negocio detrás de un e-commerce utilizando arrays para gestionar un estado.
* **El reto:**
* Define un array que actúe como el catálogo de una tienda.
* Simula las acciones de un usuario: añadir 3 productos diferentes al carrito (indicando la cantidad), actualizar la cantidad de uno de ellos, y eliminar otro producto.
* Crea una función que procese el carrito final y genere un ticket de compra detallado que muestre: el nombre de cada producto, la cantidad, el precio unitario, el subtotal por línea y el **precio total** aplicando un descuento del 10% si el total supera cierta cantidad.



### 4. Generador de Estadísticas de Notas (Algoritmia y Arrays)

* **Objetivo:** Trabajar con algoritmos de procesamiento de datos numéricos y ordenación.
* **El reto:**
* Imagina que tienes un array asociativo donde las claves son los nombres de los alumnos y los valores son arrays con sus notas en 4 asignaturas diferentes.
* Escribe un script que calcule y muestre:
* La nota media de cada alumno.
* Quién ha sido el alumno con la nota media más alta de toda la clase.
* La asignatura con la media global más baja de la clase.
* Un listado de los alumnos ordenados de mayor a menor nota media.





---

### 💡 Consejos de profesor para afrontarlos:

1. **Divide y vencerás:** No intentes resolver todo el ejercicio de golpe. Haz primero la estructura de datos, luego la función principal, y por último la visualización.
2. **Usa `print_r()` o `var_dump()`:** Son tus mejores amigos para inspeccionar qué contienen tus arrays en cada paso.

¡Mucho éxito con ellos! Cuando los tengas listos o si en algún momento te atascas con alguno y quieres una pista (sin que te dé la solución entera), dime por dónde vas y lo revisamos juntos. ¿Con cuál de los cuatro vas a empezar?
