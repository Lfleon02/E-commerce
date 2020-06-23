<?php

/* extension/module/pavmegamenu/pavmegamenu.twig */
class __TwigTemplate_92ace6bc273048d8cf293a0a687eae266eb2ea2a83e67dad5c4247e68f6889f3 extends Twig_Template
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
 * @package Pav Megamenu module for Opencart 3.0.x
 * @version 3.0
 * @author http://www.pavothemes.com
 * @copyright\tCopyright (C) Oct 2017 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.
 * @license\t\tGNU General Public License version 2
*******************************************************/
-->

";
        // line 11
        echo (isset($context["header"]) ? $context["header"] : null);
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " ";
        $context["module_row"] = 0;
        // line 12
        echo "
<div id=\"content\">
\t
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button class=\"btn btn-primary\" title=\"";
        // line 18
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" onclick=\"\$('#form').submit();\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
\t\t\t\t<a class=\"btn btn-info\" title=\"";
        // line 19
        echo (isset($context["button_save_edit"]) ? $context["button_save_edit"] : null);
        echo "\" onclick=\"\$('#save_mode').val('save-edit');\$('#form').submit();\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save_edit"]) ? $context["button_save_edit"] : null);
        echo "</a>
\t\t\t\t<a class=\"btn btn-success\" title=\"";
        // line 20
        echo (isset($context["button_save_new"]) ? $context["button_save_new"] : null);
        echo "\" onclick=\"\$('#save_mode').val('save-new');\$('#form').submit();\"><i class=\"fa fa-book\"></i> ";
        echo (isset($context["button_save_new"]) ? $context["button_save_new"] : null);
        echo "</a> | 
\t\t\t\t<a class=\"btn btn-danger\" title=\"";
        // line 21
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" href=\"";
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" ><i class=\"fa fa-book\"></i> ";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a> | 
\t\t\t\t<a class=\"btn btn-info\" title=\"Guide\" id=\"btn-guide\" href=\"http://www.pavothemes.com/guides/pav_megamenu/\"><i class=\"fa fa-book\"></i>Guide</a>
\t\t\t</div>
\t\t\t<h1>";
        // line 24
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 27
            echo "\t\t        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t    </ul>
\t\t</div>
\t</div>

\t<div id=\"page-content\" class=\"container-fluid\">

\t\t";
        // line 35
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 36
            echo "\t    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t    </div>
\t    ";
        }
        // line 40
        echo "\t
\t\t<div id=\"ajaxloading\" class=\"hide\">
\t\t\t<div class=\"alert alert-warning\" role=\"alert\">";
        // line 42
        echo (isset($context["text_process_request"]) ? $context["text_process_request"] : null);
        echo "</div>
\t\t</div>

