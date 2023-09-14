<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'DEFAULT_CHARSET' => 'UTF-8',
    'LBL_DISABLED_TITLE' => 'Instalación de SuiteCRM Deshabilitada',
    'LBL_DISABLED_TITLE_2' => 'La instalación de SuiteCRM ha sido deshabilitada',
    'LBL_DISABLED_DESCRIPTION' => 'La instalación ya se ejecutó una vez. Como medida de seguridad se ha deshabilitado una segunda ejecución. Si está absolutamente seguro de que quiere volver a ejecutarla, por favor vaya a su archivo config.php y encuentre (o agregue) una variable llamada \'installer_locked\' y colóquela en \'false\'. La línea debería quedar así:',
    'LBL_DISABLED_DESCRIPTION_2' => 'Después de realizado este cambio, podrá hacer click en el botón "Comenzar" de abajo para comenzar la instalación. <i>Una vez finalizada la instalación, puede cambiar el valor de \'installer_locked\' a \'true\'.</i>',
    'LBL_DISABLED_HELP_1' => 'Para ayuda con la instalación, por favor visite ',
    'LBL_DISABLED_HELP_2' => 'foros de soporte',

    'LBL_REG_TITLE' => 'Registración',
    'LBL_REG_CONF_1' => 'Por favor tome un momento para registrarse en SuiteCRM. dejándonos saber un poco acerca de cómo su empresa planea utilizar SuiteCRM, podemos asegurar que siempre le estamos entregando el producto correcto para sus necesidades de negocio.',
    'LBL_REG_CONF_2' => 'Su nombre y dirección de email son los únicos campos requeridos para la registración. El resto de los campos son opcionales, pero de mucha ayuda. No vendemos, alquilamos, compartimos ni distribuimos de ninguna forma la información recolectada aquí.',
    'LBL_REG_CONF_3' => 'Gracias por registrarse. Haga click en el botón Finalizar para ingresar a SuiteCRM. Necesitará ingresar por primera vez utilizando el nombre de usuario "admin" y la contraseña que ingresó en el paso 2.',


    'ERR_ADMIN_PASS_BLANK' => 'La contraseña de administrador SuiteCRM no puede estar en blanco.',
    'ERR_CHECKSYS_CALL_TIME' => 'Permite llamar a pasar referencia está apagado (por favor, habilitar en el php.ini)',
    'ERR_CHECKSYS_CURL' => 'No encontrado: el planificador de tareas de SuiteCRM se ejecutará con funcionalidad limitada.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => 'Advertencia: $memory_limit (poner en ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M o más en su archivo php.ini)',
    'ERR_CHECKSYS_NO_SESSIONS' => 'Falló la escritura y lectura de variables de sesión. No se puede avanzar con la instalación.',
    'ERR_CHECKSYS_NOT_VALID_DIR' => 'No es un directorio válido',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Advertencia: No se puede escribir',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'No válido PHP versión instalada: (ver',
    'ERR_CHECKSYS_PHP_UNSUPPORTED' => 'Versión de PHP no soportada: ( ver',
    'ERR_CHECKSYS_SAFE_MODE' => 'Modo seguro está activado (por favor deshabilita en php.ini)',
    'ERR_DB_ADMIN' => 'Nombre de usuario de administrador de base de datos o la contraseña no es válido (Error ',
    'ERR_DB_EXISTS_NOT' => 'Base de datos especificada no existe.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'La base de datos ya existe con información de configuración. Para ejecutar una instalación con la base de datos seleccionada vuelva a ejecutar la instalación y seleccione "Eliminar las tablas existentes y volver a crearlas?". Para actualizar utilice el Asistente de Actualizaciones en la Consola de Administración. Por favor lea la documentación de actualización <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">aquí</a>.',
    'ERR_DB_EXISTS' => 'Nombre de la base de datos ya existe, no se puede crear otra con el mismo nombre.',
    'ERR_DB_HOSTNAME' => 'El nombre de Host no puede ser vacío.',
    'ERR_DB_INVALID' => 'Tipo de base de datos seleccionado no válido.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Nombre de usuario de base de datos de SuiteCRM o contraseña inválida (Error ',
    'ERR_DB_MYSQL_VERSION1' => 'Versión de MySQL ',
    'ERR_DB_MYSQL_VERSION2' => ' no es compatible.  Sólo MySQL 4.1.x y superior.',
    'ERR_DB_NAME' => 'El nombre de base de datos no puede estar vacío.',
    'ERR_DB_NAME2' => "El nombre de base de datos no puede contener '\\', '/', o '.'",
    'ERR_DB_PASSWORD' => 'No coinciden las contraseñas de SuiteCRM.',
    'ERR_DB_PRIV_USER' => 'Nombre de usuario de administrador de base de datos requerido.',
    'ERR_DB_USER_EXISTS' => 'Nombre de usuario para SuiteCRM ya existe, no puede crear otro con el mismo nombre.',
    'ERR_DB_USER' => 'Nombre de usuario para SuiteCRM no puede estar en blanco.',
    'ERR_DBCONF_VALIDATION' => 'Por favor corrija los siguientes errores antes de continuar:',
    'ERR_ERROR_GENERAL' => 'Se encontraron los siguientes errores:',
    'ERR_LICENSE_MISSING' => 'Faltan Campos Obligatorios',
    'ERR_LICENSE_NOT_FOUND' => 'No se encontró la licencia!',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'El directorio de Log provisto no es un directorio válido.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'El directorio de Log provisto no tiene permisos de escritura.',
    'ERR_LOG_DIRECTORY_REQUIRED' => 'Se requiere un directorio de Log si usted desea especificar uno.',
    'ERR_NO_DIRECT_SCRIPT' => 'No se puede procesar el script de forma directa.',
    'ERR_PASSWORD_MISMATCH' => 'No coinciden las contraseñas de administrador de SuiteCRM.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'No se puede escribir el archivo <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Puedecontinuar con esta instalación creando manualmente el archivo config.php y pegando la siguiente información de configuración dentro del archivo.  De todos modos, usted <strong>debería </strong>crear el archivo config.php antes de continuar con el siguiente paso.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Se acordó de crear el archivo config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Advertencia: No se pudo escribir el archivo config.php.  Asegúrese de que existe.',
    'ERR_PERFORM_HTACCESS_1' => 'No es puede escribir el archivo ',
    'ERR_PERFORM_HTACCESS_2' => ' .',
    'ERR_PERFORM_HTACCESS_3' => 'Si desea proteger su archivo de log de ser accedido via navegador, cree un archivo .htaccess en su carpeta log con la línea:',
    'ERR_PERFORM_NO_TCPIP' => '<b>No hemos podido detectar una conexión a Internet.</b> Cuando tenga una conexión, por favor visite <a href=\\"https://www.suitecrm.com\\">https://www.suitecrm.com</a> para registrarse con SuiteCRM. Si nos cuenta un poco cómo su compañía planea utilizar SuiteCRM podremos asegurarnos de entregarle la aplicación correcta para las necesidades de su negocio.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'El directorio de Sesión provisto no es un directorio válido.',
    'ERR_SESSION_DIRECTORY' => 'El directorio de Sesión provisto no tiene permisos de escritura.',
    'ERR_SESSION_PATH' => 'Se requiere una ruta de Sesión, si es que desea especificar una.',
    'ERR_SI_NO_CONFIG' => 'No incluyó el archivo config_si.php en el directorio raíz, o no definió la variable $sugar_config_si en config.php',
    'ERR_SITE_GUID' => 'Se requiere un ID de Aplicación si es que desea especificar uno.',
    'ERR_URL_BLANK' => 'La URL no puede estar en blanco.',
    'LBL_BACK' => 'Atrás',
    'LBL_CHECKSYS_1' => 'Para que su instalación de SuiteCRM funcione correctamente, por favor asegúrese de que todos los items por verificar listados más abajo estén en verde. Si encuentra alguno en rojo, por favor realice los pasos necesarios para solucionarlos.',
    'LBL_CHECKSYS_CACHE' => 'Sub-Directories de Cache Editables',
    'LBL_CHECKSYS_CALL_TIME' => 'PHP Allow Call Time Pass Reference desactivado',
    'LBL_CHECKSYS_COMPONENT' => 'Componente',
    'LBL_CHECKSYS_CONFIG' => 'Archivo de Configuración editable (config.php)',
    'LBL_CHECKSYS_CURL' => 'Módulo cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Directorio Custom editable',
    'LBL_CHECKSYS_DATA' => 'Subdirectorios de Data editables',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Sin Límite)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Ilimitado)',
    'LBL_CHECKSYS_MEM' => 'Límite de Memoria PHP >= ',
    'LBL_CHECKSYS_MODULE' => 'Subdirectorios y Archivos de módulos editables',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'No disponible',
    'LBL_CHECKSYS_OK' => 'Aceptar',
    'LBL_CHECKSYS_PHP_INI' => '<b>Nota:</b> Ubicación de su archivo de configuración PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Versión de PHP',
    'LBL_CHECKSYS_RECHECK' => 'Volver a Verificar',
    'LBL_CHECKSYS_SAFE_MODE' => 'PHP Safe Mode desactivado',
    'LBL_CHECKSYS_SESSION' => 'Directorio de Sesión Editable (',
    'LBL_CHECKSYS_STATUS' => 'Estado',
    'LBL_CHECKSYS_TITLE' => 'Aceptación de Verificación del Sistema',
    'LBL_CHECKSYS_XML' => 'Análisis XML',
    'LBL_CLOSE' => 'Cerrar',
    'LBL_CONFIRM_BE_CREATED' => 'creada',
    'LBL_CONFIRM_DB_TYPE' => 'Tipo de Base de Datos',
    'LBL_CONFIRM_DIRECTIONS' => 'Por favor confirme la siguiente configuración.  Se desea cambiar alguno de los valores, haga click en "Atrás" para editar. De lo contrario haga click en "Siguiente" para comenzar la instalación.',
    'LBL_CONFIRM_LICENSE_TITLE' => 'Información de Licencia',
    'LBL_CONFIRM_NOT' => 'no',
    'LBL_CONFIRM_TITLE' => 'Confirmar configuración',
    'LBL_CONFIRM_WILL' => 'será',
    'LBL_DBCONF_CREATE_DB' => 'Crear Base de Datos',
    'LBL_DBCONF_CREATE_USER' => 'Crear Usuario',
    'LBL_DBCONF_DB_DROP_CREATE_WARN' => 'Atención: Toda la información de SuiteCRM será eliminada<br>si se marca esta casilla.',
    'LBL_DBCONF_DB_DROP_CREATE' => 'Eliminar las tablas existentes y volver a crearlas?',
    'LBL_DBCONF_DB_NAME' => 'Nombre de Base de Datos',
    'LBL_DBCONF_DB_PASSWORD' => 'Contraseña del Usuario de Base de Datos',
    'LBL_DBCONF_DB_PASSWORD2' => 'Vuelva a Ingresar Contraseña del Usuario de Base de Datos',
    'LBL_DBCONF_DB_USER' => 'Nombre de Usuario de Base de Datos',
    'LBL_DBCONF_DEMO_DATA' => 'Llenar la Base de Datos con Información de Prueba?',
    'LBL_DBCONF_HOST_NAME' => 'Nombre del Host',
    'LBL_DBCONF_INSTRUCTIONS' => 'Por favor ingrese la información de su configuración a continuación. Si no está seguro de lo que debe completar, le sugerimos que use los valores por defecto.',
    'LBL_DBCONF_MB_DEMO_DATA' => 'Usar texto multi-byte en la información de prueba?',
    'LBL_DBCONF_PRIV_PASS' => 'Contraseña del usuario privilegiado de la Base de Datos',
    'LBL_DBCONF_PRIV_USER_2' => '¿La cuenta de base de datos de arriba es de un Usuario Privilegiado?',
    'LBL_DBCONF_PRIV_USER_DIRECTIONS' => 'Este usuario privilegiado de base de datos debe tener los permisos adecuados para crear una base de datos, eliminar/crear tablas, y crear un usuario. Este usuario privilegiado de base de datos sólo será utilizado para realizar las tareas necesarias durante el proceso de instalación. Si este usuario tiene permisos suficientes, también puede utilizarlo como usuario de base de datos.',
    'LBL_DBCONF_PRIV_USER' => 'Nombre del Usuario Privilegiado de Base de Datos',
    'LBL_DBCONF_TITLE' => 'Configuración de la Base de Datos',
    'LBL_HELP' => 'Ayuda',
    'LBL_LICENSE_ACCEPTANCE' => 'Aceptación de Licencia',
    'LBL_LICENSE_DIRECTIONS' => 'Si tiene la información de su licencia, por favor ingrésela en los siguientes campos.',
    'LBL_LICENSE_DOWNLOAD_KEY' => 'Clave de Descarga',
    'LBL_LICENSE_EXPIRY' => 'Fecha de Vencimiento',
    'LBL_LICENSE_I_ACCEPT' => 'Acepto',
    'LBL_LICENSE_NUM_USERS' => 'Cantidad de Usuarios',
    'LBL_LICENSE_OC_DIRECTIONS' => 'Por favor ingrese la cantidad de clientes offline adquiridos.',
    'LBL_LICENSE_OC_NUM' => 'Cantidad de Licencias de Clientes Offline',
    'LBL_LICENSE_OC' => 'Licencias de Clientes Offline',
    'LBL_LICENSE_PRINTABLE' => ' Versión Imprimible ',
    'LBL_LICENSE_TITLE' => 'Información de Licencia',
    'LBL_LICENSE_TITLE_2' => 'Licencia SuiteCRM',
    'LBL_LICENSE_USERS' => 'Licencias de Usuario',
    'LBL_MYSQL' => 'MySQL',
    'LBL_NEXT' => 'Siguiente',
    'LBL_NO' => 'No',
    'LBL_ORACLE' => 'Oracle',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Estableciendo password de admin',
    'LBL_PERFORM_AUDIT_TABLE' => 'tabla de auditoría / ',
    'LBL_PERFORM_CONFIG_PHP' => 'Creando el archivo de configuración de SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => 'Creando la base de datos ',
    'LBL_PERFORM_CREATE_DB_2' => ' en ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creando nombre de usuario y password de la Base de datos...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creando información por defecto de SuiteCRM',
    'LBL_PERFORM_CREATE_LOCALHOST' => 'Creando nombre de usuario y password de base de datos para localhost...',
    'LBL_PERFORM_CREATE_RELATIONSHIPS' => 'Creando tablas de relación para suiteCRM',
    'LBL_PERFORM_CREATING' => 'creando / ',
    'LBL_PERFORM_DEFAULT_REPORTS' => 'Creando reportes por defecto',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Creando tareas planificadas por defecto',
    'LBL_PERFORM_DEFAULT_SETTINGS' => 'Insertando configuración por defecto',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creando usuarios por defecto',
    'LBL_PERFORM_DEMO_DATA' => 'Llenando las tablas de la base de datos con Información de Prueba (esto puede tomar varios minutos)...',
    'LBL_PERFORM_DONE' => 'listo<br>',
    'LBL_PERFORM_DROPPING' => 'eliminando / ',
    'LBL_PERFORM_FINISH' => 'Finalizar',
    'LBL_PERFORM_LICENSE_SETTINGS' => 'Actualizando la información de la licencia',
    'LBL_PERFORM_OUTRO_1' => 'La configuración de SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' ha finalizado!',
    'LBL_PERFORM_OUTRO_3' => 'Tiempo total: ',
    'LBL_PERFORM_OUTRO_4' => ' segundos.',
    'LBL_PERFORM_OUTRO_5' => 'Memoria utilizada (aprox): ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_OUTRO_7' => 'Su sistema ya está instalado y configurado para ser utilizado.',
    'LBL_PERFORM_REL_META' => 'metadatos de relaciones ... ',
    'LBL_PERFORM_SUCCESS' => 'Éxito!',
    'LBL_PERFORM_TABLES' => 'Creando las tablas de la aplicación, tablas de auditoría y metadatos de relaciones...',
    'LBL_PERFORM_TITLE' => 'Configurar',
    'LBL_PRINT' => 'Imprimir',
    'LBL_REQUIRED' => '* Campo Requerido',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Vuelva a Ingresar la Contraseña del <em>Usuario Administrador</em>',
    'LBL_SITECFG_ADMIN_PASS_WARN' => 'Atención: Esto sobreescribirá la contraseña del administrador de cualquier instalación anterior.',
    'LBL_SITECFG_ADMIN_PASS' => 'Contraseña del <em>Usuario Administrador</em> de SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID de la Aplicación',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Si se selecciona, deberá proveer un ID de Aplicación para sobreescribir el ID autogenerado. El ID asegura que las sesiones de una instancia de SuiteCRM no sean usadas por otras instancia. Si tiene un cluster de instalaciones de SuiteCRM, todas deberían compartir el mismo ID de aplicación.',
    'LBL_SITECFG_CUSTOM_ID' => 'Provea su propio ID de Aplicación',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Si se selecciona, deberá especificar un directorio de logs para sobreescribir el directorio por defecto del log de SuiteCRM. Sin importar dónde esté ubicado el archivo de log, el acceso a través de navegador se deberá restringir utilizando una redirección .htacces.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Utilizar un Directorio Personalizado para Logs',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Si se selecciona, deberá proveer un directorio seguro para almacenar la información de sesiones de SuiteCRM. Esto se puede hacer para evitar que la información de la sesión sea vulnerada en servidores compartidos.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utilizar un Directorio Personalizado para las Sesiones de SuiteCRM',
    'LBL_SITECFG_DIRECTIONS' => 'Por favor ingrese la configuración de su sitio a continuación. Si no está seguro de los campos, le sugerimos utilizar los valores por defecto.',
    'LBL_SITECFG_FIX_ERRORS' => 'Por favor corrija los siguientes errores antes de continuar:',
    'LBL_SITECFG_LOG_DIR' => 'Directorio de Log',
    'LBL_SITECFG_SESSION_PATH' => 'Ruta del Directorio de Sesiones<br>(debe ser editable)',
    'LBL_SITECFG_SITE_SECURITY' => 'Seleccionar Opciones de Seguridad',
    'LBL_SITECFG_SUGAR_UP_DIRECTIONS' => 'Cuando está habilitado el sistema SuiteCRM Inc. enviará periódicamente  estadísticas anónimas acerca de la instalación que nos ayudará a entender los patrones de uso y mejoras del producto.  A cambio de esta información, los administradores recibirán avisos de actualización cuando haya nuevas versiones o actualizaciones.',
    'LBL_SITECFG_SUGAR_UP' => '¿Verificar Automáticamente nuevas Actualizaciones?',
    'LBL_SITECFG_SUGAR_UPDATES' => 'Configuración de Actualizaciones de SuiteCRM',
    'LBL_SITECFG_TITLE' => 'Configuración del Sitio',
    'LBL_SITECFG_URL' => 'URL de la Instancia de SuiteCRM',
    'LBL_SITECFG_USE_DEFAULTS' => '¿Utilizar valores por defecto?',
    'LBL_START' => 'Comenzar',
    'LBL_STEP' => 'Paso',
    'LBL_TITLE_WELCOME' => 'Bienvenido a SuiteCRM ',
    'LBL_WELCOME_1' => 'Este instalador crea las tablas de la base de datos de SuiteCRM y establece los valores de configuración que ustede necesita para comenzar. El proceso completo debería tomar aproximadamente diez minutos.',
    'LBL_WELCOME_2' => 'Para obtener documentación de la instalación, por favor visite los <a href="https://suitecrm.com/suitecrm/forum/suite-forum" target="_blank">Foros de apoyo SuiteCRM</a>.',
    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Seleccione su idioma',
    'LBL_WELCOME_SETUP_WIZARD' => 'Asistente de Configuración',
    'LBL_WELCOME_TITLE_WELCOME' => 'Bienvenido a SuiteCRM ',
    'LBL_WELCOME_TITLE' => 'Asistente de Configuración de SuiteCRM',
    'LBL_WIZARD_TITLE' => 'Asistente de Configuración de SuiteCRM: paso ',
    'LBL_YES' => 'Sí',
);
