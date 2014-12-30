<?php
if(!defined('CC_INI_SET')){ die("Access Denied"); }
if(!isset($langBully)) require("language".CC_DS. $config['defaultLang'].CC_DS."config.php");
$lv = !$langBully ?  "lang" : "bully";
${$lv}['admin_common'] = array(
'misc_pages' => " p&aacute;ginas ",
'yes' => "S&iacute;",
'update' => "Actualizar",
'no' => "No",
'edit' => "Editar",
'delete' => "Eliminar",
'disabled' => "Deshabilitado",
'enabled' => "Habilitado",
'disable' => "Deshabilitar",
'enable' => "Habilitar",
'add' => "A&ntilde;adir",
'edit' => "Editar",
'resize' => "Cambiar tama&ntilde;o",
'delete_q' => "&iquest;Est&aacute; seguro de que desea eliminar esto?",
'sure_q' => "&iquest;Est&aacute; seguro de que desea hacer esto?",
'add' => "A&ntilde;adir",
'add_new' => "A&ntilde;adir Nuevo",
'write' => "Escribir",
'read' => "Leer",
'na' => "N/D", // as in not applicable
'all' => "TODO",
'remove' => "Quitar",
'hide' => "Esconder",
'show' => "Mostrar",
'please_wait' => "Por favor espere ...",
'other_announcements' => "&Uacute;ltimos Anuncios",
'other_no_announcements' => "No hay anuncios por el momento.",
'other_pending_orders' => "Pedidos Pendientes / En Proceso",
'other_product_reviews' => "Rese&ntilde;as de Producto",
'other_stock_warnings' => "Advertencias de Stock",
'other_no_pending_orders' => "No hay pedidos pendientes.",
'other_no_reviews_moderate' => "No hay nuevas rese&ntilde;as para moderar.",
'other_no_low_stock' => "No hay stock, su nivel es bajo.",
'ip' => "IP:",
'blocked' => "Autenticaci&oacute;n bloqueada por %1\$s minutos por razones de seguridad.",
'other_global_risk' => "ADVERTENCIA: El archivo principal de configuraci&oacute;n 'includes/global.inc.php' est&aacute; editable y su tienda est&aacute; en riesgo. Por favor cambie los permisos de archivo para que sea de s&oacute;lo lectura.",
'setup_folder_exists' => "ADVERTENCIA: La carpeta de configuraci&oacute;n de CubeCart 'setup/' est&aacute; en su servidor. Debe eliminarse de inmediato ya que su tienda est&aacute; en riesgo.",
'other_401' => "Error 401: No tiene permiso para acceder a esa p&aacute;gina. Por favor p&iacute;dale a uno de los super usuarios que le permita el acceso.",
'other_welcome_note' => "Bienvenido al Panel de Control de Administraci&oacute;n de CubeCart&trade;",
'other_last_login_failed' => "&Uacute;ltimo acceso de %1\$s, fall&oacute; el %2\$s",
'other_last_login_success' => "&Uacute;ltimo acceso de %1\$s, el %2\$s",
'other_store_overview' => "Descripci&oacute;n General de la Tienda:",
'other_version' => "Versi&oacute;n:",
'other_visit_cc' => "Visite el Servidor de Descargas de CubeCart",
'other_no_products' => "Cantidad de Productos:",
'other_no_customers' => "Cantidad de Clientes:",
'other_img_upload_size' => "Tama&ntilde;o de carpeta de carga de im&aacute;genes:",
'other_no_orders' => "Cantidad de Pedidos:",
'other_quick_search' => "B&uacute;squeda R&aacute;pida:",
'other_order_no' => "N&uacute;mero de Pedido:",
'other_search_now' => "Buscar Ahora",
'other_customer' => "Cliente:",
'other_login_failed' => "&iexcl;Acceso Fallido! El nombre de usuario ola contrase&ntilde;a son incorrectos.",
'other_new_pass_sent' => "Se ha enviado por email una nueva contrase&ntilde;a a",
'other_no_admin_sess' => "No se encontr&oacute; ninguna sesi&oacute;n de administraci&oacute;n.",
'other_login_fail_2' => "Acceso fallido. Por favor intente de nuevo.",
'other_login_below' => "Por favor acceda abajo:",
'other_username' => "Nombre de usuario:",
'other_password' => "Contrase&ntilde;a:",
'other_login_ssl' => "Utilice acceso seguro:",
'other_request_pass' => "Solicitar Contrase&ntilde;a",
'other_login' => "Acceder",
'other_pass_reset_failed' => "No se pudo restablecer la contrase&ntilde;a.",
'other_enter_email_below' => "Por favor ingrese su direcci&oacute;n de email abajo:",
'other_email_address' => "Direcci&oacute;n de Email:",
'other_send_pass' => "Enviar Contrase&ntilde;a",
'other_store_inventory' => "Resumen de Inventario:",
'nav_transaction_logs' => "Historiales de Transacciones",
'nav_edit_langs' => "Idiomas",
'nav_coupons' => "Cupones",
'nav_gift_certificates' => "Certificados de Regalos",
'nav_maintenance' => "Mantenimiento",
'nav_database' => "Base de Datos",
'nav_backup' => "Copia de Seguridad",
'nav_thumbnails' => "Im&aacute;genes en Miniatura",
'nav_rebuild' => "Reconstruir &amp; Recontar",
'nav_admin_logs' => "Historiales de Admin",
'nav_permission_error' => "No tiene permiso para acceder a esto.",
'nav_navigation' => "Navegaci&oacute;n",
'nav_admin_home' => "Inicio Admin",
'nav_store_home' => "Inicio Tienda",
'nav_store_config' => "Config de Tienda",
'nav_gen_settings' => "Configuraciones Generales",
'nav_taxes' => "Impuestos",
'nav_logo' => "Logo",
'nav_countries_zones' => "Pa&iacute;ses &amp; Zonas",
'nav_currencies' => "Monedas",
'nav_modules' => "M&oacute;dulos",
'nav_shipping' => "M&eacute;todos de Env&iacute;o",
'nav_gateways' => "M&eacute;todos de Pago",
'nav_affiliates' => "Seguimiento de Afiliado",
'nav_alt_checkout' => "Compras Alternativas",
'nav_catalog' => "Cat&aacute;logo",
'nav_view_products' => "Ver Productos",
'nav_add_product' => "A&ntilde;adir Producto",
'nav_product_options' => "Opciones de Productos",
'nav_prod_reviews' => "Rese&ntilde;as de Producto",
'nav_view_categories' => "Ver Categor&iacute;as",
'nav_add_categories' => "A&ntilde;adir Categor&iacute;a",
'nav_import_cat' => "Importar Cat&aacute;logo",
'nav_export_cat' => "Exportar Cat&aacute;logo",
'nav_customers' => "Clientes",
'nav_view_customers' => "Ver Clientes",
'nav_email_customers' => "Enviar emial a Clientes",
'nav_orders' => "Pedidos",
'nav_file_manager' => "Administrador de Archivos",
'nav_manage_images' => "Administrar Im&aacute;genes",
'nav_upload_images' => "Cargar Im&aacute;genes",
'nav_statistics' => "Estad&iacute;sticas",
'nav_view_stats' => "Ver Estad&iacute;sticas",
'nav_documents' => "Documentos",
'nav_homepage' => "P&aacute;gina Principal",
'nav_site_docs' => "Documentos del Sitio",
'nav_misc' => "Misc",
'nav_server_info' => "Informaci&oacute;n de Servidor",
'nav_admin_users' => "Administrar Usuarios",
'nav_administrators' => "Administradores",
'nav_admin_sessions' => "Sesiones de Admin",
'incs_administration' => "Administraci&oacute;n",
'incs_logged_in_as' => "Sesi&oacute;n iniciada como:",
'incs_logout' => "Cerrar Sesi&oacute;n",
'incs_change_pass' => "Cambiar Contrase&ntilde;a",
'incs_error_editing' => "Error al tratar de editar. Los datos ingresados no eran una secuencia. ",
'incs_config_updated' => "Configuraci&oacute;n Actualizada. Por favor aseg&uacute;rese de que el permiso de archivo se hubiera revertido de forma correcta.",
'incs_cant_write' => "No se pudo abrir '%1\$s' para escritura.<br />Intente cambiando el valor CHMOD a 0777. &iexcl;Recuerde revertirlo a 0644 posteriormente!",
'incs_db_config_updated' => "Configuraci&oacute;n Actualizada.",
'incs_db_cant_write' => "&iexcl;No se han realizado cambios!",
'incs_select_above' => "Seleccionar de Arriba",
'close_window' => "Cerrar Ventana",
'history_back' => 'Atr&aacute;s',
'order_details' => 'Ver detalles del pedido',
'nav_module_installer' => 'Instalador del M&oacute;dulo',
);
?>
