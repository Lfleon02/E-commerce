<?php

/* extension/module/d_ajax_search.twig */
class __TwigTemplate_72c5e491ded5717da0a59b4488cd0547d38aa5835a787ce065e71dfa39da7ec6 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "

<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">

            <div class=\"form-inline pull-right\">
             <button id=\"save_and_stay\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_save_and_stay"]) ? $context["button_save_and_stay"] : null);
        echo "\" class=\"btn btn-success\"><i class=\"fa fa-save\"></i></button>
             <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
             <a href=\"";
        // line 10
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
         </div>

         <h1>";
        // line 13
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " ";
        echo (isset($context["version"]) ? $context["version"] : null);
        echo "</h1>
         <ul class=\"breadcrumb\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>
    </div>
</div>

<div class=\"container-fluid\">
    ";
        // line 23
        if ( !(isset($context["pro"]) ? $context["pro"] : null)) {
            // line 24
            echo "        <div class=\"notify alert alert-info\">";
            echo (isset($context["text_pro"]) ? $context["text_pro"] : null);
            echo "</div>
    ";
        }
        // line 26
        echo "    ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 27
            echo "        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 31
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 32
            echo "        <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
    ";
        }
        // line 36
        echo "    ";
        if ((isset($context["d_shopunity"]) ? $context["d_shopunity"] : null)) {
            // line 37
            echo "        <div class=\"d_shopunity_update\"></div>
        <script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
        <script type=\"text/javascript\">
            var d_shopunity_update = jQuery.extend(true, {}, d_shopunity_widget);
            d_shopunity_update.init({
                class: '.d_shopunity_update',
                token: '";
            // line 43
            echo (isset($context["token"]) ? $context["token"] : null);
            echo "',
                extension_id: 'd_ajax_search',
                action: 'loadUpdate'
            })
        </script>
        ";
            // line 48
            if ((isset($context["pro"]) ? $context["pro"] : null)) {
                // line 49
                echo "            <script type=\"text/javascript\">
                var d_shopunity_update_pro = jQuery.extend(true, {}, d_shopunity_widget);
                d_shopunity_update_pro.init({
                class: '.d_shopunity_update',
                token: '";
                // line 53
                echo (isset($context["token"]) ? $context["token"] : null);
                echo "',
                extension_id: 'd_ajax_search_pro',
                action: 'loadUpdate'
                })
            </script>
        ";
            }
            // line 59
            echo "    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if ((( !(isset($context["pro"]) ? $context["pro"] : null) && (isset($context["setup"]) ? $context["setup"] : null)) && (isset($context["d_shopunity"]) ? $context["d_shopunity"] : null))) {
            // line 62
            echo "        <div class=\"row\">
            <div class=\"col-md-9\">
    ";
        }
        // line 65
        echo "
    <div class=\"panel panel-default panel-resizable\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 68
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
        </div>

        <div class=\"panel-body\">
            ";
        // line 72
        if ((isset($context["setup"]) ? $context["setup"] : null)) {
            // line 73
            echo "                <ul class=\"nav nav-tabs\">
                    <li  class=\"active\"><a href=\"#tab_setting\" data-toggle=\"tab\">
                    <span class=\"fa fa-cog\"></span>
                    ";
            // line 76
            echo (isset($context["text_settings"]) ? $context["text_settings"] : null);
            echo "
                    </a></li>
                     <li><a href=\"#tab_main\" data-toggle=\"tab\">
                        <span class=\"fa fa-wrench\"></span>
                        ";
            // line 80
            echo (isset($context["main_settings"]) ? $context["main_settings"] : null);
            echo "Custom Settings
                    </a></li>
                    <li><a href=\"#tab_design\" data-toggle=\"tab\">
                        <span class=\"fa fa-picture-o\"></span>
                        Design
                    </a></li>
                    ";
            // line 86
            if ((isset($context["pro"]) ? $context["pro"] : null)) {
                // line 87
                echo "                    <li><a href=\"#tab_analytics\" data-toggle=\"tab\">
                        <span class=\"fa fa-line-chart\"></span>
                        Analytics
                    </a></li>
                    <li><a href=\"#tab_history\" data-toggle=\"tab\">
                        <span class=\"fa fa-history\"></span>
                        History & Redirects
                    </a></li>
                    ";
            }
            // line 96
            echo "                    <li><a href=\"#tab_instruction\" data-toggle=\"tab\">
                        <span class=\"fa fa-graduation-cap\"></span>
                        ";
            // line 98
            echo (isset($context["text_instructions"]) ? $context["text_instructions"] : null);
            echo "
                    </a></li>
                </ul>
                <form id=\"form\" action=\"";
            // line 101
            echo (isset($context["action"]) ? $context["action"] : null);
            echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
                    <div class=\"tab-content\">
                        
                        <div class=\"tab-pane active\" id=\"tab_setting\">
                            <div class=\"tab-body\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-status\">
                                        ";
            // line 108
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "
                                    </label>
                                    <div class=\"col-sm-8\">
                                        <input type=\"hidden\" value=\"0\" name=\"";
            // line 111
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_status\"/>
                                        <input type=\"checkbox\" value=\"1\" name=\"";
            // line 112
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_status\" ";
            echo (((isset($context["d_ajax_search_status"]) ? $context["d_ajax_search_status"] : null)) ? ("checked=\"checked\"") : (""));
            echo " id=\"input-status\" />
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-class\"><span data-toggle=\"tooltip\" title=\"";
            // line 116
            echo (isset($context["help_class"]) ? $context["help_class"] : null);
            echo "\">";
            echo (isset($context["entry_class"]) ? $context["entry_class"] : null);
            echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"text\" name=\"";
            // line 118
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[class]\" value=\"";
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "class", array(), "array");
            echo "\"  class=\"form-control\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-max-symbols\"><span data-toggle=\"tooltip\" title=\"";
            // line 122
            echo (isset($context["help_max_symbols"]) ? $context["help_max_symbols"] : null);
            echo "\">";
            echo (isset($context["entry_max_symbols"]) ? $context["entry_max_symbols"] : null);
            echo "</span></label>
                                    <div class=\"col-sm-10\">
                                        <input name=\"";
            // line 124
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[max_symbols]\" value=\"";
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "max_symbols", array(), "array");
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                                ";
            // line 127
            if ((isset($context["pro"]) ? $context["pro"] : null)) {
                // line 128
                echo "                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-smart-search\"><span data-toggle=\"tooltip\" title=\"";
                // line 129
                echo (isset($context["tooltip_smart_search"]) ? $context["tooltip_smart_search"] : null);
                echo "\">Smart search</span></label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"hidden\" name=\"";
                // line 131
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[smart]\" value=\"0\" />
                                            <input type=\"checkbox\" name=\"";
                // line 132
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[smart]\" ";
                echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "smart", array(), "array")) ? ("checked=\"checked\"") : (""));
                echo " value=\"1\" class=\"switcher\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-max-sugg-and-auto\"><span data-toggle=\"tooltip\" title=\"";
                // line 136
                echo (isset($context["tooltip_suggestion"]) ? $context["tooltip_suggestion"] : null);
                echo "\">Suggestion</span></label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"hidden\" name=\"";
                // line 138
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[suggestion]\" value=\"0\" />
                                            <input type=\"checkbox\" name=\"";
                // line 139
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[suggestion]\" ";
                echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "suggestion", array(), "array")) ? ("checked=\"checked\"") : (""));
                echo " value=\"1\" class=\"switcher\"/>
                                        </div>
                                    </div>
                                    <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-max-sugg-and-auto\"><span data-toggle=\"tooltip\" title=\"";
                // line 143
                echo (isset($context["tooltip_autocomplete"]) ? $context["tooltip_autocomplete"] : null);
                echo "\">Autocomplete</span></label>
                                        <div class=\"col-sm-10\">
                                            <input type=\"hidden\" name=\"";
                // line 145
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[autocomplete]\" value=\"0\" />
                                            <input type=\"checkbox\" name=\"";
                // line 146
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[autocomplete]\" ";
                echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "autocomplete", array(), "array")) ? ("checked=\"checked\"") : (""));
                echo " value=\"1\" class=\"switcher\"/>
                                        </div>
                                    </div>
                                ";
            }
            // line 150
            echo "                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"tab_main\">
                            <div class=\"tab-body\">
                                <div class=\"form-group\">
                                    <div class=\"table-responsive col-sm-12\">
                                        <table class=\"table table-bordered table-hover control-elements\">
                                            <thead>
                                                <tr class=\"fields\">
                                                    <td class=\"field\">
                                                        <h4 class=\"m-b-none\"><span class=\"fa fa-sort-amount-asc\"></span> ";
            // line 161
            echo (isset($context["priority_search"]) ? $context["priority_search"] : null);
            echo " <span class=\"info-window-item\" data-href=\"https://dreamvention.ee/setup-live-ajax-search-blocks\"><i class=\"fa fa-question info-load\"></i></span></h4>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody class=\"control-elements\">
                                                <tr class=\"control-element\">
                                                    <td class=\"field\">
                                                        <div class=\"col-sm-12\">
                                                            <div id=\"extensions\">
                                                            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 171
                echo "                                                                <div class=\"sort-item ";
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "\" data-sort-order=\"";
                echo $this->getAttribute($context["extension"], "sort_order", array(), "array");
                echo "\">
                                                                    <span>
                                                                        <input type=\"hidden\" name=\"";
                // line 173
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[extension][";
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "][sort_order]\" class=\"sort-value\" value=\"";
                echo $this->getAttribute($context["extension"], "sort_order", array(), "array");
                echo "\" />
                                                                        <span class=\"drag-handle\"><i class=\"fa fa-bars\"></i></span>
                                                                    </span>
                                                                    <span class=\"extension\">
                                                                        <input type=\"hidden\" name=\"";
                // line 177
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[extension][";
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "][enabled]\" value=\"0\" />
                                                                        <input type=\"checkbox\" name=\"";
                // line 178
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[extension][";
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "][enabled]\" ";
                echo (($this->getAttribute($context["extension"], "enabled", array(), "array")) ? ("checked=\"checked\"") : (""));
                echo " value=\"1\" id=\"";
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_module_item_";
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "_enabled\" />
                                                                        <label onclick=\"check('";
                // line 179
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "')\" for=\"";
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "extension_";
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "_enabled\">Edit ";
                echo twig_replace_filter(twig_capitalize_string_filter($this->env, $this->getAttribute($context["extension"], "id", array(), "array")), array("_" => " "));
                echo " <i class=\"fa fa-caret-down\"></i></label>
                                                                        <div class=\"pull-right form-inline\">
                                                                        <label class=\"control-label lable_max_count\" for=\"";
                // line 181
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[max_symbols]\"><span data-toggle=\"tooltip\" title=\"Number of items in result of ";
                echo twig_replace_filter(twig_capitalize_string_filter($this->env, $this->getAttribute($context["extension"], "id", array(), "array")), array("_" => " "));
                echo "\">Count in results</span></label>
                                                                        <input name=\"";
                // line 182
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[extension][";
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "][max_count]\" value=\"";
                echo $this->getAttribute($context["extension"], "max_count", array(), "array");
                echo "\" class=\"form-control\">
                                                                        </div>
                                                                    </span>
                                                                    <div class=\"more-details form-group ";
                // line 185
                echo $this->getAttribute($context["extension"], "id", array(), "array");
                echo "_settings hidden_settings\">
                                                                        ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "query", array(), "array"));
                foreach ($context['_seq'] as $context["key"] => $context["extension_"]) {
                    // line 187
                    echo "                                                                        <div class=\"col-sm-4 marbot\">
                                                                            <input type=\"hidden\" name=\"";
                    // line 188
                    echo (isset($context["codename"]) ? $context["codename"] : null);
                    echo "_setting[extension][";
                    echo $this->getAttribute($context["extension"], "id", array(), "array");
                    echo "][query][";
                    echo $context["key"];
                    echo "]\" value=\"0\" />
                                                                            <input type=\"checkbox\" name=\"";
                    // line 189
                    echo (isset($context["codename"]) ? $context["codename"] : null);
                    echo "_setting[extension][";
                    echo $this->getAttribute($context["extension"], "id", array(), "array");
                    echo "][query][";
                    echo $context["key"];
                    echo "]\" ";
                    echo (($this->getAttribute($context["extension_"], "status", array(), "array")) ? ("checked=\"checked\"") : (""));
                    echo " value=\"1\" class=\"form-control\">
                                                                            <label class=\" control-label\" for=\"input-";
                    // line 190
                    echo $this->getAttribute($context["extension"], "id", array(), "array");
                    echo "-query-";
                    echo $context["key"];
                    echo "\"><span data-toggle=\"tooltip\" title=\"";
                    echo $this->getAttribute($context["extension_"], "tooltip", array(), "array");
                    echo "\">";
                    echo $context["key"];
                    echo "</span></label>
                                                                        </div>
                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['extension_'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 193
                echo "                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"tab_design\">
                            <div class=\"tab-body\">
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-price\">";
            // line 211
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"hidden\" name=\"";
            // line 213
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[price]\" value=\"0\" />
                                        <input type=\"checkbox\" name=\"";
            // line 214
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[price]\" ";
            echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "price", array(), "array")) ? ("checked=\"checked\"") : (""));
            echo " value=\"1\" class=\"switcher\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-where_search\">";
            // line 218
            echo (isset($context["where_was_found"]) ? $context["where_was_found"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"hidden\" name=\"";
            // line 220
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[where_search]\" value=\"0\" />
                                        <input type=\"checkbox\" name=\"";
            // line 221
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[where_search]\" ";
            echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "where_search", array(), "array")) ? ("checked=\"checked\"") : (""));
            echo " value=\"1\" class=\"switcher\"/>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-width\"><span data-toggle=\"tooltip\" title=\"";
            // line 225
            echo (isset($context["help_width"]) ? $context["help_width"] : null);
            echo "\">";
            echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input name=\"";
            // line 227
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[width]\" value=\"";
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "width", array(), "array");
            echo "\" class=\"form-control\">
                                            </div>
                                        </div>
                                <div class=\"form-group\">
                                            <label class=\"col-sm-2 control-label\" for=\"input-max-results\"><span data-toggle=\"tooltip\" title=\"";
            // line 231
            echo (isset($context["help_max_results"]) ? $context["help_max_results"] : null);
            echo "\">";
            echo (isset($context["entry_max_results"]) ? $context["entry_max_results"] : null);
            echo "</span></label>
                                            <div class=\"col-sm-10\">
                                                <input name=\"";
            // line 233
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[max_results]\" value=\"";
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "max_results", array(), "array");
            echo "\" class=\"form-control\">
                                            </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-block_result\">";
            // line 237
            echo (isset($context["display_results_in_block"]) ? $context["display_results_in_block"] : null);
            echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"hidden\" name=\"";
            // line 239
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[block_result]\" value=\"0\" />
                                        <input type=\"checkbox\" name=\"";
            // line 240
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[block_result]\" ";
            echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "block_result", array(), "array")) ? ("checked=\"checked\"") : (""));
            echo " value=\"1\" class=\"switcher\"/>
                                    </div>
                                </div>
                                 ";
            // line 243
            if ((isset($context["pro"]) ? $context["pro"] : null)) {
                // line 244
                echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-no_dublicate_images\">";
                // line 245
                echo (isset($context["display_unic_image"]) ? $context["display_unic_image"] : null);
                echo "</label>
                                    <div class=\"col-sm-10\">
                                        <input type=\"hidden\" name=\"";
                // line 247
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[no_dublicate_images]\" value=\"0\" />
                                        <input type=\"checkbox\" name=\"";
                // line 248
                echo (isset($context["codename"]) ? $context["codename"] : null);
                echo "_setting[no_dublicate_images]\" ";
                echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "no_dublicate_images", array(), "array")) ? ("checked=\"checked\"") : (""));
                echo " value=\"1\" class=\"switcher\"/>
                                    </div>
                                </div>
                                ";
            }
            // line 252
            echo "                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_text\">";
            // line 253
            echo (isset($context["result_image_size"]) ? $context["result_image_size"] : null);
            echo "</label>
                                    <div class=\"col-sm-5\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\">Width</span>
                                            <input name=\"";
            // line 257
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[image_width]\" value=\"";
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "image_width", array(), "array");
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <div class=\"col-sm-5\">
                                        <div class=\"input-group\">
                                            <span class=\"input-group-addon\">Height</span>
                                            <input name=\"";
            // line 263
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[image_height]\" value=\"";
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "image_height", array(), "array");
            echo "\" class=\"form-control\">
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input_text\">";
            // line 268
            echo (isset($context["show_more_results_link"]) ? $context["show_more_results_link"] : null);
            echo "</label>
                                    <div class=\"col-sm-5\">
                                        <div class=\"input-group\">
                                             <input type=\"hidden\" name=\"";
            // line 271
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[all_result_status]\" value=\"0\" />
                                            <input type=\"checkbox\" name=\"";
            // line 272
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[all_result_status]\" ";
            echo (($this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "all_result_status", array(), "array")) ? ("checked=\"checked\"") : (""));
            echo " value=\"1\" class=\"switcher\"/>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"col-sm-2 control-label\" for=\"input-max-symbols\"><span data-toggle=\"tooltip\" title=\"for more results\">Number of displayed results</span></label>
                                    <div class=\"col-sm-2\">
                                        <input name=\"";
            // line 279
            echo (isset($context["codename"]) ? $context["codename"] : null);
            echo "_setting[all_result_count]\" value=\"";
            echo $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "all_result_count", array(), "array");
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"tab_analytics\">
                            <div class=\"tab-body\">
                                <div class=\"first_chart\">
                                    <ul class=\"nav nav-pills\">
                                        <li class=\"active\" >
                                            <a id=\"first_load\" class='choose-hour' href=\"";
            // line 290
            echo (isset($context["hour"]) ? $context["hour"] : null);
            echo "\"><span>";
            echo (isset($context["text_24hour"]) ? $context["text_24hour"] : null);
            echo "</span></a>
                                        </li>
                                        <li class=\"\" >
                                            <a class='choose-hour' href=\"";
            // line 293
            echo (isset($context["week"]) ? $context["week"] : null);
            echo "\"><span>";
            echo (isset($context["text_week"]) ? $context["text_week"] : null);
            echo "</span></a>
                                        </li>
                                        <li class=\"\" >
                                            <a class='choose-hour' href=\"";
            // line 296
            echo (isset($context["mounth"]) ? $context["mounth"] : null);
            echo "\"><span>";
            echo (isset($context["text_month"]) ? $context["text_month"] : null);
            echo "</span></a>
                                        </li>
                                        <li class=\"\" >
                                            <a class='choose-hour' href=\"";
            // line 299
            echo (isset($context["year"]) ? $context["year"] : null);
            echo "\"><span>";
            echo (isset($context["text_year"]) ? $context["text_year"] : null);
            echo "</span></a>
                                        </li>
                                    </ul>
                                </div>

                                <div id=\"table_analytics\">

                                    <div id=\"chartContainer\" class=\"col-sm-6\">
                                        <canvas id=\"myChart\" width=\"200\" height=\"100\"></canvas>
                                    </div>
                                    <div id=\"chartContainer2\" class=\"second_chart col-sm-6\">
                                        <canvas id=\"myChart2\" width=\"200\" height=\"100\"></canvas>
                                    </div>
                                    <div class=\"row\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"tab_history\">
                            <div class=\"panel-body\">
                                <div class=\"well\">
                                    <form method=\"post\" enctype=\"multipart/form-data\" id=\"form\" class=\"form-horizontal\">
                                    <div class=\"row\">
                                        <div class=\"form-group\">
                                        <label class=\"col-sm-2 control-label\" for=\"input-max-results\">";
            // line 324
            echo (isset($context["filter_keyword"]) ? $context["filter_keyword"] : null);
            echo "</label>
                                        <div class=\"col-sm-6\">
                                            <input type=\"text\" name=\"filter_name\" value=\"\" placeholder=\"keyword\" id=\"input-name\" class=\"form-control\" />
                                        </div>
                                        <div class=\"col-sm-4\">
                                            <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary \"><i class=\"fa fa-filter\"></i>Filter</button>
                                            <div class=\"filter_inst info-window-item\" data-href=\"https://dreamvention.ee/live-ajax-search-history-smart-search\"><i class=\"fa fa-question info-load\"></i></div>
                                        </div>
                                    </div>
                                    </div>
                                    </form>
                                </div>
                                <div id=\"table_history\">
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-bordered table-hover\">
                                            <thead>
                                                <tr>
                                                    <td>Keyword</td>
                                                    <td>Suggestions</td>
                                                    <td>Selection</td>
                                                    <td>Views</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
            // line 348
            if ((isset($context["histories"]) ? $context["histories"] : null)) {
                // line 349
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["histories"]) ? $context["histories"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["history"]) {
                    // line 350
                    echo "                                                    <tr>
                                                        <td class=\"text-center hidden\">
                                                            <input type=\"text\" name=\"settings[history][query_results_id]\" value=\"";
                    // line 352
                    echo $this->getAttribute($context["history"], "query_id", array(), "array");
                    echo "\" class=\"form-control\">
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <div type=\"text\" name=\"settings[history][text]\" value=\"";
                    // line 355
                    echo $this->getAttribute($context["history"], "keyword", array(), "array");
                    echo "\">";
                    echo $this->getAttribute($context["history"], "keyword", array(), "array");
                    echo "</div>
                                                        </td>
                                                        <td class=\"redirect-cell text-left\">
                                                            <div id=\"redirect_";
                    // line 358
                    echo $this->getAttribute($context["history"], "query_id", array(), "array");
                    echo "\"  class=\"redirect-field\" redirect_query_id=\"";
                    echo $this->getAttribute($context["history"], "query_id", array(), "array");
                    echo "\">
                                                                <span class=\"text-field\">";
                    // line 359
                    echo $this->getAttribute($context["history"], "redirect", array(), "array");
                    echo "</span>
                                                                <input type=\"text\" value=\"";
                    // line 360
                    echo $this->getAttribute($context["history"], "redirect", array(), "array");
                    echo "\" class=\"input-field form-control hide\" />
                                                            </div>
                                                        </td>
                                                        <td class=\"text-left\">
                                                            <a href=\"";
                    // line 364
                    echo $this->getAttribute($context["history"], "href", array(), "array");
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["history"], "image", array(), "array");
                    echo "\" alt=\"\">";
                    echo $this->getAttribute($context["history"], "name", array(), "array");
                    echo "</a>
                                                        </td>
                                                        <td class=\"text-center\">
                                                            <div type=\"text\" name=\"settings[history][hits]\" value=\"";
                    // line 367
                    echo $this->getAttribute($context["history"], "count", array(), "array");
                    echo "\" >";
                    echo $this->getAttribute($context["history"], "count", array(), "array");
                    echo "</div>
                                                        </td>
                                                    </tr>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 371
                echo "                                                ";
            } else {
                // line 372
                echo "                                                <tr><td class=\"text-center\" colspan=\"8\">No results!</td></tr>
                                                ";
            }
            // line 374
            echo "                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=\"row m-t-lg m-b-lg\">
                                        <div class=\"col-sm-6 text-left\">";
            // line 379
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
                                        <div class=\"col-sm-6 text-right\">";
            // line 380
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"tab_instruction\">
                            <div class=\"tab-body\">";
            // line 388
            echo (isset($context["text_instructions_full"]) ? $context["text_instructions_full"] : null);
            echo "</div>
                        </div>
                    </div>
                </form>
            ";
        } else {
            // line 393
            echo "                ";
            echo (isset($context["text_setup"]) ? $context["text_setup"] : null);
            echo "
            ";
        }
        // line 395
        echo "        </div>
    </div>

    ";
        // line 398
        if ((( !(isset($context["pro"]) ? $context["pro"] : null) && (isset($context["setup"]) ? $context["setup"] : null)) && (isset($context["d_shopunity"]) ? $context["d_shopunity"] : null))) {
            // line 399
            echo "            </div>

            <div class=\"col-md-3\">
                <div class=\"d_shopunity_widget\"></div>
                <script src=\"view/javascript/d_shopunity/d_shopunity_widget.js\" type=\"text/javascript\"></script>
                <script type=\"text/javascript\">
                var d_shopunity_widget = jQuery.extend(true, {}, d_shopunity_widget);
                d_shopunity_widget.init({
                class: '.d_shopunity_widget',
                token: '";
            // line 408
            echo (isset($context["token"]) ? $context["token"] : null);
            echo "',
                extension_id: 'd_ajax_search_pro'
                })
                </script>
            </div>
        </div>
    ";
        }
        // line 415
        echo "
    <div class=\"info-window\">
        <div class=\"info-window-wrap\">
            <div class=\"info-window-block\">
                <div class=\"info-window-close\"><i class=\"fa fa-close\"></i></div>
                <div class=\"info-window-description\"></div>
            </div>
        </div>
    </div>
