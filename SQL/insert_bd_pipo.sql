USE pipo;
INSERT INTO Escolaridad(denominacion) VALUES ("Educación preescolar"), ("Educación primaria"), ("Educación secundaria inconclusa"), ("Educación secundaria"), ("Bachillerato inconcluso"), ("Bachillerato o preparatoria"), ("Licenciatura inconclusa"), ("Licenciatura o universidad"), ("Maestría"), ("Doctorado");
INSERT INTO Tipo(denominacion, descripcion) VALUES ("Cohecho", "Cuando un servidor público pide dinero, para agilizar un trámite, una firma, o esconder un expediente. Art. 52 LGRA"),
("Peculado", "Un servidor público utiliza al personal de jardinería o de mantenimiento, además de materiales como pintura o cemento, propiedad de la dependencia, para hacer reparaciones en su casa. Art. 53 LGRA"),
("Abuso de funciones", "Un servidor público provoca un accidente vial, y pretende valerse de su cargo para que las autoridades que atienden el percance omitan datos en sus reportes con la intención de beneficiarse evadiendo su responsabilidad en el accidente. Art. 57 LGRA"),
("Desvío de recursos públicos", "Un servidor público autoriza el pago de una jubilación de un trabajador, mayor a la que le corresponde por ley. Art. 54 LGRA"),
("Actuación bajo conflicto de interés", "Un servidor público aprueba o autoriza la adquisición de papelería para la dependencia, y el proveedor es su hermano. Art. 58 LGRA"),
("Utilización indebida de información", "Un servidor público compra para si mismo, un terreno a un precio muy bajo, sabiendo que se tiene proyectado desarrollar un complejo turístico en la zona. Art. 55 LGRA"),
("Contratación indebida", "Un servidor público autoriza la contratación de una persona que fue sancionada con la inhabilitación para el ejercicio del servicio público, al ser encontrada responsable de una falta administrativa. Art. 59 LGRA"),
("Tráfico de influencias", " Un servidor público del área de licencias aprovecha de su puesto para conseguir boletos para un concierto o un partido de futbol a cambio de que los inspectores de reglamentos no atiendan irregularidades que se presenten en los eventos como la venta de alcohol a menores de edad. Art. 61 LGRA"),
("Enriquecimiento oculto u ocultamiento de conflicto de interés","Un servidor público miente en su declaración en cuanto a los bienes inmuebles que tiene. Art. 60 LGRA"),
("Encubrimiento","Un servidor público está enterado que su compañero de oficina no reporto en su declaración de situación patrimonial una propiedad que tiene en la playa y se queda callado. Art. 62 LGRA"),
("Simulación de actos jurídicos", "Un servidor público constituye una asociación civil para recibir recursos de un programa social. Art. 60 Bis LGRA"),
("Desacato","Un juez ordena entregar una información a un ciudadano, y el servidor público hace caso omiso y no la entrega. Art. 63 LGRA"),
("Nepotismo", "Un servidor público contrata a un familiar para trabajar en el ente público. Art. 63 LGRA"),
("Soborno", "Un particular le ofrece una cantidad de dinero a un servidor público para que le permita vender tacos en la calle, sin necesidad de tramitar el permiso correspondiente. Art. 66 LGRA"),
("Tráfico de influencias para inducir a la autoridad", "Un particular es detenido por conducir bajo los efectos del alcohol, y se comunica con un amigo suyo que es servidor público, para que les ordene a los policías lo liberen. Art. 68 LGRA"),
("Utilización de información falsa", "Un particular al participar en una licitación, manifiesta contar con experiencia en la realización de ciertos procesos, además incluye en su documentación contratos apócrifos de otros supuestos procesos que ha ganado en el mismo tema. Art. 69 LGRA"),
("Participación ilícita en procedimientos administrativos", "Un particular que tiene una distribuidora de productos de papelería, decide participar en una licitación para surtir hojas de papel, en la dependencia en la que su hijo es el titular. Art. 67 LGRA"),
("Obstrucción de facultades de investigación", "Un particular no entrega copias de los registros de ingresos de sus oficinas, para verificar cuantas veces un servidor investigado los visito, a pesar de que se las está requiriendo la autoridad. Art. 69 LGRA"),
("Colusión", "Los participantes en una licitación se ponen de acuerdo en aumentar los precios de los productos, para que independientemente del que gane, entre todos dan cumplimiento al contrato y ganan más. Art. 70 LGRA"),
("Contratación indebida de ex servidores públicos", "Un particular que tiene una constructora, contrata a un ex servidor público que tiene un mes de haberse retirado del servicio público, y que este cuenta con información privilegiada sobre los próximos contratos de obra pública que va a concursar el gobierno. Art. 72 LGRA"),
("Uso indebido de recursos públicos", "Una organización civil que apoya a personas de bajos recursos con enfermedades graves recibe recursos públicos para la compra de equipo médico y en su lugar compra ropa, bebidas alcohólicas y gasta el dinero en cosas distintas para el que se le otorgó. Art. 71 LGRA"),
("Faltas de particulares en situación especial", "Un candidato a regidor, promete a cambio del voto que, si gana, entregara despensas durante los tres años a ciertas personas. Art. 73 LGRA"),
("Amenazas o intimidación", "Cuando alguna persona produce violencia a otro individuo y pretende silenciarlo a costa de faltas a la integridad de este");
INSERT INTO Estado(denominacion, descripcion) VALUES ("Denuncia en espera de revisión", "Denuncia pendiente para ser revisada por algún instituto u organización"),
("Denuncia aprobada y en revisión", "Denuncia en proceso de revisón por parte de algún miembro perteneciente a una entidad de anticorrupción"),
("Denuncia en revisión con observaciones", "Denuncia en proceso de revisión con ciertas observaciones provenientes del organismo encargado de brindar solución al problema"), 
("Denuncia rechazada", "Denuncia carente de información adecuada o suficiente para brindar solución al problema"),
("Denuncia cancelada por el denunciante", "Denuncia junto con su proceso de solución abortados por parte del emisor"),
("Denuncia no aplicable", "Denuncia fuera de los límites de solución legales o de otros ámbitos"),
("Denuncia solucionada", "Denuncia solucionada con procedimiento legal en proceso de aplicación"), 
("Denuncia de caso solucionado", "Denuncia de algún caso solucionado previamente a través del procedimiento legal");
INSERT INTO Organizacion(codigo, nombre, descripcion) VALUES ("ORG001", "Organización 1", "Organización no gubernamental sin fines de lucro"),
("ORG002", "Organización 2", "Entidad gubernamental para la solución de problemáticas de corrupción"),
("ORG003", "Organización 3", "Organización privada con el objetivo de realizar investigaciones relacionadas con el proceso legal");

