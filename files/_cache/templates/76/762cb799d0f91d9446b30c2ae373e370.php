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

/* layout/page_card_notlogged.html.twig */
class __TwigTemplate_e3d2f64620b575c9a7a1b9e8c4d3aa41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_block' => [$this, 'block_content_block'],
            'javascript_block' => [$this, 'block_javascript_block'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $context["theme"] = $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("palette");
        // line 35
        if ( !array_key_exists("css_files", $context)) {
            // line 36
            echo "   ";
            $context["css_files"] = [["path" => "public/lib/base.css"], ["path" => (("css/palettes/" .             // line 38
($context["theme"] ?? null)) . ".scss")]];
            // line 40
            echo "   ";
        }
        // line 42
        if ( !array_key_exists("js_files", $context)) {
            // line 43
            echo "   ";
            $context["js_files"] = [["path" => "public/lib/base.js"], ["path" => "js/common.js"], ["path" => "public/lib/fuzzy.js"]];
        }
        // line 49
        echo "
";
        // line 50
        echo twig_include($this->env, $context, "layout/parts/head.html.twig");
        echo "
<body class=\"welcome-anonymous\">
   <div class=\"page-anonymous\">
      <div class=\"flex-fill d-flex flex-column justify-content-center py-4 mt-4\">
         ";
        // line 54
        $context["style"] = null;
        // line 55
        echo "         ";
        if (array_key_exists("card_md_width", $context)) {
            // line 56
            echo "            ";
            $context["style"] = "max-width: 40rem";
            // line 57
            echo "         ";
        }
        // line 58
        echo "         ";
        if (array_key_exists("card_bg_width", $context)) {
            // line 59
            echo "            ";
            $context["style"] = "max-width: 60rem";
            // line 60
            echo "         ";
        }
        // line 61
        echo "
         <div class=\"container-tight py-6\" ";
        // line 62
        if ( !(null === ($context["style"] ?? null))) {
            echo "style=\"";
            echo twig_escape_filter($this->env, ($context["style"] ?? null), "html", null, true);
            echo "\"";
        }
        echo ">
            <div class=\"text-center\">
               <div class=\"col-md\">
                  <span class=\"glpi-logo mb-4\" title=\"ULSA\"></span>
               </div>
            </div>
            <div class=\"cardini card-md\">
               <div class=\"card-body content-cardini\">
               ";
        // line 70
        $this->displayBlock('content_block', $context, $blocks);
        // line 71
        echo "               </div>
            </div>
         </div>
      </div>
   </div>

   ";
        // line 77
        $this->displayBlock('javascript_block', $context, $blocks);
        // line 78
        echo "</body>
</html>
";
    }

    // line 70
    public function block_content_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 77
    public function block_javascript_block($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/page_card_notlogged.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  131 => 77,  125 => 70,  119 => 78,  117 => 77,  109 => 71,  107 => 70,  92 => 62,  89 => 61,  86 => 60,  83 => 59,  80 => 58,  77 => 57,  74 => 56,  71 => 55,  69 => 54,  62 => 50,  59 => 49,  55 => 43,  53 => 42,  50 => 40,  48 => 38,  46 => 36,  44 => 35,  42 => 34,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/page_card_notlogged.html.twig", "C:\\laragon\\www\\glpi\\templates\\layout\\page_card_notlogged.html.twig");
    }
}
