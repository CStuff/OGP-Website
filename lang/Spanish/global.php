<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) Copyright (C) 2008 - 2013 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */
#####################################################################
# Spanish language variables
#
#####################################################################

define('lang_charset', "UTF-8");
define('already_logged_in_redirecting_to_dashboard', "Sesión iniciada, redirgiendo");
define('logging_in', "Entrando");
define('redirecting_in', "Redirigiendo en");
define('refresh_page', "Actualizar Pagina");
define('no_rights', "No tiene permisos de acceso.");
define('welcome', "Bienvenido");
define('logout', "Desconectar");
define('logout_message', "Desconectado");
define('support', "Soporte");
define('password', "Contraseña");
define('login', "Usuário");
define('login_button', "Entrar");
define('solve_captcha', "Human Check");
define('lost_passwd', "Password perdido?");
define('no_db_connection', "Imposible conectar con la base de datos.");
define('bad_login', "Identificación incorrecta.");
define('not_logged_in', "Usted no esta conectado en este momento.");
define('remove_install', "Por seguridad, elimine install.php.");
define('agent_offline', "El agente OGP no responde.");
define('logged_in', "Ha entrado como");
define('delete', "Borrar");
define('edit', "Editar");
define('actions', "Acciones");
define('invalid_subpage', "Pagina subyacente invalida.");
define('invalid_home_id', "Id de home invalida.");
define('note', "NOTA");
define('hint', "PISTA");
define('yes', "Si");
define('no', "No");
define('on', "On");
define('off', "Off");
define('lang', "Idioma");

// datase vars.
define('db_error_invalid_host', "Servidor de base de datos inválido.");
define('db_error_invalid_user_and_pass', "Usuário y contraseña de base de datos inválido.");
define('db_error_invalid_database', "Base de datos no valida.");
define('db_unknown_error', "mysql, error desconocido: %s");
define('db_error_module_missing', "Error en el módulo de base de datos para PHP.");

// home.php
define('invalid_login_information', "Identificación no valida.");
define('failed_to_read_config', "No se pudo leer el archivo de configuración.");
define('account_expired', "Su cuenta a caducado.");
define('contact_admin_to_enable_account', "Contacte con un administrador para reactivar su cuenta.");
define('maintenance_mode_on', "La pagina se desactivo por mantenimiento, disculpen las molestias.");

// includes/navig.php
define('module_not_installed', "El módulo no esta instalado.");

// Common
define('no_access_to_home', "No tiene acceso a esta home");
define('not_available', " ");
define('offline', "Parado");
define('online', "Activo");
define('invalid_url', "Dirección URL invalida");

// User Menu
define('gamemanager', "Gestión");
define('game_monitor', "Monitor");
define('dashboard', "Dashboard");
define('user_addons', "Añadidos");
define('ftp', "FTP");
define('shop', "Tienda");
define("TS3Admin", "TS3Admin");

// Admin Menu
define('administration', "Administración");
define('config_games', "Configurar juegos");
define('modulemanager', "Módulos");
define('server', "Servidores remotos");
define('settings', "Opciones");
define('themes', "Ajustes de tema");
define('user_admin', "Usuários");
define('sub_users', "Sub-Usuarios");
define('show_groups', "Grupos");
define('user_games', "Servidores de Juegos");
define('addons_manager', "Gestión de Añadidos");
define('ftp_admin', "Ususários FTP");
define('orders', "Pedidos");
define('services', "Servicios");
define('update', "Actualización");
define('shop_settings', "Configurar Tienda");
define('lgsl', "LGSL");
define('lgsl_admin', "LGSL Admin");
define('rcon', "RCON");
define('extras', "Extras");
define('watch_logger', "Ver Logger");

// Server Selector
define('show', "Mostrar");
define('show_all', "Mostrar Todos Los Servidores");
define("db_error_invalid_db_type", "Tipo de base de datos incorrecto.");
define("logging_out_10", "Saliendo en 10");
define("invalid_redirect", "Identificación incorrecta, redireccionando");
define("login_title", "Identificacion");
define("xml_file_not_valid", "Archivo XML no valido");
define("unable_to_load_xml", "Imposible cargar archivo XML");
define("cur_theme", "Tema %s");
define("copyright", "Copyright");
define("all_rights_reserved", "Todos los derechos reservados");
define("queries_executed", "consultas ejecutadas."); 

// Get home path size
define('get_size', "Obtener tamaño");
define('total_size', "Tamaño total");
define('litefm_settings', "Configuración LiteFM");
define('assign_expiration_date', 'Assign expiration date');
define('assign_expiration_date_info', 'Once it expires the server is unassigned but not removed.');
define('server_expiration_date', 'Server expiration date');
define('server_expiration_date_info', 'Once it expires the server is removed (database and files).');
define('set_expiration_date', 'Set expiration date');
?>
