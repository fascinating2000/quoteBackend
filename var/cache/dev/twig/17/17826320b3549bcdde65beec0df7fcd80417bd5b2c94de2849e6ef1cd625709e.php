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
        $__internal_ffa6b8f8d92d0835db47165082605e60e49b7418dc9e4936e10202046f42420c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa6b8f8d92d0835db47165082605e60e49b7418dc9e4936e10202046f42420c->enter($__internal_ffa6b8f8d92d0835db47165082605e60e49b7418dc9e4936e10202046f42420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bed5f79b38c305c3f369c0aa18e493250c52297e4fd15ddd7261ef7a5f969af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed5f79b38c305c3f369c0aa18e493250c52297e4fd15ddd7261ef7a5f969af2->enter($__internal_bed5f79b38c305c3f369c0aa18e493250c52297e4fd15ddd7261ef7a5f969af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ffa6b8f8d92d0835db47165082605e60e49b7418dc9e4936e10202046f42420c->leave($__internal_ffa6b8f8d92d0835db47165082605e60e49b7418dc9e4936e10202046f42420c_prof);

        
        $__internal_bed5f79b38c305c3f369c0aa18e493250c52297e4fd15ddd7261ef7a5f969af2->leave($__internal_bed5f79b38c305c3f369c0aa18e493250c52297e4fd15ddd7261ef7a5f969af2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_98bef9e229b2043b2614d44b5190adb43c8d7477a4f1e5a8a51656b39c8fdeee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98bef9e229b2043b2614d44b5190adb43c8d7477a4f1e5a8a51656b39c8fdeee->enter($__internal_98bef9e229b2043b2614d44b5190adb43c8d7477a4f1e5a8a51656b39c8fdeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97fa86dbd1ae3fbae920c335c7c535248c409ea129a0c0695e1d3e31e7738980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97fa86dbd1ae3fbae920c335c7c535248c409ea129a0c0695e1d3e31e7738980->enter($__internal_97fa86dbd1ae3fbae920c335c7c535248c409ea129a0c0695e1d3e31e7738980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_97fa86dbd1ae3fbae920c335c7c535248c409ea129a0c0695e1d3e31e7738980->leave($__internal_97fa86dbd1ae3fbae920c335c7c535248c409ea129a0c0695e1d3e31e7738980_prof);

        
        $__internal_98bef9e229b2043b2614d44b5190adb43c8d7477a4f1e5a8a51656b39c8fdeee->leave($__internal_98bef9e229b2043b2614d44b5190adb43c8d7477a4f1e5a8a51656b39c8fdeee_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_e49bf27d77d3b7a74a919634e4051f2b317ac4932f2fa8e0dd436087287feb22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e49bf27d77d3b7a74a919634e4051f2b317ac4932f2fa8e0dd436087287feb22->enter($__internal_e49bf27d77d3b7a74a919634e4051f2b317ac4932f2fa8e0dd436087287feb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0f1e12c94c787fafe48a8d65d885e103dbe1ce5ba9afe4ca7e389bb14ccc1be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f1e12c94c787fafe48a8d65d885e103dbe1ce5ba9afe4ca7e389bb14ccc1be9->enter($__internal_0f1e12c94c787fafe48a8d65d885e103dbe1ce5ba9afe4ca7e389bb14ccc1be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_0f1e12c94c787fafe48a8d65d885e103dbe1ce5ba9afe4ca7e389bb14ccc1be9->leave($__internal_0f1e12c94c787fafe48a8d65d885e103dbe1ce5ba9afe4ca7e389bb14ccc1be9_prof);

        
        $__internal_e49bf27d77d3b7a74a919634e4051f2b317ac4932f2fa8e0dd436087287feb22->leave($__internal_e49bf27d77d3b7a74a919634e4051f2b317ac4932f2fa8e0dd436087287feb22_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_01b701a225c9f5079245d0332fef8c32978f50d98c1392f74c85dede2da5c14d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b701a225c9f5079245d0332fef8c32978f50d98c1392f74c85dede2da5c14d->enter($__internal_01b701a225c9f5079245d0332fef8c32978f50d98c1392f74c85dede2da5c14d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2f33d50b60c4570efdc6009f4f2ea4df5fab00285f14cccdca7be5a3ca57b01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f33d50b60c4570efdc6009f4f2ea4df5fab00285f14cccdca7be5a3ca57b01e->enter($__internal_2f33d50b60c4570efdc6009f4f2ea4df5fab00285f14cccdca7be5a3ca57b01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2f33d50b60c4570efdc6009f4f2ea4df5fab00285f14cccdca7be5a3ca57b01e->leave($__internal_2f33d50b60c4570efdc6009f4f2ea4df5fab00285f14cccdca7be5a3ca57b01e_prof);

        
        $__internal_01b701a225c9f5079245d0332fef8c32978f50d98c1392f74c85dede2da5c14d->leave($__internal_01b701a225c9f5079245d0332fef8c32978f50d98c1392f74c85dede2da5c14d_prof);

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
", "@Twig/layout.html.twig", "/home/reinhold/Documents/Work/Working_Github/quoteBackend/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
