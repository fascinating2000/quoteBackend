<?php

/* author/edit.html.twig */
class __TwigTemplate_d5b720f0b5c3c10814f623c5fd3773bd4c8d4e2dca3f32a15b5bdadf90a5b7c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/edit.html.twig", 1);
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
        $__internal_c49436b4609a9bf4ce303df428d37c8bbf6caa4511b37968c1816a9823560187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49436b4609a9bf4ce303df428d37c8bbf6caa4511b37968c1816a9823560187->enter($__internal_c49436b4609a9bf4ce303df428d37c8bbf6caa4511b37968c1816a9823560187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/edit.html.twig"));

        $__internal_73ab9ba5e6be89a991a9eda7bc4c2e2621e32f2eaf935294302f858ddb7143d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ab9ba5e6be89a991a9eda7bc4c2e2621e32f2eaf935294302f858ddb7143d4->enter($__internal_73ab9ba5e6be89a991a9eda7bc4c2e2621e32f2eaf935294302f858ddb7143d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49436b4609a9bf4ce303df428d37c8bbf6caa4511b37968c1816a9823560187->leave($__internal_c49436b4609a9bf4ce303df428d37c8bbf6caa4511b37968c1816a9823560187_prof);

        
        $__internal_73ab9ba5e6be89a991a9eda7bc4c2e2621e32f2eaf935294302f858ddb7143d4->leave($__internal_73ab9ba5e6be89a991a9eda7bc4c2e2621e32f2eaf935294302f858ddb7143d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_034d2aaeac94357f8df39e3710e8231a230447fe08bca60436f3cf95fe16eb48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_034d2aaeac94357f8df39e3710e8231a230447fe08bca60436f3cf95fe16eb48->enter($__internal_034d2aaeac94357f8df39e3710e8231a230447fe08bca60436f3cf95fe16eb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f70eb7d86f01ad5297a006336db86ca1a9c4c9eea773cab2e1772a77796b000e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70eb7d86f01ad5297a006336db86ca1a9c4c9eea773cab2e1772a77796b000e->enter($__internal_f70eb7d86f01ad5297a006336db86ca1a9c4c9eea773cab2e1772a77796b000e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f70eb7d86f01ad5297a006336db86ca1a9c4c9eea773cab2e1772a77796b000e->leave($__internal_f70eb7d86f01ad5297a006336db86ca1a9c4c9eea773cab2e1772a77796b000e_prof);

        
        $__internal_034d2aaeac94357f8df39e3710e8231a230447fe08bca60436f3cf95fe16eb48->leave($__internal_034d2aaeac94357f8df39e3710e8231a230447fe08bca60436f3cf95fe16eb48_prof);

    }

    public function getTemplateName()
    {
        return "author/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Author edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('author_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "author/edit.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/app/Resources/views/author/edit.html.twig");
    }
}
