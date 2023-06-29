const modalView = document.querySelector('.modal-body');
const invoiceBtn = document.querySelectorAll('.viewBtn');
const editBtn = document.querySelectorAll('.editBtn');
const deleteBtn = document.getElementById('deleteBtn');

invoiceBtn.forEach((btn, index) => {
    btn.addEventListener('click', (e) =>{
        e.preventDefault();
        let id = invoiceBtn[index].dataset.id;
        let inv = invoiceBtn[index].dataset.inv;
        let table = invoiceBtn[index].dataset.table;
        const url = './controller/modalInvoice.php';
        let formData = new FormData();
        formData.append('id', id);

        //Fetch data from server
        fetch(url, {
            method: 'POST',
            body: formData,
        }).then(response => response.text())
        .then(body => {
            modalView.innerHTML = body;
        })
        
        //Delete button
        deleteBtn.addEventListener('click', () =>{
            if(window.confirm("Are You Sure Want to Delete?")){
                location.href = `./controller/delete.php?id=${inv}&tableName=${table}`;
            }
        })
    })

})

editBtn.forEach((btn, index) => {
    btn.addEventListener('click', (e) =>{
        e.preventDefault();
        let id = editBtn[index].dataset.id;
        let table = editBtn[index].dataset.table;
        if (table == "customer") {
            const url = './controller/modalCustomer.php';
            let formData = new FormData();
            formData.append('id', id);

            fetch(url, {
                method: 'POST',
                body: formData,
            }).then((response) => response.text()).then(body => {
                modalView.innerHTML = body;
            })

            deleteBtn.addEventListener('click', () =>{
                if(window.confirm("Are You Sure Want to Delete?")){
                    location.href = `./controller/delete.php?id=${id}&tableName=${table}`;
                }
            })
        }
        if (table == "product") {
            const url = './controller/modalProduct.php';
            let formData = new FormData();
            formData.append('id', id);

            fetch(url, {
                method: 'POST',
                body: formData,
            }).then((response) => response.text()).then(body => {
                modalView.innerHTML = body;
            })

            deleteBtn.addEventListener('click', () =>{
                if(window.confirm("Are You Sure Want to Delete?")){
                    location.href = `./controller/delete.php?id=${id}&tableName=${table}`;
                }
            })
        }
    })
})