</div>
";
        // line 425
        if ( !(isset($context["setup"]) ? $context["setup"] : null)) {
            // line 426
            echo "<script type=\"text/javascript\">
    \$(document).on('click', '.setup', function(){
        window.location.href = '";
            // line 428
            echo (isset($context["setup_link"]) ? $context["setup_link"] : null);
            echo "';
    });
</script>
";
        } else {
            // line 432
            echo "<script type=\"text/javascript\">
//General
function showAlert(json) {
    return;
    \$('.alert, .text-danger').remove();
    \$('.form-group').removeClass('has-error');

    if (json['error']) {
        if (json['error']['warning']) {
            \$('#content > .container-fluid').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
        }

        for (i in json['error']) {
            var element = \$('#input_' + i);

            if (element.parent().hasClass('input-group')) {
                \$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
            } else {
                \$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
            }
        }

        \$('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');
    }

    if (json['success']) {
        \$('#content > .container-fluid').prepend('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
    }
};

\$(\"[type='checkbox']\").bootstrapSwitch({
    'onColor': 'success',
    'onText': '";
            // line 464
            echo (isset($context["text_on"]) ? $context["text_on"] : null);
            echo "',
    'offText': '";
            // line 465
            echo (isset($context["text_off"]) ? $context["text_off"] : null);
            echo "',
});

\$('body').on('click', '#save_and_stay', function(){
    \$.ajax( {
        type: 'post',
        url: \$('#form').attr('action'),
        data: \$('#form').serialize(),
        dataType: 'json',
        beforeSend: function() {
            \$('#content').fadeTo('slow', 0.5);
        },
        complete: function() {
            \$('#content').fadeTo('slow', 1);
        },
        success: function(json) {
            showAlert(json);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

//info window 
var info_window = {
    'item' : new Array(),
    'current_url' : ''
}

\$.each(\$('.info-window-item'), function(key, value) {
    var url = \$(this).attr('data-href');

    if (url) {
        \$.getJSON(url + '?format=json&callback=?', function(data) {
            info_window.item[url] = data['description'];
        });
    }
});

\$('.info-window-item').on('click', function() {
    var url = \$(this).attr('data-href');

    if (url == info_window.current_url) {
        info_window.current_url = '';
        \$('.info-window').removeClass('resized');
        \$('.panel-resizable').removeClass('resized');
    } else {
        info_window.current_url = url;
        \$('.info-window .info-window-description').html(info_window.item[url]);
        \$('.panel-resizable').addClass('resized');
        \$('.info-window').addClass('resized');
    }
});

\$('.info-window .info-window-close').on('click', function() {
    info_window.current_url = '';
    \$('.info-window').removeClass('resized');
    \$('.panel-resizable').removeClass('resized');
});

//extensions
\$('#extensions > .sort-item').tsort({attr:'data-sort-order'});

Sortable.create(extensions, {
    group: \"sorting\",
    sort: true,
    animation: 150,
    handle: \".drag-handle\",
    onUpdate: function (event){
        \$('#extensions').find('.sort-item').each(function (i, row) {
            \$(row).find('.sort-value').val(i)
        })
    }
});

//instructions 
\$(function(){
    var url_inst = 'https://dreamvention.ee/instructions-quick-search';

    \$.getJSON(url_inst + '?format=json&callback=?', function(data) {
        \$('.instruction').html(data['description']);
    });
})

//Analytics
\$(document).on('click', '.choose-hour', function(ev) {
    \$('#tab_analytics li').removeClass('active')
    \$(ev.currentTarget).parent().addClass('active')
    var url=\$(ev.currentTarget).attr('href');


     \$.ajax( {
        type: 'post',
        url: url,
        data: \$('#form').serialize(),
        dataType: 'json',
        beforeSend: function() {
            // \$('#content').fadeTo('slow', 0.5);
        },
        complete: function() {
            // \$('#content').fadeTo('slow', 1);
        },
        success: function(json) {

       drawAnalyticsTab(json);

        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });

    return false;
});

\$('#first_load').click();

//History
\$('#button-filter').on('click', function() {
    var url = 'index.php?route=extension/module/d_ajax_search&";
            // line 585
            echo (isset($context["url_token"]) ? $context["url_token"] : null);
            echo "';

    var filter_name = \$('input[name=\\'filter_name\\']').val();

    if (filter_name) {
        url += '&filter_name=' + encodeURIComponent(filter_name);
    }

    location = url;
});

\$(document).on('click', '.pagination li a', function(ev) {
    \$('#table_history').load(ev.currentTarget.href+' #table_history > div')
    // \$(ev.currentTarget.href).
    return false;
});

\$('body').on('click', '.redirect-cell', function() {
    var redirect = \$(this).children('.redirect-field');

    if (\$(redirect).children('.input-field').hasClass('hide') && (\$(redirect).children('.input-field').attr('type') != 'hidden')) {
        \$('.popover').popover('hide', function() {
            \$('.popover').remove();
        });

        \$('.text-field').removeClass('hide');
        \$('.input-field').addClass('hide');

        \$(redirect).popover({
            html: true,
            placement: 'top',
            trigger: 'manual',
            content: function() {
                return '<button type=\"button\" id=\"button_save\" class=\"btn btn-primary\" redirect_field_id=\"' + redirect.attr('id') + '\"><i class=\"fa fa-save\"></i></button> <button type=\"button\" id=\"button_cancel\" class=\"btn btn-danger\" redirect_field_id=\"' + redirect.attr('id') + '\"><i class=\"fa fa-remove\"></i></button>';
            }
        });

        \$(redirect).popover('show');

        \$(redirect).children('.text-field').addClass('hide');
        \$(redirect).children('.input-field').removeClass('hide');
    }
});

\$('body').on('click', '#button_save', function() {
    var redirect = \$('#' + \$(this).attr('redirect_field_id'));
    var query_redirect_id = \$(redirect).attr('redirect_query_id');
    var value = \$(redirect).children('.input-field').val();
    \$.ajax({
        url: '";
            // line 634
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "',
        type: 'post',
        data: 'query_id=' + query_redirect_id + '&value=' + (value),
        dataType: 'json',
        success: function(json) {
            showAlert(json);

            \$(redirect).popover('hide', function() {
                \$('.popover').remove();
            });

            setTimeout(function() {
                if (json['error'] != 'error') {
                    \$(redirect).children('.input-field').val(json['value']);
                    \$(redirect).children('.text-field').text(json['value']);
                } else {
                    \$(redirect).children('.input-field').val(\$(redirect).children('.text-field').text());
                }

                \$(redirect).children('.text-field').removeClass('hide');
                \$(redirect).children('.input-field').addClass('hide');
            }, 200);
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('body').on('click', '#button_cancel', function() {
    var redirect = \$('#' + \$(this).attr('redirect_field_id'));

    \$(redirect).popover('hide', function() {
        \$('.popover').remove();
    });

    setTimeout(function() {
        \$(redirect).children('.input-field').val(\$(redirect).children('.text-field').text());
        \$(redirect).children('.text-field').removeClass('hide');
        \$(redirect).children('.input-field').addClass('hide');
    }, 200);
});

function drawAnalyticsTab(json){
     document.getElementById(\"chartContainer\").innerHTML='<canvas id=\"myChart\" width=\"200\" height=\"100\"></canvas>';
        document.getElementById(\"chartContainer2\").innerHTML='<canvas id=\"myChart2\" width=\"200\" height=\"100\"></canvas>';
        \$('.right-table').remove();
        \$('.left-table').remove();
        if(json.statistic.table_statistic.length > 0){
            var i,k;
                    html='<div class=\"col-sm-6 right-table\">'
                        html +='<div id=\"table_viewed\">'
                            html +='<div class=\"table-responsive\">'
                                html +='<table class=\"table table-bordered table-hover\">'
                                    html +='<thead>'
                                        html +='<tr>'
                                         html +='<td>#</td>'
                                            html +='<td>results</td>'
                                            html += '<td>type</td>'
                                            html +='<td>Views</td>'
                                        html +='</tr>'
                                    html +='</thead>'
                                    html +='<tbody>'
                                       for(i=0; i < json.statistic.table_statistic.length; i++){
                                           html +='<tr>'
                                           html +='<td>'+ (i+1) +'</td>'
                                           html +='<td><a href=\"'+json.statistic.table_statistic[i].href +'\">'+ json.statistic.table_statistic[i].select +'</a></td>'
                                           html +='<td>'+ json.statistic.table_statistic[i].type +'</td>'
                                           html +='<td>'+ json.statistic.table_statistic[i].count +'</td>'
                                           html +='</tr>'
                                       }
                                    html +='</tbody>'
                                html +='</table>'
                            html +='</div>'
                        html +='</div>'
                    html +='</div>'
                    html +='<div class=\"col-sm-6 left-table\">'
                        html +='<div id=\"table_viewed\">'
                            html +='<div class=\"table-responsive\">'
                                html +='<table class=\"table table-bordered table-hover\">'
                                    html +='<thead>'
                                        html +='<tr>'
                                            html +='<td>keyword</td>'
                                            html +='<td>searches</td>'
                                        html +='</tr>'
                                    html +='</thead>'
                                    html +='<tbody>'
                                       for(k=0; k < json.top_searches.table_searches.length; k++){
                                           html +='<tr>'
                                           html +='<td>'+ json.top_searches.table_searches[k].text +'</td>'
                                           html +='<td>'+ json.top_searches.table_searches[k].count +'</td>'
                                           html +='</tr>'
                                       }
                                    html +='</tbody>'
                                html +='</table>'
                            html +='</div>'
                        html +='</div>'
                    html +='</div>'
        \$('#table_analytics > div.row').after(html);
        }
            var ctx1 = document.getElementById(\"myChart\").getContext('2d');
            var myChart1 = new Chart(ctx1, {
            type: 'bar',
            data: json.statistic,
            options: {
                title: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                            }
                        }]
                    }
                }
            });

            var ctx2 = document.getElementById(\"myChart2\").getContext('2d');
            var myChart2 = new Chart(ctx2, {
            type: 'bar',
            data: json.top_searches,
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
}

</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js\"></script>
<script>
function check(data){
    var classList = \$('.'+data+'_settings').attr('class').split(/\\s+/);
    \$.each(classList, function(index, item) {
        if (item === 'hidden_settings' || item === 'hidden') {
            \$('.'+data+'_settings').slideDown(500).removeClass('hidden_settings');
            \$(\"label[for='d_ajax_searchextension_\"+data+\"_enabled'] > i\").removeClass('fa-caret-down');
            \$(\"label[for='d_ajax_searchextension_\"+data+\"_enabled'] > i\").addClass('fa-caret-up');
        }else{
            \$('.'+data+'_settings').slideUp(500).addClass('hidden_settings');
            \$(\"label[for='d_ajax_searchextension_\"+data+\"_enabled'] > i\").removeClass('fa-caret-up');
            \$(\"label[for='d_ajax_searchextension_\"+data+\"_enabled'] > i\").addClass('fa-caret-down');
        }
    });

}
</script>
";
        }
        // line 788
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/d_ajax_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1281 => 788,  1124 => 634,  1072 => 585,  949 => 465,  945 => 464,  911 => 432,  904 => 428,  900 => 426,  898 => 425,  886 => 415,  876 => 408,  865 => 399,  863 => 398,  858 => 395,  852 => 393,  844 => 388,  833 => 380,  829 => 379,  822 => 374,  818 => 372,  815 => 371,  803 => 367,  793 => 364,  786 => 360,  782 => 359,  776 => 358,  768 => 355,  762 => 352,  758 => 350,  753 => 349,  751 => 348,  724 => 324,  694 => 299,  686 => 296,  678 => 293,  670 => 290,  654 => 279,  642 => 272,  638 => 271,  632 => 268,  622 => 263,  611 => 257,  604 => 253,  601 => 252,  592 => 248,  588 => 247,  583 => 245,  580 => 244,  578 => 243,  570 => 240,  566 => 239,  561 => 237,  552 => 233,  545 => 231,  536 => 227,  529 => 225,  520 => 221,  516 => 220,  511 => 218,  502 => 214,  498 => 213,  493 => 211,  477 => 197,  468 => 193,  453 => 190,  443 => 189,  435 => 188,  432 => 187,  428 => 186,  424 => 185,  414 => 182,  408 => 181,  397 => 179,  385 => 178,  379 => 177,  368 => 173,  360 => 171,  356 => 170,  344 => 161,  331 => 150,  322 => 146,  318 => 145,  313 => 143,  304 => 139,  300 => 138,  295 => 136,  286 => 132,  282 => 131,  277 => 129,  274 => 128,  272 => 127,  264 => 124,  257 => 122,  248 => 118,  241 => 116,  232 => 112,  228 => 111,  222 => 108,  212 => 101,  206 => 98,  202 => 96,  191 => 87,  189 => 86,  180 => 80,  173 => 76,  168 => 73,  166 => 72,  159 => 68,  154 => 65,  149 => 62,  147 => 61,  144 => 60,  141 => 59,  132 => 53,  126 => 49,  124 => 48,  116 => 43,  108 => 37,  105 => 36,  97 => 32,  94 => 31,  86 => 27,  83 => 26,  77 => 24,  75 => 23,  68 => 18,  57 => 16,  53 => 15,  46 => 13,  38 => 10,  34 => 9,  30 => 8,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* */
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/* */
/*             <div class="form-inline pull-right">*/
/*              <button id="save_and_stay" data-toggle="tooltip" title="{{ button_save_and_stay }}" class="btn btn-success"><i class="fa fa-save"></i></button>*/
/*              <button type="submit" form="form" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*              <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/*          </div>*/
/* */
/*          <h1>{{ heading_title }} {{ version }}</h1>*/
/*          <ul class="breadcrumb">*/
/*             {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="container-fluid">*/
/*     {% if not pro %}*/
/*         <div class="notify alert alert-info">{{text_pro}}</div>*/
/*     {% endif %}*/
/*     {% if (error_warning) %}*/
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*         <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ success }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*     {% endif %}*/
/*     {% if d_shopunity %}*/
/*         <div class="d_shopunity_update"></div>*/
/*         <script src="view/javascript/d_shopunity/d_shopunity_widget.js" type="text/javascript"></script>*/
/*         <script type="text/javascript">*/
/*             var d_shopunity_update = jQuery.extend(true, {}, d_shopunity_widget);*/
/*             d_shopunity_update.init({*/
/*                 class: '.d_shopunity_update',*/
/*                 token: '{{token}}',*/
/*                 extension_id: 'd_ajax_search',*/
/*                 action: 'loadUpdate'*/
/*             })*/
/*         </script>*/
/*         {% if pro %}*/
/*             <script type="text/javascript">*/
/*                 var d_shopunity_update_pro = jQuery.extend(true, {}, d_shopunity_widget);*/
/*                 d_shopunity_update_pro.init({*/
/*                 class: '.d_shopunity_update',*/
/*                 token: '{{token}}',*/
/*                 extension_id: 'd_ajax_search_pro',*/
/*                 action: 'loadUpdate'*/
/*                 })*/
/*             </script>*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if not pro and setup and d_shopunity %}*/
/*         <div class="row">*/
/*             <div class="col-md-9">*/
/*     {% endif %}*/
/* */
/*     <div class="panel panel-default panel-resizable">*/
/*         <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*             {% if setup %}*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li  class="active"><a href="#tab_setting" data-toggle="tab">*/
/*                     <span class="fa fa-cog"></span>*/
/*                     {{ text_settings }}*/
/*                     </a></li>*/
/*                      <li><a href="#tab_main" data-toggle="tab">*/
/*                         <span class="fa fa-wrench"></span>*/
/*                         {{ main_settings }}Custom Settings*/
/*                     </a></li>*/
/*                     <li><a href="#tab_design" data-toggle="tab">*/
/*                         <span class="fa fa-picture-o"></span>*/
/*                         Design*/
/*                     </a></li>*/
/*                     {% if pro %}*/
/*                     <li><a href="#tab_analytics" data-toggle="tab">*/
/*                         <span class="fa fa-line-chart"></span>*/
/*                         Analytics*/
/*                     </a></li>*/
/*                     <li><a href="#tab_history" data-toggle="tab">*/
/*                         <span class="fa fa-history"></span>*/
/*                         History & Redirects*/
/*                     </a></li>*/
/*                     {% endif %}*/
/*                     <li><a href="#tab_instruction" data-toggle="tab">*/
/*                         <span class="fa fa-graduation-cap"></span>*/
/*                         {{ text_instructions }}*/
/*                     </a></li>*/
/*                 </ul>*/
/*                 <form id="form" action="{{ action }}" method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/*                     <div class="tab-content">*/
/*                         */
/*                         <div class="tab-pane active" id="tab_setting">*/
/*                             <div class="tab-body">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-status">*/
/*                                         {{ entry_status }}*/
/*                                     </label>*/
/*                                     <div class="col-sm-8">*/
/*                                         <input type="hidden" value="0" name="{{ codename }}_status"/>*/
/*                                         <input type="checkbox" value="1" name="{{ codename }}_status" {{ d_ajax_search_status ? 'checked="checked"' : '' }} id="input-status" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-class"><span data-toggle="tooltip" title="{{ help_class }}">{{ entry_class }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="text" name="{{ codename }}_setting[class]" value="{{ setting['class'] }}"  class="form-control"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-max-symbols"><span data-toggle="tooltip" title="{{ help_max_symbols }}">{{ entry_max_symbols }}</span></label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input name="{{ codename }}_setting[max_symbols]" value="{{ setting['max_symbols'] }}" class="form-control">*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% if pro %}*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-smart-search"><span data-toggle="tooltip" title="{{ tooltip_smart_search }}">Smart search</span></label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <input type="hidden" name="{{ codename }}_setting[smart]" value="0" />*/
/*                                             <input type="checkbox" name="{{ codename }}_setting[smart]" {{ setting['smart'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-max-sugg-and-auto"><span data-toggle="tooltip" title="{{ tooltip_suggestion }}">Suggestion</span></label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <input type="hidden" name="{{ codename }}_setting[suggestion]" value="0" />*/
/*                                             <input type="checkbox" name="{{ codename }}_setting[suggestion]" {{ setting['suggestion'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-max-sugg-and-auto"><span data-toggle="tooltip" title="{{ tooltip_autocomplete }}">Autocomplete</span></label>*/
/*                                         <div class="col-sm-10">*/
/*                                             <input type="hidden" name="{{ codename }}_setting[autocomplete]" value="0" />*/
/*                                             <input type="checkbox" name="{{ codename }}_setting[autocomplete]" {{ setting['autocomplete'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane" id="tab_main">*/
/*                             <div class="tab-body">*/
/*                                 <div class="form-group">*/
/*                                     <div class="table-responsive col-sm-12">*/
/*                                         <table class="table table-bordered table-hover control-elements">*/
/*                                             <thead>*/
/*                                                 <tr class="fields">*/
/*                                                     <td class="field">*/
/*                                                         <h4 class="m-b-none"><span class="fa fa-sort-amount-asc"></span> {{priority_search}} <span class="info-window-item" data-href="https://dreamvention.ee/setup-live-ajax-search-blocks"><i class="fa fa-question info-load"></i></span></h4>*/
/*                                                     </td>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tbody class="control-elements">*/
/*                                                 <tr class="control-element">*/
/*                                                     <td class="field">*/
/*                                                         <div class="col-sm-12">*/
/*                                                             <div id="extensions">*/
/*                                                             {% for extension in extensions %}*/
/*                                                                 <div class="sort-item {{ extension['id'] }}" data-sort-order="{{ extension['sort_order'] }}">*/
/*                                                                     <span>*/
/*                                                                         <input type="hidden" name="{{ codename }}_setting[extension][{{ extension['id'] }}][sort_order]" class="sort-value" value="{{ extension['sort_order'] }}" />*/
/*                                                                         <span class="drag-handle"><i class="fa fa-bars"></i></span>*/
/*                                                                     </span>*/
/*                                                                     <span class="extension">*/
/*                                                                         <input type="hidden" name="{{ codename }}_setting[extension][{{ extension['id'] }}][enabled]" value="0" />*/
/*                                                                         <input type="checkbox" name="{{ codename }}_setting[extension][{{ extension['id'] }}][enabled]" {{ extension['enabled'] ? 'checked="checked"' : '' }} value="1" id="{{ codename }}_module_item_{{ extension['id'] }}_enabled" />*/
/*                                                                         <label onclick="check('{{ extension['id'] }}')" for="{{ codename }}extension_{{ extension['id'] }}_enabled">Edit {{ extension['id']|capitalize|replace ({'_':' '}) }} <i class="fa fa-caret-down"></i></label>*/
/*                                                                         <div class="pull-right form-inline">*/
/*                                                                         <label class="control-label lable_max_count" for="{{ codename }}_setting[max_symbols]"><span data-toggle="tooltip" title="Number of items in result of {{ extension['id']|capitalize|replace ({'_':' '}) }}">Count in results</span></label>*/
/*                                                                         <input name="{{ codename }}_setting[extension][{{ extension['id'] }}][max_count]" value="{{ extension['max_count'] }}" class="form-control">*/
/*                                                                         </div>*/
/*                                                                     </span>*/
/*                                                                     <div class="more-details form-group {{ extension['id'] }}_settings hidden_settings">*/
/*                                                                         {% for key, extension_ in extension['query'] %}*/
/*                                                                         <div class="col-sm-4 marbot">*/
/*                                                                             <input type="hidden" name="{{ codename }}_setting[extension][{{ extension['id'] }}][query][{{key}}]" value="0" />*/
/*                                                                             <input type="checkbox" name="{{ codename }}_setting[extension][{{ extension['id'] }}][query][{{key}}]" {{ extension_['status'] ? 'checked="checked"' : '' }} value="1" class="form-control">*/
/*                                                                             <label class=" control-label" for="input-{{ extension['id'] }}-query-{{key}}"><span data-toggle="tooltip" title="{{ extension_['tooltip'] }}">{{key}}</span></label>*/
/*                                                                         </div>*/
/*                                                                         {% endfor %}*/
/*                                                                     </div>*/
/*                                                                     <hr>*/
/*                                                                 </div>*/
/*                                                             {% endfor %}*/
/*                                                             </div>*/
/*                                                         </div>*/
/*                                                     </td>*/
/*                                                 </tr>*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane" id="tab_design">*/
/*                             <div class="tab-body">*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="hidden" name="{{ codename }}_setting[price]" value="0" />*/
/*                                         <input type="checkbox" name="{{ codename }}_setting[price]" {{ setting['price'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-where_search">{{where_was_found}}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="hidden" name="{{ codename }}_setting[where_search]" value="0" />*/
/*                                         <input type="checkbox" name="{{ codename }}_setting[where_search]" {{ setting['where_search'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-width"><span data-toggle="tooltip" title="{{ help_width }}">{{ entry_width }}</span></label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input name="{{ codename }}_setting[width]" value="{{ setting['width'] }}" class="form-control">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                 <div class="form-group">*/
/*                                             <label class="col-sm-2 control-label" for="input-max-results"><span data-toggle="tooltip" title="{{ help_max_results }}">{{ entry_max_results }}</span></label>*/
/*                                             <div class="col-sm-10">*/
/*                                                 <input name="{{ codename }}_setting[max_results]" value="{{ setting['max_results'] }}" class="form-control">*/
/*                                             </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-block_result">{{display_results_in_block}}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="hidden" name="{{ codename }}_setting[block_result]" value="0" />*/
/*                                         <input type="checkbox" name="{{ codename }}_setting[block_result]" {{ setting['block_result'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                  {% if pro %}*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-no_dublicate_images">{{display_unic_image}}</label>*/
/*                                     <div class="col-sm-10">*/
/*                                         <input type="hidden" name="{{ codename }}_setting[no_dublicate_images]" value="0" />*/
/*                                         <input type="checkbox" name="{{ codename }}_setting[no_dublicate_images]" {{ setting['no_dublicate_images'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 {% endif %}*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input_text">{{result_image_size}}</label>*/
/*                                     <div class="col-sm-5">*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon">Width</span>*/
/*                                             <input name="{{ codename }}_setting[image_width]" value="{{ setting['image_width'] }}" class="form-control">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     <div class="col-sm-5">*/
/*                                         <div class="input-group">*/
/*                                             <span class="input-group-addon">Height</span>*/
/*                                             <input name="{{ codename }}_setting[image_height]" value="{{ setting['image_height'] }}" class="form-control">*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input_text">{{show_more_results_link}}</label>*/
/*                                     <div class="col-sm-5">*/
/*                                         <div class="input-group">*/
/*                                              <input type="hidden" name="{{ codename }}_setting[all_result_status]" value="0" />*/
/*                                             <input type="checkbox" name="{{ codename }}_setting[all_result_status]" {{ setting['all_result_status'] ? 'checked="checked"' : '' }} value="1" class="switcher"/>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="form-group">*/
/*                                     <label class="col-sm-2 control-label" for="input-max-symbols"><span data-toggle="tooltip" title="for more results">Number of displayed results</span></label>*/
/*                                     <div class="col-sm-2">*/
/*                                         <input name="{{ codename }}_setting[all_result_count]" value="{{ setting['all_result_count'] }}" class="form-control">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane" id="tab_analytics">*/
/*                             <div class="tab-body">*/
/*                                 <div class="first_chart">*/
/*                                     <ul class="nav nav-pills">*/
/*                                         <li class="active" >*/
/*                                             <a id="first_load" class='choose-hour' href="{{ hour }}"><span>{{text_24hour}}</span></a>*/
/*                                         </li>*/
/*                                         <li class="" >*/
/*                                             <a class='choose-hour' href="{{ week }}"><span>{{text_week}}</span></a>*/
/*                                         </li>*/
/*                                         <li class="" >*/
/*                                             <a class='choose-hour' href="{{ mounth }}"><span>{{text_month}}</span></a>*/
/*                                         </li>*/
/*                                         <li class="" >*/
/*                                             <a class='choose-hour' href="{{ year }}"><span>{{text_year}}</span></a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </div>*/
/* */
/*                                 <div id="table_analytics">*/
/* */
/*                                     <div id="chartContainer" class="col-sm-6">*/
/*                                         <canvas id="myChart" width="200" height="100"></canvas>*/
/*                                     </div>*/
/*                                     <div id="chartContainer2" class="second_chart col-sm-6">*/
/*                                         <canvas id="myChart2" width="200" height="100"></canvas>*/
/*                                     </div>*/
/*                                     <div class="row">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane" id="tab_history">*/
/*                             <div class="panel-body">*/
/*                                 <div class="well">*/
/*                                     <form method="post" enctype="multipart/form-data" id="form" class="form-horizontal">*/
/*                                     <div class="row">*/
/*                                         <div class="form-group">*/
/*                                         <label class="col-sm-2 control-label" for="input-max-results">{{filter_keyword}}</label>*/
/*                                         <div class="col-sm-6">*/
/*                                             <input type="text" name="filter_name" value="" placeholder="keyword" id="input-name" class="form-control" />*/
/*                                         </div>*/
/*                                         <div class="col-sm-4">*/
/*                                             <button type="button" id="button-filter" class="btn btn-primary "><i class="fa fa-filter"></i>Filter</button>*/
/*                                             <div class="filter_inst info-window-item" data-href="https://dreamvention.ee/live-ajax-search-history-smart-search"><i class="fa fa-question info-load"></i></div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                     </div>*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <div id="table_history">*/
/*                                     <div class="table-responsive">*/
/*                                         <table class="table table-bordered table-hover">*/
/*                                             <thead>*/
/*                                                 <tr>*/
/*                                                     <td>Keyword</td>*/
/*                                                     <td>Suggestions</td>*/
/*                                                     <td>Selection</td>*/
/*                                                     <td>Views</td>*/
/*                                                 </tr>*/
/*                                             </thead>*/
/*                                             <tbody>*/
/*                                                 {% if histories %}*/
/*                                                     {% for history in histories %}*/
/*                                                     <tr>*/
/*                                                         <td class="text-center hidden">*/
/*                                                             <input type="text" name="settings[history][query_results_id]" value="{{history['query_id']}}" class="form-control">*/
/*                                                         </td>*/
/*                                                         <td class="text-center">*/
/*                                                             <div type="text" name="settings[history][text]" value="{{history['keyword']}}">{{history['keyword']}}</div>*/
/*                                                         </td>*/
/*                                                         <td class="redirect-cell text-left">*/
/*                                                             <div id="redirect_{{history['query_id']}}"  class="redirect-field" redirect_query_id="{{history['query_id']}}">*/
/*                                                                 <span class="text-field">{{history['redirect']}}</span>*/
/*                                                                 <input type="text" value="{{history['redirect']}}" class="input-field form-control hide" />*/
/*                                                             </div>*/
/*                                                         </td>*/
/*                                                         <td class="text-left">*/
/*                                                             <a href="{{history['href']}}"><img src="{{history['image']}}" alt="">{{history['name']}}</a>*/
/*                                                         </td>*/
/*                                                         <td class="text-center">*/
/*                                                             <div type="text" name="settings[history][hits]" value="{{history['count']}}" >{{history['count']}}</div>*/
/*                                                         </td>*/
/*                                                     </tr>*/
/*                                                     {% endfor %}*/
/*                                                 {% else %}*/
/*                                                 <tr><td class="text-center" colspan="8">No results!</td></tr>*/
/*                                                 {% endif %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/* */
/*                                     <div class="row m-t-lg m-b-lg">*/
/*                                         <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                                         <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                                     </div>*/
/*                                 </div>*/
/* */
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="tab-pane" id="tab_instruction">*/
/*                             <div class="tab-body">{{ text_instructions_full }}</div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             {% else %}*/
/*                 {{text_setup}}*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if not pro and setup and d_shopunity %}*/
/*             </div>*/
/* */
/*             <div class="col-md-3">*/
/*                 <div class="d_shopunity_widget"></div>*/
/*                 <script src="view/javascript/d_shopunity/d_shopunity_widget.js" type="text/javascript"></script>*/
/*                 <script type="text/javascript">*/
/*                 var d_shopunity_widget = jQuery.extend(true, {}, d_shopunity_widget);*/
/*                 d_shopunity_widget.init({*/
/*                 class: '.d_shopunity_widget',*/
/*                 token: '{{token}}',*/
/*                 extension_id: 'd_ajax_search_pro'*/
/*                 })*/
/*                 </script>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="info-window">*/
/*         <div class="info-window-wrap">*/
/*             <div class="info-window-block">*/
/*                 <div class="info-window-close"><i class="fa fa-close"></i></div>*/
/*                 <div class="info-window-description"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% if not setup %}*/
/* <script type="text/javascript">*/
/*     $(document).on('click', '.setup', function(){*/
/*         window.location.href = '{{setup_link}}';*/
/*     });*/
/* </script>*/
/* {% else %}*/
/* <script type="text/javascript">*/
/* //General*/
/* function showAlert(json) {*/
/*     return;*/
/*     $('.alert, .text-danger').remove();*/
/*     $('.form-group').removeClass('has-error');*/
/* */
/*     if (json['error']) {*/
/*         if (json['error']['warning']) {*/
/*             $('#content > .container-fluid').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*         }*/
/* */
/*         for (i in json['error']) {*/
/*             var element = $('#input_' + i);*/
/* */
/*             if (element.parent().hasClass('input-group')) {*/
/*                 $(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*             } else {*/
/*                 $(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/*             }*/
/*         }*/
/* */
/*         $('.text-danger').parentsUntil('.form-group').parent().addClass('has-error');*/
/*     }*/
/* */
/*     if (json['success']) {*/
/*         $('#content > .container-fluid').prepend('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '  <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*     }*/
/* };*/
/* */
/* $("[type='checkbox']").bootstrapSwitch({*/
/*     'onColor': 'success',*/
/*     'onText': '{{ text_on }}',*/
/*     'offText': '{{ text_off }}',*/
/* });*/
/* */
/* $('body').on('click', '#save_and_stay', function(){*/
/*     $.ajax( {*/
/*         type: 'post',*/
/*         url: $('#form').attr('action'),*/
/*         data: $('#form').serialize(),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             $('#content').fadeTo('slow', 0.5);*/
/*         },*/
/*         complete: function() {*/
/*             $('#content').fadeTo('slow', 1);*/
/*         },*/
/*         success: function(json) {*/
/*             showAlert(json);*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* //info window */
/* var info_window = {*/
/*     'item' : new Array(),*/
/*     'current_url' : ''*/
/* }*/
/* */
/* $.each($('.info-window-item'), function(key, value) {*/
/*     var url = $(this).attr('data-href');*/
/* */
/*     if (url) {*/
/*         $.getJSON(url + '?format=json&callback=?', function(data) {*/
/*             info_window.item[url] = data['description'];*/
/*         });*/
/*     }*/
/* });*/
/* */
/* $('.info-window-item').on('click', function() {*/
/*     var url = $(this).attr('data-href');*/
/* */
/*     if (url == info_window.current_url) {*/
/*         info_window.current_url = '';*/
/*         $('.info-window').removeClass('resized');*/
/*         $('.panel-resizable').removeClass('resized');*/
/*     } else {*/
/*         info_window.current_url = url;*/
/*         $('.info-window .info-window-description').html(info_window.item[url]);*/
/*         $('.panel-resizable').addClass('resized');*/
/*         $('.info-window').addClass('resized');*/
/*     }*/
/* });*/
/* */
/* $('.info-window .info-window-close').on('click', function() {*/
/*     info_window.current_url = '';*/
/*     $('.info-window').removeClass('resized');*/
/*     $('.panel-resizable').removeClass('resized');*/
/* });*/
/* */
/* //extensions*/
/* $('#extensions > .sort-item').tsort({attr:'data-sort-order'});*/
/* */
/* Sortable.create(extensions, {*/
/*     group: "sorting",*/
/*     sort: true,*/
/*     animation: 150,*/
/*     handle: ".drag-handle",*/
/*     onUpdate: function (event){*/
/*         $('#extensions').find('.sort-item').each(function (i, row) {*/
/*             $(row).find('.sort-value').val(i)*/
/*         })*/
/*     }*/
/* });*/
/* */
/* //instructions */
/* $(function(){*/
/*     var url_inst = 'https://dreamvention.ee/instructions-quick-search';*/
/* */
/*     $.getJSON(url_inst + '?format=json&callback=?', function(data) {*/
/*         $('.instruction').html(data['description']);*/
/*     });*/
/* })*/
/* */
/* //Analytics*/
/* $(document).on('click', '.choose-hour', function(ev) {*/
/*     $('#tab_analytics li').removeClass('active')*/
/*     $(ev.currentTarget).parent().addClass('active')*/
/*     var url=$(ev.currentTarget).attr('href');*/
/* */
/* */
/*      $.ajax( {*/
/*         type: 'post',*/
/*         url: url,*/
/*         data: $('#form').serialize(),*/
/*         dataType: 'json',*/
/*         beforeSend: function() {*/
/*             // $('#content').fadeTo('slow', 0.5);*/
/*         },*/
/*         complete: function() {*/
/*             // $('#content').fadeTo('slow', 1);*/
/*         },*/
/*         success: function(json) {*/
/* */
/*        drawAnalyticsTab(json);*/
/* */
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* */
/*     return false;*/
/* });*/
/* */
/* $('#first_load').click();*/
/* */
/* //History*/
/* $('#button-filter').on('click', function() {*/
/*     var url = 'index.php?route=extension/module/d_ajax_search&{{url_token}}';*/
/* */
/*     var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*     if (filter_name) {*/
/*         url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*     }*/
/* */
/*     location = url;*/
/* });*/
/* */
/* $(document).on('click', '.pagination li a', function(ev) {*/
/*     $('#table_history').load(ev.currentTarget.href+' #table_history > div')*/
/*     // $(ev.currentTarget.href).*/
/*     return false;*/
/* });*/
/* */
/* $('body').on('click', '.redirect-cell', function() {*/
/*     var redirect = $(this).children('.redirect-field');*/
/* */
/*     if ($(redirect).children('.input-field').hasClass('hide') && ($(redirect).children('.input-field').attr('type') != 'hidden')) {*/
/*         $('.popover').popover('hide', function() {*/
/*             $('.popover').remove();*/
/*         });*/
/* */
/*         $('.text-field').removeClass('hide');*/
/*         $('.input-field').addClass('hide');*/
/* */
/*         $(redirect).popover({*/
/*             html: true,*/
/*             placement: 'top',*/
/*             trigger: 'manual',*/
/*             content: function() {*/
/*                 return '<button type="button" id="button_save" class="btn btn-primary" redirect_field_id="' + redirect.attr('id') + '"><i class="fa fa-save"></i></button> <button type="button" id="button_cancel" class="btn btn-danger" redirect_field_id="' + redirect.attr('id') + '"><i class="fa fa-remove"></i></button>';*/
/*             }*/
/*         });*/
/* */
/*         $(redirect).popover('show');*/
/* */
/*         $(redirect).children('.text-field').addClass('hide');*/
/*         $(redirect).children('.input-field').removeClass('hide');*/
/*     }*/
/* });*/
/* */
/* $('body').on('click', '#button_save', function() {*/
/*     var redirect = $('#' + $(this).attr('redirect_field_id'));*/
/*     var query_redirect_id = $(redirect).attr('redirect_query_id');*/
/*     var value = $(redirect).children('.input-field').val();*/
/*     $.ajax({*/
/*         url: '{{redirect}}',*/
/*         type: 'post',*/
/*         data: 'query_id=' + query_redirect_id + '&value=' + (value),*/
/*         dataType: 'json',*/
/*         success: function(json) {*/
/*             showAlert(json);*/
/* */
/*             $(redirect).popover('hide', function() {*/
/*                 $('.popover').remove();*/
/*             });*/
/* */
/*             setTimeout(function() {*/
/*                 if (json['error'] != 'error') {*/
/*                     $(redirect).children('.input-field').val(json['value']);*/
/*                     $(redirect).children('.text-field').text(json['value']);*/
/*                 } else {*/
/*                     $(redirect).children('.input-field').val($(redirect).children('.text-field').text());*/
/*                 }*/
/* */
/*                 $(redirect).children('.text-field').removeClass('hide');*/
/*                 $(redirect).children('.input-field').addClass('hide');*/
/*             }, 200);*/
/*         },*/
/*         error: function(xhr, ajaxOptions, thrownError) {*/
/*             console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*     });*/
/* });*/
/* */
/* $('body').on('click', '#button_cancel', function() {*/
/*     var redirect = $('#' + $(this).attr('redirect_field_id'));*/
/* */
/*     $(redirect).popover('hide', function() {*/
/*         $('.popover').remove();*/
/*     });*/
/* */
/*     setTimeout(function() {*/
/*         $(redirect).children('.input-field').val($(redirect).children('.text-field').text());*/
/*         $(redirect).children('.text-field').removeClass('hide');*/
/*         $(redirect).children('.input-field').addClass('hide');*/
/*     }, 200);*/
/* });*/
/* */
/* function drawAnalyticsTab(json){*/
/*      document.getElementById("chartContainer").innerHTML='<canvas id="myChart" width="200" height="100"></canvas>';*/
/*         document.getElementById("chartContainer2").innerHTML='<canvas id="myChart2" width="200" height="100"></canvas>';*/
/*         $('.right-table').remove();*/
/*         $('.left-table').remove();*/
/*         if(json.statistic.table_statistic.length > 0){*/
/*             var i,k;*/
/*                     html='<div class="col-sm-6 right-table">'*/
/*                         html +='<div id="table_viewed">'*/
/*                             html +='<div class="table-responsive">'*/
/*                                 html +='<table class="table table-bordered table-hover">'*/
/*                                     html +='<thead>'*/
/*                                         html +='<tr>'*/
/*                                          html +='<td>#</td>'*/
/*                                             html +='<td>results</td>'*/
/*                                             html += '<td>type</td>'*/
/*                                             html +='<td>Views</td>'*/
/*                                         html +='</tr>'*/
/*                                     html +='</thead>'*/
/*                                     html +='<tbody>'*/
/*                                        for(i=0; i < json.statistic.table_statistic.length; i++){*/
/*                                            html +='<tr>'*/
/*                                            html +='<td>'+ (i+1) +'</td>'*/
/*                                            html +='<td><a href="'+json.statistic.table_statistic[i].href +'">'+ json.statistic.table_statistic[i].select +'</a></td>'*/
/*                                            html +='<td>'+ json.statistic.table_statistic[i].type +'</td>'*/
/*                                            html +='<td>'+ json.statistic.table_statistic[i].count +'</td>'*/
/*                                            html +='</tr>'*/
/*                                        }*/
/*                                     html +='</tbody>'*/
/*                                 html +='</table>'*/
/*                             html +='</div>'*/
/*                         html +='</div>'*/
/*                     html +='</div>'*/
/*                     html +='<div class="col-sm-6 left-table">'*/
/*                         html +='<div id="table_viewed">'*/
/*                             html +='<div class="table-responsive">'*/
/*                                 html +='<table class="table table-bordered table-hover">'*/
/*                                     html +='<thead>'*/
/*                                         html +='<tr>'*/
/*                                             html +='<td>keyword</td>'*/
/*                                             html +='<td>searches</td>'*/
/*                                         html +='</tr>'*/
/*                                     html +='</thead>'*/
/*                                     html +='<tbody>'*/
/*                                        for(k=0; k < json.top_searches.table_searches.length; k++){*/
/*                                            html +='<tr>'*/
/*                                            html +='<td>'+ json.top_searches.table_searches[k].text +'</td>'*/
/*                                            html +='<td>'+ json.top_searches.table_searches[k].count +'</td>'*/
/*                                            html +='</tr>'*/
/*                                        }*/
/*                                     html +='</tbody>'*/
/*                                 html +='</table>'*/
/*                             html +='</div>'*/
/*                         html +='</div>'*/
/*                     html +='</div>'*/
/*         $('#table_analytics > div.row').after(html);*/
/*         }*/
/*             var ctx1 = document.getElementById("myChart").getContext('2d');*/
/*             var myChart1 = new Chart(ctx1, {*/
/*             type: 'bar',*/
/*             data: json.statistic,*/
/*             options: {*/
/*                 title: {*/
/*                     display: false*/
/*                 },*/
/*                 scales: {*/
/*                     yAxes: [{*/
/*                         ticks: {*/
/*                             beginAtZero:true*/
/*                             }*/
/*                         }]*/
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*             var ctx2 = document.getElementById("myChart2").getContext('2d');*/
/*             var myChart2 = new Chart(ctx2, {*/
/*             type: 'bar',*/
/*             data: json.top_searches,*/
/*             options: {*/
/*                 scales: {*/
/*                     yAxes: [{*/
/*                         ticks: {*/
/*                             beginAtZero:true*/
/*                         }*/
/*                     }]*/
/*                 }*/
/*             }*/
/*         });*/
/* }*/
/* */
/* </script>*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>*/
/* <script>*/
/* function check(data){*/
/*     var classList = $('.'+data+'_settings').attr('class').split(/\s+/);*/
/*     $.each(classList, function(index, item) {*/
/*         if (item === 'hidden_settings' || item === 'hidden') {*/
/*             $('.'+data+'_settings').slideDown(500).removeClass('hidden_settings');*/
/*             $("label[for='d_ajax_searchextension_"+data+"_enabled'] > i").removeClass('fa-caret-down');*/
/*             $("label[for='d_ajax_searchextension_"+data+"_enabled'] > i").addClass('fa-caret-up');*/
/*         }else{*/
/*             $('.'+data+'_settings').slideUp(500).addClass('hidden_settings');*/
/*             $("label[for='d_ajax_searchextension_"+data+"_enabled'] > i").removeClass('fa-caret-up');*/
/*             $("label[for='d_ajax_searchextension_"+data+"_enabled'] > i").addClass('fa-caret-down');*/
/*         }*/
/*     });*/
/* */
/* }*/
/* </script>*/
/* {% endif %}*/
/* {{ footer }}*/
