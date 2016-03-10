<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_20cdd1bba41598c0a906964a4091bfd7d6f2f1faf7ca16972ef26dd7fead6a37 extends Twig_Template
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
        $__internal_510260a2d91ba61f477389213246bdae1c0e3c80cd6e1d919ba7e2382b59471b = $this->env->getExtension("native_profiler");
        $__internal_510260a2d91ba61f477389213246bdae1c0e3c80cd6e1d919ba7e2382b59471b->enter($__internal_510260a2d91ba61f477389213246bdae1c0e3c80cd6e1d919ba7e2382b59471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_510260a2d91ba61f477389213246bdae1c0e3c80cd6e1d919ba7e2382b59471b->leave($__internal_510260a2d91ba61f477389213246bdae1c0e3c80cd6e1d919ba7e2382b59471b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
