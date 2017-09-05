<?php

/* demandantes/new.html.twig */
class __TwigTemplate_81dbfb6a0b0cd26027307258d937e2e64b46dd8fba73a3357164fe188cb67fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandantes/new.html.twig", 1);
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
        $__internal_4be692743fd18989e7c7fecc61b5272ba0725e744b1172fcf7dd5ea7bcb753bd = $this->env->getExtension("native_profiler");
        $__internal_4be692743fd18989e7c7fecc61b5272ba0725e744b1172fcf7dd5ea7bcb753bd->enter($__internal_4be692743fd18989e7c7fecc61b5272ba0725e744b1172fcf7dd5ea7bcb753bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandantes/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4be692743fd18989e7c7fecc61b5272ba0725e744b1172fcf7dd5ea7bcb753bd->leave($__internal_4be692743fd18989e7c7fecc61b5272ba0725e744b1172fcf7dd5ea7bcb753bd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04e5e69c7406fdf3bb2124ad69c4396ce6cdafa80db9933ba075e7276af282e7 = $this->env->getExtension("native_profiler");
        $__internal_04e5e69c7406fdf3bb2124ad69c4396ce6cdafa80db9933ba075e7276af282e7->enter($__internal_04e5e69c7406fdf3bb2124ad69c4396ce6cdafa80db9933ba075e7276af282e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js' type='text/javascript'/>
</script>

<div class=\"col-lg-4\">
    <h1>Creacion Demandante</h1>

    ";
        // line 10
        if (((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) != null)) {
            // line 11
            echo "        <h4> ";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo " </h4>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("demandantes_index");
        echo "\">Regresar a la lista</a>
        </li>
    </ul>
</div>


    <script type=\"text/javascript\">
    function cuiIsValid(cui) {
        var console = window.console;
        if (!cui) {
            console.log(\"CUI vacío\");
            return true;
        }

        var cuiRegExp = /^[0-9]{4}\\s?[0-9]{5}\\s?[0-9]{4}\$/;

        if (!cuiRegExp.test(cui)) {
            console.log(\"CUI con formato inválido\");
            return false;
        }

        cui = cui.replace(/\\s/, '');
        var depto = parseInt(cui.substring(9, 11), 10);
        var muni = parseInt(cui.substring(11, 13));
        var numero = cui.substring(0, 8);
        var verificador = parseInt(cui.substring(8, 9));

        // Se asume que la codificación de Municipios y
        // departamentos es la misma que esta publicada en
        // http://goo.gl/EsxN1a

        // Listado de municipios actualizado segun:
        // http://goo.gl/QLNglm

        // Este listado contiene la cantidad de municipios
        // existentes en cada departamento para poder
        // determinar el código máximo aceptado por cada
        // uno de los departamentos.
        var munisPorDepto = [
            /* 01 - Guatemala tiene:      */ 17 /* municipios. */,
            /* 02 - El Progreso tiene:    */  8 /* municipios. */,
            /* 03 - Sacatepéquez tiene:   */ 16 /* municipios. */,
            /* 04 - Chimaltenango tiene:  */ 16 /* municipios. */,
            /* 05 - Escuintla tiene:      */ 13 /* municipios. */,
            /* 06 - Santa Rosa tiene:     */ 14 /* municipios. */,
            /* 07 - Sololá tiene:         */ 19 /* municipios. */,
            /* 08 - Totonicapán tiene:    */  8 /* municipios. */,
            /* 09 - Quetzaltenango tiene: */ 24 /* municipios. */,
            /* 10 - Suchitepéquez tiene:  */ 21 /* municipios. */,
            /* 11 - Retalhuleu tiene:     */  9 /* municipios. */,
            /* 12 - San Marcos tiene:     */ 30 /* municipios. */,
            /* 13 - Huehuetenango tiene:  */ 32 /* municipios. */,
            /* 14 - Quiché tiene:         */ 21 /* municipios. */,
            /* 15 - Baja Verapaz tiene:   */  8 /* municipios. */,
            /* 16 - Alta Verapaz tiene:   */ 17 /* municipios. */,
            /* 17 - Petén tiene:          */ 14 /* municipios. */,
            /* 18 - Izabal tiene:         */  5 /* municipios. */,
            /* 19 - Zacapa tiene:         */ 11 /* municipios. */,
            /* 20 - Chiquimula tiene:     */ 11 /* municipios. */,
            /* 21 - Jalapa tiene:         */  7 /* municipios. */,
            /* 22 - Jutiapa tiene:        */ 17 /* municipios. */
        ];

        if (depto === 0 || muni === 0)
        {
            console.log(\"CUI con código de municipio o departamento inválido.\");
            return false;
        }

        if (depto > munisPorDepto.length)
        {
            console.log(\"CUI con código de departamento inválido.\");
            return false;
        }

        if (muni > munisPorDepto[depto -1])
        {
            console.log(\"CUI con código de municipio inválido.\");
            return false;
        }

        // Se verifica el correlativo con base
        // en el algoritmo del complemento 11.
        var total = 0;

        for (var i = 0; i < numero.length; i++)
        {
            total += numero[i] * (i + 2);
        }

        var modulo = (total % 11);

        console.log(\"CUI con módulo: \" + modulo);
        return modulo === verificador;
    }

    \$('#demandantes_dpiDemandante').bind('change paste keyup', function (e) {
        var \$this = \$(this);
        var \$parent = \$this.parent();
        var \$next = \$this.next();
        var cui = \$this.val();

        if (cui && cuiIsValid(cui)) {
            \$parent.addClass('has-success');
            \$next.addClass('glyphicon-ok');
            \$parent.removeClass('has-error');
            \$next.removeClass('glyphicon-remove');
        } else if (cui) {
            \$parent.addClass('has-error');
            \$next.addClass('glyphicon-remove');
            \$parent.removeClass('has-success');
            \$next.removeClass('glyphicon-ok');
        } else {
            \$parent.removeClass('has-error');
            \$next.removeClass('glyphicon-remove');
            \$parent.removeClass('has-success');
            \$next.removeClass('glyphicon-ok');
        }
    });
    </script>
";
        
        $__internal_04e5e69c7406fdf3bb2124ad69c4396ce6cdafa80db9933ba075e7276af282e7->leave($__internal_04e5e69c7406fdf3bb2124ad69c4396ce6cdafa80db9933ba075e7276af282e7_prof);

    }

    public function getTemplateName()
    {
        return "demandantes/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  72 => 18,  67 => 16,  63 => 15,  59 => 14,  56 => 13,  50 => 11,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js' type='text/javascript'/>*/
/* </script>*/
/* */
/* <div class="col-lg-4">*/
/*     <h1>Creacion Demandante</h1>*/
/* */
/*     {% if status != null %}*/
/*         <h4> {{ status }} </h4>*/
/*     {% endif %}*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('demandantes_index') }}">Regresar a la lista</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* */
/* */
/*     <script type="text/javascript">*/
/*     function cuiIsValid(cui) {*/
/*         var console = window.console;*/
/*         if (!cui) {*/
/*             console.log("CUI vacío");*/
/*             return true;*/
/*         }*/
/* */
/*         var cuiRegExp = /^[0-9]{4}\s?[0-9]{5}\s?[0-9]{4}$/;*/
/* */
/*         if (!cuiRegExp.test(cui)) {*/
/*             console.log("CUI con formato inválido");*/
/*             return false;*/
/*         }*/
/* */
/*         cui = cui.replace(/\s/, '');*/
/*         var depto = parseInt(cui.substring(9, 11), 10);*/
/*         var muni = parseInt(cui.substring(11, 13));*/
/*         var numero = cui.substring(0, 8);*/
/*         var verificador = parseInt(cui.substring(8, 9));*/
/* */
/*         // Se asume que la codificación de Municipios y*/
/*         // departamentos es la misma que esta publicada en*/
/*         // http://goo.gl/EsxN1a*/
/* */
/*         // Listado de municipios actualizado segun:*/
/*         // http://goo.gl/QLNglm*/
/* */
/*         // Este listado contiene la cantidad de municipios*/
/*         // existentes en cada departamento para poder*/
/*         // determinar el código máximo aceptado por cada*/
/*         // uno de los departamentos.*/
/*         var munisPorDepto = [*/
/*             /* 01 - Guatemala tiene:      *//*  17 /* municipios. *//* ,*/
/*             /* 02 - El Progreso tiene:    *//*   8 /* municipios. *//* ,*/
/*             /* 03 - Sacatepéquez tiene:   *//*  16 /* municipios. *//* ,*/
/*             /* 04 - Chimaltenango tiene:  *//*  16 /* municipios. *//* ,*/
/*             /* 05 - Escuintla tiene:      *//*  13 /* municipios. *//* ,*/
/*             /* 06 - Santa Rosa tiene:     *//*  14 /* municipios. *//* ,*/
/*             /* 07 - Sololá tiene:         *//*  19 /* municipios. *//* ,*/
/*             /* 08 - Totonicapán tiene:    *//*   8 /* municipios. *//* ,*/
/*             /* 09 - Quetzaltenango tiene: *//*  24 /* municipios. *//* ,*/
/*             /* 10 - Suchitepéquez tiene:  *//*  21 /* municipios. *//* ,*/
/*             /* 11 - Retalhuleu tiene:     *//*   9 /* municipios. *//* ,*/
/*             /* 12 - San Marcos tiene:     *//*  30 /* municipios. *//* ,*/
/*             /* 13 - Huehuetenango tiene:  *//*  32 /* municipios. *//* ,*/
/*             /* 14 - Quiché tiene:         *//*  21 /* municipios. *//* ,*/
/*             /* 15 - Baja Verapaz tiene:   *//*   8 /* municipios. *//* ,*/
/*             /* 16 - Alta Verapaz tiene:   *//*  17 /* municipios. *//* ,*/
/*             /* 17 - Petén tiene:          *//*  14 /* municipios. *//* ,*/
/*             /* 18 - Izabal tiene:         *//*   5 /* municipios. *//* ,*/
/*             /* 19 - Zacapa tiene:         *//*  11 /* municipios. *//* ,*/
/*             /* 20 - Chiquimula tiene:     *//*  11 /* municipios. *//* ,*/
/*             /* 21 - Jalapa tiene:         *//*   7 /* municipios. *//* ,*/
/*             /* 22 - Jutiapa tiene:        *//*  17 /* municipios. *//* */
/*         ];*/
/* */
/*         if (depto === 0 || muni === 0)*/
/*         {*/
/*             console.log("CUI con código de municipio o departamento inválido.");*/
/*             return false;*/
/*         }*/
/* */
/*         if (depto > munisPorDepto.length)*/
/*         {*/
/*             console.log("CUI con código de departamento inválido.");*/
/*             return false;*/
/*         }*/
/* */
/*         if (muni > munisPorDepto[depto -1])*/
/*         {*/
/*             console.log("CUI con código de municipio inválido.");*/
/*             return false;*/
/*         }*/
/* */
/*         // Se verifica el correlativo con base*/
/*         // en el algoritmo del complemento 11.*/
/*         var total = 0;*/
/* */
/*         for (var i = 0; i < numero.length; i++)*/
/*         {*/
/*             total += numero[i] * (i + 2);*/
/*         }*/
/* */
/*         var modulo = (total % 11);*/
/* */
/*         console.log("CUI con módulo: " + modulo);*/
/*         return modulo === verificador;*/
/*     }*/
/* */
/*     $('#demandantes_dpiDemandante').bind('change paste keyup', function (e) {*/
/*         var $this = $(this);*/
/*         var $parent = $this.parent();*/
/*         var $next = $this.next();*/
/*         var cui = $this.val();*/
/* */
/*         if (cui && cuiIsValid(cui)) {*/
/*             $parent.addClass('has-success');*/
/*             $next.addClass('glyphicon-ok');*/
/*             $parent.removeClass('has-error');*/
/*             $next.removeClass('glyphicon-remove');*/
/*         } else if (cui) {*/
/*             $parent.addClass('has-error');*/
/*             $next.addClass('glyphicon-remove');*/
/*             $parent.removeClass('has-success');*/
/*             $next.removeClass('glyphicon-ok');*/
/*         } else {*/
/*             $parent.removeClass('has-error');*/
/*             $next.removeClass('glyphicon-remove');*/
/*             $parent.removeClass('has-success');*/
/*             $next.removeClass('glyphicon-ok');*/
/*         }*/
/*     });*/
/*     </script>*/
/* {% endblock %}*/
/* */
