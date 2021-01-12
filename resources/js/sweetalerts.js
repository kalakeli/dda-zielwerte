
// create a globally available toaster message to show in the upper right screen area
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});
window.Toast = Toast;

// eine stehenbleibende Meldung
const PersistantToast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: null
});
window.PersistantToast = PersistantToast;

// ein Eingabefenster fuer Überstunden / Urlaub
// const OvertimeSwal = Swal.fire({
//   title: 'Multiple inputs',
//   html:
//     '<input id="swal-input1" class="swal2-input">' +
//     '<input id="swal-input2" class="swal2-input">',
//   confirmButtonText:
//       '<i class="fas fa-save"></i>&nbsp;&nbsp;speichern',
//   focusConfirm: false,
//   preConfirm: () => {
//     return [
//       document.getElementById('swal-input1').value,
//       document.getElementById('swal-input2').value
//     ]
//   }
// })
// window.OvertimeSwal = OvertimeSwal;
