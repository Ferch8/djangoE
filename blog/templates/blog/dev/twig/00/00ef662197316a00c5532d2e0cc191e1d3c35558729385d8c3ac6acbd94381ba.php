<?php

/* tipoasuntos/edit.html.twig */
class __TwigTemplate_6bf103c5f1165a0fc26835866bd40a29b387c413d78b5fac6f98ba868d27afea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tipoasuntos/edit.html.twig", 1);
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
        $__internal_aa0e02a701e4ad3daece7c70ff7f13d9873a33d132590028c6a18dd468459788 = $this->env->getExtension("native_profiler");
        $__internal_aa0e02a701e4ad3daece7c70ff7f13d9873a33d132590028c6a18dd468459788->enter($__internal_aa0e02a701e4ad3daece7c70ff7f13d9873a33d132590028c6a18dd468459788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipoasuntos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa0e02a701e4ad3daece7c70ff7f13d9873a33d132590028c6a18dd468459788->leave($__internal_aa0e02a701e4ad3daece7c70ff7f13d9873a33d132590028c6a18dd468459788_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0fb3421f17ee0480fe7b7083977bb18be1db20e9a95c5a628f87b6e77c0ca7b = $this->env->getExtension("native_profiler");
        $__internal_c0fb3421f17ee0480fe7b7083977bb18be1db20e9a95c5a628f87b6e77c0ca7b->enter($__internal_c0fb3421f17ee0480fe7b7083977bb18be1db20e9a95c5a628f87b6e77c0ca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Editar Tipo de Asunto</h1>

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
        echo $this->env->getExtension('routing')->getPath("tipoasuntos_index");
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
        
        $__internal_c0fb3421f17ee0480fe7b7083977bb18be1db20e9a95c5a628f87b6e77c0ca7b->leave($__internal_c0fb3421f17ee0480fe7b7083977bb18be1db20e9a95c5a628f87b6e77c0ca7b_prof);

    }

    public function getTemplateName()
    {
        return "tipoasuntos/edit.html.twig";
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
/*     <h1>Editar Tipo de Asunto</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipoasuntos_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
