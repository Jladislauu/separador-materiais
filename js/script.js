document.addEventListener('DOMContentLoaded', () => {
    let selectedMaterials = [];

    function loadMaterials() {
        fetch('listarMateriais.php')
            .then(response => response.json())
            .then(data => {
                let materialList = document.getElementById('material-list');
                data.forEach(material => {
                    let li = document.createElement('li');
                    li.className = 'list-group-item';
                    li.innerText = material.nome;
                    li.dataset.id = material.id;
                    li.onclick = function () {
                        $('#quantityModal').modal('show');
                        document.getElementById('addToList').dataset.id = material.id;
                    };
                    materialList.appendChild(li);
                });
            });
    }

    document.getElementById('addToList').onclick = function () {
        let id = this.dataset.id;
        let quantity = document.getElementById('quantityInput').value;
        if (quantity > 0) {
            selectedMaterials.push({ id, quantity });
            let selectedList = document.getElementById('selected-materials');
            let li = document.createElement('li');
            li.className = 'list-group-item';
            li.innerText = `Material ID: ${id}, Quantidade: ${quantity}`;
            selectedList.appendChild(li);
            $('#quantityModal').modal('hide');
        }
    };

    loadMaterials();
});
