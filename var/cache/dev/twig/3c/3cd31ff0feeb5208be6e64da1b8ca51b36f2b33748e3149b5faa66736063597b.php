<?php

/* ::base.html.twig */
class __TwigTemplate_a634a00f944306191a700192ac769a6d6cd0596665984924730a82e1ba923bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3d1995309513af97d68332fcd2f7eebbd94f70cd04ad0ff2a5e1e233a14e912 = $this->env->getExtension("native_profiler");
        $__internal_c3d1995309513af97d68332fcd2f7eebbd94f70cd04ad0ff2a5e1e233a14e912->enter($__internal_c3d1995309513af97d68332fcd2f7eebbd94f70cd04ad0ff2a5e1e233a14e912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c3d1995309513af97d68332fcd2f7eebbd94f70cd04ad0ff2a5e1e233a14e912->leave($__internal_c3d1995309513af97d68332fcd2f7eebbd94f70cd04ad0ff2a5e1e233a14e912_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4be85ffb8401abf92b075b753fb70a163bb98ca86a4d263a07c13035568813e = $this->env->getExtension("native_profiler");
        $__internal_a4be85ffb8401abf92b075b753fb70a163bb98ca86a4d263a07c13035568813e->enter($__internal_a4be85ffb8401abf92b075b753fb70a163bb98ca86a4d263a07c13035568813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a4be85ffb8401abf92b075b753fb70a163bb98ca86a4d263a07c13035568813e->leave($__internal_a4be85ffb8401abf92b075b753fb70a163bb98ca86a4d263a07c13035568813e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16d6d620f9755ece84e8ef245dcb1ed57ec37264c22861c0b8742eb0be9630fd = $this->env->getExtension("native_profiler");
        $__internal_16d6d620f9755ece84e8ef245dcb1ed57ec37264c22861c0b8742eb0be9630fd->enter($__internal_16d6d620f9755ece84e8ef245dcb1ed57ec37264c22861c0b8742eb0be9630fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_16d6d620f9755ece84e8ef245dcb1ed57ec37264c22861c0b8742eb0be9630fd->leave($__internal_16d6d620f9755ece84e8ef245dcb1ed57ec37264c22861c0b8742eb0be9630fd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f5bc187f724f8d1faea88767e71ef620aaba4aac52fe53f0c3943859124ede6 = $this->env->getExtension("native_profiler");
        $__internal_1f5bc187f724f8d1faea88767e71ef620aaba4aac52fe53f0c3943859124ede6->enter($__internal_1f5bc187f724f8d1faea88767e71ef620aaba4aac52fe53f0c3943859124ede6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1f5bc187f724f8d1faea88767e71ef620aaba4aac52fe53f0c3943859124ede6->leave($__internal_1f5bc187f724f8d1faea88767e71ef620aaba4aac52fe53f0c3943859124ede6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43058e3bcf5504d85ab972b034c58892167c074e416ecf89f1ad40de1899a40a = $this->env->getExtension("native_profiler");
        $__internal_43058e3bcf5504d85ab972b034c58892167c074e416ecf89f1ad40de1899a40a->enter($__internal_43058e3bcf5504d85ab972b034c58892167c074e416ecf89f1ad40de1899a40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_43058e3bcf5504d85ab972b034c58892167c074e416ecf89f1ad40de1899a40a->leave($__internal_43058e3bcf5504d85ab972b034c58892167c074e416ecf89f1ad40de1899a40a_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
