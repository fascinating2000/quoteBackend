<?php

/* security/login.html.twig */
class __TwigTemplate_515387100a6cb0bbe283173c7888d697dcfc7cc760e6bc6e7e06844e3b9e207b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'javascripts' => array($this, 'block_javascripts'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_458333277c64ed92ad78bbc5c3b0e41ceefa8cafa093d45ac5b5dc9bbd0944d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458333277c64ed92ad78bbc5c3b0e41ceefa8cafa093d45ac5b5dc9bbd0944d3->enter($__internal_458333277c64ed92ad78bbc5c3b0e41ceefa8cafa093d45ac5b5dc9bbd0944d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_0a48d00495944a2f648483e92440482e6903cb7d700366ebba55d88d61f85df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a48d00495944a2f648483e92440482e6903cb7d700366ebba55d88d61f85df6->enter($__internal_0a48d00495944a2f648483e92440482e6903cb7d700366ebba55d88d61f85df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_458333277c64ed92ad78bbc5c3b0e41ceefa8cafa093d45ac5b5dc9bbd0944d3->leave($__internal_458333277c64ed92ad78bbc5c3b0e41ceefa8cafa093d45ac5b5dc9bbd0944d3_prof);

        
        $__internal_0a48d00495944a2f648483e92440482e6903cb7d700366ebba55d88d61f85df6->leave($__internal_0a48d00495944a2f648483e92440482e6903cb7d700366ebba55d88d61f85df6_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cfabd2b0f4dfd06de6e1cf9c4b800baf4e0abb78152a8b17937c843085d32a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfabd2b0f4dfd06de6e1cf9c4b800baf4e0abb78152a8b17937c843085d32a5f->enter($__internal_cfabd2b0f4dfd06de6e1cf9c4b800baf4e0abb78152a8b17937c843085d32a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_54abda98440983c9ddd2af2f888208df8390336641551ca523c8c71206d44938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54abda98440983c9ddd2af2f888208df8390336641551ca523c8c71206d44938->enter($__internal_54abda98440983c9ddd2af2f888208df8390336641551ca523c8c71206d44938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "login";
        
        $__internal_54abda98440983c9ddd2af2f888208df8390336641551ca523c8c71206d44938->leave($__internal_54abda98440983c9ddd2af2f888208df8390336641551ca523c8c71206d44938_prof);

        
        $__internal_cfabd2b0f4dfd06de6e1cf9c4b800baf4e0abb78152a8b17937c843085d32a5f->leave($__internal_cfabd2b0f4dfd06de6e1cf9c4b800baf4e0abb78152a8b17937c843085d32a5f_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c2d81c5ba5c3f93dbaa022fe6a25a152581fdde206d2bb21ab9afde0aeb457e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d81c5ba5c3f93dbaa022fe6a25a152581fdde206d2bb21ab9afde0aeb457e5->enter($__internal_c2d81c5ba5c3f93dbaa022fe6a25a152581fdde206d2bb21ab9afde0aeb457e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_11713da5476101ab3448218e35117e05578449c4f8c07f2e62fe332e839571e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11713da5476101ab3448218e35117e05578449c4f8c07f2e62fe332e839571e6->enter($__internal_11713da5476101ab3448218e35117e05578449c4f8c07f2e62fe332e839571e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/login.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_11713da5476101ab3448218e35117e05578449c4f8c07f2e62fe332e839571e6->leave($__internal_11713da5476101ab3448218e35117e05578449c4f8c07f2e62fe332e839571e6_prof);

        
        $__internal_c2d81c5ba5c3f93dbaa022fe6a25a152581fdde206d2bb21ab9afde0aeb457e5->leave($__internal_c2d81c5ba5c3f93dbaa022fe6a25a152581fdde206d2bb21ab9afde0aeb457e5_prof);

    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        $__internal_34f042e20a7f2f49dbe875000638d50cb22f9612c58b6effca2d4135069e466f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34f042e20a7f2f49dbe875000638d50cb22f9612c58b6effca2d4135069e466f->enter($__internal_34f042e20a7f2f49dbe875000638d50cb22f9612c58b6effca2d4135069e466f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_90f0ad78f29502bed5e9327880aacfc205b74922f4c9c962b6de029e3e3534bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90f0ad78f29502bed5e9327880aacfc205b74922f4c9c962b6de029e3e3534bb->enter($__internal_90f0ad78f29502bed5e9327880aacfc205b74922f4c9c962b6de029e3e3534bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 11
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 12
            echo "        <div class=\"alert alert-danger\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 16
        echo "
    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_login");
        echo "\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.login"), "html", null, true);
        echo "</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.sign_in"), "html", null, true);
        echo "
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                ";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.login_users"), "html", null, true);
        echo "
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.username"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.password"), "html", null, true);
        echo "</th>
                        <th scope=\"col\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.role"), "html", null, true);
        echo "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> (";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_user"), "html", null, true);
        echo ")</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> (";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.role_admin"), "html", null, true);
        echo ")</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("note"), "html", null, true);
        echo "</span>
                        ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.reload_fixtures"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tip"), "html", null, true);
        echo "</span>
                        ";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("help.add_user"), "html", null, true);
        echo "<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_90f0ad78f29502bed5e9327880aacfc205b74922f4c9c962b6de029e3e3534bb->leave($__internal_90f0ad78f29502bed5e9327880aacfc205b74922f4c9c962b6de029e3e3534bb_prof);

        
        $__internal_34f042e20a7f2f49dbe875000638d50cb22f9612c58b6effca2d4135069e466f->leave($__internal_34f042e20a7f2f49dbe875000638d50cb22f9612c58b6effca2d4135069e466f_prof);

    }

    // line 89
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3fa9b6e374e4e6ffe2ffb24e69504c887cc48206eb173ee48288d03ae7919ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa9b6e374e4e6ffe2ffb24e69504c887cc48206eb173ee48288d03ae7919ed8->enter($__internal_3fa9b6e374e4e6ffe2ffb24e69504c887cc48206eb173ee48288d03ae7919ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_f14625e6b99c0637bffbb8a60af92088232c313ec1b7ce585e39dfe9badd808c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14625e6b99c0637bffbb8a60af92088232c313ec1b7ce585e39dfe9badd808c->enter($__internal_f14625e6b99c0637bffbb8a60af92088232c313ec1b7ce585e39dfe9badd808c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 90
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 92
        echo $this->env->getExtension('CodeExplorerBundle\Twig\SourceCodeExtension')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_f14625e6b99c0637bffbb8a60af92088232c313ec1b7ce585e39dfe9badd808c->leave($__internal_f14625e6b99c0637bffbb8a60af92088232c313ec1b7ce585e39dfe9badd808c_prof);

        
        $__internal_3fa9b6e374e4e6ffe2ffb24e69504c887cc48206eb173ee48288d03ae7919ed8->leave($__internal_3fa9b6e374e4e6ffe2ffb24e69504c887cc48206eb173ee48288d03ae7919ed8_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 92,  249 => 90,  240 => 89,  221 => 79,  217 => 78,  208 => 72,  204 => 71,  193 => 63,  185 => 58,  175 => 51,  171 => 50,  167 => 49,  158 => 43,  145 => 33,  140 => 31,  134 => 28,  128 => 25,  124 => 24,  119 => 22,  114 => 20,  108 => 16,  102 => 13,  99 => 12,  96 => 11,  87 => 10,  75 => 7,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block body_id 'login' %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('build/js/login.js') }}\"></script>
{% endblock %}

{% block main %}
    {% if error %}
        <div class=\"alert alert-danger\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <div class=\"row\">
        <div class=\"col-sm-5\">
            <div class=\"well\">
                <form action=\"{{ path('security_login') }}\" method=\"post\">
                    <fieldset>
                        <legend><i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'title.login'|trans }}</legend>
                        <div class=\"form-group\">
                            <label for=\"username\">{{ 'label.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\"/>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"password\">{{ 'label.password'|trans }}</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" />
                        </div>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'action.sign_in'|trans }}
                        </button>
                    </fieldset>
                </form>
            </div>
        </div>

        <div id=\"login-help\" class=\"col-sm-7\">
            <h3>
                <i class=\"fa fa-long-arrow-left\" aria-hidden=\"true\"></i>
                {{ 'help.login_users'|trans }}
            </h3>

            <table class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">{{ 'label.username'|trans }}</th>
                        <th scope=\"col\">{{ 'label.password'|trans }}</th>
                        <th scope=\"col\">{{ 'label.role'|trans }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>john_user</td>
                        <td>kitten</td>
                        <td><code>ROLE_USER</code> ({{ 'help.role_user'|trans }})</td>
                    </tr>
                    <tr>
                        <td>jane_admin</td>
                        <td>kitten</td>
                        <td><code>ROLE_ADMIN</code> ({{ 'help.role_admin'|trans }})</td>
                    </tr>
                </tbody>
            </table>

            <div id=\"login-users-help\" class=\"panel panel-default\">
                <div class=\"panel-body\">
                    <p>
                        <span class=\"label label-success\">{{ 'note'|trans }}</span>
                        {{ 'help.reload_fixtures'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console doctrine:fixtures:load</code>
                    </p>

                    <p>
                        <span class=\"label label-success\">{{ 'tip'|trans }}</span>
                        {{ 'help.add_user'|trans }}<br/>

                        <code class=\"console\">\$ php bin/console app:add-user</code>
                    </p>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}

    {{ show_source_code(_self) }}
{% endblock %}
", "security/login.html.twig", "/home/reinhold/Documents/Work/Vlaz/symfony_demo/app/Resources/views/security/login.html.twig");
    }
}
