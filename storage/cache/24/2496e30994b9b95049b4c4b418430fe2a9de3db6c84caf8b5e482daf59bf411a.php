<?php

/* extension/module/pavmegamenu/pavmegamenu_form.twig */
class __TwigTemplate_a491a2d6605437d239a197586937b25e14cbdbe15d5ed5c2acc155592118afbd extends Twig_Template
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
        echo "<!--
/******************************************************
 * @package Pav Megamenu module for Opencart 3.x
 * @version 1.0
 * @author http://www.pavothemes.com
 * @copyright\tCopyright (C) Feb 2013 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license\t\tGNU General Public License version 2
*******************************************************/
-->
";
        // line 10
        if (array_key_exists("menu", $context)) {
            echo " ";
            $context["module_row"] = "ss";
            // line 11
            echo "
\t";
            // line 12
            if (($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "megamenu_id", array()) > 0)) {
                // line 13
                echo "\t\t<h3>";
                echo sprintf((isset($context["text_edit_menu"]) ? $context["text_edit_menu"] : null), $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "title", array()), $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "megamenu_id", array()));
                echo "</h3>
\t";
            } else {
                // line 15
                echo "\t\t<h3>";
                echo (isset($context["text_create_new"]) ? $context["text_create_new"] : null);
                echo "</h3>
\t";
            }
            // line 17
            echo "
\t<h4>";
            // line 18
            echo (isset($context["entry_menu_information"]) ? $context["entry_menu_information"] : null);
            echo "</h4>

\t<ul class=\"nav nav-tabs\" id=\"language-";
            // line 20
            echo (isset($context["module_row"]) ? $context["module_row"] : null);
            echo "\">
\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 22
                echo "\t\t<li>
\t\t\t<a href=\"#tab-language-";
                // line 23
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\" data-toggle=\"tab\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a></li>
\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t</ul>
\t
\t<div class=\"tab-content\">
\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 30
                echo "\t\t<div class=\"tab-pane\" id=\"tab-language-";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "\">
