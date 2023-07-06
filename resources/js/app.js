import './bootstrap';
import jQuery from 'jquery';
import Choices from 'choices.js';
import Alpine from 'alpinejs';
import swal from 'sweetalert2';

window.Alpine = Alpine;
window.swal = swal; 

window.choices=(Element)=>{
    return new Choices(Element, {
        maxItemCount: 8,
        removeItemButton: true,
    });
}

Alpine.start();



