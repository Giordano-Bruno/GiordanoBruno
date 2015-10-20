<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
# 4-jul 2015 se agregan comentarios JALG 
*/
 
/****************************************************************************
 * result types:
 * OBIB_ASSOC - associative array result type
 * OBIB_NUM - numeric array result type
 * OBIB_BOTH - both assoc and numeric array result type
 **************************************************************************** */
define("OBIB_ASSOC","1");
define("OBIB_NUM","2");
define("OBIB_BOTH","3");

/****************************************************************************
 * search types:
 **************************************************************************** */
define("OBIB_SEARCH_BARCODE", "1");
define("OBIB_SEARCH_TITLE", "2");
define("OBIB_SEARCH_AUTHOR", "3");
define("OBIB_SEARCH_SUBJECT", "4");
define("OBIB_SEARCH_NAME", "5");
define("OBIB_SEARCH_ISBN", "6");
define("OBIB_SEARCH_KEYWORD", "7");
define("OBIB_SEARCH_CALLNO", "8");
define("OBIB_SEARCH_MATERIAL", "9");
define("OBIB_SEARCH_COLLECTION", "10");
define("OBIB_SEARCH_SERIES", "11");
define("OBIB_SEARCH_PUBLISHER", "12");
define("OBIB_SEARCH_LANGUAGE", "13");
define("OBIB_SEARCH_ID", "14");
define("OBIB_ADVANCED_SEARCH", "20");

/****************************************************************************
 * search types for catalog CDD, CDU, IBIC, CUTTER:
  **************************************************************************** */

define("OBIB_SEARCH_CDU_CLV", "31");
define("OBIB_SEARCH_CDU_NUM", "32");
define("OBIB_SEARCH_CDU_DES", "33");

define("OBIB_SEARCH_CDD_CLV", "35");
define("OBIB_SEARCH_CDD_NUM", "36");
define("OBIB_SEARCH_CDD_DES", "37");

define("OBIB_SEARCH_IBIC_CLV", "40");
define("OBIB_SEARCH_IBIC_NUM", "41");
define("OBIB_SEARCH_IBIC_DES", "42");

define("OBIB_SEARCH_CUTTER_CLV", "46");
define("OBIB_SEARCH_CUTTER_NUM", "47");
define("OBIB_SEARCH_CUTTER_DES", "48");

/****************************************************************************
 *  Misc. system constants
 **************************************************************************** */
date_default_timezone_set('America/Mexico_City');//Ajustar según se tenga en el servidor apache 

define("OBIB_CODE_VERSION","GB-1");//no mover 
define("OBIB_LATEST_DB_VERSION","1.0.0");//no mover

//define("OBIB_CODE_VERSION",		"GB BETA 34.1");// La version del codigo
//define("OBIB_LATEST_DB_VERSION",	"GB-0.33");// la version de la base de datos

define("OBIB_DEFAULT_STATUS",		"in");//Estado de material predefinido
define("OBIB_STATUS_IN",		"in");//Por revisar
define("OBIB_STATUS_OUT",		"out");//Revisado
define("OBIB_STATUS_ON_LOAN",		"ln");//En calidad de préstamo
define("OBIB_STATUS_ON_ORDER",		"ord");//Reservado
define("OBIB_STATUS_SHELVING_CART",	"crt");//Para Reponer
define("OBIB_STATUS_ON_HOLD",		"hld");//En Espera

define("OBIB_MBR_CLASSIFICATION_JUVENILE","j");// Predefinido para miebros nuevos
define("OBIB_DEMO_FLG",			false);# fix revisar e integrar desde admin jalg 2-2015- sirve par ahacer pagina demo
define("OBIB_HIGHLIGHT_I18N_FLG",	false);
define("OBIB_SEARCH_MAXPAGES",		20);//Maxima cantida de paginas a buscar
define("OBIB_MAX_FILE_SIZE",		500000000);//tamaño maximo de subida de archivos
define("OBIB_MYSQL_DATETIME_TYPE",	"datetime");//tipo de fecha
define("OBIB_MYSQL_DATETIME_FORMAT",	"Y-m-d H:i:s");//formato de fecha y hora
define("OBIB_MYSQL_DATE_TYPE",		"date");//formato de fecha
define("OBIB_MYSQL_DATE_FORMAT",	"Y-m-d");//formato de fecha
define("OBIB_LOCALE_ROOT","../locale/");
# Not fully implemented yet.
define("DB_TABLENAME_PREFIX", 		"");//revisar
# Not fully implemented yet. usado en el forx alx
define("OBIB_BARCODE_RE", '/^[A-Za-z0-9._\/\-]+$/');//rev alx

/****************************************************************************
 *  Path Directories
 **************************************************************************** */
# Change this if your document root isn't a '/', e.g., /library/
# Server for keeping portadas desde servidor externo jalg
define("DOCUMENT_ROOT", "/");//Carpeta pricipal o raiz
define("MEDIA_PATH", "media");//Carpeta de imagenes y digitales
define("COVER_PATH", "/media/covers");//Carpeta de imagenes de portadas
define("COVER_PATH_TMP", "/media/tmp");//Carpeta de archivos de temporales
define("FOTO_PATH", "/media/lectores");//Carpeta de imagenes de lactores
define("AUTOR_PATH", "/media/autores");//Carpeta de imagenes de autores
define("DIGI_PATH", "/media/digitales");//Carpeta de materiales degitales en servidor espa
define('OBI_PORTADAS',"http://covers.openlibrary.org/b/isbn/");//servidor de portadas automaticas con ISBN
define('OBI_DIR',"../locale/"); //Ruta de archivos de idioma
#fixme revisar si es necesario se usa en Localize.php const BASELOCALE = OBIB_LOCALE;//para predefinirlo en shared/global_constants.php
//define('OBIB_LOCALE',"es"); //idioma predefinido
define("OBIB_CHARSET",    "utf-8");// define el charset de la base de datos Revisar es requerido en la instalacion
define("OBIB_TITLE_LARGE", "375");// define el largo de caracteres a mostrar en titulos 



