<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_firstmodule
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

?>
<script>
    jQuery(function($) {
       $("#subscribe").click(function() {
                
                var name = $("#name").val();
                var email = $("#email").val();
                //alert("<?php echo JURI::current() ?>modules/mod_firstmodule/mymodule.php");
                $.ajax({
                    url: "<?php echo JURI::current() ?>modules/mod_firstmodule/mymodule.php",
                    type: "POST",
                    async: true,
                    cache: false,
                    data: {name: name, email: email},
                    dataType: "text",
                    success : function(status){
                        alert("Sie haben sich erfolgreich angemeldet");
                        $("#name").val("");
                        $("#email").val("");
                    }
                });
            })
    });
</script>
<form name="form1" method="post" id="form1">
<div style="width:60%; font-size:10px; color:white; background-color:#f8982a; padding:6px;width:180px">
        NEWSLETTER ANMELDUNG:
        <div style="height:13px"> <b><span>NAME:</span><span style="margin:22%">E-MAIL:</span></b></div>
        <b><input type="text" name="name" id="name" style="box-shadow:none;border:none;border-radius:0px;font-size:10px;width:35%;padding-top: 0px;padding-bottom: 0px;padding-left: 5px;padding-right: 5px;height:16px;margin-top: 5px;display:inline"> 
        <input type="text" name="email" id="email" style="box-shadow:none;border:none;border-radius:0px;font-size:10px;width:55%;margin:4%;display:inline;padding-top: 0px;padding-bottom: 0px;padding-right: 5px;padding-left: 5px;height:16px"></b>
        
        <input type="button" value="ANMELDEN" style="width:95%;height:24px;padding-top: 2px;background-color:#CCCCCC;margin-bottom: 0px;" id="subscribe">
    </div>
    
</form>