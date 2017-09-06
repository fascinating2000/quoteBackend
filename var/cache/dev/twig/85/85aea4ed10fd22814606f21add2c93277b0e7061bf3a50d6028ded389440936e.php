<?php

/* author/show.html.twig */
class __TwigTemplate_ea7d7c05477a5a9d667b5f61aea6022388c6d8f1da072943eda78943d2420dad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/show.html.twig", 1);
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
        $__internal_63cec83ee0d30928061ce8958dc24b5c8b542563d5db42ae2a9c2dbd695b04e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cec83ee0d30928061ce8958dc24b5c8b542563d5db42ae2a9c2dbd695b04e7->enter($__internal_63cec83ee0d30928061ce8958dc24b5c8b542563d5db42ae2a9c2dbd695b04e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/show.html.twig"));

        $__internal_889286bad52e4463c890e23523db9c806a70917155d9bf00a93f8b46ede4754a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889286bad52e4463c890e23523db9c806a70917155d9bf00a93f8b46ede4754a->enter($__internal_889286bad52e4463c890e23523db9c806a70917155d9bf00a93f8b46ede4754a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63cec83ee0d30928061ce8958dc24b5c8b542563d5db42ae2a9c2dbd695b04e7->leave($__internal_63cec83ee0d30928061ce8958dc24b5c8b542563d5db42ae2a9c2dbd695b04e7_prof);

        
        $__internal_889286bad52e4463c890e23523db9c806a70917155d9bf00a93f8b46ede4754a->leave($__internal_889286bad52e4463c890e23523db9c806a70917155d9bf00a93f8b46ede4754a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5e2e7912eef1903c69edda7e20e7d93fb25d5661c572294e29b7f3c10db0058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e2e7912eef1903c69edda7e20e7d93fb25d5661c572294e29b7f3c10db0058->enter($__internal_d5e2e7912eef1903c69edda7e20e7d93fb25d5661c572294e29b7f3c10db0058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_19a354892e7157c3119a53b88325c8ad3cfe0923bad2eb9852a798362a0ad274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a354892e7157c3119a53b88325c8ad3cfe0923bad2eb9852a798362a0ad274->enter($__internal_19a354892e7157c3119a53b88325c8ad3cfe0923bad2eb9852a798362a0ad274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Authorname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "authorName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_edit", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_19a354892e7157c3119a53b88325c8ad3cfe0923bad2eb9852a798362a0ad274->leave($__internal_19a354892e7157c3119a53b88325c8ad3cfe0923bad2eb9852a798362a0ad274_prof);

        
        $__internal_d5e2e7912eef1903c69edda7e20e7d93fb25d5661c572294e29b7f3c10db0058->leave($__internal_d5e2e7912eef1903c69edda7e20e7d93fb25d5661c572294e29b7f3c10db0058_prof);

    }

    public function getTemplateName()
    {
        return "author/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  95 => 31,  89 => 28,  83 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Author</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ author.id }}</td>
            </tr>
            <tr>
                <th>Authorname</th>
                <td>{{ author.authorName }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if author.createdAt %}{{ author.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('author_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('author_edit', { 'id': author.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "author/show.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/app/Resources/views/author/show.html.twig");
    }
}
