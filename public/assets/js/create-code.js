

// $('input[type=checkbox]').on('change', function() {
//     if ($(this).is(':checked') ) {
//         $('#num_redentions').prop("disabled", true).val("");
//         document.getElementById("num_redentions").required = false;
//         document.getElementById("check_unlimited").value = 1;
//     } else {
//         document.getElementById('num_redentions').disabled = false;
//         document.getElementById("num_redentions").required = true;
//         document.getElementById("check_unlimited").value = 0;
//     }
// });

// function validateDiscount() {
//     let typediscount = $('#discount_type').val();
//     let amount = $('#discount').val();

//     if (typediscount == 1 && amount > 100) {
//         Swal.fire({
//             position: 'center',
//             icon: 'warning',
//             title: 'El monto del descuento no puede ser mayor al 100%',
//             showConfirmButton: false,
//             timer: 2000
//         });
//     }
// }

// Función para validar si existe el programa de venta y cargar las redes medicas
// $("#validateSalesProgram").click(function() {
//     // $(this).text('Validando...');
//     let name = $('#sales_program').val();
//     if (name == null || name == '') {
//         Swal.fire({
//             title: 'Debe ingresar un programa de venta',
//             icon: 'error',
//             showConfirmButton: false,
//             timer: 2000
//         });
//         return false;
//     }

//     this.disabled = true;
//     // $('#spinnerpv').removeClass('spinnershowpv');
//     // add spinner to button
//     $(this).html(
//         `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" id="spinnerpv"></span>Validar`
//     );
//     document.getElementById("medicalnetworks").innerHTML= "";

//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         type: "POST",
//         url: '/validate-sales-program',
//         data: {
//             name : $('#sales_program').val()
//         },
//         dataType: 'json',
//         success: function (data) {
//             if (data.status == false) {
//                 Swal.fire({
//                     title: data.msg,
//                     icon: 'info',
//                     showConfirmButton: false,
//                     timer: 3000
//                 });

//                 // document.querySelector('#medicalnetworks').disabled = true;
//                 document.querySelector('#validateNetwork').disabled = true;
//                 document.getElementById("medicalnetworks").innerHTML= "";
//             }

//             if (data.status && data.total > 0) {
//                 document.getElementById("medicalnetworks").innerHTML= "";
//                 select = document.getElementById("medicalnetworks");
//                 for(i = 0; i <= data.total-1; i++){
//                     option = document.createElement("option");
//                     option.value = data.data[i].idRed;
//                     option.text = data.data[i].nomRed;
//                     select.appendChild(option);
//                 }
//                 Swal.fire({
//                     title: 'Las redes médicas han sido cargadas.',
//                     icon: 'success',
//                     showConfirmButton: false,
//                     timer: 2000
//                 });

//                 document.querySelector('#medicalnetworks').disabled = false;
//                 document.querySelector('#validateNetwork').disabled = false;
//             }

//             if (data.status && data.total == 0) {
//                 Swal.fire({
//                     title: data.msg,
//                     icon: 'info',
//                     showConfirmButton: false,
//                     timer: 2000
//                 });
//             }

//             $('span[id^="spinnerpv"]').remove();
//             document.querySelector('#validateSalesProgram').disabled = false;
//         },
//         error: function (data) {
//             console.log(data);
//         }
//     });
// });

// // Función para validar las redes médicas
// $("#validateNetwork").click(function() {
//     let medicalNetworks = $('#medicalnetworks').val();
//     if (medicalNetworks == null || medicalNetworks == '') {
//         Swal.fire({
//             title: 'Debe seleccionar una red médica',
//             icon: 'error',
//             showConfirmButton: false,
//             timer: 2000
//         });
//         return false;
//     }

//     this.disabled = true;
//     $('#spinnernetwork').removeClass('spinnershownetwork');
//     document.getElementById("providers").innerHTML= "";

//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         type: "POST",
//         url: '/get-medical-network-providers',
//         data: {
//             medicalNetworks : medicalNetworks
//         },
//         dataType: 'json',
//         success: function (data) {
//             if (data.total == 0) {
//                 Swal.fire({
//                     title: data.msg,
//                     icon: 'error',
//                     showConfirmButton: false,
//                     timer: 2000
//                 });
//                 return false;
//             }
//             if (data.providers == 0) {
//                 Swal.fire({
//                     title: data.msg,
//                     icon: 'error',
//                     showConfirmButton: false,
//                     timer: 2000
//                 });
//                 return false;
//             } else {
//                 select = document.getElementById("providers");
//                 for(i = 0; i <= data.total-1; i++){
//                     option = document.createElement("option");
//                     option.value = data.data[i].idProveedor;
//                     option.text = data.data[i].nomProveedor;
//                     select.appendChild(option);
//                 }
//                 Swal.fire({
//                     title: 'Los proveedores han sido cargados.',
//                     icon: 'success',
//                     showConfirmButton: false,
//                     timer: 2000
//                 });

//                 document.querySelector('#validateNetwork').disabled = false;
//                 document.querySelector('#providers').disabled = false;
//                 $('#spinnernetwork').addClass('spinnershownetwork');
//             }
//         },
//         error: function (data) {
//             console.log('hola');
//         }
//     });
// });
