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

/* partenaire/index.html.twig */
class __TwigTemplate_44499f874ea8432bd5aae061623752305336b7752258a7fe086b272bc6e50e4c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "partenaire/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello PartenaireController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 12
        echo twig_escape_filter($this->env, ($context["controller_name"] ?? null), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/diene/Documents/Projet-Wari/TransArg/src/Controller/PartenaireController.php", 0), "html", null, true);
        echo "\">src/Controller/PartenaireController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("/home/diene/Documents/Projet-Wari/TransArg/templates/partenaire/index.html.twig", 0), "html", null, true);
        echo "\">templates/partenaire/index.html.twig</a></code></li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "partenaire/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  73 => 16,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partenaire/index.html.twig", "/home/diene/Documents/Transfert-Argent-/TransArg/templates/partenaire/index.html.twig");
    }
}
