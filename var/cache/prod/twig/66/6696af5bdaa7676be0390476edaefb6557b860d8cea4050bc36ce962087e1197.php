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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Security/employees.html.twig */
class __TwigTemplate_be051ef9cf90cdecca9252e24ffece37af1d43397c7416628093b57356cee0c7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'security_list_panel' => [$this, 'block_security_list_panel'],
            'security_clear_employees_sessions' => [$this, 'block_security_clear_employees_sessions'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/employees.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Common/multistore-infotip.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/employees.html.twig", 29)->display($context);
        // line 30
        echo "
  ";
        // line 31
        $this->displayBlock('security_list_panel', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        $this->displayBlock('security_clear_employees_sessions', $context, $blocks);
    }

    // line 31
    public function block_security_list_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Common/Grid/grid_panel.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/employees.html.twig", 32)->display(twig_array_merge($context, ["grid" => ($context["grid"] ?? null)]));
        // line 33
        echo "  ";
    }

    // line 35
    public function block_security_clear_employees_sessions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "    ";
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/employees.html.twig", 36)->display(twig_array_merge($context, ["route" => "admin_security_sessions_employee_clear"]));
        // line 37
        echo "  ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/security.bundle.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Security/employees.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  100 => 43,  94 => 41,  90 => 40,  86 => 37,  83 => 36,  79 => 35,  75 => 33,  72 => 32,  68 => 31,  64 => 35,  61 => 34,  59 => 31,  56 => 30,  53 => 29,  49 => 28,  38 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/employees.html.twig", "/home/u704205129/domains/piasat.com/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Security/employees.html.twig");
    }
}
