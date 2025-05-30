const create = document.getElementById('create-form');
const edit = document.getElementById('edit-form');
const CreateButton = document.getElementById('create-button');
const EditButton = document.getElementById('edit-button');

CreateButton.addEventListener('click', createForm);
EditButton.addEventListener('click', editForm);

function createForm() {
    create.hidden = false;
    edit.hidden = true;
}

function editForm() {
    create.hidden = true;
    edit.hidden = false;
}