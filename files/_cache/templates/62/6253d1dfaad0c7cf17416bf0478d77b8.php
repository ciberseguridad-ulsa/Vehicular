<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_afbed1860ae0bf5353ed223cacb064e3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 34
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 34)->unwrap();
        // line 35
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 37
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 38
($context["canupdate"] ?? null), "add_field_class" => ((        // line 39
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 41
        echo "
";
        // line 42
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 43
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 44
        echo "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   ";
        // line 46
        $context["main_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 46) || ((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 47
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 49
        echo ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 52
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [(($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 52)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 52);
        echo "
            </span>
            <span class=\"item-title\">
                ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [1], "method", false, false, false, 55), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 59
        echo ((($context["main_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

            ";
        // line 64
        if (Session::isMultiEntitiesMode()) {
            // line 65
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 65)) {
                // line 66
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,                 // line 69
($context["item"] ?? null), "fields", [], "any", false, false, false, 69)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), twig_array_merge(                // line 71
($context["field_options"] ?? null), ["entity" =>                 // line 72
($context["userentities"] ?? null), "on_change" => "this.form.submit()"])], 66, $context, $this->getSourceContext());
                // line 75
                echo "
               ";
            } else {
                // line 77
                echo "                  ";
                ob_start(function () { return ''; });
                // line 78
                echo "                     ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletenameLinkById", [(($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 78)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null)]);
                echo "
                  ";
                $context["entity_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 80
                echo "
                  ";
                // line 81
                echo twig_call_macro($macros["fields"], "macro_field", ["",                 // line 83
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), twig_array_merge(                // line 85
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])], 81, $context, $this->getSourceContext());
                // line 88
                echo "
               ";
            }
            // line 90
            echo "
               ";
            // line 91
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["is_recursive"], "method", false, false, false, 91)) {
                // line 92
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,                 // line 94
($context["item"] ?? null), "fields", [], "any", false, false, false, 94)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 96
($context["field_options"] ?? null)], 92, $context, $this->getSourceContext());
                // line 97
                echo "
               ";
            }
            // line 99
            echo "            ";
        }
        // line 100
        echo "
            ";
        // line 101
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 103
($context["item"] ?? null), "fields", [], "any", false, false, false, 103)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date"] ?? null) : null), __("Opening date"),         // line 105
($context["field_options"] ?? null)], 101, $context, $this->getSourceContext());
        // line 106
        echo "

            ";
        // line 108
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 108) != "Ticket")) {
            // line 109
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 111
($context["item"] ?? null), "fields", [], "any", false, false, false, 111)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 113
($context["field_options"] ?? null)], 109, $context, $this->getSourceContext());
            // line 114
            echo "
            ";
        }
        // line 116
        echo "
            ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [true], "method", false, false, false, 117)) {
            // line 118
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["solvedate", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 120
($context["item"] ?? null), "fields", [], "any", false, false, false, 120)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["solvedate"] ?? null) : null), __("Resolution date"),             // line 122
($context["field_options"] ?? null)], 118, $context, $this->getSourceContext());
            // line 123
            echo "
            ";
        }
        // line 125
        echo "
            ";
        // line 126
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 126)) {
            // line 127
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 129
($context["item"] ?? null), "fields", [], "any", false, false, false, 129)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["closedate"] ?? null) : null), __("Close date"),             // line 131
($context["field_options"] ?? null)], 127, $context, $this->getSourceContext());
            // line 132
            echo "
            ";
        }
        // line 134
        echo "
            ";
        // line 135
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 135) == "Ticket")) {
            // line 136
            echo "               ";
            $context["type_params"] = twig_array_merge(["value" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 137
($context["item"] ?? null), "fields", [], "any", false, false, false, 137)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 140
($context["field_options"] ?? null));
            // line 141
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 141)) {
                // line 142
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 143
                echo "               ";
            } else {
                // line 144
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 145
                echo "               ";
            }
            // line 146
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,             // line 148
($context["item"] ?? null), "dropdownType", ["type", ($context["type_params"] ?? null)], "method", false, false, false, 148), _n("Type", "Types", 1),             // line 150
($context["field_options"] ?? null)], 146, $context, $this->getSourceContext());
            // line 151
            echo "
            ";
        }
        // line 153
        echo "
            ";
        // line 154
        $context["cat_params"] = twig_array_merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,         // line 155
