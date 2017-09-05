<?php

/* pretenciones/edit.html.twig */
class __TwigTemplate_609e76b21325f86a8fdab3c583d2f6ef5ac576c907746d5d8e5e8abd22c0ba2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "pretenciones/edit.html.twig", 1);
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
        $__internal_35d0c4343aaac54e30c3ed60a4d82c1f87438ca40388f510aa26089a72007724 = $this->env->getExtension("native_profiler");
        $__internal_35d0c4343aaac54e30c3ed60a4d82c1f87438ca40388f510aa26089a72007724->enter($__internal_35d0c4343aaac54e30c3ed60a4d82c1f87438ca40388f510aa26089a72007724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pretenciones/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35d0c4343aaac54e30c3ed60a4d82c1f87438ca40388f510aa26089a72007724->leave($__internal_35d0c4343aaac54e30c3ed60a4d82c1f87438ca40388f510aa26089a72007724_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_75dd98b380b603ee0fa13df8ed5c4b9eaf7e94d01bc5346ab4cb6fb88e92b1e7 = $this->env->getExtension("native_profiler");
        $__internal_75dd98b380b603ee0fa13df8ed5c4b9eaf7e94d01bc5346ab4cb6fb88e92b1e7->enter($__internal_75dd98b380b603ee0fa13df8ed5c4b9eaf7e94d01bc5346ab4cb6fb88e92b1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Pretencion</h1>

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
        echo $this->env->getExtension('routing')->getPath("pretenciones_index");
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
        
        $__internal_75dd98b380b603ee0fa13df8ed5c4b9eaf7e94d01bc5346ab4cb6fb88e92b1e7->leave($__internal_75dd98b380b603ee0fa13df8ed5c4b9eaf7e94d01bc5346ab4cb6fb88e92b1e7_prof);

    }

    public function getTemplateName()
    {
        return "pretenciones/edit.html.twig";
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
/*     <h1>Editar Pretencion</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('pretenciones_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
