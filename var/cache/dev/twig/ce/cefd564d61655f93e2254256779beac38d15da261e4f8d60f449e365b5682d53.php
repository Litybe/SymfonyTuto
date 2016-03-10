<?php

/* OCPlateformBundle::layout.html.twig */
class __TwigTemplate_dfccfd0f6c4a8c8f6a75aa8bcdd60113e5aeddf60065e2c4a393a28417d3f5dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b68bb6e99a6fa1805c6cd3aaf82954e4f377e747dfa4d0176a778f6774ee5066 = $this->env->getExtension("native_profiler");
        $__internal_b68bb6e99a6fa1805c6cd3aaf82954e4f377e747dfa4d0176a778f6774ee5066->enter($__internal_b68bb6e99a6fa1805c6cd3aaf82954e4f377e747dfa4d0176a778f6774ee5066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlateformBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE HTML>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>

";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "
</body>
</html>";
        
        $__internal_b68bb6e99a6fa1805c6cd3aaf82954e4f377e747dfa4d0176a778f6774ee5066->leave($__internal_b68bb6e99a6fa1805c6cd3aaf82954e4f377e747dfa4d0176a778f6774ee5066_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8afbc29803157d3c6da9609ce5d7789d9c368825741c317fcff0e27ad91448b5 = $this->env->getExtension("native_profiler");
        $__internal_8afbc29803157d3c6da9609ce5d7789d9c368825741c317fcff0e27ad91448b5->enter($__internal_8afbc29803157d3c6da9609ce5d7789d9c368825741c317fcff0e27ad91448b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_8afbc29803157d3c6da9609ce5d7789d9c368825741c317fcff0e27ad91448b5->leave($__internal_8afbc29803157d3c6da9609ce5d7789d9c368825741c317fcff0e27ad91448b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9742bd7aa3a674430c6c9114a7e560f724029a1f937ad66140deaa4bc28c99d = $this->env->getExtension("native_profiler");
        $__internal_f9742bd7aa3a674430c6c9114a7e560f724029a1f937ad66140deaa4bc28c99d->enter($__internal_f9742bd7aa3a674430c6c9114a7e560f724029a1f937ad66140deaa4bc28c99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f9742bd7aa3a674430c6c9114a7e560f724029a1f937ad66140deaa4bc28c99d->leave($__internal_f9742bd7aa3a674430c6c9114a7e560f724029a1f937ad66140deaa4bc28c99d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlateformBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  49 => 7,  40 => 13,  38 => 11,  31 => 7,  24 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE HTML>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* </head>*/
/* <body>*/
/* */
/* {% block body %}*/
/* {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
