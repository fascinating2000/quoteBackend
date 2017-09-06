<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c5a266016a1d0e31b6ee35f11dd88d3af10e1e671c98326d11002466de91cf50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efc28e04214ed18b7c574a2000f21d14c0e3993e89f5fa7af3d70041f87d43ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efc28e04214ed18b7c574a2000f21d14c0e3993e89f5fa7af3d70041f87d43ab->enter($__internal_efc28e04214ed18b7c574a2000f21d14c0e3993e89f5fa7af3d70041f87d43ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c9caed36ee4957c933ae2618c13a04deb731a4cd7e3a73a74d898d67647475ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9caed36ee4957c933ae2618c13a04deb731a4cd7e3a73a74d898d67647475ac->enter($__internal_c9caed36ee4957c933ae2618c13a04deb731a4cd7e3a73a74d898d67647475ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc28e04214ed18b7c574a2000f21d14c0e3993e89f5fa7af3d70041f87d43ab->leave($__internal_efc28e04214ed18b7c574a2000f21d14c0e3993e89f5fa7af3d70041f87d43ab_prof);

        
        $__internal_c9caed36ee4957c933ae2618c13a04deb731a4cd7e3a73a74d898d67647475ac->leave($__internal_c9caed36ee4957c933ae2618c13a04deb731a4cd7e3a73a74d898d67647475ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01e10c7b8654dcd4994bc0c75448dee6e44f89393cce39c2d0ae55c14daa014a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e10c7b8654dcd4994bc0c75448dee6e44f89393cce39c2d0ae55c14daa014a->enter($__internal_01e10c7b8654dcd4994bc0c75448dee6e44f89393cce39c2d0ae55c14daa014a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7ac64287940d66021524f874d90e9a998a3a298731a965316beb851cad9146a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ac64287940d66021524f874d90e9a998a3a298731a965316beb851cad9146a->enter($__internal_b7ac64287940d66021524f874d90e9a998a3a298731a965316beb851cad9146a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b7ac64287940d66021524f874d90e9a998a3a298731a965316beb851cad9146a->leave($__internal_b7ac64287940d66021524f874d90e9a998a3a298731a965316beb851cad9146a_prof);

        
        $__internal_01e10c7b8654dcd4994bc0c75448dee6e44f89393cce39c2d0ae55c14daa014a->leave($__internal_01e10c7b8654dcd4994bc0c75448dee6e44f89393cce39c2d0ae55c14daa014a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_50d1e3f2203e0628f4e99f008dd0a8fe86f7b3178aa5e51e2f11272bfc492776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50d1e3f2203e0628f4e99f008dd0a8fe86f7b3178aa5e51e2f11272bfc492776->enter($__internal_50d1e3f2203e0628f4e99f008dd0a8fe86f7b3178aa5e51e2f11272bfc492776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0180cbd94222fcc998f6015843ac26599c0947248419c962b5e5fba1b5f5176d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0180cbd94222fcc998f6015843ac26599c0947248419c962b5e5fba1b5f5176d->enter($__internal_0180cbd94222fcc998f6015843ac26599c0947248419c962b5e5fba1b5f5176d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0180cbd94222fcc998f6015843ac26599c0947248419c962b5e5fba1b5f5176d->leave($__internal_0180cbd94222fcc998f6015843ac26599c0947248419c962b5e5fba1b5f5176d_prof);

        
        $__internal_50d1e3f2203e0628f4e99f008dd0a8fe86f7b3178aa5e51e2f11272bfc492776->leave($__internal_50d1e3f2203e0628f4e99f008dd0a8fe86f7b3178aa5e51e2f11272bfc492776_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ea4af3d9e507a208ca3e25796c30e52e6909d867350e610bbcdd73985f45603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea4af3d9e507a208ca3e25796c30e52e6909d867350e610bbcdd73985f45603->enter($__internal_1ea4af3d9e507a208ca3e25796c30e52e6909d867350e610bbcdd73985f45603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8c6441da1b517a244865e8f340f7c793c2c13f9dce1ecb86a4f6de8403f9249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c6441da1b517a244865e8f340f7c793c2c13f9dce1ecb86a4f6de8403f9249->enter($__internal_c8c6441da1b517a244865e8f340f7c793c2c13f9dce1ecb86a4f6de8403f9249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c8c6441da1b517a244865e8f340f7c793c2c13f9dce1ecb86a4f6de8403f9249->leave($__internal_c8c6441da1b517a244865e8f340f7c793c2c13f9dce1ecb86a4f6de8403f9249_prof);

        
        $__internal_1ea4af3d9e507a208ca3e25796c30e52e6909d867350e610bbcdd73985f45603->leave($__internal_1ea4af3d9e507a208ca3e25796c30e52e6909d867350e610bbcdd73985f45603_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
