/**
 * Check Heavy UI
 * 
 * The file name is set to match the Drupal module this is used with,
 * and doesn't follow the normal convention of jquery.pluginname.js.
 * 
 * This is a simple jQuery plugin taking a selectors object and options
 * object as arguments. Selectors is not a jQuery selector, like 
 * $('input.selected'); rather, selectors is an object that holds all
 * of the DOM traversing and selection data necessary to add the form
 * manipulation logic for a column, a row, a section, and a column 
 * inside of a section. The basic design is like so - the sub-objects 
 * are aptly named, but here is some details on their contents:
 * 
 * 
 *     selectAllColumn:{
   * 
 *        //This is where the 'checkall' check-box will be injected
 *        //into the DOM:
 * 
 *        insertionPoint:'thead.tableHeader-processed th.checkbox',
 * 
 *        //Used on most selector types, this is used to extract a
 *        //substring from an ID to build a jQuery selector in order
 *        //to bind a check-all event to certain boxes:
 * 
 *        findByIdPrepend:'check-all-role-',
 * 
 *        //This is used as part of a class in a jQuery selector to
 *        //find all of the checkboxes to check or uncheck:
 * 
 *        boxesClassPrepend:'role-',
 * 
 *        //This is an additional class to append to the check/uncheck
 *        //all check box, in case you would like to reference it for 
 *        //styling or other purposes:
 * 
 *        additionalClass:'check-all-controller-column'
 *        },
 * 
 *      selectAllSection:{
 *        insertionPoint:'td.module-check-all',
 *        findByIdPrepend:'module-',	
 *        additionalClass:'check-all-controller-section'				
 *        },
 * 
 *      selectAllSectionRole:{
 *        insertionPoint:'td.module-check-all-role',
 *        findByIdPrepend:'module-check-role-',	
 *        boxesClassPrepend:'role-',
 *        additionalClass:'check-all-controller-section-role'
 *        },
 * 				
 *      selectAllRow:{
 *        insertionPoint:'td.permission',	
 * 
 *        //To find all checkboxes that are part of the form, boxes is
 *        //used as a jQuery selector for a single row of the table
 * 
 *        boxes:'.form-checkbox',
 *        additionalClass:'check-all-controller-row'					
 *        }
 * 
 * The Drupal module was originally set up to just include a .js file
 * on the /admin/user/permissions page, but the lack of things like
 * class sections made some of this manipulation impossible, and the
 * amount of DOM traversal necessary to find, insert, and bind 
 * everything would turn my browser gray with firebug on, so I modified
 * the form to give better selectors to speed up the client-side of 
 * things.
 * 
 * Copyright (c) 2009 Rich Siomporas
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 *
 * @version 0.0.1
 * @author Rich Siomporas
 * @mailto richietommy@yahoo.com
**/
(function(jQuery) {
  jQuery.checkHeavyUI = function(selectors, options) {
    settings = jQuery.extend({binders: 'change',
                              checkAllClass:'check-all-controller'
                              }, options); 
    jQuery.each(selectors, function(i, selector){
      jQuery(selector.insertionPoint).each(function(j){
        $(this).prepend('<input type="checkbox" class="'+selector.additionalClass+' '+ settings.checkAllClass +'" />');
        $(this).find("input.check-all-controller").bind(settings.binders, function(){
            chkd = $(this).attr("checked");								
            if(i == 'selectAllColumn'){
              column = $(this).parent().attr("id").substring(selector.findByIdPrepend.length);
              $('.'+selector.boxesClassPrepend+column+' input')
              .each(function(){
                $(this).attr("checked", chkd);
              });					
            }
            else if(i == 'selectAllRow'){
              $(this).parent().parent().find('input'+selector.boxes)
              .each(function(){
                $(this).attr("checked", chkd);
              });								
          }
            else if(i == 'selectAllSection'){
              section = $(this).parent().attr("id").substring(selector.findByIdPrepend.length);
              $('.checkbox-'+section+' input')
              .each(function(){
                $(this).attr("checked", chkd);
              });	
            }
            else if(i == 'selectAllSectionRole'){
              section_role = $(this).parent().attr("id").substring(selector.findByIdPrepend.length).split('-');
              $('.checkbox-'+section_role[0]+'-role-'+section_role[1]+' input')
              .each(function(){
                $(this).attr("checked", chkd);
              });	
            }																		
            });
        });
      });				
    }
})(jQuery);
