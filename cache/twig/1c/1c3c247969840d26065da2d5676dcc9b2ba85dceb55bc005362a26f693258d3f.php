<?php

/* modular/services.html.twig */
class __TwigTemplate_3a452000e32b337d491440419a7497b5a69a2a10f4aec360ba677ca65dd7eef6 extends Twig_Template
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
        // line 1
        echo "<div class=\"sections-group\">
    
<section id=\"services\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
            ";
        // line 7
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        </div>
    </div>
    <div class=\"row text-center\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "services", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 12
            echo "            <div class=\"col-md-4\">
                ";
            // line 13
            if ($this->getAttribute($context["service"], "icon", array())) {
                // line 14
                echo "                    <span class=\"fa-stack fa-4x\">
                        <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                        <i class=\"fa fa-";
                // line 16
                echo $this->getAttribute($context["service"], "icon", array());
                echo " fa-stack-1x fa-inverse\"></i>
                    </span>
                ";
            }
            // line 19
            echo "                ";
            if ($this->getAttribute($context["service"], "header", array())) {
                // line 20
                echo "                    <h4 class=\"service-heading\">";
                echo $this->getAttribute($context["service"], "header", array());
                echo "</h4>
                ";
            }
            // line 22
            echo "                ";
            if ($this->getAttribute($context["service"], "text", array())) {
                // line 23
                echo "                    <p class=\"text-muted\">";
                echo $this->getAttribute($context["service"], "text", array());
                echo "</p>
                ";
            }
            // line 25
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 27,  71 => 25,  65 => 23,  62 => 22,  56 => 20,  53 => 19,  47 => 16,  43 => 14,  41 => 13,  38 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
/* <div class="sections-group">*/
/*     */
/* <section id="services">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-lg-12 text-center">*/
/*             {{ content }}*/
/*         </div>*/
/*     </div>*/
/*     <div class="row text-center">*/
/*         {% for service in page.header.services %}*/
/*             <div class="col-md-4">*/
/*                 {% if service.icon %}*/
/*                     <span class="fa-stack fa-4x">*/
/*                         <i class="fa fa-circle fa-stack-2x text-primary"></i>*/
/*                         <i class="fa fa-{{ service.icon }} fa-stack-1x fa-inverse"></i>*/
/*                     </span>*/
/*                 {% endif %}*/
/*                 {% if service.header %}*/
/*                     <h4 class="service-heading">{{ service.header }}</h4>*/
/*                 {% endif %}*/
/*                 {% if service.text %}*/
/*                     <p class="text-muted">{{ service.text }}</p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* </section>*/
/* */
