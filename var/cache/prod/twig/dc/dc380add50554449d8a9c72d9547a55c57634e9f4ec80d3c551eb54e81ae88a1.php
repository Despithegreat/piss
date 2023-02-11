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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig */
class __TwigTemplate_800aa88a0c6ae0e73015e72a140835014a1753a579085ba417b073feeb9c2186 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
        // line 28
        $context["enableSidebar"] = true;
        // line 29
        $context["layoutTitle"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit: %lastname% %firstname%", ["%firstname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
($context["editableEmployee"] ?? null), "firstName", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), "%lastname%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
($context["editableEmployee"] ?? null), "lastName", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31)], "Admin.Advparameters.Feature");
        // line 26
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "  ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "vars", [], "any", false, false, false, 35), "errors", [], "any", false, false, false, 35))) {
            // line 36
            echo "    <div class=\"alert alert-danger\">
      ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["employeeForm"] ?? null), "vars", [], "any", false, false, false, 37), "errors", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 38
                echo "        <div class=\"alert-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 38), "html", null, true);
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    </div>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        $this->loadTemplate("@PrestaShop/Admin/Configure/AdvancedParameters/Employee/Blocks/form.html.twig", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", 43)->display(twig_array_merge($context, ["employeeForm" =>         // line 44
($context["employeeForm"] ?? null), "level" =>         // line 45
($context["level"] ?? null), "errorMessage" =>         // line 46
($context["errorMessage"] ?? null), "isRestrictedAccess" =>         // line 47
($context["isRestrictedAccess"] ?? null), "superAdminProfileId" =>         // line 48
($context["superAdminProfileId"] ?? null), "getTabsUrl" =>         // line 49
($context["getTabsUrl"] ?? null), "avatarUrl" => twig_get_attribute($this->env, $this->source,         // line 50
($context["editableEmployee"] ?? null), "avatarUrl", [], "any", false, false, false, 50)]));
        // line 52
        echo "
";
    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/employee_form.bundle.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 58,  102 => 56,  98 => 55,  93 => 52,  91 => 50,  90 => 49,  89 => 48,  88 => 47,  87 => 46,  86 => 45,  85 => 44,  84 => 43,  81 => 42,  77 => 40,  68 => 38,  64 => 37,  61 => 36,  58 => 35,  54 => 34,  49 => 26,  47 => 31,  46 => 30,  45 => 29,  43 => 28,  36 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Employee/edit.html.twig", "/home/u704205129/domains/piasat.com/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Employee/edit.html.twig");
    }
}
