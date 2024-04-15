const FormToJson = (formId, ev, callbackFunction)=>{
    ev.preventDefault()
    const form = document.getElementById(formId)
    if(form.length>0){
        form_inputs = document.getElementById(formId)//form.getElementsByTagName("input")
        var array_input_radio =[]
        var array_input_checkbox =[]
        var jsDataStr = ""
        for(ctrl = 0; ctrl < form_inputs.length; ctrl++)
        {        
            if(form_inputs[ctrl].type == "text"){
                jsDataStr +=`"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}",`
            }  
            if(form_inputs[ctrl].type == "date"){
                jsDataStr +=`"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value || null}",`
            }  
            if(form_inputs[ctrl].type == "number"){
                jsDataStr +=`"${form_inputs[ctrl].name}":${form_inputs[ctrl].value},`
            } 
            if(form_inputs[ctrl].type == "hidden"){
                jsDataStr +=`"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}",`
            }  
            if(form_inputs[ctrl].type == "time"){
                jsDataStr +=`"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}",`
            }     
            if(form_inputs[ctrl].type == "checkbox"){
                if(array_input_checkbox.find(
                    (objctrl)=>{
                        return objctrl === form_inputs[ctrl].name 
                    })
                )
                {
                }else{
                    array_input_checkbox.push(form_inputs[ctrl].name)
                    control = `input[name = ${form_inputs[ctrl].name}]:checked`
                    r_val = document.querySelectorAll(control).length
                    sub_json=""
                    if(r_val > 0){
                        cb_ctrls=document.querySelectorAll(control)
                        cb_ctrls.forEach(cb=>(
                            sub_json += `${cb.id},`
                        ))
                        sub_json=sub_json.substring(0, sub_json.length-1)
                    }
                    else{
                        r_val = -1
                    }
                    jsDataStr +=`"${form_inputs[ctrl].name}":"${sub_json}",` 
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
                    control = `input[name = ${form_inputs[ctrl].name}]:checked`
                    r_val = document.querySelectorAll(control).length
                    if(r_val > 0){
                        r_val = document.querySelector(control).value
                    }
                    else{
                        r_val = -1
                    }
                    jsDataStr +=`"${form_inputs[ctrl].name}":"${r_val}",` 
                }
            }  
            if(form_inputs[ctrl].type == "textarea"){
                jsDataStr +=`"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}",`
            }  
            if(form_inputs[ctrl].type == "select-one"){
                jsDataStr +=`"${form_inputs[ctrl].name}":"${form_inputs[ctrl].value}",`
            }              
        }  
        jsDataStr = "{"+ jsDataStr.substring(0, jsDataStr.length - 1)+ "}"
        callbackFunction(jsDataStr)
    }
}
function Guia_D_C_Save(data){
    d = JSON.parse(data)

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./Db/Guia_despacho.php");
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            console.log(xhr.status);
            msg = JSON.parse(xhr.responseText)
            document.getElementById("id_reg").innerText = msg.id
            document.getElementById("id").value = msg.id
            document.getElementById("_id").value = msg.id
            document.getElementById('guia').readOnly = true;
            document.getElementById('proveedor').disabled = true;
            document.getElementById('fecha_recepcion').readOnly = true;
            alert(msg.mensaje);
        }else{
            console.log(xhr.statusText);
        }
    };
    xhr.send(data);
}
function Guia_D_D_Save(data){
    d = JSON.parse(data)
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./Db/Guia_despacho_D.php");
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            msg = JSON.parse(xhr.responseText)
            var selesp = document.getElementById("especie");
            var selpro = document.getElementById("producto");
            var selcon = document.getElementById("conservacion");
            var selenv = document.getElementById("envase");
            var newText_1 = selesp.options[selesp.selectedIndex].text;
            var newText_2 = selpro.options[selpro.selectedIndex].text;
            var newText_3 = selcon.options[selcon.selectedIndex].text;
            var newText_4 = selenv.options[selenv.selectedIndex].text;
            var newText_5 = document.getElementById("unidades").value;
            var newText_6 = document.getElementById("peso_neto").value;
            var newRowIH = `<tr id=\"tr_${msg.id}\">
            <td>${newText_1}</td>
            <td>${newText_2}</td>
            <td>${newText_3}</td>
            <td>${newText_4}</td>
            <td>${newText_5}</td>
            <td>${newText_6}</td>
            <td><a onclick="delGuItem(${msg.id})" class=\"icon-delete20x20\"></a></td>
            </tr>`;
            $(`#tbDetalleGuia tr#tr_${msg.id}`).remove();
            $('#tbDetalleGuia > tbody:last-child').append(newRowIH);
        }
    };
    xhr.send(data);
}
function Ot_Save(data){
    d = JSON.parse(data)
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "./Db/Ot.php");
    xhr.setRequestHeader("Accept", "application/json");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            msg = JSON.parse(xhr.responseText)
            document.getElementById("id_ot").value = msg.id
            document.getElementById("id").value = msg.id
            // document.getElementById("id_guia").value = msg.id
            document.getElementById('guia').readOnly = true;
            document.getElementById('proveedor').disabled = true;
            alert(msg.mensaje);
        }else{
            console.log(xhr.statusText);
        }
    };
    xhr.send(data);
}
function delGuItem(id){
    if(confirm("¿Confirma que desea borrar el registro seleccionado?")){
        let xhr = new XMLHttpRequest();
        var url = `./Db/DelItemGuia.php?id=${id}`;
        xhr.open('GET', url);
        xhr.send();
        xhr.onload = function() {
            if (xhr.status != 200) {
                alert(`Error ${xhr.status}: ${xhr.statusText}`);
            } else {
                $(`#tbDetalleGuia tbody #tr_${id}`).remove()
                alert(xhr.response);
            }
        };
        xhr.onerror = function() {
            alert("Solicitud fallida");
        };
        $('#btnBuscar').trigger('click');
    }
}
function getGuiaProveedor(idProveedor, n_guia){
    id_proveedor = idProveedor || 0;
    nguia = n_guia || 0
    if(id_proveedor == 0 || nguia == 0){
        alert("Debe indicar proveedor y/o guía")
        return;
    }
    let xhr = new XMLHttpRequest();
    var url = `./Db/GetGuiaProveedor.php?idProveedor=${idProveedor}&n_guia=${n_guia}`;
    xhr.open('GET', url);
    xhr.send();
    xhr.onload = function() {
        if (xhr.status != 200) {
            alert(`Error ${xhr.status}: ${xhr.statusText}`);
        } else {
            if(xhr.response == 0){
                alert("No se encontró registros para la consulta.");
            }else{
                msg = JSON.parse(xhr.responseText)
                _id.value = msg[0].id_guia
                id_reg.textContent = msg[0].id_guia
                fecha_recepcion.value = msg[0].fecha_recepcion
                proveedor.disabled = true
                guia.readOnly = true
                declaracion_jurada.value = msg[0].decla_jurada
                declaracion_garantia.value = msg[0].decla_garantia
                origen.value = msg[0].id_origen
                nombre_origen.value = msg[0].origen
                $('#tbDetalleGuia > tbody').empty();
                for(i = 0; i < msg.length; i++){
                    showTablaGuia(msg[i])
                }
            }
        }
    };
    xhr.onerror = function() {
        alert("Solicitud fallida");
    };
}
function getDetalleGuia(idProveedor, n_guia){
    id_proveedor = idProveedor || 0;
    nguia = n_guia || 0
    if(id_proveedor == 0 || nguia == 0){
        alert("Debe indicar proveedor y/o guía")
        return;
    }
    let xhr = new XMLHttpRequest();
    var url = `./Db/GetGuiaProveedor.php?idProveedor=${idProveedor}&n_guia=${n_guia}`;
    xhr.open('GET', url);
    xhr.send();
    xhr.onload = function() {
        if (xhr.status != 200) {
            alert(`Error ${xhr.status}: ${xhr.statusText}`);
        } else {
            if(xhr.response == 0){
                alert("No se encontró registros para la consulta.");
            }else{
                $("#detalleGuia").html("");
                $("#detalleGuia").append(xhr.responseText);
            }
        }
    };
    xhr.onerror = function() {
        alert("Solicitud fallida");
    };
}
function soloNumeros(evt){
    var code = (evt.which) ? evt.which : evt.keyCode;
    
    if(code==8) {
      return true;
    } else if(code>=48 && code<=57) {
      return true;
    } else{
      return false;
    }
}
function showTablaGuia(msg){
    if(msg.id_guia_cab == 'undefine' || msg.id_guia_cab == null){
        return;
    }
    var newText_1 = msg.especie;
    var newText_2 = msg.producto;
    var newText_3 = msg.conservacion;
    var newText_4 = msg.envase;
    var newText_5 = msg.unidades;
    var newText_6 = msg.peso;
    var newRowIH = `<tr id=\"tr_${msg.id_reg}\">
    <td>${newText_1}</td>
    <td>${newText_2}</td>
    <td>${newText_3}</td>
    <td>${newText_4}</td>
    <td>${newText_5}</td>
    <td>${newText_6}</td>
    <td><a onclick="delGuItem(${msg.id_reg})" class=\"icon-delete20x20\"></a></td>
    </tr>`;
    $('#tbDetalleGuia > tbody:last-child').append(newRowIH);
}
function showDetalleGuia(msg){
    if(msg.id_guia_cab == 'undefine' || msg.id_guia_cab == null){
        return;
    }
    var newText_1 = msg.especie;
    var newText_2 = msg.producto;
    var newText_3 = msg.conservacion;
    var newText_4 = msg.envase;
    var newText_5 = msg.unidades;
    var newText_6 = msg.peso;
    var newRowIH = `<tr id=\"tr_${msg.id_reg}\">
    <td>${newText_1}</td>
    <td>${newText_2}</td>
    <td>${newText_3}</td>
    <td>${newText_4}</td>
    <td>${newText_5}</td>
    <td>${newText_6}</td>
    <td><input type=\"radio\" name=\"id_reg\" id=\"id_reg_${msg.id_reg}\" value=\"${msg.id_reg}\ disabled=true"></td>
    </tr>`;
    $('#tbDetalleGuia > tbody:last-child').append(newRowIH);
}
function getDetalleGuiaProveedor(idProveedor, n_guia){
    id_proveedor = idProveedor || 0;
    nguia = n_guia || 0
    if(id_proveedor == 0 || nguia == 0){
        alert("Debe indicar proveedor y/o guía")
        return;
    }
    let xhr = new XMLHttpRequest();
    var url = `./Db/GetGuiaProveedor.php?idProveedor=${idProveedor}&n_guia=${n_guia}`;
    xhr.open('GET', url);
    xhr.send();
    xhr.onload = function() {
        if (xhr.status != 200) {
            alert(`Error ${xhr.status}: ${xhr.statusText}`);
        } else {
            if(xhr.response == 0){
                alert("No se encontró registros para la consulta.");
            }else{
                for(i = 0; i < msg.length; i++){
                    showTablaGuia(msg[i])
                }
            }
        }
    };
    xhr.onerror = function() {
        alert("Solicitud fallida");
    };
}