<?php

/* author/index.html.twig */
class __TwigTemplate_360a7bb37af7c118f75f14455350e153631514112ace32eb85933bcd1cdcfc8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/index.html.twig", 1);
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
        $__internal_d35f46cf25062dd30c9971e73e11744801367ff6081232dda02a57106a9e25fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d35f46cf25062dd30c9971e73e11744801367ff6081232dda02a57106a9e25fb->enter($__internal_d35f46cf25062dd30c9971e73e11744801367ff6081232dda02a57106a9e25fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $__internal_237c764a8a99628c0caf2370b6936831dde3f89b0ac10d2d251181dc52b8dc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237c764a8a99628c0caf2370b6936831dde3f89b0ac10d2d251181dc52b8dc82->enter($__internal_237c764a8a99628c0caf2370b6936831dde3f89b0ac10d2d251181dc52b8dc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35f46cf25062dd30c9971e73e11744801367ff6081232dda02a57106a9e25fb->leave($__internal_d35f46cf25062dd30c9971e73e11744801367ff6081232dda02a57106a9e25fb_prof);

        
        $__internal_237c764a8a99628c0caf2370b6936831dde3f89b0ac10d2d251181dc52b8dc82->leave($__internal_237c764a8a99628c0caf2370b6936831dde3f89b0ac10d2d251181dc52b8dc82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d78e0b0cbe9b13be585101bf91db4e02e2fe418f5b9f84ea259f24a36e0f6a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78e0b0cbe9b13be585101bf91db4e02e2fe418f5b9f84ea259f24a36e0f6a3c->enter($__internal_d78e0b0cbe9b13be585101bf91db4e02e2fe418f5b9f84ea259f24a36e0f6a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5422ee421f6e2f037d07510b58e74c880e01f7d01356c46a0db32c847abcb2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5422ee421f6e2f037d07510b58e74c880e01f7d01356c46a0db32c847abcb2c4->enter($__internal_5422ee421f6e2f037d07510b58e74c880e01f7d01356c46a0db32c847abcb2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Authors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Authorname</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "authorName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["author"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["author"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_edit", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("author_new");
        echo "\">Create a new author</a>
        </li>
    </ul>
";
        
        $__internal_5422ee421f6e2f037d07510b58e74c880e01f7d01356c46a0db32c847abcb2c4->leave($__internal_5422ee421f6e2f037d07510b58e74c880e01f7d01356c46a0db32c847abcb2c4_prof);

        
        $__internal_d78e0b0cbe9b13be585101bf91db4e02e2fe418f5b9f84ea259f24a36e0f6a3c->leave($__internal_d78e0b0cbe9b13be585101bf91db4e02e2fe418f5b9f84ea259f24a36e0f6a3c_prof);

    }

    public function getTemplateName()
    {
        return "author/index.html.twig";
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
    <h1>Authors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Authorname</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for author in authors %}
            <tr>
                <td><a href=\"{{ path('author_show', { 'id': author.id }) }}\">{{ author.id }}</a></td>
                <td>{{ author.authorName }}</td>
                <td>{% if author.createdAt %}{{ author.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('author_show', { 'id': author.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('author_edit', { 'id': author.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('author_new') }}\">Create a new author</a>
        </li>
    </ul>
{% endblock %}
", "author/index.html.twig", "/home/reinhold/Documents/Work/Vlaz/quotesBackend/app/Resources/views/author/index.html.twig");
    }
}
