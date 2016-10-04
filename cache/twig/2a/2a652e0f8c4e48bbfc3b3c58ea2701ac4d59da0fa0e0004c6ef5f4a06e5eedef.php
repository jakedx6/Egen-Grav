<?php

/* modular/header.html.twig */
class __TwigTemplate_334888532ad6eed421e2b5ee195ce3f41ce85c8b04b4ff5f7980e070d592ebbf extends Twig_Template
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
        echo "<!--<header id=\"cover\" class=\"cover-container\">
    <div id=\"large-header\" class=\"intro-text\"> 
        ";
        // line 3
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 5
            echo "            <a class=\"page-scroll btn btn-xl\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
     <canvas id=\"canvas\"></canvas>
</header>-->
<header id=\"cover\" class=\"cover-container\">
  <div id=\"large-header\" class=\"inner cover intro-text\">
     ";
        // line 12
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 14
            echo "            <a class=\"page-scroll btn btn-xl\" href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </div>
   <canvas id=\"canvas\"></canvas>
</header>";
    }

    public function getTemplateName()
    {
        return "modular/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 16,  57 => 14,  53 => 13,  49 => 12,  42 => 7,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!--<header id="cover" class="cover-container">*/
/*     <div id="large-header" class="intro-text"> */
/*         {{ content }}*/
/*         {% for button in page.header.buttons %}*/
/*             <a class="page-scroll btn btn-xl" href="{{ button.url }}">{{ button.text }}</a>*/
/*         {% endfor %}*/
/*     </div>*/
/*      <canvas id="canvas"></canvas>*/
/* </header>-->*/
/* <header id="cover" class="cover-container">*/
/*   <div id="large-header" class="inner cover intro-text">*/
/*      {{ content }}*/
/*         {% for button in page.header.buttons %}*/
/*             <a class="page-scroll btn btn-xl" href="{{ button.url }}">{{ button.text }}</a>*/
/*         {% endfor %}*/
/*   </div>*/
/*    <canvas id="canvas"></canvas>*/
/* </header>*/
