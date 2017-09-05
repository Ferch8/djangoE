<?php

/* demandados/edit.html.twig */
class __TwigTemplate_b1208eca9a13216b807ca5984f02d76f77b6d92e89b701efde3b7b4aac0b202b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandados/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82bcfd53c692861eb16d0cbd31b6f4d8bd92080ad4c2c7ad4e5d0678dfa9c86f = $this->env->getExtension("native_profiler");
        $__internal_82bcfd53c692861eb16d0cbd31b6f4d8bd92080ad4c2c7ad4e5d0678dfa9c86f->enter($__internal_82bcfd53c692861eb16d0cbd31b6f4d8bd92080ad4c2c7ad4e5d0678dfa9c86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandados/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82bcfd53c692861eb16d0cbd31b6f4d8bd92080ad4c2c7ad4e5d0678dfa9c86f->leave($__internal_82bcfd53c692861eb16d0cbd31b6f4d8bd92080ad4c2c7ad4e5d0678dfa9c86f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4135b040423352fe95acb18be4a8ceca8214ea515815266589d3c6a7add11c8b = $this->env->getExtension("native_profiler");
        $__internal_4135b040423352fe95acb18be4a8ceca8214ea515815266589d3c6a7add11c8b->enter($__internal_4135b040423352fe95acb18be4a8ceca8214ea515815266589d3c6a7add11c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        <h1>Editar Bufete</h1>
      ";
        
        $__internal_4135b040423352fe95acb18be4a8ceca8214ea515815266589d3c6a7add11c8b->leave($__internal_4135b040423352fe95acb18be4a8ceca8214ea515815266589d3c6a7add11c8b_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a089cdeacade75014b4c02fab8f3fd9427c8dcc8e72770d7297ef3854d1dce5 = $this->env->getExtension("native_profiler");
        $__internal_8a089cdeacade75014b4c02fab8f3fd9427c8dcc8e72770d7297ef3854d1dce5->enter($__internal_8a089cdeacade75014b4c02fab8f3fd9427c8dcc8e72770d7297ef3854d1dce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"portlet-body form\">
      <div id=\"form_sample_1\" class=\"form-horizontal\" >
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
        <div class=\"form-body\">
          <div class=\"col-md-offset-2\">
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreDemandado", array()), 'label', array("label" => "Nombre"));
        echo "
              ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombreDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccionDemandado", array()), 'label', array("label" => "Dirección"));
        echo "
              ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "direccionDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dirnotificacionDemandado", array()), 'label', array("label" => "Dirección de notificación"));
        echo "
              ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dirnotificacionDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefonoDemandado", array()), 'label', array("label" => "Teléfono"));
        echo "
              ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telefonoDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadoDemandado", array()), 'label', array("label" => "Estado"));
        echo "
              ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "estadoDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
        </div>
        </div>
        <div class=\"form-actions\">
          <div class=\"row\">
            <div class=\"col-md-offset-3 col-md-9\">
              <input type=\"submit\" value=\"Edit\" class=\"btn blue\" />
              <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("demandados_index");
        echo "\"><button type=\"button\" name=\"cancelar\" class=\"btn default\">Cancelar</button></a>
            </div>
          </div>
        </div>
        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
      </div>
    </div>

";
        
        $__internal_8a089cdeacade75014b4c02fab8f3fd9427c8dcc8e72770d7297ef3854d1dce5->leave($__internal_8a089cdeacade75014b4c02fab8f3fd9427c8dcc8e72770d7297ef3854d1dce5_prof);

    }

    public function getTemplateName()
    {
        return "demandados/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  131 => 48,  119 => 39,  115 => 38,  107 => 33,  103 => 32,  95 => 27,  91 => 26,  83 => 21,  79 => 20,  71 => 15,  67 => 14,  59 => 9,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/*       {% block title %}*/
/*         <h1>Editar Bufete</h1>*/
/*       {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="portlet-body form">*/
/*       <div id="form_sample_1" class="form-horizontal" >*/
/*         {{ form_start(edit_form,{'attr':{'role':'form'}}) }}*/
/*         <div class="form-body">*/
/*           <div class="col-md-offset-2">*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(edit_form.nombreDemandado,'Nombre')}}*/
/*               {{ form_widget(edit_form.nombreDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(edit_form.direccionDemandado,'Dirección')}}*/
/*               {{ form_widget(edit_form.direccionDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(edit_form.dirnotificacionDemandado,'Dirección de notificación')}}*/
/*               {{ form_widget(edit_form.dirnotificacionDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(edit_form.telefonoDemandado,'Teléfono')}}*/
/*               {{ form_widget(edit_form.telefonoDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(edit_form.estadoDemandado,'Estado')}}*/
/*               {{ form_widget(edit_form.estadoDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="form-actions">*/
/*           <div class="row">*/
/*             <div class="col-md-offset-3 col-md-9">*/
/*               <input type="submit" value="Edit" class="btn blue" />*/
/*               <a href="{{ path('demandados_index') }}"><button type="button" name="cancelar" class="btn default">Cancelar</button></a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {{ form_end(edit_form) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
