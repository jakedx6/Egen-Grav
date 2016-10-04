<?php

/* partials/footer.html.twig */
class __TwigTemplate_f671d4b087920c3d9f5e0a6ec982a266d7977782cbb95aaede532f7a48f5b0cc extends Twig_Template
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
        echo "
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-4\">
                <span class=\"copyright\">Copyright &copy; ";
        // line 6
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo " 2014</span>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline social-buttons\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
            // line 11
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["network"], "url", array());
            echo "\"><i class=\"fa fa-";
            echo $this->getAttribute($context["network"], "title", array());
            echo "\"></i></a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </ul>
            </div>
            <div class=\"col-md-4\">
                <ul class=\"list-inline quicklinks\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "quicklinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 19
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["link"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["link"], "title", array());
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </ul>
            </div>
        </div>
    </div>
</footer>
</div> <!-- END OF SECTIONS -->";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  59 => 19,  55 => 18,  49 => 14,  37 => 11,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/* */
/* <footer>*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-4">*/
/*                 <span class="copyright">Copyright &copy; {{ site.title }} 2014</span>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <ul class="list-inline social-buttons">*/
/*                     {% for network in site.social %}*/
/*                         <li><a href="{{ network.url }}"><i class="fa fa-{{ network.title }}"></i></a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="col-md-4">*/
/*                 <ul class="list-inline quicklinks">*/
/*                     {% for link in site.quicklinks %}*/
/*                         <li><a href="{{ link.url }}">{{ link.title }}</a>*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* </div> <!-- END OF SECTIONS -->*/
