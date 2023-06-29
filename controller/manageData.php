<?php
    function showInvoice(){
        require 'dbconnect.php';
        $query = "SELECT customer.fullname, customer.email, customer.phone_number, customer.address, customer.country, invoice.id, invoice.total_price, invoice.cust_id  FROM customer INNER JOIN invoice ON customer.id = invoice.cust_id";
        $result = $conn->query($query);
        if ($result) {
            
            $noTable = 1;
            while($row = $result->fetch_array()){
              echo "
                <tr class=\"text-center align-middle\">
                    <td>
                        $noTable
                    </td>
                    <td>
                        ".$row['fullname']."
                    </td>
                    <td>
                        ".$row['email']."
                    </td>
                    <td>
                        ".$row['phone_number']."
                    </td>
                    <td>
                        ".$row['address']."
                    </td>
                    <td>
                        ".$row['country']."
                    </td>
                    <td>
                        ".$row['total_price']."
                    </td>
                    <td>
                        <button data-id=\"".$row['cust_id']."\" data-inv=\"".$row['id']."\" data-table=\"invoice\" class=\"btn btn-primary btn-sm viewBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\">View</button>
                    </td>
                </tr>
              ";
              ++$noTable;
            }
        } 


        // close connection 
        $conn->close();
    }

    function showCustomer(){
        require 'dbconnect.php';
        $query = "SELECT * FROM customer";
        $result = $conn->query($query);
        if ($result) {
            $noTable = 1;
            while($row = $result->fetch_array()){
              echo "
                <tr class=\"text-center align-middle\">
                    <td>
                        $noTable
                    </td>
                    <td>
                        ".$row['fullname']."
                    </td>
                    <td>
                        ".$row['email']."
                    </td>
                    <td>
                        ".$row['phone_number']."
                    </td>
                    <td>
                        ".$row['address']."
                    </td>
                    <td>
                        ".$row['city']."
                    </td>
                    <td>
                        ".$row['country']."
                    </td>
                    <td>
                        ".$row['postal_code']."
                    </td>
                    <td>
                    <button data-id=\"".$row['id']."\" data-table=\"customer\" class=\"btn btn-primary btn-sm editBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\">Edit</button>
                    </td>
                </tr>
              ";
              ++$noTable;
            }
        } 

        // close connection 
        $conn->close();
    }

    function showProduct(){
        require 'dbconnect.php';
        $query = "SELECT * FROM product";
        $result = $conn->query($query);
        if ($result) {
            $noTable = 1;
            while($row = $result->fetch_array()){
              echo "
                <tr class=\"text-center align-middle\">
                    <td>
                        $noTable
                    </td>
                    <td>
                        ".$row['product_name']."
                    </td>
                    <td>
                        ".$row['product_desc']."
                    </td>
                    <td>
                        ".$row['product_price']."
                    </td>
                    <td width=\"180\">
                        <img class=\"img-thumbnail\" src=\"data:image/jpg;charset=utf8;base64,".base64_encode($row['product_pict'])."\" alt=\"Product Image\">
                    </td>
                    <td>
                    <button data-id=\"".$row['id']."\" data-table=\"product\" class=\"btn btn-primary btn-sm editBtn\" data-bs-toggle=\"modal\" data-bs-target=\"#showModal\">Edit</button>
                    </td>
                </tr>
              ";
              ++$noTable;
            }
        } 

        // close connection 
        $conn->close();
    }
?>