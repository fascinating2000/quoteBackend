<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d3b95504062c0c6480f615ef6332c75ee9b773829bef4183e7960c71ac413338 extends Twig_Template
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
        $__internal_63417dbb5e6809f7a1bca5bdc9d3e1cf001b5610b064035e30f1162777e03612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63417dbb5e6809f7a1bca5bdc9d3e1cf001b5610b064035e30f1162777e03612->enter($__internal_63417dbb5e6809f7a1bca5bdc9d3e1cf001b5610b064035e30f1162777e03612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9a938cac58d92d9cefc79dd84208289e5df40c6a99cdf8a995471be7fd3ab5f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a938cac58d92d9cefc79dd84208289e5df40c6a99cdf8a995471be7fd3ab5f0->enter($__internal_9a938cac58d92d9cefc79dd84208289e5df40c6a99cdf8a995471be7fd3ab5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63417dbb5e6809f7a1bca5bdc9d3e1cf001b5610b064035e30f1162777e03612->leave($__internal_63417dbb5e6809f7a1bca5bdc9d3e1cf001b5610b064035e30f1162777e03612_prof);

        
        $__internal_9a938cac58d92d9cefc79dd84208289e5df40c6a99cdf8a995471be7fd3ab5f0->leave($__internal_9a938cac58d92d9cefc79dd84208289e5df40c6a99cdf8a995471be7fd3ab5f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe6c809a442e74ef39fc3037864b279fe3ebee61d493b9a03fae141f7ba90203 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe6c809a442e74ef39fc3037864b279fe3ebee61d493b9a03fae141f7ba90203->enter($__internal_fe6c809a442e74ef39fc3037864b279fe3ebee61d493b9a03fae141f7ba90203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_79e8fb3aa2fd4dae0bef7800d4c14d8b9cd2e0665fc0ac88fc18166f071c06f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e8fb3aa2fd4dae0bef7800d4c14d8b9cd2e0665fc0ac88fc18166f071c06f1->enter($__internal_79e8fb3aa2fd4dae0bef7800d4c14d8b9cd2e0665fc0ac88fc18166f071c06f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_79e8fb3aa2fd4dae0bef7800d4c14d8b9cd2e0665fc0ac88fc18166f071c06f1->leave($__internal_79e8fb3aa2fd4dae0bef7800d4c14d8b9cd2e0665fc0ac88fc18166f071c06f1_prof);

        
        $__internal_fe6c809a442e74ef39fc3037864b279fe3ebee61d493b9a03fae141f7ba90203->leave($__internal_fe6c809a442e74ef39fc3037864b279fe3ebee61d493b9a03fae141f7ba90203_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4a4f46bdf5307b1c07da943b6e76b26eace16d4c286406c9085ab3ce65494932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4f46bdf5307b1c07da943b6e76b26eace16d4c286406c9085ab3ce65494932->enter($__internal_4a4f46bdf5307b1c07da943b6e76b26eace16d4c286406c9085ab3ce65494932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_685e6bac8e038030d73104bd3f5743eace4556f16c0bacee977a604f04c337bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685e6bac8e038030d73104bd3f5743eace4556f16c0bacee977a604f04c337bb->enter($__internal_685e6bac8e038030d73104bd3f5743eace4556f16c0bacee977a604f04c337bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_685e6bac8e038030d73104bd3f5743eace4556f16c0bacee977a604f04c337bb->leave($__internal_685e6bac8e038030d73104bd3f5743eace4556f16c0bacee977a604f04c337bb_prof);

        
        $__internal_4a4f46bdf5307b1c07da943b6e76b26eace16d4c286406c9085ab3ce65494932->leave($__internal_4a4f46bdf5307b1c07da943b6e76b26eace16d4c286406c9085ab3ce65494932_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e724d1bfe65563b82f6a7736a558590cc7db91ff4b57dc15e6b0a7e40324da00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e724d1bfe65563b82f6a7736a558590cc7db91ff4b57dc15e6b0a7e40324da00->enter($__internal_e724d1bfe65563b82f6a7736a558590cc7db91ff4b57dc15e6b0a7e40324da00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b006c92d2373abd9d7e3d2cf70f733f797498b56c65c41fc4abf4d2cc434f2da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b006c92d2373abd9d7e3d2cf70f733f797498b56c65c41fc4abf4d2cc434f2da->enter($__internal_b006c92d2373abd9d7e3d2cf70f733f797498b56c65c41fc4abf4d2cc434f2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b006c92d2373abd9d7e3d2cf70f733f797498b56c65c41fc4abf4d2cc434f2da->leave($__internal_b006c92d2373abd9d7e3d2cf70f733f797498b56c65c41fc4abf4d2cc434f2da_prof);

        
        $__internal_e724d1bfe65563b82f6a7736a558590cc7db91ff4b57dc15e6b0a7e40324da00->leave($__internal_e724d1bfe65563b82f6a7736a558590cc7db91ff4b57dc15e6b0a7e40324da00_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/reinhold/Documents/Work/Vlaz/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
