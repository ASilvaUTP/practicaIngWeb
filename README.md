# practicaIngWeb

# Documentación - Problemas de PHP con Bucles y Arrays

## Problema #1: Foreach básico con arrays asociativos

**¿Qué hace?** Recorre un array asociativo que contiene posiciones de jugadores con sus nombres correspondientes.

**Funcionamiento:** 
- Crea un array donde cada clave representa una posición (portero, defensa, etc.) y cada valor es el nombre del jugador
- Usa `foreach` para iterar sobre cada par clave-valor del array
- En cada iteración, imprime la posición y el nombre del jugador usando concatenación de strings

**Conceptos importantes:**
- Los arrays asociativos usan claves string para identificar valores
- `foreach` permite acceder tanto a la clave como al valor simultáneamente
- La concatenación en PHP se hace con el operador punto (`.`)

<img width="921" height="364" alt="imagen" src="https://github.com/user-attachments/assets/e714f4b0-52be-4000-afce-25d1e7ffac93" />
<img width="921" height="261" alt="imagen" src="https://github.com/user-attachments/assets/cc368d44-880a-43dd-91bd-0d66463ced87" />

---

## Problema #2: Lectura y parseado de XML con foreach

**¿Qué hace?** Lee un archivo XML que contiene información de colores y sus códigos hexadecimales, luego muestra cada color con su código.

**Funcionamiento:**
- El XML contiene elementos `<color>` con subelementos `<nombre>` y `<codigo_hexadecimal>`
- Recorre cada elemento color usando `foreach` y accede a los subelementos con la sintaxis de flecha (`->`)

**Requisitos técnicos:**
- El archivo XML debe estar en el mismo directorio que el script PHP
- PHP debe tener la extensión SimpleXML activada (viene por defecto)
- El XML debe tener una estructura bien formada

<img width="921" height="251" alt="imagen" src="https://github.com/user-attachments/assets/466a4629-6da7-45f3-a1aa-0a0fbe0eddb2" />

---

## Problema #3: While loop con condiciones múltiples

**¿Qué hace?** Suma números de un array hasta que la suma alcance o supere el valor 10, o hasta que se acaben los elementos del array.

**Funcionamiento:**
- Inicializa un contador de posición y una variable para acumular la suma
- El bucle `while` continúa mientras se cumplan DOS condiciones: que queden elementos por recorrer Y que la suma sea menor a 10
- En cada iteración suma el elemento actual y avanza a la siguiente posición
- Se detiene automáticamente cuando alguna de las condiciones deja de cumplirse

**Lógica del algoritmo:**
- Usa el operador `&&` (AND lógico) para evaluar múltiples condiciones
- `count()` devuelve la cantidad total de elementos en el array
- La suma se acumula con el operador `+=`

<img width="921" height="192" alt="imagen" src="https://github.com/user-attachments/assets/26c1360c-3a4f-4814-bb73-6b56b3e815bc" />

---

## Problema #4: While loop con continue y break

**¿Qué hace?** Busca un elemento específico ("R34 Skyline") en un array de coches, mostrando los índices de los elementos que no coinciden hasta encontrar el objetivo.

**Funcionamiento:**
- Recorre un array de nombres de coches usando un contador manual
- Si el elemento actual NO es "R34 Skyline", imprime el índice y pasa al siguiente con `continue`
- Cuando encuentra "R34 Skyline", muestra un mensaje y termina el bucle con `break`

**Control de flujo:**
- `continue` hace que el bucle salte el resto del código y vaya directamente a la siguiente iteración
- `break` termina completamente la ejecución del bucle
- Esto permite implementar búsquedas eficientes que se detienen al encontrar lo que buscan

<img width="921" height="268" alt="imagen" src="https://github.com/user-attachments/assets/42ccd3aa-5fa0-4407-b249-3bab0decb0a2" />

---

## Problema #5: Procesamiento de formularios POST

**¿Qué hace?** Procesa todos los datos enviados desde un formulario HTML y los muestra en pantalla.

**Funcionamiento:**
- Un formulario HTML envía datos usando el método POST a un archivo PHP
- El script PHP verifica si se recibieron datos con `if ($_POST)`
- Si hay datos, usa `foreach` para recorrer todos los campos del formulario
- Muestra cada campo con su nombre y valor correspondiente

**Conceptos web:**
- `$_POST` es una variable superglobal que PHP llena automáticamente con los datos del formulario
- Es importante verificar que existan datos antes de procesarlos para evitar errores
- Cada campo del formulario HTML se convierte en una entrada del array `$_POST`

<img width="921" height="362" alt="imagen" src="https://github.com/user-attachments/assets/047476b9-9363-4230-960a-6873e34f58b5" />

