<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_432dff60a5850f55b6ece3cc99aee42e034569a09626bcce1f5da3832bdbc2ef extends Twig_Template
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
        $__internal_b792a4fb6e5e93cdcf442d68dccdaa612ac0e36621b5309fe593b0f6f2259717 = $this->env->getExtension("native_profiler");
        $__internal_b792a4fb6e5e93cdcf442d68dccdaa612ac0e36621b5309fe593b0f6f2259717->enter($__internal_b792a4fb6e5e93cdcf442d68dccdaa612ac0e36621b5309fe593b0f6f2259717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b792a4fb6e5e93cdcf442d68dccdaa612ac0e36621b5309fe593b0f6f2259717->leave($__internal_b792a4fb6e5e93cdcf442d68dccdaa612ac0e36621b5309fe593b0f6f2259717_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
