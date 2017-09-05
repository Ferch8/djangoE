<?php

/* tipocaso/new.html.twig */
class __TwigTemplate_d8899fcad64d1429cba9e5a187616f979e8e6ef3bc8528c6fdf74147ac5ab39f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "tipocaso/new.html.twig", 1);
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
        $__internal_d3f8eb60630ac1bea8a7f259c37e58e0b07d4af48c4dff647cc443d0c4f50fea = $this->env->getExtension("native_profiler");
        $__internal_d3f8eb60630ac1bea8a7f259c37e58e0b07d4af48c4dff647cc443d0c4f50fea->enter($__internal_d3f8eb60630ac1bea8a7f259c37e58e0b07d4af48c4dff647cc443d0c4f50fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tipocaso/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f8eb60630ac1bea8a7f259c37e58e0b07d4af48c4dff647cc443d0c4f50fea->leave($__internal_d3f8eb60630ac1bea8a7f259c37e58e0b07d4af48c4dff647cc443d0c4f50fea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97615b98ab0a4b807d031654ab1771a786ee3622fc23a73f7257881be104e1bc = $this->env->getExtension("native_profiler");
        $__internal_97615b98ab0a4b807d031654ab1771a786ee3622fc23a73f7257881be104e1bc->enter($__internal_97615b98ab0a4b807d031654ab1771a786ee3622fc23a73f7257881be104e1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Crear tipo de caso</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tipocaso_index");
        echo "\">Regresar a la lista</a>
        </li>
    </ul>
";
        
        $__internal_97615b98ab0a4b807d031654ab1771a786ee3622fc23a73f7257881be104e1bc->leave($__internal_97615b98ab0a4b807d031654ab1771a786ee3622fc23a73f7257881be104e1bc_prof);

    }

    public function getTemplateName()
    {
        return "tipocaso/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Crear tipo de caso</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipocaso_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
