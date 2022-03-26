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

/* import/index.html.twig */
class __TwigTemplate_7f729384d972b33d4189841caf6e90d623e1cc83901904695bcafdb8329b128f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "import/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello ImportController!";
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

    <h3>Total Jokes: ";
        // line 14
        echo twig_escape_filter($this->env, ($context["total_jokes"] ?? null), "html", null, true);
        echo "</h3>
    <h3>Joke Counter: ";
        // line 15
        echo twig_escape_filter($this->env, ($context["joke_counter"] ?? null), "html", null, true);
        echo "</h3>
    <h3>Total Pages: ";
        // line 16
        echo twig_escape_filter($this->env, ($context["total_pages"] ?? null), "html", null, true);
        echo "</h3>
    <h3>New Jokes Added to DB: ";
        // line 17
        echo twig_escape_filter($this->env, ($context["new_joke_counter"] ?? null), "html", null, true);
        echo "</h3>

    <div class='show-jokes'>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>ID</th>
                    <th scope='col'>Joke</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["jokes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["joke"]) {
            // line 29
            echo "                <tr>
                    <th scope=\"row\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo " </th>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joke'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
        </table>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "import/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  108 => 31,  104 => 30,  101 => 29,  97 => 28,  83 => 17,  79 => 16,  75 => 15,  71 => 14,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "import/index.html.twig", "C:\\xampp\\htdocs\\projects\\Jokestinger\\templates\\import\\index.html.twig");
    }
}
