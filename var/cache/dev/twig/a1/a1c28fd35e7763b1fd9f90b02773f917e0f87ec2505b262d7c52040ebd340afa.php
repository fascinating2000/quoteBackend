<?php

/* blog/about.html.twig */
class __TwigTemplate_25649565a70824addb11151ac43bd57bb4377ef3b62437d6afd362dbfa1bfe91 extends Twig_Template
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
        $__internal_208f3721469f2921d0ae8243b65d230cfec4e272098a0109a0f533a03a0f6f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208f3721469f2921d0ae8243b65d230cfec4e272098a0109a0f533a03a0f6f09->enter($__internal_208f3721469f2921d0ae8243b65d230cfec4e272098a0109a0f533a03a0f6f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        $__internal_3f5edf3aa737a48974ee096b9160555065ba7c36dbcdbf108b85911aa1876d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5edf3aa737a48974ee096b9160555065ba7c36dbcdbf108b85911aa1876d80->enter($__internal_3f5edf3aa737a48974ee096b9160555065ba7c36dbcdbf108b85911aa1876d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/about.html.twig"));

        // line 1
        echo "<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.app_description");
        echo "
        </p>
        <p>
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.more_information");
        echo "
        </p>
    </div>
</div>

";
        // line 15
        echo "<!-- Fragment rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
";
        
        $__internal_208f3721469f2921d0ae8243b65d230cfec4e272098a0109a0f533a03a0f6f09->leave($__internal_208f3721469f2921d0ae8243b65d230cfec4e272098a0109a0f533a03a0f6f09_prof);

        
        $__internal_3f5edf3aa737a48974ee096b9160555065ba7c36dbcdbf108b85911aa1876d80->leave($__internal_3f5edf3aa737a48974ee096b9160555065ba7c36dbcdbf108b85911aa1876d80_prof);

    }

    public function getTemplateName()
    {
        return "blog/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"section about\">
    <div class=\"well well-lg\">
        <p>
            {{ 'help.app_description'|trans|raw }}
        </p>
        <p>
            {{ 'help.more_information'|trans|raw }}
        </p>
    </div>
</div>

{# it's not mandatory to set the timezone in localizeddate(). This is done to
   avoid errors when the 'intl' PHP extension is not available and the application
   is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
<!-- Fragment rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
", "blog/about.html.twig", "/home/reinhold/Documents/Work/Vlaz/symfony_demo/app/Resources/views/blog/about.html.twig");
    }
}
