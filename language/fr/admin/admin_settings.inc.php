<?php
$lv = !$langBully ?  "lang" : "bully";
${$lv}['admin'] = array(
'settings_force_ssl_desc' => "Ceci activ&eacute;, toutes les pages seront servies sur SSL au lieu de ceux requis uniquement.",
'settings_zero_disabled' => "(Entrer '0' d&eacute;sactive cette fonction)",
'settings_order_expire' => "Annule automatiquemen les nouvelles commandes (En attente) apr&egrave;s un certain temps:",
'settings_stock_replace_time' => "augmente le niveau du stock une seule fois si le statut de la commande est chang&eacute; en l'un de ce qui suit?",
'settings_ftp_seo_title' => "G&eacute;n&eacute;ration de fichiers PHP avec FTP",
'settings_ftp_complete' => "Op&eacute;ration d'enregistrement es fichiers FTP est compl&egrave;te.",
'settings_writing_docs' => "Op&eacute;ration d'enregistrement des documents du site &hellip;",
'settings_writing_cats' => "Op&eacute;ration d'enregistrement des pages de la cat&eacute;gorie&hellip;",
'settings_writing_taf' => "Op&eacute;ration d'enregistrement des pages Envoyez &agrave; un ami&hellip;",
'settings_seo_htaccess' => "Pour utiliser soit <em>&quot;Apache Rewrite&quot;</em> ou <em>&quot;Apache Directory 'Loopback' et ForceType&quot;</em>, il est requis qu'un fichier <em>&quot;.htaccess&quot;</em> soit cr&eacute;&eacute; dans le r&eacute;pertoire racine de votre magasin. Pour ce faire, veuillez ouvrir un r&eacute;dacteur de texte comme Notepad ou TextEdit, copiez et collez le contenu de la zone oppos&eacute;e du texte dans le r&eacute;dacteur et sauvegardez-le en tant que <em>&quot;htaccess.txt&quot;</em>. T&eacute;l&eacute;versez ce fichier dans votre serveur et renommez-le &agrave; <em>&quot;.htaccess&quot;</em>.</p>
<p>si un message d'erreur d'un serveur est affich&eacute;, veuillez effacer le fichier .htaccess et utiliser soit <em>&quot;Utilisez les pages FTP de FTP g&eacute;n&eacute;r&eacute; &quot;</em> ou <em>&quot;R&eacute;pertoire Apache 'Loopback'&quot;</em>.",
'settings_ftp_created' => "Cr&eacute;&eacute; %1\$s",
'settings_ftp_writeing' => "Op&eacute;ration d'enregistrement des pages du produit&hellip;",
'settings_ftp_conn_fail' => "Ne peut pas connecter &agrave; votre serveur de FTP. V&eacute;rifiez que les param&egrave;tres de FTP sont corrects.",
'settings_ftp_server' => "Serveur de FTP:",
'settings_ftp_user' => "Utilisateur de FTP:",
'settings_ftp_pass' => "Mot de passe de FTP:",
'settings_ftp_dir' => "R&eacute;pertoire racine de FTP:",
'settings_seo_cat_cat_prod' => "Cat&eacute;gorie->sous cat&eacute;gorie-> nom du produit",
'settings_seo_prod_name_cat_cat' => "Nom du produit->sous cat&eacute;gorie->cat&eacute;gorie",
'settings_meta_browser_cat_and_prod' => "(noms de la cat&eacute;gorie et du produit)",
'settings_meta_browser_title_format' => "Format du titre du navigateur:",
'settings_meta_disabled' => "D&eacute;sactivez cette fonction et utilisez m&eacute;ta-donn&eacute;es globales",
'settings_meta_combined' => "Combinez vec m&eacute;ta-donn&eacute;es globales (Recommand&eacute;)",
'settings_meta_or_glob_desc_key' => "Annulez les m&eacute;ta-donn&eacute;es globales avec la description et les mots cl&eacute; uniquement",
'settings_meta_behaviour_desc' => "Ceci activ&eacute;, les m&eacute;ta-donn&eacute;es (ou m&eacute;ta-balises) peuvent &ecirc;tre sp&eacute;cifi&eacute;es pour chaque document de site, cat&eacute;gorie et produit.",
'settings_meta_behaviour' => "Comportement des m&eacute;ta-donn&eacute;es:",
'settings_seo_generate_pages_inst' => "<a href='%1\$s' class='txtLink'>G&eacute;n&eacute;rez les pages de PHP maintenant</a>. Ceci peut durer un peu, un message sera affich&eacute; lorsqu'il est compl&eacute;t&eacute;. Veuillez vous assurer que vous avez compl&eacute;t&eacute; les informations d'acc&egrave;s &agrave; FTP &agrave; cette page. Notez que cela cr&eacute;era les r&eacute;pertoires et les fichiers de permission 755 (sur les machines Linux/Unix) dans votre dossier CubeCart.",
'settings_seo_generate_pages_desc' => "Pour utiliser les pages PHP g&eacute;n&eacute;r&eacute;es par FTP, vous aurez besoin de les g&eacute;n&eacute;rer &agrave; nouveau chaque fois que vous ajoutez de nouveaux documents/cat&eacute;gories/produits ou modifiez l'un de leurs titres. Si vous ne le faites pas, ces fichiers et les donn&eacute;es actuelles stock&eacute;es ne seront pas synchronis&eacute;es.",
'settings_seo_generate_pages' => "G&eacute;n&eacute;rez les pages:",
'settings_seo_method_mod_rewrite' => "Apache RewriteRule pris en charge (Recommand&eacute;)",
'settings_seo_method_lookback_force' => "R&eacute;pertoire Apache 'lookback' et ForceType pris en charge",
'settings_seo_method_lookback' => "R&eacute;pertoire Apache 'lookback' pris en charge uniquement",
'settings_seo_method_ftp' => "Utilisez les pages PHP g&eacute;n&eacute;r&eacute;es par FTP (Si toute autre m&eacute;thode &eacute;choue)",
'settings_seo_method' => " La m&eacute;thode que vous choisissez d&eacute;pend du type de serveur CubeCart qui fonctionne et de sa configuration. Si aucun d'eux ne fonctionne, veuillez visiter notre <a href='https://support.cubecart.com' target='_blank'  class='txtLink'>support helpdesk</a>.",
'settings_url_method' => "M&eacute;thode de cr&eacute;ation d'URL:",
'settings_seo' => "Optimisation du moteur de recherche",
'settings_use_seo' => "Utilisez le moteur de recherche convivial d'URL?",
'settings_proxy_host' => "H&ocirc;te mandat&eacute;:",
'settings_proxy_port' => "Port mandat&eacute;:",
'settings_use_proxy' => "Le serveur est associ&eacute; &agrave; un mandataire?",
'settings_proxy' => "Serveur mandataire",
'use_cache' => "Utilisez la requ&ecirc;te d'exploitation de l'ant&eacute;m&eacute;moire SQL (Recommand&eacute;!)",
'show_empty_cat' => 'Affichez les cat&eacute;gories vides?',
'disable_alert_email' => 'D&eacute;sactivez les alertes de la nouvelle commande?',
'settings_debug' => "Activez la sortie du d&eacute;bogage?",
'settings_debug_desc' => "(Informations de sorties de d&eacute;bogage sur la page. Utiles pour le d&eacute;veloppement.)",
'pop_products_source' => "Source pour donn&eacute;es de produits tr&egrave;s demand&eacute;s:",
'pop_products_views' => "Nombre de visualisations",
'pop_products_sales' => "Nombre de ventes",
'settings_autoupdate' => "Actualisation automatique",
'settings_top' => "Partie sup&eacute;rieure",
'settings_jump_to' => "Sautez &agrave;:",
'settings_stock_warn_type' => "M&eacute;thode d'avertissement sur le stock:",
'settings_stock_warn_level' => "Avertissement sur le niveau g&eacute;n&eacute;ral du stock:",
'settings_stock_global_warn' => "G&eacute;n&eacute;ral(Utilise la valeur ci-dessous)",
'settings_stock_product_warn' => "Par produit (Etabli lors de l'ajout/modification du produit)",
'settings_stock_warn_level_desc' => "(Lorsque le niveau du stock est au dessous de ce nombre, un message d'avertissement sera affich&eacute; sur la page d'accueil admin)",
'settings_rte_height' => "Hauteur:",
'settings_ref_only' => "Cette zone de saisie de texte est aux fins de r&eacute;f&eacute;rence uniquement. Pour changer la valeur, veuillez modifier includes/global.inc.php",
'settings_ob_gzhandler' => "Activez la m&eacute;moire-tampon de sortie gzip?",
'settings_ob_gzhandler_desc' => "(Ceci peut r&eacute;duire consid&eacute;rablement la dimension de la page de sortie et par cons&eacute;quent la bande passante)",
'settings_latestNewsRSS' => "URL au RSS/XML des derni&egrave;res nouvelles aliment&eacute;:",
'settings_excl_tax' => "(excl. imp&ocirc;t)",
'settings_tax_details_upd_success' => "Les dossiers de d&eacute;tails d'imp&ocirc;t ont &eacute;t&eacute; actualis&eacute;s avec succ&egrave;s",
'settings_tax_details_upd_failure' => "Aucun dossier de d&eacute;tail d'imp&ocirc;t n'a besoin d'&ecirc;tre actualis&eacute;",
'settings_tax_details_upd_error' => "Les dossiers de d&eacute;tail d'imp&ocirc;t n'ont pu &ecirc;tre actualis&eacute;s",
'settings_tax_details_del_success' => "D&eacute;tails d'imp&ocirc;t effac&eacute;s avec succ&egrave;s",
'settings_tax_details_del_failure' => "Les d&eacute;tails d'imp&ocirc;t n'ont pas &eacute;t&eacute; effac&eacute;s",
'settings_tax_rates_add_success' => "Le taux /zone d'imp&ocirc;t a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s",
'settings_tax_rates_add_failure' => " Le taux /zone d'imp&ocirc;t n'a pas pu &ecirc;tre ajout&eacute; � Le taux a d&eacute;j&agrave; &eacute;t&eacute; d&eacute;fini pour cette combinaison d'imp&ocirc;t, de classe et de zone",
'settings_tax_rates_upd_success' => "Les dossiers de taux /zone d'imp&ocirc;t ont &eacute;t&eacute; actualis&eacute;s avec succ&egrave;s",
'settings_tax_rates_upd_failure' => "Aucun dossier de taux /zone d'imp&ocirc;t n'a besoin d'&ecirc;tre actualis&eacute;",
'settings_tax_rates_upd_error' => "Le dossier de taux /zone d'imp&ocirc;t n'a pu &ecirc;tre actualis&eacute; - Le taux a d&eacute;j&agrave; &eacute;t&eacute; d&eacute;fini pour cette combinaison d'imp&ocirc;t, de classe et de zone",
'settings_tax_rates_del_success' => "Le taux /zone d'imp&ocirc;t a &eacute;t&eacute; effac&eacute; avec succ&egrave;s",
'settings_tax_rates_del_failure' => "Le taux /zone d'imp&ocirc;t n'a pas &eacute;t&eacute; effac&eacute;",
'settings_multi_tax_config' => "Imp&ocirc;ts flexibles",
'settings_multi_tax_info' => "La fonctionnalit&eacute; d'Imp&ocirc;ts Flexibles vous permettra de facturer l'imp&ocirc;t dans de nombreux pays, ou de facturer des imp&ocirc;ts multiples (par exemple GST et PST canadiens), ou de facturer des taux fiscaux diff&eacute;rents bas&eacute;s sur le pays et le comt&eacute;/&eacute;tat/zone.",
'settings_status_help' => " Pour utiliser la fonctionnalit&eacute; d'Imp&ocirc;ts Flexibles, vous devrez avoir le statut &eacute;tabli &agrave; &quot ;Enabled&quot;.",
'settings_mode_help' => " Il peut &ecirc;tre recommand&eacute; de commencer par le mode &eacute;tabli &agrave; &quot;Testing Configuration&quot; jusqu'&agrave; ce que vous ayez confirm&eacute; que vos Imp&ocirc;ts Flexibles sont configur&eacute;s correctement.",
'settings_status' => "Statut:",
'settings_enabled' => "Activ&eacute;",
'settings_disabled' => "D&eacute;sactiv&eacute;",
'settings_mode' => "Mode:",
'settings_live' => "Magasin en ligne",
'settings_testing' => "Configuration de test",
'settings_update' => "Actualisez",
'settings_cancel' => "Annulez",
'settings_update_all' => "Actualisez Tous",
'settings_popup' => "Montrez/Modifiez les taux d'imp&ocirc;t",
'settings_tax_classes' => "Classes d'imp&ocirc;t",
'settings_tax_details' => "D&eacute;tails d'imp&ocirc;t",
'settings_add_edit_delete' => "Ajoutez/Modifiez/Effacez",
'settings_show_help' => "[?] Montrez Aide",
'settings_tax_warn_testing' => "NOTE: Avec mode &eacute;tabli &agrave; 'Testing Configuration ', des informations fiscales d&eacute;taill&eacute;es seront g&eacute;n&eacute;r&eacute;es pendant le contr&ocirc;le &agrave; l'Etape 4(S&eacute;lection d'exp&eacute;dition) pour vous aider &agrave; v&eacute;rifier que vos imp&ocirc;ts sont configur&eacute;s correctement. N'oubliez pas de changer le mode &agrave; 'Stock En Ligne' avant que vous n'ouvriez votre magasin aux clients.",
'settings_tax_details_help' => "<strong>Name:</strong> Un nom pour votre r&eacute;f&eacute;rence. Chaque rang&eacute;e doit avoir un nom unique. Exemple: GST<br/><br/>
	<strong>Display As:</strong> C'est le nom de l'imp&ocirc;t tel que vous voulez qu'il soit affich&eacute; sur les pages de web de contr&ocirc;le et sur les factures. Exemple: Imp&ocirc;t (GST)<br/><br/>
	<strong>Display Reg. Number:</strong> (Facultatif) Si vous voulez que les num&eacute;ros d'enregistrement d'imp&ocirc;t soient affich&eacute;s sur vos factures, entrez-les ensuite tel que vous voulez qu'ils soient affich&eacute;s. Exemple: GST # 123-456-789<br/><br/>
	<strong>Status:</strong> Vous pouvez utiliser le statut pour d&eacute;sactiver un imp&ocirc;t particulier.",
'settings_name' => "Nom: (doit &ecirc;tre unique)",
'settings_display_as' => "Affich&eacute; comme:",
'settings_reg_number' => "Affichez le num&eacute;ro de R&eacute;g.:",
'settings_deleted' => "(effac&eacute;)",
'settings_filter_by_country' => "Affichage de filtre par pays",
'settings_tax_rates' => "Taux/Zones d'imp&ocirc;t",
'settings_tax_rates_help_class' => "Chaque m&eacute;thode de produit et d'exp&eacute;dition seront associ&eacute;s &agrave; une classe fiscale unique. D'habitude, toutes les m&eacute;thodes de produits et des d'exp&eacute;dition seront associ&eacute;s &agrave; la classe \"Standard Tax\" et devrait &eacute;tablir tous les taux/zones d'imp&ocirc;t avec cette classe d'imp&ocirc;t.",
'settings_tax_rates_help_country' => "",
'settings_tax_rates_help_tax' => "Ceci se r&eacute;f&egrave;re &agrave; l'un des d&eacute;tails d'imp&ocirc;t &eacute;tablis sur la page ant&eacute;rieure. Exemple: GST",
'settings_tax_rates_help_rate' => "",
'settings_tax_rates_help_apply' => "Si l'imp&ocirc;t devrait &ecirc;tre appliqu&eacute; aux marchandises (ST), exp&eacute;dition (S&amp;H), ou aux deux (ST &amp; S&amp;H)?",
'settings_tax_rates_help_active' => "Utilisez ce param&egrave;tre si vous souhaitez activer/d&eacute;sactiver des taux/zones d'imp&ocirc;t sp&eacute;cifiques. Par exemple, les magasins canadiens peuvent avoir besoin d'activer/d&eacute;sactiver PST dans des provinces sp&eacute;cifiques.",
'settings_please_setup_tax_details' => "NOTE: Veuillez configurer les d&eacute;tails d'imp&ocirc;t d'abord ",
'settings_class' => "Classe:",
'settings_state' => "Comt&eacute;/Etat/Zone:",
'settings_rate' => "Taux (%):",
'settings_apply_to' => "Appliquer &agrave;:",
'settings_active' => "Actif:",
'settings_goods_and_shipping' => "ST + S&amp;H",
'settings_goods_only' => "ST",
'settings_shipping_only' => "S&amp;H",
'settings_update_all_rates' => "(Pour actualiser tous les taux et les param&egrave;tres actifs/inactifs)",
'settings_richTextEditor' => "Eteignez le r&eacute;dacteur de texte riche?",
'settings_floodControl' => "Activez Script/Contr&ocirc;le de logiciel de r&eacute;f&eacute;rence robot-r&eacute;seau?",
'settings_floodControlDesc' => "Force les utilisateurs &agrave; entrer un a code sur Enregistrement, Dites &agrave; un ami, etc. pour pr&eacute;venir le robot-r&eacute;seau de polluposter le magasin.",
'settings_smtpHost' => "H&ocirc;te SMTP:",
'settings_defaultHost' => "(Par d&eacute;faut: H&ocirc;te local)",
'settings_smtpPort' => "Port SMTP:",
'settings_defaultPort' => "(Par d&eacute;faut: 25)",
'settings_smtpAuth' => "Utilisez l'authentification?",
'settings_defaultAuth' => "(Par d&eacute;faut: Non)",
'settings_smtpUsername' => "Nom d'utilisateur SMTP:",
'settings_smtpPassword' => "Mot de passe SMTP:",
'settings_show_latest' => "Montrez les derniers produits sur la page d'accueil?",
'settings_no_latest' => "Nombre des derniers produits &agrave; montrer:",
'settings_no_related' => "Nombre de produits liés au spectacle:",
'settings_off_line_settings' => "Param&egrave;tres hors ligne",
'settings_sef' => "Optimisation du moteur de recherche",
'settings_off_line' => "Mettez le magasin hors ligne?",
'settings_off_line_content' => "Message hors ligne:",
'settings_off_line_allow_admin' => "Permettez aux administrateurs de visualiser le magasin hors ligne? (Requiert une session admin)",
'settings_store_settings' => "Param&egrave;tres du magasin",
'settings_edit_below' => "Veuillez modifier la configuration de votre magasin ci-dessous:",
'settings_meta_data' => "M&eacute;ta-donn&eacute;es",
'settings_browser_title' => "Titre du navigateur g&eacute;n&eacute;ral:",
'settings_meta_desc' => "M&eacute;ta-Description g&eacute;n&eacute;rale:",
'settings_meta_keywords' => " Meta-mots-cl&eacute; g&eacute;n&eacute;raux:",
'settings_comma_separated' => "(S&eacute;par&eacute; par une viegule)",
'settings_store_co_name' => "Nom du magasin/soci&eacute;t&eacute;:",
'settings_store_address' => "Adresse du magasin:",
'settings_country' => "Pays:",
'settings_zone' => "Comt&eacute;/Etat/Zone:",
'settings_dirs_folders' => "R&eacute;pertoires &amp; Dossiers",
'settings_rootRel' => "Chemin racine relatif d'HTTP:",
'settings_storeURL' => "URL absolu d'HTTP:",
'settings_eg_domain_com' => "par exemple, http://www.example.com/store",
'settings_rootDir' => "Chemin racine d'HTTP:",
'settings_eg_root_path' => "par exemple /home/username/public_html/store",
'settings_rootRel_SSL' => "HTTP<span style='color: red;'>S</span> Chemin racine relatif:",
'settings_eg_rootRel' => "par exemple /store/",
'settings_storeURL_SSL' => "HTTP<span style='color: red;'>S</span> URL absolu:",
'settings_eg_domain_SSL' => "par exemple, https://www.example.com/store",
'settings_rootDir_SSL' => "HTTP<span style='color: red;'>S</span> Chemin racine:",
'settings_eg_root_path_secure' => "par exemple /home/username/public_html/store",
'settings_enable_ssl' => "Activez SSL:",
'settings_force_ssl' => "Forcez SSL:",
'settings_ssl_warn' => "<a href='https://www.cubecart.com/site/helpdesk/index.php?_m=knowledgebase&_a=viewarticle&kbarticleid=24&nav=0,2,4' class='txtLink' target='_blank'>Help!</a>",
'settings_digital_downloads' => "T&eacute;l&eacute;chargements num&eacute;riques",
'settings_download_expire_time' => "Temps d'expiration de t&eacute;l&eacute;chargement:",
'settings_seconds' => "(Secondes)",
'settings_download_attempts' => "Essais de t&eacute;l&eacute;chargement:",
'settings_attempts_desc' => "(Nombre de fois que le client peut t&eacute;l&eacute;charger le produit.)",
'settings_styles_misc' => "Styles &amp; Divers",
'settings_default_language' => "Langue par d&eacute;faut:",
'settings_store_skin' => "Store Skin:",
'settings_changeskin' => "Permettez &agrave; l'utilisateur de changer l'habillage?",
'settings_no_cats_per_row' => "Aucune cat&eacute;gorie par rang&eacute;e:",
'settings_dir_symbol' => "symbole du r&eacute;pertoire:",
'settings_prods_per_page' => "Aucun produit par page:",
'settings_precis_length' => "Longueur du produit pr&eacute;cis:",
'settings_chars' => "(Caract&egrave;res)",
'settings_no_sale_items' => "Num&eacute;ros des articles dans la bo&icirc;te d'articles de vente:",
'settings_no_pop_prod' => "Num&eacute;ros des articles dans la bo&icirc;te d'articles tr&egrave;s demand&eacute;s:",
'settings_email_name' => "Nom du courriel:",
'settings_email_name_desc' => "(Ceci est utilis&eacute; comme nom d'envoi de courriels de site.)",
'settings_email_address' => "Adresse de courriel:",
'settings_email_address_desc' => "(Ceci est utilis&eacute; comme adresse de courriel dans les courriels de site.)",
'settings_mail_method' => "M&eacute;thode d'envoi de courrier:",
'settings_mail_recommended' => "(SMTP recommand&eacute;)",
'settings_max_upload_size' => "Taille de fichier Max de t&eacute;l&eacute;versement:",
'settings_under_x_recom' => "(Recommand&eacute; en dessous de 2048Kb)",
'settings_max_sess_length' => "Longueur Max de session:",
'settings_db_settings' => "Param&egrave;tres de la base de donn&eacute;es",
'settings_db_host' => "Nom d'h&ocirc;te de la base de donn&eacute;es:",
'settings_db_username' => "Nom d'utilisateur de la base de donn&eacute;es:",
'settings_db_password' => "Mot de passe de la base de donn&eacute;es:",
'settings_db_name' => "Nom de la base de donn&eacute;es:",
'settings_db_prefix' => "Pr&eacute;fixe de la base de donn&eacute;es:",
'settings_gd_settings' => "Param&egrave;tres de GD",
'settings_gd_ver' => "Version de GD:",
'settings_gd_thumb_size' => "Taille de vignette:",
'settings_gd_gif_support' => "Permettez prise en charge de GIF: (Veuillez vous rassurer que ceci est activ&eacute; sur votre serveur)",
'settings_gd_max_img_size' => "Dimension Max de l'image:",
'settings_gd_img_quality' => "Qualit&eacute; de l'image GD:",
'settings_recom_quality' => "(60 - 80 recommand&eacute;)",
'settings_stock_settings' => "Param&egrave;tres du stock",
'settings_use_stock' => "Montrez le niveau du stock?",
'settings_allow_out_of_stock_purchases' => "Montrez les achats en rupture de stock?",
'settings_stock_change_time' => "Quand diminuer le niveau du stock?",
'settings_stock_change_timement' => "Lorsque le paiement a &eacute;t&eacute; fait (Lorsque le statut de la commande est complet)",
'settings_stock_decrease_onbasket' => "Lorsqu'ajout&eacute; au panier",
'settings_stock_decrease_onorderbuild' => "Lorsque la commande est mont&eacute;e (Lorsque le statut de la commande est En Attente)",
'settings_add_to_basket_act' => "Sauter au chariot sur ajouter au panier?",
'settings_weight_unit' => "unit&eacute; de poids:",
'settings_time_and_date' => "Heure &amp; Date",
'settings_time_format' => "Format horaire:",
'settings_time_format_desc' => "(Voir <a href='http://www.php.net/strftime' target='_blank' class='txtLink'>www.php.net/strftime</a>)",
'settings_time_offset' => "D&eacute;calage horaire:",
'settings_time_offset_desc' => "(Secondes � Utilis&eacute;s pour les serveurs dans diff&eacute;rents fuseaux horaires)",
'settings_date_format' => "Format de date:",
'settings_date_format_desc' => "(Voir <a href='http://www.php.net/date' target='_blank' class='txtLink'>www.php.net/date</a>)",
'settings_locale_settings' => "Param&egrave;tres locaux",
'settings_default_currency' => "Devise par d&eacute;faut",
'settings_inc_tax_prices' => "Ajouter l'imp&ocirc;t sur les ventes aux clients qualifi&eacute;s?",
'settings_tax_del_inv' => "Comment appliquer l'imp&ocirc;t sur les clients:",
'settings_tax_del_add' => "Calculez l'imp&ocirc;t sur l'adresse de livraison",
'settings_tax_inv_add' => "Calculez l'imp&ocirc;t sur l'adresse de la facture ",
'settings_tax_either_add' => "Calculez l'imp&ocirc;t sur l'adresse de la facture ou l'adresse de livraison (Si l'un ou l[�autre s'applique)",
'settings_sale_mode' => "Mode de vente:",
'settings_percent_of_all' => "Pourcentage de tous les prix",
'settings_ind_sale_per_item' => "Prix individuel de vente par article",
'settings_sale_mode_off' => " Mode de vente hors circuit",
'settings_sale_per_off' => "Pourcentage de vente hors circuit:",
'settings_sale_per_off_desc' => "(Pourcentage devant rabattre tous les prix)",
'settings_diff_dispatch' => "Permettre envoi &agrave; une adresse autre que celle de la facture?",
'settings_update_settings' => "Param&egrave;tres d'actualisation",
'settings_update_success' => "Actualis&eacute;s avec succ&egrave;s.",
'settings_update_fail' => "n'ont pas &eacute;t&eacute; actualis&eacute;s.",
'settings_add_success' => "ajout&eacute;s avec succ&egrave;s",
'settings_add_fail' => "n'ont pas &eacute;t&eacute; ajout&eacute;s.",
'settings_delete_success' => "Effac&eacute;s avec succ&egrave;s.",
'settings_delete_failed' => "Effacement a &eacute;chou&eacute;.",
'settings_currencies' => "Devises",
'settings_currency' => "Devise",
'settings_currency_auto_method' => "M&eacute;thode automatique de taux de change:",
'settings_currency_csv' => "M&eacute;thode Yahoo CSV",
'settings_currency_pear' => "PEAR &quot;ExchangeRates Method&quot;",
'settings_source_exchange' => "Source de taux de change:",
'settings_nbi' => "Banque Nationale d'Isra&euml;l",
'settings_ecb' => "Banque centrale europ&eacute;enne",
'settings_nbp' => "Banque nationale de Pologne",
'settings_currencies_desc' => "Veuillez ajouter Modifier ou Effacer les devises ci-dessous:",
'settings_c_code' => "Code",
'settings_c_name' => "Nom",
'settings_c_value' => "Valeur",
'settings_symbol_left' => "Symbole &agrave; gauche",
'settings_symbol_right' => "Symbole &agrave; Droite",
'settings_decimal_places' => "Places des d&eacute;cimales",
'settings_decimal_format' => "Format des d&eacute;cimales",
'settings_decimal_point' => "(Point de d&eacute;cimales)",
'settings_comma' => "(Virgule)",
'settings_last_updated' => "Derni&egrave;re fois actualis&eacute;",
'settings_c_status' => "Statut",
'settings_no_currencies' => "Il n'y a pas de devise dans la base de donn&eacute;es.",
'settings_countries' => "Pays",
'settings_country' => "Pays",
'settings_edit_countries_below' => "Veuillez ajouter Modifier ou Effacer les pays ci-dessous:",
'settings_disable' => "D&eacute;sactiv&eacute;",
'settings_enable' => "Activ&eacute;",
'settings_iso' => "ISO",
'settings_iso_name' => "Nom",
'settings_iso3' => "ISO3",
'settings_num_code' => "Num&eacute;ro du code",
'settings_action' => "Action",
'settings_warn_del_country' => "Etes-vous s&ucirc;r de vouloir l'effacer? Tous les comt&eacute;s, Etats et zones seront effac&eacute;s en dessous de lui.",
'settings_no_countries_in_db' => "Il n'y a aucun pays dans la base de donn&eacute;es.",
'settings_edit_counties' => "Veuillez ajouter Modifier ou Effacer les comt&eacute;s/zones/Etats ci-dessous:",
'settings_no_counties_in_db' => "Il n'y a aucun compt&eacute;, Etat ou zone dans la base de donn&eacute;es.",
'settings_tax_settings' => "Param&egrave;tres d'imp&ocirc;t",
'settings_edit_locale_below' => "Veuillez modifier vos param&egrave;tres locaux ci-dessous:",
'settings_tax_only_to' => "Appliquez l'imp&ocirc;t UNIQUEMENT sur les zones suivantes:",
'settings_manage_tax_below' => "Faites la gestion des divers types d'imp&ocirc;t ci-dessous. Ils peuvent s'appliquer &agrave; chaque produit de sorte que vous pouvez avoir des produits exempts d'imp&ocirc;t et diff&eacute;rents niveaux d'imp&ocirc;t pour diff&eacute;rents types de produit.",
'settings_tax_class2' => "Classe d'imp&ocirc;t",
'settings_rate_per' => "Taux (%)",
'settings_no_taxes_setup' => "D&eacute;sol&eacute;, il n'y a pas d'imp&ocirc;t &eacute;tabli.",
'settings_tax' => "Imp&ocirc;t",
'settings_img_gallery_type' => "Type de galerie d'image du produit:",
'settings_img_gallery_type_popup' => "Menu &eacute;clair dans la nouvelle fen&ecirc;tre",
'settings_img_gallery_type_lightbox' => "Bo&icirc;te lumineuse (Recommand&eacute;e)",
'settings_cat_tree' => "Utilisez l'arbre de la cat&eacute;gorie d'expansion DHTML?",
'hide_prices' => "Prix cach&eacute;s jusqu'&agrave; ce que le client ait ouvert la session?",
'settings_logo_reverted' => "Logo `%1\$s` a &eacute;t&eacute; r&eacute;cup&eacute;r&eacute; &agrave; celui par d&eacute;faut.",
'settings_logo_invalid' => "Format de fichier pour logo `%1\$s` n'est pas un type valide. Veuillez utiliser les fichiers GIF, JPEG ou PNG uniquement.",
'settings_logo_changed' => "Logo `%1\$s` a &eacute;t&eacute; chang&eacute; avec succ&egrave;s.",
'settings_logo_title' => "Gestion de logo",
'settings_logo_skin_name' => "Nom de l'habillage",
'settings_logo_default_skin' => "Habillage par d&eacute;faut",
'settings_logo_default_logo' => "Logo par d&eacute;faut",
'settings_logo_current_logo' => "Logo actuel",
'settings_logo_action' => "Action",
'settings_logo_default_missing' => "Logo manquant par d&eacute;faut!",
'settings_logo_revert' => "R&eacute;cup&eacute;r&eacute; par d&eacute;faut",
'settings_logo_revert_warn' => "Etes-vous s&ucirc;r que vous voulez effacer le logo actuel?",
'settings_logo_dimensions' => "Dimensions: %1\$s x %2\$s px",
'cat_newest_first' => 'Display newest products first',
'cat_newest_first_info' => 'If enabled, the default category view will be to show the most recently added products first.',

'google_analytics' => 'Google Analytics ID',
'google_analytics_info' => 'This can be found in the code provided by Google, and will look something like "UA-######-#"',

);
?>