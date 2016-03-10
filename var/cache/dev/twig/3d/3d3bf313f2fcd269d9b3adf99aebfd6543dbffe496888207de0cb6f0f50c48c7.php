<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f10146ec875b2347953524e91b461418420358e682202cf2fe1129b84d72ba17 extends Twig_Template
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
        $__internal_f74e4cb572a5abdef8015d7c815e48acb50a08bb175cc3f0e27628ce1731247d = $this->env->getExtension("native_profiler");
        $__internal_f74e4cb572a5abdef8015d7c815e48acb50a08bb175cc3f0e27628ce1731247d->enter($__internal_f74e4cb572a5abdef8015d7c815e48acb50a08bb175cc3f0e27628ce1731247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f74e4cb572a5abdef8015d7c815e48acb50a08bb175cc3f0e27628ce1731247d->leave($__internal_f74e4cb572a5abdef8015d7c815e48acb50a08bb175cc3f0e27628ce1731247d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