\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 47
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<ul id=\"grouptabs\" class=\"nav nav-tabs hidden\" role=\"tablist\">
\t\t\t\t\t<li class=\"active\"><a href=\"#manage-menus\" role=\"tab\" data-toggle=\"tab\">";
        // line 51
        echo (isset($context["tab_manage_megamenus"]) ? $context["tab_manage_megamenus"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#manage-widgets\" role=\"tab\" data-toggle=\"tab\">";
        // line 52
        echo (isset($context["tab_manage_widgets"]) ? $context["tab_manage_widgets"] : null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t<div class=\"tab-pane hidden\" id=\"manage-widgets\">
\t\t\t\t\t\t<p><i>";
        // line 57
        echo (isset($context["text_explain_widgets"]) ? $context["text_explain_widgets"] : null);
        echo "</i></p>
\t\t\t\t\t\t<a class=\"btn btn-info btn-modal\" href=\"index.php?route=extension/module/pavmegamenu/addwidget&user_token=";
        // line 58
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "\" >";
        echo (isset($context["text_create_widget"]) ? $context["text_create_widget"] : null);
        echo "</a>
\t\t\t\t\t\t<br/><br/>
\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t<tr>\t
\t\t\t\t\t\t\t\t<td>";
        // line 62
        echo (isset($context["text_widget_name"]) ? $context["text_widget_name"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 63
        echo (isset($context["text_widget_type"]) ? $context["text_widget_type"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t<td>";
        // line 64
        echo (isset($context["text_action"]) ? $context["text_action"] : null);
        echo "</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t";
        // line 67
        if (twig_test_iterable((isset($context["widgets"]) ? $context["widgets"] : null))) {
            // line 68
            echo "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 69
                echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td>";
                // line 70
                echo $this->getAttribute($context["widget"], "name", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t<td>";
                // line 71
                $context["type"] = $this->getAttribute($context["widget"], "type", array());
                echo " ";
                echo ((isset($context["text_widget_"]) ? $context["text_widget_"] : null) . (isset($context["type"]) ? $context["type"] : null));
                echo "</td>
\t\t\t\t\t\t\t\t\t<td><a class=\"btn-action-widget btn-modal\" rel=\"edit\" href=\"index.php?route=extension/module/pavmegamenu/addwidget&user_token=";
                // line 72
                echo (isset($context["user_token"]) ? $context["user_token"] : null);
                echo "&id=";
                echo $this->getAttribute($context["widget"], "id", array());
                echo "&wtype=";
                echo $this->getAttribute($context["widget"], "type", array());
                echo "\">";
                echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t\t| 
\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('";
                // line 74
                echo (isset($context["text_confirm_delete"]) ? $context["text_confirm_delete"] : null);
                echo "');\"\trel=\"edit\" href=\"index.php?route=extension/module/pavmegamenu/delwidget&user_token=";
                echo (isset($context["user_token"]) ? $context["user_token"] : null);
                echo "&id=";
                echo $this->getAttribute($context["widget"], "id", array());
                echo "&wtype=";
                echo $this->getAttribute($context["widget"], "type", array());
                echo "\">";
                echo (isset($context["text_delete"]) ? $context["text_delete"] : null);
                echo "</a>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\t\t</table>
\t\t\t\t\t</div><!-- div.panel > manage-widgets -->

\t\t\t\t\t<div class=\"tab-pane active\" id=\"manage-menus\">
\t\t\t\t\t\t<form action=\"";
        // line 83
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
\t\t\t\t\t\t\t<div class=\"buttons clearfix\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary\" title=\"";
        // line 87
        echo (isset($context["button_import_categories"]) ? $context["button_import_categories"] : null);
        echo "\" onclick=\"\$('#save_mode').val('import-categories');\$('#form').submit();\">";
        echo (isset($context["button_import_categories"]) ? $context["button_import_categories"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-danger\" title=\"";
        // line 88
        echo (isset($context["button_delete_categories"]) ? $context["button_delete_categories"] : null);
        echo "\" data-toggle=\"modal\" data-target=\".deleteTree-modal-sm\">";
        echo (isset($context["button_delete_categories"]) ? $context["button_delete_categories"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<select class=\"form-control pull-right\" name=\"stores\" id=\"pavstores\" style=\"width: 20%;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 95
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                // line 96
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t \t\t<span class=\"pull-right\" style=\"font-weight:bold;\"> ";
        // line 102
        echo (isset($context["entry_filter_store"]) ? $context["entry_filter_store"] : null);
        echo " </span>
\t\t\t\t\t\t\t\t<input type=\"hidden\" value=\"";
        // line 103
        echo (isset($context["store_id"]) ? $context["store_id"] : null);
        echo "\" name=\"megamenu[store_id]\"/></br></br>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><br/><br/>

\t\t\t\t\t\t\t<div class=\"megamenu\">
\t\t\t\t\t\t\t\t<div class=\"tree-megamenu\">
\t\t\t\t\t\t\t\t\t<h4>";
        // line 110
        echo (isset($context["text_treemenu"]) ? $context["text_treemenu"] : null);
        echo "</h4>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-updatetree\" name=\"serialize\" id=\"serialize\">";
        // line 111
        echo (isset($context["button_update_order"]) ? $context["button_update_order"] : null);
        echo "</a>\t
\t\t\t\t\t\t\t\t\t";
        // line 112
        echo (isset($context["tree"]) ? $context["tree"] : null);
        echo "
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-success btn-updatetree\" name=\"serialize\" id=\"serialize\">";
        // line 113
        echo (isset($context["button_update_order"]) ? $context["button_update_order"] : null);
        echo "</a>
\t\t\t\t\t\t\t\t\t<p class=\"note\"><i>";
        // line 114
        echo (isset($context["text_explain_drapanddrop"]) ? $context["text_explain_drapanddrop"] : null);
        echo "</i></p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div><!-- end div.megamenu -->

\t\t\t\t\t\t\t<div class=\"megamenu-form\">
\t\t\t\t\t\t\t\t<div id=\"megamenu-form\">
\t\t\t\t\t\t\t\t\t";
        // line 121
        $this->loadTemplate("extension/module/pavmegamenu/pavmegamenu_form.twig", "extension/module/pavmegamenu/pavmegamenu.twig", 121)->display($context);
        // line 122
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- end div.megamenu-form -->

\t\t\t\t\t\t\t<input type=\"hidden\" value=\"\" name=\"save_mode\" id=\"save_mode\"/>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!-- div.panel > manage-menus -->


\t\t\t\t</div>
\t\t\t</div>

\t\t</div><!-- end div.panel panel-default -->
\t\t<div id=\"info\" style=\"font-size:10px;color:#666\"><p>Pav Mega Menu is free to use. it's released under GPL/V2. Powered By <a href=\"http://www.pavothemes.com\">PavoThemes.Com</a></div>

\t</div><!-- container-fluid -->
</div>

 \t<!-- Modal Form-->
\t<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t    <div class=\"modal-dialog\">
\t      \t<div class=\"modal-content\">
\t\t        <div class=\"modal-header\">
\t\t          \t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t          \t<h4 class=\"modal-title\">";
        // line 146
        echo (isset($context["text_preview_on_live_site"]) ? $context["text_preview_on_live_site"] : null);
        echo "</h4>
\t\t        </div>
\t        \t<div class=\"modal-body\"></div>
\t\t        <div class=\"modal-footer\">
\t\t          \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 150
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t        </div>
\t      \t</div> 
\t    </div> 
\t</div>

\t<!-- Modal confirm dialog -->
\t<div id=\"cmodal\" class=\"modal fade deleteTree-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\" aria-hidden=\"true\">
\t  \t<div class=\"modal-dialog modal-sm\">
\t\t    <div class=\"modal-content\">
\t\t    \t<div class=\"modal-body\">
\t\t         \t";
        // line 161
        echo (isset($context["message_delete_category"]) ? $context["message_delete_category"] : null);
        echo "
\t\t        </div>
\t\t     \t<div class=\"modal-footer\">
\t\t          \t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 164
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
\t\t          \t<button type=\"button\" class=\"btn btn-primary\" id=\"btnDeleteTree\">";
        // line 165
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>
\t\t        </div>
\t\t        <input id=\"menuid\" type=\"hidden\" name=\"menuid\" value=\"0\"/>
\t\t    </div>
\t  \t</div>
\t</div>
  
<script type=\"text/javascript\"><!--
\t
\t// Drag and Drop menu Item
\t\$('ol.sortable').nestedSortable({
\t\tforcePlaceholderSize: true,
\t\thandle: 'div',
\t\thelper:\t'clone',
\t\titems: 'li',
\t\topacity: .6,
\t\tplaceholder: 'placeholder',
\t\trevert: 250,
\t\ttabSize: 25,
\t\ttolerance: 'pointer',
\t\ttoleranceElement: '> div',
\t\tmaxLevels: 4,

\t\tisTree: true,
\t\texpandOnHover: 700,
\t\tstartCollapsed: true
\t});
\t
\t\$('#serialize, .btn-updatetree').click(function(){
\t\t\tvar serialized = \$('ol.sortable').nestedSortable('serialize');
\t\t\t\$.ajax({
\t\t\tasync : false,
\t\t\ttype: 'POST',
\t\t\tdataType:'json',
\t\t\turl: \"";
        // line 199
        echo (isset($context["updateTree"]) ? $context["updateTree"] : null);
        echo "\",
\t\t\tdata : serialized, 
\t\t\tsuccess : function (r) { 
\t\t
\t\t\t\tif (\$('#msg-tree').length > 0 ) { 
\t\t\t\t\t\$(\"#page-content\").remove('#msg-tree');
\t\t\t\t} else {
\t\t\t\t\tvar html = \"<div id='msg-tree' class='alert alert-success'><i class='fa fa-check-circle'></i>";
        // line 206
        echo (isset($context["text_success_update_tree"]) ? $context["text_success_update_tree"] : null);
        echo "<button type='button' class='close' data-dismiss='alert'>×</button></div>\";
\t\t\t\t\t\$(\"#ajaxloading\").before(html);
\t\t\t\t\t//Scroll up
\t\t\t\t\t\$('html, body').animate({ scrollTop: 0 }, 'slow');
\t\t\t\t}
\t\t\t}
\t\t});
\t});

\t// Mutiple Store
\t\$('#pavstores').bind('change', function () {
\t\turl = 'index.php?route=extension/module/pavmegamenu&user_token=";
        // line 217
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
\t\tvar id = \$(this).val();
\t\tif (id) {
\t\t\turl += '&store_id=' + encodeURIComponent(id);
\t\t}
\t\twindow.location = url;
\t});

\t// Modal delete tree categories
\t\$('#btnDeleteTree').click(function() {
\t\tvar id = \$(\"#menuid\").val();
\t\tif(id == 0) {
\t\t\t\$(\"#save_mode\").val('delete-categories');
\t\t\t\$('#form').submit();\t
\t\t} else {
\t\t\twindow.location.href=\"";
        // line 232
        echo (isset($context["actionDel"]) ? $context["actionDel"] : null);
        echo "&id=\"+id;
\t\t}
\t\t
\t});

\t\$(\".quickdel\").click(function(){
\t\t\$('#cmodal .modal-body').html( \"";
        // line 238
        echo (isset($context["message_delete"]) ? $context["message_delete"] : null);
        echo "\" );
\t\t\$('#cmodal').modal();
\t\tvar id = \$(this).attr(\"rel\").replace(\"id_\",\"\");
\t\t\$(\"#menuid\").val(id);
\t\treturn false;
\t});

\t// Ajax load
\t\$(document).ajaxSend(function() {
\t\t\$(\"#ajaxloading\").show();
\t});
\t\$(document).ajaxComplete(function() {
\t\t\$(\"#ajaxloading\").hide();
\t});

\t// Cookies tab
\t\$('#grouptabs a').click( function(){
\t\t\$.cookie(\"megaactived_tab\", \$(this).attr(\"href\") );
\t});

\tif(\$.cookie(\"megaactived_tab\") !=\"undefined\"){
\t\t\$('#grouptabs a').each( function(){
\t\t\tif( \$(this).attr(\"href\") ==  \$.cookie(\"megaactived_tab\")){
\t\t\t\t\$(this).click();
\t\t\t\treturn ;
\t\t\t}
\t\t});
\t}

\t// Modal Link guide
\t\$(\"#btn-guide\").click( function(){
\t\t\$('#myModal .modal-dialog').css('width',980);
\t\tvar a = \$( '<span class=\"glyphicon glyphicon-refresh\"></span><iframe frameborder=\"0\" scrolling=\"no\" src=\"'+\$(this).attr('href')+'\" style=\"width:100%;height:900px; display:none\"/>'  );
\t\t\$('#myModal .modal-body').html( a );
\t\t\t
\t\t\$('#myModal').modal();
\t\t\$('#myModal').attr('rel', \$(this).attr('rel') );
\t\t\$(a).load( function(){  
\t\t\t\$('#myModal .modal-body .glyphicon-refresh').hide();
\t \t\t\$('#myModal .modal-body iframe').show();
\t\t} );
\t\treturn false;
\t});

\t// Modal Create widget
\t\$(\".btn-modal\").click( function(){ 
\t\t\$('#myModal .modal-dialog').css('width',980);
\t\tvar a = \$( '<span class=\"glyphicon glyphicon-refresh\"></span><iframe frameborder=\"0\" scrolling=\"no\" src=\"'+\$(this).attr('href')+'\" style=\"width:100%;height:900px; display:none\"/>'  );
\t\t\$('#myModal .modal-body').html( a );
\t\t\t
\t\t\$('#myModal').modal( );
\t\t\$('#myModal').attr('rel', \$(this).attr('rel') );
\t\t\$(a).load( function(){  
\t\t\t\$('#myModal .modal-body .glyphicon-refresh').hide();
\t \t\t\$('#myModal .modal-body iframe').show();
\t\t});

\t\treturn false;
\t});
\t\$('#myModal').on('hidden.bs.modal', function () { 
\t \t if( \$(this).attr('rel') == 'refresh-page' ){
\t \t \twindow.parent.location.reload();
\t \t }
\t});
//-->
</script>

";
        // line 305
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/pavmegamenu/pavmegamenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 305,  470 => 238,  461 => 232,  443 => 217,  429 => 206,  419 => 199,  382 => 165,  378 => 164,  372 => 161,  358 => 150,  351 => 146,  325 => 122,  323 => 121,  313 => 114,  309 => 113,  305 => 112,  301 => 111,  297 => 110,  287 => 103,  283 => 102,  280 => 101,  274 => 100,  266 => 98,  258 => 96,  255 => 95,  251 => 94,  240 => 88,  234 => 87,  227 => 83,  221 => 79,  218 => 78,  200 => 74,  189 => 72,  183 => 71,  179 => 70,  176 => 69,  171 => 68,  169 => 67,  163 => 64,  159 => 63,  155 => 62,  146 => 58,  142 => 57,  134 => 52,  130 => 51,  123 => 47,  115 => 42,  111 => 40,  103 => 36,  101 => 35,  93 => 29,  82 => 27,  78 => 26,  73 => 24,  63 => 21,  57 => 20,  51 => 19,  45 => 18,  37 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!--*/
/* /*******************************************************/
/*  * @package Pav Megamenu module for Opencart 3.0.x*/
/*  * @version 3.0*/
/*  * @author http://www.pavothemes.com*/
/*  * @copyright	Copyright (C) Oct 2017 PavoThemes.com <@emai:pavothemes@gmail.com>.All rights reserved.*/
/*  * @license		GNU General Public License version 2*/
/* *******************************************************//* */
/* -->*/
/* */
/* {{ header }} {{ column_left }} {% set module_row = 0 %}*/
/* */
/* <div id="content">*/
/* 	*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button class="btn btn-primary" title="{{ button_save }}" onclick="$('#form').submit();"><i class="fa fa-save"></i> {{ button_save }}</button>*/
/* 				<a class="btn btn-info" title="{{ button_save_edit }}" onclick="$('#save_mode').val('save-edit');$('#form').submit();"><i class="fa fa-save"></i> {{ button_save_edit }}</a>*/
/* 				<a class="btn btn-success" title="{{ button_save_new }}" onclick="$('#save_mode').val('save-new');$('#form').submit();"><i class="fa fa-book"></i> {{ button_save_new }}</a> | */
/* 				<a class="btn btn-danger" title="{{ button_cancel }}" href="{{ cancel }}" ><i class="fa fa-book"></i> {{ button_cancel }}</a> | */
/* 				<a class="btn btn-info" title="Guide" id="btn-guide" href="http://www.pavothemes.com/guides/pav_megamenu/"><i class="fa fa-book"></i>Guide</a>*/
/* 			</div>*/
/* 			<h1>{{ heading_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 		    {% for breadcrumb in breadcrumbs %}*/
/* 		        <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 		    {% endfor %}*/
/* 		    </ul>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div id="page-content" class="container-fluid">*/
/* */
/* 		{% if error_warning %}*/
/* 	    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 	      <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 	    </div>*/
/* 	    {% endif %}*/
/* 	*/
/* 		<div id="ajaxloading" class="hide">*/
/* 			<div class="alert alert-warning" role="alert">{{ text_process_request }}</div>*/
/* 		</div>*/
/* */
/* 		<div class="panel panel-default">*/
/* 			<div class="panel-heading">*/
/* 				<h3 class="panel-title"><i class="fa fa-pencil"></i> {{ heading_title }}</h3>*/
/* 			</div>*/
/* 			<div class="panel-body">*/
/* 				<ul id="grouptabs" class="nav nav-tabs hidden" role="tablist">*/
/* 					<li class="active"><a href="#manage-menus" role="tab" data-toggle="tab">{{ tab_manage_megamenus }}</a></li>*/
/* 					<li><a href="#manage-widgets" role="tab" data-toggle="tab">{{ tab_manage_widgets }}</a></li>*/
/* 				</ul>*/
/* 				<div class="tab-content">*/
/* */
/* 					<div class="tab-pane hidden" id="manage-widgets">*/
/* 						<p><i>{{ text_explain_widgets }}</i></p>*/
/* 						<a class="btn btn-info btn-modal" href="index.php?route=extension/module/pavmegamenu/addwidget&user_token={{ user_token }}" >{{ text_create_widget }}</a>*/
/* 						<br/><br/>*/
/* 						<table class="table">*/
/* 							<tr>	*/
/* 								<td>{{ text_widget_name }}</td>*/
/* 								<td>{{ text_widget_type }}</td>*/
/* 								<td>{{ text_action }}</td>*/
/* 							</tr>*/
/* */
/* 							{% if widgets is iterable %}*/
/* 								{% for widget in widgets %}*/
/* 								<tr>*/
/* 									<td>{{ widget.name }}</td>*/
/* 									<td>{% set type = widget.type %} {{ text_widget_~type }}</td>*/
/* 									<td><a class="btn-action-widget btn-modal" rel="edit" href="index.php?route=extension/module/pavmegamenu/addwidget&user_token={{ user_token }}&id={{ widget.id }}&wtype={{ widget.type }}">{{ text_edit }}</a>*/
/* 									| */
/* 									<a onclick="return confirm('{{ text_confirm_delete }}');"	rel="edit" href="index.php?route=extension/module/pavmegamenu/delwidget&user_token={{ user_token }}&id={{ widget.id }}&wtype={{ widget.type }}">{{ text_delete }}</a>*/
/* 									</td>*/
/* 								</tr>*/
/* 								{% endfor %}*/
/* 							{% endif %}*/
/* 						</table>*/
/* 					</div><!-- div.panel > manage-widgets -->*/
/* */
/* 					<div class="tab-pane active" id="manage-menus">*/
/* 						<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/* 							<div class="buttons clearfix">*/
/* 								<div class="col-lg-6">*/
/* 								*/
/* 									<a class="btn btn-primary" title="{{ button_import_categories }}" onclick="$('#save_mode').val('import-categories');$('#form').submit();">{{ button_import_categories }}</a>*/
/* 									<a class="btn btn-danger" title="{{ button_delete_categories }}" data-toggle="modal" data-target=".deleteTree-modal-sm">{{ button_delete_categories }}</a>*/
/* 								</div>	*/
/* 								<div class="col-lg-6">*/
/* 									 */
/* 									*/
/* 									<select class="form-control pull-right" name="stores" id="pavstores" style="width: 20%;">*/
/* 										{% for store in stores %}*/
/* 										{% if store.store_id == store_id %}*/
/* 											<option value="{{ store.store_id }}" selected="selected">{{ store.name }}</option>*/
/* 										{% else %}*/
/* 											<option value="{{ store.store_id }}">{{ store.name }}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 							 		<span class="pull-right" style="font-weight:bold;"> {{ entry_filter_store }} </span>*/
/* 								<input type="hidden" value="{{ store_id }}" name="megamenu[store_id]"/></br></br>*/
/* 								</div>*/
/* */
/* 							</div><br/><br/>*/
/* */
/* 							<div class="megamenu">*/
/* 								<div class="tree-megamenu">*/
/* 									<h4>{{ text_treemenu }}</h4>*/
/* 									<a class="btn btn-success btn-updatetree" name="serialize" id="serialize">{{ button_update_order }}</a>	*/
/* 									{{ tree }}*/
/* 									<a class="btn btn-success btn-updatetree" name="serialize" id="serialize">{{ button_update_order }}</a>*/
/* 									<p class="note"><i>{{ text_explain_drapanddrop }}</i></p>*/
/* 								</div>*/
/* */
/* 							</div><!-- end div.megamenu -->*/
/* */
/* 							<div class="megamenu-form">*/
/* 								<div id="megamenu-form">*/
/* 									{% include 'extension/module/pavmegamenu/pavmegamenu_form.twig' %}*/
/* 								</div>*/
/* 							</div>*/
/* 							<!-- end div.megamenu-form -->*/
/* */
/* 							<input type="hidden" value="" name="save_mode" id="save_mode"/>*/
/* 						</form>*/
/* 					</div><!-- div.panel > manage-menus -->*/
/* */
/* */
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div><!-- end div.panel panel-default -->*/
/* 		<div id="info" style="font-size:10px;color:#666"><p>Pav Mega Menu is free to use. it's released under GPL/V2. Powered By <a href="http://www.pavothemes.com">PavoThemes.Com</a></div>*/
/* */
/* 	</div><!-- container-fluid -->*/
/* </div>*/
/* */
/*  	<!-- Modal Form-->*/
/* 	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/* 	    <div class="modal-dialog">*/
/* 	      	<div class="modal-content">*/
/* 		        <div class="modal-header">*/
/* 		          	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>*/
/* 		          	<h4 class="modal-title">{{ text_preview_on_live_site }}</h4>*/
/* 		        </div>*/
/* 	        	<div class="modal-body"></div>*/
/* 		        <div class="modal-footer">*/
/* 		          	<button type="button" class="btn btn-default" data-dismiss="modal">{{ text_close }}</button>*/
/* 		        </div>*/
/* 	      	</div> */
/* 	    </div> */
/* 	</div>*/
/* */
/* 	<!-- Modal confirm dialog -->*/
/* 	<div id="cmodal" class="modal fade deleteTree-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">*/
/* 	  	<div class="modal-dialog modal-sm">*/
/* 		    <div class="modal-content">*/
/* 		    	<div class="modal-body">*/
/* 		         	{{ message_delete_category }}*/
/* 		        </div>*/
/* 		     	<div class="modal-footer">*/
/* 		          	<button type="button" class="btn btn-default" data-dismiss="modal">{{ text_close }}</button>*/
/* 		          	<button type="button" class="btn btn-primary" id="btnDeleteTree">{{ button_save }}</button>*/
/* 		        </div>*/
/* 		        <input id="menuid" type="hidden" name="menuid" value="0"/>*/
/* 		    </div>*/
/* 	  	</div>*/
/* 	</div>*/
/*   */
/* <script type="text/javascript"><!--*/
/* 	*/
/* 	// Drag and Drop menu Item*/
/* 	$('ol.sortable').nestedSortable({*/
/* 		forcePlaceholderSize: true,*/
/* 		handle: 'div',*/
/* 		helper:	'clone',*/
/* 		items: 'li',*/
/* 		opacity: .6,*/
/* 		placeholder: 'placeholder',*/
/* 		revert: 250,*/
/* 		tabSize: 25,*/
/* 		tolerance: 'pointer',*/
/* 		toleranceElement: '> div',*/
/* 		maxLevels: 4,*/
/* */
/* 		isTree: true,*/
/* 		expandOnHover: 700,*/
/* 		startCollapsed: true*/
/* 	});*/
/* 	*/
/* 	$('#serialize, .btn-updatetree').click(function(){*/
/* 			var serialized = $('ol.sortable').nestedSortable('serialize');*/
/* 			$.ajax({*/
/* 			async : false,*/
/* 			type: 'POST',*/
/* 			dataType:'json',*/
/* 			url: "{{ updateTree }}",*/
/* 			data : serialized, */
/* 			success : function (r) { */
/* 		*/
/* 				if ($('#msg-tree').length > 0 ) { */
/* 					$("#page-content").remove('#msg-tree');*/
/* 				} else {*/
/* 					var html = "<div id='msg-tree' class='alert alert-success'><i class='fa fa-check-circle'></i>{{ text_success_update_tree }}<button type='button' class='close' data-dismiss='alert'>×</button></div>";*/
/* 					$("#ajaxloading").before(html);*/
/* 					//Scroll up*/
/* 					$('html, body').animate({ scrollTop: 0 }, 'slow');*/
/* 				}*/
/* 			}*/
/* 		});*/
/* 	});*/
/* */
/* 	// Mutiple Store*/
/* 	$('#pavstores').bind('change', function () {*/
/* 		url = 'index.php?route=extension/module/pavmegamenu&user_token={{ user_token }}';*/
/* 		var id = $(this).val();*/
/* 		if (id) {*/
/* 			url += '&store_id=' + encodeURIComponent(id);*/
/* 		}*/
/* 		window.location = url;*/
/* 	});*/
/* */
/* 	// Modal delete tree categories*/
/* 	$('#btnDeleteTree').click(function() {*/
/* 		var id = $("#menuid").val();*/
/* 		if(id == 0) {*/
/* 			$("#save_mode").val('delete-categories');*/
/* 			$('#form').submit();	*/
/* 		} else {*/
/* 			window.location.href="{{ actionDel }}&id="+id;*/
/* 		}*/
/* 		*/
/* 	});*/
/* */
/* 	$(".quickdel").click(function(){*/
/* 		$('#cmodal .modal-body').html( "{{ message_delete }}" );*/
/* 		$('#cmodal').modal();*/
/* 		var id = $(this).attr("rel").replace("id_","");*/
/* 		$("#menuid").val(id);*/
/* 		return false;*/
/* 	});*/
/* */
/* 	// Ajax load*/
/* 	$(document).ajaxSend(function() {*/
/* 		$("#ajaxloading").show();*/
/* 	});*/
/* 	$(document).ajaxComplete(function() {*/
/* 		$("#ajaxloading").hide();*/
/* 	});*/
/* */
/* 	// Cookies tab*/
/* 	$('#grouptabs a').click( function(){*/
/* 		$.cookie("megaactived_tab", $(this).attr("href") );*/
/* 	});*/
/* */
/* 	if($.cookie("megaactived_tab") !="undefined"){*/
/* 		$('#grouptabs a').each( function(){*/
/* 			if( $(this).attr("href") ==  $.cookie("megaactived_tab")){*/
/* 				$(this).click();*/
/* 				return ;*/
/* 			}*/
/* 		});*/
/* 	}*/
/* */
/* 	// Modal Link guide*/
/* 	$("#btn-guide").click( function(){*/
/* 		$('#myModal .modal-dialog').css('width',980);*/
/* 		var a = $( '<span class="glyphicon glyphicon-refresh"></span><iframe frameborder="0" scrolling="no" src="'+$(this).attr('href')+'" style="width:100%;height:900px; display:none"/>'  );*/
/* 		$('#myModal .modal-body').html( a );*/
/* 			*/
/* 		$('#myModal').modal();*/
/* 		$('#myModal').attr('rel', $(this).attr('rel') );*/
/* 		$(a).load( function(){  */
/* 			$('#myModal .modal-body .glyphicon-refresh').hide();*/
/* 	 		$('#myModal .modal-body iframe').show();*/
/* 		} );*/
/* 		return false;*/
/* 	});*/
/* */
/* 	// Modal Create widget*/
/* 	$(".btn-modal").click( function(){ */
/* 		$('#myModal .modal-dialog').css('width',980);*/
/* 		var a = $( '<span class="glyphicon glyphicon-refresh"></span><iframe frameborder="0" scrolling="no" src="'+$(this).attr('href')+'" style="width:100%;height:900px; display:none"/>'  );*/
/* 		$('#myModal .modal-body').html( a );*/
/* 			*/
/* 		$('#myModal').modal( );*/
/* 		$('#myModal').attr('rel', $(this).attr('rel') );*/
/* 		$(a).load( function(){  */
/* 			$('#myModal .modal-body .glyphicon-refresh').hide();*/
/* 	 		$('#myModal .modal-body iframe').show();*/
/* 		});*/
/* */
/* 		return false;*/
/* 	});*/
/* 	$('#myModal').on('hidden.bs.modal', function () { */
/* 	 	 if( $(this).attr('rel') == 'refresh-page' ){*/
/* 	 	 	window.parent.location.reload();*/
/* 	 	 }*/
/* 	});*/
/* //-->*/
/* </script>*/
/* */
/* {{ footer }}*/
/* */
