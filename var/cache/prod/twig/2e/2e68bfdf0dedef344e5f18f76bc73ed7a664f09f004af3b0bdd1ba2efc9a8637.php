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

/* view_joke/index.html.twig */
class __TwigTemplate_3ef986bfd3297023c90f6bed92c64bfaea8fe764e861321b6457de8c755a261e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "view_joke/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Add a Comment";
    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("view_joke");
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
    ";
        // line 16
        if (($context["comment_published"] ?? null)) {
            // line 17
            echo "        <div class=\"alert alert-success joke-search-alert bottom-ten\" role=\"alert\">
            <strong>Success!</strong> Your comment was added.
            <button type=\"button\" class=\"btn btn-secondary close-alert\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
            </button>
        </div>
    ";
        }
        // line 24
        echo "    <h1>Joke Details</h1>
    <hr>
    <blockquote class=\"blockquote text-center\">
        <p class=\"mb-10\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["joke"] ?? null), "joke", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
        <footer class=\"blockquote-footer\">Someone <cite title=\"Source Title\">funny</cite></footer>
    </blockquote>
    <hr>
    <div id='comment-form-container' class='container'>
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            <!-- <div class='form-group'> -->
                <div class='divider'></div>
                <p class='bottom-ten'>Enter your comment:</p>
                <div class='row'>
                    <div class='col-9'>
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "comment", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control comment-field"]]);
        echo "
                    </div>
                    <div class='col-3'>
                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "full-width btn btn-primary"]]);
        echo "
                    </div>
                </div>
            <!-- </div> -->
        ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    <hr class='top-thirty'>
    <div id='joke-comments-container'>
        <table class='table table-striped table-hover'>
            <thead>
                <tr>
                    <th scope='col'>Comments</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 56
        if ((twig_length_filter($this->env, ($context["comments"] ?? null)) > 0)) {
            // line 57
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 58
                echo "                    <tr>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 59), "html", null, true);
                echo "
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 60), "html", null, true);
                echo "</td>
                    </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                ";
        } else {
            // line 64
            echo "                    <tr><td>No comments yet. Be the first!</td></tr>
                ";
        }
        // line 66
        echo "            </tbody>
        </table>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "view_joke/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 66,  185 => 64,  182 => 63,  165 => 60,  161 => 59,  158 => 58,  140 => 57,  138 => 56,  124 => 45,  117 => 41,  111 => 38,  102 => 32,  94 => 27,  89 => 24,  80 => 17,  78 => 16,  70 => 10,  66 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "view_joke/index.html.twig", "C:\\xampp\\htdocs\\projects\\Jokestinger\\templates\\view_joke\\index.html.twig");
    }
}
