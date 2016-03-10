<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_abca45726cd3414efc68a10aedafe01106f7c6a4a333df762301fdcb65d272e5 extends Twig_Template
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
        $__internal_42817674a1e13a5159b30ec2b6e3cec3230707d5defb6f25b001b357290fcaf8 = $this->env->getExtension("native_profiler");
        $__internal_42817674a1e13a5159b30ec2b6e3cec3230707d5defb6f25b001b357290fcaf8->enter($__internal_42817674a1e13a5159b30ec2b6e3cec3230707d5defb6f25b001b357290fcaf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_42817674a1e13a5159b30ec2b6e3cec3230707d5defb6f25b001b357290fcaf8->leave($__internal_42817674a1e13a5159b30ec2b6e3cec3230707d5defb6f25b001b357290fcaf8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
