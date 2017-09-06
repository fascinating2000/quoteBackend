<?php

/* author/new.html.twig */
class __TwigTemplate_a0baf99c65694597c2eeb1732fa86284a2b14dd14e32e94219449e96f85c2608 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/new.html.twig", 1);
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
        $__internal_2b1419a78132e26805a5b8de9bea7280d57fc77e2f62b889db7b6f9faef884ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1419a78132e26805a5b8de9bea7280d57fc77e2f62b889db7b6f9faef884ba->enter($__internal_2b1419a78132e26805a5b8de9bea7280d57fc77e2f62b889db7b6f9faef884ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/new.html.twig"));

        $__internal_1ae9ee866c7ca891faab7a1fba108b7a194648c9aac471cda1821ee0ee923126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ae9ee866c7ca891faab7a1fba108b7a194648c9aac471cda1821ee0ee923126->enter($__internal_1ae9ee866c7ca891faab7a1fba108b7a194648c9aac471cda1821ee0ee923126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b1419a78132e26805a5b8de9bea7280d57fc77e2f62b889db7b6f9faef884ba->leave($__internal_2b1419a78132e26805a5b8de9bea7280d57fc77e2f62b889db7b6f9faef884ba_prof);

        
        $__internal_1ae9ee866c7ca891faab7a1fba108b7a194648c9aac471cda1821ee0ee923126->leave($__internal_1ae9ee866c7ca891faab7a1fba108b7a194648c9aac471cda1821ee0ee923126_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40ab26c990cdd2e05b56da164c47bfb17d54fcec9849aec0b0ef9d93d46f850d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ab26c990cdd2e05b56da164c47bfb17d54fcec9849aec0b0ef9d93d46f850d->enter($__internal_40ab26c990cdd2e05b56da164c47bfb17d54fcec9849aec0b0ef9d93d46f850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7cb6609e1ae7a5beba160354491c21b9ab23c42ed8490e03a63cc6e62fcada8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cb6609e1ae7a5beba160354491c21b9ab23c42ed8490e03a63cc6e62fcada8->enter($__internal_c7cb6609e1ae7a5beba160354491c21b9ab23c42ed8490e03a63cc6e62fcada8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c7cb6609e1ae7a5beba160354491c21b9ab23c42ed8490e03a63cc6e62fcada8->leave($__internal_c7cb6609e1ae7a5beba160354491c21b9ab23c42ed8490e03a63cc6e62fcada8_prof);

        
        $__internal_40ab26c990cdd2e05b56da164c47bfb17d54fcec9849aec0b0ef9d93d46f850d->leave($__internal_40ab26c990cdd2e05b56da164c47bfb17d54fcec9849aec0b0ef9d93d46f850d_prof);

    }

    public function getTemplateName()
    {
        return "author/new.html.twig";
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
    <h1>Author creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('author_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "author/new.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/app/Resources/views/author/new.html.twig");
    }
}
