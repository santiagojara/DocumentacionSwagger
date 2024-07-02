# 📚 Guía para Documentar APIs con Swagger Editor (Sin Instalación) 🌐

## Introducción

Bienvenido a esta guía práctica sobre cómo documentar tus APIs utilizando **Swagger Editor** sin necesidad de instalar nada en tu ordenador. Swagger Editor es una herramienta poderosa que te permite diseñar, construir y documentar APIs de manera interactiva. 

## 🛠️ Requisitos Previos

Antes de comenzar, asegúrate de tener lo siguiente:
- Un navegador web actualizado (Chrome, Firefox, Safari, etc.).
- Conexión a internet.
- Un proyecto con una API

### Clonar este repositorio
Para poder usar Swagger se necesita un proyecto que use una api y tenemos uno en este repositorio!
```
git clone https://github.com/Splinnk/Documentaci-n-Swagger.git
```
## 🚀 Pasos para Usar Swagger Editor

### 1. Acceder a Swagger Editor

Para acceder a Swagger Editor, simplemente visita la siguiente URL: 

👉 [**Swagger Editor**](https://editor.swagger.io/) 👈

### 2. Entorno del Editor

Al abrir Swagger Editor, verás una interfaz dividida en dos paneles:
- **Panel Izquierdo:** Donde escribirás el código YAML para definir tu API.
- **Panel Derecho:** Vista previa interactiva de la documentación generada.

![Swagger Editor Interface](https://th.bing.com/th/id/OIP.qOlAAXhUzRU_xj0KOv74jgHaEo?rs=1&pid=ImgDetMain)

### 3. Empezar a documentar nuestra api!
Una vez contamos con el repositorio en nuestras manos se puede empezar a documentar desde la plantilla que nos proporciona Swagger Editor, para esto podemos borrar los campos que posee y comenzar nuestra aventura 	😄

Se puede tener una idea de cómo se documenta de esta forma:

````yaml
openapi: 3.0.0
info:
  title: API de Tareas
  description: API para gestionar tareas.
  version: 1.0.0
paths:
  /tareas:
    get:
      summary: Lista todas las tareas
      responses:
        '200':
          description: Lista de tareas
          content:
            application/json:
              schema:
                type: array
                items:
                  type: object
                  properties:
                    id:
                      type: integer
                      example: 1
                    nombre:
                      type: string
                      example: "Comprar leche"
                    completado:
                      type: boolean
                      example: false
    post:
      summary: Crea una nueva tarea
      requestBody:
        description: Tarea a crear
        required: true
        content:
          application/json:
            schema:
              type: object
              properties:
                nombre:
                  type: string
                  example: "Lavar el coche"
                completado:
                  type: boolean
                  example: false
      responses:
        '201':
          description: Tarea creada
````

### 4. Guardar nuestra documentación.
Cuando se haya terminado de realizar la documentación se procede a guardar el archivo en formato YAML (es el formato en el que trabaja Swagger Editor 😉)  para así poder publicarlo en Swagger hub

![Swagger Editor YAML](https://i.ibb.co/D809C7H/guardar-YAML.png)

### 5. Crear cuenta en Swagger Hub.
👉 [**Swagger Hub**](https://swagger.io/tools/swaggerhub/) 👈

![SwaggerHUB](https://i.ibb.co/9Ts3VBf/CrearACC.png)

### 6. Importar el documento YAML.

![Import](https://i.ibb.co/BKwkz1V/Import-YAML.png)

Una vez se seleccione esta opción y adjuntemos nuestro archivo YAML previamente guardado nos dará una url que podemos compartir para visualizar nuestra documentación.

### 7. Visualizar nuestra api publicada 😇

![image](https://github.com/Splinnk/QueCarajo/assets/114356147/5e1b91d8-2463-4bea-b5c3-b554343dd825)



