<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c8d21550850074782862265b813a9c2aea7c608253db98e24225c2ea859cc33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01ce03b51413ed92462e77305870ee35816971aa6dbc7514c271a7f32a39e85e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01ce03b51413ed92462e77305870ee35816971aa6dbc7514c271a7f32a39e85e->enter($__internal_01ce03b51413ed92462e77305870ee35816971aa6dbc7514c271a7f32a39e85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ac95857b6fbb5319dd5c530b5703dde1fc508021fbbf1cb6e2a0df6322be7709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac95857b6fbb5319dd5c530b5703dde1fc508021fbbf1cb6e2a0df6322be7709->enter($__internal_ac95857b6fbb5319dd5c530b5703dde1fc508021fbbf1cb6e2a0df6322be7709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ce03b51413ed92462e77305870ee35816971aa6dbc7514c271a7f32a39e85e->leave($__internal_01ce03b51413ed92462e77305870ee35816971aa6dbc7514c271a7f32a39e85e_prof);

        
        $__internal_ac95857b6fbb5319dd5c530b5703dde1fc508021fbbf1cb6e2a0df6322be7709->leave($__internal_ac95857b6fbb5319dd5c530b5703dde1fc508021fbbf1cb6e2a0df6322be7709_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7fdf471a606619adc4a7ecbeb995e2fdfd54fe8cde1596ee6751d4eaf22d18c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fdf471a606619adc4a7ecbeb995e2fdfd54fe8cde1596ee6751d4eaf22d18c8->enter($__internal_7fdf471a606619adc4a7ecbeb995e2fdfd54fe8cde1596ee6751d4eaf22d18c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_57552cfb641f40dd0842501e14e393d2f295ef190156018850aec61325409ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57552cfb641f40dd0842501e14e393d2f295ef190156018850aec61325409ca7->enter($__internal_57552cfb641f40dd0842501e14e393d2f295ef190156018850aec61325409ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57552cfb641f40dd0842501e14e393d2f295ef190156018850aec61325409ca7->leave($__internal_57552cfb641f40dd0842501e14e393d2f295ef190156018850aec61325409ca7_prof);

        
        $__internal_7fdf471a606619adc4a7ecbeb995e2fdfd54fe8cde1596ee6751d4eaf22d18c8->leave($__internal_7fdf471a606619adc4a7ecbeb995e2fdfd54fe8cde1596ee6751d4eaf22d18c8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26662fddb9c89d83811e78e84cf513c776e2eb306e88512532093632bb95bf32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26662fddb9c89d83811e78e84cf513c776e2eb306e88512532093632bb95bf32->enter($__internal_26662fddb9c89d83811e78e84cf513c776e2eb306e88512532093632bb95bf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b77644c97d9074889cbbb7e9c27cef0d56e104575f74453af14ecde0ce8c8635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77644c97d9074889cbbb7e9c27cef0d56e104575f74453af14ecde0ce8c8635->enter($__internal_b77644c97d9074889cbbb7e9c27cef0d56e104575f74453af14ecde0ce8c8635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b77644c97d9074889cbbb7e9c27cef0d56e104575f74453af14ecde0ce8c8635->leave($__internal_b77644c97d9074889cbbb7e9c27cef0d56e104575f74453af14ecde0ce8c8635_prof);

        
        $__internal_26662fddb9c89d83811e78e84cf513c776e2eb306e88512532093632bb95bf32->leave($__internal_26662fddb9c89d83811e78e84cf513c776e2eb306e88512532093632bb95bf32_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cedbf4e52afc60b705abd36c2c59aeac378e03b12a7f8b5cd107da3f5c3c374b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cedbf4e52afc60b705abd36c2c59aeac378e03b12a7f8b5cd107da3f5c3c374b->enter($__internal_cedbf4e52afc60b705abd36c2c59aeac378e03b12a7f8b5cd107da3f5c3c374b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_770a0abed9689c3ade67a73aa46b9a8afec3406a7cb7e670120c0c6e0e72ae6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770a0abed9689c3ade67a73aa46b9a8afec3406a7cb7e670120c0c6e0e72ae6a->enter($__internal_770a0abed9689c3ade67a73aa46b9a8afec3406a7cb7e670120c0c6e0e72ae6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_770a0abed9689c3ade67a73aa46b9a8afec3406a7cb7e670120c0c6e0e72ae6a->leave($__internal_770a0abed9689c3ade67a73aa46b9a8afec3406a7cb7e670120c0c6e0e72ae6a_prof);

        
        $__internal_cedbf4e52afc60b705abd36c2c59aeac378e03b12a7f8b5cd107da3f5c3c374b->leave($__internal_cedbf4e52afc60b705abd36c2c59aeac378e03b12a7f8b5cd107da3f5c3c374b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
