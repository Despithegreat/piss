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

/* @PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig */
class __TwigTemplate_6756c9d697784f273ef4c3fb98455dda8ab52322329e5c5af2d5b935e3e31fab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'clear_form_header' => [$this, 'block_clear_form_header'],
            'clear_form_content' => [$this, 'block_clear_form_content'],
            'clear_form_footer' => [$this, 'block_clear_form_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
<div class=\"row justify-content-center\">
  <div class=\"col form-horizontal\">
    <div class=\"card\">
      ";
        // line 29
        $this->displayBlock('clear_form_header', $context, $blocks);
        // line 46
        echo "
      ";
        // line 47
        $this->displayBlock('clear_form_content', $context, $blocks);
        // line 67
        echo "
      ";
        // line 68
        $this->displayBlock('clear_form_footer', $context, $blocks);
        // line 70
        echo "    </div>
  </div>
</div>
";
    }

    // line 29
    public function block_clear_form_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "        <h3 class=\"card-header\">
          ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Outdated sessions", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "

          <span
            class=\"help-box\"
            data-container=\"body\"
            data-toggle=\"popover\"
            data-trigger=\"hover\"
            data-placement=\"right\"
            data-content=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All outdated sessions will be automatically cleared after the first connection attempt, but you can do it manually now if needed.", [], "Admin.Advparameters.Help"), "html_attr");
        echo "\"
            title=\"\"
            data-original-title=\"\"
          >
          </span>
        </h3>
      ";
    }

    // line 47
    public function block_clear_form_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "        <div class=\"card-body\">
          <div class=\"form-wrapper\">
            <div id=\"clear-sessions\">
              <div class=\"form-group row\">
                <label class=\"form-control-label\">
                  ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear outdated sessions manually", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                </label>

                <div class=\"col-sm input-container\">
                  <a class=\"btn btn-primary pointer\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null));
        echo "\" title=\"Clear cache\">
                    <i class=\"material-icons\">delete</i>
                    ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear", [], "Admin.Advparameters.Feature"), "html", null, true);
        echo "
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      ";
    }

    // line 68
    public function block_clear_form_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "      ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  133 => 69,  129 => 68,  117 => 59,  112 => 57,  105 => 53,  98 => 48,  94 => 47,  83 => 39,  72 => 31,  69 => 30,  65 => 29,  58 => 70,  56 => 68,  53 => 67,  51 => 47,  48 => 46,  46 => 29,  40 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig", "/home/u704205129/domains/piasat.com/public_html/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/Security/clear_form.html.twig");
    }
}
