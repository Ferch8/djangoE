<?php

/* demandantes/edit.html.twig */
class __TwigTemplate_6bb9ebd4c218a3092c5ccc7532810a7cfff2036b2bd271281905f16567936dc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandantes/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d95e6947bd2afcb60aa377c9df628fb57b1011ad7a92f9630f0d1377bfabcee = $this->env->getExtension("native_profiler");
        $__internal_1d95e6947bd2afcb60aa377c9df628fb57b1011ad7a92f9630f0d1377bfabcee->enter($__internal_1d95e6947bd2afcb60aa377c9df628fb57b1011ad7a92f9630f0d1377bfabcee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandantes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d95e6947bd2afcb60aa377c9df628fb57b1011ad7a92f9630f0d1377bfabcee->leave($__internal_1d95e6947bd2afcb60aa377c9df628fb57b1011ad7a92f9630f0d1377bfabcee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_675945d59ebff724f960ae53617838217ce05fc611eeb8c71f83c2707b4686f3 = $this->env->getExtension("native_profiler");
        $__internal_675945d59ebff724f960ae53617838217ce05fc611eeb8c71f83c2707b4686f3->enter($__internal_675945d59ebff724f960ae53617838217ce05fc611eeb8c71f83c2707b4686f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Demandante</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("demandantes_index");
        echo "\">Regresar a la lista</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_675945d59ebff724f960ae53617838217ce05fc611eeb8c71f83c2707b4686f3->leave($__internal_675945d59ebff724f960ae53617838217ce05fc611eeb8c71f83c2707b4686f3_prof);

    }

    public function getTemplateName()
    {
        return "demandantes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Editar Demandante</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('demandantes_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
