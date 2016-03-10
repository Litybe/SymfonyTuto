<?php

/* base.html.twig */
class __TwigTemplate_99c62b28d41b4d0c748b65c129851dcb307d8e2afb1523942915c877ba90b29d extends Twig_Template
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
        $__internal_d563e51f8498f43fcd857505f14ecb50575b625b49042c9b89e48963d3446386 = $this->env->getExtension("native_profiler");
        $__internal_d563e51f8498f43fcd857505f14ecb50575b625b49042c9b89e48963d3446386->enter($__internal_d563e51f8498f43fcd857505f14ecb50575b625b49042c9b89e48963d3446386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d563e51f8498f43fcd857505f14ecb50575b625b49042c9b89e48963d3446386->leave($__internal_d563e51f8498f43fcd857505f14ecb50575b625b49042c9b89e48963d3446386_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a38c67f73f7981529ec55cd48284d8dfe977ec72a914eec286ebd73e5bb038d = $this->env->getExtension("native_profiler");
        $__internal_5a38c67f73f7981529ec55cd48284d8dfe977ec72a914eec286ebd73e5bb038d->enter($__internal_5a38c67f73f7981529ec55cd48284d8dfe977ec72a914eec286ebd73e5bb038d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5a38c67f73f7981529ec55cd48284d8dfe977ec72a914eec286ebd73e5bb038d->leave($__internal_5a38c67f73f7981529ec55cd48284d8dfe977ec72a914eec286ebd73e5bb038d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c63f7a2a57686301e4e7fc5714a782f6a4ef19142bba092856191cd1c19c5b1 = $this->env->getExtension("native_profiler");
        $__internal_1c63f7a2a57686301e4e7fc5714a782f6a4ef19142bba092856191cd1c19c5b1->enter($__internal_1c63f7a2a57686301e4e7fc5714a782f6a4ef19142bba092856191cd1c19c5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c63f7a2a57686301e4e7fc5714a782f6a4ef19142bba092856191cd1c19c5b1->leave($__internal_1c63f7a2a57686301e4e7fc5714a782f6a4ef19142bba092856191cd1c19c5b1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bb8eb95fef714e7f4564d37a26db3b653ab9d2ce4e2ca2ecb4842fe784941b4 = $this->env->getExtension("native_profiler");
        $__internal_9bb8eb95fef714e7f4564d37a26db3b653ab9d2ce4e2ca2ecb4842fe784941b4->enter($__internal_9bb8eb95fef714e7f4564d37a26db3b653ab9d2ce4e2ca2ecb4842fe784941b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9bb8eb95fef714e7f4564d37a26db3b653ab9d2ce4e2ca2ecb4842fe784941b4->leave($__internal_9bb8eb95fef714e7f4564d37a26db3b653ab9d2ce4e2ca2ecb4842fe784941b4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ab575d0468d1a1fffe1591f6bad8e4de6b575d8877b83fe2ccff16466fd388d = $this->env->getExtension("native_profiler");
        $__internal_2ab575d0468d1a1fffe1591f6bad8e4de6b575d8877b83fe2ccff16466fd388d->enter($__internal_2ab575d0468d1a1fffe1591f6bad8e4de6b575d8877b83fe2ccff16466fd388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ab575d0468d1a1fffe1591f6bad8e4de6b575d8877b83fe2ccff16466fd388d->leave($__internal_2ab575d0468d1a1fffe1591f6bad8e4de6b575d8877b83fe2ccff16466fd388d_prof);

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
