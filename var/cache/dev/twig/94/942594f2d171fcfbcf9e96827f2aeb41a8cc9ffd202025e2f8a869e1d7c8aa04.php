<?php

/* OCPlateformBundle:Advert:view.html.twig */
class __TwigTemplate_bb7576ce6eef9159ab491def15d15814e9f477889da01c52bb798c52918bb2ef extends Twig_Template
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
        $__internal_78060882ce39172bec7cdc6a8abe333b3ca82a529c9a1dfaba68df696898accc = $this->env->getExtension("native_profiler");
        $__internal_78060882ce39172bec7cdc6a8abe333b3ca82a529c9a1dfaba68df696898accc->enter($__internal_78060882ce39172bec7cdc6a8abe333b3ca82a529c9a1dfaba68df696898accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlateformBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Affichage d'une annonce</h1>

<p>
    ";
        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            echo "<p>Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</p>

<p>
    Ici nous pourrons lire l'annonce ayant comme id : ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "<br />
    Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
</p>
</body>
</html>";
        
        $__internal_78060882ce39172bec7cdc6a8abe333b3ca82a529c9a1dfaba68df696898accc->leave($__internal_78060882ce39172bec7cdc6a8abe333b3ca82a529c9a1dfaba68df696898accc_prof);

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
        return array (  52 => 17,  47 => 14,  38 => 12,  33 => 11,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* </head>*/
/* <body>*/
/* <h1>Affichage d'une annonce</h1>*/
/* */
/* <p>*/
/*     {# On affiche tous les messages flash dont le nom est « info » #}*/
/*     {% for message in app.session.flashbag.get('info') %}*/
/* <p>Message flash : {{ message }}</p>*/
/* {% endfor %}*/
/* </p>*/
/* */
/* <p>*/
/*     Ici nous pourrons lire l'annonce ayant comme id : {{ id }}<br />*/
/*     Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !*/
/* </p>*/
/* </body>*/
/* </html>*/
