<?php
if(!defined('CC_INI_SET')){ die("Access Denied"); }
if(!isset($langBully)) require("language".CC_DS. $config['defaultLang'].CC_DS."config.php");
$lv = !$langBully ?  "lang" : "bully";
${$lv}['admin_common'] = array(
'misc_pages' => " Seiten ",
'yes' => "Ja",
'update' => "Aktualisieren",
'no' => "Nein",
'edit' => "Bearbeiten",
'delete' => "L&ouml;schen",
'disabled' => "Deaktiviert",
'enabled' => "Aktiviert",
'disable' => "Deaktivieren",
'enable' => "Aktivieren",
'add' => "Hinzuf&uuml;gen",
'edit' => "Bearbeiten",
'resize' => "Gr&ouml;&szlig;e anpassen",
'delete_q' => "Sind Sie sicher, dass Sie mit dem L&ouml;schen fortfahren wollen?",
'sure_q' => "Sind Sie sicher, dass Sie fortfahren wollen?",
'add' => "Hinzuf&uuml;gen",
'add_new' => "Neues hinzuf&uuml;gen",
'write' => "Schreiben",
'read' => "Lesen",
'na' => "Nicht zutreffend", // as in not applicable
'all' => "ALLE",
'remove' => "Entfernen",
'hide' => "Ausblenden",
'show' => "Anzeigen",
'please_wait' => "Bitte warten Sie ...",
'other_announcements' => "Letzte Mitteilungen",
'other_no_announcements' => "Es gibt zur Zeit keine Mitteilungen.",
'other_pending_orders' => "Bestellungen anstehend/ in Bearbeitung",
'other_product_reviews' => "Produktbewertung",
'other_stock_warnings' => "Bestandswarnung",
'other_no_pending_orders' => "Keine Auftr&auml;ge anstehend.",
'other_no_reviews_moderate' => "Keine neuen Bewertungen zum Moderieren.",
'other_no_low_stock' => "Kein niedriger Bestand.",
'ip' => "IP:",
'blocked' => "Authentifizierung aus Sicherheitsgr&uuml;nden f&uuml;r %1\$s Minuten gesperrt.",
'other_global_risk' => "ACHTUNG: Die Hauptkonfigurationsdatei 'includes/global.inc.php' ist nicht schreibgesch&uuml;tzt und Ihr Shop ist in Gefahr. Bitte &auml;ndern Sie die Zugriffsrechte und richten Sie einen Schreibschutz ein.",
'setup_folder_exists' => "ACHTUNG: Der CubeCart-Installationsordner 'setup/' befindet sich auf Ihrem Server. Bitte diesen unverz&uuml;glich l&ouml;schen, da dieser eine m&ouml;gliche Gef&auml;hrdung f&uuml;r Ihren Shop darstellt.",
'other_401' => "Fehler 401: Sie besitzen keine Berechtigung zum Zugriff auf diese Seite. Bitten Sie einen Super-User um Berechtigung.",
'other_welcome_note' => "Willkommen beim CubeCart&trade; Admin-Kontrollpanel",
'other_last_login_failed' => "Letztes Login von %1\$s erfolglos am %2\$s",
'other_last_login_success' => "Letztes Login von %1\$s am %2\$s",
'other_store_overview' => "Shop-&Uuml;berblick:",
'other_version' => "Version:",
'other_visit_cc' => "Besuchen Sie den CubeCart Downloads Server",
'other_no_products' => "Anzahl an Produkten:",
'other_no_customers' => "Anzahl an Kunden:",
'other_img_upload_size' => "Max. Ordnergr&ouml;&szlig;e beim Hochladen von Bildern:",
'other_no_orders' => "Anzahl an Bestellungen:",
'other_quick_search' => "Schnellsuche:",
'other_order_no' => "Bestellnummer:",
'other_search_now' => "Suche starten",
'other_customer' => "Kunde:",
'other_login_failed' => "Fehler beim Login! Falscher Username oder falsches Passwort.",
'other_new_pass_sent' => "Sie haben ein neues Passwort per E-Mail erhalten",
'other_no_admin_sess' => "Es wurde keine Verwaltungssitzung gefunden.",
'other_login_fail_2' => "Fehler beim Login. Bitte erneut versuchen.",
'other_login_below' => "Bitte hier einloggen:",
'other_username' => "Username:",
'other_password' => "Passwort:",
'other_login_ssl' => "Sicheres Login verwenden:",
'other_request_pass' => "Passwort beantragen",
'other_login' => "Login",
'other_pass_reset_failed' => "Fehler beim Zur&uuml;cksetzen des Passworts.",
'other_enter_email_below' => "Bitte geben Sie Ihre E-Mailadresse ein:",
'other_email_address' => "E-Mailadresse:",
'other_send_pass' => "Passwort zuschicken",
'other_store_inventory' => "Bestands&uuml;bersicht:",
'nav_transaction_logs' => "Transaktionsprotokolle",
'nav_edit_langs' => "Sprachen",
'nav_coupons' => "Coupons",
'nav_gift_certificates' => "Geschenkgutscheine",
'nav_maintenance' => "Wartung",
'nav_database' => "Datenbank",
'nav_backup' => "Sichern",
'nav_thumbnails' => "Thumbnails",
'nav_rebuild' => "Wieder aufbauen &amp; Z&auml;hlung wiederholen",
'nav_admin_logs' => "Administrator-Protokolle",
'nav_permission_error' => "Sie besitzen kein Zugriffsrecht.",
'nav_navigation' => "Navigation",
'nav_admin_home' => "Administrator Home",
'nav_store_home' => "Shop Home",
'nav_store_config' => "Shop Config",
'nav_gen_settings' => "Allgemeine Einstellungen",
'nav_taxes' => "Steuern",
'nav_logo' => "Logo",
'nav_countries_zones' => "L&auml;nder &amp; Zonen",
'nav_currencies' => "W&auml;hrungen",
'nav_modules' => "Module",
'nav_shipping' => "Versandarten",
'nav_gateways' => "Zahlungsmethoden",
'nav_affiliates' => "Affiliate-Verfolgung",
'nav_alt_checkout' => "Alternative Bezahlung",
'nav_catalog' => "Katalog",
'nav_view_products' => "Produkt anzeigen",
'nav_add_product' => "Produkt hinzuf&uuml;gen",
'nav_product_options' => "Produktoptionen",
'nav_prod_reviews' => "Produktbewertungen",
'nav_view_categories' => "Kategorien anzeigen",
'nav_add_categories' => "Kategorie hinzuf&uuml;gen",
'nav_import_cat' => "Katalog importieren",
'nav_export_cat' => "Katalog exportieren",
'nav_customers' => "Kunden",
'nav_view_customers' => "Kunden anzeigen",
'nav_email_customers' => "E-Mail Kunden",
'nav_orders' => "Bestellungen",
'nav_file_manager' => "Dateimanager",
'nav_manage_images' => "Bilder verwalten",
'nav_upload_images' => "Bilder hochladen",
'nav_statistics' => "Statistik",
'nav_view_stats' => "Statistik anzeigen",
'nav_documents' => "Dokumente",
'nav_homepage' => "Homepage",
'nav_site_docs' => "Seiten-Dokumente",
'nav_misc' => "Verschiedenes",
'nav_server_info' => "Server-Info",
'nav_admin_users' => "Administrator Users",
'nav_administrators' => "Administratoren",
'nav_admin_sessions' => "Admininistratorsitzungen",
'incs_administration' => "Administration",
'incs_logged_in_as' => "Angemeldet als:",
'incs_logout' => "Abmelden",
'incs_change_pass' => "Passwort &auml;ndern",
'incs_error_editing' => "Fehler bei der Bearbeitung. Eingabedaten waren kein Array.",
'incs_config_updated' => "Konfiguration aktualisiert. Bitte &uuml;berpr&uuml;fen Sie, ob die Dateiberechtigungen richtig zur&uuml;ckgesetzt wurden.",
'incs_cant_write' => "'%1\$s' konnte nicht zum Schreiben ge&ouml;ffnet werden.<br />Versuchen Sie, den CHMOD-Wert auf 0777 zu setzen. Vergessen Sie nicht, ihn danach wieder auf 0644 zur&uuml;ckzusetzen!",
'incs_db_config_updated' => "Konfiguration aktualisiert.",
'incs_db_cant_write' => "Es wurden keine &Auml;nderungen vorgenommen!",
'incs_select_above' => "Oben ausw&auml;hlen",
'close_window' => "Fenster schlie&szlig;en",
'history_back' => 'Zur&uuml;ck',
'order_details' => 'Bestelldetails anzeigen'
);
?>