\t\t\t<table class=\"table no-border\">
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 33
                echo (isset($context["entry_menu_title"]) ? $context["entry_menu_title"] : null);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<input class=\"form-control\" name=\"megamenu_description[";
                // line 35
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][title]\" value=\"";
                echo (($this->getAttribute((isset($context["menu_description"]) ? $context["menu_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["menu_description"]) ? $context["menu_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "title", array())) : (""));
                echo "\"/>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 39
                echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
                echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<textarea class=\"form-control\" name=\"megamenu_description[";
                // line 41
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][description]\" value=\"\">";
                echo (($this->getAttribute((isset($context["menu_description"]) ? $context["menu_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["menu_description"]) ? $context["menu_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
                echo "</textarea>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "\t</div>

\t<h4>";
            // line 49
            echo (isset($context["entry_menu_type"]) ? $context["entry_menu_type"] : null);
            echo "</h4>
\t<input type=\"hidden\" name=\"megamenu[item]\" value=\"";
            // line 50
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "item", array());
            echo "\" />
\t<table class=\"table\">
\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 53
            echo (isset($context["entry_publish"]) ? $context["entry_publish"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[published]\" >
\t\t\t\t\t";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["yesno"]) ? $context["yesno"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 57
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "published", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t<tr class=\"bg-warning\">
\t\t\t<td class=\"col-sm-3\">";
            // line 63
            echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\"> 
\t\t\t\t<select class=\"form-control\" name=\"megamenu[type]\" id=\"megamenutype\">
\t\t\t\t\t";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["megamenutypes"]) ? $context["megamenutypes"] : null));
            foreach ($context['_seq'] as $context["mt"] => $context["val"]) {
                echo " 
\t\t\t\t\t<option value=\"";
                // line 67
                echo $context["mt"];
                echo "\" ";
                if (($context["mt"] == $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "type", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['mt'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-url\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 73
            echo (isset($context["entry_url"]) ? $context["entry_url"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[url]\" value=\"";
            // line 75
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "url", array());
            echo "\" size=\"50\"/>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-category\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 79
            echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"path\" value=\"";
            // line 81
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "megamenu_category", array());
            echo "\" size=\"100\" />
                <i>";
            // line 82
            echo (isset($context["text_explain_input_auto"]) ? $context["text_explain_input_auto"] : null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-product\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 86
            echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu_product\" value=\"";
            // line 88
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "megamenu_product", array());
            echo "\" size=\"50\"/>
\t\t\t\t<i>";
            // line 89
            echo (isset($context["text_explain_input_auto"]) ? $context["text_explain_input_auto"] : null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-manufacturer\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 93
            echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu_manufacturer\" value=\"";
            // line 95
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "megamenu_manufacturer", array());
            echo "\" size=\"50\"/>
\t\t\t\t<i>";
            // line 96
            echo (isset($context["text_explain_input_auto"]) ? $context["text_explain_input_auto"] : null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr id=\"megamenutype-information\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 100
            echo (isset($context["entry_information"]) ? $context["entry_information"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t
\t\t\t\t<select class=\"form-control\" type=\"text\" name=\"megamenu_information\" id=\"megamenu_information\">
\t\t\t\t\t";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 105
                echo "\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["info"], "information_id", array());
                echo "\" ";
                if (($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "megamenu_information", array()) == $this->getAttribute($context["info"], "information_id", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $this->getAttribute($context["info"], "title", array());
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 107
            echo "\t\t\t\t</select>
\t\t\t\t
\t\t\t</td>
\t\t</tr>

\t
\t\t<tr id=\"megamenutype-html\" class=\"megamenutype\">
\t\t\t<td class=\"col-sm-3\">";
            // line 114
            echo (isset($context["entry_html"]) ? $context["entry_html"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<textarea type=\"text\" name=\"megamenu[content_text]\" class=\"form-control \" id=\"content_text\" size=\"50\">";
            // line 116
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "content_text", array());
            echo "</textarea>
\t\t\t\t<i>";
            // line 117
            echo (isset($context["text_explain_input_html"]) ? $context["text_explain_input_html"] : null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t</table>

\t<h4>";
            // line 122
            echo (isset($context["entry_menu_param"]) ? $context["entry_menu_param"] : null);
            echo "</h4>\t  
\t<table class=\"table\">
\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 125
            echo (isset($context["entry_parent_id"]) ? $context["entry_parent_id"] : null);
            echo "</td>
\t\t\t\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t";
            // line 128
            echo (isset($context["menus"]) ? $context["menus"] : null);
            echo "
 \t\t\t</td>
\t\t</tr>
\t \t<tr>
\t\t\t<td class=\"col-sm-2 control-label\">";
            // line 132
            echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-10\">
\t\t\t\t<a href=\"\" id=\"thumb-img\" data-toggle=\"image\" class=\"img-thumbnail\">
\t\t\t\t\t<img src=\"";
            // line 135
            if (twig_test_empty((isset($context["thumb"]) ? $context["thumb"] : null))) {
                echo " ";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo " ";
            } else {
                echo " ";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo " ";
            }
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" />
\t\t\t\t</a>
\t\t\t\t<input type=\"hidden\" name=\"megamenu[image]\" value=\"";
            // line 137
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "image", array());
            echo "\" id=\"input-icon-menu\" />
\t\t\t</td>
        </tr>
\t \t<tr>
\t\t\t<td class=\"col-sm-2 control-label\">";
            // line 141
            echo (isset($context["entry_icon"]) ? $context["entry_icon"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-10\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"verticalmenu[icon]\" value=\"";
            // line 143
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array());
            echo "\"/>
\t\t\t\t<i>";
            // line 144
            echo (isset($context["text_explain_input_icon"]) ? $context["text_explain_input_icon"] : null);
            echo "</i>
\t\t\t</td>
        </tr>
\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 148
            echo (isset($context["entry_menuclass"]) ? $context["entry_menuclass"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[menu_class]\" value=\"";
            // line 150
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "menu_class", array());
            echo "\"/>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 155
            echo (isset($context["entry_badges"]) ? $context["entry_badges"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[badges]\" value=\"";
            // line 157
            echo (($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "badges", array())) ? ($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "badges", array())) : (""));
            echo "\"/>
\t\t\t</td>
\t\t</tr>

\t\t<tr>
\t\t\t<td class=\"col-sm-3\">";
            // line 162
            echo (isset($context["entry_showtitle"]) ? $context["entry_showtitle"] : null);
            echo "</td>
\t\t\t\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[show_title]\" >
\t\t\t\t\t";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["yesno"]) ? $context["yesno"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 167
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "show_title", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 169
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t<tr class=\"hide\">
\t\t\t<td class=\"col-sm-3\">";
            // line 173
            echo (isset($context["entry_isgroup"]) ? $context["entry_isgroup"] : null);
            echo "</td>
\t\t\t\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[is_group]\" value=\"\">
\t\t\t\t\t";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["yesno"]) ? $context["yesno"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 178
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "is_group", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "\t\t\t\t</select>
\t\t\t\t<i>";
            // line 181
            echo (isset($context["text_explain_group"]) ? $context["text_explain_group"] : null);
            echo "</i>
 \t\t\t</td>
\t\t</tr>
\t\t<tr style=\"display:none\">
\t\t\t<td class=\"col-sm-3\">";
            // line 185
            echo (isset($context["entry_iscontent"]) ? $context["entry_iscontent"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" type=\"list\" name=\"megamenu[is_content]\">
\t\t\t\t\t";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["yesno"]) ? $context["yesno"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 189
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($context["key"] == $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "is_content", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["val"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "\t\t\t\t</select>
 \t\t\t</td>
\t\t</tr>
\t\t
\t\t
\t\t
\t\t<tr class=\"alert alert-danger\">
\t\t\t<td class=\"col-sm-3\">";
            // line 198
            echo (isset($context["entry_sub_menutype"]) ? $context["entry_sub_menutype"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" name=\"megamenu[type_submenu]\" id=\"megamenu-type_submenu\">
\t\t\t\t\t";
            // line 201
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["submenutypes"]) ? $context["submenutypes"] : null));
            foreach ($context['_seq'] as $context["stype"] => $context["text"]) {
                // line 202
                echo "\t\t\t\t\t<option value=\"";
                echo $context["stype"];
                echo "\" ";
                if (($context["stype"] == $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "type_submenu", array()))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["text"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['stype'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "\t\t\t\t</select>
\t\t\t\t<i>";
            // line 205
            echo (isset($context["text_explain_submenu_type"]) ? $context["text_explain_submenu_type"] : null);
            echo "</i>
\t\t\t</td>
\t\t</tr>
\t\t<tr class=\"type_submenu\" id=\"type_submenu-html\" style=\"display:none;\">
\t\t\t<td class=\"col-sm-3\">";
            // line 209
            echo (isset($context["entry_submenu_content"]) ? $context["entry_submenu_content"] : null);
            echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<textarea name=\"megamenu[submenu_content]\" id=\"submenu_content\">";
            // line 211
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "submenu_content", array());
            echo "</textarea>
\t\t\t
\t\t\t</td>
\t\t<tr>
 \t\t";
            // line 215
            if ((isset($context["blockbuilders"]) ? $context["blockbuilders"] : null)) {
                // line 216
                echo "\t\t<tr id=\"type_submenu-blkbuilder\" class=\"type_submenu\" style=\"display: none\">
\t\t\t<td class=\"col-sm-3\">";
                // line 217
                echo (isset($context["entry_blockbuilder"]) ? $context["entry_blockbuilder"] : null);
                echo "</td>
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t
\t\t\t\t<select class=\"form-control\" name=\"megamenu[widget_id]\">
\t\t\t\t\t";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["blockbuilders"]) ? $context["blockbuilders"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["blockbuilder"]) {
                    // line 222
                    echo "\t\t\t\t\t<option value=\"";
                    echo $this->getAttribute($context["blockbuilder"], "module_id", array());
                    echo "\" ";
                    if (($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "widget_id", array()) == $this->getAttribute($context["blockbuilder"], "module_id", array()))) {
                        echo " selected=\"selected\" ";
                    }
                    echo ">";
                    echo $this->getAttribute($context["blockbuilder"], "name", array());
                    echo "</option>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockbuilder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "\t\t\t\t</select>
\t\t\t\t<a href=\"#\" class=\"edit-blockbuilder\" data-href=\"";
                // line 225
                echo (isset($context["blockbuilder_edit_url"]) ? $context["blockbuilder_edit_url"] : null);
                echo "\"><i class=\"fa fa-pencil\"></i></a>
\t\t\t</td>
\t\t</tr>
\t \t";
            }
            // line 229
            echo "\t \t<tr>
\t\t\t<td class=\"col-sm-3\">
\t\t\t\t";
            // line 231
            echo (isset($context["entry_submenu_width"]) ? $context["entry_submenu_width"] : null);
            echo "
\t\t\t</td>\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"megamenu[submenu_width]\" value=\"";
            // line 234
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "submenu_width", array());
            echo "\"/>
\t\t\t\t<i>";
            // line 235
            echo (isset($context["entry_submenu_width_explain"]) ? $context["entry_submenu_width_explain"] : null);
            echo "</i>
 \t\t\t</td>
\t\t</tr>

\t\t<tr>

\t\t\t<td class=\"col-sm-3\">
\t\t\t\t";
            // line 242
            echo (isset($context["entry_submenu_alignment"]) ? $context["entry_submenu_alignment"] : null);
            echo "
\t\t\t</td>\t
\t\t\t<td class=\"col-sm-9\">
\t\t\t\t<select class=\"form-control\" name=\"megamenu[width]\">
\t\t\t\t\t";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["width_aligns"]) ? $context["width_aligns"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["align"]) {
                // line 247
                echo "\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\" ";
                if (($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "width", array()) == $context["key"])) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo $context["align"];
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['align'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "\t\t\t\t</select>
\t\t\t\t<i>";
            // line 250
            echo (isset($context["entry_submenu_alignment_explain"]) ? $context["entry_submenu_alignment_explain"] : null);
            echo "</i>
 \t\t\t</td>
\t\t</tr>

\t</table>
\t<input type=\"hidden\" name=\"megamenu[megamenu_id]\" value=\"";
            // line 255
            echo $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "megamenu_id", array());
            echo "\"/>
</div>
";
        }
        // line 258
        echo "
<script type=\"text/javascript\"> 

\$('.edit-blockbuilder').click( function(){ 
\tvar id = \$(this).parent().find('select' ).val(); 
\tvar url = \$(this).data('href').replace('MODULE_ID', id );
   \twindow.open(url , '_blank');
\treturn false;
});\t
\$(\"#type_submenu-\"+\$(\"#megamenu-type_submenu\").val()).show();
\$(\"#megamenu-type_submenu\").change( function(){
\t\$(\".type_submenu\").hide();
\t\$(\"#type_submenu-\"+\$(this).val()).show();
} );


\$('#submenu_content').summernote({
\theight: 300
});

\$('#content_text').summernote({
\theight: 300
});


\$('#language-";
        // line 283
        echo (isset($context["module_row"]) ? $context["module_row"] : null);
        echo " li:first-child a').tab('show');


\$(\".megamenutype\").hide();
\$(\"#megamenutype-\"+ \$(\"#megamenutype\").val()).show();
\$(\"#megamenutype\").change( function(){
\t\$(\".megamenutype\").hide();
\t\$(\"#megamenutype-\"+\$(this).val()).show();
} );

   

\$('input[name=\\'megamenu_manufacturer\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 299
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\t'manufacturer_id':  0,
\t\t\t\t\t'name':  '";
        // line 304
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});
\t\t\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.manufacturer_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(event, ui) {
\t\t\$('input[name=\\'megamenu_manufacturer\\']').val(ui.item.label);
\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});

\$(\"#megamenu-blockbuilder\").change( function(){ 
\t\$('input[name=\\'megamenu[item]\\']').val(\$(this).val());
} );

\$(\"#megamenu_information\").change( function(){ 
\t\$('input[name=\\'megamenu[item]\\']').val(\$(this).val());
} );

\$('input[name=\\'megamenu_product\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 339
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\t'product_id':  0,
\t\t\t\t\t'name':  '";
        // line 344
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});
\t\t\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.product_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(event, ui) {
\t\t\$('input[name=\\'megamenu_product\\']').val(ui.item.label);
\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});

\$('input[name=\\'path\\']').autocomplete({
\tdelay: 500,
\tsource: function(request, response) {\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 371
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request.term),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\t'category_id':  0,
\t\t\t\t\t'name':  '";
        // line 376
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});
\t\t\t\t
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\tvalue: item.category_id
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(event, ui) {
\t\t\$('input[name=\\'path\\']').val(ui.item.label);
\t\t\$('input[name=\\'megamenu[item]\\']').val(ui.item.value);
\t\t
\t\treturn false;
\t},
\tfocus: function(event, ui) {
      \treturn false;
   \t}
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/pavmegamenu/pavmegamenu_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  809 => 376,  801 => 371,  771 => 344,  763 => 339,  725 => 304,  717 => 299,  698 => 283,  671 => 258,  665 => 255,  657 => 250,  654 => 249,  639 => 247,  635 => 246,  628 => 242,  618 => 235,  614 => 234,  608 => 231,  604 => 229,  597 => 225,  594 => 224,  579 => 222,  575 => 221,  568 => 217,  565 => 216,  563 => 215,  556 => 211,  551 => 209,  544 => 205,  541 => 204,  526 => 202,  522 => 201,  516 => 198,  507 => 191,  492 => 189,  488 => 188,  482 => 185,  475 => 181,  472 => 180,  457 => 178,  453 => 177,  446 => 173,  440 => 169,  425 => 167,  421 => 166,  414 => 162,  406 => 157,  401 => 155,  393 => 150,  388 => 148,  381 => 144,  377 => 143,  372 => 141,  365 => 137,  350 => 135,  344 => 132,  337 => 128,  331 => 125,  325 => 122,  317 => 117,  313 => 116,  308 => 114,  299 => 107,  284 => 105,  280 => 104,  273 => 100,  266 => 96,  262 => 95,  257 => 93,  250 => 89,  246 => 88,  241 => 86,  234 => 82,  230 => 81,  225 => 79,  218 => 75,  213 => 73,  207 => 69,  193 => 67,  187 => 66,  181 => 63,  175 => 59,  160 => 57,  156 => 56,  150 => 53,  144 => 50,  140 => 49,  136 => 47,  122 => 41,  117 => 39,  108 => 35,  103 => 33,  96 => 30,  92 => 29,  87 => 26,  70 => 23,  67 => 22,  63 => 21,  59 => 20,  54 => 18,  51 => 17,  45 => 15,  39 => 13,  37 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <!--*/
/* /*******************************************************/
/*  * @package Pav Megamenu module for Opencart 3.x*/
/*  * @version 1.0*/
/*  * @author http://www.pavothemes.com*/
/*  * @copyright	Copyright (C) Feb 2013 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.*/
/*  * @license		GNU General Public License version 2*/
/* *******************************************************//* */
/* -->*/
/* {% if menu is defined %} {% set module_row = 'ss' %}*/
/* */
/* 	{% if menu.megamenu_id > 0 %}*/
/* 		<h3>{{ text_edit_menu|format(menu.title, menu.megamenu_id) }}</h3>*/
/* 	{% else %}*/
/* 		<h3>{{ text_create_new }}</h3>*/
/* 	{% endif %}*/
/* */
/* 	<h4>{{ entry_menu_information }}</h4>*/
/* */
/* 	<ul class="nav nav-tabs" id="language-{{ module_row }}">*/
/* 		{% for language in languages %}*/
/* 		<li>*/
/* 			<a href="#tab-language-{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 		</li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	*/
/* 	<div class="tab-content">*/
/* 		{% for language in languages %}*/
/* 		<div class="tab-pane" id="tab-language-{{ language.language_id }}">*/
/* 			<table class="table no-border">*/
/* 				<tr>*/
/* 					<td>{{ entry_menu_title }}</td>*/
/* 					<td>*/
/* 						<input class="form-control" name="megamenu_description[{{ language.language_id }}][title]" value="{{ menu_description[language.language_id] ? menu_description[language.language_id].title }}"/>*/
/* 					</td>*/
/* 				</tr>*/
/* 				<tr>*/
/* 					<td>{{ entry_description }}</td>*/
/* 					<td>*/
/* 						<textarea class="form-control" name="megamenu_description[{{ language.language_id }}][description]" value="">{{ menu_description[language.language_id] ? menu_description[language.language_id].description }}</textarea>*/
/* 					</td>*/
/* 				</tr>*/
/* 			</table>*/
/* 		</div>*/
/* 		{% endfor %}*/
/* 	</div>*/
/* */
/* 	<h4>{{ entry_menu_type }}</h4>*/
/* 	<input type="hidden" name="megamenu[item]" value="{{ menu.item }}" />*/
/* 	<table class="table">*/
/* 		<tr>*/
/* 			<td class="col-sm-3">{{ entry_publish }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<select class="form-control" type="list" name="megamenu[published]" >*/
/* 					{% for key, val in yesno %}*/
/* 					<option value="{{ key }}" {% if key== menu.published %} selected="selected" {% endif %}>{{ val }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/*  			</td>*/
/* 		</tr>*/
/* 		<tr class="bg-warning">*/
/* 			<td class="col-sm-3">{{ entry_type }}</td>*/
/* 			<td class="col-sm-9"> */
/* 				<select class="form-control" name="megamenu[type]" id="megamenutype">*/
/* 					{% for mt, val in megamenutypes %} */
/* 					<option value="{{ mt }}" {% if mt == menu.type %} selected="selected" {% endif %}>{{ val }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/*  			</td>*/
/* 		</tr>*/
/* 		<tr id="megamenutype-url" class="megamenutype">*/
/* 			<td class="col-sm-3">{{ entry_url }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<input type="text" class="form-control" name="megamenu[url]" value="{{ menu.url }}" size="50"/>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr id="megamenutype-category" class="megamenutype">*/
/* 			<td class="col-sm-3">{{ entry_category }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<input type="text" class="form-control" name="path" value="{{ menu.megamenu_category }}" size="100" />*/
/*                 <i>{{ text_explain_input_auto }}</i>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr id="megamenutype-product" class="megamenutype">*/
/* 			<td class="col-sm-3">{{ entry_product }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<input type="text" class="form-control" name="megamenu_product" value="{{ menu.megamenu_product }}" size="50"/>*/
/* 				<i>{{ text_explain_input_auto }}</i>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr id="megamenutype-manufacturer" class="megamenutype">*/
/* 			<td class="col-sm-3">{{ entry_manufacturer }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<input type="text" class="form-control" name="megamenu_manufacturer" value="{{ menu.megamenu_manufacturer }}" size="50"/>*/
/* 				<i>{{ text_explain_input_auto }}</i>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr id="megamenutype-information" class="megamenutype">*/
/* 			<td class="col-sm-3">{{ entry_information }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				*/
/* 				<select class="form-control" type="text" name="megamenu_information" id="megamenu_information">*/
/* 					{% for info in informations %}*/
/* 					<option value="{{ info.information_id }}" {% if menu.megamenu_information == info.information_id %} selected="selected" {% endif %}>{{ info.title }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				*/
/* 			</td>*/
/* 		</tr>*/
/* */
/* 	*/
/* 		<tr id="megamenutype-html" class="megamenutype">*/
/* 			<td class="col-sm-3">{{ entry_html }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<textarea type="text" name="megamenu[content_text]" class="form-control " id="content_text" size="50">{{ menu.content_text }}</textarea>*/
/* 				<i>{{ text_explain_input_html }}</i>*/
/* 			</td>*/
/* 		</tr>*/
/* 	</table>*/
/* */
/* 	<h4>{{ entry_menu_param }}</h4>	  */
/* 	<table class="table">*/
/* 		<tr>*/
/* 			<td class="col-sm-3">{{ entry_parent_id }}</td>*/
/* 				*/
/* 			<td class="col-sm-9">*/
/* 				{{ menus }}*/
/*  			</td>*/
/* 		</tr>*/
/* 	 	<tr>*/
/* 			<td class="col-sm-2 control-label">{{ entry_image }}</td>*/
/* 			<td class="col-sm-10">*/
/* 				<a href="" id="thumb-img" data-toggle="image" class="img-thumbnail">*/
/* 					<img src="{% if thumb is empty %} {{ placeholder }} {% else %} {{ thumb }} {% endif %}" alt="" title="" data-placeholder="{{ placeholder }}" />*/
/* 				</a>*/
/* 				<input type="hidden" name="megamenu[image]" value="{{ menu.image }}" id="input-icon-menu" />*/
/* 			</td>*/
/*         </tr>*/
/* 	 	<tr>*/
/* 			<td class="col-sm-2 control-label">{{ entry_icon }}</td>*/
/* 			<td class="col-sm-10">*/
/* 				<input type="text" class="form-control" name="verticalmenu[icon]" value="{{ menu.icon }}"/>*/
/* 				<i>{{ text_explain_input_icon }}</i>*/
/* 			</td>*/
/*         </tr>*/
/* 		<tr>*/
/* 			<td class="col-sm-3">{{ entry_menuclass }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<input type="text" class="form-control" name="megamenu[menu_class]" value="{{ menu.menu_class }}"/>*/
/* 			</td>*/
/* 		</tr>*/
/* */
/* 		<tr>*/
/* 			<td class="col-sm-3">{{ entry_badges }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<input type="text" class="form-control" name="megamenu[badges]" value="{{ menu.badges ? menu.badges }}"/>*/
/* 			</td>*/
/* 		</tr>*/
/* */
/* 		<tr>*/
/* 			<td class="col-sm-3">{{ entry_showtitle }}</td>*/
/* 				*/
/* 			<td class="col-sm-9">*/
/* 				<select class="form-control" type="list" name="megamenu[show_title]" >*/
/* 					{% for key, val in yesno %}*/
/* 					<option value="{{ key }}" {% if key == menu.show_title %} selected="selected" {% endif %}>{{ val }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/*  			</td>*/
/* 		</tr>*/
/* 		<tr class="hide">*/
/* 			<td class="col-sm-3">{{ entry_isgroup }}</td>*/
/* 				*/
/* 			<td class="col-sm-9">*/
/* 				<select class="form-control" type="list" name="megamenu[is_group]" value="">*/
/* 					{% for key, val in yesno %}*/
/* 					<option value="{{ key }}" {% if key == menu.is_group %} selected="selected" {% endif %}>{{ val }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				<i>{{ text_explain_group }}</i>*/
/*  			</td>*/
/* 		</tr>*/
/* 		<tr style="display:none">*/
/* 			<td class="col-sm-3">{{ entry_iscontent }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<select class="form-control" type="list" name="megamenu[is_content]">*/
/* 					{% for key, val in yesno %}*/
/* 					<option value="{{ key }}" {% if key == menu.is_content %} selected="selected" {% endif %}>{{ val }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/*  			</td>*/
/* 		</tr>*/
/* 		*/
/* 		*/
/* 		*/
/* 		<tr class="alert alert-danger">*/
/* 			<td class="col-sm-3">{{ entry_sub_menutype }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<select class="form-control" name="megamenu[type_submenu]" id="megamenu-type_submenu">*/
/* 					{% for stype, text in submenutypes %}*/
/* 					<option value="{{ stype }}" {% if stype == menu.type_submenu %} selected="selected" {% endif %}>{{ text }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				<i>{{ text_explain_submenu_type }}</i>*/
/* 			</td>*/
/* 		</tr>*/
/* 		<tr class="type_submenu" id="type_submenu-html" style="display:none;">*/
/* 			<td class="col-sm-3">{{ entry_submenu_content }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				<textarea name="megamenu[submenu_content]" id="submenu_content">{{ menu.submenu_content }}</textarea>*/
/* 			*/
/* 			</td>*/
/* 		<tr>*/
/*  		{% if blockbuilders %}*/
/* 		<tr id="type_submenu-blkbuilder" class="type_submenu" style="display: none">*/
/* 			<td class="col-sm-3">{{ entry_blockbuilder }}</td>*/
/* 			<td class="col-sm-9">*/
/* 				*/
/* 				<select class="form-control" name="megamenu[widget_id]">*/
/* 					{% for blockbuilder in blockbuilders %}*/
/* 					<option value="{{ blockbuilder.module_id }}" {% if menu.widget_id == blockbuilder.module_id %} selected="selected" {% endif %}>{{ blockbuilder.name }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				<a href="#" class="edit-blockbuilder" data-href="{{blockbuilder_edit_url}}"><i class="fa fa-pencil"></i></a>*/
/* 			</td>*/
/* 		</tr>*/
/* 	 	{% endif %}*/
/* 	 	<tr>*/
/* 			<td class="col-sm-3">*/
/* 				{{ entry_submenu_width }}*/
/* 			</td>	*/
/* 			<td class="col-sm-9">*/
/* 				<input type="text" class="form-control" name="megamenu[submenu_width]" value="{{ menu.submenu_width }}"/>*/
/* 				<i>{{ entry_submenu_width_explain }}</i>*/
/*  			</td>*/
/* 		</tr>*/
/* */
/* 		<tr>*/
/* */
/* 			<td class="col-sm-3">*/
/* 				{{ entry_submenu_alignment }}*/
/* 			</td>	*/
/* 			<td class="col-sm-9">*/
/* 				<select class="form-control" name="megamenu[width]">*/
/* 					{% for key, align in width_aligns %}*/
/* 					<option value="{{ key }}" {% if menu.width == key %} selected="selected" {% endif %}>{{ align }}</option>*/
/* 					{% endfor %}*/
/* 				</select>*/
/* 				<i>{{ entry_submenu_alignment_explain }}</i>*/
/*  			</td>*/
/* 		</tr>*/
/* */
/* 	</table>*/
/* 	<input type="hidden" name="megamenu[megamenu_id]" value="{{ menu.megamenu_id }}"/>*/
/* </div>*/
/* {% endif %}*/
/* */
/* <script type="text/javascript"> */
/* */
/* $('.edit-blockbuilder').click( function(){ */
/* 	var id = $(this).parent().find('select' ).val(); */
/* 	var url = $(this).data('href').replace('MODULE_ID', id );*/
/*    	window.open(url , '_blank');*/
/* 	return false;*/
/* });	*/
/* $("#type_submenu-"+$("#megamenu-type_submenu").val()).show();*/
/* $("#megamenu-type_submenu").change( function(){*/
/* 	$(".type_submenu").hide();*/
/* 	$("#type_submenu-"+$(this).val()).show();*/
/* } );*/
/* */
/* */
/* $('#submenu_content').summernote({*/
/* 	height: 300*/
/* });*/
/* */
/* $('#content_text').summernote({*/
/* 	height: 300*/
/* });*/
/* */
/* */
/* $('#language-{{ module_row }} li:first-child a').tab('show');*/
/* */
/* */
/* $(".megamenutype").hide();*/
/* $("#megamenutype-"+ $("#megamenutype").val()).show();*/
/* $("#megamenutype").change( function(){*/
/* 	$(".megamenutype").hide();*/
/* 	$("#megamenutype-"+$(this).val()).show();*/
/* } );*/
/* */
/*    */
/* */
/* $('input[name=\'megamenu_manufacturer\']').autocomplete({*/
/* 	delay: 500,*/
/* 	source: function(request, response) {		*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request.term),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					'manufacturer_id':  0,*/
/* 					'name':  '{{ text_none }}'*/
/* 				});*/
/* 				*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item.name,*/
/* 						value: item.manufacturer_id*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	select: function(event, ui) {*/
/* 		$('input[name=\'megamenu_manufacturer\']').val(ui.item.label);*/
/* 		$('input[name=\'megamenu[item]\']').val(ui.item.value);*/
/* 		*/
/* 		return false;*/
/* 	},*/
/* 	focus: function(event, ui) {*/
/*       	return false;*/
/*    	}*/
/* });*/
/* */
/* $("#megamenu-blockbuilder").change( function(){ */
/* 	$('input[name=\'megamenu[item]\']').val($(this).val());*/
/* } );*/
/* */
/* $("#megamenu_information").change( function(){ */
/* 	$('input[name=\'megamenu[item]\']').val($(this).val());*/
/* } );*/
/* */
/* $('input[name=\'megamenu_product\']').autocomplete({*/
/* 	delay: 500,*/
/* 	source: function(request, response) {		*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request.term),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					'product_id':  0,*/
/* 					'name':  '{{ text_none }}'*/
/* 				});*/
/* 				*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item.name,*/
/* 						value: item.product_id*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	select: function(event, ui) {*/
/* 		$('input[name=\'megamenu_product\']').val(ui.item.label);*/
/* 		$('input[name=\'megamenu[item]\']').val(ui.item.value);*/
/* 		*/
/* 		return false;*/
/* 	},*/
/* 	focus: function(event, ui) {*/
/*       	return false;*/
/*    	}*/
/* });*/
/* */
/* $('input[name=\'path\']').autocomplete({*/
/* 	delay: 500,*/
/* 	source: function(request, response) {		*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request.term),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					'category_id':  0,*/
/* 					'name':  '{{ text_none }}'*/
/* 				});*/
/* 				*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item.name,*/
/* 						value: item.category_id*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	select: function(event, ui) {*/
/* 		$('input[name=\'path\']').val(ui.item.label);*/
/* 		$('input[name=\'megamenu[item]\']').val(ui.item.value);*/
/* 		*/
/* 		return false;*/
/* 	},*/
/* 	focus: function(event, ui) {*/
/*       	return false;*/
/*    	}*/
/* });*/
/* </script>*/
