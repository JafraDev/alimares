/*
Archivo: devTools.js
Autor: Jaime Altamirano B.
Fecha: 05/07/2023 20:25
CopyRight:
*/
const formCtrlToMysql = (formId)=>{
    // ev.preventDefault()
    const form = document.getElementById(formId)
    if(form.length>0){
        form_inputs = document.getElementById(formId)//form.getElementsByTagName("input")
        array_input_checkbox = []
        array_input_radio = []
        var ctrl_val_count = 0
        var mysql_cmd = `create table ${formId}(`
        var ins_cmd_h = `insert into ${formId}(\n`
        var ins_cmd_v = 'values (\n'
        for(ctrl = 0; ctrl < form_inputs.length; ctrl++)
        {        
            if(form_inputs[ctrl].type == "text"){
                ins_cmd_h += `${form_inputs[ctrl].name},\n`
                ins_cmd_v += `'{$data->${form_inputs[ctrl].name}}',\n`
                mysql_cmd += form_inputs[ctrl].name +" varchar(512),"
                if (form_inputs[ctrl].value != ""){
                    console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                }         
                else{
                    ctrl_val_count++
                }                  
            }  
            if(form_inputs[ctrl].type == "hidden"){
                ins_cmd_h += `${form_inputs[ctrl].name},\n`
                ins_cmd_v += `'{$data->${form_inputs[ctrl].name}}',\n`
                mysql_cmd += form_inputs[ctrl].name +" varchar(512),"
                if (form_inputs[ctrl].value != ""){
                    console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                }         
                else{
                    ctrl_val_count++
                }                  
            }  
            if(form_inputs[ctrl].type == "date"){
                ins_cmd_h += `${form_inputs[ctrl].name},\n`
                ins_cmd_v += `'{$data->${form_inputs[ctrl].name}}',\n`
                mysql_cmd += form_inputs[ctrl].name +" date,"
                if (form_inputs[ctrl].value != ""){
                    console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                }         
                else{
                    ctrl_val_count++
                }                  
            }  
            if(form_inputs[ctrl].type == "checkbox"){
                if(array_input_radio.find(
                    (objctrl)=>{
                        return objctrl === form_inputs[ctrl].name 
                    })
                )
                {
                }else{
                    array_input_radio.push(form_inputs[ctrl].name)
                    ins_cmd_h += `${form_inputs[ctrl].name},\n`
                    ins_cmd_v += `'{$data->${form_inputs[ctrl].name}}',\n`
                    mysql_cmd += form_inputs[ctrl].name +" varchar(512),"
                    if (form_inputs[ctrl].selected){
                        console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                    }         
                    else{
                        ctrl_val_count++
                    }                  
                }
            }    
            if(form_inputs[ctrl].type == "number"){
                ins_cmd_h += `${form_inputs[ctrl].name},\n`
                ins_cmd_v += `{$data->${form_inputs[ctrl].name}},\n`
                mysql_cmd += form_inputs[ctrl].name +" int,"
                if (form_inputs[ctrl].value != "0"){
                    console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                }         
                else{
                    ctrl_val_count++
                }                  
            } 
            if(form_inputs[ctrl].type == "time"){
                ins_cmd_h += `${form_inputs[ctrl].name},\n`
                ins_cmd_v += `'{$data->${form_inputs[ctrl].name}}',\n`
                mysql_cmd += form_inputs[ctrl].name +" varchar(16),"
                if (form_inputs[ctrl].value != ""){
                    console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                }         
                else{
                    ctrl_val_count++
                }                  
            }       
            if(form_inputs[ctrl].type == "radio"){
                if(array_input_radio.find(
                    (objctrl)=>{
                        return objctrl === form_inputs[ctrl].name 
                    })
                )
                {
                }else{
                    array_input_radio.push(form_inputs[ctrl].name)
                    ins_cmd_h += `${form_inputs[ctrl].name},\n`
                    ins_cmd_v += `{$data->${form_inputs[ctrl].name}},\n`
                    mysql_cmd += form_inputs[ctrl].name +" int,"
                    if (form_inputs[ctrl].checked){
                        console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                    }         
                    else{
                        ctrl_val_count++
                    }                  
                }
            }  
            if(form_inputs[ctrl].type == "textarea"){
                ins_cmd_h += `${form_inputs[ctrl].name},\n`
                ins_cmd_v += `'{$data->${form_inputs[ctrl].name}}',\n`
                mysql_cmd += form_inputs[ctrl].name +" varchar(1024),"
                if (form_inputs[ctrl].value != ""){
                    console.log(`{"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}"},`) 
                }         
                else{
                    ctrl_val_count++
                }                  
            }  
        }  
        mysql_cmd = mysql_cmd.substring(0, mysql_cmd.length - 1) + ")"  
        console.log(ctrl_val_count)
        console.log(mysql_cmd)
        ins_cmd_h = ins_cmd_h.substring(0, ins_cmd_h.trim().length-1)+")\n"
        ins_cmd_v = ins_cmd_v.substring(0, ins_cmd_v.trim().length-1)+")"
        saveContentToFile(`<?php
        require_once("../Constants.php");
        require_once("../Db.php");
        $f_data = file_get_contents("php://input"); 
        $data = json_decode($f_data);
        $ins =
        "${ins_cmd_h}${ins_cmd_v}";\n
        $host = 'localhost';
        $db = 'enclosure';
        $user = 'enclosure';
        $password = 'enclo@2023';
        $conn = new mysqli($host, $user, $password, $db);

        if ($conn->query($ins) === TRUE){
            echo insertionsuccess;
        }else{           
            echo insertionerror. " Error: " . $ins . "<br>" . $conn->error;
        }?>`, 
        `${formId}.php`)
    }
}
/*Require FileSaver.js */
const saveContentToFile = (content, file_name)=>{
    var blob = new Blob([content], {
        type: "text/plain;charset=utf-8",
     });
     saveAs(blob, file_name);
}
