

const table = document.getElementById('table');


const checkType = ()=>{
    const container_form = document.getElementById('form_type');
    const types = document.getElementById('types');

    container_form.classList.replace('hidden','block');

    if (types.value == "Businessaccount") {
        container_form.children[0].setAttribute('placeholder', 'BusinessAccount_Frais')
        container_form.children[0].setAttribute('name', 'BusinessAccount_Frais')
        table.value = 'BusinessAccount';
        
    }else if(types.value == "Currentaccount"){
        
        container_form.children[0].setAttribute('placeholder', 'Retraits')
        container_form.children[0].setAttribute('name', 'Retraits')
        table.value = 'currentaccount';

    }else{
        container_form.children[0].setAttribute('placeholder', 'Taux')
        container_form.children[0].setAttribute('name', 'Taux')
        table.value = 'savingsaccount';

    }
}
