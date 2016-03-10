<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2b977f667fe0fd1d4d71eae82e45205d106aa5373e9ea0102fc6a522817a06ae extends Twig_Template
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
        $__internal_7345797eff65368174c79be285227f22224d81f42a9e217fe528027583eb4775 = $this->env->getExtension("native_profiler");
        $__internal_7345797eff65368174c79be285227f22224d81f42a9e217fe528027583eb4775->enter($__internal_7345797eff65368174c79be285227f22224d81f42a9e217fe528027583eb4775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7345797eff65368174c79be285227f22224d81f42a9e217fe528027583eb4775->leave($__internal_7345797eff65368174c79be285227f22224d81f42a9e217fe528027583eb4775_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
