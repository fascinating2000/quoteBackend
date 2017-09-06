<?php

/* @CodeExplorer/source_code.html.twig */
class __TwigTemplate_d8f085cfc2a67ced7985c52e461dc61e4202d543b6fb9ae530c3915046c03c4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e967811559225c4ac48536d67b7a6f749698ca3cc455050800a805cfb308976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e967811559225c4ac48536d67b7a6f749698ca3cc455050800a805cfb308976->enter($__internal_6e967811559225c4ac48536d67b7a6f749698ca3cc455050800a805cfb308976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CodeExplorer/source_code.html.twig"));

        $__internal_47ad8b3ef3ed378625090e3416ac530819203cbb692e6eee68958aee775821e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ad8b3ef3ed378625090e3416ac530819203cbb692e6eee68958aee775821e3->enter($__internal_47ad8b3ef3ed378625090e3416ac530819203cbb692e6eee68958aee775821e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CodeExplorer/source_code.html.twig"));

        // line 1
        echo "<div class=\"section source-code\">
    <p>
        ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.show_code");
        echo "
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.show_code"), "html", null, true);
        echo "
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.source_code"), "html", null, true);
        echo "</h4>
                </div>

                <div class=\"modal-body\">
                    ";
        // line 21
        if ((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller"))) {
            // line 22
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.controller_code"), "html", null, true);
            echo "<small class=\"pull-right\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "file_path", array()), $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "starting_line", array()));
            echo "</small></h3>
                        <pre><code class=\"php\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["controller"]) ? $context["controller"] : $this->getContext($context, "controller")), "source_code", array()), "html", null, true);
            echo "</code></pre>
                    ";
        } else {
            // line 25
            echo "                        <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.controller_code"), "html", null, true);
            echo "</h3>
                        <pre><code>";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("not_available"), "html", null, true);
            echo "</code></pre>
                    ";
        }
        // line 28
        echo "
                    <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.twig_template_code"), "html", null, true);
        echo "<small class=\"pull-right\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFile($this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "file_path", array()), $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "starting_line", array()));
        echo "</small></h3>
                    <pre><code class=\"twig\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["template"]) ? $context["template"] : $this->getContext($context, "template")), "source_code", array()), "html", null, true);
        echo "</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6e967811559225c4ac48536d67b7a6f749698ca3cc455050800a805cfb308976->leave($__internal_6e967811559225c4ac48536d67b7a6f749698ca3cc455050800a805cfb308976_prof);

        
        $__internal_47ad8b3ef3ed378625090e3416ac530819203cbb692e6eee68958aee775821e3->leave($__internal_47ad8b3ef3ed378625090e3416ac530819203cbb692e6eee68958aee775821e3_prof);

    }

    public function getTemplateName()
    {
        return "@CodeExplorer/source_code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  83 => 29,  80 => 28,  75 => 26,  70 => 25,  65 => 23,  58 => 22,  56 => 21,  49 => 17,  36 => 7,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section source-code\">
    <p>
        {{ 'help.show_code'|trans|raw }}
    </p>

    <button type=\"button\" class=\"btn btn-default btn-lg btn-block\" data-toggle=\"modal\" data-target=\"#sourceCodeModal\">
      <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i> {{ 'action.show_code'|trans }}
    </button>

    <div class=\"modal fade\" id=\"sourceCodeModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-code\" aria-hidden=\"true\"></i> {{ 'title.source_code'|trans }}</h4>
                </div>

                <div class=\"modal-body\">
                    {% if controller %}
                        <h3>{{ 'title.controller_code'|trans }}<small class=\"pull-right\">{{ controller.file_path|format_file(controller.starting_line) }}</small></h3>
                        <pre><code class=\"php\">{{ controller.source_code }}</code></pre>
                    {% else %}
                        <h3>{{ 'title.controller_code'|trans }}</h3>
                        <pre><code>{{ 'not_available'|trans }}</code></pre>
                    {% endif %}

                    <h3>{{ 'title.twig_template_code'|trans }}<small class=\"pull-right\">{{ template.file_path|format_file(template.starting_line) }}</small></h3>
                    <pre><code class=\"twig\">{{ template.source_code }}</code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
", "@CodeExplorer/source_code.html.twig", "/home/reinhold/Documents/Work/Vlaz/symfony_demo/src/CodeExplorerBundle/Resources/views/source_code.html.twig");
    }
}
