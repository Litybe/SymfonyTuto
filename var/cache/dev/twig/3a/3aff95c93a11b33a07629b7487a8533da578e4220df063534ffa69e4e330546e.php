<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_1ff18bf53558b7343fea99c91e639f51cbf450533f33b6ecdcb5385bc29041af extends Twig_Template
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
        $__internal_c11302b718b73a95a4c42019de7c6c5515e0b077c4e9201748d79c353693572f = $this->env->getExtension("native_profiler");
        $__internal_c11302b718b73a95a4c42019de7c6c5515e0b077c4e9201748d79c353693572f->enter($__internal_c11302b718b73a95a4c42019de7c6c5515e0b077c4e9201748d79c353693572f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c11302b718b73a95a4c42019de7c6c5515e0b077c4e9201748d79c353693572f->leave($__internal_c11302b718b73a95a4c42019de7c6c5515e0b077c4e9201748d79c353693572f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
