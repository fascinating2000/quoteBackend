<?php

/* base.html.twig */
class __TwigTemplate_ccb7c21c8ee1c1afccef7e4a69515dde7bfb6175025858ef133f6fc569bbf07c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d125a2ae9ed4acf8dab773ba0d35dabd0a250779274ec46906d816c90df1b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d125a2ae9ed4acf8dab773ba0d35dabd0a250779274ec46906d816c90df1b0f->enter($__internal_8d125a2ae9ed4acf8dab773ba0d35dabd0a250779274ec46906d816c90df1b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_be687a0393051c4a42fffbec829f8601f03f72648fdbb0b8eb4e490ab3468978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be687a0393051c4a42fffbec829f8601f03f72648fdbb0b8eb4e490ab3468978->enter($__internal_be687a0393051c4a42fffbec829f8601f03f72648fdbb0b8eb4e490ab3468978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_8d125a2ae9ed4acf8dab773ba0d35dabd0a250779274ec46906d816c90df1b0f->leave($__internal_8d125a2ae9ed4acf8dab773ba0d35dabd0a250779274ec46906d816c90df1b0f_prof);

        
        $__internal_be687a0393051c4a42fffbec829f8601f03f72648fdbb0b8eb4e490ab3468978->leave($__internal_be687a0393051c4a42fffbec829f8601f03f72648fdbb0b8eb4e490ab3468978_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0415f0a842b4514ff631108ec622010611d08078b6d3585424ea00bcad27e064 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0415f0a842b4514ff631108ec622010611d08078b6d3585424ea00bcad27e064->enter($__internal_0415f0a842b4514ff631108ec622010611d08078b6d3585424ea00bcad27e064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_592690bc1197705e4f376b0b885f329d78029afa5cbb7bd45ced65762ccc4e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592690bc1197705e4f376b0b885f329d78029afa5cbb7bd45ced65762ccc4e62->enter($__internal_592690bc1197705e4f376b0b885f329d78029afa5cbb7bd45ced65762ccc4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_592690bc1197705e4f376b0b885f329d78029afa5cbb7bd45ced65762ccc4e62->leave($__internal_592690bc1197705e4f376b0b885f329d78029afa5cbb7bd45ced65762ccc4e62_prof);

        
        $__internal_0415f0a842b4514ff631108ec622010611d08078b6d3585424ea00bcad27e064->leave($__internal_0415f0a842b4514ff631108ec622010611d08078b6d3585424ea00bcad27e064_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_861b0de4bb99ce29fb1398d24935bdc4679447a5b8488dfa930f44898d4df6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861b0de4bb99ce29fb1398d24935bdc4679447a5b8488dfa930f44898d4df6dd->enter($__internal_861b0de4bb99ce29fb1398d24935bdc4679447a5b8488dfa930f44898d4df6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0686c50759d1247d35bce0dcccfde413cd0ec2b03b789b07888c33f56a1f836a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0686c50759d1247d35bce0dcccfde413cd0ec2b03b789b07888c33f56a1f836a->enter($__internal_0686c50759d1247d35bce0dcccfde413cd0ec2b03b789b07888c33f56a1f836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0686c50759d1247d35bce0dcccfde413cd0ec2b03b789b07888c33f56a1f836a->leave($__internal_0686c50759d1247d35bce0dcccfde413cd0ec2b03b789b07888c33f56a1f836a_prof);

        
        $__internal_861b0de4bb99ce29fb1398d24935bdc4679447a5b8488dfa930f44898d4df6dd->leave($__internal_861b0de4bb99ce29fb1398d24935bdc4679447a5b8488dfa930f44898d4df6dd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ef91ad777926f475f295e3f60762e6f301a7c1480c9d81a7d2971fc7fb1f9ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef91ad777926f475f295e3f60762e6f301a7c1480c9d81a7d2971fc7fb1f9ea->enter($__internal_1ef91ad777926f475f295e3f60762e6f301a7c1480c9d81a7d2971fc7fb1f9ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a0f1edda76a08c5aff5b78ca21a97b7892e1679dd5ffddfc8a03b1df4185e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0f1edda76a08c5aff5b78ca21a97b7892e1679dd5ffddfc8a03b1df4185e7f->enter($__internal_7a0f1edda76a08c5aff5b78ca21a97b7892e1679dd5ffddfc8a03b1df4185e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7a0f1edda76a08c5aff5b78ca21a97b7892e1679dd5ffddfc8a03b1df4185e7f->leave($__internal_7a0f1edda76a08c5aff5b78ca21a97b7892e1679dd5ffddfc8a03b1df4185e7f_prof);

        
        $__internal_1ef91ad777926f475f295e3f60762e6f301a7c1480c9d81a7d2971fc7fb1f9ea->leave($__internal_1ef91ad777926f475f295e3f60762e6f301a7c1480c9d81a7d2971fc7fb1f9ea_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e3407b2fd506ff7b8668bb1de0a068fc697d6c29ab7e06ba4abe4b5d1d3b99f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3407b2fd506ff7b8668bb1de0a068fc697d6c29ab7e06ba4abe4b5d1d3b99f5->enter($__internal_e3407b2fd506ff7b8668bb1de0a068fc697d6c29ab7e06ba4abe4b5d1d3b99f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d89a3ede5966a09e8527fef91f6d8172da32eab7d9a40d77bc474fab3dfacb97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89a3ede5966a09e8527fef91f6d8172da32eab7d9a40d77bc474fab3dfacb97->enter($__internal_d89a3ede5966a09e8527fef91f6d8172da32eab7d9a40d77bc474fab3dfacb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d89a3ede5966a09e8527fef91f6d8172da32eab7d9a40d77bc474fab3dfacb97->leave($__internal_d89a3ede5966a09e8527fef91f6d8172da32eab7d9a40d77bc474fab3dfacb97_prof);

        
        $__internal_e3407b2fd506ff7b8668bb1de0a068fc697d6c29ab7e06ba4abe4b5d1d3b99f5->leave($__internal_e3407b2fd506ff7b8668bb1de0a068fc697d6c29ab7e06ba4abe4b5d1d3b99f5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/app/Resources/views/base.html.twig");
    }
}
