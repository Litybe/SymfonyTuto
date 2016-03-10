<?php

/* OCPlateformBundle:Advert:index.html.twig */
class __TwigTemplate_79fd302edfb2f05e0b336d80e2edfffdbe0d5a209defbc5dd15a6d66a3257376 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlateformBundle::layout.html.twig", "OCPlateformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlateformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cddbd864d00ec854507fa69b9821a934d06b844819988efd410c2437b5eb8a5a = $this->env->getExtension("native_profiler");
        $__internal_cddbd864d00ec854507fa69b9821a934d06b844819988efd410c2437b5eb8a5a->enter($__internal_cddbd864d00ec854507fa69b9821a934d06b844819988efd410c2437b5eb8a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlateformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cddbd864d00ec854507fa69b9821a934d06b844819988efd410c2437b5eb8a5a->leave($__internal_cddbd864d00ec854507fa69b9821a934d06b844819988efd410c2437b5eb8a5a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c9ab471c881a395ba62cfea1fb827017eaf7726ed1f32f7d39c803900c976ea = $this->env->getExtension("native_profiler");
        $__internal_6c9ab471c881a395ba62cfea1fb827017eaf7726ed1f32f7d39c803900c976ea->enter($__internal_6c9ab471c881a395ba62cfea1fb827017eaf7726ed1f32f7d39c803900c976ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Index";
        
        $__internal_6c9ab471c881a395ba62cfea1fb827017eaf7726ed1f32f7d39c803900c976ea->leave($__internal_6c9ab471c881a395ba62cfea1fb827017eaf7726ed1f32f7d39c803900c976ea_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f34cb44aab132891d346866da45cd46dc9b7d4bb5d5d85a2ff7c9186b16d21c = $this->env->getExtension("native_profiler");
        $__internal_0f34cb44aab132891d346866da45cd46dc9b7d4bb5d5d85a2ff7c9186b16d21c->enter($__internal_0f34cb44aab132891d346866da45cd46dc9b7d4bb5d5d85a2ff7c9186b16d21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    Notre plateforme est un peu vide pour le moment, mais cela viendra !
";
        
        $__internal_0f34cb44aab132891d346866da45cd46dc9b7d4bb5d5d85a2ff7c9186b16d21c->leave($__internal_0f34cb44aab132891d346866da45cd46dc9b7d4bb5d5d85a2ff7c9186b16d21c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlateformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  48 => 7,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "OCPlateformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}{{ parent() }} - Index{% endblock %}*/
/* */
/* {% block body %}*/
/*     Notre plateforme est un peu vide pour le moment, mais cela viendra !*/
/* {% endblock %}*/
