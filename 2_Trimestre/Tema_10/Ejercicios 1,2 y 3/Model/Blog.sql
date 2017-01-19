CREATE DATABASE IF NOT EXISTS Blog charset=utf8;
USE Blog;

CREATE TABLE IF NOT EXISTS articulos (
  id int(11) NOT NULL AUTO_INCREMENT,
  titulo varchar(100) NOT NULL,
  articulo LongText NOT NULL,
  autor varchar(50) NOT NULL,
  fecha datetime NOT NULL,
  categoria varchar(200)  DEFAULT NULL,
  editado tinyint(1) DEFAULT '0',
  fechaEdicion datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB AUTO_INCREMENT=1 ;

INSERT INTO articulos (id, titulo, articulo, autor, fecha, categoria, editado, fechaEdicion) VALUES
(1, 'El Blog Moderno', 'El blog moderno es una evolución de los diarios en línea, donde la gente escribía 
sobre su vida personal, como si fuese un diario íntimo pero dándole difusión en la red.
 Las páginas abiertas Webring incluían a miembros de la comunidad de diarios en línea. 
 Justin Hall, quien escribió desde 1994 su blog personal mientras era estudiante de la Universidad de Swarthmore,
 es reconocido generalmente como uno de los primeros blogueros.3 También había otras formas de diarios en línea. 
 Un ejemplo era el diario del programador de juegos John Carmack, publicado mediante el protocolo Finger. Los sitios web,
 como los sitios corporativos y las páginas web personales, tenían y todavía tienen a menudo secciones sobre noticias o 
 novedades, frecuentemente en la página principal, y clasificados por fecha. Uno de los primeros precursores de un blog
 fue el sitio web personal de Kibo, actualizado mediante USENET. Los primeros blogs eran simplemente componentes actualizados
 de sitios web comunes. Sin embargo, la evolución de las herramientas que facilitaban la producción y mantenimiento de 
 artículos web publicados y ordenados de forma cronológica, hizo que el proceso de publicación pudiera dirigirse hacia
 muchas más personas, y no necesariamente a aquellos que tuvieran conocimientos técnicos. Últimamente, esto ha llevado
 a que en la actualidad existan diversos procedimientos para publicar blogs. Por ejemplo, el uso de algún tipo de software
 basado en navegador, es hoy en día un aspecto común del blogging.', 'Administrador', '2017-01-09 12:54:00', 'Definicion'
 , 0, NULL);