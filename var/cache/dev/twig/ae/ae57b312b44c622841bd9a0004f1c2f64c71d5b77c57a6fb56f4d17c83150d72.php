<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_14b38186cf6fa2d0addf9067231b1c6bdd37e14856f832cd882eee44cb242bf2 extends Twig_Template
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
        $__internal_19cbb9748d05aac001d7d383dfb1b5906981e0e5c0aacd80d83b8949102e9659 = $this->env->getExtension("native_profiler");
        $__internal_19cbb9748d05aac001d7d383dfb1b5906981e0e5c0aacd80d83b8949102e9659->enter($__internal_19cbb9748d05aac001d7d383dfb1b5906981e0e5c0aacd80d83b8949102e9659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_19cbb9748d05aac001d7d383dfb1b5906981e0e5c0aacd80d83b8949102e9659->leave($__internal_19cbb9748d05aac001d7d383dfb1b5906981e0e5c0aacd80d83b8949102e9659_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
