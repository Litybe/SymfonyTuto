<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b5a2d493cb4a13fdd733398c6936bc4997bbe1476bab1decb3dcbaf2c0b93a02 extends Twig_Template
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
        $__internal_69a9d7c434bf6ee2696f6e9ae1f7722ab431105a3d56dc48a00bb59a4dfd113c = $this->env->getExtension("native_profiler");
        $__internal_69a9d7c434bf6ee2696f6e9ae1f7722ab431105a3d56dc48a00bb59a4dfd113c->enter($__internal_69a9d7c434bf6ee2696f6e9ae1f7722ab431105a3d56dc48a00bb59a4dfd113c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_69a9d7c434bf6ee2696f6e9ae1f7722ab431105a3d56dc48a00bb59a4dfd113c->leave($__internal_69a9d7c434bf6ee2696f6e9ae1f7722ab431105a3d56dc48a00bb59a4dfd113c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
