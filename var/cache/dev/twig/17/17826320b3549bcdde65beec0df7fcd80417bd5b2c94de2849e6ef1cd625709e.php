<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_fc9abcb20a4afe17de75a55851aa04d226fae91a9ecf8de642b08493f42edfa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6dc74545ac21d63ce3bc29a73353e80440d26d7713f629f447f44c9f342c8cfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dc74545ac21d63ce3bc29a73353e80440d26d7713f629f447f44c9f342c8cfe->enter($__internal_6dc74545ac21d63ce3bc29a73353e80440d26d7713f629f447f44c9f342c8cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_07bbb1923b395aa6ed41fdaed6b6a91546adf830e92c625a57ee4c6e3ac53bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bbb1923b395aa6ed41fdaed6b6a91546adf830e92c625a57ee4c6e3ac53bdc->enter($__internal_07bbb1923b395aa6ed41fdaed6b6a91546adf830e92c625a57ee4c6e3ac53bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_6dc74545ac21d63ce3bc29a73353e80440d26d7713f629f447f44c9f342c8cfe->leave($__internal_6dc74545ac21d63ce3bc29a73353e80440d26d7713f629f447f44c9f342c8cfe_prof);

        
        $__internal_07bbb1923b395aa6ed41fdaed6b6a91546adf830e92c625a57ee4c6e3ac53bdc->leave($__internal_07bbb1923b395aa6ed41fdaed6b6a91546adf830e92c625a57ee4c6e3ac53bdc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a56f4452b9beaa3a984b001e8354399cbc8038d115bfd2f457acc26e113dc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a56f4452b9beaa3a984b001e8354399cbc8038d115bfd2f457acc26e113dc63->enter($__internal_7a56f4452b9beaa3a984b001e8354399cbc8038d115bfd2f457acc26e113dc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eec5ae940fdc8641ba54db65e0beed952cb480b31de1dd1c316733a36c983b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec5ae940fdc8641ba54db65e0beed952cb480b31de1dd1c316733a36c983b62->enter($__internal_eec5ae940fdc8641ba54db65e0beed952cb480b31de1dd1c316733a36c983b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_eec5ae940fdc8641ba54db65e0beed952cb480b31de1dd1c316733a36c983b62->leave($__internal_eec5ae940fdc8641ba54db65e0beed952cb480b31de1dd1c316733a36c983b62_prof);

        
        $__internal_7a56f4452b9beaa3a984b001e8354399cbc8038d115bfd2f457acc26e113dc63->leave($__internal_7a56f4452b9beaa3a984b001e8354399cbc8038d115bfd2f457acc26e113dc63_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bdacf3951ded6b2ccc022936b3894b5918f83376a49dc2220e71e86eed55dbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdacf3951ded6b2ccc022936b3894b5918f83376a49dc2220e71e86eed55dbd8->enter($__internal_bdacf3951ded6b2ccc022936b3894b5918f83376a49dc2220e71e86eed55dbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf02c4203559d668ec1f3678c7d1fe9bf88cf394de9085ed1dd4ccef8442e7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf02c4203559d668ec1f3678c7d1fe9bf88cf394de9085ed1dd4ccef8442e7eb->enter($__internal_bf02c4203559d668ec1f3678c7d1fe9bf88cf394de9085ed1dd4ccef8442e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bf02c4203559d668ec1f3678c7d1fe9bf88cf394de9085ed1dd4ccef8442e7eb->leave($__internal_bf02c4203559d668ec1f3678c7d1fe9bf88cf394de9085ed1dd4ccef8442e7eb_prof);

        
        $__internal_bdacf3951ded6b2ccc022936b3894b5918f83376a49dc2220e71e86eed55dbd8->leave($__internal_bdacf3951ded6b2ccc022936b3894b5918f83376a49dc2220e71e86eed55dbd8_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_748ccbb980769b8e828f1220234e52523d54eb80ed281cd6ff9c1e96829b1405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748ccbb980769b8e828f1220234e52523d54eb80ed281cd6ff9c1e96829b1405->enter($__internal_748ccbb980769b8e828f1220234e52523d54eb80ed281cd6ff9c1e96829b1405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e5e320525294c0930711d23a8214c945bc6b4ab4c4e5400fc6d7b2b941df2b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e320525294c0930711d23a8214c945bc6b4ab4c4e5400fc6d7b2b941df2b19->enter($__internal_e5e320525294c0930711d23a8214c945bc6b4ab4c4e5400fc6d7b2b941df2b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5e320525294c0930711d23a8214c945bc6b4ab4c4e5400fc6d7b2b941df2b19->leave($__internal_e5e320525294c0930711d23a8214c945bc6b4ab4c4e5400fc6d7b2b941df2b19_prof);

        
        $__internal_748ccbb980769b8e828f1220234e52523d54eb80ed281cd6ff9c1e96829b1405->leave($__internal_748ccbb980769b8e828f1220234e52523d54eb80ed281cd6ff9c1e96829b1405_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