/**/

INSERT INTO Parte(codigo, curp, correo, nombre, primerApellido, segundoApellido, nacimiento, sexo, ocupacion, Escolaridad_codigo) VALUES
("Parte001", "VIREEEEE", "hola@outlook.com", "Emiliano", "Vivas", NULL, "2001-11-10", 0, "Director de Pemex", 4),
("Parte002", "ANAAAAAA", "adios@gmail.com", "Ana", "Sanchez", "Ríos", "2005-12-10", 1, "Trabajadora social", 5),
("Parte003", "BEEEE", "saludos@gmail.com", "Bertha", "Gómez", "Ríos", "1996-05-09", 1, "Trabajadora social", 5);

INSERT INTO Denuncia(folio, titulo, descripcion, fecha, estado, municipio, colonia, calle, numeroInterior, numeroExterior, codigoPostal, referencias, Parte_codigoDenunciante, Parte_codigoDenunciado, Tipo_codigo) VALUES 
("DENUNCIA001", "Denuncia 1", "Prueba 1", "2022-02-12 09:45", "Morelos", "Cuernavaca", "Lomas de Cortés", "Don Margaro", 5, 34, "64070", "Privada", NULL, "Parte001", 6),
("DENUNCIA002", "Denuncia 2", "Prueba 2", "2023-09-08 10:15", "Ciudad de México", "Coyoacán", "San Juan", NULL, NULL, NULL, "65985", NULL, "Parte002", "Parte003", 10);

INSERT INTO Monitoreo(Denuncia_folio, Estado_codigo, Organizacion_codigo, fecha, observaciones) VALUES 
("DENUNCIA001", 0, "ORG002", "2022-09-12 09:18", NULL), ("DENUNCIA001", 0, "ORG003", "2022-09-13 09:18", "No"), 
("DENUNCIA001", 2, "ORG002", "2022-09-14 09:18", NULL), ("DENUNCIA002", 4, "ORG001", "2022-09-12 09:18", NULL), 
("DENUNCIA001", 3, "ORG001", "2022-09-22 09:16", "Prueba");