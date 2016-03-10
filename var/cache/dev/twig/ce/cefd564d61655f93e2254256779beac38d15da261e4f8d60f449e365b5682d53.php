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
        $__internal_55bc13aa567d8a6053542c2594b17cb168a21caf008c003f63678467b85ea707 = $this->env->getExtension("native_profiler");
        $__internal_55bc13aa567d8a6053542c2594b17cb168a21caf008c003f63678467b85ea707->enter($__internal_55bc13aa567d8a6053542c2594b17cb168a21caf008c003f63678467b85ea707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlateformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55bc13aa567d8a6053542c2594b17cb168a21caf008c003f63678467b85ea707->leave($__internal_55bc13aa567d8a6053542c2594b17cb168a21caf008c003f63678467b85ea707_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5978ea353bb383c6a933e4724550cf1de58c2b137507f6db998e324d7878429 = $this->env->getExtension("native_profiler");
        $__internal_f5978ea353bb383c6a933e4724550cf1de58c2b137507f6db998e324d7878429->enter($__internal_f5978ea353bb383c6a933e4724550cf1de58c2b137507f6db998e324d7878429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f5978ea353bb383c6a933e4724550cf1de58c2b137507f6db998e324d7878429->leave($__internal_f5978ea353bb383c6a933e4724550cf1de58c2b137507f6db998e324d7878429_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb4110332fd39babbe0412ac9970bf37f30e16da279c318feaf1fdba61ac50e8 = $this->env->getExtension("native_profiler");
        $__internal_bb4110332fd39babbe0412ac9970bf37f30e16da279c318feaf1fdba61ac50e8->enter($__internal_bb4110332fd39babbe0412ac9970bf37f30e16da279c318feaf1fdba61ac50e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bb4110332fd39babbe0412ac9970bf37f30e16da279c318feaf1fdba61ac50e8->leave($__internal_bb4110332fd39babbe0412ac9970bf37f30e16da279c318feaf1fdba61ac50e8_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f1002b348aa637f2ee70317cd7986f333d649038eaf09c74e3ac2990ee3a9add = $this->env->getExtension("native_profiler");
        $__internal_f1002b348aa637f2ee70317cd7986f333d649038eaf09c74e3ac2990ee3a9add->enter($__internal_f1002b348aa637f2ee70317cd7986f333d649038eaf09c74e3ac2990ee3a9add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_f1002b348aa637f2ee70317cd7986f333d649038eaf09c74e3ac2990ee3a9add->leave($__internal_f1002b348aa637f2ee70317cd7986f333d649038eaf09c74e3ac2990ee3a9add_prof);

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
