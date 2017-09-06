<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_38add8f93962e0d5e03328f19521c6159c1516547151e3a9ceebd983e94e0e69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e13724a7b3a5316b6275d76128be866391a80f8c4fddf580547e34ddd4c61097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e13724a7b3a5316b6275d76128be866391a80f8c4fddf580547e34ddd4c61097->enter($__internal_e13724a7b3a5316b6275d76128be866391a80f8c4fddf580547e34ddd4c61097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6151de3a1effaa6915fddfa79f7bff552d2a0ac51fb29b3b55f11cab0a191469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6151de3a1effaa6915fddfa79f7bff552d2a0ac51fb29b3b55f11cab0a191469->enter($__internal_6151de3a1effaa6915fddfa79f7bff552d2a0ac51fb29b3b55f11cab0a191469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13724a7b3a5316b6275d76128be866391a80f8c4fddf580547e34ddd4c61097->leave($__internal_e13724a7b3a5316b6275d76128be866391a80f8c4fddf580547e34ddd4c61097_prof);

        
        $__internal_6151de3a1effaa6915fddfa79f7bff552d2a0ac51fb29b3b55f11cab0a191469->leave($__internal_6151de3a1effaa6915fddfa79f7bff552d2a0ac51fb29b3b55f11cab0a191469_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5c7e2701a25c49c26351ad187b953911b9ad1015bf6a8792af271574b7fa6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c7e2701a25c49c26351ad187b953911b9ad1015bf6a8792af271574b7fa6bb->enter($__internal_c5c7e2701a25c49c26351ad187b953911b9ad1015bf6a8792af271574b7fa6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92cd0c4fc54faa8a6e834ec9a9efa7ecfb9c427a1ca686e5e105dec1c20e8939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92cd0c4fc54faa8a6e834ec9a9efa7ecfb9c427a1ca686e5e105dec1c20e8939->enter($__internal_92cd0c4fc54faa8a6e834ec9a9efa7ecfb9c427a1ca686e5e105dec1c20e8939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_92cd0c4fc54faa8a6e834ec9a9efa7ecfb9c427a1ca686e5e105dec1c20e8939->leave($__internal_92cd0c4fc54faa8a6e834ec9a9efa7ecfb9c427a1ca686e5e105dec1c20e8939_prof);

        
        $__internal_c5c7e2701a25c49c26351ad187b953911b9ad1015bf6a8792af271574b7fa6bb->leave($__internal_c5c7e2701a25c49c26351ad187b953911b9ad1015bf6a8792af271574b7fa6bb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f213670c538995637df8fbfa799f1331cc366bf697a7b3426ef4ebade8a082b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f213670c538995637df8fbfa799f1331cc366bf697a7b3426ef4ebade8a082b3->enter($__internal_f213670c538995637df8fbfa799f1331cc366bf697a7b3426ef4ebade8a082b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30cecae1c1d5de74275833f8a55dca278d5189670d701e88983ae1e18da3880f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30cecae1c1d5de74275833f8a55dca278d5189670d701e88983ae1e18da3880f->enter($__internal_30cecae1c1d5de74275833f8a55dca278d5189670d701e88983ae1e18da3880f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_30cecae1c1d5de74275833f8a55dca278d5189670d701e88983ae1e18da3880f->leave($__internal_30cecae1c1d5de74275833f8a55dca278d5189670d701e88983ae1e18da3880f_prof);

        
        $__internal_f213670c538995637df8fbfa799f1331cc366bf697a7b3426ef4ebade8a082b3->leave($__internal_f213670c538995637df8fbfa799f1331cc366bf697a7b3426ef4ebade8a082b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2445e2d84d0c7b0da5d60bb13361709e1e2ebc92d8ce8c593c6d8b3eb27b816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2445e2d84d0c7b0da5d60bb13361709e1e2ebc92d8ce8c593c6d8b3eb27b816->enter($__internal_f2445e2d84d0c7b0da5d60bb13361709e1e2ebc92d8ce8c593c6d8b3eb27b816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f16523664f379295aabe342a799c6fc2243f31b281128f2398b515d4012ec691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16523664f379295aabe342a799c6fc2243f31b281128f2398b515d4012ec691->enter($__internal_f16523664f379295aabe342a799c6fc2243f31b281128f2398b515d4012ec691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f16523664f379295aabe342a799c6fc2243f31b281128f2398b515d4012ec691->leave($__internal_f16523664f379295aabe342a799c6fc2243f31b281128f2398b515d4012ec691_prof);

        
        $__internal_f2445e2d84d0c7b0da5d60bb13361709e1e2ebc92d8ce8c593c6d8b3eb27b816->leave($__internal_f2445e2d84d0c7b0da5d60bb13361709e1e2ebc92d8ce8c593c6d8b3eb27b816_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/reinhold/Documents/Work/Vlaz/symfony_demo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
