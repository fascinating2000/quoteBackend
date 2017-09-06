<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_09a4032973f8cc4f1c86fa4e79b429fc42c726d6c905186ea2a27c83f32cef1e extends Twig_Template
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
        $__internal_c204e2a32090d6caaf56ebf82e56db94fec9cfdfa1a0e7bebd164ba71a0c8866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c204e2a32090d6caaf56ebf82e56db94fec9cfdfa1a0e7bebd164ba71a0c8866->enter($__internal_c204e2a32090d6caaf56ebf82e56db94fec9cfdfa1a0e7bebd164ba71a0c8866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f7b2a910d212d3ed23aebd932b183e9b3fe085cfdab7fb15612866582e767735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b2a910d212d3ed23aebd932b183e9b3fe085cfdab7fb15612866582e767735->enter($__internal_f7b2a910d212d3ed23aebd932b183e9b3fe085cfdab7fb15612866582e767735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c204e2a32090d6caaf56ebf82e56db94fec9cfdfa1a0e7bebd164ba71a0c8866->leave($__internal_c204e2a32090d6caaf56ebf82e56db94fec9cfdfa1a0e7bebd164ba71a0c8866_prof);

        
        $__internal_f7b2a910d212d3ed23aebd932b183e9b3fe085cfdab7fb15612866582e767735->leave($__internal_f7b2a910d212d3ed23aebd932b183e9b3fe085cfdab7fb15612866582e767735_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aac7a2bec66d2121080c5b14491f54c11685ed1f39af4e293d736a7a643ee858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac7a2bec66d2121080c5b14491f54c11685ed1f39af4e293d736a7a643ee858->enter($__internal_aac7a2bec66d2121080c5b14491f54c11685ed1f39af4e293d736a7a643ee858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91d28dc3080ef8dcfc4fe2c2737c615d72223c129e71f72e104ea5d423d78067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91d28dc3080ef8dcfc4fe2c2737c615d72223c129e71f72e104ea5d423d78067->enter($__internal_91d28dc3080ef8dcfc4fe2c2737c615d72223c129e71f72e104ea5d423d78067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_91d28dc3080ef8dcfc4fe2c2737c615d72223c129e71f72e104ea5d423d78067->leave($__internal_91d28dc3080ef8dcfc4fe2c2737c615d72223c129e71f72e104ea5d423d78067_prof);

        
        $__internal_aac7a2bec66d2121080c5b14491f54c11685ed1f39af4e293d736a7a643ee858->leave($__internal_aac7a2bec66d2121080c5b14491f54c11685ed1f39af4e293d736a7a643ee858_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_303adde0677aee92ff0705f8ffbc43524eaae9e22b2d2a2ae41dc0c49b8d6096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303adde0677aee92ff0705f8ffbc43524eaae9e22b2d2a2ae41dc0c49b8d6096->enter($__internal_303adde0677aee92ff0705f8ffbc43524eaae9e22b2d2a2ae41dc0c49b8d6096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c23062d6b243fbac208522bde6d1b183e05e9f0dff018fe05e8708bb7a6f3900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23062d6b243fbac208522bde6d1b183e05e9f0dff018fe05e8708bb7a6f3900->enter($__internal_c23062d6b243fbac208522bde6d1b183e05e9f0dff018fe05e8708bb7a6f3900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c23062d6b243fbac208522bde6d1b183e05e9f0dff018fe05e8708bb7a6f3900->leave($__internal_c23062d6b243fbac208522bde6d1b183e05e9f0dff018fe05e8708bb7a6f3900_prof);

        
        $__internal_303adde0677aee92ff0705f8ffbc43524eaae9e22b2d2a2ae41dc0c49b8d6096->leave($__internal_303adde0677aee92ff0705f8ffbc43524eaae9e22b2d2a2ae41dc0c49b8d6096_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01f1327bf64ecbd99cd2643623f7576281ef4621ba075b3d957bb2e2b469c87c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01f1327bf64ecbd99cd2643623f7576281ef4621ba075b3d957bb2e2b469c87c->enter($__internal_01f1327bf64ecbd99cd2643623f7576281ef4621ba075b3d957bb2e2b469c87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41398f808944177923d41ca8bfc321fa0f150480c60b16a940b4b06bc985a0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41398f808944177923d41ca8bfc321fa0f150480c60b16a940b4b06bc985a0d8->enter($__internal_41398f808944177923d41ca8bfc321fa0f150480c60b16a940b4b06bc985a0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_41398f808944177923d41ca8bfc321fa0f150480c60b16a940b4b06bc985a0d8->leave($__internal_41398f808944177923d41ca8bfc321fa0f150480c60b16a940b4b06bc985a0d8_prof);

        
        $__internal_01f1327bf64ecbd99cd2643623f7576281ef4621ba075b3d957bb2e2b469c87c->leave($__internal_01f1327bf64ecbd99cd2643623f7576281ef4621ba075b3d957bb2e2b469c87c_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
