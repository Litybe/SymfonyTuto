<?php

/* OCPlateformBundle:Advert:view.html.twig */
class __TwigTemplate_bb7576ce6eef9159ab491def15d15814e9f477889da01c52bb798c52918bb2ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlateformBundle::layout.html.twig", "OCPlateformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlateformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8310763d9cd9046f9f289119956969f8d9dc4ee67fc029f99e045ffe54558507 = $this->env->getExtension("native_profiler");
        $__internal_8310763d9cd9046f9f289119956969f8d9dc4ee67fc029f99e045ffe54558507->enter($__internal_8310763d9cd9046f9f289119956969f8d9dc4ee67fc029f99e045ffe54558507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlateformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8310763d9cd9046f9f289119956969f8d9dc4ee67fc029f99e045ffe54558507->leave($__internal_8310763d9cd9046f9f289119956969f8d9dc4ee67fc029f99e045ffe54558507_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c93a44eabd0f82644207b592dbc0dd8e5c708ef3077e77e632973400efb4b08 = $this->env->getExtension("native_profiler");
        $__internal_3c93a44eabd0f82644207b592dbc0dd8e5c708ef3077e77e632973400efb4b08->enter($__internal_3c93a44eabd0f82644207b592dbc0dd8e5c708ef3077e77e632973400efb4b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3c93a44eabd0f82644207b592dbc0dd8e5c708ef3077e77e632973400efb4b08->leave($__internal_3c93a44eabd0f82644207b592dbc0dd8e5c708ef3077e77e632973400efb4b08_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ce17cb0e4e273a0a9a6d3109c60a959097843b5aee11ab20c85a6e75947e288b = $this->env->getExtension("native_profiler");
        $__internal_ce17cb0e4e273a0a9a6d3109c60a959097843b5aee11ab20c85a6e75947e288b->enter($__internal_ce17cb0e4e273a0a9a6d3109c60a959097843b5aee11ab20c85a6e75947e288b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>Par ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

    <div class=\"well\">
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
    </div>

    <p>
        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à la liste
        </a>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i>
            Modifier l'annonce
        </a>
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Supprimer l'annonce
        </a>
    </p>

";
        
        $__internal_ce17cb0e4e273a0a9a6d3109c60a959097843b5aee11ab20c85a6e75947e288b->leave($__internal_ce17cb0e4e273a0a9a6d3109c60a959097843b5aee11ab20c85a6e75947e288b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlateformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 27,  86 => 23,  79 => 19,  72 => 15,  64 => 12,  60 => 11,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "OCPlateformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*     <h2>{{ advert.title }}</h2>*/
/*     <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*     <div class="well">*/
/*         {{ advert.content }}*/
/*     </div>*/
/* */
/*     <p>*/
/*         <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i>*/
/*             Modifier l'annonce*/
/*         </a>*/
/*         <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i>*/
/*             Supprimer l'annonce*/
/*         </a>*/
/*     </p>*/
/* */
/* {% endblock %}*/
