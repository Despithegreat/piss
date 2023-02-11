<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ab019f4cbcdcac1280a694cd0e4ffab27bfcdb8e5fe688db58b0b27c7e486304 */
class __TwigTemplate_69579e64d6ff639d2d12dbf4e41e0f95f173e8a3ca6aaf842050caf1e7b910d9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Sécurité • Piasat</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminSecurity';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr-fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'MA';
    var _PS_VERSION_ = '8.0.0';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '188cdbb657a6dc599a1c53d75cbce2a7';
    var token_admin_orders = tokenAdminOrders = '3a61e082d3671d29dc28a6c1a67c2fb1';
    var token_admin_customers = 'e2148096cc63312abf90dd24f2d61c95';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '9a3c9ff548ee65b556e24d5e460366bf';
    var currentIndex = 'index.php?controller=AdminSecurity';
    var employee_token = '50db994f43a0084a96cdc8e07a005115';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '2';
    var admin_modules_link = '/vmpotuutzbzavndv/index.php/improve/modules/manage?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU';
    var admin_notification_get_link = '/vmpotuutzbzavndv/index.php/common/notifications?_token=scdl7xT5DaAkHf1mGiQ64LGO0D";
        // line 42
        echo "Dt7SuyrQ45mfQbwyU';
    var admin_notification_push_link = adminNotificationPushLink = '/vmpotuutzbzavndv/index.php/common/notifications/ack?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var search_product_msg = 'Rechercher un produit';
  </script>



<link
      rel=\"preload\"
      href=\"/vmpotuutzbzavndv/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/vmpotuutzbzavndv/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/vmpotuutzbzavndv/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/tvcmsslider/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/prettyurls/views/css/admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/vmpotuutzbzavndv\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/vmpotuutzbzavndv\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\";
