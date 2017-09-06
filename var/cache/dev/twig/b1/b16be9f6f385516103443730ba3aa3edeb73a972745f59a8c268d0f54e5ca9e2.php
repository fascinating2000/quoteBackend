<?php

/* quote/new.html.twig */
class __TwigTemplate_a0b7a566e47e433c7003d8364b1e57b46d21273c85eed1c6899e95e91aacbf91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "quote/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f35366417d7d05859d27f66e0c5e0f251ab40c6bb0dab4685652787937bb24d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35366417d7d05859d27f66e0c5e0f251ab40c6bb0dab4685652787937bb24d8->enter($__internal_f35366417d7d05859d27f66e0c5e0f251ab40c6bb0dab4685652787937bb24d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quote/new.html.twig"));

        $__internal_6910f03432837f88f6a865a930e801c81c9089925a80274fd659dd0aad9208f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6910f03432837f88f6a865a930e801c81c9089925a80274fd659dd0aad9208f2->enter($__internal_6910f03432837f88f6a865a930e801c81c9089925a80274fd659dd0aad9208f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quote/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f35366417d7d05859d27f66e0c5e0f251ab40c6bb0dab4685652787937bb24d8->leave($__internal_f35366417d7d05859d27f66e0c5e0f251ab40c6bb0dab4685652787937bb24d8_prof);

        
        $__internal_6910f03432837f88f6a865a930e801c81c9089925a80274fd659dd0aad9208f2->leave($__internal_6910f03432837f88f6a865a930e801c81c9089925a80274fd659dd0aad9208f2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b05efdb40bb4f8e4606f5f96eb1a3c7bc9495e459f4003e24104aff1368c28ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05efdb40bb4f8e4606f5f96eb1a3c7bc9495e459f4003e24104aff1368c28ec->enter($__internal_b05efdb40bb4f8e4606f5f96eb1a3c7bc9495e459f4003e24104aff1368c28ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ba83ff12f42dd41ef33c90a376e3822c63679a8e65adfde60268985510e9561d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba83ff12f42dd41ef33c90a376e3822c63679a8e65adfde60268985510e9561d->enter($__internal_ba83ff12f42dd41ef33c90a376e3822c63679a8e65adfde60268985510e9561d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quote creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quote_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ba83ff12f42dd41ef33c90a376e3822c63679a8e65adfde60268985510e9561d->leave($__internal_ba83ff12f42dd41ef33c90a376e3822c63679a8e65adfde60268985510e9561d_prof);

        
        $__internal_b05efdb40bb4f8e4606f5f96eb1a3c7bc9495e459f4003e24104aff1368c28ec->leave($__internal_b05efdb40bb4f8e4606f5f96eb1a3c7bc9495e459f4003e24104aff1368c28ec_prof);

    }

    public function getTemplateName()
    {
        return "quote/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Quote creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('quote_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "quote/new.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/app/Resources/views/quote/new.html.twig");
    }
}
