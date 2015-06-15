/* 1. Mostrar el nombre de todas las películas. */
select nombre
from peliculas

/* 2. Mostrar las distintas calificaciones de edad que existen. */ 
select distinct califedad
from peliculas;

/* 3. Mostrar todas las salas, ordenadas por capacidad. */
select *
from salas
order by capacidad asc;

/* 4. Mostrar el nombre de todas las películas junto con el código, el nombre y la capacidad de la sala donde se proyecta. */ 
select peliculas.nombre, salas.s, salas.nombre, salas.capacidad
from peliculas, salas, proyecciones
where peliculas.p=proyecciones.p 
	and salas.s=proyecciones.s;

/* 5. Mostrar toda la información de aquellas salas en las que se proyecte la película “Torrente” o se proyecte la película “La Clase” */
select salas.*
from salas, peliculas, proyecciones
where salas.s=proyecciones.s 
	and peliculas.p=proyecciones.p
	and (peliculas.nombre='Torrente'
	or peliculas.nombre='La clase');

/* 6. Mostrar todas las películas que están calificadas como aptas para mayores de 18 años. */
select *
from peliculas
where califedad='18';

/* 7. Mostrar las proyecciones de las películas calificada como para todos los públicos. */
select *
from peliculas, proyecciones
where peliculas.p=proyecciones.p
	and califedad='TP';

/* 8. Mostrar el título de todas las películas que se proyectan en horario de mañana. */
select peliculas.nombre
from proyecciones, peliculas
where proyecciones.p=peliculas.p and hora='12.00';

/* 9. Modificar la capacidad de la sala S3 a 200 personas. */
update salas
set capacidad=200
where s='S3'

/* 10. El cine ha decidido retrasar todas las sesiones de las 12.00 a las 12.30. Por tanto modificar dicho dato. */
update proyecciones
set hora='12.30'
where hora='12.00'

/* 11. Mostrar para cada sesión, todos los datos de la película que se proyecta. */
select *
from proyecciones, peliculas
where proyecciones.p=peliculas.p

/* 12. Mostrar aquellas películas que se proyecten en la sala “África” y en la sala “Europa” */
select distinct peliculas.nombre
from proyecciones, salas, peliculas
where proyecciones.s=salas.s
	and proyecciones.p=peliculas.p
	and (salas.nombre='Africa'
	or salas.nombre='Europa')

/* 13. Obtener un ranking de las proyecciones más demandadas. */
select *
from proyecciones
order by ocupacion desc

/* 14. Mostrar los nombres de las películas de las que se han vendido más de 100 entradas. Mostrar también la hora a la que se proyectan. */
select nombre, hora
from peliculas, proyecciones
where peliculas.p=proyecciones.p 
	and ocupacion>100

/* 15. Se necesita tener la información total de aquella sala que ha sido usada por más de 150 personas de una vez. */
select salas.*
from salas, proyecciones
where salas.s=proyecciones.s
	and ocupacion > 150;

/* 16. Mostrar la información de las proyecciones pero que aparezcan nombre de la sala, nombre de la película y ocupación. Ordenar el resultado por número de entradas vendidas de más a menos */
select peliculas.nombre, salas.nombre, ocupacion
from peliculas, salas, proyecciones
where peliculas.p=proyecciones.p
	and salas.s=proyecciones.s 
order by ocupacion desc;














