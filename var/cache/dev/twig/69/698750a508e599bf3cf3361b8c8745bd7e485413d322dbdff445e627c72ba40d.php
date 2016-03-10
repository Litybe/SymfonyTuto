<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_891d291bedcf2ad661f88ea253cda28423bb9a293c6d5631084d38282a9c2406 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b3cb69ed3b8e0f163567a80c8adbe928a3cb75fad89991fb8b63142af378a41 = $this->env->getExtension("native_profiler");
        $__internal_8b3cb69ed3b8e0f163567a80c8adbe928a3cb75fad89991fb8b63142af378a41->enter($__internal_8b3cb69ed3b8e0f163567a80c8adbe928a3cb75fad89991fb8b63142af378a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8b3cb69ed3b8e0f163567a80c8adbe928a3cb75fad89991fb8b63142af378a41->leave($__internal_8b3cb69ed3b8e0f163567a80c8adbe928a3cb75fad89991fb8b63142af378a41_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
