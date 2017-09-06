<?php

/* quote/index.html.twig */
class __TwigTemplate_ac5832cb48387cb363a5f99ad3bf827bf2c8ed394f6c77d48171ba38b357e3a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "quote/index.html.twig", 1);
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
        $__internal_12f2bcdb25708829cf9fcfe39afc27c839b8753868d37eb786b2dd312400e8de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12f2bcdb25708829cf9fcfe39afc27c839b8753868d37eb786b2dd312400e8de->enter($__internal_12f2bcdb25708829cf9fcfe39afc27c839b8753868d37eb786b2dd312400e8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quote/index.html.twig"));

        $__internal_37fad912c5aa4545aead0016bdacd22e52e7efc0d93f98b09557b4fcdd4f35c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fad912c5aa4545aead0016bdacd22e52e7efc0d93f98b09557b4fcdd4f35c7->enter($__internal_37fad912c5aa4545aead0016bdacd22e52e7efc0d93f98b09557b4fcdd4f35c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "quote/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12f2bcdb25708829cf9fcfe39afc27c839b8753868d37eb786b2dd312400e8de->leave($__internal_12f2bcdb25708829cf9fcfe39afc27c839b8753868d37eb786b2dd312400e8de_prof);

        
        $__internal_37fad912c5aa4545aead0016bdacd22e52e7efc0d93f98b09557b4fcdd4f35c7->leave($__internal_37fad912c5aa4545aead0016bdacd22e52e7efc0d93f98b09557b4fcdd4f35c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52953d228833c54d6906339b6013a208c6a5d6470299d1cd188f1c6ddc571a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52953d228833c54d6906339b6013a208c6a5d6470299d1cd188f1c6ddc571a2b->enter($__internal_52953d228833c54d6906339b6013a208c6a5d6470299d1cd188f1c6ddc571a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07fdc5cc44371f781a7ab4a4a9e4bee158e2ddc7d6873f847885d8b6ac5452e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07fdc5cc44371f781a7ab4a4a9e4bee158e2ddc7d6873f847885d8b6ac5452e3->enter($__internal_07fdc5cc44371f781a7ab4a4a9e4bee158e2ddc7d6873f847885d8b6ac5452e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Quotes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Quotecontent</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quotes"]) ? $context["quotes"] : $this->getContext($context, "quotes")));
        foreach ($context['_seq'] as $context["_key"] => $context["quote"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quote_show", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["quote"], "quoteContent", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["quote"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["quote"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quote_show", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quote_edit", array("id" => $this->getAttribute($context["quote"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("quote_new");
        echo "\">Create a new quote</a>
        </li>
    </ul>
";
        
        $__internal_07fdc5cc44371f781a7ab4a4a9e4bee158e2ddc7d6873f847885d8b6ac5452e3->leave($__internal_07fdc5cc44371f781a7ab4a4a9e4bee158e2ddc7d6873f847885d8b6ac5452e3_prof);

        
        $__internal_52953d228833c54d6906339b6013a208c6a5d6470299d1cd188f1c6ddc571a2b->leave($__internal_52953d228833c54d6906339b6013a208c6a5d6470299d1cd188f1c6ddc571a2b_prof);

    }

    public function getTemplateName()
    {
        return "quote/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 38,  107 => 33,  95 => 27,  89 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Quotes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Quotecontent</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for quote in quotes %}
            <tr>
                <td><a href=\"{{ path('quote_show', { 'id': quote.id }) }}\">{{ quote.id }}</a></td>
                <td>{{ quote.quoteContent }}</td>
                <td>{% if quote.createdAt %}{{ quote.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('quote_show', { 'id': quote.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('quote_edit', { 'id': quote.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('quote_new') }}\">Create a new quote</a>
        </li>
    </ul>
{% endblock %}
", "quote/index.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/app/Resources/views/quote/index.html.twig");
    }
}