($context["item"] ?? null), "fields", [], "any", false, false, false, 155)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "disabled" =>  !(        // line 156
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 158
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 158)) {
            // line 159
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 162
            echo "            ";
        }
        // line 163
        echo "            ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 163) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["itilcategories_id"], "method", false, false, false, 163)) && ((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 163)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itilcategories_id"] ?? null) : null) > 0))) {
            // line 164
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 167
            echo "            ";
        }
        // line 168
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 168) == "Ticket")) {
            // line 169
            echo "               ";
            if (((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 169)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null) == twig_constant("Ticket::INCIDENT_TYPE"))) {
                // line 170
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 171
                echo "               ";
            } elseif (((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 171)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null) == twig_constant("Ticket::DEMAND_TYPE"))) {
                // line 172
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 173
                echo "               ";
            }
            // line 174
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 174) == "Problem")) {
            // line 175
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 176
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 176) == "Change")) {
            // line 177
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 178
            echo "            ";
        }
        // line 179
        echo "            <span id=\"category_block_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 180
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,         // line 183
($context["item"] ?? null), "fields", [], "any", false, false, false, 183)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 185
($context["cat_params"] ?? null)], 180, $context, $this->getSourceContext());
        // line 186
        echo "
            </span>

            ";
        // line 189
        echo twig_include($this->env, $context, "components/itilobject/fields/status.html.twig");
        echo "
            ";
        // line 191
        echo "            ";
        // line 205
        echo "
            ";
        // line 207
        echo "            ";
        // line 208
        echo "
            ";
        // line 209
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", ["locations_id"], "method", false, false, false, 209)) {
            // line 210
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 213
($context["item"] ?? null), "fields", [], "any", false, false, false, 213)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 215
($context["field_options"] ?? null), ["hide_if_no_elements" => true, "entity" => (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 217
($context["item"] ?? null), "fields", [], "any", false, false, false, 217)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null), "entity_sons" => true])], 210, $context, $this->getSourceContext());
            // line 220
            echo "
            ";
        }
        // line 222
        echo "
            ";
        // line 223
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 223) && (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 223) == "Ticket"))) {
            // line 224
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((twig_get_attribute($this->env, $this->source,             // line 227
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 227)) ? (_twig_default_filter((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), twig_array_merge(            // line 229
($context["field_options"] ?? null), ["entity" => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source,             // line 230
($context["item"] ?? null), "fields", [], "any", false, false, false, 230)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true])], 224, $context, $this->getSourceContext());
            // line 234
            echo "
            ";
        }
        // line 236
        echo "
            ";
        // line 238
        echo "            ";
        // line 246
        echo "
            ";
        // line 247
        echo twig_include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        echo "

            ";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>
      </div>
   </div>

   ";
        // line 254
        $context["actors_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 254) || ((($__internal_compile_20 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["actors"] ?? null) : null) == "true"))) ? (true) : (false));
        // line 255
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 256
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 257
        echo ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 260
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "
            </span>
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 263
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 263), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 267
        echo ((($context["actors_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 269
        echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig");
        echo "
         </div>
      </div>
   </div>

   ";
        // line 274
        if ((array_key_exists("item_ticket", $context) &&  !(null === ($context["item_ticket"] ?? null)))) {
            // line 275
            echo "      ";
            $context["items_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "items", [], "array", true, true, false, 275) || ((($__internal_compile_21 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["items"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 276
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"items-heading\" title=\"";
            // line 277
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 278
            echo ((($context["items_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#items\" aria-expanded=\"true\" aria-controls=\"items\">
               <i class=\"ti ti-package me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 281
            echo twig_escape_filter($this->env, _n("Item", "Items", Session::getPluralNumber()), "html", null, true);
            echo "
                </span>
               <span class=\"item-counter badge bg-secondary ms-2\"></span>
               ";
            // line 284
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["items_id"], "method", false, false, false, 284)) {
                // line 285
                echo "                  <span class=\"required\">*</span>
               ";
            }
            // line 287
            echo "            </button>
         </h2>
         <div id=\"items\" class=\"accordion-collapse collapse ";
            // line 289
            echo ((($context["items_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"items-heading\">
            <div class=\"accordion-body accordion-items row m-0 mt-n2\">
               ";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item_ticket"] ?? null), "itemAddForm", [($context["item"] ?? null), twig_array_merge(((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])), ["entities_id" => ($context["entities_id"] ?? null)])], "method", false, false, false, 291), "html", null, true);
            echo "
            </div>
         </div>
      </div>
   ";
        }
        // line 296
        echo "
   ";
        // line 297
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 297) == "Ticket")) {
            // line 298
            echo "      ";
            ob_start(function () { return ''; });
            // line 299
            echo "         ";
            // line 300
            echo "         ";
            // line 301
            echo "      ";
            $context["la_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 302
            echo "
      ";
            // line 303
            if ((twig_length_filter($this->env, twig_trim_filter(($context["la_content"] ?? null))) > 0)) {
                // line 304
                echo "         ";
                $context["nb_la"] = (((((((($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 304)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["slas_id_tto"] ?? null) : null) > 0)) ? (1) : (0)) + ((((($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 304)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["slas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_24 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 304)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["olas_id_tto"] ?? null) : null) > 0)) ? (1) : (0))) + ((((($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 304)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["olas_id_ttr"] ?? null) : null) > 0)) ? (1) : (0)));
                // line 305
                echo "         ";
                $context["servicelevels_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "service-levels", [], "array", true, true, false, 305) && ((($__internal_compile_26 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["service-levels"] ?? null) : null) == "true"))) ? (true) : (false));
                // line 306
                echo "         <div class=\"accordion-item\">
            <h2 class=\"accordion-header\" id=\"service-levels-heading\" title=\"";
                // line 307
                echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\">
               <button class=\"accordion-button ";
                // line 308
                echo ((($context["servicelevels_show"] ?? null)) ? ("") : ("collapsed"));
                echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#service-levels\" aria-expanded=\"true\" aria-controls=\"service-levels\">
                  <i class=\"ti ti-alarm me-1\"></i>
                  <span class=\"item-title\">
                     ";
                // line 311
                echo twig_escape_filter($this->env, _n("Service level", "Service levels", Session::getPluralNumber()), "html", null, true);
                echo "
                  </span>
                  ";
                // line 313
                if ((($context["nb_la"] ?? null) > 0)) {
                    // line 314
                    echo "                     <span class=\"badge bg-secondary ms-2\">";
                    echo twig_escape_filter($this->env, ($context["nb_la"] ?? null), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 316
                echo "               </button>
            </h2>
            <div id=\"service-levels\" class=\"accordion-collapse collapse ";
                // line 318
                echo ((($context["servicelevels_show"] ?? null)) ? ("show") : (""));
                echo "\" aria-labelledby=\"service-levels-heading\">
               <div class=\"accordion-body row m-0 mt-n2\">
                  ";
                // line 320
                echo twig_escape_filter($this->env, ($context["la_content"] ?? null), "html", null, true);
                echo "
               </div>
            </div>
         </div>
      ";
            }
            // line 325
            echo "   ";
        }
        // line 326
        echo "
   ";
        // line 327
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 327), ["Problem", "Change"])) {
            // line 328
            echo "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 334
            echo "
      ";
            // line 335
            $context["nb_analysis"] = 0;
            // line 336
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 337
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 337) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 337)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["analysis_field"]] ?? null) : null))) > 0))) {
                    // line 338
                    echo "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 339
                    echo "         ";
                }
                // line 340
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "      ";
            $context["analysis_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 341) && ((($__internal_compile_28 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["analysis"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 342
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 343
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 344
            echo ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 347
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "
               </span>
               ";
            // line 349
            if ((($context["nb_analysis"] ?? null) > 0)) {
                // line 350
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_analysis"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 352
            echo "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 354
            echo ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 356
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 357
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["analysis_field"]], "method", false, false, false, 357)) {
                    // line 358
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 359
$context["analysis_field"], (($__internal_compile_29 = twig_get_attribute($this->env, $this->source,                     // line 360
($context["item"] ?? null), "fields", [], "any", false, false, false, 360)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29[$context["analysis_field"]] ?? null) : null),                     // line 361
$context["label"], twig_array_merge(                    // line 362
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 358, $context, $this->getSourceContext());
                    // line 366
                    echo "
                  ";
                }
                // line 368
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 369
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 373
        echo "
   ";
        // line 374
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 374) == "Change")) {
            // line 375
            echo "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 380
            echo "
      ";
            // line 381
            $context["nb_plans"] = 0;
            // line 382
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 383
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 383) && (twig_length_filter($this->env, twig_trim_filter((($__internal_compile_30 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 383)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30[$context["plans_field"]] ?? null) : null))) > 0))) {
                    // line 384
                    echo "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 385
                    echo "         ";
                }
                // line 386
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "
      ";
            // line 388
            $context["plans_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 388) && ((($__internal_compile_31 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["plans"] ?? null) : null) == "true"))) ? (true) : (false));
            // line 389
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 390
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 391
            echo ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 394
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "
               </span>
               ";
            // line 396
            if ((($context["nb_plans"] ?? null) > 0)) {
                // line 397
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_plans"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 399
            echo "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 401
            echo ((($context["plans_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 403
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 404
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [$context["plans_field"]], "method", false, false, false, 404)) {
                    // line 405
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 406
$context["plans_field"], (($__internal_compile_32 = twig_get_attribute($this->env, $this->source,                     // line 407
($context["item"] ?? null), "fields", [], "any", false, false, false, 407)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32[$context["plans_field"]] ?? null) : null),                     // line 408
$context["label"], twig_array_merge(                    // line 409
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 405, $context, $this->getSourceContext());
                    // line 413
                    echo "
                  ";
                }
                // line 415
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 416
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 420
        echo "
   ";
        // line 422
        echo "   ";
        // line 448
        echo "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 468
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .field-container').load(
        '";
        // line 469
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        echo "',
        {
            'type': type,
            'entity_restrict': ";
        // line 472
        echo twig_escape_filter($this->env, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 472)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["entities_id"] ?? null) : null), "html", null, true);
        echo ",
            'value': ";
        // line 473
        echo twig_escape_filter($this->env, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 473)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["itilcategories_id"] ?? null) : null), "html", null, true);
        echo ",
        }
    );
};
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  769 => 473,  765 => 472,  759 => 469,  755 => 468,  733 => 448,  731 => 422,  728 => 420,  722 => 416,  716 => 415,  712 => 413,  710 => 409,  709 => 408,  708 => 407,  707 => 406,  705 => 405,  702 => 404,  698 => 403,  693 => 401,  689 => 399,  683 => 397,  681 => 396,  676 => 394,  670 => 391,  666 => 390,  663 => 389,  661 => 388,  658 => 387,  652 => 386,  649 => 385,  646 => 384,  643 => 383,  638 => 382,  636 => 381,  633 => 380,  630 => 375,  628 => 374,  625 => 373,  619 => 369,  613 => 368,  609 => 366,  607 => 362,  606 => 361,  605 => 360,  604 => 359,  602 => 358,  599 => 357,  595 => 356,  590 => 354,  586 => 352,  580 => 350,  578 => 349,  573 => 347,  567 => 344,  563 => 343,  560 => 342,  557 => 341,  551 => 340,  548 => 339,  545 => 338,  542 => 337,  537 => 336,  535 => 335,  532 => 334,  529 => 328,  527 => 327,  524 => 326,  521 => 325,  513 => 320,  508 => 318,  504 => 316,  498 => 314,  496 => 313,  491 => 311,  485 => 308,  481 => 307,  478 => 306,  475 => 305,  472 => 304,  470 => 303,  467 => 302,  464 => 301,  462 => 300,  460 => 299,  457 => 298,  455 => 297,  452 => 296,  444 => 291,  439 => 289,  435 => 287,  431 => 285,  429 => 284,  423 => 281,  417 => 278,  413 => 277,  410 => 276,  407 => 275,  405 => 274,  397 => 269,  392 => 267,  385 => 263,  379 => 260,  373 => 257,  369 => 256,  366 => 255,  364 => 254,  356 => 249,  351 => 247,  348 => 246,  346 => 238,  343 => 236,  339 => 234,  337 => 230,  336 => 229,  335 => 227,  333 => 224,  331 => 223,  328 => 222,  324 => 220,  322 => 217,  321 => 215,  320 => 213,  318 => 210,  316 => 209,  313 => 208,  311 => 207,  308 => 205,  306 => 191,  302 => 189,  297 => 186,  295 => 185,  294 => 183,  293 => 180,  288 => 179,  285 => 178,  282 => 177,  279 => 176,  276 => 175,  273 => 174,  270 => 173,  267 => 172,  264 => 171,  261 => 170,  258 => 169,  255 => 168,  252 => 167,  249 => 164,  246 => 163,  243 => 162,  240 => 159,  237 => 158,  235 => 156,  234 => 155,  233 => 154,  230 => 153,  226 => 151,  224 => 150,  223 => 148,  221 => 146,  218 => 145,  215 => 144,  212 => 143,  209 => 142,  206 => 141,  204 => 140,  203 => 137,  201 => 136,  199 => 135,  196 => 134,  192 => 132,  190 => 131,  189 => 129,  187 => 127,  185 => 126,  182 => 125,  178 => 123,  176 => 122,  175 => 120,  173 => 118,  171 => 117,  168 => 116,  164 => 114,  162 => 113,  161 => 111,  159 => 109,  157 => 108,  153 => 106,  151 => 105,  150 => 103,  149 => 101,  146 => 100,  143 => 99,  139 => 97,  137 => 96,  136 => 94,  134 => 92,  132 => 91,  129 => 90,  125 => 88,  123 => 85,  122 => 83,  121 => 81,  118 => 80,  112 => 78,  109 => 77,  105 => 75,  103 => 72,  102 => 71,  101 => 69,  99 => 66,  96 => 65,  94 => 64,  89 => 62,  83 => 59,  76 => 55,  70 => 52,  64 => 49,  60 => 47,  58 => 46,  54 => 44,  52 => 43,  50 => 42,  47 => 41,  45 => 39,  44 => 38,  43 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "C:\\laragon\\www\\glpi\\templates\\components\\itilobject\\fields_panel.html.twig");
    }
}
