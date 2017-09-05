<?php

/* personas/edit.html.twig */
class __TwigTemplate_0a4e95bb87bb4a2554117df3df58cf354990337073b3d63888df4b58df888b0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "personas/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8bc8b68acb29fbb4d4efd86ddb76aaa9da3b16177613f04688d7690562e9276 = $this->env->getExtension("native_profiler");
        $__internal_d8bc8b68acb29fbb4d4efd86ddb76aaa9da3b16177613f04688d7690562e9276->enter($__internal_d8bc8b68acb29fbb4d4efd86ddb76aaa9da3b16177613f04688d7690562e9276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "personas/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8bc8b68acb29fbb4d4efd86ddb76aaa9da3b16177613f04688d7690562e9276->leave($__internal_d8bc8b68acb29fbb4d4efd86ddb76aaa9da3b16177613f04688d7690562e9276_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_897809676f783200938e9c1052dde8fcd65fd6687e3d502942892687f8698256 = $this->env->getExtension("native_profiler");
        $__internal_897809676f783200938e9c1052dde8fcd65fd6687e3d502942892687f8698256->enter($__internal_897809676f783200938e9c1052dde8fcd65fd6687e3d502942892687f8698256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Personas edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("personas_index");
        echo "\">Back to the list</a>
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
        
        $__internal_897809676f783200938e9c1052dde8fcd65fd6687e3d502942892687f8698256->leave($__internal_897809676f783200938e9c1052dde8fcd65fd6687e3d502942892687f8698256_prof);

    }

    public function getTemplateName()
    {
        return "personas/edit.html.twig";
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
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Personas edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('personas_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
