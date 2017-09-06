<?php

/* base.html.twig */
class __TwigTemplate_0a5f8f6ba90182d83ebac657b6800ef208bc1ee82511eb4798c0eb6deb095a1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'header_navigation_links' => array($this, 'block_header_navigation_links'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_706b2d4e991c853b06e350ebbf498614cafbc136fd5c760c4892451d8515bfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706b2d4e991c853b06e350ebbf498614cafbc136fd5c760c4892451d8515bfab->enter($__internal_706b2d4e991c853b06e350ebbf498614cafbc136fd5c760c4892451d8515bfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f4e0f31ecf0f79f9a514c5842a9b3d2af2b6462c4098a1435510ed0ec6494fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e0f31ecf0f79f9a514c5842a9b3d2af2b6462c4098a1435510ed0ec6494fde->enter($__internal_f4e0f31ecf0f79f9a514c5842a9b3d2af2b6462c4098a1435510ed0ec6494fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("rss.title"), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_rss");
        echo "\">
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body id=\"";
        // line 20
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

        ";
        // line 22
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "
        <div class=\"container body-container\">
            ";
        // line 91
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "        </div>

        ";
        // line 112
        $this->displayBlock('footer', $context, $blocks);
        // line 137
        echo "
        ";
        // line 138
        $this->displayBlock('javascripts', $context, $blocks);
        // line 143
        echo "
        ";
        // line 147
        echo "        <!-- Page rendered on ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, "now", "long", "long", null, "UTC"), "html", null, true);
        echo " -->
    </body>
</html>
";
        
        $__internal_706b2d4e991c853b06e350ebbf498614cafbc136fd5c760c4892451d8515bfab->leave($__internal_706b2d4e991c853b06e350ebbf498614cafbc136fd5c760c4892451d8515bfab_prof);

        
        $__internal_f4e0f31ecf0f79f9a514c5842a9b3d2af2b6462c4098a1435510ed0ec6494fde->leave($__internal_f4e0f31ecf0f79f9a514c5842a9b3d2af2b6462c4098a1435510ed0ec6494fde_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cd0550add1db3bdc879727b360f1623690d3b3d6afd32e713b08b37ee1627af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd0550add1db3bdc879727b360f1623690d3b3d6afd32e713b08b37ee1627af->enter($__internal_3cd0550add1db3bdc879727b360f1623690d3b3d6afd32e713b08b37ee1627af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_545f831bd3cc07f93ed3c37c3eb01b6c144e2c2e0cc3d00d26476f2b653086b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_545f831bd3cc07f93ed3c37c3eb01b6c144e2c2e0cc3d00d26476f2b653086b8->enter($__internal_545f831bd3cc07f93ed3c37c3eb01b6c144e2c2e0cc3d00d26476f2b653086b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Demo application";
        
        $__internal_545f831bd3cc07f93ed3c37c3eb01b6c144e2c2e0cc3d00d26476f2b653086b8->leave($__internal_545f831bd3cc07f93ed3c37c3eb01b6c144e2c2e0cc3d00d26476f2b653086b8_prof);

        
        $__internal_3cd0550add1db3bdc879727b360f1623690d3b3d6afd32e713b08b37ee1627af->leave($__internal_3cd0550add1db3bdc879727b360f1623690d3b3d6afd32e713b08b37ee1627af_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_92f7e0ebbcd7210aba1b0a27a706dd8048a1f14df6c8372a94c070d7cd6a19f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f7e0ebbcd7210aba1b0a27a706dd8048a1f14df6c8372a94c070d7cd6a19f3->enter($__internal_92f7e0ebbcd7210aba1b0a27a706dd8048a1f14df6c8372a94c070d7cd6a19f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ef0bc62b6b13c2921ac40aeece205e0a64cfdc176e8b1cf51fae281ef2d2ad8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0bc62b6b13c2921ac40aeece205e0a64cfdc176e8b1cf51fae281ef2d2ad8e->enter($__internal_ef0bc62b6b13c2921ac40aeece205e0a64cfdc176e8b1cf51fae281ef2d2ad8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 14
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/css/app.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_ef0bc62b6b13c2921ac40aeece205e0a64cfdc176e8b1cf51fae281ef2d2ad8e->leave($__internal_ef0bc62b6b13c2921ac40aeece205e0a64cfdc176e8b1cf51fae281ef2d2ad8e_prof);

        
        $__internal_92f7e0ebbcd7210aba1b0a27a706dd8048a1f14df6c8372a94c070d7cd6a19f3->leave($__internal_92f7e0ebbcd7210aba1b0a27a706dd8048a1f14df6c8372a94c070d7cd6a19f3_prof);

    }

    // line 20
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_aefe5407859fa834c256434acc58271001f200c6ededf6d80c6fd8fab2a1373d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aefe5407859fa834c256434acc58271001f200c6ededf6d80c6fd8fab2a1373d->enter($__internal_aefe5407859fa834c256434acc58271001f200c6ededf6d80c6fd8fab2a1373d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e943125d5ba059f713aa22aeed3e9c3cf3dd64a7d760d019fc04690995bfe4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e943125d5ba059f713aa22aeed3e9c3cf3dd64a7d760d019fc04690995bfe4eb->enter($__internal_e943125d5ba059f713aa22aeed3e9c3cf3dd64a7d760d019fc04690995bfe4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_e943125d5ba059f713aa22aeed3e9c3cf3dd64a7d760d019fc04690995bfe4eb->leave($__internal_e943125d5ba059f713aa22aeed3e9c3cf3dd64a7d760d019fc04690995bfe4eb_prof);

        
        $__internal_aefe5407859fa834c256434acc58271001f200c6ededf6d80c6fd8fab2a1373d->leave($__internal_aefe5407859fa834c256434acc58271001f200c6ededf6d80c6fd8fab2a1373d_prof);

    }

    // line 22
    public function block_header($context, array $blocks = array())
    {
        $__internal_0b1d01d31f4f10e900525422aa35543f03a8511bfb46ad050664984b58576dd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1d01d31f4f10e900525422aa35543f03a8511bfb46ad050664984b58576dd8->enter($__internal_0b1d01d31f4f10e900525422aa35543f03a8511bfb46ad050664984b58576dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_637f65e1a18138ac18a3b39ebb20536310312465d11c5e8fe56e2ec1679e5389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637f65e1a18138ac18a3b39ebb20536310312465d11c5e8fe56e2ec1679e5389->enter($__internal_637f65e1a18138ac18a3b39ebb20536310312465d11c5e8fe56e2ec1679e5389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 23
        echo "            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.toggle_nav"), "html", null, true);
        echo "</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                ";
        // line 43
        $this->displayBlock('header_navigation_links', $context, $blocks);
        // line 58
        echo "
                                ";
        // line 59
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 60
            echo "                                    <li>
                                        <a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("security_logout");
            echo "\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.logout"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        }
        // line 66
        echo "
                                <li>
                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_search");
        echo "\"> <i class=\"fa fa-search\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.search"), "html", null, true);
        echo "</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.choose_language"), "html", null, true);
        echo "</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\AppExtension')->getLocales());
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 79
            echo "                                            <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == $this->getAttribute($context["locale"], "code", array()))) {
                echo "aria-checked=\"true\" class=\"active\"";
            } else {
                echo "aria-checked=\"false\"";
            }
            echo " role=\"menuitem\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route", 1 => "blog_index"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params", 1 => array()), "method"), array("_locale" => $this->getAttribute($context["locale"], "code", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["locale"], "name", array())), "html", null, true);
            echo "</a></li>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        ";
        
        $__internal_637f65e1a18138ac18a3b39ebb20536310312465d11c5e8fe56e2ec1679e5389->leave($__internal_637f65e1a18138ac18a3b39ebb20536310312465d11c5e8fe56e2ec1679e5389_prof);

        
        $__internal_0b1d01d31f4f10e900525422aa35543f03a8511bfb46ad050664984b58576dd8->leave($__internal_0b1d01d31f4f10e900525422aa35543f03a8511bfb46ad050664984b58576dd8_prof);

    }

    // line 43
    public function block_header_navigation_links($context, array $blocks = array())
    {
        $__internal_7b41703638c8f2acfa8fb9ac0a5f146a910c82bf4c6f9034e04be3766405d5d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b41703638c8f2acfa8fb9ac0a5f146a910c82bf4c6f9034e04be3766405d5d2->enter($__internal_7b41703638c8f2acfa8fb9ac0a5f146a910c82bf4c6f9034e04be3766405d5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_0ceecbac6ef5517521ce9f335ed5b0ead86fb840a3714bd546873708d500c6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ceecbac6ef5517521ce9f335ed5b0ead86fb840a3714bd546873708d500c6a8->enter($__internal_0ceecbac6ef5517521ce9f335ed5b0ead86fb840a3714bd546873708d500c6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 44
        echo "                                    <li>
                                        <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index");
        echo "\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.homepage"), "html", null, true);
        echo "
                                        </a>
                                    </li>

                                    ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "                                        <li>
                                            <a href=\"";
            // line 52
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_post_index");
            echo "\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("menu.admin"), "html", null, true);
            echo "
                                            </a>
                                        </li>
                                    ";
        }
        // line 57
        echo "                                ";
        
        $__internal_0ceecbac6ef5517521ce9f335ed5b0ead86fb840a3714bd546873708d500c6a8->leave($__internal_0ceecbac6ef5517521ce9f335ed5b0ead86fb840a3714bd546873708d500c6a8_prof);

        
        $__internal_7b41703638c8f2acfa8fb9ac0a5f146a910c82bf4c6f9034e04be3766405d5d2->leave($__internal_7b41703638c8f2acfa8fb9ac0a5f146a910c82bf4c6f9034e04be3766405d5d2_prof);

    }

    // line 91
    public function block_body($context, array $blocks = array())
    {
        $__internal_049f5060c67b1ba55ad632cdc8e71f7389b32ebfc3ee35031737390f962a2b35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049f5060c67b1ba55ad632cdc8e71f7389b32ebfc3ee35031737390f962a2b35->enter($__internal_049f5060c67b1ba55ad632cdc8e71f7389b32ebfc3ee35031737390f962a2b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a37c1d080fa7ec32f88740918a7f959c9d869bd9e2da30bc3ff6eab46b1bbaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a37c1d080fa7ec32f88740918a7f959c9d869bd9e2da30bc3ff6eab46b1bbaa4->enter($__internal_a37c1d080fa7ec32f88740918a7f959c9d869bd9e2da30bc3ff6eab46b1bbaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        ";
        // line 94
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

                        ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        ";
        // line 100
        $this->displayBlock('sidebar', $context, $blocks);
        // line 107
        echo "                    </div>
                </div>
            ";
        
        $__internal_a37c1d080fa7ec32f88740918a7f959c9d869bd9e2da30bc3ff6eab46b1bbaa4->leave($__internal_a37c1d080fa7ec32f88740918a7f959c9d869bd9e2da30bc3ff6eab46b1bbaa4_prof);

        
        $__internal_049f5060c67b1ba55ad632cdc8e71f7389b32ebfc3ee35031737390f962a2b35->leave($__internal_049f5060c67b1ba55ad632cdc8e71f7389b32ebfc3ee35031737390f962a2b35_prof);

    }

    // line 96
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c9eb4669d496d9db54751d4bbc0b93b0b5e1acc5c566b33e96b209c8d5f3af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9eb4669d496d9db54751d4bbc0b93b0b5e1acc5c566b33e96b209c8d5f3af7->enter($__internal_7c9eb4669d496d9db54751d4bbc0b93b0b5e1acc5c566b33e96b209c8d5f3af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f3bb7d0d248f24a2a0d307eaab9ce7f5a648ed575ac2e738dfcf6bc594d0b7ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3bb7d0d248f24a2a0d307eaab9ce7f5a648ed575ac2e738dfcf6bc594d0b7ff->enter($__internal_f3bb7d0d248f24a2a0d307eaab9ce7f5a648ed575ac2e738dfcf6bc594d0b7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_f3bb7d0d248f24a2a0d307eaab9ce7f5a648ed575ac2e738dfcf6bc594d0b7ff->leave($__internal_f3bb7d0d248f24a2a0d307eaab9ce7f5a648ed575ac2e738dfcf6bc594d0b7ff_prof);

        
        $__internal_7c9eb4669d496d9db54751d4bbc0b93b0b5e1acc5c566b33e96b209c8d5f3af7->leave($__internal_7c9eb4669d496d9db54751d4bbc0b93b0b5e1acc5c566b33e96b209c8d5f3af7_prof);

    }

    // line 100
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e6bf6fbfac2828f4a1f334534b1a5fa51bb4b5be0c4ccf22363495b1ef013d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6bf6fbfac2828f4a1f334534b1a5fa51bb4b5be0c4ccf22363495b1ef013d9->enter($__internal_4e6bf6fbfac2828f4a1f334534b1a5fa51bb4b5be0c4ccf22363495b1ef013d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_b0bc80f5a7bd364c236eb3fccc6aebcba68626a966027c2b726223c5d5339b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0bc80f5a7bd364c236eb3fccc6aebcba68626a966027c2b726223c5d5339b35->enter($__internal_b0bc80f5a7bd364c236eb3fccc6aebcba68626a966027c2b726223c5d5339b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 101
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FrameworkBundle:Template:template", array("template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => $this->getAttribute($this->getAttribute(        // line 104
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()))));
        // line 105
        echo "
                        ";
        
        $__internal_b0bc80f5a7bd364c236eb3fccc6aebcba68626a966027c2b726223c5d5339b35->leave($__internal_b0bc80f5a7bd364c236eb3fccc6aebcba68626a966027c2b726223c5d5339b35_prof);

        
        $__internal_4e6bf6fbfac2828f4a1f334534b1a5fa51bb4b5be0c4ccf22363495b1ef013d9->leave($__internal_4e6bf6fbfac2828f4a1f334534b1a5fa51bb4b5be0c4ccf22363495b1ef013d9_prof);

    }

    // line 112
    public function block_footer($context, array $blocks = array())
    {
        $__internal_080731653758845f1cfd460adea8b10ca42eefa97829573597f4a4d85a48430c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080731653758845f1cfd460adea8b10ca42eefa97829573597f4a4d85a48430c->enter($__internal_080731653758845f1cfd460adea8b10ca42eefa97829573597f4a4d85a48430c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_50025dc9a42eb2a31e03a7622f1ab6edbd3c0ff5f0bedde98811832d725d2957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50025dc9a42eb2a31e03a7622f1ab6edbd3c0ff5f0bedde98811832d725d2957->enter($__internal_50025dc9a42eb2a31e03a7622f1ab6edbd3c0ff5f0bedde98811832d725d2957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 113
        echo "            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; ";
        // line 117
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - The Symfony Project</p>
                            <p>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mit_license"), "html", null, true);
        echo "</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_50025dc9a42eb2a31e03a7622f1ab6edbd3c0ff5f0bedde98811832d725d2957->leave($__internal_50025dc9a42eb2a31e03a7622f1ab6edbd3c0ff5f0bedde98811832d725d2957_prof);

        
        $__internal_080731653758845f1cfd460adea8b10ca42eefa97829573597f4a4d85a48430c->leave($__internal_080731653758845f1cfd460adea8b10ca42eefa97829573597f4a4d85a48430c_prof);

    }

    // line 138
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8556c1862e4c9fd145e938fd7f6acc87d1ecf6ab69ee74186ec4b32d4bbc3f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8556c1862e4c9fd145e938fd7f6acc87d1ecf6ab69ee74186ec4b32d4bbc3f1e->enter($__internal_8556c1862e4c9fd145e938fd7f6acc87d1ecf6ab69ee74186ec4b32d4bbc3f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ae250d2522b7f9c17ad5f1a5313363ca8c96cc25cebb3efdaef6ccc66f4bc9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae250d2522b7f9c17ad5f1a5313363ca8c96cc25cebb3efdaef6ccc66f4bc9fe->enter($__internal_ae250d2522b7f9c17ad5f1a5313363ca8c96cc25cebb3efdaef6ccc66f4bc9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 139
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/manifest.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/common.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("build/js/app.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_ae250d2522b7f9c17ad5f1a5313363ca8c96cc25cebb3efdaef6ccc66f4bc9fe->leave($__internal_ae250d2522b7f9c17ad5f1a5313363ca8c96cc25cebb3efdaef6ccc66f4bc9fe_prof);

        
        $__internal_8556c1862e4c9fd145e938fd7f6acc87d1ecf6ab69ee74186ec4b32d4bbc3f1e->leave($__internal_8556c1862e4c9fd145e938fd7f6acc87d1ecf6ab69ee74186ec4b32d4bbc3f1e_prof);

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
        return array (  478 => 141,  474 => 140,  469 => 139,  460 => 138,  431 => 118,  427 => 117,  421 => 113,  412 => 112,  401 => 105,  399 => 104,  397 => 101,  388 => 100,  371 => 96,  359 => 107,  357 => 100,  352 => 97,  350 => 96,  345 => 94,  341 => 92,  332 => 91,  322 => 57,  315 => 53,  311 => 52,  308 => 51,  306 => 50,  299 => 46,  295 => 45,  292 => 44,  283 => 43,  266 => 81,  249 => 79,  245 => 78,  239 => 75,  227 => 68,  223 => 66,  216 => 62,  212 => 61,  209 => 60,  207 => 59,  204 => 58,  202 => 43,  190 => 34,  180 => 27,  174 => 23,  165 => 22,  148 => 20,  135 => 14,  126 => 13,  108 => 11,  93 => 147,  90 => 143,  88 => 138,  85 => 137,  83 => 112,  79 => 110,  77 => 91,  73 => 89,  71 => 22,  66 => 20,  60 => 17,  57 => 16,  55 => 13,  49 => 12,  45 => 11,  38 => 7,  35 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See https://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Symfony Demo application{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('build/css/app.css') }}\">
        {% endblock %}

        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">

        {% block header %}
            <header>
                <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                    <div class=\"container\">
                        <div class=\"navbar-header col-md-3 col-lg-2\">
                            <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">
                                Symfony Demo
                            </a>

                            <button type=\"button\" class=\"navbar-toggle\"
                                    data-toggle=\"collapse\"
                                    data-target=\".navbar-collapse\">
                                <span class=\"sr-only\">{{ 'menu.toggle_nav'|trans }}</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </button>
                        </div>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav navbar-right\">

                                {% block header_navigation_links %}
                                    <li>
                                        <a href=\"{{ path('blog_index') }}\">
                                            <i class=\"fa fa-home\" aria-hidden=\"true\"></i> {{ 'menu.homepage'|trans }}
                                        </a>
                                    </li>

                                    {% if is_granted('ROLE_ADMIN') %}
                                        <li>
                                            <a href=\"{{ path('admin_post_index') }}\">
                                                <i class=\"fa fa-lock\" aria-hidden=\"true\"></i> {{ 'menu.admin'|trans }}
                                            </a>
                                        </li>
                                    {% endif %}
                                {% endblock %}

                                {% if app.user %}
                                    <li>
                                        <a href=\"{{ path('security_logout') }}\">
                                            <i class=\"fa fa-sign-out\" aria-hidden=\"true\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </li>
                                {% endif %}

                                <li>
                                    <a href=\"{{ path('blog_search') }}\"> <i class=\"fa fa-search\"></i> {{ 'menu.search'|trans }}</a>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\" id=\"locales\">
                                        <i class=\"fa fa-globe\" aria-hidden=\"true\"></i>
                                        <span class=\"caret\"></span>
                                        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
                                    </a>
                                    <ul class=\"dropdown-menu locales\" role=\"menu\" aria-labelledby=\"locales\">
                                        {% for locale in locales() %}
                                            <li {% if app.request.locale == locale.code %}aria-checked=\"true\" class=\"active\"{% else %}aria-checked=\"false\"{% endif %} role=\"menuitem\"><a href=\"{{ path(app.request.get('_route', 'blog_index'), app.request.get('_route_params', [])|merge({_locale: locale.code})) }}\">{{ locale.name|capitalize }}</a></li>
                                        {% endfor %}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        {% endblock %}

        <div class=\"container body-container\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-sm-9\">
                        {{ include('default/_flash_messages.html.twig') }}

                        {% block main %}{% endblock %}
                    </div>

                    <div id=\"sidebar\" class=\"col-sm-3\">
                        {% block sidebar %}
                            {{ render_esi(controller('FrameworkBundle:Template:template', {
                                'template': 'blog/about.html.twig',
                                'sharedAge': 600,
                                '_locale': app.request.locale
                            })) }}
                        {% endblock %}
                    </div>
                </div>
            {% endblock %}
        </div>

        {% block footer %}
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div id=\"footer-copyright\" class=\"col-md-6\">
                            <p>&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p>{{ 'mit_license'|trans }}</p>
                        </div>
                        <div id=\"footer-resources\" class=\"col-md-6\">
                            <p>
                                <a href=\"https://twitter.com/symfony\" title=\"Symfony Twitter\">
                                    <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://www.facebook.com/SensioLabs\" title=\"SensioLabs Facebook\">
                                    <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
                                </a>
                                <a href=\"https://symfony.com/blog/\" title=\"Symfony Blog\">
                                    <i class=\"fa fa-rss\" aria-hidden=\"true\"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

        {% block javascripts %}
            <script src=\"{{ asset('build/manifest.js') }}\"></script>
            <script src=\"{{ asset('build/js/common.js') }}\"></script>
            <script src=\"{{ asset('build/js/app.js') }}\"></script>
        {% endblock %}

        {# it's not mandatory to set the timezone in localizeddate(). This is done to
           avoid errors when the 'intl' PHP extension is not available and the application
           is forced to use the limited \"intl polyfill\", which only supports UTC and GMT #}
        <!-- Page rendered on {{ 'now'|localizeddate('long', 'long', null, 'UTC') }} -->
    </body>
</html>
", "base.html.twig", "/home/reinhold/Documents/Work/Vlaz/symfony_demo/app/Resources/views/base.html.twig");
    }
}
