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

/* search/index.html.twig */
class __TwigTemplate_59c001d5f967636d2ca1addfb44944b63843ae1c5b00c208f099dd27a726697b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Search for Jokes";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search_jokes");
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
<div class=\"example-wrapper\">

    ";
        // line 13
        if (((array_key_exists("new_rating", $context)) ? (_twig_default_filter(($context["new_rating"] ?? null))) : (""))) {
            // line 14
            echo "        <div class=\"alert alert-primary new-rating-alert\" role=\"alert\">
            Rating Successfully Published. 
            ";
            // line 16
            if (((array_key_exists("joke_id", $context)) ? (_twig_default_filter(($context["joke_id"] ?? null))) : (""))) {
                // line 17
                echo "                <a href='/view/joke/";
                echo twig_escape_filter($this->env, ($context["joke_id"] ?? null), "html", null, true);
                echo "'>View Joke</a>
            ";
            }
            // line 19
            echo "        </div>
    ";
        }
        // line 21
        echo "
    <h1>Search for Jokes Here!</h1>
    <hr>
    ";
        // line 24
        if (((array_key_exists("form", $context)) ? (_twig_default_filter(($context["form"] ?? null))) : (""))) {
            // line 25
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["attr" => ["class" => "search-jokes-form"]]);
            echo "
            <div class='form-group'>
                <label>Search Term:
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "joke", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control joke-field"]]);
            echo "
                </label>
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
            echo "
            </div>
        ";
            // line 32
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if (($context["search_exists"] ?? null)) {
            // line 36
            echo "        ";
            if ((($context["jokes_count"] ?? null) == 0)) {
                // line 37
                echo "            <div class=\"alert alert-warning joke-search-alert\" role=\"alert\">
                <strong>Sorry!</strong> Your search returned 0 results. That's not funny...
                <button type=\"button\" class=\"btn btn-secondary close-alert\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        ";
            } else {
                // line 44
                echo "            <div class=\"alert alert-success joke-search-alert\" role=\"alert\">
                <strong>Success!</strong> Your search found ";
                // line 45
                echo twig_escape_filter($this->env, ($context["jokes_count"] ?? null), "html", null, true);
                echo " jokes.
                <button type=\"button\" class=\"btn btn-secondary close-alert\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <hr class='top-thirty'>
            <table class='table table-striped table-hover' id='search-results-table'>
                <thead>
                    <tr>
                        <th scope='col' class='search-results w-sixty'>Joke</th>
                        <th scope='col' class='search-results center-me w-twenty'>Average Rating</th>
                        <th scope='col' class='search-results center-me w-twenty'>Rate Joke</th>
                    </tr>
                </thead>

                <tbody>
                    ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["jokes_display"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["joke"]) {
                    // line 62
                    echo "                        <tr>
                            <th scope='row' class='search-results w-sixty'>
                                <a href='/view/joke/";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_id", [], "any", false, false, false, 64), "html", null, true);
                    echo "'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_text", [], "any", false, false, false, 64), "html", null, true);
                    echo "</a>
                            </th>
                            <td class='search-results center-me w-twenty'>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_rating", [], "any", false, false, false, 66), "html", null, true);
                    echo "</td>
                            <td class='search-results center-me w-twenty'>
                                <a href='/rate/joke/";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_id", [], "any", false, false, false, 68), "html", null, true);
                    echo "?rating=1'>1</a>
                                <a href='/rate/joke/";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_id", [], "any", false, false, false, 69), "html", null, true);
                    echo "?rating=2'>2</a>
                                <a href='/rate/joke/";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_id", [], "any", false, false, false, 70), "html", null, true);
                    echo "?rating=3'>3</a>
                                <a href='/rate/joke/";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_id", [], "any", false, false, false, 71), "html", null, true);
                    echo "?rating=4'>4</a>
                                <a href='/rate/joke/";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["joke"], "joke_id", [], "any", false, false, false, 72), "html", null, true);
                    echo "?rating=5'>5</a>
                            </td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['joke'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                </tbody>
            </table>
        ";
            }
            // line 79
            echo "    ";
        } else {
            // line 80
            echo "        <hr class='top-thirty'>
    ";
        }
        // line 82
        echo "    
</div>
";
    }

    public function getTemplateName()
    {
        return "search/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 82,  215 => 80,  212 => 79,  207 => 76,  197 => 72,  193 => 71,  189 => 70,  185 => 69,  181 => 68,  176 => 66,  169 => 64,  165 => 62,  161 => 61,  142 => 45,  139 => 44,  130 => 37,  127 => 36,  125 => 35,  122 => 34,  117 => 32,  112 => 30,  107 => 28,  100 => 25,  98 => 24,  93 => 21,  89 => 19,  83 => 17,  81 => 16,  77 => 14,  75 => 13,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "search/index.html.twig", "C:\\xampp\\htdocs\\projects\\Jokestinger\\templates\\search\\index.html.twig");
    }
}
