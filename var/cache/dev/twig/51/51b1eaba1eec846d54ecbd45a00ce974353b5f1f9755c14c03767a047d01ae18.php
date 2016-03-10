<?php

/* @OCPlateform/Advert/index.html.twig */
class __TwigTemplate_10448daac91586ef67dc2265ff3f985aa13a579d85385c3651b3966cab8bc55a extends Twig_Template
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
        $__internal_f389c39eceea6ad41290ab0ec12e87708cdfb54047ccc569986871c2e89ba61c = $this->env->getExtension("native_profiler");
        $__internal_f389c39eceea6ad41290ab0ec12e87708cdfb54047ccc569986871c2e89ba61c->enter($__internal_f389c39eceea6ad41290ab0ec12e87708cdfb54047ccc569986871c2e89ba61c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlateform/Advert/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
</body>
</html>";
        
        $__internal_f389c39eceea6ad41290ab0ec12e87708cdfb54047ccc569986871c2e89ba61c->leave($__internal_f389c39eceea6ad41290ab0ec12e87708cdfb54047ccc569986871c2e89ba61c_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlateform/Advert/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* </head>*/
/* <body>*/
/* <h1>Hello {{ nom }} !</h1>*/
/* */
/* <p>*/
/*     Le Hello World est un grand classique en programmation.*/
/*     Il signifie énormément, car cela veut dire que vous avez*/
/*     réussi à exécuter le programme pour accomplir une tâche simple :*/
/*     afficher ce hello world !*/
/* </p>*/
/* </body>*/
/* </html>*/