var currency = {\"iso_code\":\"MAD\",\"sign\":\"MAD\",\"name\":\"Moroccan Dirham\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"MAD\",\"currencySymbol\":\"MAD\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e";
        // line 72
        echo "\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/vmpotuutzbzavndv/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/vmpotuutzbzavndv/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.0.0\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/vmpotuutzbzavndv/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/ui/jquery.ui.sortable.min.js\"></script>

  

";
        // line 95
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminsecurity\"
  data-base-url=\"/vmpotuutzbzavndv/index.php\"  data-token=\"scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminDashboard&amp;token=cfd81d57a43536e827897be2324d34e9\"></a>
      <span id=\"shop_version\">8.0.0</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://piasat.com/vmpotuutzbzavndv/index.php/sell/orders?token=a2eee77df52f28aafaccfb97a85ffb68\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=517fffffb69d25928e000d1d36e76027\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://piasat.com/vmpotuutzbzavndv/index.php/improve/modules/manage?token=a2eee77df52f28aafaccfb97a85ffb68\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=642e8c3c40714f39e0199e2a458bb350\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a ";
        // line 132
        echo "class=\"dropdown-item quick-row-link\"
         href=\"https://piasat.com/vmpotuutzbzavndv/index.php/sell/catalog/products/new?token=a2eee77df52f28aafaccfb97a85ffb68\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://piasat.com/vmpotuutzbzavndv/index.php/sell/catalog/categories/new?token=a2eee77df52f28aafaccfb97a85ffb68\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=9933a0696d339334b6e3a63cb68be928\"
                 data-item=\"ThemeVolty Settings\"
      >ThemeVolty Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"59\"
        data-icon=\"icon-AdminParentSecurity\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/security\"
        data-post-link=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminQuickAccesses&token=9fe698a0450aaacb5525fc763d1c70cc\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"S&eacute;curit&eacute; - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminQuickAccesses&token=9fe698a0450aaacb5525fc763d1c70cc\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form col";
        // line 170
        echo "lapsed\"
      method=\"post\"
      action=\"/vmpotuutzbzavndv/index.php?controller=AdminSearch&amp;token=429d213b082a4f67e021f667f5cb6827\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book<";
        // line 188
        echo "/i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Annuler</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Accès rapide</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://piasat.com/vmpotuutzbzavndv/index.php/sell/orders?token=a2eee77df52f28aafaccfb97a85ffb68\"
             data-item=\"Commandes\"
    >Commandes</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=517fffffb69d25928e000d1d36e76027\"
             data-item=\"Évaluation du catalogue\"
    >Évaluation du catalogue</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://piasat.com/vmpotuutzbzavndv/index.php/improve/modules/manage?token=a2eee77df52f28aafaccfb97a85ffb68\"
             data-item=\"Modules installés\"
    >Modules installés</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=642e8c3c40714f39e0199e2a458bb350\"
             data-item=\"Nouveau bon de réduction\"
    >Nouveau bon de réduction</a>
      <a class=\"dropdow";
        // line 225
        echo "n-item quick-row-link\"
       href=\"https://piasat.com/vmpotuutzbzavndv/index.php/sell/catalog/products/new?token=a2eee77df52f28aafaccfb97a85ffb68\"
             data-item=\"Nouveau produit\"
    >Nouveau produit</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://piasat.com/vmpotuutzbzavndv/index.php/sell/catalog/categories/new?token=a2eee77df52f28aafaccfb97a85ffb68\"
             data-item=\"Nouvelle catégorie\"
    >Nouvelle catégorie</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=9933a0696d339334b6e3a63cb68be928\"
             data-item=\"ThemeVolty Settings\"
    >ThemeVolty Settings</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"140\"
      data-icon=\"icon-AdminParentSecurity\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/security\"
      data-post-link=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminQuickAccesses&token=9fe698a0450aaacb5525fc763d1c70cc\"
      data-prompt-text=\"Veuillez nommer ce raccourci :\"
      data-link=\"S&eacute;curit&eacute; - Liste\"
    >
      <i class=\"material-icons\">add_circle</i>
      Ajouter la page actuelle à l'accès rapide
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminQuickAccesses&token=9fe698a0450aaacb5525fc763d1c70cc\">
    <i class=\"material-icons\">settings</i>
    Gérez vos accès rapides
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://piasat.com/\" target= \"_blank\">
      <i class=\"material-icons\">visib";
        // line 268
        echo "ility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-not";
        // line 323
        echo "ification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=ee44cf2b9dabadb5f900f382f767a80e\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</st";
        // line 367
        echo "rong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://piasat.com/img/pr/default.jpg\" alt=\"Site\" /></span>
        <span class=\"employee_profile\">Ravi de vous revoir Site</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/vmpotuutzbzavndv/index.php/configure/advanced/employees/1/edit?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminLogin&amp;logout=1&amp;token=99608ef233699ac3de91b604e43dcef8\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/vmpotuutzbzavndv/index.php/configure/advanced/employees/toggle-navigation?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminDashboard&amp;token=cfd81d57a43536e827897be2324d34e9\"></a>
";
        // line 413
        echo "          <span id=\"shop_version\" class=\"header-version\">8.0.0</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminDashboard&amp;token=cfd81d57a43536e827897be2324d34e9\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/vmpotuutzbzavndv/index.php/sell/orders/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              ";
        // line 455
        echo "  <a href=\"/vmpotuutzbzavndv/index.php/sell/orders/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/orders/invoices/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/orders/credit-slips/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/orders/delivery-slips/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-";
        // line 486
        echo "submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCarts&amp;token=ee44cf2b9dabadb5f900f382f767a80e\" class=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/vmpotuutzbzavndv/index.php/sell/catalog/products?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/catalog/products?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                               ";
        // line 518
        echo "             
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/catalog/categories?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/catalog/monitoring/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminAttributesGroups&amp;token=903bd17418b480fad24141b6b79dbe82\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/catalog/brands/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

     ";
        // line 548
        echo "                                                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/attachments/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCartRules&amp;token=642e8c3c40714f39e0199e2a458bb350\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/stocks/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/vmpotuutzbzavndv/index.php/sell/";
        // line 579
        echo "customers/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/customers/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/addresses/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-lev";
        // line 611
        echo "elone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCustomerThreads&amp;token=9a3c9ff548ee65b556e24d5e460366bf\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCustomerThreads&amp;token=9a3c9ff548ee65b556e24d5e460366bf\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/vmpotuutzbzavndv/index.php/sell/customer-service/order-messages/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                                        ";
        // line 640
        echo "                    
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminReturn&amp;token=f94bd3ecbf7bdf0706736884ec3af3de\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminStats&amp;token=517fffffb69d25928e000d1d36e76027\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/vmpotuutzbzavndv/index.php/improve/modules/m";
        // line 678
        echo "anage?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/modules/manage?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/vmpotuutzbzavndv/index.php/improve/design/themes/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                        ";
        // line 709
        echo "                                            keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"124\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/design/themes/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/design/mail_theme/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Thème d&#039;email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/design/cms-pages/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                   ";
        // line 739
        echo "         
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/design/modules/positions/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminImages&amp;token=eee4d91ffc537b91341aaacfc3dc8755\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/vmpotuutzbzavndv/index.php/modules/link-widget/list?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Liste de liens
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCarriers&amp;token=9f43bc52639844a0e6ce9a54d8460a40\" class=\"link\">
                      <i class=\"material-i";
        // line 769
        echo "cons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminCarriers&amp;token=9f43bc52639844a0e6ce9a54d8460a40\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/shipping/preferences/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/vmpotuutzbzavndv/index.php/imp";
        // line 801
        echo "rove/payment/payment_methods?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/payment/payment_methods?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Modes de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/payment/preferences?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-le";
        // line 833
        echo "velone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/vmpotuutzbzavndv/index.php/improve/international/localization/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/international/localization/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Localisation
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/international/zones/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                    ";
        // line 862
        echo "                        
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/international/taxes/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/vmpotuutzbzavndv/index.php/improve/international/translations/settings?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"128\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmspost&amp;token=aba0dc74048350317fa80bf043a8ffac\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-128\" class=\"submenu panel-collaps";
        // line 892
        echo "e\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-Admintvcmspost\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmspost&amp;token=aba0dc74048350317fa80bf043a8ffac\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-Admintvcmscategory\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscategory&amp;token=ab7193ffbf673ed7446207609f024d47\" class=\"link\"> Blog Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-Admintvcmscomment\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscomment&amp;token=69b05a4155abfce3a9aaacaedb973d07\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"132\" id=\"subtab-Admintvcmsimagetype\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsimagetype";
        // line 921
        echo "&amp;token=88431f4312b6ab7470bf0dc54752f8ef\" class=\"link\"> Blog Image Type
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/vmpotuutzbzavndv/index.php/configure/shop/preferences/preferences?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/shop/preferences/preferences?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Paramètres généraux
 ";
        // line 957
        echo "                               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/shop/order-preferences/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/shop/product-preferences/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/shop/customer-preferences/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                       ";
        // line 988
        echo "         <a href=\"/vmpotuutzbzavndv/index.php/configure/shop/contacts/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/shop/seo-urls/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminSearchConf&amp;token=7590f644a62e960a2051436021b52e33\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/system-information/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
       ";
        // line 1017
        echo "               <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/system-information/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/performance/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/administration/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Administratio";
        // line 1045
        echo "n
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/emails/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/import/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/employees/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/vmpotuutzbzavndv/index.php/conf";
        // line 1077
        echo "igure/advanced/sql-requests/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/logs/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/webservice-keys/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/feature-flags/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Fonctionnalités nouvelles et expérimentales
                                </a>
                              </li>

                                                                                  
       ";
        // line 1106
        echo "                       
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/security/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" class=\"link\"> Sécurité
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"133\" id=\"tab-AdminThemeVolty\">
                <span class=\"title\">ThemeVolty Extension</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"134\" id=\"subtab-AdminThemeVoltyModules\">
                    <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsblogdisplayposts&amp;token=08690e23f9877fe094c2b9d7aaf5ff49\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Configure
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-134\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
 ";
        // line 1143
        echo "                             <li class=\"link-leveltwo\" data-submenu=\"135\" id=\"subtab-Admintvcmsblogdisplayposts\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsblogdisplayposts&amp;token=08690e23f9877fe094c2b9d7aaf5ff49\" class=\"link\"> Blog on Home Page
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-Admintvcmsbrandlist\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsbrandlist&amp;token=897220835f392deca0746d05bf9ef3d8\" class=\"link\"> Brand List
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"137\" id=\"subtab-Admintvcmscategorychainslider\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscategorychainslider&amp;token=09ace208a5b12731b100ad211bda83c1\" class=\"link\"> Category Chain Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"138\" id=\"subtab-Admintvcmscategoryproduct\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscategoryproduct&amp;token=f0195c9a2b1f7d683d228bf473488508\" class=\"link\"> Tab Category Product ";
        // line 1168
        echo "Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-Admintvcmscategoryslider\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscategoryslider&amp;token=c867acf903288da3252c17c823d638df\" class=\"link\"> Category Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-Admintvcmscustomcssjs\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscustomcssjs&amp;token=18d2929ed5ab46138debee7c54b79a31\" class=\"link\"> Custom Css And Js
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-Admintvcmscustomerservices\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscustomerservices&amp;token=25e2d57de37bc4ce68cb0760fcf9904e\" class=\"link\"> Customer Services
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-subm";
        // line 1199
        echo "enu=\"144\" id=\"subtab-Admintvcmsfooterlogo\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsfooterlogo&amp;token=ff565752b6180be98cc6e6a2f2713fec\" class=\"link\"> Footer Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-Admintvcmsfooterproduct\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsfooterproduct&amp;token=ce1c6e849d70b4fb7df5a823582a4461\" class=\"link\"> Footer Product
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-Admintvcmsinfinitescroll\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsinfinitescroll&amp;token=aaa6da02ae32b1b7c9cca0d1a6e27be7\" class=\"link\"> Infinite Scroll
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-Admintvcmsmegamenu\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsmegamenu&amp;token=f60ae7174ba1805782da29eb48882232\" class=\"link\"> Mega Menu
                                </a>
                              </li>

                                     ";
        // line 1228
        echo "                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-Admintvcmsmultibanner1\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsmultibanner1&amp;token=f43cc2bebe87b52c4901718161bb8a41\" class=\"link\"> MultiBanner 1
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-Admintvcmsnewsletterpopup\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsnewsletterpopup&amp;token=11b7bbc4fb3bb9582949a7f4e59605fc\" class=\"link\"> Newsletter Popup
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-Admintvcmsofferbanner\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsofferbanner&amp;token=d4b70674fe0299f348bd5be19e4c2d12\" class=\"link\"> Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-Admintvcmspaymenticon\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?";
        // line 1256
        echo "controller=Admintvcmspaymenticon&amp;token=28c9d36e9806ecf69ff4a0a777731e18\" class=\"link\"> Payment Icon
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-Admintvcmsproductcomments\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsproductcomments&amp;token=80ea10d5328546658d12ef5450576ef8\" class=\"link\"> Product Comment
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"154\" id=\"subtab-Admintvcmsproductpopup\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsproductpopup&amp;token=cd014af12c7bc299fa3c0daefb4ffa73\" class=\"link\"> Product Popup
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-Admintvcmssingleblock\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmssingleblock&amp;token=8b17b0ab7035fe0791c82e8e1882992c\" class=\"link\"> Single Block
                                </a>
                              </li>

                                                                                  
                              
                                            ";
        // line 1286
        echo "                
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-Admintvcmssizechart\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmssizechart&amp;token=88bca7e7a8b1e51559af167c466ef848\" class=\"link\"> Size Chart [Size/Chart/Table]
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-Admintvcmsslider\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsslider&amp;token=911281ea3caa89424970e54196dba8f5\" class=\"link\"> Main Slider
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-Admintvcmssliderofferbanner\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmssliderofferbanner&amp;token=57bfd48e1805504c36ca52e38ac90d89\" class=\"link\"> Slider Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-Admintvcmsstockinfo\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsstockinfo&amp;token=8934afdb5d1620e5e683d43c667d97ec\" class=\"link\"> Stock Indicator
            ";
        // line 1313
        echo "                    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-Admintvcmstabproducts\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmstabproducts&amp;token=5d97e67862818fc832268b5fc0a04353\" class=\"link\"> Tab Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-Admintvcmstestimonial\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmstestimonial&amp;token=d685c677830c2b395b83bed2ed049141\" class=\"link\"> Testimonial
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-Admintvcmstwoofferbanner\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmstwoofferbanner&amp;token=cc7959ca0c9435a1d2fbf458042afceb\" class=\"link\"> Two Offer Banner
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"163\" id=\"subtab-Admintvcmsvertical";
        // line 1343
        echo "menu\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsverticalmenu&amp;token=dc9fd48f19d0fdf82dbe3b56b4584af7\" class=\"link\"> Vertical Menu
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-Admintvcmsvideotab\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmsvideotab&amp;token=4308b2dba3d7b5e9a9a71beba4e55b23\" class=\"link\"> Product Video
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"165\" id=\"subtab-Admintvcmswishlist\">
                                <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmswishlist&amp;token=761d27b8740d843f7b19f64f00b18891\" class=\"link\"> Customer&#039;s Wishlist
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"142\" id=\"subtab-Admintvcmscustomsetting\">
                    <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=Admintvcmscustomsetting&amp;token=7d32f606f3530dc3651be557ffda1ddb\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
            ";
        // line 1373
        echo "          <span>
                      Custom Setting
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"177\" id=\"tab-AdminSeoAlt\">
                <span class=\"title\">SEO Alt Images</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"178\" id=\"subtab-AdminSeoAltImages\">
                    <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminSeoAltImages&amp;token=9b669fec8e9710abcf7d9b12ce5662c2\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      SEO Alt Images
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Sécurité</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-ro";
        // line 1427
        echo "w\">
      
          <h1 class=\"title\">
            Sécurité          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/vmpotuutzbzavndv/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminSecurity%253Fversion%253D8.0.0%2526country%253Dfr/Aide?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             ";
        // line 1458
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <li class=\"nav-item\">
                    <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/security/?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" id=\"subtab-AdminSecurity\" class=\"nav-link tab active current\" data-submenu=\"111\">
                      Sécurité
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/security/session/employee?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" id=\"subtab-AdminSecuritySessionEmployee\" class=\"nav-link tab \" data-submenu=\"112\">
                      Sessions employés
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/vmpotuutzbzavndv/index.php/configure/advanced/security/session/customer?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\" id=\"subtab-AdminSecuritySessionCustomer\" class=\"nav-link tab \" data-submenu=\"113\">
                      Sessions clients
      ";
        // line 1477
        echo "                <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aide\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/vmpotuutzbzavndv/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Ffr%252Fdoc%252FAdminSecurity%253Fversion%253D8.0.0%2526country%253Dfr/Aide?_token=scdl7xT5DaAkHf1mGiQ64LGO0DDt7SuyrQ45mfQbwyU\"
            >
              Aide
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                             ";
        // line 1513
        echo "           
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1518
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    Cette page n'est pas encore disponible sur mobile, merci de la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"https://piasat.com/vmpotuutzbzavndv/index.php?controller=AdminDashboard&amp;token=cfd81d57a43536e827897be2324d34e9\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1552
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 95
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1518
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1552
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ab019f4cbcdcac1280a694cd0e4ffab27bfcdb8e5fe688db58b0b27c7e486304";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1741 => 1552,  1720 => 1518,  1709 => 95,  1700 => 1552,  1660 => 1518,  1653 => 1513,  1615 => 1477,  1594 => 1458,  1561 => 1427,  1505 => 1373,  1473 => 1343,  1441 => 1313,  1412 => 1286,  1380 => 1256,  1350 => 1228,  1319 => 1199,  1286 => 1168,  1259 => 1143,  1220 => 1106,  1189 => 1077,  1155 => 1045,  1125 => 1017,  1094 => 988,  1061 => 957,  1023 => 921,  992 => 892,  960 => 862,  929 => 833,  895 => 801,  861 => 769,  829 => 739,  797 => 709,  764 => 678,  724 => 640,  693 => 611,  659 => 579,  626 => 548,  594 => 518,  560 => 486,  527 => 455,  483 => 413,  435 => 367,  389 => 323,  332 => 268,  287 => 225,  248 => 188,  228 => 170,  188 => 132,  146 => 95,  121 => 72,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ab019f4cbcdcac1280a694cd0e4ffab27bfcdb8e5fe688db58b0b27c7e486304", "");
    }
}
