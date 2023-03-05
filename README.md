
## Prueba

1. Crea un listado de todas las keys/traducciones que devuelve la API:
* Nota: Si la key no está traducida en alguno de los idiomas, su traducción por defecto es inglés.

- Realizado 

2. Crea un campo de búsqueda donde se pueda buscar tanto en el nombre de la traducción como en su traducción y remarca los resultados.

- Realizado

3. Al hacer click en la key de la traducción mostrar un pop-up con el detalle de todas sus traducciones

- Realizado

4. Crear un filtro para poder filtrar las traducciones por los diferentes grupos que devuelve la api y desarrolla la funcionalidad de poder filtrar por ellos.

- Realizado

5. BONUS: Crear un botón que exporte a excel los resultados.

- No completado

## Instalación

- crear un fichero .env con las variables y respectivas credenciales.

crear el fichero .env

```
cp .env.example .env
```

- colocar valores de credenciales a las variables del fichero .env

SCANDINAVIAN_API_USER=
SCANDINAVIAN_API_PASS=
SCANDINAVIAN_API_TOKEN=

### Generar la key 
```
php artisan key:generate
```

### Importar librerias JavaScript
```
npm install
```
### Ejecutar laravel server

```
php artisan serve
```

## Librerias usadas

- Laravel -v10.0
- Guzzlehttp
- laravel-datatables-vite -v0.5.2
- mark.js
- Bootstrap -v5.2.3
