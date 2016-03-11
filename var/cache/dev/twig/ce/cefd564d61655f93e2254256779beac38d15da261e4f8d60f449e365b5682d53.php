<?php

/* OCPlateformBundle::layout.html.twig */
class __TwigTemplate_dfccfd0f6c4a8c8f6a75aa8bcdd60113e5aeddf60065e2c4a393a28417d3f5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlateformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_848f417f8be691063e834d13eea5437a02d318b9ea604e824623fdf201fd86d6 = $this->env->getExtension("native_profiler");
        $__internal_848f417f8be691063e834d13eea5437a02d318b9ea604e824623fdf201fd86d6->enter($__internal_848f417f8be691063e834d13eea5437a02d318b9ea604e824623fdf201fd86d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlateformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848f417f8be691063e834d13eea5437a02d318b9ea604e824623fdf201fd86d6->leave($__internal_848f417f8be691063e834d13eea5437a02d318b9ea604e824623fdf201fd86d6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec91ac24723e06a67616e49e1defe7f162ce1e3166df044c746edf9a182f6e0a = $this->env->getExtension("native_profiler");
        $__internal_ec91ac24723e06a67616e49e1defe7f162ce1e3166df044c746edf9a182f6e0a->enter($__internal_ec91ac24723e06a67616e49e1defe7f162ce1e3166df044c746edf9a182f6e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ec91ac24723e06a67616e49e1defe7f162ce1e3166df044c746edf9a182f6e0a->leave($__internal_ec91ac24723e06a67616e49e1defe7f162ce1e3166df044c746edf9a182f6e0a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a88c72852418a335234ac71496f10b4959473cb2c839fa19a1e690eae38ba5c6 = $this->env->getExtension("native_profiler");
        $__internal_a88c72852418a335234ac71496f10b4959473cb2c839fa19a1e690eae38ba5c6->enter($__internal_a88c72852418a335234ac71496f10b4959473cb2c839fa19a1e690eae38ba5c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_a88c72852418a335234ac71496f10b4959473cb2c839fa19a1e690eae38ba5c6->leave($__internal_a88c72852418a335234ac71496f10b4959473cb2c839fa19a1e690eae38ba5c6_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_aa662838cbb7d7482ab16971bfb0f6ebf4ef4b7da4cadbbdb3c16f9439884f60 = $this->env->getExtension("native_profiler");
        $__internal_aa662838cbb7d7482ab16971bfb0f6ebf4ef4b7da4cadbbdb3c16f9439884f60->enter($__internal_aa662838cbb7d7482ab16971bfb0f6ebf4ef4b7da4cadbbdb3c16f9439884f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_aa662838cbb7d7482ab16971bfb0f6ebf4ef4b7da4cadbbdb3c16f9439884f60->leave($__internal_aa662838cbb7d7482ab16971bfb0f6ebf4ef4b7da4cadbbdb3c16f9439884f60_prof);

    }

    public function getTemplateName()
    {
        return "OCPlateformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*     <h1>Annonces</h1>*/
/* */
/*     <hr>*/
/* */
/*     {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*     {% block ocplatform_body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
