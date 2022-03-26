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
class __TwigTemplate_b942b8c58587a5e4e64fe02323c7b7658aa632b0b5e16a0e4d949e2fb001bd09 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Search for Jokes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("search_jokes");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<div class=\"example-wrapper\">

    ";
        // line 13
        if (((array_key_exists("new_rating", $context)) ? (_twig_default_filter((isset($context["new_rating"]) || array_key_exists("new_rating", $context) ? $context["new_rating"] : (function () { throw new RuntimeError('Variable "new_rating" does not exist.', 13, $this->source); })()))) : (""))) {
            // line 14
            echo "        <div class=\"alert alert-primary new-rating-alert\" role=\"alert\">
            Rating Successfully Published. 
            ";
            // line 16
            if (((array_key_exists("joke_id", $context)) ? (_twig_default_filter((isset($context["joke_id"]) || array_key_exists("joke_id", $context) ? $context["joke_id"] : (function () { throw new RuntimeError('Variable "joke_id" does not exist.', 16, $this->source); })()))) : (""))) {
                // line 17
                echo "                <a href='/view/joke/";
                echo twig_escape_filter($this->env, (isset($context["joke_id"]) || array_key_exists("joke_id", $context) ? $context["joke_id"] : (function () { throw new RuntimeError('Variable "joke_id" does not exist.', 17, $this->source); })()), "html", null, true);
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
        if (((array_key_exists("form", $context)) ? (_twig_default_filter((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()))) : (""))) {
            // line 25
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "search-jokes-form"]]);
            echo "
            <div class='form-group'>
                <label>Search Term:
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "joke", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-control joke-field"]]);
            echo "
                </label>
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "search", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "btn btn-primary"]]);
            echo "
            </div>
        ";
            // line 32
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 34
        echo "
    ";
        // line 35
        if ((isset($context["search_exists"]) || array_key_exists("search_exists", $context) ? $context["search_exists"] : (function () { throw new RuntimeError('Variable "search_exists" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "        ";
            if (((isset($context["jokes_count"]) || array_key_exists("jokes_count", $context) ? $context["jokes_count"] : (function () { throw new RuntimeError('Variable "jokes_count" does not exist.', 36, $this->source); })()) == 0)) {
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
                echo twig_escape_filter($this->env, (isset($context["jokes_count"]) || array_key_exists("jokes_count", $context) ? $context["jokes_count"] : (function () { throw new RuntimeError('Variable "jokes_count" does not exist.', 45, $this->source); })()), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable((isset($context["jokes_display"]) || array_key_exists("jokes_display", $context) ? $context["jokes_display"] : (function () { throw new RuntimeError('Variable "jokes_display" does not exist.', 61, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  261 => 82,  257 => 80,  254 => 79,  249 => 76,  239 => 72,  235 => 71,  231 => 70,  227 => 69,  223 => 68,  218 => 66,  211 => 64,  207 => 62,  203 => 61,  184 => 45,  181 => 44,  172 => 37,  169 => 36,  167 => 35,  164 => 34,  159 => 32,  154 => 30,  149 => 28,  142 => 25,  140 => 24,  135 => 21,  131 => 19,  125 => 17,  123 => 16,  119 => 14,  117 => 13,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Search for Jokes{% endblock %}

{% block javascripts %}
    {{ encore_entry_script_tags('search_jokes')}}
{% endblock %}

{% block body %}

<div class=\"example-wrapper\">

    {% if new_rating|default %}
        <div class=\"alert alert-primary new-rating-alert\" role=\"alert\">
            Rating Successfully Published. 
            {% if joke_id|default %}
                <a href='/view/joke/{{ joke_id }}'>View Joke</a>
            {% endif %}
        </div>
    {% endif %}

    <h1>Search for Jokes Here!</h1>
    <hr>
    {% if form|default %}
        {{ form_start(form, {'attr': {'class': 'search-jokes-form'}}) }}
            <div class='form-group'>
                <label>Search Term:
                {{ form_widget(form.joke, {'attr': {'class': 'form-control joke-field'}}) }}
                </label>
                {{ form_widget(form.search, {'attr': {'class': 'btn btn-primary'}}) }}
            </div>
        {{ form_end(form) }}
    {% endif %}

    {% if search_exists %}
        {% if jokes_count == 0 %}
            <div class=\"alert alert-warning joke-search-alert\" role=\"alert\">
                <strong>Sorry!</strong> Your search returned 0 results. That's not funny...
                <button type=\"button\" class=\"btn btn-secondary close-alert\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
        {% else %}
            <div class=\"alert alert-success joke-search-alert\" role=\"alert\">
                <strong>Success!</strong> Your search found {{ jokes_count }} jokes.
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
                    {% for joke in jokes_display %}
                        <tr>
                            <th scope='row' class='search-results w-sixty'>
                                <a href='/view/joke/{{ joke.joke_id }}'>{{ joke.joke_text }}</a>
                            </th>
                            <td class='search-results center-me w-twenty'>{{ joke.joke_rating }}</td>
                            <td class='search-results center-me w-twenty'>
                                <a href='/rate/joke/{{ joke.joke_id }}?rating=1'>1</a>
                                <a href='/rate/joke/{{ joke.joke_id }}?rating=2'>2</a>
                                <a href='/rate/joke/{{ joke.joke_id }}?rating=3'>3</a>
                                <a href='/rate/joke/{{ joke.joke_id }}?rating=4'>4</a>
                                <a href='/rate/joke/{{ joke.joke_id }}?rating=5'>5</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% else %}
        <hr class='top-thirty'>
    {% endif %}
    
</div>
{% endblock %}
", "search/index.html.twig", "C:\\xampp\\htdocs\\projects\\Jokestinger\\templates\\search\\index.html.twig");
    }
}
