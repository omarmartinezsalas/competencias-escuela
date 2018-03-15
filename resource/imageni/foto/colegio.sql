/*
Navicat MySQL Data Transfer

Source Server         : mysqlc
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : colegio

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-08 16:48:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for actividades
-- ----------------------------
DROP TABLE IF EXISTS `actividades`;
CREATE TABLE `actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `clave_curso` int(11) NOT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `parcial` int(1) NOT NULL,
  `tipo` enum('extra','tutoria','orientacion','examen','continua') COLLATE utf8_spanish2_ci DEFAULT 'continua',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of actividades
-- ----------------------------
INSERT INTO `actividades` VALUES ('54', 'examen', '42', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('55', 'tutoria', '42', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('56', 'orientacion', '42', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('57', 'extra', '42', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('58', 'examen', '42', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('59', 'tutoria', '42', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('60', 'orientacion', '42', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('61', 'extra', '42', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('62', 'examen', '42', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('63', 'tutoria', '42', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('64', 'orientacion', '42', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('65', 'extra', '42', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('66', 'examen', '43', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('67', 'tutoria', '43', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('68', 'orientacion', '43', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('69', 'extra', '43', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('70', 'examen', '43', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('71', 'tutoria', '43', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('72', 'orientacion', '43', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('73', 'extra', '43', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('74', 'examen', '43', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('75', 'tutoria', '43', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('76', 'orientacion', '43', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('77', 'extra', '43', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('90', 'examen', '44', '2017-12-06', '1', 'continua');
INSERT INTO `actividades` VALUES ('91', 'examen', '45', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('92', 'tutoria', '45', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('93', 'orientacion', '45', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('94', 'extra', '45', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('95', 'examen', '45', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('96', 'tutoria', '45', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('97', 'orientacion', '45', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('98', 'extra', '45', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('99', 'examen', '45', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('100', 'tutoria', '45', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('101', 'orientacion', '45', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('102', 'extra', '45', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('103', 'examen', '45', '2017-12-06', '1', 'continua');
INSERT INTO `actividades` VALUES ('104', 'examen', '46', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('105', 'tutoria', '46', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('106', 'orientacion', '46', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('107', 'extra', '46', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('108', 'examen', '46', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('109', 'tutoria', '46', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('110', 'orientacion', '46', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('111', 'extra', '46', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('112', 'examen', '46', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('113', 'tutoria', '46', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('114', 'orientacion', '46', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('115', 'extra', '46', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('116', 'examen', '47', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('117', 'tutoria', '47', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('118', 'orientacion', '47', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('119', 'extra', '47', '0000-00-00', '1', 'continua');
INSERT INTO `actividades` VALUES ('120', 'examen', '47', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('121', 'tutoria', '47', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('122', 'orientacion', '47', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('123', 'extra', '47', '0000-00-00', '2', 'continua');
INSERT INTO `actividades` VALUES ('124', 'examen', '47', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('125', 'tutoria', '47', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('126', 'orientacion', '47', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('127', 'extra', '47', '0000-00-00', '3', 'continua');
INSERT INTO `actividades` VALUES ('128', 'examen', '48', '0000-00-00', '1', 'examen');
INSERT INTO `actividades` VALUES ('129', 'tutoria', '48', '0000-00-00', '1', 'tutoria');
INSERT INTO `actividades` VALUES ('130', 'orientacion', '48', '0000-00-00', '1', 'orientacion');
INSERT INTO `actividades` VALUES ('131', 'extra', '48', '0000-00-00', '1', 'extra');
INSERT INTO `actividades` VALUES ('132', 'examen', '48', '0000-00-00', '2', 'examen');
INSERT INTO `actividades` VALUES ('133', 'tutoria', '48', '0000-00-00', '2', 'tutoria');
INSERT INTO `actividades` VALUES ('134', 'orientacion', '48', '0000-00-00', '2', 'orientacion');
INSERT INTO `actividades` VALUES ('135', 'extra', '48', '0000-00-00', '2', 'extra');
INSERT INTO `actividades` VALUES ('136', 'examen', '48', '0000-00-00', '3', 'examen');
INSERT INTO `actividades` VALUES ('137', 'tutoria', '48', '0000-00-00', '3', 'tutoria');
INSERT INTO `actividades` VALUES ('138', 'orientacion', '48', '0000-00-00', '3', 'orientacion');
INSERT INTO `actividades` VALUES ('139', 'extra', '48', '0000-00-00', '3', 'extra');
INSERT INTO `actividades` VALUES ('140', 'cuestionario', '48', '2017-12-07', '1', 'continua');

-- ----------------------------
-- Table structure for alumnos
-- ----------------------------
DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE `alumnos` (
  `matricula` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `a_paterno` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `a_materno` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sexo` enum('f','m') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `clave_grupo` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of alumnos
-- ----------------------------
INSERT INTO `alumnos` VALUES ('312a', 'maria ', 'castillo', 'santos', 'f', '2017-11-02', '312');
INSERT INTO `alumnos` VALUES ('312b', 'mario', 'fernandez', 'mar', 'm', '2017-07-07', '312');
INSERT INTO `alumnos` VALUES ('312c', 'lucas', 'moura', 'asis', 'm', '2017-05-11', '312');
INSERT INTO `alumnos` VALUES ('312d', 'laura', 'jimenez', 'mendez', 'f', '2017-06-14', '312');
INSERT INTO `alumnos` VALUES ('312e', 'alejandro', 'millar', 'cueva', 'm', '2017-07-27', '312');
INSERT INTO `alumnos` VALUES ('312f', 'hanna', 'molina', 'draft', 'f', '2017-06-08', '312');

-- ----------------------------
-- Table structure for alumno_curso
-- ----------------------------
DROP TABLE IF EXISTS `alumno_curso`;
CREATE TABLE `alumno_curso` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `matricula_alumno` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `clave_curso` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `curso` (`clave_curso`),
  CONSTRAINT `curso` FOREIGN KEY (`clave_curso`) REFERENCES `cursos` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of alumno_curso
-- ----------------------------
INSERT INTO `alumno_curso` VALUES ('193', '312a', '44');
INSERT INTO `alumno_curso` VALUES ('194', '312b', '44');
INSERT INTO `alumno_curso` VALUES ('195', '312c', '44');
INSERT INTO `alumno_curso` VALUES ('196', '312d', '44');
INSERT INTO `alumno_curso` VALUES ('197', '312e', '44');
INSERT INTO `alumno_curso` VALUES ('198', '312f', '44');
INSERT INTO `alumno_curso` VALUES ('199', '312a', '45');
INSERT INTO `alumno_curso` VALUES ('200', '312b', '45');
INSERT INTO `alumno_curso` VALUES ('201', '312c', '45');
INSERT INTO `alumno_curso` VALUES ('202', '312d', '45');
INSERT INTO `alumno_curso` VALUES ('203', '312e', '45');
INSERT INTO `alumno_curso` VALUES ('204', '312f', '45');
INSERT INTO `alumno_curso` VALUES ('205', '312a', '46');
INSERT INTO `alumno_curso` VALUES ('206', '312b', '46');
INSERT INTO `alumno_curso` VALUES ('207', '312c', '46');
INSERT INTO `alumno_curso` VALUES ('208', '312d', '46');
INSERT INTO `alumno_curso` VALUES ('209', '312e', '46');
INSERT INTO `alumno_curso` VALUES ('210', '312f', '46');
INSERT INTO `alumno_curso` VALUES ('211', '312a', '47');
INSERT INTO `alumno_curso` VALUES ('212', '312b', '47');
INSERT INTO `alumno_curso` VALUES ('213', '312c', '47');
INSERT INTO `alumno_curso` VALUES ('214', '312d', '47');
INSERT INTO `alumno_curso` VALUES ('215', '312e', '47');
INSERT INTO `alumno_curso` VALUES ('216', '312f', '47');
INSERT INTO `alumno_curso` VALUES ('217', '312a', '48');
INSERT INTO `alumno_curso` VALUES ('218', '312b', '48');
INSERT INTO `alumno_curso` VALUES ('219', '312c', '48');
INSERT INTO `alumno_curso` VALUES ('220', '312d', '48');
INSERT INTO `alumno_curso` VALUES ('221', '312e', '48');
INSERT INTO `alumno_curso` VALUES ('222', '312f', '48');

-- ----------------------------
-- Table structure for atributos
-- ----------------------------
DROP TABLE IF EXISTS `atributos`;
CREATE TABLE `atributos` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `clave_competencia` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `clave` (`clave_competencia`),
  CONSTRAINT `clave` FOREIGN KEY (`clave_competencia`) REFERENCES `competencias_genericas` (`clave`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of atributos
-- ----------------------------
INSERT INTO `atributos` VALUES ('1', 'Enfrenta las dificultades que se le presentan y es consciente de sus valores, fortalezas y debilidades', 'CG1');
INSERT INTO `atributos` VALUES ('2', 'Identifica sus emociones, las maneja de manera constructiva y reconoce la necesidad de solicitar apoyo ante una situaciÃ³n que lo rebase', 'CG1');
INSERT INTO `atributos` VALUES ('3', 'Elige alternativas y cursos de acciÃ³n con base en criterios sustentados y en el marco de un proyecto de vida', 'CG1');
INSERT INTO `atributos` VALUES ('4', 'Analiza crÃ­ticamente los factores que influyen en su toma de decisiones', 'CG1');
INSERT INTO `atributos` VALUES ('5', 'Asume las consecuencias de sus comportamientos y decisiones', 'CG1');
INSERT INTO `atributos` VALUES ('6', 'Administra los recursos disponibles teniendo en cuenta las restricciones para el logro de sus metas', 'CG1');
INSERT INTO `atributos` VALUES ('7', 'Valora el arte como manifestaciÃ³n de la belleza y expresiÃ³n de ideas, sensaciones y emociones', 'CG2');
INSERT INTO `atributos` VALUES ('8', 'Experimenta el arte como un hecho histÃ³rico compartido que permite la comunicaciÃ³n entre individuos y culturas en el tiempo y el espacio, a la vez que desarrolla un sentido de identidad', 'CG2');
INSERT INTO `atributos` VALUES ('9', 'Participa en prÃ¡cticas relacionadas con el arte', 'CG2');
INSERT INTO `atributos` VALUES ('10', 'Reconoce la actividad fÃ­sica como un medio para su desarrollo fÃ­sico, mental y social', 'CG3');
INSERT INTO `atributos` VALUES ('11', 'Toma decisiones a partir de la valoraciÃ³n de las consecuencias de distintos hÃ¡bitos de consumo y conductas de riesgo', 'CG3');
INSERT INTO `atributos` VALUES ('12', 'Cultiva relaciones interpersonales que contribuyen a su desarrollo humano y el de quienes lo rodean', 'CG3');
INSERT INTO `atributos` VALUES ('13', 'Expresa ideas y conceptos mediante representaciones lingÃ¼Ã­sticas, matemÃ¡ticas o grÃ¡ficas', 'CG4');
INSERT INTO `atributos` VALUES ('14', 'Aplica distintas estrategias comunicativas segÃºn quienes sean sus interlocutores, el contexto en el que se encuentra y los objetivos que persigue', 'CG4');
INSERT INTO `atributos` VALUES ('15', 'Identifica las ideas clave en un texto o discurso oral e infiere conclusiones a partir de ellas', 'CG4');
INSERT INTO `atributos` VALUES ('16', 'Se comunica en una segunda lengua en situaciones cotidianas', 'CG4');
INSERT INTO `atributos` VALUES ('17', 'Maneja las tecnologÃ­as de la informaciÃ³n y la comunicaciÃ³n para obtener informaciÃ³n y expresar ideas', 'CG4');
INSERT INTO `atributos` VALUES ('18', 'Sigue instrucciones y procedimientos de manera reflexiva, comprendiendo como cada uno de sus pasos contribuye al alcance de un objetivo', 'CG5');
INSERT INTO `atributos` VALUES ('19', 'Ordena informaciÃ³n de acuerdo a categorÃ­as, jerarquÃ­as y relaciones', 'CG5');
INSERT INTO `atributos` VALUES ('20', 'Identifica los sistemas y reglas o principios medulares que subyacen a una serie de fenÃ³menos', 'CG5');
INSERT INTO `atributos` VALUES ('21', 'Construye hipÃ³tesis y diseÃ±a y aplica modelos para probar su validez', 'CG5');
INSERT INTO `atributos` VALUES ('22', 'Sintetiza evidencias obtenidas mediante la experimentaciÃ³n para producir conclusiones y formular nuevas preguntas', 'CG5');
INSERT INTO `atributos` VALUES ('23', 'Utiliza las tecnologÃ­as de la informaciÃ³n y comunicaciÃ³n para procesar e interpretar informaciÃ³n', 'CG5');
INSERT INTO `atributos` VALUES ('24', 'Elige las fuentes de informaciÃ³n mÃ¡s relevantes para un propÃ³sito especÃ­fico y discrimina entre ellas de acuerdo a su relevancia y confiabilidad', 'CG6');
INSERT INTO `atributos` VALUES ('25', 'EvalÃºa argumentos y opiniones e identifica prejuicios y falacias', 'CG6');
INSERT INTO `atributos` VALUES ('26', 'Reconoce los propios prejuicios, modifica sus puntos de vista al conocer nuevas evidencias, e integra nuevos conocimientos y perspectivas al acervo con el que cuenta', 'CG6');
INSERT INTO `atributos` VALUES ('27', 'Estructura ideas y argumentos de manera clara, coherente y sintÃ©tica', 'CG6');
INSERT INTO `atributos` VALUES ('28', 'Define metas y da seguimiento a sus procesos de construcciÃ³n de conocimiento', 'CG7');
INSERT INTO `atributos` VALUES ('29', 'Identifica las actividades que le resultan de menor y mayor interÃ©s y dificultad, reconociendo y controlando sus reacciones frente a retos y obstÃ¡culos', 'CG7');
INSERT INTO `atributos` VALUES ('30', 'Articula saberes de diversos campos y establece relaciones entre ellos y su vida cotidiana', 'CG7');
INSERT INTO `atributos` VALUES ('31', 'Propone maneras de solucionar un problema o desarrollar un proyecto en equipo, definiendo un curso de acciÃ³n con pasos especÃ­ficos', 'CG8');
INSERT INTO `atributos` VALUES ('32', 'Aporta puntos de vista con apertura y considera los de otras personas de manera reflexiva', 'CG8');
INSERT INTO `atributos` VALUES ('33', 'Asume una actitud constructiva, congruente con los conocimientos y habilidades con los que cuenta dentro de distintos equipos de trabajo', 'CG8');
INSERT INTO `atributos` VALUES ('34', 'Privilegia el diÃ¡logo como mecanismo para la soluciÃ³n de conflictos', 'CG9');
INSERT INTO `atributos` VALUES ('35', 'Toma decisiones a fin de contribuir a la equidad, bienestar y desarrollo democrÃ¡tico de la sociedad', 'CG9');
INSERT INTO `atributos` VALUES ('36', 'Conoce sus derechos y obligaciones como mexicano y miembro de distintas comunidades e instituciones, y reconoce el valor de la participaciÃ³n como herramienta para ejercerlos', 'CG9');
INSERT INTO `atributos` VALUES ('37', 'Contribuye a alcanzar un equilibrio entre el interÃ©s y bienestar individual y el interÃ©s general de la sociedad', 'CG9');
INSERT INTO `atributos` VALUES ('38', 'ActÃºa de manera propositiva frente a fenÃ³menos de la sociedad y se mantiene informado', 'CG9');
INSERT INTO `atributos` VALUES ('39', 'Advierte que los fenÃ³menos que se desarrollan en los Ã¡mbitos local, nacional e internacional ocurren dentro de un contexto global interdependiente', 'CG9');
INSERT INTO `atributos` VALUES ('40', 'Reconoce que la diversidad tiene lugar en un espacio democrÃ¡tico de igualdad de dignidad y derechos de todas las personas, y rechaza toda forma de discriminaciÃ³n', 'CG10');
INSERT INTO `atributos` VALUES ('41', 'Dialoga y aprende de personas con distintos puntos de vista y tradiciones culturales mediante la ubicaciÃ³n de sus propias circunstancias en un contexto mÃ¡s amplio', 'CG10');
INSERT INTO `atributos` VALUES ('42', 'Asume que el respeto de las diferencias es el principio de integraciÃ³n y convivencia en los contextos local, nacional e internacional', 'CG10');
INSERT INTO `atributos` VALUES ('43', 'Asume una actitud que favorece la soluciÃ³n de problemas ambientales en los Ã¡mbitos local, nacional e internacional', 'CG11');
INSERT INTO `atributos` VALUES ('44', 'Reconoce y comprende las implicaciones biolÃ³gicas, econÃ³micas, polÃ­ticas y sociales del daÃ±o ambiental en un contexto global interdependiente', 'CG11');
INSERT INTO `atributos` VALUES ('45', 'Contribuye al alcance de un equilibrio entre los intereses de corto y largo plazo con relaciÃ³n al ambiente', 'CG11');

-- ----------------------------
-- Table structure for competencias_diciplinares
-- ----------------------------
DROP TABLE IF EXISTS `competencias_diciplinares`;
CREATE TABLE `competencias_diciplinares` (
  `clave` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `categoria` enum('ciencias experimentales','comunicacion','ciencias sociales','matematicas') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nivel` enum('basica','extendida') COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of competencias_diciplinares
-- ----------------------------
INSERT INTO `competencias_diciplinares` VALUES ('CDB1', 'Construye e interpreta modelos matemÃ¡ticos mediante la aplicaciÃ³n de procedimientos aritmÃ©ticos, algebraicos, geomÃ©tricos y variacionales, para la comprensiÃ³n y anÃ¡lisis de situaciones reales, hipotÃ©ticas o formales', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB10', 'Fundamenta opiniones sobre los impactos de la ciencia y la tecnologÃ­a en su vida cotidiana, asumiendo consideraciones Ã©ticas', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB11', 'Identifica problemas, formula preguntas de carÃ¡cter cientÃ­fico y plantea las hipÃ³tesis necesarias para responderlas', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB12', 'Obtiene, registra y sistematiza la informaciÃ³n para responder a preguntas de carÃ¡cter cientÃ­fico, consultando fuentes relevantes y realizando experimentos pertinentes', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB13', 'Contrasta los resultados obtenidos en una investigaciÃ³n o experimento con hipÃ³tesis previas y comunica sus conclusiones', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB14', 'Valora las preconcepciones personales o comunes sobre diversos fenÃ³menos naturales a partir de evidencias cientÃ­ficas', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB15', 'Hace explÃ­citas las nociones cientÃ­ficas que sustentan los procesos para la soluciÃ³n de problemas cotidianos', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB16', 'Explica el funcionamiento de mÃ¡quinas de uso comÃºn a partir de nociones cientÃ­ficas', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB17', 'DiseÃ±a modelos o prototipos para resolver problemas, satisfacer necesidades o demostrar principios cientÃ­ficos', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB18', 'Relaciona las expresiones simbÃ³licas de un fenÃ³meno de la naturaleza y los rasgos observables a simple vista o mediante instrumentos o modelos cientÃ­ficos', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB19', 'Analiza las leyes generales que rigen el funcionamiento del medio fÃ­sico y valora las acciones humanas de impacto ambiental', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB2', 'Formula y resuelve problemas matemÃ¡ticos, aplicando diferentes enfoques', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB20', 'Decide sobre el cuidado de su salud a partir del conocimiento de su cuerpo, sus procesos vitales y el entorno al que pertenece', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB21', 'Relaciona los niveles de organizaciÃ³n quÃ­mica, biolÃ³gica, fÃ­sica y ecolÃ³gica de los sistemas vivos', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB22', 'Aplica normas de seguridad en el manejo de sustancias, instrumentos y equipo en la realizaciÃ³n de actividades de su vida cotidiana', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB23', 'Identifica el conocimiento social y humanista como una construcciÃ³n en constante transformaciÃ³n', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB24', 'SitÃºa hechos histÃ³ricos fundamentales que han tenido lugar en distintas Ã©pocas en MÃ©xico y el mundo con relaciÃ³n al presente', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB25', 'Interpreta su realidad social a partir de los procesos histÃ³ricos locales, nacionales e internacionales que la han configurado', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB26', 'Valora las diferencias sociales, polÃ­ticas, econÃ³micas, Ã©tnicas, culturales y de gÃ©nero y las desigualdades que inducen', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB27', 'Establece la relaciÃ³n entre las dimensiones polÃ­ticas, econÃ³micas, culturales y geogrÃ¡ficas de un acontecimiento', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB28', 'Analiza con visiÃ³n emprendedora los factores y elementos fundamentales que intervienen en la productividad y competitividad de una organizaciÃ³n y su relaciÃ³n con el entorno socioeconÃ³mico', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB29', 'EvalÃºa las funciones de las leyes y su transformaciÃ³n en el tiempo', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB3', 'Explica e interpreta los resultados obtenidos mediante procedimientos matemÃ¡ticos y los contrasta con modelos establecidos o situaciones reales', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB30', 'Compara las caracterÃ­sticas democrÃ¡ticas y autoritarias de diversos sistemas sociopolÃ­ticos', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB31', 'Analiza las funciones de las instituciones del Estado Mexicano y la manera en que impactan su vida', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB32', 'Valora distintas prÃ¡cticas sociales mediante el reconocimiento de sus significados dentro de un sistema cultural, con una actitud de respeto', 'ciencias sociales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB33', 'Identifica, ordena e interpreta las ideas, datos y conceptos explÃ­citos e implÃ­citos en un texto, considerando el contexto en el que se generÃ³ y en el que se recibe', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB34', 'EvalÃºa un texto mediante la comparaciÃ³n de su contenido con el de otros, en funciÃ³n de sus conocimientos previos y nuevos', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB35', 'Plantea supuestos sobre los fenÃ³menos naturales y culturales de su entorno con base en la consulta de diversas fuentes', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB36', 'Produce textos con base en el uso normativo de la lengua, considerando la intenciÃ³n y situaciÃ³n comunicativa', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB37', 'Expresa ideas y conceptos en composiciones coherentes y creativas, con introducciones, desarrollo y conclusiones claras', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB38', 'Argumenta un punto de vista en pÃºblico de manera precisa, coherente y creativa', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB39', 'Valora y describe el papel del arte, la literatura y los medios de comunicaciÃ³n en la recreaciÃ³n o la transformaciÃ³n de una cultura, teniendo en cuenta los propÃ³sitos comunicativos de distintos gÃ©neros', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB4', 'Argumenta la soluciÃ³n obtenida de un problema, con mÃ©todos numÃ©ricos, grÃ¡ficos, analÃ­ticos o variacionales, mediante el lenguaje verbal, matemÃ¡tico y el uso de las tecnologÃ­as de la informaciÃ³n y la comunicaciÃ³n', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB40', 'Valora el pensamiento lÃ³gico en el proceso comunicativo en su vida cotidiana y acadÃ©mica', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB41', 'Analiza y compara el origen, desarrollo y diversidad de los sistemas y medios de comunicaciÃ³n', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB42', 'Identifica e interpreta la idea general y posible desarrollo de un mensaje oral o escrito en una segunda lengua, recurriendo a conocimientos previos, elementos no verbales y contexto cultural', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB43', 'Se comunica en una lengua extranjera mediante un discurso lÃ³gico, oral o escrito, congruente con la situaciÃ³n comunicativa', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB44', 'Utiliza las tecnologÃ­as de la informaciÃ³n y comunicaciÃ³n para investigar, resolver problemas, producir materiales y transmitir informaciÃ³n', 'comunicacion', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB5', 'Analiza las relaciones entre dos o mÃ¡s variables de un proceso social o natural para determinar o estimar su comportamiento', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB6', 'Cuantifica, representa y contrasta experimental o matemÃ¡ticamente las magnitudes del espacio y las propiedades fÃ­sicas de los objetos que lo rodean', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB7', 'Elige un enfoque determinista o uno aleatorio para el estudio de un proceso o fenÃ³meno, y argumenta su pertinencia', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB8', 'Interpreta tablas, grÃ¡ficas, mapas, diagramas y textos con sÃ­mbolos matemÃ¡ticos y cientÃ­ficos', 'matematicas', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDB9', 'Establece la interrelaciÃ³n entre la ciencia, la tecnologÃ­a, la sociedad y el ambiente en contextos histÃ³ricos y sociales especÃ­ficos', 'ciencias experimentales', 'basica');
INSERT INTO `competencias_diciplinares` VALUES ('CDE1', 'Valora de forma crÃ­tica y responsable los beneficios y riesgos que trae consigo el desarrollo de la ciencia y la aplicaciÃ³n de la tecnologÃ­a en un contexto histÃ³rico-social, para dar soluciÃ³n a problemas', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE10', 'Resuelve problemas establecidos o reales de su entorno, utilizando las ciencias experimentales para la comprensiÃ³n y mejora del mismo', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE11', 'Propone y ejecuta acciones comunitarias hacia la protecciÃ³n del medio y la biodiversidad para la preservaciÃ³n del equilibrio ecolÃ³gico', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE12', 'Propone estrategias de soluciÃ³n, preventivas y correctivas, a problemas relacionados con la salud, a nivel personal y social, para favorecer el desarrollo de su comunidad', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE13', 'Valora las implicaciones en su proyecto de vida al asumir de manera asertiva el ejercicio de su sexualidad, promoviendo la equidad de gÃ©nero y el respeto a la diversidad', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE14', 'Analiza y aplica el conocimiento sobre la funciÃ³n de los nutrientes en los procesos metabÃ³licos que se realizan en los seres vivos para mejorar su calidad de vida', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE15', 'Analiza la composiciÃ³n, cambios e interdependencia entre la materia y la energÃ­a en los fenÃ³menos naturales, para el uso racional de los recursos de su entorno', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE16', 'Aplica medidas de seguridad para prevenir accidentes en su entorno y/o para enfrentar desastres naturales que afecten su vida cotidiana', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE17', 'Aplica normas de seguridad para disminuir riesgos y daÃ±os a si mismo y a la naturaleza, en el uso y manejo de sustancias, instrumentos y equipos en cualquier contexto', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE18', 'Utiliza la informaciÃ³n contenida en diferentes textos para orientar sus intereses en Ã¡mbitos diversos', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE19', 'Establece relaciones analÃ³gicas, considerando las variaciones lÃ©xico-semÃ¡nticas de las expresiones para la toma de decisiones', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE2', 'EvalÃºa las implicaciones del uso de la ciencia y la tecnologÃ­a, asÃ­ como los fenÃ³menos relacionados con el origen, continuidad y transformaciÃ³n de la naturaleza para establecer acciones a fin de preservarla en todas sus manifestaciones', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE20', 'Debate sobre problemas de su entorno fundamentando sus juicios en el anÃ¡lisis y en la discriminaciÃ³n de la informaciÃ³n emitida por diversas fuentes', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE21', 'Propone soluciones a problemÃ¡ticas de su comunidad, a travÃ©s de diversos tipos de textos, aplicando la estructura discursiva, verbal o no verbal, y los modelos grÃ¡ficos o audiovisuales que estÃ©n a su alcance', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE22', 'Aplica los principios Ã©ticos en la generaciÃ³n y tratamiento de la informaciÃ³n', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE23', 'Difunde o recrea expresiones artÃ­sticas que son producto de la sensibilidad y el intelecto humanos, con el propÃ³sito de preservar su identidad cultural en un contexto universal', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE24', 'Determina la intencionalidad comunicativa en discursos culturales y sociales para restituir la lÃ³gica discursiva a textos cotidianos y acadÃ©micos', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE25', 'Valora la influencia de los sistemas y medios de comunicaciÃ³n en su cultura, su familia y su comunidad, analizando y comparando sus efectos positivos y negativos', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE26', 'Transmite mensajes en una segunda lengua o lengua extranjera atendiendo las caracterÃ­sticas de contextos socioculturales diferentes', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE27', 'Analiza los beneficios e inconvenientes del uso de las tecnologÃ­as de la informaciÃ³n y la comunicaciÃ³n para la optimizaciÃ³n de las actividades cotidianas', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE28', 'Aplica las tecnologÃ­as de la informaciÃ³n y la comunicaciÃ³n en el diseÃ±o de estrategias para la difusiÃ³n de productos y servicios, en beneficio del desarrollo personal y profesional', 'comunicacion', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE29', 'Asume un comportamiento Ã©tico sustentado en principios de filosofÃ­a, para el ejercicio de sus derechos y obligaciones en diferentes escenarios sociales', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE3', 'Aplica los avances cientÃ­ficos y tecnolÃ³gicos en el mejoramiento de las condiciones de su entorno social', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE30', 'Argumenta las repercusiones de los procesos y cambios polÃ­ticos, econÃ³micos y sociales que han dado lugar al entorno socioeconÃ³mico actual', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE31', 'Propone soluciones a problemas de su entorno con una actitud crÃ­tica y reflexiva, creando conciencia de la importancia que tiene el equilibrio en la relaciÃ³n ser humano-naturaleza', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE32', 'Argumenta sus ideas respecto a diversas corrientes filosÃ³ficas y fenÃ³menos histÃ³rico-sociales, mediante procedimientos teÃ³rico-metodolÃ³gicos', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE33', 'Participa en la construcciÃ³n de su comunidad, propiciando la interacciÃ³n entre los individuos que la conforman, en el marco de la interculturalidad', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE34', 'Valora y promueve el patrimonio histÃ³rico-cultural de su comunidad a partir del conocimiento de su contribuciÃ³n para fundamentar la identidad del MÃ©xico de hoy', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE35', 'Aplica principios y estrategias de administraciÃ³n y economÃ­a, de acuerdo con los objetivos y metas de su proyecto de vida', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE36', 'Propone alternativas de soluciÃ³n a problemas de convivencia de acuerdo a la naturaleza propia del ser humano y su contexto ideolÃ³gico, polÃ­tico y jurÃ­dico', 'ciencias sociales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE37', 'Construye e interpreta modelos matemÃ¡ticos mediante la aplicaciÃ³n de procedimientos aritmÃ©ticos, algebraicos, geomÃ©tricos y variacionales, para la comprensiÃ³n y anÃ¡lisis de situaciones reales, hipotÃ©ticas o formales', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE38', 'Formula y resuelve problemas matemÃ¡ticos aplicando diferentes enfoques', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE39', 'Explica e interpreta los resultados obtenidos mediante procedimientos matemÃ¡ticos y los contrasta con modelos establecidos o situaciones reales', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE4', 'EvalÃºa los factores y elementos de riesgo fÃ­sico, quÃ­mico y biolÃ³gico presentes en la naturaleza que alteran la calidad de vida de una poblaciÃ³n para proponer medidas preventivas', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE40', 'Argumenta la soluciÃ³n obtenida de un problema, con mÃ©todos numÃ©ricos, grÃ¡ficos, analÃ­ticos o variacionales, mediante el lenguaje verbal, matemÃ¡tico y el uso de las tecnologÃ­as de la informaciÃ³n y la comunicaciÃ³n', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE41', 'Analiza las relaciones entre dos o mÃ¡s variables de un proceso social o natural para determinar o estimar su comportamiento', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE42', 'Cuantifica, representa y contrasta experimental o matemÃ¡ticamente las magnitudes del espacio y las propiedades fÃ­sicas de los objetos que lo rodean', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE43', 'Elige un enfoque determinista o uno aleatorio para el estudio de un proceso o fenÃ³meno y argumenta su pertinencia', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE44', 'Interpreta tablas, grÃ¡ficas, mapas, diagramas y textos con sÃ­mbolos matemÃ¡ticos y cientÃ­ficos', 'matematicas', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE5', 'Aplica la metodologÃ­a apropiada en la realizaciÃ³n de proyectos interdisciplinarios atendiendo problemas relacionados con las ciencias experimentales', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE6', 'Utiliza herramientas y equipos especializados en la bÃºsqueda, selecciÃ³n, anÃ¡lisis y sÃ­ntesis para la divulgaciÃ³n de la informaciÃ³n cientÃ­fica que contribuya a su formaciÃ³n acadÃ©mica', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE7', 'DiseÃ±a prototipos o modelos para resolver problemas, satisfacer necesidades o demostrar principios cientÃ­ficos, hechos o fenÃ³menos relacionados con las ciencias experimentales', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE8', 'Confronta las ideas preconcebidas acerca de los fenÃ³menos naturales con el conocimiento cientÃ­fico para explicar y adquirir nuevos conocimientos', 'ciencias experimentales', 'extendida');
INSERT INTO `competencias_diciplinares` VALUES ('CDE9', 'Valora el papel fundamental del ser humano como agente modificador de su medio natural proponiendo alternativas que respondan a las necesidades del hombre y la sociedad, cuidando el entorno', 'ciencias experimentales', 'extendida');

-- ----------------------------
-- Table structure for competencias_genericas
-- ----------------------------
DROP TABLE IF EXISTS `competencias_genericas`;
CREATE TABLE `competencias_genericas` (
  `clave` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `categoria` enum('participa con responsabilidad en la sociedad','trabaja en forma colaborativa','aprende de forma autonoma','piensa critica y reflexivamente','se expresa y comunica','se autodetermina y cuida de si') COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of competencias_genericas
-- ----------------------------
INSERT INTO `competencias_genericas` VALUES ('CG1', 'Se conoce y valora a sÃ­ mismo y aborda problemas y retos teniendo en cuenta los objetivos que persi', 'se autodetermina y cuida de si');
INSERT INTO `competencias_genericas` VALUES ('CG10', 'Mantiene una actitud respetuosa hacia la interculturalidad y la diversidad de creencias, valores, ideas y prÃ¡cticas sociales', 'participa con responsabilidad en la sociedad');
INSERT INTO `competencias_genericas` VALUES ('CG11', 'Contribuye al desarrollo sustentable de manera crÃ­tica, con acciones responsables', 'participa con responsabilidad en la sociedad');
INSERT INTO `competencias_genericas` VALUES ('CG2', 'Es sensible al arte y participa en la apreciaciÃ³n e interpretaciÃ³n de sus expresiones en distintos g', 'se autodetermina y cuida de si');
INSERT INTO `competencias_genericas` VALUES ('CG3', 'Elige y practica estilos de vida saludables', 'se autodetermina y cuida de si');
INSERT INTO `competencias_genericas` VALUES ('CG4', 'Escucha, interpreta y emite mensajes pertinentes en distintos contextos mediante la utilizaciÃ³n de medios, cÃ³digos y herramientas apropiados', 'se expresa y comunica');
INSERT INTO `competencias_genericas` VALUES ('CG5', 'Desarrolla innovaciones y propone soluciones a problemas a partir de mÃ©todos establecidos', 'piensa critica y reflexivamente');
INSERT INTO `competencias_genericas` VALUES ('CG6', 'Sustenta una postura personal sobre temas de interÃ©s y relevancia general, considerando otros puntos de vista de manera crÃ­tica y reflexiva', 'piensa critica y reflexivamente');
INSERT INTO `competencias_genericas` VALUES ('CG7', 'Aprende por iniciativa e interÃ©s propio a lo largo de la vida', 'aprende de forma autonoma');
INSERT INTO `competencias_genericas` VALUES ('CG8', 'Participa y colabora de manera efectiva en equipos diversos', 'trabaja en forma colaborativa');
INSERT INTO `competencias_genericas` VALUES ('CG9', 'Participa con una conciencia cÃ­vica y Ã©tica en la vida de su comunidad, regiÃ³n, MÃ©xico y el mundo', 'participa con responsabilidad en la sociedad');

-- ----------------------------
-- Table structure for competencias_profesionales
-- ----------------------------
DROP TABLE IF EXISTS `competencias_profesionales`;
CREATE TABLE `competencias_profesionales` (
  `clave` varchar(6) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nivel` enum('extendida','basica') COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of competencias_profesionales
-- ----------------------------
INSERT INTO `competencias_profesionales` VALUES ('CP2', 'competencia profesioal 2', 'matematicas', 'extendida');
INSERT INTO `competencias_profesionales` VALUES ('CPB1', 'competencia profesional basica ejemplo', 'matematicas', 'basica');

-- ----------------------------
-- Table structure for cursos
-- ----------------------------
DROP TABLE IF EXISTS `cursos`;
CREATE TABLE `cursos` (
  `clave` int(10) NOT NULL AUTO_INCREMENT,
  `clave_materia` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `clave_grupo` varchar(3) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `clave_profesor` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of cursos
-- ----------------------------
INSERT INTO `cursos` VALUES ('44', 'mate1', '312', '22758229');
INSERT INTO `cursos` VALUES ('45', 'mate1', '312', '22758229');
INSERT INTO `cursos` VALUES ('46', 'pro', '312', '22758229');
INSERT INTO `cursos` VALUES ('47', 'vyt', '312', '22758229');
INSERT INTO `cursos` VALUES ('48', 'sp', '312', '22758229');

-- ----------------------------
-- Table structure for curso_diciplinar
-- ----------------------------
DROP TABLE IF EXISTS `curso_diciplinar`;
CREATE TABLE `curso_diciplinar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_curso` int(11) DEFAULT NULL,
  `clave_competencia` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parcial` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of curso_diciplinar
-- ----------------------------
INSERT INTO `curso_diciplinar` VALUES ('24', '18', 'CDB1', '1');

-- ----------------------------
-- Table structure for curso_generica
-- ----------------------------
DROP TABLE IF EXISTS `curso_generica`;
CREATE TABLE `curso_generica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_curso` int(11) DEFAULT NULL,
  `clave_competencia` int(6) DEFAULT NULL,
  `parcial` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of curso_generica
-- ----------------------------
INSERT INTO `curso_generica` VALUES ('7', '18', '35', '1');
INSERT INTO `curso_generica` VALUES ('8', '18', '34', '2');
INSERT INTO `curso_generica` VALUES ('9', '18', '40', '1');

-- ----------------------------
-- Table structure for curso_profesional
-- ----------------------------
DROP TABLE IF EXISTS `curso_profesional`;
CREATE TABLE `curso_profesional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clave_curso` int(11) DEFAULT NULL,
  `clave_competencia` varchar(6) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `parcial` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of curso_profesional
-- ----------------------------
INSERT INTO `curso_profesional` VALUES ('3', '18', 'CPB1', '2');
INSERT INTO `curso_profesional` VALUES ('4', '18', 'CPB1', '3');

-- ----------------------------
-- Table structure for entregas
-- ----------------------------
DROP TABLE IF EXISTS `entregas`;
CREATE TABLE `entregas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `clave_alumno_curso` int(10) NOT NULL,
  `id_actividad` int(10) NOT NULL,
  `calificacion` double(3,1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `actividad` (`id_actividad`),
  CONSTRAINT `actividad` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=817 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of entregas
-- ----------------------------
INSERT INTO `entregas` VALUES ('295', '181', '54', '10.0');
INSERT INTO `entregas` VALUES ('296', '182', '54', '10.0');
INSERT INTO `entregas` VALUES ('297', '183', '54', '10.0');
INSERT INTO `entregas` VALUES ('298', '184', '54', '10.0');
INSERT INTO `entregas` VALUES ('299', '185', '54', '10.0');
INSERT INTO `entregas` VALUES ('300', '186', '54', '10.0');
INSERT INTO `entregas` VALUES ('301', '181', '55', '10.0');
INSERT INTO `entregas` VALUES ('302', '182', '55', '10.0');
INSERT INTO `entregas` VALUES ('303', '183', '55', '10.0');
INSERT INTO `entregas` VALUES ('304', '184', '55', '10.0');
INSERT INTO `entregas` VALUES ('305', '185', '55', '10.0');
INSERT INTO `entregas` VALUES ('306', '186', '55', '10.0');
INSERT INTO `entregas` VALUES ('307', '181', '56', '10.0');
INSERT INTO `entregas` VALUES ('308', '182', '56', '10.0');
INSERT INTO `entregas` VALUES ('309', '183', '56', '10.0');
INSERT INTO `entregas` VALUES ('310', '184', '56', '10.0');
INSERT INTO `entregas` VALUES ('311', '185', '56', '10.0');
INSERT INTO `entregas` VALUES ('312', '186', '56', '10.0');
INSERT INTO `entregas` VALUES ('313', '181', '57', '10.0');
INSERT INTO `entregas` VALUES ('314', '182', '57', '10.0');
INSERT INTO `entregas` VALUES ('315', '183', '57', '10.0');
INSERT INTO `entregas` VALUES ('316', '184', '57', '10.0');
INSERT INTO `entregas` VALUES ('317', '185', '57', '10.0');
INSERT INTO `entregas` VALUES ('318', '186', '57', '10.0');
INSERT INTO `entregas` VALUES ('319', '181', '58', '10.0');
INSERT INTO `entregas` VALUES ('320', '182', '58', '10.0');
INSERT INTO `entregas` VALUES ('321', '183', '58', '10.0');
INSERT INTO `entregas` VALUES ('322', '184', '58', '10.0');
INSERT INTO `entregas` VALUES ('323', '185', '58', '10.0');
INSERT INTO `entregas` VALUES ('324', '186', '58', '10.0');
INSERT INTO `entregas` VALUES ('325', '181', '59', '10.0');
INSERT INTO `entregas` VALUES ('326', '182', '59', '10.0');
INSERT INTO `entregas` VALUES ('327', '183', '59', '10.0');
INSERT INTO `entregas` VALUES ('328', '184', '59', '10.0');
INSERT INTO `entregas` VALUES ('329', '185', '59', '10.0');
INSERT INTO `entregas` VALUES ('330', '186', '59', '10.0');
INSERT INTO `entregas` VALUES ('331', '181', '60', '10.0');
INSERT INTO `entregas` VALUES ('332', '182', '60', '10.0');
INSERT INTO `entregas` VALUES ('333', '183', '60', '10.0');
INSERT INTO `entregas` VALUES ('334', '184', '60', '10.0');
INSERT INTO `entregas` VALUES ('335', '185', '60', '10.0');
INSERT INTO `entregas` VALUES ('336', '186', '60', '10.0');
INSERT INTO `entregas` VALUES ('337', '181', '61', '10.0');
INSERT INTO `entregas` VALUES ('338', '182', '61', '10.0');
INSERT INTO `entregas` VALUES ('339', '183', '61', '10.0');
INSERT INTO `entregas` VALUES ('340', '184', '61', '10.0');
INSERT INTO `entregas` VALUES ('341', '185', '61', '10.0');
INSERT INTO `entregas` VALUES ('342', '186', '61', '10.0');
INSERT INTO `entregas` VALUES ('343', '181', '62', '10.0');
INSERT INTO `entregas` VALUES ('344', '182', '62', '10.0');
INSERT INTO `entregas` VALUES ('345', '183', '62', '10.0');
INSERT INTO `entregas` VALUES ('346', '184', '62', '10.0');
INSERT INTO `entregas` VALUES ('347', '185', '62', '10.0');
INSERT INTO `entregas` VALUES ('348', '186', '62', '10.0');
INSERT INTO `entregas` VALUES ('349', '181', '63', '10.0');
INSERT INTO `entregas` VALUES ('350', '182', '63', '10.0');
INSERT INTO `entregas` VALUES ('351', '183', '63', '10.0');
INSERT INTO `entregas` VALUES ('352', '184', '63', '10.0');
INSERT INTO `entregas` VALUES ('353', '185', '63', '10.0');
INSERT INTO `entregas` VALUES ('354', '186', '63', '10.0');
INSERT INTO `entregas` VALUES ('355', '181', '64', '10.0');
INSERT INTO `entregas` VALUES ('356', '182', '64', '10.0');
INSERT INTO `entregas` VALUES ('357', '183', '64', '10.0');
INSERT INTO `entregas` VALUES ('358', '184', '64', '10.0');
INSERT INTO `entregas` VALUES ('359', '185', '64', '10.0');
INSERT INTO `entregas` VALUES ('360', '186', '64', '10.0');
INSERT INTO `entregas` VALUES ('361', '181', '65', '10.0');
INSERT INTO `entregas` VALUES ('362', '182', '65', '10.0');
INSERT INTO `entregas` VALUES ('363', '183', '65', '10.0');
INSERT INTO `entregas` VALUES ('364', '184', '65', '10.0');
INSERT INTO `entregas` VALUES ('365', '185', '65', '10.0');
INSERT INTO `entregas` VALUES ('366', '186', '65', '10.0');
INSERT INTO `entregas` VALUES ('367', '187', '66', '10.0');
INSERT INTO `entregas` VALUES ('368', '188', '66', '10.0');
INSERT INTO `entregas` VALUES ('369', '189', '66', '10.0');
INSERT INTO `entregas` VALUES ('370', '190', '66', '10.0');
INSERT INTO `entregas` VALUES ('371', '191', '66', '10.0');
INSERT INTO `entregas` VALUES ('372', '192', '66', '10.0');
INSERT INTO `entregas` VALUES ('373', '187', '67', '10.0');
INSERT INTO `entregas` VALUES ('374', '188', '67', '10.0');
INSERT INTO `entregas` VALUES ('375', '189', '67', '10.0');
INSERT INTO `entregas` VALUES ('376', '190', '67', '10.0');
INSERT INTO `entregas` VALUES ('377', '191', '67', '10.0');
INSERT INTO `entregas` VALUES ('378', '192', '67', '10.0');
INSERT INTO `entregas` VALUES ('379', '187', '68', '10.0');
INSERT INTO `entregas` VALUES ('380', '188', '68', '10.0');
INSERT INTO `entregas` VALUES ('381', '189', '68', '10.0');
INSERT INTO `entregas` VALUES ('382', '190', '68', '10.0');
INSERT INTO `entregas` VALUES ('383', '191', '68', '10.0');
INSERT INTO `entregas` VALUES ('384', '192', '68', '10.0');
INSERT INTO `entregas` VALUES ('385', '187', '69', '10.0');
INSERT INTO `entregas` VALUES ('386', '188', '69', '10.0');
INSERT INTO `entregas` VALUES ('387', '189', '69', '10.0');
INSERT INTO `entregas` VALUES ('388', '190', '69', '10.0');
INSERT INTO `entregas` VALUES ('389', '191', '69', '10.0');
INSERT INTO `entregas` VALUES ('390', '192', '69', '10.0');
INSERT INTO `entregas` VALUES ('391', '187', '70', '10.0');
INSERT INTO `entregas` VALUES ('392', '188', '70', '10.0');
INSERT INTO `entregas` VALUES ('393', '189', '70', '10.0');
INSERT INTO `entregas` VALUES ('394', '190', '70', '10.0');
INSERT INTO `entregas` VALUES ('395', '191', '70', '10.0');
INSERT INTO `entregas` VALUES ('396', '192', '70', '10.0');
INSERT INTO `entregas` VALUES ('397', '187', '71', '10.0');
INSERT INTO `entregas` VALUES ('398', '188', '71', '10.0');
INSERT INTO `entregas` VALUES ('399', '189', '71', '10.0');
INSERT INTO `entregas` VALUES ('400', '190', '71', '10.0');
INSERT INTO `entregas` VALUES ('401', '191', '71', '10.0');
INSERT INTO `entregas` VALUES ('402', '192', '71', '10.0');
INSERT INTO `entregas` VALUES ('403', '187', '72', '10.0');
INSERT INTO `entregas` VALUES ('404', '188', '72', '10.0');
INSERT INTO `entregas` VALUES ('405', '189', '72', '10.0');
INSERT INTO `entregas` VALUES ('406', '190', '72', '10.0');
INSERT INTO `entregas` VALUES ('407', '191', '72', '10.0');
INSERT INTO `entregas` VALUES ('408', '192', '72', '10.0');
INSERT INTO `entregas` VALUES ('409', '187', '73', '10.0');
INSERT INTO `entregas` VALUES ('410', '188', '73', '10.0');
INSERT INTO `entregas` VALUES ('411', '189', '73', '10.0');
INSERT INTO `entregas` VALUES ('412', '190', '73', '10.0');
INSERT INTO `entregas` VALUES ('413', '191', '73', '10.0');
INSERT INTO `entregas` VALUES ('414', '192', '73', '10.0');
INSERT INTO `entregas` VALUES ('415', '187', '74', '10.0');
INSERT INTO `entregas` VALUES ('416', '188', '74', '10.0');
INSERT INTO `entregas` VALUES ('417', '189', '74', '10.0');
INSERT INTO `entregas` VALUES ('418', '190', '74', '10.0');
INSERT INTO `entregas` VALUES ('419', '191', '74', '10.0');
INSERT INTO `entregas` VALUES ('420', '192', '74', '10.0');
INSERT INTO `entregas` VALUES ('421', '187', '75', '10.0');
INSERT INTO `entregas` VALUES ('422', '188', '75', '10.0');
INSERT INTO `entregas` VALUES ('423', '189', '75', '10.0');
INSERT INTO `entregas` VALUES ('424', '190', '75', '10.0');
INSERT INTO `entregas` VALUES ('425', '191', '75', '10.0');
INSERT INTO `entregas` VALUES ('426', '192', '75', '10.0');
INSERT INTO `entregas` VALUES ('427', '187', '76', '10.0');
INSERT INTO `entregas` VALUES ('428', '188', '76', '10.0');
INSERT INTO `entregas` VALUES ('429', '189', '76', '10.0');
INSERT INTO `entregas` VALUES ('430', '190', '76', '10.0');
INSERT INTO `entregas` VALUES ('431', '191', '76', '10.0');
INSERT INTO `entregas` VALUES ('432', '192', '76', '10.0');
INSERT INTO `entregas` VALUES ('433', '187', '77', '10.0');
INSERT INTO `entregas` VALUES ('434', '188', '77', '10.0');
INSERT INTO `entregas` VALUES ('435', '189', '77', '10.0');
INSERT INTO `entregas` VALUES ('436', '190', '77', '10.0');
INSERT INTO `entregas` VALUES ('437', '191', '77', '10.0');
INSERT INTO `entregas` VALUES ('438', '192', '77', '10.0');
INSERT INTO `entregas` VALUES ('511', '193', '90', '0.0');
INSERT INTO `entregas` VALUES ('512', '194', '90', '0.0');
INSERT INTO `entregas` VALUES ('513', '195', '90', '0.0');
INSERT INTO `entregas` VALUES ('514', '196', '90', '0.0');
INSERT INTO `entregas` VALUES ('515', '197', '90', '0.0');
INSERT INTO `entregas` VALUES ('516', '198', '90', '0.0');
INSERT INTO `entregas` VALUES ('517', '199', '91', '10.0');
INSERT INTO `entregas` VALUES ('518', '200', '91', '10.0');
INSERT INTO `entregas` VALUES ('519', '201', '91', '10.0');
INSERT INTO `entregas` VALUES ('520', '202', '91', '10.0');
INSERT INTO `entregas` VALUES ('521', '203', '91', '10.0');
INSERT INTO `entregas` VALUES ('522', '204', '91', '10.0');
INSERT INTO `entregas` VALUES ('523', '199', '92', '10.0');
INSERT INTO `entregas` VALUES ('524', '200', '92', '10.0');
INSERT INTO `entregas` VALUES ('525', '201', '92', '10.0');
INSERT INTO `entregas` VALUES ('526', '202', '92', '10.0');
INSERT INTO `entregas` VALUES ('527', '203', '92', '10.0');
INSERT INTO `entregas` VALUES ('528', '204', '92', '10.0');
INSERT INTO `entregas` VALUES ('529', '199', '93', '10.0');
INSERT INTO `entregas` VALUES ('530', '200', '93', '10.0');
INSERT INTO `entregas` VALUES ('531', '201', '93', '10.0');
INSERT INTO `entregas` VALUES ('532', '202', '93', '10.0');
INSERT INTO `entregas` VALUES ('533', '203', '93', '10.0');
INSERT INTO `entregas` VALUES ('534', '204', '93', '10.0');
INSERT INTO `entregas` VALUES ('535', '199', '94', '10.0');
INSERT INTO `entregas` VALUES ('536', '200', '94', '10.0');
INSERT INTO `entregas` VALUES ('537', '201', '94', '10.0');
INSERT INTO `entregas` VALUES ('538', '202', '94', '10.0');
INSERT INTO `entregas` VALUES ('539', '203', '94', '10.0');
INSERT INTO `entregas` VALUES ('540', '204', '94', '10.0');
INSERT INTO `entregas` VALUES ('541', '199', '95', '10.0');
INSERT INTO `entregas` VALUES ('542', '200', '95', '10.0');
INSERT INTO `entregas` VALUES ('543', '201', '95', '10.0');
INSERT INTO `entregas` VALUES ('544', '202', '95', '10.0');
INSERT INTO `entregas` VALUES ('545', '203', '95', '10.0');
INSERT INTO `entregas` VALUES ('546', '204', '95', '10.0');
INSERT INTO `entregas` VALUES ('547', '199', '96', '10.0');
INSERT INTO `entregas` VALUES ('548', '200', '96', '10.0');
INSERT INTO `entregas` VALUES ('549', '201', '96', '10.0');
INSERT INTO `entregas` VALUES ('550', '202', '96', '10.0');
INSERT INTO `entregas` VALUES ('551', '203', '96', '10.0');
INSERT INTO `entregas` VALUES ('552', '204', '96', '10.0');
INSERT INTO `entregas` VALUES ('553', '199', '97', '10.0');
INSERT INTO `entregas` VALUES ('554', '200', '97', '10.0');
INSERT INTO `entregas` VALUES ('555', '201', '97', '10.0');
INSERT INTO `entregas` VALUES ('556', '202', '97', '10.0');
INSERT INTO `entregas` VALUES ('557', '203', '97', '10.0');
INSERT INTO `entregas` VALUES ('558', '204', '97', '10.0');
INSERT INTO `entregas` VALUES ('559', '199', '98', '10.0');
INSERT INTO `entregas` VALUES ('560', '200', '98', '10.0');
INSERT INTO `entregas` VALUES ('561', '201', '98', '10.0');
INSERT INTO `entregas` VALUES ('562', '202', '98', '10.0');
INSERT INTO `entregas` VALUES ('563', '203', '98', '10.0');
INSERT INTO `entregas` VALUES ('564', '204', '98', '10.0');
INSERT INTO `entregas` VALUES ('565', '199', '99', '10.0');
INSERT INTO `entregas` VALUES ('566', '200', '99', '10.0');
INSERT INTO `entregas` VALUES ('567', '201', '99', '10.0');
INSERT INTO `entregas` VALUES ('568', '202', '99', '10.0');
INSERT INTO `entregas` VALUES ('569', '203', '99', '10.0');
INSERT INTO `entregas` VALUES ('570', '204', '99', '10.0');
INSERT INTO `entregas` VALUES ('571', '199', '100', '10.0');
INSERT INTO `entregas` VALUES ('572', '200', '100', '10.0');
INSERT INTO `entregas` VALUES ('573', '201', '100', '10.0');
INSERT INTO `entregas` VALUES ('574', '202', '100', '10.0');
INSERT INTO `entregas` VALUES ('575', '203', '100', '10.0');
INSERT INTO `entregas` VALUES ('576', '204', '100', '10.0');
INSERT INTO `entregas` VALUES ('577', '199', '101', '10.0');
INSERT INTO `entregas` VALUES ('578', '200', '101', '10.0');
INSERT INTO `entregas` VALUES ('579', '201', '101', '10.0');
INSERT INTO `entregas` VALUES ('580', '202', '101', '10.0');
INSERT INTO `entregas` VALUES ('581', '203', '101', '10.0');
INSERT INTO `entregas` VALUES ('582', '204', '101', '10.0');
INSERT INTO `entregas` VALUES ('583', '199', '102', '10.0');
INSERT INTO `entregas` VALUES ('584', '200', '102', '10.0');
INSERT INTO `entregas` VALUES ('585', '201', '102', '10.0');
INSERT INTO `entregas` VALUES ('586', '202', '102', '10.0');
INSERT INTO `entregas` VALUES ('587', '203', '102', '10.0');
INSERT INTO `entregas` VALUES ('588', '204', '102', '10.0');
INSERT INTO `entregas` VALUES ('589', '199', '103', '0.0');
INSERT INTO `entregas` VALUES ('590', '200', '103', '0.0');
INSERT INTO `entregas` VALUES ('591', '201', '103', '0.0');
INSERT INTO `entregas` VALUES ('592', '202', '103', '0.0');
INSERT INTO `entregas` VALUES ('593', '203', '103', '0.0');
INSERT INTO `entregas` VALUES ('594', '204', '103', '0.0');
INSERT INTO `entregas` VALUES ('595', '205', '104', '10.0');
INSERT INTO `entregas` VALUES ('596', '206', '104', '10.0');
INSERT INTO `entregas` VALUES ('597', '207', '104', '10.0');
INSERT INTO `entregas` VALUES ('598', '208', '104', '10.0');
INSERT INTO `entregas` VALUES ('599', '209', '104', '10.0');
INSERT INTO `entregas` VALUES ('600', '210', '104', '10.0');
INSERT INTO `entregas` VALUES ('601', '205', '105', '10.0');
INSERT INTO `entregas` VALUES ('602', '206', '105', '10.0');
INSERT INTO `entregas` VALUES ('603', '207', '105', '10.0');
INSERT INTO `entregas` VALUES ('604', '208', '105', '10.0');
INSERT INTO `entregas` VALUES ('605', '209', '105', '10.0');
INSERT INTO `entregas` VALUES ('606', '210', '105', '10.0');
INSERT INTO `entregas` VALUES ('607', '205', '106', '10.0');
INSERT INTO `entregas` VALUES ('608', '206', '106', '10.0');
INSERT INTO `entregas` VALUES ('609', '207', '106', '10.0');
INSERT INTO `entregas` VALUES ('610', '208', '106', '10.0');
INSERT INTO `entregas` VALUES ('611', '209', '106', '10.0');
INSERT INTO `entregas` VALUES ('612', '210', '106', '10.0');
INSERT INTO `entregas` VALUES ('613', '205', '107', '10.0');
INSERT INTO `entregas` VALUES ('614', '206', '107', '10.0');
INSERT INTO `entregas` VALUES ('615', '207', '107', '10.0');
INSERT INTO `entregas` VALUES ('616', '208', '107', '10.0');
INSERT INTO `entregas` VALUES ('617', '209', '107', '10.0');
INSERT INTO `entregas` VALUES ('618', '210', '107', '10.0');
INSERT INTO `entregas` VALUES ('619', '205', '108', '10.0');
INSERT INTO `entregas` VALUES ('620', '206', '108', '10.0');
INSERT INTO `entregas` VALUES ('621', '207', '108', '10.0');
INSERT INTO `entregas` VALUES ('622', '208', '108', '10.0');
INSERT INTO `entregas` VALUES ('623', '209', '108', '10.0');
INSERT INTO `entregas` VALUES ('624', '210', '108', '10.0');
INSERT INTO `entregas` VALUES ('625', '205', '109', '10.0');
INSERT INTO `entregas` VALUES ('626', '206', '109', '10.0');
INSERT INTO `entregas` VALUES ('627', '207', '109', '10.0');
INSERT INTO `entregas` VALUES ('628', '208', '109', '10.0');
INSERT INTO `entregas` VALUES ('629', '209', '109', '10.0');
INSERT INTO `entregas` VALUES ('630', '210', '109', '10.0');
INSERT INTO `entregas` VALUES ('631', '205', '110', '10.0');
INSERT INTO `entregas` VALUES ('632', '206', '110', '10.0');
INSERT INTO `entregas` VALUES ('633', '207', '110', '10.0');
INSERT INTO `entregas` VALUES ('634', '208', '110', '10.0');
INSERT INTO `entregas` VALUES ('635', '209', '110', '10.0');
INSERT INTO `entregas` VALUES ('636', '210', '110', '10.0');
INSERT INTO `entregas` VALUES ('637', '205', '111', '10.0');
INSERT INTO `entregas` VALUES ('638', '206', '111', '10.0');
INSERT INTO `entregas` VALUES ('639', '207', '111', '10.0');
INSERT INTO `entregas` VALUES ('640', '208', '111', '10.0');
INSERT INTO `entregas` VALUES ('641', '209', '111', '10.0');
INSERT INTO `entregas` VALUES ('642', '210', '111', '10.0');
INSERT INTO `entregas` VALUES ('643', '205', '112', '10.0');
INSERT INTO `entregas` VALUES ('644', '206', '112', '10.0');
INSERT INTO `entregas` VALUES ('645', '207', '112', '10.0');
INSERT INTO `entregas` VALUES ('646', '208', '112', '10.0');
INSERT INTO `entregas` VALUES ('647', '209', '112', '10.0');
INSERT INTO `entregas` VALUES ('648', '210', '112', '10.0');
INSERT INTO `entregas` VALUES ('649', '205', '113', '10.0');
INSERT INTO `entregas` VALUES ('650', '206', '113', '10.0');
INSERT INTO `entregas` VALUES ('651', '207', '113', '10.0');
INSERT INTO `entregas` VALUES ('652', '208', '113', '10.0');
INSERT INTO `entregas` VALUES ('653', '209', '113', '10.0');
INSERT INTO `entregas` VALUES ('654', '210', '113', '10.0');
INSERT INTO `entregas` VALUES ('655', '205', '114', '10.0');
INSERT INTO `entregas` VALUES ('656', '206', '114', '10.0');
INSERT INTO `entregas` VALUES ('657', '207', '114', '10.0');
INSERT INTO `entregas` VALUES ('658', '208', '114', '10.0');
INSERT INTO `entregas` VALUES ('659', '209', '114', '10.0');
INSERT INTO `entregas` VALUES ('660', '210', '114', '10.0');
INSERT INTO `entregas` VALUES ('661', '205', '115', '10.0');
INSERT INTO `entregas` VALUES ('662', '206', '115', '10.0');
INSERT INTO `entregas` VALUES ('663', '207', '115', '10.0');
INSERT INTO `entregas` VALUES ('664', '208', '115', '10.0');
INSERT INTO `entregas` VALUES ('665', '209', '115', '10.0');
INSERT INTO `entregas` VALUES ('666', '210', '115', '10.0');
INSERT INTO `entregas` VALUES ('667', '211', '116', '10.0');
INSERT INTO `entregas` VALUES ('668', '212', '116', '10.0');
INSERT INTO `entregas` VALUES ('669', '213', '116', '10.0');
INSERT INTO `entregas` VALUES ('670', '214', '116', '10.0');
INSERT INTO `entregas` VALUES ('671', '215', '116', '10.0');
INSERT INTO `entregas` VALUES ('672', '216', '116', '10.0');
INSERT INTO `entregas` VALUES ('673', '211', '117', '10.0');
INSERT INTO `entregas` VALUES ('674', '212', '117', '10.0');
INSERT INTO `entregas` VALUES ('675', '213', '117', '10.0');
INSERT INTO `entregas` VALUES ('676', '214', '117', '10.0');
INSERT INTO `entregas` VALUES ('677', '215', '117', '10.0');
INSERT INTO `entregas` VALUES ('678', '216', '117', '10.0');
INSERT INTO `entregas` VALUES ('679', '211', '118', '10.0');
INSERT INTO `entregas` VALUES ('680', '212', '118', '10.0');
INSERT INTO `entregas` VALUES ('681', '213', '118', '10.0');
INSERT INTO `entregas` VALUES ('682', '214', '118', '10.0');
INSERT INTO `entregas` VALUES ('683', '215', '118', '10.0');
INSERT INTO `entregas` VALUES ('684', '216', '118', '10.0');
INSERT INTO `entregas` VALUES ('685', '211', '119', '10.0');
INSERT INTO `entregas` VALUES ('686', '212', '119', '10.0');
INSERT INTO `entregas` VALUES ('687', '213', '119', '10.0');
INSERT INTO `entregas` VALUES ('688', '214', '119', '10.0');
INSERT INTO `entregas` VALUES ('689', '215', '119', '10.0');
INSERT INTO `entregas` VALUES ('690', '216', '119', '10.0');
INSERT INTO `entregas` VALUES ('691', '211', '120', '10.0');
INSERT INTO `entregas` VALUES ('692', '212', '120', '10.0');
INSERT INTO `entregas` VALUES ('693', '213', '120', '10.0');
INSERT INTO `entregas` VALUES ('694', '214', '120', '10.0');
INSERT INTO `entregas` VALUES ('695', '215', '120', '10.0');
INSERT INTO `entregas` VALUES ('696', '216', '120', '10.0');
INSERT INTO `entregas` VALUES ('697', '211', '121', '10.0');
INSERT INTO `entregas` VALUES ('698', '212', '121', '10.0');
INSERT INTO `entregas` VALUES ('699', '213', '121', '10.0');
INSERT INTO `entregas` VALUES ('700', '214', '121', '10.0');
INSERT INTO `entregas` VALUES ('701', '215', '121', '10.0');
INSERT INTO `entregas` VALUES ('702', '216', '121', '10.0');
INSERT INTO `entregas` VALUES ('703', '211', '122', '10.0');
INSERT INTO `entregas` VALUES ('704', '212', '122', '10.0');
INSERT INTO `entregas` VALUES ('705', '213', '122', '10.0');
INSERT INTO `entregas` VALUES ('706', '214', '122', '10.0');
INSERT INTO `entregas` VALUES ('707', '215', '122', '10.0');
INSERT INTO `entregas` VALUES ('708', '216', '122', '10.0');
INSERT INTO `entregas` VALUES ('709', '211', '123', '10.0');
INSERT INTO `entregas` VALUES ('710', '212', '123', '10.0');
INSERT INTO `entregas` VALUES ('711', '213', '123', '10.0');
INSERT INTO `entregas` VALUES ('712', '214', '123', '10.0');
INSERT INTO `entregas` VALUES ('713', '215', '123', '10.0');
INSERT INTO `entregas` VALUES ('714', '216', '123', '10.0');
INSERT INTO `entregas` VALUES ('715', '211', '124', '10.0');
INSERT INTO `entregas` VALUES ('716', '212', '124', '10.0');
INSERT INTO `entregas` VALUES ('717', '213', '124', '10.0');
INSERT INTO `entregas` VALUES ('718', '214', '124', '10.0');
INSERT INTO `entregas` VALUES ('719', '215', '124', '10.0');
INSERT INTO `entregas` VALUES ('720', '216', '124', '10.0');
INSERT INTO `entregas` VALUES ('721', '211', '125', '10.0');
INSERT INTO `entregas` VALUES ('722', '212', '125', '10.0');
INSERT INTO `entregas` VALUES ('723', '213', '125', '10.0');
INSERT INTO `entregas` VALUES ('724', '214', '125', '10.0');
INSERT INTO `entregas` VALUES ('725', '215', '125', '10.0');
INSERT INTO `entregas` VALUES ('726', '216', '125', '10.0');
INSERT INTO `entregas` VALUES ('727', '211', '126', '10.0');
INSERT INTO `entregas` VALUES ('728', '212', '126', '10.0');
INSERT INTO `entregas` VALUES ('729', '213', '126', '10.0');
INSERT INTO `entregas` VALUES ('730', '214', '126', '10.0');
INSERT INTO `entregas` VALUES ('731', '215', '126', '10.0');
INSERT INTO `entregas` VALUES ('732', '216', '126', '10.0');
INSERT INTO `entregas` VALUES ('733', '211', '127', '10.0');
INSERT INTO `entregas` VALUES ('734', '212', '127', '10.0');
INSERT INTO `entregas` VALUES ('735', '213', '127', '10.0');
INSERT INTO `entregas` VALUES ('736', '214', '127', '10.0');
INSERT INTO `entregas` VALUES ('737', '215', '127', '10.0');
INSERT INTO `entregas` VALUES ('738', '216', '127', '10.0');
INSERT INTO `entregas` VALUES ('739', '217', '128', '10.0');
INSERT INTO `entregas` VALUES ('740', '218', '128', '10.0');
INSERT INTO `entregas` VALUES ('741', '219', '128', '10.0');
INSERT INTO `entregas` VALUES ('742', '220', '128', '10.0');
INSERT INTO `entregas` VALUES ('743', '221', '128', '10.0');
INSERT INTO `entregas` VALUES ('744', '222', '128', '10.0');
INSERT INTO `entregas` VALUES ('745', '217', '129', '10.0');
INSERT INTO `entregas` VALUES ('746', '218', '129', '10.0');
INSERT INTO `entregas` VALUES ('747', '219', '129', '10.0');
INSERT INTO `entregas` VALUES ('748', '220', '129', '10.0');
INSERT INTO `entregas` VALUES ('749', '221', '129', '10.0');
INSERT INTO `entregas` VALUES ('750', '222', '129', '10.0');
INSERT INTO `entregas` VALUES ('751', '217', '130', '10.0');
INSERT INTO `entregas` VALUES ('752', '218', '130', '10.0');
INSERT INTO `entregas` VALUES ('753', '219', '130', '10.0');
INSERT INTO `entregas` VALUES ('754', '220', '130', '10.0');
INSERT INTO `entregas` VALUES ('755', '221', '130', '10.0');
INSERT INTO `entregas` VALUES ('756', '222', '130', '10.0');
INSERT INTO `entregas` VALUES ('757', '217', '131', '10.0');
INSERT INTO `entregas` VALUES ('758', '218', '131', '10.0');
INSERT INTO `entregas` VALUES ('759', '219', '131', '10.0');
INSERT INTO `entregas` VALUES ('760', '220', '131', '10.0');
INSERT INTO `entregas` VALUES ('761', '221', '131', '10.0');
INSERT INTO `entregas` VALUES ('762', '222', '131', '10.0');
INSERT INTO `entregas` VALUES ('763', '217', '132', '10.0');
INSERT INTO `entregas` VALUES ('764', '218', '132', '10.0');
INSERT INTO `entregas` VALUES ('765', '219', '132', '10.0');
INSERT INTO `entregas` VALUES ('766', '220', '132', '10.0');
INSERT INTO `entregas` VALUES ('767', '221', '132', '10.0');
INSERT INTO `entregas` VALUES ('768', '222', '132', '10.0');
INSERT INTO `entregas` VALUES ('769', '217', '133', '10.0');
INSERT INTO `entregas` VALUES ('770', '218', '133', '10.0');
INSERT INTO `entregas` VALUES ('771', '219', '133', '10.0');
INSERT INTO `entregas` VALUES ('772', '220', '133', '10.0');
INSERT INTO `entregas` VALUES ('773', '221', '133', '10.0');
INSERT INTO `entregas` VALUES ('774', '222', '133', '10.0');
INSERT INTO `entregas` VALUES ('775', '217', '134', '10.0');
INSERT INTO `entregas` VALUES ('776', '218', '134', '10.0');
INSERT INTO `entregas` VALUES ('777', '219', '134', '10.0');
INSERT INTO `entregas` VALUES ('778', '220', '134', '10.0');
INSERT INTO `entregas` VALUES ('779', '221', '134', '10.0');
INSERT INTO `entregas` VALUES ('780', '222', '134', '10.0');
INSERT INTO `entregas` VALUES ('781', '217', '135', '10.0');
INSERT INTO `entregas` VALUES ('782', '218', '135', '10.0');
INSERT INTO `entregas` VALUES ('783', '219', '135', '10.0');
INSERT INTO `entregas` VALUES ('784', '220', '135', '10.0');
INSERT INTO `entregas` VALUES ('785', '221', '135', '10.0');
INSERT INTO `entregas` VALUES ('786', '222', '135', '10.0');
INSERT INTO `entregas` VALUES ('787', '217', '136', '10.0');
INSERT INTO `entregas` VALUES ('788', '218', '136', '10.0');
INSERT INTO `entregas` VALUES ('789', '219', '136', '10.0');
INSERT INTO `entregas` VALUES ('790', '220', '136', '10.0');
INSERT INTO `entregas` VALUES ('791', '221', '136', '10.0');
INSERT INTO `entregas` VALUES ('792', '222', '136', '10.0');
INSERT INTO `entregas` VALUES ('793', '217', '137', '10.0');
INSERT INTO `entregas` VALUES ('794', '218', '137', '10.0');
INSERT INTO `entregas` VALUES ('795', '219', '137', '10.0');
INSERT INTO `entregas` VALUES ('796', '220', '137', '10.0');
INSERT INTO `entregas` VALUES ('797', '221', '137', '10.0');
INSERT INTO `entregas` VALUES ('798', '222', '137', '10.0');
INSERT INTO `entregas` VALUES ('799', '217', '138', '10.0');
INSERT INTO `entregas` VALUES ('800', '218', '138', '10.0');
INSERT INTO `entregas` VALUES ('801', '219', '138', '10.0');
INSERT INTO `entregas` VALUES ('802', '220', '138', '10.0');
INSERT INTO `entregas` VALUES ('803', '221', '138', '10.0');
INSERT INTO `entregas` VALUES ('804', '222', '138', '10.0');
INSERT INTO `entregas` VALUES ('805', '217', '139', '10.0');
INSERT INTO `entregas` VALUES ('806', '218', '139', '10.0');
INSERT INTO `entregas` VALUES ('807', '219', '139', '10.0');
INSERT INTO `entregas` VALUES ('808', '220', '139', '10.0');
INSERT INTO `entregas` VALUES ('809', '221', '139', '10.0');
INSERT INTO `entregas` VALUES ('810', '222', '139', '10.0');
INSERT INTO `entregas` VALUES ('811', '217', '140', '0.0');
INSERT INTO `entregas` VALUES ('812', '218', '140', '0.0');
INSERT INTO `entregas` VALUES ('813', '219', '140', '0.0');
INSERT INTO `entregas` VALUES ('814', '220', '140', '0.0');
INSERT INTO `entregas` VALUES ('815', '221', '140', '0.0');
INSERT INTO `entregas` VALUES ('816', '222', '140', '0.0');

-- ----------------------------
-- Table structure for evaluaciones
-- ----------------------------
DROP TABLE IF EXISTS `evaluaciones`;
CREATE TABLE `evaluaciones` (
  `id` int(10) NOT NULL,
  `clave_alumno_curso` int(10) DEFAULT NULL,
  `parcial` int(1) DEFAULT NULL,
  `califiacion` double(2,1) DEFAULT NULL,
  `dictamen` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of evaluaciones
-- ----------------------------

-- ----------------------------
-- Table structure for grupos
-- ----------------------------
DROP TABLE IF EXISTS `grupos`;
CREATE TABLE `grupos` (
  `clave` varchar(3) COLLATE utf8_spanish2_ci NOT NULL,
  `turno` enum('matutino','vespertino') COLLATE utf8_spanish2_ci DEFAULT NULL,
  `carrera` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of grupos
-- ----------------------------
INSERT INTO `grupos` VALUES ('312', 'matutino', 'industrial');
INSERT INTO `grupos` VALUES ('323', 'vespertino', 'contabilidad');
INSERT INTO `grupos` VALUES ('343', 'vespertino', 'gastronomia');
INSERT INTO `grupos` VALUES ('678', 'vespertino', 'industrial');

-- ----------------------------
-- Table structure for materias
-- ----------------------------
DROP TABLE IF EXISTS `materias`;
CREATE TABLE `materias` (
  `clave` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `creditos` int(2) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of materias
-- ----------------------------
INSERT INTO `materias` VALUES ('mate1', 'matematicas', '2');
INSERT INTO `materias` VALUES ('mate2', 'matematicas2', '3');
INSERT INTO `materias` VALUES ('pro', 'programacion', '5');
INSERT INTO `materias` VALUES ('sp', 'español', '3');
INSERT INTO `materias` VALUES ('vyt', 'lectura', '2');

-- ----------------------------
-- Table structure for profesores
-- ----------------------------
DROP TABLE IF EXISTS `profesores`;
CREATE TABLE `profesores` (
  `clave` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `a_paterno` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `a_materno` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `correo` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasena` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen` varchar(60) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- ----------------------------
-- Records of profesores
-- ----------------------------
INSERT INTO `profesores` VALUES ('', 'dfg', 'dfg', 'gdfg', 'dfg@m.c', '', null);
INSERT INTO `profesores` VALUES ('12039393', 'Benito', 'Camelo', 'molio', 'slkjmasn2@llloaos', 'lsaokdaosdsa', null);
INSERT INTO `profesores` VALUES ('123456', 'david', 'garcia', 'cortes', 'david@gmail.com', 'david', null);
INSERT INTO `profesores` VALUES ('13450145', 'Omar', 'martinez', 'salas', 'slk@gmail.com', 'alert(hola)', null);
INSERT INTO `profesores` VALUES ('22758229', 'omar', 'martinez', 'salas', 'slkjohanomar@gmail.com', 'slkjohanomar', null);
INSERT INTO `profesores` VALUES ('jhkghk', 'jhkhjk', 'hjkghjkghk', 'hjkghjk', 'hjkghjk@lol', 'ghjkghjkghj', null);
